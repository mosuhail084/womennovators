<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Influencer;
use Illuminate\Http\Request;
use App\Mail\Mailinfluencer;
use Mail;
use DB;


class InfluencerController extends Controller
{
    public function __construct()   
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
       $influencer = Influencer::latest()->get();
       return view('backEnd.influencer.index',compact('influencer'));
    }
     public function view($id)
    {
        
        $view = DB::table('influencers')
        
       ->leftjoin('influencer_profiles','influencer_profiles.influencer_id','influencers.id')
      ->leftjoin('countries','countries.id','influencer_profiles.country')
      ->leftjoin('cities','cities.state_id','influencer_profiles.city')
      ->leftjoin('sectors','sectors.id','influencer_profiles.sector')
    
      ->where('influencers.id',$id)
      ->select('influencers.*','influencer_profiles.*','influencer_profiles.influencer_id',
        'countries.country_name as countryname',
        'cities.name as cityname','sectors.sectorname as sectorname')->first();
        $refrencefriend = DB::table('refrence_friend')->where('influencer_id',$id)->get();
        $influencermedia = DB::table('influencer_media')->where('influencer_id',$id)->get();
     
        $influencerreferals = DB::table('influencer_referals')->where('influencer_id',$id)->get(); 
      $influencerview = DB::table('influencer_jury')->where('influencer_id',$id)->get();
    //   dd($influencerview);
        return view('backEnd.influencer.view',compact('view','id','influencerview','influencerreferals','refrencefriend','influencermedia'));
   }
     public function changeStatus(Request $request)
   {
  // dd($request);
    $user = influencer::find($request->user_id);
    
   // dd($user);
    $user->status = $request->status;
   
    $user->save();
     $data = array(

                'name' => $user->name,
                'id'    =>$user->id,
                
                );
   // dd($user);
    if($request->status==1)
  {
    Mail::to($user->email)->send(new Mailinfluencer ( $data ));
  }
    return response()->json(['success'=>'Status change successfully.']);
}
}    