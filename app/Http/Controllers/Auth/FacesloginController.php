<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\Masteruser;
use App\Mail\Mailfaces;
use App\Mail\RecoveryMailfaces;
use Mail;
use Hash;
use Illuminate\Support\Facades\Redirect;

use Crypt;
use DB;
class FacesloginController extends Controller
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
	/*public function __construct()
{
    $this->middleware('auth');

    $this->middleare(function($request,$next){
        $this->user=Auth::user(); // here the user should exist from the session
        return $next($request)
    });
}*/
    public function __construct()
    {
        $this->middleware('guest:user');
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function index($id="")
    {
		//dd($id);
		
	/*	if($id!="")
       {
			$id= Crypt::decrypt($id) ;
         $a= Masteruser::where('id',$id)->update(['role_id'=>1]);
			//dd($id);
		$data=Masteruser::where('id',$id)->first();
			
			 return view('faces.editprofile',compact('id'));
        
		
       }*/
		
        return view('faces.faceslogin');
		
    }
     //Linkedin Login
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
            'password' => ['required'],
        ]);
        //print_r($a);die;
		$role=Masteruser::where('email',$request->email)->select('role_id')->pluck('role_id')->first();
		$idold=Masteruser::where('email',$request->email)->select('id')->pluck('id')->first();
		//dd($id);
		 $id= Crypt::encrypt($idold) ;
		
		if($idold==NULL)
		{
			//echo"hi";die;
			return redirect('/faces/login')->with('success',' Not Registered with us please register yourself');
		}
      
		elseif(  Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password,'role_id'=>NULL],$request->remember))
		{
			
			return Redirect::to('apply-for/'.$id);
		
		}
		//dd($email);
    	elseif (  Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password,'role_id'=>1],$request->remember)) 		{
       return redirect()->intended(route('faces.profile'));
    	}
		elseif (  Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password,'role_id'=>2],$request->remember)) 		{
       return redirect()->intended(route('influencer.home')); 
    	}
    $output = array('msg' => 'Oppes! You have entered invalid credentials');
    return redirect()->back()->with('statuss', $output);
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
      //Google Login
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    //Google callback
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        $this->_registerorloginuser($user);

        //Return home after login
        return redirect()->route('user.home');
    }
    //Facebook Login
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    //Facebook callback
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $this->_registerorloginuser($user);

        //Return home after login
        return redirect()->route('user.home');
    }
    protected function _registerorloginuser($data)
    {
       // dd($data);
     $user = User::where('email', '=', $data->email)->first();
     if(!$user) {
         $user = new user();
         $user->name = $data->name;
         $user->email = $data->email;
         $user->provider_id = $data->id;
         $user->save();
           //  Auth::login($user);
   Auth::guard('user')->login($user);
     }
  else
  {
       DB::table('users')->where('email',$data->email)->update([          
             	
                'provider_id'         =>  $data->id,
                'updated_at'              =>    date('y-m-d'),
                ]);
         Auth::guard('user')->login($user);
  }
    }
    public function register()
    {
        return view('faces/register');
    }
    public function store (Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users',
            'phone'=>'required|numeric|digits:10',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required_with:password|same:password',
        ]);
        
            DB::table('users')->insert([			
                'name'         => $request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                 'password'           => bcrypt($request->password),
                ]);
                
                $data = array(

                'name' => $request->name,
                
                ); 
         Mail::to($request->email)->send(new Mailfaces($data));
            return redirect('/faces/login')->with('success',' Registration Successful ');
            //return back()->with('success','Registered successfully');
        }
	 public function forgetpassword()
    {
        return view('faces.facesloginemail');
    }
    public function forgetpasswordrecover (Request $request)
    {
        $request->validate([
          
            'email'=>'required',
           
        ]);
        
        $data1=DB::table('masterusers')->where('email',$request->email)->first();
       // dd($data1);
		if($data1==NULL)
		{
			return redirect('/faces/login')->with('success',' Not Registered with us please register yourself');
		}
       
          else
		  {
			  $data = array(

                'name' => $data1->name,
                'id'=>Crypt::encrypt($data1->id),
				  'email'=>$data1->email,
                
                ); 
         Mail::to( $data1->email)->send(new RecoveryMailfaces($data));
            return redirect('/faces/login')->with('success',' Please check your email ');
            //return back()->with('success','Registered successfully');
		  }
        }
        public function changepassword($id="")
    {
		 $id = Crypt::decrypt($id);
        //dd($id);
        $email=DB::table('masterusers')->where('id',$id)->select('email')->pluck('email')->first();
        //dd($email);
        return view('faces.changepassword',compact('email','id'));
    }
    public function changepasswordstore (Request $request,$id="")
    {
       // dd($id);
        $request->validate([
                     
            'password'=>'required|confirmed',
            'password_confirmation'=>'required_with:password|same:password',
        ]);
        
            DB::table('masterusers')->where('id',$request->id)->update ([			
                
                 'password'           =>Hash::make($request->password),
                ]);
                
                $data = array(

                'name' => $request->name,
                
                ); 
       
            return redirect('/faces/login')->with('success',' Password Changed Successful ');
            //return back()->with('success','Registered successfully');
        }

}
