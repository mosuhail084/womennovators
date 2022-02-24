<?php

namespace App\Http\Controllers;
use App\Models\Partner;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use DB;
use Redirect;

class PartnerController extends Controller
{
    public function add()
    {
        return view('partner-form');
    }
    public function store(Request $request)
    {
      // dd($request);
        try {
            $data=$request->except(['_token']);
           $id= DB::table('partners')->insertGetId([
                'email'      =>     $request->email,
                'contribution'      =>     $request->contribution,
                'confirm_logo'      =>     $request->confirm_logo,
                'partnership_agreement'      =>     $request->partnership_agreement,
                'program_updates'      =>     $request->program_updates,
                'social_handles'      =>     $request->social_handles,
                'nominate'      =>     $request->nominate,
                //'email'      =>     $request->email,
            ]);
          // dd($id );
           foreach($request->interact_as_partner as $have){
           
            DB::table('partnerid')->insert([
                        'partner_id'      =>     $id,
                        'interact_as_partner_id'     =>     $have,
                     
                    ]);
              /*     */ 
                   
        }
            $output = array('msg' => 'Thank You For Filling Partnership Form !!!');
            return back()->with('success', $output);
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
      /*  Mail::send('emails.workgmail', $data, function ($msg) use($data){
            $msg->to('partner@womennovator.co.in');
            $msg->from($data['email']);
            $msg->subject(' Reseller Request');
          });
           Mail::send('emails.workthankmail', $data, function ($msg) use($data){
            $msg->to($data['email']);
            $msg->from('partner@womennovator.co.in');
            $msg->subject(' Thank You for Register');
          });
*/
        //$output = array('msg' => 'Thank you for your message. It has been sent.');
        //return back()->with('status', $output);
       // return Redirect::to('https://www.facebook.com/womennovator/');

    }
}
