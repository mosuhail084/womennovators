<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sectormail extends Model
{
    use HasFactory;

    protected $fillable = [
        'sector_id','subject','msg','attachment'
 ];
 public function getAttachmentAttribute($value)
    {
        if ($value) {
            return url('backEnd/attachment/' . $value);
        } else {
              return url('backEnd/img/active.png' . $value);
        }
    }
 public $timestamps = true; 
}
