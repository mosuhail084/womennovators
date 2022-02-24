@extends('frontEnd.layouts.layout') @section('admin_content')


<div class="main-signin-wrapper" style="padding:120px 0px;">
        
    
        
        <div class=" container">
            <div class="row" style="    align-items: center;">
                <div class="col-md-7 col-sm-7" >
                <img src="{{url('faces/faces.jpeg')}}"  class="">
                    </div>
                    <div class="p-4 wd-md-100p col-lg-5" style="float:right">
            <div class="col-md-12 col-sm-12">
                
                     <h3 style="color:#ce199a;"> LOGIN</h3><br/>
                     <!--  <h4>Lets get you started</h4>-->
                   
                   <hr>
                    @if(session('success'))
                   <h4>
                   <div class="alert alert-success">
                       {{session('success')}}
                   </div>
                   </h3>
                   @endif
              
                <form method="POST" action="{{ route('user.login') }}">
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
                       
                        <input  id="password" type="password"
                        class="form-control @error('password') is-invalid @enderror" name="password"
                        required autocomplete="current-password" placeholder="Enter your password">
                            
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
					 <div class="form-group">
                       
                      <a href="{{url('faces/forget/password')}}" ><span style="font-size: 12px;
                       color: green;">Forget Password ?</span></a>
                            
                      
                    </div>
					<button type="submit" class="btn btn-main-primary">{{ __('Login') }}</button>
                    <!--<a href="{{ route('faces.register') }}" class="btn btn-primary" role="button">Register</a>-->
                  
                </form>
            </div>
           
    </div>
</div>
    </div>
</div>


<!-- /main-signin-wrapper -->

@endsection