<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Role;
use Auth;
class AdminloginController extends Controller
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
        $this->middleware('guest:admin');
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function index()
    {
        return view('auth.adminlogin');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        $role = Role::select('id')->get();
    if (  Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, 'status' => 1,'role_id'  => $role],$request->remember)) {
       return redirect()->intended(route('admin.dashboard'));
    }
    $output = array('msg' => 'Oppes! You have entered invalid credentials');
    return redirect()->back()->with('statuss', $output);
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
}
