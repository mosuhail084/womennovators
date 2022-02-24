
	
	@extends('we.layouts.layout') @section('front_content')
	
	
            <section class="top-banner">
                <div class="container">
                    <div class="row justify">
                        <div class="col-sm-6 to_animate" data-animation="fadeInRight" data-delay="300">
                            <h2>Alone we can do little; together we can do so much.</h2>
                            <p>Our deepest fear is not that we are inadequate. Our deepest fear is that we are powerful beyond measure. It is our light, not our darkness that most frightens us. </p>
                            <a href="{{route('we.create_community_main')}}" class="community-btn">Create a community!</a>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-5">
                            <div class="banner-rt">
                            <div class="row ">
                                <div class="col-sm-6 to_animate" data-animation="fadeInLeft" data-delay="300">
                                    <div class="img-ban">
                                        <img src="{{url('we/Slide1.PNG')}}">
                                    </div>
                                </div>
                                <div class="col-sm-6 to_animate" data-animation="fadeInLeft" data-delay="300">
                                    <div class="img-ban">
                                        <img src="{{url('we/Slide2.PNG')}}">
                                    </div>
                                </div>
                                <div class="col-sm-6 to_animate" data-animation="fadeInLeft" data-delay="300">
                                    <div class="img-ban">
                                        <img src="{{url('we/Slide3.PNG')}}">
                                    </div>
                                </div>
                                <div class="col-sm-6 to_animate" data-animation="fadeInLeft" data-delay="300">
                                    <div class="img-ban">
                                        <img src="{{url('we/Slide4.PNG')}}">
                                    </div>
                                </div>
                                <div class="col-sm-6 to_animate" data-animation="fadeInLeft" data-delay="300">
                                    <div class="img-ban">
                                        <img src="{{url('we/Slide5.PNG')}}">
                                    </div>
                                </div>
                                <div class="col-sm-6 to_animate" data-animation="fadeInLeft" data-delay="300">
                                    <div class="img-ban">
                                        <img src="{{url('we/Slide6.PNG')}}">
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			<section class="section bg2">
                <div class="container">
					<div class="row">
                        <div class="col-sm-7 to_animate" data-animation="fadeInRight" data-delay="300">
                            <div class="why-we">
                            <h2 >Why WE?</h2>
                            <p>WE is a community focused, community driven platform to empower women entrepreneurs at grassroot level. </p>

<p>We aim to create a revolution of upskilling, elevating, connecting and comunion for the “other” half of the population.</p>

