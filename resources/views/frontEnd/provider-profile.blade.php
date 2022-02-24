@extends('frontEnd.layout.layout')
@section('frontend_content')
    
<div class="section "><div class="container">
                    <div class="row">
                        
                        <div class="col-sm-8 ">
                            <div class="profile-slide">
                                <div class="slider slider-for">
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
                                </div>
                                <div class="nav-slide-width slider slider-nav">
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
                                </div>
                                <div class="content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since</p>
                                </div>
                            </div>
                            <div class="key-metrics">
                                <h3>key Metrics</h3>
                                <ul>
                                    <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Menlo Park, California </a></li>
                                    <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> May, 2018 </a></li>
                                    <li><a href="#"><i class="fa fa-globe" aria-hidden="true"></i> PacificWest </a></li>
                                    <li><a href="#"><i class="fa fa-book" aria-hidden="true"></i> Seed Stage </a></li>
                                    <li><a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i> 20-30 </a></li>
                                    <li><a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i> DreamPlug Pvt. Ltd. </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 ">
                            <div class="profile-rt">
                                
                                    <a href="#" class="upvote"><i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i> Upvote</a>
                                
                            </div>
                            <div class="team">
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
                            </div>
                            <div class="team">
                                <h4>Team</h4>
                                <a href="#" class="startuppath">www.startuppath.com <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                            <div class="team">
                                <h4>Share</h4>
                                <div class="share-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-hashtag" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                </div>
                </div>
</div>
   
        @endsection
   