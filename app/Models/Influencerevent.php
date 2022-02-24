<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Influencerevent extends Model
{
    protected $table = "influencerevents";
    protected $guarded = [];
    public $timestamps = true;   

    use HasFactory;
}
