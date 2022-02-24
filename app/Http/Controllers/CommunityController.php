<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Newcommunitymail;
use DateTime;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Rels;

class CommunityController extends Controller
{
    public function index()
    {
        $countries = DB::table('countries')->get();
        $cities = DB::table('cities')->get();
        $industries = DB::table('industries')->get();
        return view('we.create-community-main', compact('countries', 'cities', 'industries'));
    }
    public function insert(Request $request)
    {
        // DB::table('communities')->insert([
        //     'name'=>$request->name,
        //     'city'=>$request->city,
        //     'country'=>$request->country, 
        //     'industry'=>$request->industry,
        // ]);
        // $file=$request->file('image');
        // $extension=$file->getClientOriginalExtension();
        // $filename=time().'.'.$extension;
        // $file->move(base_path().'/public/we/community/logo',$filename);


        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(base_path() . '/backEnd/image/community_image', $filename);
        } else {
            $filename = 'community.jpg';
        }

        //dd($filename);
        // DB::table('communities')->insert([
        //     'logo'=>$filename,
        // ]);
        DB::table('communities')->insert([
            'name' => $request->name,
            'city' => $request->city,
            'country' => $request->country,
            'about' => $request->about,
            'industry' => $request->industry,
            'logo' => $filename,
            'user_id' => $request->session()->get('FRONT_USER_LOGIN_ID'),
        ]);
        $data = array(
            'name' => $request->name,
        );
        Mail::to('mosuhail084@gmail.com')->send(new Newcommunitymail($data));
        return redirect()->route('we.create_community_loggedin_stage_2');
    }

    // * For Community details page and Community settings page
    public function community(Request $request, $com_id)
    { //dd($com_id);
        $community = DB::table('accepted_communities')->where('id', $com_id)->first();
        $user_id = session()->get('FRONT_USER_LOGIN_ID');

        $user_id =  $request->session()->get('FRONT_USER_LOGIN_ID');
        $check = DB::table('community_followers')->where(['user_id' => $user_id, 'community_id' => $com_id])->first();

        if ($check) {
            $followed = true;
        } else {
            $followed = false;
        }

        $creater = DB::table('accepted_communities')->where(['user_id' => $user_id, 'id' => $com_id])->first();

        // *  If creator then show Community settings page
        if ($creater) {
            return view("we.empty-community", ['community' => $community]);
        }

        $all_post = DB::table('community_post')->where(['community_id' => $com_id, 'status' => 1])->get();
        $all_poll = DB::table('community_poll')->where(['community_id' => $com_id, 'status' => 1])->get();

        return view('we.community-page', ['community' => $community, 'followed' => $followed, 'all_post' => $all_post, 'all_poll' => $all_poll]);
    }

    public function community_event(Request $request, $com_id)
    {
        $community = DB::table('accepted_communities')->where('id', $com_id)->first();
        $user_id = session()->get('FRONT_USER_LOGIN_ID');

        $user_id =  $request->session()->get('FRONT_USER_LOGIN_ID');
        $check = DB::table('community_followers')->where(['user_id' => $user_id, 'community_id' => $com_id])->first();

        if ($check) {
            $followed = true;
        } else {
            $followed = false;
        }

        $creater = DB::table('accepted_communities')->where(['user_id' => $user_id, 'id' => $com_id])->first();


        if ($creater) {
            return view("we.event_manage", ['community' => $community]);
        }

        $normal_event = DB::table('community_normal_event')->where(['community_id' => $com_id, 'status' => 1])->get();


        return view('we.community-event-page', ['community' => $community, 'followed' => $followed, 'normal_event' => $normal_event]);
	}

    public function community_setting($com_id)
    {
        $community = DB::table('accepted_communities')->where('id', $com_id)->first();
        $countries = DB::table('countries')->get();
        $industries = DB::table('industries')->get();
        return view('we.edit-community-details', compact('community', 'countries', 'industries'));
    }
    // public function insert(Request $request){
    //    dd($request) ;
    // }
    public function update(Request $request, $id = '')
    {
        //dd($id);
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
	public function about(Request $request, $com_id)
    {
		
        $about = DB::table('accepted_communities')->where(['id' => $com_id])->select('about')->first();
        $community = DB::table('accepted_communities')->where('id', $com_id)->first();
        $user_id = session()->get('FRONT_USER_LOGIN_ID');

        $user_id =  $request->session()->get('FRONT_USER_LOGIN_ID');
        $check = DB::table('community_followers')->where(['user_id' => $user_id, 'community_id' => $com_id])->first();

        if ($check) {
            $followed = true;
        } else {
            $followed = false;
        }

        $creater = DB::table('accepted_communities')->where(['user_id' => $user_id, 'id' => $com_id])->first();

        if ($creater) {
            return view("we.about_community", ['community' => $community]);
        }
		$all_post = DB::table('community_post')->where(['community_id' => $com_id, 'status' => 1])->get();
		 $all_poll = DB::table('community_poll')->where(['community_id' => $com_id, 'status' => 1])->get();
        return view('we.community-page', ['community' => $community, 'followed' => $followed, 'all_post' => $all_post, 'all_poll' => $all_poll]);
        //return view("we.about_community", ['about' => $about]);
    }
}
