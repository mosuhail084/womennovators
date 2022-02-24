<div class="row row-sm">
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Title: <span class="tx-danger">*</span></label>
            <input class="form-control" name="title" placeholder="Enter Name"
                value="{{ $brand->title ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Link: <span class="tx-danger">*</span></label>
            <input class="form-control" name="link" placeholder="Enter Link"
                value="{{ $brand->link ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Position: <span class="tx-danger">*</span></label>
            <input class="form-control" name="position" placeholder="Enter Position"
                value="{{ $brand->position ?? ''}}" type="text">
        </div>
    </div>
</div>
<br>
<div class="row row-sm">
    <div class="col-6">
        <div class="form-group">
            <label class="form-label">Status: <span class="tx-danger">*</span></label>
            <select name="status" class="form-control">
                <!--placeholder-->
                @if(Request::is('admin/brand/*/edit')) 
                @if($brand->status=='1')
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
            <label class="form-label">Image: <span class="tx-danger">*</span></label>
            <input class="form-control" name="image" id="profile-img"
                placeholder="Enter firstname" type="file">
            <span><small> Standard Size: 700 (width) X 700 (height)</small></span>

        </div>
    </div>
    <div class="col-3">
        <div class="form-group">
            <img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-100"
                id="profile-img-tag" @if(Request::is('admin/brand/*/edit'))
                src="{{ $brand->image ?? ''}}" @endif>
        </div>
    </div>
</div>
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/brand')}}"
            class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
    </div>
</div>