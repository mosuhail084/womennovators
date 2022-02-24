{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Womennovator Live Series</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background: linear-gradient(skyblue, pink, lightgreen);
        }

        div.main {
            width: 700px;
            margin: 10px auto 0px auto;
        }

        form#register {
            margin: 40px;
        }

        div.register {
            background-color: rgba(0, 0, 0, 0.2);
            width: 100%;
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 2px 2px 15px rgba(0, 0, 0, 0.3);
            color: #fff;
        }

    </style>
</head>

<body>
    <a href="#"><img style="margin-top: 10px; margin-left:50px; margin-bottom:0px;"
            src="{{ url('frontEnd/images/Womennovator.png') }}" alt="logo" height="60px" width="150px" /></a>
<div class="main">
    <div class="register">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2 style="margin-top:20px; text-align:center;">Womennovator Live Series</h2>
                    </div>
                </div>
            </div>
        </div>
        <div>
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


            <div>
                <ul>
                    @foreach ($errors->all() as $e)
                    <li style="color:red;">{{$e}}</li>
                    @endforeach
                </ul>
            </div>
            <form id="register" method="post" action="{{ url('live/store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label><b>Name</b></label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label><b>Email</b></label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label><b>Contact no.</b></label>
                            <input type="tel" class="form-control" name="phone" placeholder="Enter Contact Number">
                        </div>
                        <div class="form-group">
                            <label><b>Country</b></label>
                            <select class="form-control" name="country">
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
                        </div>
                        <div class="form-group">
                            <label><b>City</b></label>
                            <input type="text" class="form-control" name="city" placeholder="Enter City">
                        </div>
                        <div class="form-group">
                            <label><b>Address & Pincode</b></label>
                            <input type="text" class="form-control" name="address"
                                placeholder="Enter Address & Pincode">
                        </div>
                        <div class="form-group">
                            <label><b>Company Name</b></label>
                            <input type="text" class="form-control" name="company"
                                placeholder="if not applicable , Write NA">
                        </div>
                        <div class="form-group">
                            <label><b>Designation</b></label>
                            <input type="text" class="form-control" name="designation"
                                placeholder="if not applicable , Write NA">
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male"
                                checked>
                            <label class="form-check-label" for="inlineRadio1"><b>Male</b></label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
                            <label class="form-check-label" for="inlineRadio2"><b>Female</b></label>
                        </div>
                        <div class="form-group">
                            <label><b>Are you a:</b></label>
                            <select class="form-control" name="are">
                                <option selected>--</option>
                                <option>Influencer</option>
                                <option>Jury</option>
                                <option>Women face</option>
                                <option>Value Partner</option>
                                <option>KGS almuni</option>
                                <option>KGS employee</option>
                                <option>General Attendee</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label><b>Referred by whom / Heard from whom</b></label>
                            <input type="text" class="form-control" name="referred" placeholder="Referred by whom">
                        </div>
                        <div class="form-group">
                            <label><b>Sectors of Interest</b></label>
                            <input type="text" class="form-control" name="sectors"
                                placeholder="Enter Sectors of Interest">
                        </div>
                        <div class="form-group">
                            <label><b>Session Interested For :</b></label>
                            <select multiple class="form-control" name="session">
                                <option>--</option>
                                <option>6th March 2021 WE Pitch Education</option>
                                <option>8th March 2021 WE Pitch Kashmir</option>
                                <option>10th March 2021 Womennovator Australia Launch</option>
                                <option>19th March 2021 Travel & Tourism</option>
                                <option>25th March 2021 WE Pitch Health Care & Mental wellness</option>
                                <option>Every Monday Unconferencing Session with women from MP</option>
                                <option>Every Tuesday Unconferencing Session with women from Uttarakhand</option>
                                <option>Every Wednesday Unconferencing Session with women from Uttar pradesh
                                </option>
                                <option>Every Thursday Interactive Webinar on what's New in Finance & Accounting
                                </option>
                                <option>Every Friday- Vocal For Local Series 1</option>
                                <option>Every Saturday Unconferencing Session with women from Maharashtra</option>
                                <option>5th November 2020 Careers of the Future- Session</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-area">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </body>

    </html> --}}

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

    <body style="background: linear-gradient(skyblue, pink, lightgreen);">
        <br>
        <a href="#"><img style="margin-top: 0px; margin-left:50px; margin-bottom:0px;"
                src="{{ url('frontEnd/images/Womennovator.png') }}" alt="logo" height="60px" width="150px" /></a>
        <!-- main-signin-wrapper -->
        <div class="my-auto page page-h">
            <div class="main-signin-wrapper">

                <div class="main-card-signin d-md-flex wd-40p" style=" background-color: rgba(0, 0, 0, 0.2);
            width: 100%;
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
                            <h2 style="text-align: center;color:white;">Womennovator Live Series</h2>


                            <form id="register" method="post" action="{{ url('live/store')}}"
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
                                    <label style="    color: #fff;"><strong>Name</strong></label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label style="    color: #fff;"><strong>{{ __('E-Mail Address') }}</strong></label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter Email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label style="    color: #fff;"><strong>Phone</strong></label>
                                    <input type="tel" name="phone" class="form-control" placeholder="Enter Phone">

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label style="color: #fff;"><strong>State</strong></label>
                                    <select class="form-control select2" name="state">
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
                                    <label style="    color: #fff;"><strong>City</strong></label>
                                    <input type="tel" name="city" class="form-control" placeholder="Enter City">

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label style="    color: #fff;"><strong>Address & Pincode</strong></label>
                                    <input type="tel" name="address" class="form-control"
                                        placeholder="Enter Address & Pincode">

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label style="    color: #fff;"><strong>Company Name</strong></label>
                                    <input type="tel" name="company" class="form-control"
                                        placeholder="if not applicable , Write NA">

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label style="    color: #fff;"><strong>Designation</strong></label>
                                    <input type="text" class="form-control" name="designation"
                                        placeholder="if not applicable , Write NA">
                                </div>
                                <div class="form-group">
                                    <input type="radio" name="gender" id="inlineRadio2" value="Male" checked>
                                    <label class="form-check-label" for="inlineRadio2"><b
                                            style="color: white;"><strong>Male</strong></b></label>

                                    <input type="radio" name="gender" id="inlineRadio2" value="Female">
                                    <label class="form-check-label" for="inlineRadio2"><b
                                            style="color: white;"><strong>Female</strong></b></label>

                                </div>
                                <div class="form-group">
                                    <label style="color: #fff;"><strong>How are you associated with
                                            womennovator?</strong></label>
                                    <select id="exampleFormControlSelect3" class="form-control" name="are">
                                        <option selected>--</option>
                                        <option>Influencer</option>
                                        <option>Jury</option>
                                        <option>Women face</option>
                                        <option>Value Partner</option>
                                        <option>KGS almuni</option>
                                        <option>KGS employee</option>
                                        <option>General Attendee</option>
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
                                <label style="    color: #fff;"><strong>Referred by whom / Heard from
                                        whom</strong></label>
                                <input type="tel" name="referred" class="form-control" placeholder="Referred by whom">

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label style="    color: #fff;"><strong>Sectors of Interest</strong></label>
                                <input type="tel" name="sectors" class="form-control"
                                    placeholder="Enter Sectors of Interest">

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label style="color: #fff;"><strong>Session Interested For :</strong></label>
                                <select  multiple="multiple"
                                    onchange="console.log($(this).children(':selected').length)"
                                    class="form-control select2" name="session[]">
                                    <option value="">Please Seelct One</option>
                                    <option value="1">Creating Distribution Channel</option>
                                    <option value="2">Idea to Prototype to Final Product</option>
                                    <option value="3">Go to Market Strategy</option>
                                    <option value="4">Availment of Government Schemes</option>
                                    <option value="5">Funding</option>
                                    <option value="6">Social Media and branding</option>
                                    <option value="7">Finance, Accounts and compliance</option>
                                    <option value="8">Others... Type Your Challenge</option>
                                </select>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                           
                            <button style="background:#8F4A9F;" type="submit"
                                class="btn btn-main-primary btn-block">Submit</button>
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
                </>
            </div>
        </div>
    </div>
    <!-- /main-signin-wrapper -->



    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>


    <!-- js bar start-->
    @include('backEnd.layouts.includes.js')
    <!-- js bar end -->

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

</body>

</html>
