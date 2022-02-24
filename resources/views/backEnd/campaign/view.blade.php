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
                                    <td><b>Campaign Name : </b></td>
                                    <td>{{ $view->campaign_name}}</td>
                                    <td><b>Image :</b></td>
                                    <td><img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-70"
                                     src="{!! $view->image !!}" style="max-width:60px;"></td>
                                </tr>
                                <tr>
                                    <td><b>Name : </b></td>
                                    <td>{{ $view->name}}</td>
                                    <td><b>Email :</b></td>
                                    <td>{{ $view->email}}</td>
                                </tr>
                                <tr>
                                    <td><b>Phone: </b></td>
                                    <td>{{ $view->phone}}</td>
                               
                                    <td><b>Country:</b></td>
                                    <td>{{ $view->country }}</td>

                                </tr>
                                <tr>
                                    <td><b>City:</b></td>
                                    <td>{{ $view->city }}</td>
                               
                                    <td><b>state: </b></td>
                                    <td>{{ $view->state }}</td>

                                </tr>
                                <tr>
                                    <td><b>Address : </b></td>
                                    <td>{!! $view->address !!}</td>

                                    <td><b>What Help You Need : </b></td>
                                    <td>{{ $view->whathelpyouneed }}</td>

                                </tr>
                                <tr>

                                    <td><b>Bank Name : </b></td>
                                    <td>{!! $view->bankname !!}</td>

                                    <td><b>Account Holder Name : </b></td>
                                    <td>{!! $view->accountholder !!}</td>


                                </tr>
                                <tr>

                                    <td><b>Account Number : </b></td>
                                    <td>{!! $view->accountno !!}</td>

                                    <td><b>Bank Address : </b></td>
                                    <td>{!! $view->bankaddress !!}</td>


                                </tr>
                                <tr>

                                    <td><b>Video : </b></td>
                                   
                                   <td> <video width="328" height="160" controls="" autoplay="">
                        <source src="{{ url('http://covidcaregiver.org/backEnd/image/campaignform')}}/{!! $view->video !!}" type="video/mp4">
                        Your browser does not support the video tag.
                      </video>  </td>

                                    <td><b>Description : </b></td>
                                    <td>{!! $view->description !!}</td>


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