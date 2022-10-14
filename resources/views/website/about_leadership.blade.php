@extends('layouts.site')
@push('head')
    <link rel="stylesheet" href="{{asset('dashboard/datatables.net-bs5/dataTables.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/vendors/prismjs/themes/prism.css')}}">
@endpush

@section('content')
<div class="main-content-area">
    <!-- Section: page title -->
    <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Services</h2>
              <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                <div class="breadcrumbs">
                  <span><a href="#" rel="home">Home</a></span>
                  <span><i class="fa fa-angle-right"></i></span>
                  <span><a href="#">About</a></span>
                  <span><i class="fa fa-angle-right"></i></span>
                  <span class="active">Our history</span>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Services -->
    <section class="bg-white-f7">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-4">
              <div class="tm-sc-services services-style-current-theme5">
                <div class="tm-service">
                  <div class="thumb">
                    <img src="images/services/ws1.jpg" alt="image">
                    <a href="#" class="icon bg-theme-colored1"><i class="flaticon-medical-ambulance14"></i></a>
                  </div>
                  <div class="content">
                    <h4 class="mt-0 mb-15">Emergency Care</h4>
                    <p>Default text for Box Content. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa temporibus aliquid natus eius blanditiis sed.</p>
                    <a href="#" target="_self" class="btn btn-theme-colored1 btn-sm btn-round mb-20"> Read More </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
              <div class="tm-sc-services services-style-current-theme5">
                <div class="tm-service">
                  <div class="thumb">
                    <img src="images/services/ws2.jpg" alt="image">
                    <a href="#" class="icon bg-theme-colored1"><i class="flaticon-medical-stethoscope10"></i></a>
                  </div>
                  <div class="content">
                    <h4 class="mt-0 mb-15">Outdoor Checkup</h4>
                    <p>Default text for Box Content. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa temporibus aliquid natus eius blanditiis sed.</p>
                    <a href="#" target="_self" class="btn btn-theme-colored1 btn-sm btn-round mb-20"> Read More </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
              <div class="tm-sc-services services-style-current-theme5">
                <div class="tm-service">
                  <div class="thumb">
                    <img src="images/services/ws3.jpg" alt="image">
                    <a href="#" class="icon bg-theme-colored1"><i class="flaticon-medical-hospital35"></i></a>
                  </div>
                  <div class="content">
                    <h4 class="mt-0 mb-15">Blood Test</h4>
                    <p>Default text for Box Content. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa temporibus aliquid natus eius blanditiis sed.</p>
                    <a href="#" target="_self" class="btn btn-theme-colored1 btn-sm btn-round mb-20"> Read More </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
              <div class="tm-sc-services services-style-current-theme5">
                <div class="tm-service">
                  <div class="thumb">
                    <img src="images/services/ws4.jpg" alt="image">
                    <a href="#" class="icon bg-theme-colored1"><i class="flaticon-medical-illness"></i></a>
                  </div>
                  <div class="content">
                    <h4 class="mt-0 mb-15">Operation Theatre</h4>
                    <p>Default text for Box Content. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa temporibus aliquid natus eius blanditiis sed.</p>
                    <a href="#" target="_self" class="btn btn-theme-colored1 btn-sm btn-round mb-20"> Read More </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
              <div class="tm-sc-services services-style-current-theme5">
                <div class="tm-service">
                  <div class="thumb">
                    <img src="images/services/ws5.jpg" alt="image">
                    <a href="#" class="icon bg-theme-colored1"><i class="flaticon-medical-tablets9"></i></a>
                  </div>
                  <div class="content">
                    <h4 class="mt-0 mb-15">Cancer Service</h4>
                    <p>Default text for Box Content. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa temporibus aliquid natus eius blanditiis sed.</p>
                    <a href="#" target="_self" class="btn btn-theme-colored1 btn-sm btn-round mb-20"> Read More </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
              <div class="tm-sc-services services-style-current-theme5">
                <div class="tm-service">
                  <div class="thumb">
                    <img src="images/services/ws6.jpg" alt="image">
                    <a href="#" class="icon bg-theme-colored1"><i class="flaticon-medical-medical51"></i></a>
                  </div>
                  <div class="content">
                    <h4 class="mt-0 mb-15">ICU Service</h4>
                    <p>Default text for Box Content. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa temporibus aliquid natus eius blanditiis sed.</p>
                    <a href="#" target="_self" class="btn btn-theme-colored1 btn-sm btn-round mb-20"> Read More </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Divider -->
  </div>
@stop

@push('scripts')
    <script src="{{asset('dashboard/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{asset('dashboard/vendors/datatables.net-bs5/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('dashboard/js/data-table.js')}}"></script>


    <script src="{{asset('dashboard/vendors/prismjs/prism.js')}}"></script>
    <script src="{{asset('dashboard/vendors/clipboard/clipboard.min.js')}}"></script>

@endpush