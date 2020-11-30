<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="{{asset('public/admin_assets/images/favicon_1.ico')}}">

    <title>Scientific Diamond Company Dashboard</title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{asset('public/admin_assets/plugins/morris/morris.css')}}">
    <link href=" {{asset('public/admin_assets/plugins/bootstrap-sweetalert/sweet-alert.css')}}" rel="stylesheet"
          type="text/css">
    <link href="{{asset('public/admin_assets/plugins/summernote/summernote.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/admin_assets/plugins/custombox/css/custombox.css')}}" rel="stylesheet">

    <link href="{{asset('public/admin_assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('public/admin_assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('public/admin_assets/css/style.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('public/admin_assets/plugins/bootstrap-table/css/bootstrap-table.min.css')}}"
          rel="stylesheet" type="text/css"/>
    <script src="{{asset('public/admin_assets/js/modernizr.min.js')}}"></script>
    <style>
        .modal-footer,.modal-header{
            border: none;
        }
        th,td{
            text-align: center;
        }

        .btn{
            border-radius: 0px !important;
            font-size:18px;
        }
    </style>
    @yield('styles')

</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <div class="text-center">
                <a href="" class="logo"><i class="icon-magnet icon-c-logo"></i><span>sdc<i
                                class=""></i>ltd</span></a>
                <!-- Image Logo here -->
                <!--<a href="index.html" class="logo">-->
                <!--<i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="42"/> </i>-->
                <!--<span><img src="assets/images/logo_light.png" height="20"/></span>-->
                <!--</a>-->
            </div>
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <nav class="navbar-custom">

            <ul class="list-inline float-right mb-0">
             {{--   <li class="list-inline-item dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown"
                       href="#" role="button"
                       aria-haspopup="false" aria-expanded="false">
                        <i class="dripicons-bell noti-icon"></i>
                        <span class="badge badge-pink noti-icon-badge">4</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5><span class="badge badge-danger float-right">5</span>Notification</h5>
                        </div>

                        <!-- item-->
                        <a href="" class="dropdown-item notify-item">
                            <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                            <p class="notify-details">Robert S. Taylor commented on Admin
                                <small class="text-muted">1 min ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="" class="dropdown-item notify-item">
                            <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                            <p class="notify-details">New user registered.
                                <small class="text-muted">1 min ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="" class="dropdown-item notify-item">
                            <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                            <p class="notify-details">Carlos Crouch liked <b>Admin</b>
                                <small class="text-muted">1 min ago</small>
                            </p>
                        </a>

                        <!-- All-->
                        <a href="" class="dropdown-item notify-item notify-all">
                            View All
                        </a>

                    </div>
                </li>--}}

              {{--   <li class="list-inline-item notification-list">
                    <a class="nav-link waves-light waves-effect" href="#" id="btn-fullscreen">
                        <i class="dripicons-expand noti-icon"></i>
                    </a>
                </li> --}}

          {{--      <li class="list-inline-item notification-list">
                    <a class="nav-link right-bar-toggle waves-light waves-effect" href="#">
                        <i class="dripicons-message noti-icon"></i>
                    </a>
                </li>--}}

                <li class="list-inline-item dropdown notification-list">
                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                       href="#" role="button"
                       aria-haspopup="false" aria-expanded="false">
                        <img src="{{asset('public/admin_assets/images/users/avatar-1.jpg')}}" alt="user"
                             class="rounded-circle">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                        <!-- admin name-->
                        <div class="dropdown-item noti-title">
                            <h5 class="text-overflow">
                                <small> Welcome , {{ Auth::user()->name }} </small>
                            </h5>
                        </div>
                        <!-- logout-->
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">

                            <strong style="text-align: center; padding-left: 20px;">Logout</strong>

                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </li>

            </ul>

            <ul class="list-inline menu-left mb-0">
                <li class="float-left">
                    <button class="button-menu-mobile open-left waves-light waves-effect">
                        <i class="dripicons-menu"></i>
                    </button>
                </li>
             {{--     <li class="hide-phone app-search">
                    <form role="search" class="">
                        <input type="text" placeholder="Search..." class="form-control">
                        <a href=""><i class="fa fa-search"></i></a>
                    </form>
                </li> --}}
            </ul>

        </nav>

    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->

    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">
            <!--- Divider -->
            <div id="sidebar-menu">
                <ul>
                    <li>
                        <a href="{{url('admin/dashboard')}}" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span></a>
                    </li>
                    <li>
                        <a href="{{route('departments.index')}}" class="waves-effect"><i class= "md-dashboard"></i><span>Department</span></a>
                    </li>

                    <li>
                        <a href="{{route('sliders.index')}}" class="waves-effect"><i class="ti-map-alt"></i><span>Sliders</span></a>
                    </li>

                    <li class="has_sub">
                        <a href="#" class="waves-effect"><i class=" md-shopping-cart"></i> <span>Products</span> <span
                                    class="menu-arrow"></span> </a>
                        <ul class="list-styled">
                            <li><a href="{{route('products.index')}}">Products</a></li>
                            <li><a href="{{route('productsimages.index')}}">Products Gallery</a></li>
                        </ul>
                    </li>
                    <li class="has_sub">
                        <a href="#" class="waves-effect"><i class=" md-play-shopping-bag"></i> <span>Services</span> <span
                                    class="menu-arrow"></span> </a>
                        <ul class="list-styled">
                            <li><a href="{{route('services.index')}}">Services</a></li>
                            <li><a href="{{route('servicegallery.index')}}">Services Gallery</a></li>

                        </ul>
                    </li>
                    <li class="has_sub">
                        <a href="#" class="waves-effect"><i class="ti-view-list-alt"></i><span>Jobs</span> <span
                                    class="menu-arrow"></span></a>
                        <ul class="list-styled">

                            <li><a href="{{route('jobs.index')}}">Jobs</a></li>
                            <li><a href="{{route('jobrequests.index')}}">Job Requests </a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="{{route('news.index')}}" class="waves-effect"><i class=" md-format-list-numbered"></i><span> News </span></a>
                    </li>
                    <li>
                        <a href="{{route('customers.index')}}" class="waves-effect"><i class=" md-person"></i><span>Our Customers </span></a>
                    </li>
                    <li>
                        <a href="{{route('partners.index')}}" class="waves-effect"><i class=" md-people"></i><span>Our Partners </span></a>
                    </li>
                    <li class="has_sub">
                        <a href="#" class="waves-effect"><i class="ti-layers"></i> <span>Static Pages</span> <span
                                    class="menu-arrow"></span> </a>
                        <ul class="#">
                            <li><a href="{{route('contacts.index')}}">Contact Us</a></li>
                            <li><a href="{{route('settings.index')}}">Settings</a></li>

                        </ul>
                    </li>

                </ul>

                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- Left Sidebar End -->


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <!-- container -->
            @yield('content')
        </div> <!-- content -->

        <footer class="footer text-right">
            &copy; 2018. All rights reserved for GooganSolutions.
        </footer>

    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


    <!-- Right Sidebar -->
{{--
    <div class="side-bar right-bar nicescroll">
        <h4 class="text-center">Chat</h4>
        <div class="contact-list nicescroll">
            <ul class="list-group contacts-list">
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="{{asset('public/admin_assets/images/users/avatar-1.jpg')}}" alt="">
                        </div>
                        <span class="name">Chadengle</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="{{asset('public/admin_assets/images/users/avatar-2.jpg')}}" alt="">
                        </div>
                        <span class="name">Tomaslau</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="{{asset('public/admin_assets/images/users/avatar-3.jpg')}}" alt="">
                        </div>
                        <span class="name">Stillnotdavid</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="{{asset('public/admin_assets/images/users/avatar-4.jpg')}}" alt="">
                        </div>
                        <span class="name">Kurafire</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="{{asset('public/admin_assets/images/users/avatar-5.jpg')}}" alt="">
                        </div>
                        <span class="name">Shahedk</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="{{asset('public/admin_assets/images/users/avatar-6.jpg')}}" alt="">
                        </div>
                        <span class="name">Adhamdannaway</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="{{asset('public/admin_assets/images/users/avatar-7.jpg')}}" alt="">
                        </div>
                        <span class="name">Ok</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="{{asset('public/admin_assets/images/users/avatar-8.jpg')}}" alt="">
                        </div>
                        <span class="name">Arashasghari</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="{{asset('public/admin_assets/images/users/avatar-9.jpg')}}" alt="">
                        </div>
                        <span class="name">Joshaustin</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="{{asset('public/admin_assets/images/users/avatar-10.jpg')}}" alt="">
                        </div>
                        <span class="name">Sortino</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
            </ul>
        </div>
    </div>
--}}
    <!-- /Right-bar -->

