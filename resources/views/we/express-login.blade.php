@extends('we.layouts.layout') @section('front_content')
	
<section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 to_animate" data-animation="fadeInUp">
                            
                        </div>
                        <div class="col-sm-6 to_animate" data-animation="fadeInRight">
                            <div class="login-section express-login-section">
                                <div class="express-login-content">
                                    <h2>Express Login</h2>
                                    <p>Login to manage your account and to access the startup page.</p>
                                   
                                </div>
                                <form class="login-form">
                                    <div class="form-group">
                                        <input type="text" placeholder="enter your email address" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" placeholder="enter a password" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="login">
                                        <button class="login-btn">Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			
                
    
			@endsection
		
		<!-- eof #box_wrapper -->
	<!--</div>-->
	<!-- eof #canvas -->
