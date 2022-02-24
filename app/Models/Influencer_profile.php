<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Influencer_profile extends Authenticatable
{
    use HasFactory;

    protected $guard = "influencer";

    protected $fillable = ['influencer_id','country','city','area','expertise','industry','qualification','phone','network1','network2','network3','network4','actual_city',
    'comp_name','comp_design','friend_name','school_college','residential_area'
    ];
   
    
}
