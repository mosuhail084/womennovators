<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\Jury;
use App\Models\User;
class MobileloginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    // public function __construct()
    // {
    //     $this->middleware('guest:admin');
    // }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function loginMobile()
    {
        return view('auth.loginmobile');
    }
    public function loginEmail()
    {
        return view('auth.loginfaceemail');
    }
    public function loginOtp($id)
    {
        return view('auth.loginotp',compact('id'));
    }
    public function loginemailOtp($id)
    {
        return view('auth.loginfacesotp',compact('id'));
    }
    public function otpResend(Request $request,$id="")
    {
        $user= Jury::where('id',$id)->first();
       // dd($user);
        $otp = sprintf("%06d", mt_rand(1,999999));
           $request->session()->put('otp', $otp);
           $data = array(
            'otp' =>  $otp,
             'email' => $user->email,
    );
    
     Mail::send('emails.juryotp', $data, function ($msg) use($data){
         $msg->to($data['email']);
         $msg->subject('We-Pitch Otp Verify');
      });
           return back()->with('alert','otp resend to your email please check');
    }
    public function emailotpResend(Request $request,$id="")
    {
        $user= User::where('id',$id)->first();
       // dd($user);
        $otp = sprintf("%06d", mt_rand(1,999999));
           $request->session()->put('otp', $otp);
           $data = array(
            'otp' =>  $otp,
             'email' => $user->email,
    );
    
     Mail::send('emails.facesotp', $data, function ($msg) use($data){
         $msg->to($data['email']);
         $msg->subject('We-Pitch Otp Verify');
      });
           return back()->with('alert','otp resend to your email please check');
    }
    public function emailStore(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);
        try {
            $user =   User::where('email', $request->email)->first();
if (!$user) {
    return redirect()->back()->with('error', 'Oops! You have entered invalid email');
 }
            $email = User::where('email', $request->email)->select('email')->pluck('email')->first();
            $id = User::where('email', $request->email)->select('id')->pluck('id')->first();
         // dd($id);
            if($email)
           {
            $otp = sprintf("%06d", mt_rand(1,999999));
            $request->session()->put('otp', $otp);
            $data = array(
                'otp' =>  $otp,
                 'email' =>  $email,
        );
       
         Mail::send('emails.facesotp', $data, function ($msg) use($data){
             $msg->to($data['email']);
             $msg->subject('We-Pitch Otp Verify');
          });
            return redirect('loginemailotp/'.$id);
         //   return  view('auth.loginotp');
           }
           else
           {
            $output = array('msg' => 'Please enter valid email');
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
    public function mobileStore(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);
        try {
            $jury =   Jury::where('email', $request->email)->first();
if (!$jury) {
    return redirect()->back()->with('error', 'Oops! You have entered invalid email');
 }
            $email = Jury::where('email', $request->email)->select('email')->pluck('email')->first();
            $id = Jury::where('email', $request->email)->select('id')->pluck('id')->first();
         // dd($id);
            if($email)
           {
            $otp = sprintf("%06d", mt_rand(1,999999));
            $request->session()->put('otp', $otp);
            $data = array(
                'otp' =>  $otp,
                 'email' =>  $email,
        );
       
         Mail::send('emails.juryotp', $data, function ($msg) use($data){
             $msg->to($data['email']);
             $msg->subject('We-Pitch Otp Verify');
          });
            return redirect('loginotp/'.$id);
         //   return  view('auth.loginotp');
           }
           else
           {
            $output = array('msg' => 'Please enter valid email');
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
    public function otpStore(Request $request)
    {
        $request->validate([
            'otp' => 'required|numeric'
        ]);
        try {
            $mobileno = Jury::where('id', $request->id)->first();
              $otp=$request->otp;
           $otpm = $request->session()->get('otp');
            if($otp == $otpm )
            {
                Auth::login($mobileno);
                    return redirect()->intended(route('home'));
              
            }
            else{
                $output = array('msg' => 'Otp did not match');
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
    public function otpemailStore(Request $request)
    {
        $request->validate([
            'otp' => 'required|numeric'
        ]);
        try {
            $mobileno = User::where('id', $request->id)->first();
         //   dd($mobileno);
              $otp=$request->otp;
           $otpm = $request->session()->get('otp');
            if($otp == $otpm )
            {
                Auth::guard('user')->loginUsingId($mobileno->id);;
                    return redirect()->intended(route('user.home'));
              
            }
            else{
                $output = array('msg' => 'Otp did not match');
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
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
}
