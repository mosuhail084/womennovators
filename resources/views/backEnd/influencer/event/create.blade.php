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
    <!-- main-content-body -->
   			<!-- row -->
               <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="main-content-label mg-b-5">
                               Add Events
                         
                            </div>
                            <form method="post" action="{{url('admin/influencerevent/store')}}" enctype="multipart/form-data">
                                @csrf
                                @component('backEnd.components.alert')

                                @endcomponent

                                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                           <div class="col-sm-12">
                                
                            </div>
                            <div class="col-sm-12">
                            <label class="form-label"> Country: <span class="tx-danger"></span></label>
                                <select name="country" id="category" class="form-control">
                                    <option value="" >Please select one</option>
                                   @foreach($country as $stateData)
                                    <option value="{{$stateData->id}}" @if(!empty($listing->
                                    state_id) && $listing->
                                    state_id==$stateData->id) selected @endif>
                                    {{ $stateData->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br/>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                           <div class="col-sm-12">
                                
                            </div>
                            <div class="col-sm-12">
                            <label class="form-label"> State: <span class="tx-danger"></span></label>
                            <select class="form-control" id="subcategory_id" name="state">
                                 </select>
                            </div>                
                        </div> 
                        <br/>
                    </div>
                </div>
                 
                                <div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Event Name: <span class="tx-danger"></span></label>
            <input class="form-control" name="event_name" placeholder="Enter Name" 
                type="text">
        </div>
    </div>

    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Pin code: <span class="tx-danger"></span></label>
            <input class="form-control" name="pin_code" 
                type="number">
        </div>
        <br/>
    </div>

    <!-- <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> community Id: <span class="tx-danger"></span></label>
            <input class="form-control" name="community_id" 
                type="number">
        </div>
        <br/>
    </div> -->


    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Event Type: <span class="tx-danger"></span></label>
            <select class="form-control" name="event_type">
                    <option value="">--choose one--</option>
                <option value="offline">Offline</option>
                <option value="online">Online<option>
            </select>
        </div>
        <br/>
    </div>


    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Location: <span class="tx-danger"></span></label>
            <input class="form-control" name="location" placeholder="Enter Location" 
                type="text">
        </div>
        <br/>
    </div>
    <br/>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Event Category: <span class="tx-danger"></span></label>
            <input class="form-control" name="event_category" 
                type="text">
        </div>
        <br/>
    </div>

    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Start Date: <span class="tx-danger"></span></label>
            <input class="form-control" name="start_date" 
            type="datetime-local" >
        </div>
        <br/>
    </div>

    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">End Date: <span class="tx-danger"></span></label>
            <input type="datetime-local" class="form-control" name="end_date" placeholder="Enter Position">
        </div>
        <br/>
    </div>

    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Banner Image: </label>
            <input class="form-control" type="file" name="banner_image" >
        </div>
        <br/>
    </div>

    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Events Image: </label>
            <input class="form-control" type="file"  name="image" >
        </div>
        <br/>
    </div>

    <div class="col-12">
        <div class="form-group mg-b-0">
            <label class="form-label">About Event<span class="tx-danger"></span></label>
            <textarea name="about_event" id="editor" rows="10"  style="height:90%;" ></textarea>
        </div>
        <br/>
    </div>
<br/>
    <div>
        <a class="btn btn-primary" href="{{URL::previous()}}">Back</a>
</div>
<button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10" style="float:right">Save</button>
        

    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
                
            } );
           
    </script>
    
    
</div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(function(){
       $('#category').on('change',function(){
           var category_id =$(this).val();

        $.ajax({
            type: "GET",
            url: "{{ url('admin/influencerevent/create') }}",
            data: "category_id="+category_id,
            success : function(res){
            
                $('#subcategory_id').html(res);
 
            },
            error : function(){

            },
        });
       });
       
    }); 
  
    </script>
    
@endsection

