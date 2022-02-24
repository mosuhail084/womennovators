{{-- <!-- main-sidebar opened -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div> --}}
<aside class="main-sidebar app-sidebar sidebar-scroll">
    <div class="main-sidebar-header">
        <a class="desktop-logo logo-light active"  href="{{route('admin.dashboard')}}" class="text-center mx-auto"><img style="width:80px;" src="{{ url('backEnd/img/Womennovator.png')}}"></a>
        <a class="desktop-logo icon-logo active" href="index.html"><img src="{{ url('backEnd/img/Womennovator.png')}}" class="logo-icon"></a>
        <a class="desktop-logo logo-dark active" href="index.html"><img src="{{ url('backEnd/img/brand/logo-white.png')}}" class="main-logo dark-theme" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-dark active" href="index.html"><img src="{{ url('backEnd/img/brand/favicon-white.png')}}" class="logo-icon dark-theme" alt="logo"></a>
    </div>
    <!-- /logo -->
  
    <!-- /user -->
    <div class="sidebar-navs">
        <ul class="nav  nav-pills-circle">
            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings" aria-describedby="tooltip365540">
               <a class="desktop-logo logo-light active"  href="{{route('admin.dashboard')}}" class="text-center mx-auto"><img src="{{ url('backEnd/img/Womennovator.png')}}" class="main-logo"></a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="home">
                <a class="nav-link text-center m-2" href="{{route('admin.dashboard')}}">
                    <i class="fe fe-home"></i>
                </a>
            </li>
          
        </ul>
    </div>
    <div class="main-sidebar-body">
        <ul class="side-menu ">
            
             @php
        
           $role=App\Models\Admin::where('id',Auth::id())->select('role_id')->pluck('role_id')->first();
           // dd($role);
            @endphp
            
             @if($role==11)
              <li class="slide">
                <a class="side-menu__item" href="{{url('admin/home')}}"><i class="side-menu__icon fe fe-airplay"></i><span
                            class="side-menu__label">Dashboard</span></a>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon far fa-edit"></i><span class="side-menu__label">Asia award Winners</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/awardee')}}">Asia award Winners List</a></li>
                
                      
                </ul>
            </li>
           
             @endif
              @if($role==12)
              <li class="slide">
                <a class="side-menu__item" href="{{url('admin/home')}}"><i class="side-menu__icon fe fe-airplay"></i><span
                            class="side-menu__label">Dashboard</span></a>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fe fe-book"></i><span class="side-menu__label"> Global Summit Data</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/globalsummit/create')}}">Add In Global Summit</a></li>
                    <li><a class="slide-item" href="{{url('admin/globalsummit')}}">Global Summit List</a></li>
                      
                </ul>
            </li>
             @endif
            @if($role==8)
            <li class="slide">
                <a class="side-menu__item" href="{{url('admin/home')}}"><i class="side-menu__icon fe fe-airplay"></i><span
                            class="side-menu__label">Dashboard</span></a>
            </li>
              <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fe fe-shopping-cart"></i><span class="side-menu__label">Campaign</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/campaign/create')}}">Add Campaign</a></li>
                    <li><a class="slide-item" href="{{url('admin/campaign')}}">Campaign List</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fas fa-user-md"></i><span class="side-menu__label">Covid Warriors</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/covidwarriors/create')}}">Add Covid Warrior</a></li>
                    <li><a class="slide-item" href="{{url('admin/covidwarriors')}}">Covid Warriors List</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fas fa-money-bill"></i><span class="side-menu__label">Payment Detail</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/payment')}}">Payment Detail List</a></li>
                </ul>
            </li>
          
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fas fa-inbox"></i><span class="side-menu__label">Covid Enquiry</span><i
                            class="angle fe fe-chevron-down"></i></a>
                            <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/covidenquirylist')}}">Covid Enquiry List</a></li>
                </ul> 
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fas fa-user-md"></i><span class="side-menu__label">Mask Campaign</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/mask')}}">Mask Campaign List</a></li>
                </ul>
            </li>
             
            @endif
              @if($role==1 || $role==2 || $role==3 )
                 <li class="slide">
                <a class="side-menu__item" href="{{url('admin/home')}}"><i class="side-menu__icon fe fe-airplay"></i><span
                            class="side-menu__label">Dashboard</span></a>
            </li>
             <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fe fe-book"></i><span class="side-menu__label"> Resource</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/resource/create')}}">Add Resource</a></li>
                    <li><a class="slide-item" href="{{url('admin/resource')}}">Resource List</a></li>
                      
                </ul>
            </li>
               <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon far fa-edit"></i><span class="side-menu__label"> Faq</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/faq/create')}}">Add Faq</a></li>
                    <li><a class="slide-item" href="{{url('admin/faq')}}">Faq List</a></li>
                   
                      
                </ul>
            </li>
             <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fe fe-phone"></i><span class="side-menu__label"> Support</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    
                    <li><a class="slide-item" href="{{url('admin/faqsupportlist')}}">Support List</a></li>
                      
                </ul>
            </li>
             <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fe fe-user"></i><span class="side-menu__label"> Mentors</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <!--<li><a class="slide-item" href="{{url('admin/mentor/create')}}">Add Mentors</a></li>-->
                    <li><a class="slide-item" href="{{url('admin/mentor')}}">Mentors List</a></li>
                      
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fe fe-book"></i><span class="side-menu__label"> Career</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/careerpage/create')}}">Add Career</a></li>
                    <li><a class="slide-item" href="{{url('admin/careerpage')}}">Career List</a></li>
                      
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fa fa-users"></i><span class="side-menu__label">Communities</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/community/create')}}">Add Communitiy</a></li>
                    <li><a class="slide-item" href="{{url('admin/community')}}">Pending Request</a></li>
                    <li><a class="slide-item" href="{{route('admin.accepted_request')}}">Accepted Request List</a></li>
                </ul>
            </li>
             <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fas fa-images"></i><span class="side-menu__label"> Resume</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                  <!--  <li><a class="slide-item" href="{{url('admin/careerform/create')}}">Add Career form</a></li>-->
                    <li><a class="slide-item" href="{{url('admin/careerform')}}">Resume List</a></li>
                      
                </ul>
            </li>
             <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fe fe-users"></i><span class="side-menu__label"> Team</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/ourteam/create')}}">Add Team</a></li>
                    <li><a class="slide-item" href="{{url('admin/ourteam')}}">Team List</a></li>
                      
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fe fe-users"></i><span class="side-menu__label"> Award</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/award/create')}}">Add Award</a></li>
                    <li><a class="slide-item" href="{{url('admin/award')}}">Award List</a></li>
                      
                </ul>
            </li>
              <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fe fe-users"></i><span class="side-menu__label"> Incubation</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                   
                    <li><a class="slide-item" href="{{url('admin/incubatee')}}">Incubatee List</a></li>
                    <li><a class="slide-item" href="{{url('admin/stories')}}">Success Stories List</a></li>
                    <li><a class="slide-item" href="{{url('admin/stories/create')}}">Add story</a></li>
                      
                </ul>
            </li>
             <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Jury</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/jury/create')}}">Add Jury</a></li>
                    <li><a class="slide-item" href="{{url('admin/jury')}}">Jury List</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fa fa-users"></i><span class="side-menu__label">Faces</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/user/create')}}">Add Faces</a></li>
                    <li><a class="slide-item" href="{{url('admin/user')}}">Faces List</a></li>
                </ul>
            </li>
             <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fa fa-users"></i><span class="side-menu__label">Influencers</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    
                    <li><a class="slide-item" href="{{url('admin/influencer')}}">Influencers List</a></li>
                </ul>
            </li>
          <!--  <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fe fe-calendar"></i><span class="side-menu__label">Events</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/event/create')}}">Add Event</a></li>
                    <li><a class="slide-item" href="{{url('admin/event')}}">Event List</a></li>
                </ul>
            </li>-->
			  <li class="slide">
          <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
              class="side-menu__icon fe fe-calendar"></i><span class="side-menu__label">Events</span><i
              class="angle fe fe-chevron-down"></i></a>
          <ul class="slide-menu">
            <li><a class="slide-item" href="{{ url('admin/event/create') }}">Add Event</a></li>
            <li><a class="slide-item" href="{{ url('admin/event') }}">Event List</a></li>
            
            <li><a class="slide-item" href="{{route('admin.normal_event_add_form')}}">Add Normal Event</a></li>
            <li><a class="slide-item" href="{{route('admin.list_normal_event')}}">Normal Event List</a></li>

            <li><a class="slide-item" href="{{route('admin.round_table_add_form')}}">Add Round Table Event</a></li>
            <li><a class="slide-item" href="{{route('admin.list_round_table')}}">Round Table Event List</a></li>

            <li><a class="slide-item" href="{{route('admin.we_pitch_add_form')}}">Add We-pitch Table Event</a></li>
            <li><a class="slide-item" href="{{route('admin.list_we_pitch')}}">We-pitch Table Event List</a></li>

          </ul>
        </li>
             <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fe fe-book"></i><span class="side-menu__label">Blog</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/blog/create')}}">Add Blog</a></li>
                    <li><a class="slide-item" href="{{url('admin/blog')}}">Blog List</a></li>
                      <li><a class="slide-item" href="{{url('admin/bloglist/commentlist')}}">Blog Comments List</a></li>
                </ul>
            </li>
            <li class="slide">
              
                <a class="side-menu__item" href="{{url('admin/result')}}"><i class="side-menu__icon far fa-edit"></i><span
                    class="side-menu__label">Result</span></a>
            </li>
             <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Staff</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/team')}}">Staff</a></li>
                    <li><a class="slide-item" href="{{url('admin/teamlevel')}}">Staff Role</a></li>
                     <li><a class="slide-item" href="{{url('admin/teamlogin/create')}}">Staff Login</a></li>
                </ul>
            </li>
            <li class="slide">
              
                <a class="side-menu__item" href="{{url('admin/city')}}"><i class="side-menu__icon fe fe-home"></i><span
                    class="side-menu__label">City</span></a>
            </li>
             <li class="slide">
              
                <a class="side-menu__item" href="{{url('admin/state')}}"><i class="side-menu__icon fe fe-map-pin menu-icon"></i><span
                    class="side-menu__label">State</span></a>
            </li>
            <li class="slide">
              
                <a class="side-menu__item" href="{{url('admin/sector')}}"><i class="side-menu__icon fe fe-layers "></i><span
                    class="side-menu__label">Sector</span></a>
            </li>
            
        
           <!--
             <li class="slide">
                <a class="side-menu__item" href="{{url('admin/home')}}"><i class="side-menu__icon fe fe-airplay"></i><span
                            class="side-menu__label">Dashboard</span></a>
            </li>
           
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fe fe-book"></i><span class="side-menu__label"> Global Summit Data</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/globalsummit/create')}}">Add In Global Summit</a></li>
                    <li><a class="slide-item" href="{{url('admin/globalsummit')}}">Global Summit List</a></li>
                      
                </ul>
            </li>
           
            <li class="slide">
          
              <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fe fe-users"></i><span class="side-menu__label"> Summit Registration </span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/summit')}}">Registration 2021</a></li>
                    
                </ul>
            </li>
			 <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fe fe-calendar"></i><span class="side-menu__label">Industry-Star-Award</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('/admin/Industry-Star-Award')}}">Industry-Star-Award</a></li>
               
                </ul>
            </li>
             
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon far fa-edit"></i><span class="side-menu__label">Asia award Winners</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/awardee')}}">Asia award Winners List</a></li>
                 <li><a class="slide-item" href="{{url('admin/trophy/list')}}">Trophy List</a></li>
                      
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fe fe-shopping-cart"></i><span class="side-menu__label">Campaign</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/campaign/create')}}">Add Campaign</a></li>
                    <li><a class="slide-item" href="{{url('admin/campaign')}}">Campaign List</a></li>
                </ul>
            </li>
             <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fas fa-user-md"></i><span class="side-menu__label">Covid Warriors</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/covidwarriors/create')}}">Add Covid Warrior</a></li>
                    <li><a class="slide-item" href="{{url('admin/covidwarriors')}}">Covid Warriors List</a></li>
                </ul>
            </li>
          
             <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fas fa-money-bill"></i><span class="side-menu__label">Payment Detail</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/payment')}}">Payment Detail List</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Jury</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/jury/create')}}">Add Jury</a></li>
                    <li><a class="slide-item" href="{{url('admin/jury')}}">Jury List</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fa fa-users"></i><span class="side-menu__label">Faces</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/user/create')}}">Add Faces</a></li>
                    <li><a class="slide-item" href="{{url('admin/user')}}">Faces List</a></li>
                </ul>
            </li>
             <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fa fa-users"></i><span class="side-menu__label">Influencers</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    
                    <li><a class="slide-item" href="{{url('admin/influencer')}}">Influencers List</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fe fe-calendar"></i><span class="side-menu__label">Events</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/event/create')}}">Add Event</a></li>
                    <li><a class="slide-item" href="{{url('admin/event')}}">Event List</a></li>
                </ul>
            </li>
			 <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fe fe-book"></i><span class="side-menu__label"> Survey</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/survey1')}}">Survey 1</a></li>
                    <li><a class="slide-item" href="{{url('admin/survey2')}}">Survey 2</a></li>
                      
                </ul>
            </li>
			  <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fa fa-users"></i><span class="side-menu__label">Influencer's Event</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                      <li><a class="slide-item" href="{{url('admin/influencerevent/create')}}">Add Event</a></li>
                    <li><a class="slide-item" href="{{url('admin/influencerevent')}}">Event List</a></li>
                </ul>
            </li>
             <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fe fe-calendar"></i><span class="side-menu__label">Subscribers</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('/admin/subscribe')}}">Subscribers List</a></li>
               
                </ul>
            </li>
            
             <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fe fe-book"></i><span class="side-menu__label">Blog</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/blog/create')}}">Add Blog</a></li>
                    <li><a class="slide-item" href="{{url('admin/blog')}}">Blog List</a></li>
                      <li><a class="slide-item" href="{{url('admin/bloglist/commentlist')}}">Blog Comments List</a></li>
                </ul>
            </li>
            <li class="slide">
              
                <a class="side-menu__item" href="{{url('admin/result')}}"><i class="side-menu__icon far fa-edit"></i><span
                    class="side-menu__label">Result</span></a>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fe fe-box"></i><span class="side-menu__label">Category</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/category/create')}}">Add Category</a></li>
                    <li><a class="slide-item" href="{{url('admin/category')}}">Category List</a></li>
                </ul>
            </li>
           
              <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fas fa-images"></i><span class="side-menu__label">Banner</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/banner/create')}}">Add Banner</a></li>
                    <li><a class="slide-item" href="{{url('admin/banner')}}">Banner List</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class=" side-menu__icon fas fa-user-md"></i><span class="side-menu__label">Mask Campaign</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/mask')}}">Mask Campaign List</a></li>
                </ul>
            </li>
                <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fas fa-award"></i><span class="side-menu__label">Warrior Appreciation</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/appreciationlist')}}">Warrior Appreciation List</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fa fa-marker"></i><span class="side-menu__label">Marking Schema</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/markingschema/create')}}">Add Marking Schema</a></li>
                    <li><a class="slide-item" href="{{url('admin/markingschema')}}"> Marking Schema</a></li>
                </ul>
            </li>
             <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fas fa-award"></i><span class="side-menu__label">Join the Squad</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/joinsquad')}}">Join the Squad List</a></li>
                </ul>
            </li>
              <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fa fa-certificate" ></i><span class="side-menu__label">Certificate</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/certificate')}}">Certificate List</a></li>
                </ul>
            </li>
             
             <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fab fa-youtube"></i><span class="side-menu__label">Youtube Link</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/youtube/create')}}">Add Link</a></li>
                    <li><a class="slide-item" href="{{url('admin/youtube')}}">Youtube List</a></li>
                </ul>
            </li>
            <li class="slide">
              
                <a class="side-menu__item" href="{{url('admin/template')}}"><i class="side-menu__icon fe fe-clipboard"></i><span
                    class="side-menu__label">Template</span></a>
            </li>
             <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fe fe-mail"></i><span class="side-menu__label">Mail</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/mail/create')}}">Mail by Event</a></li>
                    <li><a class="slide-item" href="{{url('admin/sectormail')}}">Mail by Sector</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Team</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/team')}}">Team</a></li>
                    <li><a class="slide-item" href="{{url('admin/teamlevel')}}">Team Role</a></li>
                     <li><a class="slide-item" href="{{url('admin/teamlogin/create')}}">Team Login</a></li>
                </ul>
            </li>
             <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fas fa-inbox"></i><span class="side-menu__label">Covid Enquiry</span><i
                            class="angle fe fe-chevron-down"></i></a>
                            <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('admin/covidenquirylist')}}">Covid Enquiry List</a></li>
                </ul> 
            </li>
            
            <li class="slide">
              
                <a class="side-menu__item" href="{{url('admin/city')}}"><i class="side-menu__icon fe fe-home"></i><span
                    class="side-menu__label">City</span></a>
            </li>
             <li class="slide">
              
                <a class="side-menu__item" href="{{url('admin/state')}}"><i class="side-menu__icon fe fe-map-pin menu-icon"></i><span
                    class="side-menu__label">State</span></a>
            </li>
            <li class="slide">
              
                <a class="side-menu__item" href="{{url('admin/sector')}}"><i class="side-menu__icon fe fe-layers "></i><span
                    class="side-menu__label">Sector</span></a>
            </li>
            
        
            <li class="slide">
              
                <a class="side-menu__item" ><i class="side-menu__icon fe fe-phone"></i><span
                    class="side-menu__label">Support</span></a>
            </li>-->
            
       @endif
            
        </ul>
    </div>
</aside>
<!-- /main-sidebar -->