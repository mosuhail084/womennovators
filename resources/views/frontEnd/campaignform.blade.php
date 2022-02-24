@extends('frontEnd.layouts.layout') @section('frontEnd_content')
<!-- Main content Start -->
<div class="main-content">
<div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="{{ url('http://covidcaregiver.org/backEnd/image/banner.jpeg')}}" alt="Breadcrumbs Image">
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
                            <h2 class="title mb-10">Need help , Register now for campaign page - form</h2>
                            <div class="styled-form">  
                            <form method="post" action="{{ route('campainform')}}" enctype="multipart/form-data">
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
                                <!-- Form Group -->
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>phone*</strong></h6>
                                        <input type="tel"  name="phone" value="" placeholder="Enter phone Number" required>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- Form Group -->
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-4" style="color: #ff5421; text-align:left;"><strong>What help you need</strong></h6>
                                        <input type="text"  name="whathelpyouneed" value="" placeholder="Enter What help you need">
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- Form Group -->
                                <!-- <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-8" style="color: #ff5421; text-align:left;"><strong>Video explaining what help you need </strong></h6>
                                        <input type="text"  name="video" value="" placeholder="2 Minute Maximum">
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div> -->
                                <!-- Form Group -->
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>Video</strong></h6>
                                <input class="form-control" name="video"  placeholder="2 Minute Maximum"  id="profile1" type="file" style="background:hidden;" >
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- Form Group -->
                                 <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>Country </strong></h6>
                                       <!-- <input type="text"  name="country" value="" placeholder="Enter Country">-->
                                       <select class="form-control select2" name="country" >
    <option value="">Please Seelct One</option>
    <option value="Afganistan">Afghanistan</option>
   <option value="Albania">Albania</option>
   <option value="Algeria">Algeria</option>
   <option value="American Samoa">American Samoa</option>
   <option value="Andorra">Andorra</option>
   <option value="Angola">Angola</option>
   <option value="Anguilla">Anguilla</option>
   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
   <option value="Argentina">Argentina</option>
   <option value="Armenia">Armenia</option>
   <option value="Aruba">Aruba</option>
   <option value="Australia">Australia</option>
   <option value="Austria">Austria</option>
   <option value="Azerbaijan">Azerbaijan</option>
   <option value="Bahamas">Bahamas</option>
   <option value="Bahrain">Bahrain</option>
   <option value="Bangladesh">Bangladesh</option>
   <option value="Barbados">Barbados</option>
   <option value="Belarus">Belarus</option>
   <option value="Belgium">Belgium</option>
   <option value="Belize">Belize</option>
   <option value="Benin">Benin</option>
   <option value="Bermuda">Bermuda</option>
   <option value="Bhutan">Bhutan</option>
   <option value="Bolivia">Bolivia</option>
   <option value="Bonaire">Bonaire</option>
   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
   <option value="Botswana">Botswana</option>
   <option value="Brazil">Brazil</option>
   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
   <option value="Brunei">Brunei</option>
   <option value="Bulgaria">Bulgaria</option>
   <option value="Burkina Faso">Burkina Faso</option>
   <option value="Burundi">Burundi</option>
   <option value="Cambodia">Cambodia</option>
   <option value="Cameroon">Cameroon</option>
   <option value="Canada">Canada</option>
   <option value="Canary Islands">Canary Islands</option>
   <option value="Cape Verde">Cape Verde</option>
   <option value="Cayman Islands">Cayman Islands</option>
   <option value="Central African Republic">Central African Republic</option>
   <option value="Chad">Chad</option>
   <option value="Channel Islands">Channel Islands</option>
   <option value="Chile">Chile</option>
   <option value="China">China</option>
   <option value="Christmas Island">Christmas Island</option>
   <option value="Cocos Island">Cocos Island</option>
   <option value="Colombia">Colombia</option>
   <option value="Comoros">Comoros</option>
   <option value="Congo">Congo</option>
   <option value="Cook Islands">Cook Islands</option>
   <option value="Costa Rica">Costa Rica</option>
   <option value="Cote DIvoire">Cote DIvoire</option>
   <option value="Croatia">Croatia</option>
   <option value="Cuba">Cuba</option>
   <option value="Curaco">Curacao</option>
   <option value="Cyprus">Cyprus</option>
   <option value="Czech Republic">Czech Republic</option>
   <option value="Denmark">Denmark</option>
   <option value="Djibouti">Djibouti</option>
   <option value="Dominica">Dominica</option>
   <option value="Dominican Republic">Dominican Republic</option>
   <option value="East Timor">East Timor</option>
   <option value="Ecuador">Ecuador</option>
   <option value="Egypt">Egypt</option>
   <option value="El Salvador">El Salvador</option>
   <option value="Equatorial Guinea">Equatorial Guinea</option>
   <option value="Eritrea">Eritrea</option>
   <option value="Estonia">Estonia</option>
   <option value="Ethiopia">Ethiopia</option>
   <option value="Falkland Islands">Falkland Islands</option>
   <option value="Faroe Islands">Faroe Islands</option>
   <option value="Fiji">Fiji</option>
   <option value="Finland">Finland</option>
   <option value="France">France</option>
   <option value="French Guiana">French Guiana</option>
   <option value="French Polynesia">French Polynesia</option>
   <option value="French Southern Ter">French Southern Ter</option>
   <option value="Gabon">Gabon</option>
   <option value="Gambia">Gambia</option>
   <option value="Georgia">Georgia</option>
   <option value="Germany">Germany</option>
   <option value="Ghana">Ghana</option>
   <option value="Gibraltar">Gibraltar</option>
   <option value="Great Britain">Great Britain</option>
   <option value="Greece">Greece</option>
   <option value="Greenland">Greenland</option>
   <option value="Grenada">Grenada</option>
   <option value="Guadeloupe">Guadeloupe</option>
   <option value="Guam">Guam</option>
   <option value="Guatemala">Guatemala</option>
   <option value="Guinea">Guinea</option>
   <option value="Guyana">Guyana</option>
   <option value="Haiti">Haiti</option>
   <option value="Hawaii">Hawaii</option>
   <option value="Honduras">Honduras</option>
   <option value="Hong Kong">Hong Kong</option>
   <option value="Hungary">Hungary</option>
   <option value="Iceland">Iceland</option>
   <option value="Indonesia">Indonesia</option>
   <option value="India">India</option>
   <option value="Iran">Iran</option>
   <option value="Iraq">Iraq</option>
   <option value="Ireland">Ireland</option>
   <option value="Isle of Man">Isle of Man</option>
   <option value="Israel">Israel</option>
   <option value="Italy">Italy</option>
   <option value="Jamaica">Jamaica</option>
   <option value="Japan">Japan</option>
   <option value="Jordan">Jordan</option>
   <option value="Kazakhstan">Kazakhstan</option>
   <option value="Kenya">Kenya</option>
   <option value="Kiribati">Kiribati</option>
   <option value="Korea North">Korea North</option>
   <option value="Korea Sout">Korea South</option>
   <option value="Kuwait">Kuwait</option>
   <option value="Kyrgyzstan">Kyrgyzstan</option>
   <option value="Laos">Laos</option>
   <option value="Latvia">Latvia</option>
   <option value="Lebanon">Lebanon</option>
   <option value="Lesotho">Lesotho</option>
   <option value="Liberia">Liberia</option>
   <option value="Libya">Libya</option>
   <option value="Liechtenstein">Liechtenstein</option>
   <option value="Lithuania">Lithuania</option>
   <option value="Luxembourg">Luxembourg</option>
   <option value="Macau">Macau</option>
   <option value="Macedonia">Macedonia</option>
   <option value="Madagascar">Madagascar</option>
   <option value="Malaysia">Malaysia</option>
   <option value="Malawi">Malawi</option>
   <option value="Maldives">Maldives</option>
   <option value="Mali">Mali</option>
   <option value="Malta">Malta</option>
   <option value="Marshall Islands">Marshall Islands</option>
   <option value="Martinique">Martinique</option>
   <option value="Mauritania">Mauritania</option>
   <option value="Mauritius">Mauritius</option>
   <option value="Mayotte">Mayotte</option>
   <option value="Mexico">Mexico</option>
   <option value="Midway Islands">Midway Islands</option>
   <option value="Moldova">Moldova</option>
   <option value="Monaco">Monaco</option>
   <option value="Mongolia">Mongolia</option>
   <option value="Montserrat">Montserrat</option>
   <option value="Morocco">Morocco</option>
   <option value="Mozambique">Mozambique</option>
   <option value="Myanmar">Myanmar</option>
   <option value="Nambia">Nambia</option>
   <option value="Nauru">Nauru</option>
   <option value="Nepal">Nepal</option>
   <option value="Netherland Antilles">Netherland Antilles</option>
   <option value="Netherlands">Netherlands (Holland, Europe)</option>
   <option value="Nevis">Nevis</option>
   <option value="New Caledonia">New Caledonia</option>
   <option value="New Zealand">New Zealand</option>
   <option value="Nicaragua">Nicaragua</option>
   <option value="Niger">Niger</option>
   <option value="Nigeria">Nigeria</option>
   <option value="Niue">Niue</option>
   <option value="Norfolk Island">Norfolk Island</option>
   <option value="Norway">Norway</option>
   <option value="Oman">Oman</option>
   <option value="Pakistan">Pakistan</option>
   <option value="Palau Island">Palau Island</option>
   <option value="Palestine">Palestine</option>
   <option value="Panama">Panama</option>
   <option value="Papua New Guinea">Papua New Guinea</option>
   <option value="Paraguay">Paraguay</option>
   <option value="Peru">Peru</option>
   <option value="Phillipines">Philippines</option>
   <option value="Pitcairn Island">Pitcairn Island</option>
   <option value="Poland">Poland</option>
   <option value="Portugal">Portugal</option>
   <option value="Puerto Rico">Puerto Rico</option>
   <option value="Qatar">Qatar</option>
   <option value="Republic of Montenegro">Republic of Montenegro</option>
   <option value="Republic of Serbia">Republic of Serbia</option>
   <option value="Reunion">Reunion</option>
   <option value="Romania">Romania</option>
   <option value="Russia">Russia</option>
   <option value="Rwanda">Rwanda</option>
   <option value="St Barthelemy">St Barthelemy</option>
   <option value="St Eustatius">St Eustatius</option>
   <option value="St Helena">St Helena</option>
   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
   <option value="St Lucia">St Lucia</option>
   <option value="St Maarten">St Maarten</option>
   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
   <option value="Saipan">Saipan</option>
   <option value="Samoa">Samoa</option>
   <option value="Samoa American">Samoa American</option>
   <option value="San Marino">San Marino</option>
   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
   <option value="Saudi Arabia">Saudi Arabia</option>
   <option value="Senegal">Senegal</option>
   <option value="Seychelles">Seychelles</option>
   <option value="Sierra Leone">Sierra Leone</option>
   <option value="Singapore">Singapore</option>
   <option value="Slovakia">Slovakia</option>
   <option value="Slovenia">Slovenia</option>
   <option value="Solomon Islands">Solomon Islands</option>
   <option value="Somalia">Somalia</option>
   <option value="South Africa">South Africa</option>
   <option value="Spain">Spain</option>
   <option value="Sri Lanka">Sri Lanka</option>
   <option value="Sudan">Sudan</option>
   <option value="Suriname">Suriname</option>
   <option value="Swaziland">Swaziland</option>
   <option value="Sweden">Sweden</option>
   <option value="Switzerland">Switzerland</option>
   <option value="Syria">Syria</option>
   <option value="Tahiti">Tahiti</option>
   <option value="Taiwan">Taiwan</option>
   <option value="Tajikistan">Tajikistan</option>
   <option value="Tanzania">Tanzania</option>
   <option value="Thailand">Thailand</option>
   <option value="Togo">Togo</option>
   <option value="Tokelau">Tokelau</option>
   <option value="Tonga">Tonga</option>
   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
   <option value="Tunisia">Tunisia</option>
   <option value="Turkey">Turkey</option>
   <option value="Turkmenistan">Turkmenistan</option>
   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
   <option value="Tuvalu">Tuvalu</option>
   <option value="Uganda">Uganda</option>
   <option value="United Kingdom">United Kingdom</option>
   <option value="Ukraine">Ukraine</option>
   <option value="United Arab Erimates">United Arab Emirates</option>
   <option value="United States of America">United States of America</option>
   <option value="Uraguay">Uruguay</option>
   <option value="Uzbekistan">Uzbekistan</option>
   <option value="Vanuatu">Vanuatu</option>
   <option value="Vatican City State">Vatican City State</option>
   <option value="Venezuela">Venezuela</option>
   <option value="Vietnam">Vietnam</option>
   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
   <option value="Wake Island">Wake Island</option>
   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
   <option value="Yemen">Yemen</option>
   <option value="Zaire">Zaire</option>
   <option value="Zambia">Zambia</option>
   <option value="Zimbabwe">Zimbabwe</option>
     </select>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div> 
                                <!-- Form Group -->
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>State </strong></h6>
                                        <input type="text"  name="state" value="" placeholder="Enter State">
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- Form Group -->
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>City </strong></h6>
                                        <input type="text"  name="city" value="" placeholder="Enter City">
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- Form Group -->
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>Address </strong></h6>
                                        <input type="text"  name="address" value="" placeholder="Enter Address">
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <h4 style="color: #ff5421; margin-left:10px;">Bank Details</h4>
                                <!-- Form Group -->
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-4" style="color: #ff5421; text-align:left;"><strong>Bank Name* </strong></h6>
                                        <input type="text"  name="bankname" value="" placeholder="Enter Bank Name" required>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- Form Group -->
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-6" style="color: #ff5421; text-align:left;"><strong>Account Holder Name* </strong></h6>
                                        <input type="text"  name="accountholder" value="" placeholder="Enter Account Holder Name" required>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- Form Group -->
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-4" style="color: #ff5421; text-align:left;"><strong>Account Number* </strong></h6>
                                        <input type="text"  name="accountno" value="" placeholder="Enter Account Number" required>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- Form Group -->
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-4" style="color: #ff5421; text-align:left;"><strong>Bank Address* </strong></h6>
                                        <input type="text"  name="bankaddress" value="" placeholder="Enter Bank Address" required>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <h4 style="color: #ff5421; margin-left:12px;">If you need help in selling your products List them here</h4>
                                
                                <!-- Form Group -->
                                <div class="field_wrapper">
                                <div class="form-group col-lg-12 mb-25">
                              
                                <h6 class="form-group col-lg-4 " style="color: #ff5421; text-align:left;"><strong>Product name  </strong>  <a href="javascript:void(0);" class="add_button col-sm-6" title="Add field" style="margin-left:180px;"><i class="fa fa-plus-circle">Add More</i></a></h6>
                                        <input class="form-control key" type="text"  name="product_name[]" value=""  id="key" placeholder="Enter Product name">
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- Form Group -->
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>Image</strong></h6>
                                <input class="form-control key" name="product_image[]"  placeholder="Choose Photo"  id="key" type="file" style="background:hidden;" >
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- Form Group -->
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>Quantity </strong></h6>
                                        <input class="form-control key" type="number"  name="quantity[]" value="" id="key" placeholder="Enter Quantity">
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- Form Group -->
                                <div class="form-group col-lg-12 mb-25">
                                <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>Price </strong></h6>
                                        <input class="form-control key" type="text"  name="amount[]" value="" id="key" placeholder="Enter Price">
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                               
                               <!-- Form Group -->
                                 <div class="form-group col-lg-12 mb-25">
                                 <h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>Description</strong></h6>
                                <textarea class="form-control key" style="padding:6px 30px;" type="text" rows="3" name="description[]" id="key" placeholder="Enter description"> 
                                        </textarea>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div> 
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
                          
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var fieldHTML = '<div class="row row-sm "><div class="form-group col-lg-12 mb-25"><h6 class="form-group col-lg-4 " style="color: #ff5421; text-align:left;"><strong>Product name  </strong></h6><input class="form-control key" type="text"  name="product_name[]" value=""  id="key" placeholder="Enter Product name"> @error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror</div><div class="form-group col-lg-12 mb-25"><h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>Image</strong></h6><input class="form-control key" name="product_image[]"  placeholder="Choose Photo"  id="key" type="file" style="background:hidden;" required>@error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror</div><div class="form-group col-lg-12 mb-25"><h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>Quantity </strong></h6><input class="form-control key" type="number"  name="quantity[]" value="" id="key" placeholder="Enter Quantity">@error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror</div><div class="form-group col-lg-12 mb-25"><h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>Price </strong></h6><input class="form-control key" type="text"  name="amount[]" value="" id="key" placeholder="Enter Price">@error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror</div><div class="form-group col-lg-12 mb-25"><h6 class="form-group col-lg-2" style="color: #ff5421; text-align:left;"><strong>Description</strong></h6><textarea class="form-control key" style="padding:6px 30px;" type="text" rows="3" name="description[]" id="key" placeholder="Enter description"> </textarea>@error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror</div><a style="margin-top: 36px;" href="javascript:void(0);" class="remove_button"><i class="fa fa-minus-circle"></i></a></div>'; //New input field html 
        var x = 1; //Initial field counter is 1
        
        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){ 
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });
        
        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
    </script>
                          