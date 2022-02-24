<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Type: <span class="tx-danger">*</span></label>
            <select name="type" class="form-control">
                 @if(Request::is('admin/globalsummit/*/edit')) >
                                            @if($globalsummit->type=='1')
                                            <option value="1">Jury</option>
                                            <option value="0">Please select one</option>
                                            <option value="6">Chief guest</option>
                                            <option value="7">Guest of Honor</option>
                                            <option value="13">Moderators</option>
                                            <option value="19">Supported By</option>
                                            <option value="14">Awardees</option>
                                            <option value="15">Mentor</option>
                                            <option value="3">Faces</option>
                                            <option value="5">Incubatee</option>
                                            <option value="2">Influencer/Community Leaders</option>
                                            <option value="16">Event Sponsers</option>
                                            <option value="17">Event Partner</option>
                                            <option value="18">We-pitch Competion Partner</option>
                                            @elseif($globalsummit->type=='2')
                                            <option value="2">Influencer/Community Leaders</option>
                                            <option value="1">Jury</option>
                                            <option value="0">Please select one</option>
                                            <option value="6">Chief guest</option>
                                            <option value="7">Guest of Honor</option>
                                            <option value="13">Moderators</option>
                                            <option value="14">Awardees</option>
                                            <option value="15">Mentor</option>
                                            <option value="3">Faces</option>
                                            <option value="5">Incubatee</option>
                                            <option value="19">Supported By</option>
                                            
                                            <option value="16">Event Sponsers</option>
                                            <option value="17">Event Partner</option>
                                            <option value="18">We-pitch Competion Partner</option>
                                            @elseif($globalsummit->type=='3')
                                            <option value="3">Faces</option>
                                            <option value="2">Influencer/Community Leaders</option>
                                            <option value="1">Jury</option>
                                            <option value="0">Please select one</option>
                                            <option value="6">Chief guest</option>
                                            <option value="7">Guest of Honor</option>
                                            <option value="13">Moderators</option>
                                            <option value="14">Awardees</option>
                                            <option value="15">Mentor</option>
                                           <option value="19">Supported By</option>
                                            <option value="5">Incubatee</option>
                                            
                                            <option value="16">Event Sponsers</option>
                                            <option value="17">Event Partner</option>
                                            <option value="18">We-pitch Competion Partner</option>
                                            @elseif($globalsummit->type=='5')
                                            <option value="5">Incubatee</option>
                                            <option value="2">Influencer/Community Leaders</option>
                                            <option value="1">Jury</option>
                                            <option value="0">Please select one</option>
                                            <option value="6">Chief guest</option>
                                            <option value="7">Guest of Honor</option>
                                            <option value="13">Moderators</option>
                                            <option value="14">Awardees</option>
                                            <option value="15">Mentor</option>
                                            <option value="3">Faces</option>
                                           <option value="19">Supported By</option>
                                            
                                            <option value="16">Event Sponsers</option>
                                            <option value="17">Event Partner</option>
                                            <option value="18">We-pitch Competion Partner</option>
                                            @elseif($globalsummit->type=='6')
                                            <option value="6">Chief guest</option>
                                            <option value="2">Influencer/Community Leaders</option>
                                            <option value="1">Jury</option>
                                            <option value="0">Please select one</option>
                                            <option value="19">Supported By</option>
                                            <option value="7">Guest of Honor</option>
                                            <option value="13">Moderators</option>
                                            <option value="14">Awardees</option>
                                            <option value="15">Mentor</option>
                                            <option value="3">Faces</option>
                                            <option value="5">Incubatee</option>
                                            
                                            <option value="16">Event Sponsers</option>
                                            <option value="17">Event Partner</option>
                                            <option value="18">We-pitch Competion Partner</option>
                                            @elseif($globalsummit->type=='7')
                                            <option value="7">Guest of Honor</option>
                                            <option value="2">Influencer/Community Leaders</option>
                                            <option value="1">Jury</option>
                                            <option value="19">Supported By</option>
                                            <option value="0">Please select one</option>
                                            <option value="6">Chief guest</option>
                                           
                                            <option value="13">Moderators</option>
                                            <option value="14">Awardees</option>
                                            <option value="15">Mentor</option>
                                            <option value="3">Faces</option>
                                            <option value="5">Incubatee</option>
                                            
                                            <option value="16">Event Sponsers</option>
                                            <option value="17">Event Partner</option>
                                            <option value="18">We-pitch Competion Partner</option>
                                            @elseif($globalsummit->type=='13')
                                            <option value="13">Moderators</option>
                                            <option value="2">Influencer/Community Leaders</option>
                                            <option value="1">Jury</option>
                                            <option value="0">Please select one</option>
                                            <option value="6">Chief guest</option>
                                            <option value="7">Guest of Honor</option>
                                         <option value="19">Supported By</option>
                                            <option value="14">Awardees</option>
                                            <option value="15">Mentor</option>
                                            <option value="3">Faces</option>
                                            <option value="5">Incubatee</option>
                                            
                                            <option value="16">Event Sponsers</option>
                                            <option value="17">Event Partner</option>
                                            <option value="18">We-pitch Competion Partner</option>
                                            @elseif($globalsummit->type=='14')
                                            <option value="14">Awardees</option>
                                            <option value="2">Influencer/Community Leaders</option>
                                            <option value="1">Jury</option>
                                            <option value="0">Please select one</option>
                                            <option value="6">Chief guest</option>
                                            <option value="7">Guest of Honor</option>
                                            <option value="13">Moderators</option>
                                         <option value="19">Supported By</option>
                                            <option value="15">Mentor</option>
                                            <option value="3">Faces</option>
                                            <option value="5">Incubatee</option>
                                            
                                            <option value="16">Event Sponsers</option>
                                            <option value="17">Event Partner</option>
                                            <option value="18">We-pitch Competion Partner</option>
                                            @elseif($globalsummit->type=='15')
                                            <option value="15">Mentor</option>
                                            <option value="14">Awardees</option>
                                            <option value="2">Influencer/Community Leaders</option>
                                            <option value="1">Jury</option>
                                            <option value="0">Please select one</option>
                                            <option value="6">Chief guest</option>
                                            <option value="7">Guest of Honor</option>
                                            <option value="13">Moderators</option>
                                         <option value="19">Supported By</option>
                                            
                                            <option value="3">Faces</option>
                                            <option value="5">Incubatee</option>
                                            
                                            <option value="16">Event Sponsers</option>
                                            <option value="17">Event Partner</option>
                                            <option value="18">We-pitch Competion Partner</option>
                                            @elseif($globalsummit->type=='16')
                                            <option value="16">Event Sponsers</option>
                                            <option value="14">Awardees</option>
                                            <option value="2">Influencer/Community Leaders</option>
                                            <option value="1">Jury</option>
                                            <option value="19">Supported By</option>
                                            <option value="0">Please select one</option>
                                            <option value="6">Chief guest</option>
                                            <option value="7">Guest of Honor</option>
                                            <option value="13">Moderators</option>
                                         
                                            <option value="15">Mentor</option>
                                            <option value="3">Faces</option>
                                            <option value="5">Incubatee</option>
                                            
                                          
                                            <option value="17">Event Partner</option>
                                            <option value="18">We-pitch Competion Partner</option>
                                            @elseif($globalsummit->type=='17')
                                            <option value="17">Event Partner</option>
                                            <option value="14">Awardees</option>
                                            <option value="19">Supported By</option>
                                            <option value="2">Influencer/Community Leaders</option>
                                            <option value="1">Jury</option>
                                            <option value="0">Please select one</option>
                                            <option value="6">Chief guest</option>
                                            <option value="7">Guest of Honor</option>
                                            <option value="13">Moderators</option>
                                         
                                            <option value="15">Mentor</option>
                                            <option value="3">Faces</option>
                                            <option value="5">Incubatee</option>
                                            
                                            <option value="16">Event Sponsers</option>
                                           
                                            <option value="18">We-pitch Competion Partner</option>
                                            @elseif($globalsummit->type=='18')
                                            <option value="18">We-pitch Competion Partner</option>
                                            <option value="17">Event Partner</option>
                                            <option value="14">Awardees</option>
                                            <option value="2">Influencer/Community Leaders</option>
                                            <option value="1">Jury</option>
                                            <option value="0">Please select one</option>
                                            <option value="6">Chief guest</option>
                                            <option value="7">Guest of Honor</option>
                                            <option value="13">Moderators</option>
                                         
                                            <option value="15">Mentor</option>
                                            <option value="3">Faces</option>
                                            <option value="5">Incubatee</option>
                                            <option value="19">Supported By</option>
                                            <option value="16">Event Sponsers</option>
                                           
                                            @elseif($globalsummit->type=='19')
                                            <option value="19">Supported By</option>
                                            <option value="18">We-pitch Competion Partner</option>
                                            <option value="17">Event Partner</option>
                                            <option value="14">Awardees</option>
                                            <option value="2">Influencer/Community Leaders</option>
                                            <option value="1">Jury</option>
                                            <option value="0">Please select one</option>
                                            <option value="6">Chief guest</option>
                                            <option value="7">Guest of Honor</option>
                                            <option value="13">Moderators</option>
                                         
                                            <option value="15">Mentor</option>
                                            <option value="3">Faces</option>
                                            <option value="5">Incubatee</option>
                                            
                                            <option value="16">Event Sponsers</option>
                                            
                                            @else
                                            <option value="0">Please select one</option>
                                            <option value="6">Chief guest</option>
                                            <option value="7">Guest of Honor</option>
                                            <option value="13">Moderators</option>
                                            <option value="14">Awardees</option>
                                            <option value="15">Mentor</option>
                                            <option value="3">Faces</option>
                                            <option value="5">Incubatee</option>
                                            <option value="1">Jury</option>
                                            <option value="2">Influencer/Community Leaders</option>
                                            <option value="16">Event Sponsers</option>
                                            <option value="17">Event Partner</option>
                                            <option value="18">We-pitch Competion Partner</option>
                                            <option value="19">Supported By</option>
                                            
                                            @endif
                                            @else
                                            <option value="0">Please select one</option>
                                            <option value="6">Chief guest</option>
                                            <option value="7">Guest of Honor</option>
                                            <option value="13">Moderators</option>
                                            <option value="14">Awardees</option>
                                            <option value="15">Mentor</option>
                                            <option value="3">Faces</option>
                                            <option value="5">Incubatee</option>
                                            <option value="19">Supported By</option>
                                            <option value="1">Jury</option>
                                            <option value="2">Influencer/Community Leaders</option>
                                            <option value="16">Event Sponsers</option>
                                            <option value="17">Event Partner</option>
                                            <option value="18">We-pitch Competion Partner</option>
                                            @endif
             </select>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Image: <span class="tx-danger">*</span></label>
            <input class="form-control" name="image" placeholder="Enter Title"
                value="{{ $globalsummit->image ?? ''}}" type="file">
        </div>
    </div>
</div>
<br>
<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Name: <span class="tx-danger"></span></label>
            <input class="form-control" name="name" placeholder="Enter Title"
                value="{{ $globalsummit->name ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Designation: <span class="tx-danger"></span></label>
            <input class="form-control" name="designation" placeholder="Enter Title"
                value="{{ $globalsummit->designation ?? ''}}" type="text">
        </div>
    </div>
</div>
<br>

<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Company Name: <span class="tx-danger"></span></label>
            <input class="form-control" name="company_name" placeholder="Enter Company Name"
                value="{{ $globalsummit->company_name ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">About Us: <span class="tx-danger"></span></label>
            <input class="form-control" name="about_us" placeholder="About Us"
                value="{{ $globalsummit->about_us ?? ''}}" type="text">
        </div>
    </div>
</div>
<br>
<div class="row row-sm">

                            <div class="col-6">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">Add On Home Page: <span class="tx-danger">*</span></label>
                                    <select class="form-control" name="sequence">
                                        @if(Request::is('admin/globalsummit/*/edit')) >
                                        @if($globalsummit->sequence=='0')
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>


                                        @else
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                        
                                        @endif
                                        @else

                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                           
                        </div>
<br>
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/globalsummit')}}" class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
    </div>
</div>
