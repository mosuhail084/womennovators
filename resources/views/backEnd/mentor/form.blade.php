<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Name: <span class="tx-danger">*</span></label>
            <input class="form-control" name="name" placeholder="Enter Name"
                value="{{ $mentor->name ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Contact Details: <span class="tx-danger">*</span></label>
            <input class="form-control" name="phone_no" placeholder="Enter Phone Number"
                value="{{ $mentor->phone_no ?? ''}}" type="number">
        </div>
    </div>
    
    
    
</div>
<br>
<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Linkedin url: <span class="tx-danger">*</span></label>
            <input class="form-control" name="linkedin_url" placeholder="Enter Linkedin Url"
                value="{{ $mentor->linkedin_url ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Experience: <span class="tx-danger">*</span></label>
            <input class="form-control" name="field_exp" placeholder="Enter Experience"
                value="{{ $mentor->	field_exp ?? ''}}" type="text">
        </div>
    </div>
</div>
<br>
    <div class="row row-sm">    
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">country: <span class="tx-danger">*</span></label>
            <select name="country"  class="js-example-basic-single3 form-control common-show"id="category" required >
                @php
                $country=DB::table('allcountries')->get();
                @endphp
                
                <option value="" >-----</option>
                @foreach($country as $stateData)
                <option value="{{$stateData->id}}" @if(!empty($mentor->
                country) && $mentor->
                country==$stateData->id) selected @endif>
                {{ $stateData->name }}</option>
                @endforeach
           
           </select>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Purpose: <span class="tx-danger">*</span></label>
            <input class="form-control" name="statement_of_purpose" placeholder="Enter Purpose"
                value="{{ $mentor->statement_of_purpose ?? ''}}" type="text">
        </div>
    </div>
</div>
<br>  
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/mentor')}}"
            class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

