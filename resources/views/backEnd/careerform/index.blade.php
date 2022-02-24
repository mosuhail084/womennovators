@extends('backEnd.layouts.layout') @section('admin_content')
<!-- container -->
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Hi, Welcome Back!</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <!--<li class="breadcrumb-item"><a href="#">Career</a></li>-->
                    <li style="display:none;"  class="breadcrumb-item active" aria-current="page">Career</li>
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
                    <h4 class="card-title mg-b-0 mt-2">career Form</h4>
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
                                <th class="wd-15p border-bottom-0">  Name</th>
                                <!-- <th class="wd-15p border-bottom-0"> Designation</th> -->
                                 <th class="wd-15p border-bottom-0"> Role</th>
                                <th class="wd-15p border-bottom-0"> LinkedIn Url</th>
                                 <th class="wd-15p border-bottom-0">Resume</th>
                                <th class="wd-15p border-bottom-0"> Status</th>                                         <th class="wd-15p border-bottom-0">Date</th>                    
                                <th class="wd-15p border-bottom-0">Update</th>
                                <th class="wd-10p border-bottom-0">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($careerformDatas as $careerformData)
                            <tr>
                                <td>{{$careerformData->name ??''}}</td>
                               <td>{{$careerformData->title ??''}}</td>
                                 <td>{{$careerformData->linkedin_id ??''}}</td>
                                  <td>
                                       <a  class="img-thumbnail wd-100p wd-sm-70"
                                    href="http://demo.weblooptechnik.in/backEnd/image/resume/{{$careerformData->resume}}" download>{{$careerformData->resume}}</a>
                                  </td>
                                 
                                <td>@if($careerformData->current_status==1)
                                    <span class="badge badge-danger-gradient">Pending</span>
                                    @else
                                    <span class="badge badge-success-gradient">Approved</span>
                                    @endif</td>
                                           <td>
                                    {{ date('d-m-Y', strtotime($careerformData->created_at))}}
                                </td>
                                
                                <td><a href="{{route('careerform.edit', $careerformData->id)}}" class="btn ripple btn-primary text-white btn-icon"><i class="fe fe-edit"></i></a></td>
                                <td><form action="{{ route('careerform.destroy', $careerformData->id) }}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button  onclick="return confirm('Are you sure you want to delete this item?');" class="btn ripple btn-primary text-white btn-icon"><i class="fe fe-trash-2 btn ripple btn-secondary text-white btn-icon"></i></button>
                                </form>
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