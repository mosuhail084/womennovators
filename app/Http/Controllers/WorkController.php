<?php

namespace App\Http\Controllers;
use App\Models\Work;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use DB;
use Redirect;

class WorkController extends Controller
{
    public function add()
    {
        return view('from-home');
    }
    public function store(Request $request)
    {
        $name = $request->name;
        $country = $request->country;
        $state= $request->state;
        $city = $request->city;
        $address = $request->address;
        $pincode = $request->pincode;
        $email = $request->email;
        $phone= $request->phone;
        $age= $request->age;
        $am = $request->am;
        $professional = $request->professional ??'';
        $business= $request->business ??'';
        $student = $request->student ??'';
        $hear = $request->hear;
        $influencer = $request->influencer ??'';
        $online = $request->online ??'';
        $family = $request->family ??'';
        $earn = $request->earn;
        $comment = $request->comment ??'';
        $social = $request->social;
        $account = $request->account;
        $type = $request->type;
        //$have = $request->have;
        $sell= $request->sell;
       // $product = $request->product;
        $experience = $request->experience;
        $medium = $request->medium;
        $think= $request->think;
        $suggestions = $request->suggestions;

        $work = new Work();
        $work->name = $name;
        $work->country = $country;
        $work->state = $state;
        $work->city = $city;
        $work->address = $address;
        $work->pincode = $pincode;
        $work->email = $email;
        $work->phone = $phone;
        $work->age = $age;
        $work->am = $am;
        $work->professional = $professional ??'';
        $work->business = $business ??'';
        $work->student = $student ??'';
        $work->hear = $hear;
        $work->influencer = $influencer ??'';
        $work->online = $online ??'';
        $work->family = $family ??'';
        $work->earn = $earn;
        $work->comment = $comment ??'';
        $work->social = $social;
        $work->account = $account;
        $work->type = $type;
        //$work->have = $have;
        $work->sell = $sell;
       // $work->product = $product;
        $work->experience = $experience;
        $work->medium = $medium;
        $work->think = $think;
        $work->suggestions = $suggestions;
        $work->save();
        $workid = $work->id;
        $workpid = $work->id;

        foreach($request->have as $have){
           
            DB::table('workid')->insert([
                        'work_id'      =>     $workid,
                        'have_id'     =>     $have,
                        'created_at'                =>     date('y-m-d'),
                        'updated_at'              =>    date('y-m-d'),
                    ]);
              /*     */ 
                   
        }
        
        $hv = DB::table('workid')->where('work_id',$workid )->get();

        foreach($request->product as $product){
           
            DB::table('workpid')->insert([
                        'workp_id'      =>     $workpid,
                        'product_id'     =>     $product,
                        'created_at'                =>     date('y-m-d'),
                        'updated_at'              =>    date('y-m-d'),
                    ]);
              /*     */ 
                   
        }
        
        $prod = DB::table('workpid')->where('workp_id',$workpid )->get();

        $data =array(
            'name' =>  $request->name,
            'email' =>  $request->email,
            'phone' =>  $request->phone,
            'country' =>  $request->country,
            'state' =>  $request->state,
            'city' =>  $request->city,
            'address' =>  $request->address,
            'pincode' =>  $request->pincode,
            'age' =>  $request->age,
            'am' =>  $request->am,
            'professional' =>  $request->professional ??'',
            'business' =>  $request->business ??'',
            'student' =>  $request->student ??'',
            'hear' =>  $request->hear,
            'influencer' =>  $request->influencer ??'',
            'online' =>  $request->online ??'',
            'family' =>  $request->family ??'',
            'earn' =>  $request->earn,
            'comment' =>  $request->comment ??'',
            'social' =>  $request->social,
            'account' =>  $request->account,
            'type' =>  $request->type,
            'hv' =>  $hv,
            'sell' =>  $request->sell,
            'prod' =>  $prod,
            'experience' =>  $request->experience,
            'medium' =>  $request->medium,
            'think' =>  $request->think,
            'suggestions' =>  $request->suggestions,
            
       );

        Mail::send('emails.workgmail', $data, function ($msg) use($data){
            $msg->to('partner@womennovator.co.in');
            $msg->from($data['email']);
            $msg->subject(' Reseller Request');
          });
           Mail::send('emails.workthankmail', $data, function ($msg) use($data){
            $msg->to($data['email']);
            $msg->from('partner@womennovator.co.in');
            $msg->subject(' Thank You for Register');
          });

        //$output = array('msg' => 'Thank you for your message. It has been sent.');
        //return back()->with('status', $output);
        return Redirect::to('https://www.facebook.com/womennovator/');

    }
}
