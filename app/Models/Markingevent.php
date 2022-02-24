<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Markingevent extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function jury()
    {
        return $this->belongsTo('App\Models\Jury');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function event()
    {
        return $this->belongsTo('App\Models\Event');
    }
    public static function marks($eventid,$userid,$id)
    { 
        $markingedit = DB::table('markingevents')->where('event_id',$eventid)->
      where('user_id',$userid)->where('jury_id',auth()->user()->id)
      ->where('markingschema_id',$id)
      ->first();
      //dd($markingedit );
      return $markingedit  ;
    }
}