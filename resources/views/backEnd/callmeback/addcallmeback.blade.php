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
                    <li style="display:none;"  class="breadcrumb-item Fresh" aria-current="page">Project</li>
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
                        Update Enquiry
                    </div>
                    <form method="post" action="{{ url('admin/enquiry/update/'.$id) }}" enctype="multipart/form-data">
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
                        <div>
                            <ul>
                                @foreach ($errors->all() as $e)
                                <li style="color:red;">{{$e}}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="row row-sm">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">Status: <span class="tx-danger">*</span></label>
                                    <select name="status" class="form-control">
                                        <!--placeholder-->
                                        @if(Request::is('admin/enquiry/edit/*')) >
                                        @if($callmeback->status=='1')
                                        <option value="1">Fresh</option>
                                        <option value="2">Pending</option>
                                        <option value="3">Approve</option>
                                        <option value="4">Reject</option>

                                        @elseif($callmeback->status=='2')
                                        <option value="2">Pending</option>
                                        <option value="4">Reject</option>
                                        <option value="3">Approve</option>
                                        <option value="1">Fresh</option>

                                        @elseif($callmeback->status=='3')
                                        
                                        <option value="3">Approve</option>
                                        <option value="4">Reject</option>
                                        <option value="2">Pending</option>
                                        <option value="1">Fresh</option>

                                        @else
                                        <option value="4">Reject</option>
                                        <option value="3">Approve</option>
                                        <option value="2">Pending</option>
                                        <option value="1">Fresh</option>

                                        @endif
                                        @endif
                                    </select>
                                </div>
                            </div>
                      

                        <div class="d-flex pagination wd-100p">
                            <a href="{{url('admin/enquiry')}}" class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
                            <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
    //jQuery.noConflict();
    function readURL(input) {
        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function (e) {
                jQuery('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    jQuery("#profile-img").change(function () {
        readURL(this);
    });

</script>
@endsection
