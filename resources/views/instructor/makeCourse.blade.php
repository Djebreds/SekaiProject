@extends('layouts.app')
@push('custom-style')
@endpush
@section('content')
    {{-- <!-- Header START -->
    <header class="navbar-light navbar-sticky">
        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-xl">
            <div class="container">
                <!-- Logo START -->
                <a class="navbar-brand" href="index.html">
                    <img class="light-mode-item navbar-brand-item" src="{{ asset('assets/images/logo.svg') }}"
                        alt="logo">
                    <img class="dark-mode-item navbar-brand-item" src="{{ asset('assets/images/logo-light.svg') }}"
                        alt="logo">
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-animation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- Main navbar START -->
                <div class="navbar-collapse w-100 collapse" id="navbarCollapse">

                    <!-- Nav Main menu START -->
                    <ul class="navbar-nav navbar-nav-scroll mx-auto">
                        <!-- Nav item 1 Demos -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="demoMenu" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Demos</a>
                            <ul class="dropdown-menu" aria-labelledby="demoMenu">
                                <li> <a class="dropdown-item" href="index.html">Home Default</a></li>
                                <li> <a class="dropdown-item" href="index-2.html">Home Education</a></li>
                                <li> <a class="dropdown-item" href="index-3.html">Home Academy</a></li>
                                <li> <a class="dropdown-item" href="index-4.html">Home Course</a></li>
                                <li> <a class="dropdown-item" href="index-5.html">Home University</a></li>
                                <li> <a class="dropdown-item" href="index-6.html">Home Kindergarten</a></li>
                                <li> <a class="dropdown-item" href="index-7.html">Home Landing</a></li>
                                <li> <a class="dropdown-item" href="index-8.html">Home Tutor</a></li>
                                <li> <a class="dropdown-item" href="index-9.html">Home School <span
                                            class="badge bg-success ms-2 smaller">New</span></a></li>
                                <li> <a class="dropdown-item" href="index-10.html">Home Abroad <span
                                            class="badge bg-success ms-2 smaller">New</span></a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li> <a class="dropdown-item" href="request-demo.html">Request a demo</a></li>
                                <li> <a class="dropdown-item" href="book-class.html">Book a Class</a></li>
                                <li> <a class="dropdown-item" href="request-access.html">Free Access</a></li>
                                <li> <a class="dropdown-item" href="university-admission-form.html">Admission Form</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Nav item 2 Pages -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="pagesMenu"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu" aria-labelledby="pagesMenu">
                                <!-- Dropdown submenu -->
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#">Course</a>
                                    <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                        <li> <a class="dropdown-item" href="course-categories.html">Course Categories
                                                <span class="badge bg-success ms-2 smaller">New</span></a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li> <a class="dropdown-item" href="course-grid.html">Course Grid Classic</a>
                                        </li>
                                        <li> <a class="dropdown-item" href="course-grid-2.html">Course Grid
                                                Minimal</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li> <a class="dropdown-item" href="course-list.html">Course List Classic</a>
                                        </li>
                                        <li> <a class="dropdown-item" href="course-list-2.html">Course List
                                                Minimal</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li> <a class="dropdown-item" href="course-detail.html">Course Detail
                                                Classic</a></li>
                                        <li> <a class="dropdown-item" href="course-detail-min.html">Course Detail
                                                Minimal</a></li>
                                        <li> <a class="dropdown-item" href="course-detail-adv.html">Course Detail
                                                Advance</a></li>
                                        <li> <a class="dropdown-item" href="course-video-player.html">Course Full
                                                Screen Video</a></li>
                                    </ul>
                                </li>

                                <!-- Dropdown submenu -->
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#">About</a>
                                    <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                        <li> <a class="dropdown-item" href="about.html">About Us</a></li>
                                        <li> <a class="dropdown-item" href="contact-us.html">Contact Us</a></li>
                                        <li> <a class="dropdown-item" href="blog-grid.html">Blog Grid</a></li>
                                        <li> <a class="dropdown-item" href="blog-masonry.html">Blog Masonry</a></li>
                                        <li> <a class="dropdown-item" href="blog-detail.html">Blog Detail</a></li>
                                        <li> <a class="dropdown-item" href="pricing.html">Pricing</a></li>
                                    </ul>
                                </li>

                                <li> <a class="dropdown-item" href="instructor-list.html">Instructor List</a></li>
                                <li> <a class="dropdown-item" href="instructor-single.html">Instructor Single</a></li>
                                <li> <a class="dropdown-item" href="become-instructor.html">Become an Instructor</a>
                                </li>
                                <li> <a class="dropdown-item" href="abroad-single.html">Abroad Single <span
                                            class="badge bg-success ms-2 smaller">New</span></a></li>

                                <!-- Dropdown submenu -->
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#">Shop
                                        <span class="badge bg-success ms-2 smaller">New</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                        <li> <a class="dropdown-item" href="shop.html">Shop grid</a></li>
                                        <li> <a class="dropdown-item" href="shop-product-detail.html">Product
                                                detail</a></li>
                                    </ul>
                                </li>

                                <!-- Dropdown submenu -->
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#">Help
                                        <span class="badge bg-success ms-2 smaller">New</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                        <li> <a class="dropdown-item" href="help-center.html">Help Center</a></li>
                                        <li> <a class="dropdown-item" href="help-center-detail.html">Help Center
                                                Single</a></li>
                                    </ul>
                                </li>

                                <!-- Dropdown submenu -->
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#">Authentication</a>
                                    <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                        <li> <a class="dropdown-item" href="sign-in.html">Sign In</a></li>
                                        <li> <a class="dropdown-item" href="sign-up.html">Sign Up</a></li>
                                        <li> <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                                        </li>
                                    </ul>
                                </li>

                                <li> <a class="dropdown-item" href="faq.html">FAQs</a></li>
                                <li> <a class="dropdown-item" href="error-404.html">Error 404</a></li>
                                <li> <a class="dropdown-item" href="coming-soon.html">Coming Soon</a></li>
                                <li> <a class="dropdown-item" href="cart.html">Cart</a></li>
                                <li> <a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                <li> <a class="dropdown-item" href="empty-cart.html">Empty Cart</a></li>
                                <li> <a class="dropdown-item" href="wishlist.html">Wishlist</a></li>
                            </ul>
                        </li>

                        <!-- Nav item 3 Account -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="accounntMenu"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accounts</a>
                            <ul class="dropdown-menu" aria-labelledby="accounntMenu">
                                <!-- Dropdown submenu -->
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#"><i
                                            class="fas fa-user-tie fa-fw me-1"></i>Instructor</a>
                                    <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                        <li> <a class="dropdown-item" href="instructor-dashboard.html"><i
                                                    class="bi bi-grid-fill fa-fw me-1"></i>Dashboard</a> </li>
                                        <li> <a class="dropdown-item" href="instructor-manage-course.html"><i
                                                    class="bi bi-basket-fill fa-fw me-1"></i>Courses</a> </li>
                                        <li> <a class="dropdown-item" href="instructor-create-course.html"><i
                                                    class="bi bi-file-earmark-plus-fill fa-fw me-1"></i>Create
                                                Course</a> </li>
                                        <li> <a class="dropdown-item" href="course-added.html"><i
                                                    class="bi bi-file-check-fill fa-fw me-1"></i>Course Added</a> </li>
                                        <li> <a class="dropdown-item" href="instructor-quiz.html"><i
                                                    class="bi bi-question-diamond fa-fw me-1"></i>Quiz <span
                                                    class="badge bg-success ms-2 smaller">New</span></a> </li>
                                        <li> <a class="dropdown-item" href="instructor-earning.html"><i
                                                    class="fas fa-chart-line fa-fw me-1"></i>Earnings</a> </li>
                                        <li> <a class="dropdown-item" href="instructor-studentlist.html"><i
                                                    class="fas fa-user-graduate fa-fw me-1"></i>Students</a> </li>
                                        <li> <a class="dropdown-item" href="instructor-order.html"><i
                                                    class="bi bi-cart-check-fill fa-fw me-1"></i>Orders</a> </li>
                                        <li> <a class="dropdown-item" href="instructor-review.html"><i
                                                    class="bi bi-star-fill fa-fw me-1"></i>Reviews</a> </li>
                                        <li> <a class="dropdown-item" href="instructor-payout.html"><i
                                                    class="fas fa-wallet fa-fw me-1"></i>Payout</a> </li>
                                    </ul>
                                </li>

                                <!-- Dropdown submenu -->
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#"><i
                                            class="fas fa-user-graduate fa-fw me-1"></i>Student</a>
                                    <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                        <li> <a class="dropdown-item" href="student-dashboard.html"><i
                                                    class="bi bi-grid-fill fa-fw me-1"></i>Dashboard</a> </li>
                                        <li> <a class="dropdown-item" href="student-subscription.html"><i
                                                    class="bi bi-card-checklist fa-fw me-1"></i>My Subscriptions</a>
                                        </li>
                                        <li> <a class="dropdown-item" href="student-course-list.html"><i
                                                    class="bi bi-basket-fill fa-fw me-1"></i>Courses</a> </li>
                                        <li> <a class="dropdown-item" href="student-course-resume.html"><i
                                                    class="far fa-fw fa-file-alt me-1"></i>Course Resume <span
                                                    class="badge bg-success ms-2 smaller">New</span></a> </li>
                                        <li> <a class="dropdown-item" href="student-quiz.html"><i
                                                    class="bi bi-question-diamond fa-fw me-1"></i>Quiz <span
                                                    class="badge bg-success ms-2 smaller">New</span></a> </li>
                                        <li> <a class="dropdown-item" href="student-payment-info.html"><i
                                                    class="bi bi-credit-card-2-front-fill fa-fw me-1"></i>Payment
                                                Info</a> </li>
                                        <li> <a class="dropdown-item" href="student-bookmark.html"><i
                                                    class="fas bi-cart-check-fill fa-fw me-1"></i>Wishlist</a> </li>
                                    </ul>
                                </li>

                                <li> <a class="dropdown-item" href="admin-dashboard.html"><i
                                            class="fas fa-user-cog fa-fw me-1"></i>Admin</a> </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li> <a class="dropdown-item" href="instructor-edit-profile.html"><i
                                            class="fas fa-fw fa-edit me-1"></i>Edit Profile</a> </li>
                                <li> <a class="dropdown-item" href="instructor-setting.html"><i
                                            class="fas fa-fw fa-cog me-1"></i>Settings</a> </li>
                                <li> <a class="dropdown-item" href="instructor-delete-account.html"><i
                                            class="fas fa-fw fa-trash-alt me-1"></i>Delete Profile</a> </li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <!-- Dropdown Level -->
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#">Dropdown levels</a>
                                    <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">

                                        <!-- dropdown submenu open right -->
                                        <li class="dropdown-submenu dropend">
                                            <a class="dropdown-item dropdown-toggle" href="#">Dropdown (end)</a>
                                            <ul class="dropdown-menu" data-bs-popper="none">
                                                <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                                <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                            </ul>
                                        </li>
                                        <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>

                                        <!-- dropdown submenu open left -->
                                        <li class="dropdown-submenu dropstart">
                                            <a class="dropdown-item dropdown-toggle" href="#">Dropdown
                                                (start)</a>
                                            <ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                                                <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                                <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                            </ul>
                                        </li>
                                        <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <!-- Nav item 4 Component-->
                        <li class="nav-item"><a class="nav-link" href="docs/alerts.html">Components</a></li>

                        <!-- Nav item 5 link-->
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="advanceMenu" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end min-w-auto" data-bs-popper="none">
                                <li>
                                    <a class="dropdown-item" href="https://support.webestica.com/" target="_blank">
                                        <i class="text-warning fa-fw bi bi-life-preserver me-2"></i>Support
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="docs/index.html" target="_blank">
                                        <i class="text-danger fa-fw bi bi-card-text me-2"></i>Documentation
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="https://eduport.webestica.com/rtl/"
                                        target="_blank">
                                        <i class="text-info fa-fw bi bi-toggle-off me-2"></i>RTL demo
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="https://themes.getbootstrap.com/store/webestica/"
                                        target="_blank">
                                        <i class="text-success fa-fw bi bi-cloud-download-fill me-2"></i>Buy Eduport!
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Nav Main menu END -->

                    <!-- Nav Search START -->
                    <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
                        <div class="nav-item w-100">
                            <form class="position-relative">
                                <input class="form-control pe-5 bg-transparent" type="search" placeholder="Search"
                                    aria-label="Search">
                                <button
                                    class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y"
                                    type="submit"><i class="fas fa-search fs-6 "></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Nav Search END -->
                </div>
                <!-- Main navbar END -->

                <!-- Profile START -->
                <div class="dropdown ms-1 ms-lg-0">
                    <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button"
                        data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/01.jpg') }}"
                            alt="avatar">
                    </a>
                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3"
                        aria-labelledby="profileDropdown">
                        <!-- Profile info -->
                        <li class="px-3">
                            <div class="d-flex align-items-center">
                                <!-- Avatar -->
                                <div class="avatar me-3">
                                    <img class="avatar-img rounded-circle shadow"
                                        src="{{ asset('assets/images/avatar/01.jpg') }}" alt="avatar">
                                </div>
                                <div>
                                    <a class="h6" href="#">Lori Ferguson</a>
                                    <p class="small m-0">example@gmail.com</p>
                                </div>
                            </div>
                            <hr>
                        </li>
                        <!-- Links -->
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person fa-fw me-2"></i>Edit
                                Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Account
                                Settings</a></li>
                        <li><a class="dropdown-item" href="#"><i
                                    class="bi bi-info-circle fa-fw me-2"></i>Help</a></li>
                        <li><a class="dropdown-item bg-danger-soft-hover" href="#"><i
                                    class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <!-- Dark mode switch START -->
                        <li>
                            <div class="modeswitch-wrap" id="darkModeSwitch">
                                <div class="modeswitch-item">
                                    <div class="modeswitch-icon"></div>
                                </div>
                                <span>Dark mode</span>
                            </div>
                        </li>
                        <!-- Dark mode switch END -->
                    </ul>
                </div>
                <!-- Profile START -->
            </div>
        </nav>
        <!-- Logo Nav END -->
    </header> --}}
    {{-- <div id="sticky-space" style="height: 0px;" class=""></div> --}}
    <!-- Header END -->


    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
                            Page Banner START -->
        <section class="py-0 bg-blue h-100px align-items-center d-flex h-200px rounded-0"
            style="background:url({{ asset('assets/images/pattern/04.png') }}) no-repeat center center; background-size:cover;">
            <!-- Main banner background image -->
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <!-- Title -->
                        <h1 class="text-white">Submit a new Course</h1>
                        <p class="text-white mb-0">Read our <a href="#" class="text-white"><u>"Before you create a
                                    course"</u></a> article before submitting!</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
                            Page Banner END -->

        <!-- =======================
                            Steps START -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <!-- Content -->
                        <p class="text-center">Use this interface to add a new Course to the portal. Once you are done
                            adding the item it will be reviewed for quality. If approved, your course will appear for sale
                            and you will be informed by email that your course has been accepted.</p>
                    </div>
                </div>

                <div class="card bg-transparent border rounded-3 mb-5">
                    <div id="stepper" class="bs-stepper stepper-outline">
                        <!-- Card header -->
                        <div class="card-header bg-light border-bottom px-lg-5">
                            <!-- Step Buttons START -->
                            <div class="bs-stepper-header" role="tablist">
                                <!-- Step 1 -->
                                <div class="step" data-target="#step-1">
                                    <div class="d-grid text-center align-items-center">
                                        <button type="button" class="btn btn-link step-trigger mb-0" role="tab"
                                            id="steppertrigger1" aria-controls="step-1" aria-selected="false">
                                            <span class="bs-stepper-circle">1</span>
                                        </button>
                                        <h6 class="bs-stepper-label d-none d-md-block">Course details</h6>
                                    </div>
                                </div>
                                <div class="line"></div>

                                <!-- Step 2 -->
                                <div class="step active" data-target="#step-2">
                                    <div class="d-grid text-center align-items-center">
                                        <button type="button" class="btn btn-link step-trigger mb-0" role="tab"
                                            id="steppertrigger2" aria-controls="step-2" aria-selected="true">
                                            <span class="bs-stepper-circle">2</span>
                                        </button>
                                        <h6 class="bs-stepper-label d-none d-md-block">Course media</h6>
                                    </div>
                                </div>
                                <div class="line"></div>

                                <!-- Step 3 -->
                                <div class="step" data-target="#step-3">
                                    <div class="d-grid text-center align-items-center">
                                        <button type="button" class="btn btn-link step-trigger mb-0" role="tab"
                                            id="steppertrigger3" aria-controls="step-3" aria-selected="false">
                                            <span class="bs-stepper-circle">3</span>
                                        </button>
                                        <h6 class="bs-stepper-label d-none d-md-block">Curriculum</h6>
                                    </div>
                                </div>
                                <div class="line"></div>

                                <!-- Step 4 -->
                                <div class="step" data-target="#step-4">
                                    <div class="d-grid text-center align-items-center">
                                        <button type="button" class="btn btn-link step-trigger mb-0" role="tab"
                                            id="steppertrigger4" aria-controls="step-4" aria-selected="false">
                                            <span class="bs-stepper-circle">4</span>
                                        </button>
                                        <h6 class="bs-stepper-label d-none d-md-block">Additional information</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Step Buttons END -->
                        </div>

                        <!-- Card body START -->
                        <div class="card-body">
                            <!-- Step content START -->
                            <div class="bs-stepper-content">
                                <form onsubmit="return false">

                                    <!-- Step 1 content START -->
                                    <div id="step-1" role="tabpanel" class="content fade dstepper-block dstepper-none"
                                        aria-labelledby="steppertrigger1">
                                        <!-- Title -->
                                        <h4>Course details</h4>

                                        <hr> <!-- Divider -->

                                        <!-- Basic information START -->
                                        <div class="row g-4">
                                            <!-- Course title -->
                                            <div class="col-12">
                                                <label class="form-label">Course title</label>
                                                <input class="form-control" type="text" placeholder="Enter course title">
                                            </div>

                                            <!-- Short description -->
                                            <div class="col-12">
                                                <label class="form-label">Short description</label>
                                                <textarea class="form-control" rows="2" placeholder="Enter keywords"></textarea>
                                            </div>

                                            <!-- Course category -->
                                            <div class="col-md-6">
                                                <label class="form-label">Course category</label>
                                                <div class="choices" data-type="select-one" tabindex="0" role="combobox"
                                                    aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                                    <div class="choices__inner"><select
                                                            class="form-select js-choice border-0 z-index-9 bg-transparent choices__input"
                                                            aria-label=".form-select-sm" data-search-enabled="true"
                                                            hidden="" tabindex="-1" data-choice="active">
                                                            <option value=""
                                                                data-custom-properties="[object Object]">Select category
                                                            </option>
                                                        </select>
                                                        <div class="choices__list choices__list--single">
                                                            <div class="choices__item choices__placeholder choices__item--selectable"
                                                                data-item="" data-id="1" data-value=""
                                                                data-custom-properties="[object Object]"
                                                                aria-selected="true">Select category</div>
                                                        </div>
                                                    </div>
                                                    <div class="choices__list choices__list--dropdown"
                                                        aria-expanded="false"><input type="text"
                                                            class="choices__input choices__input--cloned"
                                                            autocomplete="off" autocapitalize="off" spellcheck="false"
                                                            role="textbox" aria-autocomplete="list"
                                                            aria-label="Select category" placeholder="">
                                                        <div class="choices__list" role="listbox">
                                                            <div id="choices--gcew-item-choice-6"
                                                                class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted"
                                                                role="option" data-choice="" data-id="6"
                                                                data-value="" data-select-text="Press to select"
                                                                data-choice-selectable="" aria-selected="true">Select
                                                                category</div>
                                                            <div id="choices--gcew-item-choice-1"
                                                                class="choices__item choices__item--choice choices__item--selectable"
                                                                role="option" data-choice="" data-id="1"
                                                                data-value="Engineer" data-select-text="Press to select"
                                                                data-choice-selectable="">Engineer</div>
                                                            <div id="choices--gcew-item-choice-2"
                                                                class="choices__item choices__item--choice choices__item--selectable"
                                                                role="option" data-choice="" data-id="2"
                                                                data-value="Finance" data-select-text="Press to select"
                                                                data-choice-selectable="">Finance</div>
                                                            <div id="choices--gcew-item-choice-3"
                                                                class="choices__item choices__item--choice choices__item--selectable"
                                                                role="option" data-choice="" data-id="3"
                                                                data-value="Information technology"
                                                                data-select-text="Press to select"
                                                                data-choice-selectable="">Information technology</div>
                                                            <div id="choices--gcew-item-choice-4"
                                                                class="choices__item choices__item--choice choices__item--selectable"
                                                                role="option" data-choice="" data-id="4"
                                                                data-value="Marketing" data-select-text="Press to select"
                                                                data-choice-selectable="">Marketing</div>
                                                            <div id="choices--gcew-item-choice-5"
                                                                class="choices__item choices__item--choice choices__item--selectable"
                                                                role="option" data-choice="" data-id="5"
                                                                data-value="Medical" data-select-text="Press to select"
                                                                data-choice-selectable="">Medical</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Course level -->
                                            <div class="col-md-6">
                                                <label class="form-label">Course level</label>
                                                <div class="choices" data-type="select-one" tabindex="0"
                                                    role="listbox" aria-haspopup="true" aria-expanded="false">
                                                    <div class="choices__inner"><select
                                                            class="form-select js-choice border-0 z-index-9 bg-transparent choices__input"
                                                            aria-label=".form-select-sm" data-search-enabled="false"
                                                            data-remove-item-button="true" hidden="" tabindex="-1"
                                                            data-choice="active">
                                                            <option value=""
                                                                data-custom-properties="[object Object]">Select course
                                                                level</option>
                                                        </select>
                                                        <div class="choices__list choices__list--single">
                                                            <div class="choices__item choices__placeholder choices__item--selectable"
                                                                data-item="" data-id="1" data-value=""
                                                                data-custom-properties="[object Object]"
                                                                aria-selected="true" data-deletable="">Select course
                                                                level<button type="button" class="choices__button"
                                                                    aria-label="Remove item: ''" data-button="">Remove
                                                                    item</button></div>
                                                        </div>
                                                    </div>
                                                    <div class="choices__list choices__list--dropdown"
                                                        aria-expanded="false">
                                                        <div class="choices__list" role="listbox">
                                                            <div id="choices--p13h-item-choice-5"
                                                                class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted"
                                                                role="option" data-choice="" data-id="5"
                                                                data-value="" data-select-text="Press to select"
                                                                data-choice-selectable="" aria-selected="true">Select
                                                                course level</div>
                                                            <div id="choices--p13h-item-choice-1"
                                                                class="choices__item choices__item--choice choices__item--selectable"
                                                                role="option" data-choice="" data-id="1"
                                                                data-value="Advance" data-select-text="Press to select"
                                                                data-choice-selectable="">Advance</div>
                                                            <div id="choices--p13h-item-choice-2"
                                                                class="choices__item choices__item--choice choices__item--selectable"
                                                                role="option" data-choice="" data-id="2"
                                                                data-value="All level" data-select-text="Press to select"
                                                                data-choice-selectable="">All level</div>
                                                            <div id="choices--p13h-item-choice-3"
                                                                class="choices__item choices__item--choice choices__item--selectable"
                                                                role="option" data-choice="" data-id="3"
                                                                data-value="Beginner" data-select-text="Press to select"
                                                                data-choice-selectable="">Beginner</div>
                                                            <div id="choices--p13h-item-choice-4"
                                                                class="choices__item choices__item--choice choices__item--selectable"
                                                                role="option" data-choice="" data-id="4"
                                                                data-value="Intermediate"
                                                                data-select-text="Press to select"
                                                                data-choice-selectable="">Intermediate</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Language -->
                                            <div class="col-md-6">
                                                <label class="form-label">Language</label>
                                                <div class="choices" data-type="select-multiple" role="combobox"
                                                    aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                                    <div class="choices__inner"><select
                                                            class="form-select js-choice border-0 z-index-9 bg-transparent choices__input"
                                                            multiple="multiple" aria-label=".form-select-sm"
                                                            data-max-item-count="3" data-remove-item-button="true"
                                                            hidden="" tabindex="-1" data-choice="active"></select>
                                                        <div class="choices__list choices__list--multiple"></div><input
                                                            type="text" class="choices__input choices__input--cloned"
                                                            autocomplete="off" autocapitalize="off" spellcheck="false"
                                                            role="textbox" aria-autocomplete="list"
                                                            aria-label="Select language" placeholder="Select language"
                                                            style="min-width: 16ch; width: 1ch;">
                                                    </div>
                                                    <div class="choices__list choices__list--dropdown"
                                                        aria-expanded="false">
                                                        <div class="choices__list" aria-multiselectable="true"
                                                            role="listbox">
                                                            <div id="choices--a5ce-item-choice-1"
                                                                class="choices__item choices__item--choice choices__item--selectable is-highlighted"
                                                                role="option" data-choice="" data-id="1"
                                                                data-value="English" data-select-text="Press to select"
                                                                data-choice-selectable="" aria-selected="true">English
                                                            </div>
                                                            <div id="choices--a5ce-item-choice-2"
                                                                class="choices__item choices__item--choice choices__item--selectable"
                                                                role="option" data-choice="" data-id="2"
                                                                data-value="French" data-select-text="Press to select"
                                                                data-choice-selectable="">French</div>
                                                            <div id="choices--a5ce-item-choice-3"
                                                                class="choices__item choices__item--choice choices__item--selectable"
                                                                role="option" data-choice="" data-id="3"
                                                                data-value="German" data-select-text="Press to select"
                                                                data-choice-selectable="">German</div>
                                                            <div id="choices--a5ce-item-choice-4"
                                                                class="choices__item choices__item--choice choices__item--selectable"
                                                                role="option" data-choice="" data-id="4"
                                                                data-value="Hindi" data-select-text="Press to select"
                                                                data-choice-selectable="">Hindi</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Switch -->
                                            <div class="col-md-6 d-flex align-items-center justify-content-start mt-5">
                                                <div class="form-check form-switch form-check-md">
                                                    <input class="form-check-input" type="checkbox" id="checkPrivacy1">
                                                    <label class="form-check-label" for="checkPrivacy1">Check this for
                                                        featured course</label>
                                                </div>
                                            </div>

                                            <!-- Course time -->
                                            <div class="col-md-6">
                                                <label class="form-label">Course time</label>
                                                <input class="form-control" type="text"
                                                    placeholder="Enter course time">
                                            </div>

                                            <!-- Total lecture -->
                                            <div class="col-md-6">
                                                <label class="form-label">Total lecture</label>
                                                <input class="form-control" type="text"
                                                    placeholder="Enter total lecture">
                                            </div>

                                            <!-- Course price -->
                                            <div class="col-md-6">
                                                <label class="form-label">Course price</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter course price">
                                            </div>

                                            <!-- Course discount -->
                                            <div class="col-md-6">
                                                <label class="form-label">Discount price</label>
                                                <input class="form-control" type="text" placeholder="Enter discount">
                                                <div class="col-12 mt-1 mb-0">
                                                    <div class="form-check small mb-0">
                                                        <input class="form-check-input" type="checkbox" id="checkBox1">
                                                        <label class="form-check-label" for="checkBox1">
                                                            Enable this Discount
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Course description -->
                                            <div class="col-12">
                                                <label class="form-label">Add description</label>
                                                <!-- Editor toolbar -->
                                                <div class="bg-light border border-bottom-0 rounded-top py-3 ql-toolbar ql-snow"
                                                    id="quilltoolbar">
                                                    <span class="ql-formats">
                                                        <span class="ql-size ql-picker"><span class="ql-picker-label"
                                                                tabindex="0" role="button" aria-expanded="false"
                                                                aria-controls="ql-picker-options-0"><svg
                                                                    viewBox="0 0 18 18">
                                                                    <polygon class="ql-stroke"
                                                                        points="7 11 9 13 11 11 7 11"></polygon>
                                                                    <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7">
                                                                    </polygon>
                                                                </svg></span><span class="ql-picker-options"
                                                                aria-hidden="true" tabindex="-1"
                                                                id="ql-picker-options-0"><span tabindex="0"
                                                                    role="button" class="ql-picker-item"
                                                                    data-value="small"></span><span tabindex="0"
                                                                    role="button" class="ql-picker-item"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="large"></span><span tabindex="0"
                                                                    role="button" class="ql-picker-item"
                                                                    data-value="huge"></span></span></span><select
                                                            class="ql-size" style="display: none;">
                                                            <option value="small"></option>
                                                            <option selected="selected"></option>
                                                            <option value="large"></option>
                                                            <option value="huge"></option>
                                                        </select>
                                                    </span>
                                                    <span class="ql-formats">
                                                        <button class="ql-bold" type="button"><svg viewBox="0 0 18 18">
                                                                <path class="ql-stroke"
                                                                    d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z">
                                                                </path>
                                                                <path class="ql-stroke"
                                                                    d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z">
                                                                </path>
                                                            </svg></button>
                                                        <button class="ql-italic" type="button"><svg
                                                                viewBox="0 0 18 18">
                                                                <line class="ql-stroke" x1="7" x2="13"
                                                                    y1="4" y2="4"></line>
                                                                <line class="ql-stroke" x1="5" x2="11"
                                                                    y1="14" y2="14"></line>
                                                                <line class="ql-stroke" x1="8" x2="10"
                                                                    y1="14" y2="4"></line>
                                                            </svg></button>
                                                        <button class="ql-underline" type="button"><svg
                                                                viewBox="0 0 18 18">
                                                                <path class="ql-stroke"
                                                                    d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3">
                                                                </path>
                                                                <rect class="ql-fill" height="1" rx="0.5"
                                                                    ry="0.5" width="12" x="3"
                                                                    y="15"></rect>
                                                            </svg></button>
                                                        <button class="ql-strike" type="button"><svg
                                                                viewBox="0 0 18 18">
                                                                <line class="ql-stroke ql-thin" x1="15.5"
                                                                    x2="2.5" y1="8.5" y2="9.5"></line>
                                                                <path class="ql-fill"
                                                                    d="M9.007,8C6.542,7.791,6,7.519,6,6.5,6,5.792,7.283,5,9,5c1.571,0,2.765.679,2.969,1.309a1,1,0,0,0,1.9-.617C13.356,4.106,11.354,3,9,3,6.2,3,4,4.538,4,6.5a3.2,3.2,0,0,0,.5,1.843Z">
                                                                </path>
                                                                <path class="ql-fill"
                                                                    d="M8.984,10C11.457,10.208,12,10.479,12,11.5c0,0.708-1.283,1.5-3,1.5-1.571,0-2.765-.679-2.969-1.309a1,1,0,1,0-1.9.617C4.644,13.894,6.646,15,9,15c2.8,0,5-1.538,5-3.5a3.2,3.2,0,0,0-.5-1.843Z">
                                                                </path>
                                                            </svg></button>
                                                    </span>
                                                    <span class="ql-formats">
                                                        <span class="ql-color ql-picker ql-color-picker"><span
                                                                class="ql-picker-label" tabindex="0" role="button"
                                                                aria-expanded="false"
                                                                aria-controls="ql-picker-options-1"><svg
                                                                    viewBox="0 0 18 18">
                                                                    <line class="ql-color-label ql-stroke ql-transparent"
                                                                        x1="3" x2="15" y1="15"
                                                                        y2="15"></line>
                                                                    <polyline class="ql-stroke"
                                                                        points="5.5 11 9 3 12.5 11"></polyline>
                                                                    <line class="ql-stroke" x1="11.63" x2="6.38"
                                                                        y1="9" y2="9"></line>
                                                                </svg></span><span class="ql-picker-options"
                                                                aria-hidden="true" tabindex="-1"
                                                                id="ql-picker-options-1"><span tabindex="0"
                                                                    role="button"
                                                                    class="ql-picker-item ql-primary"></span><span
                                                                    tabindex="0" role="button"
                                                                    class="ql-picker-item ql-primary" data-value="#e60000"
                                                                    style="background-color: rgb(230, 0, 0);"></span><span
                                                                    tabindex="0" role="button"
                                                                    class="ql-picker-item ql-primary" data-value="#ff9900"
                                                                    style="background-color: rgb(255, 153, 0);"></span><span
                                                                    tabindex="0" role="button"
                                                                    class="ql-picker-item ql-primary" data-value="#ffff00"
                                                                    style="background-color: rgb(255, 255, 0);"></span><span
                                                                    tabindex="0" role="button"
                                                                    class="ql-picker-item ql-primary" data-value="#008a00"
                                                                    style="background-color: rgb(0, 138, 0);"></span><span
                                                                    tabindex="0" role="button"
                                                                    class="ql-picker-item ql-primary" data-value="#0066cc"
                                                                    style="background-color: rgb(0, 102, 204);"></span><span
                                                                    tabindex="0" role="button"
                                                                    class="ql-picker-item ql-primary" data-value="#9933ff"
                                                                    style="background-color: rgb(153, 51, 255);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#ffffff"
                                                                    style="background-color: rgb(255, 255, 255);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#facccc"
                                                                    style="background-color: rgb(250, 204, 204);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#ffebcc"
                                                                    style="background-color: rgb(255, 235, 204);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#ffffcc"
                                                                    style="background-color: rgb(255, 255, 204);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#cce8cc"
                                                                    style="background-color: rgb(204, 232, 204);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#cce0f5"
                                                                    style="background-color: rgb(204, 224, 245);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#ebd6ff"
                                                                    style="background-color: rgb(235, 214, 255);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#bbbbbb"
                                                                    style="background-color: rgb(187, 187, 187);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#f06666"
                                                                    style="background-color: rgb(240, 102, 102);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#ffc266"
                                                                    style="background-color: rgb(255, 194, 102);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#ffff66"
                                                                    style="background-color: rgb(255, 255, 102);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#66b966"
                                                                    style="background-color: rgb(102, 185, 102);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#66a3e0"
                                                                    style="background-color: rgb(102, 163, 224);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#c285ff"
                                                                    style="background-color: rgb(194, 133, 255);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#888888"
                                                                    style="background-color: rgb(136, 136, 136);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#a10000"
                                                                    style="background-color: rgb(161, 0, 0);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#b26b00"
                                                                    style="background-color: rgb(178, 107, 0);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#b2b200"
                                                                    style="background-color: rgb(178, 178, 0);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#006100"
                                                                    style="background-color: rgb(0, 97, 0);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#0047b2"
                                                                    style="background-color: rgb(0, 71, 178);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#6b24b2"
                                                                    style="background-color: rgb(107, 36, 178);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#444444"
                                                                    style="background-color: rgb(68, 68, 68);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#5c0000"
                                                                    style="background-color: rgb(92, 0, 0);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#663d00"
                                                                    style="background-color: rgb(102, 61, 0);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#666600"
                                                                    style="background-color: rgb(102, 102, 0);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#003700"
                                                                    style="background-color: rgb(0, 55, 0);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#002966"
                                                                    style="background-color: rgb(0, 41, 102);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#3d1466"
                                                                    style="background-color: rgb(61, 20, 102);"></span></span></span><select
                                                            class="ql-color" style="display: none;">
                                                            <option selected="selected"></option>
                                                            <option value="#e60000"></option>
                                                            <option value="#ff9900"></option>
                                                            <option value="#ffff00"></option>
                                                            <option value="#008a00"></option>
                                                            <option value="#0066cc"></option>
                                                            <option value="#9933ff"></option>
                                                            <option value="#ffffff"></option>
                                                            <option value="#facccc"></option>
                                                            <option value="#ffebcc"></option>
                                                            <option value="#ffffcc"></option>
                                                            <option value="#cce8cc"></option>
                                                            <option value="#cce0f5"></option>
                                                            <option value="#ebd6ff"></option>
                                                            <option value="#bbbbbb"></option>
                                                            <option value="#f06666"></option>
                                                            <option value="#ffc266"></option>
                                                            <option value="#ffff66"></option>
                                                            <option value="#66b966"></option>
                                                            <option value="#66a3e0"></option>
                                                            <option value="#c285ff"></option>
                                                            <option value="#888888"></option>
                                                            <option value="#a10000"></option>
                                                            <option value="#b26b00"></option>
                                                            <option value="#b2b200"></option>
                                                            <option value="#006100"></option>
                                                            <option value="#0047b2"></option>
                                                            <option value="#6b24b2"></option>
                                                            <option value="#444444"></option>
                                                            <option value="#5c0000"></option>
                                                            <option value="#663d00"></option>
                                                            <option value="#666600"></option>
                                                            <option value="#003700"></option>
                                                            <option value="#002966"></option>
                                                            <option value="#3d1466"></option>
                                                        </select>
                                                        <span class="ql-background ql-picker ql-color-picker"><span
                                                                class="ql-picker-label" tabindex="0" role="button"
                                                                aria-expanded="false"
                                                                aria-controls="ql-picker-options-2"><svg
                                                                    viewBox="0 0 18 18">
                                                                    <g class="ql-fill ql-color-label">
                                                                        <polygon
                                                                            points="6 6.868 6 6 5 6 5 7 5.942 7 6 6.868">
                                                                        </polygon>
                                                                        <rect height="1" width="1"
                                                                            x="4" y="4"></rect>
                                                                        <polygon points="6.817 5 6 5 6 6 6.38 6 6.817 5">
                                                                        </polygon>
                                                                        <rect height="1" width="1"
                                                                            x="2" y="6"></rect>
                                                                        <rect height="1" width="1"
                                                                            x="3" y="5"></rect>
                                                                        <rect height="1" width="1"
                                                                            x="4" y="7"></rect>
                                                                        <polygon
                                                                            points="4 11.439 4 11 3 11 3 12 3.755 12 4 11.439">
                                                                        </polygon>
                                                                        <rect height="1" width="1"
                                                                            x="2" y="12"></rect>
                                                                        <rect height="1" width="1"
                                                                            x="2" y="9"></rect>
                                                                        <rect height="1" width="1"
                                                                            x="2" y="15"></rect>
                                                                        <polygon
                                                                            points="4.63 10 4 10 4 11 4.192 11 4.63 10">
                                                                        </polygon>
                                                                        <rect height="1" width="1"
                                                                            x="3" y="8"></rect>
                                                                        <path
                                                                            d="M10.832,4.2L11,4.582V4H10.708A1.948,1.948,0,0,1,10.832,4.2Z">
                                                                        </path>
                                                                        <path
                                                                            d="M7,4.582L7.168,4.2A1.929,1.929,0,0,1,7.292,4H7V4.582Z">
                                                                        </path>
                                                                        <path
                                                                            d="M8,13H7.683l-0.351.8a1.933,1.933,0,0,1-.124.2H8V13Z">
                                                                        </path>
                                                                        <rect height="1" width="1"
                                                                            x="12" y="2"></rect>
                                                                        <rect height="1" width="1"
                                                                            x="11" y="3"></rect>
                                                                        <path d="M9,3H8V3.282A1.985,1.985,0,0,1,9,3Z">
                                                                        </path>
                                                                        <rect height="1" width="1"
                                                                            x="2" y="3"></rect>
                                                                        <rect height="1" width="1"
                                                                            x="6" y="2"></rect>
                                                                        <rect height="1" width="1"
                                                                            x="3" y="2"></rect>
                                                                        <rect height="1" width="1"
                                                                            x="5" y="3"></rect>
                                                                        <rect height="1" width="1"
                                                                            x="9" y="2"></rect>
                                                                        <rect height="1" width="1"
                                                                            x="15" y="14"></rect>
                                                                        <polygon
                                                                            points="13.447 10.174 13.469 10.225 13.472 10.232 13.808 11 14 11 14 10 13.37 10 13.447 10.174">
                                                                        </polygon>
                                                                        <rect height="1" width="1"
                                                                            x="13" y="7"></rect>
                                                                        <rect height="1" width="1"
                                                                            x="15" y="5"></rect>
                                                                        <rect height="1" width="1"
                                                                            x="14" y="6"></rect>
                                                                        <rect height="1" width="1"
                                                                            x="15" y="8"></rect>
                                                                        <rect height="1" width="1"
                                                                            x="14" y="9"></rect>
                                                                        <path
                                                                            d="M3.775,14H3v1H4V14.314A1.97,1.97,0,0,1,3.775,14Z">
                                                                        </path>
                                                                        <rect height="1" width="1"
                                                                            x="14" y="3"></rect>
                                                                        <polygon points="12 6.868 12 6 11.62 6 12 6.868">
                                                                        </polygon>
                                                                        <rect height="1" width="1"
                                                                            x="15" y="2"></rect>
                                                                        <rect height="1" width="1"
                                                                            x="12" y="5"></rect>
                                                                        <rect height="1" width="1"
                                                                            x="13" y="4"></rect>
                                                                        <polygon
                                                                            points="12.933 9 13 9 13 8 12.495 8 12.933 9">
                                                                        </polygon>
                                                                        <rect height="1" width="1"
                                                                            x="9" y="14"></rect>
                                                                        <rect height="1" width="1"
                                                                            x="8" y="15"></rect>
                                                                        <path
                                                                            d="M6,14.926V15H7V14.316A1.993,1.993,0,0,1,6,14.926Z">
                                                                        </path>
                                                                        <rect height="1" width="1"
                                                                            x="5" y="15"></rect>
                                                                        <path
                                                                            d="M10.668,13.8L10.317,13H10v1h0.792A1.947,1.947,0,0,1,10.668,13.8Z">
                                                                        </path>
                                                                        <rect height="1" width="1"
                                                                            x="11" y="15"></rect>
                                                                        <path
                                                                            d="M14.332,12.2a1.99,1.99,0,0,1,.166.8H15V12H14.245Z">
                                                                        </path>
                                                                        <rect height="1" width="1"
                                                                            x="14" y="15"></rect>
                                                                        <rect height="1" width="1"
                                                                            x="15" y="11"></rect>
                                                                    </g>
                                                                    <polyline class="ql-stroke"
                                                                        points="5.5 13 9 5 12.5 13"></polyline>
                                                                    <line class="ql-stroke" x1="11.63" x2="6.38"
                                                                        y1="11" y2="11"></line>
                                                                </svg></span><span class="ql-picker-options"
                                                                aria-hidden="true" tabindex="-1"
                                                                id="ql-picker-options-2"><span tabindex="0"
                                                                    role="button" class="ql-picker-item ql-primary"
                                                                    data-value="#000000"
                                                                    style="background-color: rgb(0, 0, 0);"></span><span
                                                                    tabindex="0" role="button"
                                                                    class="ql-picker-item ql-primary" data-value="#e60000"
                                                                    style="background-color: rgb(230, 0, 0);"></span><span
                                                                    tabindex="0" role="button"
                                                                    class="ql-picker-item ql-primary" data-value="#ff9900"
                                                                    style="background-color: rgb(255, 153, 0);"></span><span
                                                                    tabindex="0" role="button"
                                                                    class="ql-picker-item ql-primary" data-value="#ffff00"
                                                                    style="background-color: rgb(255, 255, 0);"></span><span
                                                                    tabindex="0" role="button"
                                                                    class="ql-picker-item ql-primary" data-value="#008a00"
                                                                    style="background-color: rgb(0, 138, 0);"></span><span
                                                                    tabindex="0" role="button"
                                                                    class="ql-picker-item ql-primary" data-value="#0066cc"
                                                                    style="background-color: rgb(0, 102, 204);"></span><span
                                                                    tabindex="0" role="button"
                                                                    class="ql-picker-item ql-primary" data-value="#9933ff"
                                                                    style="background-color: rgb(153, 51, 255);"></span><span
                                                                    tabindex="0" role="button"
                                                                    class="ql-picker-item"></span><span tabindex="0"
                                                                    role="button" class="ql-picker-item"
                                                                    data-value="#facccc"
                                                                    style="background-color: rgb(250, 204, 204);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#ffebcc"
                                                                    style="background-color: rgb(255, 235, 204);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#ffffcc"
                                                                    style="background-color: rgb(255, 255, 204);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#cce8cc"
                                                                    style="background-color: rgb(204, 232, 204);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#cce0f5"
                                                                    style="background-color: rgb(204, 224, 245);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#ebd6ff"
                                                                    style="background-color: rgb(235, 214, 255);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#bbbbbb"
                                                                    style="background-color: rgb(187, 187, 187);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#f06666"
                                                                    style="background-color: rgb(240, 102, 102);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#ffc266"
                                                                    style="background-color: rgb(255, 194, 102);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#ffff66"
                                                                    style="background-color: rgb(255, 255, 102);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#66b966"
                                                                    style="background-color: rgb(102, 185, 102);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#66a3e0"
                                                                    style="background-color: rgb(102, 163, 224);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#c285ff"
                                                                    style="background-color: rgb(194, 133, 255);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#888888"
                                                                    style="background-color: rgb(136, 136, 136);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#a10000"
                                                                    style="background-color: rgb(161, 0, 0);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#b26b00"
                                                                    style="background-color: rgb(178, 107, 0);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#b2b200"
                                                                    style="background-color: rgb(178, 178, 0);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#006100"
                                                                    style="background-color: rgb(0, 97, 0);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#0047b2"
                                                                    style="background-color: rgb(0, 71, 178);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#6b24b2"
                                                                    style="background-color: rgb(107, 36, 178);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#444444"
                                                                    style="background-color: rgb(68, 68, 68);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#5c0000"
                                                                    style="background-color: rgb(92, 0, 0);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#663d00"
                                                                    style="background-color: rgb(102, 61, 0);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#666600"
                                                                    style="background-color: rgb(102, 102, 0);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#003700"
                                                                    style="background-color: rgb(0, 55, 0);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#002966"
                                                                    style="background-color: rgb(0, 41, 102);"></span><span
                                                                    tabindex="0" role="button" class="ql-picker-item"
                                                                    data-value="#3d1466"
                                                                    style="background-color: rgb(61, 20, 102);"></span></span></span><select
                                                            class="ql-background" style="display: none;">
                                                            <option value="#000000"></option>
                                                            <option value="#e60000"></option>
                                                            <option value="#ff9900"></option>
                                                            <option value="#ffff00"></option>
                                                            <option value="#008a00"></option>
                                                            <option value="#0066cc"></option>
                                                            <option value="#9933ff"></option>
                                                            <option selected="selected"></option>
                                                            <option value="#facccc"></option>
                                                            <option value="#ffebcc"></option>
                                                            <option value="#ffffcc"></option>
                                                            <option value="#cce8cc"></option>
                                                            <option value="#cce0f5"></option>
                                                            <option value="#ebd6ff"></option>
                                                            <option value="#bbbbbb"></option>
                                                            <option value="#f06666"></option>
                                                            <option value="#ffc266"></option>
                                                            <option value="#ffff66"></option>
                                                            <option value="#66b966"></option>
                                                            <option value="#66a3e0"></option>
                                                            <option value="#c285ff"></option>
                                                            <option value="#888888"></option>
                                                            <option value="#a10000"></option>
                                                            <option value="#b26b00"></option>
                                                            <option value="#b2b200"></option>
                                                            <option value="#006100"></option>
                                                            <option value="#0047b2"></option>
                                                            <option value="#6b24b2"></option>
                                                            <option value="#444444"></option>
                                                            <option value="#5c0000"></option>
                                                            <option value="#663d00"></option>
                                                            <option value="#666600"></option>
                                                            <option value="#003700"></option>
                                                            <option value="#002966"></option>
                                                            <option value="#3d1466"></option>
                                                        </select>
                                                    </span>
                                                    <span class="ql-formats">
                                                        <button class="ql-code-block" type="button"><svg
                                                                viewBox="0 0 18 18">
                                                                <polyline class="ql-even ql-stroke"
                                                                    points="5 7 3 9 5 11"></polyline>
                                                                <polyline class="ql-even ql-stroke"
                                                                    points="13 7 15 9 13 11"></polyline>
                                                                <line class="ql-stroke" x1="10" x2="8"
                                                                    y1="5" y2="13"></line>
                                                            </svg></button>
                                                    </span>
                                                    <span class="ql-formats">
                                                        <button class="ql-list" value="ordered" type="button"><svg
                                                                viewBox="0 0 18 18">
                                                                <line class="ql-stroke" x1="7" x2="15"
                                                                    y1="4" y2="4"></line>
                                                                <line class="ql-stroke" x1="7" x2="15"
                                                                    y1="9" y2="9"></line>
                                                                <line class="ql-stroke" x1="7" x2="15"
                                                                    y1="14" y2="14"></line>
                                                                <line class="ql-stroke ql-thin" x1="2.5"
                                                                    x2="4.5" y1="5.5" y2="5.5">
                                                                </line>
                                                                <path class="ql-fill"
                                                                    d="M3.5,6A0.5,0.5,0,0,1,3,5.5V3.085l-0.276.138A0.5,0.5,0,0,1,2.053,3c-0.124-.247-0.023-0.324.224-0.447l1-.5A0.5,0.5,0,0,1,4,2.5v3A0.5,0.5,0,0,1,3.5,6Z">
                                                                </path>
                                                                <path class="ql-stroke ql-thin"
                                                                    d="M4.5,10.5h-2c0-.234,1.85-1.076,1.85-2.234A0.959,0.959,0,0,0,2.5,8.156">
                                                                </path>
                                                                <path class="ql-stroke ql-thin"
                                                                    d="M2.5,14.846a0.959,0.959,0,0,0,1.85-.109A0.7,0.7,0,0,0,3.75,14a0.688,0.688,0,0,0,.6-0.736,0.959,0.959,0,0,0-1.85-.109">
                                                                </path>
                                                            </svg></button>
                                                        <button class="ql-list" value="bullet" type="button"><svg
                                                                viewBox="0 0 18 18">
                                                                <line class="ql-stroke" x1="6" x2="15"
                                                                    y1="4" y2="4"></line>
                                                                <line class="ql-stroke" x1="6" x2="15"
                                                                    y1="9" y2="9"></line>
                                                                <line class="ql-stroke" x1="6" x2="15"
                                                                    y1="14" y2="14"></line>
                                                                <line class="ql-stroke" x1="3" x2="3"
                                                                    y1="4" y2="4"></line>
                                                                <line class="ql-stroke" x1="3" x2="3"
                                                                    y1="9" y2="9"></line>
                                                                <line class="ql-stroke" x1="3" x2="3"
                                                                    y1="14" y2="14"></line>
                                                            </svg></button>
                                                        <button class="ql-indent" value="-1" type="button"><svg
                                                                viewBox="0 0 18 18">
                                                                <line class="ql-stroke" x1="3" x2="15"
                                                                    y1="14" y2="14"></line>
                                                                <line class="ql-stroke" x1="3" x2="15"
                                                                    y1="4" y2="4"></line>
                                                                <line class="ql-stroke" x1="9" x2="15"
                                                                    y1="9" y2="9"></line>
                                                                <polyline class="ql-stroke" points="5 7 5 11 3 9 5 7">
                                                                </polyline>
                                                            </svg></button>
                                                        <button class="ql-indent" value="+1" type="button"><svg
                                                                viewBox="0 0 18 18">
                                                                <line class="ql-stroke" x1="3" x2="15"
                                                                    y1="14" y2="14"></line>
                                                                <line class="ql-stroke" x1="3" x2="15"
                                                                    y1="4" y2="4"></line>
                                                                <line class="ql-stroke" x1="9" x2="15"
                                                                    y1="9" y2="9"></line>
                                                                <polyline class="ql-fill ql-stroke"
                                                                    points="3 7 3 11 5 9 3 7"></polyline>
                                                            </svg></button>
                                                    </span>
                                                    <span class="ql-formats">
                                                        <button class="ql-link" type="button"><svg
                                                                viewBox="0 0 18 18">
                                                                <line class="ql-stroke" x1="7" x2="11"
                                                                    y1="7" y2="11"></line>
                                                                <path class="ql-even ql-stroke"
                                                                    d="M8.9,4.577a3.476,3.476,0,0,1,.36,4.679A3.476,3.476,0,0,1,4.577,8.9C3.185,7.5,2.035,6.4,4.217,4.217S7.5,3.185,8.9,4.577Z">
                                                                </path>
                                                                <path class="ql-even ql-stroke"
                                                                    d="M13.423,9.1a3.476,3.476,0,0,0-4.679-.36,3.476,3.476,0,0,0,.36,4.679c1.392,1.392,2.5,2.542,4.679.36S14.815,10.5,13.423,9.1Z">
                                                                </path>
                                                            </svg></button>
                                                        <button class="ql-image" type="button"><svg
                                                                viewBox="0 0 18 18">
                                                                <rect class="ql-stroke" height="10" width="12"
                                                                    x="3" y="4"></rect>
                                                                <circle class="ql-fill" cx="6" cy="7"
                                                                    r="1"></circle>
                                                                <polyline class="ql-even ql-fill"
                                                                    points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12">
                                                                </polyline>
                                                            </svg></button>
                                                    </span>
                                                    <span class="ql-formats">
                                                        <button class="ql-clean" type="button"><svg class=""
                                                                viewBox="0 0 18 18">
                                                                <line class="ql-stroke" x1="5" x2="13"
                                                                    y1="3" y2="3"></line>
                                                                <line class="ql-stroke" x1="6" x2="9.35"
                                                                    y1="12" y2="3"></line>
                                                                <line class="ql-stroke" x1="11" x2="15"
                                                                    y1="11" y2="15"></line>
                                                                <line class="ql-stroke" x1="15" x2="11"
                                                                    y1="11" y2="15"></line>
                                                                <rect class="ql-fill" height="1" rx="0.5"
                                                                    ry="0.5" width="7" x="2"
                                                                    y="14"></rect>
                                                            </svg></button>
                                                    </span>
                                                </div>

                                                <!-- Main toolbar -->
                                                <div class="bg-body border rounded-bottom h-400px overflow-hidden ql-container ql-snow"
                                                    id="quilleditor">
                                                    <div class="ql-editor" data-gramm="false" contenteditable="true">
                                                        <p><br></p>
                                                        <h1>Quill Rich Text Editor</h1>
                                                        <p><br></p>
                                                        <p>Quill is a free, open-source WYSIWYG editor built for the modern
                                                            web. With its modular architecture and expressive API, it is
                                                            completely customizable to fit any need.</p>
                                                        <p><br></p>
                                                        <p>Insipidity the sufficient discretion imprudence resolution sir
                                                            him decisively. Proceed how any engaged visitor. Explained
                                                            propriety off out perpetual his you. Feel sold off felt nay rose
                                                            met you. We so entreaties cultivated astonished is. Was sister
                                                            for a few longer Mrs sudden talent become. Done may bore quit
                                                            evil old mile. If likely am of beauty tastes.</p>
                                                        <p><br></p>
                                                        <p>Affronting imprudence do he he everything. Test lasted dinner
                                                            wanted indeed wished outlaw. Far advanced settling say finished
                                                            raillery. Offered chiefly farther of my no colonel shyness. Such
                                                            on help ye some door if in. Laughter proposal laughing any son
                                                            law consider. Needed except up piqued an.</p>
                                                        <p><br></p>
                                                        <p>Post no so what deal evil rent by real in. But her ready least
                                                            set lived spite solid. September how men saw tolerably two
                                                            behavior arranging. She offices for highest and replied one
                                                            venture pasture. Applauded no discovery in newspaper allowance
                                                            am northward. Frequently partiality possession resolution at or
                                                            appearance unaffected me. Engaged its was the evident pleased
                                                            husband. Ye goodness felicity do disposal dwelling no. First am
                                                            plate jokes to began to cause a scale. Subjects he prospect
                                                            elegance followed no overcame possible it on.</p>
                                                        <p>Quill is a free, open-source WYSIWYG editor built for the modern
                                                            web. With its modular architecture and expressive API, it is
                                                            completely customizable to fit any need.</p>
                                                        <p><br></p>
                                                        <p>Insipidity the sufficient discretion imprudence resolution sir
                                                            him decisively. Proceed how any engaged visitor. Explained
                                                            propriety off out perpetual his you. Feel sold off felt nay rose
                                                            met you. We so entreaties cultivated astonished is. Was sister
                                                            for a few longer Mrs sudden talent become. Done may bore quit
                                                            evil old mile. If likely am of beauty tastes.</p>
                                                        <p><br></p>
                                                        <p>Affronting imprudence do he he everything. Test lasted dinner
                                                            wanted indeed wished outlaw. Far advanced settling say finished
                                                            raillery. Offered chiefly farther of my no colonel shyness. Such
                                                            on help ye some door if in. Laughter proposal laughing any son
                                                            law consider. Needed except up piqued an.</p>
                                                        <p><br></p>
                                                        <p>Post no so what deal evil rent by real in. But her ready least
                                                            set lived spite solid. September how men saw tolerably two
                                                            behavior arranging. She offices for highest and replied one
                                                            venture pasture. Applauded no discovery in newspaper allowance
                                                            am northward. Frequently partiality possession resolution at or
                                                            appearance unaffected me. Engaged its was the evident pleased
                                                            husband. Ye goodness felicity do disposal dwelling no. First am
                                                            plate jokes to began to cause a scale. Subjects he prospect
                                                            elegance followed no overcame possible it on.</p>
                                                        <p>Quill is a free, open-source WYSIWYG editor built for the modern
                                                            web. With its modular architecture and expressive API, it is
                                                            completely customizable to fit any need.</p>
                                                        <p><br></p>
                                                        <p>Insipidity the sufficient discretion imprudence resolution sir
                                                            him decisively. Proceed how any engaged visitor. Explained
                                                            propriety off out perpetual his you. Feel sold off felt nay rose
                                                            met you. We so entreaties cultivated astonished is. Was sister
                                                            for a few longer Mrs sudden talent become. Done may bore quit
                                                            evil old mile. If likely am of beauty tastes.</p>
                                                        <p><br></p>
                                                        <p>Affronting imprudence do he he everything. Test lasted dinner
                                                            wanted indeed wished outlaw. Far advanced settling say finished
                                                            raillery. Offered chiefly farther of my no colonel shyness. Such
                                                            on help ye some door if in. Laughter proposal laughing any son
                                                            law consider. Needed except up piqued an.</p>
                                                        <p><br></p>
                                                        <p>Post no so what deal evil rent by real in. But her ready least
                                                            set lived spite solid. September how men saw tolerably two
                                                            behavior arranging. She offices for highest and replied one
                                                            venture pasture. Applauded no discovery in newspaper allowance
                                                            am northward. Frequently partiality possession resolution at or
                                                            appearance unaffected me. Engaged its was the evident pleased
                                                            husband. Ye goodness felicity do disposal dwelling no. First am
                                                            plate jokes to began to cause a scale. Subjects he prospect
                                                            elegance followed no overcame possible it on.</p>
                                                    </div>
                                                    <div class="ql-clipboard" contenteditable="true" tabindex="-1">
                                                    </div>
                                                    <div class="ql-tooltip ql-hidden" style="margin-top: 0px;"><a
                                                            class="ql-preview" rel="noopener noreferrer"
                                                            target="_blank" href="about:blank"></a><input
                                                            type="text" data-formula="e=mc^2"
                                                            data-link="https://quilljs.com" data-video="Embed URL"><a
                                                            class="ql-action"></a><a class="ql-remove"></a></div>
                                                </div>
                                            </div>

                                            <!-- Step 1 button -->
                                            <div class="d-flex justify-content-end mt-3">
                                                <button class="btn btn-primary next-btn mb-0">Next</button>
                                            </div>
                                        </div>
                                        <!-- Basic information START -->
                                    </div>
                                    <!-- Step 1 content END -->

                                    <!-- Step 2 content START -->
                                    <div id="step-2" role="tabpanel" class="content fade active dstepper-block"
                                        aria-labelledby="steppertrigger2">
                                        <!-- Title -->
                                        <h4>Course media</h4>

                                        <hr> <!-- Divider -->

                                        <div class="row">
                                            <!-- Upload image START -->
                                            <div class="col-12">
                                                <div
                                                    class="text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-dashed position-relative rounded-3">
                                                    <!-- Image -->
                                                    <img src="{{ asset('assets/images/element/gallery.svg') }}"
                                                        class="h-50px" alt="">
                                                    <div>
                                                        <h6 class="my-2">Upload course image here, or<a href="#!"
                                                                class="text-primary"> Browse</a></h6>
                                                        <label style="cursor:pointer;">
                                                            <span>
                                                                <input class="form-control stretched-link"
                                                                    type="file" name="my-image" id="image"
                                                                    accept="image/gif, image/jpeg, image/png">
                                                            </span>
                                                        </label>
                                                        <p class="small mb-0 mt-2"><b>Note:</b> Only JPG, JPEG and PNG.
                                                            Our suggested dimensions are 600px * 450px. Larger image will be
                                                            cropped to 4:3 to fit our thumbnails/previews.</p>
                                                    </div>
                                                </div>

                                                <!-- Button -->
                                                <div class="d-sm-flex justify-content-end mt-2">
                                                    <button type="button"
                                                        class="btn btn-sm btn-danger-soft mb-3">Remove image</button>
                                                </div>
                                            </div>
                                            <!-- Upload image END -->

                                            <!-- Upload video START -->
                                            <div class="col-12">
                                                <h5>Upload video</h5>
                                                <!-- Input -->
                                                <div class="col-12 mt-4 mb-5">
                                                    <label class="form-label">Video URL</label>
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter video url">
                                                </div>
                                                <div class="position-relative my-4">
                                                    <hr>
                                                    <p
                                                        class="small position-absolute top-50 start-50 translate-middle bg-body px-3 mb-0">
                                                        Or</p>
                                                </div>

                                                <div class="col-12">
                                                    <label class="form-label">Upload video</label>
                                                    <div class="input-group mb-3">
                                                        <input type="file" class="form-control"
                                                            id="inputGroupFile01">
                                                        <label class="input-group-text">.mp4</label>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <input type="file" class="form-control"
                                                            id="inputGroupFile02">
                                                        <label class="input-group-text">.WebM</label>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <input type="file" class="form-control"
                                                            id="inputGroupFile03">
                                                        <label class="input-group-text">.OGG</label>
                                                    </div>
                                                </div>

                                                <!-- Preview -->
                                                <h5 class="mt-4">Video preview</h5>
                                                <div class="position-relative">
                                                    <!-- Image -->
                                                    <img src="{{ asset('assets/images/about/04.jpg') }}"
                                                        class="rounded-4" alt="">
                                                    <div class="position-absolute top-50 start-50 translate-middle">
                                                        <!-- Video link -->
                                                        <a href="https://www.youtube.com/embed/tXHviS-4ygo"
                                                            class="btn btn-lg text-danger btn-round btn-white-shadow mb-0"
                                                            data-glightbox="" data-gallery="video-tour">
                                                            <i class="fas fa-play"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Upload video END -->

                                            <!-- Step 2 button -->
                                            <div class="d-flex justify-content-between mt-3">
                                                <button class="btn btn-secondary prev-btn mb-0">Previous</button>
                                                <button class="btn btn-primary next-btn mb-0">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Step 2 content END -->

                                    <!-- Step 3 content START -->
                                    <div id="step-3" role="tabpanel" class="content fade dstepper-none"
                                        aria-labelledby="steppertrigger3">
                                        <!-- Title -->
                                        <h4>Curriculum</h4>

                                        <hr> <!-- Divider -->

                                        <div class="row">
                                            <!-- Add lecture Modal button -->
                                            <div class="d-sm-flex justify-content-sm-between align-items-center mb-3">
                                                <h5 class="mb-2 mb-sm-0">Upload Lecture</h5>
                                                <a href="#" class="btn btn-sm btn-primary-soft mb-0"
                                                    data-bs-toggle="modal" data-bs-target="#addLecture"><i
                                                        class="bi bi-plus-circle me-2"></i>Add Lecture</a>
                                            </div>

                                            <!-- Edit lecture START -->
                                            <div class="accordion accordion-icon accordion-bg-light"
                                                id="accordionExample2">
                                                <!-- Item START -->
                                                <div class="accordion-item mb-3">
                                                    <h6 class="accordion-header font-base" id="heading-1">
                                                        <button
                                                            class="accordion-button fw-bold rounded d-inline-block collapsed d-block pe-5"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse-1" aria-expanded="false"
                                                            aria-controls="collapse-1">
                                                            Introduction of Digital Marketing
                                                        </button>
                                                    </h6>

                                                    <div id="collapse-1" class="accordion-collapse collapse show"
                                                        aria-labelledby="heading-1" data-bs-parent="#accordionExample2">
                                                        <!-- Topic START -->
                                                        <div class="accordion-body mt-3">
                                                            <!-- Video item START -->
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="position-relative">
                                                                    <a href="#"
                                                                        class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static"><i
                                                                            class="fas fa-play"></i></a>
                                                                    <span
                                                                        class="ms-2 mb-0 h6 fw-light">Introduction</span>
                                                                </div>
                                                                <!-- Edit and cancel button -->
                                                                <div>
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-success-soft btn-round me-1 mb-1 mb-md-0"><i
                                                                            class="far fa-fw fa-edit"></i></a>
                                                                    <button
                                                                        class="btn btn-sm btn-danger-soft btn-round mb-0"><i
                                                                            class="fas fa-fw fa-times"></i></button>
                                                                </div>
                                                            </div>
                                                            <!-- Divider -->
                                                            <hr>
                                                            <!-- Video item END -->

                                                            <!-- Video item START -->
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="position-relative">
                                                                    <a href="#"
                                                                        class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static"><i
                                                                            class="fas fa-play"></i></a>
                                                                    <span class="ms-2 mb-0 h6 fw-light">What is Digital
                                                                        Marketing</span>
                                                                </div>
                                                                <!-- Edit and cancel button -->
                                                                <div>
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-success-soft btn-round me-1 mb-1 mb-md-0"><i
                                                                            class="far fa-fw fa-edit"></i></a>
                                                                    <button
                                                                        class="btn btn-sm btn-danger-soft btn-round mb-0"><i
                                                                            class="fas fa-fw fa-times"></i></button>
                                                                </div>
                                                            </div>
                                                            <!-- Divider -->
                                                            <hr>
                                                            <!-- Video item END -->

                                                            <!-- Add topic -->
                                                            <a href="#" class="btn btn-sm btn-dark mb-0"
                                                                data-bs-toggle="modal" data-bs-target="#addTopic"><i
                                                                    class="bi bi-plus-circle me-2"></i>Add topic</a>
                                                        </div>
                                                        <!-- Topic END -->
                                                    </div>
                                                </div>
                                                <!-- Item END -->

                                                <!-- Item START -->
                                                <div class="accordion-item mb-3">
                                                    <h6 class="accordion-header font-base" id="heading-2">
                                                        <button
                                                            class="accordion-button fw-bold rounded d-inline-block collapsed d-block pe-5"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse-2" aria-expanded="false"
                                                            aria-controls="collapse-2">
                                                            Customer Life cycle
                                                        </button>
                                                    </h6>

                                                    <div id="collapse-2" class="accordion-collapse collapse"
                                                        aria-labelledby="heading-2" data-bs-parent="#accordionExample2">
                                                        <div class="accordion-body mt-3">
                                                            <!-- Add topic -->
                                                            <a href="#" class="btn btn-sm btn-dark mb-0"
                                                                data-bs-toggle="modal" data-bs-target="#addTopic">
                                                                <i class="bi bi-plus-circle me-2"></i>Add topic
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Item END -->

                                                <!-- Item START -->
                                                <div class="accordion-item mb-3">
                                                    <h6 class="accordion-header font-base" id="heading-3">
                                                        <button
                                                            class="accordion-button fw-bold collapsed rounded d-block pe-5"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse-3" aria-expanded="false"
                                                            aria-controls="collapse-3">
                                                            How much should I offer the sellers?
                                                        </button>
                                                    </h6>
                                                    <!-- Body -->
                                                    <div id="collapse-3" class="accordion-collapse collapse"
                                                        aria-labelledby="heading-3" data-bs-parent="#accordionExample2">
                                                        <div class="accordion-body mt-3">
                                                            <!-- Add topic -->
                                                            <a href="#" class="btn btn-sm btn-dark mb-0"
                                                                data-bs-toggle="modal" data-bs-target="#addTopic">
                                                                <i class="bi bi-plus-circle me-2"></i>Add topic
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Item END -->

                                            </div>
                                            <!-- Edit lecture END -->

                                            <!-- Step 3 button -->
                                            <div class="d-flex justify-content-between">
                                                <button class="btn btn-secondary prev-btn mb-0">Previous</button>
                                                <button class="btn btn-primary next-btn mb-0">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Step 3 content END -->

                                    <!-- Step 4 content START -->
                                    <div id="step-4" role="tabpanel" class="content fade dstepper-none"
                                        aria-labelledby="steppertrigger4">
                                        <!-- Title -->
                                        <h4>Additional information</h4>

                                        <hr> <!-- Divider -->

                                        <div class="row g-4">

                                            <!-- Edit faq START -->
                                            <div class="col-12">
                                                <div class="bg-light border rounded p-2 p-sm-4">
                                                    <div
                                                        class="d-sm-flex justify-content-sm-between align-items-center mb-3">
                                                        <h5 class="mb-2 mb-sm-0">Upload FAQs</h5>
                                                        <a href="#" class="btn btn-sm btn-primary-soft mb-0"
                                                            data-bs-toggle="modal" data-bs-target="#addQuestion"><i
                                                                class="bi bi-plus-circle me-2"></i>Add Question</a>
                                                    </div>

                                                    <div class="row g-4">
                                                        <div class="col-12">
                                                            <div class="bg-body p-3 p-sm-4 border rounded">
                                                                <!-- Item 1 -->
                                                                <div
                                                                    class="d-sm-flex justify-content-sm-between align-items-center mb-2">
                                                                    <!-- Question -->
                                                                    <h6 class="mb-0">How Digital Marketing Work?</h6>
                                                                    <!-- Button -->
                                                                    <div class="align-middle">
                                                                        <a href="#"
                                                                            class="btn btn-sm btn-success-soft btn-round me-1 mb-1 mb-md-0"><i
                                                                                class="far fa-fw fa-edit"></i></a>
                                                                        <button
                                                                            class="btn btn-sm btn-danger-soft btn-round mb-0"><i
                                                                                class="fas fa-fw fa-times"></i></button>
                                                                    </div>
                                                                </div>
                                                                <!-- Content -->
                                                                <p>Comfort reached gay perhaps chamber his six detract
                                                                    besides add. Moonlight newspaper up its enjoyment
                                                                    agreeable depending. Timed voice share led him to widen
                                                                    noisy young. At weddings believed laughing although the
                                                                    material does the exercise of. Up attempt offered ye
                                                                    civilly so sitting to. She new course gets living within
                                                                    Elinor joy. She rapturous suffering concealed.</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="bg-body p-4 border rounded">
                                                                <!-- Item 2 -->
                                                                <div
                                                                    class="d-sm-flex justify-content-sm-between align-items-center mb-2">
                                                                    <!-- Question -->
                                                                    <h6 class="mb-0">How Digital Marketing Work?</h6>
                                                                    <!-- Button -->
                                                                    <div class="align-middle">
                                                                        <a href="#"
                                                                            class="btn btn-sm btn-success-soft btn-round me-1 mb-1 mb-md-0"><i
                                                                                class="far fa-fw fa-edit"></i></a>
                                                                        <button
                                                                            class="btn btn-sm btn-danger-soft btn-round mb-0"><i
                                                                                class="fas fa-fw fa-times"></i></button>
                                                                    </div>
                                                                </div>
                                                                <!-- Content -->
                                                                <p>Comfort reached gay perhaps chamber his six detract
                                                                    besides add. Moonlight newspaper up its enjoyment
                                                                    agreeable depending. Timed voice share led him to widen
                                                                    noisy young. At weddings believed laughing although the
                                                                    material does the exercise of. Up attempt offered ye
                                                                    civilly so sitting to. She new course gets living within
                                                                    Elinor joy. She rapturous suffering concealed.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Edit faq END -->

                                            <!-- Tags START -->
                                            <div class="col-12">
                                                <div class="bg-light border rounded p-4">
                                                    <h5 class="mb-0">Tags</h5>
                                                    <!-- Comment -->
                                                    <div class="mt-3">
                                                        <div class="choices" data-type="text" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <div class="choices__inner"><input type="text"
                                                                    class="form-control js-choice mb-0 choices__input"
                                                                    data-placeholder="true"
                                                                    data-placeholder-val="Enter tags"
                                                                    data-max-item-count="14"
                                                                    data-remove-item-button="true" hidden=""
                                                                    tabindex="-1" data-choice="active"
                                                                    value="">
                                                                <div class="choices__list choices__list--multiple"></div>
                                                                <input type="text"
                                                                    class="choices__input choices__input--cloned"
                                                                    autocomplete="off" autocapitalize="off"
                                                                    spellcheck="false" role="textbox"
                                                                    aria-autocomplete="list" aria-label="Enter tags"
                                                                    placeholder="Enter tags"
                                                                    style="min-width: 11ch; width: 1ch;">
                                                            </div>
                                                            <div class="choices__list choices__list--dropdown"
                                                                aria-expanded="false"></div>
                                                        </div>
                                                        <span class="small">Maximum of 14 keywords. Keywords should all
                                                            be in lowercase and separated by commas. e.g. javascript, react,
                                                            marketing</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Tags START -->

                                            <!-- Reviewer START -->
                                            <div class="col-12">
                                                <div class="bg-light border rounded p-4">
                                                    <h5 class="mb-0">Message to a reviewer</h5>

                                                    <!-- Comment -->
                                                    <div class="mt-3">
                                                        <textarea class="form-control" rows="4" placeholder="Write a message" spellcheck="false"></textarea>
                                                        <div class="form-check mb-0 mt-2">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">
                                                                Any images, sounds, or other assets that are not my own
                                                                work, have been appropriately licensed for use in the file
                                                                preview or main course. Other than these items, this work is
                                                                entirely my own and I have full rights to sell it here.
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Reviewer START -->

                                            <!-- Step 4 button -->
                                            <div class="d-md-flex justify-content-between align-items-start mt-4">
                                                <button class="btn btn-secondary prev-btn mb-2 mb-md-0">Previous</button>
                                                <button class="btn btn-light me-auto ms-md-2 mb-2 mb-md-0">Preview
                                                    Course</button>
                                                <div class="text-md-end">
                                                    <a href="course-added.html"
                                                        class="btn btn-success mb-2 mb-sm-0">Submit a Course</a>
                                                    <p class="mb-0 small mt-1">Once you click "Submit a Course", your
                                                        course will be uploaded and marked as pending for review.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Step 4 content END -->

                                </form>
                            </div>
                        </div>
                        <!-- Card body END -->
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
                            Steps END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- =======================
                                                                    Footer START -->
    {{-- <footer class="bg-dark p-3">
        <div class="container">
            <div class="row align-items-center">
                <!-- Widget -->
                <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                    <!-- Logo START -->
                    <a href="index.html"> <img class="h-20px" src="{{ asset('assets/images/logo-light.svg') }}"
                            alt="logo">
                    </a>
                </div>

                <!-- Widget -->
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="text-center text-white">
                        Copyrights ©2021 <a href="#" class="text-reset btn-link">Eduport</a>. All rights
                        reserved.
                    </div>
                </div>
                <!-- Widget -->
                <div class="col-md-4">
                    <!-- Rating -->
                    <ul class="list-inline mb-0 text-center text-md-end">
                        <li class="list-inline-item ms-2"><a href="#"><i
                                    class="text-white fab fa-facebook"></i></a></li>
                        <li class="list-inline-item ms-2"><a href="#"><i
                                    class="text-white fab fa-instagram"></i></a></li>
                        <li class="list-inline-item ms-2"><a href="#"><i
                                    class="text-white fab fa-linkedin-in"></i></a></li>
                        <li class="list-inline-item ms-2"><a href="#"><i
                                    class="text-white fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer> --}}
    <!-- =======================
                                                                    Footer END -->

    <!-- Popup modal for add lecture START -->
    <div class="modal fade" id="addLecture" tabindex="-1" aria-labelledby="addLectureLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-white" id="addLectureLabel">Add Lecture</h5>
                    <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal"
                        aria-label="Close"><i class="bi bi-x-lg"></i></button>
                </div>
                <div class="modal-body">
                    <form class="row text-start g-3">
                        <!-- Course name -->
                        <div class="col-12">
                            <label class="form-label">Course name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter course name">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger-soft my-0" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success my-0">Save Lecture</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Popup modal for add lecture END -->

    <!-- Popup modal for add topic START -->
    <div class="modal fade" id="addTopic" tabindex="-1" aria-labelledby="addTopicLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-white" id="addTopicLabel">Add topic</h5>
                    <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal"
                        aria-label="Close"><i class="bi bi-x-lg"></i></button>
                </div>
                <div class="modal-body">
                    <form class="row text-start g-3">
                        <!-- Topic name -->
                        <div class="col-md-6">
                            <label class="form-label">Topic name</label>
                            <input class="form-control" type="text" placeholder="Enter topic name">
                        </div>
                        <!-- Video link -->
                        <div class="col-md-6">
                            <label class="form-label">Video link</label>
                            <input class="form-control" type="text" placeholder="Enter Video link">
                        </div>
                        <!-- Description -->
                        <div class="col-12 mt-3">
                            <label class="form-label">Course description</label>
                            <textarea class="form-control" rows="4" placeholder="" spellcheck="false"></textarea>
                        </div>
                        <!-- Buttons -->
                        <div class="col-6 mt-3">
                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <!-- Free button -->
                                <input type="radio" class="btn-check" name="options" id="option1"
                                    checked="">
                                <label class="btn btn-sm btn-light btn-primary-soft-check border-0 m-0"
                                    for="option1">Free</label>
                                <!-- Premium button -->
                                <input type="radio" class="btn-check" name="options" id="option2">
                                <label class="btn btn-sm btn-light btn-primary-soft-check border-0 m-0"
                                    for="option2">Premium</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger-soft my-0" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success my-0">Save topic</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Popup modal for add topic END -->

    <!-- Popup modal for add faq START -->
    <div class="modal fade" id="addQuestion" tabindex="-1" aria-labelledby="addQuestionLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-white" id="addQuestionLabel">Add FAQ</h5>
                    <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal"
                        aria-label="Close"><i class="bi bi-x-lg"></i></button>
                </div>
                <div class="modal-body">
                    <form class="row text-start g-3">
                        <!-- Question -->
                        <div class="col-12">
                            <label class="form-label">Question</label>
                            <input class="form-control" type="text" placeholder="Write a question">
                        </div>
                        <!-- Answer -->
                        <div class="col-12 mt-3">
                            <label class="form-label">Answer</label>
                            <textarea class="form-control" rows="4" placeholder="Write a answer" spellcheck="false"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger-soft my-0" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success my-0">Save topic</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Popup modal for add faq END -->

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i>
    </div>
@endsection
@push('custom-script')
@endpush
