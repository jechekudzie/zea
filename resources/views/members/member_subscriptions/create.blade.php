@extends('layouts.member_layout')

@push('head')
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('/dashboard/vendors/datatables.net-bs5/dataTables.bootstrap5.css')}}">
    <!-- End plugin css for this page -->
@endpush
@section('content')

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
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="container-fluid d-flex justify-content-between">
                                <div class="col-lg-3 ps-0">
                                    <a href="#" class="noble-ui-logo d-block mt-3"><img style="width: 150px;"
                                                                                        src="{{asset('logo.png')}}"/></a>
                                    <p>admin@zimevalassoc.org<br> +2263 779 970 322<br></p>
                                    <h5 class="mt-5 mb-2 text-muted">Invoice to :</h5>
                                    <p>{{$member->name}}
                                        <br> @if($member->member_contact){{$member->member_contact->physical_address}}@endif
                                        <br> @if($member->member_contact){{$member->member_contact->contact_email}}@endif
                                        <br> @if($member->member_contact){{$member->member_contact->contact_number}}@endif
                                </div>
                                <div class="col-lg-3 pe-0">
                                    <h4 class="fw-bolder text-uppercase text-end mt-4 mb-2">Bill</h4>
                                    <p class="text-end mb-1">Amount Invoiced</p>
                                    <h4 class="text-end fw-normal">$ {{$amount_invoiced}}</h4>
                                    <h6 class="mb-0 mt-3 text-end fw-normal mb-2"><span class="text-muted">Billing Date :</span>
                                        {{date('d/m/Y')}}
                                    </h6>
                                </div>
                            </div>
                            <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                                <div class="table-responsive w-100">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Description</th>
                                            <th class="text-end">Amount</th>
                                            <th class="text-end">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="text-end">
                                            <td class="text-start">1</td>
                                            <td class="text-start">Annual fee</td>
                                            <td>${{$subscription_fee}}</td>
                                            <td>${{$subscription_fee}}</td>
                                        </tr>
                                        <tr class="text-end">
                                            <td class="text-start">2</td>
                                            <td class="text-start">Balance</td>
                                            <td>${{$balance}}</td>
                                            <td>${{$balance}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="container-fluid mt-5 w-100">
                                <div class="row">
                                    <div class="col-md-6 ms-auto">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <td>Sub Total</td>
                                                    <td class="text-end">$ {{$amount_invoiced}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold-800">Total</td>
                                                    <td class="text-bold-800 text-end"> $ {{$amount_invoiced}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-danger text-end">

                                                        <select class="form-select block mt-1 w-full" name="period"
                                                                id="categorySelect">
                                                            <option value="">Choose currency</option>
                                                            @for($x = date('Y') - 1; $x <= date('Y') +5; $x++)
                                                                <option value="{{$x}}">{{$x}}</option>
                                                            @endfor
                                                        </select>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-danger text-end">

                                                        <select class="form-select block mt-1 w-full" name="period"
                                                                id="categorySelect">
                                                            <option value="">Choose payment method</option>
                                                            @for($x = date('Y') - 1; $x <= date('Y') +5; $x++)
                                                                <option value="{{$x}}">{{$x}}</option>
                                                            @endfor
                                                        </select>

                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid w-100">
                                <a href="javascript:;" class="btn btn-primary float-end mt-4 ms-2"><i
                                        data-feather="send" class="me-3 icon-md"></i>Send Invoice</a>
                                <a href="javascript:;" class="btn btn-outline-primary float-end mt-4"><i
                                        data-feather="printer" class="me-2 icon-md"></i>Print</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form method="post" action="{{url('/members/subscriptions/'.$member->id.'/store')}}"
                  enctype="multipart/form-data">
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
                        <label for="name" class="form-label">Amount invoiced</label>
                        <input id="name" class="form-control" value="{{$amount_invoiced}}"
                               name="amount_invoiced" readonly type="number" step="any">
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-success btn-block">Make Payment</button>
                </div>
            </form>
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
