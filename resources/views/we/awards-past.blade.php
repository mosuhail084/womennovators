
	
	@extends('we.layouts.layout') @section('front_content')
	
	
    <div class="community-banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                
                <div class="community-ban-cintent award-ban">
                    <div class="female-user">
                        <img src="{{asset('we/images/award-image.jpg')}}">
                    </div>
                    <div class="female-user-content">
                        <h2>Awards</h2>
                        <ul class="communi-list">
                            <li>Awards available all over this platform </li>
                        </ul>
                    </div>
                    </div>
                    <nav class="comunity-nav">
                        <ul class="aword-tab">
                            <li><a  href="{{ route('award.upcoming')}}">Upcoming Awards</a></li>
                            <li><a class="active" href="#">Past Awards</a></li>
                        </ul>
                    </nav>
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
        
    <section class="section aword-body-con">
        <div class="container">
            <div class="row">
                @isset($past_awards)
              @foreach ($past_awards as $past_awards)
               
                <div class="col-sm-4">
                    <div class="cart">
                    <div class="img-post">
                                        <img src="{{ asset('backEnd/image/award_image/' . $past_awards->image) }}">                                   
                                        </div>
                        <h3>{{ $past_awards->name }}</h3>
                        <p>{{\Illuminate\Support\Str::limit($past_awards->description, 300, '....')}} <a href='{{url('we/awards/'.$past_awards->id)}}' class='read-more'>Read More</a></p>
                        <div class="cart-bt">
                           <div class="lt">
                                <p>{{ $past_awards->end}}</p>
                            </div>
                             <!-- <div class="rt">
                                <a href="#" class="apply-btn">Apply</a>
                            </div> -->
                        </div>
                    </div>
                    
                </div>
                @endforeach
                @endisset
                


               {{-- <div class="col-sm-4">
                    <div class="cart">
                    <div class="img-post">
                                        <img src="images/femail-img-wt.png">                                   
                                        </div>
                        <h3>1000 Women of Asia Awards</h3>
                        <p>Womennovator, now in its 7th year, is the First Virtual Incubation Platform for Women. After the culmination of a seven-year-long journey, it's time for reflection. We have come a long way, but we have miles to travel.</p>
                        <div class="cart-bt">
                            <!-- <div class="lt">
                                <p>Registrations open till 23rd Oct</p>
                            </div>
                            <div class="rt">
                                <a href="#" class="apply-btn">Apply</a>
                            </div> -->
                        </div>
                    </div>
                    
                </div> --}}



                 <!-- <div class="col-sm-4">
                    <div class="cart">
                        <h3>Women Faces 2021-22</h3>
                        <p>Women entrepreneurs who have ideas that they wish to bring to this platform.</p>
                        <div class="cart-bt">
                            <div class="lt">
                                <p>Registrations open till 23rd Oct</p>
                            </div>
                            <div class="rt">
                                <a href="#" class="apply-btn">Apply</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-sm-4">
                    <div class="cart">
                        <h3>Women Faces 2021-22</h3>
                        <p>Women entrepreneurs who have ideas that they wish to bring to this platform.</p>
                        <div class="cart-bt">
                            <div class="lt">
                                <p>Registrations open till 23rd Oct</p>
                            </div>
                            <div class="rt">
                                <a href="#" class="apply-btn">Apply</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-sm-4">
                    <div class="cart">
                        <h3>Women Faces 2021-22</h3>
                        <p>Women entrepreneurs who have ideas that they wish to bring to this platform.</p>
                        <div class="cart-bt">
                            <div class="lt">
                                <p>Registrations open till 23rd Oct</p>
                            </div>
                            <div class="rt">
                                <a href="#" class="apply-btn">Apply</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-sm-4">
                    <div class="cart">
                        <h3>Women Faces 2021-22</h3>
                        <p>Women entrepreneurs who have ideas that they wish to bring to this platform.</p>
                        <div class="cart-bt">
                            <div class="lt">
                                <p>Registrations open till 23rd Oct</p>
                            </div>
                            <div class="rt">
                                <a href="#" class="apply-btn">Apply</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-sm-4">
                    <div class="cart">
                        <h3>Women Faces 2021-22</h3>
                        <p>Women entrepreneurs who have ideas that they wish to bring to this platform.</p>
                        <div class="cart-bt">
                            <div class="lt">
                                <p>Registrations open till 23rd Oct</p>
                            </div>
                            <div class="rt">
                                <a href="#" class="apply-btn">Apply</a>
                            </div>
                        </div>
                    </div>
                    
                </div> -->
            </div>
        </div>
    </section>
    
    
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
