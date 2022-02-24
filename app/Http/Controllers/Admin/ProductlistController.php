<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductlistController extends Controller
{
    public function index()
    {
        $datas=DB::table('enquiries')->where('type','=','product')->get();
        
        return view('backEnd.productenquiry',compact('datas'));
    }
}
