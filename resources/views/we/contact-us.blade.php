
	
	@extends('we.layouts.layout') @section('front_content')
	
	<div class="">
        <div class="container">
            <div class="community-banner community-banner2">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-9">
                
                <div class="community-ban-cintent we-support-banner">
                    
                    <div class="female-user-content">
                        <h2>Contact Us</h2>
                        <ul class="communi-list">
                            <li>Got queries that you want resolved?</li>
                        </ul>
                        
                    </div>
                    </div>
                    
                </div>
                
                </div>
            </div>
        </div>
        
        
    </div>
        
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="contact-us-sec">
                        <h1>Need help?</h1>
        
                        <p>contact@womennovators.com</p>



                        <p></p>
                        <h2>For Corporate Tie-ups</h2>
                        <p>We are govt. recognised NGO, for corporate tie-ups, get in touch </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="incubate-form">
                        <h3>Or, write to us</h3>
                        <div class="incubate-form-sec">
                            <form action="{{url('we/add/faqsupport')}}"  method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">                                        
                                    <label>Name*</label>
                                    <input class="form-control" name="name" placeholder="Enter Name" required>
                                </div>
                                <div class="form-group">                                        
                                    <label>Phone*</label>
                                    <input type="number" name="phone" class="form-control" placeholder="Enter Phone Number" required>
                                </div>                      
                                <div class="form-group">                                        
                                    <label>Query</label>
                                    <textarea class="form-control" placeholder="Enter Query"></textarea>
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
