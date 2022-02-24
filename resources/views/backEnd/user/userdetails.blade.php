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
                                    <td>{{ $userDatas->name}}</td>
                                    <td><b>Email :</b></td>
                                    <td>{{ $userDatas->email}}</td>
                                </tr>
                                <tr>
                                    <td><b>Phone: </b></td>
                                    <td>{{ $userDatas->phone}}</td>
                               
                                    <td><b>Youtube Link:</b></td>
                                    <td>{{ $userDatas->youtubelink }}</td>

                                </tr>
                                <tr>
                                    <td><b>User Category: </b></td>
                                    <td>{{ $userDatas->categoryname }}</td>
                               
                                    <td><b>Country : </b></td>
                                    <td>{!! $userDatas->country !!}</td>


                                </tr>
                                <tr>

                                    <td><b>Country : </b></td>
                                    <td>{!! $userDatas->address !!}</td>

                                    <td><b>Profession : </b></td>
                                    <td>{!! $userDatas->profession !!}</td>


                                </tr>
                                <tr>

                                    <td><b>Company Name : </b></td>
                                    <td>{!! $userDatas->companyname !!}</td>

                                    <td><b>Designation : </b></td>
                                    <td>{!! $userDatas->designation !!}</td>


                                </tr>
                                <tr>

                                    <td><b>Industry Type : </b></td>
                                    <td>{!! $userDatas->industrytype !!}</td>

                                    <td><b>Highest Qualification : </b></td>
                                    <td>{!! $userDatas->highestqualification !!}</td>


                                </tr>
                                <tr>

                                    <td><b>Facebook : </b></td>
                                    <td>{!! $userDatas->facebook !!}</td>

                                    <td><b>Instagram : </b></td>
                                    <td>{!! $userDatas->instagram !!}</td>


                                </tr>
                                <tr>

                                    <td><b>Country : </b></td>
                                    <td>{!! $userDatas->country !!}</td>

                                    <td><b>Twitter : </b></td>
                                    <td>{!! $userDatas->twitter !!}</td>


                                </tr>
                                <tr>

                                    <td><b>Linkedin : </b></td>
                                    <td>{!! $userDatas->linkedin !!}</td>
                                    <td><b>Website : </b></td>
                                    <td>{!! $userDatas->website !!}</td>


                                </tr>
                                <tr>

                                    <td><b>Reference : </b></td>
                                    <td>{!! $userDatas->reference !!}</td>
                                   <td><b>Influencer Name : </b></td>
                                    <td>{!! $userDatas->influencername !!}</td>


                                </tr>
                                <tr>

                                    <td><b>Experience : </b></td>
                                    <td>{!! $userDatas->experience !!}</td>
                                    <td><b>Position : </b></td>
                                    <td>{!! $userDatas->position !!}</td>


                                </tr>
                                <tr>

                                    <td><b>Innovative Business : </b></td>
                                    <td>{!! $userDatas->innovativebusiness !!}</td>
                            <td><b>Business Category: </b></td>
                                    <td>{!! $userDatas->businesscategory !!}</td>


                                </tr>
                                <tr>

                                    <td><b>picture : </b></td>
                                    <td>{!! $userDatas->picture !!}</td>
                                <td><b>Innovative Business : </b></td>
                                    <td>{!! $userDatas->innovativebusiness !!}</td>


                                </tr>
                                <tr>

                                    <td><b>Business Type : </b></td>
                                    <td>{!! $userDatas->businesstype !!}</td>
                                   <td><b>Business Stage : </b></td>
                                    <td>{!! $userDatas->businessstage !!}</td>


                                </tr>
                                <tr>

                                    <td><b>Employees : </b></td>
                                    <td>{!! $userDatas->employees !!}</td>
                                     <td><b>Business idea : </b></td>
                                    <td>{!! $userDatas->businessidea !!}</td>


                                </tr>
                                <tr>

                                    <td><b>Funding Details : </b></td>
                                    <td>{!! $userDatas->fundingdetails !!}</td>
                                   <td><b>Funding Details : </b></td>
                                    <td>{!! $userDatas->fundingdetails !!}</td>


                                </tr>
                                <tr>

                                    <td><b>Category: </b></td>
                                    <td>{!! $userDatas->category !!}</td>
                        
                                    <td><b>Smart city : </b></td>
                                    <td>{!! $userDatas->smartcity !!}</td>


                                </tr>
                                <tr>

                                    <td><b>Sector : </b></td>
                                    <td>{!! $userDatas->sector !!}</td>
                                  <td><b>Journey : </b></td>
                                    <td>{!! $userDatas->journey !!}</td>


                                </tr>
                                <tr>

                                    <td><b>Corporated : </b></td>
                                    <td>{!! $userDatas->areuincorporated !!}</td>
                                       <td><b>About business : </b></td>
                                    <td>{!! $userDatas->aboutbusiness !!}</td>


                                </tr>
                                <tr>

                                    <td><b>Others : </b></td>
                                    <td>{!! $userDatas->anythingelsetomention !!}</td>
                                   <td><b>Reference Network : </b></td>
                                    <td>{!! $userDatas->referencenetwork !!}</td>


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
