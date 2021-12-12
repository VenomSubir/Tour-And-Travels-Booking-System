<header class="section page-header">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-outer">
                <div class="rd-navbar-aside">
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand">
                            <!--Brand--><a class="brand" href="index.html"><img src="{{ asset('assets/frontend/images/image/Logo.jpg') }}" alt="" width="225" height="18"/></a>
                        </div>
                    </div>
                    <div class="rd-navbar-aside-right rd-navbar-collapse">
                        <ul class="rd-navbar-corporate-contacts">
                            <li>
                                <div class="unit unit-spacing-xs">
                                    <div class="unit-left"><span class="icon fa fa-clock-o"></span></div>
                                    <div class="unit-body">
                                        <p>09:00<span>am</span> — 05:00<span>pm</span></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="unit unit-spacing-xs">
                                    <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                                    <div class="unit-body"><a class="link-phone" href="tel:#">+1 323-913-4688</a></div>
                                </div>
                            </li>
                        </ul><a class="button button-md button-default-outline-2 button-ujarak" href="{{ url('/tour_package') }}">Get a Tour</a>
                    </div>
                </div>
            </div>
            <div class="rd-navbar-main-outer">
                <div class="rd-navbar-main">
                    <div class="rd-navbar-nav-wrap">
                        <ul class="list-inline list-inline-md rd-navbar-corporate-list-social">
                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                        </ul>
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                            <li class="rd-nav-item active"><a class="rd-nav-link" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('/about') }}">About</a>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('/tour_package') }}">Tour Packages</a>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('/contact') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
