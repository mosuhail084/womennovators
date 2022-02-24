@extends('frontEnd.layout.layout')
@section('frontend_content')
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
        <meta name="Author" content="Spruko Technologies Private Limited">
        <meta name="Keywords"
            content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4">
        <!-- Title -->
        <title>WE-MARK</title>

        <!-- stylesheet start -->
        @include('backEnd.layouts.includes.stylesheet')
        <!-- stylesheet end -->
        
        <style>
            .form-wizard {
    border: 1px solid #3c3f70;
    border-style: dashed;
    padding: 25px;
    margin-top: 40px;
                    box-shadow: 1px 1px 10px #00000012;
}
            .check-aligne .form-check {
    display: inline-block;
    padding-right: 11px;
    line-height: 23px;
}
            .form-wizard .wizard-fieldset {
  display: none;
}
.form-wizard .wizard-fieldset.show {
  display: block;
}
.form-wizard .wizard-form-error {
      color: #d70b0b;
    display: none;
    background-color: #d70b0b;
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0px;
    height: 2px;
    width: 100%;
    padding-top: 2px;
    font-size: 11px;
}
            .form-wizard-next-btn {
    background-color: #2b2f64;
    color: #fff;
    padding: 7px 42px;
    border-radius: 4px;
    font-size: 16px;
}
            .form-wizard-previous-btn.float-left {
    background-color: #f58a36;
    color: #fff;
    padding: 7px 28px;
    border-radius: 4px;
    font-size: 16px;
}
            .form-group {
    position: relative;
}
            .main-signin-header .form-wizard .form-control {
    color: #14112d;
    font-weight: 500;
    border-width: 1px;
    border-color: #e3e3e3;
}
    .form-wizard .form-control {
    height: 46px;
    border-radius: 0;
}
.form-wizard .form-group {
    margin-bottom: 20px;
}
        </style>
    </head>

    <body style="background-color: white; font-size:0.975rem">
        <br>
                        
         <a href="#">
             <img style="margin-top: 0px;  margin-bottom:0px;"
                src="{{ url('frontEnd/images/seller.jpeg') }}" alt="logo" height="600px" width="1500px" / style="margin-top: -27px;"></a><br/><br/><br/>
                
                @if(session()->has('status'))
                        <div class="alert alert-success">
                            <h3>{{ session()->get('status') }}</h3>
                        </div>
                        @endif
                    
        <!-- main-signin-wrapper -->
        <div class="my-auto page page-h">
            <div class="main-signin-wrapper row">

                <div class="col-sm-12 d-md-flex " style=" "><!--main-card-signin-->

                    <div class="container">
                        
                        <div class="main-signin-header">
                            <h1 style="text-align: center;">Be a part of Biggest Women Network, Earn by Working From Your Home</h1>
                            <div class="form-wizard">
                            <form id="register" method="post" action="" enctype="multipart/form-data">
                                @csrf

                                <div>
                                    <ul>
                                        @foreach ($errors->all() as $e)
                                        <li style="color:red;">{{$e}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                
                            <fieldset class="wizard-fieldset show">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label style="color: #ff5421;"><strong>Name <span class="tx-danger">*</span></strong></label>
                                            <input type="text" name="name" class="form-control wizard-required" placeholder="Enter Name" required>
                                            <div class="wizard-form-error ">This field is required</div>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label style="    color: #ff5421; "><strong>Country<span class="tx-danger">*</span></strong></label>
                                             <select class="form-control wizard-required" name="country" id="category"  >
                                    <option value="" >Please select one</option>
                                    @foreach($country as $stateData)
                                    <option value="{{$stateData->id}}" @if(!empty($listing->
                                    state_id) && $listing->
                                    state_id==$stateData->id) selected @endif>
                                    {{ $stateData->name }}</option>
                                    @endforeach
                                </select>
                                            <div class="wizard-form-error ">This field is required</div>
                                             @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                    <label style="color: #ff5421; "><strong>State<span class="tx-danger">*</span></strong></label>
                                   <select name="state" class="form-control wizard-required" id="subcategory_id">
											</select>
                                            <div class="wizard-form-error ">This field is required</div>
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label style="    color: #ff5421; ;"><strong>City<span class="tx-danger">*</span></strong></label>
                                            <input type="text" name="city" class="form-control wizard-required" placeholder="Enter City" required>
                                            <div class="wizard-form-error ">This field is required</div>

                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                    <label style="    color: #ff5421; "><strong>Address<span class="tx-danger">*</span></strong></label>
                                    <input type="text" name="address" class="form-control wizard-required"
                                        placeholder="Enter Address" required>
                                            <div class="wizard-form-error ">This field is required</div>

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                    <label style="    color: #ff5421; "><strong>Pincode<span class="tx-danger">*</span></strong></label>
                                    <input type="number" name="pincode" class="form-control wizard-required"
                                        placeholder="Enter Pincode" required>
                                            <div class="wizard-form-error ">This field is required</div>

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                                
                                
                                <div class="form-group clearfix">
								<a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
							</div>
                            </fieldset>
                            
                            <fieldset class="wizard-fieldset">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label style="    color:#ff5421; "><strong>Email<span class="tx-danger">*</span></strong></label>
                                            <input type="email" name="email" class="form-control wizard-required"
                                                placeholder="Enter Email id" required>
                                            <div class="wizard-form-error ">This field is required</div>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>  
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label style="    color: #ff5421; "><strong>Phone<span class="tx-danger">*</span></strong></label>
                                            <input type="tel" name="phone" class="form-control wizard-required" placeholder="Enter Phone" pattern="((\+*)((0[ -]+)*|(91 )*)(\d{12}+|\d{10}+))|\d{5}([- ]*)\d{6}" required>
                                            <div class="wizard-form-error ">This field is required</div>

                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>                                 
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label style="color: #ff5421; "><strong>Age<span class="tx-danger">*</span></strong></label>
                                            <select class="18-100 wizard-required" name="age" required></select>
                                            <div class="wizard-form-error ">This field is required</div>
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label style="color: #ff5421; "><strong>I am a ?<span class="tx-danger">*</span></strong></label><br/>
                                            <input type="radio" class="wizard-required" name="am" id="chkNo"  value="Homemaker" onclick="HideData()" >
                                            <div class="wizard-form-error ">This field is required</div>
                                            <label class="form-check-label" for="chkNo"><b
                                                    style=""><strong>Homemaker</strong></b></label>

                                            <input type="radio" name="am" id="chkYes"  value="Professional" onclick="ShowHideDiv()">
                                            <label class="form-check-label" for="chkYes"><b
                                                    style=""><strong>Professional</strong></b></label>
                                            <input type="radio" name="am"  id="chkYes1"  value="BusinessOwner" onclick="ShowHideDiv1()">
                                            <label class="form-check-label" for="chkYes"><b
                                                    style=""><strong>Business Owner</strong></b></label>
                                            <input type="radio" name="am" id="chkYes2"  value="Student" onclick="ShowHideDiv2()">
                                            <label class="form-check-label" for="chkYes"><b
                                                    style=""><strong>Student</strong></b></label>


                                            <div id="student" style="display: none;" class="form-group">
                                            <label style=""><strong>name of the Institution</strong></label>
                                            <textarea type="text" rows="3" name="student" class="form-control" id="txtPassportNumber" 
                                            placeholder="Enter Comment"></textarea>

                          
                                            </div>
                                              <div id="businessowner" style="display: none;" class="form-group">
                                                        <label style=""><strong> Name of your Business </strong></label>
                                                        <textarea type="text" rows="3" name="business" class="form-control" id="txtPassportNumber" 
                                                            placeholder="Enter Comment"></textarea>

                                              </div>
                                              <div id="professional" style="display: none;" class="form-group">
                                                        <label style=""><strong>please  write your profession</strong></label>
                                                        <textarea type="text" rows="3" name="professional" class="form-control" id="txtPassportNumber" 
                                                            placeholder="Enter Comment"></textarea>

                                              </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label style="color:#ff5421; "><strong>How did you hear about us?<span class="tx-danger">*</span></strong></label><br/>
                                            <input type="radio" class="wizard-required" name="hear" id="cYes"  value="Influencer"  onclick="ShowHideDivv()">
                                            <div class="wizard-form-error ">This field is required</div>
                                                <label class="form-check-label" for="chYes"><b
                                                        style=""><strong>Influencer</strong></b></label>

                                                <input type="radio" name="hear" id="cYes1"  value="Online" onclick="ShowHideDivv1()" >
                                                <label class="form-check-label" for="chYes"><b
                                                        style=""><strong>Online</strong></b></label>
                                                <input type="radio" name="hear" id="cYes2"  value="Friends and Family" onclick="ShowHideDivv2()" >
                                                <label class="form-check-label" for="chYes"><b
                                            style=""><strong>Friends and Family</strong></b></label>  
                                 
                                        </div>
                                        <div id="Influencer" style="display: none;" class="form-group">
                                            <label style=""><strong>please write the name</strong></label>
                                            <textarea type="text" rows="3" name="influencer" class="form-control" id="txtPassportNumber1" 
                                        placeholder="Enter Comment"></textarea>

                          
                                        </div>
                                          <div id="Online" style="display: none;" class="form-group">
                                                    <label style=""><strong> FB, Insta ?? </strong></label>
                                                    <textarea type="text" rows="3" name="online" class="form-control" id="txtPassportNumber1" 
                                                        placeholder="Enter Comment"></textarea>

                                          </div>
                                          <div id="Friends and Family" style="display: none;" class="form-group">
                                            <label style="color: white;"><strong>Please Write the name</strong></label>
                                            <textarea type="text" rows="3" name="family" class="form-control" id="txtPassportNumber1" 
                                                placeholder="Enter Comment"></textarea>

                          
                                            </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label style="color: #ff5421; "><strong>Why are you interested in earn from home oppurtunity?<span class="tx-danger">*</span></strong></label>
                                            <select id="exampleFormControlSelect3" class="form-control wizard-required" name="earn" required>
                                                <option selected>--</option>
                                                <option value="Need Additional revenue stream">Need Additional revenue stream</option>
                                                <option value="Want to be a busines women">Want to be a busines women</option>
                                                <option value="other">Other</option>
                                            </select>
                                            <div class="wizard-form-error ">This field is required</div>
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div id='designationn' style="display: none;" class="form-group">
                                            <label style=""><strong>Comment</strong></label>
                                            <textarea type="text" rows="3" name="comment" class="form-control"
                                                placeholder="Enter Comment"></textarea>

                                        </div>                                            
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label style="    color: #ff5421; "><strong>How efficient are you in using Whatsapp, FB, Insta ?<span class="tx-danger">*</span></strong></label><br/>
                                            <input type="radio" class="wizard-required" name="social" id="inlineRadio2" value="Expert"  required>
                                            <div class="wizard-form-error ">This field is required</div>
                                            <label class="form-check-label" for="inlineRadio2"><b
                                                    style=""><strong>Expert</strong></b></label>

                                            <input type="radio" name="social" id="inlineRadio2" value="Good">
                                            <label class="form-check-label" for="inlineRadio2"><b
                                                    style=""><strong>Good</strong></b></label>
                                                    <input type="radio" name="social" id="inlineRadio2" value="Average">
                                            <label class="form-check-label" for="inlineRadio2"><b
                                                    style=""><strong>Average</strong></b></label>
                                                    <input type="radio" name="social" id="inlineRadio2" value="Fair">
                                            <label class="form-check-label" for="inlineRadio2"><b
                                                    style=""><strong>Fair</strong></b></label>
                                                    <input type="radio" name="social" id="inlineRadio2" value="Need training">
                                            <label class="form-check-label" for="inlineRadio2"><b
                                                    style=""><strong>Need training</strong></b></label>                               
                                        </div>
                                    </div>   
                                    <div class="col-sm-6">
                                        <div>
                                          <label style="    color: #ff5421;"><strong>Do you have a bank account on your name?<span class="tx-danger">*</span></strong></label>
                                          <input type="radio" name="account" value="Yes" onclick="show2();" />
                                            
                                           <b style=""><strong>Yes</strong></b>
                                          <input type="radio" name="account" value="No" onclick="show1();"  />
                                            <b style=""><strong>No</strong></b>

                                          <div id="div1" style="display: none;">
                                          <input type="radio" value="Saving" name="type">
                                           <b style=""><strong>Saving</strong></b>
                                           <input type="radio" value="Current" name="type">
                                            <b  style=""><strong>Current</strong></b>
                                            </div>
                                          </div>
                                    </div>
                                </div>   
                                
                                 <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group"> 
                                          <label style="    color: #ff5421; "><strong>I have a<span class="tx-danger">*</span></strong></label>
                                            <div class="check-aligne">
                                          <div class="form-check">
                                         <input class="form-check-input wizard-required" type="checkbox" multiple name="have[]" value="Pan card">
                                              <div class="wizard-form-error ">This field is required</div>
                                          <label style="" class="form-check-label" for="defaultCheck1">
                                          Pan Card
                                          </label>
                                          </div>
                                          <div class="form-check">
                                         <input class="form-check-input" type="checkbox" multiple name="have[]" value="Adhar card">
                                          <label style="" class="form-check-label" for="defaultCheck1">
                                          Adhar Card
                                          </label>
                                          </div>
                                          <div class="form-check">
                                         <input class="form-check-input" type="checkbox" multiple name="have[]" value="License">
                                          <label style="" class="form-check-label" for="defaultCheck1">
                                          License
                                          </label>
                                          </div>
                                          <div class="form-check">
                                         <input class="form-check-input" type="checkbox" multiple name="have[]" value="Voters card">
                                          <label style="" class="form-check-label" for="defaultCheck1">
                                          Voters card
                                          </label>
                                          </div>
                                          <div class="form-check">
                         <input class="form-check-input" type="checkbox" multiple name="have[]" value="Passport">
                          <label style="" class="form-check-label" for="defaultCheck1">
                          Passport
                          </label>
                          </div>
                                            </div>
                                        </div>
                                   </div>
                                   <div class="col-sm-6">
                                       <div class="form-group">
                                    <label style="    color: #ff5421; "><strong>City you will sell the product in<span class="tx-danger">*</span></strong></label>
                                    <input type="text" name="sell" class="form-control wizard-required" placeholder="Enter City" required>
                                           <div class="wizard-form-error ">This field is required</div>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                   </div>
                                </div>   
                                
                                
                                <div class="form-group clearfix">
								<a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
								<a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
							</div>
                            </fieldset>
                            <fieldset class="wizard-fieldset">
                                                             
                                                           
                                 <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                               <label for="exampleFormControlSelect1" style="color: #fff; "><strong>Products you are Interested in Reselling<span class="tx-danger">*</span></strong></label>
                               <select class="form-control select2 wizard-required" multiple="multiple"
                                    onchange="console.log($(this).children(':selected').length)"  name="product[]" required>
                               <option>--</option>
                               <option value="Appliances">Appliances</option>
                               <option value="Baby">Baby</option>
                               <option value="Beauty">Beauty</option>
                               <option value="Books">Books</option>
                               <option value="Clothing & Accessories">Clothing & Accessories</option>
                               <option value="collections">Collectibles</option>
                               <option value="Computer & Accessories">Computer & Accessories</option>
                               <option value="Electronics">Electronics</option>
                               <option value="Furniture">Furniture</option>
                               <option value="Garden & Outdoors">Garden & Outdoors</option>
                               <option value="Grocery & Gourmet Foods">Grocery & Gourmet Foods</option>
                               <option value="Health & Personal Care">Health & Personal Care</option>
                               <option value="Home & Kitchen">Home & Kitchen</option>
                               <option value="Jewellery">Jewellery</option>
                               <option value="Kindle Store">Kindle Store</option>
                               <option value="Luggage & Bags">Luggage & Bags</option>
                               <option value="Luxury Beauty"> Luxury Beauty</option>
                               <option value="Musical Instruments"> Musical Instruments</option>
                               <option value="Office Products">Office Products</option>
                               <option value="Pet Supplies">Pet Supplies </option>
                               <option value="Shoes & Handbags">Shoes & Handbags</option>
                               <option value="Software">Software</option>
                               <option value="Sports, Fitness,& Outdoors">Sports, Fitness,& Outdoors</option>
                               <option value="Toys & Games">Toys & Games</option>
                              </select>
                                            <div class="wizard-form-error ">This field is required</div>
                              </div>
                                     </div>
                                     <div class="col-sm-6">
                                        <div class="form-group">
                                    <label style=" color: #fff;"><strong>Any past experience in Reselling<span class="tx-danger">*</span></strong></label>
                                    <input type="number" name="experience" class="form-control wizard-required" id="phone_number" placeholder="Enter Experience"  required>
                                            <div class="wizard-form-error ">This field is required</div>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                     </div>
                                </div>   
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                <label style=" color: #ff5421; "><strong>Medium through which you plan to resell<span class="tx-danger">*</span></strong></label><br/>
                                    <input type="radio" name="medium" id="inlineRadio2" value="Online " >
                                    <label class="form-check-label" for="inlineRadio2"><b
                                            style="">Online (Website, Telephone or both)</b></label>

                                    <input type="radio" name="medium" id="inlineRadio2" value="Offline">
                                    <label class="form-check-label" for="inlineRadio2"><b
                                            style="">Offline (Retail)</b></label>

                                </div>
                                     </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                <label style=" color: #ff5421; "><strong>Mode of Payment??<span class="tx-danger">*</span></strong></label><br/>
                                    <input type="radio" name="payment" id="online"value="Online " >
                                            
                                    <label class="form-check-label" for="inlineRadio2"><b
                                            style="">Online transaction</b></label>

                                    <input type="radio" name="payment" id="cheque" value="cheque">
                                    <label class="form-check-label" for="inlineRadio2"><b
                                            style="">Cheque</b></label>

                                </div>
                                     </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                    <label style="    color: #ff5421; "><strong>Why do you think these products you will be able to sell in your area/ city?<span class="tx-danger">*</span></strong></label>
                                    <input type="text" name="think" class="form-control wizard-required" placeholder="Enter Why do you think" required>
                                            <div class="wizard-form-error ">This field is required</div>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                     </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                    <label style="    color: #ff5421;"><strong>Any Suggestions?<span class="tx-danger">*</span></strong></label>
                                    <textarea type="text" rows="3" name="suggestions" class="form-control wizard-required" placeholder="Enter Suggestions" required> 
                                        </textarea>
                                            <div class="wizard-form-error ">This field is required</div>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                     </div>
                                </div>
                                
                              
                          

                          
                           
                            
                            
                            
                             
                             
                             
                             
                                
                                
                                <div class="form-group clearfix">
								<a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
								<!--<button type="submit" name="" class="form-wizard-submit float-right">Submit </button>-->
                                    <button style="background:#FF5421;" type="submit" class="btn btn-main-primary  float-right" action="{{url('/reseller')}}">Submit</button>
								
							</div>
                        </fieldset>
                                </form>
                            </div>
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
    <!-- /main-signin-wrapper -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>


    <!-- js bar start-->
    @include('backEnd.layouts.includes.js')
    <!-- js bar end -->

    </body>
    <script>
    $(function(){
    var $select = $(".18-100");
    for (i=18;i<=100;i++){
        $select.append($('<option></option>').val(i).html(i))
    }
});
    </script>
<script type="text/javascript">
    function ShowHideDiv() {
     

        var chkYes = document.getElementById("chkYes").value;
       
       
     
        if ( chkYes== 'Professional') {
            debugger;
            document.getElementById("professional").style.display = "block";
document.getElementById('student').style.display = 'none';
document.getElementById('businessowner').style.display = 'none';
                }
               
                 

    }
function ShowHideDiv1() {
     

        var chkYes = document.getElementById("chkYes1").value;
       
       
     
        if  ( chkYes== 'BusinessOwner') {
                    debugger;
                 document.getElementById('businessowner').style.display = 'block';
document.getElementById('student').style.display = 'none';
document.getElementById('professional').style.display = 'none';
             }
           

    }
function ShowHideDiv2() {
     

        var chkYes = document.getElementById("chkYes2").value;
       
       
     
        if ( chkYes== 'Student') {
           
            document.getElementById("student").style.display = "block";
document.getElementById('businessowner').style.display = 'none';
document.getElementById('professional').style.display = 'none';
                }
               
    }
   function HideData(){
    document.getElementById("student").style.display = 'none';
document.getElementById('businessowner').style.display = 'none';
document.getElementById('professional').style.display = 'none';
   } 
</script>



<script>
        $(document).ready(function () {
            $('#exampleFormControlSelect3').on('change', function () {
                if (this.value == 'other') {
                    $("#designationn").show();

                } else {
                    $("#designationn").hide();
                }
            });
        });

    </script>

<script>
function show1(){
  document.getElementById('div1').style.display ='none';
}
function show2(){
  document.getElementById('div1').style.display = 'block';
}
</script>
<script>
        $(document).ready(function () {
            $('#exampleFormControlSelect3').on('change', function () {
                if (this.value == 'other') {
                    $("#designationn").show();

                } else {
                    $("#designationn").hide();
                }
            });
        });

</script>

<script type="text/javascript">
    function ShowHideDivv() {
     

        var chYes = document.getElementById("cYes").value;
       
       
     
        if ( chYes== 'Influencer') {
            debugger;
            document.getElementById("Influencer").style.display = "block";
document.getElementById('Friends and Family').style.display = 'none';
document.getElementById('Online').style.display = 'none';
                }
               
                 

    }
function ShowHideDivv1() {
     

        var chYes = document.getElementById("cYes1").value;
       
       
     
        if  ( chYes== 'Online') {
                    debugger;
                 document.getElementById('Online').style.display = 'block';
document.getElementById('Friends and Family').style.display = 'none';
document.getElementById('Influencer').style.display = 'none';
             }
           

    }
function ShowHideDivv2() {
     

        var chYes = document.getElementById("cYes2").value;
       
       
     
        if ( chYes== 'Friends and Family') {
           
            document.getElementById("Friends and Family").style.display = "block";
document.getElementById('Online').style.display = 'none';
document.getElementById('Influencer').style.display = 'none';
                }
               
    }
</script>
        
        
        
         <script>
           jQuery(document).ready(function() {
	// click on next button
	jQuery('.form-wizard-next-btn').click(function() {
		var parentFieldset = jQuery(this).parents('.wizard-fieldset');
		var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
		var next = jQuery(this);
		var nextWizardStep = true;
		parentFieldset.find('.wizard-required').each(function(){
			var thisValue = jQuery(this).val();

			if( thisValue == "") {
				jQuery(this).siblings(".wizard-form-error").slideDown();
				nextWizardStep = false;
			}
			else {
				jQuery(this).siblings(".wizard-form-error").slideUp();
			}
		});
		if( nextWizardStep) {
			next.parents('.wizard-fieldset').removeClass("show","400");
			currentActiveStep.removeClass('active').addClass('activated').next().addClass('active',"400");
			next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show","400");
			jQuery(document).find('.wizard-fieldset').each(function(){
				if(jQuery(this).hasClass('show')){
					var formAtrr = jQuery(this).attr('data-tab-content');
					jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
						if(jQuery(this).attr('data-attr') == formAtrr){
							jQuery(this).addClass('active');
							var innerWidth = jQuery(this).innerWidth();
							var position = jQuery(this).position();
							jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
						}else{
							jQuery(this).removeClass('active');
						}
					});
				}
			});
		}
	});
	//click on previous button
	jQuery('.form-wizard-previous-btn').click(function() {
		var counter = parseInt(jQuery(".wizard-counter").text());;
		var prev =jQuery(this);
		var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
		prev.parents('.wizard-fieldset').removeClass("show","400");
		prev.parents('.wizard-fieldset').prev('.wizard-fieldset').addClass("show","400");
		currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active',"400");
		jQuery(document).find('.wizard-fieldset').each(function(){
			if(jQuery(this).hasClass('show')){
				var formAtrr = jQuery(this).attr('data-tab-content');
				jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
					if(jQuery(this).attr('data-attr') == formAtrr){
						jQuery(this).addClass('active');
						var innerWidth = jQuery(this).innerWidth();
						var position = jQuery(this).position();
						jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
					}else{
						jQuery(this).removeClass('active');
					}
				});
			}
		});
	});
	//click on form submit button
	jQuery(document).on("click",".form-wizard .form-wizard-submit" , function(){
		var parentFieldset = jQuery(this).parents('.wizard-fieldset');
		var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
		parentFieldset.find('.wizard-required').each(function() {
			var thisValue = jQuery(this).val();
			if( thisValue == "" ) {
				jQuery(this).siblings(".wizard-form-error").slideDown();
			}
			else {
				jQuery(this).siblings(".wizard-form-error").slideUp();
			}
		});
	});
	// focus on input field check empty or not
	jQuery(".form-control").on('focus', function(){
		var tmpThis = jQuery(this).val();
		if(tmpThis == '' ) {
			jQuery(this).parent().addClass("focus-input");
		}
		else if(tmpThis !='' ){
			jQuery(this).parent().addClass("focus-input");
		}
	}).on('blur', function(){
		var tmpThis = jQuery(this).val();
		if(tmpThis == '' ) {
			jQuery(this).parent().removeClass("focus-input");
			jQuery(this).siblings('.wizard-form-error').slideDown("3000");
		}
		else if(tmpThis !='' ){
			jQuery(this).parent().addClass("focus-input");
			jQuery(this).siblings('.wizard-form-error').slideUp("3000");
		}
	});
});
       </script>
        
        
        
        
        <script>
    $(function(){
       $('#category').on('change',function(){
           var category_id =$(this).val();

        $.ajax({
            type: "GET",
            url: "{{ url('reseller') }}",
            data: "category_id="+category_id,
            success : function(res){
            
                $('#subcategory_id').html(res);

                
            },
            error : function(){

            },
        });
       });
       
    }); 
  
     
    </script>
        
        
        
        
        
        
<script>

        $(document).ready(function () {
            $('#exampleFormControlSelect3').on('change', function () {
                if (this.value == 'other') {
                    $("#designationn").show();

                } else {
                    $("#designationn").hide();
                }
            });
        });

   
</script>


</html>
<br/><br/><br/>
@endsection
