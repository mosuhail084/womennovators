<?php

namespace App\Http\Controllers\frontEnd;
use App\Http\Controllers\Controller;
use Redirect;

use App\Models\pitchdeckStore;
use Illuminate\Http\Request;



class PitchdeckController extends Controller
{
    public function pitchdeckStore(Request $request)
    {  
       try {
          
        $data=$request->except(['_token']);
        
         
        pitchdeckStore::Create($data);
        // return Redirect::back()->with('success','Thank you for Contecting with us!');
         return redirect('/we/incubation')->with('error_code', 9);
         
       //return back()->with('alert','Thank you for Contecting with us – we will get back to you soon!');
       
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
  
    }
}
