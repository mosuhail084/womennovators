<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Download Sample: <span class="tx-danger">*</span></label>
            <a href="{{ url('backEnd/datapoints.xlsx')}}" 
                                class="btn btn-success btn">excel</a>
        </div>
    </div>

    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">File: <span class="tx-danger">*</span></label>
            <input class="form-control" name="file" value="{{ $excel->email ?? ''}}"
                placeholder="Enter Email" type="file">
        </div>
    </div>
</div><br>
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/excel')}}" class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>

    </div>
</div>