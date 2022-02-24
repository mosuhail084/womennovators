@extends('backEnd.layouts.layout') @section('admin_content')
<!-- container -->
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Hi, Welcome Back!</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Blog Comments</a></li>
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
                    <h4 class="card-title mg-b-0 mt-2">Blog Comments List</h4>
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
                                <th class="wd-15p border-bottom-0"> Blog Name</th>
                                <th class="wd-15p border-bottom-0"> Name</th>
                               
                                <th class="wd-15p border-bottom-0"> Email</th>
                                <th class="wd-15p border-bottom-0"> Url</th>
                                <th class="wd-15p border-bottom-0"> Comment</th>
                                <th class="wd-15p border-bottom-0"> Comment Date</th>
                                <th class="wd-10p border-bottom-0">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blogDatas as $blogData)
                            <tr>
                                <td>{{$blogData->blog_name ??''}}</td>
                                <td>{{$blogData->name ??''}}</td>
                              <td>{{$blogData->email ??''}}</td>
                                <td>
                                    {{$blogData->url ??''}}
                                </td>
                         
                                <td>{!!$blogData->comment ??''!!}</td>
                                <td>{{date('d-M-y', strtotime($blogData->created_at)) ??''}}</td>
                                <td>
                                <a  href="{{url('admin/bloglistt/delete/'.$blogData->id)}}" onclick="return confirm('Are you sure you want to delete this item?');" class="btn ripple btn-primary text-white btn-icon"><i class="fe fe-trash-2 btn ripple btn-secondary text-white btn-icon"></i></a>
                              </td>
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