<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // * Share Product
    public function share_product(Request $request, $pid, $prod_url)
    {
        // http://localhost/wemark_new/share/share_product?rid=1&pid=454
        $referrerID = $request->session()->get('USER_ID');
        $generated_url = "https://wedistributors.womennovators.com/share/share_product?rid=" . $referrerID . "&pid=" . $pid;
        return view('frontEnd.product.share_product_code',['gen_url'=>$generated_url]);
    }

    // * Get Details from the url
    public function get_details(Request $request)
    {
        $rid = $request->rid;
        $pid = $request->pid;
        // Finding the seo_url of the product via product id
        $prod =  DB::table('products')->where('id', $pid)->first();
        $prod_seo_url = $prod->seo_url;
        // Storing the Referrer ID
        $request->session()->put('REFERRER_ID', $rid);
        $redirect_url = "product/" . $prod_seo_url;
        // Redirecting the guest user to the product detail page
        return redirect($redirect_url);
    }
}
