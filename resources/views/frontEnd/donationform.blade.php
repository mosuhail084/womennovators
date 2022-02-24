@extends('frontEnd.layouts.layout') @section('frontEnd_content')
<!-- Main content Start -->
<div class="main-content">
            <!-- Blog Section Start -->
            <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70 bg2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                 <div class="col-md-6 col-sm-12 mb-70">
                                 <div class="single-product-image">
                                <div class="images-single">
                                    <img src="{{ url('frontEnd/assets/images/donate.jpg')}}" alt="Donate" style="margin-top:20px; height:400px;">
                                </div>
                            </div>
                                 </div>
                            <div class="col-md-6">
                              <div class="styled-form">  
                                    <form method="post" action="{{ route('donate.form')}}" enctype="multipart/form-data">
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
                                
                                                  <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>Name</strong></h6>
                                                   <input type="text"  name="name" value="" placeholder="Enter Name" required>
                                                   @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                     </span>
                                                     @enderror
                                                 </div>
                                             <!-- Form Group -->
                                                 <div class="form-group col-lg-12 mb-25">
                                                    <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>Email</strong></h6>
                                                   <input type="email"  name="email" value="" placeholder="Enter email" required>
                                                    @error('name')
                                                     <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                     </span>
                                                     @enderror
                                                 </div>
                                                <!-- Form Group -->
                                                     <div class="form-group col-lg-12 mb-25">
                                                        <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>phone</strong></h6>
                                                        <input type="tel"  name="phone" value="" placeholder="Enter phone Number" required>
                                                          @error('name')
                                                          <span class="invalid-feedback" role="alert">
                                                           <strong>{{ $message }}</strong>
                                                          </span>
                                                         @enderror
                                                     </div>
                                                     <!-- Form Group -->
                                                     <div class="form-group col-lg-12 mb-25">
                                                        <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>Amount</strong></h6>
                                                        <input type="number"  name="amount" value="" placeholder="Enter Amount" required>
                                                          @error('name')
                                                          <span class="invalid-feedback" role="alert">
                                                           <strong>{{ $message }}</strong>
                                                          </span>
                                                         @enderror
                                                     </div>
                                                         <div class="form-group col-lg-4 col-md-4 col-sm-4 text-center">
                                                          <button type="submit" class="readon register-btn"><span class="txt">Donate</span></button>
                                                         </div>
                                             </div>
                                     </form>       
                                 </div>
                             </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <!-- Blog Section End -->  
            <!-- Newsletter section start -->
                        <div class="rs-newsletter style6 bg4 pt-100 pb-90 md-pt-70 md-pb-60">
                <div class="container">
                    <div class="newsletter-wrap">
                    <div class="row ">
                <div class="col-md-6">
                                  <div>
                                          <a href="#"><img style="margin-left:20px;"  src="{{ url('frontEnd/assets/images/upi.jpeg')}}" alt="" height="350px" width="350px"></a>
                                    
                                </div>
                            </div>
                         <div class="col-md-6">
                    
                      <p style=" width:100%; padding:5px 10px 7px 53px; margin-left: 2%; margin-bottom: 5px; font-weight: 600; border-radius:3px; background-color:rgba(0, 0, 0, 0.933); color: white; cursor: pointer; border:1px solid ; rgba(255,255,255,0.3); box-shadow: 1px 1px 5px rgba(0,0,0,0.3);">Donation Through Bank (NEFT/ RTGS)</p>
        
                     <div style="margin-left:5%; padding:6px 0px 6px 14px;"> 
                 <ul>    
                     <li style="padding:10px 0px 6px 18px;"><span>Bank Name -</span> <span><b> AXIS BANK LTD</b></span></li>
                 <li style="padding:6px 0px 6px 18px;"><span>Account Name -</span> <span><b> GVRIKSH</b></span></li>
                <li style="padding:6px 0px 6px 18px;"><span>Account No -</span>  <span><b>921010008132083</b></span></li>
             <li style="padding:6px 0px 6px 18px;"><span>Branch -</span>  <span><b>ASAF ALI ROAD, NEW DELHI-110002</b></span></li>
             <li style="padding:6px 0px 6px 18px;"><span>IFSC Code -</span>  <span><b>UTIB0003330</b></span></li>
             <li style="padding:6px 0px 6px 18px;"><span>MICR Code -</span>  <span><b>110211211</b></span></li>  
          </ul>  
          <!-- <div style="margin-top:5%;">         
          <a href="{{ url('form')}}" style="background:#21a7d0; color:#ffffff; padding:17px 40px; border-radius:5px 5px 5px 5px; margin-left:20%;" >Donate Now</a> </div>             
                                        </div> -->
                                      </div>
                                  </div> 
                                               
                    </div>
                </div>
            </div>
            <!-- Newsletter section end -->
</div> 
        <!-- Main content End --> 
@endsection