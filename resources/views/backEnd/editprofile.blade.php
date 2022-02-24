@extends('backEnd.layouts.layout') @section('admin_content')
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
               <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="main-content-label mg-b-5">
                              Edit Profile
                            </div>
                            <form method="post" action="{{ route('update') }}"
                     enctype="multipart/form-data">
                            @csrf

                            @if(session()->has('status'))
                            <div class="alert alert-solid-success">
                                @if(is_array(session()->get('status')))
                                @foreach (session()->get('status') as $message)
                                <p>{{ $message }}</p>
                                @endforeach
                                @else
                                <p>{{ session()->get('success') }}</p>
                                @endif
                            </div>
                            @endif
                            <div >
                                <ul>
                            @foreach ($errors->all() as $e)
                              <li style="color:red;">{{$e}}</li>
                            @endforeach
                        </ul>
                        </div>
                                <div class="row row-sm">
                                    <div class="col-4">
                                        <div class="form-group mg-b-0">
                                            <label class="form-label">User Name: <span class="tx-danger">*</span></label>
                                            <input class="form-control" name="email" placeholder="Enter Email" 
                                            value="{{ $profile->email ?? ''}}" type="text">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group mg-b-0">
                                            <label class="form-label">Password: <span class="tx-danger">*</span></label>
                                            <input class="form-control" name="password" placeholder="Enter Password" 
                                             type="password">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group mg-b-0">
                                            <label class="form-label">Confirm Password: <span class="tx-danger">*</span></label>
                                            <input class="form-control" name="confirm_password" placeholder="Enter Confirm Password" 
                                             type="password">
                                        </div>
                                    </div>

                                     <div class="d-flex pagination wd-100p">
                                   	<button  type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
						</div></div>
                            </form>
                        </div>
                    </div>
                </div>
               
            </div>
            <!-- /row -->

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