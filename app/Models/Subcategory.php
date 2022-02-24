<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getImageAttribute($value)
    {
        if ($value) {
            return url('backEnd/image/subcategory_image/' . $value);
        }
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
