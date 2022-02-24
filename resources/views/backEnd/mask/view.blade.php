@extends('backEnd.layouts.layout') @section('admin_content')
<!-- container -->
<div class="container-fluid" >
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
  <!-- row opened -->
  <div class="row row-sm" id="printableArea">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0 mt-2"> Details</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                    <a href="#" onclick="printDiv('printableArea')" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Print</a>
                </div>
                </div>
                <div class="card-body">
                    {{-- <div class="card-header">
<div class="media">
<div class="media-user mr-2">
<div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="{{ url('backEnd/img/faces/6.jpg')}}">
                </div>
            </div>
            <div class="media-body">
                <h6 class="mb-0 mg-t-9">Petey Cruiser Pechon</h6><span class="text-primary">just
                    now</span>
            </div>
            <div class="ml-auto">
                <div class="dropdown show">
                    <a class="new" data-toggle="dropdown" href="JavaScript:void(0);"><i
                            class="fas fa-ellipsis-v"></i></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Edit Post</a> <a class="dropdown-item"
                            href="#">Delete Post</a> <a class="dropdown-item" href="#">Personal
                            Settings</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <fieldset class="form-group">

        <table class="table display table-bordered table-striped table-hover">

            <tbody>

                
                <tr>
                    <td><b>Name : </b></td>
                    <td>{{$data->name}}</td>
                    <td><b>Email :</b></td>
                    <td>{{$data->email ??''}}</td>
                     
                </tr>
                <tr>
                    <td><b>Phone : </b></td>
                     <td>{{$data->phone ??''}}</td>
                    <td><b>Address : </b></td>
                    <td>{{$data->address ??''}}</td>
                   
                </tr>
                <tr>
                    <td><b>Amount :</b></td>
                    <td>Rs {{$data->amount ??''}}</td>
                     <td><b>Payment ID : </b></td>
                     <td>{{$data->payment_id ??''}}</td>
                </tr>
                <tr>
                    <td><b>Order Date : </b></td>
                    <td>{{date('d-m-Y', strtotime($data->created_at ??''))}}</td>
                    
                </tr>

            </tbody>
        </table>
    </fieldset>

</div>
            <div class="card-body">
                @component('backEnd.components.alert')

                @endcomponent
                <h4 class="card-title mg-b-0 mt-2">Product Details</h4>
                <br>
                <div class="table-responsive">
                    <table class="table text-md-nowrap" id="example1">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0"> Product Name</th>
                                <th class="wd-15p border-bottom-0">Amount</th>
                                <th class="wd-15p border-bottom-0">Quantity</th>
                              
                                <th class="wd-15p border-bottom-0">Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($view as $views)
                            <tr>
                                <td>{{$views->product_name ??''}}</td>
                                <td>{{$views->amount ??''}}</td>
                                <td>{{$views->quantity ??''}}</td>
                                <td><img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-70"
                                    src="{{$views->product_image ??''}}" style="max-width:60px;"></td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--/div-->

   
</div>
<!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /main-content -->
<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }

</script>
@endsection