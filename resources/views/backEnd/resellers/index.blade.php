@extends('backEnd.resellers.layouts.layout') @section('reseller_content')
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
                        @if(Request::is('admin/listing/edit/*')) Edit Service Provider @else Add Details
                        @endif
                    </div>
                    <form method="post" action="{{url('resellers/store')}}" enctype="multipart/form-data">
                        @csrf
                        @component('backEnd.components.alert')

                        @endcomponent

                        <div class="row row-sm">
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Name: <span class="tx-danger">*</span></label>
                                    <input class="form-control" name="name" value="{{ $reseller->name ?? ''}}"
                                        placeholder="Enter Store Name" type="text">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Country: <span class="tx-danger">*</span></label>
                                    <select class="form-control" id="category" name="country">
                                        <option value="0">Please Select One
                                        </option>

                                        @foreach($country as $countryData)
                                        <option value="{{$countryData->id}}" @if(!empty($reseller->
                                            country) && $reseller->
                                            country==$countryData->id) selected @endif>
                                            {{ $countryData->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="row row-sm">
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">State: <span class="tx-danger">*</span></label>
                                    <select class="form-control" name="state"  id="subcategory_id">
                                        @if(!empty($reseller->state))
                                        <option value="{{ $reseller->id }}">
                                            {{ DB::table('allstates')->where('id',$reseller->state)->first()->name ??'' }}
                                        </option>
                        
                                        @endif 
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">City: <span class="tx-danger">*</span></label>
                                    <input class="form-control" name="city" value="{{ $reseller->city ?? ''}}"
                                        placeholder="Enter City" type="text">
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="row row-sm">
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Address: <span class="tx-danger">*</span></label>
                                    <input class="form-control" name="address" value="{{ $reseller->address ?? ''}}"
                                        placeholder="Enter Address" type="text">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Pincode: <span class="tx-danger">*</span></label>
                                    <input class="form-control" name="pincode" value="{{ $reseller->pincode ?? ''}}"
                                        placeholder="Enter Pincode" type="text">
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="row row-sm">
                            <div class="d-flex pagination wd-100p">
                                <a href="{{url('admin/sector')}}" class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>

                                <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
                            </div>
                        </div>

                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                        <script>
                            $(function () {
                                $('#country').on('change', function () {
                                    var country_id = $(this).val();

                                    $.ajax({
                                        type: "GET",
                                        url: "{{ url('admin/listing/create') }}",
                                        data: "country_id=" + country_id,
                                        success: function (res) {

                                            $('#subcountry_id').html(res);


                                        },
                                        error: function () {

                                        },
                                    });
                                });

                            });

                        </script>
                        <script src="{{ url('backEnd/ckeditor/ckeditor.js')}}"></script>

                        <script>
                            ClassicEditor
                                .create(document.querySelector('#editor'), {
                                    // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
                                })
                                .then(editor => {
                                    window.editor = editor;
                                })
                                .catch(err => {
                                    console.error(err.stack);
                                });

                        </script>
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#editor1'), {
                                    // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
                                })
                                .then(editor => {
                                    window.editor = editor;
                                })
                                .catch(err => {
                                    console.error(err.stack);
                                });

                        </script>
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
      <script>
    $(function(){
       $('#category').on('change',function(){
           var category_id =$(this).val();
         //  debugger;
        $.ajax({
            type: "GET",
            url: "{{ url('/allstate') }}",
            data: "category_id="+category_id,
            success : function(res){
            
                $('#subcategory_id').html(res); 
            },
            error : function(){
            },
        });
       });
       
    }); 
  
     
    </script>
@endsection
