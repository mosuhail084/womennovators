@extends('frontEnd.layout.layout')
@section('frontend_content')
    

			<!-- Main content Start -->
        <div class="main-content">
            <!-- Banner Section Start -->
            <div id="rs-banner" class="rs-banner style1">
                <div class="container">
                    <div class="banner-content text-center">
                        <h1 class="banner-title capitalize wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="3000ms">Trusted & Certified Products</h1>
                        <div class="desc mb-35 wow wow fadeInRight" data-wow-delay="900ms" data-wow-duration="3000ms">These high quality products or services that are being co-created by women entrepreneurs are being sold at manufacturing prices.</div>
                        <div class="banner-btn wow fadeInUp" data-wow-delay="1500ms" data-wow-duration="2000ms">
                            <a class="readon banner-style" href="{{url('/')}}">Meet Women Entrepreneurs </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner Section End -->

            <!-- About Section Start -->
            <div id="rs-about" class="rs-about style1 pb-0 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 order-last hidden-xs" style="display:none;">
                            <div class="notice-bord style1"> 
                                <h4 class="title">Notice Board</h4>
                                <ul >
                                    <li class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                        <div class="date"><span>20</span>June</div>
                                        <div class="desc" >Lorem Ipsum is simply dummy text of the printing and setting</div>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                                        <div class="date"><span>22</span>Aug</div>
                                        <div class="desc">Lorem Ipsum is simply dummy text of the printing and setting</div>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                                        <div class="date"><span>14</span>May</div>
                                        <div class="desc">Lorem Ipsum is simply dummy text of the printing and setting</div>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms">
                                        <div class="date"><span>31</span>Sept</div>
                                        <div class="desc">Lorem Ipsum is simply dummy text of the printing and setting</div>
                                    </li>
                                  <li class="wow fadeInUp" data-wow-delay="700ms" data-wow-duration="2000ms">
                                        <div class="date"><span>28</span>Oct</div>
                                        <div class="desc">Lorem Ipsum is simply dummy text of the printing and setting</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12 pr-50 md-pr-15">
                            <div class="about-part">
                                <div class="sec-title mb-40">
                                    <div class="sub-title primary wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">FOUNDER MESSAGE</div>
                                  <!--  <h2 class="title wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">World Best Virtual Learning Network Educavo eLearning</h2>-->
                                    <div class="desc wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms"> <p style="font-size:15px;">As person she believes "Two things: Be a Lady - don’t let yourself overcome by emotions & Be Independent - you may be a queen of a family but be able to defend for yourself"
                                        It is imperative that we celebrate and recognise women from different fields who are instrumental in making more women join, continue, and grow in the workforce.
                                        Our aim is to bring more and more women from all work of life to create small business and grow them in a collaborative atmosphere supported also by Men.
                                        Meet extraordinary women, all under one roof.</p</div>
                                </div>
                                <div class="sign-part wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms">
                                    <div class="img-part">
                                        <img src="{{ url('frontEnd/images/triptis.jpeg')}}"  height="120" width="150" alt="CEO Image">
                                    </div>
                                    <div class="author-part">
                                        <span class="sign mb-10">
                                            Tripti Shinghal Somani,
                                            <!--<img src="{{ url('frontEnd/images/about/sign.png')}}" alt="Sign">-->
                                            </span>
                                        <span class="post">Founder of Womenmark</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->
            <!-- CTA Section Start -->
            <div class="rs-cta style2">
                <div class="partition-bg-wrap inner-page">
                    <div class="container">
                        <div class="row y-bottom">
                            <div class="col-lg-6 pb-50 md-pt-70 md-pb-70">
                                <img src="{{url('/frontEnd/images/wmimg1.jpg')}}" 
                                 alt="">
                            </div>
                            <div class="col-lg-6 pl-62 pt-134 pb-150 md-pt-50 md-pb-50 md-pl-15">
                                <div class="sec-title mb-40 md-mb-20">
                                        <h2 class="title mb-16">Why Sell on Womenmark ? </h2>
                                        <div class="desc">Integrated Marketing, Customer Relationship, Logistics & Business Management platform to make online business easy for Women!!</div>
                                </div>
                                <div class="btn-part">
                                        <a class="readon2 orange" href="http://wepitch.weblooptechnik.in/reseller">Become A Re-Seller</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CTA Section End -->

            <!-- Categories Section Start -->
            <div id="rs-categories" class="rs-categories gray-bg style1 pt-94 pb-70 md-pt-64 md-pb-40">
                <div class="container">
                    <div class="row y-middle mb-50 md-mb-30">
                        <div class="col-md-6 sm-mb-30">
                            <div class="sec-title">
                               
                                <h2 class="title mb-0">Our Top Categories </h2>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-part text-right sm-text-left">
                                <a href="{{url('allcategory')}}" class="readon">View All Categories</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($cat as $item)
                              @php
                                $count=0;
                                $count=\App\Models\Product::where('subcategory_id',$item->id)->get();
                                $count=count($count);
                            @endphp
                       
                        <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                            <a class="categories-item" href="{{url('/allproducts/'.$item->id)}}">
                                <div class="icon-part">
                                    <img src="{{$item->image}}" alt="">
                                </div>
                                <div class="content-part">
                                    
                                    <h4 class="title">{{$item->subcategoryname}}</h4>
                                   @if($count==1)
                                    
                                   <span class="courses">{{$count}} Product</span>
                                   @elseif($count==0)
                                    
                                   <span class="courses">NO Product</span>
                                   @else
                                   
                                   <span class="courses">{{$count}} Products</span>
                                   @endif
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Categories Section End -->

            <!-- Popular Courses Section Start -->
            <div id="rs-popular-courses" class="rs-popular-courses bg6 style1 pt-94 pb-70 md-pt-64 md-pb-40">
                <div class="container">
                    <div class="row y-middle mb-50 md-mb-30">
                        <div class="col-md-6 sm-mb-30">
                            <div class="sec-title">
                                <div class="sub-title primary">Top Products</div>
                                <h2 class="title mb-0">Popular Products</h2>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-part text-right sm-text-left">
                                <a href="{{url('allproducts')}}" class="readon">View All Products</a>
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        @foreach ($prod as $items)
                            
                   
                        <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                            <div class="courses-item">
                                <div class="img-part">
                                    <img src="{{ url('/backEnd/image/productimage/'.$items->productimage)}}" style="height:300px; width:500px;" alt="">
                                </div>
                                <div class="content-part">
                                    <ul class="meta-part">
                                       
                                        <li><a class="categorie" href="#">{{$items->categoryname}}</a></li>
                                    </ul>
                                    <h3 class="title"><a href="{{url('/product/'.$items->id)}}">{{$items->productname}}</a></h3>
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
            <!-- Popular Courses Section End -->
