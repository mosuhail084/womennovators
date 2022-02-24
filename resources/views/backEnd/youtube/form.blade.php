<div class="row row-sm">
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Category Name: <span class="tx-danger">*</span></label>
            <input class="form-control" name="category_name" value="{{ $youtube->category_name ?? ''}}" placeholder="Enter Name"
                 type="text">
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Video title <span class="tx-danger">*</span></label>
            <input class="form-control" name="video_title" value="{{ $youtube->video_title ?? ''}}" placeholder="Enter title"
                type="text">
        </div>
        </div>
 
        <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Youtube Link <span class="tx-danger">*</span></label>
            <input class="form-control" name="video_url" value="{{ $youtube->video_url ?? ''}}" placeholder="Enter Youtube Link"
                 type="text">
        </div>
    </div>
 </div>   

<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/youtube')}}"
            class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
    </div>
</div>