
<div class="row row-sm">
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label"> Event: <span class="tx-danger">*</span></label>
            <select class="form-control " name="event_id" id="event_id">
                           
                <option value="">Please Select One</option>
                @foreach($event as $eventData)
                <option value="{{$eventData->id}}" >
                    {{ $eventData->event_name  }}</option>
                @endforeach
            </select>
        </div>
    </div>
    @php
    //$juryid=explode(',',$event->jury_id ?? '');
    @endphp
       <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Type: <span class="tx-danger">*</span></label>
            <select class="form-control " name="type" id="type" >
                           
                <option value="">Please Select One</option>
                <option value="jury">Jury</option>
                <option value="face">Face</option>
            </select>
        </div>
    </div>
    <div class="col-3" id="Jury">
        <div class="form-group mg-b-0">
            <label class="form-label">Jury: <span class="tx-danger">*</span></label>
            <select  multiple="multiple" onchange="console.log($(this).children(':selected').length)"class="form-control select2"
                name="jury_id[]" id="jury_id">
              
            </select>
        </div>
    </div>
    <div class="col-3" id="Face">
        <div class="form-group mg-b-0">
            <label class="form-label">Faces: <span class="tx-danger">*</span></label>
            <select  multiple="multiple" onchange="console.log($(this).children(':selected').length)"class="form-control select2"
                name="user_id[]" id="user_id">
                
            </select>
        </div>
    </div>
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Template: <span class="tx-danger">*</span></label>
           
            <select class="form-control " name="template" id="template">
                           
                <option value="">Please Select One</option>
                <option value="1">Face Template</option>
                <option value="2">Jury Template</option>
            </select>
        </div>
    </div>
</div>
<br>

<br>
@php
$temp=DB::table('templates')->where('id',1)->first();
//print_r($temp);die;
@endphp
@if($temp->id==1)

<div class="row row-sm" id="div1">
    <div class="col-12">
        <div class="form-group mg-b-0">
                 <label class="form-label"> Description: <span class="tx-danger">*</span></label>
            <textarea class="form-control summernote" name="description" rows="3" placeholder="" >{!!$temp->description!!}</textarea>

        </div>
    </div>
</div>
@else
@endif
@php
$temp=DB::table('templates')->where('id',2)->first();
//print_r($temp);die;
@endphp
@if($temp->id==2)
<div class="row row-sm" id="div2">
    <div class="col-12">
        <div class="form-group mg-b-0">
            
            <label class="form-label"> Description: <span class="tx-danger">*</span></label>
            <textarea class="form-control summernote" name="description" rows="3" placeholder="" >{!!$temp->description!!}</textarea>

        </div>
    </div>
</div>
@else
@endif
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/mail')}}" class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Send</button>

    </div>
</div>
