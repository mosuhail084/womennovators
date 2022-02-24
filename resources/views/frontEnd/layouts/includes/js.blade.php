



      <!-- Javascript Files
            ================================================== -->
      <!-- initialize jQuery Library -->
        <script src="{{url('globalsummit/js/jquery.js')}}"></script>

      <script src="{{url('globalsummit/js/popper.min.js')}}"></script>
      <!-- Bootstrap jQuery -->
      <script src="{{url('globalsummit/js/bootstrap.min.js')}}"></script>
      <!-- Counter -->
      <script src="{{url('globalsummit/js/jquery.appear.min.js')}}"></script>
      <!-- Countdown -->
      <script src="{{url('globalsummit/js/jquery.jCounter.js')}}"></script>
      <!-- magnific-popup -->
      <script src="{{url('globalsummit/js/jquery.magnific-popup.min.js')}}"></script>
      <!-- carousel -->
      <script src="{{url('globalsummit/js/owl.carousel.min.js')}}"></script>
      <!-- Waypoints -->
      <script src="{{url('globalsummit/js/wow.min.js')}}"></script>
    
      <!-- isotop -->
      <script src="{{url('globalsummit/js/isotope.pkgd.min.js')}}"></script>

      <!-- Template custom -->
      <script src="{{url('globalsummit/js/main.js')}}"></script>



  

    </script>
      <!-- <script src="globalsummit/js/jquery.js"></script>-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
     
      

      <!-- Template custom -->
      <script src="globalsummit/js/main.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
        jQuery(document).ready(function() {  
            jQuery('#multiple-checkboxes').multiselect();  
        }); 
       </script>
       @if(!empty(Session::get('error_code')) && Session::get('error_code') == 5)
<script>
$(function() {
    $('#exampleModal1000').modal('show');
});
</script>

@endif
@if(!empty(Session::get('error_code')) && Session::get('error_code') == 6)
<script>
$(function() {
$('#exampleModaltrophy').modal('show');
});
</script>
@endif
@if(!empty(Session::get('error_code')) && Session::get('error_code') == 7)
<script>
$(function() {
$('#exampleModalcorrect').modal('show');
});
</script>
@endif

<script>
    $(document).ready(function(){
  $("#contact-form").on("submit", function(){
    $("#pageloader").fadeIn();
  });//submit
});
</script>

<script>
  $(document).ready(function(){
  $('#issue').on('change', function() {
    //alert(issue);
   if ( this.value == 'Name correction')
    {
      $("#div1").show();
      $("#div2").hide();
    
      $("#div3").hide();
    }
    else if ( this.value == 'Category wrong')
    {
      $("#div1").hide();
      $("#div2").show();
    
      $("#div3").hide();
    }
    else if ( this.value == 'Or any other ? Specify')
    {
      $("#div1").hide();
      $("#div2").hide();
    
      $("#div3").show();
    }
    else
    {
      $("#div1").hide();
      $("#div2").hide();
    
      $("#div3").hide();
    }
  });
});
</script>

