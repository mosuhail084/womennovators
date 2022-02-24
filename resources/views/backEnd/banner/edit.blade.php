
@extends('backEnd.layouts.layout') @section('admin_content')
<!-- container -->
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Hi, welcome back!</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Project</li>
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
                               Edit Banner
                            </div>
                            <div class="card-body">
                      
                            <div class="card-body">
   @if(Session::has('banner'))
         <div class="alert alert-success" role="alert">
         {{Session::get('banner')}}
         </div>
         @endif
   
     <form method="post" action="{{ route('banner.update', $banner->id)}}" enctype="multipart/form-data">

     
                                @method('PATCH') 
                                @csrf   
                                @component('backEnd.components.alert')

                                @endcomponent
                 
                                @csrf 
         <input type="hidden" name="id" value="{{$banner->id}}">
         <div class="col-6">
        <div class="form-group mg-b-0">
         <label for="name">Title<span class="tx-danger">*</span></label>
         <input type="text" name="title" value="{{$banner->title}}" class="form-control"/>
         </div>
         </div>
         

         <div class="col-6">
        <div class="form-group mg-b-0">
         <label for="name">link<span class="tx-danger">*</span></label>
         <input type="link" name="link" value="{{$banner->link}}" class="form-control"/>
         </div>
         </div>

          <div class="col-6">
        <div class="form-group mg-b-0">
         <label for="name">sequence<span class="tx-danger">*</span></label>
         <input type="tel" name="sequence" value="{{$banner->sequence}}" class="form-control"/>
         </div>
          </div>

          <div class="col-6">
        <div class="form-group mg-b-0">
         <label for="file">Choose Profile Image<span class="tx-danger">*</span></label>
         <input type="file" name="bannerimage" class="form-control" id="profile-img" />
         <img   id="profile-img-tag"  alt="profile image" src="{{asset('image')}}/{{$banner->bannerimage}}" style="max-width:130px;margin-top:20px;"/>
         </div>
          </div>

      <div class="row row-sm">
    <div class="d-flex pagination wd-100p">
    <a href="{{url('admin/banner')}}"
            class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
            <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Submit</button>
    </div>
</div>
        
         </form>
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