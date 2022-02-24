<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Jury extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
         'name',
         'email',
         'password',
         'mobile_number',
         'designation',
         'photo',
         'fblink',
         'linkedin',
         'company',
         'instagram',
         'state_id',
         'city_id',
         'sector_id',
         'industry',
         'description',
         'Ref_by'
     ];
     protected $hidden = [
        'password',
        'remember_token',
    ];
 public function getPhotoAttribute($value)
    {
        if ($value) {
            return url('backEnd/juryimage/' . $value);
        } else {
              return url('backEnd/img/active.png' . $value);
        }
    }
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function sector()
    {
        return $this->belongsTo('App\Models\Sector');
    }
    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }
}
