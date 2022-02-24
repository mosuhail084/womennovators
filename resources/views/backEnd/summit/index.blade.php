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
                    <h4 class="card-title mg-b-0 mt-2">Womennovator Summit 2021</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                    <a data-target="#modaldemo3" data-toggle="modal" href="#" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Send Mail</a>
                </div>
                </div>
            <div class="card-body">
                @component('backEnd.components.alert')

                @endcomponent
                <div class="table-responsive">
                    <table class="table text-md-nowrap" id="example">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0"> Name</th>
                                <th class="wd-15p border-bottom-0">Email Id</th>
                              
                                <th class="wd-15p border-bottom-0">Phone</th>
                                <th class="wd-15p border-bottom-0">Gender</th>
                                <th class="wd-15p border-bottom-0">CompanyName</th>
                                 <th class="wd-15p border-bottom-0">Country </th>
                               <th class="wd-15p border-bottom-0">State </th>
                               <th class="wd-15p border-bottom-0">City</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($summitDatas as $summitDatas)
                            <tr>
                                <td>{{$summitDatas->name ??''}}</td>
                                <td>{{$summitDatas->email ??''}}</td>
                                <td>{{$summitDatas->phone ??''}}</td>
                                <td>{{$summitDatas->gender ??''}}</td>
                                <td>{{$summitDatas->company_name ??''}}</td>
                                <td>{!!$summitDatas->country ??''!!}</td>
                                <td>{!!$summitDatas->state ??''!!}</td>
                                <td>{!!$summitDatas->city ??''!!}</td>
                               <!--<td><a href="{{url('admin/paymentproduct', $summitDatas->id)}}" class="btn ripple btn-primary text-white btn-icon"><i class="fe fe-eye"></i></a></td>-->
                              
                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--/div-->
  <div class="modal show" id="modaldemo3" >
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content modal-content-demo">
                    <div class="modal-header" style="background:linear-gradient(45deg, #f54266, #3858f9)">
                        <h6 style="color:white" class="modal-title">Send Mail</h6><button aria-label="Close" class="close" data-dismiss="modal"
                            type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                <form method="post" action="{{ url('admin/summitmailstore')}}" enctype="multipart/form-data">
                  
                    @csrf
                    <div class="modal-body">
                        <div class="details-form-field form-group row">
                            <label for="name" class="col-sm-3 col-form-label font-weight-600">Subject :</label>
                    <div class="col-sm-6">
                        <input class="form-control" name="subject" type="text">
                     
                    </div>

                        </div>
                        <div class="details-form-field form-group row">
                            <label for="name" class="col-sm-3 col-form-label font-weight-600">Message :</label>
                            <div class="col-sm-9">
                                <textarea class="form-control summernote" name="msg" rows="6" placeholder=""></textarea>
                            </div>
    
                        </div>
                        <div class="modal-footer">
                            <button class="btn ripple btn-danger" data-dismiss="modal" type="button">Close</button>
                            <button class="btn ripple btn-success" type="submit">Save</button>
                         
                        </div>
                    </div>
    
                </form>
            </div>
        </div>
    </div>
   
</div>
<!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /main-content -->@endsection