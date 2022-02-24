<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function getImageAttribute($value)
    {
        if ($value) {
            return url('backEnd/image/package_image/' . $value);
        }
    }
}
