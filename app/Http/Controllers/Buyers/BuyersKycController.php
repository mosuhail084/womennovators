<?php

namespace App\Http\Controllers\buyers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Shopkeeperkyc;
class BuyersKycController extends Controller
{
    public function __construct()   
    {
        $this->middleware('auth:buyer');
    }
    public function create()
    {
		//dd(auth()->user()->id);
        $kyc = DB::table('shopkeeperkycs')->where('listing_id',auth()->user()->id)->first();
		//dd($kyc);
        return view('backEnd.buyers.kyc.form',compact('kyc'));
    }
    public function store(Request $request)
    {
        
     /*   $request->validate([
            'account_number'=>"required",
            'bank_name'=>"required",
            'ifsc_code'=>"required",
            'bank_address'=>"required",
        ]);*/
        $data=$request->except(['_token']);
        $kyc = DB::table('shopkeeperkycs')->where('listing_id',auth()->user()->id)->first();
		//dd($kyc );
        if($kyc	!= NULL){
            Shopkeeperkyc::find($kyc->id)->update($data);
			return back()->with('message','Data Updated  Successfully');
        }else{
            $data['listing_id']=auth()->user()->id;
            DB::table('shopkeeperkycs')->insert($data);
			return back()->with('message','Data Submitted Successfully');
        }
        
    }
}
