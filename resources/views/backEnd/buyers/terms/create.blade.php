@extends('backEnd.buyers.layouts.layout') @section('admin_content')

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
                              Terms And Condition
                            </div>
                            <div>
                            <form method="post" action="{{url('buyer/terms')}}">
                            @csrf
  <div class="form-group">
    @if(session('success'))
    <h3><div class="alert alert-success">
        {{session('success')}}
    </div></h3>
    @endif

    <textarea id="editor" name="termsandconditions"></textarea>
    <br/>
    <h5><label>Instructions</label></h5>
    <textarea id="editor2" name="instructions"></textarea>
    

    <br/>
  <h5><label>Commission</label></h5>
  <input type="number" class="form-control" name="comissions">
  <div>
</div>
<br/>
<div>
<h5><label>Products</label></h5>
<select  multiple="multiple" onchange="console.log($(this).children(':selected').length)"class="form-control select2"
            name="products[]">
        @foreach($datas as $data)
        <option value="{{$data->productname}}" >{{$data->productname}}</option>
        @endforeach
    </select>
    
    </div>
<br/>
  <button type="submit" class="btn btn-primary float-right">Submit</button>
  <a href="{{URL::previous()}}" class="btn btn-primary" style="float:left">Back</a>
</form>
</div>
                        </div>
                    </div>
                </div>
               
            </div>
            <!-- /row -->

    <!-- /row -->
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
    <script>
    ClassicEditor
        .create( document.querySelector( '#editor2' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
@endsection
 



  

  