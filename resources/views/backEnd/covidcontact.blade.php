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
                        <h4 class="card-title mg-b-0 mt-2">Covid Enquiry List</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                        <a data-target="#modaldemo1" data-toggle="modal" href="#"><i class="fe fe-plus"></i><img
                                src="{{ url('backEnd/image/add-icon.png')}}" /></a>
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
                                    <th class="wd-10p border-bottom-0">E-Mail</th>
                                    <th class="wd-10p border-bottom-0">Phone</th>
                                    <th class="wd-10p border-bottom-0">Subject</th>
                                    <th class="wd-10p border-bottom-0">Message</th>
                                    <th class="wd-10p border-bottom-0">Created date</th>
                                    
                                
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contact as $contactData)
                                <tr>
                                    <td>{{$contactData->name}}</td>
                                    <td>{{$contactData->email}}</td>
                                    <td>{{$contactData->phone}}</td>
                                    <td>{{$contactData->subject}}</td>
                                    <td>{!! $contactData->message !!}</td>
                                    <td>{{date('d-M-y', strtotime($contactData->created_at)) ??''}}</td>
                                   
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