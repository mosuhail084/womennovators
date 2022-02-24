
      
      
        <div class="card-body">
   @if(Session::has('banner'))
         <div class="alert alert-success" role="alert">
         {{Session::get('banner')}}
         </div>
         @endif
</div>


        <form action="{{ route('banner.store')}}" method="POST" enctype="multipart/form-data">
         @csrf 

     
         <div class="row row-sm">
          <div class="col-4">
        <div class="form-group mg-b-0">

         <label for="name">Title:<span class="tx-danger">*</span></label>
         <input type="text" name="title" class="form-control"/>

         </div>
         </div>

        <div class="col-4">
        <div class="form-group mg-b-0">
         <label for="name">Sequence:<span class="tx-danger">*</span></label>
         <input type="text" name="sequence" class="form-control"/>
         </div>
    </div>
    </div><br>


    <div class="row row-sm">
    <div class="col-4">
        <div class="form-group mg-b-0">
         <label class="form-label" for="file">Choose Banner Image:<span class="tx-danger">*</span></label>
         <input type="file" name="file" class="form-control" id="profile-img" />
         <img   id="profile-img-tag"  alt="profile image" style="max-width:130px;margin-top:20px;"/>
         </div>
    </div>





    <div class="col-4">
        <div class="form-group mg-b-0">
        
         <label for="name">Link:<span class="tx-danger">*</span></label>
         <input type="text" name="link" class="form-control"/>
 </div>
</div>

</div>

<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
    <a href="{{url('admin/banner')}}"
            class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
            <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Submit</button>
    </div>
</div>   
         </form>
        </div>
    </div>
</div>











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