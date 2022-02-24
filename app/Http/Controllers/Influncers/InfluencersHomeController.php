<?php
namespace App\Http\Controllers\Influncers;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Influencer;
use App\Models\Influencer_profile;
use App\Models\Event;
use App\Models\Jury;
use App\Models\Category;
use App\Models\Influencerjury;
use App\Models\Markingevent;
use Illuminate\Http\Request;
use Hash;
use DB;
class InfluencersHomeController extends Controller
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
    public function influencersList()
    {
        $influencersDatas=influencers::latest()->paginate(6);
        return view('influencers.influencerslist',compact('influencersDatas'));
    }
    public function index()
    {
       // dd('hi');
      $name=DB::table('masterusers')->where('id',auth()->user()->id)->select('name')->pluck('name')->first();
      //dd($name);
        return view('influencers.index',compact('name'));
    }
    public function profile(Request $request)
    {
        $nf_id=auth()->user()->id;
      $influencer= DB::table('masterusers')
      ->leftjoin('influencer_profiles','influencer_profiles.influencer_id','masterusers.id')
      ->leftjoin('influencer_referals','influencer_referals.influencer_id','influencer_profiles.influencer_id')
       ->leftjoin('influencer_jury','influencer_jury.influencer_id','influencer_profiles.influencer_id')
      ->where('masterusers.id',auth()->user()->id)->first();
		
		//dd($influencer);
          $inf= DB::table('masterusers')
        ->leftjoin('influencer_profiles','influencer_profiles.influencer_id','masterusers.id')
        
        ->where('masterusers.id',auth()->user()->id)
        ->select('masterusers.id','masterusers.phone','masterusers.name','masterusers.email','influencer_profiles.gender'
        ,'influencer_profiles.country','influencer_profiles.city')
        ->first();
		//dd($inf);
        $ref=DB::table('influencer_referals')->get();
        //dd($ref);
        $country=DB::table('allcountries')->get();
        $cities=DB::table('allstates')->get();
        if ($request->ajax()) {
            // dd($request);
              if (isset($request->category_id)) {
                  foreach (DB::table('allstates')->where('country_id', $request->category_id)->get() as $sub) {
                      echo "<option value='" . $sub->id . "'>" . $sub->name . "</option>";
                  }
              }
             
          }
          else
  
        return view('influencers.profile',compact('influencer','nf_id','country','inf','ref'));
    }
  /*  public function wizardhome()
    {
       // dd('hi');
        return view('influencers.wizardhome');
    }
   
    public function updateprofile(Request $request)
    {
      // dd(auth()->influencers()->id);
      $id=auth()->influencers()->id;
     
        try {
            $data=$request->except(['_token']);
             if($request->hasFile('picture'))
            {
                $file=$request->file('picture');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('backEnd/image/faceimage/',$filename);
                $data['picture']=$filename;
            }
            influencers::find($id)->update($data);
               
            $output = array('msg' => 'Updated Successfully');
            return redirect('influencers/home')->with('success', $output);
                            
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
       return view('influencers.createjury'); 
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
       

        try {
            $data=$request->except(['_token']);
           $data['influencer_id']=auth()->user()->id;
            Influencerjury::Create($data);  
            $output = array('msg' => 'Created Successfully');
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
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }
     public function personaldetails(Request $request)
    {
        $influencer= DB::table('masterusers')
        ->leftjoin('influencer_profiles','influencer_profiles.influencer_id','masterusers.id')
        
        ->where('masterusers.id',auth()->user()->id)
        ->select('masterusers.id','masterusers.phone','masterusers.name','masterusers.email','influencer_profiles.gender'
        ,'influencer_profiles.country','influencer_profiles.city')
        ->first();
        //dd($influencer);

        $country=DB::table('allcountries')->get();
        $cities=DB::table('allstates')->get();
        if ($request->ajax()) {
            // dd($request);
              if (isset($request->category_id)) {
                  foreach (DB::table('allstates')->where('country_id', $request->category_id)->get() as $sub) {
                      echo "<option value='" . $sub->id . "'>" . $sub->name . "</option>";
                  }
              }
             
          }
          else
         return view('influencers.pr',compact('influencer','country','cities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        $category=Category::latest()->get();
        $influencersData=Masteruser::where('id',auth()->influencers()->id)->first();
        dd($influencersData);
        return view('influencers.editprofile',compact('influencersData','category'));
    }
     public function update(Request $request,$id)
    {
        
        //dd($id);
        try {
           // $data=$request->except(['_token']);
             
             
              
             
             if($request->name){
                 DB::table('masterusers')->where('id',$id)->update(
                ['name' => $request->name,
                'phone' => $request->phone,
                
                ]
            );  
             }
            
             if($request->has('media_link'))
        {
          foreach($request->media_link as $media_link)
        {
             DB::table('influencer_media')->insert(
            ['influencer_id' => $id,
            'media_link' => $media_link]
        );  
        }
        }
         if($request->has('ref_name'))
         {
        	 if($request->ref_name[0] != null){
         $count=count($request->ref_name);
        // dd($count);
         for($i=0;$i<$count;$i++){
           
                DB::table('influencer_referals')->insert([
                    'influencer_id'   	=>     $id,
                    'ref_name'   	=>     $request->ref_name[$i],
                    'ref_email'   	=>     $request->ref_email[$i],
                   
                   
                ]);
             
      
         }
		}
         }
                  $data=$request->except(['_token','ref_name','phone','name','ref_email','media_link']);
                    if($request->has('position')){
                        $data['position'] = implode(',', $request->position);
                        }
                        if($request->has('award')){
                        $data['award'] = implode(',', $request->award);
                        }
                        if($request->has('ngo')){
                        $data['ngo'] = implode(',', $request->ngo);
                        }
                         if($request->has('academic_partner')){
                        $data['academic_partner'] = implode(',', $request->academic_partner);
                        }
                          if($request->has('association_partner')){
                        $data['association_partner'] = implode(',', $request->association_partner);
                        }
                        
                          if($request->has('value_partner')){
                        $data['value_partner'] = implode(',', $request->value_partner);
                        }
                        
               Influencer_profile::where('influencer_id',$id)->update($data);
           
             
             
           
           // influencers::find($id)->update($data);
               
          //  $output = array('msg' => 'Updated Successfully');
            return back()->with('alert','Updated Successfully');
                            
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
  public function jurylist()
     {
        
   
       $influencerview = DB::table('influencer_jury')->where('influencer_id',auth()->user()->id)->get();
   //  dd($influencerview);
        return view('influencers.juryshow',compact('influencerview'));
   }
   public function delete($id)
   {
    $data = DB::table('influencer_jury')->where('id',$id)->delete();

    return redirect()->back()->withErrors('Successfully deleted!');
   }
   public function juryedit($id)
    {
    //    $category=Category::latest()->get();
        $influencersData=DB::table('influencer_jury')->where('id',$id)->first();
        //dd($influencersData);
        return view('influencers.edit',compact('influencersData'));
    }
    function updatejury(Request $request, $id){
     //    dd( $id);
    //       $data=$request->except(['_token']);
    //      
         
       $a=   DB::table('influencer_jury')->where('id',$id)->update([
              'jury_name'=> $request->jury_name,
              'jury_designation'=> $request->jury_designation,
              'jury_org'=> $request->jury_org,
              'jury_email'=> $request->jury_email,
              'jury_phone'=> $request->jury_phone,
              'jury_linkedin'=> $request->jury_linkedin,
              
           ] );
      
      
      return back()->with('success', 'Update Successfully');
      
     }    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}