@extends('backEnd.layouts.layout') @section('admin_content')
<!-- container -->
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Hi, Welcome Back!</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"></a></li>
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
                        <h4 class="card-title mg-b-0 mt-2">Industry Star Award</h4>
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
                                    <th>  Name of the Company </th>
                                    <th > Inception of the Company </th>
                                    <th > Cities of Presence </th>
                                    <th >  Name of the Founder / CEO / MD/ Chairman </th>
                                    <th > Designation  </th>
                                    <th > City </th>
                                    <th > Email</th>
                                    <th > URL of the company  </th>
                                    <th > Specialization</th>
                                    <th > Revenue of the company  </th>
                                    <th > Business model and its details</th>
                                    <th > Business explanation related to financial details of FY20</th>
                                    <th > What is your core strength</th>
                                    <th > organization</th>
                                    <th > Delete</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($wepitch as $awardData)
                                <tr>
                                <td>{{$awardData['name']}}</td>
                                <td>{{$awardData['Inception']}}</td>
                                <td>{{$awardData['Cities']}}</td>
                                <td>{{$awardData['Name_of_the_Founder']}}</td>
                                <td>{{$awardData['Designation']}}</td>
                                <td>{{$awardData['City']}}</td>
                                <td>{{$awardData['Email']}}</td>
                                <td>{{$awardData['URL']}}</td>
                                <td>{{$awardData['Specialization']}}</td>
                                <td>{{$awardData['Revenue']}}</td>
                                <td>{{$awardData['Business_details']}}</td>
                                <td>{{$awardData['Business_explanation']}}</td>
                                <td>{{$awardData['core_strength']}}</td>
                                <td>{{$awardData['organization']}}</td>
                                 <td>
                                    <a href="{{url('/admin/awardquestionnaire/delete/'.$awardData->id)}}" class="btn ripple btn-danger text-white btn-icon"><i class="fe fe-trash"></i></a>
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
