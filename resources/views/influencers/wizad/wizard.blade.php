@extends('influencers.layouts.layout') @section('admin_content')



<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script>
    $(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 600
});
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 600
});
});

$('.radio-group .radio').click(function(){
$(this).parent().find('.radio').removeClass('selected');
$(this).addClass('selected');
});

$(".submit").click(function(){
return false;
})

});
</script>
<style>
    * {
    margin: 0;
    padding: 0
}

html {
    height: 100%
}

#grad1 {
    background-color: : #9C27B0;
    background-image: linear-gradient(120deg, #FF4081, #81D4FA)
}

#msform {
    text-align: center;
    position: relative;
    margin-top: 20px
}

#msform fieldset .form-card {
    background: white;
    border: 0 none;
    border-radius: 1rem;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    padding: 20px 40px 30px 40px;
    box-sizing: border-box;
    width: 94%;
    margin: 0 3% 20px 3%;
    position: relative
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
}

#msform fieldset:not(:first-of-type) {
    display: none
}

#msform fieldset .form-card {
    text-align: left;
    color: #9E9E9E
}

#msform input,
#msform textarea {
    padding: 0px 8px 4px 8px;
    border: none;
    border-bottom: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 16px;
    letter-spacing: 1px
}

#msform input:focus,
#msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: none;
    font-weight: bold;
    border-bottom: 2px solid skyblue;
    outline-width: 0
}

#msform .action-button {
    width: 100px;
    background: #39A2DB;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0.5rem;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px
}

#msform .action-button:hover,
#msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue
}

#msform .action-button-previous {
    width: 100px;
    background: #616161;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
}

.hrStyle{
    border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
}

select.list-dt {
    border: none;
    outline: 0;
    border-bottom: 1px solid #ccc;
    padding: 2px 5px 3px 5px;
    margin: 2px
}

select.list-dt:focus {
    border-bottom: 2px solid skyblue
}

.card {
    z-index: 0;
    border: none;
    border-radius: 0.5rem;
    position: relative
}

.fs-title {
    font-size: 25px;
    color: #2C3E50;
    margin-bottom: 10px;
    font-weight: bold;
    text-align: left
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey
}

#progressbar .active {
    color: #000000
}

#progressbar li {
    list-style-type: none;
    font-size: 12px;
    width: 13%;
    float: left;
    position: relative
}

#progressbar #account:before {
    font-family: FontAwesome;
    content: "\f023"
}

#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f007"
}

#progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f09d"
}

#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c"
}
#progressbar #finish:before {
    font-family: FontAwesome;
    content: "\f00c"
}
#progressbar #qualification:before {
    font-family: FontAwesome;
    content: "\f007"
}
#progressbar #contact:before {
    font-family: FontAwesome;
    content: "\f007"
}

#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 18px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 13px;
    z-index: -1
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: skyblue
}

.radio-group {
    position: relative;
    margin-bottom: 25px
}

.radio {
    display: inline-block;
    width: 204;
    height: 104;
    border-radius: 0;
    background: lightblue;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    box-sizing: border-box;
    cursor: pointer;
    margin: 8px 2px
}

.radio:hover {
    box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
}

.radio.selected {
    box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
}

.fit-image {
    width: 100%;
    object-fit: cover
}
</style>
<script type="text/javascript">
    function ShowHideDiv() {
   //debugger;
    document.getElementById("friends_details").style.display = "block";
    document.getElementById('school_college').style.display = 'none';
    document.getElementById('company_details').style.display = 'none';
    document.getElementById('neighbour_resident').style.display = 'none';        
               
                 

    }
function ShowHideDiv1() {
     
//debugger;
                  
document.getElementById('company_details').style.display = 'block';
document.getElementById('school_college').style.display = 'none';
document.getElementById('friends_details').style.display = 'none';
document.getElementById('neighbour_resident').style.display = 'none';           
           

    }
function ShowHideDiv3() {
     
//debugger;
       
           
document.getElementById("school_college").style.display = "block";
document.getElementById('company_details').style.display = 'none';
document.getElementById('friends_details').style.display = 'none';
document.getElementById('neighbour_resident').style.display = 'none';                   
               
    }
    function ShowHideDiv4() {
     
     //debugger;
            
     document.getElementById('neighbour_resident').style.display = 'block';   
     document.getElementById("school_college").style.display = "none";
     document.getElementById('company_details').style.display = 'none';
     document.getElementById('friends_details').style.display = 'none';
                     
                    
         }
    
    function testdata() {
           //debugger;
            document.getElementById("highest").style.display = "block";
document.getElementById('network').style.display = 'none';

               
    }
    
     function hightest() {
         //  debugger;
            document.getElementById("highest").style.display = "none";
document.getElementById('contactdata').style.display = 'block';

               
    }
    
</script>

<script>
        $(document).ready(function () {
            $('#exampleFormControlSelect3').on('change', function () {
                if (this.value == 'other') {
                    $("#designationn").show();

                } else {
                    $("#designationn").hide();
                }
            });
        });

    </script>
