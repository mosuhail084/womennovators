<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warrior_appreciation;
use App\Mail\SquadMail;
use DB;
use Mail;

class AppreciationformController extends Controller
{
    public function appreciation()
    {
        return view('frontEnd.appreciationform');
    }
    public function store(Request $request)
    {
      // dd($request->email);
        try {
              $data=$request->except(['_token']);
            if($request->hasFile('photo'))
            {
                $file=$request->file('photo');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('backEnd/image/joinsquad/',$filename);
                   $data['photo'] =$filename;
            }
            $worriorappreciationid=	DB::table('warrior_appreciations')->insertGetId([			
                'name'         => $request->name,
                 'email'  => $request->email,
                'phone'         => $request->phone,
                'photo'         =>$data['photo'] ??'',
                'city'         => $request->city,
                'state'         => $request->state,
                'address'         => $request->address,
                'nominated_by'         => $request->nominated_by,
                'email_id'         => $request->email_id,
                'comment'         => $request->comment,

                'created_at'			    =>	   date('Y-m-d H:i:s'),
                'updated_at'              =>    date('Y-m-d H:i:s'),
                ]);
            foreach($request->category as $category){
               
                DB::table('warriorid')->insert([
                            'warrior_id'      =>     $worriorappreciationid,
                            'category_id'     =>     $category,
                            'created_at'                =>     date('y-m-d'),
                            'updated_at'              =>    date('y-m-d'),
                        ]);              
                       
            }
             $data = array(

                'name' => $request->name,
                
                );
            Mail::to($request->email)->send(new SquadMail ( $data ));
            $output = array('msg' => 'Submit Successfully');
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