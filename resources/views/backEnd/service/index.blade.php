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
                        <h4 class="card-title mg-b-0 mt-2">Service List</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                        {{-- <a data-target="#modaldemo1" data-toggle="modal" href="#"><i class="fe fe-plus"></i><img
                                src="{{ url('backEnd/image/add-icon.png')}}" /></a> --}}
                    </div>
                </div>
                <div class="card-body">
                    @component('backEnd.components.alert')

                    @endcomponent
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-10p border-bottom-0">Title</th>
                                    <th class="wd-40p border-bottom-0">Service Name</th>
                                    <th class="wd-10p border-bottom-0">Quantity</th>
                                    <th class="wd-40p border-bottom-0">Price</th>
                                    <th class="wd-10p border-bottom-0">Discount</th>
                                    <th class="wd-40p border-bottom-0">Tag</th>
                                    <th class="wd-10p border-bottom-0">Status</th>
                                    <th class="wd-40p border-bottom-0">Banner Image</th>
                                    <th class="wd-10p border-bottom-0">Service Image</th>
                                    <!-- <th class="wd-40p border-bottom-0">Short Description</th>
                                    <th class="wd-10p border-bottom-0">Full Description</th> -->
                                    <th class="wd-10p border-bottom-0">Edit</th> 
                                    <th class="wd-10p border-bottom-0">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $service)
                                <tr>
                                    <td>{{$service->title}}</td>
                                    <td>{{$service->service_name}}</td>
                                    <td>{{$service->quantity}}</td>
                                    <td>{{$service->price}}</td>
                                    <td>{{$service->discount}}</td>
                                    <td>{{$service->tag}}</td>
                                    <td>{{$service->status}}</td>
                                    <td><img alt="Responsive image" class="img-thumbnail wd-200p wd-sm-400"
                                        src="{{ asset('backEnd/banner/image/'.DB::table('services')->select('banner_image')->where('id',$service->id)->first()->banner_image ?? '')}}"></td>
                                        <td><img alt="Responsive image" class="img-thumbnail wd-200p wd-sm-400"
                                        src="{{ asset('backEnd/service/image/'.DB::table('services')->select('service_image')->where('id',$service->id)->first()->service_image ?? '')}}"></td>

                                    <!-- <td>{{$service->short_description}}</td>
                                    <td>{{$service->full_description}}</td> -->
                                    <td><a href="{{route('service.edit', $service->id)}}" class="btn ripple btn-primary text-white btn-icon"><i class="fe fe-edit"></i></a></td>
                                    <td><form action="{{ route('service.destroy', $service->id) }}" method="POST">
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
<!-- /main-content -->
@endsection
