<div class="row row-sm">
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Blog Name: <span class="tx-danger">*</span></label>
            <input class="form-control" name="name" placeholder="Enter Name"
                value="{{ $blog->name ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Designation: <span class="tx-danger">*</span></label>
            <input class="form-control" name="author_designation" placeholder="Enter Name"
                value="{{ $blog->author_designation ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Blog Image: <span class="tx-danger">*</span></label>
            <input class="form-control" name="image" placeholder="Enter Name"  id="profile-img"
                value="{{ $blog->image ?? ''}}" type="file">
        </div>
    </div>
    <div class="col-3">
        <div class="form-group mg-b-0">
            <img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-80"
            id="profile-img-tag" @if(Request::is('user/blog/*/edit'))
            src="{{ $blog->image ?? ''}}" @endif>
        </div>
    </div>
</div>
   <br>
   <div class="row row-sm">
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Author Name: <span class="tx-danger">*</span></label>
            <input class="form-control" name="author_name" placeholder="Enter Name"
                value="{{ $blog->author_name ?? ''}}" type="text">
        </div>
    </div>
   
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Status: <span class="tx-danger">*</span></label>
            <select name="status" class="form-control">
               <!--placeholder-->
               @if(Request::is('user/blog/*/edit')) >
               @if($blog->status=='1')
               <option value="1">Active</option>
               <option value="2">Inactive</option>


               @else
               <option value="2">Inactive</option>
               <option value="1">Active</option>

               @endif
               @else

               <option value="1">Active</option>
               <option value="2">Inactive</option>
               @endif
            </select>
        </div>
    </div>
    
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Your Photo: <span class="tx-danger">*</span></label>
            <input class="form-control" name="authorimage" placeholder="Enter Name"  id="profile1"
                value="{{ $blog->authorimage ?? ''}}" type="file">
        </div>
    </div>
    <div class="col-3">
        <div class="form-group mg-b-0">
            <img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-80"
            id="profile-img1" @if(Request::is('user/blog/*/edit'))
            src="{{ $blog->authorimage ?? ''}}" @endif>
        </div>
    </div>
</div>
   <br>
   <div class="row row-sm">
            <div class="col-12">
                <div class="form-group mg-b-0">
                   
                    <label class="form-label"> Description: <span class="tx-danger">*</span></label>
                    <textarea class="form-control summernote" name="description" rows="3" placeholder="" >{!!$blog->description ??'' !!}</textarea>
        
                </div>
            </div>
   </div>
    
</div>
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('faces/blog')}}"
            class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
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
<script type="text/javascript">
    jQuery.noConflict();
    function readURL(input) {
        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function (e) {
                jQuery('#profile-img1').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    jQuery("#profile1").change(function () {
        readURL(this);
    });

</script>