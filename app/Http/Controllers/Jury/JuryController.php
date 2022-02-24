<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Jury;
use Illuminate\Http\Request;
use Image;
class JuryController extends Controller
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
        $juryDatas = Jury::latest()->get();
        return view('backEnd.jury.index',compact('juryDatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backEnd.jury.create');
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
            'jury_name' => 'required', 'email' => 'required',
        ]);

        try {
            $data=$request->except(['_token']);
            if($request->hasFile('image'))
                {
                    $avatar = $request->file('image');
                    $filename = time() . '.' . $avatar->getClientOriginalExtension();
                    Image::make($avatar)->resize(700, 700)->save('backEnd/image/jury_image/' . $filename);
                    $data['image']=$filename;
                }
           Jury::Create($data);
            //dd($data);
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
     * @param  \App\Models\Jury  $Jury
     * @return \Illuminate\Http\Response
     */
    public function show(Jury $Jury)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jury  $Jury
     * @return \Illuminate\Http\Response
     */
    public function edit($id = '')
    {
        $jury = Jury::where('id', $id)->first();
        return view('backEnd.jury.edit', compact('id', 'jury'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jury  $Jury
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = '')
    {
        $request->validate([  
             'jury_name' => 'required', 'email' => 'required',
        ]);


        try {
            $data=$request->except(['_token']);
            if($request->hasFile('image'))
            {
                $avatar = $request->file('image');
                 $filename = time() . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(700, 700)->save('backEnd/image/jury_image/' . $filename);
                $data['image']=$filename;
            }
        
            Jury::find($id)->update($data);
            $output = array('msg' => 'Updated Successfully');
            return redirect('admin/jury')->with('success', $output);
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
     * @param  \App\Models\Jury  $Jury
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = '')
    {
           try {
               Jury::destroy($id);
               $output = array('msg' => 'Deleted Successfully');
               return redirect('admin/jury')->with('statuss', $output);
           } catch (Exception $e) {
               DB::rollBack();
               Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
               report($e);
               $output = array('msg' => $e->getMessage());
               return back()->withErrors($output)->withInput();
           }
       }
}
