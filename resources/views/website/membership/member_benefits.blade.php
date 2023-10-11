@extends('layouts.site')
@push('head')
    <link rel="stylesheet" href="{{asset('dashboard/datatables.net-bs5/dataTables.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/vendors/prismjs/themes/prism.css')}}">
@endpush

@section('content')
<div class="main-content-area">
    <div class="container-fluid">
        <Section>

                <div class="col-md-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h2 class="text-uppercase mt-0 font-weight-600">ZEA MEMBERSHIP BENEFITS</h2>
                    <p class="text-gray-dimgray font-italic">By becoming a Member of the Zimbabwe Evaluation Association, you join a community of practice of over 180 professional evaluators working to improve the evaluation profession in Zimbabwe.By becoming a member of ZEA, you will enjoy the following</p>
                    <!--<a href="#" class="btn btn-flat btn-theme-colored1 text-uppercase mt-20 mb-sm-30 border-left-theme-colored2-4px">Read More</a>-->
            </div>

        </Section>
        <section>
            <div class="row mb-50">
                <div class="col-sm-12">
                <h3>Benefits</h3>
                <div class="row">
                    <div class="col-sm-4">
                    <p class="tm-sc-dropcaps  dropcaps-empty"> <span class="dropcaps text-theme-colored2">A</span>utomatically become a member of the Africa Evaluation Association and International Organization for Cooperation in Evaluation and become eligible for member discounts for their trainings and conference.</p>
                    </div>
                    <div class="col-sm-4">
                    <p class="tm-sc-dropcaps  dropcaps-empty"> <span class="dropcaps text-theme-colored1">W</span>hen you join ZEA, you become a member of a vibrant community of practice that includes EvalYouth, EvalGender, EvalParliamentarians, university students, consulting firms, and highly networked individuals</p>
                    </div>
                    <div class="col-sm-4">
                    <p class="tm-sc-dropcaps  dropcaps-empty"> <span class="dropcaps text-theme-colored2">Y</span>ou will stay informed and access the latest in training and professional development courses on evaluation.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                    <p class="tm-sc-dropcaps dropcaps-fill"> <span class="dropcaps">A</span>ccess to exclusive networking opportunities to engage with colleagues.</p>
                    </div>
                    <!--<div class="col-sm-4">
                    <p class="tm-sc-dropcaps dropcaps-fill"> <span class="dropcaps">H</span>abitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante sit amet quam egestas .</p>
                    </div>
                    <div class="col-sm-4">
                    <p class="tm-sc-dropcaps dropcaps-fill"> <span class="dropcaps">D</span>enectus ellentesque habitant morbi tristique et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante sit amet quam egestas .</p>
                    </div>-->
                </div>
                </div>
            </div>
        </section>
    </div>
</div>
@stop

@push('scripts')
    <script src="{{asset('dashboard/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{asset('dashboard/vendors/datatables.net-bs5/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('dashboard/js/data-table.js')}}"></script>


    <script src="{{asset('dashboard/vendors/prismjs/prism.js')}}"></script>
    <script src="{{asset('dashboard/vendors/clipboard/clipboard.min.js')}}"></script>

@endpush
