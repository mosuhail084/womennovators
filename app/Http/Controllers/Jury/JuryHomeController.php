<?php
namespace App\Http\Controllers\Jury;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\User;
use App\Models\Event;
use App\Models\Jury;
use App\Models\Eventcomment;
use App\Models\Markingevent;
use Illuminate\Http\Request;
use Hash;
use DB;
class JuryHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()   
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $event = DB::table('juryevents')
        ->leftjoin('events','events.id','juryevents.event_id')
        ->where('juryevents.jury_id',auth()->user()->id)
        ->select('events.*')->get();
        return view('jury.index', compact( 'event'));
    }
    public function eventmarkingStore(Request $request)
    {
       
       // dd($request);
    
    
    try {
        $data=$request->except(['_token']);
        $count=count($request->marks);
        //$count_marks=count($request->mrk_upt[0]);
        //dd($request->mrk_upt[1]);
        if(!empty($request->mrk_upt[0]))
        {
            for($i=0;$i<$count;$i++){
                  $mrv= DB::table('markingevents')
                ->where('markingschema_id', $request->markingschema_id[$i])
                ->where('event_id',$request->event_id[$i])
                ->where('user_id',$request->user_id[$i])
                ->where('jury_id' , auth()->user()->id)
                ->update([
                            
                             'marks'                    =>   $request->marks[$i],
                      //       'created_at'             =>     date('y-m-d'),
                             'updated_at'               =>    date('y-m-d'),
                         ]);
     //dd($mrv); die;
             }
          
              $output = array('msg' => 'marking updated successfully');
              return back()->with('success', $output); 
        }
        else
        {
            $request->validate([
                'marks.*' => "required"
            ]);
            for($i=0;$i<$count;$i++){
                $mrv= DB::table('markingevents')->insert([
                             'event_id'   	=>     $request->event_id[$i],
                             'user_id'   	=>     $request->user_id[$i],
                             'markingschema_id'   	=>     $request->markingschema_id[$i],
                             'marks'     =>   $request->marks[$i],
                             'jury_id'     =>    auth()->user()->id,
                             'created_at'			    =>	   date('y-m-d'),
                             'updated_at'              =>    date('y-m-d'),
                         ]);
     //dd($mrv); die;
             }
          
              $output = array('msg' => 'marking submit successfully');
              return back()->with('success', $output); 
        }
       
        return back()->with('alert','Thank you for contacting us – we will get back to you soon!');
   
    } catch (Exception $e) {
        DB::rollBack();
        Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
        report($e);
        $output = array('msg' => $e->getMessage());
        return back()->withErrors($output)->withInput();
    }
    }
   public function eventuserList($id)
    {
       // dd($id);
        $event = DB::table('juryevents')
        ->leftjoin('events','events.id','juryevents.event_id')
        ->where('juryevents.jury_id',auth()->user()->id)
        ->select('events.*')->select('juryevents.jury_id')->pluck('juryevents.jury_id')->first();
       // dd($event);
        if($event == null){
            return redirect()->route('home');
        }
        else {
            $type=DB::table('events')->where('id',$id)->select('type')->pluck('type')->first();
            //dd( $type);
            if($type==1)
            {
                $eventuserList = DB::table('userevents')
                ->leftjoin('users','users.id','userevents.user_id')
                ->where('userevents.event_id',$id)
                ->select('users.*')->distinct()->get();
                $eventuserLists = DB::table('userevents')
                ->leftjoin('users','users.id','userevents.user_id')
                ->where('userevents.event_id',$id)
                ->select('users.*')->first();
                
                //dd($eventuserList);
                $comment=DB::table('eventcomments')
                ->leftjoin('users','users.id','eventcomments.user_id')
                ->where('users.id',$eventuserLists->id)
                ->where('eventcomments.event_id',$id)
                ->where('eventcomments.jury_id',auth()->user()->id)
                ->get();
          
               // dd($comment[0]->comment);
               
                return view('jury.jurycomment_edit', compact( 'eventuserList','id','eventuserLists','comment'));
            }
            else
            {
                $eventuserList = DB::table('userevents')
                ->leftjoin('users','users.id','userevents.user_id')
                ->where('userevents.event_id',$id)
                ->select('users.*')->distinct()->get();
                $eventuserLists = DB::table('userevents')
                ->leftjoin('users','users.id','userevents.user_id')
                ->where('userevents.event_id',$id)
                ->select('users.*')->first();
                
                $markingqList = DB::table('users')
                ->leftjoin('categories','categories.id','users.usercategory')
                ->leftjoin('markingschemas','markingschemas.category_id','categories.id')
                ->where('users.id',$eventuserLists->id)
                ->select('markingschemas.*','users.name')->get();

                $comment=DB::table('eventcomments')
                ->leftjoin('users','users.id','eventcomments.user_id')
                ->where('eventcomments.jury_id',auth()->user()->id)
                ->where('eventcomments.event_id',$id)
                ->select('eventcomments.*','eventcomments.id as id')
                ->first();

                //dd($comment);
                return view('jury.eventuserlistt', compact( 'eventuserList','id','markingqList','eventuserLists','comment'));
            }
             
           
        }
       
    }
 public function eventuserLists(Request $request)
    {
       //dd($request);
       
     /* $markingedit = Markingevent::where('event_id',$request->eventid)->
      where('user_id',$request->userid)->where('jury_id',auth()->user()->id)->get();
      dd($markingedit);die;*/
        $event = DB::table('juryevents')
        ->leftjoin('events','events.id','juryevents.event_id')
        ->where('juryevents.jury_id',auth()->user()->id)
        ->select('events.*')->select('juryevents.jury_id')->pluck('juryevents.jury_id')->first();
       // dd($event);
       $id = $request->eventid;
        if($event == null){
            return redirect()->route('home');
        }
        else {
            $eventuserList = DB::table('userevents')
            ->leftjoin('users','users.id','userevents.user_id')
            ->where('userevents.event_id',$request->eventid)
            ->select('users.*','userevents.event_id')->distinct()->get();
          //  dd($eventuserList);

        //  $sum = Markingevent::where('user_id',$eventuserList->id)->sum('marks');

        //  dd($sum);
            $userList = DB::table('users')
            ->leftjoin('categories','categories.id','users.usercategory')
            ->where('users.id',$request->userid)
            ->select('users.*','categories.categoryname')->first();

            $markingqList = DB::table('users')
            ->leftjoin('categories','categories.id','users.usercategory')
            ->leftjoin('markingschemas','markingschemas.category_id','categories.id')           
            ->where('users.id',$request->userid)      
            ->select('markingschemas.*','users.name')->get();
            
           // dd($markingqList);
             $date = Event::where('id',$_GET['eventid'])->pluck('end_date')->first();
            $crr=date('Y-m-d');
            if($date<=$crr)
            {
                $status=1;

            }
            else{
                $status=0;
            }
            return view('jury.eventuserlist', compact( 'status','eventuserList','userList','id','markingqList')); 
           
        }
       
    }
    public function eventusersList(Request $request)
    {
      //  dd($request);
          $id=$request->event;
        $event = DB::table('juryevents')
        ->leftjoin('events','events.id','juryevents.event_id')
        ->where('juryevents.jury_id',auth()->user()->id)
        ->select('events.*')->select('juryevents.jury_id')->pluck('juryevents.jury_id')->first();
       // dd($event);
        if($event == null){
            return redirect()->route('home');
        }
        else {
              $eventuserList = DB::table('userevents')
            ->leftjoin('users','users.id','userevents.user_id')
            ->where('userevents.event_id',$id)
            ->select('users.*')->distinct()->get();
            $userList = DB::table('userevents')
            ->leftjoin('users','users.id','userevents.user_id')
            ->where('userevents.event_id',$id)
            ->select('users.*')->first();
         //  dd($userList);
          $markingqList = DB::table('users')
          ->leftjoin('categories','categories.id','users.usercategory')
          ->leftjoin('markingschemas','markingschemas.category_id','categories.id')
          ->where('users.id',$userList->id)
          ->select('markingschemas.*','users.name')->get();
            return view('jury.eventuserlist', compact( 'eventuserList','id','markingqList')); 
           
        }
       
    }
    public function editProfile(Request $request)
    {
        $id = auth()->user()->id;
        $profile = Jury::where('id', $id)->first();
        return view('jury.editprofile', compact('id', 'profile'));
    }
    public function update(Request $request)
    {
      //  dd($request);
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        try {
            $date = date("Y-m-d") ;
            $id = auth()->user()->id;
            $a=DB::table('users')->where('id',$id)->update([ 
                'password'         =>  Hash::make($request->password) ,
                'email'         =>  $request->email ,
                'updated_at'         =>  $date
                ]);
                if($a)
                {
                    return redirect()->back()->with('alert', 'password changed Sucessfully!');
                }
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
    }
 public function profileUpdate(Request $request)
    {
       // dd($request);
        $request->validate([
            'email' => 'required'
        ]);

        try {
            $id = auth()->user()->id;
            $data=$request->except(['_token']);
            if($request->hasFile('photo'))
            {
                $file=$request->file('photo');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('backEnd/juryimage/',$filename);
                $data['photo']=$filename;
            }
            Jury::find($id)->update($data);
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
    
    public function commentsave(Request $request,$id="")
    {
        //dd($request);
         
            $request->validate([
                'comment' => 'required'
            ]);
    
            try {

                if($request->comt_edit!=NULL)
                {
                   
                          $mrv= DB::table('eventcomments')
                        ->where('user_id', $request->user_id)
                        ->where('jury_id', auth()->user()->id)
                        ->where('event_id', $request->event_id)
                        ->update([
                           
                            'comment'         =>   $request->comment,
                                 ]);
                            
                  
                      $output = array('msg' => 'Updated successfully');
                      return back()->with('success', $output); 
                }
                else{
                DB::table('eventcomments')->insert([ 
                    'user_id'         =>   $request->user_id,
                   'jury_id'         =>   auth()->user()->id,
                   'event_id'         =>  $request->event_id ,
                   'comment'         =>   $request->comment,
                   ]);
                $output = array('msg' => 'Created Successfully');
                return back()->with('success', $output);
                }
            } catch (Exception $e) {
                DB::rollBack();
                Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
                report($e);
                $output = array('msg' => $e->getMessage());
                return back()->withErrors($output)->withInput();
            }
    }

    public function commentedit(Request $request)
    {
      // dd($request);
      
        $event = DB::table('juryevents')
        ->leftjoin('events','events.id','juryevents.event_id')
        ->where('juryevents.jury_id',auth()->user()->id)
        ->select('events.*')->select('juryevents.jury_id')->pluck('juryevents.jury_id')->first();
       // dd($event);
       $id = $request->eventid;
        if($event == null){
            return redirect()->route('home');
        }
        else {
            $eventuserList = DB::table('userevents')
            ->leftjoin('users','users.id','userevents.user_id')
            ->where('userevents.event_id',$request->eventid)
            ->select('users.*','userevents.event_id')->distinct()->get();
          //  dd($eventuserList);

        //  $sum = Markingevent::where('user_id',$eventuserList->id)->sum('marks');

        //  dd($sum);
            $userList = DB::table('users')
            ->leftjoin('categories','categories.id','users.usercategory')
            ->where('users.id',$request->userid)
            ->select('users.*','categories.categoryname')->first();

             $comment=DB::table('eventcomments')
            ->leftjoin('users','users.id','eventcomments.user_id')
            ->where('users.id',$_GET['userid'])
            ->where('eventcomments.jury_id',auth()->user()->id)
            ->select('eventcomments.*','eventcomments.id as id')
            ->first();

          // dd($userList);
          
           $stat=Eventcomment::where('user_id',$_GET['userid'])->where('jury_id',auth()->user()->id)->first();
            //dd($stat);

           $date = Event::where('id',$_GET['eventid'])->pluck('end_date')->first();
            $crr=date('Y-m-d');
            if($date<=$crr)
            {
                $status=1;

            }
            else{
                $status=0;
            }
            
           //dd($status);
           
            return view('jury.jurycomment',compact('eventuserList','userList','id','comment','status','stat')); 
           
        }
       
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
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
    public function destroy(Contact $contact)
    {
        //
    }
}