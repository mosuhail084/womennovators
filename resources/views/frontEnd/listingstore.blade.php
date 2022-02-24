@extends('frontEnd.layout.layout')
@section('frontend_content')
    
<div class="section "><div class="container">
                    <div class="row">
                        
                        <div class="col-sm-8 ">
                           
                            <div class="profile-slide">
                                 <div class="row">
                                   <div class="col-md-6">
                                                    <img style="width: 200px;" src="{{ url('backEnd/image/logo/'.$listing->logo ??'')}}"   alt="CEO Image"> 
                                               
                                           </div> 
                                   <div class="col-md-6">
                                                <h2>{{ $listing->storename ??''}}</h2>     
                                               
                                           </div> 
                                   
                                
                            </div>
                                <div class="">
                                    <div >
                                        
                                    </div>
                                    <div>
                                     
                                    </div>
                                   <!-- <div>
                                       <img src="{{ url('frontEnd/images/profile-banner.jpg')}}"   alt="CEO Image"> 
                                    </div>
                                    <div>
                                        <img src="{{ url('frontEnd/images/profile-banner.jpg')}}"   alt="CEO Image"> 
                                    </div>
                                    <div>
                                        <img src="{{ url('frontEnd/images/profile-banner.jpg')}}"   alt="CEO Image"> 
                                    </div>
                                    <div>
                                       <img src="{{ url('frontEnd/images/profile-banner.jpg')}}"   alt="CEO Image"> 
                                    </div> -->
                                </div>
                             <!--   <div class="nav-slide-width slider slider-nav">
                                    <div>
                                        <img src="{{ url('frontEnd/images/profile-banner.jpg')}}"   alt="CEO Image"> 
                                    </div>
                                    <div>
                                       <img src="{{ url('frontEnd/images/profile-banner.jpg')}}"   alt="CEO Image"> 
                                    </div>
                                    <div>
                                        <img src="{{ url('frontEnd/images/profile-banner.jpg')}}"   alt="CEO Image"> 
                                    </div>
                                    <div>
                                       <img src="{{ url('frontEnd/images/profile-banner.jpg')}}"   alt="CEO Image"> 
                                    </div>
                                    <div>
                                        <img src="{{ url('frontEnd/images/profile-banner.jpg')}}"   alt="CEO Image"> 
                                    </div>
                                </div> -->
                                <div class="content">
                                          {!! $listing->description !!}
                                </div>
                            </div>
                         <!--   <div class="key-metrics">
                                <h3>key Metrics</h3>
                                <ul>
                                    <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Menlo Park, California </a></li>
                                    <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> May, 2018 </a></li>
                                    <li><a href="#"><i class="fa fa-globe" aria-hidden="true"></i> PacificWest </a></li>
                                    <li><a href="#"><i class="fa fa-book" aria-hidden="true"></i> Seed Stage </a></li>
                                    <li><a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i> 20-30 </a></li>
                                    <li><a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i> DreamPlug Pvt. Ltd. </a></li>
                                </ul>
                            </div> -->
                            
                        </div>
                        <div class="col-sm-4 ">
                            <div class="profile-rt">
                                
                                    <a target="blank" href="https://womennovators.com/reseller" class="upvote"><i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i> Become A Reseller</a>
                                
                            </div>
                         <!--   <div class="team">
                                <h4>Team</h4>
                                <ul>
                                    <li>
                                        <div class="team-user">
                                            <a class="team-img" href="#"><img  src="{{ url('frontEnd/images/user.jpg')}}"></a>
                                            <div class="team-user-title">
                                                <h5>Silviya Plath</h5>
                                                <p>CEO, StartupPath</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="team-user">
                                            <a class="team-img" href="#"><img  src="{{ url('frontEnd/images/user.jpg')}}"></a>
                                            <div class="team-user-title">
                                                <h5>Silviya Plath</h5>
                                                <p>CEO, StartupPath</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="entire-team">
                                    <ul >
                                        <li><a class="entire-team-list"><img  src="{{ url('frontEnd/images/user.jpg')}}"></a></li>
                                        <li><a class="entire-team-list"><img  src="{{ url('frontEnd/images/user.jpg')}}"></a></li>
                                    </ul>
                                    <a href="#" class="entire-text">See entire team</a>
                                </div>                                
                            </div> -->
                          <!--  <div class="team">
                                <h4>Team</h4>
                                <a href="#" class="startuppath">www.startuppath.com <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>  -->
                            <div class="team">
                                <h4>Share</h4>
                                <div class="share-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                </div>
                </div>
</div>
      <div class="section gray-bg"><div class="container">
                <div class="row">

                    <div class="col-sm-12 ">
                        <h2 class="title text-center">Latest product</h2>
                    </div>
                    <div class="col-lg-12 pr-50 md-pr-15">
                        <div class="latest owl-carousel">
                            <!-- Slide 1 -->
                            @foreach ($prod as $items)
                            <div class="slide sliser1 product">
                                <div class="pro-img">
                                    <img src="{{ url('/backEnd/image/productimage/'.$items->productimage)}}"   alt="">
                                </div>
                                <div class="product-content">
                                    <h2><a href="{{url('/product/'.$items->seo_url)}}">
                                        {!!substr($items->productname,0,15  ) !!}...
                                    </a></h2>
                                    <p>{{$items->categoryname}}</p>
                                    <div class="product-star">
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      
                                    </div>
                                    <div class="price">
                                        @if($items->price==NULL)
                                        Not Mentioned
                                        @else
                                       Rs.{{$items->price ??''}}
                                        @endif
                                        </div>
									      <a href="https://womennovators.com/reseller" class="buy-now" style="background-color:#323669; border-color: #323669;";>Become a reseller</a>
									<!--
                                        @if($items->price==NULL)
                                      <a href="https://womennovators.com/reseller" class="buy-now" style="background-color:#323669; border-color: #323669;";>Become a reseller</a>
                                        @else
                                      <a href="{{url('/product/'.$items->id)}}" class="buy-now" >Buy Now</a>
                                        @endif
                                        -->
                                    
                                </div>
                            </div>
                            @endforeach
                            
                           
                            
                        </div>
                </div>
            </div>
                </div></div>
        @endsection
   