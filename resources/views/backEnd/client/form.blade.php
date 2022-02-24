<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Name: <span class="tx-danger">*</span></label>
            <input class="form-control" name="client_name" placeholder="Enter Name"
                value="{{ $client->client_name ?? ''}}" type="text">
        </div>
    </div>

    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Url: <span class="tx-danger">*</span></label>
            <input class="form-control" name="client_url" value="{{ $client->client_url ?? ''}}"
                placeholder="Enter Url" type="text">
        </div>
    </div>
</div>
<br>
<div class="row row-sm">
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Image: <span class="tx-danger">*</span></label>
            <input class="form-control" name="clientimage" id="profile-img"
                placeholder="Enter firstname" type="file">
            <span><small> Standard Size: 350 (width) X 420 (height)</small></span>

        </div>
    </div>
    <div class="col-3">
        <div class="form-group">
            <img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-100"
                id="profile-img-tag" @if(Request::is('admin/client/*/edit'))
                src="{{ $client->clientimage ?? ''}}" @endif>
        </div>
    </div>
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Logo: <span class="tx-danger">*</span></label>
            <input class="form-control" name="clientlogo" id="profile-img"
                placeholder="Enter firstname" type="file">
            <span><small> Standard Size: 350 (width) X 420 (height)</small></span>

        </div>
    </div>
    <div class="col-3">
        <div class="form-group">
            <img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-100"
                id="profile-img-tag" @if(Request::is('admin/client/*/edit'))
                src="{{ $client->clientlogo ?? ''}}" @endif>
        </div>
    </div>
</div>
<div class="row row-sm">
    <div class="col-12">
        <div class="form-group mg-b-0">
            <label class="form-label">Description: <span class="tx-danger">*</span></label>
            <textarea class="form-control summernote"  name="client_desc" rows="3" placeholder="">{!!$client->client_desc ?? ''!!}</textarea>
       
        </div>
    </div>
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/client')}}" class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>

    </div>
</div>