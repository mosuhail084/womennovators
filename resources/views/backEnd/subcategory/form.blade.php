<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Name: <span class="tx-danger">*</span></label>
            <input class="form-control" name="subcategoryname" placeholder="Enter Name" value="{{ $subcategory->subcategoryname ?? ''}}"
                type="text">
        </div>
    </div>
   
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Category: <span class="tx-danger">*</span></label>
            <select class="form-control" name="category_id" @if(Request::is('admin/subcategory/*/edit'))> <option disabled
                style="display:block">Please Select One</option>

                @foreach($category as $categoryData)
                <option value="{{$categoryData->id}}" @if(!empty($subcategory->
                    category_id) && $subcategory->
                    category_id==$categoryData->id) selected @endif>
                    {{ $categoryData->categoryname }}</option>
                @endforeach


                @else
                <option></option>
                <option value="">Please Select One</option>
                @foreach($category as $categoryData)
                <option value="{{$categoryData->id}}">
                    {{ $categoryData->categoryname }}</option>

                @endforeach
                @endif
            </select>
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
                @if(Request::is('admin/subcategory/*/edit')) >
                @if($subcategory->status=='1')
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
            <input class="form-control" name="image" id="profile-img" placeholder="Enter firstname" type="file">
            <span><small> Standard Size: 700 (width) X 700 (height)</small></span>

        </div>
    </div>
    <div class="col-3">
        <div class="form-group">
            <img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-100" id="profile-img-tag"
                @if(Request::is('admin/category/*/edit')) src="{{ $category->image ?? ''}}" @endif>
        </div>
    </div>
</div>
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/category')}}" class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
    </div>
</div>
