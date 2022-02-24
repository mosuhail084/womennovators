<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $guard = "admin";

    protected $fillable = [
        'email','status', 'password','teammember_id','role_id','title_id','team_member_name','mobile_no'
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
