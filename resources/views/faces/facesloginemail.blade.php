@extends('frontEnd.layouts.layout') @section('admin_content')


<div class="main-signin-wrapper" style="padding:120px 0px;">
        
    
        
        <div class=" container">
            <div class="row" style="    align-items: center;">
                <div class="col-md-7 col-sm-7" >
                <img src="{{url('faces/faces.jpeg')}}"  class="">
                    </div>
                    <div class="p-4 wd-md-100p col-lg-5" style="float:right">
            <div class="col-md-12 col-sm-12">
                
                     <h3 style="color:#ce199a;">Forget Password</h3><br/>
                     <!--  <h4>Lets get you started</h4>-->
                   
                   <hr>
                    @if(session('success'))
                   <h4>
                   <div class="alert alert-success">
                       {{session('success')}}
                   </div>
                   </h3>
                   @endif
              
                <form method="POST" action="{{ url('/faces/password/recover')}}">
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
                   
                  
                    <button type="submit" class="btn btn-main-primary">{{ __('Submit') }}</button>
                   
                  
                </form>
            </div>
           
    </div>
</div>
    </div>
</div>


<!-- /main-signin-wrapper -->

@endsection