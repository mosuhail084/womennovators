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
                    <h4 class="card-title mg-b-0 mt-2">Success Stories List</h4>
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
                                <th class="wd-15p border-bottom-0"> Name of Incubatee</th>
                                <!-- <th class="wd-15p border-bottom-0"> Designation</th> -->
                                <th class="wd-15p border-bottom-0">Image</th>
                                <th class="wd-15p border-bottom-0">Designation</th>
                                <th class="wd-15p border-bottom-0">company</th> 
                                <th class="wd-15p border-bottom-0">Industry</th>      
                                <th class="wd-15p border-bottom-0">Testimonial</th>                              
                                <th class="wd-15p border-bottom-0">Edit</th>
                                <th class="wd-10p border-bottom-0">Delete</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($stories as $stories)
                            <tr>
                                <td>{{$stories->name}}</td>
                                <td>
                                    <img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-70"
                                    src="{{asset('backEnd/image/success_stories/'.$stories->image)}}">
                                </td>
                                 <td>{{$stories->designation}}</td>
                                <td>
                                    {{$stories->company}}
                                </td>
                                <td>
                                    {{$stories->industry}}
                                </td>
                                <td>
                                    {{$stories->testimonial}}
                                </td>
                                <td><a href="{{route('stories.edit', $stories->id)}}" class="btn ripple btn-primary text-white btn-icon"><i class="fe fe-edit"></i></a></td>
                                <td><form action="{{ route('stories.destroy', $stories->id) }}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button  onclick="return confirm('Are you sure you want to delete this item?');" class="btn ripple btn-primary text-white btn-icon"><i class="fe fe-trash-2 btn ripple btn-secondary text-white btn-icon"></i></button>
                                </form>
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







<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>




