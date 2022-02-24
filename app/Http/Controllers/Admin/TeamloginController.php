<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Teammember;
use App\Models\Role;
use App\Models\title;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Admin;
use DB;

class TeamloginController extends Controller
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
        $teamDatas = Admin::where('id','!=',1)->latest()->get();
        return view('backEnd.teamlogin.index',compact('teamDatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {     
        //echo "hi";die;
        $teammemberlist = Admin::where('status','0')->get();
        //dd($teammemberlist);
      
        return view('backEnd.teamlogin.create',compact('teammemberlist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
       // dd($request);
        $request->validate([
            'password' => "required"
        ]);

        try  {
            $memberid=Admin::where('email',$request->teammember_id)->select('id','role_id')->first();
          //dd($memberid->id);
            $data=$request->except(['_token']);
           /* $data['password']=  Hash::make($request->password);
           // $data['email']=$request->email;
            // $data['teammember_id']= $memberid->id;
           //  $data['role_id']= $memberid->role_id;
            $data['status']=1;
           // dd($data);
            $data = Admin::Create($data);
            /*DB::table('teammembers')->where('id',$memberid->id)->update([	
                'status'         =>     '1', 
                 'updated_at' => date('y-m-d')     
                 ]);*/

                 DB::table('admins')->where('id',$memberid->id)->update([	
                    'status'         =>     '1', 
                    'password'         =>     Hash::make($request->password), 
                     'updated_at' => date('y-m-d')     
                     ]);
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
    public function findlogin(Request $request){


        $p=Admin::select('email')->where('registred_company_name',$request->aircraft_id)->first();
    
        return response()->json($p);
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
        return view('backEnd.teamlogin.edit',compact('id','team','title','teamrole'));
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
        'team_member_name' => 'required',
        'mobile_no' => 'required',
        'emailid' => 'required',
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
        // dd($id);
          $request->validate([
              'emailid' => 'required',
              'password' => 'required',
              'confirm_password' => 'required|same:password',
          ]);
  
          try {
              $date = date("Y-m-d") ;
              $teammemberid =  Admin::where('id', $id)->select('id')->pluck('id')->first();
           //   dd($teammemberid);
              DB::table('users')->where('teammember_id',$teammemberid)->update([ 
                  'password'         =>  Hash::make($request->password) ,
                  'updated_at'         =>  $date
                  ]);
                  $output = array('msg' => 'Password Updated Successfully');
                  return redirect('admin/teamlogin')->with('success', $output);
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