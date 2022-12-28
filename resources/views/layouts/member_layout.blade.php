<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
          content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>ZEA - Member</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{asset('dashboard/vendors/core/core.css')}}">
    <!-- endinject -->

@stack('head')

<!-- inject:css -->
    <link rel="stylesheet" href="{{asset('dashboard/fonts/feather-font/css/iconfont.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('dashboard/css/demo3/style.css')}}">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="{{asset('dashboard/images/favicon.png')}}"/>

    @livewireStyles
</head>
<body>
<div class="main-wrapper">

    <!-- partial:partials/_navbar.html -->
    <div class="horizontal-menu">
        <nav class="navbar top-navbar">
            <div class="container">
                <div class="navbar-content">
                    <a href="#" class="navbar-brand">
                        ZEA <span>Dashboard</span>
                    </a>
                    <form class="search-form">
                        <div class="input-group">
                            <div class="input-group-text">
                                <i data-feather="search"></i>
                            </div>
                            <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        @include('layouts.notifications')
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                            data-toggle="horizontal-menu-toggle">
                        <i data-feather="menu"></i>
                    </button>
                </div>
            </div>
        </nav>
        @role('Admin')
        <nav class="bottom-navbar">
            <div class="container">
                <ul class="nav page-navigation">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/members')}}">
                            <span class="menu-title">Members</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/admin/member_categories')}}">
                            <span class="menu-title">Member Category</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">

                            <span class="menu-title">Payments</span>
                            <i class="link-arrow"></i>
                        </a>
                        <div class="submenu">
                            <ul class="submenu-item">
                                <li class="nav-item"><a class="nav-link"
                                                        href="{{url('/admin/member_category_fees')}}">Fees</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="">Payment methods</a></li>
                                <li class="nav-item"><a class="nav-link" href="">Payment status</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="menu-title">Reports</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/admin/messages')}}">
                            <span class="menu-title">Messages</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">

                            <span class="menu-title">User Management</span>
                            <i class="link-arrow"></i>
                        </a>
                        <div class="submenu">
                            <ul class="submenu-item">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/admin/users')}}">Users</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/admin/roles')}}">Roles</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/admin/permissions')}}">Permissions</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank"
                           class="nav-link">
                            <i class="link-icon" data-feather="hash"></i>
                            <span class="menu-title">Documentation</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        @endrole
    </div>
    <!-- partial -->

    <div class="page-wrapper">

        <div class="page-content">
            @if($errors->any())
                @include('errors')
            @endif

            @if (session('message'))
                <div class="alert alert-primary dark alert-dismissible fade show" role="alert">
                    <strong>Message
                        ! </strong> {{session('message')}}
                    <button class="btn-close" type="button" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                </div>
            @endif
            <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                @include('layouts.member_basic')
                <div class="d-flex align-items-center flex-wrap text-nowrap">
                    <a href="{{url('/members/'.$member->id)}}"
                       class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
                        <i class="btn-icon-prepend" data-feather="home"></i>
                        Dashboard Home
                    </a>
                </div>
            </div>

            <div class="row profile-body">
                <!-- left wrapper start -->
            @include('layouts.member_side_bar')
            <!-- left wrapper end -->
                <!-- middle wrapper start -->

                @yield('content')
            </div>


        </div>

        <!-- partial:partials/_footer.html -->
        <footer class="footer border-top">
            <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between py-3 small">
                <p class="text-muted mb-1 mb-md-0">Copyright © {{date('Y')}} <a href="#" target="_blank">ZEA</a>.</p>
                <p class="text-muted">CodeKit<i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
            </div>
        </footer>
        <!-- partial -->

    </div>
</div>

<!-- core:js -->
<script src="{{asset('dashboard/vendors/core/core.js')}}"></script>
<!-- endinject -->


@stack('scripts')

<!-- inject:js -->
<script src="{{asset('dashboard/vendors/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('dashboard/js/template.js')}}"></script>
<!-- endinject -->

<!-- Custom js for this page -->
<script src="{{asset('dashboard/js/dashboard-light.js')}}"></script>

<!-- End custom js for this page -->
@livewireScripts
</body>
</html>

