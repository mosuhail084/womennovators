@extends('backEnd.layouts.layout') @section('admin_content')
<!-- container -->
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Hi, Welcome Back!</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Dashboard</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- /breadcrumb -->
    <!-- main-content-body -->
    <div class="main-content-body">
      <!-- row -->
				<div class="row row-sm">
					<div class="col-xl-3 col-md-6 col-lg-6 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="plan-card text-center">
									<i class="fas fa-users text-primary plan-icon"></i>
									<h6 style="color: #031b4e;" class="text-drak text-uppercase mt-2">Join Squad</h6>
                                <h2 style="color: #031b4e;" class="mb-2">{{ $join }}</h2>
								</div>
                            </div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-lg-6 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="plan-card text-center">
									<i class="fab fa-first-order plan-icon text-primary"></i>
									<h6 style="color: #031b4e;"  class="text-drak text-uppercase mt-2">Order Details</h6>
                                <h2 style="color: #031b4e;"  class="mb-2">{{ $order }}</h2>
								</div>
                            </div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-lg-6 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="plan-card text-center">
									<i class="fas fa-user-md plan-icon text-primary"></i>
									<h6 style="color: #031b4e;"  class="text-drak text-uppercase mt-2"> Covid Warriors</h6>
                                <h2 style="color: #031b4e;"  class="mb-2">{{$warrior}}</h2>
								</div>
                            </div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-lg-6 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="plan-card text-center">
									<i class="fas fa-phone plan-icon text-primary"></i>
									<h6 style="color: #031b4e;" class="text-drak text-uppercase mt-2">Total Enquiry</h6>
                                <h2 style="color: #031b4e;" class="mb-2">{{ $enquiry}}</h2>
								</div>
                            </div>
						</div>
					</div>
				</div>
				<!-- /row -->

    </div>
    <!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /main-content -->
@endsection