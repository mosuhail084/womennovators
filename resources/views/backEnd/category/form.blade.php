<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Name: <span class="tx-danger">*</span></label>
            <input class="form-control" name="categoryname" placeholder="Enter Name"
                value="{{ $category->categoryname ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label class="form-label">Status: <span class="tx-danger">*</span></label>
            <select name="status" class="form-control">
                <!--placeholder-->
                @if(Request::is('admin/category/edit/*')) >
                @if($category->status=='1')
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
        <a href="{{url('admin/category')}}"
            class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
    </div>
</div>