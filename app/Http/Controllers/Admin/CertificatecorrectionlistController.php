<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Models\Certificate_correction;
use Excel;
use Illuminate\Http\Request;
use App\Imports\CertificateImport;
use Illuminate\Support\Facades\Mail;
use DB;

class CertificatecorrectionlistController extends Controller
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

        $Certificatecorrection =DB::table('certificates')
			->join('certificate_corrections','certificate_corrections.certificate_id','certificates.id')
			->select('certificates.name as certname','certificates.email','certificates.phone','certificate_corrections.*')
			->get();
		//dd($Certificatecorrection);
        return view('backEnd.certificatecorrection.certificatecorrectionlist',compact('Certificatecorrection'));

    }
    public function certificateexcelStore(Request $request)
    {
        $request->validate([
             'file' => 'required'
        ]);

        try {
            $data=$request->except(['_token']);
            
            $file=$request->file;
            $data = $request->except(['_token']);
            $dataa=Excel::toArray(new CertificateImport, $file);
            foreach ($dataa[0] as $key => $value) {
           
//$name=DB::table('certificates')->where('name',$value['name'])->select('name')->pluck('name')->first();

           //    if($value['name'] != Null && $name != NULL){
                $db['name']=$value['name'];
               $db['email']=$value['email'];
               $db['phone']=$value['phone'];
               $db['influencer_name']=$value['influencer_name'];
               $db['category']=$value['category'];
               $db['event_name']=$value['event_name'];
               
               Certificate::Create($db);
           
            
      //  }  
                }
             
            $output = array('msg' => 'Create Successfully');
            return back()->with('success', $output);
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
    }
    public function sendmail(Request $request)
    {
        $data=$request->except(['_token']);
          $certificate = Certificate::latest()->get();
          foreach ($certificate as $certificates ) {
        
            $certificateemail = Certificate::where('email',$certificates->email)
            ->pluck('email')->first();
            //dd($certificateemail);
          //  $juryname  = Jury::where('email',$jury)->pluck('name')->first();
          
            $data = array(
                'subject' => "Download Your Certificate",
                'email' =>   $certificateemail,
           );
             
            Mail::send('emails.downloadcertmail', $data, function ($msg) use($data){
                $msg->to($data['email']);
                $msg->subject($data['subject']);
             }); 
            }
    }
    
}