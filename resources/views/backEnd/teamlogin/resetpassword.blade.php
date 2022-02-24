@extends('backEnd.layouts.layout')
 @section('admin_content')
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
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                      Reset Password
                    </div>
                    <form method="post" action="{{ url('admin/password/update', $id)}}" enctype="multipart/form-data">
                        @method('PATCH') 
                        @csrf   
                        @component('backEnd.components.alert')

                        @endcomponent
         
                        <div class="row row-sm">
                            <div class="col-4">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Team Member : <span class="tx-danger">*</span></label>
                                    <input class="form-control " type="text" name="emailid" value="{{ $teammember->emailid ?? ''}}" >
                                   
                             
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Password: <span class="tx-danger">*</span></label>
                                    <input class="form-control" name="team_member_name" placeholder="Enter Password."
                                       type="password">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Confirm Password: <span class="tx-danger">*</span></label>
                                    <input class="form-control" name="mobile_no" placeholder="Enter Confirm Password."
                                        type="password">
                                </div>
                            </div>
                        
                            
                        </div><br>
                        
                        
                            
                        
                        <div class="row row-sm">
                            <div class="d-flex pagination wd-100p">
                                <a href="{{url('admin/team')}}" class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
                                <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
                        
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
       
    </div>
 </div>
 @endsection