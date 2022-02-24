@extends('backEnd.layouts.layout') @section('admin_content')
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
                        <h4 class="card-title mg-b-0 mt-2">challenge List</h4>
                     
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
                                    <th class="wd-10p border-bottom-0">Choose your major challenge for support</th>
                                    <th class="wd-10p border-bottom-0">Comment</th>
                                
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($polling as $pollingData)
                                <tr>
                                    <td>{{$pollingData->name}}</td>
                                    <td>{{$pollingData->email}}</td>
                                    <td>{{$pollingData->phone}}</td>
                                    <td>  @foreach( DB::table('pollingchallenge')
                                        ->leftjoin('pollings','pollings.id','pollingchallenge.polling_id')
                                        ->where('pollingchallenge.polling_id',$pollingData->id)
                                        ->select('pollingchallenge.challenge_id')->get() as $challenge)
                                        
                                        @if($challenge->challenge_id == 1 )
    <span>Creating Distribution Channel</span>,
    @elseif($challenge->challenge_id == 2 )
    <span>Idea to Prototype to Final Product</span> ,
    @elseif($challenge->challenge_id == 3 )
    <span>Go to Market Strategy</span> ,
    @elseif($challenge->challenge_id == 4 )
    <span>Availment of Government Schemes</span> ,
    @elseif($challenge->challenge_id == 5 )
    <span>Funding</span> ,
    @elseif($challenge->challenge_id == 6 )
    <span>Social Media and branding</span> ,
    @elseif($challenge->challenge_id == 7 )
    <span>Finance, Accounts and compliance</span> ,
    @elseif($challenge->challenge_id == 8 )
    <span>Others... Type Your challenge</span>
    @endif
                                        @endforeach</td>
                                    <td>{{$pollingData->comment}}</td>
                                   
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
@endsection
