<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Models\Summit;
use App\Mail\AdminSummitMail;
use Illuminate\Http\Request;
use DB;
class AdminSummitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()   
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $summitDatas = Summit::latest()->get();
        return view('backEnd.summit.index',compact('summitDatas'));
    }
	 public function summitMail(Request $request)
    { 
        $request->validate([
       //     'subject' => 'required'
        ]);

        try {
            $data=$request->except(['_token']);
           $summitmail = Summit::where('mailstatus',0)->pluck('email')->toArray();
		//	dd($summitmail);
          foreach ($summitmail as $summitmails ) {
			    Mail::to($summitmails)->send(new AdminSummitMail ( $data ));
			  	  DB::table('summits')->                        
                         where('email',$summitmails)->update([ 
                             'mailstatus'         => 1,
                             'updated_at'         =>   date("Y-m-d H:i:s")
                             ]);
            /*$data = array(
				   Mail::to($summitmails)->send(new AdminSummitMail ( $data ));
          //      'email' => $summitmails??'',
           //     'msg' => $request->msg ??'',
           //     'subject' => $request->subject ??''
        );*/
			         
		  }
        /* Mail::send('backEnd.mail.adminsummit', $data, function ($msg) use($data)
					{
            $msg->to('prashantpandey9871@gmail.com','sukhbahadur1993@gmail.com');
            $msg->subject($data['subject']);
          }); */
      //  }
            $output = array('msg' => 'Email Sent Successfully');
            return back()->with('success', $output);
      
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
    
}
    }