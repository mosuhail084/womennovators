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
                                    <td>{{$work->name}}</td>
                                    <td><b>Country: </b></td>
                                    <td>{{ $work->country}}</td>
                                 
                                </tr> 
                                <tr>
                                <td><b>State: </b></td>
                                    <td>{{ $work->state}}</td>
                                    <td><b>City : </b></td>
                                    <td>{!! $work->city !!}</td>

                                  
                                
                              

                                </tr>
                                <tr>
                                <td><b>Address: </b></td>
                                    <td>{!! $work->address !!}</td>
                               
                                    <td><b>Pincode : </b></td>
                                    <td>{!! $work->pincode !!}</td>


                                </tr>
                                <tr>

                                    
                                <td><b>Email :</b></td>
                                    <td>{{ $work->email}}</td>

                                    <td><b>Phone: </b></td>
                                    <td>{{ $work->phone}}</td>


                                </tr>
                                <tr>

                                    <td><b>Age: </b></td>
                                    <td>{!! $work->age !!}</td>
                                    <td><b>I am: </b></td>
                                    <td>{!! $work->am !!}</td>



                                </tr>
                                <tr>

                                

                                    <td><b>Professional : </b></td>
                                    <td>{!! $work->professional !!}</td>

                                    <td><b>Business: </b></td>
                                    <td>{!! $work->business !!}</td>


                                </tr>
                                <tr>

                                   

                                    <td><b>Student: </b></td>
                                    <td>{!! $work->student !!}</td>
                                    <td><b>Hear : </b></td>
                                    <td>{!! $work->hear !!}</td>


                                </tr>
                                <tr>

                              

                                    <td><b>Influencer : </b></td>
                                    <td>{!! $work->influencer !!}</td>
                                    <td><b>Online: </b></td>
                                    <td>{!! $work->online !!}</td>

                        


                                </tr>
                                <tr>
                                <td><b>Family : </b></td>
                                    <td>{!! $work->family !!}</td>
                                    <td><b>Earn : </b></td>
                                    <td>{!! $work->earn !!}</td>
                                 
                                  


                                </tr>
                                <tr>

                                
                                   <td><b>Comment : </b></td>
                                    <td>{!! $work->comment !!}</td>
                                    <td><b>Social: </b></td>
                                    <td>{!! $work->social !!}</td>


                                </tr>
                                <tr>

                                  
                                    <td><b>Account : </b></td>
                                    <td>{!! $work->account !!}</td>
                                    
                                    <td><b>Type : </b></td>
                                    <td>{!! $work->type !!}</td>


                                </tr>
                                <tr>

                                <td><b>Sell : </b></td>
                                    <td>{!! $work->sell!!}</td>
                                    <td><b>Product : </b></td>
                                    <td>{!! $work->product !!}</td>


                                </tr>
                                <tr>
                                <td><b>Experience : </b></td>
                                    <td>{!! $work->experience !!}</td>
                                   <td><b>Medium : </b></td>
                                    <td>{!! $work->medium !!}</td>
                               


                                </tr>
                                <tr>

                                <td><b>Think : </b></td>
                                    <td>{!! $work->think !!}</td>
                                     <td><b>Suggestions : </b></td>
                                    <td>{!! $work->suggestions !!}</td>
                                 


                                </tr>
                                <tr>

                                  

                                    <td><b>Have: </b></td>
                                    <td>       @if($work->have_id == 1 )
    <span>Pan Card</span>
    @elseif($work->have_id == 2 )
    <span>Adhar Card</span>
    @elseif($work->have_id == 3 )
    <span>License</span>
    @elseif($work->have_id == 4 )
    <span>Voters Card</span>
    @elseif($work->have_id == 5 )
    <span>Passport</span>
   
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
