@extends('we.layouts.layout') @section('front_content')
	

<div class="">
    <div class="container">
        <div class="community-banner community-banner2">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-9">
            
            <div class="community-ban-cintent we-support-banner">
                
                <div class="female-user-content">
                    <h2>Our Team</h2>
                    <ul class="communi-list">
                        <li>Here’s the team working behind the scene.</li>
                    </ul>
                    
                </div>
                </div>
                
            </div>
            <!--<div class="col-sm-3">
                <a href="#" class="join-btn">Join this community</a>
                <div class="lead-by">
                <p>Led by </p>
                    <div class="team-user">
                        <a class="team-img" href="#"><img src="./images/user.jpg"></a>
                        <div class="team-user-title">
                            <h5>Silviya Plath</h5>
                            <span class="sub-dis">CEO, StartupPath</span>
                        </div>                                                
                    </div>
                
                </div>
            </div>-->
        </div>
        </div>
    </div>
    
    
</div>
    
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-11">
                <div class="our-team">
                    <h3>WHAT IS WOMENNOVATOR?</h3>
                    <p>
First Virtual Global Incubator for Women

Womennovator – First Virtual Incubator for Women #NaariShakti.</p>
                    <h3>OUR MISSION?</h3>
                    <p>WE is a woman run community aimed at elevating and uplifiting women one circle at a time.</p>
                </div>
                
            </div>
            
        </div>
    </div>
</section>
<section class="">
    <div class="container">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-11">
                <h2 class="core-team-title">THE CORE TEAM</h2>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-11">
                    @foreach ($ourteam as $item)
                        
                    
            <div class="col-sm-3">
                <div class="core-team-box">
                    <div class="box-img">
                        <img src="{{url('/public/backEnd/image/ourteam_image/'.$item->profile_pic ??'')}}">
                    </div>
                    <div class="box-content">
                        <h2>{{$item->name ??''}}</h2>
                        <p>{{$item->designation ??''}}</p>
                        <div class="page_social"> 
                            <a href="" class="social-icon"><img src="images/face-book.png"></a>
                            <a href="" class="social-icon"><img src="images/link-din.png"></a>
                        </div>
                    </div>
                </div>
            
            </div>
            @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<div class="section">
    <div class="container">
        <div class="bg-gray-team">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-8">
                    <h5>Message from the Founder’s Desk</h5>
                    <p>
First Virtual Global Incubator for Women
divider
Womennovator – First Virtual Incubator for Women #NaariShakti. Womennovator was started in the year of 2014 with the motive in mind to make a virtual incubator for women entrepreneurs or women who do have exceptional ideas and want to get a platform to grow. This campaign is an endeavor to communicate excellent work done by women around the world. It is an initiative with the goal of helping women entrepreneurs to grow local economies by providing business education, training, mentoring and networking. Gaining new revenue contract through interaction with Industry leaders; provide media reach (digital and print) through their story on exclusive YouTube Channel. Access to capital and Govt. Support schemes across the country</p>

                </div>
                <div class="col-sm-3">
                    <img src="images/tripti2.png">
                </div>
            </div>
        </div>
    </div>
</div>
<!--<section class="section join-communuty to_animate" data-animation="fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">                            
                <h3>Our Backers</h3>
            </div>
            <div class="col-sm-12">
                <div class="backers">
                    <div class="bac-logo">
                        <img src="images/ds-group.jpg">
                    </div>
                    <div class="bac-logo">
                        <img src="images/induring.jpg">
                    </div>
                    <div class="bac-logo">
                        <img src="images/ds-group.jpg">
                    </div>
                    <div class="bac-logo">
                        <img src="images/induring.jpg">
                    </div>
                    <div class="bac-logo">
                        <img src="images/ds-group.jpg">
                    </div>
                    <div class="bac-logo">
                        <img src="images/induring.jpg">
                    </div>
                    <div class="bac-logo">
                        <img src="images/ds-group.jpg">
                    </div>
                    <div class="bac-logo">
                        <img src="images/induring.jpg">
                    </div>
                    <div class="bac-logo">
                        <img src="images/ds-group.jpg">
                    </div>
                    <div class="bac-logo">
                        <img src="images/induring.jpg">
                    </div>
                    <div class="bac-logo">
                        <img src="images/ds-group.jpg">
                    </div>
                    <div class="bac-logo">
                        <img src="images/induring.jpg">
                    </div>
                    
                
                </div>
            </div>
        </div>
        
    </div>
</section>-->

<!--<section class="section get-the-letest">
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
