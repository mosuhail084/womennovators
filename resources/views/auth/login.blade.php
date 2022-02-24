@extends('layouts.app')

@section('admin_content')
<div class="main-signin-wrapper">
        
    <div class="main-card-signin d-md-flex wd-40p" style="width:1000px">
        
        <div class="p-5 wd-md-100p">
            <div class="row">
                <div class="col-md-6 col-sm-6" >
                    <img src="{{ url('backEnd/img/bg-01.png')}}" class=" m-0 mb-4" alt="logo">
                    
                </div>
            <div class="col-md-6 col-sm-6 main-signin-header">
              <h2><img src="{{ url('backEnd/img/Womennovator.png')}}" style="width: 50%;height: 28%;" class="main-logo"></h2>
              
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        {{-- <label>Jury{{ __('E-Mail Address') }}</label> --}}
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="Enter your email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {{-- <label>{{ __('Password') }}</label> --}}
                        <input  id="password" type="password"
                        class="form-control @error('password') is-invalid @enderror" name="password"
                        required autocomplete="current-password" placeholder="Enter your password">
                            
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div><button type="submit" class="btn btn-main-primary btn-block">{{ __('Login') }}</button>
                                      <p style="text-align: Center; margin-top:10px;">
                  <!--  <a href="{{url('login/jurygoogle')}}"><img src="https://img.icons8.com/fluent/40/000000/google-logo.png"/></a>
                    <a href="{{url('login/juryfacebook')}}"><img src="https://img.icons8.com/fluent/42/000000/facebook-new.png"/></a>
					<a href="{{url('login/jurylinkedin')}}"><img src="https://img.icons8.com/color/45/000000/linkedin.png"/></a> -->
					<a href="{{url('loginmobile')}}"><img src="https://img.icons8.com/color/48/000000/circled-envelope.png"/></a>
					</p>
                 {{--    <a href="{{ url('loginmobile') }}" class="btn btn-main-primary btn-block">{{ __('Login') }} with Email</a> -- }}
                </form>
            </div>
            {{-- <div class="main-signin-footer mt-3 mg-t-5">
                <p>   @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif</p>
               <!-- <p>Don't have an account? <a href="signup.html">Create an Account</a></p> -->
            </div> 
        </>
    </div>--}}
</div>
    </div>
</div>


<!-- main-signin-wrapper -->
{{--<div class="my-auto page page-h" >
    <div class="main-signin-wrapper">
        <div class="main-card-signin d-md-flex wd-40p" style="width:500px">
            
            <div class="p-5 wd-md-100p">
                <div class="main-signin-header">
                  <h2><img src="{{ url('backEnd/img/Womennovator.png')}}" style="width: 30%;height: 70%;" class="main-logo"></h2>
                  
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            {{-- <label>Jury{{ __('E-Mail Address') }}</label> 
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="Enter your email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            {{-- <label>{{ __('Password') }}</label> 
                            <input  id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password"
                            required autocomplete="current-password" placeholder="Enter your password">
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div><button type="submit" class="btn btn-main-primary btn-block">{{ __('Login') }}</button>
                        <a href="{{ url('loginmobile') }}" class="btn btn-main-primary btn-block">{{ __('Login') }} with Mobile</a>
                    </form>
                </div>
                {{-- <div class="main-signin-footer mt-3 mg-t-5">
                    <p>   @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif</p>
                   <!-- <p>Don't have an account? <a href="signup.html">Create an Account</a></p> -->
                </div> 
            </>
        </div>
    </div>
</div>--}}
<!-- /main-signin-wrapper -->

@endsection