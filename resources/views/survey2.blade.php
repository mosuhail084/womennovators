<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<html lang="en">
<!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Womennovator Survey </title>
    <meta name="description" content="">
    <meta name="author" content="Ansonika">

    <!-- Favicons-->


    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link href="survey/css/bootstrap.css" rel="stylesheet">
    <link href="survey/css/style.css" rel="stylesheet">
    <link href="survey/font-awesome/css/font-awesome.css" rel="stylesheet" >
    <link href="survey/css/socialize-bookmarks.css" rel="stylesheet">
    <link href="survey/js/fancybox/source/jquery.fancybox.css?v=2.1.4" rel="stylesheet">
    <link href="survey/check_radio/skins/square/aero.css" rel="stylesheet">

    <!-- Toggle Switch -->
    <link rel="stylesheet" href="survey/css/jquery.switch.css">

    <!-- Owl Carousel Assets -->
    <link href="survey/css/owl.carousel.css" rel="stylesheet">
    <link href="survey/css/owl.theme.css" rel="stylesheet">

    <!-- Google web font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
    
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="{{('wenew/css/style.css')}}">
        <link rel="stylesheet" href="{{('wenew/css/responsive.css')}}">
        <style>
            .form-content p {
    font-size: 25px;
    font-family: arial;
    line-height: 39px;
}
        header {
        border-bottom: 1px solid #ddd9;}
          .bias{
              
	    margin-top:64px; 
    	}
    	.form-content p {
         font-size: 25px;
        }
    	@media (max-width:767px){
    	    .form-content {
            margin-top: 20px;
            }
    	    .form-content p {
            font-size: 16px;
            }
    	    .bias{
	         margin-top:0px; 
    	    }
    	    section.content {padding: 0px 0;}
    	    section.form-area {padding: 30px 0;}
    	    header img { width: 206px; }
    	    form#surveyform h3 {
            margin: 13px 0px 12px;}
            .remove-br br {    display: none;}
            hr {
        margin: 30px 0;}
        	}
        	
            .select2 {
    overflow: hidden;
                width: 100%!important;}
    	
        </style>
        
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="survey/js/jquery-1.10.2.min.js"></script>
    <script src="survey/js/jquery-ui-1.8.22.min.js"></script>

    
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Wizard-->
    <script src="survey/js/jquery.wizard.js"></script>

    <!-- Radio and checkbox styles -->
    <script src="survey/check_radio/jquery.icheck.js"></script>

    <!-- HTML5 and CSS3-in older browsers-->
    <script src="survey/js/modernizr.custom.17475.js"></script>

    <!-- Support media queries for IE8 -->
    <script src="survey/js/respond.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script> 

    <script>
  
$(document).ready(function() {
    $('.dropdown').select2();
});
    </script>
    <style>
        label.error {
    color: #fff;
    margin-top: 5px;
}
        .select2 {
    height: 47px;
    border-radius: 0;
}
span.selection span {
    height: 47px;
}
    </style>
</head>

<body>

<section id="">
	<header>
         <div class="container">
            <div class="row">
        	<div class="col-md-3 col-xs-8" ><a href="{{url('https://womennovators.com/')}}" ><img src="survey/img/WEIogoi.png" class="img-responsive"></a></div>            
            <div class="btn-responsive-menu"> <span class="bar"></span> <span class="bar"></span> <span class="bar"></span> </div>
            
            
         </div><!-- End row -->
         </div><!-- End container -->
        </header> <!-- End header -->
        	
 </section>   
 
<!--  <div class="banner">
    <img src="{{url('/wenew/img/banner.png')}}" class="img-responsive">
</div>-->
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="form-content">
                    <img src="{{url('/wenew/img/image001.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-content" >
                    <p ><strong>The Under Confidence Cycles survey</strong> endeavors to explore the challenges faced by women in the workplace. It also brings to light the pressures of the pandemic that have driven employees - especially women – to downshifting their careers or even leaving the workplace.</p>
                    <p >Living Experiences of <strong>Women At Work </strong> as they pursue their goals, enhance their skills to navigate their careers during these difficult times.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container" id="main">
 <h2>PERSONAL MATTERS </h2>
    <p>This survey is designed for women, and all gender references will be female. </p>
