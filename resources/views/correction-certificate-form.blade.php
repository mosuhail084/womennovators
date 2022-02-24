@extends('frontEnd.layouts.layout') @section('admin_content')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
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
.common-show + .select2 {
    display: block!important;
}

.select2 {
    width: 100%!important;
}
.select2 {
    display: none;
}
.showclass +.select2 {
    display: block!important;
}
.select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: 0px;
    padding: 15px;
    display: block;
    height: 53px!important;
    line-height: 30px;
}
    .select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 26px;
    position: absolute;
    top: 13px;
    right: 1px;
    width: 20px;
}
    ul.list-content {
    padding-left: 25px;
}
    ul.list-content li {
    list-style: auto;
}
    .smg-popup h2 {
    font-size: 36px;
    color: #e01296;
        margin-bottom: 20px;
}
    .smg-popup {
    padding: 20% 0px;
}
    .smg-popup p {
    font-size: 16px;
    margin-bottom: 0px;
}
    
    .row-space {
    padding-left: 0px;
}
    .space-m {
    padding: 0px 15px;
}
    .gender input {
    width: 25px;
}.gender {
    display: flex;
    align-items: center;
    width: 47%;
    flex-wrap: wrap;
    float: left;
}input.form-control:focus {
    box-shadow: none;
}
button#add {
          z-index: 999;
    float: right;
    font-size: 12px;
    position: relative;
    right: -86px;
    background-color: #fff;
    color: #ce199a;
    border: none;
    padding: 8px 5px;
    border-radius: 4px;
    width: 76px;
    text-align: center;
    cursor: pointer;
} 
    button.remove {
        font-size: 12px;
    position: absolute;
    right: -83px;
    top: 0px;
    background-color: #fff;
    color: #009688;
    border: none;
     padding: 8px 5px;
    border-radius: 4px;
    width: 76px;
    text-align: center;
        cursor: pointer;
}
    button#add2 {
       font-size: 12px;
    position: absolute;
    right: -86px;
    background-color: #fff;
    color: #ce199a;
    border: none;
    padding: 8px 5px;
    border-radius: 4px;
    width: 76px;
    text-align: center;
    cursor: pointer;
} 
    button.remove2 {
        font-size: 12px;
    position: absolute;
    right: -83px;
    top: 0px;
    background-color: #fff;
    color: #009688;
    border: none;
     padding: 8px 5px;
    border-radius: 4px;
    width: 76px;
    text-align: center;
        cursor: pointer;
}
    .new-text-div {
    position: relative;
}
    @media (max-width:767px){
        button#add2 {
    font-size: 12px;
    position: relative;
    text-align: right;
    right: 0px;
    background-color: #fff;
    color: #ce199a;
    border: none;
    padding: 8px 5px;
    border-radius: 4px;
    width: 76px;
    text-align: right;
    cursor: pointer;
    z-index: 2;
    width: 100%;
}
        button.remove2 {
    font-size: 12px;
    position: relative;
    right: 0px;
    top: 0px;
    background-color: #fff;
    color: #009688;
    border: none;
    padding: 8px 5px;
    border-radius: 4px;
    width: 100%;
    text-align: right;
    cursor: pointer;
}
        button#add {
    z-index: 2;
    float: right;
    font-size: 12px;
    position: relative;
    right: 0px;
    background-color: #fff;
    color: #ce199a;
    border: none;
    padding: 8px 5px;
    border-radius: 4px;
    width: 100%;
    text-align: right;
    cursor: pointer;
}
        button.remove {
    font-size: 12px;
    position: relative;
    right: 0px;
    top: 0px;
    background-color: #fff;
    color: #009688;
    border: none;
    padding: 8px 5px;
    border-radius: 4px;
    width: 100%;
    text-align: right;
    cursor: pointer;
}
    }
   
    </style>

      
   

      <div id="page-banner-area" class="page-banner-area" style="background-image:url('https://womennovators.com/globalsummit/images/hero_area/banner_bg.jpg')">
			<!-- Subpage title start -->
			<div class="page-banner-title">
				<div class="text-center">
					<h2>Correction Form</h2>
					
				</div>
			</div><!-- Subpage title end -->
		</div><!-- Page Banner end -->
   
     
        
       <section class="ts-contact-form">
           <div class="col-sm-12" style="margin-top:20px;">
    <div class="text-center">
        
    </div>
    </div>
         <div class="container">
            <div class="row">
               <div class="col-lg-10 mx-auto">
                  <h2 class="section-title text-center">
                  
                  </h2>
               </div><!-- col end-->
            </div>
            <div class="row">
               <div class="col-lg-10 mx-auto">
                  <form id="contact-form" class="contact-form" action="{{url('add/correction/'.$id)}}" method="post">
                      @csrf
					  <input type="hidden" name="user_id" value="{{Session::get('user_id')}}" >
                     <div class="error-container"></div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                               <label>What is the issue ?  <span>*</span></label>
                               <select class="form-control form-control-name" name="issue" id="issue"  required>
                                   <option value="">----</option>
                                <option value="Name correction">Name correction </option>
                                <option value="Category wrong">Category wrong  </option>
                                <option value="Or any other ? Specify">Or any other ? Specify  </option>
                               </select>
                             
                           </div>
                        </div>
                        <div class="col-md-6" style="display: none;" id="div1">
                            <div class="form-group">
                                <label>Enter Name <span></span></label>
                                <input class="form-control form-control-name" placeholder="Enter Name " name="name" id="f-name"
                                type="text" >
                              
                            </div>
                         </div>
                         <div class="col-md-6" style="display: none;" id="div2">
                            <div class="form-group">
                                <label>Category <span></span></label>
                                <select name="category" class="form-control"  required>
                                    <option value="0">Select Category</option>
                   <option value="Chief guest">Chief guest</option>
                   <option value="Guest of Honor">Guest of Honor</option>
                   <option value="Moderators">Moderators</option>
                   <option value="Awardee">Awardees</option>
                   <option value="Mentor">Mentor</option>
                   <option value="Faces">Faces</option>
                   <option value="Incubatee">Incubatee</option>
                   <option value="Supported By">Supported By</option>
                   <option value="Jury">Jury</option>
                   <option value="Influencer">Influencer/Community Leaders</option>
                   <option value="Event Sponsers">Event Sponsers</option>
                   <option value="Event Partner">Event Partner</option>
                   <option value="We-pitch Competion Partner">We-pitch Competion Partner</option>
                                </select>
                              
                            </div>
                         </div>
                         <div class="col-md-12" style="display: none;" id="div3">
                            <div class="form-group">
                                <label>Specify here <span></span></label>
                                <textarea class="form-control form-control-name" style="height: 150px;  border-radius: 20px;" placeholder="Specify here " name="other" id="f-name"
										  type="text" ></textarea>
                              
                            </div>
                         </div>
                      
                       
                           <div class="col-sm-12"> 
                      <div class="text-center"><br><br><br><br>
                        <button class="btn" type="submit" onsubmit="return maxlength(getElementById('box_id'), 250);"> Submit </button>
                     </div>
                         </div>
                     
                     
                  </form><!-- Contact form end -->
               </div>
    
            </div>
         </div>
         <div class="speaker-shap">
            <img class="shap1" src="images/shap/home_schedule_memphis2.png" alt="">
         </div>
		</section>
       
     
<!--pop-up start-->
<div class="modal fade" id="exampleModalcorrect" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <img src="{{url('globalsummit/images/modal-img.png')}}">
          </div>
        <div class="col-sm-7">
            <div class="smg-popup">
          <h2>Thank You</h2>
            <p>We are processing your application.</p>
            <!--<p>We shall get back to you within two working days.</p>-->
            </div>
          </div>
          </div>
      </div>
        <div class="modal-footer">
          <button type="button" class="btn-close " data-dismiss="modal" aria-label="Close">Close</button>
			@php
			$id=Session::get('user_id');
			$id= Crypt::encrypt($id) ;
			//dd($id);
			
			
			@endphp
          <!--<a href="https://womennovators.com/apply-for/{{$id}}" type="button" class="btn-ok">Ok</a>-->
        </div>
      
    </div>
  </div>
</div>
<!--pop-up End-->

      <!-- Javascript Files
            ================================================== -->
      <!-- initialize jQuery Library -->
  
  @endsection