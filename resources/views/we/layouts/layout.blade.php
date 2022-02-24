<!DOCTYPE html>

<html class="no-js">
<!--<![endif]-->

<head>
	<title>Womennovators</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Site Title -->
 
    <title>Womennovators</title>

    
    <!-- stylesheet start -->
    @include('we.layouts.includes.stylesheet')
   
    <!-- stylesheet end -->

</head>

<body>
    <div id="canvas">
        <div id="box_wrapper">



    <!-- header start -->
    @include('we.layouts.includes.header')
    <!-- header end -->

    

 

    <!-- Main Content start-->
    @yield('front_content')
    <!-- Main Content end-->


 

     <!-- footer start -->
     @include('we.layouts.includes.footer')
     <!-- footer end -->
  
<!-- Back-to-top -->
<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>


    <!-- js bar start-->
    @include('we.layouts.includes.js')
    <!-- js bar end -->
   

    </div>
</div>
    </body>
    
    </html>