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
                        <h4 class="card-title mg-b-0 mt-2">REVIEW</h4>
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
                                    @foreach($jury as $jury)
                                    
                                    <th class="wd-15p border-bottom-0"> {{$jury->name}}</th>
                                   
                                    @endforeach
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php// print_r($resultDatas);?>
                                @foreach($resultDatas as $resultData)
                                
                                <?php 
                               /*  $arr = [];
                                array_push($arr,$resultData->name);
                                $result = array_unique($arr);
                                print_r($result );*/
                                ?>
                                <tr>
                                    <td>{{$resultData->name}} </td>
                                   
                                      @foreach($jury_id as $jury)
                                      {{-- @php
                                      $user= App\Models\Eventcomment::select('comment')->where('user_id',$resultData->user_id)->where('jury_id',$jury->jury_id)->first();
                                      //dd($user);
                                      @endphp
                                    --}}
                                    
 
                                      
                                      <td>{!! App\Models\Eventcomment::select('comment')->where('user_id',$resultData->user_id)->where('jury_id',$jury->jury_id)->first()->comment ?? ''!!}</td>
                                     
                                     
                                   
                                      @endforeach
                                  
                                </tr>
                                @endforeach
                                <?php// die;?>
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