<p>Join the revolution.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-3 to_animate" data-animation="fadeInUp">
                            <div class="why-inr-box">
                                <img src="{{url('we/images/Lead-a-community.jpg')}}">
                            </div>
                            <div class="inr-box-content"><h2>Lead a Community</h2></div>
                        </div>
                        <div class="col-xs-6 col-sm-3 to_animate" data-animation="fadeInUp">
                            <div class="why-inr-box">
                            <img src="{{url('we/images/Incubate-your-startup.jpg')}}">
                            </div>
                            <div class="inr-box-content"><h2>Incubate Your Startup</h2></div>
                        </div>
                        <div class="col-xs-6 col-sm-3 to_animate" data-animation="fadeInUp">
                            <div class="why-inr-box">
                            <img src="{{url('we/images/virtual-shop.jpeg')}}">
                            </div>
                            <div class="inr-box-content"><h2>Create a Virtual Shop</h2></div>
                        </div>
                        <div class="col-xs-6 col-sm-3 to_animate" data-animation="fadeInUp">
                            <div class="why-inr-box">
                            <img src="{{url('we/images/upskill.jpg')}}">
                            </div>
                            <div class="inr-box-content"><h2>Upskill</h2></div>
                        </div>
                    </div>
                    
                    
                </div>
            </section>
			
			<section class="section join-communuty">
                <div class="container">
					<div class="row">
                        <div class="col-sm-8">                            
                            <h2>Join a community</h2>
                            <p>For women, by anyone.</p>
                        </div>
                        <div class="col-sm-4">
                            <div class="text-right"><a class="view-all" href="#">View all</a></div>
                        </div>
                    </div>
                    <div class="row flex-sec">
                    @foreach ($communities as $community)
                        <div class="col-sm-3 to_animate" data-animation="fadeInUp">
                            <div class="community-box">
                                 @if (!empty($community->tag)):                               
                             <div class="start-up">{{$community->tag}}</div>
                             @endif
                                <h3>{{$community->name}}</h3>
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> {{$community->city}}, {{$community->country}}</p>
                                <br>
                                <br>
                                <p><i class="fa fa-globe" aria-hidden="true"></i> {{$community->followers}} Followers</p>
                                <p><i class="fa fa-star" aria-hidden="true"></i> Led by</p>
                                <div class="comu-user"><img src="{{asset('backEnd/image/community_image/'.$community->logo)}}"> {{$community->led_by}}</div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </section>
            <section class="section join-communuty bg-yellow to_animate" data-animation="fadeInUp">
                <div class="container">
					<div class="row">
                        <div class="col-sm-8">                            
                            <h2>Latest Resources</h2>
                        </div>
                        <div class="col-sm-4">
                            <div class="text-right"><a class="view-all" href="#">View all</a></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">        
                            <div class="slider">
                            @foreach ($blogs as $blog)
                              <div class="slick-slideshow__slide">
                                <div class="latest-res-box">
                                <a href="{{url('blog/'.$blog->id)}}"><h3>{{$blog->name}}</h3></a>
                                    <p>by {{$blog->author_name}}</p>
                                    <p>
                                    <span class="post_info_date search">{!!substr($blog->description,0,100  ) !!}...
                                             
                                             <a href="{{url('/blog/'.$blog->id)}}" style="color:#be9656;" class="prev_button">Read More<i class="fa fa-angle-double-right"></i></a>
                                    </p>
                                </div>   
                              </div>
                            @endforeach  
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section join-communuty to_animate" data-animation="fadeInUp">
                <div class="container">
					<div class="row">
                        <div class="col-sm-12">                            
                            <h2>Our Backers</h2>
                        </div>
                        <div class="col-sm-12">
                            <div class="backers">
                            
                                <div class="bac-logo">
                                    <img src="{{url('we/images/backers/guftagu-cafe-final.jpg')}}">
                                </div>
                                <div class="bac-logo">
                                    <img src="{{url('we/images/backers/Inq-Innovation.jpg')}}">
                                </div>
                                <div class="bac-logo">
                                    <img src="{{url('we/images/backers/Invest-India.png')}}">
                                </div>
                                <div class="bac-logo">
                                    <img src="{{url('we/images/backers/anantaya-decor.png')}}">
                                </div>
                                <div class="bac-logo">
                                    <img src="{{url('we/images/backers/Arrow-PC.jpeg')}}">
                                </div>
                                <div class="bac-logo">
                                    <img src="{{url('we/images/backers/bk.png')}}">
                                </div>
                                <div class="bac-logo">
                                    <img src="{{url('we/images/backers/CEPRlogo-4.png')}}">
                                </div>
                                <div class="bac-logo">
                                    <img src="{{url('we/images/backers/Cisne.jpeg')}}">
                                </div>
                                <div class="bac-logo">
                                    <img src="{{url('we/images/backers/Consulate-National-Emb(VM)-1.jpg')}}">
                                </div>
                                <div class="bac-logo">
                                    <img src="{{url('we/images/backers/DCMSME.jpg')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
          <!--  <section class="section get-the-letest to_animate" data-animation="fadeInRight">
                <div class="container">
					<div class="row">
                        <div class="col-sm-12">                            
                            <p>Get the latest resources, reminders and alerts from us. Sign up to our newsletter!</p>
                            <div class="mail-submit">
                                <input placeholder="Please add your email id here."><button class="btn-submit">Submit</button>
                            </div>
                        </div>
                        <div class="col-sm-12">
                           
                        </div>
                    </div>
                    
                </div>
            </section>-->
                        
			@endsection
		
		<!-- eof #box_wrapper -->
	<!--</div>-->
	<!-- eof #canvas -->
