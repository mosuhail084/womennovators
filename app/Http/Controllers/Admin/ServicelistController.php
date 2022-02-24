<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ServicelistController extends Controller
{
    public function   index()
    {
        $datas=DB::table('enquiries')->where('type','=','service')->get();
        return view('backEnd.serviceenquiry',compact('datas'));
        
    }
}
