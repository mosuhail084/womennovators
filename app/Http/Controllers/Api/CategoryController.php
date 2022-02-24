<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use Log;

class CategoryController extends Controller
{
    public function show(Request $request)
    {
    
        try {
          
$abc = Category::with('subcategory','products')->get();
            //  dd($act);

            if ($abc) {
                $response['output'] = $abc;
                $response['msg'] = "";
                $response['code'] = "10001";
            } else {
                $response['result'] = "success";
                $response['output'] = [];
                $response['msg'] = "No Category Found";
            }
        } catch (\Exception $e) {
            $response['result'] = "failed";
            $response['msg'] = "Something went wrong";
            $response['code'] = "500";
            Log::info(json_encode(["Error in Member Transaction api-----", $e->getMessage()]));
        }
        return response()->json($response);
    }
     public function products(Request $request)
    {
    
        try {
          
        $abc = Category::with('products')->get();
            // dd($abc);

            if ($abc) {
                $response['output'] = $abc;
                $response['msg'] = "";
                $response['code'] = "10001";
            } else {
                $response['result'] = "success";
                $response['output'] = [];
                $response['msg'] = "No Category Found";
            }
        } catch (\Exception $e) {
            $response['result'] = "failed";
            $response['msg'] = "Something went wrong";
            $response['code'] = "500";
            Log::info(json_encode(["Error in Member Transaction api-----", $e->getMessage()]));
        }
        return response()->json($response);
    }
}
