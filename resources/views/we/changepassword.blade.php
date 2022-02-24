@extends('we.layouts.layout') @section('front_content')
    <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 to_animate" data-animation="fadeInUp">
                            <img src="/womennovators/images/login.png" class="img-responsive">
                        </div>
                        <div class="col-sm-6 to_animate" data-animation="fadeInRight">
                            <div class="login-section">
                                <div class="login-content">
                                    <h2>Reset Your Password</h2>
                                    <!-- <p>Login to manage your account and to access the startup page.</p>
                                    <a href="#" class="just-vote">Just here to vote</a> -->
                                </div>
                           
                        <form method="POST" action="{{ url('we/password/recover/'.$id) }}">
                        @csrf
                        <div class="form-group">
                            <input type="email" class="form-control form-rounded @error('email') is-invalid @enderror"
                                name="email"required autocomplete="email" autofocus
                                placeholder="Enter your email address" value="{{$email}}"  readonly>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group"> 
                            <input type="password" id="password"
                            class="form-control form-rounded @error('password1') is-invalid @enderror"  name="password"
                              placeholder="Enter a password" >
                                
                                @error('password1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br/>    
                            <input  type="password" id="password-confirm"
                            class="form-control form-rounded @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete
                            placeholder="Enter  password again " >
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br/>
                        <input type="submit"  value="Save" class="btn btn-primary" role="button">
                         
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