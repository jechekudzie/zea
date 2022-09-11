@extends('layouts.member')

@push('head')
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('/dashboard/vendors/datatables.net-bs5/dataTables.bootstrap5.css')}}">
    <!-- End plugin css for this page -->
@endpush
@section('content')

    <div class="page-content">

        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
            </div>
            <div class="d-flex align-items-center flex-wrap text-nowrap">
                <a href="{{url('/members/create')}}" class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
                    <i class="btn-icon-prepend" data-feather="user"></i>
                    Add new member
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-xl-12 stretch-card">
                <div class="row flex-grow-1">
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">New Customers</h6>
                                    <div class="dropdown mb-2">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i>
                                                <span class="">View</span></a>
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="javascript:;"><i data-feather="edit-2"
                                                                      class="icon-sm me-2"></i> <span
                                                    class="">Edit</span></a>
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i>
                                                <span class="">Delete</span></a>
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="javascript:;"><i data-feather="printer"
                                                                      class="icon-sm me-2"></i> <span
                                                    class="">Print</span></a>
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="javascript:;"><i data-feather="download"
                                                                      class="icon-sm me-2"></i> <span
                                                    class="">Download</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-2">3,897</h3>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-success">
                                                <span>+3.3%</span>
                                                <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-xl-7">
                                        <div id="customersChart" class="mt-md-3 mt-xl-0"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">New Orders</h6>
                                    <div class="dropdown mb-2">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i>
                                                <span class="">View</span></a>
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="javascript:;"><i data-feather="edit-2"
                                                                      class="icon-sm me-2"></i> <span
                                                    class="">Edit</span></a>
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i>
                                                <span class="">Delete</span></a>
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="javascript:;"><i data-feather="printer"
                                                                      class="icon-sm me-2"></i> <span
                                                    class="">Print</span></a>
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="javascript:;"><i data-feather="download"
                                                                      class="icon-sm me-2"></i> <span
                                                    class="">Download</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-2">35,084</h3>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-danger">
                                                <span>-2.8%</span>
                                                <i data-feather="arrow-down" class="icon-sm mb-1"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-xl-7">
                                        <div id="ordersChart" class="mt-md-3 mt-xl-0"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Growth</h6>
                                    <div class="dropdown mb-2">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton2"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i>
                                                <span class="">View</span></a>
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="javascript:;"><i data-feather="edit-2"
                                                                      class="icon-sm me-2"></i> <span
                                                    class="">Edit</span></a>
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i>
                                                <span class="">Delete</span></a>
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="javascript:;"><i data-feather="printer"
                                                                      class="icon-sm me-2"></i> <span
                                                    class="">Print</span></a>
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="javascript:;"><i data-feather="download"
                                                                      class="icon-sm me-2"></i> <span
                                                    class="">Download</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-2">89.87%</h3>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-success">
                                                <span>+2.8%</span>
                                                <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-xl-7">
                                        <div id="growthChart" class="mt-md-3 mt-xl-0"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- row -->

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Members</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Identification Number</th>
                                    <th>Compliance</th>
                                    <th>Balance</th>
                                    <th>Profile</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($members as $member)
                                    <tr>
                                        <td>{{$member->name}}</td>
                                        <td>@if($member->member_category){{$member->member_category->name}}@endif</td>
                                        <td>{{$member->identification}}</td>
                                        <td>Non-compliance</td>
                                        <td>0.00</td>
                                        <td><a href="{{url('/members/'.$member->id)}}" target="_blank">Profile</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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
