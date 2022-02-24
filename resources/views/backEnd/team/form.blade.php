<div class="row row-sm">
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Title: <span class="tx-danger">*</span></label>
            <select class="form-control " name="title_id">
                @if(Request::is('admin/team/*/edit'))> <option disabled
                style="display:block">Please Select One</option>

                @foreach($title as $titleData)
                <option value="{{$titleData->id}}"
                    {{$team->title->id== $titleData->id??'' ?'selected="selected"' : ''}}>
                    {{$titleData->title }}</option>
                @endforeach
                @else
                
                <option value="">Please Select One</option>
                @foreach($title as $titleData)
                <option value="{{$titleData->id}}">
                    {{ $titleData->title }}</option>

                @endforeach
                @endif
        </select>
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">team Name: <span class="tx-danger">*</span></label>
            <input class="form-control" name="team_member_name" placeholder="Enter team Name"
                value="{{ $team->team_member_name ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Mobile Number: <span class="tx-danger">*</span></label>
            <input class="form-control" name="mobile_no" placeholder="Enter Mobile Number"
                value="{{ $team->mobile_no ?? ''}}" type="text">
        </div>
    </div>

    
</div><br>
<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Email: <span class="tx-danger">*</span></label>
            <input class="form-control" name="email" placeholder="Enter Email"
            value="{{ $team->email?? ''}}" type="text">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Profile Pic: <span class="tx-danger">*</span></label>
            <input class="form-control" name="profilepic" 
              type="file">
        </div>
    </div>
   

    
</div>
<br>
<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"><b>Assign Role</b> <span class="tx-danger">*</span></label>
            <select class="form-control " name="role_id">
                @if(Request::is('admin/team/*/edit'))> <option disabled
                style="display:block">Please Select One</option>    
                @foreach($teamrole as $teamroleData)
                <option value="{{$teamroleData->id}}"
                    {{$team->role->id== $teamroleData->id??'' ?'selected="selected"' : ''}}>
                    {{$teamroleData->rolename }}</option>
                @endforeach     
                @else
                <option value="">Please Select One</option>
                @foreach($teamrole as $teamroleData)
                <option value="{{$teamroleData->id}}">
                    {{ $teamroleData->rolename }}</option>    
                @endforeach
                @endif
             </select>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Status: <span class="tx-danger">*</span></label>
            <select class="form-control " name="status">
             
                @if(Request::is('admin/team/*/edit')) >
                @if($team->status=='0')
                <option value="0">InActive</option>
                <option value="1">Active</option>


                @else
                <option value="1">Active</option>
                <option value="0">Inactive</option>

                @endif
                @else

                <option value="0">InActive</option>
                <option value="1">Active</option>
                @endif
                
             </select>
        </div>
    </div>
    

    
</div><br>
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/team')}}" class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>

    </div>
</div>