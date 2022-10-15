<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="ZEA | Zimbabwe Evaluation Association"/>
    <meta name="keywords" content=""/>
    <meta name="author" content="CodeKit"/>

    <!-- Page Title -->
    <title>ZEA | Zimbabwe Evaluation Association</title>

    <!-- Favicon and Touch Icons -->
    <link href="{{asset('logo.png')}}" rel="shortcut icon" type="image/png">
    <link href="{{asset('images/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="{{asset('images/apple-touch-icon-72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{asset('images/apple-touch-icon-114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{asset('images/apple-touch-icon-144x144.png')}}" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/javascript-plugins-bundle.css')}}" rel="stylesheet"/>

    <!-- CSS | menuzord megamenu skins -->
    <link href="{{asset('js/menuzord/css/menuzord.css')}}" rel="stylesheet"/>

    <!-- CSS | Main style file -->
    <link href="{{asset('css/style-main.css')}}" rel="stylesheet" type="text/css">
    <link id="menuzord-menu-skins" href="{{asset('css/menuzord-skins/menuzord-rounded-boxed.css')}}" rel="stylesheet"/>

    <!-- CSS | Responsive media queries -->
    <link href="{{asset('/css/responsive.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->

    <!-- CSS | Theme Color -->
    <link href="{{asset('css/colors/theme-skin-color-set1.css')}}" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/javascript-plugins-bundle.js')}}"></script>
    <script src="{{asset('js/menuzord/js/menuzord.js')}}"></script>

    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->


@stack('head')
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="tm-container-1340px {{--has-side-panel side-panel-right--}}">
<!-- preloader -->

<div id="wrapper" class="clearfix">
    <!-- Header -->
    <header id="header" class="header header-layout-type-header-2rows">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-auto header-top-left align-self-center text-center text-xl-start">
                        <ul class="element contact-info">
                            <li class="contact-phone"><i class="fa fa-phone font-icon sm-display-block"></i> Tel:
                                +263 779 970 322 | +2263 779 970 322
                            </li>
                            <li class="contact-email"><i class="fa fa-envelope font-icon sm-display-block"></i>
                                admin@http://zimevalassoc.org
                            </li>
                            <li class="contact-address"><i class="fa fa-map font-icon sm-display-block"></i> ZEA Address

                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-auto ms-xl-auto header-top-right align-self-center text-center text-xl-end">
                        <div class="element pt-0 pt-lg-10 pb-0">
                            <a href="{{url('/login')}}"
                               class="btn btn-theme-colored2 btn-sm" target="_blank">Login</a>
                        </div>
                        <div class="element pt-0 pt-lg-10 pb-0">
                            <a href="{{url('/register')}}"
                               class="btn btn-theme-colored2 btn-sm" target="_blank">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav tm-enable-navbar-hide-on-scroll">
            <div class="header-nav-wrapper navbar-scrolltofixed">
                <div class="menuzord-container header-nav-container">
                    <div class="container position-relative">
                        <div class="row header-nav-col-row">
                            <div class="col-sm-auto align-self-center">
                                <a class="menuzord-brand site-brand" href="{{url('/')}}">
                                    <img class="logo-default logo-1x" src="{{asset('logo.png')}}" alt="Logo">
                                    <img class="logo-default logo-2x retina" src="{{asset('logo.png')}}" alt="Logo">
                                </a>
                            </div>
                            <div class="col-sm-auto ms-auto pr-0 align-self-center">
                                <nav id="top-primary-nav" class="menuzord theme-color1" data-effect="slide"
                                     data-animation="none" data-align="right">
                                    <ul id="main-nav" class="menuzord-menu">
                                        <li class="active menu-item">
                                            <a href="#">Home</a>
                                        </li>

                                        <li class="menu-item"><a href="#">About Us</a>
                                            <ul class="dropdown">
                                                <li><a href="{{url('/about_leadership')}}">Leadership</a></li>
                                                <li><a href="{{url('/about_our_history')}}">Our History</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a href="#">Membership</a>
                                            <ul class="dropdown">
                                                <li><a href="{{url('/member-categories')}}">Member Categories</a></li>
                                                <li><a href="{{url('/member-benefits')}}">Member Benefits</a></li>
                                                <li><a href="{{url('/member-directories')}}">Member Directories</a></li>
                                                <li><a href="{{url('/chapters')}}">Chapters</a></li>
                                                <li><a href="{{url('/register')}}">Become a member</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item"><a href="#">Resources</a>
                                            <ul class="dropdown">
                                                <li><a href="{{url('/jobs')}}">Job Posts</a></li>
                                                <li><a href="{{url('/blogs')}}">Blogs</a></li>
                                                <li><a href="{{url('/faqs')}}">FAQs</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item"><a href="#">Events</a>
                                            <ul class="dropdown">
                                                <li><a href="{{url('/#')}}">Events Calendar</a></li>
                                                <li><a href="{{url('/#')}}">Events Near You</a></li>
                                                <li><a href="{{url('/#')}}">Trainings</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item">
                                            <a href="#">Forums</a>
                                        </li>

                                        <li class="menu-item">
                                            <a href="#">Contact us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="row d-block d-xl-none">
                            <div class="col-12">
                                <nav id="top-primary-nav-clone"
                                     class="menuzord d-block d-xl-none default menuzord-color-default menuzord-border-boxed menuzord-responsive"
                                     data-effect="slide" data-animation="none" data-align="right">
                                    <ul id="main-nav-clone"
                                        class="menuzord-menu menuzord-right menuzord-indented scrollable">
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')
    <section class="bg-silver-light">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6 col-lg-offset-6">
                        <form id="mailchimp-subscription-form1" class="newsletter-form mt-40" novalidate="true">
                            <label for="mce-EMAIL"></label>
                            <div class="input-group">
                                <input type="email" id="mce-EMAIL" data-tm-height="45px" class="form-control"
                                       placeholder="Your Email" name="EMAIL" value="" style="height: 45px;">
                                <div class="input-group-append tm-sc-button">
                                    <button type="submit" class="btn btn-dark btn-sm" data-tm-height="45px"
                                            style="height: 45px;">Subscribe
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer id="footer" class="footer layer-overlay overlay-dark-9" data-tm-bg-img="images/bg/bg2.jpg">
        <div class="footer-widget-area">
            <div class="container pt-90 pb-60">

            </div>
            <div class="footer-bottom" data-tm-bg-color="#2A2A2A">
                <div class="container">
                    <div class="row pt-20 pb-20">
                        <div class="col-sm-6">
                            <div class="footer-paragraph">
                                © 2022 ZEA. All Rights Reserved.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="footer-paragraph text-right">
                                Zimbabwe Evaluation Association
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
@stack('scripts')
<script src="{{asset('js/custom.js')}}"></script>

</body>
</html>
