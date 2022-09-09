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
    <link href="{{asset('images/favicon.png')}}" rel="shortcut icon" type="image/png">
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
                                +440-98-5298
                            </li>
                            <li class="contact-email"><i class="fa fa-envelope font-icon sm-display-block"></i>
                                info@example.com
                            </li>
                            <li class="contact-address"><i class="fa fa-map font-icon sm-display-block"></i> 121 King
                                Street, Melbourne
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-auto ms-xl-auto header-top-right align-self-center text-center text-xl-end">
                        <div class="element pt-0 pb-0">
                            <ul class="styled-icons icon-dark icon-theme-colored1 icon-circled clearfix">
                                <li><a class="social-link" href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a class="social-link" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="social-link" href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="element pt-0 pt-lg-10 pb-0">
                            <a href="ajax-load/form-appointment.html"
                               class="btn btn-theme-colored2 btn-sm ajaxload-popup">Register as Member</a>
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
                                <a class="menuzord-brand site-brand" href="index-mp-layout1.html">
                                    <img class="logo-default logo-1x" src="images/logo-wide.png" alt="Logo">
                                    <img class="logo-default logo-2x retina" src="images/logo-wide@2x.png" alt="Logo">
                                </a>
                            </div>
                            <div class="col-sm-auto ms-auto pr-0 align-self-center">
                                <nav id="top-primary-nav" class="menuzord theme-color1" data-effect="slide"
                                     data-animation="none" data-align="right">
                                    <ul id="main-nav" class="menuzord-menu">
                                        <li class="active menu-item">
                                            <a href="#">Home</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#">About Us</a>
                                        </li>
                                        <li class="menu-item"><a href="#">About Us</a>
                                            <ul class="dropdown">
                                                <li><a href="{{url('/leadership')}}">Leadership</a></li>
                                                <li><a href="{{url('/our-history')}}">Our History</a></li>
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

<!-- Footer -->
    <footer id="footer" class="footer layer-overlay overlay-dark-9" data-tm-bg-img="images/bg/bg2.jpg">
        <div class="footer-widget-area">
            <div class="container pt-90 pb-60">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="tm-widget-contact-info contact-info-style1 contact-icon-theme-colored1">
                            <div class="thumb">
                                <img alt="Logo" src="images/logo-wide-white.png">
                            </div>
                            <div class="description">Address come here
                            </div>
                        </div>
                        <ul class="styled-icons icon-dark icon-theme-colored1 icon-rounded clearfix">
                            <li><a class="social-link" href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a class="social-link" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="social-link" href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a class="social-link" href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="widget">
                            <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Latest
                                News</h4>
                            <div class="latest-posts">
                                <article class="post clearfix pb-0 mb-20">
                                    <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0"><a href="#">Sustainable Construction</a></h5>
                                        <span class="post-date">
                      <time class="entry-date" datetime="2020-05-15T06:10:26+00:00">April 15, 2020</time>
                    </span>
                                    </div>
                                </article>
                                <article class="post clearfix pb-0 mb-20">
                                    <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0"><a href="#">Industrial Coatings</a></h5>
                                        <span class="post-date">
                      <time class="entry-date" datetime="2020-05-15T06:10:26+00:00">April 15, 2020</time>
                    </span>
                                    </div>
                                </article>
                                <article class="post clearfix pb-0 mb-20">
                                    <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0"><a href="#">Storefront Installations</a></h5>
                                        <span class="post-date">
                      <time class="entry-date" datetime="2020-05-15T06:10:26+00:00">April 15, 2020</time>
                    </span>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="widget widget_nav_menu">
                            <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Services</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Attorneys</a></li>
                                <li><a href="#">Practice Arears</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="widget">
                            <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Opening
                                Hours</h4>
                            <div class="opening-hours border-dark">
                                <ul>
                                    <li class="clearfix"><span> Friday - Saturday :  </span>
                                        <div class="value float-end flip"> 10.00 am - 6.00 pm</div>
                                    </li>
                                    <li class="clearfix"><span> Monday - Thusday :</span>
                                        <div class="value float-end flip"> 8.00 am - 9.00 pm</div>
                                    </li>
                                    <li class="clearfix"><span> Sunday : </span>
                                        <div class="value float-end flip"> Closed</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom" data-tm-bg-color="#2A2A2A">
                <div class="container">
                    <div class="row pt-20 pb-20">
                        <div class="col-sm-6">
                            <div class="footer-paragraph">
                                © 2020 ThemeMascot. All Rights Reserved.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="footer-paragraph text-right">
                                Site Template
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
<script src="{{asset('js/custom.js')}}"></script>

</body>
</html>
