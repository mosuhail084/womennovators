<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Warrior_appreciation;
use App\Models\Payment_detail;
use App\Models\Covid_contact;
use App\Models\Covidwarrior;
use Illuminate\Http\Request;


class CovidHomeController extends Controller
{
    public function __construct()   
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $join = Warrior_appreciation::count();
        $order = Payment_detail::count();
        $enquiry = Covid_contact::count();
        $warrior = Covidwarrior::count();
    return view('backEnd.covidcare.index',compact('join','order','enquiry','warrior'));
    }
}    