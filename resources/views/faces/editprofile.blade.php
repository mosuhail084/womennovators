
@extends('faces.layouts.layout') @section('admin_content')
<!-- container -->
<style>
 #contact-form .form-label {
    padding-top: 3px;
    line-height: 18px;
}
/*input#file {
    width: 0.1px;
    height: 0.1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
}*/
input#file+label {
    font-size: 15px;
    font-weight: 400;
    color: white;
    background-color: #b54a98;
    padding: 8px 19px;
    display: inline-block;
}
</style>
<style>.wizard-content-left {
  background-blend-mode: darken;
  background-color: rgba(0, 0, 0, 0.45);
  background-image: url("https://i.ibb.co/X292hJF/form-wizard-bg-2.jpg");
  background-position: center center;
  background-size: cover;
  height: 100vh;
  padding: 30px;
}
.wizard-content-left h1 {
  color: #ffffff;
  font-size: 38px;
  font-weight: 600;
  padding: 12px 20px;
  text-align: center;
}

.form-wizard {
  color: #888888;
  padding: 30px;
}
.form-wizard .wizard-form-radio {
  display: inline-block;
  margin-left: 5px;
  position: relative;
}
.form-wizard .wizard-form-radio input[type="radio"] {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  -o-appearance: none;
  appearance: none;
  background-color: #dddddd;
  height: 25px;
  width: 25px;
  display: inline-block;
  vertical-align: middle;
  border-radius: 50%;
  position: relative;
  cursor: pointer;
}
.form-wizard .wizard-form-radio input[type="radio"]:focus {
  outline: 0;
}
.form-wizard .wizard-form-radio input[type="radio"]:checked {
  background-color: #fb1647;
}
.form-wizard .wizard-form-radio input[type="radio"]:checked::before {
  content: "";
  position: absolute;
  width: 10px;
  height: 10px;
  display: inline-block;
  background-color: #ffffff;
  border-radius: 50%;
  left: 1px;
  right: 0;
  margin: 0 auto;
  top: 8px;
}
.form-wizard .wizard-form-radio input[type="radio"]:checked::after {
  content: "";
  display: inline-block;
  webkit-animation: click-radio-wave 0.65s;
  -moz-animation: click-radio-wave 0.65s;
  animation: click-radio-wave 0.65s;
  background: #000000;
  content: '';
  display: block;
  position: relative;
  z-index: 100;
  border-radius: 50%;
}
.form-wizard .wizard-form-radio input[type="radio"] ~ label {
  padding-left: 10px;
  cursor: pointer;
}
.form-wizard .form-wizard-header {
  text-align: center;
}
.form-wizard .form-wizard-next-btn, .form-wizard .form-wizard-previous-btn, .form-wizard .form-wizard-submit {
  background-color: #3858f9;
  color: #ffffff;
  display: inline-block;
  min-width: 100px;
  min-width: 120px;
  padding: 10px;
  text-align: center;
}
.wizard-fieldset h5 {
    font-size: 24px;
    color: #333;
}
.form-wizard .form-wizard-next-btn:hover, .form-wizard .form-wizard-next-btn:focus, .form-wizard .form-wizard-previous-btn:hover, .form-wizard .form-wizard-previous-btn:focus, .form-wizard .form-wizard-submit:hover, .form-wizard .form-wizard-submit:focus {
  color: #ffffff;
  opacity: 0.6;
  text-decoration: none;
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
.form-wizard .form-wizard-previous-btn {
  background-color: #9c8d9c;
}

.form-wizard .form-control:focus {
  box-shadow: none;
}
.form-wizard .form-group {
  position: relative;
  margin: 10px 0;
}
.form-wizard .wizard-form-text-label {
  position: absolute;
  left: 10px;
  top: 16px;
  transition: 0.2s linear all;
}
.form-group textarea {
    height: 100px;
    border-radius: 14px;
    overflow-y: scroll;
}
.form-wizard .focus-input .wizard-form-text-label {
  color: #d65470;
  top: -18px;
  transition: 0.2s linear all;
  font-size: 12px;
}
.form-wizard .form-wizard-steps {
  margin: 30px 0;
      text-align: center;
    display: flex;
    justify-content: center;
}
.form-wizard .form-wizard-steps li {
  width: 25%;
  float: left;
  position: relative;
}
.form-wizard .form-wizard-steps li::after {
  background-color: #f3f3f3;
  content: "";
  height:12px;
  left: 0;
  position: absolute;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
  width: 100%;
  border-bottom: 1px solid #dddddd;
  border-top: 1px solid #dddddd;
}
.form-wizard .form-wizard-steps li span {
  background-color: #dddddd;
  border-radius: 50%;
  display: inline-block;
  height: 40px;
  line-height: 40px;
  position: relative;
  text-align: center;
  width: 40px;
  z-index: 1;
}
.form-wizard .form-wizard-steps li:last-child::after {
  width: 50%;
}
.form-wizard .form-wizard-steps li.active span, .form-wizard .form-wizard-steps li.activated span {
  background-color: #d65470;
  color: #ffffff;
}
.form-wizard .form-wizard-steps li.active::after, .form-wizard .form-wizard-steps li.activated::after {
  background-color: #009688;
  left: 50%;
  width: 50%;
  border-color: #009688;
}
.form-wizard .form-wizard-steps li.activated::after {
  width: 100%;
  border-color: #d65470;
}
.form-wizard .form-wizard-steps li:last-child::after {
  left: 0;
}
.form-wizard .wizard-password-eye {
  position: absolute;
  right: 32px;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
}
@keyframes click-radio-wave {
  0% {
    width: 25px;
    height: 25px;
    opacity: 0.35;
    position: relative;
  }
  100% {
    width: 60px;
    height: 60px;
    margin-left: -15px;
    margin-top: -15px;
    opacity: 0.0;
  }
}
@media screen and (max-width: 767px) {
  .wizard-content-left {
    height: auto;
  }
    .form-wizard {
    padding: 5px;
}
    .form-wizard .form-group {
    margin: 5px 0;
    margin-bottom: 13px;
}
}
</style>
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Hi, Welcome Back!</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"></a></li>
                    <li style="display:none;"  class="breadcrumb-item active" aria-current="page">Project</li>
                </ol>
            </nav>
        </div>
     
    </div>
    <!-- /breadcrumb -->
    
    <div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
    <section class="wizard-section">
		<div class="row no-gutters">
			
			<div class="col-lg-12 col-md-12">
				<div class="form-wizard">
					<form id="contact-form" method="post" action="{{ url('faces/updateprofile/'.auth()->user()->id)}}" enctype="multipart/form-data">
                    @csrf
						<div class="form-wizard-header">
							
							<ul class="list-unstyled form-wizard-steps clearfix">
								<li class="active"></li>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</div>
						<fieldset class="wizard-fieldset show">
						    <h5>Let’s get to know you better </h5>
						<div class="row row-sm">
                        <div class="col-sm-3">
                            <div class="form-group mg-b-0">
                                <label class="form-label">Name <span class="tx-danger">*</span></label>
                               
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mg-b-0">
                               
                                <input class="form-control wizard-required" name="name" value="{{ $userData->name ?? ''}}"
                                    placeholder="Enter Name" type="text" required>
                                    <div class="wizard-form-error ">This field is required</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row row-sm">
                        <div class="col-sm-3">
                            <div class="form-group mg-b-0">
                                <label class="form-label">Email <span class="tx-danger">*</span></label>
                               
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mg-b-0">
                              
                                <input class="form-control wizard-required" name="email" value="{{ $userData->email ?? ''}}"
                                    placeholder="Enter Email" type="email" readonly required>
                                    <div class="wizard-form-error ">This field is required</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row row-sm">
                        <div class="col-sm-3">
                            <div class="form-group mg-b-0">
                                <label class="form-label">Contact Details  <span class="tx-danger">*</span></label>
                               
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mg-b-0">
                                
                                <input class="form-control wizard-required" name="phone" value="{{ $userData->phone ?? ''}}"
                                    placeholder="Enter Contact Details" type="number" required>
                                    <div class="wizard-form-error ">This field is required</div>
                            </div>
                        </div>
                    </div>
                            
                    
                    <div class="row row-sm">
                        <div class="col-sm-3">
                            <div class="form-group mg-b-0">
                               
                                <label class="form-label">Country <span class="tx-danger">*</span></label>
                                                    
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mg-b-0">
                               
                                
                                    
                                <select name="country" id="category"  class="form-control wizard-required" required>
                            <option value="" >----</option>
                            @foreach($country as $stateData)
                            <option value="{{$stateData->id}}" @if(!empty($userData->
                            country) && $userData->
                            country==$stateData->id) selected @endif>
                            {{ $stateData->name }}</option>
                            @endforeach
                        </select>
                        <div class="wizard-form-error ">This field is required</div>
                        
                            </div>
                        </div>
                    </div>
                    
                        <div class="row row-sm">
                        <div class="col-sm-3">
                            <div class="form-group mg-b-0">
                                <label class="form-label">State <span class="tx-danger">*</span></label>
                              
                                       
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mg-b-0">
                            
                                <select class="form-control wizard-required" name="state" id="subcategory_id" required
                                        > <option disabled
                                        style="display:block">----</option>
       
                                        
                                        </select>
                                         <div class="wizard-form-error ">This field is required</div>
                                       
                            </div>
                        </div>
                      
                        </div>
                        
                        <div class="row row-sm">
                        <div class="col-sm-3">
                            <div class="form-group mg-b-0">
                                <label class="form-label">City/Area <span class="tx-danger">*</span></label>
                               
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mg-b-0">
                               
                                <input class="form-control wizard-required" name="city" value="{{ $userData->city ?? ''}}"
                                    placeholder="City/Area" type="text" required>
                                     <div class="wizard-form-error ">This field is required</div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-sm">
                        <div class="col-sm-3">
                            <div class="form-group mg-b-0">
                                <label class="form-label">Address <span class="tx-danger"></span></label>
                               
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mg-b-0">
                                <textarea class="form-control" name="address" 
                                placeholder="Enter Address" >{{ $userData->address ?? ''}}</textarea>
                            </div>
                        </div>
                    </div>
                    
                        
                    <div class="row row-sm">
                        <div class="col-sm-3">
                            <div class="form-group mg-b-0">
                                <label class="form-label">Highest Qualification  <span class="tx-danger"></span></label>
                               
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mg-b-0">
                                <select class="form-control" name="highestqualification" onchange='CheckColors(this.value);' >
                                    <option value="" >----</option>
                                       <option value="Higher Certificate">Higher Certificate</option>
                                       <option value="National Diploma">National Diploma</option>
                                       <option value="Bachelor's Degree">Bachelor's Degree</option>
                                       <option value="Master's Degree">Master's Degree</option>
                                       <option value="Doctoral Degree">Doctoral Degree</option>
                                       <option value="others">Others</option>
                                   </select>
                              
                            </div>
                        </div>
                    </div>
                    <div class="row row-sm">
                        <div class="col-sm-3">
                            <div class="form-group mg-b-0">
                              
                               
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mg-b-0">
                                <input type="text" class="form-control" name="qualification_other" id="qualification" plaaceholder="Highest Qualification" style='display:none; '/>
                              
                            </div>
                        </div>
                    </div>
                    
							<div class="form-group clearfix">
								<a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
							</div>
						</fieldset>	
						<fieldset class="wizard-fieldset">
							<h5>Your Professional Journey </h5>
							                           <div class="row row-sm">
                            <div class="col-sm-3">
                                <div class="form-group mg-b-0">
                                  
                                    <label class="form-label">Name of your Company <span class="tx-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mg-b-0">
                                    <input class="form-control wizard-required" name="companyname" value="{{ $userData->companyname ?? ''}}"
                                    placeholder="Enter Company Name" type="text" required>
                                     <div class="wizard-form-error ">This field is required</div>
                                  
                                </div>
                            </div>
                        </div>
                        
                        <div class="row row-sm">
                            <div class="col-sm-3">
                                <div class="form-group mg-b-0">
                                  
                                    <label class="form-label">Most Recent Designation <span class="tx-danger"></span></label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mg-b-0">
                                    <input class="form-control" name="designation" value="{{ $userData->designation ?? ''}}"
                                    placeholder="Enter Designation" type="text">
                                  
                                </div>
                            </div>
                        </div>
                        
                        <div class="row row-sm">
                           <div class="col-sm-3">
                               <div class="form-group mg-b-0">
                                 
                                   <label class="form-label">Your Industry Type <span class="tx-danger">*</span></label>
                               </div>
                           </div>
                           <div class="col-sm-6">
                               <div class="form-group mg-b-0">
                                <select class="form-control wizard-required"  name="industrytype"  id="sector1" onchange='CheckColorss(this.value);'  class="form-control " required >
                                    <option>----</option>
                                    
                                 @foreach($sector as $sectorData)
                                     <option value="{{$sectorData->id}}" @if(!empty($userData->
                            industrytype) && $userData->
                            industrytype==$sectorData->id) selected @endif>
                                     {{ $sectorData->sectorname }}</option>
                                     @endforeach   
                                     
                                    <option value="others">Others</option>
                                    
                                </select>
                              
                                  <div class="wizard-form-error ">This field is required</div>
                               </div>
                           </div>
                       </div>
                     
                       <div class="row row-sm">
                          <div class="col-sm-3">
                              <div class="form-group mg-b-0">
                                
                                  
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="form-group mg-b-0">
                                <input type="text" class="form-control " placeholder="Other Sector" name="sector_others" id="sector" style='display:none; margin-top: 10px;'/>
                                
                              </div>
                          </div>
                      </div>
                      
                      <div class="row row-sm">
                         <div class="col-sm-3">
                             <div class="form-group mg-b-0">
                               
                                 <label class="form-label">Years of Experience <span class="tx-danger"></span></label>
                             </div>
                         </div>
                         <div class="col-sm-6">
                             <div class="form-group mg-b-0">
                                <input class="form-control" name="experience" value="{{ $userData->experience ?? ''}}"
                                placeholder="Enter Experience " type="number">
                            
                               
                             </div>
                         </div>
                     </div>
                     
                     <div class="row row-sm">
                        <div class="col-sm-3">
                            <div class="form-group mg-b-0">
                              
                                <label class="form-label">Important Position(s) held <span class="tx-danger"></span></label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mg-b-0">
                                <input class="form-control" name="position" value="{{ $userData->position ?? ''}}"
                                placeholder="Enter Position(s)" type="text">
                           
                              
                            </div>
                        </div>
                    </div>
                    
                    <div class="row row-sm">
                        <div class="col-sm-3">
                            <div class="form-group mg-b-0">
                              
                                <label class="form-label">Are you Incorporated ? If yes, mention the Year of Incorporation <span class="tx-danger"></span></label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mg-b-0">
                              
                                <select name="areuincorporated" class="form-control" >
                                    <option value="Not Applicable">Not Applicable</option>
                                    <option value="Not incorporated">Not Incorporated</option>
                                    <option value="2001- 2010">2001- 2010</option>
                                    <option value="2011-2020">2011-2020</option>
                                    <option value="2021 <">2021 &lt;</option></select>
                              
                            </div>
                        </div>
                    </div>
                    
                    <div class="row row-sm">
                        <div class="col-sm-3">
                            <div class="form-group mg-b-0">
                              
                                <label class="form-label">Brief note about your Business/Work <span class="tx-danger"></span></label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mg-b-0">
                              
                                <textarea class="form-control" name="aboutbusiness" value=""
                                placeholder="Enter about your Business" >{!!$userData->aboutbusiness ?? ''!!}</textarea>
                              
                            </div>
                        </div>
                    </div>
                    
                    <div class="row row-sm">
                        <div class="col-sm-3">
                            <div class="form-group mg-b-0">
                              
                                <label class="form-label"> My Product/Service is Innovative  <span class="tx-danger"></span></label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mg-b-0">
                             
                                <textarea class="form-control" name="innovativebusiness" value="" maxlength="300"
                                placeholder="Enter about your Product/Service" >{!!$userData->innovativebusiness ?? ''!!}</textarea>
                                <small style="float: right; color:#b151c4;"><b>300 words</b></small>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="row row-sm">
                        <div class="col-sm-3">
                            <div class="form-group mg-b-0">
                              
                                <label class="form-label"> My Product/Service is Sustainable  <span class="tx-danger"></span></label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mg-b-0">
                              
                                <textarea class="form-control" name="Sustainablebusiness" value="" maxlength="300"
                                placeholder=" Product/Service Is Sustainable" >{!!$userData->Sustainablebusiness ?? ''!!}</textarea>
                                <small style="float: right; border-radius:5px;color:#b151c4;"><b>300 words</b></small>
                            </div>
                        </div>
                    </div>
                    
                   
                        
                    <div class="row row-sm">
                        <div class="col-sm-3">
                            <div class="form-group mg-b-0">
                              
                                <label class="form-label"> Size of your Business (turnover) <span class="tx-danger"></span></label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mg-b-0">
                                
                                <select name="turnover" class="form-control" >
                                    <option value="">----</option>
                                    <option value="Micro (up to 50 Million)">Micro (up to 50 Million )</option>
                                    <option value="Small (50 Million to 750 Million)">Small (50 Million to 750 Million)</option>
                                    <option value="Medium (75 crore to 250 crore)">Medium (750 Million to 2500 Million)</option>
                                    <option value="Not Applicable">Not Applicable</option></select>
                              
                            </div>
                        </div>
                    </div>
               
                    <div class="row row-sm">
                        <div class="col-sm-3">
                            <div class="form-group mg-b-0">
                              
                                <label class="form-label"> Stage of your Business  <span class="tx-danger"></span></label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mg-b-0">
                                
                                <select name="turnover" class="form-control" >
                                    <option value="">----</option>
                                    <option value="Idea">Idea</option><option value="Unregistered Startup">Unregistered Startup</option>
                                    <option value="1 to 3 year old">1 to 3 year old</option>
                                    <option value="3 to 6 year old">3 to 6 year old</option>
                                    <option value="6 to 10 year old">6 to 10 year old</option>
                                    <option value="10 plus years">10 plus years</option>
                                    <option value="Not Applicable">Not Applicable</option>
                                    </select>
                              
                            </div>
                        </div>
                    </div>
                    
                    <div class="row row-sm">
                        <div class="col-sm-3">
                            <div class="form-group mg-b-0">
                              
                                <label class="form-label"> Number of Employees  <span class="tx-danger"></span></label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mg-b-0">
                                
                                <select name="turnover" class="form-control" >
                                    <option value="">----</option>
                                   <option value="less than 25">less than 25</option><
                                   option value="25-100">25-100</option>
                                   <option value="101-1000">101-1000</option>
                                   <option value="1001-5000">1001-5000</option>
                                   <option value="5000 +">5000 +</option>
                                </select>
                              
                            </div>
                        </div>
                    </div>
              
                    <div class="row row-sm">
                        <div class="col-sm-3">
                            <div class="form-group mg-b-0">
                              
                                <label class="form-label"> Funding Details  <span class="tx-danger"></span></label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mg-b-0">
                                
                                <select name="fundingdetails" class="form-control" >
                                    <option value="">----</option>
                                    <option value="Bootstrapped">Bootstrapped</option>
                                    <option value="Funded by Friends & Family">Funded by Friends & Family</option>
                                    <option value="Funded by Angel Investor">Funded by Angel Investor</option>
                                    <option value="Funded by Venture Capitalist ">Funded by Venture Capitalist</option>
                                    <option value="Loan from Banks & NBFCs ">Loan from Banks & NBFCst</option>
                                    <option value="Not Applicable  ">Not Applicable </option>
                                
                                </select>
                              
                            </div>
                        </div>
                    </div>
                    <div class="row row-sm">
                        <div class="col-sm-3">
                            <div class="form-group mg-b-0">
                              
                                <label class="form-label"> Tell us about your Journey  <span class="tx-danger">*</span></label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mg-b-0">
                                
                                <textarea class="form-control wizard-required" name="journey" value="" maxlength="500"
                                placeholder="Journey " required >{!!$userData->journey ?? ''!!}</textarea>
                                <div class="wizard-form-error ">This field is required</div>
                                <small style="float: right; color:#b151c4;"><b>500 words</b></small>
                              
                            </div>
                        </div>
                    </div>
							<div class="form-group clearfix">
								<a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
								<a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
							</div>
						</fieldset>	
						<fieldset class="wizard-fieldset">
							<h5>Let’s get you started </h5>
						<div class="row row-sm">
                            <div class="col-sm-3">
                                <div class="form-group mg-b-0">
                                  
                                    <label class="form-label"> Your Profession/Occupation  <span class="tx-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mg-b-0">
                                    <select class="form-control wizard-required" name="profession" required>
                                        <option value="">---- </option>
                                        <option value="Professional ">Professional </option>
                                        <option value="Entrepreneur ">Entrepreneur </option>
                                        <option value="Social Activist">Social Activist</option>
                                        
                                    </select>
                                     <div class="wizard-form-error ">This field is required</div>
                                   
                                  
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="row row-sm">
                             
                            <div class="col-sm-3">
                                
                                <div class="form-group mg-b-0">
                                    
                                  
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mg-b-0 text-center">
                               
                                    
                                   
                                       <input class="fileuploader form-control wizard-required" name="pitchvedio"  id="file"  onchange="Filevalidation()"  placeholder="Enter Position" type="file" required>
                                      <small> File Type mp4 | File Size upto 50 MB</small>
                                       <div class="wizard-form-error ">This field is required</div>
                                    <p style="font-weight: bold;color: #b151c4;"><span class="tx-danger">*</span>Upload a 60 second’s Video - You only get 60 sec to Pitch </p>
                                    <div class="video-up"></div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                
                                <div class="form-group mg-b-0">
                                    
                                  
                                </div>
                            </div>
                        </div>
                      
                        
                        <div class="row row-sm">
                            <div class="col-sm-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Facebook  <span class="tx-danger">*</span></label>
                                    
                                           
                                             <input class="form-control wizard-required" name="facebook" value="{{ $userData->facebook ?? ''}}"
                                            placeholder="Facebook" type="text" required>
                                            <div class="wizard-form-error ">This field is required</div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Instagram  <span class="tx-danger"></span></label>
                                    <input class="form-control" name="instagram" value="{{ $userData->instagram ?? ''}}"
                                            placeholder="Instagram" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row row-sm">
                            <div class="col-sm-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Twitter Link  <span class="tx-danger"></span></label>
                                    <input class="form-control" name="twitter" value="{{ $userData->twitter ?? ''}}"
                                        placeholder="Twitter" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Linkedin Link<span class="tx-danger"></span></label>
                                    <input class="form-control" name="linkedin" value="{{ $userData->linkedin ?? ''}}"
                                        placeholder="Linkedin" type="text">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row row-sm">
                            <div class="col-sm-3">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">I am referred by   <span class="tx-danger">*</span></label>
                                    
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mg-b-0">
                                    <select name="influencer"   class="form-control wizard-required" required>
                                        <option value="">----</option>
                                    @foreach($infData as $infData1)
										@if($infData1->area !=NULL)
                                    <option value="{{$infData1->id}}" @if(!empty($userData->
                                    influencer) && $userData->
                                    influencer==$infData1->id) selected @endif>
										
                                    {{ $infData1->name }} ( {{$infData1->area_name}} )</option>
										@else if($infData1->sector !=NULL)
										<option value="{{$infData1->id}}" @if(!empty($userData->
                                    influencer) && $userData->
                                    influencer==$infData1->id) selected @endif>
										
                                    {{ $infData1->name }}  ( {{$infData1->sectorname}} )</option>
										@endif
                                    @endforeach
                                    </select >
                                    
                                    <div class="wizard-form-error ">This field is required</div>
                                </div>
                            </div>
                        </div>  
                                
							<div class="form-group clearfix">
								<a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
								<button type="submit" name="" class="form-wizard-submit float-right">Submit </button>
								
							</div>
						</fieldset>	
					</form>
				</div>
			</div>
		</div>
	</section>
    </div>
    </div>
    </div>
    </div>
    
    
   <!--   <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                  <form id="contact-form" method="post" action="{{ url('faces/updateprofile/'.auth()->user()->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div id="wizard1">
                     
                        <h3>Personal Information</h3>
                        <section>
                            
     
                    <div class="row row-sm">
                        <div class="col-3">
                            <div class="form-group mg-b-0">
                                <label class="form-label">Name: <span class="tx-danger">*</span></label>
                               
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mg-b-0">
                               
                                <input class="form-control" name="name" value="{{ $userData->name ?? ''}}"
                                    placeholder="Enter Name" type="text" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row row-sm">
                        <div class="col-3">
                            <div class="form-group mg-b-0">
                                <label class="form-label">Email: <span class="tx-danger">*</span></label>
                               
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mg-b-0">
                              
                                <input class="form-control" name="email" value="{{ $userData->email ?? ''}}"
                                    placeholder="Enter Email" type="text" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row row-sm">
                        <div class="col-3">
                            <div class="form-group mg-b-0">
                                <label class="form-label">Contact Details: <span class="tx-danger">*</span></label>
                               
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mg-b-0">
                                
                                <input class="form-control" name="phone" value="{{ $userData->phone ?? ''}}"
                                    placeholder="Enter Fb Link" type="text" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row row-sm">
                        <div class="col-3">
                            <div class="form-group mg-b-0">
                               
                                <label class="form-label"><br/>Country: <span class="tx-danger">*</span></label>
                                                    
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mg-b-0">
                               
                                
                                    
                                <select name="country" id="category"  class="form-control" required>
                            <option value="" >Please select one</option>
                            @foreach($country as $stateData)
                            <option value="{{$stateData->id}}" @if(!empty($listing->
                            state_id) && $listing->
                            state_id==$stateData->id) selected @endif>
                            {{ $stateData->name }}</option>
                            @endforeach
                        </select>
                        
                            </div>
                        </div>
                    </div>
                    
                        <div class="row row-sm">
                        <div class="col-3">
                            <div class="form-group mg-b-0">
                                <label class="form-label"><br/>State: <span class="tx-danger">*</span></label>
                              
                                       
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mg-b-0">
                            
                                <select class="form-control " name="state" id="subcategory_id" required
                                        > <option disabled
                                        style="display:block">Please Select One</option>
       
                                        
                                        </select>
                                       
                            </div>
                        </div>
                      
                        </div>
                        
                        <div class="row row-sm">
                        <div class="col-3">
                            <div class="form-group mg-b-0">
                                <label class="form-label"><br/>City/Area: <span class="tx-danger">*</span></label>
                               
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mg-b-0">
                               
                                <input class="form-control" name="city" value="{{ $userData->city ?? ''}}"
                                    placeholder="City/Area" type="text" required>
                            </div>
                        </div>
                    </div>
                    <div class="row row-sm">
                        <div class="col-3">
                            <div class="form-group mg-b-0">
                                <label class="form-label"><br/>Address: <span class="tx-danger"></span></label>
                               
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mg-b-0">
                                <textarea class="form-control" name="address" 
                                placeholder="Enter address" >{!! $userData->address ?? ''!!}</textarea>
                            </div>
                        </div>
                    </div>
                    
                        
                    <div class="row row-sm">
                        <div class="col-3">
                            <div class="form-group mg-b-0">
                                <label class="form-label"><br/>Highest Qualification: <span class="tx-danger"></span></label>
                               
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mg-b-0">
                                <select class="form-control" name="highestqualification" onchange='CheckColors(this.value);' >
                                    <option value="" >Please select one</option>
                                       <option value="Higher Certificate">Higher Certificate</option>
                                       <option value="National Diploma">National Diploma</option>
                                       <option value="Bachelor's Degree">Bachelor's Degree</option>
                                       <option value="Master's Degree">Master's Degree</option>
                                       <option value="Doctoral Degree">Doctoral Degree</option>
                                       <option value="others">Others</option>
                                   </select>
                              
                            </div>
                        </div>
                    </div>
                    <div class="row row-sm">
                        <div class="col-3">
                            <div class="form-group mg-b-0">
                              
                               
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mg-b-0">
                                <input type="text" class="form-control" name="qualification_other" id="qualification" plaaceholder="Highest Qualification" style='display:none; '/>
                              
                            </div>
                        </div>
                    </div>
                    
                   </section>
                        <h3> Your Profesional Journey</h3>
                        <section>
                           <div class="row row-sm">
                            <div class="col-3">
                                <div class="form-group mg-b-0">
                                  
                                    <label class="form-label"><br/>Name Of Your Company: <span class="tx-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <input class="form-control" name="companyname" value="{{ $userData->companyname ?? ''}}"
                                    placeholder="Enter Company Name" type="text" required>
                                  
                                </div>
                            </div>
                        </div>
                        
                        <div class="row row-sm">
                            <div class="col-3">
                                <div class="form-group mg-b-0">
                                  
                                    <label class="form-label"><br/>Most Recent Designation: <span class="tx-danger"></span></label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <input class="form-control" name="designation" value="{{ $userData->designation ?? ''}}"
                                    placeholder="Enter Designation" type="text">
                                  
                                </div>
                            </div>
                        </div>
                        
                        <div class="row row-sm">
                           <div class="col-3">
                               <div class="form-group mg-b-0">
                                 
                                   <label class="form-label"><br/>Your Industry Type: <span class="tx-danger">*</span></label>
                               </div>
                           </div>
                           <div class="col-6">
                               <div class="form-group mg-b-0">
                                <select class="form-control"  name="industrytype" required id="sector1" onchange='CheckColorss(this.value);'  class="form-control "  >
                                    <option>--Please select one--</option>
                                    
                                 @foreach($sector as $sectorData)
                                     <option value="{{$sectorData->id}}" >
                                     {{ $sectorData->sectorname }}</option>
                                     @endforeach   
                                     
                                    <option value="others">Others</option>
                                    
                                </select>
                              
                                 
                               </div>
                           </div>
                       </div>
                     
                       <div class="row row-sm">
                          <div class="col-3">
                              <div class="form-group mg-b-0">
                                
                                  
                              </div>
                          </div>
                          <div class="col-6">
                              <div class="form-group mg-b-0">
                                <input type="text" class="form-control " placeholder="Other Sector" name="sector_others" id="sector" style='display:none; margin-top: 10px;'/>
                                
                              </div>
                          </div>
                      </div>
                      
                      <div class="row row-sm">
                         <div class="col-3">
                             <div class="form-group mg-b-0">
                               
                                 <label class="form-label"><br/>Years Of Experience: <span class="tx-danger"></span></label>
                             </div>
                         </div>
                         <div class="col-6">
                             <div class="form-group mg-b-0">
                                <input class="form-control" name="experience" value="{{ $userData->experience ?? ''}}"
                                placeholder="Enter Experience " type="text">
                            
                               
                             </div>
                         </div>
                     </div>
                     
                     <div class="row row-sm">
                        <div class="col-3">
                            <div class="form-group mg-b-0">
                              
                                <label class="form-label"><br/>Important Position(s) Held: <span class="tx-danger"></span></label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mg-b-0">
                                <input class="form-control" name="position" value="{{ $userData->position ?? ''}}"
                                placeholder="Enter Position" type="text">
                           
                              
                            </div>
                        </div>
                    </div>
                    
                    <div class="row row-sm">
                        <div class="col-3">
                            <div class="form-group mg-b-0">
                              
                                <label class="form-label"><br/>Are you incorporated, If yes mention the year of Incorporation <span class="tx-danger"></span></label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mg-b-0">
                              
                                <select name="areuincorporated" class="form-control" >
                                    <option value="Not Applicable">Not Applicable</option>
                                    <option value="Not incorporated">Not incorporated</option>
                                    <option value="2001- 2010">2001- 2010</option>
                                    <option value="2011-2020">2011-2020</option>
                                    <option value="2021 <">2021 &lt;</option></select>
                              
                            </div>
                        </div>
                    </div>
                    
                    <div class="row row-sm">
                        <div class="col-3">
                            <div class="form-group mg-b-0">
                              
                                <label class="form-label"><br/> Brief about your business / work <span class="tx-danger"></span></label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mg-b-0">
                              
                                <textarea class="form-control" name="aboutbusiness" value=""
                                placeholder="Enter About Business" >{!!$userData->aboutbusiness ?? ''!!}</textarea>
                              
                            </div>
                        </div>
                    </div>
                    
                    <div class="row row-sm">
                        <div class="col-3">
                            <div class="form-group mg-b-0">
                              
                                <label class="form-label"><br/> My Product/Service Is Innovative : <span class="tx-danger"></span></label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mg-b-0">
                             
                                <textarea class="form-control" name="innovativebusiness" value=""
                                placeholder="Enter About Business" >{!!$userData->innovativebusiness ?? ''!!}</textarea>
                                <small style="float: right;">300 words</small>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="row row-sm">
                        <div class="col-3">
                            <div class="form-group mg-b-0">
                              
                                <label class="form-label"><br/> My Product/Service Is Sustainable : <span class="tx-danger"></span></label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mg-b-0">
                              
                                <textarea class="form-control" name="Sustainablebusiness" value=""
                                placeholder=" Product/Service Is Sustainable" >{!!$userData->Sustainablebusiness ?? ''!!}</textarea>
                                <small style="float: right; border-radius:5px;">300 words</small>
                            </div>
                        </div>
                    </div>
                    
                   
                        
                    <div class="row row-sm">
                        <div class="col-3">
                            <div class="form-group mg-b-0">
                              
                                <label class="form-label"><br/> Define the size of your business (turnover): <span class="tx-danger"></span></label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mg-b-0">
                                
                                <select name="turnover" class="form-control" >
                                    <option value="">Please Select One</option>
                                    <option value="Micro (up to 5 crore)">Micro (up to 5 crore)</option>
                                    <option value="Small (5 crore to 75 crore)">Small (5 crore to 75 crore)</option>
                                    <option value="Medium (75 crore to 250 crore)">Medium (75 crore to 250 crore)</option>
                                    <option value="Not Applicable">Not Applicable</option></select>
                              
                            </div>
                        </div>
                    </div>
               
                    <div class="row row-sm">
                        <div class="col-3">
                            <div class="form-group mg-b-0">
                              
                                <label class="form-label"><br/> What is" the stage of your Business : <span class="tx-danger"></span></label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mg-b-0">
                                
                                <select name="turnover" class="form-control" >
                                    <option value="">Please Select One</option>
                                    <option value="Idea">Idea</option><option value="Unregistered Startup">Unregistered Startup</option>
                                    <option value="1 to 3 year old">1 to 3 year old</option>
                                    <option value="3 to 6 year old">3 to 6 year old</option>
                                    <option value="6 to 10 year old">6 to 10 year old</option>
                                    <option value="10 plus years">10 plus years</option>
                                    <option value="Not Applicable">Not Applicable</option>
                                    </select>
                              
                            </div>
                        </div>
                    </div>
                    
                    <div class="row row-sm">
                        <div class="col-3">
                            <div class="form-group mg-b-0">
                              
                                <label class="form-label"><br/> Number of employees: <span class="tx-danger"></span></label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mg-b-0">
                                
                                <select name="turnover" class="form-control" >
                                    <option value="">Please Select One</option>
                                   <option value="1 to 5">1 to 5</option><
                                   option value="5 to 20">5 to 20</option>
                                   <option value="20 to 100">20 to 100</option>
                                   <option value="100 plus">100 plus</option>
                                   <option value="Not applicable">Not applicable</option>
                                </select>
                              
                            </div>
                        </div>
                    </div>
              
                    <div class="row row-sm">
                        <div class="col-3">
                            <div class="form-group mg-b-0">
                              
                                <label class="form-label"><br/> Funding Details: <span class="tx-danger"></span></label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mg-b-0">
                                
                                <select name="turnover" class="form-control" >
                                    <option value="">Please Select One</option>
                                    <option value="Bootstrapped (self funded)">Bootstrapped (self funded)</option>
                                    <option value="Funded by friends and family">Funded by friends and family</option>
                                    <option value="Funded by other, if any specify …..">Funded by other, if any specify …..</option>
                                    <option value="Not Applicable">Not Applicable</option>
                                
                                </select>
                              
                            </div>
                        </div>
                    </div>
                    <div class="row row-sm">
                        <div class="col-3">
                            <div class="form-group mg-b-0">
                              
                                <label class="form-label"><br/> Write your journey to success in 500 words: <span class="tx-danger">*</span></label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mg-b-0">
                                
                                <textarea class="form-control" name="innovativebusiness" value=""
                                placeholder="Journey " required >{!!$userData->journey ?? ''!!}</textarea>
                              
                            </div>
                        </div>
                    </div>
                        </section>
                        <h3> Let’s get you started</h3>
                        <section>
                            <div class="row row-sm">
                            <div class="col-3">
                                <div class="form-group mg-b-0">
                                  
                                    <label class="form-label"><br/> Your Profession/Occupation: <span class="tx-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <select class="form-control" name="profession" required>
                                        <option value="">Please select one </option>
                                        <option value="Professional ">Professional </option>
                                        <option value="Entrepreneur ">Entrepreneur </option>
                                        <option value="Social Activist">Social Activist</option>
                                        
                                    </select>
                                   
                                  
                                </div>
                            </div>
                        </div>
                        
                        <div class="row row-sm">
                             
                            <div class="col-3">
                                
                                <div class="form-group mg-b-0">
                                    
                                  
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0 text-center">
                                    <span class="login100-form-logo">
                                        <i class="zmdi"></i><i class="fa fa-microphone fa-5x"  aria-hidden="true"></i>
                                      </span>
                                     
                                   
                                  
                                </div>
                            </div>
                        </div> 
                        <div class="row row-sm">
                             
                            <div class="col-3">
                                
                                <div class="form-group mg-b-0">
                                    
                                  
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0 text-center">
                                    
                                      <span class="login100-form-title p-b-34 p-t-27">
                                        <h4 style="font-weight: bold; color: #b151c4;">Pitch Your Voice!!</h4>
                                    </span>
                                    <span class="login100-form-title p-b-34 p-t-27">
                                        <p>Tell us about your professional & personal journey and challenges (if any). </p>
                                        
                                    </span>
                                   
                                       <input class="form-control" name="pitchvedio"  id="file"  onchange="Filevalidation()"  placeholder="Enter Position" type="file" required>
                                       
                                    <p style="font-weight: bold;color: #b151c4;"><span class="tx-danger">*</span>Upload a 60 second’s video (you only get 60 sec to pitch) for our Jury members, Partners, and Investors</p>
                                </div>
                            </div>
                            <div class="col-3">
                                
                                <div class="form-group mg-b-0">
                                    
                                  
                                </div>
                            </div>
                        </div>
                      
                        
                        <div class="row row-sm">
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Facebook: <span class="tx-danger">*</span></label>
                                    
                                           
                                             <input class="form-control" name="facebook" value="{{ $userData->facebook ?? ''}}"
                                            placeholder="Facebook" type="text" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Instagram: <span class="tx-danger"></span></label>
                                    <input class="form-control" name="instagram" value="{{ $userData->instagram ?? ''}}"
                                            placeholder="Instagram" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row row-sm">
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label"><br/>Twitter LinK: <span class="tx-danger"></span></label>
                                    <input class="form-control" name="twitter" value="{{ $userData->twitter ?? ''}}"
                                        placeholder="Twitter" type="text">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label"><br/>Linkedin Link: <span class="tx-danger"></span></label>
                                    <input class="form-control" name="linkedin" value="{{ $userData->linkedin ?? ''}}"
                                        placeholder="Linkedin" type="text">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row row-sm">
                            <div class="col-3">
                                <div class="form-group mg-b-0">
                                    <label class="form-label"><br/>I am referred by   : <span class="tx-danger"></span></label>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <select name="influencer" id="category"  class="form-control" >
                                        <option value="">Please Select One</option>
                                    @foreach($infData as $infData1)
                                    <option value="{{$infData1->id}}" @if(!empty($listing->
                                    state_id) && $listing->
                                    state_id==$stateData->id) selected @endif>
                                    {{ $infData1->name }}</option>
                                    @endforeach
                                    </select >
                                </div>
                            </div>
                        </div>  
                                
                        </section>
                        
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>-->


<!-- row -->

<!-- /row -->
</div>
<!-- /container -->
</div>

<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="row">
        <div class="col-sm-5">
            <img src="{{url('globalsummit/images/modal-img2.png')}}">
          </div>
        <div class="col-sm-7">
            <div class="smg-popup">
          <h2>Thank You</h2>
           <h4>Unlock your Potential</h4>
            <p>Check your inbox for your Login Credentials </p>
            <p>Your empowerment journey with us has just begun.</p>
            </div>
          </div>
          </div>
      </div>
      
    </div>
  </div>
</div>
<!--pop-up End-->


<!-- /main-content -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   	

<script>
    $(function(){
       $('#category').on('change',function(){
           var category_id =$(this).val();

        $.ajax({
            type: "GET",
            url: "{{ url('faces/editprofile') }}",
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
      </script>
  @if(!empty(Session::get('error_code')) && Session::get('error_code') == 5)
<script>
$(function() {
    $('#exampleModal').modal('show');
});
</script>
@endif
     <script>
    Filevalidation = () => {
        const fi = document.getElementById('file');
        // Check if any file is selected.
        if (fi.files.length > 0) {
            for (const i = 0; i <= fi.files.length - 1; i++) {
  
                const fsize = fi.files.item(i).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file >= 51200) {
                    alert(
                      "File too Big, please select a file less than 50mb");
                       $("#file").val("");
                } else if (file < 2048) {
                    alert(
                      "File too small, please select a file greater than 2mb");
                       $("#file").val("");
                } else {
                    document.getElementById('size').innerHTML = '<b>'
                    + file + '</b> KB';
                }
            }
        }
    }
</script>
    <script>
        function CheckColors(val){
     var element=document.getElementById('qualification');
     if(val=='other qualification'||val=='others')
       element.style.display='block';
     else  
       element.style.display='none';
    }
    </script>
       <script>function CheckColorss(val){
        var element=document.getElementById('sector');
        if(val=='other sector'||val=='others')
          element.style.display='block';
        else  
          element.style.display='none';
       }</script>
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
jQuery(document).ready(function($){

// Click button to activate hidden file input
$('.fileuploader-btn').on('click', function(){
$('.fileuploader').click();
});

// Click above calls the open dialog box
// Once something is selected the change function will run
$('.fileuploader').change(function(){

// Create new FileReader as a variable
var reader = new FileReader();

// Onload Function will run after video has loaded
reader.onload = function(file){
    
var fileContent = file.target.result;
if(fileContent!=''){
$('.video-up').append('<video src="' + fileContent + '" width="320" height="240" controls></video>');
}
}

// Get the selected video from Dialog
reader.readAsDataURL(this.files[0]);

});

});
</script>
       
       
@endsection