<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Image;
class ClientController extends Controller
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
        $clientDatas = Client::latest()->get();
        return view('backEnd.client.index',compact('clientDatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backEnd.client.create');
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
            'client_name' => 'required', 'clientimage' => 'required',
        ]);

        try {
            $data=$request->except(['_token']);
            if($request->hasFile('clientimage'))
                {
                    $avatar = $request->file('clientimage');
                    $filename = time() . '.' . $avatar->getClientOriginalExtension();
                    Image::make($avatar)->resize(1000, 750)->save('backEnd/image/clientimage/' . $filename);
                    $data['clientimage']=$filename;
                }
                if($request->hasFile('clientlogo'))
                { 
                     $avatar = $request->file('clientlogo');
                    $filename = time() . '.' . $avatar->getClientOriginalExtension();
                    Image::make($avatar)->resize(252, 270)->save('backEnd/image/clientlogo/' . $filename);
                    $data['clientlogo']=$filename;
                }
           Client::Create($data);
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
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id = '')
    {
        $client = Client::where('id', $id)->first();
        return view('backEnd.client.edit', compact('id', 'client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = '')
    {
        $request->validate([
            'name' => 'required',
        ]);

        try {
            $data=$request->except(['_token']);
             if($request->hasFile('clientimage'))
                    {
                        $avatar = $request->file('clientimage');
                        $filename = time() . '.' . $avatar->getClientOriginalExtension();
                        Image::make($avatar)->resize(1000, 750)->save('backEnd/image/clientimage/' . $filename);
                        $data['clientimage']=$filename;
                    }
                    if($request->hasFile('clientlogo'))
                    { 
                         $avatar = $request->file('clientlogo');
                        $filename = time() . '.' . $avatar->getClientOriginalExtension();
                        Image::make($avatar)->resize(252, 270)->save('backEnd/image/clientlogo/' . $filename);
                        $data['clientlogo']=$filename;
                    }
            Client::find($id)->update($data);
            $output = array('msg' => 'Updated Successfully');
            return redirect('admin/blog')->with('success', $output);
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
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = '')
    {
           try {
               Client::destroy($id);
               $output = array('msg' => 'Deleted Successfully');
               return redirect('admin/client')->with('statuss', $output);
           } catch (Exception $e) {
               DB::rollBack();
               Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
               report($e);
               $output = array('msg' => $e->getMessage());
               return back()->withErrors($output)->withInput();
           }
       }

}
