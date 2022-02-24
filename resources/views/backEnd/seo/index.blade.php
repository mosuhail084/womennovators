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
  <!-- row opened -->
  <div class="row row-sm">
    <div class="col-xl-12">
        <div class="card">
       
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0 mt-2">Seo List</h4>
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
                                <th class="wd-15p border-bottom-0">Page Name</th>
                                <th class="wd-15p border-bottom-0">Author</th>
                                <th class="wd-20p border-bottom-0">Title</th>
                                <th class="wd-20p border-bottom-0">Keywords</th>
                                <th class="wd-20p border-bottom-0">Description</th>
                                <th class="wd-20p border-bottom-0">Status</th>
                                <th class="wd-15p border-bottom-0">Edit</th>
                                <th class="wd-10p border-bottom-0">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($seoDatas as $seoData)
                            <tr>
                                <td>{{$seoData->page_name}}</td>
                                <td>{{$seoData->author}}</td>
                                <td>{{$seoData->meta_title}}</td>
                                <td>{{$seoData->meta_keywords}}</td>
                                <td>{{$seoData->meta_description}}</td>
                                <td>@if($seoData->status==1)
                                    <span class="btn btn-success btn">Active</span>
                                    @else
                                    <span class="btn btn-danger btn">Inactive</span>
                                    @endif</td>
                                <td><a  href="{{route('seo.edit', $seoData->id)}}"  class="btn ripple btn-primary text-white btn-icon"><i class="fe fe-edit"></i></a></td>
                                <td><form action="{{ route('seo.destroy', $seoData->id) }}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button  onclick="return confirm('Are you sure you want to delete this item?');" class="btn ripple btn-primary text-white btn-icon"><i class="fe fe-trash-2 btn ripple btn-secondary text-white btn-icon"></i></button>
                                </form></td>
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