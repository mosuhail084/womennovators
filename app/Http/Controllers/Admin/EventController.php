<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Sector;
use App\Models\State;
use App\Models\City;
use App\Models\Jury;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Imports\UserImport;
use App\Imports\YoutubeImport;
use Maatwebsite\Excel\HeadingRowImport;
use Image;
use Excel;
use DB;
use Illuminate\Support\Facades\Mail;
class EventController extends Controller
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
    public function mailStore(Request $request)
    {
      //  dd($request);
        $request->validate([
            'subject' => 'required',
            'msg' => 'required'
        ]);

        try {
            $jury = DB::table('juryevents')
            ->leftjoin('juries','juries.id','juryevents.jury_id')
            ->where('juryevents.event_id',$request->jury)
            ->pluck('email')->toArray();
          
            $data=$request->except(['_token']);
         //   dd($data['subject']); die;
         if (!empty($jury)) {
            foreach ($jury as $jury) {
                $juryname  = Jury::where('email',$jury)->pluck('name')->first();
                $data = array(
                    'juryy' =>  $juryname,
                    'subject' =>  $data['subject'],
                    'msg' =>  $request->msg
               );
              //  dd($jurye);
                Mail::send('emails.juryform', $data, function ($msg) use($data, $jury){
                    $msg->to($jury);
                    $msg->subject($data['subject']);
                 }); 
            }
        }
            
            $output = array('msg' => 'Mail Sent Successfully');
            return back()->with('success', $output);
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
    }
    public function index()
    {
        
        $eventDatas = Event::latest()->with('sector','city')->get();
    //  dd($eventDatas);
        return view('backEnd.event.index',compact('eventDatas'));
    }
    public function eventList($id)
    {
        $juryDatas = DB::table('juryevents')
       ->leftjoin('juries','juries.id','juryevents.jury_id')
       ->where('juryevents.event_id',$id)
       ->select('juries.*')->get();
    //  dd($eventDatas);
    $userDatas = DB::table('userevents')
       ->leftjoin('users','users.id','userevents.user_id')
       ->where('userevents.event_id',$id)
       ->select('users.*')->get();
       $event = DB::table('events')
       ->leftjoin('sectors','sectors.id','events.sector_id')
       ->leftjoin('cities','cities.id','events.city_id')
       ->where('events.id',$id)
       ->select('events.*','cities.name','sectors.sectorname')->first();
        return view('backEnd.event.eventdetails',compact('juryDatas','userDatas','event','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
          $user = User::latest()->get();
        $jury = Jury::latest()->get();
            $state = State::latest()->get();
            $sector = Sector::latest()->get();
            if ($request->ajax()) {
                if (isset($request->category_id)) {
                 
                    echo "<option>Please Select One</option>";
                    foreach (City::where('state_id', $request->category_id)->get() as $sub) {
    
                        echo "<option value='" . $sub->id . "'>" . $sub->name . "</option>";
                    }
                }
            } else {
                return view('backEnd.event.create',compact('jury','state','sector','user'));
            }
    }
public function edit($id = '')
    {
        $city = City::latest()->get();
        $state = State::latest()->get();
        $sector = Sector::latest()->get();
        $jury = Jury::latest()->get();
        $eventjury = DB::table('juryevents')->where('event_id', $id)->get();
        $event = Event::where('id', $id)->with('city','sector')->first();
         $user = User::latest()->get();
        $userjury = DB::table('userevents')->where('event_id', $id)->get();
        // dd($eventjury);
        return view('backEnd.event.edit', compact('id','sector','event','state','jury','eventjury','userjury','user'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function youtubeStore(Request $request)
    {
        $request->validate([
            'file' => 'required'
        ]);

        try {
            $data=$request->except(['_token']);
            $file=$request->file;
            $data = $request->except(['_token']);
            $dataa=Excel::toArray(new YoutubeImport, $file);
            foreach ($dataa[0] as $key => $value) {
                $username   = User::where('name',$value['name'])
                ->pluck('id')->first();

               if($username != NULL){

               DB::table('users')->where('id',$username)->update([
                'youtubelink'  =>$value['youtubelink']
                 ]);
            
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
     * Display the specified resource.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     //dd($request);
      
  
      $request->validate([
            'event_name' => 'required',
            'type' => 'required'
        ]);

        try {
            $data=$request->except(['_token']);
			if ($request->hasFile('poster')) {

                $file = $request->file('poster');

                $extension = $file->getClientOriginalExtension();

                $filename = time() . '.' . $extension;

                $file->move('we/images/', $filename);

   

                $data['poster'] = $filename;

            }
            if($request->has('jury_id')){
                $data['jury_id'] = implode(',', $request->jury_id);
                }
                $jury_mails = Jury::wherein('id',$request->jury_id)->pluck('email')->toArray();
               // dd($Juryid); die;
               //dd($data);

                $eventid =  Event::Create($data);
               $eventid->save();
               $evid = $eventid->id;
               
            foreach($request->jury_id as $jury_id){
               
                DB::table('juryevents')->insert([
                            'event_id'      =>     $evid,
                            'jury_id'     =>     $jury_id,
                            'created_at'                =>     date('y-m-d'),
                            'updated_at'              =>    date('y-m-d'),
                        ]);
                  /*     */ 
                       
            }
            if($request->has('user_id')){
            foreach($request->user_id as $user_id){
               
                DB::table('userevents')->insert([
                            'event_id'      =>     $evid,
                            'user_id'     =>     $user_id,
                            'created_at'                =>     date('y-m-d'),
                            'updated_at'              =>    date('y-m-d'),
                        ]);
                  /*     */ 
                       
            }
        }
        //  die;
        $data = array(
            'city' => $request->city_id,
            'Eventname' => $request->event_name,
            'Date' => $request->start_date,
       );

        
       if($request->has('file'))
       {
       $file=$request->file;
       $data = $request->except(['_token']);
       //echo "hello ";die;
       $dataa=Excel::toArray(new UserImport, $file);
       foreach ($dataa[0] as $key => $value) {
         
        
          
           $name=DB::table('users')->where('name',$value['name'])->select('name')->pluck('name')->first();
          
          // dd($email_check);
           if($request->type==1)
           {
            if($value['name'] != Null && $name == NULL){

          
                $db['name']=$value['name'];
                 $db['usercategory']=$value['usercategory'];
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
                $db['about_us']=$value['about_us'];
                $userid = User::Create($db);
                $userid->save();
                //echo "sdcns";die;
            $useid = $userid->id; 
           // dd($useid );
                 DB::table('userevents')->insert([
                             'event_id'       =>     $evid,
                             'user_id'     =>     $useid,
                                'created_by'     =>    auth()->user()->id,
                             'created_at'             =>     date('y-m-d'),
                             'updated_at'              =>    date('y-m-d'),
                         ]);
                 }
                  

           }
           else
           {
            $cat=strip_tags(str_replace(' ', '',strtolower($value['usercategory'])));
          // dd($cat);
           if($cat=="professionalleaders"||$cat=="professional/leaders"||$cat=="service"||$cat=="digitalinfluencer"||$cat=="others")
           {
              // $usercategory=array();
               $usercategory="Professional/Leaders";
              // dd($usercategory);die;
           }
          else if($cat=="business"||$cat=="selfemployed"||$cat=="enterpreneur")
           {
               $usercategory="Enterpreneurs";
           }
           else if($cat=="socialactivist")
           {
               $usercategory="Social Activist";
           }
          // dd($usercategory);
  
              $userctgry   = Category::where('categoryname',$usercategory)
             ->pluck('id')->first();

            if($value['name'] != Null && $userctgry != NULL && $name == NULL){

          
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
                $db['about_us']=$value['about_us'];
                $userid = User::Create($db);
                $userid->save();
                //echo "sdcns";die;
            $useid = $userid->id; 
           // dd($useid );
                 DB::table('userevents')->insert([
                             'event_id'       =>     $evid,
                             'user_id'     =>     $useid,
                                'created_by'     =>    auth()->user()->id,
                             'created_at'             =>     date('y-m-d'),
                             'updated_at'              =>    date('y-m-d'),
                         ]);
                 }
                  
           }
         

         
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request, $id = '')
    {
      //  dd($id);
        $request->validate([
           // 'city_id' => 'required',
           //'sector_id' => 'required',
            'event_name' => 'required'
        ]);


        try {
            $data=$request->except(['_token']);
           $up= Event::find($id)->update($data);
           //dd($up);
                    
           
           if($up=="true")
           {
            if($request->has('jury_id')){
                $data['jury_id'] = implode(',', $request->jury_id);
                
                DB::table('juryevents')->where('event_id',$id)->delete();
            foreach($request->jury_id as $jury_id){
                DB::table('juryevents')->insert([
                            'event_id'      =>     $id,
                            'jury_id'     =>     $jury_id,
                         
                            'created_at'                =>     date('y-m-d'),
                            'updated_at'              =>    date('y-m-d'),
                        ]);
            }
        }
        if($request->has('user_id')){
            $data['user_id'] = implode(',', $request->user_id);
           // dd($data);
            DB::table('userevents')->where('event_id',$id)->delete();
        foreach($request->user_id as $user_id){
            DB::table('userevents')->insert([
                        'event_id'      =>     $id,
                        'user_id'     =>     $user_id,
                     
                        'created_at'                =>     date('y-m-d'),
                        'updated_at'              =>    date('y-m-d'),
                    ]);
        }
    }
           }
         
            if($request->has('file'))
            {
                $file=$request->file;
               // $data = $request->except(['_token']);
               $dataa=Excel::toArray(new UserImport, $file);
            foreach ($dataa[0] as $key => $value) {
                $cat=str_replace(' ', '',strtolower($value['usercategory']));
               // dd($cat);
               if($request->type==1)
           {
            if($value['name'] != Null &&  $name == NULL){

          
                $db['name']=$value['name'];
                 $db['usercategory']=$value['usercategory'];
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
                $db['about_us']=$value['about_us'];
                $userid = User::Create($db);
                $userid->save();
                //echo "sdcns";die;
            $useid = $userid->id; 
           // dd($useid );
                 DB::table('userevents')->insert([
                             'event_id'       =>     $evid,
                             'user_id'     =>     $useid,
                                'created_by'     =>    auth()->user()->id,
                             'created_at'             =>     date('y-m-d'),
                             'updated_at'              =>    date('y-m-d'),
                         ]);
                 }
                  

           }
           else
           {
            $cat=strip_tags(str_replace(' ', '',strtolower($value['usercategory'])));
            // dd($cat);
             if($cat=="professionalleaders"||$cat=="professional/leaders"||$cat=="service"||$cat=="digitalinfluencer"||$cat=="others")
             {
                // $usercategory=array();
                 $usercategory="Professional/Leaders";
                // dd($usercategory);die;
             }
            else if($cat=="business"||$cat=="selfemployed"||$cat=="entrepreneurs"||$cat=="Entrepreneurs")
             {
                 $usercategory="Enterpreneurs";
             }
             else if($cat=="socialactivist")
             {
                 $usercategory="Social Activist";
             }
           //dd($usercategory);
             
              $userctgry   = Category::where('categoryname',$usercategory)
             ->pluck('id')->first();

            if($value['name'] != Null && $userctgry != NULL &&  $name == NULL){

          
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
                $db['about_us']=$value['about_us'];
                $userid = User::Create($db);
                $userid->save();
                //echo "sdcns";die;
            $useid = $userid->id; 
           // dd($useid );
                 DB::table('userevents')->insert([
                             'event_id'       =>     $evid,
                             'user_id'     =>     $useid,
                                'created_by'     =>    auth()->user()->id,
                             'created_at'             =>     date('y-m-d'),
                             'updated_at'              =>    date('y-m-d'),
                         ]);
                 }
                  
           }
        }
    }

            $output = array('msg' => 'Updated Successfully');
            return redirect('admin/event')->with('success', $output);
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
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = '')
    {
           try {
            Event::destroy($id);
               $output = array('msg' => 'Deleted Successfully');
               return redirect('admin/event')->with('statuss', $output);
           } catch (Exception $e) {
               DB::rollBack();
               Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
               report($e);
               $output = array('msg' => $e->getMessage());
               return back()->withErrors($output)->withInput();
           }
       }
}
