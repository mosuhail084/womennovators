<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;
use App\Mail\CertificateMail;
use Illuminate\Support\Facades\Mail;
use Redirect;
use DB;

class CertificateController extends Controller
{
    public function view()
    { 
         return view('certificateform');
    }
    public function certificates(Request $request ,$id)
    {
        $name = $request->session()->get('name');
        $certificates = Certificate::where('id',$id)->first();
		
        return view('certificate',compact('certificates','name','id'));
    }
    public function store(Request $request)
    {
        //return $id;
	//	$rname = Certificate::where('email',$request->email)->select('name')->pluck('name')
  // ->first();
        $rname=$request->name;
       $value= $request->session()->put('name', $rname);
      // dd($rname);
      
        //dd($name);
        $certificates = Certificate::where('email',$request->email)
        ->orwhere('phone',$request->phone)->first();
       // dd($certificates);
     
       
       
        if($certificates != null ){
               $id = $certificates->id;
             $data =array(
            'name' =>  $request->name,
            'email' =>  $request->email,
            'phone' =>  $request->phone,
             'id' =>  $certificates->id,
        );
         $up=  DB::table('certificates')->where('id',$id)->update
        (['status'=>1]);
        
     //  Mail::send('emails.certificatethankmail', $data, function ($msg) use($data){
      //    $msg->to($data['email']);
		//	dd($data['email']);
          //  $msg->from('President@womennovator.co.in');
       //     $msg->subject(' Thank You');
      //    });
			//var_dump($a);die;
            return redirect('/certificates/'.$id)->with('id',$id);
        }
        else{
          //echo"hiii";die;
          return Redirect::back()->with('error_code', 6);

        }
      
        
    }
    public function certiform()
    { 
         return view('certiform');
    }
    public function certiformadd(Request $request)
    {
      //dd($request);
	//
     
       
       
        
               $id = DB::table('certificates')->insert([
            
            'name' =>  $request->name,
            'email' =>  $request->email,
            'phone' =>  $request->phone,
             'category' =>  $request->category,
             'designation' =>  $request->designation,
             'company_name' =>  $request->company_name,
             'type'         =>'INFLUENCER',
             'status'       =>2,
               ]);
            //   dd($id);
       
        $data = array(

          'name' => $request->name,
          
          ); 
          
 Mail::to($request->email)->send(new CertificateMail($data));
		//	dd($data['email']);
          //  $msg->from('President@womennovator.co.in');
       //     $msg->subject(' Thank You');
      //    });
			//var_dump($a);die;
       //     return redirect('/certificates/'.$id)->with('id',$id);
       
          //echo"hiii";die;
          return Redirect::back()->with('error_code', 6);

        
      
        
    }
    public function correctionform($id="")
    { 
      //dd($id);
         return view('correction-certificate-form',compact('id'));
    }
    
    public function correctionformadd(Request $request,$id="")
    {
     // dd($id);
        
               $id = DB::table('certificate_correction')->insert([
            'certificate_id'=>$id,
            'issue' =>  $request->issue,
            'name'=>$request->name,
            'category' =>  $request->category,
            'other' =>  $request->other,
          
               ]);
     return Redirect::back()->with('error_code', 7);

    }
}