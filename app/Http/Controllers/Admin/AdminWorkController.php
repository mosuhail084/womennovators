<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Work;
use Illuminate\Http\Request;
use DB;

class AdminWorkController extends Controller
{
    //
    public function __construct()   
    {
        $this->middleware('auth:admin');
    }
        public function work()
        {
    
            $Work = Work::latest()->get();
            return view('backEnd.work',compact('Work'));
    
        }

        ///



        public function worklist($id)
        {
            $work = DB::table('works')
            ->leftjoin('workid','workid.work_id','works.id')->
            where('works.id',$id)
              ->select('works.*','workid.have_id')->first();
              
             
             
                
           //dd($userDatas);
        
         // $work  = Work::where('id',$id)->first();
         //  dd($work);
           return view('backEnd.workdetail',compact('work'));
   
        }

    }
