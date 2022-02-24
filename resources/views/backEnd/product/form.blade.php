<div class="row row-sm">
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Name: <span class="tx-danger">*</span></label>
            <input class="form-control" name="product_name" placeholder="Enter Name"
                value="{{ $product->product_name ?? ''}}" type="text">
                <input class="form-control" name="campaign_id" placeholder="Enter Name"
                value="{{$id}}" type="hidden" >
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Image: <span class="tx-danger">*</span></label>
            <input class="form-control" name="product_image" id="profile-img" placeholder="Enter Banner"
                value="" type="file">
        </div>
    </div>
    <div class="col-4">
        <div class="form-group">
            <img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-100"
                id="profile-img-tag" @if(Request::is('admin/product/*/edit'))
                src="{{ $product->product_image ?? ''}}" @endif>
        </div>
    </div>

</div>
<br>
<div class="row row-sm">
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Amount: </label>
            <input class="form-control" name="amount" placeholder="Enter Amount"
                value="{{ $product->amount ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Image 2<span class="tx-danger">*</span></label>
            <input class="form-control" name="product_image2"  placeholder="Enter URL"
                value="{{ $product->product_image2 ?? ''}}" type="file">
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Image 3 </label>
            <input class="form-control" name="product_image3" placeholder="Enter URL"
                value="{{ $product->product_image3 ?? ''}}" type="file">
        </div>
    </div>

</div>
<br>
<div class="row row-sm">
<div class="col-6">
        <div class="form-group">
            <label class="form-label">Status: <span class="tx-danger">*</span></label>
            <select name="status" value="{{ $product->status ?? ''}}" class="form-control">
                <!--placeholder-->
                @if(Request::is('admin/product/edit/*')) >
                @if($product->status=='1')
                <option value="1">Active</option>
                <option value="2" >Inactive</option>


                @else
                <option value="2" >Inactive</option>
                <option value="1">Active</option>

                @endif
                @else

                <option value="1">Active</option>
                <option value="2">Inactive</option>
                @endif
            </select>
        </div>
    </div> 

    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Shipping Charges: </label>
            <input class="form-control" name="shipping_charges" placeholder="Enter Amount"
                value="{{ $product->shipping_charges ?? ''}}" type="tel">
        </div>
    </div>
</div>
<br/>
<div class="row row-sm">
    <div class="col-12">
        <div class="form-group mg-b-0">
                 <label class="form-label"> Description:</label>
            <textarea class="form-control summernote" name="description" rows="3" placeholder="" >{!!$product->description ??''!!}</textarea>

        </div>
    </div>
</div>
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
         @php
            
$campaign_id=App\Models\Campaign_product::where('id',$id)->select('campaign_id')->pluck('campaign_id')->first();
       // dd($campaign_id);
        @endphp
        @if(Request::is('admin/product/*/edit'))
        <a href="{{url('admin/pproduct/'.$campaign_id)}}"
        class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        @else
        <a href="{{url('admin/pproduct/'.$id)}}"
            class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        @endif
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
    </div>
</div>