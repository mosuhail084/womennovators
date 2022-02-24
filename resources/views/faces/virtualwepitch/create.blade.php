@extends('faces.layouts.layout') @section('admin_content')

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
    @if(session()->has('message'))
    <h3><div class="alert alert-success">
     {{session()->get('message')}}
    </div></h3>
    @endif
    <!-- /breadcrumb -->
   <!-- row -->
   
<!-- row closed -->
</div>




<div class="card col-lg-12" align="center">

  <div class="card-body">
  <span class="login100-form-logo">
    <i class="zmdi"></i><i class="fa fa-microphone fa-5x"  aria-hidden="true"></i>
  </span>
  <span class="login100-form-title p-b-34 p-t-27">
    <h4 style="font-weight: bold;">Pitch Your Voice!!</h4>
</span>
    <form action="{{ url('faces/virtualwepitch') }}" method="post" enctype="multipart/form-data">
    @csrf
   
  </div>
  
  <!-- <div class="dropdown">
  Select category You are applying for:<br/><br/>
    <select name="category" class="form-control">
    @foreach($sectors as $sector)
    <option value="{{$sector->sectorname}}">{{$sector->sectorname}}</option>
    @endforeach
    </select>
  
</div> -->
<div class="dropdown col-md-6 mx-auto" >
									<p >Select category You are applying for:</p>
									<select name="category" id="category" class="form-control">
										<option value="0">Please select one</option>
										<option value="1">My City/Area</option>
										<option value="2">My Sector</option>
									</select>
                  	
</div>

<div class="dropdown col-md-6 mx-auto" id='country' style="display: none;" align="center">
  <br/>
  <select name="country" id="categoryid" class="form-control"  >
    <option value="" >Please Select Country</option>
    @foreach($country as $stateData)
    <option value="{{$stateData->id}}" @if(!empty($listing->
    state_id) && $listing->
    state_id==$stateData->id) selected @endif>
    {{ $stateData->name }}</option>
    @endforeach
  </select>
  
</div>
<div class="dropdown col-md-6 mx-auto" id='cities' style="display: none;" align="center">
  <br/>
    <select name="cities" class="form-control" id="subcategory_id" >
    <option value="">Please Select State</option>
   
    </select>
  
</div>


<div class="dropdown col-md-6 mx-auto" id='sector' style="display: none; float:center;" align="center">
  <br/><br/>
    <select name="sector" class="form-control">
    <option value="">Please select one</option>
    @foreach($sectors as $sector)
    <option value="{{$sector->id}}">{{$sector->sectorname}}</option>
    @endforeach
    </select>
</div>



<br/>

<div class="form-group col-md-6 mx-auto" style="float:center" align="center">
    <label>Upload Video</label>
    <input type="file" class="form-control" name="file" id="file"  onchange="Filevalidation()"  align="center"><br/>
    <div align="center" style="color: #b151c4;"><b>1 min video (size less than 50 MB)</b></div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  </div>
  
  <div class="form-group col-md-6 mx-auto" align="center">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
  </div>
</div>
<!-- /container -->

</div>
<!-- /main-content -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  $(function(){
     $('#categoryid').on('change',function(){
         var category_id =$(this).val();

      $.ajax({
          type: "GET",
          url: "{{ url('faces/virtualwepitch') }}",
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
  <script>
    Filevalidation = () => {
        const fi = document.getElementById('file');
        // Check if any file is selected.
        if (fi.files.length > 0) {
            for (const i = 0; i <= fi.files.length - 1; i++) {
  
                const fsize = fi.files.item(i).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file >= 51200) {
                    alert(
                      "File too Big, please select a file less than 50mb");
                } else if (file < 2048) {
                    alert(
                      "File too small, please select a file greater than 2mb");
                } else {
                    document.getElementById('size').innerHTML = '<b>'
                    + file + '</b> KB';
                }
            }
        }
    }
</script>

@endsection