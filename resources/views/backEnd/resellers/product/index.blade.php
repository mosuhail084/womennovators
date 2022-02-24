@extends('backEnd.buyers.layouts.layout') @section('admin_content')
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
                        <h4 class="card-title mg-b-0 mt-2">product List</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                        {{-- <a data-target="#modaldemo1" data-toggle="modal" href="#"><i class="fe fe-plus"></i><img
                                src="{{ url('backEnd/image/add-icon.png')}}" /></a> --}}
                    </div>
                </div>
                <div class="card-body">
                    @component('backEnd.components.alert')

                    @endcomponent
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-10p border-bottom-0">Image</th>
                                    <th class="wd-40p border-bottom-0">Details</th>
                                    <th class="wd-10p border-bottom-0">Edit</th>
                                    <th class="wd-10p border-bottom-0">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($productDatas as $productData)
                                <tr>
                                   @php
                                    $img=DB::table('productimages')->select('productimage')->where('product_id',$productData->id)->first();
                                   // dd($img);
                                    @endphp
                                    @if($img->productimage ??'')
                                    <td><img alt="Responsive image" class="img-thumbnail wd-200p wd-sm-400"
                                        src="{{ asset('backEnd/image/productimage/'.$img->productimage ?? '')}}"></td>
                                     
                                      @endif
                                    <td><span>Product : {{$productData->productname}}  @if($productData->status==0)
                                        <span class="badge badge-success">Active</span>
                                        @else
                                        <span class="badge badge-danger">Inactive</span>
                                        @endif</span><br>
                                         <span>Store : {{$productData->storename}} </span><br>
                                        <span>Category : {{$productData->categoryname}}</span><br>
                                   <span>Subcategory : {{$productData->subcategoryname}}</span><br>
                                        <span>Quantity :{{$productData->quantityunit}}{{$productData->value}}</span><br>
                                        <span>Homepage : @if($productData->status==0)
                                            <p >No</p>
                                            @else
                                            <p >Yes</p>
                                            @endif</span>
                                       
                                      
                                    </td>
                                    <td><a href="{{route('products.edit', $productData->id)}}" class="btn ripple btn-primary text-white btn-icon"><i class="fe fe-edit"></i></a></td>
                                    <td>
                                         <form action="{{ route('products.destroy', $productData->id) }}" method="POST">
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
