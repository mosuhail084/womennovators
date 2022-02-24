<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Category;
use App\Models\Banner;
use App\Models\Enquiry;
use App\Models\Blog;
use App\Models\Naturebusiness;
use Illuminate\Http\Request;
use App\Mail\PostReqMail;
use App\Mail\ResellerMail;
use App\Mail\AdminPostReqMail;
use App\Mail\AdminResellerMail;

use Illuminate\Support\Facades\Mail;
use DB;
class ServiceproviderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    
        return view('frontEnd.serviceprovider');
    }
	  public function profile()
    {
       
      //  dd( $menu );
        return view('frontEnd.provider-profile');
    }
   
    }
