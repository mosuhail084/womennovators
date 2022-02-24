<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Polling;
use Illuminate\Support\Facades\Mail;
use DB;
use Redirect;
class PollingController extends Controller
{
    public function add()
    {
        return view('form');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => "required",
          'email' => "required",
          'phone' => "required",
          'challenge' => "required"
      ]);

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $comment = $request->comment ??'';

        $polling = new Polling();
        $polling->name = $name;
        $polling->email = $email;
        $polling->phone = $phone;
        $polling->comment = $comment ??'';
        $polling->save();
        $pollingid = $polling->id;
               
        foreach($request->challenge as $challenge){
           
            DB::table('pollingchallenge')->insert([
                        'polling_id'      =>     $pollingid,
                        'challenge_id'     =>     $challenge,
                        'created_at'                =>     date('y-m-d'),
                        'updated_at'              =>    date('y-m-d'),
                    ]);
              /*     */ 
                   
        }
        
        $chall = DB::table('pollingchallenge')->where('polling_id',$pollingid )->get();
        $data = array(
            'name' =>  $request->name,
            'email' =>  $request->email,
            'phone' =>  $request->phone,
            'comment' =>  $request->comment ??'',
            'chall' =>  $chall,

       );
    
        Mail::send('emails.pollingmail', $data, function ($msg) use($data){
            $msg->to('partner@womennovator.co.in');
            $msg->from($data['email']);
             $msg->subject(' Womennovator Challenge Request');
         });
         Mail::send('emails.pollingthankmail', $data, function ($msg) use($data){
            $msg->to($data['email']);
            $msg->from('partner@womennovator.co.in');
         $msg->subject(' Womennoator received your challenges form.');
         });
        $output = array('msg' => 'Thank you for your message. It has been sent.');
    //    return back()->with('status', $output);
         return Redirect::to('https://www.facebook.com/womennovator/');
    }
}
