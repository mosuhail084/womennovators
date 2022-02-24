<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Blog()
    {
        return $this->hasMany('App\Models\blog');
    }
    public function getImageAttribute($value)
    {
        if ($value) {
            return url('backEnd/image/blog_image/' . $value);
        }
    }
    public function getauthorimageAttribute($value)
    {
        if ($value) {
            return url('backEnd/image/blog_image/' . $value);
        }
    }
}
