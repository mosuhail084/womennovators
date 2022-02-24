<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $guarded = [];
    
      public function jury()
    {
        return $this->hasMany('App\Models\Jury');
    }
    
    public function event()
    {
        return $this->hasMany('App\Models\Event');
    }
    public function state()
    {
        return $this->belongsTo('App\Models\State');
    }
}