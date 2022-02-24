<?php

namespace App\Http\Controllers\frontEnd;
//namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Incubation;
//use App\Models\Careerform;
use Redirect;
use Illuminate\Http\Request;
use DB;

class IncubationController extends Controller
{
    //
   
    public function incubation()
    
    {
        $sector=DB::table('sectors')->orderBy('sectorname')->get();
        //$incubation=Incubation::latest()->get();
       
      // dd( $career);
        return view('we.incubation',compact('sector'));
    }
     public function incubationStore(Request $request)
    { 
       //dd($request);
        $request->validate([
            'name' => "required",
            'company_name' =>  "required",
            'industry' => "required"
        ]);
        try {
        $data=$request->except(['_token','skip_or_not']);
         if($request->hasFile('pitch_deck'))
            {
                $file=$request->file('pitch_deck');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('backEnd/image/pitch_deck/',$filename);
               
               $data['pitch_deck']=$filename;
            }
           // dd($data);
         Incubation::Create($data);
         if(isset($request->skip_or_not)){
             return redirect()->route('we.pitch-deck');
         }
         return Redirect::back()->with('error_code', 9);
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
