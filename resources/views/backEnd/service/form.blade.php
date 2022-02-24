<div class="row">
   <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Category : <span class="tx-danger">*</span></label>
            <select name="category_id" id="category_id" class="form-control" >
               @foreach($data as $row)
              <option value="{{$row->id}}">{{$row->categoryname}}</option>
              @endforeach 
            </select>
        </div>
    </div>
    
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Title: <span class="tx-danger">*</span></label>
            <input class="form-control" name="title" placeholder="Enter Name"
                value="{{$service->title ??''}}" type="text">
        </div>
    </div>
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Service Name: <span class="tx-danger">*</span></label>
            <input class="form-control" name="service_name" placeholder="Enter Service Name"
                value="{{$service->service_name ??''}}" type="text">
        </div>
    </div>

    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Quantity: <span class="tx-danger">*</span></label>
            <input class="form-control" name="quantity" 
                value="{{$service->quantity ??''}}" type="number">
        </div>
      
    </div>
</div>  <br/>
<div class="row row-sm">
    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Price: <span class="tx-danger">*</span></label>
            <input class="form-control" name="price" 
                value="{{$service->price ??''}}" type="number">
        </div>
    </div>

    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Discount: <span class="tx-danger">*</span></label>
            <input class="form-control" name="discount" placeholder="Enter Discount"
                value="{{$service->discount ??''}}" type="text">
        </div>
    </div>

    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Status: <span class="tx-danger">*</span></label>
            <!-- <input class="form-control" name="discount" placeholder="Enter Discount"
                value="" type="text"> -->
                <select name="status" class="form-control">
                <!--placeholder-->
                @if(Request::is('admin/service/*/edit')) >
                @if($service->status=='1')
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

    <!-- <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Category tag: <span class="tx-danger">*</span></label>
            <input class="form-control" name="link" placeholder="Enter category tag"
                value="" type="text">
        </div>
    </div> -->

    <div class="col-3">
        <div class="form-group mg-b-0">
            <label class="form-label">Tag: <span class="tx-danger"></span></label>
            <input class="form-control" name="tag" 
                value="{{$service->tag ??''}}" type="text">
        </div>
    </div>
    
</div>
</br>
<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Banner Image: <span class="tx-danger"></span></label>
            <input class="form-control" name="banner_image" id="banner-img" type="file">
            <span><small> Standard Size: 700 (width) X 700 (height)</small></span>
        </div>
    </div>
    
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Service Image: <span class="tx-danger"></span></label>
            <input class="form-control" name="service_image" id="service-img" type="file">
            <span><small> Standard Size: 700 (width) X 700 (height)</small></span>

        </div>
    </div>
    
</div></br>
<!-- <div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Short Description: <span class="tx-danger"></span></label>
            <textarea class="centered form-control"  id="editor" name="short_description" rows="3" placeholder="Enter Description">{!!$product->description ?? ''!!}</textarea>
        </div>
    </div>

    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label"> Full Description: <span class="tx-danger"></span></label>
            <textarea class="centered form-control"  id="editor" name="full_description" rows="3" placeholder="Enter Description">{!!$product->description ?? ''!!}</textarea>
        </div>
    </div>
</div> -->

    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/service')}}"
            class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
    </div>
