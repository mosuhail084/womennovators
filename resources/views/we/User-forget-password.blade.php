@extends('we.layouts.layout') @section('front_content')	
<section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 to_animate" data-animation="fadeInUp">
                            <img src="images/login.png" class="img-responsive">
                        </div>
                        <div class="col-sm-6 to_animate" data-animation="fadeInRight">
                            <div class="login-section">
                                <div class="login-content">
                                    <h2>Reset Your Password</h2>
                                    <!-- <p>Login to manage your account and to access the startup page.</p> -->
                                    <!-- <a href="#" class="just-vote">Just here to vote</a> -->
                                </div>
                    @if(session('success'))
                   <h4>
                   <div class="alert alert-success">
                       {{session('success')}}
                   </div>
                   </h4>
                   @endif
              
                <form method="POST" action="{{ url('/we/forget-password/recover')}}">
                    @csrf

                    <div class="form-group">
                        <!-- {{-- <label>Jury{{ __('E-Mail Address') }}</label> --}} -->
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="Enter your email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                   
                  
                    <button type="submit" class="login-btn">Submit</button>
                   
                  
                </form>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

@endsection