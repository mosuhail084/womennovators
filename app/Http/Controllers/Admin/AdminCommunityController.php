<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Influencer;
use App\Models\Community;
use Illuminate\Http\Request;
use App\Mail\Mailinfluencer;
use App\Mail\Communityapprovedmail;
use App\Mail\CommunityRejectedmail;
use Illuminate\Support\Facades\DB;
use Mail;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class AdminCommunityController extends Controller
{
    /**
     * Display a listing of the ourteam.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    //pending request
    {
        $communities = DB::table('communities')->where(['status' => 2])->get();
        // dd($ourteamDatas);
        return view('backEnd.community.index', compact('communities'));
    }


    public function accepted_request()
    {
        $communities = DB::table('accepted_communities')->where(['status' => 1])->get();
        // dd($ourteamDatas);
        return view('backEnd.community.accepted_request', compact('communities'));
    }

    /**
     * Show the form for creating a new ourteam.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$city = city::latest()->get();
        return view('backEnd.community.create');
    }

    /**
     * Store a newly created ourteam in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        try {
            $data = $request->except(['_token']);

            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $destination = 'backEnd/image/community_image/';
                $file->move($destination, $filename);
                $data['logo'] = $filename;
            }
            $data['created_by'] = Auth::user()->id;
            $data['user_id'] = Auth::user()->id;
            $data['status'] = 1;
            // dd($data);
            DB::table('accepted_communities')->insert($data);
            $output = array('msg' => 'Create Successfully');
            return back()->with('success', $output);
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
    }
    /**
     * Show the form for editing the specified ourteam.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id = '')
    {
        // $city = city::latest()->get();
        $communities =  DB::table('accepted_communities')->where(['id' => $id])->first();
        //dd($id);
        return view('backEnd.community.edit', compact('id', 'communities'));
    }

    /**
     * Update the specified ourteam in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = '')
    {




        try {
            $data = $request->except(['_token', '_method']);



            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('backEnd/image/community_image/', $filename);

                $data['logo'] = $filename;
            }

            // Community::find($id)->update($data);
            DB::table('accepted_communities')->where(['id' => $id])->update($data);

            $output = array('msg' => 'Updated Successfully');
            return back()->with('success', $output);
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
    }

    /**
     * Remove the specified ourteam from storage.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = '')
    {
        try {

            DB::table('accepted_communities')->where(['id' => $id])->delete();
            $output = array('msg' => 'Deleted Successfully');
            return back()->with('success', $output);
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
    }
    public function ChangeStatus(Request $request, $status, $id)

    {
        //dd($request->session()->get('FRONT_USER_LOGIN_ID'));
        Log::info($request->all());

        $communities = Community::where('id', $id)->first();
        //dd($communities);
        // We have to insert accepted data into accepted_comm_request

        $communities->status = $request->status;
        if ($request->session()->get('FRONT_USER_LOGIN_ID')) {
            $user_id =  $request->session()->get('FRONT_USER_LOGIN_ID');
        } else {
            $user_id = Auth::user()->id;
        }
        $user_data = DB::table('users')->where(['id' => $user_id ])->first();
        //dd($user_data);

        if ($request->status == 1) {
            DB::table('accepted_communities')->insert([
                'name' => $communities->name,
                'followers' => $communities->followers,
                'city' => $communities->city,
                'country' => $communities->country,
                'about' => $communities->about,
                'industry' => $communities->industry,
                'led_by' => $communities->led_by,
                'led_by_id' => $communities->led_by_id,
                'logo' => $communities->logo,
                'page_url' => $communities->page_url,
                'tag' => $communities->tag,
                'status' => 1,
				'followers' => 0,
                'user_id' => $user_id,
                'created_by' => $request->session()->get('FRONT_USER_LOGIN_ID'),
            ]);
            $data1 = array(
                'name' => $request->name,
            );
                Mail::to($user_data->email)->send(new Communityapprovedmail($data1));
        }
        else{
            $data2 = array(
                'name' => $request->name,
            );
                Mail::to($user_data->email)->send(new CommunityRejectedmail($data2));
        }

        $communities->save();



        return redirect('/admin/community');
    }
}
