<div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Page Name: <span class="tx-danger">*</span></label>
            <input class="form-control" name="page_name" placeholder="Enter Nname" 
            value="{{ $seo->page_name ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Author: <span class="tx-danger">*</span></label>
            <input class="form-control" name="author" placeholder="Enter author" 
            value="{{ $seo->author ?? ''}}" type="text">
        </div>
    </div>
  </div>
  <br>
  <div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Meta Title: <span class="tx-danger">*</span></label>
            <input class="form-control" name="meta_title" placeholder="Enter Title" 
            value="{{ $seo->meta_title ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Meta Topic: <span class="tx-danger">*</span></label>
            <input class="form-control" name="meta_topic" placeholder="Enter Topic" 
            value="{{ $seo->meta_topic ?? ''}}" type="text">
        </div>
    </div>
  </div><br>
  <div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Copyright: <span class="tx-danger">*</span></label>
            <input class="form-control" name="copyright" placeholder="Enter Copyright" 
            value="{{ $seo->copyright ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Meta Description: <span class="tx-danger">*</span></label>
            <input class="form-control" name="meta_description" placeholder="Enter Description" 
            value="{{ $seo->meta_description ?? ''}}" type="text">
        </div>
    </div>
  </div><br>
  <div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">publisher: <span class="tx-danger">*</span></label>
            <input class="form-control" name="publisher" placeholder="Enter publisher" 
            value="{{ $seo->publisher ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Meta Keywords: <span class="tx-danger">*</span></label>
            <input class="form-control" name="meta_keywords" placeholder="Enter Keywords" 
            value="{{ $seo->meta_keywords ?? ''}}" type="text">
        </div>
    </div>
  </div><br>
  <div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">language: <span class="tx-danger">*</span></label>
            <input class="form-control" name="language" placeholder="Enter language" 
            value="{{ $seo->language ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Meta Url: <span class="tx-danger">*</span></label>
            <input class="form-control" name="meta_url" placeholder="Enter Keywords" 
            value="{{ $seo->meta_url ?? ''}}" type="text">
        </div>
    </div>
  </div><br>
  <div class="row row-sm">
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Page Url: <span class="tx-danger">*</span></label>
            <input class="form-control" name="page_url" placeholder="Enter Url" 
            value="{{ $seo->page_url ?? ''}}" type="text">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group mg-b-0">
            <label class="form-label">Robots: <span class="tx-danger">*</span></label>
            <input class="form-control" name="robots" placeholder="Enter Robots" 
            value="{{ $seo->robots ?? ''}}" type="text">
        </div>
    </div>
  </div><br>
        <div class="row row-sm">
            <div class="col-6">
                <div class="form-group mg-b-0">
                    <label class="form-label">Owner: <span class="tx-danger">*</span></label>
                    <input class="form-control" name="owner" placeholder="Enter owner" 
                    value="{{ $seo->owner ?? ''}}" type="text">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="form-label">Status: <span class="tx-danger">*</span></label>
                    <select name="status" class="form-control" >
                        <!--placeholder-->
                        @if(Request::is('admin/seo/edit/*')) >
                        @if($seo->status=='1')
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
            <div class="d-flex pagination wd-100p">
                <a href="{{url('admin/seo')}}" class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button  type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
    </div>    
        </div>