@extends('frontEnd.layout.layout') @section('frontend_content')
	<!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
    <div class="breadcrumbs-img">
        <img src ="{{url('/frontEnd/images/bannerneww.jpg')}}" alt="Breadcrumbs Image">
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
                        <img src="{{ url('/backEnd/image/productimage/'.$prod->productimage)}}" alt="Single Product">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="single-price-info pl-30">
                    <h4 class="product-title">{{$prod->productname}}</h4>
                    <p class="some-text"><b>Description :</b> {!!$prod->description!!}</p>
                    <p class="some-text"><b>Category :</b> {!!$prod->categoryname!!}</p>
                    <p class="some-text"><b>Subcategory :</b> {!!$prod->subcategoryname!!}</p>
                      <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-12">
                   <!--  <div style=" margin-top:20px;">
                        <a href="{{url('post-requirement')}}" class="btn-shop orange-color" >Apply</a>
                    </div>-->
                    <div style=" margin-top:20px;">
                        <a   href="{{url('form/'.$prod->id)}}" class="btn-shop orange-color" >Buy Now</a>
                    </div>
                        </div>
                   <!--    <div class="col-md-6 col-lg-6 col-sm-12">
                    <div style=" margin-top:20px; margin-right:-5%;">
                        <a href="{{url('cart', $prod->id)}}" class="btn-shop blue-color" >Add To Cart</a>
                    </div>
                        </div>-->
                </div>
                    
                </div>
            </div> 
           <!-- <div class="rs-gallery pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
       <div class="row">
           <div class="col-lg-2 mb-30 col-md-6">
                <div class="gallery-img">
                    <a class="image-popup" href="{{ url('/backEnd/image/productimage/'.$prod->productimage)}}"><img src="{{ url('/backEnd/image/productimage/'.$prod->productimage)}}" alt=""></a>
                </div>
           </div>
           <div class="col-lg-2 mb-30 col-md-6">
                <div class="gallery-img">
                    <a class="image-popup" href="{{ url('/backEnd/image/productimage/'.$prod->productimage)}}"><img src="{{ url('/backEnd/image/productimage/'.$prod->productimage)}}" alt=""></a>
                </div>
           </div>
           <div class="col-lg-2 mb-30 col-md-6">
                <div class="gallery-img">                                
                    <a class="image-popup" href="{{ url('/backEnd/image/productimage/'.$prod->productimage)}}"><img src="{{ url('/backEnd/image/productimage/'.$prod->productimage)}}" alt=""></a>
                </div>
           </div>
           
           
           
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