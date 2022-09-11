@extends('layouts.admin')
@push('head')
    <link rel="stylesheet" href="{{asset('backend/datatables.net-bs5/dataTables.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/prismjs/themes/prism.css')}}">
@endpush

@section('content')
    <div class="page-wrapper">

        <div class="page-content">
            <div class="page-content">
                <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                    <div>
                        <h4 class="mb-3 mb-md-0">Users -> {{$user->name}}</h4>

                    </div>
                    <div class="d-flex align-items-center flex-wrap text-nowrap">

                        <a style="" href="{{url('/admin/users')}}"
                           class="btn btn-primary btn-icon-text me-2 mb-2 mb-md-0">
                            <i class="btn-icon-prepend" data-feather="corner-up-left"></i>
                            Back
                        </a>

                        <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0"
                                data-bs-toggle="modal" data-bs-target="#delete">
                            <i class="btn-icon-prepend" data-feather="delete"></i>
                            Delete
                        </button>
                    </div>
                </div>

                <div class="row profile-body">
                    <!-- left wrapper start -->
                    <div class="d-none d-md-block col-md-3 col-xl-3 left-wrapper">
                        <div class="card rounded">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <h6 class="card-title mb-0">Full name</h6>
                                </div>
                                <p>{{$user->name}}</p>
                                <div class="mt-3">
                                    <label class="tx-11 fw-bolder mb-0 text-uppercase">Joined:</label>
                                    <p class="text-muted">{{date('Y-m-d', strtotime($user->created_at))}}</p>
                                </div>

                                <div class="mt-3">
                                    <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                                    <p class="text-muted">{{$user->email}}</p>
                                </div>
                                <div class="mt-3">
                                    <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
                                    <p class="text-muted">{{$user->phone_number}}</p>
                                </div>

                                <div class="mt-3">
                                    <label class="tx-11 fw-bolder mb-0 text-uppercase">User role:</label>
                                    <p class="text-muted">@if($user->hasRoles){{$user->getRoleNames()->first()}}@endif</p>
                                </div>
                                <div class="mt-3">
                                    <label class="tx-11 fw-bolder mb-0 text-uppercase">Registration:</label>
                                    <p class="text-muted">{{$user->provider}}</p>
                                </div>

                                <div class="mt-3">
                                    <label class="tx-11 fw-bolder mb-0 text-uppercase">Current Plan :</label>
                                    {{--<span> @if($current_plan == null) {{'No active subscription'}} <a
                                            href="{{url('/select_plan')}}"
                                            class="open-modal">Choose plan</a> @else{{$current_plan->package->name}} </span>
                                    <p><b>Price: {{$current_plan->package->price}}</b></p>
                                    <p><b>Expiry: {{date('Y-m-d', strtotime($current_plan->expiry_date))}}</b></p>
                                    @endif--}}
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- left wrapper end -->
                    <!-- middle wrapper start -->
                    <div class="col-md-9 col-xl-9 middle-wrapper">
                        <div class="row">
                            <div class="col-md-12  stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">ZEA subscriptions</h6>
                                        <div class="table-responsive">
                                            <!-- Session Status -->
                                            @if($errors->any())
                                                @include('errors')
                                            @endif
                                            @if (session('message'))
                                                <div class="alert alert-danger dark alert-dismissible fade show"
                                                     role="alert">
                                                    <strong>Message
                                                        ! </strong> {{session('message')}}
                                                    <button class="btn-close" type="button" data-bs-dismiss="alert"
                                                            aria-label="Close"></button>
                                                </div>
                                            @endif
                                            <form method="post" enctype="multipart/form-data"
                                                  action="{{url('/admin/users/'.$user->id)}}">
                                                @method('PATCH')
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h6 class="card-title">Update {{$user->name}} </h6>

                                                            <div class="mb-3">
                                                                <label for="colFormLabel"
                                                                       class="form-label">Name</label>
                                                                <input name="name" type="text" class="form-control"
                                                                       value="{{$user->name}}" id="colFormLabel">
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="colFormLabel"
                                                                       class="form-label">Email</label>
                                                                <input name="email" type="email" class="form-control"
                                                                       value="{{$user->email}}" id="colFormLabel">
                                                            </div>

                                                            <div class=" col-md-6 mb-3">
                                                                <label for="exampleFormControlSelect1"
                                                                       class="form-label">
                                                                    Role</label>
                                                                <select name="user_role" class="form-select"
                                                                        id="exampleFormControlSelect1">
                                                                    <option selected disabled>Select User Role</option>

                                                                    @foreach($roles as $role)
                                                                        <option
                                                                            value="{{$role->name}}"
                                                                        @if($user->roles){{$user->getRoleNames()->first() == $role->name ? 'selected':''}}@endif>
                                                                            {{$role->name}}
                                                                        </option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close
                                                    </button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- middle wrapper end -->

                </div>

                <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
                     aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">{{$user->name}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="btn-close"></button>
                            </div>
                            <form method="post" enctype="multipart/form-data"
                                  action="{{url('/admin/users/' .$user->id)}}">
                                @csrf
                                @method('DELETE')
                                <div class="modal-body">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">Delete {{$user->name}} ? </h6>

                                            <div aria-labelledby="swal2-title" aria-describedby="swal2-html-container"
                                                 class="swal2-popup swal2-modal swal2-icon-warning swal2-show"
                                                 tabindex="-1"
                                                 role="dialog" aria-live="assertive" aria-modal="true"
                                                 style="display: grid;">

                                                <img class="swal2-image" style="display: none;">
                                                <h2 class="swal2-title" id="swal2-title" style="display: block;">Are you
                                                    sure you want to delete user {{$user->name}} ({{$user->email}}
                                                    )?</h2>
                                                <div class="swal2-html-container" id="swal2-html-container"
                                                     style="display: block;">You won't be able to revert this!
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Yes</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>

                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>

            <!-- partial:../../partials/_footer.html -->
            <footer class="footer border-top">
                <div
                    class="container d-flex flex-column flex-md-row align-items-center justify-content-between py-3 small">
                    <p class="text-muted mb-1 mb-md-0">Copyright © 2022 <a href="https://www.nobleui.com"
                                                                           target="_blank">NobleUI</a>.</p>
                    <p class="text-muted">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm"
                                                              data-feather="heart"></i></p>
                </div>
            </footer>
            <!-- partial -->

        </div>

        @stop

        @push('scripts')
            <script src="{{asset('backend/vendors/datatables.net/jquery.dataTables.js')}}"></script>
            <script src="{{asset('backend/vendors/datatables.net-bs5/dataTables.bootstrap5.js')}}"></script>
            <script src="{{asset('backend/js/data-table.js')}}"></script>


            <script src="{{asset('backend/vendors/prismjs/prism.js')}}"></script>
            <script src="{{asset('backend/vendors/clipboard/clipboard.min.js')}}"></script>

    @endpush

