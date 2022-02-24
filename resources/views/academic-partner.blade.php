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
    width: 100px;
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
   /*multiselect start*/
.multiselect-container{width: 100%;position:absolute;list-style-type:none;margin:0;padding:0}.multiselect-container .input-group{margin:5px}.multiselect-container>li{padding:0}.multiselect-container>li>a.multiselect-all label{font-weight:700}.multiselect-container>li.multiselect-group label{margin:0;padding:3px 20px 3px 20px;height:100%;font-weight:700}.multiselect-container>li.multiselect-group-clickable label{cursor:pointer}.multiselect-container>li>a{padding:0}.multiselect-container>li>a>label{margin:0;height:100%;cursor:pointer;font-weight:400;padding:3px 20px 3px 40px}.multiselect-container>li>a>label.radio,.multiselect-container>li>a>label.checkbox{margin:0}.multiselect-container>li>a>label>input[type=checkbox]{width: 30px;margin-bottom:5px}.btn-group>.btn-group:nth-child(2)>.multiselect.btn{border-top-left-radius:4px;border-bottom-left-radius:4px}.form-inline .multiselect-container label.checkbox,.form-inline .multiselect-container label.radio{padding:3px 20px 3px 40px}.form-inline .multiselect-container li a label.checkbox input[type=checkbox],.form-inline .multiselect-container li a label.radio input[type=radio]{margin-left:-20px;margin-right:0}
.btn-group {
    width: 100%;}
    .multiselect-container>li>a>label.radio, .multiselect-container>li>a>label.checkbox {
    width: 100%;
}
.multiselect-container li a {
    color: #495057b8;
}
button.multiselect.dropdown-toggle.btn.btn-default {
    width: 100%!important;
    background: none;
    text-transform: none!important;
    text-decoration: none;
    text-align: left;
    height: 46px;
    border-radius: initial;
    font-size: .9rem;
    color: #495057b8;
    font-weight: 400;
   
    border: 1px solid #ddd;
    box-shadow: none;
}
.multiselect .caret {
    position: absolute;
    right: 16px;
    top: 50%;
}
    
    
  .multi-show .dropdown-menu.show {
    display: block!important;
}
    
    
   .btn-group .dropdown-toggle::after {
    position: absolute;
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: .255em;
    vertical-align: .255em;
    content: "";
    border-top: .3em solid;
    border-right: .3em solid transparent;
    border-bottom: 0;
    border-left: .3em solid transparent;
    right: 10px;
    top: 21px;
}
/*multiselect End*/
    </style>

      
   

      <div id="page-banner-area" class="page-banner-area" style="background-image:url('	https://womennovators.com/globalsummit/images/hero_area/banner_bg.jpg')">
			<!-- Subpage title start -->
			<div class="page-banner-title">
				<div class="text-center">
					<h2>Apply For Academic Partner</h2>
					
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
                  <form id="contact-form" class="contact-form" action="{{url('add/academic-partner/'.$id)}}" method="post">
                      @csrf
                     <div class="error-container"></div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                               <label>1.  Name of the Academy <span>*</span></label>
                              <input class="form-control form-control-name" placeholder="Name" name="academy_name" id="f-name"
                                 type="text" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label>2. Name of the Dean <span>*</span></label>
                              <input class="form-control form-control-name" placeholder="Dean" name="dean_name" id="l-name"
                                 type="text" required>
                           </div>
                        </div>
                        <!--  <div class="col-md-6">
                           <div class="form-group">
                               <label>3. Email Address</label>
                              <input type="email" class="form-control form-control-subject" placeholder="Email Address" name="email" id="subject"
                                 >
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label>4. Contact Number: </label>
                               <div class="form-group-2">
                                <input type="number" class="form-control form-control-subject" placeholder="Contact Number" name="contact" id="subject"
                                >
                               </div>
                           </div>
                        </div>
                       
                         <div class="col-md-6">
                           <div class="form-group">
                               <label>5. Country <span>*</span></label>
                              
                                  <select name="country"  class="js-example-basic-single3 form-control common-show"id="category" required >
                                    <option value="" >-----</option>
                                    @foreach($country as $stateData)
                                    <option value="{{$stateData->id}}" @if(!empty($listing->
                                    state_id) && $listing->
                                    state_id==$stateData->id) selected @endif>
                                    {{ $stateData->name }}</option>
                                    @endforeach
                               
                               </select>
                           </div>
                        </div>
                         <div class="col-md-6">
                           <div class="form-group">
                               <label>6. State<span>*</span></label>
                              <select class="js-example-basic-single4 form-control common-show" name="state"  id="subcategory_id" required>
                                   <option value="">----</option>
                                  
                                   
                               </select>
                           </div>
                        </div>-->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>7. Address<span></span></label>
                                <textarea  class="form-control form-control-subject" placeholder="Address" name="address" id="subject"
                               ></textarea>
                            </div>
                         </div>
                       
                         <div class="col-md-12" style="margin-top:20px;"><label>8. Your Social Media Links  <span></span></label></div>
                         <div class="col-md-6">
                           <div class="form-group">
                               
                              <input class="form-control " placeholder="Facebook " name="facebook" id=""
                                 type="text"  >
                           </div>
                        </div>
                         <div class="col-md-6">
                             <div class="form-group">
                                <input class="form-control " placeholder="Twitter" name="instagram" id=""
                                 type="text" >
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                             <input class="form-control " placeholder="Instagram" name="twitter" id=""
                                 type="text" >
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                             <input class="form-control " placeholder="Linkedin" name="linkedin" id=""
                                 type="text" >
                             </div>
                         </div>
                         
            
                         
                         <div class="col-md-6">
                            <label>9. Where did you get reference from?  <span></span></label>
                           <div class="form-group">
                           <select class="form-control " name="reference">
                           <option value="">---</option>
                           <option value="Influencer">Influencer</option>
                           <option value="Social Media">Social Media</option>
                           <option value="Websites">Websites</option>
                           <option value="Friends/family">Friends/family</option>
                           <option value="Others">Others</option>

                           </select>
                           </div>
                        </div>
                         <div class="col-md-6">
                            <label>10. Which courses you offer? <span></span></label>
                             <div class="form-group">
                                <input class="form-control " placeholder="Courses you offer" name="course_offer" id=""
                                 type="text" >
                             </div>
                         </div>
                         
   
                         <div class="col-md-6">
                            <label style="padding-bottom: 27px;"> 11. Do you have conference room?</label>
                            <br>
                             <div class="form-group multi-show">
                                 <select class="form-control"  name="conf_room">
                                    <option>---</option>
                                     <option>Yes</option>
                                     <option>No</option>
                                 </select>
                              <!--  <select class="form-control" name="hear_about_us[]" id="multiple-checkboxes" multiple="multiple">
                                  
                                  <option value="Womennovator Community">Womennovator Community</option>
                                   <option value="Social Media">Social Media</option>
                                   <option value="Friends/Family">Friends/Family</option>
                                   <option value="Fellow Influencer">Fellow Influencer</option>
                                    <option value="Press Release">Press Release</option>
                               </select>-->
                             </div>
                         </div>
                         <div class="col-md-6">
                            <label> 12. How many people can accommodate in the conference room?</label>
                             <div class="form-group multi-show">
                                 <select class="form-control" name="accommodation_in_conf" >
                                <option value="">---</option>
                                <option value="20-30">20-30</option>
                                <option value="30-50">30-50</option>
                                <option value="50-70">50-70</option>
                                <option value="70-100">70-100</option>
                                <option value="More">More</option>
                                 </select>
                             
                             </div>
                         </div>
                         <div class="col-md-12">
                            <label> 13. Can you help us in outreach through social media campaign?</label>
                             <div class="form-group">
                                <div class="gender"><input type="radio" class="form-control " name="outreach_media" value="Yes" >Yes</div>
                                <div class="gender"><input type="radio" class="form-control " name="outreach_media" value="No">No</div>
                                
                             </div>
                         </div>
                         <div class="col-md-12">
                            <label>14. Can you provide volunteers for local events?</label>
                             <div class="form-group " >
                                <div class="gender"><input type="radio" class="form-control " name="volunteers" value="Yes" >Yes</div>
                                <div class="gender"><input type="radio" class="form-control " name="volunteers" value="No">No</div>
                                
                             </div>
                         </div>
                         <div class="col-md-12">
                            <label>15. Have you ever hosted any women entrepreneur's focused initiative?</label>
                             <div class="form-group " >
                                <div class="gender"><input type="radio" class="form-control " name="hosted_initiative" value="Yes" >Yes</div>
                                <div class="gender"><input type="radio" class="form-control " name="hosted_initiative" value="No">No</div>
                                
                             </div>
                         </div>
                         <div class="col-md-12">
                            <label>16. Can you allot professors to help in shortlisting and due diligence of applications received?</label>
                             <div class="form-group ">
                                <div class="gender"><input type="radio" class="form-control " name="allot_prof" value="Yes" >Yes</div>
                                <div class="gender"><input type="radio" class="form-control " name="allot_prof" value="No">No</div>
                                
                             </div>
                         </div>
                         <br>
                         <div class="col-md-12">
                         </div>
                         <div class="col-md-6">
                            <label style="padding-top: 20px;">17. Which kind of program you want to be partner with us :</label>
                             <div class="form-group multi-show">
                                 <select class="form-control" name="kind_of_prog[]" id="multiple-checkboxes" multiple="multiple">
                                    <option value="we-pitch">we-pitch</option>
                                    <option value="we-talk">we-talk</option>
                                    <option value="we-embassy">we-embassy</option>
                                    <option value="vendor-meet">vendor-meet</option>
                                    <option value="we-cell">we-cell</option>
                                    <option value="other">other</option>
                                 
                               </select>
                                
                             </div>
                         </div>
                         <div class="col-md-6">
                            <label style="padding-top: 20px;">18.  Upload Your logo :</label>
                             <div class="form-group ">
                                <input type="file" class="form-control " name="logo" value="" style="padding: 8px 30px;
