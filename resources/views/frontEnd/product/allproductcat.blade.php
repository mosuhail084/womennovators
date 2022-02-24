@extends('frontEnd.layout.layout') @section('frontend_content')
	<!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="{{url('/frontEnd/images/breadcrumbs/2.jpg')}}" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text">
                    <h1 class="page-title">Search among wide variety of products</h1>
                    <ul>
                      <!--  <li>
                            <a class="active" href="index.html">Home</a>
                        </li>
                        <li>Course</li>-->
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

          
            <!-- Popular Courses Section Start -->
            <div id="rs-popular-courses" class="rs-popular-courses bg6 style1 pt-94 pb-70 md-pt-64 md-pb-40">
                <div class="container">
                    <div class="row y-middle mb-50 md-mb-30">
                        <div class="col-md-6 sm-mb-30">
                            <div class="sec-title">
                                <div class="sub-title primary">Our Products</div>
                              <!--  <h2 class="title mb-0"> Products</h2>-->
                            </div>
                        </div>
                      
                    </div>
                    <div class="form-group">
                        <input type="text" name="search" id="search" class="form-control" placeholder="Search Product..." />
                      </div>
                      <br>
                    <div class="row"  >
                        @foreach ($prod as $items)
                            
                   
                    <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                        <div class="courses-item">
                            <div class="img-part">
                                <img src="{{ url('/backEnd/image/productimage/'.$items->productimage )}}" style="height:300px; width:500px;" alt="">
                            </div>
                            <div class="content-part">
                                <ul class="meta-part">
                                   
                                    <li><a class="categorie" href="#">{{$items->categoryname}}</a></li>
                                </ul>
                                <h3 class="title"><a href="{{url('/product/'.$items->id)}}">{{$items->productname}}</a></h3>
                                <div class="bottom-part">
                                
                                    <div class="btn-part">
                                        <a href="{{url('/product/'.$items->id)}}"><i class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                            </div>
                </div>
            </div>
          
        </div> 
        <!-- Main content End --> 
 

@endsection