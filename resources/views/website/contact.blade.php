@extends('layouts.site')
@push('head')
    <link rel="stylesheet" href="{{asset('dashboard/datatables.net-bs5/dataTables.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/vendors/prismjs/themes/prism.css')}}">
@endpush

@section('content')
    <div class="main-content-area">
        <!-- Section: page title -->
        <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center"
                 data-tm-bg-img="images/bg/bg1.jpg">
            <div class="container pt-50 pb-50">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title">Contact</h2>
                            <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                                <div class="breadcrumbs">
                                    <span><a href="#" rel="home">Home</a></span>
                                    <span><i class="fa fa-angle-right"></i></span>
                                    <span><a href="#">Pages</a></span>
                                    <span><i class="fa fa-angle-right"></i></span>
                                    <span class="active">Page Title</span>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Have Any Question -->
        <section class="divider">
            <div class="container pt-60 pb-60">
                <div class="section-title mb-60">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="esc-heading small-border text-center">
                                <h3>Have any Questions?</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div
                                class="icon-box text-center iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate mb-50">
                                <div class="icon-box-wrapper">
                                    <div class="icon-wrapper mb-30">
                                        <a class="icon icon-type-font-icon icon-dark icon-circled"> <i
                                                class="flaticon-contact-044-call-1"></i> </a>
                                    </div>
                                    <div class="icon-text">
                                        <h5 class="icon-box-title mt-0">Phone</h5>
                                        <div class="content"><a href="tel:+123.456.7890">+2263 779 970 322</a></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div
                                class="icon-box text-center iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate mb-50">
                                <div class="icon-box-wrapper">
                                    <div class="icon-wrapper mb-30">
                                        <a class="icon icon-type-font-icon icon-dark icon-circled"> <i
                                                class="flaticon-contact-043-email-1"></i> </a>
                                    </div>
                                    <div class="icon-text">
                                        <h5 class="icon-box-title mt-0">Email</h5>
                                        <div class="content"><a href="mailto:needhelp@yourdomain.com">admin@zimevalassoc.org</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Divider: Contact -->
        <section class="divider bg-white-f7">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h2 class="mt-0 mb-0">Interested in discussing?</h2>
                        <!--<p class="font-size-20">Active & Ready to use Contact Form!</p>-->
                        <!-- Contact Form -->
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
                        <form action="{{route('send_email')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Name <small>*</small></label>
                                        <input name="name" class="form-control" type="text" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Email <small>*</small></label>
                                        <input name="email" class="form-control required email" type="email"
                                               placeholder="Enter Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Subject <small>*</small></label>
                                        <input name="subject" class="form-control required" type="text"
                                               placeholder="Enter Subject">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Phone <small>*</small></label>
                                        <input name="phone" class="form-control" type="text" placeholder="Enter phone">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label>Message</label>
                                <textarea name="message" class="form-control required" rows="5"
                                          placeholder="Enter Message"></textarea>
                            </div>
                            <div class="mb-3">
                                <input type="submit"
                                       class="btn btn-flat btn-theme-colored1 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px"
                                       value="Send your message"/>

                                <button type="reset"
                                        class="btn btn-flat btn-theme-colored3 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">
                                    Reset
                                </button>
                            </div>
                        </form>

                    </div>
                    <div class="col-lg-5">
                        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.843149788316!2d144.9537131159042!3d-37.81714274201087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sbn!2sbd!4v1583760510840!5m2!1sbn!2sbd" data-tm-width="100%" height="600" frameborder="0" allowfullscreen=""></iframe>-->
                    </div>
                </div>
            </div>
        </section>
    </div>

@stop

@push('scripts')
    <script src="{{asset('dashboard/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{asset('dashboard/vendors/datatables.net-bs5/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('dashboard/js/data-table.js')}}"></script>


    <script src="{{asset('dashboard/vendors/prismjs/prism.js')}}"></script>
    <script src="{{asset('dashboard/vendors/clipboard/clipboard.min.js')}}"></script>

@endpush
