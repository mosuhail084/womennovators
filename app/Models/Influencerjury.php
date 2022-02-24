<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Influencerjury extends Model
{
    use HasFactory;

    protected $table = 'influencer_jury';
    protected $guarded = [];
    public $timestamps = false;
    
}
