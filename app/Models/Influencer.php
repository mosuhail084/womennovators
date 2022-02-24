<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Influencer extends Authenticatable
{
    use HasFactory;

    protected $guard = "influencer";

    protected $fillable = [
        'email','status','password',
    ];
    public function title()
    {
        return $this->belongsTo('App\Models\Title');
    }
    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }
}
