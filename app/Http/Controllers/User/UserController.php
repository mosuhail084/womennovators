<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Return_;

class UserController extends Controller
{
    // * Show Login Form
    public function loginform(Request $request)
    {
        if ($request->session()->has('USER_LOGIN')) {
            return redirect('/');
        }
        return view('frontEnd.user.user-login');
    }
    // * Show Registration Form
    public function registerform(Request $request)
    {
        if ($request->session()->has('USER_LOGIN')) {
            return redirect('/');
        }
        return view('frontEnd.user.user-register');
    }

    // * User Registration process
    public function registration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        $name = $request->name;
        $email = $request->email;
        $password = Hash::make($request->password);

        if ($request->session()->has('REFERRER_ID')) {
            $referrer = $request->session()->get('REFERRER_ID');
        } else {
            $referrer = null;
        }
        $user = User::insert([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'referrer' => $referrer
        ]);

        if ($user) {
            return redirect()->route('user.register')->with('success', 'Registration Successful');
        } else {
            return redirect()->route('user.register')->with('fail', 'Failed to Register');
        }
    }


    // * User Login Process
    public function login_process(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request->email;
        $password = $request->password;

        $user = User::where('email', $email)->first();
        if ($user) {
            if (Hash::check($password, $user->password)) {
                $request->session()->put('USER_LOGIN', true);
                $request->session()->put('USER_ID', $user->id);
                $request->session()->put('USER_NAME', $user->name);
                return redirect('/');
            } else {
                return redirect()->route('user.login')->with('fail', 'Invalid Login Credentials');
            }
        } else {
            return redirect()->route('user.login')->with('fail', 'Invalid Login Credentials');
        }
    }

    // * LOGOUT USER
    public function logout(Request $request)
    {
        if ($request->session()->has('USER_LOGIN')) {
            $request->session()->forget('USER_LOGIN');
            $request->session()->forget('USER_ID');
            $request->session()->forget('USER_NAME');
            return redirect()->route('user.login')->with('success', 'Logged out Successfully');
        }
        return redirect()->route('user.login')->with('success', 'Logged out Successfully');
    }
}
