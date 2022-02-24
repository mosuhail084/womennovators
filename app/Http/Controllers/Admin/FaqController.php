<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Faqsupport;
use Illuminate\Http\Request;
use DB;

class FaqController extends Controller
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
        $faqDatas = Faq::latest()->get();
    //    dd($blogDatas);
        return view('backEnd.faq.index',compact('faqDatas'));
    }
    public function faqsupportlist()
    {
        $faqDatas = Faqsupport::latest()->get();
      // dd($faqDatas);
        return view('backEnd.faq.faqsupportlist',compact('faqDatas'));
    }
     public function faqsupportlistdelete($id="")
    {
      
     try {

            DB::table('faqsupports')->where('id',$id)->delete();
           // ser::where('id',$id)->delete();
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
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$city = city::latest()->get();
        return view('backEnd.faq.create');
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
      

        try {
            $data=$request->except(['_token']);
            $data['createdby']=auth()->user()->id;
            $data = faq::Create($data);
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
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id = '')
    {
       // $city = city::latest()->get();
        $faq = Faq::where('id', $id)->first();
        return view('backEnd.faq.edit', compact('id','faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = '')
    {
      


        try {
            $data=$request->except(['_token']);
           
            Faq::find($id)->update($data);
            
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
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = '')
    {
           try {

            Faq::destroy($id);
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
