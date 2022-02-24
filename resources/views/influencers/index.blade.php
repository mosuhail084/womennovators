@extends('influencers.layouts.layout') @section('admin_content')
<!-- container -->
<style>
    .project-content p {
    font-size: 16px;
    color: #333;
    font-family: arial;
}
</style>
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Hi {{$name}}, Welcome Back!</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(url('influencers/home')); ?>">Dashboard</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- /breadcrumb -->
    <!-- main-content-body -->
    <div class="main-content-body">
      <!-- row -->
	  <div class="row row-sm">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="card overflow-hidden project-card">
				<div class="card-body">
					<div class="d-flex">
						
						
						<div class="project-content">
							<h3>Welcome to your Dashboard !! 
							</h3><br/>
						</div>
					</div>
				</div>
			</div>
		</div>
		
<style>
            .step-1 {    position: relative;background-color: #980c70;padding: 10px;color: #fff;border-radius: 5px;    margin-bottom: 25px;box-shadow: 4px 4px 5px 2px #0000001a;    border: 1px solid #ddddddd6;}
            .step-img img {width: 100%;}
            .step-1 .content { display: block;padding: 10px 5px 0px;text-align: center;}
            .step-1 .content p{font-size: 16px;}            
            .step {    position: relative; padding: 10px;color: #fff;border-radius: 5px;    margin-bottom: 25px;    min-height: 403px;    box-shadow: 4px 4px 5px 2px #0000001a;    border: 1px solid #ddddddd6;}
            .step-3 {background-color: #f6f6f6;}
            .black-colore {color: #333;}
            .step .content {padding: 10px 5px 0px;text-align: center;}
            .step .content h3 {font-size: 24px;font-family: 'Poppins';    font-weight: 600;}
            .step .content p {font-size: 16px;font-family: 'Poppins';}
            .green {background-color: #009688;color: #fff;}
            .step-no {    position: absolute;
    top: 0px;
    left: 8px;
    padding: 0px 5px;
    background: url(../backEnd/img/arrow-bg.png)no-repeat;
    background-position: center;
    background-size: cover;
    padding-right: 22px;    color: #fff;}
            
        </style>
        
        <section>
            <div class="row">
               
                <div class="col-sm-8">
                    <div class="step-1">
                        
                        <div class="step-img">
                            <img class="img-fluid" alt="profile image" src="{{ url('backEnd/img/step-2.jpg')}}">
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="step-3 step black-colore">
                        <div class="step-no">STEP 1</div>
                        <div class="step-img">
                            <img class="img-fluid" alt="profile image" src="{{ url('backEnd/img/step-3.jpg')}}">
                        </div>
                        <div class="content">
                            <h3>FINALISE DATES</h3>
                            <p>Date and Time shall be finalized by you to WE Team
Open file of creative shall be provided to you. Once completed, shall be shared by WE team on official FB.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="step-3 step black-colore">
                        <div class="step-no">STEP 2</div>
                        <div class="step-img">
                            <img class="img-fluid" alt="profile image" src="{{ url('backEnd/img/step-4.png')}}">
                        </div>
                        <div class="content">
                            <h3>FINALISE JURY</h3>
                            <p>Suggest 6 Jury who shall judge the competition. Official mail with cc to you shall be send to get confirmation</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="step-3 step black-colore">
                        <div class="step-no">STEP 3</div>
                        <div class="step-img">
                            <img class="img-fluid" alt="profile image" src="{{ url('backEnd/img/step-5.png')}}">
                        </div>
                        <div class="content">
                            <h3>REGISTRATION & 60 SEC VIDEO</h3>
                            <p>Ask participants to register online share 1 min video in common whatspp group created by WE team</p>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="green step ">
                        <div class="step-no">STEP 4</div>
                        <div class="step-img">
                            <img class="img-fluid" alt="profile image" src="{{ url('backEnd/img/step-6.png')}}">
                        </div>
                        <div class="content">
                            <h3>VIDEO ON YOUTUBE</h3>
                            <p>Once WE Team recieve the video, it shall be uploaded on Youtube// WE pitch channel</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="green step ">
                        <div class="step-no">STEP 5</div>
                        <div class="step-img">
                            <img class="img-fluid" alt="profile image" src="{{ url('backEnd/img/step-7.png')}}">
                        </div>
                        <div class="content">
                            <h3>COMPETITION DAY</h3>
                            <p>All participants and jury should be invited and videos shall be played followed by Q&A by Jury with prospective awardees</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="green step ">
                        <div class="step-no">STEP 6</div>
                        <div class="step-img">
                            <img class="img-fluid" alt="profile image" src="{{ url('backEnd/img/step-8.png')}}">
                        </div>
                        <div class="content">
                            <h3>ANNOUCE RESULT</h3>
                            <p>6 winners, 5 as decided by Jury and l as per public choices on the basis on likes on individual youtube.</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>

	
		
		
	
		
		
		
	</div>

				<!-- /row -->
	  
    </div>
    <!-- /row -->
</div>
<!-- /container -->
           
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- /main-content -->

@endsection
