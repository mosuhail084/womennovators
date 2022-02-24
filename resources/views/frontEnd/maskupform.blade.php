@extends('frontEnd.layouts.layout') @section('frontEnd_content')
<!-- Main content Start -->
<div class="main-content">
    
                 <div id="slider">
					  <figure>
						    <img src="{{ url('frontEnd/assets/images/mask.jpeg')}} " >
						    <img src="{{ url('frontEnd/assets/images/masks.jpeg')}}" >
						    <img src="{{ url('frontEnd/assets/images/mask2.jpeg')}}" >
					  </figure>
				</div>
        
    <section class="register-section pt-100 pb-100">
                <div class="container">
                    <div class="register-box">
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            @if(is_array(session()->get('success')))
                            @foreach (session()->get('success') as $message)
                            <p>{{ $message }}</p>
                            @endforeach
                            @else
                            <p>{{ session()->get('success') }}</p>
                            @endif
                        </div>
                        @endif
                         <div class="sec-title text-center mb-30">
                            <h2 class="title mb-10">Upload Your Photo</h2>
                            <div class="styled-form">  
                            <form method="post" action="{{ route('maskindia.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div>
                                    <ul>
                                        @foreach ($errors->all() as $e)
                                        <li style="color:red;">{{$e}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                              <div class="row clearfix">
                              <!-- Form Group -->
                                <div class="form-group col-lg-12 mb-25">
                                <!-- <label  class="form-group col-md-2 mb-25" style="color: #112958;  "><strong>Name<span class="tx-danger">*</span></strong></label> -->
                                       <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>Name*</strong></h6>
                                        <input type="text"  name="name" value="" placeholder="Enter Name" required>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- Form Group -->
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>Email*</strong></h6>
                                        <input type="text"  name="email" value="" placeholder="Enter email" required>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>Photo*</strong></h6>
                                <input class="form-control" name="image"  placeholder="Choose Photo"  id="profile1" type="file" style="background:hidden;" required>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                
                                <!-- Form Group -->
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-4" style="color: #ff5421; text-align:left;"><strong>Facebook Link</strong></h6>
                                        <input type="text" name="facebook" value="" placeholder="Enter Facebook Link" >
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- Form Group -->
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>Tag</strong></h6>
                                        <input type="text"  name="tags" value="" placeholder="eg. #MaskUpIndia" >
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- Form Group -->
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>Message</strong></h6>
                                        <textarea type="text"  name="msg" value="" placeholder="Enter message" required></textarea>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="readon register-btn"><span class="txt">Submit</span></button>
                                    </div>
                              </div>
                            </form>
                           </div> 
                        </div>
                     </div>
                </div>
            </section>
            <!-- End Login Section --> 
</div> 
        <!-- Main content End --> 
@endsection