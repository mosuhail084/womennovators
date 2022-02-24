@extends('frontEnd.layout.layout') @section('frontend_content')
	<!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="{{url('/frontEnd/images/breadcrumbs/2.jpg')}}" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text">
                    <h3 class="page-title">Search among wide variety of popular service Categories</h3>
                    <ul>
                      <!--  <li>
                            <a class="active" href="index.html">Home</a>
                        </li>
                        <li>Course</li>-->
                    </ul>
                </div>
            </div>
            <div id="rs-popular-courses" class="rs-popular-courses style3 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">                  
                    <div class="row">    
                    @foreach($service as $serve)
                       <div class="col-lg-4 col-md-6 col-sm-6 mb-40">
                           <div class="courses-item">
                               <div class="img-part">
                                   <img src="http://wedistributors.womennovators.com/backEnd/service/image/{{$serve->service_image ??''}}" alt="">
                               </div>
                               <div class="content-part">
                                   <span style="float:center;"><a class="categories" href="#">{{$serve->title}}</a></span>
                                <!--   <ul class="meta-part">
                                       <li class="user"><i class="fa fa-user"></i> 245</li>
                                       <li><span class="price">$55.00</span></li>
                                   </ul>-->
                                   <h3 class="title"><a href="course-single.html">{{$serve->service_name}}</a></h3>
                                   <div class="bottom-part">
                                       <div class="info-meta">
                                           <ul>                                                
                                               <li class="ratings">
                                                   <i class="fa fa-star"></i>
                                                   <i class="fa fa-star"></i>
                                                   <i class="fa fa-star"></i>
                                                   <i class="fa fa-star"></i>
                                                   <i class="fa fa-star"></i>
                                               </li>
                                           </ul>
                                       </div>
                                       <div class="btn-part">
                                           <a href="#"><i class="flaticon-right-arrow"></i></a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                    @endforeach
                    </div>
                </div>
            </div>
            <!-- Popular Courses Section End -->
        </div> 
        <!-- Main content End --> 
  
@endsection