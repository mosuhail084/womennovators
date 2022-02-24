@extends('frontEnd.layouts.layout') @section('admin_content')
 <link rel="stylesheet" href="{{ url('frontendblog/css/reset.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ url('frontendblog/css/wordpress.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ url('frontendblog/css/animation.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ url('frontendblog/css/magnific-popup.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ url('frontendblog/css/jqueryui/custom.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ url('frontendblog/js/plugins/flexslider/flexslider.css')}}" type="text/css"
        media="all">
    <link rel="stylesheet" href="{{ url('frontendblog/css/tooltipster.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ url('frontendblog/css/style.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ url('frontendblog/css/font-awesome.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ url('frontendblog/css/grid.css')}}" type="text/css" media="all">
<style>
.slider_image {
    background-size: 100%!important;
}
.slider_image img {
    width: 100%;
}
	#post_featured_slider, #page_caption.hasbg, #horizontal_gallery.tg_post {
    margin-top: -23px;
}
    @media screen and (min-width: 1024px) and (max-height: 1310px) {
#post_featured_slider li .slider_image{
     /* height: 801px;*/
    /*margin-top: -55px;*/
  }
  .mobile {
      margin-top:2px;
   width: 200px;
   height:40px;
}
}
	.post_header p {
    font-size: 18px;
    line-height: 38px;
    color: #333;
    font-family: sans-serif;
}
@media only screen and (min-width: 768px){
    #logo_right_button {
    display: none;
}
}
@media only screen and (max-width: 767px){
#post_featured_slider li .slider_image {
    /*margin-top: 44px;*/
        /*height: 250px;*/
}
.mobile {
   width: 155px
   
}
}
</style>
        <!-- Begin side menu sidebar -->
  
  
    <!-- End mobile menu -->

    <!-- Begin template wrapper -->
 
        <br>
  <div id="post_featured_slider" class="slider_wrapper">
            <div class="flexslider" data-height="550">
                <ul >
                    <li>
                        <a href="https://www.womennovator.co.in/">
                            <div class="slider_image" >
                                <img src="{{url('http://www.womennovators.com/backEnd/image/blog_image/'.$blog->image )??''}}">
                            </div>
                        </a>
                    
                    </li>
                </ul>
            </div>
        </div>
       
        <!-- Begin content -->
        <div id="page_content_wrapper" class="">
            <div class="post_header">
                <div class="post_header_title">
                  {{--  <div class="post_info_cat">
                        <span>
                            <a href="travel.html">Art</a>
                            &nbsp;/
                            <a href="travel.html">Lifestyle</a>
                        </span>
                    </div> --}}
                    <h1>{{$blog->name  ??''}}</h1>
                    <hr class="title_break">
                    <div class="post_detail post_date">
                        <span class="post_info_date">
                            <span> Posted On {{ date('M d,Y', strtotime($blog->created_at ??''))}}
                            </span>
                    </div>
                </div>
            </div>

            <div class="inner">
                <!-- Begin main content -->
                <div class="inner_wrapper">
                    <div class="sidebar_content">
                        <!-- Begin each blog post -->
                        <div id="post-79"
                            class="post-79 post type-post status-publish format-standard has-post-thumbnail hentry category-art category-lifestyle tag-nature tag-photography tag-travel">
                            <div class="post_wrapper">
                                <div class="post_content_wrapper">
                                    <div class="post_header single">
                                        <p style="font-size:22px;font-family: arial nova;">
                                            {!!$blog->description!!}</div>
                                    <hr>
                                    <div class="post_excerpt post_tag">
                                        <i class="fa fa-tags"></i>
                                        <a href="#" rel="tag">Womennovator</a>&nbsp;
                                       
                                    </div>

                                    <div id="post_share_text" class="post_share_text"><i
                                            class="fa fa-share-alt"></i>Share</div>
                                    <hr>
                                    <br class="clear">
                                    <br>

                                <div id="about_the_author">
                                       
                                        <div class="author_detail">
                                            <div class="author_content">
                                                <div class="author_label">Author</div>
                                                <h4>Simmi Puri, Curator, Womennovator</h4>
                                               
                                            </div>
                                        </div>
                                        <br class="clear">
                                    </div>

                                {{--     <h3 class="textcenter">You might also like</h3>
                                    <hr class="title_break slider">
                                    <div class="post_related">
                                        <div class="one_third">
                                            <!-- Begin each blog post -->
                                            <div id="post-73"
                                                class="post-73 post type-post status-publish format-standard has-post-thumbnail hentry category-art category-lifestyle category-movie tag-model tag-photography tag-portrait tag-travel">
                                                <div class="post_wrapper grid_layout">
                                                    <div class="post_img small static">
                                                        <a href="singleblog.html">
                                                            <img src="{{ url('frontendblog/upload/24-700x529.jpg')}}"
                                                                alt="" class="" style="width: 700px; height: 529px;">
                                                        </a>
                                                    </div>

                                                    <div class="blog_grid_content">
                                                        <div class="post_header grid">
                                                            <strong><a href="singleblog.html"
                                                                    title="Fashion Model Shoot">Fashion Model
                                                                    Shoot</a></strong>
                                                            <div class="post_attribute">
                                                                July 22, 2015
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End each blog post -->
                                        </div>
                                        <div class="one_third">
                                            <!-- Begin each blog post -->
                                            <div id="post-67"
                                                class="post-67 post type-post status-publish format-standard has-post-thumbnail hentry category-art category-food category-music tag-food tag-nature">
                                                <div class="post_wrapper grid_layout">
                                                    <div class="post_img small static">
                                                        <a href="singleblog.html">
                                                            <img src="{{ url('frontendblog/upload/photo-1418065460487-3e41a6c84dc5-700x529.jpg')}}"
                                                                alt="" class="" style="width: 700px; height: 529px;">
                                                        </a>
                                                    </div>

                                                    <div class="blog_grid_content">
                                                        <div class="post_header grid">
                                                            <strong><a href="singleblog.html"
                                                                    title="Golden Snow Land">Golden Snow
                                                                    Land</a></strong>
                                                            <div class="post_attribute">
                                                                July 22, 2015
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End each blog post -->
                                        </div>
                                        <div class="one_third last">
                                            <!-- Begin each blog post -->
                                            <div id="post-56"
                                                class="post-56 post type-post status-publish format-standard has-post-thumbnail hentry category-art category-food category-travel tag-family tag-nature tag-sport">
                                                <div class="post_wrapper grid_layout">
                                                    <div class="post_img small static">
                                                        <a href="singleblog.html">
                                                            <img src="{{ url('frontendblog/upload/4-700x529.jpg')}}"
                                                                alt="" class="" style="width: 700px; height: 529px;">
                                                        </a>
                                                    </div>

                                                    <div class="blog_grid_content">
                                                        <div class="post_header grid">
                                                            <strong><a href="singleblog.html"
                                                                    title="Family Comes First">Family Comes
                                                                    First</a></strong>
                                                            <div class="post_attribute">
                                                                July 22, 2015
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End each blog post -->
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <!-- End each blog post -->

                        <div class="fullwidth_comment_wrapper sidebar">
                            <h3 class="textcenter">Leave A Reply</h3>
                            <hr class="title_break slider">
                            <br class="clear">
                             @if(session()->has('success'))
                            <div class="alert alert-success">
                                @if(is_array(session()->get('success')))
                                @foreach (session()->get('success') as $message)
                                <p>{{ $message }}</p>
                                @endforeach
                                @else
                                <p>{{ session()->get('success') }}</p>
                                @endif
                            </div>
                            @endif
                           
                                                        
                            <div>
                                <div class="comment-respond">
                                    <h3 id="reply-title" class="comment-reply-title">
                                        Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link"
                                                href="index.html" style="display: none;">Cancel reply</a></small>
                                    </h3>
                                     <form action="{{url('save/comment')}}" method="post" id="commentform" class="comment-form">
                                     @csrf
                                        <p class="comment-notes"><span id="email-notes">Your email address will not be
                                                published.</span> Required fields are marked <span
                                                class="required">*</span></p>
                                        <p class="comment-form-comment"><label for="comment">Comment</label> <textarea
                                                id="comment" name="comment" cols="45" rows="8" maxlength="65525"
                                                required="required"></textarea></p>
                                        <p class="comment-form-author">
                                            <label for="author">Name <span class="required">*</span></label> <input
                                                placeholder="Name*" id="name" name="name" type="text" value=""
                                                size="30" maxlength="245" required="required">
                                        </p>
                                        <p class="comment-form-email">
                                            <label for="email">Email <span class="required">*</span></label>
                                            <input type="email" placeholder="Email*" id="email" name="email" value=""
                                                size="30" maxlength="100" aria-describedby="email-notes"
                                                required="required">
                                        </p>
                                        <p class="comment-form-url"><label for="url">Website</label> <input
                                                placeholder="Website" id="url" name="url" type="url" value="" size="30"
                                                maxlength="200"></p>
                                        <p class="comment-form-cookies-consent">
                                            <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent"
                                                type="checkbox" value="yes">
                                            <label for="wp-comment-cookies-consent">Save my name, email, and website in
                                                this browser for the next time I comment.</label>
                                        </p>
                                        <p class="form-submit">
                                            <input  type="submit" id="submit" class="submit"
                                                value="Post Comment"> <input type="hidden" name="blog_id"
                                                value="{{$blog->id}}" id="">
                                            
                                        </p>
                                    </form>
                               
                                </div>
                                <!-- #respond -->
                            </div>
                        </div>
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
                                                    <p> <b>{{$item->name}}</b> </p>
                                                    <span class="post_info_date search">{{ date('M d,Y', strtotime($item->created_at ??''))}}</span>
                                                    @endforeach
                                                   
                                    </p>
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

            <br class="clear">
        </div>

      {{--  <div id="post_info_bar">
            <div id="post_indicator"></div>
            <div class="standard_wrapper">
                <div class="post_info_thumb"><img src="{{ url('frontendblog/upload/33-150x150.jpg')}}" alt="" class="">
                </div>
                <div class="post_info">
                    <div class="post_info_label">You are reading</div>
                    <div class="post_info_title">
                        <h6>Top 10 Ingredients</h6>
                    </div>
                </div>

                <a id="post_info_share" href="javascript:;"><i class="fa fa-share-alt"></i>Share</a>
                <a id="post_info_comment" href="#comments"><i class="fa fa-comment"></i>2 Comments</a>
            </div>
        </div> --}}




        <br class="clear">
     {{--   <div id="footer_photostream" class="footer_photostream_wrapper ri-grid ri-grid-size-3">
            <h2 class="widgettitle photostream"><i class="fa fa-instagram marginright"></i>themegoodsphotography</h2>
            <ul>
                <li>
                    <a target="_blank" href="https://www.instagram.com/">
                        <img src="{{ url('frontendblog/upload/photostream1.jpg')}}" alt="">
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://www.instagram.com/">
                        <img src="{{ url('frontendblog/upload/photostream2.jpg')}}" alt="">
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://www.instagram.com/">
                        <img src="{{ url('frontendblog/upload/photostream3.jpg')}}" alt="">
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://www.instagram.com/">
                        <img src="{{ url('frontendblog/upload/photostream4.jpg')}}" alt="">
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://www.instagram.com/">
                        <img src="{{ url('frontendblog/upload/photostream5.jpg')}}" alt="">
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://www.instagram.com/">
                        <img src="{{ url('frontendblog/upload/photostream6.jpg')}}" alt="">
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://www.instagram.com/">
                        <img src="{{ url('frontendblog/upload/photostream7.jpg')}}" alt="">
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://www.instagram.com/">
                        <img src="{{ url('frontendblog/upload/photostream8.jpg')}}" alt="">
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://www.instagram.com/">
                        <img src="{{ url('frontendblog/upload/photostream9.jpg')}}" alt="">
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://www.instagram.com/">
                        <img src="{{ url('frontendblog/upload/photostream10.jpg')}}" alt="">
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://www.instagram.com/">
                        <img src="{{ url('frontendblog/upload/photostream11.jpg')}}" alt="">
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://www.instagram.com/">
                        <img src="{{ url('frontendblog/upload/photostream12.jpg')}}" alt="">
                    </a>
                </li>
            </ul>
        </div> --}}

        <div class="footer_bar noborder">
            <div class="footer_bar_wrapper">
                <div class="social_wrapper">
                    
                </div>
               
                <a id="toTop"><i class="fa fa-angle-up"></i></a>
            </div>
        </div>
    </div>

    <div id="overlay_background"></div>

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
   @endsection