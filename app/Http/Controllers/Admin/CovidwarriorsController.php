<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Covidwarrior;
use Illuminate\Http\Request;
use DB;

class CovidwarriorsController extends Controller
{
    //
    public function __construct()   
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $covidwarrior =  DB::table('covidwarriors')
                                        ->leftjoin('admins','admins.id','covidwarriors.created_by')
                                        ->select('covidwarriors.*','admins.name')->where('covidwarriors.status','!=',1)->get();
        return view('backEnd.covidwarriors.index',compact('covidwarrior'));
        
    }
    public function create()
    {
        return view('backEnd.covidwarriors.create');
    }
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'warrior_name' => "required"
        ]);

        try {
            $data=$request->except(['_token']);
            if($request->hasFile('photo'))
            {
                $file=$request->file('photo');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('backEnd/image/covid_warriorsimage/',$filename);
                $data['photo']=$filename;
            }
            $data = Covidwarrior::Create($data);
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
    public function edit($id = '')
    {
        $covidwarrior = Covidwarrior::where('id', $id)->first();
        return view('backEnd.covidwarriors.edit', compact('id', 'covidwarrior'));
    }
    public function update(Request $request, $id = '')
    {
        $request->validate([
            'warrior_name' => "required"
        ]);


        try {
            $data=$request->except(['_token']);
            if($request->hasFile('photo'))
            {
                $file=$request->file('photo');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('backEnd/image/covid_warriorsimage/',$filename);
                $data['photo']=$filename;
            }
            Covidwarrior::find($id)->update($data);
            
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
    public function destroy($id = '')
    {
           try {

            Covidwarrior::destroy($id);
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