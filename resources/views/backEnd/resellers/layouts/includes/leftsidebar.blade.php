{{-- <!-- main-sidebar opened -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div> --}}
<aside class="main-sidebar app-sidebar sidebar-scroll">
    <div class="main-sidebar-header">
        <a class="desktop-logo logo-light active"  href="{{route('home')}}" class="text-center mx-auto"><img src="{{ url('backEnd/img/wemark.png')}}" class="main-logo"></a>
        <a class="desktop-logo icon-logo active" href="index.html"><img src="{{ url('backEnd/img/wemark.png')}}" class="logo-icon"></a>
        <a class="desktop-logo logo-dark active" href="index.html"><img src="{{ url('backEnd/img/brand/logo-white.png')}}" class="main-logo dark-theme" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-dark active" href="index.html"><img src="{{ url('backEnd/img/brand/favicon-white.png')}}" class="logo-icon dark-theme" alt="logo"></a>
    </div>
    <!-- /logo -->
  
    <!-- /user -->
    <div class="sidebar-navs">
        <ul class="nav  nav-pills-circle">
            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings" aria-describedby="tooltip365540">
               <a class="desktop-logo logo-light active"  href="{{route('home')}}" class="text-center mx-auto"><img src="{{ url('backEnd/img/0km.png')}}" class="main-logo"></a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="home">
                <a class="nav-link text-center m-2" href="{{route('home')}}">
                    <i class="fe fe-home"></i>
                </a>
            </li>
          
        </ul>
    </div>
    <div class="main-sidebar-body">
        <ul class="side-menu ">

        <li class="slide">
                <a class="side-menu__item" href="{{url('/resellers/home')}}"><i class="side-menu__icon fe fe-airplay"></i><span
                            class="side-menu__label">Dashboard</span></a>
            </li>

        {{-- <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fe fe-shopping-cart"></i><span class="side-menu__label">Product</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('buyer/products/create')}}">Add Product</a></li>
                    <li><a class="slide-item" href="{{url('buyer/products')}}">Product List</a></li>
                </ul>
            </li>

            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fa fa-list"></i><span class="side-menu__label">Order detail</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="#">Order Detail List</a></li>
                </ul>
            </li>

            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fa fa-shopping-cart"></i><span class="side-menu__label">Latest Order</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="#"> Latest Order List</a></li>
                </ul>
            </li>

            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.htm#"><i
                            class="side-menu__icon fa fa-gavel"></i><span class="side-menu__label">Terms and Condition</span><i
                            class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{url('buyer/terms')}}"> Terms and condition</a></li>
                </ul>
            </li>


         --}}

           
            <li class="slide">
                <a class="side-menu__item" href="{{url('/resellers/home')}}"><i class="side-menu__icon fa fa-user"></i><span
                            class="side-menu__label">Profile</span></a>
            </li>
           
            
            
        </ul>
    </div>
</aside>
<!-- /main-sidebar -->