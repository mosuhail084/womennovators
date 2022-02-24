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
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0 mt-2">Enquiry</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-20p border-bottom-0">Mobile</th>
                                    <th class="wd-20p border-bottom-0">Remark</th>
                                    <th class="wd-15p border-bottom-0">Category</th>
                                    <th class="wd-15p border-bottom-0">Quantity</th>
                                    <th class="wd-15p border-bottom-0">Tenure</th>
                                    <th class="wd-10p border-bottom-0">Date</th>
                                    <th class="wd-15p border-bottom-0">Status</th>
                                    <th class="wd-15p border-bottom-0">Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($callmebackDatas as $callmebackData)
                                <tr>
                                    <td>{{$callmebackData->mobile}}</td>
                                    <td>{{$callmebackData->remark}}</td>
                                    <td>{{$callmebackData->category->name ??''}}</td>
                                    <td>{{$callmebackData->quantity}}</td>
                                    <td>{{$callmebackData->tenure}}</td>
                                    <td>{{ date('F d,Y', strtotime($callmebackData->created_at)) }}</td>
                                    <td>@if($callmebackData->status==1)
                                        <span class="btn btn-info btn">Fresh</span>
                                        @elseif($callmebackData->status==2)
                                        <span class="btn btn-warning btn">Pending</span>
                                        @elseif($callmebackData->status==3)
                                        <span class="btn btn-success btn">Approve</span>
                                        @else
                                        <span class="btn btn-danger btn">Reject</span>
                                        @endif</td>
                                        <td><a href="{{url('/admin/enquiry/edit/'.$callmebackData->id)}}"
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