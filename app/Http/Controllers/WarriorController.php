<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Covidwarrior;
use App\Mail\WarriorMail;
use Mail;

class WarriorController extends Controller
{
   public function view()
   {
       return view('frontEnd.warriorform');
   }
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'warrior_name' => "required"
        ]);

        try {
            $data=$request->except(['_token']);
            if($request->hasFile('photo'))
            {
                $file=$request->file('photo');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
              $url=  $file->move('backEnd/image/covid_warriorsimage/',$filename);
                $data['photo']=$url;
            }
            
            $data1 = Covidwarrior::Create($data);
             $data = array(

                'name' => $request->warrior_name,
                
                );
              //  dd( $data1);
           Mail::to($request->email)->send(new WarriorMail ( $data ));
           // dd($data);
             return back()->with('alert','Thank you for fill up warrior form – we will get back to you soon!');
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
    }
   
}