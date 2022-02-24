<div class="row row-sm">
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label"> Name: <span class="tx-danger">*</span></label>
            <input class="form-control" name="name" placeholder="Enter Name"
                value="{{ $jury->name ?? ''}}" type="text">
        </div>
    </div>

    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Email: <span class="tx-danger">*</span></label>
            <input class="form-control" name="email" value="{{ $jury->email ?? ''}}"
                placeholder="Enter Email" type="text">
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Mobile Number: <span class="tx-danger">*</span></label>
            <input class="form-control" name="mobile_number" value="{{ $jury->mobile_number ?? ''}}"
                placeholder="Enter Mobile Number" type="text">
        </div>
    </div>
</div><br>
<div class="row row-sm">
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label"> State: <span class="tx-danger">*</span></label>
            <select class="form-control " name="state_id" id="category">
                           
                <option value="">Please Select One</option>
                @foreach($state as $stateData)
                <option value="{{$stateData->id}}" @if(!empty($jury->
                    state_id) && $jury->
                    state_id==$stateData->id) selected @endif>
                    {{ $stateData->statename }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label"> City: <span class="tx-danger">*</span></label>
            <select class="form-control " name="city_id" id="subcategory_id">
                @if(!empty($jury->city_id))
                <option value="{{ $jury->city_id }}">
                    {{ App\Models\City::where('id',$jury->city_id)->first()->name??'' }}
                </option>

                @endif 
            </select>
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label"> Sector: <span class="tx-danger">*</span></label>
            <select class="form-control" name="sector_id"
            @if(Request::is('admin/jury/*/edit'))> <option disabled
            style="display:block">Please Select One</option>

            @foreach($sector as $sectorData)
            <option value="{{$sectorData->id}}"@if(!empty($jury->
                sector_id) && $jury->
                sector_id==$sectorData->id) selected @endif>
                {{ $sectorData->sectorname }}</option>
            @endforeach


            @else
            <option></option>
            <option value="">Please Select One</option>
            @foreach($sector as $sectorData)
            <option value="{{$sectorData->id}}">
                {{ $sectorData->sectorname }}</option>

            @endforeach
            @endif
        </select>
        </div>
    </div>
   
</div>
<br>
<div class="row row-sm">
  
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Company Name : <span class="tx-danger">*</span></label>
            <input class="form-control" name="company" value="{{ $jury->company ?? ''}}"
                placeholder="Enter Company name" type="text">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Industry Name: <span class="tx-danger">*</span></label>
            <input class="form-control" name="industry" value="{{ $jury->industry ?? ''}}"
                placeholder="Enter Industry name" type="text">
        </div>
    </div>
   
</div><br>
<div class="row row-sm">
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label"> Designation : <span class="tx-danger">*</span></label>
            <input class="form-control" name="designation" value="{{ $jury->designation ?? ''}}"
                placeholder="Enter Designation" type="text">
        </div>
    </div>
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label"> Password : <span class="tx-danger">*</span></label>
            <input class="form-control" name="password" value=""
                placeholder="Enter Password" type="password">
        </div>
    </div>

    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Photo: <span class="tx-danger">*</span></label>
            <input class="form-control" name="photo" id="profile-img" value="{{ $jury->photo ?? ''}}"
                placeholder="Enter Email" type="file">
        </div>
    </div>
    <div class="col-3">
        <div class="form-group">
            <img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-100"
                id="profile-img-tag" @if(Request::is('admin/jury/*/edit'))
                src="{{ $jury->photo ?? ''}}" @endif>
        </div>
    </div>
    
</div><br>
<div class="row row-sm">
<div class="col-3">
    <div class="form-group mg-b-0">
        <label class="form-label">fb Link: <span class="tx-danger">*</span></label>
        <input class="form-control" name="fblink" value="{{ $jury->fblink ?? ''}}"
            placeholder="Enter Fb Link" type="text">
    </div>
</div>
<div class="col-3">
    <div class="form-group mg-b-0">
        <label class="form-label">Linkedin Link: <span class="tx-danger">*</span></label>
        <input class="form-control" name="linkedin" value="{{ $jury->linkedin ?? ''}}"
            placeholder="Enter Linkedin Link" type="text">
    </div>
</div>
<div class="col-3">
    <div class="form-group mg-b-0">
        <label class="form-label">Instagram Link: <span class="tx-danger">*</span></label>
        <input class="form-control" name="instagram" value="{{ $jury->instagram ?? ''}}"
            placeholder="Enter Instagram Link" type="text">
    </div>
</div>
<div class="col-3">
    <div class="form-group mg-b-0">
        <label class="form-label">Twitter Link: <span class="tx-danger">*</span></label>
        <input class="form-control" name="twitter" value="{{ $jury->twitter ?? ''}}"
            placeholder="Enter Twitter Link" type="text">
    </div>
</div>
</div>
<br>
<div class="row row-sm">
    <div class="col-12">
        <div class="form-group mg-b-0">
            <label class="form-label"> Description: <span class="tx-danger">*</span></label>
            <textarea class="form-control" name="description" rows="3" placeholder="">{!!$jury->description ?? ''!!}</textarea>

        </div>
    </div>
</div>
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/jury')}}" class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>

    </div>
</div>