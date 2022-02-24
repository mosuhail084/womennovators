@extends('frontEnd.layouts.layout') @section('admin_content')
     
      <div id="page-banner-area" class="page-banner-area" style="background-image:url(globalsummit/images/hero_area/banner_bg.jpg)">
			<!-- Subpage title start -->
			<div class="page-banner-title">
				<div class="text-center">
					<h2>Industry Star Award</h2>
					
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
                  <form id="contact-form" class="contact-form" action="{{url('questionnaire-add')}}" method="post">
                  @csrf 
                  <div class="error-container"></div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                               <label>1. Name of the Company *</label>
                              <input class="form-control form-control-name" placeholder="Enter Name of the Company" name="name" id="f-name"
                                 type="text" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label>2. Inception of the Company *</label>
                              <input class="form-control form-control-name" placeholder="Enter Inception of the Company" name="Inception"
                                 type="text" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label>3. Cities of Presence *</label>
                              <input type="text" class="form-control form-control-subject" placeholder="Enter Inception of the Company" name="Cities" id="subject"
                                 required>
                           </div>
                            
                        </div>
                         
                         <div class="col-md-6">
                           <div class="form-group">
                               <label>4. Name of the Founder / CEO / MD/ Chairman *</label>
                              <input type="text" class="form-control form-control-subject" placeholder="Enter Name of the Founder / CEO / MD/ Chairman"  id="subject"
                              name="Name_of_the_Founder" required>
                           </div>
                        </div>
                         
                         <div class="col-md-6">
                           <div class="form-group">
                               <label>5. Designation *</label>
                              <input type="text" class="form-control form-control-subject" placeholder="Enter Designation" name="Designation" id="subject"
                                 required>
                           </div>
                        </div>
                         <div class="col-md-6">
                           <div class="form-group">
                               <label>6. City *</label>
                              <input type="text" class="form-control form-control-subject" placeholder="Enter City" name="City" id="subject"
                                 required>
                           </div>
                        </div>
                         <div class="col-md-6">
                           <div class="form-group">
                               <label>7. Email ID *</label>
                              <input type="email" class="form-control form-control-subject" placeholder="Enter Email" name="Email" id="subject"
                              required >
                           </div>
                        </div>
                         <div class="col-md-6">
                           <div class="form-group">
                               <label>8. URL of the Company *</label>
                              <input type="v" class="form-control form-control-subject" placeholder="URL of the Company" name="URL" id="subject"
                                 required>
                           </div>
                        </div>
                         <div class="col-md-6">
                           <div class="form-group">
                               <label>9. Specialization *</label>
                              <input type="text" class="form-control form-control-subject" placeholder="Enter Specialization" name="Specialization" id="subject"
                                 required>
                           </div>
                        </div>
                         <div class="col-md-6">
                           <div class="form-group">
                               <label>10. Revenue of the Company</label>
                              <input type="text" class="form-control form-control-subject" placeholder="Enter Revenue of the Company" name="Revenue" id="subject">
                           </div>
                        </div>
                         <div class="col-md-6">
                           <div class="form-group">
                               <label>11. Business model and its details</label>
                              <input type="text" class="form-control form-control-subject" placeholder="Enter Business model and its details" name="Business_details" id="subject">
                           </div>
                        </div>
                         <div class="col-md-6">
                           <div class="form-group">
                               <label>12. Business explanation related to financial details of FY20</label>
                              <input type="text" class="form-control form-control-subject" placeholder="Enter Business explanation related to financial details of FY20" name="Business_explanation" id="subject">
                           </div>
                        </div>
                         <div class="col-md-6">
                           <div class="form-group">
                               <label>13. What is your core strength? </label>
                              <input type="text" class="form-control form-control-subject" placeholder="Enter What is your core strength" name="core_strength" id="subject">
                           </div>
                        </div>
                         <div class="col-md-6">
                           <div class="form-group">
                               <label>14. What are the future plans in regards to your organization?</label>
                              <input type="text" class="form-control form-control-subject" placeholder="Enter What are the future plans in regards to your organization" name="organization" id="subject">
                           </div>
                        </div>
                        
                         
                           <div class="col-sm-12"> 
                      <div class="text-center">
                        <button class="btn" type="submit"> Send Message</button>
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
       
   


   
       
       

       <script>
        jQuery(document).ready(function() {  
            jQuery('#multiple-checkboxes').multiselect();  
        }); 
       </script>
       <script>function CheckColors(val){
 var element=document.getElementById('sector');
 if(val=='other sector'||val=='others')
   element.style.display='block';
 else  
   element.style.display='none';
}</script>
       
       
       <script>
       
       $(function() {
        $('#add').on('click', function( e ) {
            e.preventDefault();
            $('<div/>').addClass( 'new-text-div' )
            .html( $('<div class="row"><div class="col-sm-12"><div class="form-group"><input class="form-control" placeholder="" type="textbox"/></div></div></div>').addClass( 'someclass' ) )
            .append( $('<button/>').addClass( 'remove' ).html( '<i class="fa fa-minus" aria-hidden="true"></i> Remove' ) )
            .insertBefore( this );
        });
        $(document).on('click', 'button.remove', function( e ) {
            e.preventDefault();
            $(this).closest( 'div.new-text-div' ).remove();
        });
    });
           
           
           $(function() {
        $('#add3').on('click', function( e ) {
            e.preventDefault();
            $('<div/>').addClass( 'new-text-div' )
            .html( $('<div class="row"><div class="col-sm-12"><div class="form-group"><input class="form-control" placeholder="" type="textbox"/></div></div></div>').addClass( 'someclass' ) )
            .append( $('<button/>').addClass( 'remove3' ).html( '<i class="fa fa-minus" aria-hidden="true"></i> Remove' ) )
            .insertBefore( this );
        });
        $(document).on('click', 'button.remove3', function( e ) {
            e.preventDefault();
            $(this).closest( 'div.new-text-div' ).remove();
        });
    });
           
           $(function() {
        $('#add4').on('click', function( e ) {
            e.preventDefault();
            $('<div/>').addClass( 'new-text-div' )
            .html( $('<div class="row"><div class="col-sm-4"><div class="form-group"><input class="form-control" placeholder="" type="textbox"/></div></div><div class="col-sm-4"><div class="form-group"><input class="form-control" placeholder="" type="textbox"/></div></div><div class="col-sm-4"><div class="form-group"><input class="form-control" placeholder="" type="textbox"/></div></div></div>').addClass( 'someclass' ) )
            .append( $('<button/>').addClass( 'remove4' ).html( '<i class="fa fa-minus" aria-hidden="true"></i> Remove' ) )
            .insertBefore( this );
        });
        $(document).on('click', 'button.remove4', function( e ) {
            e.preventDefault();
            $(this).closest( 'div.new-text-div' ).remove();
        });
    });
           $(function() {
        $('#add5').on('click', function( e ) {
            e.preventDefault();
            $('<div/>').addClass( 'new-text-div' )
            .html( $('<div class="row"><div class="col-sm-12"><div class="form-group"><input class="form-control" placeholder="" type="textbox"/></div></div></div>').addClass( 'someclass' ) )
            .append( $('<button/>').addClass( 'remove5' ).html( '<i class="fa fa-minus" aria-hidden="true"></i> Remove' ) )
            .insertBefore( this );
        });
        $(document).on('click', 'button.remove5', function( e ) {
            e.preventDefault();
            $(this).closest( 'div.new-text-div' ).remove();
        });
    });
           $(function() {
        $('#add6').on('click', function( e ) {
            e.preventDefault();
            $('<div/>').addClass( 'new-text-div' )
            .html( $('<div class="row"><div class="col-sm-12"><div class="form-group"><input class="form-control" placeholder="" type="textbox"/></div></div></div>').addClass( 'someclass' ) )
            .append( $('<button/>').addClass( 'remove6' ).html( '<i class="fa fa-minus" aria-hidden="true"></i> Remove' ) )
            .insertBefore( this );
        });
        $(document).on('click', 'button.remove6', function( e ) {
            e.preventDefault();
            $(this).closest( 'div.new-text-div' ).remove();
        });
    });
           $(function() {
        $('#add7').on('click', function( e ) {
            e.preventDefault();
            $('<div/>').addClass( 'new-text-div' )
            .html( $('<div class="row"><div class="col-sm-12"><div class="form-group"><input class="form-control" placeholder="" type="textbox"/></div></div></div>').addClass( 'someclass' ) )
            .append( $('<button/>').addClass( 'remove7' ).html( '<i class="fa fa-minus" aria-hidden="true"></i> Remove' ) )
            .insertBefore( this );
        });
        $(document).on('click', 'button.remove7', function( e ) {
            e.preventDefault();
            $(this).closest( 'div.new-text-div' ).remove();
        });
    });
           $(function() {
        $('#add8').on('click', function( e ) {
            e.preventDefault();
            $('<div/>').addClass( 'new-text-div' )
            .html( $('<div class="row"><div class="col-sm-6"><div class="form-group"><input class="form-control" placeholder="" type="textbox"/></div></div><div class="col-sm-6"><div class="form-group"><input class="form-control" placeholder="" type="textbox"/></div></div></div>').addClass( 'someclass' ) )
            .append( $('<button/>').addClass( 'remove8' ).html( '<i class="fa fa-minus" aria-hidden="true"></i> Remove' ) )
            .insertBefore( this );
        });
        $(document).on('click', 'button.remove8', function( e ) {
            e.preventDefault();
            $(this).closest( 'div.new-text-div' ).remove();
        });
    });
       
       </script>
       <script>
       
       $(function() {
        $('#add2').on('click', function( e ) {
            e.preventDefault();
            $('<div/>').addClass( 'new-text-div' )
            .html( $('<div class="row "><div class="col-sm-12"><div class="form-group"><input placeholder="" class="form-control" type="textbox"/></div></div></div></div>').addClass( 'someclass' ) )
            .append( $('<button/>').addClass( 'remove2' ).html( '<i class="fa fa-minus" aria-hidden="true"></i> Remove' ) )
            .insertBefore( this );
        });
        $(document).on('click', 'button.remove2', function( e ) {
            e.preventDefault();
            $(this).closest( 'div.new-text-div' ).remove();
        });
    });
    $(function(){
      $('#wrapped').parsley();
    });
       
       </script>
       
 @endsection