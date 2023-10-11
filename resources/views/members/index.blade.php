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
                <h4 class="mb-3 mb-md-0">ZEA Members</h4>
            </div>
            {{--<div class="d-flex align-items-center flex-wrap text-nowrap">
                <a href="{{url('/members/create')}}" class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
                    <i class="btn-icon-prepend" data-feather="user"></i>
                    Add new member
                </a>
            </div>--}}
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Members</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                <tr>
                                    <th>Email</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Identification Number</th>
                                    <th>Registration number</th>
                                    <th>Compliance status</th>
                                    <th>Profile</th>
                                    <th>Delete</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($members as $member)
                                    <tr>
                                        <td>
                                            @if($member->user_member)
                                                {{$member->user_member->user->email}}
                                            @endif
                                        </td>
                                        <td>{{$member->name}}</td>
                                        <td>@if($member->member_category){{$member->member_category->name}}@endif</td>
                                        <td>{{$member->identification}}</td>
                                        <td>{{$member->member_registration_number}}</td>

                                        <td>
                                            @if($member->member_subscriptions->count() > 0)
                                                {{$member->member_subscriptions->last()->compliance_status->name}}
                                            @endif
                                        </td>

                                        <td><a href="{{url('/members/'.$member->id)}}" target="_blank">Profile</a></td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal{{$member->id}}">
                                                Delete
                                            </button>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        @foreach($members as $member)
                            <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{$member->id}}" tabindex="-1"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form method="post" action="{{url('/members/'.$member->id)}}">
                                            @method('DELETE')
                                            @csrf
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">DELETE MEMBER</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want too delete this member?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">
                                                        No
                                                    </button>
                                                    <button type="submit" class="btn btn-primary">Yes, Delete</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            @endforeach
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
