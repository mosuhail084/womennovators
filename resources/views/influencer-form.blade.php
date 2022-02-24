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

      
   

      <div id="page-banner-area" class="page-banner-area" style="background-image:url(globalsummit/images/hero_area/banner_bg.jpg)">
			<!-- Subpage title start -->
			<div class="page-banner-title">
				<div class="text-center">
					<h2>Influencer</h2>
					
				</div>
			</div><!-- Subpage title end -->
		</div><!-- Page Banner end -->
   
      <!-- <section class="ts-intro-content">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                   <div style="margin-bottom: 30px;">
						<h2 class="section-title text-center become-sponsor" >Roles of Influencers</h2>
                   </div>
               </div><!-- col end
              
            </div><!-- row end
             <div class="row">
                <div class="col-sm-6">
                    <ul class="list-content" style="color: black;">
                        <li> Influencers have to choose either a city (100 Smart Cities) or a sector of their expertise to apply for Womennovator 2020. For your reference the link of 100 cities and some sectors is attached in application form. However, you as an Influencer can create your own sector.</li>
                        <li> Influencers have to propose at least 6 Jury Members with brief notes about them. All proposed jury members should be in a particular category/city and the final jury has to be concluded with Womennovator team.</li>
                        <li> You as an Influencer have to share your high resolution picture with a short Bio-data in order to create your own creative.</li>
                        <li> You have to share pictures of the final jury (6 selected  ) with a small write up about them.</li>
                        <li> Your category should get minimum 50 applications.</li>
                        <li> You have to help jury members to select best 9 names out of total applications received in the particular city/sector allocated.</li>
                         <li> You have to help jury members in the process of selection and verification with partner association and institution.</li>
                     <li> You have to provide mentorship and business connect to the selected candidates in your category.</li>
                      <!--    <li> You shall help the final 9 to prepare their 60 seconds pitches for final event. </li>
                        <li> You are required to create buzz on social media to promote the initiative and get.</li>
                <li> You have to design Application Form for your respected sector or city.</li>
            <li> You have to make your Sector/Cities selection criteria and Grading system.</li>
                        
        </ul>
                </div>
                <div class="col-sm-6">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/k5I6-J8djsM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-sm-12">
                    <ul>
                       
                    </ul>
                </div>
             </div>
         </div> <!-- container end
      </section>-->
     
        
       <section class="ts-contact-form">
           <div class="col-sm-12" style="margin-top:20px;">
    <div class="text-center">
        <h6 style="margin-bottom:30px;">Already Applied! click below to Login</h6>
        <a target="_blank" href="{{url('influencer/login')}}" class="btn">Login Now</a>
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
                  <form id="contact-form" class="contact-form" action="{{url('add/influencer')}}" method="post">
                      @csrf
                     <div class="error-container"></div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                               <label>1. Name <span>*</span></label>
                              <input class="form-control form-control-name" placeholder="Name" name="name" id="f-name"
                                 type="text" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label>2. Email <span>*</span></label>
                              <input class="form-control form-control-name" placeholder="Email" name="email" id="l-name"
                                 type="email" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label>3. Contact Number</label>
                              <input type="number" class="form-control form-control-subject" placeholder="Contact Number" name="number" id="subject"
                                 >
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label>4. Gender </label>
                               <div class="form-group-2">
                                   <div class="gender"><input type="radio" class="form-control " name="gender" value="Male" >Male</div>
                                   <div class="gender"><input type="radio" class="form-control " name="gender" value="Female">Female</div>
                                   <div class="gender"><input type="radio" class="form-control " name="gender" value="Binary" >Binary</div>
                                   <div class="gender"><input type="radio" class="form-control " name="gender" value="Prefer not to say" >Prefer not to say</div>
                               </div>
                           </div>
                        </div>
                         <div class="col-md-12">
                            <h4>Let's get to know you better!</h4>
                             <h6>I am based out of </h6>
                            
                         </div>
                         <div class="col-md-4">
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
                         <div class="col-md-4">
                           <div class="form-group">
                               <label>6. State<span>*</span></label>
                              <select class="js-example-basic-single4 form-control common-show" name="state"  id="subcategory_id" required>
                                   <option value="">----</option>
                                  
                                   
                               </select>
                           </div>
                        </div>
                         <div class="col-md-4" style="margin-top:3px;">
                           <div class="form-group">
                               <br>
                               <input type="text" class="form-control form-control-subject" placeholder="City" name="city" id="subject"
                                 >
                         </div>
                        </div>
                         <div class="col-md-12">
                             <label style="display: block;">7. I wish to be an Influencer for <span>*</span></label>
                        </div>
                         <div class="col-md-6">
                           <div class="form-group">
                                
                               <input type="radio" name="area" value="area">  My City/Area        
                             
                                 <select class=" js-example-basic-single form-control " name="area"   id="area1"   style="display:none;" required>
                                    <option value="" >-----</option>
                                    @foreach($city as $cityData)
                                    <option value="{{$cityData->id}}" >
                                    {{ $cityData->name }}</option>
                                    @endforeach
                               
                               </select>
                              
                           </div>
                        </div>
                         <div class="col-md-6">
                           <div class="form-group">
                               <input type="radio" name="area" value="sector"> My Industry/Sector
                              <select name="sector" value="sector" id="sector1" onchange='CheckColors(this.value);'  class="js-example-basic-single2 form-control"  style="display:none;" required>
                                   <option>-----</option>
                                   
                                @foreach($sector as $sectorData)
                                    <option value="{{$sectorData->id}}" >
                                    {{ $sectorData->sectorname }}</option>
                                    @endforeach   
                                    
                                   <option value="others">Others</option>
                                   
                               </select>
                              <input type="text" class="form-control " placeholder="Other Sector" name="sector_others" id="sector" style='display:none; margin-top: 10px;'/>
                           </div>
                        </div>
                        <br>
                         <div class="col-md-6">
                            <label>8. My Domain Expertise</label>
                            <select class="js-example-basic-single5 form-control common-show" name="domain" onchange='Checkdomain(this.value);' style='margin-bottom: 23px;'>
                             <option value="0" >-----</option>
                                        <option value="17">Accounting</option>
                                        <option value="1">Agriculture</option>
                                        
                                        <option value="2">Education</option>
                                        <option value="3">Engineering</option>
                                         <option value="15">Entertainment</option>
                                        <option value="4">Finance and Insurance</option>
                                        <option value="5">Food Beverage</option>
                                        <option value="6">Healthcare</option>
                                        <option value="7">Hospitality</option>
                                        <option value="10">Manufacturing</option>
                                        <option value="11">Media And Publishing</option>
                                        <option value="12">Online Commerce</option>
                                        <option value="13">Professional Service</option>
                                         <option value="14">Sports</option>
                                        <option value="8">Travel</option>                                        <option value="16">Technology and Software</option>
                                        
                                        <option value="others">Others</option>
                                       </select> 
                         </div>
                         <br>
                         
                         <div class="col-md-6">
                            <input type="text" class="form-control " placeholder="Other domain Expertise" name="expertise_others" id="domain" style='display:none; margin-top: 36px;height: 52px;margin-bottom: 36px;'/>
                           </div>
                       
                          <br>
                         <div class="col-md-12" style="margin-top:20px;"><label>9. Your Social Media Links  <span>*</span></label></div>
                         <div class="col-md-6">
                           <div class="form-group">
                               
                              <input class="form-control " placeholder="Facebook *" name="facebook" id=""
                                 type="text"  required>
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
                         <div style="position: relative; width: 100%;"><button   id="add2"><i class="fa fa-plus" aria-hidden="true"></i> Add more</button></div>
                          <div class="col-md-12">
                           <div class="form-group">
                               <label>10.Tell us about your Journey <span>*</span> </label>
                               <textarea style="height: 150px;  border-radius: 20px;" type="text" class="form-control form-control-subject" name="about_journey" id="box_id" required
                                 ></textarea>
                                 <small style="margin-left: 733px;">word limit: up to 500 words</small>
                           </div>
                        </div>
                         
                         
                         <div class="col-md-12">
                            <label>11. How did you hear about us? </label>
                         </div>
                         
                         <div class="col-md-6">
                             <div class="form-group multi-show">
                                <select class="form-control" name="hear_about_us[]" id="multiple-checkboxes" multiple="multiple">
                                  
                                  <option value="Womennovator Community">Womennovator Community</option>
                                   <option value="Social Media">Social Media</option>
                                   <option value="Friends/Family">Friends/Family</option>
                                   <option value="Fellow Influencer">Fellow Influencer</option>
                                    <option value="Press Release">Press Release</option>
                               </select>
                             </div>
                         </div>
                         <div class="col-md-6"></div>
                         <div class="clearfix "></div>
                          <div class="col-sm-12">
                              <div class="form-group">
                                   <label>12.Invite your Friend(s) to join our Community</label>
                            
                         
                             </div>
                         </div>
                         <div class="col-sm-6">
                              <div class="form-group">
                                   
                            <input class="form-control " placeholder="Name" name="friend_name[]" id=""
                                 type="text" >
                         
                             </div>
                         </div>
                         <div class="col-sm-6">
                              <div class="form-group">
                                  
                             <input class="form-control " placeholder="Email Id" name="friend_email[]" id=""
                                 type="email" >
                             </div>
                         </div>
                             
                         </div>
                         
                 
                            <div class="" style="position: relative;"><button   id="add"><i class="fa fa-plus" aria-hidden="true"></i> Add more</button></div>
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
            <p>We shall get back to you within two working days.</p>
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
  @if(!empty(Session::get('error_code')) && Session::get('error_code') == 5)
<script>
$(function() {
    $('#exampleModal').modal('show');
});
</script>
@endif
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