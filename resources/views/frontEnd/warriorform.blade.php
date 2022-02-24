@extends('frontEnd.layouts.layout') @section('frontEnd_content')
<!-- Main content Start -->
<div class="main-content">
      <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="/backEnd/image/1530X492_Banner.png" alt="covidcaregiver">
                </div>
                
            </div>
<section class="register-section pt-100 pb-100">
                <div class="container">
                    <div class="register-box">
                    @if(session()->has('status'))
                        <div class="alert alert-success">
                            @if(is_array(session()->get('status')))
                            @foreach (session()->get('status') as $message)
                            <p>{{ $message }}</p>
                            @endforeach
                            @else
                            <p>{{ session()->get('success') }}</p>
                            @endif
                        </div>
                        @endif
                         <div class="sec-title text-center mb-30">
                            <h3 class="title mb-10">Nominate Front line warrior</h2>
                            <br/><div class="styled-form">  
                            <form method="post" action="{{ route('warrior.store')}}" enctype="multipart/form-data">
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
                                       <h6 class="form-group col-lg-2" style="color: #112958; text-align:left;max-width: 24.666667%;"><strong>Name*</strong></h6>
                                        <input type="text" id="Name" name="warrior_name" value="" placeholder="Enter Name" required>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- Form Group -->
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-2" style="text-align:left;max-width: 24.666667%;"><strong>Email I’d *</strong></h6>
                                        <input type="text"  name="email" value="" placeholder="Enter Email" required>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- Form Group -->
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-2" style="text-align:left;max-width: 24.666667%;"><strong>Phone No*</strong></h6>
                                        <input type="tel"  name="phone" value="" placeholder="Enter Phone Number" required>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- Form Group -->
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-2" style="text-align:left;"><strong>Photo</strong></h6>
                                <input class="form-control" name="photo"  placeholder="Choose Photo"  id="profile1" type="file" style="background:hidden;">
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- Form Group -->
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-2" style="text-align:left;"><strong>City*</strong></h6>
                                        <input type="text"  name="city" value="" placeholder="Enter city" required>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- Form Group -->
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-2" style="text-align:left;"><strong>Address</strong></h6>
                                        <input type="text"  name="location" value="" placeholder="Enter Address" >
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                
                                <!-- <div class="form-group col-lg-12 mb-25">
                                 <label style="color: #112958; margin-left:-450px;"><strong>Area of Expertise<span class="tx-danger">*</span></strong></label> 
                                <h6 class="form-group col-lg-4" style="text-align:left;"><strong>Area of Expertise</strong></h6>
                                <textarea style="padding:6px 30px;" type="text" rows="3" name="areaofexpertise" class="form-control summernote" placeholder="Enter Suggestions"> 
                                        </textarea>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div> -->
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-4" style="text-align:left;"><strong>Area of Expertise</strong></h6>
                                <div class="flex-box">
            
        </div>
        <br>
        <div class="row">
            <div class="col-md-12 col-sm-9">
                <div class="flex-box">
                    <textarea id="editor" 
                              class="input shadow" 
                              name="areaofexpertise" 
                              rows="15" 
                              cols="100" 
                              placeholder="Your text here ">
                    </textarea>
                </div>
            </div>
            <div class="col-md-3">
            </div>
        </div>
        </div>
        <!-- Form Group -->
        <h4>Nominated by</h4><hr>
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-4" style="text-align:left;"><strong>Name</strong></h6>
                                        <input type="text"  name="refer_by" value="" placeholder="Enter Name " required>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- Form Group -->
        
          <!-- Form Group -->
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-4" style="text-align:left;"><strong>Email id </strong></h6>
                                        <input type="text"  name="refer_email" value="" placeholder="Enter Email id" required>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- Form Group -->
                                  <!-- Form Group -->
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-4" style="text-align:left;"><strong>Phone no </strong></h6>
                                        <input type="text"  name="refer_phone" value="" placeholder="Enter Phone No" required>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- Form Group -->
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                                        <button type="submit" style="background:#21a7d0; color:#ffffff; padding:10px 50px;" class="btn btn-main-primary btn-block"><span class="txt">Submit</span></button>
                                    </div>
                              </div>
                            </form>
                           </div> 
                        </div>
                     </div>
                </div>
                    <!-- Popular Courses Section Start -->
            <div id="rs-featured-courses" class="rs-featured-courses pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="sec-title mb-60 text-center">
                           
                            <h2 class="title mb-0">Saluting our frontline warriors</h2>
                        </div>
                    
	               
                        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="7000" data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
                      <div class="courses-item">
                            
                            <div class="content-part">
                               
                            
                                  
                              
                                <div class="images">
                                	<div class="img">
                                		<img src="{{ url('frontEnd/assets/images/Slide10.PNG')}}" alt="">
                                	</div>
                                		
                                </div> 
                                
                            </div>
                        </div>
                        <div class="courses-item">
                            
                            <div class="content-part">
                               
                            
                                  
                              
                                <div class="images">
                                	<div class="img">
                                		<img src="{{ url('frontEnd/assets/images/Slide11.PNG')}}" alt="">
                                	</div>
                                		
                                </div> 
                                
                            </div>
                        </div>
                        <div class="courses-item">
                            
                            <div class="content-part">
                               
                            
                                  
                              
                                <div class="images">
                                	<div class="img">
                                		<img src="{{ url('frontEnd/assets/images/Slide1.PNG')}}" alt="">
                                	</div>
                                		
                                </div> 
                                
                            </div>
                        </div>
                        <div class="courses-item">
                            
                            <div class="content-part">
                               
                            
                                  
                              
                                <div class="images">
                                	<div class="img">
                                		<img src="{{ url('frontEnd/assets/images/Slide2.PNG')}}" alt="">
                                	</div>
                                		
                                </div> 
                                
                            </div>
                        </div>
                        <div class="courses-item">
                            
                            <div class="content-part">
                               
                            
                                  
                              
                                <div class="images">
                                	<div class="img">
                                		<img src="{{ url('frontEnd/assets/images/Slide3.PNG')}}" alt="">
                                	</div>
                                		
                                </div> 
                                
                            </div>
                        </div>
                        <div class="courses-item">
                            
                            <div class="content-part">
                               
                            
                                  
                              
                                <div class="images">
                                	<div class="img">
                                		<img src="{{ url('frontEnd/assets/images/Slide4.PNG')}}" alt="">
                                	</div>
                                		
                                </div> 
                                
                            </div>
                        </div>
                        <div class="courses-item">
                            
                            <div class="content-part">
                               
                            
                                  
                              
                                <div class="images">
                                	<div class="img">
                                		<img src="{{ url('frontEnd/assets/images/Slide5.PNG')}}" alt="">
                                	</div>
                                		
                                </div> 
                                
                            </div>
                        </div>
                        <div class="courses-item">
                            
                            <div class="content-part">
                               
                            
                                  
                              
                                <div class="images">
                                	<div class="img">
                                		<img src="{{ url('frontEnd/assets/images/Slide6.PNG')}}" alt="">
                                	</div>
                                		
                                </div> 
                                
                            </div>
                        </div>
                        <div class="courses-item">
                            
                            <div class="content-part">
                               
                            
                                  
                              
                                <div class="images">
                                	<div class="img">
                                		<img src="{{ url('frontEnd/assets/images/Slide7.PNG')}}" alt="">
                                	</div>
                                		
                                </div> 
                                
                            </div>
                        </div>
                        <div class="courses-item">
                            
                            <div class="content-part">
                               
                            
                                  
                              
                                <div class="images">
                                	<div class="img">
                                		<img src="{{ url('frontEnd/assets/images/Slide8.PNG')}}" alt="">
                                	</div>
                                		
                                </div> 
                                
                            </div>
                        </div>
                        
                        <div class="courses-item">
                            
                            <div class="content-part">
                               
                            
                                  
                              
                                <div class="images">
                                	<div class="img">
                                		<img src="{{ url('frontEnd/assets/images/Slide9.PNG')}}" alt="">
                                	</div>
                                		
                                </div> 
                                
                            </div>
                        </div>
                        <div class="courses-item">
                            
                            <div class="content-part">
                               
                            
                                  
                              
                                <div class="images">
                                	<div class="img">
                                		<img src="{{ url('frontEnd/assets/images/Slide12.PNG')}}" alt="">
                                	</div>
                                		
                                </div> 
                                
                            </div>
                        </div>
                        <div class="courses-item">
                            
                            <div class="content-part">
                               
                            
                                  
                              
                                <div class="images">
                                	<div class="img">
                                		<img src="{{ url('frontEnd/assets/images/Slide13.PNG')}}" alt="">
                                	</div>
                                		
                                </div> 
                                
                            </div>
                        </div>
                        <div class="courses-item">
                            
                            <div class="content-part">
                               
                            
                                  
                              
                                <div class="images">
                                	<div class="img">
                                		<img src="{{ url('frontEnd/assets/images/Slide14.PNG')}}" alt="">
                                	</div>
                                		
                                </div> 
                                
                            </div>
                        </div>
                     <div class="courses-item">
                            
                            <div class="content-part">
                               
                            
                                  
                              
                                <div class="images">
                                	<div class="img">
                                		<img src="{{ url('frontEnd/assets/images/Slide15.PNG')}}" alt="">
                                	</div>
                                		
                                </div> 
                                
                            </div>
                        </div>
                        <div class="courses-item">
                            
                            <div class="content-part">
                               
                            
                                  
                              
                                <div class="images">
                                	<div class="img">
                                		<img src="{{ url('frontEnd/assets/images/Slide16.PNG')}}" alt="">
                                	</div>
                                		
                                </div> 
                                
                            </div>
                        </div>
                        <div class="courses-item">
                            
                            <div class="content-part">
                               
                            
                                  
                              
                                <div class="images">
                                	<div class="img">
                                		<img src="{{ url('frontEnd/assets/images/Slide17.PNG')}}" alt="">
                                	</div>
                                		
                                </div> 
                                
                            </div>
                        </div>
                        <div class="courses-item">
                            
                            <div class="content-part">
                               
                            
                                  
                              
                                <div class="images">
                                	<div class="img">
                                		<img src="{{ url('frontEnd/assets/images/Slide18.PNG')}}" alt="">
                                	</div>
                                		
                                </div> 
                                
                            </div>
                        </div>
                        <div class="courses-item">
                            
                            <div class="content-part">
                               
                            
                                  
                              
                                <div class="images">
                                	<div class="img">
                                		<img src="{{ url('frontEnd/assets/images/Slide19.PNG')}}" alt="">
                                	</div>
                                		
                                </div> 
                                
                            </div>
                        </div>
                        <div class="courses-item">
                            
                            <div class="content-part">
                               
                            
                                  
                              
                                <div class="images">
                                	<div class="img">
                                		<img src="{{ url('frontEnd/assets/images/Slide20.PNG')}}" alt="">
                                	</div>
                                		
                                </div> 
                                
                            </div>
                        </div>
                        <div class="courses-item">
                            
                            <div class="content-part">
                               
                            
                                  
                              
                                <div class="images">
                                	<div class="img">
                                		<img src="{{ url('frontEnd/assets/images/Slide21.PNG')}}" alt="">
                                	</div>
                                		
                                </div> 
                                
                            </div>
                        </div>
                        <div class="courses-item">
                            
                            <div class="content-part">
                               
                            
                                  
                              
                                <div class="images">
                                	<div class="img">
                                		<img src="{{ url('frontEnd/assets/images/Slide22.PNG')}}" alt="">
                                	</div>
                                		
                                </div> 
                                
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <!-- Popular Courses Section End --> 
            </section>
            <!-- End Login Section --> 
</div> 
        <!-- Main content End --> 
           <script>
            var msg = '{{Session::get('alert')}}';
            var exist = '{{Session::has('alert')}}';
            if(exist){
              alert(msg);
            }
          </script>
@endsection