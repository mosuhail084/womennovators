@extends('frontEnd.layouts.layout') @section('frontEnd_content')
       <!-- Main content Start -->
       <div class="main-content">
             
            <!-- Breadcrumbs Start -->
            <!-- <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="{{ url('frontEnd/assets/images/mask.jpeg')}}" alt="Breadcrumbs Image">
                </div>
            </div> -->
            <div id="slider">
					  <figure>
						    <img src="{{ url('frontEnd/assets/images/mask.jpeg')}} " >
						    <img src="{{ url('frontEnd/assets/images/masks.jpeg')}}" >
						    <img src="{{ url('frontEnd/assets/images/mask2.jpeg')}}" >
					  </figure>
				</div>
            <!-- Breadcrumbs End --> 

            <!-- Events Section Start -->
            <br>
            <div id="rs-team" class="rs-team style1 orange-color white-bg" >
                <div class="container">
                      <div class="row">
                  
                       <div class="col-lg-12  col-md-12 col-sm-12">
                         
                            <div class="">
                            
                                
                                    <h3 class="name" style="color:#ff5421;text-align:center;" >#MaskUpIndia</h3>
                                 <div class="text-center " style="text-align:center; font-size:18px;">
                          
                         <a href="{{ url('/maskindia/photo')}}" style="background:#21a7d0; color:#ffffff; padding:15px 5px; border-radius:4px 4px 4px 4px; " >Upload Your Selfie</a>
                    
                         </div>
                            </div>
                            
                            
                       </div>
                      
                      
                       
                   </div>
                   <br>
                   <div class="row">
                   @foreach($photo as $photos)
                       <div class="col-lg-4 mb-30 col-md-6">
                         
                            <div class="team-item">
                                 <!-- <a class="image-popup" href="{{asset('backEnd/image/maskindia')}}/{{$photos->image ??'' }}"> -->
                                    <img src="{{asset('backEnd/image/maskindia')}}/{{$photos->image ??'' }}" alt="" style="height:500px;">
                                <div class="content-part">
                                    <h4 class="name">{{$photos->name}}</h4>
                                    <span class="designation">{{Str::limit($photos->msg, 205)}}</span>
                                        <span>{{$photos->tags}}</span>
                                </div>
                            </div>
                             <div class="content-part">
                                 
                                 
                                        <!-- <ul class="social-links">
                                        <li><a href="{{$photos->facebook}}"><i class="fa fa-facebook"></i></a></li>
                                    </ul> -->
                                </div>
                       </div>
                       @endforeach
                       
                   </div>
                </div> 
            </div>
            <!-- Events Section End -->
</div> 
  <!-- Main content End --> 
        <div class="rs-newsletter style1 orange-color mb--90 sm-mb-0 sm-pb-70">
            <div class="container">
                <div class="newsletter-wrap">
                    <div class="row y-middle">
                        <div class="col-lg-6 col-md-12 md-mb-30">
                           <div class="content-part">
                               <div class="sec-title">
                                   <div class="title-icon md-mb-15">
                                     <!--  <img src="assets/images/newsletter.png" alt="images">-->
                                   </div>
                                  <h2 class="title mb-0 white-color"><blink>#MaskUpIndia</blink></h2>
                                                                  
                               </div>
                               <div class="btn-part " style="color:white;"> <a  href="maskindia/photo"> Upload your Photo <i class="fa fa fa-angle-right"></i> </a></div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-12 hidden-sm hidden-xs" style="text-align: right">
                          
                                <ul class="address-widget" style="color:white; font-family:34px;">
                                    
                                    <li style="margin-right: 109px;">
                                        
        <span>"Mask is your First line of Defense to fight Covid 3.0</span>

                                         
                                    </li>
                                  
                                    <li>
                                     <span>Mask is a Powerful weapon to fight the Pandemic"</span> 
                                    </li>
                                </ul>

                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content End -->             
@endsection