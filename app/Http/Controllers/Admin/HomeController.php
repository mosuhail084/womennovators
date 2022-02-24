<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\User;
use App\Models\Jury;
use App\Models\Event;
use App\Models\Warrior_appreciation;
use App\Models\Payment_detail;
use App\Models\Covid_contact;
use App\Models\Covidwarrior;
use Illuminate\Http\Request;
use Hash;
use DB;
class HomeController extends Controller
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
        $event = Event::count();
        $user = User::count();
        $jury = Jury::count();
        
        $join = Warrior_appreciation::count();
        $order = Payment_detail::count();
        $enquiry = Covid_contact::count();
        $warrior = Covidwarrior::count();
        
        return view('backEnd.index', compact('jury','event','user','join','order','enquiry','warrior'));
    }
    public function editProfile(Request $request)
    {
        $id = auth()->user()->id;
        $profile = User::where('id', $id)->first();
        return view('backEnd.editprofile', compact('id', 'profile'));
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
