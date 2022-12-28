@extends('layouts.member_layout')

@push('head')
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('/dashboard/vendors/datatables.net-bs5/dataTables.bootstrap5.css')}}">
    <!-- End plugin css for this page -->
@endpush
@section('content')

    <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">

            <form method="post" action="{{url('/members/subscriptions/'.$member->id.'/payment_details')}}"
                  enctype="multipart/form-data">
                @csrf
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
                                        <h4 class="text-end fw-normal">$USD {{$amount_invoiced}}</h4>
                                        <h4 class="text-end fw-normal">$ZWL {{$amount_invoiced * $current_rate}}</h4>
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
                                                <th class="text-end">$USD Amount</th>
                                                <th class="text-end">$ZWL Amount</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="text-end">
                                                <td class="text-start">1</td>
                                                <td class="text-start">Annual fee</td>
                                                <td>${{$subscription_fee}}</td>
                                                <td>${{$subscription_fee * $current_rate}}</td>
                                            </tr>
                                            <tr class="text-end">
                                                <td class="text-start">2</td>
                                                <td class="text-start">Balance</td>
                                                <td>${{$balance}}</td>
                                                <td>${{$balance * $current_rate}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="container-fluid mt-5 w-100">
                            		<div class="row">
                            			 <div class="col-md-12">
                            			    <h6>Banking Details</h6>
                            					<div class="tm-sc-unordered-list list-style-square mt-10 mb-30">
                            					  <ul>
                            						<li><span class="font-weight-600 text-black-222">Account Name: </span>Zimbabwe Evaluation Associaton</li>
                            						<li><span class="font-weight-600 text-black-222">Account Number USD FCA Nostro: </span>11990185079</li>
                            						<li><span class="font-weight-600 text-black-222">Branch Code: </span>18107</li>
                            					  </ul>
                            					</div>
                            			  </div>
                            		</div>
                            	</div>
                                
                                 <div class="container-fluid mt-5 w-100">
                                    <div class="row">
                                        <div class="col-md-6 ms-auto">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <td>$USD Total</td>
                                                        <td class="text-end">$ {{$amount_invoiced}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold-800">$ZWL Total</td>
                                                        <td class="text-bold-800 text-end">
                                                            $ {{$amount_invoiced * $current_rate}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-danger text-end">

                                                            <select class="form-select block mt-1 w-full"
                                                                    name="payment_method_id"
                                                                    id="categorySelect">
                                                                <option value="">Choose payment method</option>
                                                                @foreach($payment_methods as $payment_method)
                                                                    <option
                                                                        value="{{$payment_method->id}}">{{$payment_method->name}}</option>
                                                                @endforeach
                                                            </select>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-danger text-end">

                                                            <select class="form-select block mt-1 w-full"
                                                                    name="currency"
                                                                    id="categorySelect">
                                                                <option value="">Choose currency</option>
                                                                <option value="usd">$USD</option>
                                                                <option value="zwl">$ZWL</option>

                                                            </select>
                                                            <input type="hidden" name="amount_invoiced"
                                                                   value="{{$amount_invoiced}}">

                                                            <input type="hidden" name="current_rate"
                                                                   value="{{$current_rate}}">

                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="container-fluid w-100">

                                    <button type="submit" class="btn btn-outline-primary mt-4"><i
                                            class="me-2 icon-md"></i>Proceed With Payment Update
                                    </button>

                                    <a href="{{url('/members/'.$member->id)}}"
                                       class="btn btn-danger mt-4 ms-2"><i
                                            data-feather="send" class="me-3 icon-md"></i>Return back</a>
                                </div>
                            </div>
                        </div>
                    </div>
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
