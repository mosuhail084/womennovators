<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Jury;
use App\Models\Sector;
use App\Models\State;
use App\Models\City;
use App\Imports\JuryImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Image;
use Excel;
use DB;
class JuryController extends Controller
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
        $juryDatas = Jury::latest()->with('sector','city')->paginate(10);
        return view('backEnd.jury.index',compact('juryDatas'));
    }
public function search(Request $request)
    {
      //  dd($request);
        $q = $request->q;
 if($q != ""){
 $juryDatas = Jury::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'email', 'LIKE', '%' . $q . '%' )
 ->with('sector','city')->paginate (10)->setPath ( '' );
 $pagination = $juryDatas->appends ( array (
    'q' =>  $request->q
  ) );
 // dd($pagination);
 if (count ( $juryDatas ) > 0)
  return view ( 'backEnd.jury.index',compact('juryDatas'))->withQuery ( $q );
 }
  return view ( 'backEnd.jury.index' )->withMessage ( 'No Details found. Try to search again !' );

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $state = State::latest()->get();
        $sector = Sector::latest()->get();
        if ($request->ajax()) {
            if (isset($request->category_id)) {
             
                echo "<option>Please Select One</option>";
                foreach (City::where('state_id', $request->category_id)->get() as $sub) {

                    echo "<option value='" . $sub->id . "'>" . $sub->name . "</option>";
                }
            }
        } else {
            return view('backEnd.jury.create',compact('state','sector'));
        }
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function juryexcelStore(Request $request)
    {
        $request->validate([
            'file' => 'required'
        ]);

        try {
            $data=$request->except(['_token']);
            $file=$request->file;
            $data = $request->except(['_token']);
            $dataa=Excel::toArray(new JuryImport, $file);
            foreach ($dataa[0] as $key => $value) {
            
                $sectorid   = Sector::where('sectorname',$value['sector'])
                ->pluck('id')->first();

             if($sectorid == NULL)  {
                    $db['sectorname']=$value['sector'] ;                         
                    Sector::insert([		
                        'sectorname' => $value['sector'],
                        'created_at' => date('y-m-d'), 
                        'updated_at' => date('y-m-d')  
                        ]);
                 
                         $sectorid   = Sector::where('sectorname',$value['sector'])
                         ->pluck('id')->first();
                         }

                $stateid   = State::where('statename',$value['state'])
                ->pluck('id')->first();

                if($stateid == NULL)  {
                    $db['statename']=$value['state'] ;                         
                         $data= State::Create($db);
                 
                         $stateid   = State::where('statename',$value['state'])
                         ->pluck('id')->first();
                         }

                $cityid   = City::where('name',$value['city'])
                ->pluck('id')->first();

                if($cityid == NULL){
                    City::insert([	
                        'state_id'         => $stateid, 	
                        'name' => $value['city'],
                        'created_at' => date('y-m-d'), 
                        'updated_at' => date('y-m-d')  
                        ]); 
                        $cityid   = City::where('name',$value['city'])
                        ->pluck('id')->first();
                } 
               Jury::insert([	
                'name'         => $value['name'], 
                'Ref_by'         => $value['refby'], 
                'email'         => $value['email'],
                'mobile_number'         =>$value['mobilenumber'],		
                'designation' => $value['designation'] ,
                'fblink' => $value['fblink'] ,
                'linkedin' => $value['linkedin'] ,
                'instagram' => $value['instagram'] ,
                'twitter' => $value['twitter'] ,
                'company' => $value['company'] ,
                'industry' => $value['industry'] ,
                'description' => $value['description'] ,
                'state_id' =>  $stateid,
                'city_id' =>   $cityid  ,
                'sector_id' =>  $sectorid ,
                'password' => Hash::make('12345678'),
                'created_at' => date('y-m-d'), 
                'updated_at' => date('y-m-d')  
                 ]); 
        }       
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
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required', 'email' => 'required',
        ]);

        try {
            $data=$request->except(['_token']);
            if($request->hasFile('photo'))
            {
                $file=$request->file('photo');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('backEnd/juryimage/',$filename);
                $data['photo']=$filename;
            }
    $data['password'] = Hash::make('12345678');
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
        $state = State::latest()->get();
        $sector = Sector::latest()->get();
        $jury = Jury::where('id', $id)->with('sector')->first();
        return view('backEnd.jury.edit', compact('id', 'jury','state','sector'));
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
             'name' => 'required', 'email' => 'required',
        ]);


        try {
            $data=$request->except(['_token']);
            if($request->hasFile('photo'))
            {
                $file=$request->file('photo');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('backEnd/juryimage/',$filename);
                $data['photo']=$filename;
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
