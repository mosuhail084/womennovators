<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
//use Laravel\Socialite\Facades\Socialite;
use App\Models\Buyer;
use Auth;
use DB;

class BuyerloginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:buyer')->except('logout');
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function index()
    {
        return view('backEnd.buyers.buyerslogin');
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
       // dd($request);
       $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
         //$user_first_login_id=Influencer::where('email',$request->email)->select('id')->pluck('id')->first();
        // $user_login=Influencer_profile::where('influencer_id', $user_first_login_id)->first();
        // dd($user_login);
      //  dd($user_first_login_id);
    if (  Auth::guard('buyer')->attempt(['email' => $request->email, 'password' => $request->password],$request->remember)) {
       
       return redirect()->intended(route('buyer.home')); 
       
    }
    $output = array('msg' => 'Oppes! You have entered invalid credentials');
    return redirect()->back()->with('statuss', $output);
    }

}
