<?php

namespace App\Http\Controllers\Reseller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reseller;
use App\Models\All;
use DB;

class ResellerHomeController extends Controller
{
    public function __construct()   
    {
        $this->middleware('auth:reseller');
    }

   public function index(Request $request)
   {
      // dd($request);
       $country = DB::table('allcountries')->latest()->get();
       $reseller=DB::table('resellers')->where('id',auth()->user()->id)->first();
     //  dd($reseller);
         if ($request->ajax()) {
           if (isset($request->category_id)) {
               echo "<option value=''>Please Select One</option>";
               foreach ( DB::table('subcategories')->where('category_id', $request->category_id)->get() as $sub) {

                   echo "<option value='" . $sub->id . "'>" . $sub->subcategoryname . "</option>";
               }
           }
       }
       else {
        return view('backEnd.resellers.index',compact('country','reseller'));
       }
    }
    public function store(Request $request)
    { 
        $request->validate([
            'name' => "required",
        ]);

        try {
            $data=$request->except(['_token']);
            Reseller::find(auth()->user()->id)->update($data);
           
            $output = array('msg' => 'Submit Successfully');
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
