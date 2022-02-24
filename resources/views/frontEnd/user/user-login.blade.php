@extends('frontEnd.layout.layout')

@section('frontend_content')


  <!-- main-signin-wrapper -->
  <div class="my-auto page page-h">
    <div class="main-signin-wrapper col-lg-12" style="float:center;padding:right;">
      <img src="{{ url('backEnd/img/login.png') }}" style="width: 40%;height: 40%;" class="main-logo">


      <div class="p-4 wd-md-100p col-lg-4" style="float:right;">
        <div class="main-signin-header">
          <!-- <h2><img src="{{ url('backEnd/img/0km.png') }}" style="width: 30%;height: 70%;" class="main-logo"></h2>
                       -->
          <h4>Login to Your User Account.</h4><br />
          <div>
            @if (session('success'))
              <h3>
                <div class="alert alert-success">
                  {{ session('success') }}
                </div>
              </h3>
            @elseif(session('fail'))
              <h3>
                <div class="alert alert-success">
                  {{ session('fail') }}
                </div>
              </h3>
          </div>
          @endif
        </div>
        <hr style="background-color:purple">

        <form method="POST" action="{{ route('user.login_process') }}">
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
            <input id="password" type="password" class="form-control form-rounded @error('password') is-invalid @enderror"
              name="password" required autocomplete="current-password" autofocus placeholder="Enter your password"
              style="border-color:black;">

            @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
            <br />
            <div class="form-group">

              <a href="{{ url('buyers/forget/password') }}"><span style="font-size: 14px;
                           color: green;">Forget Password ?</span></a>


            </div>
            <button type="submit" class="btn btn-primary" role="button">{{ __('Login') }}</button>&nbsp;&nbsp;&nbsp;
            <a href="{{ route('user.register') }}" class="btn btn-primary" role="button">Register</a>
        </form>
      </div>
      {{-- <div class="main-signin-footer mt-3 mg-t-5">
                    <p>   @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif</p>
                   <!-- <p>Don't have an account? <a href="signup.html">Create an Account</a></p> -->
                </div> --}}
      </>

    </div>
  </div>

  <!-- /main-signin-wrapper -->

@endsection
