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
           .step h3 span {
    display: contents;
}
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
<!--<section class="content">
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
</section>-->
<section class="container" id="main">
 <h2>Let’s get you started! </h2>
    <p>
Womennovator engages with women from all walks of life, from politicians to artists, journalists to teachers, entrepreneurs to social changemakers. This survey is for all the amazing women who have an innate desire to live their dreams, pursue their ‘Option A,’ who have altered the mind of patriarchy to ‘Choose Themselves.’ They continue to inspire the powerless to become powerful.
 </p>
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
                        
                          <div class="col-md-12">  
                            <div class="form-group">
                                
                                <h3>1. Was the pandemic an awakening? Did it bring about a fundamental shift in the way you work?</h3>
                                <ul class="list-haff">
                                    <li>
                                        <label class="radio-check">Yes
                                            <input type="radio"  value="female" name="gender" id="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">No
                                            <input type="radio" value="Male" name="gender" id="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Can’t say
                                            <input type="radio" value="Non-Binary" name="gender"id="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    
                                </ul>
                            </div>
                          </div>  
                    </div>
                    <div class="row" >
                      <div class="col-md-6">
                            <div class="form-group">
                                
                                <h3>2. If yes, then what has fundamentally changed for you? </h3>
                                <select name="" id="mutibusiness" multiple="" class="dropdown" >
                                        
                                        <option value="transformative">Changed the dynamics and role allocation between family members </option>
                                        <option value="equitable">Relocated to a better location as employees now have WFH options</option>
                                        <option value="innovative">Pivoted and changed professional tracks to follow my dream</option>
                                        <option value="sustainable">Experienced burnout trying to juggle between the work-home responsibilities </option>
                                        <option value="feasible">Childcare and homecare augmented anxiety to deliver work on time</option>
                                        <option value="profitable">None of the above</option>
                                    </select>
                            </div>
                        </div>   
                        <div class="col-sm-6">
                        
                                <h3>3. I feel l connect to the work I do at a deeper level now.</h3>
                               <ul class="list-haff">
                                    <li>
                                        <label class="radio-check">Yes
                                            <input type="radio"  value="female" name="gender" id="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">No
                                            <input type="radio" value="Male" name="gender" id="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Can’t say
                                            <input type="radio" value="Non-Binary" name="gender"id="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    
                                </ul>
                            
                    </div>
                </div>
                <br>
                <div class="row">
                    
                </div>
            </div>
            <div class="step" >
               <div  >
                
				
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <h3>4. My intrinsic values are aligned with the work I do.</h3>
                            <ul class="list-haff">
                                    <li>
                                        <label class="radio-check">Yes
                                            <input type="radio"  value="" name="intrinsic" id="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">No
                                            <input type="radio" value="" name="intrinsic" id="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Can’t say
                                            <input type="radio" value="" name="intrinsic"id="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    
                                </ul>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <h3>5. My work puts me in a position to contribute with my unique skills <span style="color:red">*</span></h3>
                            <ul class="list-haff">
                                    <li>
                                        <label class="radio-check">My work is aligned with my skill sets
                                            <input type="radio"  value="" name="work" id="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">My work needs constant up-skilling 
                                            <input type="radio" value="" name="work" id="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">I feel over-skilled for the job role 
                                            <input type="radio" value="" name="work"id="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">I feel under-skilled for the job role 
                                            <input type="radio" value="" name="work"id="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">I have never given it a thought
                                            <input type="radio" value="" name="work"id="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    
                                </ul>
                        </div>
                    </div>
                     
                </div>
            </div>
                
			</div><!-- end step-->
            
		
            
			<div class="step " >
                <div class="row" >
				<div class="col-md-12">
					<h3>6. The positive impact my work makes in the life of other</h3>
					<select name="relevant[]" id="mutirelevant" multiple="" class="label ui selection fluid dropdown">
                        <option value="">Equitability</option>
                        <option value="Childcare and Homeschooling responsibilities">Sustainability </option>
                        <option value="Family members physical and mental health">Transformative </option>
                        <option value="Personal mental health">Empowerment</option>
                    </select>
                    
                    
                  </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <h2>Explain the reason for selecting the above option(s) </h2>
                        
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">                        
                        <h3>7. Do you agree it’s the ‘human connection’ that you missed the most during the pandemic?</h3>
                        
                        <ul class="list-haff">
                                    <li>
                                        <label class="radio-check">Strongly agree
                                            <input type="radio"  value="" name="agree" id="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Agree
                                            <input type="radio" value="" name="agree" id="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Disagree
                                            <input type="radio" value="" name="agree"id="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Strongly disagree
                                            <input type="radio" value="" name="agree"id="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Can’t say
                                            <input type="radio" value="" name="agree"id="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    
                                </ul>
                    </div>
                    <div class="clearfix"></div>
                        
                     
                </div>
                <br>
                <div class="row">
                   
                    <div class="clearfix"></div>
                    
                        <div class="col-md-12">
                            
                            <h3>8. Would you like to make an impact on the lives of other women? If Yes, then how?</h3>
                            
                            <ul class="list-haff">
                                    <li>
                                        <label class="radio-check">I would like to mentor the women entrepreneurs 
                                            <input type="radio"  value="" name="women" id="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">I would like to mentor the women professionals
                                            <input type="radio" value="" name="women" id="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">I would like to mentor the female social activists
                                            <input type="radio" value="" name="women"id="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">I would like to contribute as a Partner 
                                            <input type="radio" value="" name="women"id="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">I would like to ‘adopt incubatee(s) to help them scale
                                            <input type="radio" value="" name="women"id="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                <li>
                                        <label class="radio-check">	Support the great work Womennovator is doing 
                                            <input type="radio" value="" name="agree"id="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    
                                </ul>
                            
                        </div>
                    
                </div>
                <br>
			 
            </div><!-- end step -->
            
			<div class="step row">
                
				<div class="col-md-12">
                   
                        <h3>9. Would you like to reset your life by joining the community of people who are doing it already?</h3>
                            <div class="form-field">
                                <ul class="list-haff">
                                    <li>
                                        <label class="radio-check">Yes
                                            <input type="radio"  value="always" name="responsibility">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">No
                                            <input type="radio" value="often" name="responsibility">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-check">Can’t say 
                                            <input type="radio" value="sometimes" name="responsibility">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                   
                                </ul>
                            </div>
                    </div>
                    <br>
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