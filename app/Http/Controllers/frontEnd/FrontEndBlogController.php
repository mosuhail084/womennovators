<?php

namespace App\Http\Controllers\frontEnd;
//namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Blog;

use Redirect;
use Illuminate\Http\Request;


class FrontEndBlogController extends Controller
{
    //
   
    public function blog()
    
    {
        $blog=Blog::latest()->get();
        $bloglatest=Blog::latest()->first();
      //dd( $bloglatest);
        return view('we.blog',compact('blog','bloglatest'));
    }
    public function blogDetails($id="")
    {
        //dd($id);
        $blogDatas = Blog::where('id',$id)->latest()->first();
       // dd($blogDatas);
        return view('we.blog-details',compact('blogDatas'));
    }
   /*  public function BlogStore(Request $request)
    { 
       //dd($request);
        $request->validate([
            'name' => "required|alpha",
            'resume' =>  'required|mimes:doc,docx,pdf|max:2048',
            //'email' => "required"
        ]);
        try {
        $data=$request->except(['_token']);
         if($request->hasFile('resume'))
            {
                $file=$request->file('resume');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('backEnd/image/resume/',$filename);
               
               $data['resume']=$filename;
            }
           // dd($data);
         Blogform::Create($data);
         return Redirect::back()->with('error_code', 6);
       // return back()->with('alert','Thank you for Contecting with us – we will get back to you soon!');
       
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
  
    }*/
}
