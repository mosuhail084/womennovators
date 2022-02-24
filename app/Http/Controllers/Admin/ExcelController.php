<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Excel;
use Illuminate\Http\Request;
use App\Imports\ExcelImport;
use Image;

class ExcelController extends Controller
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
        $excelDatas = Excel::latest()->get();
        return view('backEnd.excel.index',compact('excelDatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backEnd.excel.create');
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
            'file' => 'required|mimes:csv,xlx,xls|max:2048',
        ]);

       
        try {
            $file=$request->file;
          
            $data = $request->except(['_token']);
            $dataa=Excel::toArray(new ExcelImport, $file);
            
            foreach ($dataa[0] as $key => $value) {
                $clientid   = Client::where('client_name',$value['clientname'])->pluck('id')->first();
             //   dd($value['clientname']);
               if($clientid){
                $db['client_id']=$clientid;
                $db['clientname']=$value['clientstaff'] ;
                 $db['clientphone']=$value['clientphone'] ;
                 $db['clientemail']=$value['clientemail'];
                 $db['clientdesignation']=$value['clientdesignation'];
                 $data= Clientcontact::Create($db);
               }
              
 }
            $output = array('msg' => 'Excel file upload Successfully');
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
     * @param  \App\Models\excel  $excel
     * @return \Illuminate\Http\Response
     */
    public function show(excel $excel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\excel  $excel
     * @return \Illuminate\Http\Response
     */
    public function edit($id = '')
    {
        $excel = excel::where('id', $id)->first();
        return view('backEnd.excel.edit', compact('id', 'excel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\excel  $excel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = '')
    {
        $request->validate([  
             'excel_name' => 'required', 'email' => 'required',
        ]);


        try {
            $data=$request->except(['_token']);
            if($request->hasFile('image'))
            {
                $avatar = $request->file('image');
                 $filename = time() . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(700, 700)->save('backEnd/image/excel_image/' . $filename);
                $data['image']=$filename;
            }
        
            excel::find($id)->update($data);
            $output = array('msg' => 'Updated Successfully');
            return redirect('admin/excel')->with('success', $output);
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
     * @param  \App\Models\excel  $excel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = '')
    {
           try {
            excel::destroy($id);
               $output = array('msg' => 'Deleted Successfully');
               return redirect('admin/excel')->with('statuss', $output);
           } catch (Exception $e) {
               DB::rollBack();
               Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
               report($e);
               $output = array('msg' => $e->getMessage());
               return back()->withErrors($output)->withInput();
           }
       }
}
