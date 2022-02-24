@extends('frontEnd.layouts.layout') @section('frontEnd_content')
		<!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="/backEnd/image/banner2.jpeg" alt="campaignproductcaregiver">
                </div>
                
            </div>
            <!-- Breadcrumbs End -->  
                		    <!-- Events Section Start -->
            <div class="rs-event orange-color bg2 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                  <div class="form-group">
                       <input type="text" name="search" id="search" class="form-control" placeholder="Search Product..." />
                     </div>
                     <br>
                    <div class="row" id="row">
                    
                                              
                    </div>
                </div> 
            </div>
            <!-- Events Section End --> 
        </div> 
         <!-- Main content End --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
 function fetch_products(query='')
 {
  $.ajax({
   type:"GET",
   url: "/product/action/"+"{{ $campaign->campaignseourl}}"+"?query="+query,
   success:function(data)
   {
    $('#row').html(data);
   }
  });
 }
 fetch_products();
 $(document).on('keyup', '#search', function(){
  var query = $(search).val();
  fetch_products(query);
 });
 
});
</script>
@endsection