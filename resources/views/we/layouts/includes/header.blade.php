 <!-- Header start -->
 <section
   class="page_topline ds table_section table_section_lg section_padding_top_15 section_padding_bottom_15 columns_margin_0">
   <div class="container-fluid">
     <div class="row">
       <div class="col-lg-4 text-center text-lg-left hidden-xs">
         <div class="inline-content big-spacing">
           <div class="page_social">
             <a href="https://www.facebook.com/womennovator" target="_blank" class="social-icon"><img
                 src="{{ url('we/images/face-book.png') }}"></a>
             <a href="https://www.instagram.com/womennovator" target="_blank" class="social-icon"><img
                 src="{{ url('we/images/insta.png') }}"></a>
             <a href="https://www.linkedin.com/company/womenovator" target="_blank" class="social-icon"><img
                 src="{{ url('we/images/link-din.png') }}"></a>
           </div>
         </div>
       </div>
       <div class="col-xs-7 col-lg-5">
         <div class="text-right midle-top">
           <a href="{{ url('/we/we-shop') }}">WE SHOP</a>
           <a href="{{ url('/we/we-learning') }}">WE LEARNING</a>
         </div>
       </div>
       <div class="col-xs-5 col-lg-3 text-center text-lg-right">
         <div id="topline-animation-wrap">
           <div id="topline-hide" class="inline-content big-spacing">
             <div class="xs-block">
               <ul class="inline-list menu greylinks">
                 @if (session()->has('FRONT_USER_LOGIN_ID'))
				   <li style="margin-right: -1.8vw" ><i style="margin-left: 1vw; color: #ce199a; font-size: 0.7vw;" class="fa-solid fa-user"></i></li>

                                     <li><a href="{{ route('we.profile') }}"

                                             style="color:#ce199a !important; text-transform:uppercase;">{{ session('FRONT_USER_LOGIN_NAME') }}</a>

                                     </li>
                   <li><a href="{{ route('we.logout') }}">LOGOUT</a></li>
                 @else
                   <li><a href="{{ url('we/login') }}">LOGIN</a></li>
                   <li><a href="{{ url('we/get-started') }}">SIGN UP</a></li>
                 @endif
               </ul>
             </div>
           </div>
           <div id="topline-show" class="widget widget_search">
             <form method="get" class="searchform inline-form" action="https://html.modernwebtemplates.com/diversify/">
               <div class="form-group-wrap">
                 <div class="form-group"> <label class="sr-only" for="topline-widget-search">Search
                     for:</label> <input id="topline-widget-search" type="text" value="" name="search"
                     class="form-control" placeholder="Enter Keyword..."> <a href="index.html" id="search-close">
                     <i class="fa fa-close"></i>
                   </a> </div> <button type="submit" class="theme_button no_bg_button color1">ok</button>
               </div>
             </form>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <header class="page_header header_white toggler_xs_right columns_margin_0">
   <div class="container-fluid">
     <div class="row">
       <div class="col-sm-12 display_table">
         <div class="header_left_logo display_table_cell">
           <a href="{{ url('we/index') }}" class="logo logo_with_text">
             WE
             <!--<img src="{{ url('we/images/logo.png') }}" alt="">
                                 <span class="logo_text"> Women <br>Entrepreneur</span>-->
           </a>
         </div>
         <div class="header_mainmenu display_table_cell text-right">
           <!-- main nav start -->
           <nav class="mainmenu_wrapper">
             <ul class="mainmenu nav sf-menu ">
               <li> <a href="{{ url('we/communities') }}">Community</a></li>
               <li> <a href="{{ url('we/event') }}">Events</a></li>
               <li> <a href="{{ url('we/awards') }}">Awards</a></li>
               <li> <a href="{{ url('we/incubation') }}">Incubation</a></li>
               <li> <a href="{{ url('we/faq') }}">FAQ</a></li>
             </ul>
           </nav>
           <!-- eof main nav -->
           <!-- header toggler --><span class="toggle_menu"><span></span></span>
         </div>
         <div class="header_right_buttons display_table_cell text-right hidden-xs">
           <a href="{{ route('we.create_community_main') }}" class="theme_button color2 margin_0">Create a Community</a>
         </div>
       </div>
     </div>
   </div>
 </header>
 
 @if($errors->any())
<div class="alert alert-success fade in">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> {{$errors->first()}}
</div>
@endif
 <!--/ Header end -->
