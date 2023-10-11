@extends('layouts.site')
@push('head')
    <link rel="stylesheet" href="{{asset('dashboard/datatables.net-bs5/dataTables.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/vendors/prismjs/themes/prism.css')}}">
@endpush

@section('content')
<div class="main-content-area">
    <!-- Section: page title -->
    <!--<section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Membership</h2>
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
    </section>-->

    <!-- Section: Services -->
    <!--<section class="bg-white-f7">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-4">
              <div class="tm-sc-services services-style-current-theme5">
                <div class="tm-service">
                  <div class="thumb">
                    <img style="width: 100%;height: 300px;" src="{{asset('/institution.png')}}" alt="image">
                    <a href="#" class="icon bg-theme-colored1"><i class="flaticon-medical-ambulance14"></i></a>
                  </div>
                  <div class="content">
                    <h4 class="mt-0 mb-15">Institutional Membership</h4>
                    <a href="#" target="_self" class="btn btn-theme-colored1 btn-sm btn-round mb-20"> Read More </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
              <div class="tm-sc-services services-style-current-theme5">
                <div class="tm-service">
                  <div class="thumb">
                    <img style="width: 100%;height: 300px;" src="{{asset('/individual.png')}}" alt="image">
                    <a href="#" class="icon bg-theme-colored1"><i class="flaticon-medical-stethoscope10"></i></a>
                  </div>
                  <div class="content">
                    <h4 class="mt-0 mb-15">Individual Membership</h4>
                    <a href="#" target="_self" class="btn btn-theme-colored1 btn-sm btn-round mb-20"> Read More </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
              <div class="tm-sc-services services-style-current-theme5">
                <div class="tm-service">
                  <div class="thumb">
                    <img style="width: 100%;height: 300px;" src="{{asset('/student.png')}}" alt="image">
                    <a href="#" class="icon bg-theme-colored1"><i class="flaticon-medical-hospital35"></i></a>
                  </div>
                  <div class="content">
                    <h4 class="mt-0 mb-15">Student Membership</h4>
                    <a href="#" target="_self" class="btn btn-theme-colored1 btn-sm btn-round mb-20"> Read More </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->
    
     <section class="bg-silver-light">
            <div class="container">
                <div class="section-title">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-60">
                                <div class="tm-sc tm-sc-section-title section-title">
                                    <div class="title-wrapper">
                                        <h2 class="text-uppercase line-bottom line-bottom-theme-colored1">Our <span
                                                class="text-theme-colored1">Member categories</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="row">
                                @foreach($member_categories as $member_category)
                                    <div class="col-md-6" data-dots="true">
                                        <div class="campaign bg-white mb-30">
                                            <div class="campaign-details clearfix p-15 pt-10 pb-10">
                                                <h3 class="text-theme-colored2 font-weight-500 mb-0">{{$member_category->name}}</h3>
                                                <h5 class="font-weight-700 mt-0"><a href="#">Description</a></h5>
                                                <div
                                                    class="campaign-bottom border-top clearfix pt-10 pb-10 mt-30 align-items-center">
                                                    <ul class="list-inline font-weight-600 float-start pr-0 mt-15">
                                                        <li class="text-theme-colored1 pr-0 mr-10">Registration fee:
                                                            <span
                                                                class="text-theme-colored2">@if($member_category->member_category_fee)
                                                            ${{$member_category->member_category_fee->subscription_fee}}@endif</span>
                                                        </li>
                                                    </ul>
                                                    <a class="btn btn-xs btn-theme-colored2 font-weight-600 font-11 float-end flip mt-10"
                                                       href="{{url('/login')}}">Read More and Subscribe</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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
