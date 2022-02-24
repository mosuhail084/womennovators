@extends('frontEnd.layout.layout') @section('frontend_content')

<!-- <div class="card" style="width: 18rem;">
 @foreach($data as $object)
  <img class="card-img-top" src="{{url('backEnd/service/image/'.$object->service_image)}}" alt="Card image cap">
  @endforeach 
   <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> -->


    
<!-- Profile Section -->
<section class="profile-section orange-color pt-100 pb-100 md-pt-70 md-pb-70"> 
                <div class="container">                   
                    <div class="row clearfix">
                        <!-- Image Section -->
                        <div class="image-column col-lg-5 md-mb-50">
                            <div class="inner-column mb-50 md-mb-0">
                                <div class="image">
                                    <img src="assets/images/team/2.jpg" alt="" />
                                </div>
                                <div class="team-content text-center">
                                    @foreach($data as $object)
                                    <img src="{{url('backEnd/service/image/'.$object->service_image)}}">
                                    @endforeach
                                    <br/>
                                    <h2> @foreach($data as $object)
                                        {{ ucfirst($object->title)}}
                                    @endforeach</h2>

                                   
                                    Price : @foreach($data as $object)
                                        <span style="color:red">{{ $object->price}}</span>
                                        
                                    @endforeach
                                    <br>
                                  <a class="btn btn-primary" href="{{url('/post-requirement/'.$id.'/'.'service')}}">Request for service</a>
                                    
                                    <br/>
                                    
                                    <h3>
                                        
                                    <!-- @foreach($data as $object)
                                        {{ $object->tag}}
                                    @endforeach -->

                                    </h3>
                                     <div class="text"></div>
                                    <ul class="personal-info">
                                         <!-- <li class="email">
                                            <span><i class="glyph-icon flaticon-email"> </i> </span>
                                            <a href="mailto:info@yourwebsite.com">info@yourwebsite.com</a>
                                        </li>   -->
                                         <!-- <li class="phone">
                                            <span><i class="glyph-icon flaticon-call"></i></span>
                                            <a href="tel:+088-589-8745">(+088) 589-8745</a>
                                        </li>  -->
                                    </ul>
                                </div>
                                <!-- <div class="social-box">
                                    <a href="#" class="fa fa-facebook-square"></a>
                                    <a href="#" class="fa fa-twitter-square"></a>
                                    <a href="#" class="fa fa-linkedin-square"></a>
                                    <a href="#" class="fa fa-github"></a>
                                </div> -->
                            </div>
                        </div>                      
                        <!-- Content Section -->
                        
                            

                         <div class="content-column col-lg-7 pl-60 pt-50 md-pl-15 md-pt-0">
                         <h1>
                         @foreach($data as $object)
                                        {{ ucfirst($object->title)}}
                                    @endforeach
                         </h1>
                         <!-- <ul class="student-list">
                                    <li>23,564 Total Arts and Paintings</li>
                                    <li><span class="theme_color" style="color:red;">5</span> <span class="fa fa-star" style="color:red;"></span><span class="fa fa-star" style="color:red;"></span><span class="fa fa-star" style="color:red;"></span><span class="fa fa-star" style="color:red;"></span><span class="fa fa-star" style="color:red;"></span> (1254 Rating)</li>
                                    <li>256 Reviews</li>
                                </ul> -->
                                
                                <p>
                                @foreach($data as $object)
                                        {{ $object->full_description}}
                                    @endforeach
                                </p>
                                <br>
                                
                           
                                
                                <!-- @foreach($data as $object)
                                            {{ $object->service_name}}
                                        @endforeach
                                    price:
                                @foreach($data as $object)
                                        {{ $object->price}}
                                    @endforeach -->

                                    <div class="right_head row d-none d-md-block col-xl-12" style="background-image: url(https://womenmark-static.s3.amazonaws.com/womenmark/main/Womenmark_Plateform/serviceDetail/images/Service_Header.png);">
                 <!-- <div class="col-xl-12">
                     
                   <h3 class="heading" style="color:blue;font-size:50px;">Art and Painting</h3>
                 </div> -->
                 <!-- <div class="col-xl-12 col-lg-12 col-md-12">
                  
                  <span><a class="btn btn_link" style="color:pink;">coaching</a></span>
                                  
                  <span><a class="btn btn_link" style="color:pink;">author</a></span>
                  
                  <span><a class="btn btn_link" style="color:pink;">Money breakthrough</a></span>
                  
                 </div> -->
              </div>
              
                           
                                  <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                        <h3 class="ratingheading">User Rating</h3>
                                        <div class="rating_star" id="overall_rating"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span></div>
                                        <p class="rating_info" id="rating_description">No customer ratings.</p>
                                  </div> -->
                                  <!--<div class="team-skill mb-50">
                                    <h3 class="skill-title">Our Skills:</h3>
                                    <div class="row">
                                        <div class="col-md-6 sm-mb-20">
                                            <div class="progress rs-progress">
                                                <div class="progress-bar progress-bar-success"  aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width:95%">
                                                    <span class="pb-label">Art</span>
                                                   
                                                </div>
                                            </div>
                                            <div class="progress rs-progress">
                                                <div class="progress-bar progress-bar-success"  aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                                    <span class="pb-label">Painting</span>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="progress rs-progress">
                                                <div class="progress-bar progress-bar-success"  aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width:88%">
                                                    <span class="pb-label">Drawing</span>
                                                                                                    </div>
                                            </div>
                                            <div class="progress rs-progress">
                                                <div class="progress-bar progress-bar-success"  aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                                    <span class="pb-label">Crafting</span>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->

                                  
                 
                  
                  
                  
                  
                                <!-- <h2>Eliena Rose</h2> -->
                                <!-- <h4>A certified instructor From Educavo</h4> -->
                                <!-- Student List -->
                                <!-- <ul class="student-list">
                                    <li>23,564 Total Students</li>
                                    <li><span class="theme_color">4.5</span> <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span> (1254 Rating)</li>
                                    <li>256 Reviews</li>
                                </ul> -->
                                <!-- <h5>About Me</h5> -->
                                <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat</p> -->
                                <!-- <div class="team-skill mb-50">
                                    <h3 class="skill-title">Our Teacher Skill:</h3>
                                    <div class="row">
                                        <div class="col-md-6 sm-mb-20">
                                            <div class="progress rs-progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:95%">
                                                    <span class="pb-label">Accounting</span>
                                                    <span class="pb-percent">95%</span>
                                                </div>
                                            </div>
                                            <div class="progress rs-progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                                    <span class="pb-label">Reading</span>
                                                    <span class="pb-percent">85%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="progress rs-progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="width:88%">
                                                    <span class="pb-label">Writing</span>
                                                    <span class="pb-percent">88%</span>
                                                </div>
                                            </div>
                                            <div class="progress rs-progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                                    <span class="pb-label">Speaking</span>
                                                    <span class="pb-percent">75%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div> 
                        <!-- <div class="col-lg-12">
                            <div class="content-part">
                                <h3 class="title">25 That Prevent Job Seekers From Overcoming Failure</h3>
                                <p>In art, the term painting describes both the act of painting, (using either a brush or other implement, such as palette knife, sponge, or airbrush to apply the paint); and the result of the action – the painting as an object.For some peo­ple paint is sim­ply a mate­r­ial, another medium, and a very tra­di­tional medium at that. For oth­ers it is the Bible — the Holy Writ. Or it is the Con­sti­tu­tion. Divine what the Found­ing Fathers intended and strictly adhere to it, or risk anar­chy.
                                </p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </section>



@endsection