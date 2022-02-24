<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Ourteam;
use Illuminate\Http\Request;  
use DB;
use Auth;

class OurteamController extends Controller
{
    /**
     * Display a listing of the ourteam.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()   
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $ourteamDatas  =  Ourteam::latest()->get();
       // dd($ourteamDatas);
        return view('backEnd.ourteam.index',compact('ourteamDatas'));
    }

    /**
     * Show the form for creating a new ourteam.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$city = city::latest()->get();
        return view('backEnd.ourteam.create');
    }

    /**
     * Store a newly created ourteam in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
      
        

        try {
            $data=$request->except(['_token']);
            if($request->hasFile('profile_pic'))
            {
                $file=$request->file('profile_pic');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('backEnd/image/ourteam_image/',$filename);
                $data['profile_pic']=$filename;
            }
            $data['createdby']=Auth::user()->id;
            $data['updatedby']=Auth::user()->id;
            $data = Ourteam::Create($data);
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
     * Display the specified ourteam.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified ourteam.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id = '')
    {
       // $city = city::latest()->get();
        $ourteam = Ourteam::where('id', $id)->first();
        return view('backEnd.ourteam.edit', compact('id', 'ourteam'));
    }

    /**
     * Update the specified ourteam in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = '')
    {
      
        


        try {
            $data=$request->except(['_token']);
          if($request->hasFile('profile_pic'))
            {
                $file=$request->file('profile_pic');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('backEnd/image/ourteam_image/',$filename);
                $data['profile_pic']=$filename;
            }
            Ourteam::find($id)->update($data);
            
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
     * Remove the specified ourteam from storage.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = '')
    {
           try {

            Ourteam::destroy($id);
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
