<div class="row row-sm">
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Category: <span class="tx-danger">*</span></label>
            <select class="form-control " name="category_id"
            @if(Request::is('admin/markingschema/*/edit'))> <option disabled
            style="display:block">Please Select One</option>

            @foreach($category as $categoryData)
            <option value="{{$categoryData->id}}"
                {{$markingschema->category->id== $categoryData->id??'' ?'selected="selected"' : ''}}>
                {{$categoryData->categoryname }}</option>
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
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Schema Name: <span class="tx-danger">*</span></label>
            <input class="form-control" name="schemaname" placeholder="Enter Schema Name"
                value="{{ $markingschema->schemaname ?? ''}}" type="text">
        </div>
    </div>

    
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Marks: <span class="tx-danger">*</span></label>
            <input class="form-control" name="marks" value="{{ $markingschema->marks ?? ''}}"
                placeholder="Enter Marks" type="text">
        </div>
    </div>
</div><br>
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/markingschema')}}" class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>

    </div>
</div>