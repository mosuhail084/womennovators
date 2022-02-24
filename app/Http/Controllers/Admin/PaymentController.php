<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Payment_detail;
use Illuminate\Http\Request;
use DB;
class PaymentController extends Controller
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
        $paymentDatas = Payment_detail ::latest()->get();
        return view('backEnd.payment.index',compact('paymentDatas'));
    }
    public function showproduct($id)
    {
        $view = DB::table('order_details')
        ->join('campaign_products','campaign_products.id','order_details.product_id')
        ->join('campaigns','campaigns.id','campaign_products.campaign_id')
        ->where('order_details.pay_id',$id)
        ->select('campaign_products.*','order_details.*','campaigns.campaign_name')
        ->get();
     $data= DB::table('payment_details')
     ->where('id',$id)->first();
    //dd($data);
   // $my_array_data = json_decode($data, TRUE);
    //dd();
        return view('backEnd.payment.view',compact('view','data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backEnd.payment.create');
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
            'title' => "required",
            'description' => "required"
        ]);

        try {
            $data=$request->except(['_token']);
            payment::Create($data);
           
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
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
     public function edit($id = '')
    {
        $payment = Payment_detail::where('id', $id)->first();
        return view('backEnd.payment.edit', compact('id', 'payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id = '')
    {
        $request->validate([
            'order_status' => "required",
            //'description' => "required"
        ]);

        try {
            $data=$request->except(['_token']);
            Payment_detail::find($id)->update($data);
            $output = array('msg' => 'Updated Successfully');
            return redirect('admin/payment')->with('success', $output);
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
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = '')
    {
           try {
            payment::destroy($id);
               $output = array('msg' => 'Deleted Successfully');
               return redirect('admin/payment')->with('statuss', $output);
           } catch (Exception $e) {
               DB::rollBack();
               Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
               report($e);
               $output = array('msg' => $e->getMessage());
               return back()->withErrors($output)->withInput();
           }
       }
}