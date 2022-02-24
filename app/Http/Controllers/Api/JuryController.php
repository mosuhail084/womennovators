<?php

namespace App\Http\Controllers\Api;
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
use Validator;

class JuryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function jury(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:juries|max:255',
            'mobile_number' => 'required|unique:juries|max:10|min:10',
            'company' => 'required',
            'designation' => 'required',
            //'category' => 'required',
            'linkedin' => 'required',
            'address' => 'required',
            'Ref_by' => 'required',
           
        ]);


        if ($validator->fails()) {
            $response['msg'] = $validator->errors();
            $response['status'] = 0;

            return  response()->json($response);
        }
        $data=$request->except(['_token']);
       $jury= Jury::Create($data);
            
        $response['output']=$jury;
        $response['msg'] = "Successfully Created";
        $response['status'] = 1;
       // $response['token'] = 'Bearer ' . $user->createToken('AppName')->accessToken;

        return  response()->json($response);
    }
}
