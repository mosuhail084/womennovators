<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
//use Laravel\Socialite\Facades\Socialite;
use App\Models\Buyer;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

class ResellerloginController extends Controller
{
//     public function __construct()
 //{
   //     $this->middleware('guest:reseller')->except('index','register','login');
    // }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function index()
    {
       // dd("hello");
        return view('backEnd.resellers.resellerslogin');
    }
    public function logout(Request $request){
      // dd($request);
      Auth::guard('clientlogin')->logout();
    
           
    $request->session()->flush();

    $request->session()->regenerate();

    
            return Redirect('/clientlogin');
    
    }
    public function login(Request $request)
    {
       //dd($request);
       $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string'],
        ]);
         //$user_first_login_id=Influencer::where('email',$request->email)->select('id')->pluck('id')->first();
        // $user_login=Influencer_profile::where('influencer_id', $user_first_login_id)->first();
        // dd($user_login);
      //  dd($user_first_login_id);
    if (  Auth::guard('reseller')->attempt(['email' => $request->email, 'password' => $request->password],$request->remember)) {
       
       return redirect()->intended(route('reseller.home')); 
       
    }
    $output = array('msg' => 'Oppes! You have entered invalid credentials');
    return redirect()->back()->with('statuss', $output);
    }
    public function register()
    {
        return view('backEnd.resellers.registeer');
    }
    public function insert(Request $request)
    { 
	//	dd($request);
		$request->validate([
        'name'=>'required',
        'email'=>'required|unique:resellers',
        'phone'=>'required|numeric|digits:10',
        'password'=>'required|confirmed',
        'password_confirmation'=>'required_with:password|same:password',
    ]);
    
        $data=$request->except(['_token']);
        // $id=DB::table('buyers')->insertGetid($data);
        // DB::table('listings')->insert($id);
        $id=	DB::table('resellers')->insertGetId([			
            'name'         => $request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
             'password'           => bcrypt($request->password),
            ]);
            // DB::table('listings')->insert([
            //     'createdby'=>$id,
            //     'email'=>$request->email,
            // ]);
          return redirect('resellers/login')->with('success','Registered successfully , Please Login ');
    }
    
    
    
    

}
