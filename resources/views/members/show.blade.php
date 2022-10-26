@extends('layouts.member_layout')

@push('head')
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('/dashboard/vendors/datatables.net-bs5/dataTables.bootstrap5.css')}}">
    <!-- End plugin css for this page -->
@endpush
@section('content')

    <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
            <ul class="nav nav-tabs nav-tabs-line" id="lineTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-line-tab" data-bs-toggle="tab" href="#home" role="tab"
                       aria-controls="home" aria-selected="true">Subscriptions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-line-tab" data-bs-toggle="tab" href="#profile" role="tab"
                       aria-controls="profile" aria-selected="false">Institutional members</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-line-tab" data-bs-toggle="tab" href="#contact" role="tab"
                       aria-controls="contact" aria-selected="false">Payments</a>
                </li>

            </ul>
            <div class="tab-content mt-3" id="lineTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel"
                     aria-labelledby="home-line-tab">
                    <div style="padding-bottom: 15px;" class="d-flex align-items-center flex-wrap text-nowrap">
                        <a href="{{url('/members/subscriptions/'.$member->id.'/create')}}"
                           class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
                            <i class="btn-icon-prepend" data-feather="plus"></i>
                            Make Subscription Payment
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                            <tr>
                                <th>Period</th>
                                <th>Certificate</th>
                                <th>Compliance</th>
                                <th>Balance</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($member->member_subscriptions->count() > 0)
                                @foreach($member->member_subscriptions as $subscription)
                                    <tr>
                                        <td>{{$subscription->period}}</td>
                                        <td>
                                            Certificate
                                        </td>
                                        <td>{{$subscription->compliance_status->name}}</td>
                                        <td>Balance ${{$subscription->payments->sum('balance')}}</td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-line-tab">P
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-line-tab">G
                </div>
                <div class="tab-pane fade" id="disabled" role="tabpanel" aria-labelledby="disabled-line-tab">
                    D
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
