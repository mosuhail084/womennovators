<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Payment_detail;
use Illuminate\Http\Request;
use DB;

class PaymentdetailController extends Controller
{
    public function __construct()   
    {
        $this->middleware('auth:admin');
    }
    public function index()
    { 
      $payment = Payment_detail::latest()->get();
      return view('backEnd.paymentdetail',compact('payment'));
    }
}    