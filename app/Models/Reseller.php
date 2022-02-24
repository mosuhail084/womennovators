<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;

class Reseller extends  Authenticatable
{
    protected $guard = "resellers";
   
       protected $guarded = [];
 
}
