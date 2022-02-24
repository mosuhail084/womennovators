<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Campaign;
use Illuminate\Http\Request;
use Image;

class CampaignController extends Controller
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
        $campaignDatas = Campaign::latest()->get();
        return view('backEnd.campaign.index',compact('campaignDatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backEnd.campaign.create');
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
            'campaign_name' => "required",
            'status' => "required"
        ]);

        try {
            $data=$request->except(['_token']);
            if($request->hasFile('image'))
            {
                $avatar = $request->file('image');
                
                $filename = time() . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(1000, 750)->save('backEnd/image/campaignimage/' . $filename);
                $data['image']=$filename;
            }
            if($request->hasFile('banner'))
            {
                $avatar = $request->file('banner');
                $filename_banner = time() . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(1000, 750)->save('backEnd/image/campaignimage/' . $filename_banner);
                $data['banner']=$filename_banner;
            }
            $url=str_replace(' ', '-', $request->campaign_name);
            $data['campaignseourl']=$url;
            $data['created_by']=Auth()->user()->id;
            $data['updated_by']=Auth()->user()->id;
            //dd($data);
            Campaign::Create($data);
           
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
     * @param  \App\Models\campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function show(campaign $campaign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function edit($id = '')
    {
        $campaign = Campaign::where('id', $id)->first();
        return view('backEnd.campaign.edit', compact('id', 'campaign'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = '')
    {
        $request->validate([
            'campaign_name' => 'required',
            'status' => 'required'
        ]);


        try {
            $data=$request->except(['_token']);
            if($request->hasFile('image'))
            {
                $avatar = $request->file('image');
                $filename = time() . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(1000, 750)->save('backEnd/image/campaignimage/' . $filename);
                $data['image']=$filename;
            }
            if($request->hasFile('banner'))
            {
                $avatar = $request->file('banner');
                $filename_banner = time() . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(1000, 750)->save('backEnd/image/campaignimage/' . $filename_banner);
                $data['banner']=$filename_banner;
            }
             $url=str_replace(' ', '-', $request->campaign_name);
            $data['campaignseourl']=$url;
          
            Campaign::find($id)->update($data);
            $output = array('msg' => 'Updated Successfully');
            return redirect('admin/campaign')->with('success', $output);
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
     * @param  \App\Models\campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = '')
    {
           try {
            Campaign::destroy($id);
               $output = array('msg' => 'Deleted Successfully');
               return redirect('admin/campaign')->with('statuss', $output);
           } catch (Exception $e) {
               DB::rollBack();
               Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
               report($e);
               $output = array('msg' => $e->getMessage());
               return back()->withErrors($output)->withInput();
           }
       }
         public function view($id)
    {
         $view = Campaign::where('id', $id)->first();
        return view('backEnd.campaign.view',compact('view','id'));
    }
}
