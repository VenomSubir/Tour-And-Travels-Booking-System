@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
@endphp

<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="index.html">
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/frontend/images/image/Logo.jpg') }}" alt="" style="height: 30px">
                        <h3><b>Tour & Travels</b> BD</h3>
                    </div>
                </a>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="{{ ($route == 'dashboard')? 'active':'' }}">
                <a href="{{ url('admin/dashboard') }}">
                    <i data-feather="pie-chart"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview {{ ($prefix == '/banner')? 'active':'' }}">
                <a href="#">
                    <i data-feather="message-circle"></i>
                    <span>Banner</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ ($route == 'all.banner')? 'active':'' }}">
                        <a href="{{ route('all.banner') }}"><i class="ti-more"></i>All Banner</a>
                    </li>

                </ul>
            </li>

            <li class="treeview {{ ($prefix == '/tour_package')? 'active':'' }}">
                <a href="#">
                    <i data-feather="message-circle"></i>
                    <span>Tour Package</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ ($route == 'all.tour_package')? 'active':'' }}">
                        <a href="{{ route('all.tour_package') }}"><i class="ti-more"></i>All Tour Package</a>
                    </li>

                </ul>
            </li>

            <li class="treeview {{ ($prefix == '/booked_packages')? 'active':'' }}">
                <a href="#">
                    <i data-feather="message-circle"></i>
                    <span>Booked Packages</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ ($route == 'all.booked_packages')? 'active':'' }}">
                        <a href="{{ route('all.booked_packages') }}"><i class="ti-more"></i>All Booked Packages</a>
                    </li>

                </ul>
            </li>




            <li class="header nav-small-cap">User Interface</li>

        </ul>
    </section>

    <div class="sidebar-footer">
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
    </div>
</aside>
