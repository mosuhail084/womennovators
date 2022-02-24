<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getclientimageAttribute($value)
    {
        if ($value) {
            return url('backEnd/image/clientimage/' . $value);
        }
    }
    public function getclientlogoAttribute($value)
    {
        if ($value) {
            return url('backEnd/image/clientlogo/' . $value);
        }
    }
}
