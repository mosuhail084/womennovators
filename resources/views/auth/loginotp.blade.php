@extends('layouts.app')

@section('admin_content')

<!-- main-signin-wrapper -->
<div class="my-auto page page-h" >
    <div class="main-signin-wrapper">
        <div class="main-card-signin d-md-flex wd-40p" style="width:500px">
            
            <div class="p-5 wd-md-100p">
                <div class="main-signin-header">
                  <h2><img src="{{ url('backEnd/img/Womennovator.png')}}" style="width: 30%;height: 70%;" class="main-logo"></h2>
                  
                    <form method="POST" method="post" action="{{ url('otp/store')}}" enctype="multipart/form-data">
                       
                        @csrf

                        <div class="form-group">
                            {{-- <label>Enter Your Otp</label> --}}
                            @component('backEnd.components.alert')

                            @endcomponent
                            <input id="otp" type="text" class="form-control @error('otp') is-invalid @enderror"
                                name="otp" value="{{ old('otp') }}" required autocomplete="otp" autofocus
                                placeholder=" Enter Your Otp">
                                <input class="form-control" name="id" value="{{ $id }}" hidden type="text">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-main-primary btn-block">Submit</button>
                      
                    </form>
                </div>
               <div style="text-align: center"> <a href="{{url('/otp/resend/'.$id)}}" style="color: #D8457D;font-weight: 500;">Resend Otp</a></div>
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
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
@endsection
