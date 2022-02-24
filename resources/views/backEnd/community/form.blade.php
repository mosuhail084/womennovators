<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Name: <span class="tx-danger">*</span></label>
            <input class="form-control" name="name" placeholder="Enter Name"
                value="{{ $communities->name ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Profile Pic: <span class="tx-danger"></span></label>
            <input class="form-control" name="logo" placeholder="Enter Experience"
                value="{{ $communities->profile_pic ?? ''}}" type="file">
        </div>
    </div>
    
    
    
</div>
<br>
<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Followers: <span class="tx-danger"></span></label>
            <input class="form-control" name="followers" placeholder="Enter followers"
                value="{{ $communities->followers ?? ''}}" type="number">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> City: <span class="tx-danger"></span></label>
            <input class="form-control" name="city" placeholder="Enter City"
                value="{{ $communities->city ?? ''}}" type="text">
        </div>
    </div>
    </div>
   

<br>
<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Country: <span class="tx-danger"></span></label>
            <input class="form-control" name="country" placeholder="Enter Country"
                value="{{ $communities->country ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Industry: <span class="tx-danger"></span></label>
            <input class="form-control" name="industry" placeholder="Enter Industry"
                value="{{ $communities->industry ?? ''}}" type="text">
        </div>
    </div>
    </div>
   

<br>
    <div class="row row-sm">    
        <div class="col-6">
            <div class="form-group mg-b-0">
                <label class="form-label"> Led by: <span class="tx-danger"></span></label>
                <input class="form-control" name="led_by" placeholder="Led By"
                    value="{{ $communities->led_by ?? ''}}" type="text">
            </div>
        </div>
        <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> About: <span class="tx-danger"></span></label>
            <input class="form-control" name="about" placeholder="about"
                value="{{ $communities->about ?? ''}}" type="text">
        </div>
    </div>

    <div class="col-6">
        <div class="form-group mg-b-0">
        <label class="form-label"> Tag: </label>
            <select class="form-control" name="tag">
            <option value="">None</option>
            <option value="Star Influencers">Star Influencers</option>
            <option value="Loyal Members">Loyal Members</option>
            <option value="Highest Members">Highest Members</option>
            <option value="Trending Leaders">Trending Leaders</option>
            <option value="New Leaders">New Leaders</option>
            <option value="Champions">Champions</option>
            <option value="Startup Leaders">Startup Leaders</option>
            <option value="Changemakers">Changemakers</option>
            <option value="Leaders leader">Leaders leader</option>
            <option value="Rocket Launcher">Rocket Launcher</option>
</select>
        </div>
    </div>


    </div>
    
    
</div>
<br>  
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/community')}}"
            class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

