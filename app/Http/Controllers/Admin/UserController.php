<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Userevent;
use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;
use DB;
use Image;
use Excel;
use App\Imports\UserImport;
class UserController extends Controller
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
      public function userList($id)
    {
      
    $userDatas = DB::table('users')
      ->leftjoin('categories','categories.id','users.usercategory')
      // ->where('userevents.event_id',$id)
      ->where('users.id',$id)
       ->select('users.*','categories.categoryname')->first();
       //dd($userDatas);
    
        return view('backEnd.user.userdetails',compact('userDatas','id'));
    }
    public function index()
    {
         $user = DB::table('users')
        ->leftjoin('categories','categories.id','users.usercategory')
         ->select('users.name','users.email','users.phone','users.id','users.youtubelink','categories.categoryname')->paginate(10);
        return view('backEnd.user.index',compact('user'));
    }
     public function search(Request $request)
    {
        $q = $request->q;
 if($q != ""){
 $user = User::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'email', 'LIKE', '%' . $q . '%' )->paginate (10)->setPath ( '' );
 $pagination = $user->appends ( array (
    'q' =>  $request->q
  ) );
 // dd($pagination);
 if (count ( $user ) > 0)
  return view ( 'backEnd.user.index',compact('user'))->withQuery ( $q );
 }
  return view ( 'backEnd.user.index' )->withMessage ( 'No Details found. Try to search again !' );

    }
  public function faceexcelStore(Request $request)
    {
        $request->validate([
             'file' => 'required'
        ]);

        try {
            $data=$request->except(['_token']);
            
            $file=$request->file;
            $data = $request->except(['_token']);
            $dataa=Excel::toArray(new UserImport, $file);
            foreach ($dataa[0] as $key => $value) {
                $cat=str_replace(' ', '',strtolower($value['usercategory']));
                // dd($cat);
                 if($cat=="professionalleader"||$cat=="service"||$cat=="digitalinfluencer"||$cat=="others")
                 {
                    // $usercategory=array();
                     $usercategory="Professional/Leaders";
                    // dd($usercategory);die;
                 }
                else if($cat=="business"||$cat=="selfemployed"||$cat=="entrepreneurs")
                 {
                     $usercategory="Entrepreneurs";
                 }
                 else if($cat=="socialactivist")
                 {
                     $usercategory="Social Activist";
                 }
                 
                $userctgry   = Category::where('categoryname',$usercategory)
                ->pluck('id')->first();

               if($value['name'] != Null && $userctgry != NULL){
                $db['name']=$value['name'];
               $db['usercategory']=$userctgry;
               $db['email']=$value['email'];
               $db['phone']=$value['phone'];
               $db['countrycode']=$value['countrycode'];
               $db['country']=$value['country'];
               $db['address']=$value['address'];
               $db['profession']=$value['profession'];
               $db['companyname']=$value['companyname'];
               $db['designation']=$value['designation'];
               $db['industrytype']=$value['industrytype'];
               $db['highestqualification']=$value['highestqualification'];
               $db['facebook']=$value['facebook'];
               $db['instagram']=$value['instagram'];
               $db['twitter']=$value['twitter'];
               $db['linkedin']=$value['linkedin'];
               $db['website']=$value['website'];
               $db['reference']=$value['reference'];
               $db['influencername']=$value['influencername'];
               $db['experience']=$value['experience'];
               $db['position']=$value['position'];
               $db['innovativebusiness']=$value['innovativebusiness'];
               $db['businesscategory']=$value['businesscategory'];
               $db['businesstype']=$value['businesstype'];
               $db['businessstage']=$value['businessstage'];
               $db['employees']=$value['employees'];
               $db['businessidea']=$value['businessidea'];
               $db['fundingdetails']=$value['fundingdetails'];
               $db['category']=$value['category'];
               $db['smartcity']=$value['smartcity'];
               $db['sector']=$value['sector'];
               $db['journey']=$value['journey'];
               $db['areuincorporated']=$value['areuincorporated'];
               $db['aboutbusiness']=$value['aboutbusiness'];
               $db['anythingelsetomention']=$value['anythingelsetomention'];
               $db['referencenetwork']=$value['referencenetwork'];
               $db['youtubelink']=$value['youtubelink'];
               $userid = User::Create($db);
           
            
        }  
                }
             
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $category = Category::latest()->get();
        $event = Event::latest()->get();
       // dd($event);
        return view('backEnd.user.create',compact('category','event'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required', 'email' => 'required',
        ]);

        try {
            $data=$request->except(['_token']);
            if($request->hasFile('image'))
                {
                    $avatar = $request->file('image');
                    $filename = time() . '.' . $avatar->getClientOriginalExtension();
                    Image::make($avatar)->resize(700, 700)->save('backEnd/image/user_image/' . $filename);
                    $data['image']=$filename;
                }
            $id =   DB::table('users')->insertGetId([
                'name'   	=>    $request->name,
                'email'   	=>   $request->email,
                'phone'   	=>      $request->phone,
                'usercategory'   	=>       $request->usercategory,
                'youtubelink'   	=>     $request->youtubelink,
                'created_at'			    =>	   date('y-m-d'),
                'updated_at'              =>    date('y-m-d'),
            ]);
               DB::table('userevents')->insert([
                'event_id'   	=>     $request->event_id,
                'user_id'   	=>     $id,
                'created_at'			    =>	   date('y-m-d'),
                'updated_at'              =>    date('y-m-d'),
            ]);
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
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id = '')
    {
       $category = Category::latest()->get();
        $event = Event::latest()->get();
        $user = User::where('id', $id)->first();
        //dd($value);
        return view('backEnd.user.edit', compact('id', 'user','category','event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = '')
    {
        $request->validate([
            'name' => 'required', 'usercategory' => 'required',
            'youtubelink' => 'required',
        ]);


        try {
            $data=$request->except(['_token']);
            if($request->hasFile('image'))
            {
                $avatar = $request->file('image');
                 $filename = time() . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(700, 700)->save('backEnd/image/user_image/' . $filename);
                $data['image']=$filename;
            }
        
            //User::find($id)->update($data);

            DB::table('users')->where('id',$id)->update([
                'name'=>$request->name,
                'usercategory'  =>$request->usercategory,
                'email'=>$request->email,
                'youtubelink'=>$request->youtubelink,
                'phone'  =>$request->phone,
                'created_at'		=>	   date('y-m-d'),
                'updated_at'         =>    date('y-m-d'),
            ]);
            /*DB::table('userevents')->where('user_id',$id)->update([
                'event_id'=>$request->event_id,
               
            ]);*/
            $output = array('msg' => 'Updated Successfully');
            return redirect('admin/user')->with('success', $output);
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = '')
    {
           try {
            User::destroy($id);
               $output = array('msg' => 'Deleted Successfully');
               return redirect('admin/user')->with('statuss', $output);
           } catch (Exception $e) {
               DB::rollBack();
               Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
               report($e);
               $output = array('msg' => $e->getMessage());
               return back()->withErrors($output)->withInput();
           }
       }
}
