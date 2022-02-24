<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function resource()
    {
        return $this->hasMany('App\Models\resource');
    }
    public function getImageAttribute($value)
    {
        if ($value) {
            return url('backEnd/image/resource_image/' . $value);
        }
    }
    public function getBanner_imageAttribute($value)
    {
        if ($value) {
            return url('backEnd/image/resource_image/' . $value);
        }
    }
}
