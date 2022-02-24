<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Careerform;
use Illuminate\Http\Request;
use DB;
use Auth;

class CareerformController extends Controller
{
    /**
     * Display a listing of the careerform.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()   
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $careerformDatas  =  DB::table('careerforms')->join('careers','careerforms.role_id','careers.id')->
        select('careerforms.*','careers.title')->get();
        //($careerformDatas);
        return view('backEnd.careerform.index',compact('careerformDatas'));
    }

    /**
     * Show the form for creating a new careerform.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$city = city::latest()->get();
        return view('backEnd.careerform.create');
    }

    /**
     * Store a newly created careerform in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
      
        

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
            $data = Careerform::Create($data);
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
     * Display the specified careerform.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified careerform.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id = '')
    {
       // $city = city::latest()->get();
        $careerform = Careerform::where('id', $id)->first();
        return view('backEnd.careerform.edit', compact('id', 'careerform'));
    }

    /**
     * Update the specified careerform in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = '')
    {
      
        


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
            Careerform::find($id)->update($data);
            
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
     * Remove the specified careerform from storage.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = '')
    {
           try {

            Careerform::destroy($id);
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
