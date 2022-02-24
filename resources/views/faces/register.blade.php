@extends('layouts.app')

@section('admin_content')
<div class="main-signin-wrapper container">
        
<div class="my-auto page page-h row" >
    <div class="col-lg-6" >
     <img src="{{ url('faces/faces.jpeg')}}" style="    padding-top: 10%;" > 
        
          </div>  
            <div class="col-lg-6" >
           

                <div class="main-signin-header">
                  <!-- <h2><img src="{{ url('backEnd/img/0km.png')}}" style="width: 30%;height: 70%;" class="main-logo"></h2>
                   -->
                   
                   
                    <h3 style="color:#ce199a;">Lets get you started</h3><br/>
                   
                   
                   <hr style="background-color:purple">
                    <form method="POST" action="{{ route('faces.store') }}">
                        @csrf

                        <div class="form-group">
                            <input type="name" class="form-control form-rounded @error('name') is-invalid @enderror"
                                name="name"  required autocomplete="name" autofocus
                                placeholder="Enter your Name" >

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control form-rounded @error('email') is-invalid @enderror"
                                name="email"required autocomplete="email" autofocus
                                placeholder="Enter your email address" >

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control form-rounded @error('phone') is-invalid @enderror"
                                name="phone" required autocomplete="phone" autofocus
                                placeholder="Enter your phone number" >

                            @error('phone')
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
                        <input type="submit"  value="Signup" class="btn btn-primary" role="button">
                         <a href="{{ url('faces/login') }}" class="btn btn-primary" role="button">Login</a>
                    </form>
                </div>
               
                </div>
        
    </div>

        </div>
        
    </div>
                





@endsection