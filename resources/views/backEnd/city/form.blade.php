<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">State: <span class="tx-danger">*</span></label>
            <select class="form-control " name="state_id"
            @if(Request::is('admin/city/*/edit'))> <option disabled
            style="display:block">Please Select One</option>

            @foreach($state as $stateData)
            <option value="{{$stateData->id}}"
                {{$city->state->id== $stateData->id??'' ?'selected="selected"' : ''}}>
                {{$stateData->statename }}</option>
            @endforeach


            @else
            <option></option>
            <option value="">Please Select One</option>
            @foreach($state as $stateData)
            <option value="{{$stateData->id}}">
                {{ $stateData->statename }}</option>

            @endforeach
            @endif
        </select>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">City Name: <span class="tx-danger">*</span></label>
            <input class="form-control" name="name" placeholder="Enter City Name"
                value="{{ $city->name ?? ''}}" type="text">
        </div>
    </div>

    
</div><br>
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/city')}}" class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>

    </div>
</div>