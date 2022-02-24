<div class="row row-sm">
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label"> Name: <span class="tx-danger">*</span></label>
            <input class="form-control" name="warrior_name" value="{{ $covidwarrior->warrior_name ?? ''}}" placeholder="Enter Name"
                 type="text">
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Email: <span class="tx-danger">*</span></label>
            <input class="form-control" name="email" value="{{ $covidwarrior->email ?? ''}}" placeholder="Enter Email"
                type="text">
        </div>
        </div>
 
        <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Phone:  <span class="tx-danger">*</span></label>
            <input class="form-control" name="phone" value="{{ $covidwarrior->phone ?? ''}}" placeholder="Enter phone Number"
                 type="text">
        </div>
    </div>
 </div>   
 <br/>
 <div class="row row-sm">
 <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Photo: <span class="tx-danger">*</span></label>
            <input class="form-control" name="photo" value="{{ $covidwarrior->photo ?? ''}}" placeholder="Choose Photo"  id="profile1"
                value="" type="file">
        </div>
    </div>
    <div class="col-4">
    <div class="form-group mg-b-0">
            <img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-80"
            id="profile-img1" @if(Request::is('user/blog/*/edit'))
            src="{{ $covidwarriors->photo ?? ''}}" @endif>
        </div>
    </div>
    </div>
    <br/>
  <div class="row row-sm">    
    <div class="col-12">
        <div class="form-group mg-b-0">
            <label class="form-label">Area of Expertise:  <span class="tx-danger">*</span></label>
            <textarea class="form-control summernote" name="areaofexpertise" rows="3" placeholder="">{!!$covidwarrior->areaofexpertise ?? '' !!}</textarea>
        </div>
    </div>
 </div>
 <br/>
 <div class="row row-sm">
 <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Location:  <span class="tx-danger">*</span></label>
            <input class="form-control" name="location" value="{{ $covidwarrior->location ?? ''}}" placeholder="Enter Location"
                 type="text">
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">City:  <span class="tx-danger">*</span></label>
            <input class="form-control" name="city" value="{{ $covidwarrior->city ?? ''}}" placeholder="Enter City"
                 type="text">
        </div>
    </div>
    <div class="col-4">
    <div class="form-group mg-b-0">
            <label class="form-label">Status: <span class="tx-danger">*</span></label>
            <select name="status" class="form-control">
               <!--placeholder-->
               @if(Request::is('user/covidwarriors/*/edit')) >
               @if($covidwarriors->status=='1')
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
 <br/>
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/covidwarriors')}}"
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