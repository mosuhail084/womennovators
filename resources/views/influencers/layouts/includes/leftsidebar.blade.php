<!-- main-sidebar opened -->
<aside class="main-sidebar app-sidebar sidebar-scroll">
    <div class="main-sidebar-header">
        <a class="desktop-logo logo-light active"  href="{{url('influencers/home')}}" class="text-center mx-auto"><img style="width:80px;" src="{{ url('backEnd/img/Womennovator.png')}}"></a>
        <a class="desktop-logo icon-logo active" href="index.html"><img src="{{ url('backEnd/img/Womennovator.png')}}" class="logo-icon"></a>
        <a class="desktop-logo logo-dark active" href="index.html"><img src="{{ url('backEnd/img/brand/logo-white.png')}}" class="main-logo dark-theme" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-dark active" href="index.html"><img src="{{ url('backEnd/img/brand/favicon-white.png')}}" class="logo-icon dark-theme" alt="logo"></a>
    </div>
    <!-- /logo -->
    <div class="main-sidebar-loggedin">
        <div class="app-sidebar__user">
            <div class="dropdown user-pro-body text-center">
                <div class="user-pic">
                    @if(Auth::user()->picture!=NULL)
                    <img src="{{ Auth::user()->picture ??''}}" alt="user-img" class="rounded-circle mCS_img_loaded">
                    @else
                    <img src="{{ url('influencers/image/download.png')}}" alt="user-img" class="rounded-circle mCS_img_loaded">
                    @endif
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
               <!--
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
            </li>-->
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
                <a class="side-menu__item" href="{{url('influencer/home')}}"><i class="side-menu__icon fe fe-airplay"></i><span
                            class="side-menu__label">Dashboard</span></a>
            </li>
           <li class="slide">
                <a class="side-menu__item" href="{{url('influencer/profile')}}"><i
                    class="side-menu__icon fe fe-calendar"></i><span
                            class="side-menu__label">Profile</span></a>
            </li>
                
       <!--   <li class="slide">
                <a class="side-menu__item" href="{{url('influencer/personal/details')}}"><i
                    class="side-menu__icon fe fe-calendar"></i><span
                            class="side-menu__label">Personal Details</span></a>
            </li>-->
            
       <!-- <li class="slide">
                <a class="side-menu__item" href="{{url('influencer/home')}}"><i
                    class="side-menu__icon fe fe-calendar"></i><span
                            class="side-menu__label">We-pitch</span></a>
            </li>-->
            <li class="slide">
                <a class="side-menu__item" href="{{url('influencer/juryshow')}}"><i
                    class="side-menu__icon fe fe-users"></i><span
                            class="side-menu__label">Jury Details</span></a>
            </li>
            
        </ul>
    </div>
</aside>
<!-- /main-sidebar -->