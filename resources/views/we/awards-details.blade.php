
	
	@extends('we.layouts.layout') @section('front_content')
	
    <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="blog-details-box">
                                <div class="row">
                                    
                                    <div class="col-sm-12">
                                        <div class="blog-ldetails">
                                            <img src="{{ asset('backEnd/image/award_image/' . $awards[0]->image) }}">
                                           
                                                <h3>{{$awards[0]->name}}</h3>
                                                <p>{!!$awards[0]->description!!}</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </section>
            
			
		<!--	<section class="section get-the-letest">
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
