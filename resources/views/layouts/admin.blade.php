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

    <title>ZEA - Admin</title>

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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="bell"></i>
                                <div class="indicator">
                                    <div class="circle"></div>
                                </div>
                            </a>
                            <div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
                                <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                                    <p>6 New Notifications</p>
                                    <a href="javascript:;" class="text-muted">Clear all</a>
                                </div>
                                <div class="p-1">
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div
                                            class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                            <i class="icon-sm text-white" data-feather="gift"></i>
                                        </div>
                                        <div class="flex-grow-1 me-2">
                                            <p>New Order Recieved</p>
                                            <p class="tx-12 text-muted">30 min ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div
                                            class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                            <i class="icon-sm text-white" data-feather="alert-circle"></i>
                                        </div>
                                        <div class="flex-grow-1 me-2">
                                            <p>Server Limit Reached!</p>
                                            <p class="tx-12 text-muted">1 hrs ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div
                                            class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                            <img class="wd-30 ht-30 rounded-circle"
                                                 src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="flex-grow-1 me-2">
                                            <p>New customer registered</p>
                                            <p class="tx-12 text-muted">2 sec ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div
                                            class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                            <i class="icon-sm text-white" data-feather="layers"></i>
                                        </div>
                                        <div class="flex-grow-1 me-2">
                                            <p>Apps are ready for update</p>
                                            <p class="tx-12 text-muted">5 hrs ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div
                                            class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                            <i class="icon-sm text-white" data-feather="download"></i>
                                        </div>
                                        <div class="flex-grow-1 me-2">
                                            <p>Download completed</p>
                                            <p class="tx-12 text-muted">6 hrs ago</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                                    <a href="javascript:;">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30"
                                     alt="profile">
                            </a>
                            <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                                <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                                    <div class="mb-3">
                                        <img class="wd-80 ht-80 rounded-circle" src="https://via.placeholder.com/80x80"
                                             alt="">
                                    </div>
                                    <div class="text-center">
                                        <p class="tx-16 fw-bolder">@if(Auth::check()){{ Auth::user()->name}}@endif</p>
                                        <p class="tx-12 text-muted">@if(Auth::check()){{ Auth::user()->email}}@endif</p>
                                    </div>
                                </div>
                                <ul class="list-unstyled p-1">
                                    <li class="dropdown-item py-2">
                                        <a href="pages/general/profile.html" class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="user"></i>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item py-2">
                                        <a href="javascript:;" class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="edit"></i>
                                            <span>Edit Profile</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item py-2">
                                        <a href="javascript:;" class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="repeat"></i>
                                            <span>Switch User</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item py-2">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="{{route('logout')}}"
                                               onclick="event.preventDefault();
                                                this.closest('form').submit();" class="text-body ms-0">
                                                <i class="me-2 icon-md" data-feather="log-out"></i>
                                                <span>Log Out</span>

                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
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
                                    <li class="nav-item"><a class="nav-link" href="{{url('/admin/rate')}}">Rates</a></li>
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

    @yield('content')
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

</body>
</html>
