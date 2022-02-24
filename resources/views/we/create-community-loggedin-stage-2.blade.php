
	
	@extends('we.layouts.layout') @section('front_content')
	
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-sm-1 to_animate" data-animation="fadeInUp">
					
				</div>
				<div class="col-sm-10 to_animate" data-animation="fadeInRight">
					<div class="loggin-stage-3">
						
							<div class="time-box"><img src="images/time-icon.png"></div>
							<p>Your community creation request is under review. We’ll inform you via email when you <br>can access your community and post events.</p>
					</div>
					<div class="space-t-30 text-center">
					 <a href="{{url('/')}}" class="next">Go to Home</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
    
                
    
			@endsection
		
		<!-- eof #box_wrapper -->
	<!--</div>-->
	<!-- eof #canvas -->
