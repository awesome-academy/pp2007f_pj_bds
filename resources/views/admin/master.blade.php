<!DOCTYPE html>
<html>


<!-- Mirrored from themenate.com/applicator/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jul 2018 11:17:23 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="/assets/image/logo/apple-touch-icon.html">
    <link rel="shortcut icon" href="/assets/image/logo/favicon.png">

    <!-- core dependcies css -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="/assets/vendor/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="/assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css" />

    <!-- page css -->

    <!-- core css -->
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/css/themify-icons.css" rel="stylesheet">
    <link href="/assets/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="/assets/css/animate.min.css" rel="stylesheet">
    <link href="/assets/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="app header-default side-nav-dark">
        <div class="layout">
            <!-- Header START -->
            <div class="header navbar">
                <div class="header-container">
                    <div class="nav-logo">
                        <a href="index.html">
                            <div class="logo logo-dark" style="background-image: url('/assets/image/logo/logo.png')"></div>
                            <div class="logo logo-white" style="background-image: url('/assets/image/logo/logo-white.png')"></div>
                        </a>
                    </div>
                    <ul class="nav-left">
                        <li>
                            <a class="sidenav-fold-toggler" href="javascript:void(0);">
                                <i class="mdi mdi-menu"></i>
                            </a>
                            <a class="sidenav-expand-toggler" href="javascript:void(0);">
                                <i class="mdi mdi-menu"></i>
                            </a>
                        </li>
                        <li class="search-box">
                            <a class="search-toggle" href="javascript:void(0);">
                                <i class="search-icon mdi mdi-magnify"></i>
                                <i class="search-icon-close mdi mdi-close-circle-outline"></i>
                            </a>
                        </li>
                        <li class="search-input">
                            <input class="form-control" type="text" placeholder="Type to search...">
                            <div class="search-predict">
                                <div class="search-wrapper scrollable">
                                    <div class="p-v-10">
                                        <span class="display-block m-v-5 p-h-20 text-gray">
                                            <i class="ti-file p-r-5"></i>
                                            <span>Files</span>
                                        </span>
                                        <ul class="list-media">
                                            <li class="list-item">
                                                <a href="javascript:void(0);" class="media-hover p-h-20">
                                                    <div class="media-img">
                                                        <div class="icon-avatar bg-success">
                                                            <i class="mdi mdi-file-outline"></i>
                                                        </div>
                                                    </div>
                                                    <div class="info">
                                                        <span class="title p-t-10">Document.xls</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-item">
                                                <a href="javascript:void(0);" class="media-hover p-h-20">
                                                    <div class="media-img">
                                                        <div class="icon-avatar bg-info">
                                                            <i class="mdi mdi-file-outline"></i>
                                                        </div>
                                                    </div>
                                                    <div class="info">
                                                        <span class="title p-t-10">Mockup.doc</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-item">
                                                <a href="javascript:void(0);" class="media-hover p-h-20">
                                                    <div class="media-img">
                                                        <div class="icon-avatar bg-danger">
                                                            <i class="mdi mdi-file-outline"></i>
                                                        </div>
                                                    </div>
                                                    <div class="info">
                                                        <span class="title p-t-10">Document.pdf</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="m-h-20 border top"></div>
                                    <div class="p-v-10">
                                        <span class="display-block m-v-5 p-h-20 text-gray">
                                            <i class="ti-user p-r-5"></i>
                                            <span>Members</span>
                                        </span>
                                        <ul class="list-media">
                                            <li class="list-item">
                                                <a href="javascript:void(0);" class="conversation-toggler media-hover p-h-20">
                                                    <div class="media-img">
                                                        <img src="/assets/image/avatars/thumb-3.jpg" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title p-t-10">Debra Stewart</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-item">
                                                <a href="javascript:void(0);" class="conversation-toggler media-hover p-h-20">
                                                    <div class="media-img">
                                                        <img src="/assets/image/avatars/thumb-5.jpg" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title p-t-10">Jane Hunt</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="search-footer">
                                    <span>You are Searching for '<b class="text-dark"><span class="serach-text-bind"></span></b>'</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="dropdown dropdown-animated scale-left">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="mdi mdi-apps"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-grid col-3 dropdown-lg">
                                <li>
                                    <a href="#">
                                        <div class="text-center">
                                            <i class="mdi mdi-email-outline font-size-30 icon-gradient-success"></i>
                                            <p class="m-b-0">Email</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="text-center">
                                            <i class="mdi mdi-folder-outline font-size-30 icon-gradient-success"></i>
                                            <p class="m-b-0">Files</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="text-center">
                                            <i class="mdi mdi mdi-gauge font-size-30 icon-gradient-success"></i>
                                            <p class="m-b-0">Dashboard</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="text-center">
                                            <i class="mdi mdi-play-circle-outline font-size-30 icon-gradient-success"></i>
                                            <p class="m-b-0">Video</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="text-center">
                                            <i class="mdi mdi-image-filter font-size-30 icon-gradient-success"></i>
                                            <p class="m-b-0">Images</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="text-center">
                                            <i class="mdi mdi-image-filter-drama font-size-30 icon-gradient-success"></i>
                                            <p class="m-b-0">Cloud</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>    
                        </li>
                        <li class="notifications dropdown dropdown-animated scale-left">
                            <span class="counter">2</span>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="mdi mdi-bell-ring-outline"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-lg p-v-0">
                                <li class="p-v-15 p-h-20 border bottom text-dark">
                                    <h5 class="m-b-0">
                                        <i class="mdi mdi-bell-ring-outline p-r-10"></i>
                                        <span>Notifications</span>
                                    </h5>
                                </li>
                                <li>
                                    <ul class="list-media overflow-y-auto relative scrollable" style="max-height: 300px">
                                        <li class="list-item border bottom">
                                            <a href="javascript:void(0);" class="media-hover p-15">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-primary">
                                                        <i class="ti-settings"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title">
                                                        System shutdown
                                                    </span>
                                                    <span class="sub-title">8 min ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item border bottom">
                                            <a href="javascript:void(0);" class="media-hover p-15">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-success">
                                                        <i class="ti-user"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title">
                                                        New User Registered
                                                    </span>
                                                    <span class="sub-title">12 min ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item border bottom">
                                            <a href="javascript:void(0);" class="media-hover p-15">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-warning">
                                                        <i class="ti-file"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title">
                                                        New Attacthemnet
                                                    </span>
                                                    <span class="sub-title">12 min ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item border bottom">
                                            <a href="javascript:void(0);" class="media-hover p-15">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-info">
                                                        <i class="ti-shopping-cart"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title">
                                                        New Order Received
                                                    </span>
                                                    <span class="sub-title">12 min ago</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="p-v-15 p-h-20 text-center">
                                    <span>
                                        <a href="#" class="text-gray">Check all notifications <i class="ei-right-chevron p-l-5 font-size-10"></i></a>
                                    </span>
                                </li>
                            </ul>
                        </li>
                        <li class="user-profile dropdown dropdown-animated scale-left">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img class="profile-img img-fluid" src="/assets/image/avatars/thumb-13.jpg" alt="">
                            </a>
                            <ul class="dropdown-menu dropdown-md p-v-0">
                                <li>
                                    <ul class="list-media">
                                        <li class="list-item p-15">
                                            <div class="media-img">
                                                <img src="/assets/image/avatars/thumb-13.jpg" alt="">
                                            </div>
                                            <div class="info">
                                                <span class="title text-semibold">Marshall Nichols</span>
                                                <span class="sub-title">UI/UX Desinger</span>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="#">
                                        <i class="ti-settings p-r-10"></i>
                                        <span>Setting</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-user p-r-10"></i>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-email p-r-10"></i>
                                        <span>Inbox</span>
                                        <span class="badge badge-pill badge-success pull-right">2</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-power-off p-r-10"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="m-r-10">
                            <a class="quick-view-toggler" href="javascript:void(0);">
                                <i class="mdi mdi-format-indent-decrease"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Header END -->

            <!-- Side Nav START -->
            <div class="side-nav expand-lg">
                <div class="side-nav-inner">
                    <ul class="side-nav-menu scrollable">
                        <li class="side-nav-header">
                            <span>Navigation</span>
                        </li>
                        <li class="nav-item dropdown open">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-gauge"></i>
                                </span>
                                <span class="title">Dashboard</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="active">
                                    <a href="index.html">Default</a>
                                </li>
                                <li>
                                    <a href="index-analytical.html">Analytical</a>
                                </li>
                                <li>
                                    <a href="index-bank.html">Bank</a>
                                </li>
                                <li>
                                    <a href="index-saas.html">Saas</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-image-filter-drama"></i>
                                </span>
                                <span class="title">Apps</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="email.html">Email</a>
                                </li>
                                <li>
                                    <a href="calendar.html">Calendar</a>
                                </li>
                                <li>
                                    <a href="chat-app.html">Chat App</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                                <li>
                                    <a href="task.html">Task</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
									<i class="mdi mdi-vector-arrange-above"></i>
								</span>
                                <span class="title">UI Elements</span>
                                <span class="arrow">
									<i class="mdi mdi-chevron-right"></i>
								</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="alert.html">Alert</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badge</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="cards.html">Cards</a>
                                </li>
                                <li>
                                    <a href="colors.html">Colors</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                                <li>
                                    <a href="icons.html">Icons</a>
                                </li>
                                <li>
                                    <a href="lists.html">Lists</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-compass-outline"></i>
                                </span>
                                <span class="title">Components</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="accordion.html">Accordion</a>
                                </li>
                                <li>
                                    <a href="carousel.html">Carousel</a>
                                </li>
                                <li>
                                    <a href="dropdown.html">Dropdown</a>
                                </li>
                                <li>
                                    <a href="modals.html">Modals</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="popover.html">Popover</a>
                                </li>
                                <li>
                                    <a href="slider-progress.html">Slider & Progress</a>
                                </li>
                                <li>
                                    <a href="tabs.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="tooltips.html">Tooltips</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-grid-large"></i>
                                </span>
                                <span class="title">Widgets</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="widgets-data.html">Data Widgets</a>
                                </li>
                                <li>
                                    <a href="widgets-media.html">Media Widgets</a>
                                </li>
                                <li>
                                    <a href="widgets-chart.html">Chart Widgets</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-file-outline"></i>
                                </span>
                                <span class="title">Forms</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="form-elements.html">Form Elements</a>
                                </li>
                                <li>
                                    <a href="form-layouts.html">Form Layouts</a>
                                </li>
                                <li>
                                    <a href="form-validation.html">Form Validation</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-tune-vertical"></i>
                                </span>
                                <span class="title">Tables</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="basic-table.html">Basic Table</a>
                                </li>
                                <li>
                                    <a href="data-table.html">Data Table</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-chart-donut"></i>
                                </span>
                                <span class="title">Charts</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="chartist.html">Chartist</a>
                                </li>
                                <li>
                                    <a href="chartjs.html">ChartJs</a>
                                </li>
                                <li>
                                    <a href="sparkline.html">Sparkline</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-map-marker-outline"></i>
                                </span>
                                <span class="title">Map</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="google-map.html">Google Map</a>
                                </li>
                                <li>
                                    <a href="vector-map.html">Vector Map</a>
                                </li>
                            </ul>
                        </li>
                        <li class="side-nav-header">
                            <span>Others</span>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-image-filter-tilt-shift"></i>
                                </span>
                                <span class="title">Extra</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="profile.html">Profile</a>
                                </li>
                                <li>
                                    <a href="invoice.html">Invoice</a>
                                </li>
                                <li>
                                    <a href="faq.html">FAQ</a>
                                </li>
                                <li>
                                    <a href="gallery.html">Gallery</a>
                                </li>
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="login-2.html">Login 2</a>
                                </li>
                                <li>
                                    <a href="sign-up.html">Sign Up</a>
                                </li>
                                <li>
                                    <a href="404.html">404</a>
                                </li>
                                <li>
                                    <a href="500.html">500</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-menu"></i>
                                </span>
                                <span class="title">Multiple Levels</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item dropdown">
                                    <a href="javascript:void(0);">
                                        <span>Level 1.2</span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="javascript:void(0);">
                                        <span>Level 1.1</span>
                                        <span class="arrow">
												<i class="mdi mdi-chevron-right"></i>
											</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);">Level 2</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">

            </div>
            <!-- Page Container END -->

        </div>
    </div>

    <script src="/assets/js/vendor.js"></script>

    <script src="/assets/js/app.min.js"></script>

    <!-- page js -->
    <script src="/assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="/assets/vendor/jquery.sparkline/jquery.sparkline.min.js"></script>
    <script src="/assets/js/dashboard/default.js"></script>

</body>


<!-- Mirrored from themenate.com/applicator/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jul 2018 11:18:15 GMT -->
</html>