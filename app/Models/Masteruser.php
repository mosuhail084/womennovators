<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masteruser extends Authenticatable
{
    use HasFactory;

    protected $guard = "masterusers";

    protected $fillable = [
        'email','password',
    ];
   
}
