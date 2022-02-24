<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    //
    public function __construct()   
    {
        $this->middleware('auth:admin');
    }
        public function create()
        {    
          return view('backEnd.banner.create');
        }

        public function index()
        {
            $bannerDatas = Banner::latest()->get();
            return view('backEnd.banner.index',compact('bannerDatas'));
        }


        public function store (Request $request)
        {
            $title = $request -> title;
            $sequence =$request ->sequence;
           $link = $request -> link;
           $image = $request ->file('file');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('image'),$imageName);
          
            $banner = new Banner();
            $banner ->title =$title;
            $banner ->sequence =$sequence;
            $banner ->link =$link;
            $banner->bannerimage = $imageName;
            $banner->save();
           
            return redirect()->back()->with('banner', 'banner record has been  inserted');   
        }

        
    public function banner()
    { 
        $banner = Banner::all();
        return view('backEnd.banner.form',compact('banner'));
    }

    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('backEnd.banner.edit',compact('banner'));
    } 

    public function update(Request $request, $id = '')
    {
         $data=$request->except(['_token']);
         if($request->hasFile('bannerimage'))
         {
             $file=$request->file('bannerimage');
             $extension=$file->getClientOriginalExtension();
             $filename=time().'.'.$extension;
             $file->move('image/',$filename);
             $data['bannerimage']=$filename;
         }
         Banner::find($id)->update($data);
      
        return redirect()->back()->with('banner', 'banner record has been  updated successfully');   
    }

    public function destroy($id)
    {
        $bannner = Banner::find($id);
        unlink(public_path('image').'/'.$bannner->bannerimage);
        $bannner->delete();
        return back()->with('','banner deleted successfull');
    }



}

    

