<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function submenu(){
        return $this->hasMany('App\Models\Submenu','menu_id');
        }
}