<div class="rs-partner pb-100 md-pb-70" style="margin-top:-7%;">
    <!-- <span class=""><img src="https://womenmark-static.s3.amazonaws.com/womenmark/main/Womenmark_Plateform/home/Icons/Brand.png" width="40"></span>-->
   
    <h2 class="title " style="text-align: center; color:orangered;margin-top:10%;"><i class="fa fa-wpforms	
        " ></i> Featured Brands</h2>
     <h6 class="title " style="text-align: center; ">Over 20+ Strategic Public and Private Partners!!</h6>
     <br>
     <div class="container">
         <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="5" data-md-device-nav="true" data-md-device-dots="false">
             
          <!--  <div class="partner-item">
                     <a href="#"><img src="{{url('frontEnd/images/partner/im1.png')}}" alt=""></a>
                 </div>
                 <div class="partner-item">
                     <a href="#"><img src="{{url('frontEnd/images/partner/im2.png')}}" alt=""></a>
                 </div>
                 <div class="partner-item">
                     <a href="#"><img src="{{url('frontEnd/images/partner/im3.png')}}" alt=""></a>
                 </div>
                 <div class="partner-item">
                     <a href="#"><img src="{{url('frontEnd/images/partner/im4.png')}}" alt=""></a>
                 </div>-->
               @foreach($brand as $brands)
             <div class="partner-item">
             <img src="{{$brands->image}}" style=height:100px;width:100px;>
                     <!-- <img src="{{url('/backEnd/image/brand_image/'. $brands->image)}}" alt=""> -->
                 </div>
             @endforeach
         </div>
     </div> 
 </div>
  <!-- Partner ends -->

