<div class="row row-sm">
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Name: <span class="tx-danger">*</span></label>
            <input class="form-control" name="name" value="{{ $squad->name ?? ''}}" placeholder="Enter Name"
                 type="text">
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Email <span class="tx-danger">*</span></label>
            <input class="form-control" name="email" value="{{ $squad->email ?? ''}}" placeholder="Enter title"
                type="text">
        </div>
        </div>
 
        <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Phone <span class="tx-danger">*</span></label>
            <input class="form-control" name="phone" value="{{ $squad->phone ?? ''}}" placeholder="Enter Youtube Link"
                 type="text">
        </div>
    </div>
 </div>   

 <div class="row row-sm">
 <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Photo: <span class="tx-danger">*</span></label>
            <input class="form-control" name="photo" placeholder="Enter Name"  id="profile1"
                value="{{ $squad->photo ?? ''}}" type="file">
        </div>
    </div>
    <div class="col-3">
        <div class="form-group mg-b-0">
            <img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-80"
            id="profile-img1" @if(Request::is('user/blog/*/edit'))
            src="{{ $squad->photo ?? ''}}" @endif>
        </div>
    </div>
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">city <span class="tx-danger">*</span></label>
            <input class="form-control" name="city" value="{{ $squad->city ?? ''}}" placeholder="Enter title"
                type="text">
        </div>
        </div>
 
        <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">State <span class="tx-danger">*</span></label>
            <input class="form-control" name="state" value="{{ $squad->state ?? ''}}" placeholder="Enter Youtube Link"
                 type="text">
        </div>
    </div>
 </div> 
 <div class="row row-sm">
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Address <span class="tx-danger">*</span></label>
            <input class="form-control" name="address" value="{{ $squad->address ?? ''}}" placeholder="Enter Name"
                 type="text">
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Reffered by <span class="tx-danger">*</span></label>
            <input class="form-control" name="nominated_by" value="{{ $squad->nominated_by ?? ''}}" placeholder="Enter title"
                type="text">
        </div>
        </div>
 
        <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Referred Person Email <span class="tx-danger">*</span></label>
            <input class="form-control" name="email_id" value="{{ $squad->email_id ?? ''}}" placeholder="Enter Youtube Link"
                 type="text">
        </div>
    </div>
 </div> 

<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/joinsquad')}}"
            class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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