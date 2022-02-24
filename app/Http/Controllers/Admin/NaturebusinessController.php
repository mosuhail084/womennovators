<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Naturebusiness;
use Illuminate\Http\Request;

class NaturebusinessController extends Controller
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
        $businessDatas = Naturebusiness::latest()->get();
        return view('backEnd.naturebusiness.index',compact('businessDatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'naturebusiness' => "required"
        ]);

        try {
            $data=$request->except(['_token']);
             Naturebusiness::Create($data);
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
     * @param  \App\Models\Naturebusiness  $naturebusiness
     * @return \Illuminate\Http\Response
     */
    public function show(Naturebusiness $naturebusiness)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Naturebusiness  $naturebusiness
     * @return \Illuminate\Http\Response
     */
    public function edit(Naturebusiness $naturebusiness)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Naturebusiness  $naturebusiness
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Naturebusiness $naturebusiness)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Naturebusiness  $naturebusiness
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = '')
    {
        try {
            Naturebusiness::destroy($id);
            $output = array('msg' => 'Deleted Successfully');
            return redirect('admin/naturebusiness')->with('statuss', $output);
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
    }
}
