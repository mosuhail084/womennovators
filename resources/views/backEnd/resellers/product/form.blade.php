<div class="row row-sm">
    
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Category Name: <span class="tx-danger">*</span></label>
            <select class="form-control" id="category" name="category_id"
           > <option value="">Please Select One
            </option>

            @foreach($category as $categoryData)
            <option value="{{$categoryData->id}}" @if(!empty($product->
                category_id) && $product->
                category_id==$categoryData->id) selected @endif>
                {{ $categoryData->categoryname }}</option>
            @endforeach
        </select>
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Subcategory Name: <span class="tx-danger">*</span></label>
            <select class="form-control" id="subcategory_id" name="subcategory_id">
                @if(!empty($product->subcategory_id))
                <option value="{{ $product->subcategory_id }}">
                    {{ App\Models\Subcategory::where('id',$product->subcategory_id)->first()->subcategoryname ??'' }}
                </option>

                @endif 
            </select>
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Store: <span class="tx-danger">*</span></label>
            <select class="form-control" name="listing_id"
            > <option value="">Please Select One
            </option>

            @foreach($listing as $listingData)
            <option value="{{$listingData->id}}" @if(!empty($product->
                listing_id) && $product->
                listing_id==$listingData->id) selected @endif>
                {{ $listingData->storename }}</option>
            @endforeach
        </select>

        </div>
    </div>
   
</div>
<br>
<div class="row row-sm">
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Product Name : <span class="tx-danger">*</span></label>
            <input class="form-control" name="productname" value="{{ $product->productname ?? ''}}"
                placeholder="Enter Product" type="text">
        </div>
    </div>          
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Quantity: <span class="tx-danger">*</span></label>
            <div class="input-group mb-2 mr-sm-2">
                <input class="form-control" name="quantityunit" value="{{ $product->quantityunit ?? ''}}"
                placeholder="Enter Quantity" type="number">
                <div class="input-group-prepend">
                    <div class="input-group-text"> <select class="form-control" style="
                        border: aliceblue;
                        width: 140px;
                        height: 28px;
                        background: #F4F4F5;
                    " name="value">
                            <option value="">Select a value</option>
		
                            <option value="Bag(s)" >Bag(s)</option>		
                                    
                            <option value="Carton" >Carton</option>		
                                    
                            <option value="Dozen" >Dozen</option>		
                                    
                            <option value="Feet" >Feet</option>		
                                    
                            <option value="Kilogram/Kg" >Kilogram/Kg</option>		
                                    
                            <option value="Meter(s)" >Meter(s)</option>		
                                    
                            <option value="Metric Ton" >Metric Ton</option>		
                                    
                            <option value="Piece(s)/Pcs" >Piece(s)/Pcs</option>		
                      </select></div>
                     
                </div>
              
            </div>
         
              
        </div>
    </div>
                        
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Type: <span class="tx-danger">*</span></label>
            <input class="form-control" name="type" value="{{ $product->type ?? ''}}"
                placeholder="Enter Type" type="text">
        </div>
    </div>
</div><br>
<div class="row row-sm">
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Status: <span class="tx-danger">*</span></label>
            <select class="form-control" name="status">
                @if(Request::is('admin/product/edit/*')) >
                @if($product->status=='0')
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
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Image: <span class="tx-danger">*</span><a data-target="#modaldemo1" data-toggle="modal" href="#"><i class="fe fe-eye"></i></a></label>
            <input class="form-control" multiple name="productimage[]" id="profile-img"
                placeholder="Enter firstname" type="file">
            <span><small> Standard Size: 700 (width) X 700 (height)</small></span>

        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Add On Home Page: <span class="tx-danger">*</span></label>
            <select class="form-control" name="addonhomepage">
                @if(Request::is('admin/products/edit/*')) >
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
<div class="row row-sm">
    <div class="col-12">
        <div class="form-group mg-b-0">
            <label class="form-label"> Description: <span class="tx-danger">*</span></label>
            <textarea class="centered form-control"  id="editor" name="description" rows="3" placeholder="Enter Description">{!!$product->description ?? ''!!}</textarea>

        </div>
    </div>
</div>
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('buyer/products')}}" class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
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
            url: "{{ url('admin/product/create') }}",
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
    