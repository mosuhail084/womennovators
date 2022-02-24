<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign_form;
use DB;


class CampaignformController extends Controller
{
    public function view()
    {
    return view('frontEnd.campaignform');
    }
    public function store(Request $request)
    {
    // dd($request->product_image);
        try {
            if($request->hasFile('video'))
            {
                $file=$request->file('video');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('backEnd/image/campaignform/',$filename);
                $video=$filename;
            }
            $product_image=array();
            if($files=$request->file('product_image'))
        {
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $file->move('backEnd/image/campaignform/',$name);
                $product_image[]=$name;
               // dd($name);
            }
    
        }
            $id=DB::table('campaigns')->insertGetId([	
                'name'         =>     $request->name, 
                'email'         =>     $request->email, 
                'phone'         =>     $request->phone, 	
                // 'product_image'	            =>      $data['product_image'],
              'whathelpyouneed'         =>     $request->whathelpyouneed,
                // 'video'			=>	   $request->video,
                'video'			=>	   $video,
                'country'			=>	   $request->country,
                'city'			=>	   $request->city,
                'state'			=>	   $request->state,
                'address'			=>	   $request->address,
                // 'quantity'			=>	   $request->quantity,
                // 'amount'			=>	   $request->amount,
                'bankname'			=>	   $request->bankname,
                'accountholder'			=>	   $request->accountholder,
                'accountno'			=>	   $request->accountno,
                'bankaddress'			=>	   $request->bankaddress,
                // 'product_name'			=>	   $request->product_name,
                // 'createdby'			=>	    auth()->user()->teammember_id,
                'created_at'			    =>	   date('y-m-d'),
                'updated_at'              =>    date('y-m-d'),
                ]);
                //dd($id); die;
             $count=count($request->product_name);
             // dd($count);
              for($i=0;$i<$count;$i++){
                 DB::table('campaign_products')->insert([
                     'campaign_id'   	=>     $id,
                     'product_name'   	=>     $request->product_name[$i],
                     'product_image'   	=>      $product_image[$i],
                     'amount'   	=>     $request->amount[$i],
                     'quantity'   	=>     $request->quantity[$i],
                     'description'   	=>     $request->description[$i],
                    //  'createdby'  =>  auth()->user()->teammember_id,
                     'created_at'			    =>	   date('y-m-d'),
                     'updated_at'              =>    date('y-m-d'),
                 ]);
              }
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