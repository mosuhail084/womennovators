<!-- main-sidebar opened -->
<aside class="main-sidebar app-sidebar sidebar-scroll">
    <div class="main-sidebar-header">
        <a class="desktop-logo logo-light active"  href="{{url('jury/home')}}" class="text-center mx-auto"><img style="width:80px;" src="{{ url('backEnd/img/Womennovator.png')}}"></a>
        <a class="desktop-logo icon-logo active" href="index.html"><img src="{{ url('backEnd/img/Womennovator.png')}}" class="logo-icon"></a>
        <a class="desktop-logo logo-dark active" href="index.html"><img src="{{ url('backEnd/img/brand/logo-white.png')}}" class="main-logo dark-theme" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-dark active" href="index.html"><img src="{{ url('backEnd/img/brand/favicon-white.png')}}" class="logo-icon dark-theme" alt="logo"></a>
    </div>
    <!-- /logo -->
    <div class="main-sidebar-loggedin">
        <div class="app-sidebar__user">
            <div class="dropdown user-pro-body text-center">
                <div class="user-pic">
                    <img src="{{ Auth::user()->photo ??''}}" alt="user-img" class="rounded-circle mCS_img_loaded">
                </div>
                <div class="user-info">
                    <h6 class=" mb-0 text-dark">{{ Auth::user()->name ??''}}</h6>
                    <span class="text-muted app-sidebar__user-name text-sm">{{ Auth::user()->designation ??''}}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-navs">
        <ul class="nav  nav-pills-circle">
            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="My Profile" aria-describedby="tooltip365540">
                <a class="nav-link text-center m-2">
                    <i class="fe fe-settings"></i>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Message">
                <a class="nav-link text-center m-2">
                    <i class="fe fe-mail"></i>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Notification">
                <a class="nav-link text-center m-2">
                    <i class="fe fe-bell"></i>
                </a>
            </li>
           <li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="nav-link text-center m-2">
                    <i class="fe fe-power"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
    <!-- /user -->
    <div class="main-sidebar-body">
        <ul class="side-menu ">
            <li class="slide">
                <a class="side-menu__item" href="{{url('jury/home')}}"><i class="side-menu__icon fe fe-airplay"></i><span
                            class="side-menu__label">Dashboard</span></a>
            </li>
           <li class="slide">
                <a class="side-menu__item" href="{{url('jury/event')}}"><i
                    class="side-menu__icon fe fe-calendar"></i><span
                            class="side-menu__label">Events</span></a>
            </li>
            <!--<li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fe fe-calendar"></i><span class="side-menu__label">Events</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('jury/event/create')}}">Add Event</a></li>
                    <li><a class="slide-item" href="{{url('jury/event')}}">Event List</a></li>
                </ul>
            </li>-->
            <li class="slide">
              
                <a class="side-menu__item" href="{{url('jury/editprofile')}}"><i class="side-menu__icon far fa-user"></i><span
                    class="side-menu__label">Profile</span></a>
            </li>
            <!--<li class="slide">
              
                <a class="side-menu__item" href="{{url('jury/state')}}"><i class="side-menu__icon fe fe-phone"></i><span
                    class="side-menu__label">Support</span></a>
            </li>-->
       
            
        </ul>
    </div>
</aside>
<!-- /main-sidebar -->