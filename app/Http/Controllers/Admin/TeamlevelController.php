<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Menu;
use App\Models\Role;
use App\Models\Title;
//use App\Models\Teammember;
use Illuminate\Http\Request;
use Image;
use DB;
class teamlevelController extends Controller
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
        $teamlevelDatas = Role::get();
        return view('backEnd.teamlevel.index',compact('teamlevelDatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    $page = Menu::latest()->get();
        return view('backEnd.teamlevel.create',compact('page'));
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
                'rolename' => 'required',
              
            ]);

            try {
                $data=$request->except(['_token']);
                $role_id=	DB::table('roles')->insertGetId([			
                    'rolename'         => $request->rolename,
                    'created_at'	    =>	   date('y-m-d'),
                    'updated_at'        =>    date('y-m-d'),
                    ]);
                    foreach($request->page_id as $page_id){
                        DB::table('permissions')->insert([
                                    'role_id'   	=>     $role_id,
                                    'menu_id'     =>     $page_id,
                                    'created_at'			    =>	   date('y-m-d'),
                                    'updated_at'              =>    date('y-m-d'),
                                ]);
                    }
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
     * @param  \App\Models\teamlevel  $teamlevel
     * @return \Illuminate\Http\Response
     */
    public function show(teamlevel $teamlevel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\teamlevel  $teamlevel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Menu::latest()->get();
        $teamlevel = Permission::where('role_id', $id)->get();
        $teamrole = Role::where('id',$id)->first();
        //dd($teamrole);
        return view('backEnd.teamlevel.edit',compact('id','teamlevel','page','teamrole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\teamlevel  $teamlevel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = '')
    {
        //dd($request );
        try {
            $data=$request->except(['_token']);
            DB::table('roles')->where('id', $id)->update([          
             	
                'rolename'         => $request->rolename,
                'updated_at'              =>    date('y-m-d'),
                ]);
             
               DB::table('permissions')->where([

                'role_id'   =>   $id,       

                ])->delete();

                foreach($request->page_id as $page_id){
                    DB::table('permissions')->insert([
                                'role_id'   	=>     $id,
                                'menu_id'     =>     $page_id,
                                'created_at'			    =>	   date('y-m-d'),
                                'updated_at'              =>    date('y-m-d'),
                            ]);
                }
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
    public function resetPassword($id)
    {
       // dd($id);
        $teamlevelmember = teamlevelmember::where('id', $id)->first();
        return view('backEnd.teamlevel.resetpassword', compact('id', 'teamlevelmember'));
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
              $teamlevelmemberid =  teamlevelmember::where('id', $id)->select('id')->pluck('id')->first();
           //   dd($teamlevelmemberid);
              DB::table('users')->where('teamlevelmember_id',$teamlevelmemberid)->update([ 
                  'password'         =>  Hash::make($request->password) ,
                  'updated_at'         =>  $date
                  ]);
                  $output = array('msg' => 'Password Updated Successfully');
                  return redirect('admin/teamlevel')->with('success', $output);
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
     * @param  \App\Models\teamlevel  $teamlevel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = '')
    {
           try {
            teamlevelmember::destroy($id);
               $output = array('msg' => 'Deleted Successfully');
               return redirect('admin/teamlevel')->with('statuss', $output);
           } catch (Exception $e) {
               DB::rollBack();
               Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
               report($e);
               $output = array('msg' => $e->getMessage());
               return back()->withErrors($output)->withInput();
           }
       }

}