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
                    <li class="breadcrumb-item active" aria-current="page">Certificate</li>
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
                        <h4 class="card-title mg-b-0 mt-2">Certificate</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    <a href="{{ url('admin/certificatemail')}}" onclick="return confirm('Are you sure you want to send mail ?');" class="btn ripple btn-info" style="margin-left:75%">Send Mail</a>
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
                                   
                                    <th class="wd-10p border-bottom-0">Type</th>
                                   
                                    <th class="wd-15p border-bottom-0">Status</th>
                                    
                                
                                    
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($certificates as $certificatesData)
                                <tr>
                                    <td>{{$certificatesData->name}}</td>
                                    <td>{{$certificatesData->email}}</td>
                                    <td>{{$certificatesData->phone}}</td>
                                   
                                    <td>{{$certificatesData->type}}</td>
                                    
                                    <td>@if($certificatesData->status==1)
                                    <span class="btn btn-success btn">Downloaded</span>
                                    @else
                                    <span class="btn btn-danger btn">Not Download</span>
                                    @endif</td>
                                    
                                    
                                   
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
<!-- Basic modal -->
<div class="modal" id="modaldemo1">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Add Excel</h6><button aria-label="Close" class="close" data-dismiss="modal"
                    type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="{{ url('admin/certificate/excel')}}" enctype="multipart/form-data">
              
                @csrf
                <div class="modal-body">
                    <div class="details-form-field form-group row">
                        <label for="name" class="col-sm-3 col-form-label font-weight-600">Upload Excel :</label>
                        <div class="col-sm-6">
                            <input id="name" class="form-control" name="file" type="file">
                        </div>

                    </div>
                    <div class="details-form-field form-group row">
                        <label for="name" class="col-sm-3 col-form-label font-weight-600">Sample Excel :</label>
                        <div class="col-sm-6">
                            <a href="{{ url('backEnd/certificate.xlsx')}}" class="btn btn-success btn">Download<i class="fas fa-file-excel" style="margin-left: 3px;font-size: 20px;"></i></a>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn ripple btn-success" type="submit">Save</button>
                        <button class="btn ripple btn-danger" data-dismiss="modal" type="button">Close</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- End Basic modal -->
@endsection
