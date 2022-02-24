<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Covid_contact;
use Illuminate\Http\Request;

class CovidcontactController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()   
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $contact = Covid_contact::latest()->get();
        return view('backEnd.covidcontact',compact('contact'));

    }
}