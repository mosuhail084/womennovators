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
              <li><a href="{{ url('community/events/' . $community->id) }}">Events</a></li>
              <li><a href="#">Members</a></li>
              <li><a href="{{ route('community.about', ['com_id' => $community->id]) }}">About</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-sm-3">
          <a href="{{ route('we.community_setting', ['com_id' => $community->id]) }}" class="join-btn"><i class="fa fa-cog" aria-hidden="true"></i> Community Settings</a>

        </div>
      </div>
    </div>
  </div>


</div>
<section class="section">
  <div class="container display-flex">
    {{-- <div class="row" style="flex: auto;"> --}}
      <div class="col-sm-9">
        <div class="row about-section">
          <h1 class="about-heading">About</h1>
          <form class="login-form" method="post"
          action="{{ route('frontendcommunity.update', $community->id) }}" enctype="multipart/form-data">
          @method('POST')
          @csrf
          <div class="about-section-para">
            {{-- <p contenteditable="true" spellcheck="false">
              {{ $community->about }}
            </p> --}}
            <div class="form-group">
            <input type="text" style="border:none" placeholder="" name="about"
            value="{{ $community->about ?? '' }}" class="form-control" required>
            </div>
          </div>
          <button type="submit" class=" btn-save">Save</button>
        </form>
          <div role="tabpanel" class="tab-pane" id="2"></div>
        </div>

        <div class="col-sm-5"></div>
      </div>
    {{-- </div> --}}
    <div class="col-sm-3 mx-5">
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

@endsection

<!-- eof #box_wrapper -->
<!--</div>-->
<!-- eof #canvas -->
