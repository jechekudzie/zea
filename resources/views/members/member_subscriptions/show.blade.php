@extends('layouts.member_layout')

@push('head')
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('/dashboard/vendors/datatables.net-bs5/dataTables.bootstrap5.css')}}">
    <!-- End plugin css for this page -->
@endpush
@section('content')

    <div class="col-md-9 col-xl-9 middle-wrapper">
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

            <div style="margin: 10px;" class="card">
                <h3>{{$memberSubscription->member->name}}</h3>
                <div class="table-responsive">
                    <table id="paymeents" class="table">
                        <thead>
                        <tr>
                            <th>Amount invoiced</th>
                            <th>Amount paid</th>
                            <th>Currency</th>
                            <th>Balance</th>
                            <th>Payment method</th>
                            <th>Payment status</th>
                            <th>Reference</th>
                            <th>P.O.P</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($memberSubscription->payments->count() > 0)
                            @foreach($memberSubscription->payments as $payment)
                                <tr>
                                    <td>{{$payment->amount_invoiced}}</td>
                                    <td>{{$payment->amount_paid}}</td>
                                    <td>{{$payment->currency}}</td>
                                    <td>{{$payment->balance}}</td>
                                    <td>{{$payment->payment_method->name}}</td>
                                    <td>{{$payment->payment_status->name}}</td>
                                    <td>{{$payment->reference_number}}</td>
                                    <td>
                                        @if($payment->payment_method->name != 'cash')
                                            <a href="{{url($payment->proof_of_payment)}}" target="_blank">View POP</a>
                                        @else
                                            {{$payment->proof_of_payment}}
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>

                    @if(strtolower($memberSubscription->compliance_status->name) == 'compliant')

                        <div style="padding: 15px;" class="row">
                            <div class="col-md-12 col-lg-12 ">
                                <a href="{{url('/members/member_certificate/'.$memberSubscription->id)}}"
                                   class="btn btn-danger">Download Certificate </a>
                            </div>
                        </div>
                    @endif


                </div>

            </div>

            <div style="margin: 10px;" class="card">
                @role('Admin')
                <form style="margin: 15px;" method="post"
                      action="{{url('/members/subscriptions/'.$memberSubscription->id.'/verify_subscription')}}"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 col-lg-12 ">
                            <button type="submit" class="btn btn-success">Verify Subscription Payments</button>
                            <a href="{{url('/members/'.$memberSubscription->member->id)}}"
                               class="btn btn-danger">Return Back </a>
                        </div>
                    </div>
                </form>
                @endrole
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

    <script type="text/javascript">
        $(document).ready(function () {
            $('#paymeents').DataTable();
        });

        $(document).ready(function () {
            $('#institution_members').DataTable();
        });
    </script>
@endpush