</div>
<!-- END wrapper -->


<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{asset('public/admin_assets/js/jquery.min.js')}}"></script>
<script src="{{asset('public/admin_assets/js/popper.min.js')}}"></script><!-- Popper for Bootstrap -->
<script src="{{asset('public/admin_assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/admin_assets/js/detect.js')}}"></script>
<script src="{{asset('public/admin_assets/js/fastclick.js')}}"></script>
<script src="{{asset('public/admin_assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('public/admin_assets/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('public/admin_assets/js/waves.js')}}"></script>
<script src="{{asset('public/admin_assets/js/wow.min.js')}}"></script>
<script src="{{asset('public/admin_assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('public/admin_assets/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('public/admin_assets/plugins/bootstrap-table/js/bootstrap-table.js')}}"></script>
<script src="{{asset('public/admin_assets/pages/jquery.bs-table.js')}}"></script>
<script src="{{asset('public/admin_assets/plugins/moment/moment.js')}}"></script>
<script src="{{asset('public/admin_assets/plugins/peity/jquery.peity.min.js')}}"></script>

<!-- jQuery  -->
<script src="{{asset('public/admin_assets/plugins/dropzone/dropzone.js')}}"></script>
<script src="{{asset('public/admin_assets/plugins/tinymce/tinymce.min.js')}}"></script>

<script src="{{asset('public/admin_assets/plugins/summernote/summernote.min.js')}}"></script>
<script src="{{asset('public/admin_assets/plugins/custombox/js/custombox.min.js')}}"></script>
<script src="{{asset('public/admin_assets/plugins/custombox/js/legacy.min.js')}}"></script>
<script src="{{asset('public/admin_assets/plugins/waypoints/lib/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('public/admin_assets/plugins/counterup/jquery.counterup.min.js')}}"></script>

<script src="{{asset('public/admin_assets/plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('public/admin_assets/plugins/raphael/raphael-min.js')}}"></script>

<script src="{{asset('public/admin_assets/plugins/jquery-knob/jquery.knob.js')}}"></script>

<script src="{{asset('public/admin_assets/pages/jquery.dashboard.js')}}"></script>

<script src="{{asset('public/admin_assets/js/jquery.core.js')}}"></script>
<script src="{{asset('public/admin_assets/js/jquery.app.js')}}"></script>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });

        $(".knob").knob();

    });
    @yield('scripts')
</script>

</body>
</html>