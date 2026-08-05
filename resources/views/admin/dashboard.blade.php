@extends('layouts.dashboard')
@section('adminContent')
        <section class="section">
            <div class="container-fluid mt-40">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="icon-card mb-30">
                            <div class="icon purple">
                                <i class="lni lni-cart-full"></i>
                            </div>
                            <div class="content">
                                <h5 class="mb-10">Programs</h5>
                                <h2 class="text-bold mb-10">{{$totalProgram}}</h2>
                            </div>
                        </div>
                        <!-- End Icon Cart -->
                    </div>
                    <!-- End Col -->
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="icon-card mb-30">
                            <div class="icon success">
                                <i class="lni lni-dollar"></i>
                            </div>
                            <div class="content">
                                <h5 class="mb-10">Teachers</h5>
                                <h2 class="text-bold mb-10">{{ $totalTeacher }}</h2>
                            </div>
                        </div>
                        <!-- End Icon Cart -->
                    </div>
                    <!-- End Col -->
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="icon-card mb-30">
                            <div class="icon primary">
                                <i class="lni lni-credit-cards"></i>
                            </div>
                            <div class="content">
                                <h5 class="mb-10">Activities</h5>
                                <h2 class="text-bold mb-10">{{ $totalActivity }}</h2>
                            </div>
                        </div>
                        <!-- End Icon Cart -->
                    </div>
                    <!-- End Col -->
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="icon-card mb-30">
                            <div class="icon orange">
                                <i class="lni lni-user"></i>
                            </div>
                            <div class="content">
                                <h5 class="mb-10">Posts</h5>
                                <h2 class="text-bold mb-10">{{ $totalPost }}</h2>
                            </div>
                        </div>
                        <!-- End Icon Cart -->
                    </div>
                    <!-- End Col -->
                </div>
            </div>
            <!-- end container -->
        </section>
@endsection