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
                    <li style="display:none;" class="breadcrumb-item active" aria-current="page">Project</li>
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
                        <h4 class="card-title mg-b-0 mt-2">Events</h4>
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
                                    <th class="wd-15p border-bottom-0"> Event </th>
                                    <th class="wd-15p border-bottom-0"> Start Date</th>
                                    <th class="wd-20p border-bottom-0"> End Date</th>
                                    <th class="wd-20p border-bottom-0"> Status</th>
                                    <th class="wd-20p border-bottom-0"> Type</th>
                                    <th class="wd-20p border-bottom-0"> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($eventDatas=DB::table('markingevents')
                                ->rightjoin('events','events.id','markingevents.event_id')
                                ->select('events.*')->distinct()->get()  as $eventData)
                                <tr>
                                    <td>
                                     {{$eventData->event_name}}   
                                       
                                    <td> 
                                        {{date('d-m-Y', strtotime($eventData->start_date))}}
                                      
                                    </td>
                                   
                                    <td> {{date('d-m-Y', strtotime($eventData->end_date))}}
                                    </td>
                                    <td>@if($eventData->end_date >=  date('Y-m-d'))
                                        <span class="badge badge-success-gradient">Ongoing</span>
                                        @else
                                        <span class="badge badge-danger-gradient">Closed</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($eventData->type==0)
                                        <span class="badge badge-primary-gradient">Marking</span>
                                        @else
                                        <span class="badge badge-primary-gradient">Comment</span>
                                        @endif
                                       
                                       
                                    </td>

                                <td>
                                    @if($eventData->type==0)
                                    <a href="{{url('/admin/resultdetails/'.$eventData->id)}}" class="btn ripple btn-primary text-white btn-icon"><i class="fe fe-eye"></i></a>
                                    @else
                                    <a href="{{url('/admin/commentdetails/'.$eventData->id)}}" class="btn ripple btn-primary text-white btn-icon"><i class="fe fe-eye"></i></a>
                                    @endif
                                   
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