<!-- Contact Section Start -->
<div class="contact-page-section pt-100 pb-100 md-pt-70 md-pb-70" style="background-color:#f3f8f9;margin-top:-10% margin-bottom:-10% ">
    <div class="container">
        <div class="row contact-address-section">
            <div class=" col-lg-4 col-md-12 lg-pl-0 md-mb-30">
                <div class="contact-info contact-address">
                    <div class="icon-part">
                        <i class="fa fa-wpforms	
                        " ></i>
                    </div>
                    <div class="content-part">
                        <h5 class="info-subtitle">2000+ Brands</h5>
                        <h4 class="info-title">Well Curated Products</h4>
                    </div>
                </div>
            </div>
            <div class=" col-lg-4 col-md-12 md-mb-30">
                <div class="contact-info contact-mail">
                    <div class="icon-part">
                        <i class="fa fa-truck"></i>
                    </div>
                    <div class="content-part">
                        <h5 class="info-subtitle">Free Shipping</h5>
                        <h4 class="info-title">For orders above INR 1000</h4>
                    </div>
                </div>
            </div>
            <div class=" col-lg-4 col-md-12 lg-pr-0">
                <div class="contact-info contact-phone">
                    <div class="icon-part">
                        <i class="fa fa-shopping-bag"></i>
                    </div>
                    <div class="content-part">
                        <h5 class="info-subtitle">Genuine Product</h5>
                        <h4 class="info-title">Sourced directly from brands</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Section End --> 

            <!-- CTA Section Start 
            <div class="rs-cta section-wrap gray-bg">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="img-part">
                              <img src="{{ url('frontEnd/images/cta/home1.jpg')}}" alt="Image">
                        </div>
                    </div>  
                     <div class="col-lg-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                        <div class="content">
                            <div class="sec-title mb-40 ">
                                <h2 class="title">Admission Open for 2020</h2>
                                <div class="desc">We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of your moment, so blinded by desire those who fail in their duty through weakness. These cases are perfectly simple and easy every pleasure is to be welcomed and every pain avoided.</div>
                            </div>
                            <div class="btn-part">
                                <a class="readon banner-style uppercase" href="#">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CTA Section End --> 

            <!-- Faq Section Start 
            <div class="rs-faq-part style1 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 padding-0">
                          <div class="main-part">
                            <div class="title mb-40 md-mb-15">
                                <h2 class="text-part">Frequently Asked Questions</h2>
                            </div>
                              <div class="faq-content">
                                  <div id="accordion" class="accordion">
                                     <div class="card">
                                         <div class="card-header">
                                             <a class="card-link" data-toggle="collapse" href="#collapseOne">What are the requirements ?</a>
                                         </div>
                                         <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                             <div class="card-body">
                                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                                             </div>
                                         </div>
                                     </div>
                                      <div class="card">
                                          <div class="card-header">
                                             
                                              <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">Does Educavo offer free courses?</a>
                                          </div>
                                          <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                                              <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card">
                                          <div class="card-header">
                                             
                                              <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false">What is the transfer application process?</a>
                                          </div>
                                          <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                                              <div class="card-body">
                                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                                              </div>
                                          </div>
                                      </div>     
                                      <div class="card">
                                          <div class="card-header">
                                             
                                              <a class="card-link collapsed" data-toggle="collapse" href="#collapsefour" aria-expanded="false">What is distance education?</a>
                                          </div>
                                          <div id="collapsefour" class="collapse" data-parent="#accordion" style="">
                                              <div class="card-body">
                                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="col-lg-6 padding-0">
                            <div class="img-part media-icon">
                                <a class="popup-videos" href="https://www.youtube.com/watch?v=atMUy_bPoQI">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             faq Section Start -->

            <!-- Team Section Start 
            <div id="rs-team" class="rs-team style1 gray-bg pt-94 pb-100 md-pt-64 md-pb-70">
                <div class="container">
                    <div class="sec-title mb-50 md-mb-30">
                        <div class="sub-title primary">Instructor</div>
                        <h2 class="title mb-0">Expert Teachers</h2>
                    </div>
                    <div class="rs-carousel owl-carousel nav-style2" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">
                        <div class="team-item">
                            <img src="{{ url('frontEnd/images/team/1.jpg')}}" alt="">
                            <div class="content-part">
                                <h4 class="name"><a href="team-single.html">Jhon Pedrocas</a></h4>
                                <span class="designation">Professor</span>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item">
                            <img src="{{ url('frontEnd/images/team/2.jpg')}}" alt="">
                            <div class="content-part">
                                <h4 class="name"><a href="team-single.html">Jesika Albenian</a></h4>
                                <span class="designation">Professor</span>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item">
                            <img src="{{ url('frontEnd/images/team/3.jpg')}}" alt="">
                            <div class="content-part">
                                <h4 class="name"><a href="team-single.html">Alex Anthony</a></h4>
                                <span class="designation">Professor</span>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          Team Section End -->

            <!-- Testimonial Section Start 
            <div class="rs-testimonial home-style1 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="sec-title mb-50 md-mb-30 text-center">
                        <div class="sub-title primary">Testimonial</div>
                        <h2 class="title mb-0">What Students Saying</h2>
                    </div>
                    <div class="rs-carousel owl-carousel" 
                        data-loop="true" 
                        data-items="2" 
                        data-margin="30" 
                        data-autoplay="true" 
                        data-hoverpause="true" 
                        data-autoplay-timeout="5000" 
                        data-smart-speed="800" 
                        data-dots="true" 
                        data-nav="false" 
                        data-nav-speed="false" 

                        data-md-device="2" 
                        data-md-device-nav="false" 
                        data-md-device-dots="true" 
                        data-center-mode="false"

                        data-ipad-device2="1" 
                        data-ipad-device-nav2="false" 
                        data-ipad-device-dots2="true"

                        data-ipad-device="2" 
                        data-ipad-device-nav="false" 
                        data-ipad-device-dots="true" 

                        data-mobile-device="1" 
                        data-mobile-device-nav="false" 
                        data-mobile-device-dots="false">
                        <div class="testi-item">
                            <div class="author-desc">                                
                                <div class="desc"><img class="quote" src="{{ url('frontEnd/images/testimonial/style5/quote2.png')}}" alt="">Professional, responsive, and able to keep up with ever-changing demand and tight deadlines: That’s how I would describe Jeramy and his team at The Lorem Ipsum Company. When it comes to content marketing, you’ll definitely get the 5-star treatment from the Lorem Ipsum Company.</div>
                                <div class="author-img">
                                    <img src="{{ url('frontEnd/images/testimonial/style5/1.png')}}" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Mahadi Monsura</a>
                                <span class="designation">Student</span>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="author-desc">
                                <div class="desc"><img class="quote" src="{{ url('frontEnd/images/testimonial/style5/quote2.png')}}" alt="">I was skeptical of SEO and content marketing at first, but the Lorem Ipsum Company not only proved itself financially speaking, but the response I have received from customers is incredible. The work is top-notch and I consistently outrank all my competitors on Google.</div>
                                <div class="author-img">
                                    <img src="{{ url('frontEnd/images/testimonial/style5/2.png')}}" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Alex Fenando</a>
                                <span class="designation">English Teacher</span>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="author-desc">
                                <div class="desc"><img class="quote" src="{{ url('frontEnd/images/testimonial/style5/quote2.png')}}" alt="">After being forced to move twice within five years, our customers had a hard time finding us and our sales plummeted. The Lorem Ipsum Co. not only revitalized our brand, but saved our nearly 100-year-old family business from the brink of ruin by optimizing our website for SEO
                                 Our Clients.</div>
                                <div class="author-img">
                                    <img src="{{ url('frontEnd/images/testimonial/style5/3.png')}}" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Losis Dcosta</a>
                                <span class="designation">Math Teacher</span>
                            </div>
                        </div>   
                        <div class="testi-item">
                            <div class="author-desc">                                
                                <div class="desc"><img class="quote" src="{{ url('frontEnd/images/testimonial/style5/quote2.png')}}" alt="">Professional, responsive, and able to keep up with ever-changing demand and tight deadlines: That’s how I would describe Jeramy and his team at The Lorem Ipsum Company. When it comes to content marketing, you’ll definitely get the 5-star treatment from the Lorem Ipsum Company.</div>
                                <div class="author-img">
                                    <img src="{{ url('frontEnd/images/testimonial/style5/1.png')}}" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Mahadi Monsura</a>
                                <span class="designation">Student</span>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="author-desc">
                                <div class="desc"><img class="quote" src="{{ url('frontEnd/images/testimonial/style5/quote2.png')}}" alt="">I was skeptical of SEO and content marketing at first, but the Lorem Ipsum Company not only proved itself financially speaking, but the response I have received from customers is incredible. The work is top-notch and I consistently outrank all my competitors on Google.</div>
                                <div class="author-img">
                                    <img src="{{ url('frontEnd/images/testimonial/style5/2.png')}}" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Alex Fenando</a>
                                <span class="designation">English Teacher</span>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="author-desc">
                                <div class="desc"><img class="quote" src="{{ url('frontEnd/images/testimonial/style5/quote2.png')}}" alt="">After being forced to move twice within five years, our customers had a hard time finding us and our sales plummeted. The Lorem Ipsum Co. not only revitalized our brand, but saved our nearly 100-year-old family business from the brink of ruin by optimizing our website for SEO Our Clients.</div>
                                <div class="author-img">
                                    <img src="{{ url('frontEnd/images/testimonial/style5/3.png')}}" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Losis Dcosta</a>
                                <span class="designation">Math Teacher</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            Testimonial Section End -->

            <!-- Section bg Wrap 2 start
            <div class="bg2">
                <!-- Blog Section Start -->
             <!--   <div id="rs-blog" class="rs-blog style1 pt-94 pb-100 md-pt-64 md-pb-70">
                    <div class="container">
                        <div class="sec-title mb-60 md-mb-30 text-center">
                            <div class="sub-title primary">News Update </div>
                            <h2 class="title mb-0">Latest News & Events</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-7 col-md-12 pr-75 md-pr-15 md-mb-50">
                                <div class="row align-items-center no-gutter white-bg blog-item mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <div class="col-md-6">
                                        <div class="image-part">
                                            <a href="#"><img src="{{ url('frontEnd/images/blog/1.jpg')}}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blog-content">
                                            <ul class="blog-meta">
                                                <li><i class="fa fa-user-o"></i> Admin</li>
                                                <li><i class="fa fa-calendar"></i>June 15, 2019</li>
                                            </ul>
                                            <h3 class="title"><a href="#">University while the lovely valley team work </a></h3>
                                            <div class="btn-part">
                                                <a class="readon-arrow" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center no-gutter white-bg blog-item mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                                    <div class="col-md-6">
                                        <div class="image-part">
                                            <a href="#"><img src="{{ url('frontEnd/images/blog/2.jpg')}}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blog-content">
                                            <ul class="blog-meta">
                                                <li><i class="fa fa-user-o"></i> Admin</li>
                                                <li><i class="fa fa-calendar"></i>June 15, 2019</li>
                                            </ul>
                                            <h3 class="title"><a href="#">While The Lovely Valley Team Work</a></h3>
                                            <div class="btn-part">
                                                <a class="readon-arrow" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center no-gutter white-bg blog-item wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                                    <div class="col-md-6">
                                        <div class="image-part">
                                            <a href="#"><img src="{{ url('frontEnd/images/blog/3.jpg')}}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blog-content">
                                            <ul class="blog-meta">
                                                <li><i class="fa fa-user-o"></i> Admin</li>
                                                <li><i class="fa fa-calendar"></i>June 15, 2019</li>
                                            </ul>
                                            <h3 class="title"><a href="#">Modern School The Lovely Valley Team Work</a></h3>
                                            <div class="btn-part">
                                                <a class="readon-arrow" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 lg-pl-0">
                                <div class="events-short mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <div class="date-part">
                                        <span class="month">June</span>
                                        <div class="date">20</div>
                                    </div>
                                    <div class="content-part">
                                        <div class="categorie">
                                            <a href="#">Math</a> & <a href="#">English</a>
                                        </div>
                                        <h4 class="title mb-0"><a href="#">Educational Technology and Mobile Learning</a></h4>
                                    </div>
                                </div>
                                <div class="events-short mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                                    <div class="date-part">
                                        <span class="month">June</span>
                                        <div class="date">21</div>
                                    </div>
                                    <div class="content-part">
                                        <div class="categorie">
                                            <a href="#">Math</a> & <a href="#">English</a>
                                        </div>
                                        <h4 class="title mb-0"><a href="#">Educational Technology and Mobile Learning</a></h4>
                                    </div>
                                </div>
                                <div class="events-short mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                                    <div class="date-part">
                                        <span class="month">June</span>
                                        <div class="date">22</div>
                                    </div>
                                    <div class="content-part">
                                        <div class="categorie">
                                            <a href="#">Math</a> & <a href="#">English</a>
                                        </div>
                                        <h4 class="title mb-0"><a href="#">Educational Technology and Mobile Learning</a></h4>
                                    </div>
                                </div>
                                <div class="events-short wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms">
                                    <div class="date-part">
                                        <span class="month">June</span>
                                        <div class="date">23</div>
                                    </div>
                                    <div class="content-part">
                                        <div class="categorie">
                                            <a href="#">Math</a> & <a href="#">English</a>
                                        </div>
                                        <h4 class="title mb-0"><a href="#">Educational Technology and Mobile Learning</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Blog Section End -->

                <!-- Newsletter section start 
                <div class="rs-newsletter style1 mb--124 sm-mb-0 sm-pb-70">
                    <div class="container">
                        <div class="newsletter-wrap">
                            <div class="row y-middle">
                                <div class="col-md-6 sm-mb-30">
                                    <div class="sec-title">
                                        <div class="sub-title white-color">Newsletter</div>
                                        <h2 class="title mb-0 white-color">Subscribe Us to join <br> Our Community </h2>
                                    </div>
                                </div>
                                <div class="col-md-6">
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
            <!-- Section bg Wrap 2 End -->
        </div> 
        <!-- Main content End -->
   
        @endsection
   