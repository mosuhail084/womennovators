<div class="row row-sm">
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Name: <span class="tx-danger">*</span></label>
            <input class="form-control" name="campaign_name" placeholder="Enter Name"
                value="{{ $campaign->campaign_name ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Image: <span class="tx-danger">*</span></label>
            <input class="form-control" name="image" id="profile-img" placeholder="Enter Banner"
                value="{{ $campaign->image ?? ''}}" type="file">
        </div>
    </div>
    <div class="col-4">
        <div class="form-group">
            <img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-100"
                id="profile-img-tag" @if(Request::is('admin/campaign/*/edit'))
                src="{{ $campaign->image ?? ''}}" @endif>
        </div>
    </div>
    
</div>
<br>
<div class="row row-sm">
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Banner: </label>
            <input class="form-control" name="banner"  placeholder="Enter banner"
                value="" type="file">
        </div>
    </div>
        

    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Youtube Link: </label>
            <input class="form-control" name="youtube_video" placeholder="Enter URL"
                value="{{ $campaign->youtube_video ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-4">
        <div class="form-group">
            <label class="form-label">Status: <span class="tx-danger">*</span></label>
            <select name="status" value="{{ $campaign->status ?? ''}}" class="form-control">
                <!--placeholder-->
                @if(Request::is('admin/campaign/edit/*')) >
                @if($campaign->status=='1')
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
    <div class="col-12">
        <div class="form-group mg-b-0">
                 <label class="form-label"> Description:</label>
            <textarea class="form-control summernote" name="description" rows="3" placeholder="" >{!!$campaign->description ??''!!}</textarea>

        </div>
    </div>
</div>
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/campaign')}}"
            class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
    </div>
</div>