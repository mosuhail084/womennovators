<?php

namespace App\Http\Controllers\faces;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Event;
use Illuminate\Http\Request;
use DB;

class UserEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()   
    {
        $this->middleware('auth:user');
    }
    public function index()
    {
        //$eventDatas = Event::latest()->with('sector','city')->get();
        $eventDatas = DB::table('userevents')
            ->join('events', 'userevents.event_id', '=','events.id')
            ->join('states', 'states.id', '=','events.state_id')
            ->join('sectors', 'sectors.id', '=','events.sector_id')
            ->select('events.*','states.statename','sectors.sectorname')
            ->where('userevents.user_id',auth()->user()->id)
        
            ->get();
    // dd($eventDatas);
        return view('faces.userevent.index',compact('eventDatas'));
    }
    public function eventList($id)
    {
        $juryDatas = DB::table('juryevents')
       ->leftjoin('juries','juries.id','juryevents.jury_id')
       ->leftjoin('cities','cities.id','juries.city_id')
       ->where('juryevents.event_id',$id)
       ->select('juries.*')->get();
    //  dd($eventDatas);
    $userDatas = DB::table('userevents')
       ->leftjoin('users','users.id','userevents.user_id')
       ->where('userevents.event_id',$id)
       ->select('users.*')->get();
       $event = DB::table('events')
       ->leftjoin('sectors','sectors.id','events.sector_id')
       ->leftjoin('cities','cities.id','events.city_id')
       ->where('events.id',$id)
       ->select('events.*','cities.name','sectors.sectorname')->first();
        return view('faces.userevent.eventdetails',compact('juryDatas','userDatas','event','id'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$city = city::latest()->get();
        return view('faces.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'name' => "required"
        ]);

        try {
            $data=$request->except(['_token']);
            if($request->hasFile('authorimage'))
            {
                $file=$request->file('authorimage');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('backEnd/image/blog_image/',$filename);
                $data['authorimage']=$filename;
            }
            if($request->hasFile('image'))
            {
                $file=$request->file('image');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('backEnd/image/blog_image/',$filename);
                $data['image']=$filename;
            }
            $data = Blog::Create($data);
           // dd($data);
            $output = array('msg' => 'Create Successfully');
            return back()->with('success', $output);
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id = '')
    {
       // $city = city::latest()->get();
        $blog = Blog::where('id', $id)->first();
        return view('faces.blog.edit', compact('id', 'blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = '')
    {
        $request->validate([
            'name' => "required"
        ]);


        try {
            $data=$request->except(['_token']);
            if($request->hasFile('authorimage'))
            {
                $file=$request->file('authorimage');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('backEnd/image/blog_image/',$filename);
                $data['authorimage']=$filename;
            }
            if($request->hasFile('image'))
            {
                $file=$request->file('image');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('backEnd/image/blog_image/',$filename);
                $data['image']=$filename;
            }
            Blog::find($id)->update($data);
            
            $output = array('msg' => 'Updated Successfully');
            return back()->with('success', $output);
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = '')
    {
           try {

            Blog::destroy($id);
            $output = array('msg' => 'Deleted Successfully');
            return back()->with('success', $output);
              
           } catch (Exception $e) {
               DB::rollBack();
               Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
               report($e);
               $output = array('msg' => $e->getMessage());
               return back()->withErrors($output)->withInput();
           }
       }

}
