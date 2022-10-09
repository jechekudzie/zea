@extends('layouts.admin')

@push('head')
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('/dashboard/vendors/datatables.net-bs5/dataTables.bootstrap5.css')}}">
    <!-- End plugin css for this page -->
@endpush
@section('content')

    <div class="page-content">

        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">Welcome {{ $member->title->name }} {{ $member->name }}</h4>
                <h5 class="mb-3 mb-md-0">Registration number: {{ $member->member_registration_number }}</h5>
            </div>
            <div class="d-flex align-items-center flex-wrap text-nowrap">
                <a href="{{url('/members/subscriptions')}}"
                   class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
                    <i class="btn-icon-prepend" data-feather="plus"></i>
                    Subscribe
                </a>
            </div>
        </div>

        <div class="row profile-body">
            <!-- left wrapper start -->
            <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
                <div class="card rounded">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <h6 class="card-title mb-0">About</h6>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    Edit <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                            data-feather="edit-2" class="icon-sm me-2"></i> <span
                                            class="">Edit</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                            data-feather="git-branch" class="icon-sm me-2"></i> <span
                                            class="">Update</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                            data-feather="eye" class="icon-sm me-2"></i> <span class="">View all</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Member Category:</label>
                            <p class="text-muted">{{$member->member_category->name}}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">DOb:</label>
                            <p class="text-muted">{{$member->dob}}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Identification:</label>
                            <p class="text-muted">{{$member->identification_type->name}}<br/>
                                {{$member->identification_type->description}} :{{$member->identification}}
                            </p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Gender:</label>
                            <p class="text-muted">{{$member->gender->name}}</p>
                        </div>
                        <div class="mt-3 d-flex social-links">

                        </div>
                    </div>
                </div>
            </div>
            <!-- left wrapper end -->
            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-8 middle-wrapper">

                <div class="row">
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
                    <form method="post" action="{{url('/members/subscriptions/'.$member->id.'/store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-lg-6 mb-3">
                                <label for="categorySelect" class="form-label">Choose renewal period</label>
                                <select class="form-select" name="period" id="categorySelect">
                                    <option value="">Choose renewal period</option>
                                    @for($x = date('Y') - 1; $x <= date('Y') +5; $x++)
                                        <option value="{{$x}}">{{$x}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-md-6 col-lg-6 mb-3">
                                <label for="name" class="form-label">Amount  invoiced</label>
                                <input id="name" class="form-control" value="{{$amount_invoiced}}" name="amount_invoiced" type="number" step="any">
                            </div>
                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-success btn-block">Make Payment</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- middle wrapper end -->

        </div>


    </div>

@stop

@push('scripts')
    <!-- Plugin js for this page -->
    <script src="{{asset('/dashboard/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{asset('/dashboard/vendors/datatables.net-bs5/dataTables.bootstrap5.js')}}"></script>
    <!-- End plugin js for this page -->

    <!-- Custom js for this page -->
    <script src="{{asset('/dashboard/js/data-table.js')}}"></script>
    <!-- End custom js for this page -->
@endpush
