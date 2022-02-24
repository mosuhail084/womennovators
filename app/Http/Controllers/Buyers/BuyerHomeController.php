<?php

namespace App\Http\Controllers\Buyers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buyer;

class BuyerHomeController extends Controller
{
    public function __construct()   
    {
        $this->middleware('auth:buyer');
    }
    public function index()
    {
       // dd('hi');
        return view('backEnd.buyers.index');
    }
    public function profile(Request $request)
    {
       // dd('hi');
       $id = auth()->user()->id;
       //dd($id);
        $profile = Buyer::where('id', $id)->first();
      
   // dd($profile);
        return view('backEnd.buyers.profile',compact('id','profile'));
    }
}
