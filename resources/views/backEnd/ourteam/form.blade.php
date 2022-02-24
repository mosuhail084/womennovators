<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Name: <span class="tx-danger">*</span></label>
            <input class="form-control" name="name" placeholder="Enter Name"
                value="{{ $ourteam->name ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Profile Pic: <span class="tx-danger"></span></label>
            <input class="form-control" name="profile_pic" placeholder="Enter Experience"
                value="{{ $ourteam->profile_pic ?? ''}}" type="file">
        </div>
    </div>
    
    
    
</div>
<br>
<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Designation: <span class="tx-danger"></span></label>
            <input class="form-control" name="designation" placeholder="Enter Designation"
                value="{{ $ourteam->designation ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Sequence: <span class="tx-danger"></span></label>
            <input class="form-control" name="sequence" placeholder="Enter Sequence"
                value="{{ $ourteam->sequence ?? ''}}" type="text">
        </div>
    </div>
    </div>
   

<br>
<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Facebook: <span class="tx-danger"></span></label>
            <input class="form-control" name="fb_link" placeholder="Enter Facebook"
                value="{{ $ourteam->fb_link ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Linkedin: <span class="tx-danger"></span></label>
            <input class="form-control" name="linkedin_link" placeholder="Enter Linkedin"
                value="{{ $ourteam->linkedin_link ?? ''}}" type="text">
        </div>
    </div>
    </div>
   

<br>
    <div class="row row-sm">    
        <div class="col-6">
            <div class="form-group mg-b-0">
                <label class="form-label"> Twitter: <span class="tx-danger"></span></label>
                <input class="form-control" name="twitter_link" placeholder="Enter Twitter"
                    value="{{ $ourteam->twitter_link ?? ''}}" type="text">
            </div>
        </div>
    
    
</div>
<br>  
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/ourteam')}}"
            class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

