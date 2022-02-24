@extends('we.layouts.layout') @section('front_content')

  <div class="community-banner">
    <div class="container">
      <div class="row">
        <div class="col-sm-9">

          <div class="community-ban-cintent">
            <div class="female-user">
              <img src="{{ asset('backEnd/image/community_image/' . $community->logo) }}">
            </div>
            <div class="female-user-content">
              <h2>{{ $community->name }}</h2>
              <ul class="communi-list">
                <li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $community->city }}</a></li>
                <li><a href=""><i class="fa fa-globe" aria-hidden="true"></i> {{ $community->followers ?? 0 }}</a>
                </li>
              </ul>
            </div>
          </div>
          <nav class="comunity-nav">
            <ul>
              <li><a href="{{ url('community/' . $community->id) }}">Home</a></li>
              <li><a href="{{ url('community/events/' . $community->id) }}">Events</a></li>
              @if (session()->has('FRONT_USER_LOGIN_ID'))
                <li><a href="#">Members</a></li>
              @endif
              <li><a href="{{ route('community.about', ['com_id' => $community->id]) }}">About</a></li>
            </ul>
          </nav>
        </div>
        <div class="mb-3">
          @if (session()->has('msg'))
            <p style="color: rgb(0, 182, 0); font-weight: bold;"> {{ session('msg') }}</p>
          @endif
        </div>
        <div class="col-sm-3">
          @if (session()->has('FRONT_USER_LOGIN_ID'))
            @if ($followed)
              <a href="{{ route('we.unfollow_community', ['com_id' => $community->id]) }}"
                class="join-btn">Unfollow</a>
            @else
              <a href="{{ route('we.join_community', ['com_id' => $community->id]) }}" class="join-btn">Join this
                community</a>
            @endif
          @else
            <a href="{{ route('we.login') }}" class="join-btn">Join this community</a>
          @endif
          {{-- <a href="{{ route('we.join_community', ['com_id' => $community->id]) }}" class="join-btn">Join this
            community</a> --}}


          <div class="lead-by">
            <p>Led by </p>
            <div class="team-user">
              <a class="team-img" href="#"><img
                  src="{{ asset('backEnd/image/community_image/' . $community->logo) }}"></a>
              <div class="team-user-title">
                <h5>{{ $community->led_by }}</h5>
                <span class="sub-dis">{{ $community->industry }}</span>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>


  </div>
  <section class="section">
    <div class="container">

      <div class="row">
        <div class="col-sm-9">
          <div class="post-comi-title">
            <div class="row">
              <div class="col-sm-7">
                <h3>Popular posts in this community</h3>
              </div>
              <div class="col-sm-5">
                <div class="text-right">
                  <div class="comunities-header-sec text-left">
                    <ul>

                      <li>
                        <span class="sort-by-text">Sort by</span>
                        <select class="select sort-by">
                          <option>Most active</option>
                          <option>Most active</option>
                          <option>Most active</option>
                          <option>Most active</option>
                        </select>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-sm-7">
              @if ($all_post)
                @foreach ($all_post as $post)
                  <a href="#">
                    <div class="post to_animate" data-animation="fadeInUp">
                      <div>
                        <div class="community-ban-cintent">
                          <div class="female-user">
                            <img src="{{ asset('backEnd/image/community_image/' . $community->logo) }}">
                          </div>
                          <div class="female-user-content">
                            <h2>{{ $community->name }}</h2>
                            <ul class="communi-list">
                              <li><a href=""><i class="fa fa-clock-o" aria-hidden="true"></i> 19 mins</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="img-post">
                          <img src="{{ asset('we/images/'. $post->post_image) }}">
                        </div>
                        <div class="post-title">

                          <div class="row">
                            <div class="col-sm-7">
                              <h3>{{ $post->post_title }}</h3>
                              <p>{{ $post->post_date }}</p>
                              <ul class="communi-list">
                               
                              </ul>
                            </div>
                            <div class="col-sm-5">
                              <div class="post-title-rt-sec">
                        
                                @csrf
                                @php
                                  $res = DB::table('community_likes')
                                      ->where(['user_id' => session('FRONT_USER_LOGIN_ID'), 'community_post_id' => $post->id])
                                      ->first();
                                  if ($res) {
                                      $liked = true;
                                  } else {
                                      $liked = false;
                                  }
                                  
                                @endphp
                                @if ($liked)
                                  {{-- <a href="javascript:void(0);" class="btn btn-success btn-sm">Liked</a> --}}
                                  <span style="color: rgb(2, 40, 168)"><i class="fas fa-thumbs-up"></i></span>
                                @else
                                  <a href="#" onclick="like_community('{{ $post->id }}')"><i
                                      class="far fa-thumbs-up"></i></a>
                                @endif

                            
                                <p>{{ $post->like_count }} people liked this post</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                @endforeach
              @endif

              {{-- <div class="post to_animate" data-animation="fadeInUp">
                <div class="community-ban-cintent">
                  <div class="female-user">
                    <img src="images/femail-img.png">
                  </div>
                  <div class="female-user-content">
                    <h2>Female Entrepreneurs of Bombay</h2>
                    <ul class="communi-list">
                      <li><a href=""><i class="fa fa-clock-o" aria-hidden="true"></i> 19 mins</a></li>
                    </ul>
                  </div>
                </div>
                <div class="img-post">
                  <img src="images/post2.png">
                </div>
                <div class="post-title">
                  <div class="row">
                    <div class="col-sm-7">
                      <h3>Open Mic</h3>
                      <h4>Monday, 05 September, 2021</h4>
                      <ul class="communi-list">
                        <li><a href=""><i class="fa fa-clock-o" aria-hidden="true"></i> 12 PM - 1PM</a></li>
                      </ul>
                    </div>
                    <div class="col-sm-5">
                      <div class="post-title-rt-sec">
                        <p>12 Attending</p>
                        <a href="#" class="rsvp">No Bookings</a>
                      </div>

                    </div>
                  </div>
                </div>
              </div> --}}

              {{-- <div class="col-sm-12">
                <div class="text-center">
                  <a href="#" class="show-more">Show more <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                </div>
              </div> --}}
            </div>

            <div class="col-sm-5"></div>
          </div>

        </div>

        {{-- <div class="col-sm-3 ">
          <div class="team to_animate" data-animation="fadeInUp">
            <ul>
              <li>
                <div class="team-user-up">
                  <div class="team-user">
                    <a class="team-img" href="#"><img src="./images/user.jpg"></a>
                    <div class="team-user-title">
                      <h5>Silviya Plath<span class="check-icon"><img src="images/check-icon.png"></span></h5>
                      <span class="sub-dis">Fintech Guru</span>

                    </div>
                  </div>
                  <p>15 years of experience in ed-tech and community service.</p>
                </div>
              </li>

            </ul>
            <div class="entire-team">
              <ul>
                <li><a class="entire-team-list"><img src="./images/user.jpg"></a></li>
                <li><a class="entire-team-list"><img src="./images/user.jpg"></a></li>
              </ul>
              <a href="#" class="entire-text">see entire team</a>
            </div>
          </div>

          <div class="team to_animate" data-animation="fadeInUp">
            <h4>Team</h4>
            <a href="#" class="startuppath">www.startuppath.com <i class="fa fa-angle-right"
                aria-hidden="true"></i></a>
          </div>
          <div class="team to_animate" data-animation="fadeInUp">
            <h4>Share</h4>
            <div class="share-social">
              <ul>
                <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-hashtag" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div> --}}
      </div>

      <div class="row">
        <div class="col-sm-9">
          <div class="post-comi-title">
            <div class="row">
              <div class="col-sm-7">
                <h3>Active Polls in this community</h3>
              </div>
              <div class="col-sm-5">
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-sm-7">
              @if ($all_poll)
                @foreach ($all_poll as $poll)
                  <div class="post to_animate" data-animation="fadeInUp">
                    <div class="post-title">
                      @php
                        $res = DB::table('community_poll_user')
                            ->where(['user_id' => session('FRONT_USER_LOGIN_ID'), 'community_poll_id' => $poll->id])
                            ->first();
                        if ($res) {
                            $voted = true;
                        } else {
                            $voted = false;
                        }
                        $poll_options = DB::table('community_poll_vote')
                            ->where(['community_poll_id' => $poll->id])
                            ->get();
                      @endphp

                      @if ($voted)
                          <p style="color: rgb(48, 206, 0); font-weight: bold;">You have already voted for this poll</p>
                      @endif
                      <span style="font-size: 12px;"> Posted on {{ $poll->poll_date }}</span>
                      <br>
                      <span style="font-size: 12px;"> Poll will end at <strong>{{ $poll->poll_end_time }}</strong></span>
                      <h4>{{ $poll->poll_title }}</h4>
                      <div class="row">
                        <div class="col-sm-7">

                          @foreach ($poll_options as $item)
                            @if ($voted)
                              <span> {{ $item->poll_option }}</span>
                              <br>
                            @else
                              <input type="radio" name="choice" id=""
                                onclick="poll_vote('{{ $item->id }}','{{ $poll->id }}')">
                              {{ $item->poll_option }}
                              <br>
                            @endif

                          @endforeach
                        </div>
                        <div class="col-sm-5">
                          @foreach ($poll_options as $item)
                            <span> {{ $item->vote }} votes</span>
                            <br>
                          @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              @endif

              {{-- <div class="col-sm-12">
                <div class="text-center">
                  <a href="#" class="show-more">Show more <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                </div>
              </div> --}}
            </div>

            <div class="col-sm-5"></div>
          </div>

        </div>
      </div>

    </div>
  </section>



  <!--<section class="section get-the-letest">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <p>Get the latest resources, reminders and alerts from us. Sign up to our newsletter!</p>
          <div class="mail-submit">
            <input placeholder="Please add your email id here."><button class="btn-submit">Submit</button>
          </div>
        </div>
        <div class="col-sm-12">

        </div>
      </div>

    </div>
  </section>-->

  <script>
    function like_community(post_id) {
      let _token = $("input[name=_token]").val();
      $.ajax({
        type: "post",
        url: "{{ url('/we/community/like') }}",
        data: {
          _token,
          post_id
        },
        success: function(result) {
          // console.log(result);
          window.location.reload();
        }
      });
    }

    function poll_vote(opt_id, poll_id) {
      let _token = $("input[name=_token]").val();
      $.ajax({
        type: "post",
        url: "{{ url('/we/community/poll_vote') }}",
        data: {
          _token,
          opt_id,
          poll_id
        },
        success: function(result) {
          // console.log(resukt);
          window.location.reload();
        }
      });
    }
  </script>
@endsection

<!-- eof #box_wrapper -->
<!--</div>-->
<!-- eof #canvas -->
