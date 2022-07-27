@extends('layouts.app')
@section('content')
    <main>

        <!-- =======================
                            Page Banner START -->
        <section>
            <div class="container">

                <div class="row g-4">
                    <!-- Title and SVG START -->
                    <div class="col-10 text-center mx-auto position-relative">
                        <!-- SVG decoration -->
                        <figure
                            class="position-absolute top-100 start-50 translate-middle mt-5 ms-n9 pt-5 d-none d-lg-block">
                            <svg>
                                <path class="fill-success"
                                    d="m181.6 6.7c-0.1 0-0.2-0.1-0.3 0-2.5-0.3-4.9-1-7.3-1.4-2.7-0.4-5.5-0.7-8.2-0.8-1.4-0.1-2.8-0.1-4.1-0.1-0.5 0-0.9-0.1-1.4-0.2-0.9-0.3-1.9-0.1-2.8-0.1-5.4 0.2-10.8 0.6-16.1 1.4-2.7 0.3-5.3 0.8-7.9 1.3-0.6 0.1-1.1 0.3-1.8 0.3-0.4 0-0.7-0.1-1.1-0.1-1.5 0-3 0.7-4.3 1.2-3 1-6 2.4-8.8 3.9-2.1 1.1-4 2.4-5.9 3.9-1 0.7-1.8 1.5-2.7 2.2-0.5 0.4-1.1 0.5-1.5 0.9s-0.7 0.8-1.1 1.2c-1 1-1.9 2-2.9 2.9-0.4 0.3-0.8 0.5-1.2 0.5-1.3-0.1-2.7-0.4-3.9-0.6-0.7-0.1-1.2 0-1.8 0-3.1 0-6.4-0.1-9.5 0.4-1.7 0.3-3.4 0.5-5.1 0.7-5.3 0.7-10.7 1.4-15.8 3.1-4.6 1.6-8.9 3.8-13.1 6.3-2.1 1.2-4.2 2.5-6.2 3.9-0.9 0.6-1.7 0.9-2.6 1.2s-1.7 1-2.5 1.6c-1.5 1.1-3 2.1-4.6 3.2-1.2 0.9-2.7 1.7-3.9 2.7-1 0.8-2.2 1.5-3.2 2.2-1.1 0.7-2.2 1.5-3.3 2.3-0.8 0.5-1.7 0.9-2.5 1.5-0.9 0.8-1.9 1.5-2.9 2.2 0.1-0.6 0.3-1.2 0.4-1.9 0.3-1.7 0.2-3.6 0-5.3-0.1-0.9-0.3-1.7-0.8-2.4s-1.5-1.1-2.3-0.8c-0.2 0-0.3 0.1-0.4 0.3s-0.1 0.4-0.1 0.6c0.3 3.6 0.2 7.2-0.7 10.7-0.5 2.2-1.5 4.5-2.7 6.4-0.6 0.9-1.4 1.7-2 2.6s-1.5 1.6-2.3 2.3c-0.2 0.2-0.5 0.4-0.6 0.7s0 0.7 0.1 1.1c0.2 0.8 0.6 1.6 1.3 1.8 0.5 0.1 0.9-0.1 1.3-0.3 0.9-0.4 1.8-0.8 2.7-1.2 0.4-0.2 0.7-0.3 1.1-0.6 1.8-1 3.8-1.7 5.8-2.3 4.3-1.1 9-1.1 13.3 0.1 0.2 0.1 0.4 0.1 0.6 0.1 0.7-0.1 0.9-1 0.6-1.6-0.4-0.6-1-0.9-1.7-1.2-2.5-1.1-4.9-2.1-7.5-2.7-0.6-0.2-1.3-0.3-2-0.4-0.3-0.1-0.5 0-0.8-0.1s-0.9 0-1.1-0.1-0.3 0-0.3-0.2c0-0.4 0.7-0.7 1-0.8 0.5-0.3 1-0.7 1.5-1l5.4-3.6c0.4-0.2 0.6-0.6 1-0.9 1.2-0.9 2.8-1.3 4-2.2 0.4-0.3 0.9-0.6 1.3-0.9l2.7-1.8c1-0.6 2.2-1.2 3.2-1.8 0.9-0.5 1.9-0.8 2.7-1.6 0.9-0.8 2.2-1.4 3.2-2 1.2-0.7 2.3-1.4 3.5-2.1 4.1-2.5 8.2-4.9 12.7-6.6 5.2-1.9 10.6-3.4 16.2-4 5.4-0.6 10.8-0.3 16.2-0.5h0.5c1.4-0.1 2.3-0.1 1.7 1.7-1.4 4.5 1.3 7.5 4.3 10 3.4 2.9 7 5.7 11.3 7.1 4.8 1.6 9.6 3.8 14.9 2.7 3-0.6 6.5-4 6.8-6.4 0.2-1.7 0.1-3.3-0.3-4.9-0.4-1.4-1-3-2.2-3.9-0.9-0.6-1.6-1.6-2.4-2.4-0.9-0.8-1.9-1.7-2.9-2.3-2.1-1.4-4.2-2.6-6.5-3.5-3.2-1.3-6.6-2.2-10-3-0.8-0.2-1.6-0.4-2.5-0.5-0.2 0-1.3-0.1-1.3-0.3-0.1-0.2 0.3-0.4 0.5-0.6 0.9-0.8 1.8-1.5 2.7-2.2 1.9-1.4 3.8-2.8 5.8-3.9 2.1-1.2 4.3-2.3 6.6-3.2 1.2-0.4 2.3-0.8 3.6-1 0.6-0.2 1.2-0.2 1.8-0.4 0.4-0.1 0.7-0.3 1.1-0.5 1.2-0.5 2.7-0.5 3.9-0.8 1.3-0.2 2.7-0.4 4.1-0.7 2.7-0.4 5.5-0.8 8.2-1.1 3.3-0.4 6.7-0.7 10-1 7.7-0.6 15.3-0.3 23 1.3 4.2 0.9 8.3 1.9 12.3 3.6 1.2 0.5 2.3 1.1 3.5 1.5 0.7 0.2 1.3 0.7 1.8 1.1 0.7 0.6 1.5 1.1 2.3 1.7 0.2 0.2 0.6 0.3 0.8 0.2 0.1-0.1 0.1-0.2 0.2-0.4 0.1-0.9-0.2-1.7-0.7-2.4-0.4-0.6-1-1.4-1.6-1.9-0.8-0.7-2-1.1-2.9-1.6-1-0.5-2-0.9-3.1-1.3-2.5-1.1-5.2-2-7.8-2.8-1-0.8-2.4-1.2-3.7-1.4zm-64.4 25.8c4.7 1.3 10.3 3.3 14.6 7.9 0.9 1 2.4 1.8 1.8 3.5-0.6 1.6-2.2 1.5-3.6 1.7-4.9 0.8-9.4-1.2-13.6-2.9-4.5-1.7-8.8-4.3-11.9-8.3-0.5-0.6-1-1.4-1.1-2.2 0-0.3 0-0.6-0.1-0.9s-0.2-0.6 0.1-0.9c0.2-0.2 0.5-0.2 0.8-0.2 2.3-0.1 4.7 0 7.1 0.4 0.9 0.1 1.6 0.6 2.5 0.8 1.1 0.4 2.3 0.8 3.4 1.1z">
                                </path>
                            </svg>
                        </figure>
                        <!-- SVG decoration -->
                        <figure class="position-absolute top-0 start-0 ms-n9">
                            <svg width="22px" height="22px" viewBox="0 0 22 22">
                                <polygon class="fill-orange"
                                    points="22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 ">
                                </polygon>
                            </svg>
                        </figure>
                        <!-- SVG decoration -->
                        <figure class="position-absolute top-100 start-100 translate-middle ms-5 d-none d-md-block">
                            <svg width="21.5px" height="21.5px" viewBox="0 0 21.5 21.5">
                                <polygon class="fill-danger"
                                    points="21.5,14.3 14.4,9.9 18.9,2.8 14.3,0 9.9,7.1 2.8,2.6 0,7.2 7.1,11.6 2.6,18.7 7.2,21.5 11.6,14.4 18.7,18.9 ">
                                </polygon>
                            </svg>
                        </figure>
                        <!-- SVG decoration -->
                        <figure class="position-absolute top-0 start-100 translate-middle">
                            <svg width="27px" height="27px">
                                <path class="fill-orange"
                                    d="M13.122,5.946 L17.679,-0.001 L17.404,7.528 L24.661,5.946 L19.683,11.533 L26.244,15.056 L18.891,16.089 L21.686,23.068 L15.400,19.062 L13.122,26.232 L10.843,19.062 L4.557,23.068 L7.352,16.089 L-0.000,15.056 L6.561,11.533 L1.582,5.946 L8.839,7.528 L8.565,-0.001 L13.122,5.946 Z">
                                </path>
                            </svg>
                        </figure>
                    </div>
                    <!-- Title and SVG END -->
                </div>
            </div>
        </section>
        <!-- =======================
                            Page Banner END -->

        <!-- =======================
                            About founder START -->
        <section class="pt-0 pt-md-5">
            <div class="container">
                <!-- Title -->
                <div class="row mb-4">
                    <div class="col-lg-8">
                        <h2>About Eduport Portal</h2>
                        <p class="mb-0">How promotion excellent curiosity yet attempted happiness Gay prosperous
                            impression had conviction For every delay death ask to style Me mean able my by in they
                            Extremity now strangers contained.</p>
                    </div>
                </div>

                <div class="row align-items-center">

                    <div class="col-lg-7 mt-4 mt-lg-0">
                        <!-- Title -->
                        <h4 class="mb-3">35,000+ happy students joined with us to achieve their goals</h4>

                        <!-- Content -->
                        <p>How promotion excellent curiosity yet attempted happiness Gay prosperous impression had
                            conviction For every delay death ask to style Me mean able my by in they Extremity now strangers
                            contained breakfast him discourse additions Sincerity collected contented led now perpetual
                            extremely forfeited </p>
                        <p>Happiness prosperous impression had conviction For every delay in they Extremity now strangers
                            contained breakfast him discourse additions Sincerity collected contented led now perpetual
                            extremely forfeited</p>

                        <!-- Info -->
                        <ul class="list-group list-group-borderless mt-4">
                            <li class="list-group-item d-flex">
                                <i class="bi bi-patch-check-fill text-success me-2"></i>Setup and installation takes less
                                time
                            </li>
                            <li class="list-group-item d-flex">
                                <i class="bi bi-patch-check-fill text-success me-2"></i>Professional and easy to use
                                software
                            </li>
                            <li class="list-group-item d-flex">
                                <i class="bi bi-patch-check-fill text-success me-2"></i>Perfect for any device with
                                pixel-perfect design
                            </li>
                            <li class="list-group-item d-flex">
                                <i class="bi bi-patch-check-fill text-success me-2"></i>Setup and installation too fast
                            </li>
                        </ul>

                        <!-- Progress bar START -->
                        <div class="row mt-3 g-4">
                            <!-- Progress item -->
                            <div class="col-md-6">
                                <div class="overflow-hidden">
                                    <h6>Enterprise customer</h6>
                                    <div class="progress progress-sm bg-primary bg-opacity-10">
                                        <div class="progress-bar bg-primary aos aos-init aos-animate" role="progressbar"
                                            data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000"
                                            data-aos-easing="ease-in-out" style="width: 85%" aria-valuenow="85"
                                            aria-valuemin="0" aria-valuemax="100">
                                            <span class="progress-percent-simple ms-auto h6 fw-light">85%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Progress item -->
                            <div class="col-md-6">
                                <div class="overflow-hidden">
                                    <h6>Accurate Course</h6>
                                    <div class="progress progress-sm bg-primary bg-opacity-10">
                                        <div class="progress-bar bg-primary aos aos-init aos-animate" role="progressbar"
                                            data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000"
                                            data-aos-easing="ease-in-out" style="width: 90%;" aria-valuenow="90"
                                            aria-valuemin="0" aria-valuemax="100">
                                            <span class="progress-percent-simple ms-auto h6 fw-light">90%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Progress item -->
                            <div class="col-md-6">
                                <div class="overflow-hidden">
                                    <h6>Languages</h6>
                                    <div class="progress progress-sm bg-primary bg-opacity-10">
                                        <div class="progress-bar bg-primary aos aos-init aos-animate" role="progressbar"
                                            data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000"
                                            data-aos-easing="ease-in-out" style="width: 75%;" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100">
                                            <span class="progress-percent-simple ms-auto h6 fw-light">75%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Progress item -->
                            <div class="col-md-6">
                                <div class="overflow-hidden">
                                    <h6>Instructors</h6>
                                    <div class="progress progress-sm bg-primary bg-opacity-10">
                                        <div class="progress-bar bg-primary aos aos-init aos-animate" role="progressbar"
                                            data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000"
                                            data-aos-easing="ease-in-out" style="width: 95%;" aria-valuenow="95"
                                            aria-valuemin="0" aria-valuemax="100">
                                            <span class="progress-percent-simple ms-auto h6 fw-light">95%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Progress bar END -->
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
                            About founder END -->

        <!-- =======================
                            Award and Team START -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <!-- Title -->
                        <h2>Awards'N Stuff</h2>
                        <!-- Content -->
                        <ul class="list-group list-group-borderless mt-4">
                            <!-- Award item -->
                            <li class="list-group-item d-flex align-items-center px-0">
                                <h6 class="mb-0">2015</h6>
                                <span class="fs-6 ms-3">Heroes for Children award</span>
                            </li>
                            <!-- Award item -->
                            <li class="list-group-item d-flex align-items-center px-0">
                                <h6 class="mb-0">2016</h6>
                                <span class="fs-6 ms-3">Education Agency of the Year</span>
                            </li>
                            <!-- Award item -->
                            <li class="list-group-item d-flex align-items-center px-0">
                                <h6 class="mb-0">2017</h6>
                                <span class="fs-6 ms-3">National Teacher of the Year</span>
                            </li>
                            <!-- Award item -->
                            <li class="list-group-item d-flex align-items-center px-0">
                                <h6 class="mb-0">2018</h6>
                                <span class="fs-6 ms-3">Best education agency 2018</span>
                            </li>
                            <!-- Award item -->
                            <li class="list-group-item d-flex align-items-center px-0">
                                <h6 class="mb-0">2019</h6>
                                <span class="fs-6 ms-3">Teacher of the nation (2nd place)</span>
                            </li>
                            <!-- Award item -->
                            <li class="list-group-item d-flex align-items-center px-0">
                                <h6 class="mb-0">2020</h6>
                                <span class="fs-6 ms-3">Best Independent Education Agency</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
                            Award and Team END -->

    </main>
@endsection
