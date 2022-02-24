@extends('we.layouts.layout') @section('front_content')
  <div class="empty-community">
    <div class="container-fluid">
      <div class="community-banner">
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
                  <li><a href=""><i class="fa fa-globe" aria-hidden="true"></i>
                      @if ($community->followers != 0)
                        {{ $community->followers }}
                      @else
                        0
                      @endif Followers
                    </a></li>
                </ul>
              </div>
            </div>
            <nav class="comunity-nav">
              <ul>
                <li><a href="{{ url('community/' . $community->id) }}">Home</a></li>
                <li><a href="">Events</a></li>
                <li><a href="#">Members</a></li>
                <li><a href="{{ route('community.about', ['com_id' => $community->id]) }}">About</a></li>
              </ul>
            </nav>
          </div>
          <div class="col-sm-3">
            <a href="{{ route('we.community_setting', ['com_id' => $community->id]) }}" class="join-btn"><i
                class="fa fa-cog" aria-hidden="true"></i> Community Settings</a>

          </div>
        </div>
      </div>
    </div>


  </div>


  <section class="section">
    <div class="container display-flex">
      <div class="row" style="flex: auto;">
        <div class="col-sm-9">
          <div class="post-comi-title">
            <div class="row">
              <div class="col-sm-7 ">
                <ul class="post-list" style="padding: 0 !important;">
                  <li class="active">
                    <a href="#1" aria-controls="1" role="tab" data-toggle="tab" style="pointer-events: none;">Create
                      Events</a>
                  </li>

                </ul>
              </div>
              <div class="col-sm-5">
                <div class="text-right">
                  <div class="comunities-header-sec text-left">
                    <ul>
                      <li class="display-flex" style="justify-content: center; align-items: center;">
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

          @if (session()->has('success'))
            {{ session('success') }}
          @elseif(session()->has('fail'))
            {{ session('fail') }}
          @endif

          <div class="row">
            <div class="col-sm-7 " style="width: auto !important;">
              <div class="tab-content tab-content-no">
                <div role="tabpanel" id="1" class="tab-pane post-main fade-in 'active'">
                  <div class="post-tab-sec d-flex">
                    <div class="post-tab tablinks  active-tabs" id="post" data-toggle="post">
                      <a style="display: block">
                        <img src="{{ url('we/images/post-icon.png') }}" />
                        Normal Event</a>
                    </div>
                    <div class="post-tab tablinks" id="poll">
                      <a style="display: block">
                        <img src="{{ url('we/images/poll-icon.png') }}" />
                        Round Table</a>
                    </div>
                    <div class="post-tab tablinks" id="resources">
                      <a class="" style="display: block">
                        <img src="{{ url('we/images/resource-icon.png') }}" />
                        WE Pitch</a>
                    </div>
                  </div>

                  <div class="post-content" id="post-content">
                    {{-- Normal Event Section --}}
                    <div id="post-tab" class="tabcontent">
                      <form action="{{ route('we.community_events') }}" method="post" id="normal_event_form"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="community_id" id="community_id" value="{{ $community->id }}">
                        <input type="hidden" name="community_name" id="community_name" value="{{ $community->name }}">
                        <input type="hidden" name="creator_id" id="creator_id"
                          value="{{ session('FRONT_USER_LOGIN_ID') }}">
                        <input type="hidden" name="type" value="normal_event"></input>

                        <input type="text" placeholder="Title of the Event" name="normal_event_title">
                        Upload Poster: <input type="file" name="normal_event_poster" required>
                        <br>
                        <p style="font-size: 14px; margin: 0; font-weight: 600; color:#979797; line-height: 21px;">Mode
                        </p>
                        <div class="mode-option">
                          <div class="mode">
                            <input type="radio" id="online-mode" name="normal_event_mode" value="online"><label
                              for="online-mode">online</label></input>
                          </div>
                          <div class="mode mx-2">
                            <input type="radio" id="offline-mode" name="normal_event_mode" value="offline"><label
                              for="offline-mode">offline</label></input>
                          </div>
                        </div>
                        <div class="mode-option date-option">
                          <div class="mx-2" style="margin-right: 30px;">
                            <p style="font-size: 14px; margin: 0; font-weight: 600; color:#979797; line-height: 21px;">
                              Start Date
                            </p>
                            <input type="text" placeholder="MM/DD/YYYY" onfocus="(this.type='date')" id="event-date"
                              name="normal_event_start_date" class="date-time"></input>
                          </div>
                          <div style="mx-2">
                            <p style="font-size: 14px; margin: 0; font-weight: 600; color:#979797; line-height: 21px;">
                              End Date
                            </p>
                            <input type="text" placeholder="MM/DD/YYYY" onfocus="(this.type='date')" id="event-date"
                              name="normal_event_end_date" class="date-time"></input>
                          </div>
                        </div>
                        <div class="mode-option date-option">
                          <div class="mx-2">
                            <p style="font-size: 14px; margin: 0; font-weight: 600; color:#979797; line-height: 21px;">
                              From
                            </p>
                            <input type="text" placeholder="HH:MM" onfocus="(this.type='time')" id="event-from"
                              name="normal_event_from" class="date-time "></input>
                          </div>
                          <div class="mx-2">
                            <p style="font-size: 14px; margin: 0; font-weight: 600; color:#979797; line-height: 21px;"
                              class="mx-2">To</p>
                            <input type="text" placeholder="HH:MM" onfocus="(this.type='time')" id="event-to"
                              name="normal_event_to" class="date-time "></input>
                          </div>
                        </div>
                        <div class="mode-option event-description" style="display: block;">
                          <p style="font-size: 14px; margin: 0; font-weight: 600; color:#979797; line-height: 21px;">
                            Description</p>
                          <textarea name="normal_event_desc" id="" cols="30" rows="10"
                            placeholder="Add description to this Event"></textarea>
                        </div>
                        <div class="post-footer text-right draft-btn">
                          <a href="#" onclick="form_submit_normal_event()" class="draft-btn">Save as a draft</a>
                          <button type="submit" class="post-btn">Save</button>
                        </div>
                      </form>
                    </div>

                    {{-- Round Table Section --}}
                    <div id="post-poll" class="tabcontent hidden">
                      <div id="post-tab" class="tabcontent">
                        <form action="{{ route('we.community_events') }}" method="post" id="round_table_form"
                          enctype="multipart/form-data">
                          @csrf

                          <input type="hidden" name="community_id" id="community_id" value="{{ $community->id }}">
                          <input type="hidden" name="community_name" id="community_name"
                            value="{{ $community->name }}">
                          <input type="hidden" name="creator_id" id="creator_id"
                            value="{{ session('FRONT_USER_LOGIN_ID') }}">
                          <input type="hidden" name="type" value="round_table"></input>

                          <input type="text" placeholder="Title of the Event" name="round_table_title">
                          Upload Poster: <input type="file" name="round_table_poster" required>
                          <br>

                          <p style="font-size: 14px; margin: 0; font-weight: 600; color:#979797; line-height: 21px;">Mode
                          </p>
                          <div class="mode-option">
                            <div class="mode">
                              <input type="radio" id="online-mode" name="round_table_mode" value="online"><label
                                for="online-mode">online</label></input>
                            </div>
                            <div class="mode mx-2">
                              <input type="radio" id="offline-mode" name="round_table_mode" value="offline"><label
                                for="offline-mode">offline</label></input>
                            </div>
                          </div>
                          <div class="mode-option date-option">
                            <div class="mx-2" style="margin-right: 30px;">
                              <p style="font-size: 14px; margin: 0; font-weight: 600; color:#979797; line-height: 21px;">
                                Start Date
                              </p>
                              <input type="text" placeholder="MM/DD/YYYY" onfocus="(this.type='date')" id="event-date"
                                name="round_table_start_date" class="date-time"></input>
                            </div>
                            <div style="mx-2">
                              <p style="font-size: 14px; margin: 0; font-weight: 600; color:#979797; line-height: 21px;">
                                End Date
                              </p>
                              <input type="text" placeholder="MM/DD/YYYY" onfocus="(this.type='date')" id="event-date"
                                name="round_table_end_date" class="date-time"></input>
                            </div>
                          </div>
                          <div class="mode-option date-option">
                            <div class="mx-2">
                              <p style="font-size: 14px; margin: 0; font-weight: 600; color:#979797; line-height: 21px;">
                                From
                              </p>
                              <input type="text" placeholder="HH:MM" onfocus="(this.type='time')" id="event-from"
                                name="round_table_from" class="date-time "></input>
                            </div>
                            <div class="mx-2">
                              <p style="font-size: 14px; margin: 0; font-weight: 600; color:#979797; line-height: 21px;"
                                class="mx-2">To</p>
                              <input type="text" placeholder="HH:MM" onfocus="(this.type='time')" id="event-to"
                                name="round_table_to" class="date-time "></input>
                            </div>
                          </div>
                          <div class="mode-option event-description" style="display: block;">
                            <p style="font-size: 14px; margin: 0; font-weight: 600; color:#979797; line-height: 21px;">
                              Description</p>
                            <textarea name="round_table_desc" id="" cols="30" rows="10"
                              placeholder="Add description to this Event"></textarea>
                          </div>
                      </div>
                      <div class="post-footer text-right draft-btn">
                        <a href="#" onclick="form_submit_round_table()" class="draft-btn">Save as a draft</a>
                        <button type="submit" class="post-btn">Save</button>
                      </div>
                      </form>
                    </div>


                    {{-- We Pitch Event --}}
                    <div id="post-resource" class="tabcontent hidden">
                      <form action="{{ route('we.community_events') }}" method="post" id="we_pitch_form" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="community_id" id="community_id" value="{{ $community->id }}">
                        <input type="hidden" name="community_name" id="community_name" value="{{ $community->name }}">
                        <input type="hidden" name="creator_id" id="creator_id"
                          value="{{ session('FRONT_USER_LOGIN_ID') }}">
                        <input type="hidden" name="type" value="we_pitch"></input>

                        <input type="text" placeholder="Title of the Event" name="we_pitch_title">
                        Upload Poster: <input type="file" name="we_pitch_poster" required>
                        <br>
                        <p style="font-size: 14px; margin: 0; font-weight: 600; color:#979797; line-height: 21px;">Mode
                        </p>
                        <div class="mode-option">
                          <div class="mode">
                            <input type="radio" id="online-mode" name="we_pitch_mode" value="online"><label
                              for="online-mode">online</label></input>
                          </div>
                          <div class="mode mx-2">
                            <input type="radio" id="offline-mode" name="we_pitch_mode" value="offline"><label
                              for="offline-mode">offline</label></input>
                          </div>
                        </div>
                        <div class="mode-option date-option">
                          <div class="mx-2" style="margin-right: 30px;">
                            <p style="font-size: 14px; margin: 0; font-weight: 600; color:#979797; line-height: 21px;">
                              Start Date
                            </p>
                            <input type="text" placeholder="MM/DD/YYYY" onfocus="(this.type='date')" id="event-date"
                              name="we_pitch_start_date" class="date-time"></input>
                          </div>
                          <div style="mx-2">
                            <p style="font-size: 14px; margin: 0; font-weight: 600; color:#979797; line-height: 21px;">
                              End Date
                            </p>
                            <input type="text" placeholder="MM/DD/YYYY" onfocus="(this.type='date')" id="event-date"
                              name="we_pitch_end_date" class="date-time"></input>
                          </div>
                        </div>
                        <div class="mode-option date-option">
                          <div class="mx-2">
                            <p style="font-size: 14px; margin: 0; font-weight: 600; color:#979797; line-height: 21px;">
                              From
                            </p>
                            <input type="text" placeholder="HH:MM" onfocus="(this.type='time')" id="event-from"
                              name="we_pitch_from" class="date-time "></input>
                          </div>
                          <div class="mx-2">
                            <p style="font-size: 14px; margin: 0; font-weight: 600; color:#979797; line-height: 21px;"
                              class="mx-2">To</p>
                            <input type="text" placeholder="HH:MM" onfocus="(this.type='time')" id="event-to"
                              name="we_pitch_to" class="date-time "></input>
                          </div>
                        </div>
                        <div class="mode-option event-description" style="display: block;">
                          <p style="font-size: 14px; margin: 0; font-weight: 600; color:#979797; line-height: 21px;">
                            Description</p>
                          <textarea name="we_pitch_desc" id="" cols="30" rows="10"
                            placeholder="Add description to this Event"></textarea>
                        </div>
                        <div class="post-footer text-right draft-btn">
                          <a href="#" onclick="form_submit_we_pitch()" class="draft-btn">Save as a draft</a>
                          <button type="submit" class="post-btn">Save</button>
                        </div>
                      </form>
                    </div>

                  </div>
                </div>
              </div>

              <div role="tabpanel" class="tab-pane" id="2"></div>
            </div>
          </div>
          <div class="col-sm-5"></div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="volunteers-box">
          <h3>Volunteers</h3>
          <a href="">+ Invite someone to volunteer</a>
        </div>
        <div class="volunteers-box">
          <h3>Share</h3>
          <a href="">+ Invite someone to volunteer</a>
        </div>
      </div>
    </div>
    </div>
  </section>


  <section class="section get-the-letest">
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
  </section>

  <script>
    const tablinks = document.getElementsByClassName("tablinks");
    const postContent = document.getElementById("post-content");
    for (let i = 0; i <= tablinks.length; i++) {
      tablinks[i].addEventListener('click', () => {
        if (tablinks[i].id == "post") {
          tablinks[0].classList.add("active-tabs");
          tablinks[1].classList.remove("active-tabs");
          tablinks[2].classList.remove("active-tabs");
          // console.log(postContent.children[1])
          postContent.children[0].classList.add("show");
          postContent.children[0].classList.remove("hidden");
          postContent.children[1].classList.add("hidden");
          postContent.children[1].classList.remove("show");
          postContent.children[2].classList.add("hidden");
          postContent.children[2].classList.remove("show");
        } else if (tablinks[i].id == "poll") {
          tablinks[1].classList.add("active-tabs");
          tablinks[0].classList.remove("active-tabs");
          tablinks[2].classList.remove("active-tabs");
          postContent.children[0].classList.remove("show");
          postContent.children[0].classList.add("hidden");
          postContent.children[1].classList.add("show");
          postContent.children[1].classList.remove("hidden");
          postContent.children[2].classList.add("hidden");
          postContent.children[2].classList.remove("show");
        } else {
          tablinks[2].classList.add("active-tabs");
          tablinks[1].classList.remove("active-tabs");
          tablinks[0].classList.remove("active-tabs");
          postContent.children[0].classList.remove("show");
          postContent.children[0].classList.add("hidden");
          postContent.children[1].classList.remove("show");
          postContent.children[1].classList.add("hidden");
          postContent.children[2].classList.add("show");
          postContent.children[2].classList.remove("hidden");
        }
      })
    }

    function openit() {
      const plusBtn = document.getElementById("add-btn");
      const postPoll = document.getElementById("post-poll");
      const choose = document.getElementsByClassName("chose");
      const pollOption = document.getElementById("poll-options");
      var number = 3;
      let node = document.createElement("div")
      node.classList.add("chose")
      let inputTag2 = document.createElement("input")
      inputTag2.type = "text"
      inputTag2.placeholder = "Your Option";
      inputTag2.name = "poll_options[]";
      node.appendChild(inputTag2)
      pollOption.appendChild(node)
      number = number + 1;
    }

    // For Normal Event draft
    function form_submit_normal_event() {
      let html = `<input type="hidden" name="status" id="status" value="0">`;
      $("#normal_event_form").append(html);
      $("#normal_event_form").submit();
    }

    // For Round Table draft
    function form_submit_round_table() {
      let html = `<input type="hidden" name="status" id="status" value="0">`;
      $("#round_table_form").append(html);
      $("#round_table_form").submit();
    }

    // For We Pitch draft
    function form_submit_we_pitch() {
      let html = `<input type="hidden" name="status" id="status" value="0">`;
      $("#we_pitch_form").append(html);
      $("#we_pitch_form").submit();
    }
  </script>
@endsection


<!-- eof #box_wrapper -->
<!--</div>-->
<!-- eof #canvas -->
