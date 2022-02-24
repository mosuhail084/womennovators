<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">city Name: <span class="tx-danger">*</span></label>
            <select class="form-control " name="city_id" 
            @if(Request::is('admin/sector/edit/*')) @endif>

            <option>Please Select One</option>
            @foreach($city as $cityData)
            <option value="{{$cityData->id}}" @if(!empty($sector->
                city_id) && $sector->
                city_id==$cityData->id) selected @endif>
                {{ $cityData->name }}</option>
            @endforeach
        </select>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">sector Name: <span class="tx-danger">*</span></label>
            <input class="form-control" name="sectorname" placeholder="Enter sector Name" value="{{ $sector->sectorname ?? ''}}"
                type="text">
        </div>
    </div>
</div>
<br>
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/sector')}}" class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
    </div>
</div>
