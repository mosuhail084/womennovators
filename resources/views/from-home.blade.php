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
        <title>WE-PITCH</title>

        <!-- stylesheet start -->
        @include('backEnd.layouts.includes.stylesheet')
        <!-- stylesheet end -->
    </head>

    <body style="background-color: pink; font-size:0.975rem">
        <br>
        <a href="#"><img style="margin-top: 0px; margin-left:50px; margin-bottom:0px;"
                src="{{ url('frontEnd/images/Womennovator.png') }}" alt="logo" height="60px" width="150px" /></a>
        <!-- main-signin-wrapper -->
        <div class="my-auto page page-h">
            <div class="main-signin-wrapper">

                <div class="main-card-signin d-md-flex wd-40p" style=" background-color: rgba(106, 90, 205, 0.3);
            width: 120%;
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 2px 2px 15px rgba(0, 0, 0, 0.3);">

                    <div class="p-5 wd-md-100p">
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


                        <div class="main-signin-header">
                            <h2 style="text-align: center;color:white;">Be a part of Biggest Women Network, Earn by Working From Your Home</h2>
                            <form id="register" method="post" action="{{ route('work.store')}}"
                                enctype="multipart/form-data">
                                @csrf

                                <div>
                                    <ul>
                                        @foreach ($errors->all() as $e)
                                        <li style="color:red;">{{$e}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="form-group">
                                    <label style="color: #fff;"><strong>Name <span class="tx-danger">*</span></strong></label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name" required>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                    <div class="form-group">
    <label style="    color: #fff; "><strong>Country<span class="tx-danger">*</span></strong></label>
    <select class="form-control select2" name="country" required>
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
     @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label style="color: #fff; "><strong>State<span class="tx-danger">*</span></strong></label>
                                    <select class="form-control select2" name="state" required>
                                        <option value="">Please Seelct One</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                        <option value="Daman and Diu">Daman and Diu</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Lakshadweep">Lakshadweep</option>
                                        <option value="Puducherry">Puducherry</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                    </select>
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label style="    color: #fff ;"><strong>City<span class="tx-danger">*</span></strong></label>
                                    <input type="text" name="city" class="form-control" placeholder="Enter City" required>

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label style="    color: #fff; "><strong>Address<span class="tx-danger">*</span></strong></label>
                                    <input type="text" name="address" class="form-control"
                                        placeholder="Enter Address" required>

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label style="    color: #fff; "><strong>Pincode<span class="tx-danger">*</span></strong></label>
                                    <input type="tel" name="pincode" class="form-control"
                                        placeholder="Enter Pincode" required>

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label style="    color: #fff; "><strong>{{ __('E-Mail Address') }}<span class="tx-danger">*</span></strong></label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter Email" required>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label style="    color: #fff; "><strong>Phone<span class="tx-danger">*</span></strong></label>
                                    <input type="tel" name="phone" class="form-control" placeholder="Enter Phone" pattern="((\+*)((0[ -]+)*|(91 )*)(\d{12}+|\d{10}+))|\d{5}([- ]*)\d{6}" required>

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label style="color: #fff; "><strong>Age<span class="tx-danger">*</span></strong></label>
                                <select class="18-100" name="age" required></select>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                <label style="color: #fff; "><strong>I am a ?<span class="tx-danger">*</span></strong></label><br/>
                                    <input type="radio" name="am" id="chkNo"  value="Homemaker" onclick="HideData()" >
                                    <label class="form-check-label" for="chkNo"><b
                                            style="color: white;"><strong>Homemaker</strong></b></label>

                                    <input type="radio" name="am" id="chkYes"  value="Professional" onclick="ShowHideDiv()">
                                    <label class="form-check-label" for="chkYes"><b
                                            style="color: white;"><strong>Professional</strong></b></label>
                                    <input type="radio" name="am"  id="chkYes1"  value="BusinessOwner" onclick="ShowHideDiv1()">
                                    <label class="form-check-label" for="chkYes"><b
                                            style="color: white;"><strong>Business Owner</strong></b></label>
                                    <input type="radio" name="am" id="chkYes2"  value="Student" onclick="ShowHideDiv2()">
                                    <label class="form-check-label" for="chkYes"><b
                                            style="color: white;"><strong>Student</strong></b></label>


                                            <div id="student" style="display: none;" class="form-group">
                                    <label style="color: white;"><strong>name of the Institution</strong></label>
                                    <textarea type="text" rows="3" name="student" class="form-control" id="txtPassportNumber" 
                                        placeholder="Enter Comment"></textarea>

                          </div>
                          <div id="businessowner" style="display: none;" class="form-group">
                                    <label style="color: white;"><strong> Name of your Business </strong></label>
                                    <textarea type="text" rows="3" name="business" class="form-control" id="txtPassportNumber" 
                                        placeholder="Enter Comment"></textarea>

                          </div>
                          <div id="professional" style="display: none;" class="form-group">
                                    <label style="color: white;"><strong>please  write your profession</strong></label>
                                    <textarea type="text" rows="3" name="professional" class="form-control" id="txtPassportNumber" 
                                        placeholder="Enter Comment"></textarea>

                          </div>

                                </div>
                                <div class="form-group">
                                <label style="color: #fff; "><strong>How did you hear about us?<span class="tx-danger">*</span></strong></label><br/>
                                <input type="radio" name="hear" id="cYes"  value="Influencer"  onclick="ShowHideDivv()">
                                    <label class="form-check-label" for="chYes"><b
                                            style="color: white;"><strong>Influencer</strong></b></label>

                                    <input type="radio" name="hear" id="cYes1"  value="Online" onclick="ShowHideDivv1()" >
                                    <label class="form-check-label" for="chYes"><b
                                            style="color: white;"><strong>Online</strong></b></label>
                                    <input type="radio" name="hear" id="cYes2"  value="Friends and Family" onclick="ShowHideDivv2()" >
                                    <label class="form-check-label" for="chYes"><b
                                            style="color: white;"><strong>Friends and Family</strong></b></label>  
                                 </div>
                                 <div id="Influencer" style="display: none;" class="form-group">
                                    <label style="color: white;"><strong>please write the name</strong></label>
                                    <textarea type="text" rows="3" name="influencer" class="form-control" id="txtPassportNumber1" 
                                        placeholder="Enter Comment"></textarea>

                          </div>
                          <div id="Online" style="display: none;" class="form-group">
                                    <label style="color: white;"><strong> FB, Insta ?? </strong></label>
                                    <textarea type="text" rows="3" name="online" class="form-control" id="txtPassportNumber1" 
                                        placeholder="Enter Comment"></textarea>

                          </div>
                          <div id="Friends and Family" style="display: none;" class="form-group">
                                    <label style="color: white;"><strong>Please Write the name</strong></label>
                                    <textarea type="text" rows="3" name="family" class="form-control" id="txtPassportNumber1" 
                                        placeholder="Enter Comment"></textarea>

                          </div>


                                <div class="form-group">
                                    <label style="color: #fff; "><strong>Why are you interested in earn from home oppurtunity?<span class="tx-danger">*</span></strong></label>
                                    <select id="exampleFormControlSelect3" class="form-control" name="earn" required>
                                        <option selected>--</option>
                                        <option value="Need Additional revenue stream">Need Additional revenue stream</option>
                                        <option value="Want to be a busines women">Want to be a busines women</option>
                                        <option value="other">Other</option>
                                    </select>
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div id='designationn' style="display: none;" class="form-group">
                                    <label style="color: white;"><strong>Comment</strong></label>
                                    <textarea type="text" rows="3" name="comment" class="form-control"
                                        placeholder="Enter Comment"></textarea>

                          </div>
                          <div class="form-group">
                          <label style="    color: #fff; "><strong>How efficient are you in using Whatsapp, FB, Insta ?<span class="tx-danger">*</span></strong></label><br/>
                                    <input type="radio" name="social" id="inlineRadio2" value="Expert"  required>
                                    <label class="form-check-label" for="inlineRadio2"><b
                                            style="color: white;"><strong>Expert</strong></b></label>

                                    <input type="radio" name="social" id="inlineRadio2" value="Good">
                                    <label class="form-check-label" for="inlineRadio2"><b
                                            style="color: white;"><strong>Good</strong></b></label>
                                            <input type="radio" name="social" id="inlineRadio2" value="Average">
                                    <label class="form-check-label" for="inlineRadio2"><b
                                            style="color: white;"><strong>Average</strong></b></label>
                                            <input type="radio" name="social" id="inlineRadio2" value="Fair">
                                    <label class="form-check-label" for="inlineRadio2"><b
                                            style="color: white;"><strong>Fair</strong></b></label>
                                            <input type="radio" name="social" id="inlineRadio2" value="Need training">
                                    <label class="form-check-label" for="inlineRadio2"><b
                                            style="color: white;"><strong>Need training</strong></b></label>
                                </div>
                          <div>
                          <label style="    color: #fff;"><strong>Do you have a bank account on your name?<span class="tx-danger">*</span></strong></label>
                          <input type="radio" name="account" value="Yes" onclick="show2();" />
                           <b style="color: white;"><strong>Yes</strong></b>
                          <input type="radio" name="account" value="No" onclick="show1();"  />
                            <b style="color: white;"><strong>No</strong></b>
                          
                          <div id="div1" style="display: none;">
                          <input type="radio" value="Saving" name="type">
                           <b style="color: white;"><strong>Saving</strong></b>
                           <input type="radio" value="Current" name="type">
                            <b  style="color: white;"><strong>Current</strong></b>
                            </div>
                          </div>

                          <div class="form-group"> 
                          <label style="    color: #fff; "><strong>I have a<span class="tx-danger">*</span></strong></label>
                          <div class="form-check">
                         <input class="form-check-input" type="checkbox" name="have[]" value="1" id="defaultCheck1">
                          <label style="color: white;" class="form-check-label" for="defaultCheck1">
                          Pan Card
                          </label>
                          </div>
                          <div class="form-check">
                         <input class="form-check-input" type="checkbox" name="have[]" value="2" id="defaultCheck1">
                          <label style="color: white;" class="form-check-label" for="defaultCheck1">
                          Adhar Card
                          </label>
                          </div>
                          <div class="form-check">
                         <input class="form-check-input" type="checkbox" name="have[]" value="3" id="defaultCheck1">
                          <label style="color: white;" class="form-check-label" for="defaultCheck1">
                          License
                          </label>
                          </div>
                          <div class="form-check">
                         <input class="form-check-input" type="checkbox" name="have[]" value="4" id="defaultCheck1">
                          <label style="color: white;" class="form-check-label" for="defaultCheck1">
                          Voters card
                          </label>
                          </div>
                          <div class="form-check">
                         <input class="form-check-input" type="checkbox" name="have[]" value="5" id="defaultCheck1">
                          <label style="color: white;" class="form-check-label" for="defaultCheck1">
                          Passport
                          </label>
                          </div>
                           </div>
                           <div class="form-group">
                                    <label style="    color: #fff; "><strong>City you will sell the product in<span class="tx-danger">*</span></strong></label>
                                    <input type="text" name="sell" class="form-control" placeholder="Enter City" required>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                               <label for="exampleFormControlSelect1" style="color: #fff; "><strong>Products you are Interested in Reselling<span class="tx-danger">*</span></strong></label>
                               <select class="form-control select2" multiple="multiple"
                                    onchange="console.log($(this).children(':selected').length)"  name="product[]" required>
                               <option>--</option>
                               <option value="1">Appliances</option>
                               <option value="2">Baby</option>
                               <option value="3">Beauty</option>
                               <option value="4">Books</option>
                               <option value="5">Clothing & Accessories</option>
                               <option value="6">Collectibles</option>
                               <option value="7">Computer & Accessories</option>
                               <option value="8">Electronics</option>
                               <option value="9">Furniture</option>
                               <option value="10">Garden & Outdoors</option>
                               <option value="11">Grocery & Gourmet Foods</option>
                               <option value="12">Health & Personal Care</option>
                               <option value="13">Home & Kitchen</option>
                               <option value="14">Jewellery</option>
                               <option value="15">Kindle Store</option>
                               <option value="16">Luggage & Bags</option>
                               <option value="17"> Luxury Beauty</option>
                               <option value="18"> Musical Instruments</option>
                               <option value="19">Office Products</option>
                               <option value="20">Pet Supplies </option>
                               <option value="21">Shoes & Handbags</option>
                               <option value="22">Software</option>
                               <option value="23">Sports, Fitness,& Outdoors</option>
                               <option value="24">Toys & Games</option>
                              </select>
                              </div>
                              <div class="form-group">
                                    <label style=" color: #fff;"><strong>Any past experience in Reselling<span class="tx-danger">*</span></strong></label>
                                    <input type="number" name="experience" class="form-control" id="phone_number" placeholder="Enter Experience"  required>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                <label style=" color: #fff; "><strong>Medium through which you plan to resell<span class="tx-danger">*</span></strong></label><br/>
                                    <input type="radio" name="medium" id="inlineRadio2" value="Online " >
                                    <label class="form-check-label" for="inlineRadio2"><b
                                            style="color: white;">Online (Website, Telephone or both)</b></label>

                                    <input type="radio" name="medium" id="inlineRadio2" value="Offline">
                                    <label class="form-check-label" for="inlineRadio2"><b
                                            style="color: white;">Offline (Retail)</b></label>

                                </div>
                                <div class="form-group">
                                    <label style="    color: #fff; "><strong>Why do you think these products you will be able to sell in your area/ city?<span class="tx-danger">*</span></strong></label>
                                    <input type="text" name="think" class="form-control" placeholder="Enter Why do you think" required>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label style="    color: #fff;"><strong>Any Suggestions?<span class="tx-danger">*</span></strong></label>
                                    <textarea type="text" rows="3" name="suggestions" class="form-control" placeholder="Enter Suggestions" required> 
                                        </textarea>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <button style="background:#8F4A9F;" type="submit" class="btn btn-main-primary btn-block" >Submit</button>
                                </form>
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
</script>


</html>
