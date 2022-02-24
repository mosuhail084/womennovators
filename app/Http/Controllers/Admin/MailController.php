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
use App\Mail\MailEventNotification;
use Image;
use Excel;
use DB;
use Mail;
class MailController extends Controller
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
        
     //   $eventDatas = Event::latest()->with('sector','city')->get();
    //  dd($eventDatas);
        return view('backEnd.mail.index',compact('eventDatas'));
    }
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       // dd($request);
        $jury = Jury::latest()->get();
        $user = User::latest()->get();
        $event = Event::latest()->get();
        /*$event_id=56;
        
        
           $a=DB::table('juries')->join('juryevents','juryevents.jury_id','juries.id')->where('juryevents.event_id', $event_id)->get();
            dd($a);*/
           
            //dd($temp);
            //echo"hi";die;
           
           if ($request->ajax()) {
                if (isset($request->event_id)) {
                 
                    echo "<option disabled>Please Select One</option>";
                    foreach (DB::table('juries')->join('juryevents','juryevents.jury_id','juries.id')->where('juryevents.event_id', $request->event_id)->get() as $sub) {
    
                        echo "<option value='" . $sub->id . "'>" . $sub->name . "</option>";
                    }
                    
                
                }
            }
            else {
                return view('backEnd.mail.create',compact('jury','event','user'));
            }
           
    }
    public function face(Request $request)
    {

     // $all_data= $request->all();
    //  print_r($all_data);die;
        // echo"Hi";die;
     //  $event_id=$_GET['event_id'];
       // print_r($_GET['event_id']);die;

        if ($request->ajax()) {
            if (isset($request->event_id)) {
             
                echo "<option disabled>Please Select One</option>";
                foreach (DB::table('userevents')->join('users','users.id','userevents.user_id')
                ->where('userevents.event_id', $request->event_id)->get() as $sub) {
                //  dd($sub);
                    echo "<option value='" . $sub->id . "'>" . $sub->name . "</option>";
                }
            }
        } 
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
      
  
      /* $request->validate([
            'city_id' => 'required', 'sector_id' => 'required',
            'event_name' => 'required', 'file' => 'required'
        ]);*/

        try {
            $data=$request->except(['_token']);
            $event = Event::where('id',$request->event_id)->first();
            $data = array(

            'Eventname' => $event->event_name,
            'description' => $request->description,
            );
            if($request->has('user_id')){
               // $data['user_id'] = implode(',', $request->user_id);
                $user_mails = User::wherein('id',$request->user_id)->pluck('email')->toArray();
                //dd($user_mails);die;
                foreach($user_mails as $user_mail)
                {   
                 // dd($data);
                    Mail::to($user_mail)->send(new MailEventNotification ( $data ));
                    
                }
                }
            if($request->has('jury_id')){
            $data['jury_id'] = implode(',', $request->jury_id);
            $jury_mails = Jury::wherein('id',$request->jury_id)->pluck('email')->toArray();
            foreach($jury_mails as $jury_mail)
            {
                Mail::to($jury_mail)->send(new MailEventNotification ( $data ));
            }
            }
            //$jury_mails = Jury::wherein('id',$request->jury_id)->pluck('email')->toArray();
           // dd($jury_mails);
            
            //Mail::to($jury_mails)->send(new MailEventNotification ( $data ));
           
            
          
           
            //Mail::to($user_mails)->send(new MailEventNotification ( $data ));
            //dd($jury_mails); die;
            

       

        //Mail::to($jury_mails)->send(new MailEventNotification ( $data ));
      
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
}