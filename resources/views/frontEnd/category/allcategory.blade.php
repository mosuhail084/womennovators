@extends('frontEnd.layout.layout') @section('frontend_content')
	<!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="{{url('/frontEnd/images/breadcrumbs/2.jpg')}}" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text">
                    <h3 class="page-title">Search among wide variety of popular categories</h3>
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
                                <div class="sub-title primary">Main Categories</div>
                               <!-- <h2 class="title mb-0">Main Categories</h2>-->
                            </div>
                        </div>
                       <!-- <div class="col-md-6">
                            <div class="btn-part text-right sm-text-left">
                                <a href="{{url('allproducts')}}" class="readon">View All Categories</a>
                            </div>
                        </div> -->
                    </div>
                    <div class="row">
                        @foreach ($cat as $items)
                            
                   
                        <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                            <div class="courses-item">
                                <div class="img-part">
                                    <img src="{{ url($items->image)}}" style="height:300px; width:500px;" alt="">
                                </div>
                                <div class="content-part">
                                   <!-- <ul class="meta-part">
                                       
                                        <li><a class="categorie" href="#">{{$items->categoryname }}</a></li>
                                    </ul> -->
                                    <h3 class="title" style="text-align:center;"><a href="{{url('/allproducts/'.$items->id)}}">{{$items->subcategoryname}}</a></h3>
                                    <div class="bottom-part">
                                      <!--  <div class="info-meta">
                                            <ul>
                                                <li class="user"><i class="fa fa-user"></i> 245</li>
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (05)
                                                </li>
                                            </ul>
                                        </div>-->
                                       <!-- <div class="btn-part">
                                            <a href="{{url('/product/'.$items->id)}}"><i class="flaticon-right-arrow"></i></a>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Popular Courses Section End -->
            <!-- Newsletter section start 
            <div class="rs-newsletter style1 orange-color mb--90 sm-mb-0 sm-pb-70">
                <div class="container">
                    <div class="newsletter-wrap">
                        <div class="row y-middle">
                            <div class="col-lg-6 col-md-12 md-mb-30">
                               <div class="content-part">
                                   <div class="sec-title">
                                       <div class="title-icon md-mb-15">
                                           <img src="{{url('/frontEnd/images/newsletter.png')}}" alt="images">
                                       </div>
                                       <h2 class="title mb-0 white-color">Subscribe to Newsletter</h2>
                                   </div>
                               </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <form class="newsletter-form">
                                    <input type="email" name="email" placeholder="Enter Your Email" required="">
                                    <button type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Newsletter section end -->
        </div> 
        <!-- Main content End --> 
  
@endsection