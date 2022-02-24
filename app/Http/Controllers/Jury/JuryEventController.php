<?php

namespace App\Http\Controllers\Jury;
use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Image;
use DB;
class JuryEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()   
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $eventDatas =  DB::table('juryevents')
        ->leftjoin('events','events.id','juryevents.event_id')
        ->where('juryevents.jury_id',auth()->user()->id)
        ->select('events.*')->distinct()->get();
     //   dd($eventDatas);
  
        return view('jury.juryevent.index',compact('eventDatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backEnd.jury.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jury  $Jury
     * @return \Illuminate\Http\Response
     */
    public function show(Jury $Jury)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jury  $Jury
     * @return \Illuminate\Http\Response
     */
    public function edit($id = '')
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jury  $Jury
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = '')
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jury  $Jury
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = '')
    {
       
       }
}
