<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Markingschema;
use App\Models\Category;
use Illuminate\Http\Request;
class MarkingschemaController extends Controller
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
        $markingschemaDatas = Markingschema::latest()->with('category')->get();
        return view('backEnd.markingschema.index',compact('markingschemaDatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::latest()->get();
        return view('backEnd.markingschema.create',compact('category'));
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
            'schemaname' => 'required', 'category_id' => 'required',
        ]);

        try {
            $data=$request->except(['_token']);
            Markingschema::Create($data);
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
     * @param  \App\Models\markingschema  $markingschema
     * @return \Illuminate\Http\Response
     */
    public function show(markingschema $markingschema)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\markingschema  $markingschema
     * @return \Illuminate\Http\Response
     */
    public function edit($id = '')
    {
        $category = Category::latest()->get();
        $markingschema = Markingschema::where('id', $id)->with('category')->first();
        return view('backEnd.markingschema.edit', compact('id', 'markingschema','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\markingschema  $markingschema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = '')
    {
        $request->validate([  
             'markingschema_name' => 'required', 'email' => 'required',
        ]);


        try {
            $data=$request->except(['_token']);
            Markingschema::find($id)->update($data);
            $output = array('msg' => 'Updated Successfully');
            return redirect('admin/markingschema')->with('success', $output);
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
     * @param  \App\Models\markingschema  $markingschema
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = '')
    {
           try {
            Markingschema::destroy($id);
               $output = array('msg' => 'Deleted Successfully');
               return redirect('admin/markingschema')->with('statuss', $output);
           } catch (Exception $e) {
               DB::rollBack();
               Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
               report($e);
               $output = array('msg' => $e->getMessage());
               return back()->withErrors($output)->withInput();
           }
       }
}
