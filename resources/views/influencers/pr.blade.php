@extends('influencers.layouts.layout') @section('admin_content')
<!-- container -->
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Hi Influencers, Welcome Back!</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(url('influencers/home')); ?>">Dashboard</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- /breadcrumb -->
    <!-- main-content-body -->
    <div class="main-content-body">
      <!-- row -->
	  <div class="row row-sm">
		
		
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="card overflow-hidden project-card">
				<div class="card-header">
				<h4>My Details</h4>
				</div>
				
			</div>
		</div>
		<div class="col-lg-12 col-md-612 col-sm-12">
			<!-- row -->
			<div class="row row-sm">
			    <div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
					<div class="card text-center">
						<div class="card-body ">
							<div class="feature widget-2 text-center mt-0 mb-2">
								<a data-target="#modaldemo1" data-toggle="modal" style="margin-left:5%;"><img src="{{url('influencers/image/pr.jpg')}}" style="height: 100px;"></a>
							</div>
							<h6 class="mb-1 text-muted">Personal Details</h6>
							
						</div>
					</div>
				</div>
			
			
				
			</div>
			<!-- /row -->
			
		</div>
		
		
	
		
		
		
	</div>

				<!-- /row -->
	  
    </div>
    <!-- /row -->
</div>
<!-- /container -->
</div>      

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- /main-content -->
{{-- <div class="modal" id="modaldemo1">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header" >
                <h6 class="modal-title">My Details</h6><button aria-label="Close" class="close" data-dismiss="modal"
                    type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="{{ url('admin/juryexcel/store')}}" enctype="multipart/form-data">
              
                @csrf
                <div class="modal-body">
                    <div class="details-form-field form-group row">
                        <label for="name" class="col-sm-12 col-form-label font-weight-600">Name :</label>
                     
						<div class="col-sm-12">
                            <input id="name" class="form-control" name="name" value="{{$influencer->name ??''}}" type="text">
                        </div>
                    </div>
                    <div class="details-form-field form-group row">
                        <label for="name" class="col-sm-12 col-form-label font-weight-600">Contact Number :</label>
                      
                        <div class="col-sm-12">
                            <input id="" class="form-control" name="Contact Number"  value="{{$influencer->phone ??''}}" type="number">
                        </div>
                    </div>
                    <div class="details-form-field form-group row">
                        <label for="name" class="col-sm-12 col-form-label font-weight-600">Gender :</label>
                        
                        <div class="col-sm-12">
                            <input id="" class="form-control" name="gender"  value="{{$influencer->gender ??''}}" type="text">
                        </div>
                    </div>
                    <div class="details-form-field form-group row">
                        <label for="name" class="col-sm-12 col-form-label font-weight-600">Country :</label>
                      
                        <div class="col-sm-12">
                        <select name="country" id="category" class="form-control" >
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
                    <div class="details-form-field form-group row">
                        <label for="name" class=" col-form-label font-weight-600">State :</label>
                      
                        <div class="col-sm-12">
                            
                            <select name="state" id="subcategory_id" class="form-control" type="text">
                        </div>
                    </div>
               <br>
                    <div class="modal-footer">
                        <button class="btn ripple btn-success" type="submit">Save</button>
                        <button class="btn ripple btn-danger" data-dismiss="modal" type="button">Close</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div> --}}
<div class="modal" id="modaldemo1">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">My Details</h6><button aria-label="Close" class="close" data-dismiss="modal"
                    type="button"><span aria-hidden="true">&times;</span></button>
            </div>
           <form method="post" action="{{ url('influencer/update/'.$influencer->id )}}" enctype="multipart/form-data">
              
                @csrf
                <div class="modal-body">
                    <div class="details-form-field form-group row">
                        <label for="name" class="col-sm-12 col-form-label font-weight-600">Name :</label>
                     
						<div class="col-sm-12">
                            <input id="name" class="form-control" name="name" value="{{$influencer->name ??''}}" type="text">
                        </div>
                    </div>
                    <div class="details-form-field form-group row">
                        <label for="name" class="col-sm-12 col-form-label font-weight-600">Contact Number :</label>
                      
                        <div class="col-sm-12">
                            <input id="" class="form-control" name="Contact Number"  value="{{$influencer->phone ??''}}" type="number">
                        </div>
                    </div>
                    <div class="details-form-field form-group row">
                        <label for="name" class="col-sm-12 col-form-label font-weight-600">Gender :</label>
                        
                        <div class="col-sm-12">
                            <input id="" class="form-control" name="gender"  value="{{$influencer->gender ??''}}" type="text">
                        </div>
                    </div>
                    <div class="details-form-field form-group row">
                        <label for="name" class="col-sm-12 col-form-label font-weight-600">Country :</label>
                      
                        <div class="col-sm-12">
                        <select name="country" id="category" class="form-control" >
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
                    <div class="details-form-field form-group row">
                        <label for="name" class="col-sm-12 col-form-label font-weight-600">State :</label>
                      
                        <div class="col-sm-12">
                            
                            <select name="state" id="subcategory_id" class="form-control">
                            </select>
                        </div>
                    </div>
               <br>
                    <div class="modal-footer">
                        <button class="btn ripple btn-success" type="submit">Save</button>
                        <button class="btn ripple btn-danger" data-dismiss="modal" type="button">Close</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(function(){
       $('#category').on('change',function(){
           var category_id =$(this).val();

        $.ajax({
            type: "GET",
            url: "{{ url('influencer/personal/details') }}",
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
