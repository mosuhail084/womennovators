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
            <div class="main-content-body main-content-body-profile">
                <!-- <nav class="nav main-nav-line card">
<a class="nav-link active tablinks" data-toggle="tab" onclick="openCity(event, 'General Information')"id="defaultOpen" >Event OverView</a> 
<a class="nav-link tablinks" data-toggle="tab" onclick="openCity(event, 'Delivery & Installation')">Jury</a> 
<a class="nav-link tablinks" data-toggle="tab" onclick="openCity(event, 'Service & Maintenance')">User</a> 


</nav>-->
                @component('backEnd.components.alert')

                @endcomponent
                <!-- main-profile-body -->
                <div class="main-profile-body p-0">
                    <div class="row row-sm">
                        <div class="col-12">
                            <div class="card mg-b-20 tabcontent" id="General Information">
                                <div class="card-body">
                                    {{-- <div class="card-header">
<div class="media">
<div class="media-user mr-2">
<div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="{{ url('backEnd/img/faces/6.jpg')}}">
                                </div>
                            </div>
                            <div class="media-body">
                                <h6 class="mb-0 mg-t-9">Petey Cruiser Pechon</h6><span class="text-primary">just
                                    now</span>
                            </div>
                            <div class="ml-auto">
                                <div class="dropdown show">
                                    <a class="new" data-toggle="dropdown" href="JavaScript:void(0);"><i
                                            class="fas fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Edit Post</a> <a class="dropdown-item"
                                            href="#">Delete Post</a> <a class="dropdown-item" href="#">Personal
                                            Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}


                    <fieldset class="form-group">

                        <table class="table display table-bordered table-striped table-hover">

                            <tbody>
                            <thead><h5>Listing Data</h></thead>
                            @foreach($listingData as $listingData)
                          
                                <tr>
                                    <td><b> Name : </b></td>
                                    <td>{{$listingData->storename}}</td>
                                    <td><b>Country: </b></td>
                                    <td>{{ $listingData->country}}</td>
                                 
                                </tr> 
                                <tr>
                                <td><b>State: </b></td>
                                    <td>{{ $listingData->state}}</td>
                                    <td><b>City : </b></td>
                                    <td>{!! $listingData->city !!}</td>
                                </tr>
                                <tr>
                                <td><b>Address: </b></td>
                                    <td>{!! $listingData->address !!}</td>
                                    <td><b>yearofest: </b></td>
                                    <td>{!! $listingData->yearofest !!}</td>
                                </tr>
                                <tr>    
                                <td><b>Email :</b></td>
                                    <td>{{ $listingData->email}}</td>

                                    <td><b>Phone: </b></td>
                                    <td>{{ $listingData->phone}}</td>
                                </tr>

                                <tr>    
                                <td><b>Annualturnover :</b></td>
                                    <td>{{ $listingData->annualturnover}}</td>

                                    <td><b>Website: </b></td>
                                    <td>{{ $listingData->website}}</td>
                                </tr>
                                
                                <tr>    
                                <td><b>Latitude :</b></td>
                                    <td>{{ $listingData->latitude}}</td>

                                    <td><b>Longitude: </b></td>
                                    <td>{{ $listingData->longitude}}</td>
                                </tr>

                                <tr>    
                                <td><b>Postal Code :</b></td>
                                    <td>{{ $listingData->postalcode}}</td>

                                    <td><b>Address: </b></td>
                                    <td>{{ $listingData->address}}</td>
                                </tr>

                                

                                <tr>    
                                <td><b>City :</b></td>
                                    <td>{{ $listingData->city}}</td>

                                    <td><b>Description: </b></td>
                                    <td>{!! $listingData->description !!}</td>
                                </tr>
                                
                                @endforeach                  
                            </tbody>
                        </table><br/>


                        <table class="table display table-bordered table-striped table-hover">

                            <tbody>
                            <thead><h5>Kyc Details</h5></thead>
                          
                                <tr>
                                    <td><b> Name : </b></td>
                                    <td>{{$kyc->name  ??''}}</td>
                                    <td><b>Account Number: </b></td>
                                    <td>{{ $kyc->account_number ??''}}</td>
                                </tr>
                                
                                <tr>
                                    <td><b> Bank Name : </b></td>
                                    <td>{{$kyc->bank_name ??''}}</td>
                                    <td><b>Bank Address: </b></td>
                                    <td>{{ $kyc->bank_address ??''}}</td>
                                </tr>

                                <tr>
                                    <td><b> IFSC Code : </b></td>
                                    <td>{{$kyc->ifsc_code ??''}}</td>
                                </tr>
                                               
                            </tbody>

                            <div class="card-body">
                    @component('backEnd.components.alert')

                    @endcomponent
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                                <tr>
                                    
                                    <th class="wd-40p border-bottom-0">Details</th>
                                    <th class="wd-10p border-bottom-0">Edit</th>
                                    <th class="wd-10p border-bottom-0">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($productDatas as $productData)
                                <tr>
                                    <!--  -->
                                      
                                    <td><span>Product : {{$productData->productname ??''}}  @if($productData->status==0)
                                        <span class="badge badge-success">Active</span>
                                        @else
                                        <span class="badge badge-danger">Inactive</span>
                                        @endif</span><br>
                                         <span>Store : {{$productData->storename ??''}} </span><br>
                                        <span>Category : {{$productData->categoryname ??''}}</span><br>
                                   <span>Subcategory : {{$productData->subcategoryname ??''}}</span><br>
                                        <span>Quantity :{{$productData->quantityunit ??''}}{{$productData->value ??''}}</span><br>
                                        <span>Homepage : @if($productData->status==0)
                                            <p >No</p>
                                            @else
                                            <p >Yes</p>
                                            @endif</span>
                                       
                                      
                                    </td>
                                    <td><a href="{{route('product.edit', $productData->id)}}" class="btn ripple btn-primary text-white btn-icon"><i class="fe fe-edit"></i></a></td>
                                    <td>
                                         <form action="{{ route('product.destroy', $productData->id) }}" method="POST">
                                       <input type="hidden" name="_method" value="DELETE">
                                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                       <button
                                           onclick="return confirm('Are you sure you want to delete this item?');"
                                           class="btn ripple btn-primary text-white btn-icon"><i
                                               class="fe fe-trash-2 btn ripple btn-secondary text-white btn-icon"></i></button>
                                   </form></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
                        </table>

                        

                        <!-- <table class="table display table-bordered table-striped table-hover">

                            <tbody>
                            <thead><h4>products Details</h4></thead>
                          
                                <tr>
                                    <td><b> Product Name : </b></td>
                                    <td>{{$products->productname  ??''}}</td>
                                    <td><b> Price : </b></td>
                                    <td>{{$products->price  ??''}}</td>
                                </tr>
                                
                                <tr>
                                    <td><b> Quantity : </b></td>
                                    <td>{{$products->quantityunit  ??''}}</td>
                                </tr>

                                <tr>
                                    <td><b> Description : </b></td>
                                    <td>{{$products->description  ??''}}</td>
                                </tr>

                            </tbody>
                        </table> -->

                        <!-- <table class="table display table-bordered table-striped table-hover">
                            <th>Kyc Details</th>
                            <tr>
                                <th>Name</th>
                                <th>Account Number</th>
                                <th>Bank Name</th>
                                <th>Bank Address</th>
                                <th>IFSC code</th>
                                <th>Listing Id</th>
                                <th>Created At</th>
                                    </tr>
                                    </table>
                         -->
                    </fieldset>
                    <a class=" btn btn-primary"href="{{URL::previous()}}" style="float:right">Back</a>
                </div>
                                    </div>


        </div>
    </div>
</div><!-- main-profile-body -->
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
