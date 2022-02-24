
@extends('frontEnd.layout.layout') @section('frontend_content')
	<!-- Main content Start -->
    <div class="main-content">
<section class="register-section pb-100" style="padding-top:50px;">
                <div class="container">
                    <div class="register-box">
                        
                         <div class="sec-title text-center mb-30">
                            <h2 class="title mb-10">Checkout Form</h2>
                        </div> 
                        
                        <!-- Form -->
                        <div class="styled-form">
                            <div id="form-messages"></div>
                           <form method="post" action="{{ route('form.pay')}}"  enctype="multipart/form-data">  
                            @csrf                             
                                <div class="row clearfix">                                    
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12 mb-25">
                                        <!-- <label  class="form-group col-md-2 mb-25" style="color: #112958;  "><strong>Name<span class="tx-danger">*</span></strong></label> -->
                                               <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>Amount</strong></h6>
                                            {{--  @if($amu ??'' != null)--}} 
                                               
                                               <input type="text"  name="amount"  value="{{$amu ??''}}" placeholder="Enter Amount" required>
                                               @error('name')
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                           </span>
                                           @enderror
                                            {{-- @endif--}} 
                                        </div>
                                   
                                    
                                    
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12 mb-25">
                                        <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>Name</strong></h6>
                                        <input type="text" id="Name" name="name" value="" placeholder="Enter Name" required>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </div>
                                    
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12">
                                        <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>Email</strong></h6>
                                        <input type="email" id="email" name="email" value="" placeholder="Email address " required>
                                        <!-- <input type="text" hidden name="amount" value="100" > -->
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </div>
                                    
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12">
                                        <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>Phone </strong></h6>
                                        <input type="tel" id="user" name="phone" value="" placeholder="Phone Number" required>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </div>    
                                      <div class="form-group col-lg-12">
                                        <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>Pincode</strong></h6>
                                        <input type="text" id="puser"  name="pincode" value="" placeholder="Enter Pincode" required>
                                       <!-- <input type="text" name="Pincode" id="Pincode" readonly value="" placeholder="Enter Pincode" required>-->
                                        @error('pincode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </div>  
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12">
                                        <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>Address</strong></h6>
                                        <input type="text" id="puser" style="height: 120px;" name="address" value="" placeholder="Shipping Address" required>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </div>    
                                   <!-- Form Group -->
                                   <div class="form-group col-lg-12">
                                    <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>Address</strong></h6>
                                    <input type="hidden" id="puser" style="height: 120px;" name="prod_id" value="{{$id}}">
                                    @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>  
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="readon register-btn"><span class="txt">Payment</span></button>
                                    </div>
                                    
                        
                                    
                                </div>
                                
                            </form> </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Login Section --> 
            </div> 
        <!-- Main content End -->     
@endsection

<script>
    document.addEventListener('contextmenu', function(e) {
  e.preventDefault();
});
</script>