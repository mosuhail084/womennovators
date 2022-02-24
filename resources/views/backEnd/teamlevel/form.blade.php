<div class="card">
<div class="row row-sm">
    <div class="col-3">
    </div>
   
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label" style="align-content: center">Add Role Name <span class="tx-danger">*</span></label>
           
                <input class="form-control" name="rolename" type="text" value="{{ $teamrole->rolename ??''}}" placeholder="Enter Role">
            
        </div>
        <br>
        <div class="form-group mg-b-0">
            <label class="form-label" style="align-content: center">Assign Role <span class="tx-danger">*</span></label>
           
            <ul>
                @foreach($page as $pageData)
                <li>
                    <label class="form-check-label" for="exampleCheck1">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="page_id[]"
                            value=" {{ $pageData->id }}" @if(Request::is('admin/teamlevel/*/edit')) 
                            @foreach($teamlevel as $team)
                           
                             {{ $pageData->id == $team->menu_id ? 'checked=checked' : '' }} @endforeach @endif>
                        {{ $pageData->menu_name }}</label>
                </li>

                @endforeach
            </ul>
            
        </div>
    </div>
   

    
</div><br>

   
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/teamlevel')}}" class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>

    </div>
</div>
</div>