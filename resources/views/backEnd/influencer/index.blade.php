@extends('backEnd.layouts.layout') @section('admin_content')

   <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />-->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  
    <!-- container -->
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Hi, welcome back!</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Project</li>
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
                        <h4 class="card-title mg-b-0 mt-2">Influencer List</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                        <a data-target="#modaldemo1" data-toggle="modal" href="#"><i class="fe fe-plus"></i><img
                                src="{{ url('backEnd/image/add-icon.png')}}" /></a>
                    </div>
                </div>
                <div class="card-body">
                    @component('backEnd.components.alert')

                    @endcomponent
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">Name</th>
                                    <th class="wd-10p border-bottom-0">E-Mail</th>
                                    <th class="wd-10p border-bottom-0">Phone</th>
                                    <th class="wd-10p border-bottom-0">Created date</th>
                                    <th class="wd-10p border-bottom-0">Status</th>
                                    <th class="wd-15p border-bottom-0">View</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($influencer as $influencerData)
                                <tr>
                                    <td>{{$influencerData->name}}</td>
                                    <td>{{$influencerData->email}}</td>
                                    <td>{{$influencerData->phone}}</td>
                                    <td>{{date('d-M-y', strtotime($influencerData->created_at)) ??''}}</td>
                                    <td>  <input data-id="{{$influencerData->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $influencerData->status ? 'checked' : '' }}></td>
                                    <td><a href="{{url('/admin/influencerdetails/'.$influencerData->id)}}" 
                                                class="btn ripple btn-primary text-white btn-icon"><i
                                                    class="fe fe-eye"></i></a></td>
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
<!-- /main-content -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
  
  
<script>
  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
        debugger;
         console.log(status);
       
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "{{ url('/admin/changeStatus') }}",
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
</script>
@endsection