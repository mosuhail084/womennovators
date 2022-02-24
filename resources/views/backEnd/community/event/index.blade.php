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
                    <h4 class="card-title mg-b-0 mt-2">Influencer Events</h4>
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
                                <th class="wd-15p border-bottom-0"> Event Name</th>
                                <th class="wd-15p border-bottom-0"> About Event</th>
                                <th class="wd-15p border-bottom-0">Event Type</th>
                                <th class="wd-15p border-bottom-0">Country</th>
                                <th class="wd-15p border-bottom-0">State</th>
                                <th class="wd-15p border-bottom-0">Pin Code</th>
                                <th class="wd-15p border-bottom-0">Location</th>
                                <th class="wd-15p border-bottom-0">Banner Image</th>
                                <th class="wd-15p border-bottom-0">Image</th>
                                <th class="wd-15p border-bottom-0">Event Category</th>
                                <!-- <th class="wd-15p border-bottom-0">View</th> -->
                                <th class="wd-15p border-bottom-0">Edit</th>
                                <th class="wd-15p border-bottom-0">Delete</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            @foreach($data as $data)
                            <td>{{$data->event_name}}</td>
                            <td>{!! $data->about_event !!}</td>
                            <td>{{$data->event_type}}</td>
                            <td>{{$data->country_name}}</td>
                            <td>{{$data->state_name}}</td>
                            <td>{{$data->pin_code}}</td>
                            <td>{{$data->location}}</td>
                            <td><img src="{{url('backEnd/banner-image/influencerevent/'.$data->banner_image)}}"></td>
                            
                            <td><img src="{{url('backEnd/influncer-image/influencerevent/'.$data->image)}}"></td>
                            <!-- <td><a href="{{url('admin/influencer/event/'.$data->id)}}" 
                                            class="btn ripple btn-primary text-white btn-icon"><i
                                                class="fe fe-eye"></i></a></td> -->
                                                  <td>{{$data->event_category}}</td>
                                                  <td> <a href="{{url('admin/influencerevent/edit/'.$data->id)}}"
                                                class="btn ripple btn-primary text-white btn-icon"><i
                                                    class="fe fe-edit"></i></a></td>
                            <td><a href="{{url('admin/influencerevent/delete/'.$data->id)}}"
                                                class="btn ripple btn-primary text-white btn-icon"><i
                                                    class="fe fe-trash-2 btn ripple btn-secondary text-white btn-icon"></i></a></td>
                              
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
@endsection