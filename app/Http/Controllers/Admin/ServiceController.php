<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Service;
use DB;
use Image;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\ServiceController;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $services=Service::latest()->get();
        return view('backEnd.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::all();
        return view('backEnd.service.create',compact('data'));
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
            'category_id' => "required",
            'title' => "required",
            'service_name' => "required",
            'quantity' => "required",
            'price' => "required",
            'discount' => "required",
            'tag' => "required",
            'short_description' => "required",
            'full_description'=>"required"   
        ]);
        $data=$request->except(['_token']);
        if($request->hasFile('service_image'))
                {
                    $avatar = $request->file('service_image');
                    $filename = time() . '.' . $avatar->getClientOriginalExtension();
                    Image::make($avatar)->resize(700, 700)->save('backEnd/service/image/' . $filename);
                    $data['service_image']=$filename;
                }
               
         //    DB::table('services')->insertGetId($data);
          //   return redirect('admin/service/create'); 

        if($request->hasFile('banner_image'))
             {
                 $avatar = $request->file('banner_image');
                 $filename = time() . '.' . $avatar->getClientOriginalExtension();
                 Image::make($avatar)->resize(700, 700)->save('backEnd/banner/image/' . $filename);
                 $data['banner_image']=$filename;
             }
             $data['user_id']=auth()->user()->id;
             //dd($data);
            DB::table('services')->insert($data);
            return redirect('admin/service/create')->with('success','created successfully'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id='')
    {
        $data = Category::all();
        $service = service::where('id', $id)->first();
        // dd($data);
        return view('backEnd.service.edit', compact('data','service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // $request->validate([
        //     'category_id' => "required",
        //     'title' => "required",
        //     'service_name' => "required",
        //     'quantity' => "required",
        //     'price' => "required",
        //     'discount' => "required",
        //     'tag' => "required",
        //     'short_description' => "required",
        //     'full_description'=>"required"   
        // ]);
        $data=$request->except(['_token']);
        if($request->hasFile('service_image'))
                {
                    $avatar = $request->file('service_image');
                    $filename = time() . '.' . $avatar->getClientOriginalExtension();
                    Image::make($avatar)->resize(700, 700)->save('backEnd/service/image/' . $filename);
                    $data['service_image']=$filename;
                }
               
         //    DB::table('services')->insertGetId($data);
          //   return redirect('admin/service/create'); 

        if($request->hasFile('banner_image'))
             {
                 $avatar = $request->file('banner_image');
                 $filename = time() . '.' . $avatar->getClientOriginalExtension();
                 Image::make($avatar)->resize(700, 700)->save('backEnd/banner/image/' . $filename);
                 $data['banner_image']=$filename;
             }
             $data['user_id']=auth()->user()->id;
             //dd($data);
             Service::find($id)->update($data);
            return redirect('admin/service')->with('success','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id='')
    {
        
        try {
            service::destroy($id);
            $output = array('msg' => 'Deleted Successfully');
            return redirect('admin/service')->with('statuss', $output);
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
    }
    }

