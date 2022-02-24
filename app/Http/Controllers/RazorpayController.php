<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Razorpay\Api\Api;
use Illuminate\Support\Str;
use Session;
use Redirect;
use App\Models\Payment_detail;
use DB;
//use App\Mail\PaymentMail;
//use Mail;

class RazorpayController extends Controller
{
    private $razorpayId = "rzp_live_V4ifZxsn4MXZnV";
    private $razorpayKey = "l5HO1yxFGVmvk3GGKbpT6RhK";
  //  private $razorpayId = "rzp_test_6oLFJ2rcl1wJum";
   // private $razorpayKey = "g8j6BBYlV6m6hAU37Pik82vV";
    //test id and pass
 // private $razorpayId = "rzp_test_MQRpusGviDDLiT";
 // private $razorpayKey = "tbl9iumSz3Z6xqNpEtrRkKW1";
  
    public function formPay(Request $request)
    {
    //  dd($request);
        // Generate random receipt id
        $receiptId = Str::random(20);
        
        // Create an object of razorpay
        $api = new Api($this->razorpayId, $this->razorpayKey);

        // In razorpay you have to convert rupees into paise we multiply by 100
        // Currency will be INR
        // Creating order
        
        $order = $api->order->create(array(
            'receipt' => $receiptId,
          'amount' => $request->amount * 100,
           //  'amount' => 100,
            'currency' => 'INR'
            )
        );
        
         if($request!=NULL)
        {
            $db['name'] = $request->name;
            $db['email'] = $request->email;
            $db['phone'] = $request->phone;
            $db['address'] = $request->address;
            $db['amount'] = $request->amount;
           $db['pincode'] = $request->pincode;
           // $db['payment_request_id'] = $request->rzp_orderid;
            
            $db['payment_status'] = 'Unpaid';
            $userModel = Payment_detail::Create($db);
            $userModel->save();

            $id = $userModel->id;
        }
      /*  $value = Session::get('cart');
        $cart = session()->get('cart');
        if($cart !=NULL)
        {*/
            //dd($cart);
          /*  foreach($cart as $carts)
            {
               // dd($carts['quantity']);
                DB::table('order_details')->insert([
                    'pay_id'=> $id ,
                   // 'payment_id'=>$request->rzp_paymentid,
                    'product_id'=>$carts['id'],
                    'quantity'=>$carts['quantity'],
                    
                ]);
            }*/
       // }
        // Return response on payment page

      
        $response = [
            'orderId' => $order['id'],
            'razorpayId' => $this->razorpayId,
            'amount' => $request->amount * 100,
            'name' => $request->all()['name'],
            'currency' => 'INR',
            'email' => $request->all()['email'],
            'phone' => $request->all()['phone'],
            'address' => $request->all()['address'],
            'pincode'=> $request->all()['pincode'],
            'prod_id'=>$request->all()['prod_id'],
        ];
      
        // Let's checkout payment page is it working
        return view('frontEnd.payment-page',compact('response','id'));
    }
    public function Complete(Request $request)
    {
        $value = Session::get('cart');
        $cart = session()->get('cart');
       //dd($request);
        // Now verify the signature is correct . We create the private function for verify the signature
        $signatureStatus = $this->SignatureVerify(
            $request->all()['rzp_signature'],
            $request->all()['rzp_paymentid'],
            $request->all()['rzp_orderid']
        );
    
        // If Signature status is true We will save the payment response in our database
        // In this tutorial we send the response to Success page if payment successfully made
        if($signatureStatus == true)
        {
            DB::table('payment_details')->where('id',$request->id)->update([
                'payment_id'=>$request->rzp_paymentid,
                'payment_request_id'=>$request->rzp_orderid,
                'payment_status'=>'Paid',
            ]);
            /*
            $db['name'] = $request->name;
            $db['email'] = $request->email;
            $db['phone'] = $request->phone;
            $db['address'] = $request->address;
            $db['amount'] = $request->amount;
            $db['payment_id'] = $request->rzp_paymentid;
            $db['payment_request_id'] = $request->rzp_orderid;
            
            $db['payment_status'] = 'Credit';
            $userModel = Payment_detail::Create($db);
            $userModel->save();*/
           $id = $request->id;
            
          /*    $data = array(

                'name' => $request->name,
                
                );
            Mail::to($request->email)->send(new PaymentMail ( $data));*/
            
            
      /*      if($cart !=NULL)
            {
                 foreach($cart as $carts)
                {
                   // dd($carts['quantity']);
                   DB::table('order_details')->where('pay_id',$request->id)->update([
                        'payment_id'=>$request->rzp_paymentid,
                   
                    ]);
                }
            }*/
               
           //die;
          //  request()->session()->forget('cart'); 
           
         /* DB::table('order_details')->where('pay_id',$request->id)->update([
            'payment_id'=>$request->rzp_paymentid,
        ]);*/
        DB::table('order_details')->insert([
            'pay_id'=> $id ,
           'payment_id'=>$request->rzp_paymentid,
            'product_id'=>$request->prod_id,
           // 'quantity'=>$carts['quantity'],
        ]);
            // You can create this page
             return  redirect()->route('thankyou',['id' => $id] );
       //     return redirect('/')->with('alert','Thank you for being our valued customer We are so grateful for the //pleasure of serving you and hope we met your expectations!');
        }
        else{
            // You can create this page
            return view('payment-failed-page');
        }
    }
    
    // In this function we return boolean if signature is correct
    private function SignatureVerify($_signature,$_paymentId,$_orderId)
    {
        try
        {
            // Create an object of razorpay class
            $api = new Api($this->razorpayId, $this->razorpayKey);
            $attributes  = array('razorpay_signature'  => $_signature,  'razorpay_payment_id'  => $_paymentId ,  'razorpay_order_id' => $_orderId);
            $order  = $api->utility->verifyPaymentSignature($attributes);
            return true;
        }
        catch(\Exception $e)
        {
            // If Signature is not correct its give a excetption so we use try catch
            return false;
        }
    }
     
   
}