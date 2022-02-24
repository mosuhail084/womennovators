<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'state_id','city_id','event_name','start_date','end_date','description','sector_id','event_link','poster','time','type'
 ];
public function getPosterAttribute($value)
    {
        if ($value) {
            return url('backEnd/posterimage/' . $value);
        } else {
            return url('frontEnd/images/alcohol.jpg/' . $value);
        }
    }
 public function sector()
 {
     return $this->belongsTo('App\Models\Sector');
 }
 public function city()
 {
     return $this->belongsTo('App\Models\City');
 }

 public $timestamps = true; 
}
