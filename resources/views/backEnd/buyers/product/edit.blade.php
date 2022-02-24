
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
    <!-- main-content-body -->
   			<!-- row -->
               <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="main-content-label mg-b-5">
                               Edit product
                            </div>
                            <form method="post" action="{{ route('products.update', $product->id)}}" enctype="multipart/form-data">
                                @method('PATCH') 
                                @csrf   
                                @component('backEnd.components.alert')

                                @endcomponent
                 
                                @include('backEnd.buyers.product.form')
                            </form>
                        </div>
                    </div>
                </div>
               
            </div>
            <!-- /row -->

    <!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /main-content -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
    //jQuery.noConflict();
    function readURL(input) {
        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function (e) {
                jQuery('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    jQuery("#profile-img").change(function () {
        readURL(this);
    });

</script>

<!-- Basic modal -->
<div class="modal" id="modaldemo1">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
                {{-- <div class="modal-header">
                    <h6 class="modal-title">Add Excel</h6><button aria-label="Close" class="close" data-dismiss="modal"
                        type="button"><span aria-hidden="true">&times;</span></button>
                </div> --}}
          
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-10p border-bottom-0">Image</th>
                                   
                                    <th class="wd-10p border-bottom-0">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($productDatas as $productData)
                                <tr>
                                    <td><img alt="Responsive image" class="img-thumbnail wd-200p wd-sm-100"
                                        src="{{ asset('backEnd/image/productimage/'.$productData->productimage?? '')}}"></td>
                                <td><a href="{{url('/admin/product/destroy/'.$productData->id)}}"
                                    onclick="return confirm('Are you sure you want to delete this item?');"
                                           class="btn ripple btn-primary text-white btn-icon"><i
                                               class="fe fe-trash-2 btn ripple btn-secondary text-white btn-icon"></i></a>
                                 </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

        </div>
    </div>
</div>


<!-- End Basic modal -->
@endsection