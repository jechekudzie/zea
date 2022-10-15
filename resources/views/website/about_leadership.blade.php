@extends('layouts.site')
@push('head')
    <link rel="stylesheet" href="{{asset('dashboard/datatables.net-bs5/dataTables.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/vendors/prismjs/themes/prism.css')}}">
@endpush

@section('content')
<div class="main-content-area">
    <section class="">
        <div class="container">
          <div class="section-content">
            <div class="row">
              <div class="col-md-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                <h2 class="text-uppercase mt-0 font-weight-600">ZEA</h2>
                <p class="text-gray-dimgray font-italic">By becoming a Member of the Zimbabwe Evaluation Association, you join a community of practice of over 180 professional evaluators working to improve the evaluation profession in Zimbabwe.By becoming a member of ZEA, you will enjoy the following benefits:</p>

                <div class="tm-sc-unordered-list list-default">
                    <ul>
                      <li>Access to exclusive networking opportunities to engage with colleagues</li>
                      <li>You will stay informed and access the latest in training and professional development courses on evaluation</li>
                      <li>Automatically become a member of the Africa Evaluation Association and International Organization for Cooperation in Evaluation and become eligible for member discounts for their trainings and conference.</li>
                      <li>When you join ZEA, you become a member of a vibrant community of practice that includes EvalYouth, EvalGender, EvalParliamentarians, university students, consulting firms, and highly networked individuals</li>
                    </ul>
                </div>

                <!--<a href="#" class="btn btn-flat btn-theme-colored1 text-uppercase mt-20 mb-sm-30 border-left-theme-colored2-4px">Read More</a>-->
              </div>
              <div class="col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="row mb-10">
                  <div class="col-md-12">
                    <img class="w-100" src="images/about/ab1.jpg" alt="">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 pr-5 pr-sm-15 mb-sm-10">
                    <img class="w-100" src="images/about/ab2.jpg" alt="">
                  </div>
                  <div class="col-md-6 pl-5 pl-sm-15">
                    <img class="w-100" src="images/about/ab3.jpg" alt="">
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


  </div>
@stop

@push('scripts')
    <script src="{{asset('dashboard/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{asset('dashboard/vendors/datatables.net-bs5/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('dashboard/js/data-table.js')}}"></script>


    <script src="{{asset('dashboard/vendors/prismjs/prism.js')}}"></script>
    <script src="{{asset('dashboard/vendors/clipboard/clipboard.min.js')}}"></script>

@endpush
