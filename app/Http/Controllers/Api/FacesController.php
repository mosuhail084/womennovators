<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;

use DB;
use Validator;

class FacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function face(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users|max:255',
            'phone' => 'required|unique:users|max:10|min:10',
            'country' => 'required',
            'smartcity' => 'required',
            'address' => 'required',
            'profession' => 'required',
            'areuincorporated' => 'required',
            'aboutbusiness' => 'required',
            'designation' => 'required',
            'industrytype' => 'required',
            'highestqualification' => 'required',
            'category' => 'required',
            'experience'=> 'required',
            'position' => 'required',
            'innovativebusiness' => 'required',
            'reference' => 'required',
            'businesstype' => 'required',
            'businessstage' => 'required',
            'employees'=> 'required',
           'fundingdetails'=> 'required',
           'fundingdetails' => 'required',
          
        ]);


        if ($validator->fails()) {
            $response['msg'] = $validator->errors();
            $response['status'] = 0;

            return  response()->json($response);
        }
        $data=$request->except(['_token']);
       $user= User::Create($data);
            
        $response['output']=$user;
        $response['msg'] = "Successfully Created";
        $response['status'] = 1;
       // $response['token'] = 'Bearer ' . $user->createToken('AppName')->accessToken;

        return  response()->json($response);
    }
}
