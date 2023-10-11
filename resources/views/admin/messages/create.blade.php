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
                <h4 class="mb-3 mb-md-0">Create Mew Message</h4>
            </div>
            <div class="d-flex align-items-center flex-wrap text-nowrap">
                {{--<button type="button" class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
                    <i class="btn-icon-prepend" data-feather="printer"></i>
                    Print
                </button>--}}
                <a href="{{url('/admin/messages')}}" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                    <i class="btn-icon-prepend" data-feather="arrow-left"></i>
                    Back to messages
                </a>
            </div>
        </div>
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
        <form method="post" action="{{url('/admin/messages')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 col-lg-6 mb-3">
                    <label for="categorySelect" class="form-label">Membership category</label>
                    <select class="form-select" name="group" id="categorySelect">
                        <option value="">Choose Message Group</option>
                        <option value="subscribers">Subscribers</option>
                        <option value="members">ZEA Members Only</option>

                    </select>
                </div>
                <div class="col-md-12 col-lg-12 mb-3">
                    <label for="name" class="form-label">Subject </label>
                    <input id="name" class="form-control" name="subject" type="text" value="">
                </div>

                <div class="col-md-12 col-lg-12 mb-3">
                    <label for="name" class="form-label">File(s) </label>
                    <input id="name" class="form-control" name="file" type="file">
                </div>

                <div class="col-md-12 col-lg-12 mb-3">
                    <label for="name" class="form-label">Message Body</label>
                    <textarea class="form-control editor" name="body"></textarea>
                </div>
            </div>
            <div class="row">
                <button type="submit" class="btn btn-success btn-block">Add message</button>
            </div>
        </form>
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

    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>

    <script type="text/javascript">
        ClassicEditor
            .create(document.querySelector('.editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('.editor1'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
