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
                    <h4 class="card-title mg-b-0 mt-2"> Details</h4>
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
                                <th class="wd-15p border-bottom-0">Name</th>
                                <th class="wd-15p border-bottom-0">Email Id</th>
                                <th class="wd-15p border-bottom-0">Image</th>
                                <th class="wd-15p border-bottom-0">Message</th>
                                <th class="wd-15p border-bottom-0">Tags</th>
                                <th class="wd-15p border-bottom-0">status</th>
                               
                                <th class="wd-15p border-bottom-0">Approve </th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($maskDatas as $maskData)
                            <tr>
                                <td>{{$maskData->name ??''}}</td>
                                <td>{{$maskData->email ??''}}</td>
                                <td><img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-70"
                                    src="https://covidcaregiver.org/backEnd/image/maskindia/{{$maskData->image ??''}}" style="max-width:60px;"></td>
                                <td>{{$maskData->msg ??''}}</td>
                                <td>{{$maskData->tags ??''}}</td>
                                <td>@if($maskData->status==1)
                                    <span class="btn ripple btn-success text-white btn-icon"><i
                                    class="fa fa-check"></i></span>
                                    @else
                                    <span class="btn ripple btn-danger text-white btn-icon""><i
                                    class="fa fa-times"></i></span>
                                    @endif</td>
                                <td><a href="{{route('mask.edit', $maskData->id)}}" class="btn ripple btn-primary text-white btn-icon"><i class="fe fe-edit"></i></a></td>
                               
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