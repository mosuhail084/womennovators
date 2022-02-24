@extends('backEnd.buyers.layouts.layout') @section('admin_content')
<!-- container -->
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Hi, Welcome Back!</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Support</a></li>
                    <li style="display:none;"  class="breadcrumb-item active" aria-current="page">Project</li>
                </ol>
            </nav>
        </div>
     
    </div>
    <!-- /breadcrumb -->
    <!-- main-content-body -->
   				<!-- row -->
				<div class="row row-sm">
					<!-- Col -->
					<div class="col-lg-4">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="pl-0">
									<div class="main-profile-overview">
										<div class="main-img-user profile-user"><img alt="" src="{{ $profile->photo ??''}}"><a href="JavaScript:void(0);" class="fas fa-camera profile-edit"></a></div>
										<div class="d-flex justify-content-between mg-b-20">
											<div>
												<h5 class="main-profile-name">{{ $profile->name ??''}}</h5>
												<p class="main-profile-name-text">{{ $profile->designation ??''}}</p>
											</div>
										</div>
										<h6>Bio</h6>
										<div class="main-profile-bio">
										{{ $profile->description ??''}}
										</div>

										<!-- main-profile-work-list -->

										<hr class="mg-y-30">
										<label class="main-content-label tx-13 mg-b-20">Social</label>
										<div class="main-profile-social-list">
											<div class="media">
												<div class="media-icon bg-primary-transparent text-primary">
													<i class="icon ion-logo-facebook"></i>
												</div>
												<div class="media-body">
													<span>Facebook</span> <a href="#">	{{ $profile->fblink ??''}}</a>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-success-transparent text-success">
													<i class="icon ion-logo-twitter"></i>
												</div>
												<div class="media-body">
													<span>Twitter</span> <a href="#">	{{ $profile->twitter ??''}}</a>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-info-transparent text-info">
													<i class="icon ion-logo-linkedin"></i>
												</div>
												<div class="media-body">
													<span>Linkedin</span> <a href="#">	{{ $profile->linkedin ??''}}</a>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-danger-transparent text-danger">
													<i class="icon ion-logo-instagram"></i>
												</div>
												<div class="media-body">
													<span> Instagram</span> <a href="#">{{ $profile->instagram ??''}}</a>
												</div>
											</div>
										</div><!-- main-profile-social-list -->
									</div><!-- main-profile-overview -->
								</div>
							</div>
						</div>
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label tx-13 mg-b-25">
									Conatct
								</div>
								<div class="main-profile-contact-list">
									<div class="media">
										<div class="media-icon bg-primary-transparent text-primary">
											<i class="icon ion-md-phone-portrait"></i>
										</div>
										<div class="media-body">
											<span>Mobile</span>
											<div>
												{{ $profile->mobile_number ??''}}
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-icon bg-success-transparent text-success">
											<i class="fe fe-mail"></i>
										</div>
										<div class="media-body">
											<span>Email</span>
											<div>
												{{ $profile->email ??''}}
											</div>
										</div>
									</div>
								
								</div><!-- main-profile-contact-list -->
							</div>
						</div>
					</div>
					<!-- /Col -->

					<!-- Col -->
					<div class="col-lg-8">
						<div class="card">
							<div class="card-body">
								<div class="mb-4 main-content-label">Personal Information</div>
								<form class="form-horizontal">
								
									<div class="mb-4 main-content-label">Name</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">User Name</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="User Name" value="{{ $profile->name ??''}}">
											</div>
										</div>
									</div>
								
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Designation</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="Designation" value="{{ $profile->designation ??''}}">
											</div>
										</div>
									</div>
									<div class="mb-4 main-content-label">Contact Info</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Email<i>(required)</i></label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="Email" value="{{ $profile->email ??''}}">
											</div>
										</div>
									</div>
								
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Phone</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="phone number" value="{{ $profile->mobile_number ??''}}">
											</div>
										</div>
									</div>
								
									<div class="mb-4 main-content-label">Social Info</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Twitter</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="twitter" value="{{ $profile->twitter ??''}}">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Facebook</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="facebook" value="{{ $profile->fblink ??''}}">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Linkedin</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="Linkedin" value="{{ $profile->linkedin ??''}}">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Instagram</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="Instagram" value="{{ $profile->instagram ??''}}">
											</div>
										</div>
									</div>
								
									<div class="mb-4 main-content-label">About Yourself</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label"> Info</label>
											</div>
											<div class="col-md-9">
												<textarea class="form-control" name="example-textarea-input" rows="4" placeholder="">{!! $profile->description ??''!!}</textarea>
											</div>
										</div>
									</div>
								
								</form>
							</div>
							<div class="card-footer">
								<button type="submit" class="btn btn-primary waves-effect waves-light">Update Profile</button>
							</div>
						</div>
					</div>
					<!-- /Col -->
				</div>
				<!-- row closed -->

    <!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /main-content -->
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
@endsection