height: 47px;">
                               
                                
                             </div>
                         </div>
                         <div class="col-md-6">
                            <label>19. Which category would you like to choose</label>
                             <div class="form-group">
                                 <select class="form-control" name="category">
                                    <option value="1">100-smart cities</option>
                                    <option value="2">sector</option>
                                   
                                 
                               </select>
                                
                             </div>
                         </div>
                         <div class="col-md-12" >
                             <div style="    display: inline-flex;
                             ">
                            <input type="checkbox" class="form-control " name="declare" value="Yes" style="width: 20px;" >
                        <span style="font-size: 12px;line-height: 15px;"> I hereby declare the information provided by me is correct to the best of my knowledge and I am aware that in case of any wrong and incorrect information my application is liable to be rejected.</span>
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <a href="https://womennovators.com/" type="button" class="btn-ok">Ok</a>
        </div>
      
    </div>
  </div>
</div>
<!--pop-up End-->

      <!-- Javascript Files
            ================================================== -->
      <!-- initialize jQuery Library -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
       <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
          alert(msg);
        }
      </script>
      <script>
    $(function(){
       $('#category').on('change',function(){
           var category_id =$(this).val();

        $.ajax({
            type: "GET",
            url: "{{ url('apply-for-influencer') }}",
            data: "category_id="+category_id,
            success : function(res){
            
                $('#subcategory_id').html(res);

                
            },
            error : function(){

            },
        });
       });
       
    }); 
  
     
    </script>

