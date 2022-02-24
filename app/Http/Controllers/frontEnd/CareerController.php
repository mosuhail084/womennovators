<?php

namespace App\Http\Controllers\frontEnd;
//namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Careerform;
use Redirect;
use Illuminate\Http\Request;


class CareerController extends Controller
{
    //
   
    public function career()
    
    {
        $career=Career::latest()->get();
         $career1=Career::latest()->get();
      // dd( $career);
        return view('we.career',compact('career','career1'));
    }
     public function careerStore(Request $request)
    { 
       //dd($request);
        $request->validate([
            'name' => "required|alpha",
            'resume' =>  'required|mimes:doc,docx,pdf|max:2048',
            //'email' => "required"
        ]);
        try {
        $data=$request->except(['_token']);
         if($request->hasFile('resume'))
            {
                $file=$request->file('resume');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('backEnd/image/resume/',$filename);
               
               $data['resume']=$filename;
            }
           // dd($data);
         Careerform::Create($data);
         return Redirect::back()->with('error_code', 6);
       // return back()->with('alert','Thank you for Contecting with us – we will get back to you soon!');
       
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
  
    }
}
