@extends('layouts.member')

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
                        <div id="wizard">
                            <h2>Personal information</h2>
                            <section>
                                <h4>Personal information</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut nulla nunc.
                                    Maecenas arcu sem, hendrerit a tempor quis,
                                    sagittis accumsan tellus. In hac habitasse platea dictumst. Donec a semper dui.
                                    Nunc eget quam libero. Nam at felis metus.
                                    Nam tellus dolor, tristique ac tempus nec, iaculis quis nisi.</p>
                            </section>

                            <h2>Contact information</h2>
                            <section>
                                <h4>Contact information</h4>
                                <p>Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis
                                    diam ac ligula elementum pellentesque.
                                    In lobortis sollicitudin felis non eleifend. Morbi tristique tellus est, sed
                                    tempor elit. Morbi varius, nulla quis condimentum
                                    dictum, nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer
                                    hendrerit sapien a diam adipiscing consectetur.
                                    In euismod augue ullamcorper leo dignissim quis elementum arcu porta. Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit.
                                    Vestibulum leo velit, blandit ac tempor nec, ultrices id diam. Donec metus
                                    lacus, rhoncus sagittis iaculis nec, malesuada a diam.
                                    Donec non pulvinar urna. Aliquam id velit lacus.</p>
                            </section>

                            <h2>Employment information</h2>
                            <section>
                                <h4>Employment information</h4>
                                <p>Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl
                                    at justo condimentum dapibus. Fusce eros justo,
                                    pellentesque non euismod ac, rutrum sed quam. Ut non mi tortor. Vestibulum
                                    eleifend varius ullamcorper. Aliquam erat volutpat.
                                    Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui
                                    commodo lectus sollicitudin in auctor mauris
                                    venenatis.</p>
                            </section>

                            <h2>Terms & Conditions</h2>
                            <section>
                                <h4>Terms & Conditions</h4>
                                <p>Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere
                                    mauris vehicula vulputate. Aliquam sed sem tortor.
                                    Quisque sed felis ut mauris feugiat iaculis nec ac lectus. Sed consequat
                                    vestibulum purus, imperdiet varius est pellentesque vitae.
                                    Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut
                                    commodo tortor.</p>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Validation</h4>
                        <p class="text-muted mb-3">Read the <a href="https://jqueryvalidation.org/" target="_blank"> Official jQuery Validation Documentation </a>for a full list of instructions and other options.</p>
                        <form id="signupForm">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input id="name" class="form-control" name="name" type="text">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" class="form-control" name="email" type="email">
                            </div>
                            <div class="mb-3">
                                <label for="ageSelect" class="form-label">Age</label>
                                <select class="form-select" name="age_select" id="ageSelect">
                                    <option selected disabled>Select your age</option>
                                    <option>12-18</option>
                                    <option>18-22</option>
                                    <option>22-30</option>
                                    <option>30-60</option>
                                    <option>Above 60</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Gender</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="gender_radio" id="gender1">
                                        <label class="form-check-label" for="gender1">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="gender_radio" id="gender2">
                                        <label class="form-check-label" for="gender2">
                                            Female
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="gender_radio" id="gender3">
                                        <label class="form-check-label" for="gender3">
                                            Other
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Skills</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" name="skill_check" class="form-check-input" id="checkInline1">
                                        <label class="form-check-label" for="checkInline1">
                                            Angular
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" name="skill_check" class="form-check-input" id="checkInline2">
                                        <label class="form-check-label" for="checkInline2">
                                            ReactJs
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" name="skill_check" class="form-check-input" id="checkInline3">
                                        <label class="form-check-label" for="checkInline3">
                                            VueJs
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" class="form-control" name="password" type="password">
                            </div>
                            <div class="mb-3">
                                <label for="confirm_password" class="form-label">Confirm password</label>
                                <input id="confirm_password" class="form-control" name="confirm_password" type="password">
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <label class="form-check-label" for="termsCheck">
                                        Agree to <a href="#"> terms and conditions </a>
                                    </label>
                                    <input type="checkbox" class="form-check-input" name="terms_agree" id="termsCheck">
                                </div>
                            </div>
                            <input class="btn btn-primary" type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Bootstrap MaxLength</h4>
                        <p class="text-muted mb-3">Read the <a href="https://github.com/mimo84/bootstrap-maxlength" target="_blank"> Official Bootstrap MaxLength Documentation </a>for a full list of instructions and other options.</p>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="defaultconfig" class="col-form-label">Default usage</label>
                            </div>
                            <div class="col-lg-8">
                                <input class="form-control" maxlength="25" name="defaultconfig" id="defaultconfig" type="text" placeholder="Type Something..">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="defaultconfig-2" class="col-form-label">Few options</label>
                            </div>
                            <div class="col-lg-8">
                                <input class="form-control" maxlength="20" name="defaultconfig-2" id="defaultconfig-2" type="text" placeholder="Type Something..">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="defaultconfig-3" class="col-form-label">All the options</label>
                            </div>
                            <div class="col-lg-8">
                                <input class="form-control" maxlength="10" name="defaultconfig-3" id="defaultconfig-3" type="text" placeholder="Type Something..">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label for="defaultconfig-4" class="col-form-label">Text Area</label>
                            </div>
                            <div class="col-lg-8">
                                <textarea id="maxlength-textarea" class="form-control" id="defaultconfig-4" maxlength="100" rows="8" placeholder="This textarea has a limit of 100 chars."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Input Mask</h6>
                        <p class="text-muted mb-3">Read the <a href="https://github.com/RobinHerbots/Inputmask" target="_blank"> Official Inputmask Documentation </a>for a full list of instructions and other options.</p>
                        <form class="forms-sample">
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label">Date:</label>
                                    <input class="form-control mb-4 mb-md-0" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy"/>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Time (12 hour):</label>
                                    <input class="form-control" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="hh:mm tt" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Date time:</label>
                                    <input class="form-control mb-4 mb-md-0" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy HH:MM:ss" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Date with custom placeholder:</label>
                                    <input class="form-control" data-inputmask="'alias': 'datetime'" data-inputmask-placeholder="*" data-inputmask-inputformat="dd/mm/yyyy" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Phone:</label>
                                    <input class="form-control mb-4 mb-md-0" data-inputmask-alias="(+99) 9999-9999"/>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Credit card:</label>
                                    <input class="form-control" data-inputmask-alias="9999-9999-9999-9999"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Currency:</label>
                                    <input class="form-control mb-4 mb-md-0" data-inputmask="'alias': 'currency', 'prefix':'$'"/>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Serial key:</label>
                                    <input class="form-control" data-inputmask-alias="****-****-****-****"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Email:</label>
                                    <input class="form-control mb-4 mb-md-0" data-inputmask="'alias': 'email'"/>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Ip address:</label>
                                    <input class="form-control" data-inputmask="'alias': 'ip'"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Select 2</h4>
                        <p class="text-muted mb-3">Read the <a href="https://select2.org/" target="_blank"> Official Select2 Documentation </a>for a full list of instructions and other options.</p>
                        <div class="mb-3">
                            <label class="form-label">Single select box using select 2</label>
                            <select class="js-example-basic-single form-select" data-width="100%">
                                <option value="TX">Texas</option>
                                <option value="NY">New York</option>
                                <option value="FL">Florida</option>
                                <option value="KN">Kansas</option>
                                <option value="HW">Hawaii</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Multiple select using select 2</label>
                            <select class="js-example-basic-multiple form-select" multiple="multiple" data-width="100%">
                                <option value="TX">Texas</option>
                                <option value="WY">Wyoming</option>
                                <option value="NY">New York</option>
                                <option value="FL">Florida</option>
                                <option value="KN">Kansas</option>
                                <option value="HW">Hawaii</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Typeahead</h4>
                        <p class="text-muted mb-3">Read the <a href="https://github.com/twitter/typeahead.js" target="_blank"> Official Typeahead.js Documentation </a>for a full list of instructions and other options.</p>
                        <div class="row">
                            <div class="col">
                                <label class="form-label">Basic</label>
                                <div id="the-basics">
                                    <input class="typeahead" type="text" placeholder="States of USA">
                                </div>
                            </div>
                            <div class="col">
                                <label class="form-label">Bloodhound</label>
                                <div id="bloodhound">
                                    <input class="typeahead" type="text" placeholder="States of USA">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Tags input</h6>
                        <p class="text-muted mb-3">Read the <a href="https://www.npmjs.com/package/jquery-tags-input" target="_blank"> Official jQuery-tags-input Documentation </a>for a full list of instructions and other options.</p>
                        <p class="mb-2">Type something to add a new tag</p>
                        <div>
                            <input name="tags" id="tags" value="New York,Texas,Florida,New Mexico" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Bootstrap color picker</h6>
                        <p class="text-muted mb-3">Read the <a href="https://itsjavi.com/bootstrap-colorpicker/" target="_blank"> Official Bootstrap-colorpicker Documentation </a>for a full list of instructions and other options.</p>
                        <div id="cp1" class="input-group mb-2" title="Using input value">
                            <input type="text" class="form-control" value="#DD0F20FF"/>
                            <span class="input-group-text colorpicker-input-addon"><i></i></span>
                        </div>
                        <div id="cp2" class="input-group mb-2" data-color="rgb(241, 138, 49)" title="Using data-color attribute in the colorpicker element">
                            <input type="text" class="form-control"/>
                            <span class="input-group-text colorpicker-input-addon"><i></i></span>
                        </div>
                        <div id="cp3" class="input-group" title="Using data-color attribute in the input">
                            <input type="text" class="form-control" data-color="hsl(56, 93%, 63%)"/>
                            <span class="input-group-text colorpicker-input-addon"><i></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Date picker</h6>
                        <p class="text-muted mb-3">Read the <a href="https://bootstrap-datepicker.readthedocs.io/en/latest/" target="_blank"> Official Bootstrap-datepicker Documentation </a>for a full list of instructions and other options.</p>
                        <div class="input-group date datepicker" id="datePickerExample">
                            <input type="text" class="form-control">
                            <span class="input-group-text input-group-addon"><i data-feather="calendar"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Time picker</h6>
                        <p class="text-muted mb-3">Read the <a href="https://tempusdominus.github.io/bootstrap-4/" target="_blank"> Official Tempus Dominus Documentation </a>for a full list of instructions and other options.</p>
                        <div class="input-group date timepicker" id="datetimepickerExample" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepickerExample"/>
                            <span class="input-group-text" data-target="#datetimepickerExample" data-toggle="datetimepicker"><i data-feather="clock"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 stretch-card grid-margin grid-margin-md-0">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Dropzone</h6>
                        <p class="text-muted mb-3">Read the <a href="https://www.dropzonejs.com/" target="_blank"> Official Dropzone.js Documentation </a>for a full list of instructions and other options.</p>
                        <form action="/file-upload" class="dropzone" id="exampleDropzone"></form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Dropify</h6>
                        <p class="text-muted mb-3">Read the <a href="https://github.com/JeremyFagis/dropify" target="_blank"> Official Dropify Documentation </a>for a full list of instructions and other options.</p>
                        <input type="file" id="myDropify"/>
                    </div>
                </div>
            </div>
        </div>



    </div>

@stop

@push('scripts')
    <!-- Plugin js for this page -->
    <script src="{{asset('dashboard/vendors/jquery-steps/jquery.steps.min.js')}}"></script>
    <!-- End plugin js for this page -->

    <!-- Custom js for this page -->
    <script src="{{asset('dashboard/js/wizard.js')}}"></script>
    <!-- End custom js for this page -->






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
@endpush
