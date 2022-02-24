<style>

.form-group textarea {
    height: 100px;
    
    border-radius: 14px;
    overflow-y: scroll;
}</style>
<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Category: <span class="tx-danger">*</span></label>
            <select class="form-control" name="category">
                <option value="Womennovator">Womennovator</option>
                 <option value="Events">Events</option>
                  <option value=" Incubation"> Incubation</option>
                   <option value="Awards">Awards</option>
                    <option value="Community">Community</option>
            </select>
           
        </div>
    </div>
  
   
   
</div>
<br>
<div class="row row-sm">
    <div class="col-12">
        <div class="form-group mg-b-0">
            <label class="form-label">Faq Questions: <span class="tx-danger">*</span></label>
           
                <textarea class="form-control" name="faqques" 
                                placeholder="Enter Question" >{{ $faq->faqques ?? ''}}</textarea>
        </div>
    </div>
    <div class="col-6">
       
    </div>
</div>
<br>
<div class="row row-sm">
    <div class="col-12">
        <div class="form-group mg-b-0">
            <label class="form-label">Faq Answers: <span class="tx-danger">*</span></label>
            
                    <textarea class="form-control" name="faqans" 
                                placeholder="Enter Address" >{{ $faq->faqans ?? ''}}</textarea>
        </div>
    </div>
    
</div>
 
   

<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/resource')}}"
            class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
    //jQuery.noConflict();
    function readURL(input) {
        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function (e) {
                jQuery('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    jQuery("#profile-img").change(function () {
        readURL(this);
    });

</script>
<script type="text/javascript">
    jQuery.noConflict();
    function readURL(input) {
        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function (e) {
                jQuery('#profile-img1').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    jQuery("#profile1").change(function () {
        readURL(this);
    });

</script>