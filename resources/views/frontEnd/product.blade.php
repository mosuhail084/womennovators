@extends('frontEnd.layouts.layout') @section('frontEnd_content')
		<!-- Main content Start -->
        <div class="main-content">
                    <!-- Breadcrumbs Start -->
                    <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src ="/backEnd/image/banner.jpeg" alt="Breadcrumbs Image">
                </div>
                
            </div>
            <!-- Breadcrumbs End -->

            <!-- Shop Single Start -->
        	<div id="rs-single-shop" class="rs-single-shop shop-rp orange-color pt-100 pb-100 md-pt-70 md-pb-70 bg4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 sm-mb-30">
                            <div class="single-product-image">
                                <div class="images-single">
                                    <img src="https://wepitch.weblooptechnik.in/backEnd/image/productimage/{{$campaignprod->product_image}}" alt="Single Product">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="single-price-info pl-30">
                                <h4 class="product-title">{{$campaignprod->product_name}}</h4>
                                <p class="some-text"><b>Description :</b> {!!$campaignprod->description!!}</p>
                                <span class="single-price">Rs.{{$campaignprod->amount}}</span> 
                                  <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                <div style=" margin-top:20px;">
                                    <a href="{{url('cart', $campaignprod->id)}}" class="btn-shop orange-color" >Buy Now</a>
                                </div>
                                    </div>
                               <!--    <div class="col-md-6 col-lg-6 col-sm-12">
                                <div style=" margin-top:20px; margin-right:-5%;">
                                    <a href="{{url('cart', $campaignprod->id)}}" class="btn-shop blue-color" >Add To Cart</a>
                                </div>
                                    </div>-->
                            </div>
                                
                            </div>
                        </div> 
                        <div class="rs-gallery pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                   <div class="row">
                       <div class="col-lg-2 mb-30 col-md-6">
                            <div class="gallery-img">
                                <a class="image-popup" href="https://wepitch.weblooptechnik.in/backEnd/image/productimage/{{$campaignprod->product_image}}"><img src="https://wepitch.weblooptechnik.in/backEnd/image/productimage/{{$campaignprod->product_image}}" alt=""></a>
                            </div>
                       </div>
                       @if($campaignprod->product_image2!=NULL)
                       <div class="col-lg-2 mb-30 col-md-6">
                            <div class="gallery-img">
                              <a class="image-popup" href="https://wepitch.weblooptechnik.in/backEnd/image/productimage/{{$campaignprod->product_image2}}"><img src="https://wepitch.weblooptechnik.in/backEnd/image/productimage/{{$campaignprod->product_image2}}" alt=""></a>
                            </div>
                       </div>
                       @else
                        <div class="col-lg-2 mb-30 col-md-6">
                            <div class="gallery-img">
                              <a class="image-popup" href="https://wepitch.weblooptechnik.in/backEnd/image/productimage/{{$campaignprod->product_image}}"><img src="https://wepitch.weblooptechnik.in/backEnd/image/productimage/{{$campaignprod->product_image}}" alt=""></a>
                            </div>
                       </div>
                       @endif
                        @if($campaignprod->product_image3!=NULL)
                       <div class="col-lg-2 mb-30 col-md-6">
                            <div class="gallery-img">                                
                                <a class="image-popup" href="https://wepitch.weblooptechnik.in/backEnd/image/productimage/{{$campaignprod->product_image3}}"><img src="https://wepitch.weblooptechnik.in/backEnd/image/productimage/{{$campaignprod->product_image3}}" alt=""></a>
                            </div>
                       </div>
                        @else
                        <div class="col-lg-2 mb-30 col-md-6">
                            <div class="gallery-img">
                              <a class="image-popup" href="https://wepitch.weblooptechnik.in/backEnd/image/productimage/{{$campaignprod->product_image}}"><img src="https://wepitch.weblooptechnik.in/backEnd/image/productimage/{{$campaignprod->product_image}}" alt=""></a>
                            </div>
                       </div>
                       @endif
                       
                       
                       
                   </div>
                </div> 
            </div>
            <!-- Events Section End -->  
                    </div>

                    
                </div>
            </div>
            <!-- Shop Single Start -->
        </div> 
        <!-- Main content End -->
@endsection