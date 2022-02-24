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
            <div class="main-content-body main-content-body-profile">
                <!-- <nav class="nav main-nav-line card">
<a class="nav-link active tablinks" data-toggle="tab" onclick="openCity(event, 'General Information')"id="defaultOpen" >Event OverView</a> 
<a class="nav-link tablinks" data-toggle="tab" onclick="openCity(event, 'Delivery & Installation')">Jury</a> 
<a class="nav-link tablinks" data-toggle="tab" onclick="openCity(event, 'Service & Maintenance')">User</a> 


</nav>-->
                @component('backEnd.components.alert')

                @endcomponent
                <!-- main-profile-body -->
                <div class="main-profile-body p-0">
                    <div class="row row-sm">
                        <div class="col-12">
                            <div class="card mg-b-20 tabcontent" id="General Information">
                                <div class="card-body">
                                    {{-- <div class="card-header">
<div class="media">
<div class="media-user mr-2">
<div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="{{ url('backEnd/img/faces/6.jpg')}}">
                                </div>
                            </div>
                            <div class="media-body">
                                <h6 class="mb-0 mg-t-9">Petey Cruiser Pechon</h6><span class="text-primary">just
                                    now</span>
                            </div>
                            <div class="ml-auto">
                                <div class="dropdown show">
                                    <a class="new" data-toggle="dropdown" href="JavaScript:void(0);"><i
                                            class="fas fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Edit Post</a> <a class="dropdown-item"
                                            href="#">Delete Post</a> <a class="dropdown-item" href="#">Personal
                                            Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}


                    <fieldset class="form-group">

                        <table class="table display table-bordered table-striped table-hover">

                            <tbody>
                          
                                <tr>
                                    <td><b> Name : </b></td>
                                    <td>{{$live->name}}</td>
                                    <td><b>Email :</b></td>
                                    <td>{{ $live->email}}</td>
                                </tr> 
                                <tr>
                                    <td><b>Phone: </b></td>
                                    <td>{{ $live->phone}}</td>
                                    <td><b>State: </b></td>
                                    <td>{{ $live->state}}</td>
                               
                                

                                </tr>
                                <tr>
                                  
                                <td><b>Comment: </b></td>
                                    <td>{{ $live->comment}}</td>
                                    <td><b>City : </b></td>
                                    <td>{!! $live->city !!}</td>


                                </tr>
                                <tr>

                                    <td><b>Address: </b></td>
                                    <td>{!! $live->address !!}</td>

                                    <td><b>Company : </b></td>
                                    <td>{!! $live->company !!}</td>


                                </tr>
                                <tr>

                                    <td><b>Designation: </b></td>
                                    <td>{!! $live->designation !!}</td>

                                    <td><b>Gender : </b></td>
                                    <td>{!! $live->gender !!}</td>


                                </tr>
                                <tr>

                                    <td><b>Are: </b></td>
                                    <td>{!! $live->are !!}</td>

                                    <td><b>Reffer : </b></td>
                                    <td>{!! $live->referred !!}</td>


                                </tr>
                                <tr>

                                    <td><b>Sector: </b></td>
                                    <td>{!! $live->sectors !!}</td>

                                    <td><b>Session: </b></td>
                                    <td>       @if($live->session_id == 1 )
    <span>Creating Distribution Channel</span>
    @elseif($live->session_id == 2 )
    <span>Idea to Prototype to Final Product</span>
    @elseif($live->session_id == 3 )
    <span>Go to Market Strategy</span>
    @elseif($live->session_id == 4 )
    <span>Availment of Government Schemes</span>
    @elseif($live->session_id == 5 )
    <span>Funding</span>
    @elseif($live->session_id == 6 )
    <span>Social Media and branding</span>
    @elseif($live->session_id == 7 )
    <span>Finance, Accounts and compliance</span>
    @elseif($live->session_id == 8 )
    <span>Others... Type Your live</span>
    @endif 
</td>
                             

                                </tr>
                              
                               

                        

                            </tbody>
                        </table>
                    </fieldset>

                </div>
            </div>


        </div>
    </div>
</div><!-- main-profile-body -->
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
