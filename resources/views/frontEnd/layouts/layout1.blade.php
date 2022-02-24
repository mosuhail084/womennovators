<!DOCTYPE html>
<html lang="zxx">  
    
<!-- Mirrored from keenitsolutions.com/products/html/educavo/index12.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 May 2021 02:48:41 GMT -->
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Covid Care</title>
        <!-- stylesheet start-->
        @include('frontEnd.layouts.includes.stylesheet')
        <!-- stylesheet end-->
</head>
<body class="home-style2">
 <!--Preloader area start here-->
 <div id="loader" class="loader">
            <div class="loader-container">
                <div class='loader-icon'>
                    <img src="{{ url('frontEnd/assets/images/womennovator.png')}}" alt="">
                </div>
            </div>
        </div>
        <!--Preloader area End here-->
    <!-- header start-->
    @include('frontEnd.layouts.includes.header1')
     <!-- End header-->   

      <!-- Main Content start-->
    @yield('frontEnd_contents')
    <!-- Main Content end-->

    <!-- Footer start-->
    @include('frontEnd.layouts.includes.footer1')
    <!-- footer End -->

            <!-- start scrollUp  -->
            <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->

        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="flaticon-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Here..." type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->

        <!-- js bar start-->
        @include('frontEnd.layouts.includes.js')
        <!-- js bar End-->


</body>
</html>