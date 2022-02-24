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
                        <h4 class="card-title mg-b-0 mt-2">Markingschema Result</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                </div>
                <div class="card-body">
                    @component('backEnd.components.alert')

                    @endcomponent
                    <fieldset class="form-group">

                        <table class="table display table-bordered table-striped table-hover">

                            <tbody>

                                <tr>
                                    <td><b> Event Name : </b></td>
                                    <td>{{ $event->event_name}}</td>

                                    <td><b>Date :</b></td>
                                    <td> {{date('F d,Y', strtotime($event->start_date))}}</td>

                                </tr>
                            </tbody>
                        </table>
                    </fieldset>
                    <div class="table-responsive">
                        <table id="example" class="table key-buttons text-md-nowrap">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0"> Faces</th>
                                    <th class="wd-15p border-bottom-0"> Jury</th>
                                    <th class="wd-20p border-bottom-0">Avg Marks</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($resultDatas as $resultData)
                                <tr>
                                    <td>{{$resultData->name}} ( {{ $resultData->categoryname}} )</td>
                                    <td> 
                                   @foreach( DB::table('markingevents')
                                        ->leftjoin('juries','juries.id','markingevents.jury_id')
                                        ->where('markingevents.user_id',$resultData->id)
                                        ->select('juries.name')->distinct()->get() as $sub)
                                        
  <span class="badge badge-success" style="font-size:small;">{{ $sub->name }} </span>
                                        @endforeach
                                    </td>
                                    @php
                                       $count = DB::table('markingevents')
                                        ->leftjoin('juries','juries.id','markingevents.jury_id')
                                        ->where('markingevents.user_id',$resultData->id)
                                        ->select('juries.name')->distinct()->get();
                                     $count = count($count);
                                     $sum =  App\Models\Markingevent::where('event_id',$resultData->event_id)->
                                     where('user_id',$resultData->user_id)->sum('marks');
                                    if($count==0)
                                     {
                                        $avg =  $sum/2;
                                     }
                                     else
                                     $avg =  $sum/$count;
                                    @endphp
                                    <td>{{number_format($avg, 2, '.', '') }}</td>
                                
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
