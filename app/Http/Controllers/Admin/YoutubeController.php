<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Youtube;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

class YoutubeController extends Controller
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
        
      //  $youtube ->created_by = auth()->user()->id;
      // auth()->id();
        $youtube =  DB::table('youtubes')
                                        ->leftjoin('admins','admins.id','youtubes.created_by')
                                        ->select('youtubes.*','admins.name')->get();
        return view('backEnd.youtube.index',compact('youtube'));
        
    }
    public function create()
    {
        return view('backEnd.youtube.create');
    }
    public function store(Request $request)
    { 
        $request->validate([
            'category_name' => 'required',
            'video_title' => 'required',
            'video_url' => 'required'
        ]);
       // $youtube ->created_by = auth()->user()->teams_id;
      // auth()->id();

        try {
            $data=$request->except(['_token']);
            $data['created_by'] =  auth()->user()->id;
           Youtube::Create($data);
           
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
   public function edit($id = '')
    {
        $youtube = Youtube::where('id', $id)->first();
        return view('backEnd.youtube.edit', compact('id', 'youtube'));
    }
    public function update(Request $request, $id = '')
    {
        /*$request->validate([
            'category name' => 'required',
            'video title' => 'required',
            'Youtube link' => 'required'
        ]);*/

        try {
            $data=$request->except(['_token']);
            Youtube::find($id)->update($data);
            $output = array('msg' => 'Updated Successfully');
            return redirect('admin/youtube')->with('success', $output);
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
    }
    public function destroy($id = '')
    {
           try {
               Youtube::destroy($id);
               $output = array('msg' => 'Deleted Successfully');
               return redirect('admin/youtube')->with('statuss', $output);
           } catch (Exception $e) {
               DB::rollBack();
               Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
               report($e);
               $output = array('msg' => $e->getMessage());
               return back()->withErrors($output)->withInput();
           }
       }

}