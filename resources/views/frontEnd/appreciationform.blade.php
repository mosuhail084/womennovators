@extends('frontEnd.layouts.layout') @section('frontEnd_content')
<!-- Main content Start -->
<div class="main-content">
      <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="/backEnd/image/banner2.jpeg" alt="covidcaregiver">
                </div>
                
            </div>
            <!-- Breadcrumbs End --> 
<section class="register-section pt-100 pb-100">
                <div class="container">
                    <div class="register-box">
                 <div>
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
    @if(session()->has('statuss'))
    <div class="alert alert-danger">
      @if(is_array(session()->get('statuss')))
      @foreach (session()->get('statuss') as $message)
          <p>{{ $message }}</p>
      @endforeach
      @else
          <p>{{ session()->get('success') }}</p>
      @endif
    </div>
@endif
    <div>
        <ul>
            @foreach ($errors->all() as $e)
            <li style="color:red;">{{$e}}</li>
            @endforeach
        </ul>
    </div></div>
                       
                         <div class="sec-title text-center mb-30">
                            <h2 class="title mb-10">Join The Squad</h2>
                            <div class="styled-form">  
                            <form method="post" action="{{route('appreciation.store')}}" enctype="multipart/form-data">
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
                                        <input type="text"  name="email" value="" placeholder="Enter Email Id" required>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- Form Group -->
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>Phone*</strong></h6>
                                        <input type="tel"  name="phone" value="" placeholder="Enter Phone Number" required>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                 <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>Photo</strong></h6>
                                <input class="form-control" name="photo"  placeholder="Choose Photo"  id="profile1" type="file" style="background:hidden;" >
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                 <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>City*</strong></h6>
                                        <input type="text"  name="city" value="" placeholder="Enter City" required>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- Form Group -->
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>State*</strong></h6>
                                        <input type="text"  name="state" value="" placeholder="Enter state" required>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                              
                                <!-- Form Group -->
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-4" style="color: #ff5421; text-align:left;"><strong>Address</strong></h6>
                                        <input type="text"  name="address" value="" placeholder="Enter Address" required>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                               <!-- Form Group -->
                               <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-4" style="color: #ff5421; text-align:left;"><strong>Reffered by*</strong></h6>
                                        <input type="text"  name="nominated_by" value="" placeholder="Reffered by" required >
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- Form Group -->
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-6" style="color: #ff5421; text-align:left;"><strong>Reffered Person Email*</strong></h6>
                                        <input type="text"  name="email_id" value="" placeholder="Enter Reffered Person Email" required >
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
 <!-- Form Group -->
                                <div class="form-group mb-25">
                                <h6 class="form-group col-lg-6" style="color: #ff5421; text-align:left; font-size:20px;"><strong>Category*</strong></h6>
                                <div class="row">
                                    <div class="col-md-10"> 
                                    <h6  class="form-check-label" for="chkPassport" style="color: #ff5421; margin-right:100px;">
                                Medical Supplies (Injections, Medicines, Oxygen etc)
                </h6>
                                    </div>
                                    <div class="col-md-2"> 
                                    <input class="form-check-input" type="checkbox" name="category[]" value="1" id="defaultCheck1" style="text-align:left; height:80%">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10"> 
                                    <h6  class="form-check-label" for="chkPassport" style="color: #ff5421; margin-right:73%;">
                                    Hospital Beds
                </h6>
                                    </div>
                                    <div class="col-md-2"> 
                                    <input class="form-check-input" type="checkbox" name="category[]" value="2" id="defaultCheck1" style="text-align:left; height:80%">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10"> 
                                    <h6  class="form-check-label" for="chkPassport" style="color: #ff5421; margin-right:63%;">
                                    Doctor Consultations
                </h6>
                                    </div>
                                    <div class="col-md-2"> 
                                    <input class="form-check-input" type="checkbox" name="category[]" value="3" id="defaultCheck1" style="text-align:left; height:80%">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10"> 
                                    <h6  class="form-check-label" for="chkPassport" style="color: #ff5421; margin-right:59%;">
                                    Food and Water Service
                </h6>
                                    </div>
                                    <div class="col-md-2"> 
                                    <input class="form-check-input" type="checkbox" name="category[]" value="4" id="defaultCheck1" style="text-align:left; height:80%">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10"> 
                                    <h6  class="form-check-label" for="chkPassport" style="color: #ff5421; margin-right:64%;">
                                    Proper Final Journey
                </h6>
                                    </div>
                                    <div class="col-md-2"> 
                                    <input class="form-check-input" type="checkbox" name="category[]" value="5" id="defaultCheck1" style="text-align:left; height:80%">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10"> 
                                    <h6  class="form-check-label" for="chkPassport" style="color: #ff5421; margin-right:60%;">
                                    Free Ambulance service
                </h6>
                                    </div>
                                    <div class="col-md-2"> 
                                    <input class="form-check-input" type="checkbox" name="category[]" value="6" id="chkPassport" style="text-align:left; height:80%">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10"> 
                                    <h6  class="form-check-label" for="chkPassport" style="color: #ff5421; margin-right:48%;">
                                    Diet chart for pre and post covid 
                </h6>
                                    </div>
                                    <div class="col-md-2"> 
                                    <input class="form-check-input" type="checkbox" name="category[]" value="7" id="chkPassport" style="text-align:left; height:80%">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10"> 
                                    <h6  class="form-check-label" for="chkPassport" style="color: #ff5421; margin-left:7px; ">
                                    Free E rickshaw services for covid patient and families with delivery of essential and cooked food.
                </h6>
                                    </div>
                                    <div class="col-md-2"> 
                                    <input class="form-check-input" type="checkbox" name="category[]" value="8" id="chkPassport" style="text-align:left; height:55%">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10"> 
                                    <h6  class="form-check-label" for="chkPassport" style="color: #ff5421; margin-right:112px;">
                                    Meal to the patient in home isolation or quarantine
                </h6>
                                    </div>
                                    <div class="col-md-2"> 
                                    <input class="form-check-input" type="checkbox" name="category[]" value="9" id="chkPassport"  style="text-align:left; height:80%">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10"> 
                                    <h6  class="form-check-label" for="chkPassport" style="color: #ff5421; margin-right:70%;">
                                    Covid councelling
                </h6>
                                    </div>
                                    <div class="col-md-2"> 
                                    <input class="form-check-input" type="checkbox" name="category[]" value="10" id="chkPassport"  style="text-align:left; height:80%">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10"> 
                                    <h6  class="form-check-label" for="chkPassport" style="color: #ff5421;  margin-right:83%;">
                                    Others... 
                </h6>
                                    </div>
                                    <div class="col-md-2"> 
                                    <input class="form-check-input" type="checkbox" name="comment" value="11" id="chkPassport" onclick="ShowHideDiv(this)" style="text-align:left; height:80%">
                                    </div>
                                </div>
                            @error('challenge')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        <div style="display: none;" class="form-group col-lg-12 mb-25" id="dvPassport">
                            <h6 style="color: #ff5421; text-align:left;"><strong>Comment</strong></h6>
                            <textarea  type="text" row="4" name="comment" class="form-control" placeholder="Enter Comment">
