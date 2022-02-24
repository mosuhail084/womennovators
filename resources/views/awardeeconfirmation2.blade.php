@extends('frontEnd.layouts.layout') @section('admin_content')
     
     <style>
         ul.list-content li {
    list-style: auto;
    font-size: 16px;
}
#exampleModal1000 .modal-lg {
    max-width: 689px;
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
     </style>
      <div id="page-banner-area" class="page-banner-area" style="background-image:url(https://womennovators.com/globalsummit/images/hero_area/banner_bg.jpg)">
			<!-- Subpage title start -->
			<div class="page-banner-title">
				<div class="text-center">
					<h2>Womennovator Global summit 2021 </h2>
				<h2>	Awardees : 1 minute video </h2>
					
				</div>
			</div><!-- Subpage title end -->
		</div><!-- Page Banner end -->

        <section class="ts-intro-content">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                   <div style="margin-bottom: 30px;">
						<h2 class="section-title text-center become-sponsor" >What your  1 min video should have:</h2>
                   </div>
               </div><!-- col end-->
              
            </div><!-- row end-->
             <div class="row">
                <div class="col-sm-12">
                    <ul class="list-content" style="color: black;">
                        <li>  About you and your work .</li>
                        <li> How do you feel winning this association and   to be part of 1000 Womennovator - Women of Asia Awards , #WaahMoment  (Women AAH Moment)  (For Example: When did I pitch ? When was my product validated by public ? When did I get my first customer or loan opportunity, my first funding, my first business partner and collaboration, etc.)</li>
                        <li> How will it help you curate your future with this achievement ?</li>
                    </ul>
                        <br>
                        <ul class="list-content" style="color: black;">
                            <h4>Few tips to be followed for the video:</h4>
                            <br>
                        <li> Choose a plain white or an off-white background like a wall.</li>
                        <li> You can choose to wear a saree/suit/dress or any outfit of your choice from any of the  7 rainbow colors-Violet/Indigo/Blue/Green/Red/Orange/Yellow).</li>
                        <li> Make sure there are no background noises.</li>
                         <li>Most important record the video in horizontal mode (LANDSCAPE) instead of vertical mode
                        </li>
                     <li> Upload your video directly from the phone to the drive don’t use WhatsApp as it compresses the video quality drastically.</li>
                       <li> Keep the duration as 1 min to talk as suggested above.</li>
                        <li> Choose a place where there is pindrop silence or use noise cancellation mic.</li>
                <li> Prefer to Keep your phone stable at a place or use the tripod.</li>
      
                        
        </ul>
                </div>
               
                <div class="col-sm-12">
                    <ul>
                       
                    </ul>
                </div>
             </div>
         </div> <!-- container end-->
      </section>
     
        
       <section class="ts-contact-form">
         <div class="container">
            <!--<div class="row">
               <div class="col-lg-10 mx-auto">
                  <h2 class="section-title text-center">
                    Award questionnaire
                  </h2>
               </div>
            </div>-->
          
            <div class="row">
               <div class="col-lg-11 mx-auto">
               @if(session()->has('success'))
    <div class="alert alert-success">
        @if(is_array(session()->get('success')))
        @foreach (session()->get('success') as $message)
        <p>{{ $message }}</p>
        @endforeach
        @else
        <p>{{ session()->get('success') }}</p>
        @endif
    </div>
    @endif
    <div id="pageloader">
   <img src="https://i.pinimg.com/originals/f6/65/6a/f6656aa6fdb6b8f905dea0bcc2d71dd8.gif" alt="processing..." />
