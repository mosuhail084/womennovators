<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Newusermail;
use App\Mail\HeretoGivesupport;
use App\Mail\HeretoSeeksupport;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

//use Illuminate\Auth\Listeners\SendEmailVerificationNotification;

use session;
use Crypt;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

    public function insert(Request $data)
    {   
        // $data->validate([
        //     'name' => "required",
        //     'email' => "required",
        //     'password'=> "unique:users"
        // ]);
        
        $this->validate($data, [
            'email' => 'required|unique:users',
        ]);
        // $newdata=new User;
        // $newdata->name = $data->name;
        // $newdata->email = $data->email;
        // $newdata->password = $data->password;
        // $newdata->save();

        // $data->email->sendEmailVerificationNotification();

            DB::table('users')->insert([
                'name'=>$data->name,
                'email'=>$data->email,
                'password'=> Hash::make($data['password']),  
            ]); 
             
            $data1 = array(
                'name' => $data->name,
				'email'=>Crypt::encrypt($data->email),
                
                ); 
            Mail::to( $data->email)->send(new Newusermail($data1));
        $countries = DB::table('countries')->get();
        $cities = DB::table('cities')->get();
        return view('we/signup-step-2',compact('countries','cities','data'));    
    }
    public function insertsignup(Request $data2)
    {
        DB::table('users')->where(['email'=> $data2-> email])->update([
            'phone'=>$data2->mobile,
            'gender'=>$data2->gender,
            'country'=>$data2->country,  
            'city'=>$data2->city
        ]); 
        $sectors = DB::table('sectors')->get();
        return view('we/signup-step-3', compact('data2','sectors'));
    }
    public function signupstep3(Request $data3)
    {
        //print_r($data3);die();
       
        DB::table('users')->where(['email'=> $data3-> email])->update([
            'companyname'=>$data3->companyname,
            'designation'=>$data3->designation,
            'experience'=>$data3->experience,  
			'hereto'=>$data3->hereto,
            'highestqualification'=>$data3->highestqualification,
            'industrytype'=>$data3->industrytype,
            'facebook'=>$data3->facebook,
        ]); 
        
        $data1 = array(
            'name' => $data3->email,
            'email'=> $data3->email,
            
            ); 

            if($data3->hereto == 'givesupport'){
                Mail::to( $data3->email)->send(new HeretoGivesupport($data1));
            }
            else{
                Mail::to( $data3->email)->send(new HeretoSeeksupport($data1));
            }
        

        return redirect('we/login');
    }
    public function verifymail(Request $request)
    {
        $data=$request->except(['_token']);
         //$users = DB::table('users')->latest('email')->first(); 
         dd($data);
        //   foreach ($users as $user ) {
        //     dd($users);
        //     // $emailconfirmation =  DB::table('users')->where('email',$users->email)
        //     // ->pluck('email')->first();
        //     // dd($emailconfirmation);
          
        //     $data = array(
        //         'subject' => "Email Confirmation",
        //         'email' =>   '$emailconfirmation',
        //    );
             
        //     Mail::send('emails.emailconfirmation', $data, function ($msg) use($data){
        //         $msg->to($data['email']);
        //         $msg->from('ashish@capitall.io');
        //         $msg->subject($data['subject']);
        //      }); 
        //      dd('done');
        // }    
    } 
    public function verifyaccount($email="")
    {
     $email = Crypt::decrypt($email);
    // // dd($email);
    // $id=DB::table('users')->where('email',$email)->select('id')->pluck('id')->first();
    // // DB::table('users')->where(['id'=> $id-> id])->update([
    // //     'email_verified_at'=>Carbon::now()
    // // ]); 
    DB::table('users')->where(['email'=> $email])->update([
        'email_verified_at'=>Carbon::now()
    ]); 
    return redirect('we/login')->with('success',' Email Verification Successfull ');
    }

 
}
