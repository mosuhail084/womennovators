<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Warrior_appreciation;
use Illuminate\Http\Request;
use DB;

class WarriorappreciationController extends Controller
{
    public function __construct()   
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $appreciation = Warrior_appreciation::latest()->get();
        return view('backEnd.joinsquad.index',compact ('appreciation'));
    }
    public function edit($id = '')
    {
        $squad = Warrior_appreciation::where('id', $id)->first();
        return view('backEnd.joinsquad.edit', compact('id', 'squad'));
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
            Warrior_appreciation::find($id)->update($data);
            $output = array('msg' => 'Updated Successfully');
            return redirect('admin/joinsquad')->with('success', $output);
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
    }
    public function view($id)
    {
         $view = Warrior_appreciation::where('id', $id)->first();
        return view('backEnd.joinsquad.view',compact('view','id'));
    }
}