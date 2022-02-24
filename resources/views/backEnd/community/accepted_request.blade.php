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
                    <li style="display:none;"  class="breadcrumb-item active" aria-current="page">Project</li>
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
                    <h4 class="card-title mg-b-0 mt-2">Accepted Request List</h4>
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
                                <th class="wd-15p border-bottom-0"> Name</th>
                                <!-- <th class="wd-15p border-bottom-0"> Designation</th> -->
                                <th class="wd-15p border-bottom-0">Logo</th>
                                <th class="wd-15p border-bottom-0">city</th>
                                <th class="wd-15p border-bottom-0">Led By</th> 
                                <th class="wd-15p border-bottom-0">Tag</th>                                   
                                <th class="wd-15p border-bottom-0">Edit</th>
                                <th class="wd-10p border-bottom-0">Delete</th>
                                <th class="wd-10p border-bottom-0">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($communities as $community)
                            <tr>
                                <td>{{$community->name}}</td>
                                <td>
                                    <img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-70"
                                    src="{{asset('backEnd/image/community_image/'.$community->logo)}}">
                                </td>
                                 <td>{{$community->city}}</td>
                                <td>
                                    {{$community->led_by}}
                                </td>
                                <td>
                                    {{$community->tag}}
                                </td>
                                <td><a href="{{route('community.edit', $community->id)}}" class="btn ripple btn-primary text-white btn-icon"><i class="fe fe-edit"></i></a></td>
                                <td><form action="{{ route('community.destroy', $community->id) }}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button  onclick="return confirm('Are you sure you want to delete this item?');" class="btn ripple btn-primary text-white btn-icon"><i class="fe fe-trash-2 btn ripple btn-secondary text-white btn-icon"></i></button>
                                </form>
                              </td>
                              <td> 
                                <!-- <form id="toggle">
                             <input type="hidden" value="{{$community->status}}">
                             <button type="submit" id="status">Active</button>
                            </form> -->

                            @if($community->status === 2)
                            <a href="{{route('update.status',['status' => 1, 'id' =>  $community->id])}}" class="btn btn-sm btn-success">Accept</a>
                            <a href="{{route('update.status',['status' => 0, 'id' =>  $community->id])}}" class="btn btn-sm btn-warning">Reject</a>
                            @elseif($community->status === 1)
                                <a href="#" class="btn btn-sm btn-primary">Accepted</a>
                            @elseif($community->status === 0)
                            <a href="#" class="btn btn-sm btn-danger">Rejected</a>
                            @endif
                        
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







<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>



<script> 
// $('#status').click(function (e) { 
//     e.preventDefault();
//    alert('something');
// });

//   $(function() { 

//     $('.toggle-class').click(function() { 
        
//         console.log('works');
//         var status = $(this).prop('checked') == true ? 1 : 0;  

//         var community_id = $(this).data('id');  

//          console.log(status); 

//         $.ajax({ 

//             type: "GET", 

//             dataType: "json", 

//             url: '/community/status', 

//             data: {'status': status, 'community_id': community_id}, 

//             success: function(data){ 

//               console.log(data.success) 

//             } 

//         }); 

//     }) 

//   }) 


</script> 
