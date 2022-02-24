@extends('backEnd.layouts.layout') @section('admin_content')
  <!-- container -->
  <div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
      <div>
        <h4 class="content-title mb-2">Hi, Welcome Back!</h4>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Support</a></li>
            <li style="display:none;" class="breadcrumb-item active" aria-current="page">Project</li>
          </ol>
        </nav>
      </div>

    </div>
    <!-- /breadcrumb -->
    <!-- row opened -->
    <div class="row row-sm">
      <div class="col-xl-12">
        <div class="main-content-body main-content-body-profile">
          <nav class="nav main-nav-line card">
            <a class="nav-link active tablinks" data-toggle="tab" onclick="openCity(event, 'General Information')"
              id="defaultOpen">Event OverView</a>
            <a class="nav-link tablinks" data-toggle="tab" onclick="openCity(event, 'Delivery & Installation')">Jury</a>
            <a class="nav-link tablinks" data-toggle="tab" onclick="openCity(event, 'Service & Maintenance')">User</a>


          </nav>
          @component('backEnd.components.alert')
          @endcomponent
          <!-- main-profile-body -->
          <div class="main-profile-body p-0">
            <div class="row row-sm">
              <div class="col-12">
                <div class="card mg-b-20 tabcontent" id="General Information">
                  <div class="card-body">
                    {{-- <div class="card-header">
                      <div class="media">
                        <div class="media-user mr-2">
                          <div class="main-img-user avatar-md"><img alt="" class="rounded-circle"
                              src="{{ url('backEnd/img/faces/6.jpg') }}"></div>
                        </div>
                        <div class="media-body">
                          <h6 class="mb-0 mg-t-9">Petey Cruiser Pechon</h6><span class="text-primary">just now</span>
                        </div>
                        <div class="ml-auto">
                          <div class="dropdown show">
                            <a class="new" data-toggle="dropdown" href="JavaScript:void(0);"><i
                                class="fas fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Edit Post</a> <a class="dropdown-item" href="#">Delete
                                Post</a> <a class="dropdown-item" href="#">Personal Settings</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> --}}
                    <fieldset class="form-group">
                      <table class="table display table-bordered table-striped table-hover">
                        <tbody>
                          <tr>
                            <td><b>Event Name : </b></td>
                            <td>{{ $normal_event->normal_event_title ?? '-----' }}</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td><b>Event Poster : </b></td>
                            <td>
                                @if ($normal_event->normal_event_poster)
                                <img src="{{ asset('we/images/'.$normal_event->normal_event_poster) }}" alt="Event Poster" width="100" height="100"></td>
                                @else
                                No Image
                                @endif
                               
                          </tr>
                          <tr>
                            <td><b>Event Mode : </b></td>
                            <td>{{ $normal_event->normal_event_mode ?? '-----' }}</td>
                          </tr>
                          <tr>
                            <td><b>Event Start Date : </b></td>
                            <td> {{ Carbon\Carbon::parse($normal_event->normal_event_start_date)->format('d/m/Y') ?? '-----' }} </td>
                          </tr>
                          <tr>
                            <td><b>Event End Date : </b></td>
                            <td> {{ Carbon\Carbon::parse($normal_event->normal_event_end_date)->format('d/m/Y') ?? '-----' }} </td>
                          </tr>
                          <tr>
                            <td><b>Event Start Time : </b></td>
                            <td> {{ Carbon\Carbon::parse($normal_event->normal_event_from)->format('h:i A') ?? '-----' }} </td>
                          </tr>
                          <tr>
                            <td><b>Event End Time : </b></td>
                            <td> {{ Carbon\Carbon::parse($normal_event->normal_event_to)->format('h:i A') ?? '-----' }} </td>
                          </tr>
                          <tr>
                            <td><b>Community Name : </b></td>
                            <td>{{ $normal_event->community_name ?? '-----' }}</td>
                          </tr>
                          <tr>
                            <td><b>Creator Name : </b></td>
                            <td>{{ $normal_event->creator_id ?? '-----' }}</td>
                          </tr>
                          <tr>
                            <td><b>State : </b></td>
                            <td>{{ $normal_event->state_name ?? '-----' }}</td>
                          </tr>
                          <tr>
                            <td><b>City :</b></td>
                            <td>{{ $normal_event->city_name ?? '-----' }}</td>
                          </tr>
                          <tr>
                            <td><b>Event Sector : </b></td>
                            <td>{{ $normal_event->sectorname ?? '-----' }}</td>
                          </tr>
                          <tr>
                            <td><b>Event Type :</b></td>
                            <td>{{ $normal_event->type ?? '-----' }}</td>
                          </tr>

                          <tr>
                            <td><b>Description : </b></td>
                            <td>{!! $normal_event->normal_event_desc ?? '-----' !!}</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td><b>Event Link : </b></td>
                            {{-- <td>  <p id="div1"> {{url( '/jury/eventslist?'.'event='.$id)}}</p><button id="button1"   onclick="CopyToClipboard('div1')">copy event url</button> </td> --}}
                            <td>
                                <p id="div1">
                                  {{ $normal_event->event_link ?? '-----' }}
                              </p>
                              <button id="button1" onclick="CopyToClipboard('div1')">copy event
                                url</button>
                            </td>
                          </tr>

                        </tbody>
                      </table>
                    </fieldset>

                  </div>
                </div>
                <div class="card mg-b-20 tabcontent" id="Delivery & Installation">
                  <br>
                  <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                      <h4 class="card-title mg-b-0 mt-2"></h4>
                      <i class="mdi mdi-dots-horizontal text-gray"></i>
                      <a class="btn ripple btn-info" data-target="#modaldemo3" data-toggle="modal" href="#">Send Mail</a>
                    </div>
                  </div>
                  <div class="card-body h-100">
                    <div class="table-responsive">
                      <table class="table text-md-nowrap" id="example1">
                        <thead>
                          <tr>
                            <th class="wd-15p border-bottom-0"> Name</th>
                            <th class="wd-15p border-bottom-0">Email</th>
                            <th class="wd-20p border-bottom-0">Phone</th>
                            <th class="wd-20p border-bottom-0">WhatsApp</th>
                          </tr>
                        </thead>
                        <tbody>
                          {{-- @foreach ($juryDatas as $juryData)
                                                <tr>
                                                    <td>{{$juryData->name}}</td>
                                                    <td>{{$juryData->email}}</td>
                                                    <td>{{$juryData->mobile_number}}</td>
                                                   <td><a target="blank" href="{{('https://api.whatsapp.com/send?phone=+91'.$juryData->mobile_number.'&text=hi')}}" 
                                        class="btn ripple btn-success text-white btn-icon"><i class="fab fa-whatsapp"></i></a></td>
                                        
                                                </tr>
                                                @endforeach --}}
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

                <div class="card tabcontent" id="Service & Maintenance">
                  <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                      <h4 class="card-title mg-b-0 mt-2"></h4>
                      <i class="mdi mdi-dots-horizontal text-gray"></i>
                      <a data-target="#modaldemo1" data-toggle="modal" href="#"><i class="fe fe-plus"></i><img
                          src="{{ url('backEnd/image/add-icon.png') }}" /></a>
                    </div>
                  </div>
                  <div class="card-body h-100">
                    <div class="table-responsive">
                      <table class="table text-md-nowrap" id="example2">
                        <thead>
                          <tr>
                            <th class="wd-15p border-bottom-0"> Name</th>
                            <th class="wd-15p border-bottom-0">Email</th>
                            <th class="wd-20p border-bottom-0">Phone</th>
                            <th class="wd-15p border-bottom-0">Profession</th>
                            <th class="wd-15p border-bottom-0">Designation</th>
                            <th class="wd-15p border-bottom-0">Usercatgeory</th>
                            <th class="wd-15p border-bottom-0">Youtube</th>
                          </tr>
                        </thead>
                        <tbody>
                          {{-- @foreach ($userDatas as $userData)
                                                <tr>
                                                    <td>{{$userData->name}}</td>
                                                    <td>{{$userData->email}}</td>
                                                    <td>{{$userData->phone}}</td>
                                                    <td>{{$userData->profession}}</td>
                                                    <td>{{$userData->designation}}</td>
                                                    <td>{{ App\Models\Category::where('id',$userData->usercategory)->first()->categoryname??'' }}</td>
                                                    <td><a target="blank" href="{{$userData->youtubelink}}" 
                                                        class="btn ripple btn-primary text-white btn-icon"><i class="fab fa-youtube"></i>
                                                    </a></td>
                                                   
                                                </tr>
                                                @endforeach --}}
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- main-profile-body -->
        </div>

      </div>
      <!--/div-->


    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
  </div>
  <!-- /main-content -->
  <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  </script>
  <script>
    function CopyToClipboard(containerid) {
      if (document.selection) {
        var range = document.body.createTextRange();
        range.moveToElementText(document.getElementById(containerid));
        range.select().createTextRange();
        document.execCommand("copy");
      } else if (window.getSelection) {
        var range = document.createRange();
        range.selectNode(document.getElementById(containerid));
        window.getSelection().addRange(range);
        document.execCommand("copy");
        alert("Link has been copied")
      }
    }
  </script>
  <!-- Basic modal -->
  <div class="modal" id="modaldemo1">
    <div class="modal-dialog" role="document">
      <div class="modal-content modal-content-demo">
        <div class="modal-header">
          <h6 class="modal-title">Add Youtube Link</h6><button aria-label="Close" class="close"
            data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
        </div>
        <form method="post" action="{{ url('admin/youtube/store') }}" enctype="multipart/form-data">

          @csrf
          <div class="modal-body">
            <div class="details-form-field form-group row">
              <label for="name" class="col-sm-3 col-form-label font-weight-600">Upload Excel :</label>
              <div class="col-sm-6">
                <input id="name" class="form-control" name="file" type="file">
              </div>

            </div>
            <div class="details-form-field form-group row">
              <label for="name" class="col-sm-3 col-form-label font-weight-600">Sample Excel :</label>
              <div class="col-sm-6">
                <a href="{{ url('backEnd/youtubelink.xlsx') }}" class="btn btn-success btn">Download<i
                    class="fas fa-file-excel" style="margin-left: 3px;font-size: 20px;"></i></a>
              </div>

            </div>
            <div class="modal-footer">
              <button class="btn ripple btn-success" type="submit">Save</button>
              <button class="btn ripple btn-danger" data-dismiss="modal" type="button">Close</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>

  <!-- End Basic modal -->

  <!-- Large Modal -->
  {{-- <div class="modal" id="modaldemo3">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Jury Mail Invitation</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="{{ url('admin/mail/store')}}" enctype="multipart/form-data">

                @csrf
            <div class="modal-body">
                <div class="details-form-field form-group row">
                    <label for="name" class="col-sm-3 col-form-label font-weight-600">Subject :</label>
                    <div class="col-sm-6">
                        <input class="form-control" name="subject" type="text">
                        <input class="form-control" hidden name="jury" type="text" value="{{$id}}">
                    </div>

                </div>
                <div class="details-form-field form-group row">
                    <label for="name" class="col-sm-2 col-form-label font-weight-600">Message :</label>
                    <div class="col-sm-10">
                        <textarea class="form-control summernote" name="msg" rows="6" placeholder="">
                           




                            On behalf of Womennovator, we<br>
                            cordially invite you to oblige us as an esteemed Jury Member for Womennovator 2020 - 21.  
                            <br><br>
                            
                            Our Pitching Event  {{  $event->event_name }} is<br>
                            scheduled on 
                            <br><br>
                            Date :   {{date('F d,Y', strtotime($event->start_date))}} <br><br>
                            
                            Time  {{  $event->time ??''}}  Onwards<br><br>
                            
                            Duration: 1.5 hours to 2 hours <br><br>
                            
                            Event Joining Link : <a href="{{  $event->event_link }}">{{  $event->event_link }}</a><br><br>
                            
                            
                            
                            Judging software link: <a href="{{url('http://wepitch.weblooptechnik.in/ ')}}">http://wepitch.weblooptechnik.in/ </a>
                            <br>
                             <br>
                            
                            Request you to please login and update your Profile picture and about you and other details for our team to create the creative and right introduction for the event.  
                            <br><br>
                            Event flow: <br>
                            5 Mins Introduction of Womennovator by an Influencer and Founder <br>
                            
                            5 Mins Introduction of Jury <br>
                            
                            30 to 40 Mins Pitching competition  with Q& A with Jury <br>
                            
                            15 Mins  5 Mins per Jury - about their experience at the event , their suggestion to participants and one key learning message. 
                            
                            <br><br>
                            
                            Note: We shall be doing the competition Facebook live and you can simply host a watch party from your page. <a href="{{url('https://www.facebook.com/womennovator')}}">Click here</a> for our page   
                            <br><br>
                            
                            Parameter of Jury and category are as follows: 
                            <br>
                            1. Entrepreneurs:   ( 3 Winners ) <br>
                            a. Problem <br>
                            b. Solution <br>
                            c. Market Approach & Strategy  <br>                  
                            2.     Leaders/ Professionals: - ( 1 winners) <br>
                            a. Society Development <br>
                            b. Policy Contribution <br>
                            c. Key Achievements <br>           
                            3.     Social Activists: ( 1 winners) <br>
                            a. Problem <br>
                            b. Solution <br>
                            c. Key Achievements <br>
                            4.  Public choice awards – on the basis of youtube videos.  ( 1 winner) <br><br>
                            
                            Total 6 Winners shall be selected for the 1000 Women of Asia's awards 2021. In case of any further clarification you can refer to the <a href="{{url('https://www.womennovator.co.in/faq/')}}">FAQs</a>  
                            <br><br>
                            Note, the winners with our influencers and you as our Jury shall be invited for our annual events at 1000 Women faces of awards.  Details are listed below. 
                            <br><br>
                            Forthcoming<br>
                            Mega Event: Womennovator 1000 Women Faces of Asia Awards <br><br>
                            
                            1000 Women Awards of Asia ceremony, a three-day event is being <br>
                            planned for the month of August - September 2021 and the tentative program is as below: <br><br>
                            
                            
                            Event Name: Womennovator 1000 Women Faces of Asia
                            Awards <br>
                            
                            
                            
                            Objective: Highlighting MSME/ Startup| Women <br>
                            
                            
                            
                            Highlights: Awards| Conference| Exhibition | Pitching
                            Competition <br>
                            
                            
                            
                            Duration of Event: 3 days <br>
                            
                            
                            
                            
                            
                            Expected audience: 10000 plus <br><br><br>
                            
                            
                            
                            
                            
                            Our Campaign and content is as follows: You can copy paste the same or simply make your own video and post on social media inviting your audience to apply , <br>
                            simply tag @womennovator <br>
                            
                            " <a href="{{url('https://www.youtube.com/watch?v=o5Y0p1TKkWk')}}">https://www.youtube.com/watch?v=o5Y0p1TKkWk</a> <br>
                            Womennovator invites you to  #1000WomenofAsiaAwards . <br>
                            Apply now: <a href="{{url('https://www.womennovator.co.in/women-faces-awards/')}}">https://www.womennovator.co.in/women-faces-awards/</a> and send us a video on <br>
                            WhatsApp: <a target="blank" href="{{('https://api.whatsapp.com/send?phone=+919560703449&text=hi')}}">9560703449</a> about yourself, your business or work in 60 seconds.<br>
                            Registrations open*no charges applicable <br>
                            #WomenAwards #WomenInnovator #WomenChangemaker #ShemeansBusiness #DeshkiBeti " <br>
                            
                            <br><br><br>
                            
                            We would be greatly obliged to have you on board as a part <br>
                            of our Jury for Womennovator 2020-21  to <br>
                            support the initiative of #NaariShakti and#DeshkiBeti. <br><br>
                            
                            Kindly confirm your participation as a Jury member by email, along <br>
                            with a high resolution photograph and your 200 words profile.<br><br>
                            
                            About Womennovator: <br><br>
                            
                            Womennovator came <br>
                            into being in 2014 as an initiative to forge <br>
                            positive visibility for women, by facilitating outreach <br>
                            for women striving for excellence in various fields. Womennovator has been ranked amongst the Top <br>
                            seven virtual incubators for women entrepreneurs, as featured on The Hindu Business line and makers report in association with Yourstory . <br>
                             <a href="{{url('https://www.thehindubusinessline.com/opinion/indias-incubation-ecosystem-must-foster-woman-entrepreneurship/article33106940.ece')}}"> Click 
                                here</a> . <br>
                            
                            
                            We provide an avenue for their efforts to gain recognition and <br>
                            appreciation, thus inspiring them to tap their latent entrepreneurial talent and go for their dreams. We are thus creating a community of efficacious women by giving them a platform to escalate their endeavors and grow <br>
                            local economies through: <br><br><br>
                            
                            
                            
                            
                            
                            
                            Business education and training
                            <br><br>
                            
                            
                            Mentoring and networking
                            <br><br>
                            
                            
                            Interaction with industry leaders to facilitate
                            revenue contracts<br><br>
                            
                            
                            
                            Media outreach (both print and digital)<br><br>
                            
                            
                            
                            Access to capital and government support schemes<br><br>
                            
                            
                            This year , we have <br>
                            broadened our horizons <br>
                            to reach out to  women entrepreneurs who will be recognized as 1000 Women <br>
                            Faces of Asia 2020-21 from <br>
                            <a href="{{url('https://docs.google.com/spreadsheets/d/17AE_IR5lipFVe1NXGRSeabafGmMp1a4oyo6W3Ar6Qgk/edit#gid=0')}}">100 Smart Cities </a> <br>
                            and various <br>
                            <a href="{{url('https://docs.google.com/spreadsheets/d/1gtKGHXFOYUajgGyoq2u5ba99W4UNclzoKGjkHgwAvOA/edit#gid=0')}}">Sectors</a> <br>
                            in India. <br><br>
                            
                            Womennovator initiative WE - PITCH " Elevator Pitch Series <br>
                            which is " For Women & By Women " in 100+ Indian cities and 90+ sectors impacting more than 10,000+ women entrepreneurs in 30+ countries around the world.  
                          <br>  This<br>
                            will include India’s top Private Equity & Venture Capital Firms, Industry Leaders, Technocrats, Mentors, Entrepreneurs who will guide and motivate and will also help them in funding and generating new businesses. 
                            <br><br>
                            Womennovator<br>
                            along with TGS Global<br>
                            [a dynamic global business network of independent firms providing accounting, audit, tax, business advisory and commercial legal services, currently  operating with 56 members from 50 countries initiated the
                           <br> international participation at
                           <br> Singapore in 2019 and launched Womennovator in 20 plus
                            countries. <br><br><br>
                            
                             
                            
                            Womennovator featured <br>
                            in the Asia Book of Records in <br>
                            2018 by providing an opportunity to 100 <br>
                            Women to pitch their products/ services/ initiatives in <br>
                            60 seconds on the same platform. We are now aiming for <br>
                            a World Record <br>
                            in 2021, with <br>
                            190 influencers, 1000+ <br>
                            women entrepreneurs/Social Activist/Professional & Leaders <br>
                            and 1000+ plus Jury members.  <br><br><br>
                            
                            
                            
                            For more details on our coverage and work <a href="{{url('https://www.womennovator.co.in/media-2/')}}">click
                                here. </a>
                            <br><br><br>
                            
                            
                            
                            Regards<br>
                            
                            Team Womennovator <br>
                            
                            On behalf of  <br><br>
                                               <center>Know about the roles & advantages of</center>
                                              <center> <a href="{{url('https://www.youtube.com/watch?v=k5I6-J8djsM&t=22s')}}">Influencer </a> |  <a href="{{url('https://www.youtube.com/watch?v=9DAC0BLP6eE')}}">Jury </a></center>
                                              <center> <a href="{{url('https://www.youtube.com/watch?v=9DAC0BLP6eE')}}">Member </a> |  <a href="{{url('https://www.youtube.com/watch?v=Fjb5Y8bez7Y&t=2s')}}">Academic </a></center>
                                              <center> <a href="{{url('https://www.youtube.com/watch?v=Fjb5Y8bez7Y&t=2s')}}">partner  </a> |  <a href="{{url('https://www.youtube.com/watch?v=k5I6-J8djsM&t=22s')}}">Association </a></center>
                                              <center> <a href="{{url('https://www.youtube.com/watch?v=Cct30pWpvSQ')}}">Partner  </a> |  <a href="{{url('https://www.youtube.com/watch?v=siZ8GDYxEXc')}}">Value </a></center>
                                              <center> <a href="{{url('https://www.youtube.com/watch?v=siZ8GDYxEXc')}}">Partner  </a> </center>
                        </textarea>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button class="btn ripple btn-primary" type="submit">Save</button>
                <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
            </div>
            </form>
        </div>
    </div>
</div> --}}
  <!--End Large Modal -->
@endsection
