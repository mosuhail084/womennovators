<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function event()
    {
        return $this->belongsTo('App\Models\Event');
    }
    public function jury()
    {
        return $this->belongsTo('App\Models\Jury');
    }
}
