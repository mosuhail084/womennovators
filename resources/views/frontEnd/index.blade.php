<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic Page Needs ================================================== -->
  <meta charset="utf-8">

  <!-- Mobile Specific Metas ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

  <!-- Site Title -->
  <title>Womennovator | First Virtual Global Incubator for Women</title>



  <!-- CSS
         ================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ url('globalsummit/css/bootstrap.min.css') }}">

  <!-- FontAwesome -->
  <link rel="stylesheet" href="{{ url('globalsummit/css/font-awesome.min.css') }}">
  <!-- Animation -->
  <link rel="stylesheet" href="{{ url('globalsummit/css/animate.css') }}">
  <!-- magnific -->
  <link rel="stylesheet" href="{{ url('globalsummit/css/magnific-popup.css') }}">
  <!-- carousel -->
  <link rel="stylesheet" href="{{ url('globalsummit/css/owl.carousel.min.css') }}">
  <!-- isotop -->
  <link rel="stylesheet" href="{{ url('globalsummit/css/isotop.css') }}">
  <!-- ico fonts -->
  <link rel="stylesheet" href="{{ url('globalsummit/css/xsIcon.css') }}">
  <!-- Template styles-->
  <link rel="stylesheet" href="{{ url('globalsummit/css/style.css') }}">
  <!-- Responsive styles-->
  <link rel="stylesheet" href="{{ url('globalsummit/css/responsive.css') }}">

  <!-- HTML5 shim and Respond.js')}} IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js')}} doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
      <![endif]-->
  <style>
    .blink_me {
      animation: blinker 1s linear infinite;
    }

    .new-block {
      margin-right: 8px;
      border: 1px solid #fff;
      border-style: dotted;
      padding: 5px 11px;
      margin-bottom: 35px;
      background-color: #ffffffeb;
      display: inline-block;
    }

    .testi-img {
      width: 90px;
      height: 90px;
      border-radius: 50%;
      overflow: hidden;
      margin: 0 auto;
      border: 5px solid #ddd;
      box-shadow: 1px 1px 12px #0000001c;
    }

    .testi-cont {
      text-align: center;
      border: 1px solid #ddd;
      padding: 40px;
      padding-top: 70px;
      margin-top: -45px;
      border-radius: 5px;
      /border-bottom: none;/ box-shadow: 0px 0px 12px #0000000d;
    }

    .testi-cont h3 {
      margin-bottom: 10px;
      font-size: 18px;
    }

    .testi-cont p {
      font-size: 15px;
      color: #999;
    }


    @keyframes blinker {
      50% {
        opacity: 0;
      }
    }

    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) {
      .blink {
        color: #5D0443;
      }
    }

    /* Extra large devices (large laptops and desktops, 1200px and up) */
    @media only screen and (min-width: 1200px) {
      .blink {
        color: #5D0443;
      }
    }

  </style>
</head>

