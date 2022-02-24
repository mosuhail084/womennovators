<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Markingevent;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;
use DB;
class MarkingseventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()   
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $resultDatas = DB::table('markingevents')
        ->leftjoin('users','users.id','markingevents.user_id')
        ->leftjoin('categories','categories.id','users.usercategory')
        ->select('users.*','markingevents.event_id','markingevents.user_id','categories.categoryname')->distinct()->get();
     // dd($resultDatas);
        return view('backEnd.result.event',compact('resultDatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::latest()->get();
        return view('backEnd.markingschema.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'schemaname' => 'required', 'category_id' => 'required',
        ]);

        try {
            $data=$request->except(['_token']);
            Markingschema::Create($data);
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
     * @param  \App\Models\markingschema  $markingschema
     * @return \Illuminate\Http\Response
     */
    public function show(markingschema $markingschema)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\markingschema  $markingschema
     * @return \Illuminate\Http\Response
     */
    public function edit($id = '')
    {
        $category = Category::latest()->get();
        $markingschema = Markingschema::where('id', $id)->with('category')->first();
        return view('backEnd.markingschema.edit', compact('id', 'markingschema','category'));
    }
    public function result(Request $request,$id="")
    {
        //dd($id);
        $resultDatas = DB::table('markingevents')
        ->leftjoin('users','users.id','markingevents.user_id')
        ->leftjoin('categories','categories.id','users.usercategory')
        ->where('markingevents.event_id',$id)
        ->select('users.*','markingevents.event_id','markingevents.user_id','categories.categoryname')->distinct()->get();
      // dd($resultDatas);

     $event = Event::where('id', $id)->first();
        return view('backEnd.result.index',compact('resultDatas','event'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\markingschema  $markingschema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = '')
    {
        $request->validate([  
             'markingschema_name' => 'required', 'email' => 'required',
        ]);


        try {
            $data=$request->except(['_token']);
            Markingschema::find($id)->update($data);
            $output = array('msg' => 'Updated Successfully');
            return redirect('admin/markingschema')->with('success', $output);
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
    }
    public function commentdetails(Request $request,$id="")
    {
        //dd($id);
        
       
     /*   $resultDatas = DB::table('eventcomments')
        ->join('users','users.id','eventcomments.user_id')
      
        ->join('categories','categories.id','users.usercategory')
        ->where('eventcomments.event_id',$id)
        ->select('users.name','users.usercategory','users.id','eventcomments.event_id','eventcomments.comment','eventcomments.user_id','categories.categoryname')
        ->groupBy('users.name','users.usercategory','users.id','eventcomments.event_id','eventcomments.comment','eventcomments.user_id','categories.categoryname')->get();
        */
        $resultDatas= DB::table('eventcomments')
        ->leftjoin('users','users.id','eventcomments.user_id')
        ->where('event_id',$id)     
        ->select('eventcomments.user_id','users.name')
        ->groupBy('eventcomments.user_id','users.name')->get();
       
      // dd($user);
      
       //dd($resultDatas);

        $jury= DB::table('eventcomments')
        ->leftjoin('juries','juries.id','eventcomments.jury_id')
        ->where('event_id',$id)     
        ->select('eventcomments.jury_id','juries.name')
        ->groupBy('juries.name','eventcomments.jury_id')->get();

       $jury_id=DB::table('eventcomments')->select('jury_id')->groupBy('jury_id')->get();
       $user_id=DB::table('eventcomments')->select('jury_id','user_id')->groupBy('jury_id','user_id')->get();

       // $result = array_unique($input); 
        //print_r($result);    die;   
       // dd( $user_id);

     $event = Event::where('id', $id)->first();
        return view('backEnd.result.comment',compact('resultDatas','event','jury','jury_id'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\markingschema  $markingschema
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = '')
    {
           try {
            Markingschema::destroy($id);
               $output = array('msg' => 'Deleted Successfully');
               return redirect('admin/markingschema')->with('statuss', $output);
           } catch (Exception $e) {
               DB::rollBack();
               Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
               report($e);
               $output = array('msg' => $e->getMessage());
               return back()->withErrors($output)->withInput();
           }
       }
}