<!-- Start Survey container -->
<div id="survey_container"> 
	<div id="top-wizard">
		<strong>Progress <span id="location"></span></strong>
		<div id="progressbar"></div>
		<div class="shadow"></div>
	</div><!-- end top-wizard -->
    
	<form action="{{url('wesurveys-add')}}" method="POST">
	   @csrf  

		<div id="middle-wizard">
           
                <div class="step">
                   
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                          <div class="col-md-6">
                
                    <div class="form-group">
                        <label>Please Enter Your Email ID</label>
                        <input type="email" placeholder="Your Email ID" name="surve_email" required  onkeyup="checkemail_func(this.value);">
                   
                </div>
            </div>  
                       
            </div>
        </div>
            <div class="step" >
               <div  >
               
                <div class="row" >
                      <div class="col-md-12">
                            <div class="form-group">
                                
                                <h3>Which best describes your gender? </h3>
                                <ul class="list-haff">
                                    <li>
                                        <label class="radio-check">Female
                                            <input type="radio"  value="female" name="gender" id="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Male
                                            <input type="radio" value="Male" name="gender" id="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Non-Binary
                                            <input type="radio" value="Non-Binary" name="gender"id="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Prefer Not to Say
                                            <input type="radio" value="Prefer Not to Say" name="gender" id="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>             
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                           <div class="col-sm-12">
                                <h3>Where do you currently live?   </h3>
                            </div>
                            <div class="col-sm-10">
                                <select name="country" id="category"  >
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
                    <div class="col-sm-6">
                        <div class="row">
                           <div class="col-sm-12">
                                <h3>Where are you based?  </h3>
                            </div>
                            <div class="col-sm-10">
                               <select name="state" id="subcategory_id">
                                    
                                </select>
                            </div>                
                        </div> 
                    </div>
                </div>
				<div class="row">
					<div class="col-md-5 col-md-offset-3">
						<ul class="data-list" id="terms">
							<li>
							   
                     
                             
                           <label class="">
                                   
                                   
                                    <a></a>
                                </label>
							</li>
						</ul>
					</div>
				</div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <h3>How old are you</h3>
                            <ul class="list-haff">
                                <li>
                                    <label class="radio-check">Under 18
                                        <input type="radio" value="Under 18"  name="age" id="age">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="radio-check">18-34
                                        <input type="radio" value="18-34" name="age" id="age">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="radio-check">35-54
                                        <input type="radio" value="35-54" name="age" id="age">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="radio-check">54+
                                        <input type="radio" value="54+" name="age" id="age">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <h3>What is your highest qualification? <span style="color:red">*</span></h3>
                            <select name="qualification" id="qualification" onchange='CheckColors(this.value);' >
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
                    <div class="col-md-6 remove-br"  style="margin-top: 2px;">
                        <br>
                        <br>
                        
                        <input type="text" name="qualification_other" id="qualification" placeholder="Highest Qualification" style='display:none; '/>
                      </div>  
                </div>
            </div>
                
			</div><!-- end step-->
            
		
            
			<div class="step " >
                <div class="row" >
				<div class="col-md-12">
					<h3>Let's get to know you better.</h3>
					
				</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" placeholder="Your Name " name="name" id="name" required="true">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" placeholder="Your email ID" name="email" id="email" required >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="number" placeholder="Your Mobile Number " name="phone" id="phone" required >
                        </div>
                    </div>
                    
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">                        
                        <h3>Let's understand your digital presence.</h3>
                    </div>
                    <div class="clearfix"></div>
                        <div class="col-md-12">  
                        <div class="form-group">
                           <input placeholder="Website" name="website" id="website">
                          </div> 
                        </div>
                    <div class="col-md-6">
                        <div class="form-group">
                         <input placeholder="Facebook "  name="Faceook" id="Faceook">
                    </div>
                    </div>
                     <div class="col-md-6">
                        <div class="form-group">
                         <input placeholder="Linkedin " name="Linkedin"  id="Linkedin">
                    </div>
                    </div>
                     <div class="col-md-6">
                        <div class="form-group">
                         <input placeholder="Instagram " name="Instagram" id="Instagram">
                    </div>
                    </div>
                     <div class="col-md-6">
                        <div class="form-group">
                         <input placeholder="Twitter " name="Twitter" id="Twitter">
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                         <input placeholder="Youtube " name="Youtube" id="Youtube">
                    </div>
                    </div>
                     <div class="col-md-6">
                        <div class="form-group">
                         <input placeholder="Any Other " name="any_other_link" id="any_other_link">
                    </div>
                    </div>
                     
                </div>
                <br>
                <div class="row">
                   
                    <div class="clearfix"></div>
                    
                        <div class="col-md-6">
                            
                            <h3>Which industry do you belong to?</h3>
                            <br>
                            <select name="industry" onchange='CheckSector(this.value);' id="industry" >
                                <option value="" >Please select one</option>
                                @foreach($sector as $sectorData)
                                    <option value="{{$sectorData->id}}" >
                                    {{ $sectorData->sectorname }}</option>
                                    @endforeach   
                                    
                                <option value="others">Others</option>
                                
                            </select>
                            
                            <input type="text" name="industry_other" id="sector" style='display:none; margin-top: 10px;'/>
                        </div>
                    <div class="col-md-6">
                        <h3>How do you describe your business?   </h3>
                       ( <small>You can choose mutiple</small>)
                   
                        <select name="business[]" id="mutibusiness" multiple="" class="dropdown" >
                                        
                                        <option value="transformative">Transformative</option>
                                        <option value="equitable">Equitable</option>
                                        <option value="innovative">Innovative</option>
                                        <option value="sustainable">Sustainable</option>
                                        <option value="feasible">Feasible</option>
                                        <option value="profitable">Profitable</option>
                                    </select>
                        
                    </div>
                </div>
                <br>
			 
            </div><!-- end step -->
            
			<div class="step row">
                
				<div class="col-md-12">
                    <h4>So, take a quick journey of self-discovery</h4>
                                <h4 style="color:red">Let’s try to Jump the Broken Rung</h4>
                   
                        <h3>
                            How often have you refused a promotion or turned down a business expansion opportunity due to family responsibilities?  </h3>
                            <div class="form-field">
                                <ul class="list-haff">
                                    <li>
                                        <label class="radio-check">Always
                                            <input type="radio"  value="always" name="responsibility">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Often
                                            <input type="radio" value="often" name="responsibility">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Sometimes
                                            <input type="radio" value="sometimes" name="responsibility">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Never
                                            <input type="radio" value="never" name="responsibility">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                    </div>
                    <br>
                    <br>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <div class="row">
                            <section class="content" style="margin-top: 20px;">
                                <div class="container">
                                    <div class="row">
                                         <div class="col-md-2">
                                             </div>
                                        <div class="col-md-6">
                                            <div class="form-content">
                                                <img src="https://womennovators.com/wenew/img/image015.png" alt="">
                                            </div>
                                        </div>
                                         <div class="col-md-3">
                                             </div>
                                      
                                       
                                    </div>
                                </div>
                            </section>
                         
                          
                       </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <div class="form-group">
                            <p style="font-size: 18px; line-height: 28px; font-weight: 600;">The broken rung is one of the major reasons why men significantly outnumber women as managers – this number decreases at every subsequent level. Leaders must enable women to jump this broken rung.</p>
                        </div>
                    </div>		
                    <div class="clearfix"></div>
                   					
				
			</div><!-- end step -->
            
            <div class="step row">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <h3>Did you give a break to your professional life when you decided to become a mother?</h3>
                            <div class="form-field">
                                <ul class="list-haff">
                                    <li>
                                        <label class="radio-check">Yes
                                            <input type="radio"  value="yes" name="become_a_mother">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">No
                                            <input type="radio" value="no" name="become_a_mother">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">For Some Years
                                            <input type="radio" value="for some years" name="become_a_mother">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <h3>What is your family type?</h3>
                            <div class="form-field">
                                <ul class="list-haff">
                                    <li>
                                        <label class="radio-check">Nuclear family
                                            <input type="radio"  value="nuclear family" name="family_type">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Extended (joint) family 
                                            <input type="radio" value="joint_family" name="family_type">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Single parent
                                            <input type="radio" value="single parent" name="family_type">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Other
                                            <input type="radio" value="Other" name="family_type">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <h3>How do you describe your family structure?</h3>
                            <div class="form-field">
                                <ul class="list-haff">
                                    <li>
                                        <label class="radio-check">Single and independent
                                            <input type="radio"  value="Single and independent" name="family_structure">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Single staying with family
                                            <input type="radio" value="single staying with family" name="family_structure">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Married with children
                                            <input type="radio" value="Married with children" name="family_structure">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Married without children
                                            <input type="radio" value="Married without children" name="family_structure">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Do not wish to disclose
                                            <input type="radio" value="Do not wish to disclose" name="family_structure">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <h3>Who decided to stay back as a caretaker for the children?</h3>
                            <div class="form-field">
                                <ul class="list-haff">
                                    <li>
                                        <label class="radio-check">Mother
                                            <input type="radio"  value="mother" name="caretaker">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Father
                                            <input type="radio" value="father" name="caretaker">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Grandparents
                                            <input type="radio" value="grandparent" name="caretaker">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Hired Caregiver or Caregiving agency
                                            <input type="radio" value="Hired Caregiver or Caregiving agency" name="caretaker">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Not applicable to me 
                                            <input type="radio" value="Not applicable to me" name="caretaker">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
			</div><!-- end step -->
            <div class="step row">
				<div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <h3>Did your employer/organization provide support for caregiving?</h3>
                            <div class="form-field">
                                <div class="form-group">
                           
                            ( <small>You can choose mutiple</small>)
                            <div class="form-field">
                            <select name="support_for_caregiving[]" id="mutirelevant" multiple="" class="label ui selection fluid dropdown3">
                                    <option value="">Choose One</option>
                                    <option value="Provided care giving services in the workplace">Provided care giving services in the workplace</option>
                                    <option value="Paternal leave privileges to fathers">Paternal leave privileges to fathers</option>
                                    <option value="Flexible working hours">Flexible working hours</option>
                                    <option value="Work from Home option">Work from Home option</option>
                                    <option value="No help was extended">No help was extended</option>
                                </select>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
   
            
                 <section class="content">
        <div class="container">
            <div class="row">
                 <div class="col-md-2">
                     </div>
                <div class="col-md-6">
                    <div class="form-content">
                        <img src="https://womennovators.com/wenew/img/image017.png" alt="">
                    </div>
                </div>
                 <div class="col-md-2">
                     </div>
              
               
            </div>
        </div>
    </section>
    <div class="col-md-12" style="margin-top:10px;">
                        <div class="form-group">
                            <p style="font-size: 18px; line-height: 28px; font-weight: 600;">The Covid-19 pandemic has pushed many mothers out of the workforce - childcare and housework have mostly fallen to mothers. How have women handled this, and what are the learnings. </p>
                        </div>
                    </div>
               <br>      
              
                    
                    				
				
			</div><!-- end step -->
            <div class="step row">
				
                <div class="row">
                    <div class="col-md-12">
                            <div class="form-group">
                            <h4 style="color:red">Let’s explore the Impact of this Disruption</h4>
                           </div>
                           </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <h3>Your biggest challenge during Covid-19</h3>
                                ( <small>You can choose mutiple</small>)
                                <div class="form-field">
                                <select name="relevant[]" id="mutirelevant" multiple="" class="label ui selection fluid dropdown2">
                                        <option value="">Choose One</option>
                                        <option value="Childcare and Homeschooling responsibilities">Childcare and Homeschooling responsibilities</option>
                                        <option value="Family members physical and mental health">Family members physical and mental health</option>
                                        <option value="Personal mental health">Personal mental health</option>
                                        <option value="Anxiety over layoffs or business loss">Anxiety over layoffs or business loss</option>
                                        <option value="Financial insecurity">Financial insecurity</option>
                                        <option value="Social life restrictions">Social life restrictions</option>
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <h3>Impact of these issues in your work life</h3>
                                ( <small>You can choose mutiple</small>)
                                <div class="form-field">
                                    <select name="work[]" id="mutiwork" multiple="" class="label ui selection fluid dropdown">
                                        <option value="">Choose One</option>
                                        <option value="No time for self">No time for self</option>
                                        <option value="Extended working hours">Extended working hours</option>
                                        <option value="Performance anxiety due to WFH culture">Performance anxiety due to WFH culture</option>
                                        <option value="Unable to fulfill personal and professional expectations">Unable to fulfill personal and professional expectations</option>
                                        <option value="Complete burnout">Complete burnout</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <h3>Support extended by your family members</h3>
                                ( <small>You can choose mutiple</small>)
                                <div class="form-field">
                                <select name="family_members[]" id="multifamily_members" multiple="" class="label ui selection fluid dropdown">
                                        <option value="">Choose One</option>
                                        <option value="Everyone in the family shared the extra load">Everyone in the family shared the extra load</option>
                                        <option value="My partner/husband shared the burden">My partner/husband shared the burden</option>
                                        <option value="I had to manage it alone">I had to manage it alone</option>
                                        <option value="My partner/husband managed it alone">My partner/husband managed it alone</option>
                                        <option value="Help from extended (joint) family">Help from extended (joint) family</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <h4>Select the kind of bias you have experienced</h4>
                                ( <small>You can choose mutiple</small>)
                                <div class="form-field">
                                    <select name="bias_experienced[]" id="multibias_experienced" multiple="" class="label ui selection fluid dropdown">
                                        <option value="">Choose One</option>
                                        <option value="Bullying was involved">Bullying was involved</option>
                                        <option value="Behaviour and speech that reveals demeaning attuites and (unconscious) biases">Behaviour and speech that reveals demeaning attuites and (unconscious) biases</option>
                                        <option value="Disparity is pay structure">Disparity is pay structure</option>
                                        <option value="Bias in hiring policies">Bias in hiring policies</option>
                                        <option value="Promotions and incentives reflect bias in the workplace">Promotions and incentives reflect bias in the workplacet</option>
                                        <option value="Poor policies towards female-related issues like pregnancy, fertility, menopause, etc.">Poor policies towards female-related issues like pregnancy, fertility, menopause, etc.</option>
                                        <option value="Safety of women employees is not a priority">Safety of women employees is not a priority</option>
                                        <option value="Other (Tell us about your experience)">Other (Tell us about your experience)</option>
                                    </select>
                                </div>
                            </div>
                        </div>-->
                    </div>
                    
                    <br>
                    
                      <section class="content">
            <div class="container">
                <div class="row">
                     <div class="col-md-2">
                         </div>
                    <div class="col-md-6">
                        <div class="form-content">
                            <img src="https://womennovators.com/wenew/img/image018.png" alt="">
                        </div>
                    </div>
                     <div class="col-md-3">
                         </div>
                  
                   
                </div>
            </div>
        </section>
        <div class="col-md-12" style="margin-top:10px;">
                            <div class="form-group">
                                <p style="font-size: 18px; line-height: 28px; font-weight: 600;">Women get entangled in the ‘UnderConfidence Cycles’ in the workplace Resorting agency, demanding pay parity and flexibility in the workplace. </p>
                            </div>
                        </div>
                   <hr>      
                   
                    
                    				
				
			</div><!-- end step -->
            <div class="step row">
				
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <h4 style="color:red">Equality, Diversity & Inclusion Can’t Wait</h4>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <h3>How often have you experienced any form of bias in the workplace?</h3>
                            <div class="form-field">
                                <ul class="list-haff">
                                    <li>
                                        <label class="radio-check">Always
                                            <input type="radio"  value="always" name="experienced">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Often
                                            <input type="radio" value="often" name="experienced">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Sometimes
                                            <input type="radio" value="sometimes" name="experienced">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Never
                                            <input type="radio" value="never" name="experienced">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Prefer not to talk about it
                                            <input type="radio" value="Prefer not to talk about it" name="responsibility">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                <div class="col-md-6">
                        <div class="form-group">
                            <h3>Select the kind of bias you have experienced</h3>
                            ( <small>You can choose mutiple</small>)
                            <div class="form-field">
                                <select name="bias_experienced[]" id="multibias_experienced" multiple="" class="label ui selection fluid dropdown" onchange="Checkbias(this.value)">
                                    <option value="">Choose One</option>
                                    <option value="Bullying was involved">Bullying was involved</option>
                                    <option value="Behaviour and speech that reveals demeaning attuites and (unconscious) biases">Behaviour and speech that reveals demeaning attuites and (unconscious) biases</option>
                                    <option value="Disparity is pay structure">Disparity is pay structure</option>
                                    <option value="Bias in hiring policies">Bias in hiring policies</option>
                                    <option value="Promotions and incentives reflect bias in the workplace">Promotions and incentives reflect bias in the workplacet</option>
                                    <option value="Poor policies towards female-related issues like pregnancy, fertility, menopause, etc.">Poor policies towards female-related issues like pregnancy, fertility, menopause, etc.</option>
                                    <option value="Safety of women employees is not a priority">Safety of women employees is not a priority</option>
                                    <option value="others">Other (Tell us about your experience)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-6">
                         <input type="text" name="bias_experienced_other" class="bias" id="bias_experienced" placeholder="kind of bias" style='display:none; '/>
                          </div>
                           </div>
                     <br>   
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <h3>Are you reluctant to negotiate pay increases and promotions?</h3>
                            <div class="form-field">
                                <ul class="list-haff">
                                    <li>
                                        <label class="radio-check">Always
                                            <input type="radio"  value="Always" name="promotions">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Never
                                            <input type="radio" value="Never" name="promotions">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Sometimes
                                            <input type="radio" value="Sometimes" name="promotions">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Depends on my circumstances
                                            <input type="radio" value="Depends on my circumstances" name="promotions">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <h3>Having a female member in the boardroom promotes parity.</h3>
                            <div class="form-field">
                                <ul class="list-haff">
                                    <li>
                                        <label class="radio-check">Always helps
                                            <input type="radio"  value="Always helps" name="promotes_parity">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Sometimes helps
                                            <input type="radio" value="Sometimes helps" name="promotes_parity">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Board is always Neutral
                                            <input type="radio" value="Board is always Neutral" name="promotes_parity">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Never experienced it
                                            <input type="radio" value="Never experienced it" name="promotes_parity">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                <h3>How does your organization ensure that women, gender-nonconforming individuals, and people of color feel included in the workplace?</h3>
                            <div class="form-field">
                            <div class="form-field">
                            <select name="gender_nonconforming[]" id="mutirelevant" multiple="" class="label ui selection fluid dropdown3">
                                    <option value="">Choose One</option>
                                    <option value="Conduct awareness training periodically">Conduct awareness training periodically</option>
                                    <option value="Take action against bias-incident reported or observed">Take action against bias-incident reported or observed</option>
                                    <option value="Demonstrated by the leadership team">Demonstrated by the leadership team</option>
                                    <option value="Strong HR policies to ensure compliance">Strong HR policies to ensure compliance</option>
                                    <option value="Diversity and inclusion are embedded in our work culture">Diversity and inclusion are embedded in our work culture</option>
                                    <option value="Never discussed these issues in the workplace">Never discussed these issues in the workplace</option>
                                </select>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                
                    
                    				
				
			</div><!-- end step -->
            <div class="step row">
				
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <h3>Do you think that being more confident will help you negotiate your professional life?</h3>
                            <div class="form-field">
                                <ul class="list-haff">
                                    <li>
                                        <label class="radio-check">Strongly agree
                                            <input type="radio"  value="Strongly agree" name="professional_life">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Agree
                                            <input type="radio" value="Agree" name="professional_life">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Disagree
                                            <input type="radio" value="Disagree" name="professional_life">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Strongly disagree
                                            <input type="radio" value="Strongly disagree" name="professional_life">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Can’t say
                                            <input type="radio" value="Can’t say" name="professional_life">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                
            <section class="content">
        <div class="container">
            <div class="row">
                 <div class="col-md-2">
                     </div>
                <div class="col-md-6">
                    <div class="form-content">
                        <img src="https://womennovators.com/wenew/img/image019.png" alt="">
                    </div>
                </div>
                 <div class="col-md-3">
                     </div>
              
               
            </div>
        </div>
    </section>
    <br>
                    
                   
			</div><!-- end step -->
           
            
			<div class="submit step" id="complete">
                    	<i class="icon-check"></i>
						<h3>Survey complete! Thank you for your time.</h3>
						<button type="submit" name="" class="submit">Submit the survey</button>
						
			</div><!-- end submit step -->
            
		</div><!-- end middle-wizard -->
        
		<div id="bottom-wizard">
			<button type="button" name="backward" class="backward">Back</button>
			<button type="button" name="forward" class="forward">Next </button>
		</div><!-- end bottom-wizard -->
	</form>
    
