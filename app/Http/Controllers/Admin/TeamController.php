<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Role;
use App\Models\Title;
use Image;
use DB;
use Hash;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()   
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $teamDatas = Admin::where('id','!=','1')->latest()->get();
        return view('backEnd.team.index',compact('teamDatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    $title = Title::latest()->get();
   // dd($title );
        $teamrole = Role::get();
        return view('backEnd.team.create',compact('teamrole','title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        //dd($request);
            $request->validate([
                'title_id' => 'required',
                'team_member_name' => 'required',
                //'profilepic' => 'required',
                'mobile_no' => 'required',
                'email' => 'required',
                 'role_id' => 'required',
                'status' => 'required'
            ]);

            try {
                $data=$request->except(['_token']);
                if($request->hasFile('profilepic'))
                {
                    $avatar = $request->file('profilepic');
                    $filename = time().rand(1,100).'.'.$avatar->getClientOriginalExtension();
                    Image::make($avatar)->resize(800, 600)->save('backEnd/image/teammember/profilepic/' . $filename);
                    $data['profilepic']=$filename;
                }
                Admin::Create($data);
                //dd($data);
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
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $Team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $Team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $Team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = Title::latest()->get();
        $teamrole = Role::latest()->get();
        $team = Admin::where('id', $id)->with('role')->first();
//dd($team);
        return view('backEnd.team.edit',compact('id','team','title','teamrole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $Team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = '')
    {
       // dd($request);
       $request->validate([
        'title_id' => 'required',
        'team_member_name' => 'required',
        //'team_member_name' => 'required',
        'mobile_no' => 'required',
        'email' => 'required',
         'role_id' => 'required',
        'status' => 'required'
    ]);

        try {
            $data=$request->except(['_token']);
            Admin::find($id)->update($data);
            $output = array('msg' => 'Updated Successfully');
            return redirect('admin/team')->with('success', $output);
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
    }
    public function resetPassword($id)
    {
       // dd($id);
        $teammember = Admin::where('id', $id)->first();
        return view('backEnd.team.resetpassword', compact('id', 'teammember'));
    }
    public function passwordUpdate(Request $request, $id = '')
    {
         //dd($id);
          $request->validate([
              'email' => 'required',
              'password' => 'required',
              'confirm_password' => 'required|same:password',
          ]);
  
          try {
              $date = date("Y-m-d") ;
             // $teammemberid =  Admin::where('id', $id)->select('id')->pluck('id')->first();
             //dd($teammemberid);
              DB::table('admins')->where('id', $id)->update([ 
                  'password'         =>  Hash::make($request->password) ,
                  'updated_at'         =>  $date
                  ]);
                  $output = array('msg' => 'Password Updated Successfully');
                  return redirect('admin/team')->with('success', $output);
          } catch (Exception $e) {
              DB::rollBack();
              Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
              report($e);
              $output = array('msg' => $e->getMessage());
              return back()->withErrors($output)->withInput();
          }
      }
    /**
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $Team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = '')
    {
           try {
            Admin::destroy($id);
               $output = array('msg' => 'Deleted Successfully');
               return redirect('admin/Team')->with('statuss', $output);
           } catch (Exception $e) {
               DB::rollBack();
               Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
               report($e);
               $output = array('msg' => $e->getMessage());
               return back()->withErrors($output)->withInput();
           }
       }

}