
<div class="row row-sm">
    <div class="col-6">
       <div class="form-group mg-b-0">
           <label class="form-label">Payment ID: <span class="tx-danger">*</span></label>
         
           <input type="=text" class="form-control "  value="{{$payment->payment_id}}">
       </div>
   </div>
   <div class="col-6">
       <div class="form-group mg-b-0">
           <label class="form-label">Status: <span class="tx-danger">*</span></label>
           <select class="form-control " name="order_status">
            
               @if(Request::is('admin/payment/*/edit')) >
               @if($payment->status=='0')
               <option value="0">Pending</option>
               <option value="1">Shipped</option>


               @else
               <option value="1">Shipped</option>
               <option value="0">Pending</option>

               @endif
               @else

               <option value="0">Pending</option>
               <option value="1">Shipped</option>
               @endif
               
            </select>
       </div>
   </div>
</div>
<br>

<div class="row row-sm">
   <div class="d-flex pagination wd-100p">
       <a href="{{url('admin/payment')}}" class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
       <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
   </div>
</div>
