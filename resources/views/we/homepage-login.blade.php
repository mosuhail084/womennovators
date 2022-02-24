@extends('we.layouts.layout') @section('front_content')
	
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 to_animate" data-animation="fadeInUp">
                <img src="images/register.png" class="img-responsive">
            </div>
            <div class="col-sm-6 to_animate" data-animation="fadeInRight">
                <div class="login-section">
                    <div class="login-content">
                        <h2>Lets get you started</h2>
                        <p>Sign up to list your startup in Womennovator</p>
                        <a href="#" class="just-vote">Just here to vote</a>
                    </div>
                    <form class="login-form">
                        <div class="form-group">
                            <input type="text" placeholder="enter your email address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="enter a password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="enter a password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <div class="login">
                            <button class="login-btn">Sign up</button><a href="login.html">already have an account?</a>
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
