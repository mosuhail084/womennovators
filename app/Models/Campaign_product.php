<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign_product extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function campaign()
    {
        return $this->belongsTo('App\Models\Campaign');
    }
    public function getImageAttribute($value)
    {
        if ($value) {
            return url('backEnd/image/productimage/' . $value);
        }
    }
   
}
