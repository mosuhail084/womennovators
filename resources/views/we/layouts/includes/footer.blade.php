
<section class="section get-the-letest to_animate" data-animation="fadeInRight">
    <div class="container">
        <div class="row">
            <form method="post" action="{{ route('newsletter.store') }}"
                enctype="multipart/form-data">
                @method('POST')
                @csrf

                <div class="col-sm-12">
                    <div class="form-group">
                        
                        <p>NEW LETTER Get the latest resources, reminders and alerts from us. Sign up to our newsletter!</p>
                        <div class="mail-submit">
                            <input placeholder="Please add your email id here." name="email" required><button
                                class="btn-submit">Submit</button>
                        </div>
                    </div>

                </div>
            </form>
            <div class="col-sm-12">

            </div>
        </div>

    </div>
</section>

 <footer class="page_footer template_footer   section_padding_top_40 section_padding_bottom_40 columns_padding_25">
   <div class="container">
      <div class="row">
      
         <div class="col-md-3 col-sm-6 ">
            <div class="widget widget_text widget_about">
               <div class="logo logo_with_text"> <img src="{{url('we/images/footer-logo.png')}}"> <span class="logo_text"> WE</span> </div>
               <p>WE is a woman run community aimed at elevating and uplifiting women one circle at a time.</p>
               <p class="topmargin_25"> 
                           <a href="https://www.facebook.com/womennovator" class="social-icon"><img src="{{url('we/images/face-book.png')}}"></a>
                           <a href="https://www.instagram.com/womennovator" class="social-icon"><img src="{{url('we/images/insta.png')}}"></a>
                           <a href="https://www.linkedin.com/company/womenovator" class="social-icon"><img src="{{url('we/images/link-din.png')}}"></a> 
                       </p>
            </div>
         </div>
         <div class="col-md-3 col-sm-6 ">
            <div class="widget widget_text">
               <h3 class="widget-title">REsources</h3>
               <ul class="list-unstyled greylinks">
                  <li><a>Community Leadership</a></li>
                  <li><a>Investor Talk</a></li>
                  <li><a>Miscellaneous</a></li>
               </ul>
            </div>
         </div>
         <div class="col-md-3 col-sm-6  ">
            <div class="widget widget_recent_posts">
               <h3 class="widget-title">Contact us</h3>
               <ul class="list-unstyled greylinks footer-menu">
                  <li><a href="#"><span class="f-icon">@</span>contact@womennovators.com</a></li>
                  <!-- <li><a href="#"><span class="f-icon">#</span> (+91)- 9315854688</a></li> -->
                  <li><a href="{{url('/we/contact-us')}}">Contact Us</a></li>
                  <li><a href="#">Become A Mentor</a></li>
               </ul>
            </div>
         </div>
               <div class="col-md-3 col-sm-6  ">
            <div class="widget widget_recent_posts text-right">
               <h3 class="widget-title">About us</h3>
               <ul class="list-unstyled greylinks footer-menu">
                  <li><a href="https://www.womennovator.co.in/about/">Our Story</a></li>
                  <li><a href="{{url('/we/in-the-press')}}">In The Press</a></li>
                  <li><a href="{{url('/we/career')}}">Career</a></li>
                  <li><a href="#">Our Philosophy</a></li>
                  <li><a href="#">WE Community Leaders</a></li>
                  <li><a href="{{url('/we/our-team')}}">Our Team</a></li>
                  <li><a href="{{url('/we/blog')}}">Blog</a></li>
                  <li><a href="{{url('/we/pitchdeck')}}">Pitch Deck</a></li>
                  
               </ul>
            </div>
         </div>
      </div>
   </div>
</footer>
<section class="ds ms parallax page_copyright overlay_color section_padding_top_10 section_padding_bottom_10">
   <div class="container">
      <div class="row">
         <div class="col-sm-6 text-left copy-right">
            <p>Copyright © 2021 Womennovator. All rights reserved.</p>
         </div>
         <div class="col-sm-6 text-right copy-right">
            <p>
            <span><a style="color:white;padding-right:15px;" href="{{url('/we/termsandcondition')}}">Terms And Condition</a></span>
            <span><a style="color:white;"href="{{url('/we/policy')}}">Privacy Policy</a></span>
            </p>
         </div>
      </div>
   </div>
</section>