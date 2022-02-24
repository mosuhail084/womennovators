@extends('frontEnd.layout.layout')

@section('frontend_content')

<div class="my-auto page page-h"  >
    <div class="main-signin-wrapper col-lg-11" style="float:center;padding:right;">
    <img src="{{ url('backEnd/img/register.png')}}" style="width: 50%;height: 40%;" class="main-logo">
        
            
            <div class="p-4 wd-md-100p col-lg-4" style="float:right">
            @if(session('success'))
                   <h4>
                   <div class="alert alert-success">
                       {{session('success')}}
                   </div>
                   </h3>
                   @endif

                <div class="main-signin-header">
                  <!-- <h2><img src="{{ url('backEnd/img/0km.png')}}" style="width: 30%;height: 70%;" class="main-logo"></h2>
                   -->
                   <h3>Lets get you started</h3>
                
                   <hr style="background-color:purple">
                    <form method="POST" action="{{ route('buyer.store') }}">
                        @csrf

                        <div class="form-group">
                            <input type="name" class="form-control form-rounded @error('name') is-invalid @enderror"
                                name="name"  required autocomplete="name" autofocus
                                placeholder="Enter your Name" style="border-color:black;">

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control form-rounded @error('email') is-invalid @enderror"
                                name="email"required autocomplete="email" autofocus
                                placeholder="Enter your email address" style="border-color:black;">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control form-rounded @error('phone') is-invalid @enderror"
                                name="phone" required autocomplete="phone" autofocus
                                placeholder="Enter your phone number" style="border-color:black;">

                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            
                            <input type="password" id="password"
                            class="form-control form-rounded @error('password1') is-invalid @enderror"  name="password"
                              placeholder="Enter a password" style="border-color:black;">
                                
                                @error('password1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br/>

                                
                            <input  type="password" id="password-confirm"
                            class="form-control form-rounded @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete
                            placeholder="Enter  password again " style="border-color:black;">
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br/>
                        <input type="submit"  value="Signup" class="btn btn-primary" role="button">
                        <a class ="btn btn-primary float-right" href="{{URL::previous()}}">Back</a>
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
                </div>
        
    </div>
</div>
@endsection