@extends('influencers.layouts.layout') @section('admin_content')
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
                        <h4 class="card-title mg-b-0 mt-2">Jury List</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                        <a href="{{url('influencer/create/jury')}}"  class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Add Jury</a>
                    </div>
                </div>
                <div class="card-body">
                    @component('backEnd.components.alert')

                    @endcomponent
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">Name </th>
                                    <th class="wd-15p border-bottom-0">Designation</th>
                                    <th class="wd-20p border-bottom-0"> Jury Org</th>
                                    <th class="wd-20p border-bottom-0"> Email</th>
                                    <th class="wd-20p border-bottom-0"> Phone</th>
                                    <th class="wd-20p border-bottom-0"> Linkedin</th>
                                    <th class="wd-20p border-bottom-0"> Edit</th>
                                    <th class="wd-20p border-bottom-0"> Delete</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($influencerview as $influencerview)
                                <tr>
                                <td>{{$influencerview->jury_name}}</td>
                                <td>{{$influencerview->jury_designation}}</td>
                                <td>{{$influencerview->jury_org}}</td>
                                <td>{{$influencerview->jury_email}}</td>
                                <td>{{$influencerview->jury_phone}}</td>
                                <td>{{$influencerview->jury_linkedin}}</td>
                                <td>
                                 <a href="{{url('/influencer/juryshow/juryshow/'.$influencerview->id)}}" class="btn ripple btn-primary text-white btn-icon"><i class="fe fe-edit"></i></a>
                                  </td>
                                 <td>
                                    <a href="{{url('/influencer/juryshow/delete/'.$influencerview->id)}}" class="btn ripple btn-danger text-white btn-icon"><i class="fe fe-trash"></i></a>
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
