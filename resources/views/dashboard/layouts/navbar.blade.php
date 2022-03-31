<!-- Main Header-->
<header class="main-header header-shaddow">
    <div class="container-fluid">
        <!-- Main box -->
        <div class="main-box">
            <!--Nav Outer -->
            <div class="nav-outer">
                <div class="logo-box">
                    <div class="logo"><a href="/"><img src="{{ asset('images/logo-didamelid-2.png') }}" alt=""
                                title=""></a></div>
                </div>

            </div>

            <div class="outer-box">

                <!-- Dashboard Option -->
                <div class="dropdown dashboard-option">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">
                        <span class="name">My Account</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="{{ Request::is('dashboard') ? 'active' : false }}"><a href="/dashboard"> <i
                                    class="la la-home"></i> Dashboard</a></li>
                        <li class=" {{ Request::is('dashboard/job*') ? 'active' : false }}"><a
                                href="{{ route('job.index') }}"><i class="la la-briefcase"></i> Manage Jobs </a></li>
                        <li class="{{ Request::is('dashboard/category*') ? 'active' : false }}"><a href=" {{
                            route('category.index') }}"><i class="la la-briefcase"></i> Manage Category </a></li>
                        <li
                            class="{{ Request::is('dashboard/company/*') ? 'active' : false }} {{ Request::is('dashboard/company') ? 'active' : false }} ">
                            <a href="{{ route('company.index') }}"><i class="la la-briefcase"></i> Manage Company </a>
                        </li>

                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="la la-sign-out"></i>Logout</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Header -->
    <div class="mobile-header">
        <div class="logo"><a href="index.html"><img src="images/logo.svg" alt="" title=""></a></div>

        <!--Nav Box-->
        <div class="nav-outer clearfix">

            <div class="outer-box">
                <!-- Login/Register -->
                <div class="login-box">
                    <a href="login-popup.html" class="call-modal"><span class="icon-user"></span></a>
                </div>

                <button id="toggle-user-sidebar"><img src="images/resource/company-6.png" alt="avatar"
                        class="thumb"></button>
                <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span
                        class="flaticon-menu-1"></span></a>
            </div>
        </div>

    </div>

    <!-- Mobile Nav -->
    <div id="nav-mobile"></div>
</header>
<!--End Main Header -->