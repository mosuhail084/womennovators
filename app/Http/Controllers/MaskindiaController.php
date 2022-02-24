<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mask;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;





class MaskindiaController extends Controller
{
    public function view()
    {
        return view('frontEnd.maskindia');
    }
    public function form()
    {
        return view('frontEnd.maskupform');
    }
    public function store(Request $request)
    {

        try {
            $data=$request->except(['_token']);
            if($request->hasFile('image'))
            {
                $file=$request->file('image');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('backEnd/image/maskindia/',$filename);
                $data['image']=$filename;
            }
            $data = Mask::Create($data);
           // dd($data);
            $output = array('msg' => 'Thank you for joining our mask campaign!!!');
            return back()->with('success', $output);
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
    }
    public function photo()
    {
        $photo = Mask::where('status',1)->latest()->get();
        return view('frontEnd.maskindiaphoto',compact('photo'));
    }
}    