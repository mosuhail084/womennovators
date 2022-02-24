@extends('backEnd.layouts.layout') @section('admin_content')
<!-- container -->
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Hi, Welcome Back!</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">1000 WomenAward Video</a></li>
                   
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
                        <h4 class="card-title mg-b-0 mt-2">1000 Women Award Winners</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                </div>
                <div class="card-body">
                    @component('backEnd.components.alert')

                    @endcomponent
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example" style="width:500px;">
                            <thead>
                                <tr>
                                    <th> First Name </th>
                                    <th > View</th>
                                 
                                    
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($wepitch as $awardeeData)
                                <tr>
                                <td>{{$awardeeData['name']}}</td>
                                
                                  <td>
                                    <a href="{{url('/admin/awardee/view/'.$awardeeData->id)}}" class="btn ripple btn-secondary text-white btn-icon"><i class="fe fe-eye"></i></a>
                                </td>
                                  <!--  <td>
                                 <a href="{{url('/admin/awardee/delete/'.$awardeeData->id)}}" class="btn ripple btn-danger text-white btn-icon"><i class="fe fe-trash"></i></a> 
                                </td>-->
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
