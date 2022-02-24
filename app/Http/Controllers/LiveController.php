<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Live;
use Illuminate\Support\Facades\Mail;
use DB;
class LiveController extends Controller
{
    public function add()
   {
    return view('live-series');
   }
    public function liveStore(Request $request)
    {
      //  dd($request);
        $request->validate([
            'name' => "required",
          'email' => "required",
          'phone' => "required",
          'state' => "required",
          'city' => "required",
          'address' => "required",
          'company' => "required",
          'designation' => "required",
          'gender' => "required",
          'are' => "required",
          'referred' => "required",
          'sectors' => "required",
          'session' => "required",
      ]);
      $name = $request->name;
      $email = $request->email;
      $phone = $request->phone;
      $state = $request->state;
      $city = $request->city;
      $address = $request->address;
      $company = $request->company;
      $designation = $request->designation;
      $gender = $request->gender;
      $are = $request->are;
      $referred = $request->referred;
      $sectors = $request->sectors;
      $comment = $request->comment;

      $live = new Live();
      $live->name = $name;
      $live->email = $email;
      $live->phone = $phone;
      $live->state = $state;
      $live->city = $city;
      $live->address = $address;
      $live->company = $company;
      $live->designation = $designation;
      $live->gender = $gender;
      $live->are = $are;
      $live->referred = $referred;
      $live->sectors = $sectors;
      $live->comment = $comment ??'';
      $live->save();
      $liveid = $live->id;
               
      foreach($request->session as $session){
         
          DB::table('liveid')->insert([
                      'live_id'      =>     $liveid,
                      'session_id'     =>     $session,
                      'created_at'                =>     date('y-m-d'),
                      'updated_at'              =>    date('y-m-d'),
                  ]);
            /*     */ 
                 
      }
      $live = DB::table('liveid')->where('live_id',$liveid )->get();
      $data =array(
        'name' =>  $request->name,
        'email' =>  $request->email,
        'phone' =>  $request->phone,
        'state' =>  $request->state,
        'city' =>  $request->city,
        'comment' =>  $request->comment,
        'address' =>  $request->address,
        'company' =>  $request->company,
        'designation' =>  $request->designation,
        'gender' =>  $request->gender,
        'are' =>  $request->are,
        'referred' =>  $request->referred,
        'sectors' =>  $request->sectors,
        'live' =>  $live,
   );
      
   Mail::send('emails.livegmail', $data, function ($msg) use($data){
    $msg->to('partner@womennovator.co.in');
    $msg->from($data['email']);
    $msg->subject(' Womennovator Live Series Request');
  });
   Mail::send('emails.livethankmail', $data, function ($msg) use($data){
    $msg->to($data['email']);
    $msg->from('partner@womennovator.co.in');
    $msg->subject(' Thank You for Register');
  });
      
      $output = array('msg' => 'Thank you for your message. It has been sent.');
        return back()->with('status', $output);
    }
}
