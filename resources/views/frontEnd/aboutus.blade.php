@extends('frontEnd.layouts.layout') @section('content')
   <!-- header start -->
   @include('frontEnd.layouts.includes.headerdark')
   <!-- header end -->
    
<!-- INNER PAGE WRAPPER
			============================================= -->	
			<div class="inner-page-wrapper">




				<!-- PAGE HERO
				============================================= -->	
				<section id="about-page" class="page-hero-section division">
					<div class="container">	
						<div class="row">	


							<!-- PAGE HERO TEXT -->
							<div class="col-md-10 offset-md-1">
								<div class="hero-txt text-center white-color">

									<!-- Title -->
									<h3 class="h3-xl">About Metreex</h3>

									<!-- Text -->
									<p>We provide professional PPC, Web and SEO services to increase online visibility and qualified leads 
									   to your business
									</p>

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
								    	<li class="breadcrumb-item active" aria-current="page">About Metreex</li>
								  	</ol>
								</nav>
							</div> 

						</div>	 <!-- End row -->
					</div>	<!-- End container -->		
				</div>	<!-- END BREADCRUMB -->	




				<!-- ABOUT-1
				============================================= -->
				<section id="about-1" class="wide-60 about-section division">
					<div class="container">
						<div class="row d-flex align-items-center">


							<!-- ABOUT IMAGE -->
							<div class="col-md-5 col-lg-6">
								<div class="img-block pr-25 mb-40 wow fadeInLeft" data-wow-delay="0.6s">
									<img class="img-fluid" src="{{ url('frontEnd/images/image-01.png')}}" alt="about-image">
						 		</div>
							</div>


							<!-- ABOUT TEXT -->
						 	<div class="col-md-7 col-lg-6">
						 		<div class="txt-block pc-25 mb-40 wow fadeInRight" data-wow-delay="0.4s">

						 			<!-- Title -->	
									<h4 class="h4-xl">We're providing the best SEO services for your website</h4>

									<!-- Text -->
									<p>An enim nullam tempor sapien gravida donec pretium ipsum porta justo integer at odio 
									   velna vitae auctor integera congue magna at purus pretium ligula rutrum luctus ultrice 
									   a gravida lectus suscipit gestas magna suscipit luctus undo
									</p>

									<!-- QUOTE -->
									<div class="quote quote-primary">

										<!-- Quote Text -->
										<p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean magna ligula eget dolor 
										   suscipit egestas at viverra dolor iaculis luctus magna suscipit egestas "									   
										</p>
												
										<!-- Quote Avatar -->
										<div class="quote-avatar">
											<img src="{{ url('frontEnd/images/quote-avatar.jpg')}}" alt="quote-avatar">
										</div>
													
										<!-- Quote Author -->
										<div class="quote-author">
											<h5 class="h5-xs">Sean Mcmarthy </h5>
											<span>Founder of Metreex</span>
										</div>	
									
									</div>					
									
						 		</div>
						 	</div>	  <!-- END ABOUT TEXT -->


						</div>    <!-- End row --> 	
					</div>	   <!-- End container --> 	
				</section>	<!-- END ABOUT-1 --> 




				<!-- SERVICES-2
				============================================= -->
				<section id="services-2" class="bg-lightgrey wide-30 services-section division">
					<div class="container">


						<!-- SECTION TITLE -->	
						<div class="row">	
							<div class="col-lg-10 offset-lg-1 section-title wow fadeInUp" data-wow-delay="0.2s">

								<!-- Title 	-->	
								<h3 class="h3-lg">Custom SEO Services – Our Specialty</h3>	

								<!-- Text -->	
								<p class="p-lg">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero 
								   tempus, blandit posuere and ligula varius magna a porta elementum massa risus
								</p>
									
							</div>
						</div>	<!-- END SECTION TITLE -->	


						<!-- SERVICE BOXES -->	
				 		<div class="row">


		 					<!-- SERVICE BOX #1 -->
		 					<div class="col-sm-6 col-lg-3">
		 						<a href="service-details.html">
			 						<div class="sbox-2 wow fadeInUp" data-wow-delay="0.4s">

			 							<!-- Icon  -->
										<img class="img-85" src="{{ url('frontEnd/images/icons/placeholder-1.png')}}" alt="feature-icon">

										<!-- Title -->
										<h5 class="h5-md">Local SEO</h5>
											
										<!-- Text -->
										<p class="p-sm grey-color">Porta semper lacus cursus feugiat and primis ultrice</p>

			 						</div>
			 					</a>
		 					</div>


		 					<!-- SERVICE BOX #2 -->
		 					<div class="col-sm-6 col-lg-3">
		 						<a href="service-details.html">
			 						<div class="sbox-2 wow fadeInUp" data-wow-delay="0.6s">

			 							<!-- Icon  -->
										<img class="img-85" src="{{ url('frontEnd/images/icons/online-shop-1.png')}}" alt="feature-icon">

										<!-- Title -->
										<h5 class="h5-md">E-Commerce SEO</h5>
											
										<!-- Text -->
										<p class="p-sm grey-color">Porta semper lacus cursus feugiat and primis ultrice</p>

			 						</div>
			 					</a>
		 					</div>


		 					<!-- SERVICE BOX #3 -->
		 					<div class="col-sm-6 col-lg-3">
		 						<a href="service-details.html">
			 						<div class="sbox-2 wow fadeInUp" data-wow-delay="0.8s">

			 							<!-- Icon  -->
										<img class="img-85" src="{{ url('frontEnd/images/icons/pie-chart.png')}}" alt="feature-icon">

										<!-- Title -->
										<h5 class="h5-md">Advanced Analytics</h5>
											
										<!-- Text -->
										<p class="p-sm grey-color">Porta semper lacus cursus feugiat and primis ultrice</p>

			 						</div>
			 					</a>
		 					</div>


		 					<!-- SERVICE BOX #4 -->
		 					<div class="col-sm-6 col-lg-3">
		 						<a href="service-details.html">
			 						<div class="sbox-2 wow fadeInUp" data-wow-delay="1s">

			 							<!-- Icon  -->
										<img class="img-85" src="{{ url('frontEnd/images/icons/pay-per-click-2.png')}}" alt="feature-icon">

										<!-- Title -->
										<h5 class="h5-md">PPC Management</h5>

										<!-- Text -->
										<p class="p-sm grey-color">Porta semper lacus cursus feugiat and primis ultrice</p>

			 						</div>
			 					</a>
		 					</div>


				 		</div>	<!-- END SERVICE BOXES -->	


				 	</div>	   <!-- End container -->		
				</section>	<!-- END SERVICES-2 -->	




				<!-- ABOUT-2
				============================================= -->
				<section id="about-2" class="wide-60 about-section division">
					<div class="container">
						<div class="row d-flex align-items-center">


							<!-- ABOUT TEXT -->
						 	<div class="col-md-7 col-lg-6">
						 		<div class="txt-block pc-25 mb-40 wow fadeInLeft" data-wow-delay="0.4s">

						 			<!-- Title -->	
									<h4 class="h4-xl">Get more sales with SEO, PPC, and Email Marketing</h4>

									<!-- List -->
									<ul class="txt-list">
												
										<li>Vitae auctor integer congue magna at pretium blandit porta justo integer. Feugiat a 
										   ligula rutrum luctus primis ultrice
										</li>

										<li>Integer congue magna at pretium purus a pretium ligula rutrum and luctus risus eros dolor 
										   auctor ipsum blandit purus vehicula magna luctus tempor quisque			
										</li>

									</ul>

									<!-- SMALL STATISTIC -->
									<div class="small-statistic">
										<div class="row">	

											<!-- STATISTIC BLOCK #1 -->
											<div class="col-sm-6">					
												<div class="statistic-block">							
													<h5 class="statistic-number primary-color">4,<span class="count-element">379</span></h5>
													<p>Websites Improved</p>
													<p class="p-sm">An enim nullam tempor sapien gravida donec blandit ipsum</p>			
												</div>								
											</div>

											<!-- STATISTIC BLOCK #2 -->
											<div class="col-sm-6">						
												<div class="statistic-block">								
													<h5 class="statistic-number primary-color"><span class="count-element">99</span>%</h5>
													<p>Customer Satisfaction</p>
													<p class="p-sm">An enim nullam tempor sapien gravida donec blandit ipsum</p>	
												</div>							
											</div>

										</div>	
									</div>	<!-- END SMALL STATISTIC -->

						 		</div>
						 	</div>	  <!-- END ABOUT TEXT -->


						 	<!-- ABOUT IMAGE -->
							<div class="col-md-5 col-lg-6">
								<div class="img-block pl-25 wow fadeInRight" data-wow-delay="0.6s">
									<img class="img-fluid" src="{{ url('frontEnd/images/image-02.png')}}" alt="about-image">
						 		</div>
							</div>


						</div>    <!-- End row --> 	
					</div>	   <!-- End container --> 	
				</section>	<!-- End ABOUT-2 --> 




				<!-- STATISTIC-1
				============================================= -->
				<div id="statistic-1" class="bg-06 statistic-section division">
					<div class="container white-color">
						<div class="row">


							<!-- STATISTIC BLOCK #1 -->
							<div class="col-sm-6 col-md-3">							
								<div class="statistic-block wow fadeInUp" data-wow-delay="0.4s">

									<!-- Text -->
									<h5 class="statistic-number">3,<span class="count-element">485</span></h5>
									<p class="p-md">Links Optimized</p>																		
														
								</div>								
							</div>


							<!-- STATISTIC BLOCK #2 -->
							<div class="col-sm-6 col-md-3">									
								<div class="statistic-block wow fadeInUp" data-wow-delay="0.6s">

									<!-- Text -->
									<h5 class="statistic-number">1,<span class="count-element">281</span></h5>	
									<p class="p-md">Happy Customers</p>									
																			
								</div>							
							</div>


							<!-- STATISTIC BLOCK #3 -->
							<div class="col-sm-6 col-md-3">						
								<div class="statistic-block wow fadeInUp" data-wow-delay="0.8s">	

									<!-- Text -->
									<h5 class="statistic-number">4,<span class="count-element">379</span></h5>
									<p class="p-md">Websites Improved</p>								

								</div>						
							</div>
						

							<!-- STATISTIC BLOCK #4 -->
							<div class="col-sm-6 col-md-3">							
								<div class="statistic-block wow fadeInUp" data-wow-delay="1s">	

									<!-- Text -->	
									<h5 class="statistic-number">2,<span class="count-element">473</span></h5>
									<p class="p-md">Active Accounts</p>				
									
								</div>						
							</div>


						</div> <!-- End row -->
					</div>	 <!-- End container -->		
				</div>	 <!-- END STATISTIC-1 -->




				<!-- TABS-1
				============================================= -->
				<section id="tabs-1" class="wide-60 tabs-section division">
					<div class="container">


						<!-- TABS NAVIGATION -->
					 	<div class="row">
							<div class="col-lg-12 text-center">
								<div class="tabs-nav clearfix">
							 		<ul class="tabs-1 primary-tabs">

							 			<!-- TAB-1 LINK -->
										<li class="tab-link displayed" data-tab="tab-1">Pay-Per-Click Advertising</li>

										<!-- TAB-2 LINK -->
										<li class="tab-link" data-tab="tab-2">Social Media Marketing</li>

										<!-- TAB-3 LINK -->
										<li class="tab-link" data-tab="tab-3">Search Engine Optimization</li>

									</ul>
								</div>
							</div>	
					 	</div> <!-- END TABS NAVIGATION -->


					 	<!-- TABS CONTENT -->
					 	<div class="tabs-content">


							<!-- TAB-1 CONTENT -->
							<div id="tab-1" class="tab-content displayed">
								<div class="row d-flex align-items-center">


									<!-- IMAGE BLOCK -->
									<div class="col-md-5 col-lg-6">
										<div class="img-block pr-25 mb-40">
											<img class="img-fluid" src="{{ url('frontEnd/images/image-05.png')}}" alt="content-image">
										</div>
									</div>


									<!-- TEXT BLOCK -->	
									<div class="col-md-7 col-lg-6">
										<div class="txt-block pc-25 mb-40">

											<!-- Title -->	
											<h4 class="h4-xl">We will help your business achieve predictable growth</h4>

											<!-- Text -->
											<p>An enim nullam tempor sapien gravida donec enim ipsum porta justo integer at odio velna vitae
											   auctor integer congue magna at pretium purus pretium ligula rutrum and luctus risus ultrice
											</p> 

											<!-- List -->
											<ul class="txt-list mb-15">
														
												<li>Integer congue magna at pretium purus pretium ligula rutrum and luctus risus eros dolor 
												   auctor ipsum blandit purus vehicula magna and luctus tempor quisque integer congue magna			
												</li>

												<li>Sagittis congue augue egestas volutpat egestas magna donec ociis et magnis ipsum porta 
												   justo integer velna purus
												</li>

											</ul>

											<!-- Button -->
											<a href="services.html" class="btn btn-tra-grey primary-hover">Learn More</a>

										</div>
									</div>	<!-- END TEXT BLOCK -->	


								</div>	  <!-- End row -->
							</div>	<!-- END TAB-1 CONTENT -->


							<!-- TAB-2 CONTENT -->
							<div id="tab-2" class="tab-content">
								<div class="row d-flex align-items-center">


									<!-- IMAGE BLOCK -->
									<div class="col-md-5 col-lg-6">
										<div class="img-block pr-25 mb-40">
											<img class="img-fluid" src="{{ url('frontEnd/images/image-03.png')}}" alt="content-image">
										</div>
									</div>


									<!-- TEXT BLOCK -->	
									<div class="col-md-7 col-lg-6">
										<div class="txt-block pc-25 mb-40">

											<!-- Title -->	
											<h4 class="h4-xl">We craft marketing & digital products that grow business</h4>

											<!-- Text -->
											<p>An enim nullam tempor sapien gravida donec pretium ipsum porta justo integer and 
											   odio velna vitae auctor integera congue magna at purus pretium ligula rutrum luctus 
											   and ultrice a gravida lectus
											</p> 

											<!-- List -->
											<ul class="ico-list mb-10">	
												<li><i class="fas fa-check grey-color"></i> <span>Vitae auctor integer congue magna at pretium</span></li>
												<li><i class="fas fa-check grey-color"></i> <span>Integer congue magna and pretium purus ligula</span></li>
												<li><i class="fas fa-check grey-color"></i> <span>Sagittis congue augue egestas volutpat egestas</span></li>
											</ul>

											<!-- Button -->
											<a href="case-studies-1.html" class="btn btn-md btn-primary tra-black-hover">Our Case Studies</a>

										</div>
									</div>	<!-- END TEXT BLOCK -->	


								</div>	 <!-- End row -->	
							</div>	<!-- END TAB-2 CONTENT -->


							<!-- TAB-3 CONTENT -->
							<div id="tab-3" class="tab-content">
								<div class="row d-flex align-items-center">


									<!-- IMAGE BLOCK -->
									<div class="col-md-5 col-lg-6">
										<div class="img-block pr-25 mb-40">
											<img class="img-fluid" src="{{ url('frontEnd/images/image-04.png')}}" alt="content-image">
										</div>
									</div>


									<!-- TEXT BLOCK -->	
									<div class="col-md-7 col-lg-6">
										<div class="txt-block pc-25 mb-40">

											<!-- Title -->	
											<h4 class="h4-xl">We're providing the best SEO services for your website</h4>

											<!-- Text -->
											<div class="cbox-1">	
								 				<i class="fas fa-check grey-color"></i>
												<div class="cbox-1-txt">
													<p>Integer congue magna at pretium purus pretium ligula rutrum and luctus risus eros dolor 
													   auctor ipsum blandit purus vehicula magna and luctus tempor quisque turpis magna ligula 
												   </p>
												</div>
											</div>
											
											<!-- Text -->
											<div class="cbox-1">	
								 				<i class="fas fa-check grey-color"></i>
												<div class="cbox-1-txt">
													<p>An enim nullam tempor sapien gravida donec enim blandit ipsum at porta justo integer velna
													   vitae auctor integer congue magna pretium purus pretium magnis nulla dolor sapien 
													</p>
												</div>
											</div>

											<!-- Text -->
											<div class="cbox-1">	
								 				<i class="fas fa-check grey-color"></i>
												<div class="cbox-1-txt">
												   <p>Integer congue magna at pretium purus pretium ligula rutrum and luctus risus eros dolor 
													   auctor ipsum blandit purus vehicula magna and luctus tempor quisque turpis magna ligula 
												   </p>
												</div>
											</div>

										</div>
									</div>	<!-- END TEXT BLOCK -->	


								</div>	 <!-- End row -->	
							</div>	<!-- END TAB-3 CONTENT -->


						</div>	<!-- END TABS CONTENT -->


					</div>     <!-- End container -->	
				</section>	<!-- END TABS-1 -->




				<!-- TESTIMONIALS-3
				============================================= -->
				<section id="reviews-3" class="bg-04 wide-100 reviews-section division">
					<div class="container">


						<!-- SECTION TITLE -->	
						<div class="row">	
							<div class="col-lg-10 offset-lg-1 section-title wow fadeInUp" data-wow-delay="0.2s">	

								<!-- Title 	-->	
								<h3 class="h3-lg">Reviews From Our Customers</h3>

								<!-- Text -->	
								<p class="p-lg">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero 
								   tempus, blandit posuere and ligula varius magna a porta elementum massa risus
								</p>

							</div>
						</div>
					
						
						<!-- TESTIMONIALS CONTENT -->
						<div class="row">
							<div class="col-xl-10 offset-xl-1">					
								<div class="owl-carousel owl-theme reviews-holder">

							
									<!-- TESTIMONIAL #1 -->
									<div class="review-3">

										<!-- Quote Icon -->
										<div class="quote-ico"><img src="{{ url('frontEnd/images/left-quote.png')}}" alt="quote-image"></div>

										<!-- Testimonial Text -->
										<p>Etiam sapien sem at sagittis congue an augue massa varius egestas and suscipit magna and 
										   tempus and aliquet porta vitae purus congue a cursus magna cubilia augue vitae laoreet				   
										</p>

										<!-- Author Data -->
										<div class="review-3-author d-flex align-items-center">

											<!-- Author Avatar -->
											<div class="author-avatar">
												<img class="img-fluid" src="{{ url('frontEnd/images/review-author-1.jpg')}}" alt="review-author-avatar">
											</div>

											<!-- Testimonial Author -->
											<div class="review-author">
												<h5 class="h5-xs">Sean McMarthy</h5>	
												<span>Owner, <a href="#">Company Name</a></span>
											</div>

										</div>									
																						
									</div>	<!--END  TESTIMONIAL #1 -->
							
							
									<!-- TESTIMONIAL #2 -->
									<div class="review-3">

										<!-- Quote Icon -->
										<div class="quote-ico"><img src="{{ url('frontEnd/images/left-quote.png')}}" alt="quote-image"></div>
						
										<!-- Testimonial Text -->
										<p>At sagittis congue augue egestas rhoncus in magna ipsum vitae purus ipsum primis cubilia 
										   laoreet augue egestas luctus and donec diam ociis ultrice ligula magna suscipit
										</p>

										<!-- Author Data -->
										<div class="review-3-author d-flex align-items-center">

											<!-- Author Avatar -->
											<div class="author-avatar">
												<img class="img-fluid" src="{{ url('frontEnd/images/review-author-2.jpg')}}" alt="review-author-avatar">
											</div>

											<!-- Testimonial Author -->
											<div class="review-author">
												<h5 class="h5-xs">Evelyn Martinez</h5>
												<span>Owner, <a href="#">Company Name</a></span>
											</div>

										</div>
						
									</div>	<!-- END TESTIMONIAL #2 -->
							
							
									<!-- TESTIMONIAL #3 -->
									<div class="review-3">

										<!-- Quote Icon -->
										<div class="quote-ico"><img src="{{ url('frontEnd/images/left-quote.png')}}" alt="quote-image"></div>
																	
										<!-- Testimonial Text -->
										<p>Mauris donec ociis magnis sapien etiam sapien congue and augue egestas et ultrice vitae undo 
										   purus and diam integer congue at magna ligula an egestas magna suscipit lectus   
										</p>

										<!-- Author Data -->
										<div class="review-3-author d-flex align-items-center">

											<!-- Author Avatar -->
											<div class="author-avatar">
												<img class="img-fluid" src="{{ url('frontEnd/images/review-author-3.jpg')}}" alt="review-author-avatar">
											</div>

											<!-- Testimonial Author -->
											<div class="review-author">
												<h5 class="h5-xs">Joel Peterson</h5>
												<span>Owner, <a href="#">Company Name</a></span>
											</div>	

										</div>	

									</div>	<!-- END TESTIMONIAL #3 -->


									<!-- TESTIMONIAL #4 -->
									<div class="review-3">

										<!-- Quote Icon -->
										<div class="quote-ico"><img src="{{ url('frontEnd/images/left-quote.png')}}" alt="quote-image"></div>
						
										<!-- Testimonial Text -->
										<p>Mauris donec ociis magnis sapien etiam sapien congue undo augue pretium purus ligula lectus aenean 
										   magna and mauris lectus undo laoreet tempor egestas magna vitae laoreet augue
										</p>

										<!-- Author Data -->
										<div class="review-3-author d-flex align-items-center">

											<!-- Author Avatar -->
											<div class="author-avatar">
												<img class="img-fluid" src="{{ url('frontEnd/images/review-author-4.jpg')}}" alt="review-author-avatar">
											</div>

											<!-- Testimonial Author -->
											<div class="review-author">
												<h5 class="h5-xs">Michael Deal</h5>
												<span>Owner, <a href="#">Company Name</a></span>
											</div>
						
										</div>	

									</div>	<!-- END TESTIMONIAL #4 -->
									
									
									<!-- TESTIMONIAL #5 -->
									<div class="review-3">

										<!-- Quote Icon -->
										<div class="quote-ico"><img src="{{ url('frontEnd/images/left-quote.png')}}" alt="quote-image"></div>

										<!-- Testimonial Text -->
										<p>An augue in cubilia laoreet magna suscipit egestas magna ipsum at purus ipsum primis in augue 
										   ultrice ligula egestas and suscipit lectus gestas integer congue
										</p>	

										<!-- Author Data -->
										<div class="review-3-author d-flex align-items-center">

											<!-- Author Avatar -->
											<div class="author-avatar">
												<img class="img-fluid" src="{{ url('frontEnd/images/review-author-5.jpg')}}" alt="review-author-avatar">
											</div>

											<!-- Testimonial Author -->
											<div class="review-author">
												<h5 class="h5-xs">Mark Paterson</h5>
												<span>Owner, <a href="#">Company Name</a></span>
											</div>					
																	
										</div>	

									</div>	<!-- END TESTIMONIAL #5 -->
									
									
									<!-- TESTIMONIAL #6 -->
									<div class="review-3">

										<!-- Quote Icon -->
										<div class="quote-ico"><img src="{{ url('frontEnd/images/left-quote.png')}}" alt="quote-image"></div>

										<!-- Testimonial Text -->
										<p>An augue cubilia laoreet undo magna a suscipit egestas magna an ipsum ligula vitae purus and 
										   ipsum primis in cubilia
										</p>

										<!-- Author Data -->
										<div class="review-3-author d-flex align-items-center">

											<!-- Author Avatar -->
											<div class="author-avatar">
												<img class="img-fluid" src="{{ url('frontEnd/images/review-author-6.jpg')}}" alt="review-author-avatar">
											</div>

											<!-- Testimonial Author -->
											<div class="review-author">
												<h5 class="h5-xs">Mark Hodges</h5>
												<span>Owner, <a href="#">Company Name</a></span>
											</div>

										</div>	

									</div>	<!-- END TESTIMONIAL #6 -->
									
									
									<!-- TESTIMONIAL #7 -->
									<div class="review-3">

										<!-- Quote Icon -->
										<div class="quote-ico"><img src="{{ url('frontEnd/images/left-quote.png')}}" alt="quote-image"></div>
					
										<!-- Testimonial Text -->
										<p>Augue egestas volutpat egestas augue purus cubilia laoreet magna suscipit luctus and dolor blandit 
										   vitae purus diam tempus undo aliquet porta rutrum gestas egestas 
										</p>

										<!-- Author Data -->
										<div class="review-3-author d-flex align-items-center">

											<!-- Author Avatar -->
											<div class="author-avatar">
												<img class="img-fluid" src="{{ url('frontEnd/images/review-author-7.jpg')}}" alt="review-author-avatar">
											</div>

											<!-- Testimonial Author -->
											<div class="review-author">
												<h5 class="h5-xs">Aaron Wall</h5>
												<span>Owner, <a href="#">Company Name</a></span>
											</div>
						
										</div>	

									</div>	<!-- END TESTIMONIAL #7 -->


									<!-- TESTIMONIAL #8 -->
									<div class="review-3">

										<!-- Quote Icon -->
										<div class="quote-ico"><img src="{{ url('frontEnd/images/left-quote.png')}}" alt="quote-image"></div>
						
										<!-- Testimonial Text -->
										<p>Augue egestas volutpat egestas augue in cubilia laoreet magna suscipit luctus and dolor blandit
									       vitae purus diam tempus 
										</p>	

										<!-- Author Data -->
										<div class="review-3-author d-flex align-items-center">

											<!-- Author Avatar -->
											<div class="author-avatar">
												<img class="img-fluid" src="{{ url('frontEnd/images/review-author-8.jpg')}}" alt="review-author-avatar">
											</div>

											<!-- Testimonial Author -->
											<div class="review-author">
												<h5 class="h5-xs">Tosha Wisdom</h5>
												<span>Owner, <a href="#">Company Name</a></span>
											</div>							
																	
										</div>	

									</div>	<!-- END TESTIMONIAL #8 -->

								
								</div>
							</div>									
						</div>	<!-- END TESTIMONIALS CONTENT --> 
								
							
					</div>	   <!-- End container -->
				</section>	 <!-- END TESTIMONIALS-3 -->




				<!-- BRANDS-2
				============================================= -->
				<div id="brands-2" class="brands-section division">
					<div class="container">					
						<div class="row">
							<div class="col-md-12 text-center">	

								<!-- Title -->
								<p class="p-lg grey-color">Used by startups, e-stores, web designers, and teams including:</p>

								<ul class="brands-list">
														
									<!-- BRAND LOGO IMAGE -->
									<li class="brand-logo">
										<img class="img-fluid" src="{{ url('frontEnd/images/brand-1.png')}}" alt="brand-logo">
									</li>
														
									<!-- BRAND LOGO IMAGE -->
									<li class="brand-logo">
										<img class="img-fluid" src="{{ url('frontEnd/images/brand-2.png')}}" alt="brand-logo">
									</li>
														
									<!-- BRAND LOGO IMAGE -->
									<li class="brand-logo">
										<img class="img-fluid" src="{{ url('frontEnd/images/brand-3.png')}}" alt="brand-logo">
									</li>
														
									<!-- BRAND LOGO IMAGE -->
									<li class="brand-logo">
										<img class="img-fluid" src="{{ url('frontEnd/images/brand-4.png')}}" alt="brand-logo">
									</li>
														
									<!-- BRAND LOGO IMAGE -->
									<li class="brand-logo">
										<img class="img-fluid" src="{{ url('frontEnd/images/brand-5.png')}}" alt="brand-logo">
									</li>
														
									<!-- BRAND LOGO IMAGE -->
									<li class="brand-logo">
										<img class="img-fluid" src="{{ url('frontEnd/images/brand-6.png')}}" alt="brand-logo">
									</li>

									<!-- BRAND LOGO IMAGE -->
									<li class="brand-logo">
										<img class="img-fluid" src="{{ url('frontEnd/images/brand-7.png')}}" alt="brand-logo">
									</li>
																
									<!-- BRAND LOGO IMAGE -->
									<li class="brand-logo">
										<img class="img-fluid" src="{{ url('frontEnd/images/brand-8.png')}}" alt="brand-logo">
									</li>
									
									<!-- BRAND LOGO IMAGE -->
									<li class="brand-logo">
										<img class="img-fluid" src="{{ url('frontEnd/images/brand-9.png')}}" alt="brand-logo">
									</li>

								</ul>

							</div>
						</div>      <!-- End row -->
					</div>	    <!-- End container -->
				</div>	<!-- END BRANDS-2 -->




				<!-- CALL TO ACTION-4
				============================================= -->
				<section id="cta-4" class="bg-06 cta-section division">
					<div class="container white-color">
						<div class="row d-flex align-items-center">
						

							<!-- CALL TO ACTION TEXT -->
							<div class="col-lg-8">
								<div class="cta-txt">

									<!-- Title -->	
									<h3 class="h3-xs">Improve your search ranking now!</h3>

									<!-- Text -->
									<p class="p-md">Donec vel sapien augue integer urna vel turpis cursus porta, mauris sed augue 
									   luctus dolor velna auctor congue tempus magna integer
									</p>

								</div>
							</div>	<!-- END CALL TO ACTION TEXT -->


							<!-- CALL TO ACTION BUTTON -->
							<div class="col-lg-4">
								<div class="cta-btn text-right">
									<a href="pricing.html" class="btn btn-md btn-primary tra-white-hover">Get Started Now</a>
								</div>
							</div>	


						</div>	 <!-- End row -->
					</div>	   <!-- End container -->	
				</section>	<!-- END CALL TO ACTION-4 -->



    <!-- js bar start-->
    @include('frontEnd.layouts.includes.footer')
    <!-- js bar end -->




			</div>	<!-- END INNER PAGE WRAPPER -->
	
@endsection


