@extends('backEnd.buyers.layouts.layout') @section('admin_content')

<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Hi, Welcome Back!</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Support</a></li>
                    <li style="display:none;"  class="breadcrumb-item active" aria-current="page">Project</li>
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
                    <h4 class="card-title mg-b-0 mt-2">Product Enquiry List</h4>
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
                                <th class="wd-15p border-bottom-0">Looking For</th>
                                <th class="wd-15p border-bottom-0">Quantity</th>
                                <th class="wd-20p border-bottom-0">Name</th>
                                <th class="wd-20p border-bottom-0">Mobile Number</th>
                                <th class="wd-20p border-bottom-0">Email</th>
								<th class="wd-20p border-bottom-0">Piece</th>
                                {{-- <th class="wd-15p border-bottom-0">Edit</th>
                                <th class="wd-10p border-bottom-0">Delete</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $enquiryData)
                            <tr>
                                <td>{{$enquiryData->lookingfor}}</td>
                                 <td>{{$enquiryData->quantity}}</td>
                                 <td>{{$enquiryData->name}}</td>
                                 <td>{{$enquiryData->phone}}</td>
                                 <td>{{$enquiryData->email}}</td>								
                                 <td>{{$enquiryData->piece}}</td> 
                                {{-- <td><a href="{{route('client.edit', $enquiryData->id)}}" class="btn ripple btn-primary text-white btn-icon"><i class="fe fe-edit"></i></a></td>
                                <td><form action="{{ route('client.destroy', $enquiryData->id) }}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button  onclick="return confirm('Are you sure you want to delete this item?');" class="btn ripple btn-primary text-white btn-icon"><i class="fe fe-trash-2 btn ripple btn-secondary text-white btn-icon"></i></button>
                                </form></td> --}}
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










@endsection