@extends('frontEnd.layouts.layout') @section('content')
<!-- header start -->
@include('frontEnd.layouts.includes.headerdark')
<!-- header end -->


			<!-- INNER PAGE WRAPPER
			============================================= -->	
			<div class="inner-page-wrapper">




				<!-- PAGE HERO
				============================================= -->	
				<section id="contacts-page" class="page-hero-section division">
					<div class="container">	
						<div class="row">	


							<!-- PAGE HERO TEXT -->
							<div class="col-md-10 offset-md-1">
								<div class="hero-txt text-center white-color">

									<!-- Title -->
									<h3 class="h3-xl">Let’s Keep In Touch</h3>

									<!-- Text -->
									<p>Question? Comment? Let us know how can we help you. Fill in the contact form below to get in touch with us</p>

								</div>
							</div>	<!-- END PAGE HERO TEXT -->


						</div>    <!-- End row --> 
					</div>	   <!-- End container --> 
				</section>	<!-- END PAGE HERO -->	




				<!-- BREADCRUMB
				============================================= -->
				<div id="breadcrumb" class="division">
					<div class="container">
						<div class="row">

							<!-- BREADCRUMB NAV -->
							<div class="col-lg-12">
								<nav aria-label="breadcrumb">
								  	<ol class="breadcrumb">
								    	<li class="breadcrumb-item"><a href="demo-1.html" class="primary-color">Home</a></li>
								    	<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
								  	</ol>
								</nav>
							</div> 

						</div>	 <!-- End row -->
					</div>	<!-- End container -->		
				</div>	<!-- END BREADCRUMB -->	




				<!-- CONTACTS-1
				============================================= -->
				<section id="contacts-1" class="wide-60 contacts-section division">
					<div class="container">
					 	<div class="row">


							<!-- CONTACT FORM -->
					 		<div class="col-lg-8">
					 			<div class="form-holder mb-40 pc-25">
								      <form name="contactform" method="post" class="row contact-form" action="{{ url('contact/store')}}" enctype="multipart/form-data">
                                            @csrf	
                                            @component('backEnd.components.alert')

                                            @endcomponent													
										<!-- Contact Form Input -->
										<div id="input-name" class="col-md-6">
											<input type="text" name="name" class="form-control name" placeholder="Your Name"> 
										</div>
													
										<div id="input-email" class="col-md-6">
											<input type="email" name="email" class="form-control email" placeholder="Email Address"> 
										</div>

										<div id="input-subject" class="col-md-12">
											<input type="text" name="subject" class="form-control subject" placeholder="What's this about?"> 
										</div>
		
										<div id="input-message" class="col-md-12 input-message">
											<textarea class="form-control message" name="mesge" rows="6" placeholder="Your Message ..."></textarea>
										</div> 
																							
										<!-- Contact Form Button -->
										<div class="col-lg-12 mt-10 form-btn text-right">	
											<button type="submit" class="btn btn-md btn-green deepgreen-hover submit">Send Message</button>	
										</div>
																																
										<!-- Contact Form Message -->
										<div class="col-lg-12 contact-form-msg">
											<span class="loading"></span>
										</div>	
																								
									</form>	
					 			</div>	
					 		</div>	<!-- END CONTACT FORM -->	


					 		<!-- CONTACTS INFO -->
					 		<div class="col-lg-4">
					 			<div class="contacts-info pc-25">

							 		<!-- LOCATION -->
									<div class="contact-box wow fadeInUp" data-wow-delay="0.4s">
										<h5 class="h5-sm">Our Location:</h5>
										<p class="grey-color">Merteex Processing, Inc</p>														
										<p class="grey-color">121 King Street, Melbourne, <br> Victoria 3000 Australia</p>
									</div>

									<!-- PHONES -->
									<div class="contact-box wow fadeInUp" data-wow-delay="0.6s">
										<h5 class="h5-sm">Contact Phones:</h5>	
										<p class="grey-color">Phone : +12 3 3456 7890</p>
										<p class="grey-color">Fax : +12 9 8765 4321</p>
									</div>

									<!-- WORKING HOURS -->
									<div class="contact-box wow fadeInUp" data-wow-delay="0.8s">
										<h5 class="h5-sm">Office Hours:</h5>	
										<p class="grey-color">Mon - Fri: 8:30am - 7:30pm</p>
										<p class="grey-color">Saturday: 8:30am - 3:30pm</p>
										<p class="grey-color">Sunday: Closed</p>
									</div>

								</div>	
							</div>	<!-- END CONTACTS INFO -->


						</div>	  <!-- End row -->
					</div>	   <!-- End container -->	
				</section>	<!-- END CONTACTS-1 -->




				<!-- GOOGLE MAP
				============================================= -->
				<div id="gmap" class="gmap"></div>



 <!-- js bar start-->
 @include('frontEnd.layouts.includes.footer')
 <!-- js bar end -->



			</div>	<!-- END INNER PAGE WRAPPER -->
	
		<!-- Google Map -->
	    <script src="{{ url('frontEnd/js/google-map.js')}}"></script>

		<!-- To use this code on your website, get a free API key from Google. Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp -->
		<script src="{{ url('https://maps.googleapis.com/maps/api/js?key=AIzaSyCUQmwdDWm3cQXhPqIO9TsKHq7hrvh2XrU&callback=initMap')}}" async="" defer=""></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->	
		<!--
		<script>
			window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
			ga('create', 'UA-XXXXX-Y', 'auto');
			ga('send', 'pageview');
		</script>
		<script async src='https://www.google-analytics.com/analytics.js'></script>
		-->
		<!-- End Google Analytics -->
        <script>
            var msg = '{{Session::get('alert')}}';
            var exist = '{{Session::has('alert')}}';
            if(exist){
              alert(msg);
            }
          </script>
	@endsection