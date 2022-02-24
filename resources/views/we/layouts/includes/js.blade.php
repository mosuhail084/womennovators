{{-- abhishek code start --}}
{{-- <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.min.js"
      integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script> --}}

  {{-- <script src="js/index.js"></script> --}}


    {{-- abhishek code end --}}


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> --}}
<script src="js/compressed.js"></script>

<!--<script src="js/selectize.min.js"></script>-->

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.js"></script>
  <script src="js/main.js"></script>
<!--	<script src="{{url('we/js/selectize.min.js')}}"></script>-->
<script type="text/javascript" src="js/FormValidation.js"></script>

<!--	<script src="{{url('we/js/selectize.min.js')}}"></script>-->
 <script>
  var $carousel = $('.slider');

var settings = {
  dots: false,
  arrows: true,
  slide: '.slick-slideshow__slide',
  slidesToShow: 3,
  centerMode: true,
  centerPadding: '60px',
    responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
};

function setSlideVisibility() {
  //Find the visible slides i.e. where aria-hidden="false"
  var visibleSlides = $carousel.find('.slick-slideshow__slide[aria-hidden="false"]');
  //Make sure all of the visible slides have an opacity of 1
  $(visibleSlides).each(function() {
    $(this).css('opacity', 1);
  });

  //Set the opacity of the first and last partial slides.
  $(visibleSlides).first().prev().css('opacity', 0);
}

$carousel.slick(settings);
$carousel.slick('slickGoTo', 1);
setSlideVisibility();

$carousel.on('afterChange', function() {
  setSlideVisibility();
});
        $('.backers').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 6,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
</script>

 @if(!empty(Session::get('error_code')) && Session::get('error_code') == 6)
<script>
$(function() {
    $('#request-suss').modal('show');
});
</script>
@endif
 @if(!empty(Session::get('error_code')) && Session::get('error_code') == 7)
<script>
$(function() {
    $('#request-suss').modal('show');
});
</script>
@endif
 @if(!empty(Session::get('error_code')) && Session::get('error_code') == 8)
<script>
$(function() {
    $('#request-suss').modal('show');
});
</script>
@endif
@if(!empty(Session::get('error_code')) && Session::get('error_code') == 9)
<script>
$(function() {
    $('#request-suss').modal('show');
});
</script>

@endif
  <!--<script src="js/switcher.js"></script>-->
  