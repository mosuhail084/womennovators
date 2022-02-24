<div class="row row-sm">
    
    <div class="col-4">
        <div class="form-group mg-b-0">
          
           
            <label class="form-label">Team Member List <span class="tx-danger">*</span></label>
            <select class="form-control" id="aircraft_name"  name="teammember_id"
            @if(Request::is('admin/teamlogin/*/edit'))> <option disabled
            style="display:block">Please Select One</option>

            @foreach($teammemberlist as $teammemberlistData)
            <option value="{{$teammemberlistData->id}}"
                {{$teammember->teammemberlist->id== $teammemberlistData->id??'' ?'selected="selected"' : ''}}>
                {{$teammemberlistData->teammemberlist }}</option>
            @endforeach


            @else
           
            <option value="">Please Select One</option>
            @foreach($teammemberlist as $teammemberlistData)
            <option value="{{$teammemberlistData->email}}">
                {{ $teammemberlistData->team_member_name }}</option>

            @endforeach
            @endif
        </select>
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Login Name: <span class="tx-danger">*</span></label>
            <input class="form-control" id="aircraft_id" value="{{ $teammember->email ?? ''}}"  name="email" placeholder="Enter Email"
            type="text">
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Password <span class="tx-danger">*</span></label>
            <input class="form-control" name="password" placeholder="Enter password"
            value="{{ $teammember->password ?? ''}}" type="password">
        </div>
    </div>

    
</div><br>

<br>
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/team')}}" class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>

    </div>
</div>