</textarea>
                        </div>
                                @error('phone')
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
 <div class="rs-newsletter style1 orange-color mb--90 sm-mb-0 sm-pb-70">
            <div class="container">
                <div class="newsletter-wrap">
                    <div class="row y-middle">
                        <div class="col-lg-6 col-md-12 md-mb-30">
                           <div class="content-part">
                               <div class="sec-title">
                                   <div class="title-icon md-mb-15">
                                     <!--  <img src="assets/images/newsletter.png" alt="images">-->
                                   </div>
                                   <h2 class="title mb-0 white-color">Contact Us</h2>
                               </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-12"  style="text-align: right">
                            
                                <ul class="address-widget">
                                    
                                    <li style="margin-right: 80px;">
                                        <i class="flaticon-call title mb-5 white-color "></i>
                                        
                                           <a class="title mb-0 white-color" href="tel:(+91) 98730 37000">(+91)  98730 37000 </a>
                                          
                                    </li>
                                  
                                    <li>
                                        <i class="flaticon-email title mb-5 white-color"></i>
                                        
                                            <a class="title mb-0 white-color" href="mailto:parvinder@covidcaregiver.org">parvinder@covidcaregiver.org</a>
                                          
                                    </li>
                                </ul>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
       
@endsection
       <script type="text/javascript">
    function ShowHideDiv(chkPassport) {
        var dvPassport = document.getElementById("dvPassport");
        dvPassport.style.display = chkPassport.checked ? "block" : "none";
    }
</script>