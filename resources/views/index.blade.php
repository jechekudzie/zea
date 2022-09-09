@extends('layouts.site')

@section('content')
    <!-- Start main-content -->
    <div class="main-content-area">

        <!-- Section: Home -->
        <section class="layer-overlay overlay-dark-9" data-tm-bg-img="images/bg/bg1.jpg">
            <div class="container">
                <div class="section-content">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-md-12 col-lg-8 col-xl-8">
                            <h2 class="text-white text-uppercase font-size-84 font-weight-800 pl-10 mt-0 mb-60 line-height-1">
                                <span class="text-theme-colored1">Study</span>press</h2>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div
                                        class="tm-sc-icon-box icon-box icon-left tm-iconbox-icontype-font-icon text-left iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-left mb-60">
                                        <div class="icon-box-wrapper">
                                            <a class="icon icon-type-font-icon icon-circled icon-dark icon-theme-colored1">
                                                <i class="flaticon-medical-ambulance14"></i></a>
                                            <div class="icon-text">
                                                <p class="text-white mb-0">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Labore atque officiis maxime suscipit expedita
                                                    obcaecati nulla</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div
                                        class="tm-sc-icon-box icon-box icon-left tm-iconbox-icontype-font-icon text-left iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-left mb-60">
                                        <div class="icon-box-wrapper">
                                            <a class="icon icon-type-font-icon icon-circled icon-dark icon-theme-colored1">
                                                <i class="flaticon-medical-ambulance14"></i></a>
                                            <div class="icon-text">
                                                <p class="text-white mb-0">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Labore atque officiis maxime suscipit expedita
                                                    obcaecati nulla</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div
                                        class="tm-sc-icon-box icon-box icon-left tm-iconbox-icontype-font-icon text-left iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-left mb-60">
                                        <div class="icon-box-wrapper">
                                            <a class="icon icon-type-font-icon icon-circled icon-dark icon-theme-colored1">
                                                <i class="flaticon-medical-ambulance14"></i></a>
                                            <div class="icon-text">
                                                <p class="text-white mb-0">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Labore atque officiis maxime suscipit expedita
                                                    obcaecati nulla</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div
                                        class="tm-sc-icon-box icon-box icon-left tm-iconbox-icontype-font-icon text-left iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-left mb-60">
                                        <div class="icon-box-wrapper">
                                            <a class="icon icon-type-font-icon icon-circled icon-dark icon-theme-colored1">
                                                <i class="flaticon-medical-ambulance14"></i></a>
                                            <div class="icon-text">
                                                <p class="text-white mb-0">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Labore atque officiis maxime suscipit expedita
                                                    obcaecati nulla</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="btn btn-theme-colored1 btn-flat mt-15 mr-15">Read more</a>
                            <a href="#" class="btn btn-light btn-flat mt-15">Contact Us</a>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                            <form id="home_appointment_form" name="home_appointment_form"
                                  class="booking-form form-home bg-white p-30 mt-md-40" method="post"
                                  action="includes/appointment.php" novalidate="novalidate">
                                <h3 class="mt-0 mb-20">Request <span class="text-theme-colored1">Information</span></h3>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="mb-3 mb-10">
                                            <input name="form_name" class="form-control" type="text" required=""
                                                   placeholder="Enter Name" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3 mb-10">
                                            <input name="form_email" class="form-control required email" type="email"
                                                   placeholder="Enter Email" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3 mb-10">
                                            <input name="form_phone" class="form-control required" type="text"
                                                   placeholder="Enter Phone" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="mb-3 mb-20">
                                            <div class="styled-select">
                                                <select id="person_select" name="person_select" class="form-control"
                                                        required="" aria-required="true">
                                                    <option value="">Choose Subject</option>
                                                    <option value="1 Person">Software Engineering</option>
                                                    <option value="2 Person">Computer Science engineering</option>
                                                    <option value="3 Person">Accounting Technologies</option>
                                                    <option value="Family Pack">BACHELOR`S DEGREE</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3 mb-20">
                                            <input name="Date Of Birth" class="form-control required date-picker"
                                                   type="text" placeholder="Date Of Birth" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3 mb-10">
                                            <input name="form_appontment_date" class="form-control required date-picker"
                                                   type="text" placeholder="Select Date" aria-required="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 mb-10">
                                    <textarea name="form_message" class="form-control required"
                                              placeholder="Enter Message" rows="3" aria-required="true"></textarea>
                                </div>
                                <div class="mb-3 mb-0 mt-20">
                                    <input name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button type="submit" class="btn btn-theme-colored1 text-white btn-block"
                                            data-loading-text="Please wait...">Submit Request
                                    </button>
                                </div>
                            </form>
                            <!-- Appointment Form Validation-->
                            <script type="text/javascript">
                                $("#home_appointment_form").validate({
                                    submitHandler: function (form) {
                                        var form_btn = $(form).find('button[type="submit"]');
                                        var form_result_div = '#form-result';
                                        $(form_result_div).remove();
                                        form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                                        var form_btn_old_msg = form_btn.html();
                                        form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                        $(form).ajaxSubmit({
                                            dataType: 'json',
                                            success: function (data) {
                                                if (data.status == 'true') {
                                                    $(form).find('.form-control').val('');
                                                }
                                                form_btn.prop('disabled', false).html(form_btn_old_msg);
                                                $(form_result_div).html(data.message).fadeIn('slow');
                                                setTimeout(function () {
                                                    $(form_result_div).fadeOut('slow')
                                                }, 6000);
                                            }
                                        });
                                    }
                                });
                            </script>
                            <!-- Appointment Form Ends -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Features -->
        <section class="bg-theme-colored1">
            <div class="container pt-0 pb-0">
                <div class="section-content section-typo-light z-index-1 position-relative">
                    <div class="row row-o-equal-height">
                        <div class="bg-theme-colored1 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                            <div
                                class="tm-sc-icon-box icon-box icon-left tm-iconbox-icontype-font-icon text-left iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-left p-30">
                                <div class="icon-box-wrapper">
                                    <a class="icon icon-type-font-icon icon-default text-white"> <i
                                            class="fa fa-certificate mt-10 font-size-36"></i> </a>
                                    <div class="icon-text">
                                        <h5 class="icon-box-title mb-0"> Worldclass Service Provider</h5>
                                        <div class="content">
                                            <p>Get Your Services Now From Us</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-theme-colored1 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                            <div
                                class="tm-sc-icon-box icon-box icon-left tm-iconbox-icontype-font-icon text-left iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-left p-30">
                                <div class="icon-box-wrapper">
                                    <a class="icon icon-type-font-icon icon-default text-white"> <i
                                            class="fa fa-map-marker mt-10 font-size-36"></i> </a>
                                    <div class="icon-text">
                                        <h5 class="icon-box-title mb-0"> You can Find Us Our Location</h5>
                                        <div class="content">
                                            <p>Your Trust is our achievement </p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-theme-colored1 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                            <div
                                class="tm-sc-icon-box icon-box icon-left tm-iconbox-icontype-font-icon text-left iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-left p-30">
                                <div class="icon-box-wrapper">
                                    <a class="icon icon-type-font-icon icon-default text-white"> <i
                                            class="fa fa-phone-alt mt-10 font-size-36"></i> </a>
                                    <div class="icon-text">
                                        <h5 class="icon-box-title mb-0"> Contact Us : +262 695 2601 </h5>
                                        <div class="content">
                                            <p>121 king street west toronto </p>
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

        <!-- Section: About -->
        <section class="">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                            <h2 class="text-uppercase line-height-1 font-weight-600 mt-0 line-bottom line-bottom-theme-colored1">
                                World Best University</h2>
                            <h5 class="text-theme-colored2 mb-20">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit Perferendis repudiandae nostrum quibusdam! elit Perferendis repudiandae</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime
                                suscipit expedita obcaecati nulla in ducimus iure quos quam recusandae dolor quas et
                                perspiciatis voluptatum accusantium delectus nisi reprehenderit, eveniet fuga modi
                                pariatur.</p>
                            <a href="#" class="btn btn-sm btn-theme-colored1 btn-flat mt-15 mr-15">Read more</a>
                            <a href="#" class="btn btn-sm btn-outline btn-outline-dark btn-flat mt-15">Contact Us</a>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7">
                            <div class="row mt-md-60">
                                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 ">
                                    <div class="mt-sm-60">
                                        <img src="images/about/a1.jpg" class="w-100" alt="">
                                    </div>
                                    <h5 class="text-theme-colored2">Our Mission</h5>
                                    <p class="mb-10">Lorem ipsum dolor sit amet, consectetur.</p>
                                    <a class="text-theme-colored1 font-size-13 font-weight-600 mb-md-30 display-inline-block"
                                       href="#">View Details →</a>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 ">
                                    <div class="mt-sm-40">
                                        <img src="images/about/a2.jpg" class="w-100" alt="">
                                    </div>
                                    <h5 class="text-theme-colored2">Our Approach</h5>
                                    <p class="mb-10">Lorem ipsum dolor sit amet, consectetur.</p>
                                    <a class="text-theme-colored1 font-size-13 font-weight-600 mb-md-30 display-inline-block"
                                       href="#">View Details →</a>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 ">
                                    <div class="mt-sm-40">
                                        <img src="images/about/a3.jpg" class="w-100" alt="">
                                    </div>
                                    <h5 class="text-theme-colored2">Our vision</h5>
                                    <p class="mb-10">Lorem ipsum dolor sit amet, consectetur.</p>
                                    <a class="text-theme-colored1 font-size-13 font-weight-600" href="#">View Details
                                        →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Courses -->
        <section class="bg-silver-light">
            <div class="container">
                <div class="section-title">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-60">
                                <div class="tm-sc tm-sc-section-title section-title">
                                    <div class="title-wrapper">
                                        <h2 class="text-uppercase line-bottom line-bottom-theme-colored1">Our <span
                                                class="text-theme-colored1">Courses</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="owl-carousel tm-owl-carousel-4col" data-dots="true">
                                <div class="campaign bg-white mb-30">
                                    <div class="thumb">
                                        <img src="images/project/12.jpg" alt="" class="img-fullwidth">
                                        <div class="campaign-overlay"></div>
                                    </div>
                                    <div class="campaign-details clearfix p-15 pt-10 pb-10">
                                        <h6 class="text-theme-colored2 font-weight-500 mb-0">Subtitle place here</h6>
                                        <h5 class="font-weight-700 mt-0"><a href="#">Chemical Engineering</a></h5>
                                        <p>Lorem ipsum dolor adipisicing elit. Praesent quossit sit amet consect
                                            adipisicing elit quossit <a class="text-theme-colored2 ml-10" href="#">
                                                →</a></p>
                                        <div
                                            class="campaign-bottom border-top clearfix pt-10 pb-10 mt-30 align-items-center">
                                            <ul class="list-inline font-weight-600 float-start pr-0 mt-15">
                                                <li class="text-theme-colored1 pr-0 mr-10">Couse Fee: <span
                                                        class="text-theme-colored2">$890</span></li>
                                            </ul>
                                            <a class="btn btn-xs btn-theme-colored2 font-weight-600 font-11 float-end flip mt-10"
                                               href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="campaign bg-white mb-30">
                                    <div class="thumb">
                                        <img src="images/project/13.jpg" alt="" class="img-fullwidth">
                                        <div class="campaign-overlay"></div>
                                    </div>
                                    <div class="campaign-details clearfix p-15 pt-10 pb-10">
                                        <h6 class="text-theme-colored2 font-weight-500 mb-0">Subtitle place here</h6>
                                        <h5 class="font-weight-700 mt-0"><a href="#">Chemical Engineering</a></h5>
                                        <p>Lorem ipsum dolor adipisicing elit. Praesent quossit sit amet consect
                                            adipisicing elit quossit <a class="text-theme-colored2 ml-10" href="#">
                                                →</a></p>
                                        <div
                                            class="campaign-bottom border-top clearfix pt-10 pb-10 mt-30 align-items-center">
                                            <ul class="list-inline font-weight-600 float-start pr-0 mt-15">
                                                <li class="text-theme-colored1 pr-0 mr-10">Couse Fee: <span
                                                        class="text-theme-colored2">$890</span></li>
                                            </ul>
                                            <a class="btn btn-xs btn-theme-colored2 font-weight-600 font-11 float-end flip mt-10"
                                               href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="campaign bg-white mb-30">
                                    <div class="thumb">
                                        <img src="images/project/14.jpg" alt="" class="img-fullwidth">
                                        <div class="campaign-overlay"></div>
                                    </div>
                                    <div class="campaign-details clearfix p-15 pt-10 pb-10">
                                        <h6 class="text-theme-colored2 font-weight-500 mb-0">Subtitle place here</h6>
                                        <h5 class="font-weight-700 mt-0"><a href="#">Chemical Engineering</a></h5>
                                        <p>Lorem ipsum dolor adipisicing elit. Praesent quossit sit amet consect
                                            adipisicing elit quossit <a class="text-theme-colored2 ml-10" href="#">
                                                →</a></p>
                                        <div
                                            class="campaign-bottom border-top clearfix pt-10 pb-10 mt-30 align-items-center">
                                            <ul class="list-inline font-weight-600 float-start pr-0 mt-15">
                                                <li class="text-theme-colored1 pr-0 mr-10">Couse Fee: <span
                                                        class="text-theme-colored2">$890</span></li>
                                            </ul>
                                            <a class="btn btn-xs btn-theme-colored2 font-weight-600 font-11 float-end flip mt-10"
                                               href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="campaign bg-white mb-30">
                                    <div class="thumb">
                                        <img src="images/project/15.jpg" alt="" class="img-fullwidth">
                                        <div class="campaign-overlay"></div>
                                    </div>
                                    <div class="campaign-details clearfix p-15 pt-10 pb-10">
                                        <h6 class="text-theme-colored2 font-weight-500 mb-0">Subtitle place here</h6>
                                        <h5 class="font-weight-700 mt-0"><a href="#">Chemical Engineering</a></h5>
                                        <p>Lorem ipsum dolor adipisicing elit. Praesent quossit sit amet consect
                                            adipisicing elit quossit <a class="text-theme-colored2 ml-10" href="#">
                                                →</a></p>
                                        <div
                                            class="campaign-bottom border-top clearfix pt-10 pb-10 mt-30 align-items-center">
                                            <ul class="list-inline font-weight-600 float-start pr-0 mt-15">
                                                <li class="text-theme-colored1 pr-0 mr-10">Couse Fee: <span
                                                        class="text-theme-colored2">$890</span></li>
                                            </ul>
                                            <a class="btn btn-xs btn-theme-colored2 font-weight-600 font-11 float-end flip mt-10"
                                               href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="campaign bg-white mb-30">
                                    <div class="thumb">
                                        <img src="images/project/16.jpg" alt="" class="img-fullwidth">
                                        <div class="campaign-overlay"></div>
                                    </div>
                                    <div class="campaign-details clearfix p-15 pt-10 pb-10">
                                        <h6 class="text-theme-colored2 font-weight-500 mb-0">Subtitle place here</h6>
                                        <h5 class="font-weight-700 mt-0"><a href="#">Chemical Engineering</a></h5>
                                        <p>Lorem ipsum dolor adipisicing elit. Praesent quossit sit amet consect
                                            adipisicing elit quossit <a class="text-theme-colored2 ml-10" href="#">
                                                →</a></p>
                                        <div
                                            class="campaign-bottom border-top clearfix pt-10 pb-10 mt-30 align-items-center">
                                            <ul class="list-inline font-weight-600 float-start pr-0 mt-15">
                                                <li class="text-theme-colored1 pr-0 mr-10">Couse Fee: <span
                                                        class="text-theme-colored2">$890</span></li>
                                            </ul>
                                            <a class="btn btn-xs btn-theme-colored2 font-weight-600 font-11 float-end flip mt-10"
                                               href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Funfacts -->
        <section class="layer-overlay overlay-theme-colored2-9 bg-no-repeat bg-pos-center-center"
                 data-tm-bg-img="images/bg/bg2.jpg">
            <div class="container pt-100 pb-100">
                <div class="section-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-3 col-xl-3">
                                <div class="funfact-item text-center mb-md-60">
                                    <i class="funfact-icon pe-7s-smile text-theme-colored1"></i>
                                    <h2 data-animation-duration="2000" data-value="5248"
                                        class="text-white counter animate-number mt-0 mb-10">0</h2>
                                    <p class="text-white title mb-0">Happy Students</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xl-3">
                                <div class="funfact-item text-center mb-md-60">
                                    <i class="funfact-icon pe-7s-note2 text-theme-colored1"></i>
                                    <h2 data-animation-duration="2000" data-value="645"
                                        class="text-white counter animate-number mt-0 mb-10">0</h2>
                                    <p class="text-white title mb-0">Our Courses</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xl-3">
                                <div class="funfact-item text-center mb-sm-60">
                                    <i class="funfact-icon pe-7s-users text-theme-colored1"></i>
                                    <h2 data-animation-duration="2000" data-value="248"
                                        class="text-white counter animate-number mt-0 mb-10">0</h2>
                                    <p class="text-white title mb-0">Our Teachers</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xl-3">
                                <div class="funfact-item text-center">
                                    <i class="funfact-icon pe-7s-cup text-theme-colored1"></i>
                                    <h2 data-animation-duration="2000" data-value="24"
                                        class="text-white counter animate-number mt-0 mb-10">0</h2>
                                    <p class="text-white title mb-0">Awards Won</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Staff -->
        <section>
            <div class="container">
                <div class="section-title">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-60">
                                <div class="tm-sc tm-sc-section-title section-title">
                                    <div class="title-wrapper">
                                        <h2 class="text-uppercase line-bottom line-bottom-theme-colored1">Our <span
                                                class="text-theme-colored1">Teachers</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="staff-item mb-lg-40">
                                <div class="staff-thumb"><img alt="img" src="images/team/team5.jpg" class="w-100">
                                </div>
                                <div class="staff-content">
                                    <h4 class="staff-name text-theme-colored1 mt-0">Andre Smith - <small>Teacher</small>
                                    </h4>
                                    <p class="mb-20">Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                    <div class="staff-social-part">
                                        <ul class="styled-icons icon-dark icon-theme-colored2 icon-sm icon-circled float-start mt-10">
                                            <li><a class="social-link" href="#"><i class="fab fa-facebook"></i></a></li>
                                            <li><a class="social-link" href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a class="social-link" href="#"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                        <a class="btn btn-theme-colored2 btn-xs p-10 float-end" href="#">view
                                            details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="staff-item mb-lg-40">
                                <div class="staff-thumb"><img alt="img" src="images/team/team6.jpg" class="w-100">
                                </div>
                                <div class="staff-content">
                                    <h4 class="staff-name text-theme-colored1 mt-0">Andre Smith - <small>Teacher</small>
                                    </h4>
                                    <p class="mb-20">Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                    <div class="staff-social-part">
                                        <ul class="styled-icons icon-dark icon-theme-colored2 icon-sm icon-circled float-start mt-10">
                                            <li><a class="social-link" href="#"><i class="fab fa-facebook"></i></a></li>
                                            <li><a class="social-link" href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a class="social-link" href="#"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                        <a class="btn btn-theme-colored2 btn-xs p-10 float-end" href="#">view
                                            details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="staff-item mb-lg-40">
                                <div class="staff-thumb"><img alt="img" src="images/team/team7.jpg" class="w-100">
                                </div>
                                <div class="staff-content">
                                    <h4 class="staff-name text-theme-colored1 mt-0">Andre Smith - <small>Teacher</small>
                                    </h4>
                                    <p class="mb-20">Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                    <div class="staff-social-part">
                                        <ul class="styled-icons icon-dark icon-theme-colored2 icon-sm icon-circled float-start mt-10">
                                            <li><a class="social-link" href="#"><i class="fab fa-facebook"></i></a></li>
                                            <li><a class="social-link" href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a class="social-link" href="#"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                        <a class="btn btn-theme-colored2 btn-xs p-10 float-end" href="#">view
                                            details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="staff-item">
                                <div class="staff-thumb"><img alt="img" src="images/team/team8.jpg" class="w-100">
                                </div>
                                <div class="staff-content">
                                    <h4 class="staff-name text-theme-colored1 mt-0">Andre Smith - <small>Teacher</small>
                                    </h4>
                                    <p class="mb-20">Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                    <div class="staff-social-part">
                                        <ul class="styled-icons icon-dark icon-theme-colored2 icon-sm icon-circled float-start mt-10">
                                            <li><a class="social-link" href="#"><i class="fab fa-facebook"></i></a></li>
                                            <li><a class="social-link" href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a class="social-link" href="#"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                        <a class="btn btn-theme-colored2 btn-xs p-10 float-end" href="#">view
                                            details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Grid 3 -->
        <section class="bg-silver-light">
            <div class="container">
                <div class="section-title">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-60">
                                <div class="tm-sc tm-sc-section-title section-title">
                                    <div class="title-wrapper">
                                        <h2 class="text-uppercase line-bottom line-bottom-theme-colored1">Our <span
                                                class="text-theme-colored1">Gallery</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tm-sc-gallery tm-sc-gallery-grid gallery-style1-current-theme">
                                <!-- Isotope Filter -->
                                <div class="isotope-layout-filter filter-style-4 cat-filter-default"
                                     data-link-with="gallery-holder-618422">
                                    <a href="#" class="active" data-filter="*">All</a>
                                    <a href="#" class="" data-filter=".photos">Photos</a>
                                    <a href="#" class="" data-filter=".campus">Campus</a>
                                    <a href="#" class="" data-filter=".student">Student</a>
                                </div>
                                <!-- End Isotope Filter -->

                                <!-- Isotope Gallery Grid -->
                                <div id="gallery-holder-618422"
                                     class="isotope-layout grid-4 gutter-5 clearfix lightgallery-lightbox">
                                    <div class="isotope-layout-inner">
                                        <!-- Isotope Item Start -->
                                        <div class="isotope-item photos">
                                            <div class="isotope-item-inner">
                                                <div class="tm-gallery">
                                                    <div class="tm-gallery-inner">
                                                        <div class="thumb">
                                                            <a href="#">
                                                                <img width="672" height="448" src="images/gallery/1.jpg"
                                                                     class="" alt=""/>
                                                            </a>
                                                        </div>
                                                        <div class="tm-gallery-content-wrapper">
                                                            <div class="tm-gallery-content">
                                                                <div class="tm-gallery-content-inner">
                                                                    <div class="icons-holder-inner">
                                                                        <div
                                                                            class="styled-icons icon-dark icon-circled icon-theme-colored1">
                                                                            <a class="lightgallery-trigger styled-icons-item"
                                                                               data-exthumbimage="images/gallery/1.jpg"
                                                                               data-src="images/gallery/1.jpg"
                                                                               title="Gallery 1"
                                                                               href="images/gallery/1.jpg"><i
                                                                                    class="fa fa-plus"></i></a>
                                                                            <a class="styled-icons-item"
                                                                               title="Gallery 1" href="#"><i
                                                                                    class="fa fa-link"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="title-holder">
                                                                        <h5 class="title"><a href="#">Gallery 1</a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Isotope Item End -->

                                        <!-- Isotope Item Start -->
                                        <div class="isotope-item campus student">
                                            <div class="isotope-item-inner">
                                                <div class="tm-gallery">
                                                    <div class="tm-gallery-inner">
                                                        <div class="thumb">
                                                            <a href="#">
                                                                <img width="672" height="448" src="images/gallery/2.jpg"
                                                                     class="" alt=""/>
                                                            </a>
                                                        </div>
                                                        <div class="tm-gallery-content-wrapper">
                                                            <div class="tm-gallery-content">
                                                                <div class="tm-gallery-content-inner">
                                                                    <div class="icons-holder-inner">
                                                                        <div
                                                                            class="styled-icons icon-dark icon-circled icon-theme-colored1">
                                                                            <a class="lightgallery-trigger styled-icons-item"
                                                                               data-exthumbimage="images/gallery/2.jpg"
                                                                               data-src="images/gallery/2.jpg"
                                                                               title="Gallery 2"
                                                                               href="images/gallery/2.jpg"><i
                                                                                    class="fa fa-plus"></i></a>
                                                                            <a class="styled-icons-item"
                                                                               title="Gallery 2" href="#"><i
                                                                                    class="fa fa-link"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="title-holder">
                                                                        <h5 class="title"><a href="#">Gallery 2</a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Isotope Item End -->

                                        <!-- Isotope Item Start -->
                                        <div class="isotope-item photos student">
                                            <div class="isotope-item-inner">
                                                <div class="tm-gallery">
                                                    <div class="tm-gallery-inner">
                                                        <div class="thumb">
                                                            <a href="#">
                                                                <img width="672" height="448" src="images/gallery/3.jpg"
                                                                     class="" alt=""/>
                                                            </a>
                                                        </div>
                                                        <div class="tm-gallery-content-wrapper">
                                                            <div class="tm-gallery-content">
                                                                <div class="tm-gallery-content-inner">
                                                                    <div class="icons-holder-inner">
                                                                        <div
                                                                            class="styled-icons icon-dark icon-circled icon-theme-colored1">
                                                                            <a class="lightgallery-trigger styled-icons-item"
                                                                               data-exthumbimage="images/gallery/3.jpg"
                                                                               data-src="images/gallery/3.jpg"
                                                                               title="Gallery 3"
                                                                               href="images/gallery/3.jpg"><i
                                                                                    class="fa fa-plus"></i></a>
                                                                            <a class="styled-icons-item"
                                                                               title="Gallery 3" href="#"><i
                                                                                    class="fa fa-link"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="title-holder">
                                                                        <h5 class="title"><a href="#">Gallery 3</a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Isotope Item End -->

                                        <!-- Isotope Item Start -->
                                        <div class="isotope-item campus">
                                            <div class="isotope-item-inner">
                                                <div class="tm-gallery">
                                                    <div class="tm-gallery-inner">
                                                        <div class="thumb">
                                                            <a href="#">
                                                                <img width="672" height="448" src="images/gallery/2.jpg"
                                                                     class="" alt=""/>
                                                            </a>
                                                        </div>
                                                        <div class="tm-gallery-content-wrapper">
                                                            <div class="tm-gallery-content">
                                                                <div class="tm-gallery-content-inner">
                                                                    <div class="icons-holder-inner">
                                                                        <div
                                                                            class="styled-icons icon-dark icon-circled icon-theme-colored1">
                                                                            <a class="lightgallery-trigger styled-icons-item"
                                                                               data-exthumbimage="images/gallery/2.jpg"
                                                                               data-src="images/gallery/2.jpg"
                                                                               title="Gallery 2"
                                                                               href="images/gallery/2.jpg"><i
                                                                                    class="fa fa-plus"></i></a>
                                                                            <a class="styled-icons-item"
                                                                               title="Gallery 2" href="#"><i
                                                                                    class="fa fa-link"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="title-holder">
                                                                        <h5 class="title"><a href="#">Gallery 2</a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Isotope Item End -->

                                        <!-- Isotope Item Start -->
                                        <div class="isotope-item campus student">
                                            <div class="isotope-item-inner">
                                                <div class="tm-gallery">
                                                    <div class="tm-gallery-inner">
                                                        <div class="thumb">
                                                            <a href="#">
                                                                <img width="672" height="448" src="images/gallery/2.jpg"
                                                                     class="" alt=""/>
                                                            </a>
                                                        </div>
                                                        <div class="tm-gallery-content-wrapper">
                                                            <div class="tm-gallery-content">
                                                                <div class="tm-gallery-content-inner">
                                                                    <div class="icons-holder-inner">
                                                                        <div
                                                                            class="styled-icons icon-dark icon-circled icon-theme-colored1">
                                                                            <a class="lightgallery-trigger styled-icons-item"
                                                                               data-exthumbimage="images/gallery/2.jpg"
                                                                               data-src="images/gallery/2.jpg"
                                                                               title="Gallery 2"
                                                                               href="images/gallery/2.jpg"><i
                                                                                    class="fa fa-plus"></i></a>
                                                                            <a class="styled-icons-item"
                                                                               title="Gallery 2" href="#"><i
                                                                                    class="fa fa-link"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="title-holder">
                                                                        <h5 class="title"><a href="#">Gallery 2</a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Isotope Item End -->

                                        <!-- Isotope Item Start -->
                                        <div class="isotope-item photos student">
                                            <div class="isotope-item-inner">
                                                <div class="tm-gallery">
                                                    <div class="tm-gallery-inner">
                                                        <div class="thumb">
                                                            <a href="#">
                                                                <img width="672" height="448" src="images/gallery/3.jpg"
                                                                     class="" alt=""/>
                                                            </a>
                                                        </div>
                                                        <div class="tm-gallery-content-wrapper">
                                                            <div class="tm-gallery-content">
                                                                <div class="tm-gallery-content-inner">
                                                                    <div class="icons-holder-inner">
                                                                        <div
                                                                            class="styled-icons icon-dark icon-circled icon-theme-colored1">
                                                                            <a class="lightgallery-trigger styled-icons-item"
                                                                               data-exthumbimage="images/gallery/3.jpg"
                                                                               data-src="images/gallery/3.jpg"
                                                                               title="Gallery 3"
                                                                               href="images/gallery/3.jpg"><i
                                                                                    class="fa fa-plus"></i></a>
                                                                            <a class="styled-icons-item"
                                                                               title="Gallery 3" href="#"><i
                                                                                    class="fa fa-link"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="title-holder">
                                                                        <h5 class="title"><a href="#">Gallery 3</a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Isotope Item End -->

                                        <!-- Isotope Item Start -->
                                        <div class="isotope-item campus">
                                            <div class="isotope-item-inner">
                                                <div class="tm-gallery">
                                                    <div class="tm-gallery-inner">
                                                        <div class="thumb">
                                                            <a href="#">
                                                                <img width="672" height="448" src="images/gallery/2.jpg"
                                                                     class="" alt=""/>
                                                            </a>
                                                        </div>
                                                        <div class="tm-gallery-content-wrapper">
                                                            <div class="tm-gallery-content">
                                                                <div class="tm-gallery-content-inner">
                                                                    <div class="icons-holder-inner">
                                                                        <div
                                                                            class="styled-icons icon-dark icon-circled icon-theme-colored1">
                                                                            <a class="lightgallery-trigger styled-icons-item"
                                                                               data-exthumbimage="images/gallery/2.jpg"
                                                                               data-src="images/gallery/2.jpg"
                                                                               title="Gallery 2"
                                                                               href="images/gallery/2.jpg"><i
                                                                                    class="fa fa-plus"></i></a>
                                                                            <a class="styled-icons-item"
                                                                               title="Gallery 2" href="#"><i
                                                                                    class="fa fa-link"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="title-holder">
                                                                        <h5 class="title"><a href="#">Gallery 2</a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Isotope Item End -->

                                        <!-- Isotope Item Start -->
                                        <div class="isotope-item campus student">
                                            <div class="isotope-item-inner">
                                                <div class="tm-gallery">
                                                    <div class="tm-gallery-inner">
                                                        <div class="thumb">
                                                            <a href="#">
                                                                <img width="672" height="448" src="images/gallery/2.jpg"
                                                                     class="" alt=""/>
                                                            </a>
                                                        </div>
                                                        <div class="tm-gallery-content-wrapper">
                                                            <div class="tm-gallery-content">
                                                                <div class="tm-gallery-content-inner">
                                                                    <div class="icons-holder-inner">
                                                                        <div
                                                                            class="styled-icons icon-dark icon-circled icon-theme-colored1">
                                                                            <a class="lightgallery-trigger styled-icons-item"
                                                                               data-exthumbimage="images/gallery/2.jpg"
                                                                               data-src="images/gallery/2.jpg"
                                                                               title="Gallery 2"
                                                                               href="images/gallery/2.jpg"><i
                                                                                    class="fa fa-plus"></i></a>
                                                                            <a class="styled-icons-item"
                                                                               title="Gallery 2" href="#"><i
                                                                                    class="fa fa-link"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="title-holder">
                                                                        <h5 class="title"><a href="#">Gallery 2</a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Isotope Item End -->

                                        <!-- Isotope Item Start -->
                                        <div class="isotope-item photos student">
                                            <div class="isotope-item-inner">
                                                <div class="tm-gallery">
                                                    <div class="tm-gallery-inner">
                                                        <div class="thumb">
                                                            <a href="#">
                                                                <img width="672" height="448" src="images/gallery/3.jpg"
                                                                     class="" alt=""/>
                                                            </a>
                                                        </div>
                                                        <div class="tm-gallery-content-wrapper">
                                                            <div class="tm-gallery-content">
                                                                <div class="tm-gallery-content-inner">
                                                                    <div class="icons-holder-inner">
                                                                        <div
                                                                            class="styled-icons icon-dark icon-circled icon-theme-colored1">
                                                                            <a class="lightgallery-trigger styled-icons-item"
                                                                               data-exthumbimage="images/gallery/3.jpg"
                                                                               data-src="images/gallery/3.jpg"
                                                                               title="Gallery 3"
                                                                               href="images/gallery/3.jpg"><i
                                                                                    class="fa fa-plus"></i></a>
                                                                            <a class="styled-icons-item"
                                                                               title="Gallery 3" href="#"><i
                                                                                    class="fa fa-link"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="title-holder">
                                                                        <h5 class="title"><a href="#">Gallery 3</a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Isotope Item End -->

                                        <!-- Isotope Item Start -->
                                        <div class="isotope-item photos">
                                            <div class="isotope-item-inner">
                                                <div class="tm-gallery">
                                                    <div class="tm-gallery-inner">
                                                        <div class="thumb">
                                                            <a href="#">
                                                                <img width="672" height="448" src="images/gallery/1.jpg"
                                                                     class="" alt=""/>
                                                            </a>
                                                        </div>
                                                        <div class="tm-gallery-content-wrapper">
                                                            <div class="tm-gallery-content">
                                                                <div class="tm-gallery-content-inner">
                                                                    <div class="icons-holder-inner">
                                                                        <div
                                                                            class="styled-icons icon-dark icon-circled icon-theme-colored1">
                                                                            <a class="lightgallery-trigger styled-icons-item"
                                                                               data-exthumbimage="images/gallery/1.jpg"
                                                                               data-src="images/gallery/1.jpg"
                                                                               title="Gallery 1"
                                                                               href="images/gallery/1.jpg"><i
                                                                                    class="fa fa-plus"></i></a>
                                                                            <a class="styled-icons-item"
                                                                               title="Gallery 1" href="#"><i
                                                                                    class="fa fa-link"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="title-holder">
                                                                        <h5 class="title"><a href="#">Gallery 1</a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Isotope Item End -->

                                        <!-- Isotope Item Start -->
                                        <div class="isotope-item campus student">
                                            <div class="isotope-item-inner">
                                                <div class="tm-gallery">
                                                    <div class="tm-gallery-inner">
                                                        <div class="thumb">
                                                            <a href="#">
                                                                <img width="672" height="448" src="images/gallery/2.jpg"
                                                                     class="" alt=""/>
                                                            </a>
                                                        </div>
                                                        <div class="tm-gallery-content-wrapper">
                                                            <div class="tm-gallery-content">
                                                                <div class="tm-gallery-content-inner">
                                                                    <div class="icons-holder-inner">
                                                                        <div
                                                                            class="styled-icons icon-dark icon-circled icon-theme-colored1">
                                                                            <a class="lightgallery-trigger styled-icons-item"
                                                                               data-exthumbimage="images/gallery/2.jpg"
                                                                               data-src="images/gallery/2.jpg"
                                                                               title="Gallery 2"
                                                                               href="images/gallery/2.jpg"><i
                                                                                    class="fa fa-plus"></i></a>
                                                                            <a class="styled-icons-item"
                                                                               title="Gallery 2" href="#"><i
                                                                                    class="fa fa-link"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="title-holder">
                                                                        <h5 class="title"><a href="#">Gallery 2</a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Isotope Item End -->

                                        <!-- Isotope Item Start -->
                                        <div class="isotope-item photos student">
                                            <div class="isotope-item-inner">
                                                <div class="tm-gallery">
                                                    <div class="tm-gallery-inner">
                                                        <div class="thumb">
                                                            <a href="#">
                                                                <img width="672" height="448" src="images/gallery/3.jpg"
                                                                     class="" alt=""/>
                                                            </a>
                                                        </div>
                                                        <div class="tm-gallery-content-wrapper">
                                                            <div class="tm-gallery-content">
                                                                <div class="tm-gallery-content-inner">
                                                                    <div class="icons-holder-inner">
                                                                        <div
                                                                            class="styled-icons icon-dark icon-circled icon-theme-colored1">
                                                                            <a class="lightgallery-trigger styled-icons-item"
                                                                               data-exthumbimage="images/gallery/3.jpg"
                                                                               data-src="images/gallery/3.jpg"
                                                                               title="Gallery 3"
                                                                               href="images/gallery/3.jpg"><i
                                                                                    class="fa fa-plus"></i></a>
                                                                            <a class="styled-icons-item"
                                                                               title="Gallery 3" href="#"><i
                                                                                    class="fa fa-link"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="title-holder">
                                                                        <h5 class="title"><a href="#">Gallery 3</a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Isotope Item End -->
                                    </div>
                                </div>
                                <!-- End Isotope Gallery Grid -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Upcoming Event -->
        <section>
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <h2 class="line-bottom line-bottom-theme-colored1">Upcoming <span
                                    class="text-theme-colored1">Events</span></h2>
                            <div class="upcoming-events-current-style mb-10 mb-sm-40">
                                <div class="row align-items-center">
                                    <div class="col-sm-3 pr-0 pr-sm-15">
                                        <div class="thumb">
                                            <img class="w-100" src="images/event/1.jpg" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="event-details p-15 pt-0 pb-0">
                                            <h5 class="media-heading text-uppercase mt-0 mb-0 mt-sm-15">Upcoming Event
                                                Title</h5>
                                            <ul class="event-location mb-10">
                                                <li class="event-time"><i
                                                        class="far fa-clock text-theme-colored2 font-icon sm-display-block"></i>
                                                    04:00 am
                                                </li>
                                                <li class="event-address"><i
                                                        class="fas fa-map-marker-alt text-theme-colored2 font-icon sm-display-block"></i>
                                                    Broklyn Street 40, New York
                                                </li>
                                            </ul>
                                            <p class="mb-10">Dignissim cras tincidunt lorem ipsum is simply free text
                                                feugiat at augue. Id purus integer orci.</p>
                                            <a class="text-theme-colored2" href="#">Read More →</a>
                                        </div>
                                    </div>
                                    <div class="col"></div>
                                </div>
                            </div>
                            <div class="upcoming-events-current-style mb-10 mb-sm-40">
                                <div class="row align-items-center">
                                    <div class="col-sm-3 pr-0 pr-sm-15">
                                        <div class="thumb">
                                            <img class="w-100" src="images/event/2.jpg" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="event-details p-15 pt-0 pb-0">
                                            <h5 class="media-heading text-uppercase mt-0 mb-0 mt-sm-15">Upcoming Event
                                                Title</h5>
                                            <ul class="event-location mb-10">
                                                <li class="event-time"><i
                                                        class="far fa-clock text-theme-colored2 font-icon sm-display-block"></i>
                                                    04:00 am
                                                </li>
                                                <li class="event-address"><i
                                                        class="fas fa-map-marker-alt text-theme-colored2 font-icon sm-display-block"></i>
                                                    Broklyn Street 40, New York
                                                </li>
                                            </ul>
                                            <p class="mb-10">Dignissim cras tincidunt lorem ipsum is simply free text
                                                feugiat at augue. Id purus integer orci.</p>
                                            <a class="text-theme-colored2" href="#">Read More →</a>
                                        </div>
                                    </div>
                                    <div class="col"></div>
                                </div>
                            </div>
                            <div class="upcoming-events-current-style mb-10 mb-md-40">
                                <div class="row align-items-center">
                                    <div class="col-sm-3 pr-0 pr-sm-15">
                                        <div class="thumb">
                                            <img class="w-100" src="images/event/3.jpg" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="event-details p-15 pt-0 pb-0">
                                            <h5 class="media-heading text-uppercase mt-0 mb-0 mt-sm-15">Upcoming Event
                                                Title</h5>
                                            <ul class="event-location mb-10">
                                                <li class="event-time"><i
                                                        class="far fa-clock text-theme-colored2 font-icon sm-display-block"></i>
                                                    04:00 am
                                                </li>
                                                <li class="event-address"><i
                                                        class="fas fa-map-marker-alt text-theme-colored2 font-icon sm-display-block"></i>
                                                    Broklyn Street 40, New York
                                                </li>
                                            </ul>
                                            <p class="mb-10">Dignissim cras tincidunt lorem ipsum is simply free text
                                                feugiat at augue. Id purus integer orci.</p>
                                            <a class="text-theme-colored2" href="#">Read More →</a>
                                        </div>
                                    </div>
                                    <div class="col"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <h2 class="line-bottom line-bottom-theme-colored1">Why <span class="text-theme-colored1">Choose Us?</span>
                            </h2>
                            <p>The Cweren Law Firm is a recognized leader in landlord tenant representation throughout
                                Texas.The largest professional property.</p>
                            <div class="accordion tm-accordion accordion-classic accordion-theme-colored1"
                                 id="accordion500">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading501">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse501" aria-expanded="true"
                                                aria-controls="collapse501">
                                            <strong>Where do I find my Office product key?</strong>
                                        </button>
                                    </h2>
                                    <div id="collapse501" class="accordion-collapse collapse show"
                                         aria-labelledby="heading501" data-bs-parent="#accordion500">
                                        <div class="accordion-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading502">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse502"
                                                aria-expanded="false" aria-controls="collapse502">
                                            <strong>I am having trouble, what else should I do?</strong>
                                        </button>
                                    </h2>
                                    <div id="collapse502" class="accordion-collapse collapse"
                                         aria-labelledby="heading502" data-bs-parent="#accordion500">
                                        <div class="accordion-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading503">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse503"
                                                aria-expanded="false" aria-controls="collapse503">
                                            <strong>I need more information about Theme.</strong>
                                        </button>
                                    </h2>
                                    <div id="collapse503" class="accordion-collapse collapse"
                                         aria-labelledby="heading503" data-bs-parent="#accordion500">
                                        <div class="accordion-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Testimonial -->
        <section class="layer-overlay overlay-theme-colored2-9 bg-no-repeat bg-pos-center-center"
                 data-tm-bg-img="images/bg/bg2.jpg">
            <div class="container pt-90 pb-90">
                <div class="section-content">
                    <div class="row justify-content-md-center">
                        <div class="col-md-12 col-lg-8 col-xl-8">
                            <h2 class="text-white text-center mb-60">Our Happy Students say</h2>
                            <div
                                class="tm-sc-testimonials tm-sc-testimonials-carousel testimonial-style2-centered-aligned owl-dots-light-skin owl-dots-center testimonial-has-quote-icon">
                                <div class="owl-carousel owl-theme tm-owl-carousel-1col" data-nav="true"
                                     data-dots="true" data-autoplay="true" data-loop="true" data-duration="6000"
                                     data-smartspeed="300" data-margin="30" data-stagepadding="0">
                                    <div class="tm-carousel-item">
                                        <div class="tm-testimonial">
                                            <div class="testimonial-inner">
                                                <div class="testimonial-text-holder">
                                                    <div class="testimonial-image-holder mb-30">
                                                        <div class="author-thumb"><img width="75" height="75"
                                                                                       src="images/testimonials/3.jpg"
                                                                                       class="img-thumbnail rounded-circle"
                                                                                       alt=""/>
                                                        </div>
                                                    </div>
                                                    <div class="text-white author-text"> I feel very happy and be proud
                                                        to connect with this industry. I presume this is a very
                                                        productive and professional industry. I wish very good luck &
                                                        success for this industry
                                                    </div>
                                                    <div class="star-rating">
                                                        <span data-tm-width="90%"></span>
                                                    </div>
                                                </div>
                                                <div class="testimonial-author-details">
                                                    <div class="testimonial-author-info-holder">
                                                        <h5 class="text-white name">Catherine Grace</h5>
                                                        <span class="text-white job-position">Designer</span> <a
                                                            class="company-url" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tm-carousel-item">
                                        <div class="tm-testimonial">
                                            <div class="testimonial-inner">
                                                <div class="testimonial-text-holder">
                                                    <div class="testimonial-image-holder mb-30">
                                                        <div class="author-thumb"><img width="75" height="75"
                                                                                       src="images/testimonials/1.jpg"
                                                                                       class="img-thumbnail rounded-circle"
                                                                                       alt=""/>
                                                        </div>
                                                    </div>
                                                    <div class="text-white author-text"> I feel very happy and be proud
                                                        to connect with this industry. I presume this is a very
                                                        productive and professional industry. I wish very good luck &
                                                        success for this industry
                                                    </div>
                                                    <div class="star-rating">
                                                        <span data-tm-width="90%"></span>
                                                    </div>
                                                </div>
                                                <div class="testimonial-author-details">
                                                    <div class="testimonial-author-info-holder">
                                                        <h5 class="text-white name">Catherine Grace</h5>
                                                        <span class="text-white job-position">Designer</span> <a
                                                            class="company-url" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tm-carousel-item">
                                        <div class="tm-testimonial">
                                            <div class="testimonial-inner">
                                                <div class="testimonial-text-holder">
                                                    <div class="testimonial-image-holder mb-30">
                                                        <div class="author-thumb"><img width="75" height="75"
                                                                                       src="images/testimonials/2.jpg"
                                                                                       class="img-thumbnail rounded-circle"
                                                                                       alt=""/>
                                                        </div>
                                                    </div>
                                                    <div class="text-white author-text"> I feel very happy and be proud
                                                        to connect with this industry. I presume this is a very
                                                        productive and professional industry. I wish very good luck &
                                                        success for this industry
                                                    </div>
                                                    <div class="star-rating">
                                                        <span data-tm-width="90%"></span>
                                                    </div>
                                                </div>
                                                <div class="testimonial-author-details">
                                                    <div class="testimonial-author-info-holder">
                                                        <h5 class="text-white name">Catherine Grace</h5>
                                                        <span class="text-white job-position">Designer</span> <a
                                                            class="company-url" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: News -->
        <section class="bg-silver-light">
            <div class="container">
                <div class="section-title">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-60">
                                <div class="tm-sc tm-sc-section-title section-title">
                                    <div class="title-wrapper">
                                        <h2 class="text-uppercase line-bottom line-bottom-theme-colored1">Latest <span
                                                class="text-theme-colored1">News</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="tm-sc tm-sc-blog tm-sc-blog-masonry blog-style1-current-theme mb-lg-30">
                                <article class="post">
                                    <div class="entry-header">
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <div class="thumb"><img class="w-100" src="images/blog/1.jpg"
                                                                        alt="Image"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="entry-content">
                                        <div class="clearfix mb-15">
                                            <div class="entry-date media-left text-center">
                                                <ul>
                                                    <li class="font-16 text-white font-weight-600 border-bottom">28</li>
                                                    <li class="font-12 text-white text-uppercase">Feb</li>
                                                </ul>
                                            </div>
                                            <div class="overflow-hidden">
                                                <h5 class="entry-title"><a href="#" rel="bookmark">Things You Should</a>
                                                </h5>
                                                <div class="blog-meta">
                          <span class="admin-type mr-10">
                            <i class="far fa-user-circle text-theme-colored1"></i>
                          Admin
                          </span>
                                                    <span class="comments-type">
                            <i class="far fa-comments text-theme-colored1"></i>
                            2 Comments
                          </span>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mb-15">Lorem ipsum dolor sit am adipi sicing elit, sed do consulting
                                            firms Et leggings across the nation lipsim tempor.</p>
                                        <a href="#" target="_self" class="btn-plain-text-with-arrow"> Read More </a>
                                        <div class="clearfix"></div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="tm-sc tm-sc-blog tm-sc-blog-masonry blog-style1-current-theme mb-lg-30">
                                <article class="post">
                                    <div class="entry-header">
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <div class="thumb"><img class="w-100" src="images/blog/2.jpg"
                                                                        alt="Image"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="entry-content">
                                        <div class="clearfix mb-15">
                                            <div class="entry-date media-left text-center">
                                                <ul>
                                                    <li class="font-16 text-white font-weight-600 border-bottom">28</li>
                                                    <li class="font-12 text-white text-uppercase">Feb</li>
                                                </ul>
                                            </div>
                                            <div class="overflow-hidden">
                                                <h5 class="entry-title"><a href="#" rel="bookmark">Things You Should</a>
                                                </h5>
                                                <div class="blog-meta">
                          <span class="admin-type mr-10">
                            <i class="far fa-user-circle text-theme-colored1"></i>
                          Admin
                          </span>
                                                    <span class="comments-type">
                            <i class="far fa-comments text-theme-colored1"></i>
                            2 Comments
                          </span>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mb-15">Lorem ipsum dolor sit am adipi sicing elit, sed do consulting
                                            firms Et leggings across the nation lipsim tempor.</p>
                                        <a href="#" target="_self" class="btn-plain-text-with-arrow"> Read More </a>
                                        <div class="clearfix"></div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="tm-sc tm-sc-blog tm-sc-blog-masonry blog-style1-current-theme mb-lg-30">
                                <article class="post">
                                    <div class="entry-header">
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <div class="thumb"><img class="w-100" src="images/blog/3.jpg"
                                                                        alt="Image"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="entry-content">
                                        <div class="clearfix mb-15">
                                            <div class="entry-date media-left text-center">
                                                <ul>
                                                    <li class="font-16 text-white font-weight-600 border-bottom">28</li>
                                                    <li class="font-12 text-white text-uppercase">Feb</li>
                                                </ul>
                                            </div>
                                            <div class="overflow-hidden">
                                                <h5 class="entry-title"><a href="#" rel="bookmark">Things You Should</a>
                                                </h5>
                                                <div class="blog-meta">
                          <span class="admin-type mr-10">
                            <i class="far fa-user-circle text-theme-colored1"></i>
                          Admin
                          </span>
                                                    <span class="comments-type">
                            <i class="far fa-comments text-theme-colored1"></i>
                            2 Comments
                          </span>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mb-15">Lorem ipsum dolor sit am adipi sicing elit, sed do consulting
                                            firms Et leggings across the nation lipsim tempor.</p>
                                        <a href="#" target="_self" class="btn-plain-text-with-arrow"> Read More </a>
                                        <div class="clearfix"></div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Start Divider -->
        <section class="bg-theme-colored1">
            <div class="container pt-15 pb-15">
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="tm-sc tm-sc-clients tm-sc-clients-carousel owl-dots-light-skin owl-dots-center">
                                <div class="owl-carousel owl-theme tm-owl-carousel-6col" data-autoplay="true"
                                     data-loop="true" data-duration="6000" data-smartspeed="300" data-margin="30"
                                     data-stagepadding="0" data-laptop="4">
                                    <div class="item"><a target="_blank" href="#"> <img src='images/clients/w1.png'
                                                                                        alt='Image'/> </a></div>
                                    <div class="item"><a target="_blank" href="#"> <img src='images/clients/w2.png'
                                                                                        alt='Image'/> </a></div>
                                    <div class="item"><a target="_blank" href="#"> <img src='images/clients/w3.png'
                                                                                        alt='Image'/> </a></div>
                                    <div class="item"><a target="_blank" href="#"> <img src='images/clients/w4.png'
                                                                                        alt='Image'/> </a></div>
                                    <div class="item"><a target="_blank" href="#"> <img src='images/clients/w5.png'
                                                                                        alt='Image'/> </a></div>
                                    <div class="item"><a target="_blank" href="#"> <img src='images/clients/w6.png'
                                                                                        alt='Image'/> </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->
@stop
