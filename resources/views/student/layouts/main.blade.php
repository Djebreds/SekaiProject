<!-- **************** MAIN CONTENT START **************** -->

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
                        <div class="col d-sm-flex justify-content-between align-items-center">
                            <div>
                                <h1 class="my-1 fs-4">{{ Auth::user()->name }}</h1>
                                <li class="list-inline-item me-3 mb-1 mb-sm-0">
                                    <span class="h6">7</span>
                                    <span class="text-body fw-light">Kursus Selesai</span>
                                </li>
                                <li class="list-inline-item me-3 mb-1 mb-sm-0">
                                    <span class="h6">12</span>
                                    <span class="text-body fw-light">Kursus Mengikuti</span>
                                </li>
                                </ul>
                            </div>
                            <!-- Button -->
                            <div class="mt-2 mt-sm-0">
                                <a href="student-course-list.html" class="btn btn-outline-primary mb-0">Lihat
                                    Kursus Saya</a>
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
                                    <a class="list-group-item active" href="student-dashboard.html"><i
                                            class="bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>
                                    <a class="list-group-item" href="student-subscription.html"><i
                                            class="bi bi-card-checklist fa-fw me-2"></i>Kursus Saya</a>
                                    <a class="list-group-item" href="student-course-list.html"><i
                                            class="bi bi-basket fa-fw me-2"></i>Daftar Transaksi</a>
                                    <a class="list-group-item" href="student-payment-info.html"><i
                                            class="bi bi-credit-card-2-front fa-fw me-2"></i>Daftar
                                        Sertifikat</a>
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
                @yield('card')
            </div>
            <!-- Main content END -->
        </div><!-- Row END -->
    </div>
    </div>
</section>
<!-- =======================
        Page content END -->

<!-- **************** MAIN CONTENT END **************** -->
