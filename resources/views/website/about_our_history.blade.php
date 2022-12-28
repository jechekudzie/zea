@extends('layouts.site')
@push('head')
    <link rel="stylesheet" href="{{asset('dashboard/datatables.net-bs5/dataTables.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/vendors/prismjs/themes/prism.css')}}">
@endpush

@section('content')
    <div class="main-content-area">

        <!-- Start main-content -->
        <!--<div class="main-content-area">-->
            <!--<section class="">
                <div class="container">
                  <div class="section-content">
                    <div class="row">
                      <div class="col-md-12 col-lg-6 col-xl-6">
                        <h6 class="letter-space-4 text-gray-darkgray text-uppercase mt-0 mb-0">All About</h6>
                        <h2 class="text-uppercase mt-0 line-bottom line-bottom-theme-colored1">THE ZEA CONSTITUENCY</h2>

                        <p>ZEA identifies its constituency as consisting of all stakeholders in evaluation. For planning purposes and to ensure the Association continuously develops and meets the needs of its varied stakeholders, the stakeholders are clustered into four groups. These are Evaluators, Evaluation Clients, Learning and Practice Partners, and the General Public. Actors/Agencies can take on different at different points in time or take on multiple roles simultaneously</p>
                        <!--<a href="#" class="btn btn-sm btn-theme-colored2 text-white mb-md-40">Know more</a>
                      </div>
                      <div class="col-md-12 col-lg-6 col-xl-6">
                        <div class="box-hover-effect tm-sc-video-popup tm-sc-video-popup-button-over-image h-100">
                          <div class="effect-wrapper h-100">
                            <div class="thumb h-100">
                              <img class="w-100 h-100" src="{{asset('/banner.jpg')}}" alt="">
                            </div>
                            <!--<div class="animated-css-play-button"><span class="play-icon"><i class="fa fa-play"></i></span></div>-->
                            <!--<a class="hover-link" data-lightbox-gallery="youtube-video" img src="{{asset('/banner.jpg')}}" title=""></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>-->
            <!--</div>-->


              <!-- member staff -->

              <!--<section>
                <div class="container">
                  <div class="section-title">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="mb-60">
                          <div class="tm-sc tm-sc-section-title section-title">
                            <div class="title-wrapper">
                              <h2 class="text-uppercase line-bottom line-bottom-theme-colored1">Our <span class="text-theme-colored1">Board Members</span></h2>
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
                                <div class="staff-thumb"> <img style="width:350px;height: 350px;" alt="img" src="{{ asset('/Shylock.jpg') }}" class="w-100">
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
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 h-100">
                                <div class="staff-item mb-lg-40">
                                <div class="staff-thumb"> <img style="width:350px;height: 350px;" alt="img" src="{{asset('/profpic.jpg')}}" class="w-100">
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
                                    </div>
                                </div>
                                </div>
                            </div>

                    </div>
                  </div>
                </div>
              </section>-->
              
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
              
              
              <section>
        <div class="container pt-10 pb-10">
          <div class="section-content">
            <div class="row">
              <div class="col-md-12 pt-10">
                <hr>
                <h4 class="mb-30">ABOUT ZIMBABWE EVALUATION ASSOCIATION</h4>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">PURPOSE AND MISSION</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">VISION</a>
                  </li>
                  <!--<li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                  </li>-->
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <p>The Purpose of ZEA is to promote practices that will ensure that:</p>
                    <ul>
                        <li>Programmes are evaluated (emphasis should be on national/government programmes because donor funded programmes are already evaluated)</li>
                        <li>Evaluations are credible</li>
                        <li>Evaluation findings are used to inform policies/ development interventions</li>
                        <li>Evaluation contributes to sustainable development</li>
                      </ul>
                  </div>
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="tm-sc-unordered-list list-default">
                        <p> The Vision of ZEA is: A Zimbabwe with a culture of quality evaluation that contributes to improved lives and conditions for citizens.</p>
                    </div>
                  </div>
                  <!--<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                  </div>-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-push-1">
              <div class="list-group mb-50">
                <a href="#section-one" class="list-group-item list-group-item-action smooth-scroll-to-target">Knowledge & Professional Development</a>

                <a href="#section-two" class="list-group-item list-group-item-action smooth-scroll-to-target">Advocacy</a>

                <a href="#section-three" class="list-group-item list-group-item-action smooth-scroll-to-target">Community</a>

                <a href="#section-four" class="list-group-item list-group-item-action smooth-scroll-to-target">Contribution</a>
              </div>
            </div>
            <div class="col-md-10 col-md-push-1">
              <div id="section-one" class="mb-50">
                <h3>Knowledge & Professional Development</h3>
                <hr>
                <p class="mb-20">As a member, you will have access to the latest knowledge and professional development tools for evaluators, and are welcome to contribute to them. Our trademark training events named “Learn and Share Series” are designed as half days workshops for practitioners to share their experience and gather peer review from colleagues. </p>
                <ul>
                    <li>The ZEA offers webinars (current and past webinars available to members)</li>
                    <li>Facilitate access to sponsored training events and bursaries to attend the Africa Evaluation Conference, as well as other regional conferences. </li>
                    <li>All learning opportunities are aligned with the established competencies for Africa Evaluation Principles </li>
                    <li>Our member have an opportunity to serve on the Africa Evaluation Association task forces</li>
                  </ul>
              </div>
              <div id="section-two" class="mb-50">
                <h3>Advocacy</h3>
                <hr>
                <p class="mb-20">As a Member, you will support the ZEA's professional voice in raising evaluation awareness on a local, national, and international level. Members are consulted on an informal and formal basis, and their input is factored into ZEA's actions and decision-making. The ZEA is committed to expanding the evaluation profession's reach in Zimbabwe, as well as to promoting the use of evaluation and establishing robust industry standards. We encourage our members to take an active role in promoting our core values and advocating for the recognition of evaluation as a professional practice. Our members actively participate in the work of NGOs, civil society organizations, the government, and the Zimbabwean Parliament.</p>
              </div>
              <div id="section-three" class="mb-50">
                <h3>Community</h3>
                <hr>
                <p class="mb-20">You will connect to the broader ZEA community of evaluators across the country informally and formally. Members are invited to provide input on priorities, and are welcome to comment on most pages of the ZEA website. The 'member's only' section of the website includes the latest evaluation news, job postings and contracts and training opportunities.  Members can be linked with mentors drawn from a dynamic group of members that work locally and  internationally. We encourage ZEA members to be ambassador of the Association by reaching to new members wherever they are.</p>

              </div>
              <div id="section-four" class="mb-50">
                <h3>Contribution</h3>
                <hr>
                <p class="mb-20">You will be welcome to contribute to ZEA activities and to engage in the field of evaluation in any number of ways:  We invite our members to volunteer to host webinars; attend networking events; mentoring new evaluators; contribute ideas; as well as contribute to  the Africa Evaluation Journal</p>

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
