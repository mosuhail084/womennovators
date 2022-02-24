<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Sector: <span class="tx-danger">*</span></label>
            <select class="form-control " name="sector_id" id="category">
                           
                <option value="">Please Select One</option>
                @foreach($sector as $sectorData)
                <option value="{{$sectorData->id}}" @if(!empty($sectormail->
                    sector_id) && $sectormail->
                    sector_id==$sectorData->id) selected @endif>
                    {{ $sectorData->sectorname }}</option>
                @endforeach
            </select>
        </div>
    </div>
    @php
    $store_id=explode(',',$sectormail->jury_id ?? '');

    @endphp
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> sectormail: <span class="tx-danger">*</span></label>
         
                <select  multiple="multiple" id="subcategory_id" onchange="console.log($(this).children(':selected').length)"class="form-control select2"
                name="jury_id[]">
                @foreach(App\Models\Jury::get() as $i => $sub)
                <option value="{{ $sub->id }}"@if(in_array($sub->id,$store_id) )
                    selected @endif>{{ $sub->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
  
</div>
<br>
<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Subject: <span class="tx-danger">*</span></label>
            <input class="form-control" name="subject" placeholder="Enter Name"
                value="{{ $sectormail->subject ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Attachment: <span class="tx-danger">*</span></label>
            <input class="form-control" name="attachment" placeholder="Enter Name"
                value="{{ $sectormail->subject ?? ''}}" type="file">
        </div>
    </div>
    <div class="col-3">
        <div class="form-group">
            <img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-100"
                id="profile-img-tag" @if(Request::is('admin/sectormail/*/edit'))
                src="{{ $sectormail->attachment ?? ''}}" @endif>
        </div>
    </div>
</div>
<div class="row row-sm" >
    <div class="col-12">
        <div class="form-group mg-b-0">
                 <label class="form-label"> Description: <span class="tx-danger">*</span></label>
            <textarea class="form-control summernote" name="msg" rows="3" placeholder="" >{!!$sectormail->msg ??''!!}</textarea>

        </div>
    </div>
</div>
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/category')}}"
            class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Send</button>
    </div>
</div>