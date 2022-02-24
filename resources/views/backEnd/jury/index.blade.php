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
                        <h4 class="card-title mg-b-0 mt-2">Jury</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                        <a data-target="#modaldemo1" data-toggle="modal" href="#"><i class="fe fe-plus"></i><img
                            src="{{ url('backEnd/image/add-icon.png')}}" /></a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ url('/admin/jury/search')}}" method="Post" role="search">
                        @csrf
                         <div class="input-group">
                             <input type="text" class="form-control" name="q"
                                 placeholder="Search Jury"> <span class="input-group-btn">
                                 <button type="submit" class="btn btn-primary">
                                    <i class="fe fe-search"></i>
                                 </button>
                               
                             </span>
                         </div>
                     </form>
                    @component('backEnd.components.alert')

                    @endcomponent
                    @if(isset($juryDatas))
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0"> Name</th>
                                    <th class="wd-15p border-bottom-0"> Email</th>
                                    <th class="wd-20p border-bottom-0">Mobile Number</th>
                                    <th class="wd-20p border-bottom-0">sector</th>
                                    <th class="wd-20p border-bottom-0">City</th>
                                    <th class="wd-15p border-bottom-0">Edit</th>
                                    <th class="wd-10p border-bottom-0">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($juryDatas as $juryData)
                                <tr>
                                    <td>{{$juryData->name}}</td>
                                    <td>{{$juryData->email}}</td>
                                    <td>{{$juryData->mobile_number}}</td>
                                    <td>{{$juryData->sector->sectorname ??''}}</td>
                                    <td>{{$juryData->city->name ??''}}</td>
                                    <td><a href="{{route('jury.edit', $juryData->id)}}"
                                            class="btn ripple btn-primary text-white btn-icon"><i
                                                class="fe fe-edit"></i></a></td>
                                    <td>
                                        <form action="{{ route('jury.destroy', $juryData->id) }}" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button
                                                onclick="return confirm('Are you sure you want to delete this item?');"
                                                class="btn ripple btn-primary text-white btn-icon"><i
                                                    class="fe fe-trash-2 btn ripple btn-secondary text-white btn-icon"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $juryDatas->render() !!}
                    </div>
                    @elseif(isset($message))
                    <p>{{ $message }}</p>
                    
                            @endif
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
            <form method="post" action="{{ url('admin/juryexcel/store')}}" enctype="multipart/form-data">
              
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
                            <a href="{{ url('backEnd/juryexcel.xlsx')}}" class="btn btn-success btn">Download<i class="fas fa-file-excel" style="margin-left: 3px;font-size: 20px;"></i></a>
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
