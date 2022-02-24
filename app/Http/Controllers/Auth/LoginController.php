<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
//use App\Http\Controllers\Auth\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

// use Auth;
use Illuminate\Support\Facades\Hash;
// use Session;
use App\Models\Jury;

class LoginController extends Controller
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

  use AuthenticatesUsers;


  protected $redirectTo = RouteServiceProvider::HOME;

  public function index()
  {
    return view('auth.login');
  }


  // * FRONT USER LOGIN
  public function weloginUser(Request $request)
  {
    // $request->validate([
    //   'email'=>'required|email',
    //   'password'=>'required|min:8'
    // ]);
    $user = DB::table('users')->where('email', '=', $request->email)->first();

    if ($user) {
      if (Hash::check($request->password, $user->password)) {
        // error_log('Password');
        $request->session()->put('FRONT_USER_LOGIN_ID', $user->id);
        $request->session()->put('FRONT_USER_LOGIN_NAME', $user->name);
        // return "Welcome to your dashboard $user->name";
        // return view('we.event', compact('user'));
        return redirect()->route('we.event');
      } else {
        return back()->with('fail', 'Password wrong, please try again.');
      }
    } else {
      return back()->with('fail', 'This email is not registered please register.');
    }
  }


  // * FRONT USER LOGOUT
  public function logout(Request $request)
  {
    if ($request->session()->has('FRONT_USER_LOGIN_ID')) {
      $request->session()->forget('FRONT_USER_LOGIN_ID');
      $request->session()->forget('FRONT_USER_LOGIN_NAME');
      return redirect()->route('we.index');
    }
    return redirect()->route('we.index');
  }
}
