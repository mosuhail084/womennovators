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
<div class="banner">
        <img src="survey/img/survey.png" style="width:100%" class="img-responsive">
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="banner-next">
                        <h1 class="text-center" style="margin-bottom: 30px;">Cycle of change </h1>
                        <p>Creating a generation of Financially Independent Women by turning every
Woman’s career Aspiration into Action</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-left">
                    <h2>Executive Summary: </h2>
                    <p>We at Womennovator believe it's not just a skill gap but an Opportunity Gap that has kept women in India from actively participating in the workplace. Women account for only 14% of leadership roles (136th rank globally) and 30% of professional and technical roles. Despite a marked increase in the numbers of women in higher education (with sterling performances), the participation of women in the Indian workforce is still low. </p>
                    <p>Virtual Incubation Program at Womennovator is the flagship program to address this ‘Opportunity Gap.' We bring together aspiring women from multiple cities and sectors, which constitute an 'Incubatee Cohort.' Each cohort goes through a unique Journey for Change. Womennovator team and industry leaders conduct interactive sessions – group and one-on-one - to guide the Incubatee cohorts through structured Cycles of Change.</p>
                    <p>We would like you to participate in the ‘Cycles of Change’ survey. The survey will enable us to know you better and customize your journey with us. Cycles of Change explores four critical aspects of a women’s life – Personal, Professional, Economical, and Social.</p>
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
    
	<form action="{{url('wesurvey/add')}}" method="POST">
	   @csrf  

		<div id="middle-wizard">
			<div class="step">
                <div class="row">
                <div class="col-sm-12">
                    <h3>Which best describes your gender? </h3>
                </div>
            </div>
                <div class="row">
                    <div class="col-sm-12">
                        <ul class=" list-haff">
                            <li>
                                <label class="radio-check">Female
                                  <input type="radio"  name="gender" value="Female" >
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">Male
                                  <input type="radio" name="gender" value="Male" >
                                  <span class="checkmark"></span>
                                </label>

                            </li>
                            <li>
                                <label class="radio-check">Prefer not to say
                                  <input type="radio" name="gender" value="Prefer not to say" >
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">Prefer to self describe
                                  <input type="radio"  name="gender" value="Prefer to self describe" >
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            </ul>
                        <input id="website" name="website" type="text" value="" ><!-- Leave for security protection, read docs for details -->
                    </div>                
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                           <div class="col-sm-12">
                                <h3>Where do you currently live?  </h3>
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
                
			</div><!-- end step-->
            
			<div class="step row">
                <div class="row">
                   <div class="col-sm-12">
                        <h3>How old are you?  </h3>

                    </div>
                    <div class="col-sm-12">
                        <ul class=" list-haff">
                            <li>
                                <label class="radio-check">Under 18
                                  <input type="radio"  name="age"   value="Under 18">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">18-24
                                  <input type="radio" name="age"   value="18-24">
                                  <span class="checkmark"></span>
                                </label>

                            </li>
                            <li>
                                <label class="radio-check">25-34
                                  <input type="radio" name="age"   value="25-34">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">35-44
                                  <input type="radio"  name="age"   value="35-44">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">45-54
                                  <input type="radio"  name="age"   value="45-54">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">55-64
                                  <input type="radio"  name="age"   value="55-64">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">65+
                                  <input type="radio"  name="age"   value="65+">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>

                            </ul>
                    </div>                
                </div> 
                <div class="row">
				<div class="col-md-12">
					<h3>What is your highest qualification?</h3>
                    <div class="row">
                        <div class="col-md-6">
                             <select name="qualification" onchange='CheckColors(this.value);' >
                                 <option value="" >Please select one</option>
                                    <option value="Higher Certificate">Higher Certificate</option>
                                    <option value="National Diploma">National Diploma</option>
                                    <option value="Bachelor's Degree">Bachelor's Degree</option>
                                    <option value="Master's Degree">Master's Degree</option>
                                    <option value="Doctoral Degree">Doctoral Degree</option>
                                    <option value="others">Other</option>
                                </select>
                           
                            
                        </div>
                        <div class="col-md-6">
                             <input type="text" name="qualification_other" id="qualification" plaaceholder="Highest Qualification" style='display:none; '/>
                           </div> 
                    </div>
                    </div>
				</div>
			</div><!-- end step -->
            
			<div class="step row">
                <div class="row">
				<div class="col-md-12">
					<h3>Let's get to know you better.</h3>
					
				</div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" placeholder="Your Name " name="name"onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" required  >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" placeholder="Your email ID" name="email" required >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="number" placeholder="Your Mobile Number " name="phone" required >
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-12">
                        
                        <h2>PROFESSIONAL MatTERS</h2>
                    </div>
                    <div class="clearfix"></div>
                    
                        <div class="col-md-6">
                            
                            <h3>Which industry do you belong to?</h3>
                            <br>
                            <select name="industry" onchange='CheckSector(this.value);' >
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
                     <!--   <select id="checkboxes" multiple="multiple" name="business[]" >
                           
                            <option value="TRANSFORMATIVE" >TRANSFORMATIVE</option>
                            <option value="EQUITABLE">EQUITABLE</option>
                            <option value="INNOVATIVE">INNOVATIVE</option>
                            <option value="SUSTAINABLE">SUSTAINABLE</option>
                            <option value="FEASIBLE">FEASIBLE</option>
                            <option value="PROFITABLE">PROFITABLE</option>
                        </select>-->
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
                <div class="row">
                    <div class="col-md-12">                        
                        <h3>Let's understand your digital presence.</h3>
                    </div>
                    <div class="clearfix"></div>
                        <div class="col-md-12">  
                        <div class="form-group">
                           <input placeholder="Website" name="website">
                          </div> 
                        </div>
                    <div class="col-md-6">
                        <div class="form-group">
                         <input placeholder="Facebook "  name="Faceook">
                    </div>
                    </div>
                     <div class="col-md-6">
                        <div class="form-group">
                         <input placeholder="Linkedin " name="Linkedin">
                    </div>
                    </div>
                     <div class="col-md-6">
                        <div class="form-group">
                         <input placeholder="Instagram " name="Instagram">
                    </div>
                    </div>
                     <div class="col-md-6">
                        <div class="form-group">
                         <input placeholder="Twitter " name="Twitter">
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                         <input placeholder="Youtube " name="Youtube">
                    </div>
                    </div>
                     <div class="col-md-6">
                        <div class="form-group">
                         <input placeholder="Any Other " name="any_other_link">
                    </div>
                    </div>
                     
                </div>
			</div><!-- end step -->
            
			<div class="step row">
				<div class="col-md-12">
                    <div class="col-md-6">
                        <h3>What is your model of business engagement?  </h3>
                        <select  name="business_engagement" onchange='CheckBusiness(this.value);' >
                            <option value="" >Please select one</option>
                            <option value="B2B">B2B</option>
                            <option value="B2C">B2C</option>
                            <option value="B2B2C">B2B2C</option>
                            <option value="others">Others</option>
                        </select>
                        <input type="text" name="business_engagement_other" id="business" style='display:none; margin-top:10px; '/>
                    </div>
                    <div class="col-md-6">
                        <h3>Categorize your business</h3>
                        <select name="business_category" onchange='CheckBusinesscat(this.value);' >
                            <option value="" >Please select one</option>
                            <option value="Micro">Micro</option>
                            <option value="Medium">Medium</option>
                            <option value="Small">Small</option>
                            <option value="Large">Large</option>
                            <option value="others">Others</option>
                        </select>
                        <input type="text" name="business_category_other" id="business_category" style='display:none; margin-top:10px; '/>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <h3>Do you provide products, services, or a combination of both?</h3>
                        <ul class=" list-haff">  
                             <li>
                                <label class="radio-check">Product only 
                                  <input type="radio"  name="combination" value="Product only">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">Service only 
                                  <input type="radio" name="combination" value="Service only">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">Services and product 
                                  <input type="radio" name="combination" value="Services and product">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            
                           <!--<li>
                                <label class="marke-check">Product only 
                                  <input type="checkbox" >
                                  <span class="check-tab"></span>
                                </label>
                             
                            </li>
                            <li>
                                <label class="marke-check">Service only 
                                  <input type="checkbox" >
                                  <span class="check-tab"></span>
                                </label>

                            </li>
                            <li>
                                <label class="marke-check">Services and product 
                                  <input type="checkbox">
                                  <span class="check-tab"></span>
                                </label>                               
                            </li>    -->                        
                        </ul>
                    </div>		
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <h3>Is your business a For-Profit Business?</h3>
                        <ul class=" list-haff">  
                             <li>
                                <label class="radio-check">Yes
                                  <input type="radio"  name="for-profit" value="Yes">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">No, it’s not for profit
                                  <input type="radio" name="for-profit" value="No, it’s not for profit">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">Hybrid – some part of the business is for-profit
                                  <input type="radio"  name="for-profit" value="Hybrid – some part of the business is for-profit">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li> 
                            <li>
                                <label class="radio-check">Can’t say
                                  <input type="radio"  name="for-profit" value="Can’t say">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>          
                        </ul>
                    </div>					
				</div>
			</div><!-- end step -->
            
            <div class="step row">
                <div class="row">
				<div class="col-md-12">
                    <div class="col-md-12">
                        <h3>Is your product or service innovative?</h3>
                        <ul class=" list-haff">  
                             <li>
                                <label class="radio-check">Yes, it's never been made
                                  <input type="radio"  name="product_service_innovative" value="Yes, it's never been made">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">Yes, it has alternatives but not as effective as mine
                                  <input type="radio" name="product_service_innovative" value="Yes, it has alternatives but not as effective as mine">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">Yes, we are doing an 'old' thing in a 'new' way
                                  <input type="radio" name="product_service_innovative" value="Yes, we are doing an 'old' thing in a 'new' way">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li> 
                            <li>
                                <label class="radio-check">Yes, It brings substantial cost benefits for consumers
                                  <input type="radio" name="product_service_innovative" value="Yes, It brings substantial cost benefits for consumers">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li> 
                            <li>
                                <label class="radio-check">Yes, It is easy to scale
                                  <input type="radio" name="product_service_innovative" value="Yes, It is easy to scale">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li> 
                            <li>
                                <label class="radio-check">Yes, the product is there but serving a new market segment 
                                  <input type="radio" name="product_service_innovative" value="Yes, the product is there but serving a new market segment">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>   
                            <li>
                                <label class="radio-check">No, there are many players in the market 
                                  <input type="radio" name="product_service_innovative" value="No, there are many players in the market ">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>   
                            <li>
                                <label class="radio-check">Maybe 
                                  <input type="radio"  name="product_service_innovative" value="Maybe">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>          
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <h3>Is your product or service equitable?</h3>
                        <ul class=" list-haff">  
                             <li>
                                <label class="radio-check">Yes, it is made only for the female gender
                                  <input type="radio"  name="product_service_equitable" value="Yes, it made only for the female gender">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">Yes, it is for the lowest segment of society 
                                  <input type="radio" name="product_service_equitable" value="Yes, it is for the lowest segment of society">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">Yes, it gives employment to artisans 
                                  <input type="radio" name="product_service_equitable" value="Yes, it gives employment to artisans">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li> 
                            <li>
                                <label class="radio-check">Yes, it focuses on aspirational districts 
                                  <input type="radio" name="product_service_equitable" value="Yes, it focuses on aspirational districts">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li> 
                            <li>
                                <label class="radio-check">No, it caters to the middle class and above 
                                  <input type="radio" name="product_service_equitable" value="No, it caters to the middle class and above">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li> 
                            <li>
                                <label class="radio-check">No, it’s a luxury product 
                                  <input type="radio"  name="product_service_equitable" value="No, it’s a luxury product">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>   
                             
                            <li>
                                <label class="radio-check">Maybe 
                                  <input type="radio"  name="product_service_equitable" value="Maybe">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>          
                        </ul>
                    </div>
                    
                    				
				</div>
                </div>
			</div><!-- end step -->
            <div class="step row">
				
                    <div class="col-md-12">
                        <h3>Did you feel the need to take skill training to improve your business?</h3>
                        <ul class=" list-haff">  
                             <li>
                                <label class="radio-check">Yes
                                  <input type="radio"  name="business_skill" value="Yes">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">Yes, I have taken skill training
                                  <input type="radio" name="business_skill" value="Yes, I have taken skill training">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">No, I do not need to
                                  <input type="radio" name="business_skill" value="No, I do not need to">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li> 
                            <li>
                                <label class="radio-check">Maybe
                                  <input type="radio" name="business_skill" value="Maybe">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li> 
                                     
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <h3>Are you keen to have distribution networks to boost your sale?</h3>
                        <ul class=" list-haff">  
                             <li>
                                <label class="radio-check">Yes
                                  <input type="radio"  name="network" value="Yes">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">No
                                  <input type="radio" name="network" value="No">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>                            
                             
                            <li>
                                <label class="radio-check">Maybe 
                                  <input type="radio"  name="network" value="Maybe">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>          
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <h3>Have you tried to explore overseas markets?</h3>
                        <ul class=" list-haff">  
                             <li>
                                <label class="radio-check">Yes, I have many overseas customers
                                  <input type="radio"  name="market" value="Yes, I have many overseas customers">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">No, my product is only for local community
                                  <input type="radio" name="market" value="No, my product is only for local community">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li> 
                            <li>
                                <label class="radio-check">No, but I am keen to explore
                                  <input type="radio" name="market" value="No, but I am keen to explore">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>                            
                             
                            <li>
                                <label class="radio-check">Maybe 
                                  <input type="radio"  name="market" value="Maybe ">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>          
                        </ul>
                    </div>
                    
                    				
				
			</div><!-- end step -->
            <div class="step row">
				
                    <div class="col-md-12">
                        <h2>WEALTH MATTERS</h2>
                    </div>
                        <div class="col-md-12">
                        <h3>Do you spend your earnings on family expenses?</h3>
                        <ul class=" list-haff">  
                             <li>
                                <label class="radio-check">Yes
                                  <input type="radio"  name="expenses" value="Yes">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">No
                                  <input type="radio" name="expenses" value="No">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">Not yet, but I aspire to do so
                                  <input type="radio" name="expenses" value="Not yet, but I aspire to do so">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li> 
                            <li>
                                <label class="radio-check">Shared responsibility
                                  <input type="radio" name="expenses" value="Shared responsibility">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li> 
                            <li>
                                <label class="radio-check">Do not wish to disclose
                                  <input type="radio" name="expenses" value="Do not wish to disclose">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li> 
                                     
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <h3>Are you the primary economic support provider of the family?</h3>
                        <ul class=" list-haff">  
                             <li>
                                <label class="radio-check">Yes 
                                  <input type="radio"  name="economic" value="Yes">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">No
                                  <input type="radio" name="economic" value="No">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>                            
                             
                            <li>
                                <label class="radio-check">Do not wish to disclose 
                                  <input type="radio"  name="economic" value="Do not wish to disclose ">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>          
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <h3>Are you financially independent?</h3>
                        <ul class=" list-haff">  
                             <li>
                                <label class="radio-check">Yes, I support myself
                                  <input type="radio"  name="support" value="Yes, I support myself">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">Partially, I am getting there
                                  <input type="radio" name="support" value="Partially, I am getting there">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li> 
                            <li>
                                <label class="radio-check">No, I need family support
                                  <input type="radio" name="support" value="No, I need family support">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>                            
                             
                            <li>
                                <label class="radio-check">It’s a just hobby
                                  <input type="radio"  name="support" value="It’s a just hobby">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>  
                            <li>
                                <label class="radio-check">Do not wish to disclose
                                  <input type="radio"  name="support" value="Do not wish to disclose">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>          
                        </ul>
                    </div>
                    
                    				
				
			</div><!-- end step -->
            <div class="step row">
				
                    
                        <div class="col-md-12">
                        <h3>Select the most relevant option</h3>
                        <ul class=" list-haff">  
                             <li>
                                <label class="radio-check">I run a profitable business
                                  <input type="radio"  name="relevant" value="I run a profitable business">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">I have just started; it's too early to say
                                  <input type="radio" name="relevant" value="I have just started; it's too early to say">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">I can support my business expenses and hope to grow in future
                                  <input type="radio" name="relevant" value="I can support my business expenses and hope to grow in future">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li> 
                            <li>
                                <label class="radio-check">I break even
                                  <input type="radio" name="relevant" value="I break even">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li> 
                            <li>
                                <label class="radio-check">I am suffering losses
                                  <input type="radio" name="relevant" value="I am suffering losses">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li> 
                            <li>
                                <label class="radio-check">I run a Not-for-Profit enterprise
                                  <input type="radio" name="relevant" value="I run a Not-for-Profit enterprise">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li> 
                            <li>
                                <label class="radio-check">Do not wish to disclose
                                  <input type="radio" name="relevant" value="Do not wish to disclose">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li> 
                                     
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <h3>Are you the key decision maker for your enterprise?</h3>
                        <ul class=" list-haff">  
                             <li>
                                <label class="radio-check">Yes, I take all critical decisions
                                  <input type="radio"  name="enterprise" value="Yes, I take all critical decisions">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">No, I must consult my partners
                                  <input type="radio" name="enterprise" value="No, I must consult my partners">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>                            
                             
                            <li>
                                <label class="radio-check">Joint decision making
                                  <input type="radio"  name="enterprise" value="Joint decision making">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>          
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <h3>Were you able to get access to market credit?</h3>
                        <ul class=" list-haff">  
                             <li>
                                <label class="radio-check">Yes, easily
                                  <input type="radio"  name="market_credit" value="Yes, easily">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">Yes, but with hardship
                                  <input type="radio" name="market_credit" value="Yes, but with hardship">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li> 
                            <li>
                                <label class="radio-check">No, I have not availed market credit
                                  <input type="radio" name="market_credit" value="No, I have not availed market credit">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>                            
                             
                            <li>
                                <label class="radio-check">No, I do not know how to access market credit
                                  <input type="radio"  name="market_credit" value="No, I do not know how to access market credit">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>  
                            <li>
                                <label class="radio-check">I want to learn about it
                                  <input type="radio"  name="market_credit" value="I want to learn about it">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>   
                            <li>
                                <label class="radio-check">I can get credit, if required
                                  <input type="radio"  name="market_credit" value="I can get credit, if required">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>          
                        </ul>
                    </div>
                    
                    				
				
			</div><!-- end step -->
            <div class="step row">
				
                    <div class="col-md-12">
                        <h2>SOCIAL MATTERS</h2>
                    </div>
                    <div class="col-md-12">
                        <h3>What is your family type?</h3>
                        <ul class=" list-haff">  
                             <li>
                                <label class="radio-check">Nuclear family
                                  <input type="radio"  name="family_type" value="Nuclear family">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">Extended (joint) family
                                  <input type="radio" name="family_type" value="Extended (joint) family">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">Single parent
                                  <input type="radio" name="family_type" value="Single parent">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li> 
                            <li>
                                <label class="radio-check">Other
                                  <input type="radio" name="family_type" value="Other">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li> 
                            
                                     
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <h3>How do describe your family structure?</h3>
                        <ul class=" list-haff">  
                             <li>
                                <label class="radio-check">Single and independent
                                  <input type="radio"  name="family_structure" value="Single and independent">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">Single staying with family
                                  <input type="radio" name="family_structure" value="Single staying with family">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>                            
                             
                            <li>
                                <label class="radio-check">Married with children
                                  <input type="radio"  name="family_structure" value="Married with children">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li> 
                            <li>
                                <label class="radio-check">Do not wish to disclose
                                  <input type="radio"  name="family_structure" value="Do not wish to disclose">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>          
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <h3>Is this enterprise (profession) your first choice?</h3>
                        <ul class=" list-haff">  
                             <li>
                                <label class="radio-check">Yes, I have pursued my passion
                                  <input type="radio"  name="first_choice" value="Yes, I have pursued my passion">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">Yes, I joined my family business/profession out of choice
                                  <input type="radio" name="first_choice" value="Yes, I joined my family business/profession out of choice">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li> 
                            <li>
                                <label class="radio-check">No, but I do not know what else I can do
                                  <input type="radio" name="first_choice" value="No, but I do not know what else I can do">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>                            
                             
                            <li>
                                <label class="radio-check">No, I have made a compromise
                                  <input type="radio"  name="first_choice" value="No, I have made a compromise">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>  
                            <li>
                                <label class="radio-check">Have never given a thought
                                  <input type="radio"  name="first_choice" value="Have never given a thought">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>   
                            <li>
                                <label class="radio-check">Maybe
                                  <input type="radio"  name="first_choice" value="Maybe">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>          
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    
                   
			</div><!-- end step -->
            <div class="step row">
                       <div class="col-md-12">
                        <h3>Are you using social media to promote your business?</h3>
                        <ul class=" list-haff">  
                             <li>
                                <label class="radio-check">Yes
                                  <input type="radio"  name="promote" value="Yes">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">Yes, but would like to grow more
                                  <input type="radio" name="promote" value="Yes, but would like to grow more">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li> 
                            <li>
                                <label class="radio-check">No, but wish to learn more
                                  <input type="radio" name="promote" value="No, but wish to learn more">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>                            
                             
                            <li>
                                <label class="radio-check">No, it’s not relevant for my enterprise
                                  <input type="radio"  name="promote" value="No, it’s not relevant for my enterprise">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>  
                            <li>
                                <label class="radio-check">Can’t say
                                  <input type="radio"  name="promote" value="Can’t say">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>   
                                   
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <h3>Economic empowerment has improved my status within the society</h3>
                        <ul class=" list-haff">  
                             <li>
                                <label class="radio-check">Yes
                                  <input type="radio"  name="society" value="Yes">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>
                            <li>
                                <label class="radio-check">No
                                  <input type="radio" name="society" value="No">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li> 
                            <li>
                                <label class="radio-check">Can’t say
                                  <input type="radio" name="society" value="Can’t say">
                                  <span class="checkmark"></span>
                                </label>                               
                            </li>  
                                   
                        </ul>
                    </div>
				
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


</body>
</html>