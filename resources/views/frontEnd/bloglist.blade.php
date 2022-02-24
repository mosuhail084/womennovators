@extends('frontEnd.layouts.layout') @section('admin_content')

    <link rel="stylesheet" href="{{ url('frontendblog/css/reset.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ url('frontendblog/css/wordpress.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ url('frontendblog/css/animation.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ url('frontendblog/css/magnific-popup.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ url('frontendblog/css/jqueryui/custom.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ url('frontendblog/js/plugins/flexslider/flexslider.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ url('frontendblog/css/tooltipster.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ url('frontendblog/css/style.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ url('frontendblog/css/font-awesome.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ url('frontendblog/css/grid.css')}}" type="text/css" media="all">
<style>
    @media screen and (min-width: 1024px) and (max-height: 1310px) {
#post_featured_slider li .slider_image{
      height: 893px;
    margin-top: -108px;
  }
  .mobile {
   width: 91px
}
}
@media only screen and (max-width: 767px){
#post_featured_slider li .slider_image {
    margin-top: 44px;
        height: 250px;
}
.mobile {
   width: 54px
}
}
</style>
</head>



    <!-- Begin mobile menu -->
    <a id="close_mobile_menu" href="javascript:;"></a>
    <div class="mobile_menu_wrapper">
        <form role="search" method="get" name="searchform" id="searchform" action="index.html">
            <div>
                <input type="text" value="" name="s" id="s" autocomplete="off" placeholder="Search...">
                <button>
                    <i class="fa fa-search"></i>
                </button>
            </div>
            <div id="autocomplete"></div>
        </form>

        <div class="menu-side-mobile-menu-container">
            <ul id="mobile_main_menu" class="mobile_main_nav">
                <li class="megamenu col3 menu-item  menu-item-home menu-item-has-children">
                    <a href="index.html" aria-current="page">Home</a>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-has-children">
                            <a href="index.html">Layout 1</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-home">
                                    <a href="index.html" aria-current="page">Fullwidth Slider</a>
                                </li>
                                <li class="menu-item"><a href="layout-fullwidth.html">3 Columns Slider</a></li>
                                <li class="menu-item"><a href="layout-fixedwidth.html">Fixed Width Slider</a></li>
                                <li class="menu-item"><a href="layout-list.html">List</a></li>
                                <li class="menu-item"><a href="layout-full_list.html">Full Post + List</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="index.html">Layout 2</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="layout-full_right_sidebar.html">Full Post + Grid Right Sidebar</a></li>
                                <li class="menu-item"><a href="layout-full_left_sidebar.html">Full Post + Grid Left Sidebar</a></li>
                                <li class="menu-item"><a href="layout-full_fullwidth.html">Full Post + Grid Fullwidth</a></li>
                                <li class="menu-item"><a href="layout-right_sidebar.html">Right Sidebar</a></li>
                                <li class="menu-item"><a href="layout-left_sidebar.html">Left Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="index.html">Layout 3</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="layout-2cols.html">Grid 2 Columns</a></li>
                                <li class="menu-item"><a href="layout-3cols.html">Grid 3 Columns</a></li>
                                <li class="menu-item"><a href="layout-2cols_infinite.html">Grid 2 Columns + Infinite Scroll</a></li>
                                <li class="menu-item"><a href="layout-3cols_infinite.html">Grid 3 Columns + Infinite Scroll</a></li>
                                <li class="menu-item"><a href="layout-fullwidth.html">Fullwidth</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-has-children">
                    <a href="singleblog.html">Single Posts</a>
                    <ul class="sub-menu">
                        <li class="menu-item"><a href="single-right_sidebar.html">Right Sidebar Post</a></li>
                        <li class="menu-item"><a href="single-fullwidth.html">Single Fullwidth</a></li>
                        <li class="menu-item"><a href="single-left_sidebar.html">Single Left Sidebar Post</a></li>
                        <li class="menu-item"><a href="beauty-of-nature.html">Gallery Post</a></li>
                        <li class="menu-item"><a href="city-center-bridge.html">Review Post</a></li>
                        <li class="menu-item"><a href="golden-snow-land.html">Video Post</a></li>                        
                    </ul>
                </li>
                <li class="menu-item menu-item-has-children">
                    <a href="page-fullwidth.html">Pages</a>
                    <ul class="sub-menu">
                        <li class="menu-item"><a href="page-fullwidth.html">Fullwidth Page</a></li>
                        <li class="menu-item"><a href="page-right-sidebar.html">Right Sidebar Page</a></li>
                        <li class="menu-item"><a href="page-left-sidebar.html">Left Sidebar Page</a></li>
                        <li class="menu-item"><a href="page-background-header.html">Background Header Page</a></li>
                        <li class="menu-item menu-item-has-children">
                            <a href="blog-post-gallery.html">Gallery</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="gallery-2-columns.html">Gallery 2 Columns</a></li>
                                <li class="menu-item"><a href="gallery-3-columns.html">Gallery 3 Columns</a></li>
                                <li class="menu-item"><a href="gallery-4-columns.html">Gallery 4 Columns</a></li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="typography.html">Typography</a></li>
                        <li class="menu-item"><a href="shortcodes.html">Shortcodes</a></li>
                    </ul>
                </li>
                <li class="menu-item"><a href="travel.html">Category</a></li>
                <li class="menu-item"><a href="about.html">About</a></li>
                <li class="menu-item"><a href="contact-me.html">Contact Me</a></li>
            </ul>
        </div>
        <!-- Begin side menu sidebar -->
        <div class="page_content_wrapper">
            <div class="sidebar_wrapper">
                <div class="sidebar">
                    <div class="content">
                        <ul class="sidebar_widget">
                            <li id="text-2" class="widget widget_text">
                                <h2 class="widgettitle">About Me</h2>
                                <div class="textwidget">
                                    <p>
                                        <img src="{{ url('frontendblog/upload/aboutme.jpg')}}" alt="" style="margin-bottom: 10px;"><br>
                                        Aliquam et elit eu nunc rhoncus viverra quis at felis et netus et malesuada fames ac turpis egestas. Aenean commodo ligula eget dolor.
                                    </p>
                                    <div style="margin-top: 20px; text-align: center;"><img src="{{ url('frontendblog/upload/signature.png')}}" style="width: 173px; height: auto;" alt=""></div>
                                </div>
                            </li>
                            <li id="grand_blog_instagram-5" class="widget Grand_Blog_Instagram">
                                <h2 class="widgettitle"><span>Instagram</span></h2>
                                <ul class="flickr">
                                    <li>
                                        <a target="_blank" href="https://www.instagram.com">
                                            <img src="{{ url('frontendblog/upload/insta1.jpg')}}" width="75" height="75" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://www.instagram.com">
                                            <img src="{{ url('frontendblog/upload/insta2.jpg')}}" width="75" height="75" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://www.instagram.com">
                                            <img src="{{ url('frontendblog/upload/insta3.jpg')}}" width="75" height="75" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://www.instagram.com">
                                            <img src="{{ url('frontendblog/upload/insta4.jpg')}}" width="75" height="75" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://www.instagram.com">
                                            <img src="{{ url('frontendblog/upload/insta5.jpg')}}" width="75" height="75" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://www.instagram.com">
                                            <img src="{{ url('frontendblog/upload/insta6.jpg')}}" width="75" height="75" alt="">
                                        </a>
                                    </li>
                                </ul>
                                <br class="clear">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End side menu sidebar -->
    </div>
    <!-- End mobile menu -->

    <!-- Begin template wrapper -->
   <!-- <div id="wrapper">
        <div class="header_style_wrapper">
            <!-- End top bar --

            <div class="top_bar">
                <div id="menu_wrapper">
                    <div class="social_wrapper">
                        <ul>
                            <li> 
                             <a href="https://www.womennovator.co.in/">
                                <img class="mobile" src="{{ url('frontEnd/images/WELogo.png')}}" ></li></a>
                        <!-- <li class="facebook">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="twitter">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="pinterest">
                                <a title="Pinterest" href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                            <li class="instagram">
                                <a title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                            </li>--
                        </ul>
                    </div>
                    <div id="nav_wrapper">
                        <div class="nav_wrapper_inner">
                            <div id="menu_border_wrapper">
                                <div class="menu-main-menu-container">
                                    <ul id="main_menu" class="nav">
                                        <li class="menu-item"><a href="{{ url('/')}}">Home</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End main nav --

                    <!-- Begin right corner buttons 
                    <div id="logo_right_button">
                        <!-- Begin search icon 
                        <a href="javascript:;" id="search_icon"><i class="fa fa-search"></i></a>
                        <!-- End side menu -->

                        <!-- Begin search icon 
                        <a href="javascript:;" id="mobile_nav_icon"></a>
                        <!-- End side menu --
                    </div>
                    <!-- End right corner buttons --
                </div>
            </div>
        </div>


      
        </div>-->
       
         <div id="post_featured_slider" class="" style="margin-top:109px; margin-bottom:156px;">
            <div class="flexslider" data-height="550">
                <ul >
                    <li>
                        <a href="https://www.womennovator.co.in/">
                            <div class="slider_image" >
                                <img src="https://www.womennovators.com/backEnd/image/blog_image/1628086955.jpeg">
                            </div>
                        </a>
                    
                    </li>
                </ul>
            </div>
        </div>


        <div id="page_content_wrapper">
            <div class="inner">
                <!-- Begin main content -->
                <div class="inner_wrapper">
                    <div class="sidebar_content">
                       
                        @foreach ($bloglist as $item)
                         <!-- Begin each blog post -->
                        <div id="post-79" class="post-79 post type-post status-publish format-standard has-post-thumbnail hentry category-art category-lifestyle tag-nature tag-photography tag-travel">
                            <div class="post_wrapper">
                                <div class="post_content_wrapper">
                                    <div class="post_header search">
                                        <div class="post_img static one_third">
                                            <a href="{{url('blog/'.$item->url)}}">
                                                <img src="{{ url('http://www.womennovators.com/backEnd/image/blog_image/'.$item->image)}}" alt="" class="" style="width: 700px; height: 529px;">
                                            </a>
                                        </div>

                                        <div class="post_header_title two_third last">
                                            <div class="post_info_cat list">
                                                {{-- < !--  <span>
                                                    <a href="travel.html">Art</a>
                                                    &nbsp;/
                                                    <a href="travel.html">Lifestyle</a>
                                                </span>--> --}}
                                            </div>
                                            <h5><a href="{{url('/blog/'.$item->url)}}" title="Beauty of Nature">{{$item->name ??''}}</a></h5>
                                            <hr class="title_break small list">
                                            <div class="post_detail post_date">
                                                <span class="post_info_date search">{{ date('M d,Y', strtotime($item->created_at ??''))}}</span>
                                            </div>
                                            
                                            <div class="post_detail post_date">
                                                <span class="post_info_date search">{!!substr($item->description,0,150  ) !!}...
                                             
                                                <a href="{{url('/blog/'.$item->url)}}" style="color:#be9656;" class="prev_button">Read More<i class="fa fa-angle-double-right"></i></a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br class="clear">
                        <!-- End each blog post -->  
                        @endforeach
                       

                       

                        
                    </div>


                    <div class="sidebar_wrapper">
                        <div class="sidebar">
                            <div class="content">
                                <ul class="sidebar_widget">
                                    <li id="text-1" class="widget widget_text">
                                        <h2 class="widgettitle">Recent Blogs</h2>
                                <div class="textwidget">
                                    <p>
                                       <!--  <img src="{{ url('frontendblog/upload/aboutme.jpg')}}" alt=""
                                            style="margin-bottom: 10px;"><br>
                                       -->
                                         @foreach ($bloglist as $item)
                                                    <p> <b></b> {{$item->name}}</p>
                                                    <span class="post_info_date search">{{ date('M d,Y', strtotime($item->created_at ??''))}}</span>
                                                    @endforeach
                                                   
                                    </p>
                                   <!--    <div style="margin-top: 20px; text-align: center;"><img
                                            src="{{ url('frontendblog/upload/signature.png')}}"
                                            style="width: 173px; height: auto;" alt=""></div>  -->
                                </div>
                                    </li>
                                  
                                 
                                  
                                 
                                </ul>
                            </div>
                        </div>
                        <br class="clear">
                    </div>
                </div>
                <!-- End main content -->
            </div>
        </div>


        <br class="clear">
      

        <div class="footer_bar noborder">
            <div class="footer_bar_wrapper">
                <div class="social_wrapper">
                   <!--  <ul>
                        <li class="facebook">
                            <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="twitter">
                            <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="pinterest">
                            <a target="_blank" title="Pinterest" href="#"><i class="fa fa-pinterest"></i></a>
                        </li>
                        <li class="instagram">
                            <a target="_blank" title="Instagram" href="index.html"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>-->
                </div>
                
                <a id="toTop"><i class="fa fa-angle-up"></i></a>
            </div>
        </div>
    </div>

    <div id="overlay_background"></div>


@endsection

