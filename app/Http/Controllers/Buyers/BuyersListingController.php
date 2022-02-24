<?php

namespace App\Http\Controllers\Buyers;
use App\Http\Controllers\Controller;

use App\Models\Listing;
use App\Models\Buyer;
use App\Models\State;
use App\Models\City;
use App\Imports\StoreImport;
use App\Models\Naturebusiness;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Excel;
use App\Models\User;
use DB;


class BuyersListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()   
    {
        $this->middleware('auth:buyer');
    }
    public function index()
    {
        $listingDatas = Listing::latest()->get();
        return view('backEnd.buyers.listing.index',compact('listingDatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
        $state = State::latest()->get();
        $nature = Naturebusiness::latest()->get();
          if ($request->ajax()) {
            if (isset($request->category_id)) {
                echo "<option>Please Select One</option>";
                foreach (City::where('state_id', $request->category_id)->get() as $sub) {

                    echo "<option value='" . $sub->id . "'>" . $sub->cityname . "</option>";
                }
            }
        }
        else {
            return view('backEnd.buyers.listing.create',compact('state','nature'));
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
        $request->validate([
            'logo' => "required",
            'email' => 'required|email',
        ]);

        try {
            $data=$request->except(['_token']);
           if($request->hasFile('logo'))
            {
                $file=$request->file('logo');
                    $destinationPath =  'backEnd/image/logo';
                    $name = $file->getClientOriginalName();
                   $s = $file->move($destinationPath, $name);
                         $data['logo'] = $name;
               
            }
            $data['createdby'] = auth()->user()->id;
            $data['updatedby'] = auth()->user()->id;
            Listing::Create($data);
     
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
    public function listingexcelStore(Request $request )
    {
         $request->validate([
            'file' => 'required'
        ]);
    //   dd($request);
        try {
            $file=$request->file;
            $data = $request->except(['_token']);
            $dataa=Excel::toArray(new StoreImport, $file);
            foreach ($dataa[0] as $key => $value) {
                   
                        $state   = State::where('statename',$value['state'])->pluck('id')->first();
                        if($state ==NULL){
                      
                            State::insert([	
                                'statename'         => $value['state'],
                                'created_at' => date('y-m-d'), 
                                'updated_at' => date('y-m-d') 
                                 ]);  
                                 $state   = State::where('statename',$value['state'])->pluck('id')->first();
                        }
                        $city   = City::where('cityname',$value['city'])->pluck('id')->first();
                    if($city ==NULL){
                      
                        City::insert([	
                            'cityname'         => $value['city'], 	
                            'state_id' => $state,
                            'status' => 1,
                            'created_at' => date('y-m-d'), 
                            'updated_at' => date('y-m-d') 
                             ]);  
                             $city   = City::where('cityname',$value['city'])->pluck('id')->first();
                    }
                        $natureofbusiness   = Naturebusiness::where('naturebusiness',$value['natureofbusiness'])->pluck('id')->first();
                    if($natureofbusiness ==NULL){
                      
                        Naturebusiness::insert([	
                            'naturebusiness'         => $value['natureofbusiness'], 
                            'created_at' => date('y-m-d'), 
                            'updated_at' => date('y-m-d') 	
                             ]);  
                             $natureofbusiness   = Naturebusiness::where('naturebusiness',$value['natureofbusiness'])->pluck('id')->first();
                    }
                    $storename   = Listing::where('storename',$value['storename'])->pluck('id')->first();
                    if($storename ==NULL){    
                        Listing::insert([	
                    'storename'         =>  $value['storename'], 
                    'annualturnover'         =>  $value['annualturnover'], 
                    'yearofest'         =>  $value['yearofestablished'], 
                    'address'         =>  $value['address'], 
                    'email'         =>  $value['email'], 
                    'phone'         =>  $value['phone'], 
                    'website'         =>  $value['website'], 
                    'contactperson'         =>  $value['contactperson'], 
                    'postalcode'         =>  $value['postalcode'], 
                    'description'         => $value['description'],
                    'latitude'         => $value['latitude'],
                    'longitude'         => $value['longitude'],
                    'state_id'         => $state,  		
                    'city_id' => $city,
                    'natureofbusiness_id' => $natureofbusiness,
                    'trustedbusiness' => 0,
                    'status' => 0,
                    'created_at' => date('y-m-d'), 
                    'updated_at' => date('y-m-d')  
                     ]); 
          
                }
            }
           $output = array('msg' => 'Excel file upload Successfully');
            return back()->with('status', $output);
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
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function show(Listing $listing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id = auth()->user()->id;
        $email=DB::table('buyers')->where('id',$id)->select('email')->pluck('email')->first();
        // dd($email);
       // dd($id);
        
        $nature = Naturebusiness::latest()->get();
        $state = State::latest()->get();

        $listing = Listing::where('email',$email )->first();
       // dd($listing);
        $id =$listing->id;
        //  dd($id);
        return view('backEnd.buyers.profile.edit', compact('nature','id','state','listing','email'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id='')
    {

        // dd($id);
        // $query=DB::table('listings')->find($id);
        // $query->update([
        //     'storename'=>$request->input('storename'),
        //     'yearofest'=>$request->input('yearofest'),
        //     'annualturnover'=>$request->input('annualturnover'),
        //     'logo'=>$request->input('logo'),
        //     'email'=>$request->input('email'),
        //     'phone'=>$request->input('phone'),
        //     'website'=>$request->input('website'),
        //     'latitude'=>$request->input('latitude'),
        //     'longitude'=>$request->input('longitude'),
        //     'postalcode'=>$request->input('postalcode'),
        //     'contactperson'=>$request->input('contactperson'),
        //     'address'=>$request->input('address'),
        //     'state_id'=>$request->input('state_id'),
        //     'addonhomepage'=>$request->input('addonhomepage'),
        //     'city_id'=>$request->input('city_id'),
        //     'state'=>$request->input('state'),
        //     'city'=>$request->input('city'),
        //     'description'=>$request->input('description'),
        //     'natureofbusiness_id'=>$request->input('natureofbusiness_id'),
        //     'status'=>$request->input('status'),
        //     'trustedbusiness'=>$request->input('trustedbusiness'),
        //     'address'=>$request->input('address'),
        //     ]);
            

            

        // $request->validate([
            
        //     'email' => 'required|email'
        // ]);
        try {
            $data=$request->except(['_token']);
            
            if($request->hasFile('logo'))
            {
                $file=$request->file('logo');
                    $destinationPath =  'backEnd/image/logo';
                    $name = $file->getClientOriginalName();
                   $s = $file->move($destinationPath, $name);
                         $data['logo'] = $name;
               
            }
            // $data= auth()->user();
             
            Listing::find($id)->update($data);
            $output = array('msg' => 'Updated Successfully');
             return redirect('/buyer/profile')->with('status', $output);
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
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {
        //
    }
    
}
