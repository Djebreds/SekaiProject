@extends('layouts.app')
@section('content')
    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
                                        Page Banner START -->
        <section class="pt-0">
            <div class="container-fluid px-0">
                <div class="card bg-blue h-100px h-md-200px rounded-0"
                    style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
                </div>
            </div>
            <div class="container mt-n4">
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-transparent card-body pb-0 ps-0 mt-2 mt-sm-0">
                            <div class="row d-sm-flex justify-sm-content-between mt-2 mt-md-0">
                                <!-- Avatar -->
                                <div class="col-auto">
                                    <div class="avatar avatar-xxl position-relative mt-n3">
                                        @if (Auth::user()->provider_id != '')
                                            <img class="avatar-img rounded-circle border border-white border-3 shadow"
                                                src="{{ Auth::user()->user_avatar }}" alt="">
                                        @else
                                            @if (Auth::user()->user_avatar != '')
                                                <img class="avatar-img rounded-circle border border-white border-3 shadow"
                                                    src="{{ Auth::user()->user_avatar }}" alt="">
                                            @else
                                                <img class="avatar-img rounded-circle border border-white border-3 shadow"
                                                    src="/assets/images/avatar/blank-user-avatar.jpg" alt="">
                                            @endif
                                        @endif
                                        {{-- <span class="badge bg-success text-white rounded-pill position-absolute top-50 start-100 translate-middle mt-4 mt-md-5 ms-n3 px-md-3">Pro</span> --}}
                                    </div>
                                </div>
                                <!-- Profile info -->
                                <div class="col d-md-flex justify-content-between align-items-center mt-4">
                                    <div>
                                        <h1 class="my-1 fs-4">{{ Auth::user()->name }} <i
                                                class="bi bi-patch-check-fill text-info small"></i></h1>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i
                                                    class="fas fa-star text-warning me-2"></i>4.5/5.0</li>
                                            <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i
                                                    class="fas fa-user-graduate text-orange me-2"></i>12k Enrolled Students
                                            </li>
                                            <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i
                                                    class="fas fa-book text-purple me-2"></i>25 Courses</li>
                                        </ul>
                                    </div>
                                    <!-- Button -->
                                    <div class="d-flex align-items-center mt-2 mt-md-0">
                                        <a href="instructor-create-course.html" class="btn btn-success mb-0">Create a
                                            course</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Advanced filter responsive toggler START -->
                        <!-- Divider -->
                        <hr class="d-xl-none">
                        <div class="col-12 col-xl-3 d-flex justify-content-between align-items-center">
                            <a class="h6 mb-0 fw-bold d-xl-none" href="#">Menu</a>
                            <button class="btn btn-primary d-xl-none" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                                <i class="fas fa-sliders-h"></i>
                            </button>
                        </div>
                        <!-- Advanced filter responsive toggler END -->
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
                                        Page Banner END -->

        <!-- =======================
                                        Page content START -->
        <section class="pt-0">
            <div class="container">
                <div class="row">

                    <!-- Right sidebar START -->
                    <div class="col-xl-3">
                        <!-- Responsive offcanvas body START -->
                        <nav class="navbar navbar-light navbar-expand-xl mx-0">
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                                aria-labelledby="offcanvasNavbarLabel">
                                <div class="offcanvas-body p-3 p-xl-0">
                                    <div class="bg-dark border rounded-3 pb-0 p-3 w-100">
                                        <!-- Dashboard menu -->
                                        <div class="list-group list-group-dark list-group-borderless">
                                            <a class="list-group-item active" href="instructor-dashboard.html"><i
                                                    class="bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>
                                            <a class="list-group-item" href="instructor-manage-course.html"><i
                                                    class="bi bi-basket fa-fw me-2"></i>My Courses</a>
                                            <a class="list-group-item" href="instructor-quiz.html"><i
                                                    class="bi bi-question-diamond fa-fw me-2"></i>Quiz</a>
                                            <a class="list-group-item" href="instructor-earning.html"><i
                                                    class="bi bi-graph-up fa-fw me-2"></i>Earnings</a>
                                            <a class="list-group-item" href="instructor-studentlist.html"><i
                                                    class="bi bi-people fa-fw me-2"></i>Students</a>
                                            <a class="list-group-item" href="instructor-order.html"><i
                                                    class="bi bi-folder-check fa-fw me-2"></i>Orders</a>
                                            <a class="list-group-item" href="instructor-review.html"><i
                                                    class="bi bi-star fa-fw me-2"></i>Reviews</a>
                                            <a class="list-group-item" href="instructor-edit-profile.html"><i
                                                    class="bi bi-pencil-square fa-fw me-2"></i>Edit Profile</a>
                                            <a class="list-group-item" href="instructor-payout.html"><i
                                                    class="bi bi-wallet2 fa-fw me-2"></i>Payouts</a>
                                            <a class="list-group-item" href="instructor-setting.html"><i
                                                    class="bi bi-gear fa-fw me-2"></i>Settings</a>
                                            <a class="list-group-item" href="instructor-delete-account.html"><i
                                                    class="bi bi-trash fa-fw me-2"></i>Delete Profile</a>
                                            <a class="list-group-item text-danger bg-danger-soft-hover"
                                                href="sign-in.html"><i class="fas fa-sign-out-alt fa-fw me-2"></i>Sign
                                                Out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                        <!-- Responsive offcanvas body END -->
                    </div>
                    <!-- Right sidebar END -->

                    <!-- Main content START -->
                    <div class="col-xl-9">
                        @yield('menu')
                    </div>
                    <!-- Main content END -->
                </div><!-- Row END -->
            </div>
            </div>
        </section>
        <!-- =======================
                                        Page content END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->
    <hr />
@endsection
