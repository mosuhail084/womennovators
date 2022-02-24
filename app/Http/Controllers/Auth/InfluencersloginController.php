<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Influencer;
use App\Models\Influencer_profile;
use Auth;
use DB;
class InfluencersloginController extends Controller
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
    public function __construct()
    {
        $this->middleware('guest:user');
    }


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function index()
    {   //dd('hi');
        return view('influencers.influencerslogin');
    }
    public function redirectToLinkedin()
     {
         return Socialite::driver('linkedin')->redirect();
     }
     //Linkedin callback
     public function handleLinkedinCallback()
     {
         $user = Socialite::driver('linkedin')->user();
         $this->_registerorloginuser($user);
 
         //Return home after login
         return redirect()->route('user.home');
     }
    public function login(Request $request)
    {
       // dd($request);
       $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        /* $user_first_login_id=Influencer::where('email',$request->email)->select('id')->pluck('id')->first();
         $user_login=Influencer_profile::where('influencer_id', $user_first_login_id)->first();
        // dd($user_login);*/
      //  dd($user_first_login_id);
    if (  Auth::guard('influencer')->attempt(['email' => $request->email, 'password' => $request->password],$request->remember)) {
        /*if($user_login==NULL)
        {
             return redirect()->intended(route('influencer.wizard'));
           
        }
        else*/
       return redirect()->intended(route('influencer.home')); 
       
    }
    $output = array('msg' => 'Oppes! You have entered invalid credentials');
    return redirect()->back()->with('statuss', $output);
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    //Google callback
    public function handleGoogleCallback()
    {
        
        $user = Socialite::driver('google')->stateless()->user();
       // dd($user['email']);
        $this->_registerorloginuser($user);

        //Return home after login
          $user_first_login_id=Influencer::where('email',$user['email'])->select('id')->pluck('id')->first();
          
         $user_login=Influencer_profile::where('influencer_id', $user_first_login_id)->select('id')->pluck('id')->first();
         // dd($user_login);
        
        if($user_login==NULL)
        {
             return redirect()->intended(route('influencer.wizard'));
           
        }
        else
       return redirect()->intended(route('influencer.home')); 
    }
    //Facebook Login
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    //Facebook callback
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->stateless()->user();
        $this->_registerorloginuser($user);

        //Return home after login
        return redirect()->route('influencer.home');
    }
    protected function _registerorloginuser($data)
    {
       // dd($data);
     $user = Influencer::where('email', '=', $data->email)->first();
     if(!$user) {
         $user = new influencer();
         $user->name = $data->name;
         $user->email = $data->email;
         $user->provider_id = $data->id;
         $user->save();
           //  Auth::login($user);
   Auth::guard('influencer')->login($user);
     }
  else
  {
       DB::table('influencers')->where('email',$data->email)->update([          
             	
                'provider_id'         =>  $data->id,
                'updated_at'              =>    date('y-m-d'),
                ]);
         Auth::guard('influencer')->login($user);
  }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
}
