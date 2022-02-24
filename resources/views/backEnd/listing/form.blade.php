<div class="row row-sm">
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Store Name: <span class="tx-danger">*</span></label>
            <input class="form-control" name="storename" value="{{ $listing->storename ?? ''}}"
                placeholder="Enter Store Name" type="text">
        </div>
    </div>
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Year of Established: <span class="tx-danger">*</span></label>
            <input class="form-control" name="yearofest" value="{{ $listing->yearofest ?? ''}}"
                placeholder="Enter Year of Established" type="text">
        </div>
    </div>
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">State Name: <span class="tx-danger">*</span></label>
            <select class="form-control" id="category" name="state_id"
           > <option value="">Please Select One
            </option>

            @foreach($state as $stateData)
            <option value="{{$stateData->id}}" @if(!empty($listing->
                state_id) && $listing->
                state_id==$stateData->id) selected @endif>
                {{ $stateData->statename }}</option>
            @endforeach
        </select>
        </div>
    </div>
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">City Name: <span class="tx-danger">*</span></label>
            <select class="form-control" id="subcategory_id" name="city_id">
                @if(!empty($listing->city_id))
                <option value="{{ $listing->city_id }}">
                    {{ App\Models\City::where('id',$listing->city_id)->first()->cityname ??'' }}
                </option>

                @endif 
            </select>
        </div>
    </div>
</div>
<br>
<div class="row row-sm">
                        
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Contact Person: <span class="tx-danger">*</span></label>
            <input class="form-control" name="contactperson" value="{{ $listing->contactperson ?? ''}}"
                placeholder="Enter Contact Person" type="text">
        </div>
    </div>
                        
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Email: <span class="tx-danger">*</span></label>
            <input class="form-control" name="email" value="{{ $listing->email ?? ''}}"
                placeholder="Enter Email" type="email">
        </div>
    </div>
                        
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Phone No: <span class="tx-danger">*</span></label>
            <input class="form-control" name="phone" value="{{ $listing->phone ?? ''}}"
                placeholder="Enter Phone No" type="number">
        </div>
    </div>
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Add On Home Page: <span class="tx-danger">*</span></label>
            <select class="form-control" name="addonhomepage">
                @if(Request::is('admin/listing/edit/*')) >
                @if($listing->addonhomepage=='0')
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
                        
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Annual Turn Over: <span class="tx-danger">*</span></label>
            <input class="form-control" name="annualturnover" value="{{ $listing->annualturnover ?? ''}}"
                placeholder="Enter Annual Turn Over" type="text">
        </div>
    </div>
                        
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Latitude: <span class="tx-danger">*</span></label>
            <input class="form-control" name="latitude" value="{{ $listing->latitude ?? ''}}"
                placeholder="Enter Latitude" type="text">
        </div>
    </div>
                        
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Longitude: <span class="tx-danger">*</span></label>
            <input class="form-control" name="longitude" value="{{ $listing->longitude ?? ''}}"
                placeholder="Enter Longitude" type="text">
        </div>
    </div>
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Postal Code: <span class="tx-danger">*</span></label>
            <input class="form-control" name="postalcode" value="{{ $listing->postalcode ?? ''}}"
                placeholder="Enter Postal Code" type="text">
        </div>
    </div>
   
</div><br>
<div class="row row-sm">
                        
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Website: <span class="tx-danger">*</span></label>
            <input class="form-control" name="website" value="{{ $listing->website ?? ''}}"
                placeholder="Enter Website" type="text">
        </div>
    </div>
                        
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Trusted Business: <span class="tx-danger">*</span></label>
            <select class="form-control" name="trustedbusiness">
                @if(Request::is('admin/listing/*/edit')) >
                @if($listing->trustedbusiness=='0')
                <option value="0">nontrusted</option>
                <option value="1">trusted</option>


                @else
                <option value="1">trusted</option>
                <option value="0">nontrusted</option>
                
                @endif
                @else

                <option value="">Please Select One</option>
                <option value="0">nontrusted</option>
                <option value="1">trusted</option>
                @endif
            </select>
        </div>
    </div>
                        
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Status: <span class="tx-danger">*</span></label>
            <select class="form-control" name="status">
                @if(Request::is('admin/listing/edit/*')) >
                @if($listing->status=='0')
                <option value="0">active</option>
                <option value="1">inactive</option>


                @else
                <option value="1">inactive</option>
                <option value="0">active</option>
                
                @endif
                @else

                <option value="0">active</option>
                <option value="1">inactive</option>
                @endif
            </select>
        </div>
    </div>
    
   
</div><br>
<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Nature of Business: <span class="tx-danger">*</span></label>
            <select class="form-control" name="natureofbusiness_id"
            > <option value="">Please Select One
            </option>

            @foreach($nature as $natureData)
            <option value="{{$natureData->id}}" @if(!empty($listing->
                natureofbusiness_id) && $listing->
                natureofbusiness_id==$natureData->id) selected @endif>
                {{ $natureData->naturebusiness }}</option>
            @endforeach
        </select>

        </div>
    </div>
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Logo: <span class="tx-danger">*</span></label>
            <input class="form-control" name="logo" id="profile-img"
                placeholder="Enter firstname" type="file">
            <span><small> Standard Size: 700 (width) X 700 (height)</small></span>

        </div>
    </div>
    <div class="col-3">
        <div class="form-group">
            <img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-100"
                id="profile-img-tag" @if(Request::is('admin/listing/*/edit'))
                src="{{ $listing->logo ?? ''}}" @endif>
        </div>
    </div>
</div>
<br>
<div class="row row-sm">
   
    <div class="col-12">
        <div class="form-group mg-b-0">
            <label class="form-label"> Complete Address: <span class="tx-danger">*</span></label>
            <textarea class="form-control" name="address" rows="3" placeholder="Enter Complete Address">{!!$listing->address ?? ''!!}</textarea>

        </div>
    </div>
</div><br>
<div class="row row-sm">
    <div class="col-12">
        <div class="form-group mg-b-0">
            <label class="form-label"> Description: <span class="tx-danger">*</span></label>
            <textarea class="centered form-control"  id="editor" name="description" rows="3" placeholder="Enter Description">{!!$listing->description ?? ''!!}</textarea>

        </div>
    </div>
</div>
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/sector')}}" class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(function(){
       $('#category').on('change',function(){
           var category_id =$(this).val();

        $.ajax({
            type: "GET",
            url: "{{ url('admin/listing/create') }}",
            data: "category_id="+category_id,
            success : function(res){
            
                $('#subcategory_id').html(res);

                
            },
            error : function(){

            },
        });
       });
       
    }); 
  
     
    </script>
    <script src="{{ url('backEnd/ckeditor/ckeditor.js')}}"></script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ), {
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            } )
            .then( editor => {
                window.editor = editor;
            } )
            .catch( err => {
                console.error( err.stack );
            } );
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor1' ), {
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            } )
            .then( editor => {
                window.editor = editor;
            } )
            .catch( err => {
                console.error( err.stack );
            } );
    </script>