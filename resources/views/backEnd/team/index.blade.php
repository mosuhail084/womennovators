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
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0 mt-2">Team List</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                                        <a  href="{{url('/admin/team/create')}}" ><i class="fe fe-plus"></i><img
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
                                    <th class="wd-15p border-bottom-0"> Team Member Name</th>
                                    <th class="wd-20p border-bottom-0">Mobile</th>
                                    <th class="wd-20p border-bottom-0">Email</th>
                                    <th class="wd-20p border-bottom-0">Team Role</th>
                                    <th class="wd-20p border-bottom-0">Status</th>
                                    <th class="wd-15p border-bottom-0">Edit</th>
                                    <th class="wd-15p border-bottom-0">Reset Password</th>
                                   <!-- <th class="wd-10p border-bottom-0">Deactivate</th> -->  
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teamDatas as $teamData)
                                <tr>
                                    <td>{{$teamData->team_member_name}}</td>
                                    <td>{{$teamData->mobile_no ??''}}</td>
                                    <td>{{$teamData->email ??''}}</td>
                                    <td>{{$teamData->role->rolename ??''}}</td>
                                    <td>@if($teamData->status==1)
                                        <span class="btn ripple btn-success text-white btn-icon"><i
                                        class="fa fa-check"></i></span>
                                        @else
                                        <span class="btn ripple btn-danger text-white btn-icon""><i
                                        class="fa fa-times"></i></span>
                                        @endif</td>
                                   
                                    <td><a href="{{route('team.edit', $teamData->id)}}"
                                            class="btn ripple btn-primary text-white btn-icon"><i
                                                class="fe fe-edit"></i></a></td>
                                    
                                        <td><a href="{{url('admin/resetpassword/'.$teamData->id)}}"
                                            class="btn ripple btn-primary text-white btn-icon"><i class="fas fa-unlock-alt"></i></a></td>
                                    <td>
                                     <!--   <form action="{{ route('team.destroy', $teamData->id) }}" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button
                                                onclick="return confirm('Are you sure you want to delete this item?');"
                                                class="btn ripple btn-danger text-white btn-icon"><i
                                                class="fa fa-user-times"></i></button>
                                        </form>-->
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
