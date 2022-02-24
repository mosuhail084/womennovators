@extends('we.layouts.layout') @section('front_content')


  @if (session()->has('FRONT_USER_LOGIN_NAME'))
    <div class="community-banner" style="min-height: 192px;">
      <div class="container">
        <div class="row">
          <h2 style="color:#CE199A;font-weight:700;">Welcome, {{ session('FRONT_USER_LOGIN_NAME') }}!</h2>
          <p style="font-style:bold;">Thank you for joining Womennovator! Here is your homepage.</p>
        </div>
      </div>
    </div>
  @endif

  
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="post-comi-title">
            <div class="row">
              <div class="col-sm-7">
                <h3 class="up-com-head">Upcoming events this week</h3>
              </div>
              <div class="col-sm-5">
                <div class="text-right">
                  <div class="comunities-header-sec text-left">
                    <ul>

                     <!-- <li>
                        <span class="sort-by-text">Sort by</span>
                        <select class="select sort-by">
                          <option>Most active</option>
                          <option>Most active</option>
                          <option>Most active</option>
                          <option>Most active</option>
                        </select>
                      </li>-->
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            @isset($upcoming_event)
              @foreach ($upcoming_event as $up_event)
                <div class="col-sm-4 to_animate" data-animation="fadeInUp">
                  <div class="post upcoming-event">
                <!--  <a href="{{ url('event/' . $up_event->id) }}">-->
                      <div class="img-post">
                        <img src="{{ asset('we/images/' . $up_event->poster) }}">
                      </div>
                      <div class="post-title">
                        <div class="row">
                          <div class="col-sm-7">
                            <h3>{{ $up_event->event_name }}</h3>
                            <h4>{{ $up_event->start_date }}</h4>
                            <ul class="communi-list">
                              <li><a href=""><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $up_event->time }}</a>
                              </li>
                              <li><a class="com-addres" href=""><i class="fa fa-map-marker"
                                    aria-hidden="true"></i>{{ $up_event->city_name }}, {{ $up_event->statename }}</a>
                              </li>
                            </ul>
                          </div>
                          <div class="col-sm-5">
                            <div class="post-title-rt-sec">
                             <!-- <a href="#" class="rsvp">RSVP</a>-->
                            </div>

                          </div>
                        </div>
                      </div>
                      {{-- <div class="community-ban-cintent">
                                                <div class="female-user">
                                                    <img src="{{url('we/images/femail-img.png')}}">
                                                </div>
                                                <div class="female-user-content">
                                                    <h2>Female Entrepreneurs of Bombay</h2>

                                                </div>                                        
                                            </div> --}}
                      <div class="attending">
                       <!-- <p>12 Attending</p>-->
                      </div>
                  <!--  </a>-->
                  </div>
                </div>
              @endforeach
            @endisset

          </div>
          <div class="row">
            <div class="col-sm-7">
              <h3 class="up-com-head">Past events this week</h3>
            </div>
            <div class="col-sm-5">
              <div class="text-right">
                <div class="comunities-header-sec text-left">
                  <ul>

                   <!-- <li>
                      <span class="sort-by-text">Sort by</span>
                      <select class="select sort-by">
                        <option>Most active</option>
                        <option>Most active</option>
                        <option>Most active</option>
                        <option>Most active</option>
                      </select>
                    </li>-->
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            @isset($past_event)
              @foreach ($past_event as $event)
                <div class="col-sm-3 to_animate" data-animation="fadeInUp">
                  <div class="post upcoming-event">
                   <!-- <a href="{{ url('event/' . $event->id) }}">-->
                      <div class="img-post">
                        <img src="{{ asset('we/images/' . $event->poster) }}">
                      </div>
                      <div class="post-title">
                        <div class="row">
                          <div class="col-sm-12">
                            <h3>{{ $event->event_name }}</h3>
                            <div class="inline-sec">
                              <h4>{{ $event->start_date }}</h4>
                              <div class="time-in-block"><a href=""><i class="fa fa-clock-o"
                                    aria-hidden="true"></i>{{ $event->time }}</a></div>
                            </div>
                            <ul class="communi-list communi-list-sm">
                              <li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $event->city_name }},
                                  {{ $event->statename }}</a></li>
                            </ul>
                          </div>

                        </div>
                      </div>
                      {{-- <div class="community-ban-cintent">
                                            <div class="female-user">
                                                <img src="{{url('we/images//femail-img.png')}}">
                                            </div>
                                            <div class="female-user-content2">
                                                <h2>Female Entrepreneurs of Bombay</h2>
                                                                           
                                            </div>                                        
                                        </div> --}}
                      <div class="attending">
                     <!--   <p>12 Attending</p>-->
                      </div>
                <!--    </a>-->
                  </div>
                </div>
              @endforeach
            @endisset


          </div>

        </div>

      </div>

    </div>
  </section>



 <!-- <section class="section get-the-letest">
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



@endsection

<!-- eof #box_wrapper -->
<!--</div>-->
<!-- eof #canvas -->