</div>
                  <form id="contact-form" class="contact-form" action="{{url('awardee-add2')}}" method="post" enctype="multipart/form-data">
                  @csrf 
                  <div class="error-container"></div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                               <label>1. Name *</label>
                              <input class="form-control form-control-name" placeholder="Enter Name " name="name" id="f-name"
                                 type="text" required>
                           </div>
                        </div>
                          <div class="col-md-6">
                           <div class="form-group">
                               <label>2. Email ID *</label>
                              <input class="form-control form-control-name" placeholder="Enter Email " name="email" id="f-name"
                                 type="email" required>
                           </div>
                        </div>
                          <div class="col-md-6">
                           <div class="form-group">
                               <label>3. Phone *</label>
                              <input class="form-control form-control-name" placeholder="Enter Phone Number " name="phone" id="f-name"
                                 type="number" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label>2. Designation *</label>
                              <input class="form-control form-control-name" placeholder="Designation" name="designation"
                                 type="text" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label>3. Company name *</label>
                              <input type="text" class="form-control form-control-subject" placeholder="Company Name" name="company_name" id="subject"
                                 required>
                           </div>
                            
                        </div>
                         
                         <div class="col-md-6">
                           <div class="form-group">
                               <label>4. Upload Video * <small style="    font-size: 64%;">upload a 60 second’s Video | File Type mp4 | File Size upto 100 MB</small></label>
                              <input type="file" class="form-control form-control-subject"   id="file"  onchange="Filevalidation()"  name="vedio" required>
                           </div>
                        </div>
                         
                         <div class="col-md-6">
                           <div class="form-group">
                               <label>5. Category *</label>
                              <select class="form-control form-control-subject" name="category" required>
                                  <option value="">---- </option>
                                  <option value="Jury">Jury </option>
                                  <option value="Incubatee">Incubatee  </option>
                                  <option value="Influencer">Influencer  </option>
                                  <option value="Community Leader">Community Leader </option>
                                  <option value="Partner">Partner  </option>
                                  <option value="Women Faces">Women Faces </option>
                              </select>
                           </div>
                        </div>
                        
                         <div class="col-md-12 text-center">
                            <input type="checkbox" checked required> <small >This form should be filled only by the Awardees of the Womennovator Global Summit 2021. Please refrain from circulating it.</small>
                            </div>
                        </div>
                        <br>
                       
                        
                         
                           <div class="col-sm-12"> 
                      <div class="text-center">
                        <button class="btn" type="submit"> Submit</button>
                     </div>
                         </div>
                     
                      </div>
                  </form><!-- Contact form end -->
               </div>
                
            </div>
         </div>
         <div class="speaker-shap">
            <img class="shap1" src="globalsummit/images/shap/home_schedule_memphis2.png" alt="">
         </div>
         <!--pop-up start-->
<div class="modal" id="exampleModal1000" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg">
     <div class="modal-content">
       <div class="modal-header">
         
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
           <div class="row">
         <div class="col-sm-5">
             <img src="{{url('globalsummit/images/modal-img.png')}}" class="img-fluid">
           </div>
         <div class="col-sm-7">
             <div class="smg-popup">
           <h2>Congrats Winner!</h2>
             <p> Your video has been uploaded successfully.
                </p>
             <p> Click <a href="{{url('/trophy')}}">Here</a>,We would like to know where to deliver your Trophy.</p>
             
             </div>
           </div>
           </div>
       </div>
       <!--  <div class="modal-footer">
           <button type="button" class="btn-close " data-dismiss="modal" aria-label="Close">Close</button>
           <a href="{{url('/trophy')}}" type="button" class="btn-ok">Ok</a>
         </div>-->
       
     </div>
   </div>
 </div>
 <!--pop-up End-->   
		</section>
       
<!-- @if(!empty(Session::get('error_code')) && Session::get('error_code') == 5)
<script>
$(function() {
    $('#exampleModal').modal('show');
});
</script>
@endif  -->


   
       
       

     <script>
    Filevalidation = () => {
        const fi = document.getElementById('file');
        // Check if any file is selected.
        if (fi.files.length > 0) {
            for (const i = 0; i <= fi.files.length - 1; i++) {
  
                const fsize = fi.files.item(i).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file >= 102400) {
                    alert(
                      "File too Big, please select a file less than 100 mb");
                      $("#file").val("");
                } else if (file < 2048) {
                    alert(
                      "File too small, please select a file greater than 2mb");
                        $("#file").val("");
                } else {
                    document.getElementById('size').innerHTML = '<b>'
                    + file + '</b> KB';
                }
            }
        }
    }
</script>



      
   
 @endsection