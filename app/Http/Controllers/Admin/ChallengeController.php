<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Polling;
use Illuminate\Http\Request;

class ChallengeController extends Controller
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

        $polling = Polling::latest()->get();
        return view('backEnd.challengelist',compact('polling'));

    }
}
   