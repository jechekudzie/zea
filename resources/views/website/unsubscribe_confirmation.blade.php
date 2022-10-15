@extends('layouts.site')
@push('head')
    <link rel="stylesheet" href="{{asset('dashboard/datatables.net-bs5/dataTables.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/vendors/prismjs/themes/prism.css')}}">
@endpush

@section('content')
    <div class="main-content-area">

        <!-- Start main-content -->
        <div class="main-content-area">

            <!-- Section: page title -->
            <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center"
                     data-tm-bg-img="images/bg/bg1.jpg">
                <div class="container pt-50 pb-50">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2 class="title">Unsubscribe from receiving updates</h2>
                                <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                                    <div class="breadcrumbs">
                                        <span><a href="#" rel="home">home/</a></span>
                                        <span class="active">Unsubscribe</span>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="border-1px p-25">
                                <h4 class="text-theme-colored1 text-uppercase m-0">{{$subscriber->Is_subscribe == 1 ? 'Unsubscribe':'Subscribe'}} </h4>
                                <div class="line-bottom mb-30"></div>
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
                                @else
                                    <p>Sad to see you leave. You can always come back.</p>
                                @endif
                                <form id="appointment_form" name="appointment_form" class="mt-30" method="post"
                                      action=" {{$subscriber->Is_subscribe == 1 ? url('unsubscribe/'.$subscriber->id):url('/admin/subscribers')}} ">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="mb-3 mb-10">
                                                <input name="email" class="form-control" type="email"
                                                       value="{{$subscriber->email}}"
                                                       {{$subscriber->Is_subscribe == 1 ? 'disabled':''}} aria-required="true">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="mb-3 tm-sc-button mb-0 mt-20">
                                        @if($subscriber->Is_subscribe == 1)

                                            <button type="submit" class="btn btn-theme-colored1 btn-sm"> Yes</button>
                                            <a href="{{url('/')}}" type="submit" class="btn btn-theme-colored1 btn-sm">
                                                No </a>
                                        @else
                                            <button type="submit" class="btn btn-theme-colored1 btn-sm"> subscribe
                                            </button>
                                        @endif

                                    </div>
                                </form>
                                <!-- Appointment Form Validation-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
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
