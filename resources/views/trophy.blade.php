@extends('frontEnd.layouts.layout') @section('admin_content')
     
     <style>
         ul.list-content li {
    list-style: auto;
    font-size: 16px;
		 }`	
		#exampleModaltrophy .modal-lg {
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
		 
     </style>
      <div id="page-banner-area" class="page-banner-area" style="background-image:url(https://womennovators.com/globalsummit/images/hero_area/banner_bg.jpg)">
			<!-- Subpage title start -->
			<div class="page-banner-title">
				<div class="text-center">
					<h2>Help us to make your AWARD TROPHY delivered to you on timely basis </h2>
					
				</div>
			</div><!-- Subpage title end -->
		</div><!-- Page Banner end -->

        
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
                  <form id="contact-form" class="contact-form" action="{{url('trophy-add')}}" method="post" enctype="multipart/form-data">
                  @csrf 
                  <div class="error-container"></div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                               <label>1.  Would you be comfortable collecting it from your concerned influencer  <span>*</span></label>
                              
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              
                               <select class="form-control form-control-subject" name="collect" required>
                                  <option value="">---- </option>
                                  <option value="Yes I am okay">Yes I am okay </option>
                                  <option value="I would prefer to be sent on my address ">I would prefer to be sent on my address   </option>
                                  <option value="I can collect from the Womennovator office at Delite Cinema , Asaf Ali road. ">I can collect from the Womennovator office at Delite Cinema , Asaf Ali road.   </option>
                                  
                              </select>
                           </div>
                        </div>
                          <div class="col-md-12">
                           <div class="form-group">
                               <label>2. In any case please still provide us following:  </label>
                              
                           </div>
                        </div>
                        
                         
                        <div class="col-md-12">
                           <div class="form-group">
                               <label> Address  <span>*</span> :</label>
                              <textarea class="form-control form-control-name" style="height: 150px;  border-radius: 20px;" placeholder="Enter Address  " name="address" id="f-name"
                                required></textarea>
                           </div>
                        </div>
						   <div class="col-md-6">
                           <div class="form-group">
                               <label> Name  <span>*</span>  </label>
                              <input class="form-control form-control-name" placeholder="Enter Name " name="name" id="f-name"
                                 type="text" required>
                           </div>
                        </div>
                           <div class="col-md-6">
                           <div class="form-group">
                               <label> Email  <span>*</span> </label>
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
                              <input type="text" class="form-control form-control-subject" placeholder="Company Name" name="company_name" 								id="subject"
                                 required>
                           </div>
                            
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label> Landmark    </label>
                              <input class="form-control form-control-name" placeholder="Enter Landmark" name="landmark" id="f-name"
                                 type="text" >
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label> City     </label>
                              <input class="form-control form-control-name" placeholder="Enter City" name="city" id="f-name"
                                 type="text" >
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label> District    </label>
                              <input class="form-control form-control-name" placeholder="Enter District" name="district" id="f-name"
                                 type="text" >
                           </div>
                        </div><div class="col-md-6">
                           <div class="form-group">
                               <label> State     </label>
                              <input class="form-control form-control-name" placeholder="Enter State" name="state" id="f-name"
                                 type="text" >
                           </div>
                        </div><div class="col-md-6">
                           <div class="form-group">
                               <label> Pincode  <span>*</span> : </label>
                              <input class="form-control form-control-name" placeholder="Enter Pincode    " name="pincode" id="f-name"
                                 type="number" required>
                           </div>
                        </div>
                     
                         <div class="col-md-12 text-center">
                            <input type="checkbox" checked required> <small>This form should be filled only by the Awardees of the Womennovator Global Summit 2021. Please refrain from circulating it.</small>
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
		</section>
       <div class="modal" id="exampleModaltrophy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
					   <h3>Thank you so much for submitting your details.</h3>
               
                   <p> Womennovator team is really greatful and excited.
                      </p>
                      <p> Team womennovator
                     </p>
                  
                     
                   
                   </div>
                 </div>
                 </div>
             </div>
              <div class="modal-footer">
                 <button type="button" class="btn-close " data-dismiss="modal" aria-label="Close">Close</button>
                <!-- <a href="{{url('#')}}" type="button" class="btn-ok">Ok</a>-->
               </div>
             
           </div>
         </div>
       </div>
       <!--pop-up End-->  
   


   
       
       


       
       
      
    <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>   
 @endsection