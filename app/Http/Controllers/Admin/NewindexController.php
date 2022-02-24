<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Live;
use DB;
use Illuminate\Http\Request;

class NewindexController extends Controller
{
    //
    public function __construct()   
    {
        $this->middleware('auth:admin');
    }
        public function index()
        {
    
            $live = live::latest()->get();
            return view('backEnd.newindex',compact('live'));
    
        }


        
        public function indexlist($id)
        {
          
    $live = DB::table('lives')
      ->leftjoin('liveid','liveid.live_id','lives.id')->
      where('lives.id',$id)
        ->select('lives.*','liveid.session_id')->first();
     //    dd($live);
       
        //  $live  = live::where('id',$id)->first();
          
           return view('backEnd.newindexdetail',compact('live'));
   
        }

    }

