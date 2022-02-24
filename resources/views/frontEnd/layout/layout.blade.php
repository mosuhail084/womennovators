<!DOCTYPE html>
<html lang="zxx">  
    
<!-- Mirrored from keenitsolutions.com/products/html/educavo/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Jul 2021 09:15:10 GMT -->
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Womenmark</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
     
           <!-- stylesheet start -->
    @include('frontEnd.layout.include.stylesheet')
 
    <!-- stylesheet end -->
</head>
<body class="defult-home">
 
        <!--Preloader area start here
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class='loader-icon'>
                    <img src="{{ url('frontEnd/images/logowomenmark.png')}}" style="height:100%; width:150%;" alt="">
                </div>
            </div>
        </div>
        <!--Preloader area End here--> 



    <!-- header start -->
    @include('frontEnd.layout.include.header')
    <!-- header end -->

    

 

    <!-- Main Content start-->
    @yield('frontend_content')
    <!-- Main Content end-->


  
    

     <!-- footer start -->
     @include('frontEnd.layout.include.footer')
     <!-- footer end -->
  



    <!-- js bar start-->
    @include('frontEnd.layout.include.js')
    <!-- js bar end -->
   

    
    </body>
    
    </html>