<script>
function maxlength(element, maxvalue){
    var q = element.value.split(/[\s]+/).length;
    if(q > maxvalue){
        var r = q - maxvalue;
        alert("Sorry, you have input "+q+" words into the "+
        "text area box you just completed. It can return no more than "+
        maxvalue+" words to be processed. Please abbreviate "+
        "your text by at least "+r+" words");
        return false;
    }
}

       <script>function CheckColors(val){
 var element=document.getElementById('sector');
 if(val=='other sector'||val=='others')
   element.style.display='block';
 else  
   element.style.display='none';
}</script>
      
          <script>function Checkdomain(val){
 var element=document.getElementById('domain');
 if(val=='other expertise'||val=='others')
   element.style.display='block';
 else  
   element.style.display='none';
}</script>
       
       <script>
       
       $(function() {
        $('#add').on('click', function( e ) {
            e.preventDefault();
            $('<div/>').addClass( 'new-text-div' )
            .html( $('<div class="row"><div class="col-sm-6 "><div class="form-group"><input class="form-control" placeholder="Name" name="friend_name[]" type="textbox"/></div></div><div class="col-sm-6"><div class="form-group"><input class="form-control" placeholder="Email Id" name="friend_email[]" type="textbox"/></div></div></div>').addClass( 'someclass' ) )
            .append( $('<button/>').addClass( 'remove' ).html( '<i class="fa fa-minus" aria-hidden="true"></i> Remove' ) )
            .insertBefore( this );
        });
        $(document).on('click', 'button.remove', function( e ) {
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
            .html( $('<div class="row space-m"><div class="col-sm-6"><div class="form-group"><input placeholder="Other links" class="form-control" name="media_link[]" type="textbox"/></div></div></div>').addClass( 'someclass' ) )
            .append( $('<button/>').addClass( 'remove2' ).html( '<i class="fa fa-minus" aria-hidden="true"></i> Remove' ) )
            .insertBefore( this );
        });
        $(document).on('click', 'button.remove2', function( e ) {
            e.preventDefault();
            $(this).closest( 'div.new-text-div' ).remove();
        });
    });
       
       </script>
       <script>
       $("input[type='radio']").change(function(){
   
if($(this).val()=="area")
{
    $("#area1").show();
    $("#area1").addClass("showclass");
     $("#sector1").hide(); 
        $("#sector1").removeClass("showclass");
    
}
else if($(this).val()=="sector")

{     $("#sector1").show();
       $("#area1").hide(); 
        $("#area1").removeClass("showclass");
         $("#sector1").addClass("showclass");
}
    
});
</script>
<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
$(document).ready(function() {
    $('.js-example-basic-single2').select2();
});
$(document).ready(function() {
    $('.js-example-basic-single3').select2();
});
$(document).ready(function() {
    $('.js-example-basic-single4').select2();
});
$(document).ready(function() {
    $('.js-example-basic-single5').select2();
});
</script>
  @endsection