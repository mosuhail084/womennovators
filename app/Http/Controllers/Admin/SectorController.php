<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Sector;
use App\Models\city;
use Illuminate\Http\Request;

class SectorController extends Controller
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
        $sectorDatas = Sector::latest()->get();
    //    dd($sectorDatas);
        return view('backEnd.sector.index',compact('sectorDatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $city = city::latest()->get();
        return view('backEnd.sector.create',compact('city'));
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
            'sectorname' => "required"
        ]);

        try {
            $data=$request->except(['_token']);
            $data = Sector::Create($data);
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
     * @param  \App\Models\sector  $sector
     * @return \Illuminate\Http\Response
     */
    public function show(sector $sector)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sector  $sector
     * @return \Illuminate\Http\Response
     */
    public function edit($id = '')
    {
        $city = city::latest()->get();
        $sector = Sector::where('id', $id)->first();
        return view('backEnd.sector.edit', compact('id', 'sector','city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sector  $sector
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = '')
    {
        $request->validate([
            'sectorname' => "required"
        ]);


        try {
            $data=$request->except(['_token']);
            sector::find($id)->update($data);
            $output = array('msg' => 'Updated Successfully');
            return redirect('admin/sector')->with('success', $output);
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
     * @param  \App\Models\sector  $sector
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = '')
    {
           try {
            Sector::destroy($id);
               $output = array('msg' => 'Deleted Successfully');
               return redirect('admin/sector')->with('statuss', $output);
           } catch (Exception $e) {
               DB::rollBack();
               Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
               report($e);
               $output = array('msg' => $e->getMessage());
               return back()->withErrors($output)->withInput();
           }
       }
}
