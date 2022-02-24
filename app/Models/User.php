<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    protected $guard = "user";

    public function getPictureAttribute($value)
    {
        if ($value) {
            return url('backEnd/faceimage/' . $value);
        } else {
              return url('backEnd/img/active.png' . $value);
        }
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
  
}