<!-- MultiStep Form -->
<div class="container-fluid" id="grad1">
    <div class="row ">
        <div class="col-md-12">
            <div class="col-md-12">
                  <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <div class="text-center">
                     <h2 style="font-family:montserrat;"><strong>Become Our Influencers</strong></h2>
              <br/>
                </div>
                <ul class="text-center" id="progressbar">
                                <li class="active" id="account"><strong>Location</strong></li>
                                <li id="personal"><strong>Expertise </strong></li>
                                <li id="payment"><strong>Industry</strong></li>
                                <li id="confirm"><strong>Network</strong></li>
                                 <li id="qualification"><strong>Qualification</strong></li>
                                 <li id="contact"><strong>Contact Information</strong></li>
                                 
                            </ul> <!-- fieldsets -->
                <div class="row">
                    
                    <div class="col-md-7 ">
                        <form id="msform" action="{{url('influencer/create')}}" method="POST">
                            <!-- progressbar -->
                           @csrf
                            <fieldset>
                                <div class="form-card ui-widget"  >
                                    <h2 class="fs-title text-center">Where are you based?</h2>
                                    {{-- <hr class="hrStyle"> --}}
                                    <br>
                                     <input list="countryList" type="text" name="country" id="country_id"  placeholder="Country" />
                                     {{-- <div id="countryList"></div> --}}
                                     <datalist id="countryList" style="width:100%;"></datalist>
                                     <br/>
                                     <input type="text" name="city" id="city_id" placeholder="city" />
                                     <br/>
                                    <input type="text" name="area" placeholder="Area" />
                                    <br/>
                                </div> <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">What is your domain expertise ?</h2> 
                                    <br/>
                                    <br/> <br/>
                                   <!-- <input type="text" name="expertise" placeholder="Domain Expertise" /> -->
                                    <select name="expertise" class="select" style="height: 40px; width: 90%; border: grey 1px solid; border-radius: 0.5rem; color:black;">
                                        <option value="0" >Please Select One</option>
                                        <option value="1">Agriculture</option>
                                        <option value="2">Education</option>
                                        <option value="3">Engineering</option>
                                        <option value="4">Finance and Insurance</option>
                                        <option value="5">Food Beverage</option>
                                        <option value="6">Healthcare</option>
                                        <option value="7">Hospitality</option>
                                        <option value="8">Travel</option>
                                        <option value="10">Manufacturing</option>
                                        <option value="11">Media And Publishing</option>
                                        <option value="12">Online Commerce</option>
                                        <option value="13">Professional Service</option>
                                        <option value="14">Sports</option>
                                        <option value="15">Entertainment</option>
                                        <option value="16">Technology and Software</option>
                                        <option value="17">Accounting</option>
                                        <option value="19">Others</option>
                                    </select>
                                    <br/> <br/> <br/>
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                <input type="button" name="next"  onclick="abc()" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">What is your industry ?</h2>
                                   <br/>
                                    <br/> <br/>
                                    <input list="industryList" type="text" name="industry" id="industrssy" placeholder=" Enter your Industry" /> 
                                    {{-- <div id="industryList"></div> --}}
                                    <datalist id="industryList"></datalist>
                                    <br/> <br/> <br/>
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset id="network" style="display: none;">
                                <div class="form-card">
   
                                    <h2 class="fs-title text-center"> My Network has people from ?</h2> <br><br>
                                   <br/> <br/>
                                   <div class="">
                                       <div class="row">
                                           
                                           
                                           <div class="example">
                                               
                                                <a type="button" style="color:white;" onclick="ShowHideDiv()" class="btn btn-primary mt-1 mb-1"><i class="fa fa-user"></i> 
                                                My Friends </a>
                                                
                                                <a type="button" style="color:white;" onclick="ShowHideDiv1()" class="btn btn-success mt-1 mb-1">
                                                    <i class="fa fa-industry"></i>  
                                                    My Company </a>
                                                    
                                                    <a type="button" style="color:white;" onclick="ShowHideDiv3()" class="btn btn-info mt-1 mb-1"> <i class="fa fa-university"></i>  School & College </a>
                                                    
                                                    <a type="button" style="color:white;" onclick="ShowHideDiv4()" class="btn btn-warning mt-1 mb-1"><i class="fa fa-university"></i> Neighbour & Resident </a>
                                                    </div>
                                            </div>
                                       <br/>
                                    <div id="friends_details" style="display: none;" >
                                    <input type="text" name="friend_name" placeholder="Friend Details" />

                                    </div>



                                    <div id="company_details" style="display: none;" >
                                    <br/><input type="text" name="comp_name" placeholder="Company Name" />
                                    <input type="text" name="comp_design" placeholder="Designation" />

                                    </div>

                                    <div id="school_college" style="display: none;" >
                                    <input type="text" name="school_college" placeholder="School/College" /> 


                                    </div>
                                    <div id="neighbour_resident" style="display: none;" >
                                        <input type="text" name="residential_area" placeholder="Residential Area" /> 
    
    
                                        </div>

                                    </div>


                                    </div>
                                 <center>
                                                <input type="button" name="next" onclick="testdata()" class="next action-button" value="Next Step" />
                                               
                                               
                                           </center>
                            </fieldset>
                            
                            
                             <fieldset id="highest" style="display:none;">
                                <div class="form-card" >
                                    <h2 class="fs-title">What is your highest qualification ?</h2>
                                   <br/>
                                    <br/> <br/>
                                    <input list="qualificationList" type="text" name="qualification" id="qualification_dropdown" placeholder=" Highest Qualification" /> 
                                    {{-- <div id="qualificationList"></div> --}}
                                    <datalist id="qualificationList"></datalist>

                                  
                                    <br/> <br/> <br/>
                                </div> <input type="button" name="make_payment" onclick= "hightest()" class="next action-button" value="next" />
                            </fieldset>
                             <fieldset id="contactdata" style="display:non;">
                                <div class="form-card">
                                    <h2 class="fs-title">Where to Contact you  ?</h2>
                                   <br/>
                                    <br/> <br/>
                                    <input type="text" name="phone" placeholder=" Contact Number" /> 
                                    <br/> <br/> <br/>
                                </div>  <input type="submit" name="submit" class="next action-button" value="Confirm" />
                            </fieldset>
                            
                        </form>
                    </div>
                    <div class="col-md-5">
                      <div class="column mcb-column one-second column_column "><div class="column_attr clearfix" style="">
                          <br/>
                          <iframe width="500" height="280" style="border-radius: 10px;" src="https://www.youtube.com/embed/k5I6-J8djsM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></div></div>
                      </div>
                    </div>
                    
                </div>
                      <div class="card-body">
                          
                
            </div>
            </div>
          
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
    var siteUrl = "{{url('/')}}";
 </script>
