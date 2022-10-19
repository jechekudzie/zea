@extends('layouts.site')
@push('head')
    <link rel="stylesheet" href="{{asset('dashboard/datatables.net-bs5/dataTables.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/vendors/prismjs/themes/prism.css')}}">
@endpush

@section('content')
    <div class="main-content-area">

        <!-- Start main-content -->
        <!--<div class="main-content-area">-->
            <section class="">
                <div class="container">
                  <div class="section-content">
                    <div class="row">
                      <div class="col-md-12 col-lg-6 col-xl-6">
                        <h6 class="letter-space-4 text-gray-darkgray text-uppercase mt-0 mb-0">All About</h6>
                        <h2 class="text-uppercase mt-0 line-bottom line-bottom-theme-colored1">THE ZEA CONSTITUENCY</h2>

                        <p>ZEA identifies its constituency as consisting of all stakeholders in evaluation. For planning purposes and to ensure the Association continuously develops and meets the needs of its varied stakeholders, the stakeholders are clustered into four groups. These are Evaluators, Evaluation Clients, Learning and Practice Partners, and the General Public. Actors/Agencies can take on different at different points in time or take on multiple roles simultaneously</p>
                        <!--<a href="#" class="btn btn-sm btn-theme-colored2 text-white mb-md-40">Know more</a>-->
                      </div>
                      <div class="col-md-12 col-lg-6 col-xl-6">
                        <div class="box-hover-effect tm-sc-video-popup tm-sc-video-popup-button-over-image h-100">
                          <div class="effect-wrapper h-100">
                            <div class="thumb h-100">
                              <img class="w-100 h-100" src="{{asset('/banner.jpg')}}" alt="">
                            </div>
                            <!--<div class="animated-css-play-button"><span class="play-icon"><i class="fa fa-play"></i></span></div>-->
                            <!--<a class="hover-link" data-lightbox-gallery="youtube-video" img src="{{asset('/banner.jpg')}}" title=""></a>-->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            <!--</div>-->


              <!-- member staff -->

              <section>
                <div class="container">
                  <div class="section-title">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="mb-60">
                          <div class="tm-sc tm-sc-section-title section-title">
                            <div class="title-wrapper">
                              <h2 class="text-uppercase line-bottom line-bottom-theme-colored1">Our <span class="text-theme-colored1">Staff</span></h2>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="section-content">
                    <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 h-100">
                                <div class="staff-item mb-lg-40">
                                <div class="staff-thumb"> <img alt="img" src="{{ asset('/shylock.jpg') }}" class="w-100">
                                </div>
                                <div class="staff-content">
                                    <h4 class="staff-name text-theme-colored1 mt-0">Shylock Muyengwa - <small>President</small></h4>
                                    <p class="mb-20"> PhD
                                        Managing Consultant | Center for Impact Evaluation
                                        Southern Africa Regional Representative to the African Evaluation Association</p>
                                    <!--<div class="staff-social-part">
                                    <ul class="styled-icons icon-dark icon-theme-colored2 icon-sm icon-circled float-start mt-10">
                                        <li><a class="social-link" href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a class="social-link" href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a class="social-link" href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                    <a class="btn btn-theme-colored2 btn-xs p-10 float-end" href="#">view details</a>
                                    </div>-->
                                </div>
                                </div>
                            </div>


                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 h-100">
                                <div class="staff-item mb-lg-40">
                                <div class="staff-thumb"> <img alt="img" src="{{asset('/profpic.jpg')}}" class="w-100">
                                </div>
                                <div class="staff-content">
                                    <h4 class="staff-name text-theme-colored1 mt-0">Patrick Mpedzisi - <small>Vice-President</small></h4>
                                    <p class="mb-20"> African Peer Review Mechanism, Pan African Parliament. He is a co-founder of Nahari Africa and founder of Mitupo.org.</p>
                                    <!--<div class="staff-social-part">
                                    <ul class="styled-icons icon-dark icon-theme-colored2 icon-sm icon-circled float-start mt-10">
                                        <li><a class="social-link" href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a class="social-link" href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a class="social-link" href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                    <a class="btn btn-theme-colored2 btn-xs p-10 float-end" href="#">view details</a>
                                    </div>-->
                                </div>
                                </div>
                            </div>


                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 h-100">
                                <div class="staff-item mb-lg-40">
                                <div class="staff-thumb"> <img alt="img" src="{{asset('/zea.PNG')}}" class="w-100">
                                </div>
                                <div class="staff-content">
                                    <h4 class="staff-name text-theme-colored1 mt-0">Name Name - <small>Chairman</small></h4>
                                    <p class="mb-20"> PhD
                                        About Secretary</p>
                                    <!--<div class="staff-social-part">
                                    <ul class="styled-icons icon-dark icon-theme-colored2 icon-sm icon-circled float-start mt-10">
                                        <li><a class="social-link" href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a class="social-link" href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a class="social-link" href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                    <a class="btn btn-theme-colored2 btn-xs p-10 float-end" href="#">view details</a>
                                    </div>-->
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 h-100">
                                <div class="staff-item mb-lg-40">
                                <div class="staff-thumb"> <img alt="img" src="{{asset('/zea.PNG')}}"class="w-100">
                                </div>
                                <div class="staff-content">
                                    <h4 class="staff-name text-theme-colored1 mt-0">Name Name - <small>Secretary</small></h4>
                                    <p class="mb-20"> PhD
                                        Managing Consultant | Center for Impact Evaluation
                                        Southern Africa Regional Representative to the African Evaluation Association</p>
                                    <!--<div class="staff-social-part">
                                    <ul class="styled-icons icon-dark icon-theme-colored2 icon-sm icon-circled float-start mt-10">
                                        <li><a class="social-link" href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a class="social-link" href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a class="social-link" href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                    <a class="btn btn-theme-colored2 btn-xs p-10 float-end" href="#">view details</a>
                                    </div>-->
                                </div>
                                </div>
                            </div>


                    </div>
                  </div>
                </div>
              </section>
        <!-- end main-content -->
    </div>
@stop

@push('scripts')
    <script src="{{asset('dashboard/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{asset('dashboard/vendors/datatables.net-bs5/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('dashboard/js/data-table.js')}}"></script>


    <script src="{{asset('dashboard/vendors/prismjs/prism.js')}}"></script>
    <script src="{{asset('dashboard/vendors/clipboard/clipboard.min.js')}}"></script>

@endpush
