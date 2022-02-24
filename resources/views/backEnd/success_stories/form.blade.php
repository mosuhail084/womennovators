<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Name of Incubatee: <span class="tx-danger">*</span></label>
            <input class="form-control" name="name" placeholder="Enter Name"
                value="{{ $stories->name ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Image: <span class="tx-danger"></span></label>
            <input class="form-control" name="image" placeholder="logo"
                value="{{ $stories->logo ?? ''}}" type="file">
        </div>
    </div>
    
    
    
</div>
<br>
<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Designation: <span class="tx-danger"></span></label>
            <input class="form-control" name="designation" placeholder="Enter designation"
                value="{{ $stories->designation ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Company: <span class="tx-danger"></span></label>
            <input class="form-control" name="company" placeholder="Enter Company"
                value="{{ $stories->company ?? ''}}" type="text">
        </div>
    </div>
    </div>
   

<br>
<div class="row row-sm">
   
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Industry: <span class="tx-danger"></span></label>
            <input class="form-control" name="industry" placeholder="Enter Industry"
                value="{{ $stories->industry ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Testimonial: <span class="tx-danger"></span></label>
            <input class="form-control" name="testimonial" placeholder="Enter Testimonial"
                value="{{ $stories->testimonial ?? ''}}" type="text">
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

