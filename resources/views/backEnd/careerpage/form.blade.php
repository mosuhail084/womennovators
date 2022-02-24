<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Title: <span class="tx-danger">*</span></label>
            <input class="form-control" name="title" placeholder="Enter Title"
                value="{{ $careerpage->title ?? ''}}" type="text" required>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Experience: <span class="tx-danger">*</span></label>
            <input class="form-control" name="exp" placeholder="Enter Experience"
                value="{{ $careerpage->exp ?? ''}}" type="number" step=0.01 required>
        </div>
    </div>
    
    
    
</div>
<br>
<div class="row row-sm">
    <div class="col-12">
        <div class="form-group mg-b-0">
           
            <label class="form-label"> Description: <span class="tx-danger">*</span></label>
            <textarea class="form-control summernote" name="desc"   rows="3" placeholder=""  required>{!!$careerpage->desc ??'' !!}</textarea>

        </div>
    </div>
    </div>
   

<br>
    <div class="row row-sm">    
        <div class="col-6">
            <div class="form-group mg-b-0">
                <label class="form-label"> Location: <span class="tx-danger">*</span></label>
                <input class="form-control" name="location" placeholder="Enter Location"
                    value="{{ $careerpage->location ?? ''}}" type="text" required>
            </div>
        </div>
    
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Status: <span class="tx-danger">*</span></label>
            <select name="status" class="form-control" required>
               <!--placeholder-->
               @if(Request::is('user/blog/*/edit')) >
               @if($blog->status=='1')
               <option value="1">Active</option>
               <option value="2">Inactive</option>


               @else
               <option value="2">Inactive</option>
               <option value="1">Active</option>

               @endif
               @else

               <option value="1">Active</option>
               <option value="2">Inactive</option>
               @endif
            </select>
        </div>
    </div>
</div>
<br>  
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/careerpage')}}"
            class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

