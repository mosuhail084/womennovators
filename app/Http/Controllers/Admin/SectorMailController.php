<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Sector;
use App\Models\Jury;
use App\Models\Sectormail;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
class SectorMailController extends Controller
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
        $sectormailDatas = Sectormail::latest()->get();
        $jury_id=DB::table('jurysectors')
        ->join('sectormails','sectormails.id','jurysectors.sectormail_id')
        ->join('juries','juries.id','jurysectors.jury_id')
        ->select('jurysectors.jury_id','juries.name')
        ->get();
        return view('backEnd.sectormail.index',compact('sectormailDatas','jury_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $sector = Sector::latest()->get();
        if ($request->ajax()) {
            if (isset($request->category_id)) {
             
                echo "<option>Please Select One</option>";
                foreach (Jury::where('sector_id', $request->category_id)->get() as $sub) {

                    echo "<option value='" . $sub->id . "'>" . $sub->name . "</option>";
                }
            }
        } else {
            return view('backEnd.sectormail.create',compact('sector'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  dd($request->jury_id);
        $request->validate([
            'subject' => 'required',
            'msg' => 'required'
        ]);

        try {
            $data=$request->except(['_token']);
            if($request->has('jury_id')){
                $data['jury_id'] = implode(',', $request->jury_id);
                }
         // dd($jury);
           
         //   dd($data['subject']); die;
          if($request->hasFile('attachment'))
            {
                $file=$request->file('attachment');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('backEnd/attachment/',$filename);
                $data['attachment']=$filename;
            }
         $eventid =  Sectormail::Create($data);
         $eventid->save();
         $evid = $eventid->id;
         
      foreach($request->jury_id as $jury_id){
         
          DB::table('jurysectors')->insert([
                      'sectormail_id'      =>     $evid,
                      'jury_id'     =>     $jury_id,
                      'created_at'                =>     date('y-m-d'),
                      'updated_at'              =>    date('y-m-d'),
                  ]);
            /*     */ 
                 
      }
         if ($request->has('jury_id')) {
           
            foreach ($request->jury_id as $juryy) {
                $jury = Jury::where('id',$juryy)
                ->pluck('email')->first();

                $juryname  = Jury::where('email',$jury)->pluck('name')->first();
              
                $data = array(
                    'juryy' =>  $juryname,
                    'subject' =>  $data['subject'],
                    'msg' =>  $request->msg,
                    'attachment' => $data['attachment'] ??''
               );
                Mail::send('emails.sectorform', $data, function ($msg) use($data, $jury){
                    $msg->to($jury);
                    $msg->subject($data['subject']);
                 }); 
                }
        }
            
            $output = array('msg' => 'Mail Sent Successfully');
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
     * @param  \App\Models\sectormail  $sectormail
     * @return \Illuminate\Http\Response
     */
    public function show(sectormail $sectormail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sectormail  $sectormail
     * @return \Illuminate\Http\Response
     */
    public function edit($id = '')
    {
        $sector = Sector::latest()->get();
        $sectormail = Sectormail::where('id', $id)->first();
        return view('backEnd.sectormail.create', compact('id', 'sectormail','sector'));;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sectormail  $sectormail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = '')
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required'
        ]);

        try {
            $data=$request->except(['_token']);
            sectormail::find($id)->update($data);
            $output = array('msg' => 'Updated Successfully');
            return redirect('admin/sectormail')->with('success', $output);
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
     * @param  \App\Models\sectormail  $sectormail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = '')
    {
           try {
               sectormail::destroy($id);
               $output = array('msg' => 'Deleted Successfully');
               return redirect('admin/sectormail')->with('statuss', $output);
           } catch (Exception $e) {
               DB::rollBack();
               Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
               report($e);
               $output = array('msg' => $e->getMessage());
               return back()->withErrors($output)->withInput();
           }
       }
}
