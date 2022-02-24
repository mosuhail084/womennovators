<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Name: <span class="tx-danger">*</span></label>
            <input class="form-control" name="name" placeholder="Enter Name"
                value="{{ $award->name ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Description <span class="tx-danger">*</span></label>
            <input class="form-control" name="description" placeholder="Enter Description"
                value="{{ $award->description ?? ''}}" type="text">
        </div>
    </div>
    
    
    
</div>
<br>
<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">start date: <span class="tx-danger"></span></label>
            <input class="form-control" name="start" placeholder="Enter starting date"
                value="{{ $award->start ?? ''}}" type="date">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> End date: <span class="tx-danger"></span></label>
            <input class="form-control" name="end" placeholder="Enter end date"
                value="{{ $award->end ?? ''}}" type="date">
        </div>
    </div>
    </div>


   

<br>
<div class="row row-sm">
   
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Image: <span class="tx-danger"></span></label>
            <input class="form-control" name="image" placeholder="Upload Image"
                value="{{ $award->Image ?? ''}}" type="file">
        </div>
    </div>
</div>
   

<br>
   

  


    </div>
    
    
</div>
<br>  
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/stories')}}"
            class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

