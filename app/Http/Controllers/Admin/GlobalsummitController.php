<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Globalsummit;
use Illuminate\Http\Request;
use Image;

class GlobalsummitController extends Controller
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
        $globalsummitDatas = Globalsummit::paginate(10);
        return view('backEnd.globalsummit.index',compact('globalsummitDatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backEnd.globalsummit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        //dd($request);
        $request->validate([
            'type' => "required",
          //  'name' => "required",
          //  'designation' => "required",
            'image' => "required"
        ]);

        try {
            $data=$request->except(['_token']);
            
            if($data['type']==10 ||$data['type']==11 )
          {  
              echo"hi";
              if($request->hasFile('image'))
            {
                $file=$request->file('image');
                    $destinationPath =  'backEnd/image/globalsummit';
                    $name = time() . '.' . $file->getClientOriginalExtension();
                   $s = $file->move($destinationPath, $name);
                         $data['image'] = $name;
               
            }
              
          }
          else
          {
              echo"hello";
               if($request->hasFile('image'))
            {
        //        $avatar = $request->file('image');
               //  $filename = time() . '.' . $avatar->getClientOriginalExtension();
             //   Image::make($avatar)->resize(300, 300)->save('backEnd/image/globalsummit/' . $filename);
           //     $data['image']=$filename;
                 $file=$request->file('image');
                    $destinationPath = 'backEnd/image/globalsummit';
                    $name = $file->getClientOriginalName();
                   $s = $file->move($destinationPath, $name);
                         //  dd($s); die;
                         $data['image'] = $name;
            }
          }
           $data['seo_url']=str_replace(' ', '_', $request->name);
          // dd($data['seo_url']);
          Globalsummit::Create($data);
           
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
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id = '')
    {
        $globalsummit  = Globalsummit::where('id', $id)->first();
        return view('backEnd.globalsummit.edit', compact('id', 'globalsummit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = '')
    {
        $request->validate([
             'type' => "required",
           // 'name' => "required",
            //'designation' => "required",
          //  'image' => "required"
        ]);
      
        try {
            $data=$request->except(['_token']);
              if($request->hasFile('image'))
            {
                $file=$request->file('image');
                    $destinationPath =  'backEnd/image/globalsummit';
                    $name = $file->getClientOriginalName();
                   $s = $file->move($destinationPath, $name);
                         $data['image'] = $name;
               
            }
            Globalsummit::find($id)->update($data);
            $output = array('msg' => 'Updated Successfully');
            return redirect('admin/globalsummit')->with('success', $output);
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
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = '')
    {
           try {
            Globalsummit::destroy($id);
               $output = array('msg' => 'Deleted Successfully');
               return redirect('admin/globalsummit')->with('statuss', $output);
           } catch (Exception $e) {
               DB::rollBack();
               Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
               report($e);
               $output = array('msg' => $e->getMessage());
               return back()->withErrors($output)->withInput();
           }
       }
     public function search(Request $request)
       {
          // dd($request);
           $q = $request->q;
    if($q != ""){
    $globalsummitDatas = Globalsummit::where ( 'name', 'LIKE', '%' . $q . '%' )->paginate (10)->setPath ( '' );
    $pagination = $globalsummitDatas->appends ( array (
       'q' =>  $request->q
     ) );
    // dd($pagination);
    if (count ( $globalsummitDatas ) > 0)
     return view ( 'backEnd.globalsummit.index',compact('globalsummitDatas'))->withQuery ( $q );
    }
     return view ( 'backEnd.globalsummit.index' )->withMessage ( 'No Details found. Try to search again !' );
   
       }
}