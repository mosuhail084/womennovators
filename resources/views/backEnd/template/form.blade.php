
<div class="row row-sm">
    <div class="col-12">
        <div class="form-group mg-b-0">
            <label class="form-label">Title: <span class="tx-danger">*</span></label>
            <input class="form-control" name="title" placeholder="Enter Title"
                value="{{ $template->title ?? ''}}" type="text">
        </div>
    </div>
</div>
<br>
<div class="row row-sm">
    <div class="col-12">
        <div class="form-group mg-b-0">
            <label class="form-label">Description: <span class="tx-danger">*</span></label>
            <textarea class="form-control summernote" name="description" rows="3" placeholder="" >{!!$template->description ??'' !!}</textarea>
        
        </div>
    </div>
</div>
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/sector')}}" class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
    </div>
</div>
