<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Title: <span class="tx-danger">*</span></label>
            <input class="form-control" name="title" placeholder="Enter Title"
                value="{{ $resource->title ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Image: <span class="tx-danger">*</span></label>
            <input class="form-control" name="image" placeholder="Enter Name"  id="profile-img"
                value="{{ $resource->image ?? ''}}" type="file">
        </div>
    </div>
   
   
</div>
<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Banner Image: <span class="tx-danger">*</span></label>
            <input class="form-control" name="banner_image" placeholder="Enter Name"  id="profile-img"
                value="{{ $resource->banner_image ?? ''}}" type="file">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Category: <span class="tx-danger">*</span></label>
            <input class="form-control" name="Category" placeholder="Enter Category"
                value="{{ $resource->category ?? ''}}" type="text">
        </div>
    </div>
</div>
<div class="row row-sm">
    <div class="col-12">
        <div class="form-group mg-b-0">
            <label class="form-label">Tags: <span class="tx-danger">*</span></label>
            <input class="form-control" name="tags" placeholder="Enter Tags"  id="profile-img"
                value="{{ $resource->tags ?? ''}}" type="text">
        </div>
    </div>
    
</div>
    <div class="row row-sm">
            <div class="col-12">
                <div class="form-group mg-b-0">
                   
                    <label class="form-label"> Description: <span class="tx-danger">*</span></label>
                    <textarea class="form-control summernote" name="description" rows="3" placeholder="" >{!!$resource->description ??'' !!}</textarea>
        
                </div>
            </div>
</div>
    <div class="row row-sm">    
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Status: <span class="tx-danger">*</span></label>
            <select name="status" class="form-control">
               <!--placeholder-->
               @if(Request::is('user/resource/*/edit')) >
               @if($resource->status=='1')
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
</div>

<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/resource')}}"
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