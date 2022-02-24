
	
	@extends('we.layouts.layout') @section('front_content')
	
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-sm-1 to_animate" data-animation="fadeInUp">
					
				</div>
				<div class="col-sm-10 to_animate" data-animation="fadeInRight">
					<div class="loggin-stage-3">
						
							<div class="check-box"><img src="images/check-wt.png"></div>
							<p>Your community creation request has been approved. You can proceed to the next page and fill the remaining details to create your community page.</p>
					</div>
					<div class="space-t-30 text-center">
					 <a href="{{route('we.communities')}}" class="go-to-me">Go to Community Page</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
    
                
    
			@endsection
		
		<!-- eof #box_wrapper -->
	<!--</div>-->
	<!-- eof #canvas -->
