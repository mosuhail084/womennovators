<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Eventcomment extends Model
{
    use HasFactory;

    protected $guarded = [];
    public static function commentedit($eventid,$userid,$id)
    { 
        $edit = DB::table('eventcomments')->where('event_id',$eventid)->
      where('user_id',$userid)->where('jury_id',auth()->user()->id)
      ->where('id',$id)
      ->first();
     //dd($edit );
      return $edit  ;
    }
    public static function getComment($id,$userid)
    { 
     $showcomment = DB::table('eventcomments')->
      where('user_id',$userid)
     
      ->get();
     // dd($showcomment );
      return $showcomment  ;
    }
}
