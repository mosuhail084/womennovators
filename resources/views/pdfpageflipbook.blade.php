
@extends('frontEnd.layouts.layout') @section('admin_content')

<style>
   #exampleModal .modal-lg {
    max-width: 650px;
}
.btn-close {
    background-color: #30a6a9;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 2px 11px;
    font-size: 16px;
    box-shadow: 1px 1px 9px #00000026;
    cursor:pointer;
}
.btn-ok {
    background-color: #ce199a;
    color: #fff!important;
    border: none;
    border-radius: 4px;
    padding: 2px 11px;
    font-size: 16px;
    box-shadow: 1px 1px 9px #00000026;
    cursor:pointer;
}
	#pageloader
{
      background: rgb(255 255 255 / 91%);
    display: none;
    height: 100%;
    position: fixed;
    width: 100%;
    left: 0px;
    z-index: 9999;
    top: 0px;
}

#pageloader img
{
  left: 50%;
    margin-left: -100px;
    margin-top: -32px;
    position: absolute;
    top: 50%;
    width: 224px;
}



    
.pdf-content{padding: 60px 0px;}
.pdf-content iframe {
    width: 100%;
    min-height: 800px;
}
        .cities-page-top-design {
    background-image: linear-gradient(to bottom, rgba(38, 38, 39, 0.62), rgb(23, 22, 23)),url(https://www.womennovator.co.in/wp-content/uploads/2019/12/WhatsApp-Image-2019-10-09-at-15.24.05-2.jpeg);
    padding: 0px 0px 0px 80px;
    background-position: 50% 50%;
    background-attachment: scroll;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}
    </style>


       
   
      <!-- banner start-->
      
       <div class="section mcb-section  full-width cities-page-top-design " style="padding-top:120px; padding-bottom:100px; background-color:">
           <div class="section_wrapper mcb-section-inner">
               <div class="wrap mcb-wrap one  valign-top clearfix" style="">
                   <div class="mcb-wrap-inner">
                       <div class="column mcb-column three-fifth column_column ">
                           <div class="column_attr clearfix" style="">
                              <div class="row">
                               <div class="col-sm-8">
                              <h1 style="color: white;">
                              @php
                                 $name=$link=DB::table('pdfstore')->where('url',$url)->first(); 
                              @endphp
                              {{$name->name ??''}}
                              </h1>
                               </div>
                              <div class="col-sm-4" style="border-radius: 40px;">   
                                 <a class="ticket-btn btn text-center" href="" data-toggle="modal" data-target="#exampleModal">Download Now</a>     
                              </div>
                              </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
      
        <div class="pdf-sec">
            <div class="container">
                <div class="pdf-content">
                    <iframe id="iframe" src="{{$pdf->pdf_link ??''}}#toolbar=0"></iframe>
                
                </div>
            </div>
       </div>
      <!-- banner end-->
      <div class="col-sm-6">
      </div>


<!--pop-up start-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg">
     <div class="modal-content">
       <div class="modal-header">
         
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
		   <div id="pageloader">
   <img src="https://i.pinimg.com/originals/f6/65/6a/f6656aa6fdb6b8f905dea0bcc2d71dd8.gif" alt="processing..." />
</div>
       <form id="contact-form"  method="post" action="{{ url('add/pdfview/')}}" enctype="multipart/form-data">
              
         @csrf
       <div class="modal-body">
           <div class="row">
         <div class="col-sm-5">
             <img src="{{url('globalsummit/images/modal-img.png')}}">
           </div>
         <div class="col-sm-7">
             <div class="smg-popup">
           <h4>Download Now</h4>
           <div class="form-group">
            <label style="    color: #fff;"><strong>Name</strong></label>
            <input type="hidden" required name="url" class="form-control" value="{{$url}}">
            <input type="text" required name="name" class="form-control" placeholder="Enter Name">

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
         <label style="    color: #fff;"><strong>{{ __('E-Mail Address') }}</strong></label>
         <input type="email" required name="email" class="form-control" placeholder="Enter Email">

         @error('email')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="form-group">
      <label style="    color: #fff;"><strong>{{ __('Phone') }}</strong></label>
      <input type="text" required name="phone" class="form-control" placeholder="Enter Phone">

      @error('phone')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
      @enderror
  </div>

             </div>
           </div>
           </div>
       </div>
       
         <div class="modal-footer">
           <button type="button" class="btn-close " data-dismiss="modal" aria-label="Close">Close</button>
           <button  class="btn-ok" type="submit">Save</button>
          
         </div>
      </form>
     </div>
   </div>
 </div>
    
 <script>
   var msg = '{{Session::get('alert')}}';
   var exist = '{{Session::has('alert')}}';
   if(exist){
     alert(msg);
   }
 </script>
<script>
	$('#iframe').ready(function() {
   setTimeout(function() {
      $('#iframe').contents().find('#download').remove();
   }, 100);
});
</script>
  @endsection