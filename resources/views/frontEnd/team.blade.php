@extends('frontEnd.layouts.layout') @section('content')
<!-- header start -->
@include('frontEnd.layouts.includes.headerdark')
<!-- header end -->

			<!-- INNER PAGE WRAPPER
			============================================= -->	
			<div class="inner-page-wrapper">




				<!-- PAGE HERO
				============================================= -->	
				<section id="team-page" class="page-hero-section division">
					<div class="container">	
						<div class="row">	


							<!-- PAGE HERO TEXT -->
							<div class="col-md-10 offset-md-1">
								<div class="hero-txt text-center white-color">

									<!-- Title -->
									<h3 class="h3-xl">Our Marketing Team</h3>

									<!-- Text -->
									<p>A team of search marketing savants, and technical specialists who love helping in-house 
										teams excel in competitive markets
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
								    	<li class="breadcrumb-item active" aria-current="page">Our Team</li>
								  	</ol>
								</nav>
							</div> 

						</div>	 <!-- End row -->
					</div>	<!-- End container -->		
				</div>	<!-- END BREADCRUMB -->	




				<!-- TEAM-2
				============================================= -->
				<section id="team-2" class="wide-60 team-section division">
					<div class="container">
						<div class="row">

							@foreach($teamDatas as $teamData)
							<!-- TEAM MEMBER #1 -->
							<div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
								<div class="team-member">								
															
									<!-- Team Member Photo -->
									<div class="team-member-photo">

										<img class="img-fluid" src="{{ $teamData->image }}" alt="{{ $teamData->name  }} {{ $teamData->designation  }}">
									
										<!-- Social Icons -->
										<div class="tm-social clearfix">
											<ul class="text-center clearfix">																			
												<li><a target="blank" href="{{ $teamData->fblink  }}" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
												<li><a target="blank" href="{{ $teamData->twitterlink  }}" class="ico-twitter"><i class="fab fa-twitter"></i></a></li>	
												<li><a target="blank" href="{{ $teamData->linkedinlink  }}" class="ico-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
												<li><a target="blank" href="{{ $teamData->instalink  }}" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>
											</ul>
										</div>	

									</div>

									<!-- Team Member Meta -->		
									<div class="tm-meta">
										<h5 class="h5-sm">{{ $teamData->name  }}</h5>
										<span>{{ $teamData->designation  }}</span>
										<a href="mailto:youremail@mail.com">sam_r@domain.com</a>
									</div>	

								</div>								
							</div>	<!-- END TEAM MEMBER #1 -->
							@endforeach

						</div>	  <!-- End row -->
					</div>     <!-- End container -->
				</section>	<!-- END TEAM-2 -->




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



 <!-- footer bar start-->
 @include('frontEnd.layouts.includes.footer')
 <!-- footer bar end -->



			</div>	<!-- END INNER PAGE WRAPPER -->
	
@endsection