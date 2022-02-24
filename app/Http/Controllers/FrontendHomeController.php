<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use DB;

class FrontendHomeController extends Controller
{
    public function index()
    {
        //$cat=Category::latest()->get();
         $cat=Subcategory::latest()->limit(12)->get();
        //dd($cat);
          $prod=DB::table('products')
        ->join('productimages','productimages.product_id','products.id')
        ->join('categories','categories.id','products.category_id')
        //->where('products.status','!=',0)
        ->select('products.*','productimages.productimage','categories.categoryname')->limit(9)
        ->get();
        $brand=Brand::select('image')->get();
       //dd($brand);
        return view('frontEnd.home',compact('cat','prod','brand'));
    }
     public function product($id)
    {
          $prod=DB::table('products')
        ->join('productimages','productimages.product_id','products.id')
        ->join('categories','categories.id','products.category_id')
        ->join('subcategories','categories.id','subcategories.category_id')
        ->where('products.id',$id)
        ->select('products.*','productimages.productimage','categories.categoryname','subcategories.subcategoryname')
        ->first();
        //dd($prod);
         return view('frontEnd.product.productdetail',compact('prod'));
    }
     public function allproduct()
    {
          $prod=DB::table('products')
        ->join('productimages','productimages.product_id','products.id')
        ->join('categories','categories.id','products.category_id')
         ->where('products.status',1)
        ->select('products.*','productimages.productimage','categories.categoryname')
        ->get();
       // dd($prod);
         return view('frontEnd.product.allproduct',compact('prod'));
    }
    public function allproductcat($id)
    {
      $prod=DB::table('products')
      ->join('productimages','productimages.product_id','products.id')
      ->join('categories','categories.id','products.category_id')
       ->where('products.status',1)
       ->where('products.subcategory_id',$id)
      ->select('products.*','productimages.productimage','categories.categoryname')
      ->get();
     //dd($prod);
       return view('frontEnd.product.allproductcat',compact('prod'));
    }
     public function allcategory()
    {
      $cat=Subcategory::latest()->get();
     //dd($cat);
       return view('frontEnd.category.allcategory',compact('cat'));
    }
     public function products_search(Request $request)
    {
     //dd($request);
     if($request->ajax())
     {
      $prod = Product::latest()->get();
    //  $id = $prod->id;
      $query = $request->get('query');
      $query = str_replace(" ", "%", $query);
      $prod=DB::table('products')
      ->join('productimages','productimages.product_id','products.id')
      ->join('categories','categories.id','products.category_id')
     -> where('products.productname','like','%'.$query.'%')
      ->where('products.status',1)
    ->select('products.*','productimages.productimage','categories.categoryname')
      ->get();
  //    dd($prod );
      return view('frontEnd.product.productsformat',compact('prod'));
     }     
       // dd("hello");
        
        //dd($campaignproduct);et();*/
    }
     public function payform(Request $request ,$id)
    {
     // dd($id);
       // $amu = $request->amount;
       // dd($amu);
      // $request->session()->put('amount', $amu);
          return view('frontEnd.form',compact('id'));
    }
    public function thankyou($id = '')
    {
        $payment = DB::table('payment_details')->where('id', $id)->first();
     //   dd($payment);
        return view('frontEnd.thankyou',compact('id','payment'));
    }
     public function services()
    {
        $service = DB::table('services')->get();
        //dd($service);
        return view('frontEnd.service.allservices',compact('service'));
    }
}
