<?php

namespace App\Http\Controllers\frontEnd;
//namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Blog;

use Redirect;
use Illuminate\Http\Request;


class PolicyController extends Controller
{
    //
   
    public function policy()
    
    {
       
        return view('we.policy');
    }
      public function termsandcondition()
    
    {
       
        return view('we.termsandcondition');
    }
  
}