<script>
   
     $('#country_id').keyup(function(){ 
            var query = $(this).val();
          //  debugger;
            if(query != '')
            {
             var _token = $('input[name="_token"]').val();
             $.ajax({
              url:"{{ route('autocomplete.fetch') }}",
              method:"POST",
              data:{query:query, _token:_token},
              success:function(data1){
                     //   $('#countryList').fadeIn(); 
                   //  debugger; 
                        $('#countryList').html(data1);
                        
              }
             });
            }
        });
        $('#qualification_dropdown').keyup(function(){ 
            var query = $(this).val();
           // debugger;
            if(query != '')
            {
             var _token = $('input[name="_token"]').val();
             $.ajax({
              url:"{{ route('autocomplete.qualification') }}",
              method:"POST",
              data:{query:query, _token:_token},
              success:function(data1){
                        // $('#qualificationList').fadeIn(); 
                    // debugger; 
                        $('#qualificationList').html(data1);
                        
              }
             });
            }
        });
        
        $('#industrssy').keyup(function(){ 
            //debugger;
            var query = $(this).val();
            if(query != '')
            {
             var _token1 = $('input[name="_token"]').val();
             $.ajax({
              url:"{{ route('autocomplete.industry') }}",
              method:"POST",
              data:{query:query, _token:_token1},
              success:function(data){
                    // debugger;
                        $('#industryList').html(data);
              }
             });
            }
        });
    
        // $(document).on('click', '#countryList li', function(){  
        //     $('#country_id').val($(this).text());  
        //     $('#countryList').fadeOut();  
        // });  
        // $(document).on('click', '#industryList li', function(){  
        //     $('#industrssy').val($(this).text());  
        //     $('#industryList').fadeOut();  
        // });  
        // $(document).on('click', '#qualificationList li', function(){  
        //     $('#qualification_dropdown').val($(this).text());  
        //     $('#qualificationList').fadeOut();  
        // }); 
    
    $(document).ready(function(){
    
    
    });
    </script>
<script>
  /*  $(document).ready(function(){
        alert('hello');
     $('#city_id').keyup(function(){ 
            var query = $(this).val();
            if(query != '')
            {
             var _token = $('input[name="_token"]').val();
             $.ajax({
              url:"{{ route('autocomplete.city') }}",
              method:"POST",
              data:{query:query, _token:_token},
              success:function(data){
                  
                        $('#city').fadeIn();  
                        $('#city').html(data);
              }
             });
            }
        });
    
        $(document).on('click', 'li', function(){  
            $('#city_id').val($(this).text());  
            $('#city').fadeOut();  
        });  
    
    });*/
    </script>
    <script>
/*
        $(document).ready(function() {
            
            $("#industry").autocomplete({
          
                source: function(request, response) {
                    $.ajax({
                    url: siteUrl + '/influencer/' +"autocompleteindustry",
                    data: {
                            term : request.term
                     },
                    dataType: "json",
                    success: function(data){
                       var resp = $.map(data,function(obj){
                            return obj.name;
                       }); 
                       //alert(resp);
                       response(resp);
                    }
                });
            },
            minLength: 2
         });
        });*/
        </script>
@endsection
