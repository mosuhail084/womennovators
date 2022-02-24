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
                        <h4 class="card-title mg-b-0 mt-2">Live</h4>
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
                                    <th class="wd-15p border-bottom-0"> Name </th>
                                    <th class="wd-15p border-bottom-0"> Email</th>
                                    <th class="wd-20p border-bottom-0"> phone</th>
                                    <th class="wd-20p border-bottom-0"> state</th>
                                   
                                  
                                    <th class="wd-20p border-bottom-0"> address</th>
                                    <th class="wd-20p border-bottom-0"> session</th>
                                    <th class="wd-15p border-bottom-0">View</th>
                                 
                                   
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($live as $liveData)
                                <tr>
                                    <td>
                                     {{$liveData->name}}   
                                       
                                    <td> 
                                    {{$liveData->email}} 
                                      
                                    </td>
                                   
                                    <td> 
                                    {{$liveData->phone}} 
                                    </td>
                                    <td> 
                                    {{$liveData->state}} 
                                    </td>
                                  
                                   
                                    <td> 
                                    {{$liveData->address}} 
                                    </td>
                                    
                                    <td> 
                                    @foreach( DB::table('liveid')
                                        ->leftjoin('lives','lives.id','liveid.live_id')
                                        ->where('liveid.live_id',$liveData->id)
                                        ->select('liveid.session_id')->get() as $sessionData)
                                        @if($sessionData->session_id == 1 )
    <span>Creating Distribution Channel</span>
    @elseif($sessionData->session_id == 2 )
    <span>Idea to Prototype to Final Product</span>
    @elseif($sessionData->session_id == 3 )
    <span>Go to Market Strategy</span>
    @elseif($sessionData->session_id == 4 )
    <span>Availment of Government Schemes</span>
    @elseif($sessionData->session_id == 5 )
    <span>Funding</span>
    @elseif($sessionData->session_id == 6 )
    <span>Social Media and branding</span>
    @elseif($sessionData->session_id == 7 )
    <span>Finance, Accounts and compliance</span>
    @elseif($sessionData->session_id == 8 )
    <span>Others... Type Your sessionData</span>
    @endif 
                                       @endforeach </td>
                                     

                                       <td><a href="{{url('/admin/newindex/'.$liveData->id)}}" 
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
<!-- /main-content -->@endsection