<body>
  <div class="body-inner">
    <!-- Header start -->
    <div class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 mobile-none">
            <ul class="contact_details">
              <li class="slogan"> GLOBAL COMMUNITY FOR WOMEN</li>
              <li class="phone"><i class="icon-phone"></i><a href="tel:(+91)-9315854688"> (+91)-
                  9315854688</a></li>
              <li class="mail"><i class="icon-mail-line"></i><a
                  href="mailto:president@womennovators.com">president@womennovators.com</a></li>
            </ul>
          </div>
          <div class="col-sm-4">
            <ul class="social">
              <li class="mail"><i class="icon-mail-line"></i><a href="{{ url('faces/login') }}">Login Now</a>
              </li>
              <!--   <li class="facebook"><a target="_blank" href="https://www.facebook.com/womennovator/" title="Facebook"><i class="icon-facebook"></i></a></li>
                        <li class="twitter"><a target="_blank" href="https://twitter.com/womennovator" title="Twitter"><i class="icon-twitter"></i></a></li>
                        <li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCY7ojnIQ727UzC6cSnO7PIA" title="YouTube"><i class="icon-play"></i></a></li>
                        <li class="linkedin"><a target="_blank" href="https://www.linkedin.com/company/womenovator/" title="LinkedIn"><i class="icon-linkedin"></i></a>
                        </li><li class="instagram"><a target="_blank" href="https://www.instagram.com/womennovator/" title="Instagram"><i class="icon-instagram"></i></a></li>-->
            </ul>

          </div>
        </div>
      </div>
    </div>
    <header id="header" class="header header-transparent nav-border">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <!-- logo-->
          <a class="navbar-brand" href="https://womennovators.com/">
            <img src="{{ url('globalsummit/images/logo.png') }}" alt="" class="img-fluid">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="icon icon-menu"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
              <li class="dropdown nav-item ">
                <a href="https://www.womennovator.co.in/about/" class="">ABOUT</a>
                <!-- <ul class="dropdown-menu" role="menu">
                             <li><a>MEDIA</a>
                             
                         </ul>-->
              </li>
              <li class="dropdown nav-item">
                <a href="http://wedistributors.womennovators.com/" class="">WEMARK</a>

              </li>
              <li class="nav-item dropdown">
                <a href="http://lms.womennovators.com/" class="">LEARNING</a>

              </li></a>

              </li>
              <li class="nav-item dropdown">
                <a href="https://www.womennovators.com/womennovator-live-series" class="">LIVE-SERIES</a>

              </li>


              <!--  
                     <li class="nav-item">
                        <a href="contact.html">EVENTS</a>
                     </li>
                      <li class="nav-item">
                        <a href="contact.html">CATEGORY</a>
                     </li>
                      <li class="nav-item">
                        <a href="contact.html">WORK WITH US</a>
                     </li>-->
              <li class="nav-item">
                <a href="https://covidcaregiver.org/">CovidCare</a>
              </li>
              <li class="nav-item">
                <a href="{{ url('globalsummit2021') }}" class="blink_me"><b class="blink">Global Summit
                    2021</b></a>

              </li>
              <li class="header-ticket nav-item">
                <a class="ticket-btn btn" href="https://womennovators.com/apply-now/">APPLY NOW
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div><!-- container end-->
    </header>
    <!--/ Header end -->

    <!-- banner start-->
    <section class="main-slider owl-carousel">

      <div class=" ">
        <a href="https://womennovators.com/globalsummit2021">
          <img src="https://womennovators.com/backEnd/banner1.jpeg"> </a>

      </div>
      <!-- <div class="" >
            <img src="globalsummit/images/banner2.jpg">
            
         </div>-->


    </section>
    <!-- banner end-->

    <section class="about-women bg-green">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">


            <h2 class="global-summit-title">Womennovator Global Summit 2021 & 1000 Women of Asia Awards </h2>
            <!--  <p> will be start from 18th- 23rd October 2021 @ 4:30 pm IST 24th October 2021 @ 11:00 am IST
     <br>👉🏻 Coming soon Unlimited Sharing , Learning, Award Evening & Expert Talks🎭
  #WomennovatorGlobalSummit2021 #1000WomenofAsiaAwards #WAAH</p>-->
          </div>
          <div class="col-sm-12">
            <div class="text-center">
              <a class="btn-details" href="{{ url('globalsummit2021') }}"><span class="button_label">Click here to
                  know more </span></a>
            </div>
          </div>
          <div class="col-sm-12">
            <br>

            <div class="text-center new-b-main">
              <div class="new-block">
                <img class="newimg" style="width:38px;     margin-top: -21px;"
                  src="{{ url('frontEnd/wp-content/new.gif') }}"> <a class="blink_me"
                  style="color: red;font-size: 18px;"
                  href="https://womennovators.com/Summit%20Report_WomennovatorGlobalSummit%202021.pdf"><b>Womennovator
                    Global Summit 2021 Report</b><span style="color:red;">*</span></a>
                <br>
              </div>
              <div class="new-block">
                <img class="newimg" style="width:38px;     margin-top: -21px;"
                  src="{{ url('frontEnd/wp-content/new.gif') }}"> <a class="blink_me" style="    color: red;
    font-size: 18px;"
                  href="https://womennovators.com/backEnd/Big_Shift-Womennovator_Virtual_Incubation_2021-Quick_overview_of_our_Incubatees_compressed.pdf"><b>The
                    Big Shift - Womennovator Virtual Incubation 2021 Report<span style="color:red;">*</span> </b></a>
              </div>
            </div>


          </div>

        </div>
      </div>
      <div class="divider triangle-down"></div>
    </section>

    <section class="sec-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4">
            <div class="img-box border-rt">
              <div class="image_wrapper ">
                <img src="https://www.startupgrind.com/static/images/homepage/about%402x.png" class="scale-with-grid"
                  alt="" width="" height="">
              </div>
              <div class="desc_wrapper">
                <h4 class="title">What We Do</h4>
                <div class="desc">And why we are a global community</div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="img-box border-rt">
              <div class="image_wrapper">
                <img src="https://www.startupgrind.com/static/images/homepage/conference%402x.png"
                  class="scale-with-grid" alt="" width="" height="">
              </div>
              <div class="desc_wrapper">
                <h4 class="title">Join Us</h4>
                <div class="desc">Know More about us</div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="img-box ">
              <div class="image_wrapper">
                <img src="https://www.startupgrind.com/static/images/homepage/startup%402x.png" class="scale-with-grid"
                  alt="" width="" height="">
              </div>
              <div class="desc_wrapper">
                <h4 class="title">Are You a Entrepreneur, Leader, Professional</h4>
                <div class="desc">We're here to help</div>
              </div>
            </div>
          </div>

        </div><!-- col end-->
      </div>
    </section>
    <section class="join-community purple">
      <form method="post" action="{{ url('form/Subscribe') }}" enctype="multipart/form-data">
        @csrf
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <h2>Join our Community</h2>
              <p>Get the latest news, resources for startups, discounts, and more.</p>
            </div>
            <div class="col-sm-8">
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>First Name</label>
                    <input class="form-control" type="text" name="First_Name">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Last Name</label>
                    <input class="form-control" type="text" name="Last_Name">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Your Email</label>
                    <input class="form-control" type="text" name="Email">
                  </div>
                </div>
                <div class="col-sm-3">
                  <button class="subscrib-btn" type="Subscribe">Subscribe</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>

    </section>

    <section class="bg-gray sec-top">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="section-title text-center">PROGRAMS & INITIATIVES</h2>
          </div>
          <ul class="programs-list">
            <li>
              <div class="programs">
                <img
                  src="https://www.womennovator.co.in/wp-content/uploads/2020/08/WhatsApp-Image-2020-08-05-at-01.14.47.jpeg">
                <div class="program-content">
                  <h3>WE - Womenmark</h3>
                  <p>Womenmark is a global online marketplace, where women come together to make, sell, buy and collect
                    unique items...<a href="https://www.womennovator.co.in/womenmark-2/"><span
                        style="color: #f3f0f1; font-weight: 600;">read more</span></a> </p>
                </div>
              </div>
            </li>
            <li>
              <div class="programs">
                <img
                  src="https://www.womennovator.co.in/wp-content/uploads/2020/08/WhatsApp-Image-2020-08-05-at-01.14.47.jpeg">
                <div class="program-content">
                  <h3>WE - Brand Ambassador</h3>
                  <p>Brand equity program is a platform that provides firms with an opportunity to present their
                    product...<a href="https://www.womennovator.co.in/brand-equity"><span
                        style="color: #f3f0f1; font-weight: 600;">read more</span></a> </p>
                </div>
              </div>
            </li>
            <li>
              <div class="programs">
                <img
                  src="https://www.womennovator.co.in/wp-content/uploads/2020/08/WhatsApp-Image-2020-08-05-at-01.24.29-1.jpeg">
                <div class="program-content">
                  <h3>WE - Management Planner</h3>
                  <p>It is a unique format of showing off the hard work of women that are entrepreneurs, community
                    leaders....<a href="https://www.womennovator.co.in/brand-equity/"><span
                        style="color: #f3f0f1; font-weight: 600;">read more</span></a></p>
                </div>
              </div>
            </li>
            <li>
              <div class="programs">
                <img
                  src="https://www.womennovator.co.in/wp-content/uploads/2020/03/WhatsApp-Image-2020-03-17-at-15.47.43-1.jpeg">
                <div class="program-content">
                  <h3>WE - Talks</h3>
                  <p>The basic agenda of WE-talks is to outspread the success stories of women entrepreneurs and global
                    business alliances for women...<a href="https://www.womennovator.co.in/w-talks/"><span
                        style="color: #f3f0f1; font-weight: 600;">read more</span></a> </p>
                </div>
              </div>
            </li>
            <li>
              <div class="programs">
                <img
                  src="https://www.womennovator.co.in/wp-content/uploads/2020/03/WhatsApp-Image-2020-03-17-at-15.47.41-1.jpeg">
                <div class="program-content">
                  <h3>WE - Vendor Meet</h3>
                  <p>WE-Trade is basically a vendor meet where revenue contracts are pitched. Vendor meets with the
                    private companies as well....<a href="https://www.womennovator.co.in//w-vendor-meet/"><span
                        style="color: #f3f0f1; font-weight: 600;">read more</span></a> </p>
                </div>
              </div>
            </li>
            <li>
              <div class="programs">
                <img
                  src="https://www.womennovator.co.in/wp-content/uploads/2020/03/WhatsApp-Image-2020-03-17-at-15.47.42.jpeg">
                <div class="program-content">
                  <h3>WE - Embassy Meet</h3>
                  <p>Want to better support your female coworkers and create a more positive work environment overall?
                    Read on to find out how you...<a href="https://www.womennovator.co.in/w-embassy-meet/"><span
                        style="color: #f3f0f1; font-weight: 600;">read more</span></a> </p>
                </div>
              </div>
            </li>
            <li>
              <div class="programs">
                <img
                  src="https://www.womennovator.co.in/wp-content/uploads/2020/03/WhatsApp-Image-2020-03-17-at-15.47.41-e1586806178987.jpeg">
                <div class="program-content">
                  <h3>WE - CELL</h3>
                  <p>Train College faculty to familiarize them with new innovation & recent development and terms used
                    in the ecosystem.....<a href="https://www.womennovator.co.in/w-cell/"><span
                        style="color: #f3f0f1; font-weight: 600;">read more</span></a> </p>
                </div>
              </div>
            </li>
            <li>
              <div class="programs">
                <img
                  src="https://www.womennovator.co.in/wp-content/uploads/2020/08/WhatsApp-Image-2020-08-14-at-15.47.46.jpeg">
                <div class="program-content">
                  <h3>WE - Pitch To Fund</h3>
                  <p>Want to better support your female coworkers and create a more positive work environment overall?
                    Read on to find out how you...<a href="https://www.womennovator.co.in/w-pitch-to-fund/"><span
                        style="color: #f3f0f1; font-weight: 600;">read more</span></a> </p>
                </div>
              </div>
            </li>
            <li>
              <div class="programs">
                <img src="https://www.womennovator.co.in/wp-content/uploads/2019/08/Global-Tour-Creative.png">
                <div class="program-content">
                  <h3>WE - Global Tour</h3>
                  <p>Want to better support your female coworkers and create a more positive work environment overall?
                    Read on to find out how you....<a href="https://www.womennovator.co.in/w-global-tours/"><span
                        style="color: #f3f0f1; font-weight: 600;">read more</span></a> </p>
                </div>
              </div>
            </li>
            <li>
              <div class="programs">
                <img
                  src="https://www.womennovator.co.in/wp-content/uploads/2020/08/WhatsApp-Image-2020-08-05-at-01.14.47-1.jpeg">
                <div class="program-content">
                  <h3>WE - Fund</h3>
                  <p>WE - FUND is a global platform aimed to connect Entrepreneurs, SMEs & Proposers and the Investors
                    worldwide.....<a href="https://www.womennovator.co.in/we-fund/"><span
                        style="color: #f3f0f1; font-weight: 600;">read more</span></a> </p>
                </div>
              </div>
            </li>
          </ul>

        </div>
      </div>
    </section>
    <section id="ts-speakers-standard" class="ts-speakers">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="section-title text-center">
              Testimonials
            </h2>
          </div><!-- col end-->
        </div><!-- row end-->
        <div class="row">
          <div class="testimonial owl-carousel">
            @foreach ($globalsummit as $item)
              <div class="">
                <div class="testi-img">
                  <img class="img-fluid" src="{{ url('globalsummit/images/prachi.jpg') }}" alt="">

                </div>
                <div class="testi-cont">
                  <h3 class="ts-title"><a href="#">{{ $item->name }}</a></h3>
                  <p>
                    {{ $item->about_us }}
                  </p>
                </div>
              </div>
            @endforeach




            <!-- popup start-->

          </div> <!-- col end-->


        </div><!-- row end-->
      </div><!-- container end-->
    </section>
    <section class="founder-msg">
      <div class="container">
        <div class="row">

          <div class="col-lg-8">
            <h2>FOUNDER MESSAGE</h2>
            <p>As a woman she believes "Two things: Be a Lady - don’t let yourself get overcome by emotions & Be
              financially Independent - you may be a queen of a family but be able to defend yourself too".
              <br>
              It is imperative that we celebrate and recognise women from different fields who are instrumental in
              making more women join, and continue to grow in the workplace.
              <br>
              Our aim is to inspire, encourage and support women from all walks of life to create small businesses and
              grow them in a collaborative atmosphere supported also by men.
              <br>
              Meet extraordinary women, all under one roof.
            </p>
            <p><strong>Tripti Shinghal Somani,<br>Founder Womennovator</strong></p>
            <p><strong>Message from Founder</strong><br><a target="_blank"
                href="https://www.youtube.com/watch?v=4uIHWMT6p_c&feature=youtu.be">CLICK HERE TO WATCH VIDEO</a></p>
          </div>
          <div class="col-lg-4">
            <img src="https://www.womennovator.co.in/wp-content/uploads/2021/03/circle-cropped.png">
          </div>
        </div><!-- col end-->
      </div>
    </section>
    <section class="bg-pinck">
      <div class="container">
        <div class="row">

          <div class="col-sm-6">
            <div class="join-con text-center">
              <img
                src="https://www.womennovator.co.in/wp-content/uploads/2020/09/global-community@2x-e1600083439458.png">
              <h2>JOIN OUR COMMUNITY</h2>
              <h3>We are the community for the world's entrepreneurs.</h3>
              <p>We educate, inspire, and connect 800,000 women in 100 cities , 100 Sectors in around 20 countries</p>
              <a href="https://www.womennovator.co.in/start/" class="comunity-btn">Join our community</a>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="join-con text-center">
              <img src="https://www.womennovator.co.in/wp-content/uploads/2020/09/value-give@2x-e1600085263887.png">
              <h2>Our Values</h2>
              <p>We believe in making friends, not contacts. We believe in giving, not taking. We believe in helping
                others before helping yourself.</p>
              <br>
              <br>
              <a href="https://www.womennovator.co.in/about" class="comunity-btn">Learn more about us</a>
            </div>
          </div>
        </div><!-- col end-->
      </div>
    </section>




    <!-- ts footer area start-->
    <div class="footer-area">



      <!-- footer start-->
      <footer class="ts-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <div class="footer-sec">
                <h3>About us</h3>
                <p>Womennovator – First Virtual Incubator for Women #NaariShakti...read more</p>
                <ul class="social-link">
                  <li>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="footer-sec">
                <h3>Programs we offer</h3>
                <ul class="footer-list">
                  <li><a href="https://www.womennovator.co.in/w-talks/"><i class="fa fa-angle-right"
                        aria-hidden="true"></i> WE-Talks</a></li>
                  <li><i class="icon-right-dir"></i> <a href="https://www.womennovator.co.in/w-vendor-meet/"><i
                        class="fa fa-angle-right" aria-hidden="true"></i> WE-Vendor Meet</a></li>
                  <li><a href="https://www.womennovator.co.in/#"><i class="fa fa-angle-right" aria-hidden="true"></i>
                      WE-Embassy Meet</a></li>
                  <li><a href="https://www.womennovator.co.in/w-cell/"><i class="fa fa-angle-right"
                        aria-hidden="true"></i> WE-Cell</a></li>
                  <li><a href="https://www.womennovator.co.in/w-pitch-to-fund/"><i class="fa fa-angle-right"
                        aria-hidden="true"></i> WE-Pitch to Fund</a></li>
                  <li><a href="https://www.womennovator.co.in/w-global-tours/"><i class="fa fa-angle-right"
                        aria-hidden="true"></i> WE-Global Tours</a></li>


                </ul>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="footer-sec">
                <h3>Call us at</h3>
                <ul class="footer-list">
                  <li>
                    <a><i class="fa fa-mobile" aria-hidden="true"></i> (+91)-9315854688</a>
                  </li>

                  <li><a
                      href="https://www.google.com/maps/dir//kgs+advisors/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x390cfd2718af1fa1:0xd6c65ab823f35951?sa=X&amp;ved=2ahUKEwjIge2BlqXlAhXgIbcAHaH-D6IQ9RcwDHoECAkQDA"
                      target="_blank" rel="noopener noreferrer"><i class="fa fa-map-marker" aria-hidden="true"></i> We
                      are on google</a></li>

                </ul>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="footer-sec">
                <h3>Get Involved</h3>
                <a href="https://womennovators.com/apply-now/" class="footer-btn">Apply Now</a>
                <!-- <a href="https://womennovators.com/apply-for/" class="footer-btn">Apply for Host</a>
                            <a href="https://womennovators.com/faces/register" class="footer-btn">Apply for Women Faces</a>
                            <a href="https://womennovators.com/apply-for-influencer" class="footer-btn">Apply for Influencer</a>
                            <a href="https://womennovators.com/login/" class="footer-btn">Apply for Jury</a>-->
              </div>
            </div>

          </div>

        </div>
      </footer>
      <!-- footer end-->
      <div class="BackTo">
        <a href="#" class="fa fa-angle-up" aria-hidden="true"></a>
      </div>

    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto">

            <!-- footer social end-->
            <div class="footer-menu text-center mb-10">
              <ul>
                <li><a href="https://www.womennovator.co.in/about/">About</a></li>
                <li><a href="https://www.womennovator.co.in/gallery/">Gallery</a></li>
                <li><a href="https://www.womennovator.co.in/upcoming-events/">Upcoming Events</a></li>
                <li><a
                    href="https://www.womennovator.co.in/wp-content/uploads/2020/08/Learning-in-Lockdown_26th-June-2020_Report.pdf">Knowledge
                    center</a></li>
                <li><a href="https://www.womennovator.co.in/news/">News</a></li>
                <li><a href="https://womennovators.com/bloglist"> Blogs</a></li>
                <li><a href="https://www.womennovator.co.in/media-2/">Media</a></li>
                <li><a href="https://www.womennovator.co.in/contact-2/">Contact</a></li>
                <li><a href="https://www.womennovator.co.in/faq/">FAQ</a></li>
              </ul>
            </div><!-- footer menu end-->
            <div class="copyright-text text-center">
              <p>© 2021 Womennnovator. All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ts footer area end-->





    <!--pop-up start-->
    <div class="modal fade" id="ss" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <a href="https://www.youtube.com/watch?v=BpiEwnSI8Hk">
              <img src="https://womennovators.com/backEnd/latestimage1.jpeg">
            </a>
          </div>


        </div>
      </div>
    </div>
    <!--pop-up End-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {

        $('#exampleModal').modal('show');
      });


      //test();
    </script>
    <!-- Javascript Files
            ================================================== -->
    <!-- initialize jQuery Library -->
    <script>
      var msg = '{{ Session::get('alert') }}';
      var exist = '{{ Session::has('alert') }}';
      if (exist) {
        alert(msg);
      }
    </script>
    <script src="{{ url('globalsummit/js/jquery.js') }}"></script>

    <script src="{{ url('globalsummit/js/popper.min.js') }}"></script>
    <!-- Bootstrap jQuery -->
    <script src="{{ url('globalsummit/js/bootstrap.min.js') }}"></script>
    <!-- Counter -->
    <script src="{{ url('globalsummit/js/jquery.appear.min.js') }}"></script>
    <!-- Countdown -->
    <script src="{{ url('globalsummit/js/jquery.jCounter.js') }}"></script>
    <!-- magnific-popup -->
    <script src="{{ url('globalsummit/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- carousel -->
    <script src="{{ url('globalsummit/js/owl.carousel.min.js') }}"></script>
    <!-- Waypoints -->
    <script src="{{ url('globalsummit/js/wow.min.js') }}"></script>

    <!-- isotop -->
    <script src="{{ url('globalsummit/js/isotope.pkgd.min.js') }}"></script>

    <!-- Template custom -->
    <script src="{{ url('globalsummit/js/main.js') }}"></script>

  </div>
  <!-- Body inner end -->
</body>


</html>
