@extends('backEnd.buyers.layouts.layout') @section('admin_content')

<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Hi, welcome back!</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Reseller</li>
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
                            </div>
                            @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{session()->get('message')}}
                            </div>
                            @endif

                            @if($errors->any())
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                            @endif

                            <form method="post" action="{{url('/buyer/kyc/store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Account Holder Name<span class="text-danger">*</span></label>
                                <!-- <input type="text" class="form-control" name="name" value={{ $kyc->name ??''}}> -->
                                <textarea  name="name" class="form-control">{{ $kyc->name ??''}} </textarea>
                            </div>
                            <div class="form-group">
                                <label>Account Number<span class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="account_number"  value={{ $kyc->account_number ??''}}>
                            </div>
                            <div class="form-group">
                                <label>Bank Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="bank_name"  value={{ $kyc->bank_name ??''}}>
                            </div>
                            <div class="form-group">
                                <label >IFSC Code<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="ifsc_code"  value={{ $kyc->ifsc_code ??''}}>
                            </div>
                            <div class="form-group">
                                <label>Bank Address</label>
                                <textarea rows="4" name="bank_address" class="form-control">{{ $kyc->bank_address ??''}} </textarea>
                            </div>
                            <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10" style="float:right">Save</button>
                            <a href="{{URL::previous()}}" class="btn btn-primary" >Back</a>
                            
                            </form>
                        </div>
                    </div>
                </div>
               
            </div>
            <!-- /row -->

    <!-- /row -->
</div>

@endsection