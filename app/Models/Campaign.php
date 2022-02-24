<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getclientimageAttribute($value)
    {
        if ($value) {
            return url('backEnd/image/campaignimage/' . $value);
        }
    }
    public function getImageAttribute($value)
    {
        if ($value) {
            return url('backEnd/image/campaignimage/' . $value);
        }
    }
}
