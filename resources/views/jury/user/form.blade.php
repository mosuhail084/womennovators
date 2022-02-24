<div class="row row-sm">
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label"> Name: <span class="tx-danger">*</span></label>
            <input class="form-control" name="name" placeholder="Enter Name"
                value="{{ $user->name ?? ''}}" type="text">
        </div>
    </div>

    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Email: <span class="tx-danger">*</span></label>
            <input class="form-control" name="email" value="{{ $user->email ?? ''}}"
                placeholder="Enter Email" type="text">
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Mobile Number: <span class="tx-danger">*</span></label>
            <input class="form-control" name="mobile_number" value="{{ $user->mobile_number ?? ''}}"
                placeholder="Enter Position" type="text">
        </div>
    </div>
</div><br>
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/user')}}" class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>

    </div>
</div>