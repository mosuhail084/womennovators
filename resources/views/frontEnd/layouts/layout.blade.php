<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Basic Page Needs ================================================== -->
   <meta charset="utf-8">

   <!-- Mobile Specific Metas ================================================== -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

   <!-- Site Title -->
 
    <title>Womennovators</title>

    
    <!-- stylesheet start -->
    @include('frontEnd.layouts.includes.stylesheet')
   
    <!-- stylesheet end -->
</head>

<body>
   <div class="body-inner">



    <!-- header start -->
    @include('frontEnd.layouts.includes.header')
    <!-- header end -->

    

 

    <!-- Main Content start-->
    @yield('admin_content')
    <!-- Main Content end-->


 

     <!-- footer start -->
     @include('frontEnd.layouts.includes.footer')
     <!-- footer end -->
  
<!-- Back-to-top -->
<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>


    <!-- js bar start-->
    @include('frontEnd.layouts.includes.js')
    <!-- js bar end -->
   

    </div>
    </body>
    
    </html>