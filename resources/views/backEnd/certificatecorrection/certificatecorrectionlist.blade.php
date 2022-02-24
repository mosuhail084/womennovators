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
                        <h4 class="card-title mg-b-0 mt-2">Certificate</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    <!--<a href="{{ url('admin/certificatemail')}}" onclick="return confirm('Are you sure you want to send mail ?');" class="btn ripple btn-info" style="margin-left:75%">Send Mail</a>-->
                        <a data-target="#modaldemo1" data-toggle="modal" href="#"><i class="fe fe-plus"></i><img
                                src="{{ url('backEnd/image/add-icon.png')}}" /></a>
                    </div>
                </div>
                <div class="card-body">
                    @component('backEnd.components.alert')

                    @endcomponent
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example">
                            <thead>
								
                                <tr>
                                   <th class="wd-10p border-bottom-0">Name</th>
									<th class="wd-10p border-bottom-0">Email</th>
									<th class="wd-10p border-bottom-0">Phone</th>
                                    <th class="wd-10p border-bottom-0">Issue</th>
                                    <th class="wd-10p border-bottom-0">Data to be correted</th>                                    
                                    <th class="wd-10p border-bottom-0">Created date</th>
                                    <th class="wd-10p border-bottom-0">Action</th>
                                
                                    
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($Certificatecorrection as $CertificatecorrectionData)
                                <tr>
									
                                   <td>{{$CertificatecorrectionData->certname}}</td>
									<td>{{$CertificatecorrectionData->email}}</td>
									<td>{{$CertificatecorrectionData->phone}}</td>
                                    <td>{{$CertificatecorrectionData->issue}}</td>
									@if($CertificatecorrectionData->issue=="Or any other ? Specify")
                                   
                                    <td>{{$CertificatecorrectionData->other}}</td> 
                                    <td>{{date('d-M-y', strtotime($CertificatecorrectionData->created_at)) ??''}}</td>
									@elseif($CertificatecorrectionData->issue=="Name correction")
                                   
                                    <td>{{$CertificatecorrectionData->name}}</td> 
                                    <td>{{date('d-M-y', strtotime($CertificatecorrectionData->created_at)) ??''}}</td>
									@elseif($CertificatecorrectionData->issue=="Category wrong")
                                   
                                    <td>{{$CertificatecorrectionData->category}}</td> 
                                    <td>{{date('d-M-y', strtotime($CertificatecorrectionData->created_at)) ??''}}</td>
									
									@endif
                                    <td>
                                 <a href="" class="btn ripple btn-primary text-white btn-icon"><i class="fe fe-eye"></i></a>
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
