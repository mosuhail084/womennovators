
<div class="row row-sm">
     <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Image: <span class="tx-danger">*</span></label>
          
            <img alt="Responsive image" class=""
                                    src="https://covidcaregiver.org/backEnd/image/maskindia/{{$mask->image ??''}}" style=" width:450px; height:500px;">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Status: <span class="tx-danger">*</span></label>
            <select class="form-control " name="status">
             
                @if(Request::is('admin/mask/*/edit')) >
                @if($mask->status=='0')
                <option value="0">Reject</option>
                <option value="1">Approve</option>


                @else
                <option value="1">Approve</option>
                <option value="0">Reject</option>

                @endif
                @else

                <option value="0">Reject</option>
                <option value="1">Approve</option>
                @endif
                
             </select>
        </div>
    </div>
</div>
<br>

<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/mask')}}" class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
    </div>
</div>
