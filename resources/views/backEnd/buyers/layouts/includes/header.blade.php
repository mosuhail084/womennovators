<!-- main-content -->
<div class="main-content">

    <!-- main-header -->
<div class="main-header  side-header">
    <div class="container-fluid">
        <div class="main-header-left ">
            <div class="app-sidebar__toggle mobile-toggle" data-toggle="sidebar">
                <a class="open-toggle" href="#"><i class="header-icons" data-eva="menu-outline"></i></a>
                <a class="close-toggle" href="#"><i class="header-icons" data-eva="close-outline"></i></a>
            </div>
            <div class="responsive-logo">
                <a href="index.html"><img src="{{ url('backEnd/img/brand/logo-white.png')}}" class="logo-1"></a>
                <a href="index.html"><img src="{{ url('backEnd/img/brand/logo.png')}}" class="logo-11"></a>
                <a href="index.html"><img src="{{ url('backEnd/img/brand/favicon-white.png')}}" class="logo-2"></a>
                <a href="index.html"><img src="{{ url('backEnd/img/brand/favicon.png')}}" class="logo-12"></a>
            </div>
           
        </div>
        <div class="main-header-right">
            <div class="nav nav-item  navbar-nav-right ml-auto">
            
                <div class="dropdown main-profile-menu nav nav-item nav-link">

                    <a class="profile-user d-flex" href=""><img src="{{ url('backEnd/img/faces/active.png')}}"" alt="user-img" class="rounded-circle mCS_img_loaded"><span></span></a>

                    <div class="dropdown-menu">
                        <div class="main-header-profile header-img">
                            <div class="main-img-user"><img alt="" src="{{ url('backEnd/img/faces/active.png')}}""></div>
                            <h6>Admin</h6>
                        </div>
                        <a style="display:none;" class="dropdown-item" href=""><i class="far fa-user"></i> My Profile</a>
                        <a style="display:none;" class="dropdown-item" href=""><i class="far fa-edit"></i> Edit Profile</a>
                        <a style="display:none;" class="dropdown-item" href=""><i class="far fa-clock"></i> Activity Logs</a>
                        <a class="dropdown-item" href="{{ url('admin/editprofile') }}"><i class="fas fa-sliders-h"></i> Account Settings</a>
                        <a class="dropdown-item"  href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
                            {{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                    </div>
                </div>
                <div class="dropdown main-header-message right-toggle" style="display:none;">
                    <a class="nav-link pr-0" data-toggle="sidebar-right" data-target=".sidebar-right">
                        <i class="ion ion-md-menu tx-20 bg-transparent"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /main-header -->
