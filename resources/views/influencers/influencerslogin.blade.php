@extends('layouts.app')

@section('admin_content')


<!-- main-signin-wrapper -->
<div class="my-auto page page-h container" >
    <div class="main-signin-wrapper row" style="">
        <div class="col-sm-7">
    <img src="{{ url('backEnd/img/login.png')}}" >
        </div>
        
            
            <div class="p-4 wd-md-100p col-sm-5" style="float:right;">
                <div class="main-signin-header">
                
                  <h3 style="color:#ce199a;"> INFLUENCER LOGIN </h3><br>
                   <h4>Login to Your Account.</h4><br>
                   <hr style="background-color:purple">
                    <form method="POST" action="{{ route('influencer.login') }}">
                        @csrf

                        <div class="form-group">
                            <label>{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control form-rounded @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="Enter your email" style="border-color:black;">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ __('Password') }}</label>
                            <input  id="password" type="password"
                            class="form-control form-rounded @error('password') is-invalid @enderror" name="password"
                            required autocomplete="current-password" autofocus placeholder="Enter your password" style="border-color:black;">
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br/>
                        <button type="submit" class="btn btn-primary" style="text-align:center;display:block;" role="button">{{ __('Login') }}</button><br/>
                   </div>
                    </form>
                
              <!-- <div class="main-signin-footer mt-3 mg-t-5">
                    <p>   @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif</p>
                   <!-- <p>Don't have an account? <a href="signup.html">Create an Account</a></p> 
                </div> -->
                </div>
        
    </div>
</div>
                
<!-- /main-signin-wrapper -->


@endsection