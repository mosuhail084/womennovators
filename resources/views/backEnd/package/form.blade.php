<div class="row row-sm">
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Title: <span class="tx-danger">*</span></label>
            <input class="form-control" name="title" placeholder="Enter Name"
                value="{{ $package->title ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Amount: <span class="tx-danger">*</span></label>
            <input class="form-control" name="amount" placeholder="Enter Amount"
                value="{{ $package->amount ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Discount Amount: <span class="tx-danger">*</span></label>
            <input class="form-control" name="discountamount" placeholder="Enter Discount Amount"
                value="{{ $package->discountamount ?? ''}}" type="text">
        </div>
    </div>
</div>
<br>
<div class="row row-sm">
    <div class="col-6">
        <div class="form-group">
            <label class="form-label">Status: <span class="tx-danger">*</span></label>
            <select name="status" class="form-control">
                <!--placeholder-->
                @if(Request::is('admin/package/*/edit')) >
                @if($package->status=='1')
                <option value="1">Active</option>
                <option value="2">Inactive</option>


                @else
                <option value="2">Inactive</option>
                <option value="1">Active</option>

                @endif
                @else

                <option value="1">Active</option>
                <option value="2">Inactive</option>
                @endif
            </select>
        </div>
    </div>
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Image: <span class="tx-danger">*</span></label>
            <input class="form-control" name="image" id="profile-img"
                placeholder="Enter firstname" type="file">
            <span><small> Standard Size: 700 (width) X 700 (height)</small></span>

        </div>
    </div>
    <div class="col-3">
        <div class="form-group">
            <img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-100"
                id="profile-img-tag" @if(Request::is('admin/package/*/edit'))
                src="{{ $package->image ?? ''}}" @endif>
        </div>
    </div>
</div>
<div class="row row-sm">
    <div class="col-12">
        <div class="form-group mg-b-0">
            <label class="form-label"> Description: <span class="tx-danger">*</span></label>
            <textarea class="centered form-control"  id="editor" name="description" rows="3" placeholder="">{!!$event->description ?? ''!!}</textarea>

        </div>
    </div>
</div>
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/package')}}"
            class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
    </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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