<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Name: <span class="tx-danger">*</span></label>
            <input class="form-control" name="name" placeholder="Enter Name"
                value="{{ $careerform->name ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Resume: <span class="tx-danger">*</span></label>
            <input class="form-control" name="resume" placeholder="Enter Experience"
                value="{{ $careerform->	resume ?? ''}}" type="file">
        </div>
    </div>
    
    
    
</div>

<br>
    <div class="row row-sm">    
        <div class="col-6">
            <div class="form-group mg-b-0">
                <label class="form-label"> Linkedin Url: <span class="tx-danger">*</span></label>
                <input class="form-control" name="linkedin_id" placeholder="Enter Linkedin Url"
                    value="{{ $careerform->linkedin_id	?? ''}}" type="text">
            </div>
        </div>
    
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Status: <span class="tx-danger">*</span></label>
            <select name="current_status" class="form-control">
               <!--placeholder-->
               @if(Request::is('user/blog/*/edit')) >
               @if($blog->current_status=='1')
               <option value="1">Pending</option>
               <option value="2">Approved</option>


               @else
               <option value="2">Approved</option>
               <option value="1">Pending</option>

               @endif
               @else

               <option value="1">Pending</option>
               <option value="2">Approved</option>
               @endif
            </select>
        </div>
    </div>
</div>
<br>  
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/careerform')}}"
            class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

