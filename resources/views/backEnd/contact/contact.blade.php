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
    {{-- <div class="row row-sm">
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
                        <h4 class="card-title mg-b-0 mt-2">Contact</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-10p border-bottom-0">id</th>
                                    <th class="wd-15p border-bottom-0">Name</th>
                                    <th class="wd-15p border-bottom-0">Email</th>
                                    <th class="wd-20p border-bottom-0">Phone</th>
                                    <th class="wd-15p border-bottom-0">Message</th>
                                    <th class="wd-10p border-bottom-0">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contactDatas as $contactData)
                                <tr>
                                    <td>{{$contactData->id}}</td>
                                    <td>{{$contactData->name}}</td>
                                    <td>{{$contactData->email}}</td>
                                    <td>{{$contactData->phone}}</td>
                                    <td>{{$contactData->mesge}}</td>
                                    <td>{{ date('F d,Y', strtotime($contactData->created_at)) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->


    </div> --}}
    <!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /main-content -->@endsection
