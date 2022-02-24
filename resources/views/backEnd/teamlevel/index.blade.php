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
                                        <a  href="{{url('/admin/teamlevel/create')}}" ><i class="fe fe-plus"></i><img
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
                                    <th class="wd-15p border-bottom-0"> Role Name</th>
                                    <th class="wd-20p border-bottom-0">Permissions Access</th>
                                    <th class="wd-20p border-bottom-0">Edit</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teamlevelDatas as $teamData)
                                <tr>
                                    <td>{{$teamData->rolename}}</td>
                                    <td>   @foreach(App\Models\Permission::leftJoin('menus',function ($join)
                                        {$join->on('permissions.menu_id','menus.id'); })
                                       ->where('permissions.role_id',$teamData  ->id)
                                       ->select('menus.menu_name')->distinct()->get() as $sub )
                                       
                                      <span class="badge badge-info" style="font-size:small;"> {{ $sub->menu_name }} </span>
                                       @endforeach
                                       </td>
                                                                      
                                    <td><a href="{{route('teamlevel.edit', $teamData->id)}}"
                                            class="btn ripple btn-primary text-white btn-icon"><i
                                                class="fe fe-edit"></i></a></td>
                                    
                                        
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
