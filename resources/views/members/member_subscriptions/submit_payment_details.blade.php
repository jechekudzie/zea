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

            @if($payment_method->name == 'Cash')
                <div style="margin: 10px;" class="card">
                    <h3>CASH Payment</h3>
                    <p>message</p>
                    <form method="post"
                          action="{{url('/members/subscriptions/'.$member->id.'/submit_payment_details')}}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-lg-6 mb-3 ">
                                <label for="name" class="form-label">Amount invoiced</label>
                                <input type="text" class="form-control" name="amount_invoiced"
                                       value="{{$payment_details['amount_invoiced']}}" readonly>
                            </div>

                            <div class="col-md-6 col-lg-6 mb-3 ">
                                <label for="name" class="form-label">Amount paid</label>
                                <input type="text" class="form-control" name="amount_paid"
                                       value="{{$payment_details['amount_invoiced']}}" readonly>
                            </div>
                            <div class="col-md-6 col-lg-6 mb-3 ">
                                <label for="name" class="form-label">Currency</label>
                                <input value="{{$currency}}" class="form-control" disabled name="usd" type="text">
                            </div>
                            <input type="hidden" value="" name="reference_number">
                            <div class="col-md-12 col-lg-12 ">
                                <button type="submit" class="btn btn-success">Submit Payment</button>
                                <a href="{{url('/members/subscriptions/'.$member->id.'/create')}}"
                                   class="btn btn-danger">Return
                                    Back </a>
                            </div>
                        </div>
                    </form>
                </div>
            @endif

            @if($payment_method->name == 'Ecocash')
                <div style="margin: 10px;" class="card">
                    <h3>Ecocash Payment</h3>
                    <p>message</p>
                    <form method="post"
                          action="{{url('/members/subscriptions/'.$member->id.'/submit_payment_details')}}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-lg-6 mb-3 ">
                                <label for="name" class="form-label">Amount invoiced</label>
                                <input type="text" class="form-control" name="amount_invoiced"
                                       value="{{$payment_details['amount_invoiced']}}" readonly>
                            </div>

                            <div class="col-md-6 col-lg-6 mb-3 ">
                                <label for="name" class="form-label">Amount paid</label>
                                <input type="text" class="form-control" name="amount_paid"
                                       value="{{$payment_details['amount_invoiced']}}" readonly>
                            </div>
                            <div class="col-md-6 col-lg-6 mb-3 ">
                                <label for="name" class="form-label">Currency</label>
                                <input value="{{$currency}}" class="form-control" disabled name="usd" type="text">
                            </div>

                            <div class="col-md-6 col-lg-6 mb-3 ">
                                <label for="name" class="form-label">Phone number used</label>
                                <input class="form-control" name="reference_number" type="text">
                            </div>

                            <div class="col-md-6 col-lg-6 mb-3 ">
                                <label for="name" class="form-label">Ecocash Reference number (starts with MP*****)
                                    check
                                    the Ecocash message received after payment</label>
                                <input class="form-control" name="proof_of_payment" type="text">
                            </div>
                            <div class="col-md-12 col-lg-12 ">
                                <button type="submit" class="btn btn-success">Submit Payment</button>
                                <a href="{{url('/members/subscriptions/'.$member->id.'/create')}}"
                                   class="btn btn-danger">Return
                                    Back </a>
                            </div>
                        </div>
                    </form>
                </div>
            @endif

            @if($payment_method->name == 'Transfer')

                <div style="margin: 10px;" class="card">
                    <h3>Bank Transfer Payment</h3>
                    <p>message</p>
                    <form method="post"
                          action="{{url('/members/subscriptions/'.$member->id.'/submit_payment_details')}}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-lg-6 mb-3 ">
                                <label for="name" class="form-label">Amount invoiced</label>
                                <input type="text" class="form-control" name="amount_invoiced"
                                       value="{{$payment_details['amount_invoiced']}}" readonly>
                            </div>

                            <div class="col-md-6 col-lg-6 mb-3 ">
                                <label for="name" class="form-label">Amount paid</label>
                                <input type="text" class="form-control" name="amount_paid"
                                       value="{{$payment_details['amount_invoiced']}}" readonly>
                            </div>
                            <div class="col-md-6 col-lg-6 mb-3 ">
                                <label for="name" class="form-label">Currency</label>
                                <input value="{{$currency}}" class="form-control" disabled name="usd" type="text">
                            </div>
                            <div class="col-md-6 col-lg-6 mb-3 ">
                                <label for="name" class="form-label">Transaction reference number</label>
                                <input class="form-control" name="reference_number" type="text">
                            </div>

                            <div class="col-md-6 col-lg-6 mb-3 ">
                                <label for="name" class="form-label">Upload proof of payment</label>
                                <input class="form-control" name="proof_of_payment" type="file">
                            </div>
                            <div class="col-md-12 col-lg-12 ">
                                <button type="submit" class="btn btn-success">Submit Payment</button>
                                <a href="{{url('/members/subscriptions/'.$member->id.'/create')}}"
                                   class="btn btn-danger">Return
                                    Back </a>
                            </div>
                        </div>
                    </form>
                </div>
            @endif

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
