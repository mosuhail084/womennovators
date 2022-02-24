@extends('we.layouts.layout') @section('front_content')
	

            <div class="community-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                        
                        <div class="community-ban-cintent we-support-banner">
                            
                            <div class="female-user-content">
                                <h2>Mentorship</h2>
                                <ul class="communi-list">
                                    <li>Don’t have the time commitment but would like to help out? Join us as a mentor!</li>
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
            	
            <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="contact-us-sec">
                                <h1>Why Become a Mentor?</h1>
                                <p>Womennovator Mentorship allows you to help out budding entrepreneurs from all corners of India and helps you execute upon the experience you’ve gained over the years -- without a tight time commitments.</p>
                                <p>Here’s Womennovator’s previous Mentors explaining the job role.</p>
                                <div class="mentor-content">
                                    <img src="images/blog-rt.png">
                                    <div class="mentor-content-tit">
                                        <h4>Dr. Rakul Shroff </h4>
                                        <p>Womennovator expert on Medicine</p>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-4">
                            <div class="incubate-form">
                                <h4>Apply to become one of the mentors.</h4>
                                <div class="incubate-form-sec">
                                    <form action="{{url('we/add/mentor')}}"  method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">                                        
                                            <label>Name*</label>
                                            <input class="form-control" name="name" placeholder="Enter Name" required>
                                        </div>
                                        <div class="form-group">                                        
                                            <label>Phone*</label>
                                            <input type="number" name="phone_no" class="form-control" placeholder="Enter Phone Number" required>
                                        </div>
                                        <div class="form-group">                                        
                                            <label>LinkedIn URL*</label>
                                            <input name="linkedin_url" class="form-control" placeholder="LinkedIn URL" required>
                                        </div>                                        
                                        <div class="form-group">                                        
                                            <label>Field of Expertise</label>
                                            <select class="form-control" name="field_exp" required>
                                                  
                                        <option value="0" >-----</option>
                                                   <option value="17">Accounting</option>
                                                   <option value="1">Agriculture</option>
                                                   
                                                   <option value="2">Education</option>
                                                   <option value="3">Engineering</option>
                                                    <option value="15">Entertainment</option>
                                                   <option value="4">Finance and Insurance</option>
                                                   <option value="5">Food Beverage</option>
                                                   <option value="6">Healthcare</option>
                                                   <option value="7">Hospitality</option>
                                                   <option value="10">Manufacturing</option>
                                                   <option value="11">Media And Publishing</option>
                                                   <option value="12">Online Commerce</option>
                                                   <option value="13">Professional Service</option>
                                                    <option value="14">Sports</option>
                                                   <option value="8">Travel</option>  
                                                   <option value="16">Technology and Software</option>                                                   
                                                   <option value="others">Others</option>
                                                  
                                            </select>
                                        </div>
                                        <div class="form-group">                                        
                                            <label>Country</label>
                                            <select class="form-control" name="country" required>
                                                 @php
                                                $country=DB::table('allcountries')->get();
                                                @endphp
                                                
                                                <option value="" >-----</option>
                                                @foreach($country as $stateData)
                                                <option value="{{$stateData->id}}" @if(!empty($mentor->
                                                country) && $mentor->
                                                country==$stateData->id) selected @endif>
                                                {{ $stateData->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">                                        
                                            <label>Statement of Purpose</label>
                                            <textarea name="statement_of_purpose" class="form-control" placeholder="What drives you?"></textarea>
                                        </div>
                                        
                                        <button class="btn-continue">Send your query</button>
                                    </form>
                                
                                </div>
                                <div class="note">                                
                                    <p>NOTE:</p>
                                    <ul>
                                        <li>Womennovator holds the right to not reply to your query. Queries generally take 7 days to be replied to. You will receive all details via the mail id mentioned above.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
			
			<section class="section get-the-letest">
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
            </section>

                  <div class="modal fade" id="request-suss" role="dialog">
    <div class="modal-dialog modal-width">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><img src="images/close-icon.png"></button>
          
        </div>
        <div class="modal-body jury-popup">
          <div class="text-center">
                <h3>Request successfully sent. </h3>
            </div>
            
            <div class="sussecsfull">
                <div class="check-box"><img src="images/check-wt.png"></div>
                
            </div>
            <div class="text-center">
                <a class="back-btn" href="">Go back</a>
            </div>
        </div>
      </div>
        </div>
  </div>

           
    
			@endsection
		
		<!-- eof #box_wrapper -->
	<!--</div>-->
	<!-- eof #canvas -->
