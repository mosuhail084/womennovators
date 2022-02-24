<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Trophy;
use App\Models\Awardee;
use Illuminate\Http\Request;
use DB;

   class AwardeeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function __construct()   
    {
        $this->middleware('auth:admin');
    }
    public function awardeeshow()
    {
		 if(auth()->user()->id == 10){
        $data = awardee::all();
        return view('backEnd.awardee.list',['wepitch'=>$data]);
		 }
		else
		{
			 $data = awardee::all();
        return view('backEnd.awardee.view',['wepitch'=>$data]);
		}
    }
    public function delete($id)
    {
       
        try {
            $data = awardee::find($id);
            $data->delete();
               $output = array('msg' => 'Deleted Successfully');
               return redirect('admin/awardee')->with('statuss', $output);
           } catch (Exception $e) {
               DB::rollBack();
               Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
               report($e);
               $output = array('msg' => $e->getMessage());
               return back()->withErrors($output)->withInput();
           } 
    }
    /* public function trophyshow()
    {
        //$data = DB::table('trophies')->leftjoin('awardees','awardees.id','trophies.awardee_id')->
       // select('trophies.*','awardees.name')->get();
		 $data=DB::table('trophies')->first();
       // dd($data);
       return view('backEnd.awardee.trophy',['trophy'=>$data]);
    }*/
	    public function trophylist()
    {
        //$data = DB::table('trophies')->leftjoin('awardees','awardees.id','trophies.awardee_id')->
       // select('trophies.*','awardees.name')->get();
		 $wepitch=DB::table('trophies')->get();
       // dd($data);
       return view('backEnd.awardee.trophylist',compact('wepitch'));
    }
      public function trophyview($id="")
    {
        $data = DB::table('awardees')->where('id',$id)->first();
       // dd($data);
        return view('backEnd.awardee.trophy',['trophy'=>$data]);
    }
     public function trophydelete($id)
    {
       
        try {
            $data = Trophy::find($id);
            $data->delete();
               $output = array('msg' => 'Deleted Successfully');
               return redirect('admin/trophy')->with('statuss', $output);
           } catch (Exception $e) {
               DB::rollBack();
               Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
               report($e);
               $output = array('msg' => $e->getMessage());
               return back()->withErrors($output)->withInput();
           } 
    }
    function update(Request $request, $id){
        // dd( $id);
          $data=$request->except(['_token']);
          if($request->hasFile('video'))
          {
              $file=$request->file('video');
              $extension=$file->getClientOriginalExtension();
              $filename=time().'.'.$extension;
              $file->move('storage/media/',$filename);
              $video=$filename;
             // dd( $image);
          }
         // dd( $image);
         
       $a=   DB::table('awardees')->where('id',$id)->update([
              'video'=> $video ??'',
              'name'=> $request->name,
              'email'=> $request->email,
              'phone'=> $request->phone,
              'designation'=> $request->designation,
              'company_name'=> $request->company_name,
              'category'=> $request->category,
              'Status'=> $request->Status,
           ] );
      
      
      return back()->with('success', 'Update Successfully');
      
     }
}
