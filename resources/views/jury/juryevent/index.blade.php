@extends('jury.layouts.layout') @section('admin_content')
<!-- container -->
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Hi, Welcome Back!</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Support</a></li>
                    <li style="display:none;" class="breadcrumb-item active" aria-current="page"></li>
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
                        <h4 class="card-title mg-b-0 mt-2">Event</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                </div>
                <div class="card-body">
                    @component('backEnd.components.alert')

                    @endcomponent
                    <div class="table-responsive mb-0">
                        <table class="table table-hover table-bordered mb-0 text-md-nowrap text-lg-nowrap text-xl-nowrap table-striped ">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0"> Name</th>
                                    <th class="wd-15p border-bottom-0"> Start Date</th>
                                    <th class="wd-20p border-bottom-0">End Date</th>
                                    <th class="wd-20p border-bottom-0">Status</th>
                                    <th class="wd-20p border-bottom-0">View</th>
                                    {{-- <th class="wd-15p border-bottom-0">Edit</th>
                                    <th class="wd-10p border-bottom-0">Delete</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach($eventDatas as $eventData)
                      
                                <tr>
                                    <td>{{$eventData->event_name}}</td>
                                    <td>{{ date('F d,Y', strtotime($eventData->start_date)) }}</td>
                                    <td>{{ date('F d,Y', strtotime($eventData->end_date)) }}</td>
                                    <td>@if($eventData->end_date >=  date('Y-m-d'))
                                        <span class="badge badge-success-gradient">Ongoing</span>
                                        @else
                                        <span class="badge badge-danger-gradient">Closed</span>
                                        @endif
                                    </td>
                                    <td><a href="{{url('/jury/eventuserlist/'.$eventData->id)}}"
                                        class="btn ripple btn-primary text-white btn-icon"><i
                                            class="fe fe-eye"></i></a></td>
                                    {{-- <td><a href="{{route('jury.edit', $eventData->id)}}"
                                            class="btn ripple btn-primary text-white btn-icon"><i
                                                class="fe fe-edit"></i></a></td>
                                    <td>
                                        <form action="{{ route('jury.destroy', $eventData->id) }}" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button
                                                onclick="return confirm('Are you sure you want to delete this item?');"
                                                class="btn ripple btn-primary text-white btn-icon"><i
                                                    class="fe fe-trash-2 btn ripple btn-secondary text-white btn-icon"></i></button>
                                        </form>
                                    </td> --}}
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