</div><!-- end Survey container -->


</section><!-- end section main container -->
       
<footer>
	
    
    <section id="footer_2">
    <div class="container">
    <div class="row">
    	<div class="col-md-6">
                <ul id="footer-nav">
                	<li>Copyright @womennovator 2021-22 I All Rights Reserved</li>
                    
                </ul>              
        </div>
            <div class="col-md-6" style="text-align:center">
                <ul class="social-bookmarks clearfix">
                    <li class="facebook"><a href="#">facebook</a></li>
                    <li class="googleplus"><a href="#">googleplus</a></li>
                    <li class="twitter"><a href="#">twitter</a></li>
                    <li class="delicious"><a href="#">delicious</a></li>
                    
                </ul>
            </div>
        </div>
		</div>
    </section>

</footer> 
 
 <div id="toTop">Back to Top</div>  

<!-- Modal About -->


<script>
    $(function(){
       $('#category').on('change',function(){
           var category_id =$(this).val();

        $.ajax({
            type: "GET",
            url: "{{ url('survey-page') }}",
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
  
     function checkemail_func(value)
     {
       // value = document.getElementById(value);
      //   alert(value);
        $.ajax({
            type: "GET",
            url: "{{ url('check_email') }}",
            data: "email="+value,
            success : function(res){
           
               if(res!=0)
               {
                var obj = res.data;
                var gender = obj.gender;
                var name = obj.name;
                var city = obj.state;
                var country = obj.country;
                var qualification=obj.qualification;
                var email=obj.email;
                var phone=obj.phone;
                var website=obj.website;
                var Facebook=obj.Facebook;
                var Linkedin=obj.Linkedin;
                var Instagram=obj.Instagram;
                var Twitter=obj.Twitter;
                var Youtube=obj.Youtube;
                var any_other_link=obj.any_other_link;
                var industry=obj.industry;
                var business=obj.business;

                jQuery("#gender").attr('checked', true);
                jQuery("#age").attr('checked', true);
                
                $("#name").val(name);
                $('#category').val(country);
                $('#subcategory_id').val(city);
                $('#qualification').val(qualification);
                $("#email").val(email);
                $("#phone").val(phone);
                $("#website").val(website);
                $("#Facebook").val(Facebook);
                $("#Linkedin").val(Linkedin);
                $("Instagram").val(Instagram);
                $("#Twitter").val(Twitter);
                $("#Youtube").val(Youtube);
                $("#any_other_link").val(any_other_link);
                $('#industry').val(industry);
                $('#mutibusiness').val(business);
               }
                      
              

                
            },
            error : function(){

            },
        });
     }
     </script>
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
 
  </script>
<script src="survey/js/jquery.validate.js"></script>
<script src="survey/js/jquery.placeholder.js"></script>
<script src="survey/js/jquery.tweet.min.js"></script>
<script src="survey/js/jquery.bxslider.min.js"></script>
<script src="survey/js/quantity-bt.js"></script>
<script src="survey/js/bootstrap.js"></script>
<script src="survey/js/retina.js"></script>
<script src="survey/js/owl.carousel.min.js"></script>
<script src="survey/js/functions.js"></script>

<!-- FANCYBOX -->
<script  src="survey/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.4" type="text/javascript"></script> 
<script src="survey/js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5" type="text/javascript"></script> 
<script src="survey/js/fancy_func.js" type="text/javascript"></script> 
<script>
    function CheckColors(val){
 var element=document.getElementById('qualification');
 if(val=='other qualification'||val=='others')
   element.style.display='block';
 else  
   element.style.display='none';
}
</script>

 <script>
    function CheckIndustry(val){
 var element=document.getElementById('industry');
 if(val=='other industry'||val=='others')
   element.style.display='block';
 else  
   element.style.display='none';
}
</script>
<script>
    function Checkbias(val){
 var element=document.getElementById('bias_experienced');
 if(val=='other bias_experienced'||val=='others')
   element.style.display='block';
 else  
   element.style.display='none';
}
</script>



<script>

$('.label.ui.dropdown')
  .dropdown();
$('.no.label.ui.dropdown')
  .dropdown({
  useLabels: false
});

$('.ui.button').on('click', function () {
  $('.ui.dropdown')
    .dropdown('restore defaults')
})

$(document).ready(function() {
    $('.dropdown2').select2();
});
$("#surveyform").validate({
  rules: {
    gender: "required",
    country: "required",
    states: "required",
    age: "required",
    qualification: "required",
    name: "required",
    email: {
      required: true,
      email: true
    },
    phone: "required",
  //  website: "required",
    industry: "required",
    business: "required",
    responsibility: "required",
    become_a_mother: "required",
    family_type: "required",
    family_structure: "required",
    caretaker: "required",
    support_for_caregiving: "required",
  },
});

</script>


</body>
</html>