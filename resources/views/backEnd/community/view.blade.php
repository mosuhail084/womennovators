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
                                    <td>{{$view->name}}</td>
                                    <td><b> Email Id : </b></td>
                                    <td>{{$view->email}}</td>
                                    </tr>
                                    
                                <tr>
                                    <td><b> Gender : </b></td>
                                    <td>{{ $view->gender ??''}}</td>
                                    <td><b>Hear About Us :</b></td>
                                    <td>{{ $view->hear_about_us ??''}}</td>
                                </tr>

                                <tr>
                                    <td><b> Country : </b></td>
                                    <td>{{ $view->countryname ??''}}</td>
                                    <td><b>City :</b></td>
                                    <td>{{ $view->cityname ??''}}</td>
                                </tr>
                                <tr>
                                    <td><b>Area: </b></td>
                                    <td>{{ $view->area ??''}}</td>
                               
                                    <td><b>Expertise:</b></td>
                                    <td>@if($view->expertise == 'others')
                                        {{ $view->expertise_others ??''}}
                                        @else{{ $view->expertise ??''}}@endif</td>

                                </tr>
                                <tr>
                                    <td><b>Industry: </b></td>
                                    <td>{{ $view->industry ??''}}</td>
                               
                                    <td><b>Qualification : </b></td>
                                    <td>{!! $view->qualification ??'' !!}</td>
                                </tr>
                                
                                <tr>
                                    <td><b>Phone: </b></td>
                                    <td>{{ $view->phone ??''}}</td>
                                    <td><b>Sector: </b></td>
                                    <!-- <td>{{ $view->sectorname ??''}}</td> -->
                                    <td>@if($view->sector == 'others')
                                        {{ $view->sector_others ??''}}
                                        @else{{ $view->sectorname ??''}}@endif</td>
                                   </tr>
                                   <tr>
                                    <td><b>Organisation: </b></td>
                                    <td>{{ $view->organisation ??''}}</td>
                                    <td><b>Position: </b></td>
                                    <td>{{ $view->position ??''}}</td>
                                    
                                   </tr>
                                   <tr>
                                    <td><b>Designation: </b></td>
                                    <td>{{ $view->designation ??''}}</td>
                                    <td><b>Award: </b></td>
                                    <td>{{ $view->award ??''}}</td>
                                    
                                   </tr>
                                   <tr>
                                    <td><b>NGO: </b></td>
                                    <td>{{ $view->ngo ??''}}</td>
                                    <td><b>Academic Partner: </b></td>
                                    <td>{{ $view->academic_partner ??''}}</td>
                                    
                                   </tr>
                                   <tr>
                                    <td><b>Association Partner: </b></td>
                                    <td>{{ $view->association_partner ??''}}</td>
                                    <td><b>Value Partner: </b></td>
                                    <td>{{ $view->value_partner ??''}}</td>
                                    
                                   </tr>
                                   <tr>
                                    <td><b>Facebook: </b></td>
                                    <td>{{ $view->facebook ??''}}</td>
                               
                                    <td><b>Instagram : </b></td>
                                    <td>{!! $view->instagram ??''!!}</td>
                                </tr>
                                <tr>
                                    <td><b>Twitter: </b></td>
                                    <td>{{ $view->twitter ??''}}</td>
                               
                                    <td><b>Linkedin : </b></td>
                                    <td>{!! $view->linkedin ??''!!}</td>
                                </tr>
                                  
            
                            </tbody>
                        </table>
                        <table class="table display table-bordered table-striped table-hover">
                        <h5 style="float:center">REFERRALS DETAILS</h5>
                        <thead>
                            <tr>
                            <th class="wd-15p border-bottom-0">Referral Name</th>
                            <th class="wd-15p border-bottom-0">Referral Email</th>
                            
                            </tr>
                        </thead>
                          <tbody>
                               @foreach($influencerreferals as $view)
                                <tr>
                                <td>{{ $view->ref_name ??''}}</td>
                                <td>{{ $view->ref_email ??''}}</td>
                                 
                                </tr>
                                @endforeach
                          
                        </tbody>
                        <table class="table display table-bordered table-striped table-hover">
                        <h5 style="float:center">REFERED FRIENDS AND OTHER LINKS DETAILS</h5>
                        <thead>
                            <tr>
                            <th class="wd-15p border-bottom-0">Refered Friend Emails</th>
                            <th class="wd-15p border-bottom-0">Other Links</th>
                            </tr>
                        </thead>
                          <tbody>
                               @foreach($refrencefriend as $view)
                                <tr>
                                <td>{{ $view->email ??''}}</td>
                                </tr>
                                @endforeach
                                @foreach($influencermedia as $view)
                                <tr>
                                <td>{{ $view->media_link ??''}}</td> 
                                </tr>
                                @endforeach
                          
                        </tbody>
                        </table>
                       
                        <table class="table display table-bordered table-striped table-hover">
                        <h5 style="float:center"> JURY DETAILS</h5>
                        <thead>
                            <tr>
                            <th class="wd-15p border-bottom-0">Jury Name</th>
                            <th class="wd-15p border-bottom-0">Jury Designation</th>
                            <th class="wd-15p border-bottom-0">Jury Organization</th>
                            <th class="wd-15p border-bottom-0">Jury Email</th>
                            <th class="wd-15p border-bottom-0">Jury Phone</th>
                            <th class="wd-15p border-bottom-0">Jury Linkedin</th>
                            </tr>
                        </thead>
                          <tbody>
                               @foreach($influencerview as $view)
                                <tr>
                                <td>{{ $view->jury_name ??''}}</td>
                                <td>{{ $view->jury_designation ??''}}</td>
                                <td>{{ $view->jury_org ??''}}</td>
                                <td>{{ $view->jury_email ??''}}</td>
                                <td>{{ $view->jury_phone ??''}}</td>
                                <td>{{ $view->jury_linkedin ??''}}</td>  
                                </tr>
                                @endforeach
                          
                        </tbody>
                        </table>
           <div class="col-lg-6 float-left">
            <a class="btn btn-success float-left" href="{{ URL::previous() }}">Back</a>    
                 </div>  
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