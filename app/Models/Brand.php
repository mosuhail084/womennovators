<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getImageAttribute($value)
    {
        if ($value) {
            return url('backEnd/image/brand_image/' . $value);
        }
    }

    public function blog()
    {
        return $this->hasMany('App\Models\Blog');
    }

}
