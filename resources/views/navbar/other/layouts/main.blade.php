@extends('layouts.app')
@section('content')
    <main>
        <!-- =======================
                            Page Banner START -->
        <section class="bg-primary bg-opacity-10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <!-- Title -->
                        <h1 class="display-6">Search Solution. Get Support</h1>
                        <p class="mb-0">Search here to get answers to your questions.</p>
                        <!-- Search bar -->
                        <form class="bg-body rounded p-2 mt-4">
                            <div class="input-group">
                                <input class="form-control border-0 me-1" type="text" placeholder="Search question...">
                                <button type="button" class="btn btn-dark mb-0 rounded">Search</button>
                            </div>
                        </form>

                        <!-- Popular questions START -->
                        <div class="row mt-4 align-items-center">
                            <div class="col-12">
                                <h5 class="mb-3">Popular questions</h5>
                                <!-- Questions List START -->
                                <div
                                    class="list-group list-group-horizontal gap-2 justify-content-center flex-wrap mb-0 border-0">
                                    <a class="btn btn-white btn-sm fw-light" href="help-center-detail.html"> How can we
                                        help?</a>
                                    <a class="btn btn-white btn-sm fw-light" href="help-center-detail.html"> How to upload
                                        data to the system? </a>
                                    <a class="btn btn-white btn-sm fw-light" href="help-center-detail.html"> Installation
                                        Guide? </a>
                                    <a class="btn btn-white btn-sm fw-light" href="help-center-detail.html"> How to view
                                        expired course? </a>
                                    <a class="btn btn-white btn-sm fw-light" href="help-center-detail.html"> What's are the
                                        difference between a social?</a>
                                    <a class="btn btn-primary-soft btn-sm fw-light" href="#!">View all question</a>
                                </div>
                                <!-- Questions list END -->
                            </div>
                        </div>
                        <!-- Popular questions END -->
                    </div>
                </div> <!-- Row END -->
            </div>
        </section>
        <!-- =======================
                            Page Banner END -->

        <!-- =======================
                            Page Content START -->
        <section>
            <div class="container" data-sticky-container="">

                <div class="row g-4">
                    <!-- Left side START -->
                    <div class="col-md-3">
                        <div data-sticky="" data-margin-top="80" data-sticky-for="576">
                            <div id="nav-scroll" class="navbar">
                                <nav class="nav nav-pills nav-pill-soft flex-column">
                                    <a class="nav-link" href="#item-1"><i class="bi bi-emoji-smile fa-fw me-2"></i>Guide</a>
                                    <a class="nav-link" href="#item-2"><i class="bi bi-layers fa-fw me-2"></i>Privacy and
                                        security</a>
                                    <a class="nav-link" href="#item-3"><i class="bi bi-info-circle fa-fw me-2"></i>Term and
                                        services</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Left side END -->
                    @yield('left-side')
        </section>
    </main>
@endsection
