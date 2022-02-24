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
                        <h4 class="card-title mg-b-0 mt-2">Listing List</h4>
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
                                    <th class="wd-10p border-bottom-0">logo</th>
                                    <th class="wd-40p border-bottom-0">Details</th>
                                    <th class="wd-10p border-bottom-0">Edit</th>
                                    <th class="wd-10p border-bottom-0">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($listingDatas as $listingData)
                                <tr>
                                    <td><img alt="Responsive image" class="img-thumbnail wd-200p wd-sm-100"
                                        src="{{$listingData->logo}}"></td>
                                      
                                    <td> <span>Store Name : {{$listingData->storename}}  @if($listingData->trustedbusiness==0)
                                        <span class="badge badge-success">TRUSTED</span>
                                        @else
                                        <span class="badge badge-danger">NONTRUSTED</span>
                                        @endif</span><br>
                                        <span>Email : {{$listingData->email}}</span><br>
                                   <span>Phone : {{$listingData->phone}}</span><br>
                                        <span>Contact Person :{{$listingData->contactperson}}</span>
                                       
                                      
                                    </td>
                                    <td><a href="{{route('listing.edit', $listingData->id)}}" class="btn ripple btn-primary text-white btn-icon"><i class="fe fe-edit"></i></a></td>
                                    <td>
                                         <form action="{{ route('listing.destroy', $listingData->id) }}" method="POST">
                                       <input type="hidden" name="_method" value="DELETE">
                                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                       <button
                                           onclick="return confirm('Are you sure you want to delete this item?');"
                                           class="btn ripple btn-primary text-white btn-icon"><i
                                               class="fe fe-trash-2 btn ripple btn-secondary text-white btn-icon"></i></button>
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
<!-- /main-content -->
<!-- Basic modal -->
<div class="modal" id="modaldemo1">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Add Excel</h6><button aria-label="Close" class="close" data-dismiss="modal"
                    type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="{{ url('admin/listing/excel')}}" enctype="multipart/form-data">
              
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
                            <a href="{{ url('backEnd/kilometerstore.xlsx')}}" class="btn btn-success btn">Download<i class="fas fa-file-excel" style="margin-left: 3px;font-size: 20px;"></i></a>
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
