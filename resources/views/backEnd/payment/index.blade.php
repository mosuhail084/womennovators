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
  <!-- row opened -->
  <div class="row row-sm">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0 mt-2">Payment Details</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                   
                </div>
                </div>
            <div class="card-body">
                @component('backEnd.components.alert')

                @endcomponent
                <div class="table-responsive">
                    <table class="table text-md-nowrap" id="example1">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0"> Name</th>
                                <th class="wd-15p border-bottom-0">Email Id</th>
                                <th class="wd-15p border-bottom-0">Amount</th>
                                <th class="wd-15p border-bottom-0">Phone</th>
                                <th class="wd-15p border-bottom-0">Address</th>
                                <th class="wd-15p border-bottom-0">Payment Status</th>
                                 <th class="wd-15p border-bottom-0">Date </th>
                               <th class="wd-15p border-bottom-0">Product Purchase </th>
                               <th class="wd-15p border-bottom-0">Order Status</th>
                               <th class="wd-15p border-bottom-0">Change Status</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($paymentDatas as $paymentData)
                            <tr>
                                <td>{{$paymentData->name ??''}}</td>
                                <td>{{$paymentData->email ??''}}</td>
                                <td>{{$paymentData->amount ??''}}</td>
                                <td>{{$paymentData->phone ??''}}</td>
                                <td>{{$paymentData->address ??''}}</td>
                                <td>{!!$paymentData->payment_status ??''!!}</td>
                                 <td>{{date('d-m-Y', strtotime($paymentData->created_at ??''))}}</td>
                                <td><a href="{{url('admin/paymentproduct', $paymentData->id)}}" class="btn ripple btn-primary text-white btn-icon"><i class="fe fe-eye"></i></a></td>
                               <td>@if($paymentData->order_status==1)
                                    <span class="btn ripple btn-success text-white ">Shipped</span>
                                    @else
                                    <span class="btn ripple btn-danger text-white">Pending</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('payment.edit', $paymentData->id)}}"
                                    class="btn ripple btn-primary text-white btn-icon"><i
                                        class="fe fe-edit"></i></a></td>
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
<!-- /main-content -->@endsection