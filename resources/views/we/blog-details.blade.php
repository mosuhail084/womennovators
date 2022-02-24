
	
	@extends('we.layouts.layout') @section('front_content')
	
    <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="blog-details-box">
                                <div class="row">
                                    
                                    <div class="col-sm-12">
                                        <div class="blog-ldetails">
                                            <img src="{{$blog->image}}">
                                           
                                                <h3>{{$blog->name}}</h3>
                                                <p>{!!$blog->description!!}</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                      <!--  <div class="col-sm-4">
                            <div class="blog-rt">
                                <img src="{{url('we/images/blog-rt.png')}}">
                                <h3>The WE Global Summit Dates Announcement</h3>
                                <span class="time">12th Oct, 2021</span>
                            </div>
                        </div>-->
                    </div>
                </div>
            </section>
            
			
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
            </section> -->
                        
			@endsection
		
		<!-- eof #box_wrapper -->
	<!--</div>-->
	<!-- eof #canvas -->
