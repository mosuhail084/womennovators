
	
	@extends('we.layouts.layout') @section('front_content')
	
	
    <div class="inner-banner">
        <img src="/community-banner.jpg" width="1920">
        
        
    </div>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="comunities-header-sec">
                        <ul>
                            <li><h3>Communities</h3></li>
                           <!-- <li><div class="search-div">
                                <input type="search">                                    
                                <span class="search-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                                </div>
                            </li>
                            <li>
                                <select class="select ">
                                    <option>Industry</option>
                                    <option>sndustry</option>
                                    <option>dndustry</option>
                                    <option>fndustry</option>
                                </select>
                            </li>
                            <li>
                                <span class="sort-by-text">Sort by</span>
                                <select class="select sort-by">
                                    <option>Most active</option>
                                    <option>Most active</option>
                                    <option>Most active</option>
                                    <option>Most active</option>
                                </select>
                            </li>-->
                        </ul>
                    </div>
                
            <div class="row flex-row2">
            @foreach ($communities as $community)
                <div class="col-sm-4 to_animate" data-animation="fadeInUp">
                    <a href="{{url('community/'.$community->id)}}">
                        <div class="community-box"> 
                             @if (!empty($community->tag)):                               
                             <div class="start-up">{{$community->tag}}</div>
                             @endif
                            <div class="com-in-con">                                   
                                <h3>{{$community->name}}</h3>
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> {{$community->city}}, {{$community->country}}</p>                                
                                <p class="pull-right"><i class="fa fa-globe" aria-hidden="true"></i> {{$community->followers}}</p>
                                <div class="comu-user"><img src="{{asset('backEnd/image/community_image/'.$community->logo)}}"> {{$community->led_by}}</div>
                            </div>                                
                        </div>
                    </a>
                </div>
            @endforeach
 {{$communities->links()}}


                <!-- <div class="col-sm-4 to_animate" data-animation="fadeInUp">
                    <a href="community-page.html">
                    <div class="community-box">
                        <div class="rebun pink-r">WE ‘21 STARTUP</div>
                        <div class="com-in-con">                                   
                            <h3>WeFirst</h3>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Patna, Bihar</p>                                
                            <p class="pull-right"><i class="fa fa-globe" aria-hidden="true"></i> 19k</p>
                            <div class="comu-user"><img src="images/deepti.jpg"> Deepti Srivastava</div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-sm-4 to_animate" data-animation="fadeInUp">
                    <a href="community-page.html">
                    <div class="community-box">
                        <div class="start-up rebun red-r">WE ‘21 STARTUP</div>
                        <div class="com-in-con">                                   
                            <h3>WeFirst</h3>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Patna, Bihar</p>                                
                            <p class="pull-right"><i class="fa fa-globe" aria-hidden="true"></i> 19k</p>
                            <div class="comu-user"><img src="images/deepti.jpg"> Deepti Srivastava</div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-sm-4 to_animate" data-animation="fadeInUp">
                    <a href="community-page.html">
                    <div class="community-box">
                        <div class="start-up">WE ‘21 STARTUP</div>
                        <div class="com-in-con">                                   
                            <h3>WeFirst</h3>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Patna, Bihar</p>                                
                            <p class="pull-right"><i class="fa fa-globe" aria-hidden="true"></i> 19k</p>
                            <div class="comu-user"><img src="images/deepti.jpg"> Deepti Srivastava</div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-sm-4 to_animate" data-animation="fadeInUp">
                    <a href="community-page.html">
                    <div class="community-box">
                        <div class="rebun blue-r">WE ‘21 STARTUP</div>
                        <div class="com-in-con">                                   
                            <h3>WeFirst</h3>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Patna, Bihar</p>                                
                            <p class="pull-right"><i class="fa fa-globe" aria-hidden="true"></i> 19k</p>
                            <div class="comu-user"><img src="images/deepti.jpg"> Deepti Srivastava</div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-sm-4 to_animate" data-animation="fadeInUp">
                    <div class="community-box">
                        <div class="start-up rebun red-r">WE ‘21 STARTUP</div>
                        <div class="com-in-con">                                   
                            <h3>WeFirst</h3>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Patna, Bihar</p>                                
                            <p class="pull-right"><i class="fa fa-globe" aria-hidden="true"></i> 19k</p>
                            <div class="comu-user"><img src="images/deepti.jpg"> Deepti Srivastava</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 to_animate" data-animation="fadeInUp">
                    <div class="community-box">
                         <div class="start-up">WE ‘21 STARTUP</div>
                        <div class="com-in-con">                                   
                            <h3>WeFirst</h3>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Patna, Bihar</p>                                
                            <p class="pull-right"><i class="fa fa-globe" aria-hidden="true"></i> 19k</p>
                            <div class="comu-user"><img src="images/deepti.jpg"> Deepti Srivastava</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 to_animate" data-animation="fadeInUp">
                    <div class="community-box">
                        <div class="rebun pink-r">WE ‘21 STARTUP</div>
                        <div class="com-in-con">                                   
                            <h3>WeFirst</h3>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Patna, Bihar</p>                                
                            <p class="pull-right"><i class="fa fa-globe" aria-hidden="true"></i> 19k</p>
                            <div class="comu-user"><img src="images/deepti.jpg"> Deepti Srivastava</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 to_animate" data-animation="fadeInUp">
                    <div class="community-box">
                        <div class="start-up rebun red-r">WE ‘21 STARTUP</div>
                        <div class="com-in-con">                                   
                            <h3>WeFirst</h3>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Patna, Bihar</p>                                
                            <p class="pull-right"><i class="fa fa-globe" aria-hidden="true"></i> 19k</p>
                            <div class="comu-user"><img src="images/deepti.jpg"> Deepti Srivastava</div>
                        </div>
                    </div>
                </div> -->
            </div>
                
                </div>
                <div class="col-sm-3 to_animate" data-animation="fadeInUp">
                    <div class="influen-rt-title">
                        <h4>Influencers</h4>
                        <p>A platform is nothing without it’s evanglists. Here’s ours </p>
                    </div>
                    <div class="team">
                    @foreach ($communities as $community)
                        <ul>
                            <li>
                                <div class="team-user-up">
                                    <div class="team-user">
                                        <a class="team-img" href="#"><img  src="{{asset('backEnd/image/community_image/'.$community->logo)}}"></a>
                                        <div class="team-user-title">
                                            <h5>{{$community->led_by}}</h5>
                                            <span class="sub-dis">{{$community->name}}</span>
                                            
                                        </div>                                                
                                    </div>
                                    <!-- <p>15 years of experience in ed-tech and community service.</p> -->
                                </div>
                            </li>    
                        </ul>
                        @endforeach
                        <!-- <div class="entire-team">
                            <ul >
                                <li><a class="entire-team-list"><img  src="./images/user.jpg"></a></li>
                                <li><a class="entire-team-list"><img  src="./images/user.jpg"></a></li>
                            </ul>
                            <a href="#" class="entire-text">see followers</a>
                        </div>                                 -->
                    </div>
                    <!-- <div class="team">
                        <ul>
                            <li>
                                <div class="team-user-up">
                                    <div class="team-user">
                                        <a class="team-img" href="#"><img  src="./images/user.jpg"></a>
                                        <div class="team-user-title">
                                            <h5>Silviya Plath<span class="check-icon"><img src="images/check-icon.png"></span></h5>
                                            <span class="sub-dis">Fintech Guru</span>
                                            
                                        </div>                                                
                                    </div>
                                    <p>15 years of experience in ed-tech and community service.</p>
                                </div>
                            </li>
                            
                        </ul>
                        <div class="entire-team">
                            <ul >
                                <li><a class="entire-team-list"><img  src="./images/user.jpg"></a></li>
                                <li><a class="entire-team-list"><img  src="./images/user.jpg"></a></li>
                            </ul>
                            <a href="#" class="entire-text">see followers</a>
                        </div>                                
                    </div> -->
                </div>
            </div>
            
        </div>
    </section>		
    
    <!-- <section class="section bg-yellow2">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <p>Join the platform with 12 Million women around the world. If you’re passionate about something, share it with the world.</p>
                </div>
                <div class="col-sm-5">
                    <a href="#" class="comuniy-btn">Create a Community</a>
                </div>
            </div>
        </div>
    </section> -->
     <!-- <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-4 to_animate" data-animation="fadeInUp">
                    <div class="community-box">
                        <div class="start-up">WE ‘21 STARTUP</div>
                        <div class="com-in-con">                                   
                            <h3>WeFirst</h3>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Patna, Bihar</p>                                
                            <p class="pull-right"><i class="fa fa-globe" aria-hidden="true"></i> 19k</p>
                            <div class="comu-user"><img src="images/deepti.jpg"> Deepti Srivastava</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 to_animate" data-animation="fadeInUp">
                    <div class="community-box">
                        <div class="rebun blue-r">WE ‘21 STARTUP</div>
                        <div class="com-in-con">                                   
                            <h3>WeFirst</h3>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Patna, Bihar</p>                                
                            <p class="pull-right"><i class="fa fa-globe" aria-hidden="true"></i> 19k</p>
                            <div class="comu-user"><img src="images/deepti.jpg"> Deepti Srivastava</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 to_animate" data-animation="fadeInUp">
                    <div class="community-box">
                        <div class="start-up rebun red-r">WE ‘21 STARTUP</div>
                        <div class="com-in-con">                                   
                            <h3>WeFirst</h3>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Patna, Bihar</p>                                
                            <p class="pull-right"><i class="fa fa-globe" aria-hidden="true"></i> 19k</p>
                            <div class="comu-user"><img src="images/deepti.jpg"> Deepti Srivastava</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="text-center">
                        <a href="#" class="show-more">Show more <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
                </div>
            </div>
         </div>
    </section> -->
    
    
   <!-- <section class="section get-the-letest">
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
