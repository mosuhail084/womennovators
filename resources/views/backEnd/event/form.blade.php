<div class="row row-sm">
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label"> State: <span class="tx-danger">*</span></label>
            <select class="form-control " name="state_id" id="category">
                           
                <option value="">Please Select One</option>
                @foreach($state as $stateData)
                <option value="{{$stateData->id}}" @if(!empty($event->
                    state_id) && $event->
                    state_id==$stateData->id) selected @endif>
                    {{ $stateData->statename }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label"> City: <span class="tx-danger">*</span></label>
            <select class="form-control " name="city_id" id="subcategory_id">
                @if(!empty($event->city_id))
                <option value="{{ $event->city_id }}">
                    {{ App\Models\City::where('id',$event->city_id)->first()->name??'' }}
                </option>

                @endif 
            </select>
        </div>
    </div>
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label"> Sector: </label>
            <select class="form-control" name="sector_id"
            @if(Request::is('admin/event/*/edit'))> <option disabled
            style="display:block">Please Select One</option>

            @foreach($sector as $sectorData)
            <option value="{{$sectorData->id}}"@if(!empty($event->
                sector_id) && $event->
                sector_id==$sectorData->id) selected @endif>
                {{ $sectorData->sectorname }}</option>
            @endforeach


            @else
            <option></option>
            <option value="">Please Select One</option>
            @foreach($sector as $sectorData)
            <option value="{{$sectorData->id}}">
                {{ $sectorData->sectorname }}</option>

            @endforeach
            @endif
        </select>
        </div>
    </div>
   <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label"> Type: </label>
            <select class="form-control" name="type"
            @if(Request::is('admin/event/*/edit')) >
            @if($event->type=='0')
            <option value="0">Marking</option>
            <option value="1">Comment</option>


            @else
            <option value="1">Comment</option>
            <option value="0">Marking</option>
            

            @endif
            @else
            <option >Please Select</option>
            <option value="0">Marking</option>
            <option value="1">Comment</option>
            

            @endif
        </select>
        </div>
    </div>

</div>
<br>
<div class="row row-sm">
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label"> Name: <span class="tx-danger">*</span></label>
            <input class="form-control" name="event_name" placeholder="Enter Name" value="{{ $event->event_name ?? ''}}"
                type="text">
        </div>
    </div>
    @php
    $juryid=explode(',',$event->jury_id ?? '');
    @endphp
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Jury: <span class="tx-danger">*</span></label>
            <select  multiple="multiple" onchange="console.log($(this).children(':selected').length)"class="form-control select2"
            name="jury_id[]">
            @if(Request::is('admin/event/*/edit'))
            @foreach ($eventjury as $eventjuryData)
            @foreach($jury as $juryData)
            <option value="{{ $juryData->id }}" @if($juryData->id==$eventjuryData->jury_id) 
                selected @endif>{{ $juryData->name }}</option>
            @endforeach
            
            @endforeach
            @else
            @foreach($jury as $juryData)
            <option value="{{ $juryData->id }}" >{{ $juryData->name }}</option>
            @endforeach
            @endif
        </select>
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Start Date: <span class="tx-danger">*</span></label>
            <input class="form-control" name="start_date" value="{{ $event->start_date ?? ''}}"
                placeholder="Enter Position" type="date">
        </div>
    </div>
    
</div>
<br>
<div class="row row-sm">
     <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Faces: <span class="tx-danger">*</span></label>
            <select  multiple="multiple" onchange="console.log($(this).children(':selected').length)"class="form-control select2"
                name="user_id[]">
                @if(Request::is('admin/event/*/edit'))
                @foreach ($userjury as $userjuryData)
                @foreach($user as $userData)
                <option value="{{ $userData->id }}" @if($userData->id==$userjuryData->user_id) 
                    selected @endif>{{ $userData->name }}</option>
                @endforeach
                
                @endforeach
                @else
                @foreach($user as $userData)
                <option value="{{ $userData->id }}" >{{ $userData->name }}</option>
                @endforeach
                @endif
            </select>
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Event Link:</label>
            <input class="form-control" name="event_link" 
                placeholder="Enter Link" type="text">
        </div>
    </div>
    <div class="col-2">
        <div class="form-group mg-b-0">
            <label class="form-label">Poster: </label>
            <input class="form-control" id="profile-img"  name="poster" 
                placeholder="Enter Position" type="file">
        </div>
    </div>
    <div class="col-2">
        <div class="form-group">
            <img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-100"
                id="profile-img-tag" @if(Request::is('admin/event/*/edit'))
                src="{{ $event->poster ?? ''}}" @endif>
        </div>
    </div>
</div>
<br>
<div class="row row-sm">
     <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">End Date: <span class="tx-danger">*</span></label>
            <input class="form-control" name="end_date" value="{{ $event->end_date ?? ''}}"
                placeholder="Enter Position" type="date">
        </div>
    </div>
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Time: <span class="tx-danger">*</span></label>
            <input class="form-control" name="time" value="{{ $event->time ?? ''}}"
                placeholder="Enter Time" type="time">
        </div>
    </div>
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Upload Excel: <span class="tx-danger">*</span></label>
            <input class="form-control" name="file" 
                placeholder="Enter Position" type="file">
        </div>
    </div>
    <div class="col-2">
        <div class="form-group mg-b-0">
            <label class="form-label">Sample Excel: <span class="tx-danger">*</span></label>
            <a href="{{ url('backEnd/WomenFacesFormss.xlsx')}}" class="btn btn-success btn">Download<i
                class="fas fa-file-excel" style="margin-left: 3px;font-size: 20px;height:15px;"></i></a>
        </div>
    </div>
</div><br>
<div class="row row-sm">
    <div class="col-12">
        <div class="form-group mg-b-0">
            <label class="form-label"> Description: <span class="tx-danger">*</span></label>
            <textarea class="form-control summernote" name="description" rows="3" placeholder="">{!!$event->description ?? ''!!}</textarea>

        </div>
    </div>
</div>
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/event')}}" class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>

    </div>
</div>
