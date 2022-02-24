@extends('frontEnd.layouts.layout') @section('frontEnd_content')
<!-- Main content Start -->
<div class="main-content">
      <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="/backEnd/image/banner2.jpeg" alt="covidcaregiver">
                </div>
                <!-- <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">Covid Care</h1>
                    <ul>
                        <li>frontEnd/assets/images/slider/banner-covid.jpg
                            <a class="active" href="index.html">Home</a>
                        </li>
                        <li>Blog Single</li>
                    </ul>
                </div> -->
            </div>
       	       <!-- Blog Section Start -->
                  <div class="rs-inner-blog orange-color bg7 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 ">
                           <div class="blog-deatails">
                                <div class="bs-img text-center">
                                    <a href="#"><img style="margin: 10px 10px 10px 15px" src="{{url($covidwarrior->photo)}}" alt="" height="550" width="490"></a>
                                </div>
                                <p style="padding:6px 0px 6px 2px;" class="text-center"><span><b>Share : </b></span>
                         <a id="linkidinshare"  style="font-size: 17px;"><i class="fa fa-linkedin fa-3"></i></a>
                         <a id="gplusShare" style="font-size: 17px;" class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Contact me"><i class="fa fa-google-plus"></i></a>
                         <a id="twitterShare" style="font-size: 17px;"><i class="fa fa-twitter"></i></a>
                         <a id="fbShare" style="font-size: 17px;" class="btn btn-icon-toggle"  data-toggle="tooltip"  data-placement="top" data-original-title="Personal info"><i class="fa fa-facebook"></i></a>
                         <a href="whatsapp://send?text=Donate!http://localhost/covidcare/public/care/lestfunds" data-action="share/whatsapp/share"><i class="fa fa-whatsapp"></i></a>
                         </p>
                           </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="widget-area">
                              
                                <div class="recent-posts mb-50">
                                      <div class="blog-full">
                                   <div class="widget-title">
                                   <ul>
                            <li ><span><b> Nominated by :</b></span> <span>{{$covidwarrior->warrior_name}}</span></li>
                
             <li><span><b>Phone :</b></span> <span>{{$covidwarrior->phone}}</span></li>
             <li><span><b>Location :</b></span> <span>{{$covidwarrior->location}}</span></li>
            
             
                                   </ul>
                                   </div>
                                   
                                   </div>
                                    <h3 class="widget-title">Area of Expertise</h3>
                                    <p>
                                    {!! $covidwarrior->areaofexpertise !!}
                                    </p>
                                 <div class="row text-center">
                               
                                <div class="pull-left">
                                   
                                    
                                    <a class="btn btn-primary primary-gradient" href="tel:{{$covidwarrior->phone}}"><i class="fa fa-phone"></i> Call Now</a>       
                                        
                                    </div> 
                                <br/>
                                <div class="pull-right">
                                      <a href="https://web.whatsapp.com/send?phone= +91{{$covidwarrior->phone}} &amp;text=Hi, I would like to get more information" class="btn btn-success success-gradient"  ><i class="fa fa-whatsapp"></i>  whatsapp</a>
                                    
                                    </div>
                            
                                
                               
                                
                                </div>
                               
                                </div>
                                   
                            </div>
                        </div>
                        
                    </div> 
                </div>
            </div>
            <!-- Blog Section End -->  

</div> 
        <!-- Main content End --> 
@endsection