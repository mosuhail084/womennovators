
@extends('backEnd.layouts.layout') @section('admin_content')
<!-- container -->
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Hi, welcome back!</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Project</li>
                </ol>
            </nav>
        </div>
     
    </div>
    <!-- /breadcrumb -->
    <!-- main-content-body -->
   			<!-- row -->
               <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="main-content-label mg-b-5">
                               Send Mail
                         
                            </div>
                            <form method="post" action="{{ route('mail.store')}}" enctype="multipart/form-data">
                                @csrf
                                @component('backEnd.components.alert')

                                @endcomponent
                 
                                @include('backEnd.mail.form')
                            </form>
                        </div>
                    </div>
                </div>
               
            </div>
            <!-- /row -->

    <!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /main-content -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    //jQuery.noConflict();
    function readURL(input) {
        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function (e) {
                jQuery('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    jQuery("#profile-img").change(function () {
        readURL(this);
    });

</script>
<script>
    $(function(){
       $('#event_id').on('change',function(){
           var event_id =$(this).val();

          // alert(event_id);
        $.ajax({
            type: "GET",
            url: "{{ url('admin/mail/create') }}",
            data: "event_id="+event_id,
            success : function(res,res1){
                
                $('#jury_id').html(res);
            /*    $.ajax({
                    type: "GET",
                    url: "{{ url('admin/mail/face') }}",
                    data : {
                            'event_id' : event_id
                            },
                     datatype: "json",
                    success: function(data) {
                        console.log(data);
                    },
                    error: function(data){
                        console.log("fail");
                    }
                    });


*/


                    $.ajax({
                    type: "GET",
                    url: "{{ url('admin/mail/face') }}",
                    data: "event_id="+event_id,
                    //'id' :CLIENT_ID,
                    success : function(res){
                //  alert(user_id);
                        $('#user_id').html(res);   
                        
                    },
                    error : function(){
        
                    },
                });

              //  $('#user_id').html(res1); 
              //  $('#jury_id').html('');

                
            },
            error : function(){

            },
        });
       });
    }); 
    </script>
    

<script>
    $(document).ready(function(){
        //alert("hi");

        //$("#Face").hide();
       // $("#Jury").hide();
       //$("#Face").css("display", "none");
       //$("#Jury").css("display", "none");
        $("#type").change(function(){
            $(this).find("option:selected").each(function(){
                var optionValue = $(this).attr("value");
               //alert(optionValue);
               if(optionValue=='jury'){
                   // $("#Face").hide();
                   // $("#Jury").show();
                    $("#Face").css("display", "none");
                    $("#Jury").css("display", "block");
                    
                }
               else if(optionValue=='face'){
                   // $("#Jury").hide();
                   // $("#Face").show();
                    $("#Face").css("display", "block");
                    $("#Jury").css("display", "none");
                    
                }               
                else{
                   //alert("hello");
                   // $("#Face").hide();
                  //  $("#Jury").hide();
                  //$("#Face").css("display", "none");
                  //  $("#Jury").css("display", "none");
                  
                    
                }
            });
        }).change();
    });
    </script>
    <script>
        $(document).ready(function(){
            $("#template").change(function(){
                $(this).find("option:selected").each(function(){
                    var optionValue = $(this).attr("value");
                   // alert(optionValue);
             
                    if(optionValue==1){
                        $("#div2").hide();
                        $("#div1").show();
                        
                    }
                    else if(optionValue==2){
                        $("#div1").hide();
                        $("#div2").show();
                    }
                    else{
                        $("#div2").hide();
                        $("#div1").hide();
                       
                        
                    }
                });
            }).change();
        });
        </script>
         <script>
            $(document).ready(function(){
                $("#type").change(function(){
                    $(this).find("option:selected").each(function(){
                        var optionValue = $(this).attr("value");
                        //alert(optionValue);
                 
                        if(optionValue=='jury'){
                            $("#Face").hide();
                            $("#Jury").show();
                            
                        }
                        else if(optionValue=='face'){
                            
                            $("#Face").show();
                            $("#Jury").hide();
                        }
                        else {
                           //$("#Jury").hide();
                            //$("#Face").hide();
                           
                            
                        }
                    });
                }).change();
            });
            </script>
@endsection
