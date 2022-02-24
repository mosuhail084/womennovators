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

                    
                    <form class="login-form" method="post" action="{{route('we.register')}}">
                        @csrf
                        @error ('name')
                    <span style="color:#CE199A;">
                        {{$message}}
                    </span>
                    @enderror
                    <div class="form-group" >
                            <input type="text" name="name" value="{{old('name')}}" placeholder="enter your name" class="form-control" required>
                        </div>
                        @error ('email')
                    <span style="color:#CE199A;">
                        {{$message}}
                    </span>
                    @enderror
                        <div class="form-group">
                            <input type="text" name="email"  value="{{old('email')}}" placeholder="enter your email address" class="form-control" onkeyup="emailValid()" required>
                            <ul id="emailV">
                              <li style="font-size: 0.8em;">Email should be of format example@abc.com</li>
                            </ul>
                          </div>
                        @error ('password')
                    <span style="color:#CE199A;">
                        {{$message}}
                    </span>
                    @enderror
                        <div class="form-group">
                            <input type="password" name="password" placeholder="enter a password" class="form-control" onkeyup="passwordValid()" required>
                            <ul>
                              <li id="passV1" style="font-size: 0.8em;">Password must contain atleast 8 characters.</li>
                              <li id="passV2" style="font-size: 0.8em;">Password must contain atleast 1 upper case letter.</li>
                              <li id="passV3" style="font-size: 0.8em;">Password must contain atleast 1 lower case letter.</li>
                              <li id="passV4" style="font-size: 0.8em;">Password must contain atleast 1 digit.</li>
                              <li id="passV5" style="font-size: 0.8em;">Password must contain atleast 1 special character.</li>
                            </ul>
                        </div>
                        <!-- <div class="form-group">
                            <input type="password" placeholder="enter a password" class="form-control" required>
                        </div> -->
                        <div class="form-group">
                            <div class="login">
                            <button type="submit" value="submit" class="login-btn">Sign up</button><a href="login.html">already have an account?</a>
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
