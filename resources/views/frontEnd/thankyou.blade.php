@extends('frontEnd.layout.layout') @section('frontend_content')
<!-- Main content Start -->
<div class="main-content">
    <!-- Cart Section Start -->

    <div class="rs-cart orange-color pt-100 pb-100 md-pt-70 md-pb-70" style="    background: #F9F8F8;">
        <div class="container">
            <div class="row">

                <div class="col-lg-1">

                </div>
                <div id="printableArea" class="card-body col-lg-10">
                    <div class="card-body"
                        style="background-color: white;box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);">
                        <div class="heading-layout3 mg-b-15 text-center">
                            <h2 class="mg-b-10"><b style="color:#7A7A7A;">Payment Successfull!</b></h2>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="{{ url('frontEnd/assets/images/womennovator.png')}}" style="width: 71px;" alt="icons">
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <br>
                        <div class="card-body text-center">
                            <ul>
                                <li style="font-size: 19px;"><b>Name :</b> {{$payment->name ??''}}</li>
                               <br> <li style="font-size: 19px;"><b>Email Id :</b> {{$payment->email ??''}}</li>
                               <br> <li style="font-size: 19px;"><b>Mobile No :</b> {{$payment->phone ??''}}</li>
                               <br> <li style="font-size: 19px;"><b>Payment Req Id :</b> {{$payment->payment_request_id ??''}}</li>
                               <br> <li style="font-size: 19px;"><b>Payment Status :</b> {{$payment->payment_status ??''}}</li>
                               <br> <li style="font-size: 19px;"><b>Payment Id :</b> {{$payment->payment_id ??''}}</li>
                               <br> <li style="font-size: 19px;"><b>Amount Paid :</b> {{$payment->amount ??''}}/-</li>
                            </ul>
                        </div>
                      


                    </div>
                </div>
                <div class="col-lg-1">

                </div>
            </div>
        </div>
        <!-- Cart Section End -->
    </div>
    
    <!-- Main content End -->
    @endsection
