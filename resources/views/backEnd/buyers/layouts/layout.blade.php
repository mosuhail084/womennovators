<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="Author" content="Spruko Technologies Private Limited">
   
    <!-- Title -->
    <title>Womenmark</title>

    
    <!-- stylesheet start -->
    @include('backEnd.buyers.layouts.includes.stylesheet')
    <!-- stylesheet end -->
</head>

<body class="main-body  app sidebar-mini">

 <!-- leftsidebar start -->
 @include('backEnd.buyers.layouts.includes.leftsidebar')
 <!-- leftsidebar end -->


    <!-- header start -->
    @include('backEnd.buyers.layouts.includes.header')
    <!-- header end -->

    

 

    <!-- Main Content start-->
    @yield('admin_content')
    <!-- Main Content end-->


  
    <!-- rightsidebar start -->
    @include('backEnd.buyers.layouts.includes.rightsidebar')
    <!-- rightsidebar end -->

     <!-- footer start -->
     @include('backEnd.buyers.layouts.includes.footer')
     <!-- footer end -->
  
<!-- Back-to-top -->
<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>


    <!-- js bar start-->
    @include('backEnd.buyers.layouts.includes.js')
    <!-- js bar end -->
   

    
    </body>
    
    </html>