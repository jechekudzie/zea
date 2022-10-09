@extends('layouts.admin')

@push('head')
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('dashboard/vendors/jquery-steps/jquery.steps.css')}}">
    <!-- End plugin css for this page -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/dashboard/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="/dashboard/vendors/jquery-tags-input/jquery.tagsinput.min.css">
    <link rel="stylesheet" href="/dashboard/vendors/dropzone/dropzone.min.css">
    <link rel="stylesheet" href="/dashboard/vendors/dropify/dist/dropify.min.css">
    <link rel="stylesheet" href="/dashboard/vendors/bootstrap-colorpicker/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="/dashboard/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="/dashboard/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/dashboard/vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css">
    <!-- End plugin css for this page -->


@endpush
@section('content')

    <div class="page-content">

        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">Create ZEA membership</h4>
            </div>
            <div class="d-flex align-items-center flex-wrap text-nowrap">
                {{--<button type="button" class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
                    <i class="btn-icon-prepend" data-feather="printer"></i>
                    Print
                </button>--}}
                <a href="{{url('/members')}}" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                    <i class="btn-icon-prepend" data-feather="arrow-left"></i>
                    Back to members
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create membership</h4>
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
                        <form method="post" action="{{url('/members')}}" enctype="multipart/form-data">
                            @csrf
                            <div id="wizard" class="wizard">
                            <h2>Personal information</h2>
                            <section>
                                <h4>Personal information</h4>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 mb-3">
                                        <label class="form-label">Gender</label>
                                        <div>
                                            @foreach($genders as $gender)
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="gender_id"
                                                           value="{{$gender->id}}" id="gender1">
                                                    <label class="form-check-label" for="gender1">
                                                        {{$gender->name}}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                        <label class="form-label">Title</label>
                                        <div>
                                            @foreach($titles as $title)
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="title_id"
                                                           value="{{$title->id}} {{old('title_id') == $title->id ? 'checked='.'"checked"' : ''}}" id="title_id">
                                                    <label class="form-check-label" for="title_id">
                                                        {{$title->name}}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6 mb-3 ">
                                        <label for="name" class="form-label">Full name</label>
                                        <input id="name" class="form-control" name="name" value="{{old('name')}}" type="text">
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3 ">
                                        <label for="name" class="form-label">Date of birth</label>
                                        <input id="datePickerExample" class="form-control datepicker" name="dob" type="text">
                                    </div>

                                    <div class="col-md-6 col-lg-6 mb-3">
                                        <label for="ageSelect" class="form-label">Identification type</label>
                                        <select class="form-select" name="identification_type_id" id="ageSelect">
                                            <option value="">Identification type</option>
                                            @foreach($identification_types as $identification_type)
                                                <option
                                                    value="{{$identification_type->id}}">{{$identification_type->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                        <label for="name" class="form-label">Identification</label>
                                        <input id="name" class="form-control" name="identification" type="text">
                                    </div>

                                    <div class="col-md-6 col-lg-6 mb-3">
                                        <label for="ageSelect" class="form-label">Membership category</label>
                                        <select class="form-select" name="member_category_id" id="ageSelect">
                                            <option value="">Membership category</option>
                                            @foreach($member_categories as $member_category)
                                                <option
                                                    value="{{$member_category->id}}">{{$member_category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </section>

                            <h2>Contact information</h2>
                            <section>
                                <h4>Contact information</h4>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 mb-3">
                                        <label for="ageSelect" class="form-label">Select Province</label>
                                        <select class="form-select" name="province_id" id="province">
                                            <option value="">Province Name</option>
                                            @foreach($provinces as $province)
                                                <option
                                                    value="{{$province->id}}">{{$province->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                        <label for="ageSelect" class="form-label">Select City</label>
                                        <select class="form-select" name="city_id" id="city">
                                            <option value="">City Name</option>
                                            @foreach($cities as $city)
                                                <option
                                                    value="{{$city->id}}">{{$city->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                        <label for="name" class="form-label">Physical Address</label>
                                        <input id="name" class="form-control" name="physical_address" type="text">
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                        <label for="name" class="form-label">Contact Number</label>
                                        <input id="name" class="form-control" name="contactnumber" type="text">
                                    </div>
                                </div>
                            </section>

                            <h2>Employment information</h2>
                            <section>
                                <h4>Employment information</h4>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 mb-3">
                                        <label for="name" class="form-label">Company Name</label>
                                        <input id="name" class="form-control" name="company" type="text">
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                        <label for="name" class="form-label">Occupation</label>
                                        <input id="name" class="form-control" name="occupation" type="text">
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                        <label for="name" class="form-label">Position</label>
                                        <input id="name" class="form-control" name="position" type="text">
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                        <label for="name" class="form-label">Qualification</label>
                                        <input id="name" class="form-control" name="qualification" type="text">
                                    </div>

                                    <div class="col-md-6 col-lg-6 mb-3 ">
                                        <label for="name" class="form-label">Start Date</label>
                                        <input id="datePickerExample" class="form-control datepicker" name="start_date" type="text">
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3 ">
                                        <label for="name" class="form-label">End Date</label>
                                        <input id="datePickerExample" class="form-control datepicker" name="end_date" type="text">
                                    </div>

                                </div>
                            </section>

                            <h2>Terms & Conditions</h2>
                            <section>
                                <h4>Terms & Conditions</h4>
                                <p>ZEA Terms and conditions</p>
                            </section>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>


    </div>

@stop

@push('scripts')
    <!-- Plugin js for this page -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    {{--<script src="{{asset('dashboard/vendors/jquery-steps/jquery.steps.min.js')}}"></script>--}}
    <!-- End plugin js for this page -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.0.7/jquery.steps.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.0.7/jquery.steps.min.js"></script>

    <!-- Custom js for this page -->
    {{--<script src="{{asset('dashboard/js/wizard.js')}}"></script>--}}
    <!-- End custom js for this page -->

    <script type="text/javascript">
   $('.wizard').steps({
            headerTag: "h2",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            enableFinishButton: !1,
            onStepChanged: function (event, currentIndex, priorIndex) {
                if (currentIndex == 3) {
                    var $input = $('<input style="margin-left: 5px" type="submit" class="btn btn-primary" value="Add Member"/>');
                    $input.appendTo($('ul[aria-label=Pagination]'));
                } else {
                    $('ul[aria-label=Pagination] input[value="Add Member"]').remove();
                }
            }
        });

    </script>




    <!-- Plugin js for this page -->
    <script src="{{asset('/dashboard/vendors/jquery-validation/jquery.validate.min.js"')}}"></script>
    <script src="{{asset('/dashboard/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
    <script src="{{asset('/dashboard/vendors/inputmask/jquery.inputmask.min.js')}}"></script>
    <script src="{{asset('/dashboard/vendors/select2/select2.min.js')}}"></script>
    <script src="{{asset('/dashboard/vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
    <script src="{{asset('/dashboard/vendors/jquery-tags-input/jquery.tagsinput.min.js')}}"></script>
    <script src="{{asset('/dashboard/vendors/dropzone/dropzone.min.js')}}"></script>
    <script src="{{asset('/dashboard/vendors/dropify/dist/dropify.min.js')}}"></script>
    <script src="P{{asset('/dashboard/vendors/bootstrap-colorpicker/bootstrap-colorpicker.min.js')}}"></script>
    <script src="{{asset('/dashboard/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('/dashboard/vendors/moment/moment.min.js')}}"></script>
    <script src="{{asset('/dashboard/vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.js')}}"></script>


    <!-- Custom js for this page -->
    <script src="{{asset('/dashboard/js/form-validation.js')}}"></script>
    <script src="{{asset('/dashboard/js/bootstrap-maxlength.js')}}"></script>
    <script src="{{asset('/dashboard/js/inputmask.js')}}"></script>
    <script src="{{asset('/dashboard/js/select2.js')}}"></script>
    <script src="{{asset('    <script src=""></script>')}}"></script>
    <script src="{{asset('/dashboard/js/tags-input.js')}}"></script>
    <script src="{{asset('/dashboard/js/dropzone.js')}}"></script>
    <script src="{{asset('/dashboard/js/dropify.js')}}"></script>
    <script src="{{asset('/dashboard/js/bootstrap-colorpicker.js')}}"></script>
    <script src="{{asset('/dashboard/js/datepicker.js')}}"></script>
    <script src="{{asset('/dashboard/js/timepicker.js')}}"></script>
    <!-- End custom js for this page -->


    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(function () {
            $(".datepicker").datepicker({
                dateFormat: "yy-mm-dd"
            });
        });
    </script>
@endpush
