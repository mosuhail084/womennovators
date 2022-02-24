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
                <nav class="nav main-nav-line card">
                    <a class="nav-link active tablinks" data-toggle="tab" onclick="openCity(event, 'General Information')"id="defaultOpen" >Event OverView</a> 
                    <a class="nav-link tablinks" data-toggle="tab" onclick="openCity(event, 'Delivery & Installation')">Jury</a> 
                    <a class="nav-link tablinks" data-toggle="tab" onclick="openCity(event, 'Service & Maintenance')">User</a> 
                    
                   
                </nav>
                @component('backEnd.components.alert')

                @endcomponent<!-- main-profile-body -->
                <div class="main-profile-body p-0">
                    <div class="row row-sm">
                        <div class="col-12">
                            <div class="card mg-b-20 tabcontent"  id="General Information">
                                <div class="card-body">
                                    {{-- <div class="card-header">
                                        <div class="media">
                                            <div class="media-user mr-2">
                                                <div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="{{ url('backEnd/img/faces/6.jpg')}}"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-0 mg-t-9">Petey Cruiser Pechon</h6><span class="text-primary">just now</span>
                                            </div>
                                            <div class="ml-auto">
                                                <div class="dropdown show">
                                                    <a class="new" data-toggle="dropdown" href="JavaScript:void(0);"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Edit Post</a> <a class="dropdown-item" href="#">Delete Post</a> <a class="dropdown-item" href="#">Personal Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    
                                  
                                    <fieldset class="form-group">

                                        <table class="table display table-bordered table-striped table-hover">
        
                                            <tbody>
        
                                                <tr>
                                                    <td><b>Event Name : </b></td>
                                                    <td>{{ $event->event_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>City :</b></td>
                                                    <td>{{ $event->name}}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Event Sector : </b></td>
                                                    <td>{{ $event->sectorname}}</td>
                                                </tr>
                                                <tr>
                                                     <td><b>Start Date :</b></td>
                                                    <td>{{ date('F d,Y', strtotime($event->start_date)) }}</td>
        
                                                </tr>
                                                <tr>
                                                    <td><b>End Date : </b></td>
                                                    <td>{{ date('F d,Y', strtotime($event->end_date)) }}</td>
                                                </tr>
                                                <tr>
                                                   
                                                    <td><b>Description : </b></td>
                                                    <td>{!! $event->description !!}</td>
        
                                                 
                                                </tr>
                                                <tr>
                                                   
                                                    <td><b>Url : </b></td>
                                                    <td>  <p id="div1"> {{url( '/jury/eventslist?'.'event='.$id)}}</p><button id="button1"   onclick="CopyToClipboard('div1')">copy event url</button> </td>
        
                                                   
                                                </tr>
                                               
                                            </tbody>
                                        </table>
                                    </fieldset>
        
                                </div>
                            </div>
                            <div class="card mg-b-20 tabcontent" id="Delivery & Installation">
                                <div class="card-body h-100">
                                    <div class="table-responsive">
                                        <table class="table text-md-nowrap" id="example1">
                                            <thead>
                                                <tr>
                                                    <th class="wd-15p border-bottom-0"> Name</th>
                                                    <th class="wd-15p border-bottom-0">Email</th>
                                                    <th class="wd-20p border-bottom-0">Phone</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($juryDatas as $juryData)
                                                <tr>
                                                    <td>{{$juryData->name}}</td>
                                                    <td>{{$juryData->email}}</td>
                                                    <td>{{$juryData->mobile_number}}</td>
                                                   
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="card tabcontent" id="Service & Maintenance">
                                <div class="card-header pb-0">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="card-title mg-b-0 mt-2"></h4>
                                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                                        <a data-target="#modaldemo1" data-toggle="modal" href="#"><i class="fe fe-plus"></i><img
                                                src="{{ url('backEnd/image/add-icon.png')}}" /></a>
                                    </div>
                                </div>
                                <div class="card-body h-100">
                                    <div class="table-responsive">
                                     <table class="table text-md-nowrap" id="example2">
                                            <thead>
                                                <tr>
                                                    <th class="wd-15p border-bottom-0"> Name</th>
                                                    <th class="wd-15p border-bottom-0">Email</th>
                                                    <th class="wd-20p border-bottom-0">Phone</th>
                                                    <th class="wd-15p border-bottom-0">Profession</th>
                                                    <th class="wd-15p border-bottom-0">Designation</th>
                                                    <th class="wd-15p border-bottom-0">Usercatgeory</th>
                                                    <th class="wd-15p border-bottom-0">Youtube</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($userDatas as $userData)
                                                <tr>
                                                    <td>{{$userData->name}}</td>
                                                    <td>{{$userData->email}}</td>
                                                    <td>{{$userData->phone}}</td>
                                                    <td>{{$userData->profession}}</td>
                                                    <td>{{$userData->designation}}</td>
                                                    <td>{{ App\Models\Category::where('id',$userData->usercategory)->first()->categoryname??'' }}</td>
                                                    <td><a target="blank" href="{{$userData->youtubelink}}" 
                                                        class="btn ripple btn-primary text-white btn-icon"><i class="fab fa-youtube"></i>
                                                    </a></td>
                                                   
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
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
<script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script>
    <script>
        function CopyToClipboard(containerid) {
      if (document.selection) {
        var range = document.body.createTextRange();
        range.moveToElementText(document.getElementById(containerid));
        range.select().createTextRange();
        document.execCommand("copy");
      } else if (window.getSelection) {
        var range = document.createRange();
        range.selectNode(document.getElementById(containerid));
        window.getSelection().addRange(range);
        document.execCommand("copy");
        alert("Link has been copied")
      }
    }
    </script>
    <!-- Basic modal -->
<div class="modal" id="modaldemo1">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Add Youtube Link</h6><button aria-label="Close" class="close" data-dismiss="modal"
                    type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="{{ url('admin/youtube/store')}}" enctype="multipart/form-data">
              
                @csrf
                <div class="modal-body">
                    <div class="details-form-field form-group row">
                        <label for="name" class="col-sm-3 col-form-label font-weight-600">Upload Excel :</label>
                        <div class="col-sm-6">
                            <input id="name" class="form-control" name="file" type="file">
                        </div>

                    </div>
                    <div class="details-form-field form-group row">
                        <label for="name" class="col-sm-3 col-form-label font-weight-600">Sample Excel :</label>
                        <div class="col-sm-6">
                            <a href="{{ url('backEnd/youtubelink.xlsx')}}" class="btn btn-success btn">Download<i class="fas fa-file-excel" style="margin-left: 3px;font-size: 20px;"></i></a>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn ripple btn-success" type="submit">Save</button>
                        <button class="btn ripple btn-danger" data-dismiss="modal" type="button">Close</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- End Basic modal -->
    @endsection

