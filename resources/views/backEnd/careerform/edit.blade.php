
@extends('backEnd.layouts.layout') @section('admin_content')
<!-- container -->
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Hi, welcome back!</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <!--<li class="breadcrumb-item"><a href="#">Dashboard</a></li>-->
                    <li class="breadcrumb-item active" aria-current="page">Career</li>
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
                               Edit Career 
                            </div>
                            <form method="post" action="{{ route('careerform.update', $careerform->id)}}" enctype="multipart/form-data">
                                @method('PATCH') 
                                @csrf   
                                @component('backEnd.components.alert')

                                @endcomponent
                 
                                 <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Status: <span class="tx-danger">*</span></label>
            <select name="current_status" class="form-control">
               <!--placeholder-->
               @if(Request::is('user/blog/*/edit')) >
               @if($blog->current_status=='1')
               <option value="1">Pending</option>
               <option value="2">Approved</option>


               @else
               <option value="2">Approved</option>
               <option value="1">Pending</option>

               @endif
               @else

               <option value="1">Pending</option>
               <option value="2">Approved</option>
               @endif
            </select>
        </div>
        <br>  
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/careerform')}}"
            class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
    </div>
</div>
    </div>
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
@endsection