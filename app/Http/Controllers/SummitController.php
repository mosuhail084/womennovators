<?php

namespace App\Http\Controllers;
use App\Models\Summit;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\SummitMail;
use DB;
//use Mail;
use Redirect;

class SummitController extends Controller
{
    public function add (Request $request)
   {
       $country=DB::table('allcountries')->get();
     //  dd($country);
      if ($request->ajax()) {
           
            if (isset($request->category_id)) {
                foreach (DB::table('allstates')->where('country_id', $request->category_id)->get() as $sub) {
                    echo "<option value='" . $sub->id . "'>" . $sub->name . "</option>";
                }
            }
           
        } else {
       
        return view('summit',compact('country'));
        }
    }
    public function store(Request $request)
    {
       // dd($request);
		 $request->validate([
        'email' => 'required|unique:summits',
      
           ]);
        try {
            $data=$request->except(['_token']);
            $data = Summit::Create($data);
            
             $data = array(

                'name' => $request->name,
                
                );
            Mail::to($request->email)->send(new SummitMail ( $data ));
           // dd($data);
            $output = array('msg' => 'Thank You For Joining Womennovator Summit 2021!!!');
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
