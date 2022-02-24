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
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- stylesheet start -->
    @include('backEnd.layouts.includes.stylesheet')
    <!-- stylesheet end -->
</head>
@if(Request::path() == 'admin/login')
<body class="main-body  app sidebar-mini" style="background:linear-gradient(45deg, #231ab5, #6d061ec7)">
@elseif(Request::path() == 'faces/login')
<body class="main-body  app sidebar-mini" style="background-color:#F1F1F1;">
@elseif(Request::path() == 'faces/register')
<body class="main-body  app sidebar-mini" style="background-color:#F1F1F1;">
    @elseif(Request::path() == 'influencer/login')
<body class="main-body  app sidebar-mini" style="background-color:#F1F1F1;">
<!-- <body class="main-body  app sidebar-mini"style="background:linear-gradient(45deg, #231ab5, #6d061ec7)"> -->
@else
<body class="main-body  app sidebar-mini" style="background:linear-gradient(45deg, #f54266, #3858f9)">
@endif

 

    <!-- Main Content start-->
    @yield('admin_content')
    <!-- Main Content end-->



  
<!-- Back-to-top -->
<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>


    <!-- js bar start-->
    @include('backEnd.layouts.includes.js')
    <!-- js bar end -->
   

    
    </body>
    
    </html>