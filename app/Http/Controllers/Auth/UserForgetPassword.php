<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\Mailfaces;
use App\Mail\RecoveryMailfaces;
use DB;
use Crypt;
use Mail;
use Hash;

class UserForgetPassword extends Controller
{
    public function forgetpassword()
    {
        return view('we.User-forget-password');
    }
    public function forgetpasswordrecover (Request $request)
    {
        $request->validate([
          
            'email'=>'required',
           
        ]);
        
        $data1=DB::table('users')->where('email',$request->email)->first();
       // dd($data1);
		if($data1==NULL)
		{
			return redirect('/we/login')->with('success',' Not Registered with us please register yourself');
		}
       
          else
		  {
			  $data = array(

                'name' => $data1->name,
                'id'=>Crypt::encrypt($data1->id),
				  'email'=>$data1->email,
                
                ); 
         Mail::to( $data1->email)->send(new RecoveryMailfaces($data));
            return redirect('/we/login')->with('success',' Please check your email ');
            //return back()->with('success','Registered successfully');
		  }
        }
        public function changepassword($id="")
        {
		 $id = Crypt::decrypt($id);
        //dd($id);
        $email=DB::table('users')->where('id',$id)->select('email')->pluck('email')->first();
        //dd($email);
        return view('we.changepassword',compact('email','id'));
        }
        public function changepasswordstore (Request $request,$id="")
        {
       // dd($id);
        $request->validate([
                     
            'password'=>'required|confirmed',
            'password_confirmation'=>'required_with:password|same:password',
        ]);
        
            DB::table('users')->where('id',$request->id)->update ([			
                
                 'password'           =>Hash::make($request->password),
                ]);
                
                $data = array(

                'name' => $request->name,
                
                ); 
       
            return redirect('/we/login')->with('success',' Password Change Successful ');
            //return back()->with('success','Registered successfully');
        }

}
