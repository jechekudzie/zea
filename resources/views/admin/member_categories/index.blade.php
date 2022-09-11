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
                <h4 class="mb-3 mb-md-0">Member categories</h4>
            </div>
            <div class="d-flex align-items-center flex-wrap text-nowrap">
                <a href="{{url('/admin/member_categories/create')}}" class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
                    <i class="btn-icon-prepend" data-feather="user"></i>
                    Add member category fees
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Fees</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                <tr>
                                    <th>Category Name</th>
                                    <th>Members</th>
                                    <th>Edit</th>
                                    <th>View</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($member_categories as $member_category)
                                    <tr>
                                        <td>{{$member_category->name}}</td>
                                        <td>Members ( {{$member_category->members->count()}} )</td>
                                        <td><a href="{{url('/admin/member_categories/'.$member_category->id.'/edit')}}">Edit</a></td>
                                        <td><a href="{{url('/admin/member_categories/'.$member_category->id)}}">View</a></td>
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
