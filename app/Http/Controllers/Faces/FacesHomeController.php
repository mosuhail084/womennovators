<?php
namespace App\Http\Controllers\Faces;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\User;
use App\Models\Masteruser;
use App\Models\Event;
use App\Models\Jury;
use App\Models\Category;
use App\Models\Influencer;
use App\Models\Markingevent;
use Illuminate\Http\Request;
use Hash;
use Crypt;
use DB;
use Redirect;
class FacesHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()   
    {
        $this->middleware('auth:user');
    }
    public function facesList()
    {
        $userDatas=User::latest()->paginate(6);
        return view('faces.faceslist',compact('userDatas'));
    }
    public function index()
    {
        return view('faces.index');
    }
   
	
    public function updateprofile(Request $request,$id="")
    {
     //  dd($request);
      $id=auth()->user()->id;
		 //  dd($id);
        $request->validate([
        'pitchvedio'=>"required|mimes:mp4",
         
     ]);
     
        try {
            $data=$request->except(['_token','name','email','phone','country','state','city']);
           if($request->hasFile('pitchvedio'))
             {
                 $file=$request->file('pitchvedio');
                     $destinationPath = 'faces/vedio';
                     $name = $file->getClientOriginalName();
                    $s = $file->move($destinationPath, $name);
                          //  dd($s); die;
                          $data['pitchvedio'] = $name;
               
             }
			Masteruser::where('id',$id)->update([
				'name'=>$request->name,
				'phone'=>$request->phone,
				'country'=>$request->country,
				'state'=>$request->state,
				'city'=>$request->city,
			]);
			$data['user_id']=$id;
			$user_id=  User::where('user_id',$id)->first();
			//dd($user_id);
			if($user_id!=NULL)
			{
				 User::where('user_id',$id)->update($data);
			}
             else
			 {
				  User::create($data);
			 }
          
               
           // $output = array('msg' => 'Updated Successfully');
           return Redirect::back()->with('error_code', 5);
                            
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
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id="")
    {
		
		if($id!="")
       {
			$id= Crypt::decrypt($id) ;
			//dd($id);
         $a= Masteruser::where('id',$id)->update(['role_id'=>1]);
		}
		$category=Category::latest()->get();
		$country=DB::table('allcountries')->get();
		$sector=DB::table('sectors')->get();
		$userData=DB::table('users')->rightjoin('masterusers','users.user_id','masterusers.id')
			->where('masterusers.id',auth()->user()->id)->first();
		//dd($userData);
        $infData=DB::table('masterusers')
			->leftjoin('influencer_profiles','influencer_profiles.influencer_id','masterusers.id')
			->leftjoin('sectors','sectors.id','influencer_profiles.sector')
			->leftjoin('cities','cities.id','influencer_profiles.area')
			->where('masterusers.name','!=',NULL)
			//->where('influencers.id','!=',1)
			->select('masterusers.*','influencer_profiles.area','influencer_profiles.sector','sectors.sectorname','cities.name as area_name')
			->get();
        //dd($infData);
        if ($request->ajax()) {
           
            if (isset($request->category_id)) {
                foreach (DB::table('allstates')->where('country_id', $request->category_id)->get() as $sub) {
                    echo "<option value='" . $sub->id . "'>" . $sub->name . "</option>";
                }
            }
           
        } 
        else         
        return view('faces.editprofile',compact('userData','category','country','sector','infData'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
          public function create(Request $request)
    {
        $sectors=DB::table('sectors')->get();
        $cities=DB::table('cities')->get();
        $country=DB::table('allcountries')->get();
        if ($request->ajax()) {
            // dd($request);
              if (isset($request->category_id)) {
                  foreach (DB::table('allstates')->where('country_id', $request->category_id)->get() as $sub) {
                      echo "<option value='" . $sub->id . "'>" . $sub->name . "</option>";
                  }
              }
             
          }
          else
        return view('faces.virtualwepitch.create',compact('sectors','country','cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  dd($request);
        $request->validate([
           'file'=>"required|mimes:mp4",
            'category'=>"required",
        ]);
        $data=$request->except(['_token']);
        $data['face-id']=auth()->user()->id;
        // dd($data['category']);
      
              // $data['type-id']=$sectors->id;
        if($request->hasFile('file'))
             {
                 $file=$request->file('file');
                     $destinationPath = 'assets';
                     $name = $file->getClientOriginalName();
                    $s = $file->move($destinationPath, $name);
                          //  dd($s); die;
                          $data['file'] = $name;
               
             }
        DB::table('virtuals')->insert($data);
        return back()->with('message',"data inserted successfully");
    }
    public function destroy(Contact $contact)
    {
        //
    }
}