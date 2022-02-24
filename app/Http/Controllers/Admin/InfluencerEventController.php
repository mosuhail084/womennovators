<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sector;
use App\Models\Event;
use App\Models\Category;
use App\Models\State;
use App\Models\Influencerevent;
use App\Models\City;
use DB;

class InfluencerEventController extends Controller
{
    function __construct(Request $request)
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $data=DB::table('influencerevents')
      
        ->join('allcountries','allcountries.id','=','influencerevents.country')
        ->join('allstates','allstates.id','=', 'influencerevents.state')
        //->where(['influencerevents.country' => 'allcountries.id'])
        ->select('influencerevents.*','allcountries.id as country_id','allcountries.name as country_name',
        'allstates.id as state_id','allstates.name as state_name')
        ->get();
        //dd($data);
        
        
        $datas=DB::table('influencerevents')->get();
        return view('backEnd.influencer.event.index',compact('data','datas'));
        //
    }
    public function create(Request $request)
    {
        $state=DB::table('allstates')->get();
    $sector=DB::table('sectors')->get();
    $country=DB::table('allcountries')->get();
    //  dd($country);
      if ($request->ajax()) {
          // dd($request);
            if (isset($request->category_id)) {
     foreach (DB::table('allstates')->where('country_id', $request->category_id)->get() as $sub) {
     echo "<option value='" . $sub->id . "'>" . $sub->name . "</option>";
                }
            }
           
        } else {
            return view('backEnd.influencer.event.create',compact('state','sector','country'));
        
          }
        
    }
    public function store(Request $request)
    {
        $datas=$request->except(['_token']);
        // $datas['start_date']=$request->start_date;
        // $datas['end_date']= $request->end_date;
        $datas['created_by']=auth()->user()->id;
        $datas['updated_by']=auth()->user()->id;
        $datas['approved_by']=auth()->user()->id;
        if($request->hasFile('banner_image'))
            {
                $file=$request->file('banner_image');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('backEnd/banner-image/influencerevent/',$filename);
                $datas['banner_image']=$filename;
            }

        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename1=time().'.'.$extension;
            $file->move('backEnd/influncer-image/influencerevent/',$filename1);
            $datas['image']=$filename1;
        }
        Influencerevent::create($datas);
        return back()->with('success','data submitted successfully');
    }

 
    public function show($id)
    {
        $datas=DB::table('influencerevents')->where('id',$id)->get();
        return view('backEnd.influencer.event.show',compact('datas'));
        //
    }
    public function edit(Request $request,$id)
    {   $country=DB::table('allcountries')->get();
        $datas= DB::table('influencerevents')->find($id);
       // dd($datas);
       if ($request->ajax()) {
        // dd($request);
          if (isset($request->category_id)) {
   foreach (DB::table('allstates')->where('country_id', $request->category_id)->get() as $sub) {
   echo "<option value='" . $sub->id . "'>" . $sub->name . "</option>";
              }
          }
         
      } else {
        return view('backEnd.influencer.event.edit',compact('datas','country','id'));
      
        }
       

    }
    public function delete($id)
    {
        Influencerevent::destroy($id);
        return back()->with('success', 'data deleted successfully');

        //
    }
    public function update(Request $request,$id)
    {
        
        // dd($request);
        $data=$request->except(['_token']);
        if($request->hasFile('banner_image'))
            {
                $file=$request->file('banner_image');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('backEnd/banner-image/influencerevent/',$filename);
                $data['banner_image']=$filename;
            }

        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename1=time().'.'.$extension;
            $file->move('backEnd/influncer-image/influencerevent/',$filename1);
            $data['image']=$filename1;
        }
        Influencerevent::where('id', $id)->update($data);
     /*   DB::table('tblinfluencerevents')
              ->where('id', $id)
              ->update([
                  'country'=>$request->country,
                  'state'=>$request->state,
                  'pin_code' => $request->pin_code,
                  'event_name' => $request->event_name,
                  'community_id'=>$request->community_id,
                  'event_type'=>$request->event_type,
                  
                  'location'=>$request->location,
                  'about_event'=>$request->about_event,
                  'start_date'=>$request->start_date,
                  'banner_image'=>$banner ??'',
                  'image'=>$image ??''
            ]);*/
            return back()->with('success', 'data updated successfully');
        

    }
}
