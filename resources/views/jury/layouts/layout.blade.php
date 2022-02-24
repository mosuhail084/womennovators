<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4">
    <!-- Title -->
    <title>WE-PITCH</title>

    
    <!-- stylesheet start -->
    @include('jury.layouts.includes.stylesheet')
    <!-- stylesheet end -->
</head>

<body class="main-body  app sidebar-mini">

 <!-- leftsidebar start -->
 @include('jury.layouts.includes.leftsidebar')
 <!-- leftsidebar end -->


    <!-- header start -->
    @include('jury.layouts.includes.header')
    <!-- header end -->

    

 

    <!-- Main Content start-->
    @yield('admin_content')
    <!-- Main Content end-->


  
    <!-- rightsidebar start -->
    @include('jury.layouts.includes.rightsidebar')
    <!-- rightsidebar end -->

     <!-- footer start -->
     @include('jury.layouts.includes.footer')
     <!-- footer end -->
  
<!-- Back-to-top -->
<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>


    <!-- js bar start-->
    @include('jury.layouts.includes.js')
    <!-- js bar end -->
   

    
    </body>
    
    </html>