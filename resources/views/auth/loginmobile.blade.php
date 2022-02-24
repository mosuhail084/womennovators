@extends('layouts.app')

@section('admin_content')

<!-- main-signin-wrapper -->
<div class="my-auto page page-h" >
    <div class="main-signin-wrapper">
        <div class="main-card-signin d-md-flex wd-40p" style="width:500px">
            
            <div class="p-5 wd-md-100p">
                <div class="main-signin-header">
                  <h2><img src="{{ url('backEnd/img/Womennovator.png')}}" style="width: 30%;height: 70%;" class="main-logo"></h2>
                  @if(session()->has('error'))
                  <div class="alert alert-danger">
                       {{ session()->get('error') }}
                   </div>
               @endif
                    <form method="POST" method="post" action="{{ url('mobile/store')}}" enctype="multipart/form-data">
                       
                        @csrf

                        <div class="form-group">
                         
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="Enter your email">
                                @component('backEnd.components.alert')

                                @endcomponent
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-main-primary btn-block">{{ __('Login') }} with Email</button>
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
</div>
<!-- /main-signin-wrapper -->

@endsection
