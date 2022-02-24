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
                        <h4 class="card-title mg-b-0 mt-2">Warrior Appreciation List</h4>
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
                                    <!-- <th class="wd-10p border-bottom-0">Hospital Name</th>
                                    <th class="wd-10p border-bottom-0">Core Experience</th> -->
                                    <th class="wd-10p border-bottom-0">Address</th>
                                    <th class="wd-10p border-bottom-0">Nominated by</th>
                                    <th class="wd-10p border-bottom-0">Nominated Person Email</th>
                                    <th class="wd-10p border-bottom-0">Category</th>
                                    <th class="wd-10p border-bottom-0">Comment</th>
                                    <th class="wd-10p border-bottom-0">Created date</th>
                                    
                                
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($appreciation as $appreciationData)
                                <tr>
                                    <td>{{$appreciationData->name}}</td>
                                    <td>{{$appreciationData->email}}</td>
                                    <td>{{$appreciationData->phone}}</td>
                                    <!-- <td>{{$appreciationData->hospital_name}}</td>
                                    <td>{{$appreciationData->core_experience}}</td> -->
                                    <td>{{$appreciationData->address}}</td>
                                    <td>{{$appreciationData->nominated_by}}</td>
                                    <td>{{$appreciationData->email_id}}</td>
                                    <td>  @foreach( DB::table('warriorid')
                                        ->leftjoin('warrior_appreciations','warrior_appreciations.id','warriorid.warrior_id')
                                        ->where('warriorid.warrior_id',$appreciationData->id)
                                        ->select('warriorid.category_id')->get() as $category)
                                        
                                        @if($category->category_id == 1 )
    <span>Medical Supplies (Injections, Medicines, Oxygen etc)</span>,
    @elseif($category->category_id  == 2 )
    <span>Hospital Beds</span> ,
    @elseif($category->category_id  == 3 )
    <span>Doctor Consultations</span> ,
    @elseif($category->category_id  == 4 )
    <span>Food and Water Service</span> ,
    @elseif($category->category_id  == 5 )
    <span>Proper Final Journey</span> ,
    @elseif($category->category_id  == 6 )
    <span>Others...</span> ,
    @endif
                                        @endforeach</td>
                                    <td>{{$appreciationData->comment}}</td>
                                    <td>{{date('d-M-y', strtotime($appreciationData->created_at)) ??''}}</td>
                                   
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