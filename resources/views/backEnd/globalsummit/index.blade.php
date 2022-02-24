@extends('backEnd.layouts.layout') @section('admin_content')
<!-- container -->
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Hi, Welcome Back!</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                   
                    <li style="display:none;"  class="breadcrumb-item active" aria-current="page">Global Summit</li>
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
                    <h4 class="card-title mg-b-0 mt-2">globalsummit</h4>
					
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                    <a href="{{url('admin/globalsummit/create')}}"  class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Add globalsummit</a>
                </div>
                </div>
            <div class="card-body">
           <form action="{{ url('/admin/globalsummit/search')}}" method="Post" role="search">
                    @csrf
                    <div class="input-group">
                        <input type="text" class="form-control" name="q"
                            placeholder="Search Here"> <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary">
                               <i class="fe fe-search"></i>
                            </button>
                          
                        </span>
                    </div>
                </form>
				
					
                <br> 
                @component('backEnd.components.alert')

                @endcomponent
                   @if(isset($globalsummitDatas))
				
				
                <div class="table-responsive">
                   							 <table class="table text-md-nowrap" >
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0"> Type</th>
                                <th class="wd-15p border-bottom-0">Name</th>
                                <th class="wd-15p border-bottom-0">Designation</th>
                                <th class="wd-15p border-bottom-0">Image</th>
                                <th class="wd-15p border-bottom-0">Company Name</th>
								 <th class="wd-20p border-bottom-0">Home Page</th>
                                <th class="wd-15p border-bottom-0">Date</th>
                                <th class="wd-15p border-bottom-0">Edit</th>
                      <th class="wd-10p border-bottom-0">Delete</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($globalsummitDatas as $globalsummitData)
                            <tr>
                                @if($globalsummitData->type==1)
                                <td>Jury</td>
                                @elseif($globalsummitData->type==2)
                                <td>Influencer</td>
                                @elseif($globalsummitData->type==3)
                                <td>Faces</td>
                                 @elseif($globalsummitData->type==5)
                                <td>Incubatee</td> 
                                 @elseif($globalsummitData->type==6)
                                <td>Chief guest</td> 
                                 @elseif($globalsummitData->type==7)
                                <td>Guest of Honor</td> 
                                 @elseif($globalsummitData->type==13)
                                <td>Moderators</td> 
                                 @elseif($globalsummitData->type==14)
                                <td>Awardees</td> 
                                 @elseif($globalsummitData->type==15)
                                <td>Mentor</td> 
                                 @elseif($globalsummitData->type==16)
                                <td>Event Sponsers</td> 
                                 @elseif($globalsummitData->type==17)
                                <td>Event Partner</td> 
                                 @elseif($globalsummitData->type==18)
                                <td>We-pitch Competion Partner</td> 
                                 @elseif($globalsummitData->type==19)
                                <td>Supported By</td> 
                                @else
                                <td>Not Selected</td>
                                @endif
                                <td>{{$globalsummitData->name ??''}}</td>
                                <td>{{$globalsummitData->designation ??''}}</td>
                                
                                <td><img src="{{url('backEnd/image/globalsummit/'.$globalsummitData->image)}}"/></td>
                                <td>{{$globalsummitData->company_name ??''}}</td>
								 <td> @if($globalsummitData->sequence==1)
                                            Yes
                                            @else
                                            No
                                            @endif
                                        </td>
                                 <td>{{date('d-m-Y', strtotime($globalsummitData->created_at)) ??''}}</td>
                                <td><a href="{{route('globalsummit.edit', $globalsummitData->id)}}" class="btn ripple btn-primary text-white btn-icon"><i class="fe fe-edit"></i></a></td>
                                
                             <td><form action="{{ route('globalsummit.destroy', $globalsummitData->id) }}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button  onclick="return confirm('Are you sure you want to delete this item?');" class="btn ripple btn-primary text-white btn-icon"><i class="fe fe-trash-2 btn ripple btn-secondary text-white btn-icon"></i></button>
                                </form>
                              </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $globalsummitDatas->render() !!}
                </div>
                 @elseif(isset($message))
                    <p>{{ $message }}</p>
                    
                            @endif
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