@extends('we.layouts.layout') @section('front_content')

  <div class="event-page-banner">
    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <h1>Welcome to your dashboard </h1>
          <div class="community-ban-cintent ">

            <div class="date-box text-center to_animate" data-animation="fadeInUp">
              <h2>{{ $event->start_date }}</h2>
              <h3>MONDAY</h3>
              <p>{{ $event->time }}</p>

            </div>

            <div class="female-user-content to_animate" data-animation="fadeInDown">
              <h2>{{ $event->event_name }}</h2>
              <span class="award">awards</span>
              <ul class="communi-list">
                <li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $event->city_name }},
                    {{ $event->statename }}</a></li>
              </ul>
            </div>
          </div>
          <nav class="comunity-nav">
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Attendees</a></li>
              <li><a href="#">Jury</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-sm-3 to_animate" data-animation="fadeInRight">
          <a href="#" class="join-btn">Join this event</a>
          <div class="lead-by">

            <div class="team-user">
              <ul class="people-allready">
                <li><a class="team-img" href="#"><img src="./images/user.jpg"></a></li>
                <li><a class="team-img" href="#"><img src="./images/user.jpg"></a></li>
              </ul>

              <div class="team-user-title">
                <h5>26 people already going</h5>
              </div>
            </div>

          </div>
          <div class="share">
            <a><i class="fa fa-share" aria-hidden="true"></i> Share this event</a>
          </div>
        </div>
      </div>
    </div>


  </div>
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-sm-9">


          <div class="row">
            <div class="col-sm-9">
              <div class="post about-event to_animate" data-animation="fadeInUp">
                <h3>About the event</h3>
                <p>Happening this Monday, around you, the event you’ve all been waiting for -- Festival in a Box!!!!</p>

                <p>Special treats this time around</p>

                <ul>
                  <li>Talk by self-made entrepreneur Rupali Chopra</li>
                  <li>A dropping by, veteran author and coloumist Rashmi Seth</li>
                </ul>


                <p>Events you can win awards under</p>

                <ul>
                  <li>Most Profitable Week award</li>
                  <li>Wonder Women of the Month award</li>
                </ul>

                <p>To participate for these awards, apply here -- <a>bit.ly/southmumbaiawards</a></p>
                <p>Call here is case of doubts -- +91 7053020016</p>
              </div>


            </div>
            <div class="col-sm-3"></div>
          </div>

        </div>
        <div class="col-sm-3">
          <div class="rt-heading">
            <h2>Community</h2>
          </div>
          <div class="team to_animate" data-animation="fadeInUp">
            <ul>
              <li>
                <div class="team-user-up evn-te-user">
                  <div class="team-user ">
                    <a class="team-img" href="#"><img src="./images/user.jpg"></a>
                    <div class="team-user-title">
                      <h5>Female Entrepreneurs of Bombay</h5>

                    </div>
                  </div>
                  <p>A women community for up and coming entrepreneurs from Bombay -- from handicraft to operations
                    intensive businesses.</p>
                </div>
              </li>

            </ul>
            <div class="entire-team">
              <ul>
                <li><a class="entire-team-list"><img src="./images/user.jpg"></a></li>
                <li><a class="entire-team-list"><img src="./images/user.jpg"></a></li>
              </ul>
              <a href="#" class="entire-text">Join 19k followers</a>
            </div>
          </div>
          <div class="rt-heading">
            <h2>Community Leader</h2>
          </div>

          <div class="team to_animate" data-animation="fadeInUp">
            <ul>
              <li>
                <div class="team-user-up">
                  <div class="team-user">
                    <a class="team-img" href="#"><img src="./images/user.jpg"></a>
                    <div class="team-user-title">
                      <h5>Robin Smith<span class="check-icon"><img src="images/check-icon.png"></span></h5>
                      <span class="sub-dis">Fintech Guru</span>

                    </div>
                  </div>
                  <p>15 years of experience in ed-tech and community service.</p>
                </div>
              </li>

            </ul>

          </div>

        </div>
      </div>

    </div>
  </section>
  <section class="">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="up-com-head">Other events from this community & influencer</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3 to_animate" data-animation="fadeInUp">
          <div class="post upcoming-event">

            <div class="img-post">
              <img src="images/post1.png">
            </div>
            <div class="post-title">
              <div class="row">
                <div class="col-sm-12">
                  <h3>Festival in a Box</h3>
                  <div class="inline-sec">
                    <h4>Monday, 20 Sep</h4>
                    <span class="time-in-block"><a href=""><i class="fa fa-clock-o" aria-hidden="true"></i> 12 PM -
                        1PM</a></span>
                  </div>
                  <ul class="communi-list communi-list-sm">
                    <li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> D52 Worli, Mumbai</a></li>
                  </ul>
                </div>

              </div>
            </div>
            <div class="community-ban-cintent">
              <div class="female-user">
                <img src="images/femail-img.png">
              </div>
              <div class="female-user-content2">
                <h2>Female Entrepreneurs of Bombay</h2>

              </div>
            </div>
            <div class="attending">
              <p>12 Attending</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3 to_animate" data-animation="fadeInUp">
          <div class="post upcoming-event">

            <div class="img-post">
              <img src="images/post1.png">
            </div>
            <div class="post-title">
              <div class="row">
                <div class="col-sm-12">
                  <h3>Festival in a Box</h3>
                  <div class="inline-sec">
                    <h4>Monday, 20 Sep</h4>
                    <span class="time-in-block"><a href=""><i class="fa fa-clock-o" aria-hidden="true"></i> 12 PM -
                        1PM</a></span>
                  </div>
                  <ul class="communi-list communi-list-sm">
                    <li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> D52 Worli, Mumbai</a></li>
                  </ul>
                </div>

              </div>
            </div>
            <div class="community-ban-cintent">
              <div class="female-user">
                <img src="images/femail-img.png">
              </div>
              <div class="female-user-content2">
                <h2>Female Entrepreneurs of Bombay</h2>

              </div>
            </div>
            <div class="attending">
              <p>12 Attending</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3 to_animate" data-animation="fadeInUp">
          <div class="post upcoming-event">

            <div class="img-post">
              <img src="images/post1.png">
            </div>
            <div class="post-title">
              <div class="row">
                <div class="col-sm-12">
                  <h3>Festival in a Box</h3>
                  <div class="inline-sec">
                    <h4>Monday, 20 Sep</h4>
                    <span class="time-in-block"><a href=""><i class="fa fa-clock-o" aria-hidden="true"></i> 12 PM -
                        1PM</a></span>
                  </div>
                  <ul class="communi-list communi-list-sm">
                    <li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> D52 Worli, Mumbai</a></li>
                  </ul>
                </div>

              </div>
            </div>
            <div class="community-ban-cintent">
              <div class="female-user">
                <img src="images/femail-img.png">
              </div>
              <div class="female-user-content2">
                <h2>Female Entrepreneurs of Bombay</h2>

              </div>
            </div>
            <div class="attending">
              <p>12 Attending</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3 to_animate" data-animation="fadeInUp">
          <div class="post upcoming-event">

            <div class="img-post">
              <img src="images/post1.png">
            </div>
            <div class="post-title">
              <div class="row">
                <div class="col-sm-12">
                  <h3>Festival in a Box</h3>
                  <div class="inline-sec">
                    <h4>Monday, 20 Sep</h4>
                    <span class="time-in-block"><a href=""><i class="fa fa-clock-o" aria-hidden="true"></i> 12 PM -
                        1PM</a></span>
                  </div>
                  <ul class="communi-list communi-list-sm">
                    <li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> D52 Worli, Mumbai</a></li>
                  </ul>
                </div>

              </div>
            </div>
            <div class="community-ban-cintent">
              <div class="female-user">
                <img src="images/femail-img.png">
              </div>
              <div class="female-user-content2">
                <h2>Female Entrepreneurs of Bombay</h2>

              </div>
            </div>
            <div class="attending">
              <p>12 Attending</p>
            </div>
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
