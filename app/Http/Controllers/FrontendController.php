<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Team;
use App\Models\Blog_comment;
use App\Models\Sponsor;
use App\Models\Survey;
use App\Models\Survey2;
use App\Models\Globalsummit;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\Mail\Mailglobalsummit;
use App\Mail\Newusermail;
use App\Mail\Asia_Winners_Mail;
use App\Mail\Mailinfluencer_form2;
use App\Mail\TrophyMail;

use App\Models\Influencer_profile;
use App\Models\Awardquestionnaire;
use App\Models\Awardee;
use App\Models\Trophy;
use App\Models\Academicpartner;
use App\Models\Associationpartner;
use Hash;
use Mail;
use Crypt;
use DB;
Use Redirect;
use Response;

class FrontendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function old()
    {
        return view('frontend.index');
    }
    public function index()
    {
        return view('auth.login');
    }
    public function in_the_press()
    {
        return view('in-the-press');
    }
	 public function applynow($id="")
   {
	   //dd($id);
	 /* if($id!=NULL)
	   {
		   $this->middleware('auth:user');
		   	return Redirect::to('/faces/editprofile');
	   }*/
		//$id= Crypt::encrypt($id) ;
	  //dd($id);
       return view('frontEnd.applynow',compact('id'));
   }
    public function team()
    {
        $teamDatas = Team::orderBy('position','asc')->get();
        return view('frontEnd.team',compact('teamDatas'));
    }
    public function aboutUs()
    {
        return view('frontEnd.aboutus');
    }
    public function contact()
    {
        return view('frontEnd.contact');
    }
    public function contactStore(Request $request)
    { 
       // dd($request);
        $request->validate([
            'name' => "required|alpha",
            'subject' => "required",
            'email' => "required"
        ]);
        try {
        $data=$request->except(['_token']);
         Contact::Create($data);  
        return back()->with('alert','Thank you for contacting us – we will get back to you soon!');
       
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
    
}
  public function view()
   {
       //dd('hello');
       $globalsummit =  Globalsummit::where('type',20)->where('image','!=',NULL)->paginate(30);
       //dd($globalsummit);
       return view('frontEnd.index',compact('globalsummit'));
   }
  
   public function blog($id)
   { //dd($seourl);
       $blog = DB::table('blogs')->where('id',$id)->first();
        $bloglist = DB::table('blogs')->limit(3)->get();
       //dd($bloglist);
       return view('we.blog-details',compact('blog','bloglist'));
   }
    public function bloglist()
   {
       $bloglist = DB::table('blogs')->get();
      //dd($bloglist);
       return view('frontEnd.bloglist',compact('bloglist'));
   }
    public function blogcomment(Request $request)
   {
       //dd($request);
       try {
        $data=$request->except(['_token']);
        Blog_comment::Create($data);  
         return back()->with('alert','Thank you for your Comment!');
      //  $output = array('msg' => 'Thank you for your Comment!');
      //  return back()->with('success', $output);
       
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
   }
      public function gobalsummit(Request $request)
   {
        $globalsummit_guest =  Globalsummit::where('type',6)->where('image','!=',NULL)->paginate(30);
        $globalsummit_guest_of_honour =  Globalsummit::where('type',7)->where('image','!=',NULL)->where('sequence',1)->paginate(30);
        $globalsummit_moderators =  Globalsummit::where('type',13)->where('image','!=',NULL)->paginate(30);
        $globalsummit_jury =  Globalsummit::where('type',1)->where('image','!=',NULL)->paginate(30);
        $globalsummit_influencer = Globalsummit::where('type',2)->where('image','!=',NULL)->where('sequence',1)->paginate(30);
        $globalsummit_faces =  Globalsummit::where('type',3)->where('image','!=',NULL)->paginate(30);
        $globalsummit_support =  Globalsummit::where('type',19)->where('image','!=',NULL)->paginate(30);
        $globalsummit_sponser =  Globalsummit::where('type',16)->where('image','!=',NULL)->paginate(30);
        $globalsummit_partner =  Globalsummit::where('type',17)->where('image','!=',NULL)->paginate(30);
        $globalsummit_sponser_wepitch = Globalsummit::where('type',11)->where('image','!=',NULL)->paginate(30);
       
      // dd($globalsummit_guest_of_honour);
        return view('globalsummit',compact('globalsummit_guest','globalsummit_guest_of_honour','globalsummit_moderators','globalsummit_sponser',
    'globalsummit_jury','globalsummit_influencer','globalsummit_faces','globalsummit_support','globalsummit_partner','globalsummit_sponser_wepitch'));
   }
	 public function proposedchiefGuest(Request $request)
   {
        $proposedchiefguest  = Globalsummit::where('type',6)->where('image','!=',NULL)->get();
        return view('proposedchiefguest',compact('proposedchiefguest'));
   } 
	public function globalsummitInfluencer(Request $request)
   {
        $globalsummitInfluencer  = Globalsummit::where('type',2)->where('image','!=',NULL)->get();
        return view('globalsubmitinfluencer',compact('globalsummitInfluencer'));
   }
		public function agenda(Request $request)
   {
        return view('agenda');
   }
		public function demo(Request $request)
   {
       $globalsummit_guest =  Globalsummit::where('type',6)->where('image','!=',NULL)->paginate(30);
        $globalsummit_guest_of_honour =  Globalsummit::where('type',7)->where('image','!=',NULL)->where('sequence',1)->where('order','!=',NULL)
			->orderBy('order')->paginate(30);
        $globalsummit_moderators =  Globalsummit::where('type',13)->where('image','!=',NULL)->paginate(30);
        $globalsummit_jury =  Globalsummit::where('type',1)->where('image','!=',NULL)->paginate(30);
        $globalsummit_influencer = Globalsummit::where('type',2)->where('image','!=',NULL)->where('sequence',1)->orderBy('order')->paginate(30);
        $globalsummit_faces =  Globalsummit::where('type',3)->where('image','!=',NULL)->paginate(30);
        $globalsummit_support =  Globalsummit::where('type',19)->where('image','!=',NULL)->paginate(30);
        $globalsummit_sponser =  Globalsummit::where('type',16)->where('image','!=',NULL)->orderBy('order')->paginate(30);
        $globalsummit_partner =  Globalsummit::where('type',17)->where('image','!=',NULL)->paginate(30);
        $globalsummit_sponser_wepitch = Globalsummit::where('type',11)->where('image','!=',NULL)->paginate(30);
       
      // dd($globalsummit_guest_of_honour);
        return view('demo',compact('globalsummit_guest','globalsummit_guest_of_honour','globalsummit_moderators','globalsummit_sponser',
    'globalsummit_jury','globalsummit_influencer','globalsummit_faces','globalsummit_support','globalsummit_partner','globalsummit_sponser_wepitch'));
   }
    public function partner(Request $request)
   {
       $country=DB::table('allcountries')->get();
     //  dd($country);
      if ($request->ajax()) {
           
            if (isset($request->category_id)) {
                foreach (DB::table('allstates')->where('country_id', $request->category_id)->get() as $sub) {
                    echo "<option value='" . $sub->id . "'>" . $sub->name . "</option>";
                }
            }
           
        } else {
       return view('value-partner-form',compact('country'));
        }
      
   }
   public function sponser_add(Request $request)
   {
      try {
        $data=$request->except(['_token']);
       // dd($data);
        Sponsor::Create($data);  
          $data = array(

                'name' => $request->name,
                
                ); 
         Mail::to($request->email)->send(new Mailglobalsummit($data));
        // return back()->with('alert','Thank you for your Comment!');
        $output = array('msg' => 'Thank you for Applying!!');
        return back()->with('success', $output);
       
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
   }
   public function survey(Request $request)
   {
       $country=DB::table('allcountries')->get();
        $sector=DB::table('sectors')->get();
     //  dd($country);
      if ($request->ajax()) {
          // dd($request);
            if (isset($request->category_id)) {
                foreach (DB::table('allstates')->where('country_id', $request->category_id)->get() as $sub) {
                    echo "<option value='" . $sub->id . "'>" . $sub->name . "</option>";
                }
            }
           
        } else {
       return view('survey',compact('country','sector'));
        }
       // return view('survey');
   }
      public function addsurveyy(Request $request)
   {
      //dd($request);
      try {
         
        $data=$request->except(['_token']);
        if($request->has('business'))
        {
            $data['business']=implode(', ', $request->business) ;    
        }
      
        
        
        
      // dd($data['business']);
        
        Survey::Create($data);  
         return back()->with('alert','Thank you for taking the time to complete this survey');
       // $output = array('msg' => 'Thank you for your Applying!!');
       // return back()->with('success', $output);
       
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
   }
   public function survey2(Request $request)
    {
        $state=DB::table('allstates')->get();
    $sector=DB::table('sectors')->get();
    $country=DB::table('allcountries')->get();
    //  dd($country);
      if ($request->ajax()) {
          // dd($request);
            if (isset($request->category_id)) {
     foreach (DB::table('allstates')->where('country_id', $request->category_id)->get() as $sub) {
     echo "<option value='" . $sub->id . "'>" . $sub->name . "</option>";
                }
            }
           
        } else {
       return view('survey2',compact('country','sector','state'));
      
        }
        // return view('survey');
    }
   
     public function addsurveys(Request $request)
    {
    //  $request->validate([
    //      'name'=>'required',
    //      'email'=>'required',
    //      'phone'=>'required'
    //   ]);
 //  dd($request);
       try {
         $data=$request->except(['_token']);
   //      dd($data);
   if($request->has('business'))
   {
       $data['business']=implode(', ', $request->business) ;    
   }
   if($request->has('relevant'))
   {
       $data['relevant']=implode(', ', $request->relevant) ;    
   }
   if($request->has('work'))
   {
       $data['work']=implode(', ', $request->work) ;    
   }
   if($request->has('family_members'))
   {
       $data['family_members']=implode(', ', $request->family_members) ;    
   }
   if($request->has('bias_experienced'))
   {
       $data['bias_experienced']=implode(', ', $request->bias_experienced) ;    
   }
    if($request->has('support_for_caregiving'))
   {
       $data['support_for_caregiving']=implode(', ', $request->support_for_caregiving) ;    
   }
    if($request->has('gender_nonconforming'))
   {
       $data['gender_nonconforming']=implode(', ', $request->gender_nonconforming) ;    
   }
   
   
   // dd($data['business']);
        survey2::Create($data);  
         // return back()->with('alert','Thank you for your Comment!');
         return Redirect::back()->with('error_code', 6);
         
         //$output = array('msg' => 'Thank you for your Applying!!');
        // return back()->with('success', $output);
        
         } catch (Exception $e) {
             DB::rollBack();
             Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
             report($e);
             $output = array('msg' => $e->getMessage());
             return back()->withErrors($output)->withInput();
         }
    }
     public function survey3(Request $request)
    {
        $state=DB::table('allstates')->get();
    $sector=DB::table('sectors')->get();
    $country=DB::table('allcountries')->get();
    //  dd($country);
      if ($request->ajax()) {
          // dd($request);
            if (isset($request->category_id)) {
     foreach (DB::table('allstates')->where('country_id', $request->category_id)->get() as $sub) {
     echo "<option value='" . $sub->id . "'>" . $sub->name . "</option>";
                }
            }
           
        } else {
       return view('survey3',compact('country','sector','state'));
      
        }
        // return view('survey');
    }
     public function surveyshow()
    {
        $data = survey::all();
        //   return survey::all();
        return view('backEnd.survey.surveyshow',['wepitch'=>$data]);
    }
    public function delete($id)
    {
        $data = survey::find($id);
        $data->delete();
        return back();
    }
    public function showview($id)
    {
        //$data = survey::find($id);
        $data=DB::table('surveys')
        ->join('allcountries','allcountries.id','surveys.country')
        ->join('allstates','allstates.id','surveys.state')
        ->select('surveys.*','allcountries.name as countryname','allstates.name as statename')
        ->where('surveys.id',$id)->first();
      //dd( $data);
       return view('backEnd.survey.index',compact('data'));
      
    }
    public function surveyshow2()
    {
        $data1 = survey2::all();
        //dd($data1 );
        //   return survey::all();
        return view('backEnd.survey2.surveyshow2',['wepitch'=>$data1]);
    }
    public function delete1($id)
    {
        $data = survey2::find($id);
        $data->delete();
        return back();
    }
    public function showview1($id)
    {
        $data1 = survey2::find($id);
      $data1=DB::table('survey2s')
      ->leftjoin('allcountries','allcountries.id','survey2s.country')
      ->leftjoin('allstates','allstates.id','survey2s.state')
      ->select('survey2s.*','allcountries.name as countryname','allstates.name as statename')
      ->where('survey2s.id',$id)->first();
     // dd( $data1);
       return view('backEnd.survey2.index',['data1'=>$data1]);
      
    }

      public function globalsummitprofile(Request $request,$id="")
   {
      //dd($id);
      $globalsummit=DB::table('globalsummits')->where('id',$id)->where('image','!=',NULL)->first();
       //  dd($globalsummit);
        return view('globalsummitprofile',compact('globalsummit'));
   }
	
	 public function masteruser(Request $request)
   {
      
     $sector=DB::table('sectors')->orderBy('sectorname')->get();
    $country=DB::table('allcountries')->orderBy('name')->get();
   $city=DB::table('cities')->orderBy('name')->get();
     // dd($city);
      if ($request->ajax()) {
          // dd($request);
            if (isset($request->category_id)) {
     foreach (DB::table('allstates')->where('country_id', $request->category_id)->orderBy('name')->get() as $sub) {
     echo "<option value='" . $sub->id . "'>" . $sub->name . "</option>";
                }
            }
           
        } else {
       return view('masteruser-form',compact('sector','country','city'));
        }
   }
   public function add_masteruser(Request $request)
   {
     //dd($request);
     $this->validate($request, [
		 'email' => 'unique:masterusers',
        'password' => 'min:6',
        'confirm_password' => 'required_with:password|same:password|min:6'
    ]);
    /*if($validator->fails()) {
        return Redirect::back()->withErrors($validator);
    }*/
     if($request->has('hear_about_us'))
     {
        $hear=implode(', ', $request->hear_about_us) ;    
     }
     else
     {
         $hear=NULL;
     }
     $user_id=DB::table('masterusers')->insertGetId(
            ['email' => $request->email,
            'name' => $request->name,
            'password'=>Hash::make($request->password),
            'phone'=>$request->number,
            'gender' => $request->gender,
            'hear_about_us' => $hear,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
            'domain'=>$request->domain,
        ]);
        
       
      
        
        if($request->has('media_link'))
        {
          foreach($request->media_link as $media_link)
        {
             DB::table('influencer_media')->insert(
            ['influencer_id' => $user_id,
            'media_link' => $media_link]
        );  
        }
        }
          $data = array(

                'name' => $request->name,
                
                ); 
	  // dd($request->email);
      $a=  Mail::to($request->email)->send(new Newusermail($data));
         //   dd($a);
       //  $output = array('msg' => 'Thank you for Applying!!');
     // return view('frontEnd.applynow',compact('user_id'))->with('success', $output);
      return Redirect::back()->with('user_id',$user_id);
      
   }
    public function influencer(Request $request)
   {
      
     $sector=DB::table('sectors')->orderBy('sectorname')->get();
    $country=DB::table('allcountries')->orderBy('name')->get();
   $city=DB::table('cities')->orderBy('name')->get();
     // dd($city);
      if ($request->ajax()) {
          // dd($request);
            if (isset($request->category_id)) {
     foreach (DB::table('allstates')->where('country_id', $request->category_id)->orderBy('name')->get() as $sub) {
     echo "<option value='" . $sub->id . "'>" . $sub->name . "</option>";
                }
            }
           
        } else {
       return view('influencer-form',compact('sector','country','city'));
        }
   }
     public function add_influencer(Request $request)
   {
     //dd($request);
     $influencer_id=DB::table('influencers')->insertGetId(
            ['email' => $request->email,
            'name' => $request->name,
            'password'=>'$2y$10$B7Fxoh2FjBhDEAxywkPZruAsOBneb5gydDgBorPpMo2M5wU7xes4W',
            'phone'=>$request->number
        ]);
        
          if($request->has('hear_about_us'))
           {
              $hear=implode(', ', $request->hear_about_us) ;    
           }
           else
           {
               $hear=NULL;
           }
        DB::table('influencer_profiles')->insert(
            ['influencer_id' => $influencer_id,
            'gender' => $request->gender,
            'hear_about_us' => $hear,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'country' => $request->country,
            'city' => $request->state,
            'actual_city' => $request->city,
            'area' => $request->area,
            'sector' => $request->sector,
            'sector_others' => $request->sector_others,
            'expertise'=>$request->domain,
            'expertise_others'=>$request->expertise_others,
             'about_journey'=>$request->about_journey ??'',
            ]
        );
        if($request->friend_email[0] != null){
        $count=count($request->friend_email);
       // dd($count);
        for($i=0;$i<$count;$i++){
          
               DB::table('refrence_friend')->insert([
                   'influencer_id'   	=>     $influencer_id,
                   'name'   	=>     $request->friend_name[$i],
                   'email'   	=>     $request->friend_email[$i],
                  
                  
               ]);
            
     
        }
       }
        if($request->has('media_link'))
        {
          foreach($request->media_link as $media_link)
        {
             DB::table('influencer_media')->insert(
            ['influencer_id' => $influencer_id,
            'media_link' => $media_link]
        );  
        }
        }
          $data = array(

                'name' => $request->name,
                
                ); 
        Mail::to('president@womennovators.com')->send(new Newusermail($data));
            
        
      return Redirect::back()->with('error_code', 5);
      
   }
     public function influencerform2(Request $request,$id="")
   {
      // dd($id);
		 $sector=DB::table('sectors')->orderBy('sectorname')->get();
		 $city=DB::table('cities')->orderBy('name')->get();
      
       return view('influencer-form2',compact('id','sector','city'));
        
   }
     public function add_influencer2(Request $request,$id="")
   {
    
		  $id = Crypt::decrypt($id);
		// dd($id);
 //dd($request);
      /*   $request->validate([
           
            'profile_pic' => "required|mimes:jpeg,png,jpg,gif",
       
     ]);*/
     
      $count_jury=count($request->jury_name);
     //dd($count_jury);
      $ind_data=DB::table('influencer_profiles')->where('influencer_id',$id)->first();
     // dd($ind_data);
     if($ind_data!=NULL OR $ind_data!="" OR $ind_data!=null)
      {
        //  dd('hi');
          return back()->with('alert','You have already filled details!');
      }
     else if($count_jury<5)
      {
         
          return back()->with('alert','You must nominate minimum five jury members!');
      }
      else
      {
        if($request->hasFile('profile_pic'))
            {
                $file=$request->file('profile_pic');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('backEnd/image/influencer/',$filename);
               
               $profile_pic=$filename;
            }
           // dd($profile_pic);
            if($request->has('position'))
           {
              $position=implode(', ', $request->position) ;    
           }
          
             if($request->has('award'))
           {
              $award=implode(', ', $request->award) ;    
           }
         
            if($request->has('ngo'))
           {
              $ngo=implode(', ', $request->ngo) ;    
           }
          
           
            if($request->has('academic_partner'))
           {
              $academic_partner=implode(', ', $request->academic_partner) ;    
           }
         
             if($request->has('association_partner'))
           {
              $association_partner=implode(', ', $request->association_partner) ;    
           }
          
            if($request->has('value_partner'))
           {
              $value_partner=implode(', ', $request->value_partner) ;    
           }
		   if($request->area=='area')
           {
               $area="";
           }
           else {
            $area=$request->area;
           }
           if($request->sector=='sector')
           {
               $sector="";
           }
           else {
            $sector=$request->sector;
           }
          
            DB::table('influencer_profiles')->insert(
            ['influencer_id'=>$id,
			'organisation' => $request->company,
            'designation' => $request->Designation,
			 'area' => $area,
            'sector' => $sector,
            'about_journey' => $request->about_journey,
            'position'=>$position,
            'award'=>$award,
            'ngo'=>$ngo,
            'academic_partner'=>$academic_partner,
            'association_partner'=>$association_partner,
            'value_partner'=>$value_partner,
            'profile_pic'=>$profile_pic ??'',
           
            
        ]);
        
		 $role=DB::table('masterusers')->where('id',$id)->update(['role_id'=>2]);
		  
       if($request->jury_name[0] != null){
         $count=count($request->jury_name);
       //  dd($count);
         for($i=0;$i<$count;$i++){
           
                DB::table('influencer_jury')->insert([
                    'influencer_id'   	=>     $id,
                    'jury_name'   	=>     $request->jury_name[$i],
                    'jury_designation'   	=>     $request->jury_designation[$i],
                    'jury_org'=>  $request->jury_org[$i] ,
                    'jury_email'=>  $request->jury_email[$i] ,
                    'jury_phone'=>  $request->jury_phone[$i] ,
                    'jury_linkedin'=>  $request->jury_linkedin[$i] ,
                   
                ]);
             
      
         }
		}
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
		
	/*	$inf=Db::table('influencers')
		->leftjoin('influencer_profiles','influencer_profiles.influencer_id','influencers.id')
		->leftjoin('allcountries','allcountries.id','influencer_profiles.country')
		->leftjoin('allstates','allstates.id','influencer_profiles.city')
		->leftjoin('sectors','sectors.id','influencer_profiles.sector')
		->select('influencers.name','influencers.email','allcountries.name as countryname','allstates.name as statename','sectors.sectorname','influencer_profiles.area','influencer_profiles.sector')
		->where('influencers.id',$id)->first();
        //	dd($inf);
		
		  if($inf->area!=NULL)
                {
                    $area=$inf->area;
                    $type=1;
                    
                }
                else  
                {
                      $area=$inf->sector;
                       $type=0;
                }
		 $data = array(

                'name' => $inf->name,
                'type'     =>$type,
                'countryname'    =>$inf->countryname,
                'area'    => $area,
               
               'email'          =>$inf->email,
                
                );
        Mail::to($inf->email)->send(new Mailinfluencer_form2 ( $data ));
            
        */
      return Redirect::back()->with('error_code', 5);
      }
   }
	
	 public function academic_partner(Request $request,$id="")
   {
		      //   $id = Crypt::decrypt($id);

       // dd($idd);
      $sector=DB::table('sectors')->orderBy('sectorname')->get();
      $country=DB::table('allcountries')->orderBy('name')->get();
     $city=DB::table('cities')->orderBy('name')->get();
       // dd($city);
        if ($request->ajax()) {
            // dd($request);
              if (isset($request->category_id)) {
       foreach (DB::table('allstates')->where('country_id', $request->category_id)->orderBy('name')->get() as $sub) {
       echo "<option value='" . $sub->id . "'>" . $sub->name . "</option>";
                  }
              }
             
          } else {
         return view('academic-partner',compact('sector','country','city','id'));
          }
        }
          public function add_academic_partner(Request $request,$id="")
    {
      // dd($id);
		$id = Crypt::decrypt($id);
        try {
            $data=$request->except(['_token']);
            if($request->hasFile('logo'))
            {
                $file=$request->file('logo');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('backEnd/image/acad_partner/',$filename);
                $data['logo']=$filename;
            }
            if($request->has('kind_of_prog'))
            {
                
               $kind_of_prog=implode(', ', $request->kind_of_prog) ;    
            }
            $data['kind_of_prog']=$kind_of_prog;
			$data['user_id']=$id;
            $data = Academicpartner::Create($data);
           // dd($data);

           return back()->with('alert','Applied Sucessfully');
          //  $output = array('msg' => 'Thank you for joining our mask campaign!!!');
           // return back()->with('success', $output);
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
    }
     
    public function associative_partner(Request $request,$id="")
   {
      //dd($id);
      $sector=DB::table('sectors')->orderBy('sectorname')->get();
      $country=DB::table('allcountries')->orderBy('name')->get();
     $city=DB::table('cities')->orderBy('name')->get();
       // dd($city);
        if ($request->ajax()) {
            // dd($request);
              if (isset($request->category_id)) {
       foreach (DB::table('allstates')->where('country_id', $request->category_id)->orderBy('name')->get() as $sub) {
       echo "<option value='" . $sub->id . "'>" . $sub->name . "</option>";
                  }
              }
             
          } else {
         return view('associative-partner',compact('sector','country','city','id'));
          }
        }
          public function add_associative_partner(Request $request,$id="")
    {
       // dd($id);
		$id = Crypt::decrypt($id);
        try {
            $data=$request->except(['_token']);
            if($request->hasFile('logo'))
            {
                $file=$request->file('logo');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('backEnd/image/asso_partner/',$filename);
                $data['logo']=$filename;
            }
            if($request->has('kind_of_prog'))
            {
                
               $kind_of_prog=implode(', ', $request->kind_of_prog) ;    
            }
            $data['kind_of_prog']=$kind_of_prog;
			$data['user_id']=$id;
			//dd($data);
            $data = Associationpartner::Create($data);
           //dd($data);

           return back()->with('alert','Applied Sucessfully');
          //  $output = array('msg' => 'Thank you for joining our mask campaign!!!');
           // return back()->with('success', $output);
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
    }
     public function womenfacesawards(Request $request)
   {
      //  dd($id);
    
       return view('women-faces-award');
        
   }
    public function awardquestionnaire(Request $request)
   {
      //  dd($id);
    
       return view('award-questionnaire');
        
   }
    public function add_awardquestionnaire(Request $request)
    {
    //  $request->validate([
    //      'name'=>'required',
    //      'email'=>'required',
    //      'phone'=>'required'
    //   ]);
    // dd($request);
       try {
         $data=$request->except(['_token']);
        // dd($data);
        Awardquestionnaire::Create($data);  
         // return back()->with('alert','Thank you for your Comment!');
         $output = array('msg' => 'Thank you for  Applying!!');
         return back()->with('success', $output);
        
         } catch (Exception $e) {
             DB::rollBack();
             Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
             report($e);
             $output = array('msg' => $e->getMessage());
             return back()->withErrors($output)->withInput();
         }
    }
     public function awardshow()
    {
        $data = awardquestionnaire::all();
        return view('backEnd.awardquestionnaire.awardquestionnaire',['wepitch'=>$data]);
    }
    public function deleteaward($id)
    {
       
        try {
            $data = awardquestionnaire::find($id);
            $data->delete();
               $output = array('msg' => 'Deleted Successfully');
               return redirect('admin/awardquestionnaire')->with('statuss', $output);
           } catch (Exception $e) {
               DB::rollBack();
               Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
               report($e);
               $output = array('msg' => $e->getMessage());
               return back()->withErrors($output)->withInput();
           } 
        }
    public function Subscribe(Request $request)
    {
    //  $request->validate([
    //      'name'=>'required',
    //      'email'=>'required',
    //      'phone'=>'required'
    //   ]);
     //dd($request->First_Name==NULL OR request->Email);
       try {
		   if($request->First_Name==NULL OR $request->Email==NULL)
		   {
			     return back()->with('alert','Please fill your Details!');
		   }
		   else
		   {
         $data=$request->except(['_token']);
        // dd($data);
        subscribe::Create($data);  
         return back()->with('alert','Congratulations Subscribed Sucessfully!');
      //   $output = array('msg' => 'Thank you for your Applying!!');
      //   return back()->with('success', $output);
		   }
         } catch (Exception $e) {
             DB::rollBack();
             Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
             report($e);
             $output = array('msg' => $e->getMessage());
             return back()->withErrors($output)->withInput();
         }
    }
    public function Subscribeshow()
    {
        $data = subscribe::all();
        return view('backEnd.subscribe.subscribe',['wepitch'=>$data]);
    }
    public function deleteshow($id)
    {
       
        try {
            $data = subscribe::find($id);
            $data->delete();
               $output = array('msg' => 'Deleted Successfully');
               return redirect('admin/subscribe')->with('statuss', $output);
           } catch (Exception $e) {
               DB::rollBack();
               Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
               report($e);
               $output = array('msg' => $e->getMessage());
               return back()->withErrors($output)->withInput();
           } 
    }
     public function check_email(Request $request)
   {
       
     //  dd($country);
      if ($request->ajax()) {
         // dd($request->email);
            if (isset($request->email)) {
                $email=DB::table('surveys')->where('email', $request->email)->first() ;
                if($email!=NULL)
                {
                    return Response::json(array(
                        'success' => true,
                        'data'   => $email
                    )); 
                }
                else
                echo 0;
            }
        } 
       // return view('survey');
   }
    public function awardee_confirmation(Request $request)
   {
       
    
    
       return view('awardeeconfirmation');
   }
    public function awardee_confirmation2(Request $request)
   {
       
   // dd($request);
    
       return view('awardeeconfirmation2');
   }
    
     public function awardee_add(Request $request)
    {
       $request->validate([
        'vedio'=>"required|mimes:mp4|max:153600",
         
     ]);
    // dd($request);
       try {
         $data=$request->except(['_token']);
         //dd($data);
          if($request->hasFile('vedio')  )
             {
                 $file=$request->file('vedio');
                    // $destinationPath = 'frontEnd/100asiaawards_vedio';
               //      $name = $file->getClientOriginalName();
               //     $s = $file->move($destinationPath, $name);
                          //  dd($s); die;
                          	 $name = $file->getClientOriginalName();
                            $path = $file->storeAs('asiaawardvideo',$name,'s3');
                          $data['vedio'] = $name;
               
             }
       $awardee= Awardee::Create($data);  
       $id=$awardee->id;
       //dd($id);
         $data = array(

                'name' => $request->name,
                
                ); 
         Mail::to($request->email)->send(new Asia_Winners_Mail($data));
       //return back()->with('alert','Congrats Winner! Your video has been uploaded successfully. We would like to know where to deliver your Trophy');
       // $output = array('msg' => 'Thank you for Applying!!');
      // return back()->with('success', $output);
       return Redirect::back()->with('error_code', 5);
        
         } catch (Exception $e) {
             DB::rollBack();
             Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
             report($e);
             $output = array('msg' => $e->getMessage());
             return back()->withErrors($output)->withInput();
         }
    }
      public function awardee_add2(Request $request)
    {
       $request->validate([
        'vedio'=>"required|mimes:mp4|max:51200",
         
     ]);
    // dd($request);
       try {
         $data=$request->except(['_token']);
         //dd($data);
          if($request->hasFile('vedio')  )
             {
                 $file=$request->file('vedio');
                    // $destinationPath = 'frontEnd/100asiaawards_vedio';
               //      $name = $file->getClientOriginalName();
               //     $s = $file->move($destinationPath, $name);
                          //  dd($s); die;
                          	 $name = $file->getClientOriginalName();
                            $path = $file->storeAs('asiaawardvideo',$name,'s3');
                          $data['vedio'] = $name;
               
             }
       $awardee= Awardee::Create($data);  
       $id=$awardee->id;
       //dd($id);
         $data = array(

                'name' => $request->name,
                
                ); 
         Mail::to($request->email)->send(new Asia_Winners_Mail($data));
      // return back()->with('alert','Congrats Winner! Your video has been uploaded successfully. We would like to know where to deliver your Trophy');
       // $output = array('msg' => 'Thank you for Applying!!');
      //return back()->with('success', $output);
         return Redirect::back()->with('error_code', 5);
         } catch (Exception $e) {
             DB::rollBack();
             Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
             report($e);
             $output = array('msg' => $e->getMessage());
             return back()->withErrors($output)->withInput();
         }
    }
     public function trophy(Request $request,$id="")
   {
       
    
    
       return view('trophy',compact('id'));
   }
    public function trophy_add(Request $request)
    {
     
   // dd($request);
       try {
         $data=$request->except(['_token']);
         //dd($data);
//$data['awardee_id']=$id;
    //  $email=Awardee::where('id',$id)->select('email')->pluck('email')->first();
    $email= $request->email ;
     // dd($email);
        Trophy::Create($data);  
         $data = array(

                'name' => 'Dear Madam',
                
                ); 
                
       Mail::to($email)->send(new TrophyMail($data));
        // return back()->with('alert','Submit Sucessfully!');
      /*  $output = array('msg' => 'Thank you for Applying!!');
       return back()->with('success', $output);*/
		    return Redirect::back()->with('error_code', 6);
        
         } catch (Exception $e) {
             DB::rollBack();
             Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
             report($e);
             $output = array('msg' => $e->getMessage());
             return back()->withErrors($output)->withInput();
         }
    }
	public function guest_of_honour(Request $request)
    {
        $globalsummit_guest_of_honour =  Globalsummit::where('type',7)->where('image','!=',NULL)->get();
        return view('guest_of_honour',compact('globalsummit_guest_of_honour'));

    }
    public function global_summit_jury(Request $request)
    {
        $globalsummit=Globalsummit::query();
        $globalsummit_jury =  $globalsummit->where('type',1)->where('image','!=',NULL)->paginate(50);
        return view('globalsummit_jury',compact('globalsummit_jury'));

    }
    public function global_summit_moderator(Request $request)
    {
        $globalsummit=Globalsummit::query();
        $globalsummit_moderator =  $globalsummit->where('type',13)->where('image','!=',NULL)->paginate(50);
        return view('globalsummit_moderator',compact('globalsummit_moderator'));

    }
    public function global_summit_faces(Request $request)
    {
        $globalsummit=Globalsummit::query();
        $globalsummit_faces =  $globalsummit->where('type',3)->where('image','!=',NULL)->paginate(50);
        return view('globalsummit_faces',compact('globalsummit_faces'));

    }
    public function global_summit_support(Request $request)
    {
        $globalsummit=Globalsummit::query();
        $globalsummit_support =  $globalsummit->where('type',19)->where('image','!=',NULL)->get();
        return view('global_summit_support',compact('globalsummit_support'));

    }
    public function global_summit_sponser(Request $request)
    {
        $globalsummit=Globalsummit::query();
    $globalsummit_sponser =  $globalsummit->where('type',16)->where('image','!=',NULL)->paginate(12);
    return view('global_summit_sponser',compact('globalsummit_sponser'));

    }
	 public function guestofhonour(Request $request)
    {
    $globalhonour =  Globalsummit::where('type',7)->where('image','!=',NULL)->get();
    return view('globalhonour',compact('globalhonour'));

    }
    public function global_summit_partner(Request $request)
    {
        $globalsummit=Globalsummit::query();
    $globalsummit_partner =  $globalsummit->where('type',17)->where('image','!=',NULL)->paginate(50);
    return view('global_summit_partner',compact('globalsummit_partner'));

    }
    public function global_sponser_wepitch(Request $request)
    {
        $globalsummit=Globalsummit::query();
    $globalsummit_sponser_wepitch =  $globalsummit->where('type',11)->where('image','!=',NULL)->paginate(50);
    return view('global_sponser_wepitch',compact('globalsummit_sponser_wepitch'));

    }
}
