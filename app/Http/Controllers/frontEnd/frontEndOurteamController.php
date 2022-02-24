<?php

namespace App\Http\Controllers\frontEnd;
//namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Ourteam;

use Redirect;

use Illuminate\Http\Request;
use DB;

class frontEndOurteamController extends Controller
{
    //
   
     public function ourteam()
     {
         $ourteam=Ourteam::orderBy('sequence')->limit(12)->get();
        return view('we.ourteam',compact('ourteam'));
    }
   
     public function mentorStore(Request $request)
    { 
       //dd($request);
        $request->validate([
            'name' => "required|alpha",
            'phone_no' => "required",
            'linkedin_url' => "required",
            'country' => "required",
        ]);
        try {
        $data=$request->except(['_token']);
        /* if($request->hasFile('resume'))
            {
                $file=$request->file('resume');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('backEnd/image/resume/',$filename);
               
               $data['resume']=$filename;
            }*/
           // dd($data);
         Mentor::Create($data);
         return Redirect::back()->with('error_code', 8);
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
