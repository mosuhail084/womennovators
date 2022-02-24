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
            <input class="form-control" name="phone" value="{{ $user->phone ?? ''}}"
                placeholder="Enter Mobile Number" type="text">
        </div>
    </div>
</div><br>
<div class="row row-sm">
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label"> Events: <span class="tx-danger">*</span></label>
            <select class="form-control " name="event_id"
            @if(Request::is('admin/user/*/edit'))> <option disabled
            style="display:block">Please Select One</option>

            @foreach($event as $eventData)
            <option value="{{$eventData->id}}"
                {{$user->event_id== $eventData->id??'' ?'selected="selected"' : ''}}>
                {{$eventData->event_name }}</option>
            @endforeach


            @else
            <option></option>
            <option value="">Please Select One</option>
            @foreach($event as $eventData)
            <option value="{{$eventData->id}}">
                {{ $eventData->event_name }}</option>

            @endforeach
            @endif
        </select>
        </div>
    </div>

    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Category: <span class="tx-danger">*</span></label>
            <select class="form-control " name="usercategory"
            @if(Request::is('admin/user/*/edit'))> <option disabled
            style="display:block">Please Select One</option>

            @foreach($category as $categoryData)
            <option value="{{$categoryData->id}}"
                {{$user->usercategory== $categoryData->id??'' ?'selected="selected"' : ''}}>
                {{$categoryData->categoryname }}</option>
            @endforeach


            @else
            <option></option>
            <option value="">Please Select One</option>
            @foreach($category as $categoryData)
            <option value="{{$categoryData->id}}">
                {{ $categoryData->categoryname }}</option>

            @endforeach
            @endif
        </select>
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Youtube Link: <span class="tx-danger">*</span></label>
            <input class="form-control" name="youtubelink" value="{{ $user->youtubelink ?? ''}}"
                placeholder="Enter YouTube Link" type="text">
        </div>
    </div>
</div><br>
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/user')}}" class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>

    </div>
</div>