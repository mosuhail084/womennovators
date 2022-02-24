@extends('we.layouts.layout') @section('front_content')
	
 <div class="community-banner incubation-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                        
                        <div class="community-ban-cintent">
                            <div class="female-user">
                                <img src="images/femail-img-wt.png">
                            </div>
                            <div class="female-user-content">
                                <h2>Womennovator Incubation <br>Programme 2022</h2>
                                <ul class="communi-list">
                                    <li>Get your startup incubated with award winning teams that’ve led 100s of early stage startups through Angel and Series A rounds. </li>
                                </ul>
                            </div>
                            </div>
                            <nav class="comunity-nav">
                                <ul>
                                    <li><a class="active" href="#">Home</a></li>
                                    <li><a href="#">Success Stories</a></li>
                                    <li><a href="#">About</a></li>
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
            	
            <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="incubation-title">Womennovator Incubation School 2022-23</h1>
                                </div>
                                <div class="col-sm-7">
                                    <div class="incubation-de-lt">
                                        <img src="images/programmer.png">
                                    </div>
                                
                                </div>
                                <div class="col-sm-5">
                                    <div class="incubation-de-rt">
                                        <p>The WE - Virtual Incubation Program for Women is a 10 weeks digital incubation program for women enterprise based in India across various sectors.</p> 
                                        <p>The program is designed to bring the best of Womennovator's programs to women-led ventures across the various sectors.</p>
                                    </div>
                                </div>
                                
                        
                        </div>
                            <div class="why-incubation-sec">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="why-wo-title">
                                            <h4>Why Womennovator <br>Incubation?</h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="box-four">
                                            <p><strong>800 Companies</strong> Incubated so far.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="box-four">
                                            <p>Access to <strong>120 Mentors’</strong> on the go</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="box-four">
                                            <p>Lifetime access to the platform</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="box-four">
                                            <p><strong>$10M</strong> in direct funding dIspersed so far.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="box-four">
                                            <p>Access to a <strong>20K</strong> Womennovators worldwide</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="incubation-title">Our Past Incubatees </h4>
                                </div>
                                <div class="col-sm-12">
                                <div class="logo-sec">
                                    
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="com-logo">
                                                <img src="images/stripe.png">
                                            </div>
                                        </div>
                                    <div class="col-sm-3">
                                            <div class="com-logo">
                                                <img src="images/checkr.png">
                                            </div>
                                        </div>
                                    <div class="col-sm-3">
                                            <div class="com-logo">
                                                <img src="images/pagerduty.png">
                                            </div>
                                        </div>
                                    <div class="col-sm-3">
                                            <div class="com-logo">
                                                <img src="images/airbnb.png">
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="incubate-form">
                                <h2>Become an Incubatee</h2>
                                <div class="incubate-form-sec">
                                    <form action="{{url('we/add/incubation')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">                                        
                                            <label>Name*</label>
                                            <input class="form-control" name="name" placeholder="Enter Name" required>
                                        </div>
                                        <div class="form-group">                                        
                                            <label>Company*</label>
                                            <input class="form-control" name="company_name" placeholder="Enter Company" required>
                                        </div>
                                        <div class="form-group" >                                        
                                            <label>Industry*</label>
                                            <select class="form-control" name="industry">
                                            <option value="">-----</option>
                                  
                                     @foreach($sector as $sectorData)
                                   <option value="{{$sectorData->id}}" >
                                   {{ $sectorData->sectorname }}</option>
                                   @endforeach   
                                   
                                  <option value="others">Others</option>
                                            </select >
                                        </div>
                                        <div class="form-group">                                        
                                            <label>Pitch Deck</label>
                                            <input type="file" class="form-control" name="pitch_deck" placeholder="Upload">
                                        </div>
                                        <div class="form-group skip"> 
                                            <input type="checkbox" name="skip_or_not"> Skip Pitch Deck (You will have to enter all details manually)
                                        </div>
                                        <button class="btn-continue">Continue </button>
                                    </form>
                                
                                </div>
                                <div class="note">                                
                                    <p>NOTE:</p>
                                    <ul>
                                        <li>Programme starts January, 2021. See the whole timeline here.</li>
                                        <li>Access is entirely basis criteria and first come first serve basis. View the entire creteria here.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
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
            </section>-->
                        
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
