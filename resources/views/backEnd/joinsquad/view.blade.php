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
                                    <td>{{ $view->name}}</td>
                                    <td><b>Email :</b></td>
                                    <td>{{ $view->email}}</td>
                                </tr>
                                <tr>
                                    <td><b>Phone: </b></td>
                                    <td>{{ $view->phone}}</td>
                               
                                    <td><b>City:</b></td>
                                    <td>{{ $view->city }}</td>

                                </tr>
                                <tr>
                                    <td><b>state: </b></td>
                                    <td>{{ $view->state }}</td>
                               
                                    <td><b>Address : </b></td>
                                    <td>{!! $view->address !!}</td>


                                </tr>
                                <tr>

                                    <td><b>Referred by : </b></td>
                                    <td>{!! $view->nominated_by !!}</td>

                                    <td><b>Referred Person Email : </b></td>
                                    <td>{!! $view->email_id !!}</td>


                                </tr>
                                <tr>

                                    <!-- <td><b>Category : </b></td>
                                    <td>{!! $view->category_id !!}</td> -->

                                    <td><b>photo : </b></td>
                                    <td><img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-70"
                                     src="{{asset('http://covidcaregiver.org/backEnd/image/joinsquad')}}/{!! $view->photo !!}" style="max-width:60px;"></td>
                                    </tr>

                                    <tr>
                                    <td><b>Category : </b></td>
                                    <td>  @foreach( DB::table('warriorid')
                                        ->leftjoin('warrior_appreciations','warrior_appreciations.id','warriorid.warrior_id')
                                        ->where('warriorid.warrior_id',$view->id)
                                        ->select('warriorid.category_id')->get() as $category)
                                        
                                        @if($category->category_id == 1 )
    <span>Medical Supplies (Injections, Medicines, Oxygen etc)</span><br/>
    @elseif($category->category_id  == 2 )
    <span>Hospital Beds</span> <br/>
    @elseif($category->category_id  == 3 )
    <span>Doctor Consultations</span> <br/>
    @elseif($category->category_id  == 4 )
    <span>Food and Water Service</span> <br/>
    @elseif($category->category_id  == 5 )
    <span>Proper Final Journey</span> <br/>
    @elseif($category->category_id  == 6 )
    <span>free Ambulance service</span> <br/>
    @elseif($category->category_id  == 7)
    <span>Diet chart for pre and post covid</span> <br/>
    @elseif($category->category_id  == 8 )
    <span>Free E rickshaw services for covid patient and families with delivery of essential and cooked food.</span> ,
    @elseif($category->category_id  == 9 )
    <span>meal to the patient in home isolation or quarantine</span> <br/>
    @elseif($category->category_id  == 10 )
    <span>Covid councelling</span> <br/>
    @elseif($category->category_id  == 11 )
    <span>Others...</span> <br/>
    @endif
                                        @endforeach</td>
                                        <td><b>Others : </b></td>
                                    <td>{{$view->comment}}</td>


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