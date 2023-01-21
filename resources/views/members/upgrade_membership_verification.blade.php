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
            @if ($member_category != null)
                <div class="alert alert-primary dark alert-dismissible fade show" role="alert">
                    <strong>Message ! </strong>
                    <p>Member {{$member->name}} currently has membership category of
                        <strong>{{$member->member_category->name}}</strong> but wishes to upgrade/downgrade
                        to {{\App\Models\MemberCategory::find($member_category)->name}}.
                    </p>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div style="margin: 10px;" class="card">
                @role('Admin')
                <form style="margin: 15px;" method="post"
                      action="{{url('/members/upgrade_membership_verified/'.$member->id)}}"
                      enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" value="{{$member_category}}" name="member_category_id">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 ">
                            <button type="submit" class="btn btn-success">Verify Membership Upgrade/downgrade
                            </button>
                            <a href="{{url('/members/'.$member->id)}}"
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
