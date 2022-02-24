@extends('frontEnd.layouts.layout') @section('frontEnd_content')
		<!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="/backEnd/image/banner2.jpeg" alt="covidcaregiver">
                </div>
                
            </div>
            <!-- Breadcrumbs End -->  
            
                		    <!-- Events Section Start -->
            <div class="rs-event orange-color bg2 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                  <div class="form-group">
                       <input type="text" name="search" id="search" class="form-control" placeholder="Search Data..." />
                     </div>
                     <br>
                    <div class="row" id="row">
                  
                       
                    </div>
                </div> 
            </div>
            <!-- Events Section End --> 
        </div> 
         <!-- Main content End --> 
          <div class="rs-newsletter style1 orange-color mb--90 sm-mb-0 sm-pb-70">
            <div class="container">
                <div class="newsletter-wrap">
                    <div class="row y-middle">
                        <div class="col-lg-6 col-md-12 md-mb-30">
                           <div class="content-part">
                               <div class="sec-title">
                                   <div class="title-icon md-mb-15">
                                     <!--  <img src="assets/images/newsletter.png" alt="images">-->
                                   </div>
                                   <h2 class="title mb-0 white-color">Contact Us</h2>
                               </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-12" style="text-align: right">
                            
                                <ul class="address-widget">
                                    
                                    <li style="margin-right: 109px;">
                                        <i class="flaticon-call title mb-5 white-color " ></i>
                                        
                                           <a class="title mb-0 white-color" href="tel:(+91) 9315854688">(+91)  98180 08028 ,</a>
                                           <a class="title mb-0 white-color" href="tel:(+91) 85878 26383">(+91)  85878 26383</a>
                                    </li>
                                  
                                    <li>
                                        <i class="flaticon-email title mb-5 white-color"></i>
                                        
                                            <a class="title mb-0 white-color" href="mailto:president@womennovator.co.in">rajnee@covidcaregiver.org,</a>
                                            <a class="title mb-0 white-color" href="mailto:contact@covidcaregiver.org ">contact@covidcaregiver.org </a>
                                    </li>
                                </ul>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
 function fetch_customer_data(query='')
 {
  $.ajax({
   type:"GET",
   url:"/covidwarriors/action?query="+query,
   success:function(data)
   {
    $('#row').html(data);
   }
  });
 }
 fetch_customer_data();
 $(document).on('keyup', '#search', function(){
  var query = $(search).val();
  fetch_customer_data(query);
 });
 
});
</script>
@endsection
