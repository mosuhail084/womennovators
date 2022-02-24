@extends('influencers.layouts.layout') @section('admin_content')
<!-- container -->
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Hi, Welcome Back!</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Support</a></li>
                    <li style="display:none;" class="breadcrumb-item active" aria-current="page">Project</li>
                </ol>
            </nav>
        </div>

    </div>
    <!-- /breadcrumb -->
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0 mt-2">Add Jury </h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                </div>
                <div class="card-body form-res">
                    @component('backEnd.components.alert')

                    @endcomponent
                    <form method="post" action="{{url('influencer/infjury/store')}}" enctype="multipart/form-data">
                    @csrf
                     
                    <div class="row row-sm">
    <div class="col-sm-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Name: <span class="tx-danger">*</span></label>
            <input class="form-control" name="jury_name" placeholder="Enter Name" 
                type="text" required>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Email: <span class="tx-danger">*</span></label>
            <input class="form-control" name="jury_email" placeholder="Enter Name" 
                type="email" required>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Phone: <span class="tx-danger"></span></label>
            <input class="form-control" name="jury_phone" placeholder="Enter Name" 
                type="number">
        </div>
    </div>
    </div>
    <br>
<div class="row row-sm">
    <div class="col-sm-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Designation: <span class="tx-danger">*</span></label>
            <input class="form-control" name="jury_designation" placeholder="Enter Name" 
                type="text" required>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Jury Org: <span class="tx-danger"></span></label>
            <input class="form-control" name="jury_org" placeholder="Enter Name" 
                type="text">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Linkedin: <span class="tx-danger"></span></label>
            <input class="form-control" name="jury_linkedin" placeholder="Enter Name" 
                type="text">
        </div>
    </div>
</div>
<br>

    
    

<br>
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('influencer/juryshow')}}" class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
    </div>
</div>
</form>
                </div>
            </div>
        </div>
        <!--/div-->


    </div>
    <!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /main-content -->@endsection
