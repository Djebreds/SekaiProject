@extends('layouts.app')
@section('content')
    <main>

        <!-- =======================
             Page Banner START -->
        <section class="py-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bg-dark p-4 text-center rounded-3">
                            <h1 class="text-white m-0">Instructors list</h1>
                            <!-- Breadcrumb -->
                            <div class="d-flex justify-content-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">instructor list</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
             Page Banner END -->

        <!-- =======================
             Inner part START -->
        <section class="pt-4">
            <div class="container">
                <!-- Search option START -->
                <div class="row mb-4 align-items-center">
                    <!-- Search bar -->
                    <div class="col-sm-6 col-xl-4">
                        <form class="border rounded p-2">
                            <div class="input-group input-borderless">
                                <input class="form-control me-1" type="search" placeholder="Search instructor">
                                <button type="button" class="btn btn-primary mb-0 rounded"><i
                                        class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>

                    <!-- Select option -->
                    <div class="col-sm-6 col-xl-3 mt-3 mt-lg-0">
                        <form class="border rounded p-2 input-borderless">
                            <div class="choices" data-type="select-one" tabindex="0" role="combobox"
                                aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                <div class="choices__inner"><select
                                        class="form-select form-select-sm js-choice choices__input"
                                        aria-label=".form-select-sm" hidden="" tabindex="-1" data-choice="active">
                                        <option value="" data-custom-properties="[object Object]">Category</option>
                                    </select>
                                    <div class="choices__list choices__list--single">
                                        <div class="choices__item choices__placeholder choices__item--selectable"
                                            data-item="" data-id="1" data-value=""
                                            data-custom-properties="[object Object]" aria-selected="true">Category</div>
                                    </div>
                                </div>
                                <div class="choices__list choices__list--dropdown" aria-expanded="false"><input
                                        type="text" class="choices__input choices__input--cloned" autocomplete="off"
                                        autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list"
                                        aria-label="Category" placeholder="">
                                    <div class="choices__list" role="listbox">
                                        <div id="choices--zoay-item-choice-3"
                                            class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted"
                                            role="option" data-choice="" data-id="3" data-value=""
                                            data-select-text="Press to select" data-choice-selectable=""
                                            aria-selected="true">Category</div>
                                        <div id="choices--zoay-item-choice-1"
                                            class="choices__item choices__item--choice choices__item--selectable"
                                            role="option" data-choice="" data-id="1" data-value="Accounting"
                                            data-select-text="Press to select" data-choice-selectable="">Accounting</div>
                                        <div id="choices--zoay-item-choice-2"
                                            class="choices__item choices__item--choice choices__item--selectable"
                                            role="option" data-choice="" data-id="2" data-value="All"
                                            data-select-text="Press to select" data-choice-selectable="">All</div>
                                        <div id="choices--zoay-item-choice-4"
                                            class="choices__item choices__item--choice choices__item--selectable"
                                            role="option" data-choice="" data-id="4" data-value="Design"
                                            data-select-text="Press to select" data-choice-selectable="">Design</div>
                                        <div id="choices--zoay-item-choice-5"
                                            class="choices__item choices__item--choice choices__item--selectable"
                                            role="option" data-choice="" data-id="5" data-value="Development"
                                            data-select-text="Press to select" data-choice-selectable="">Development</div>
                                        <div id="choices--zoay-item-choice-6"
                                            class="choices__item choices__item--choice choices__item--selectable"
                                            role="option" data-choice="" data-id="6" data-value="Finance"
                                            data-select-text="Press to select" data-choice-selectable="">Finance</div>
                                        <div id="choices--zoay-item-choice-7"
                                            class="choices__item choices__item--choice choices__item--selectable"
                                            role="option" data-choice="" data-id="7" data-value="Legal"
                                            data-select-text="Press to select" data-choice-selectable="">Legal</div>
                                        <div id="choices--zoay-item-choice-8"
                                            class="choices__item choices__item--choice choices__item--selectable"
                                            role="option" data-choice="" data-id="8" data-value="Marketing"
                                            data-select-text="Press to select" data-choice-selectable="">Marketing</div>
                                        <div id="choices--zoay-item-choice-9"
                                            class="choices__item choices__item--choice choices__item--selectable"
                                            role="option" data-choice="" data-id="9" data-value="Photography"
                                            data-select-text="Press to select" data-choice-selectable="">Photography</div>
                                        <div id="choices--zoay-item-choice-10"
                                            class="choices__item choices__item--choice choices__item--selectable"
                                            role="option" data-choice="" data-id="10" data-value="Translation"
                                            data-select-text="Press to select" data-choice-selectable="">Translation</div>
                                        <div id="choices--zoay-item-choice-11"
                                            class="choices__item choices__item--choice choices__item--selectable"
                                            role="option" data-choice="" data-id="11" data-value="Writing"
                                            data-select-text="Press to select" data-choice-selectable="">Writing</div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Select option -->
                    <div class="col-sm-6 col-xl-3 mt-3 mt-xl-0">
                        <form class="border rounded p-2 input-borderless">
                            <div class="choices" data-type="select-one" tabindex="0" role="combobox"
                                aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                <div class="choices__inner"><select
                                        class="form-select form-select-sm js-choice choices__input"
                                        aria-label=".form-select-sm" hidden="" tabindex="-1" data-choice="active">
                                        <option value="" data-custom-properties="[object Object]">Sort by</option>
                                    </select>
                                    <div class="choices__list choices__list--single">
                                        <div class="choices__item choices__placeholder choices__item--selectable"
                                            data-item="" data-id="1" data-value=""
                                            data-custom-properties="[object Object]" aria-selected="true">Sort by</div>
                                    </div>
                                </div>
                                <div class="choices__list choices__list--dropdown" aria-expanded="false"><input
                                        type="text" class="choices__input choices__input--cloned" autocomplete="off"
                                        autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list"
                                        aria-label="Sort by" placeholder="">
                                    <div class="choices__list" role="listbox">
                                        <div id="choices--bw63-item-choice-3"
                                            class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted"
                                            role="option" data-choice="" data-id="3" data-value=""
                                            data-select-text="Press to select" data-choice-selectable=""
                                            aria-selected="true">Sort by</div>
                                        <div id="choices--bw63-item-choice-1"
                                            class="choices__item choices__item--choice choices__item--selectable"
                                            role="option" data-choice="" data-id="1" data-value="Most popular"
                                            data-select-text="Press to select" data-choice-selectable="">Most popular
                                        </div>
                                        <div id="choices--bw63-item-choice-2"
                                            class="choices__item choices__item--choice choices__item--selectable"
                                            role="option" data-choice="" data-id="2" data-value="Most viewed"
                                            data-select-text="Press to select" data-choice-selectable="">Most viewed</div>
                                        <div id="choices--bw63-item-choice-4"
                                            class="choices__item choices__item--choice choices__item--selectable"
                                            role="option" data-choice="" data-id="4" data-value="Top rated"
                                            data-select-text="Press to select" data-choice-selectable="">Top rated</div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Button -->
                    <div class="col-sm-6 col-xl-2 mt-3 mt-xl-0 d-grid">
                        <a href="#" class="btn btn-lg btn-primary mb-0">Filter Results</a>
                    </div>
                </div>
                <!-- Search option END -->

                <!-- Instructor list START -->
                <div class="row g-4 justify-content-center">

                    <!-- Card item START -->
                    <div class="col-lg-10 col-xl-6">
                        <div class="card shadow p-2">
                            <div class="row g-0">
                                <!-- Image -->
                                <div class="col-md-4">
                                    <img src="{{ asset('assets/images/instructor/01.jpg') }}" class="rounded-3"
                                        alt="...">
                                </div>

                                <!-- Card body -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- Title -->
                                        <div class="d-sm-flex justify-content-sm-between mb-2 mb-sm-3">
                                            <div>
                                                <h5 class="card-title mb-0"><a href="#">Dennis Barrett</a></h5>
                                                <p class="small mb-2 mb-sm-0">Professor at Sigma College</p>
                                            </div>
                                            <span class="h6 fw-light">4.3<i
                                                    class="fas fa-star text-warning ms-1"></i></span>
                                        </div>
                                        <!-- Content -->
                                        <p class="text-truncate-2 mb-3">Perceived end knowledge certainly day sweetness why
                                            cordially. Ask a quick six seven offer see among.</p>
                                        <!-- Info -->
                                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                                            <!-- Title -->
                                            <h6 class="text-orange mb-0">Digital Marketing</h6>

                                            <!-- Social button -->
                                            <ul class="list-inline mb-0 mt-3 mt-sm-0">
                                                <li class="list-inline-item">
                                                    <a class="mb-0 me-1 text-facebook" href="#"><i
                                                            class="fab fa-fw fa-facebook-f"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="mb-0 me-1 text-instagram-gradient" href="#"><i
                                                            class="fab fa-fw fa-instagram"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="mb-0 me-1 text-twitter" href="#"><i
                                                            class="fab fa-fw fa-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="mb-0 text-linkedin" href="#"><i
                                                            class="fab fa-fw fa-linkedin-in"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-lg-10 col-xl-6">
                        <div class="card shadow p-2">
                            <div class="row g-0">
                                <!-- Image -->
                                <div class="col-md-4">
                                    <img src="{{ asset('assets/images/instructor/02.jpg') }}" class="rounded-3"
                                        alt="...">
                                </div>

                                <!-- Card body -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- Title -->
                                        <div class="d-sm-flex justify-content-sm-between mb-2 mb-sm-3">
                                            <div>
                                                <h5 class="card-title mb-0"><a href="#">Jacqueline Miller</a></h5>
                                                <p class="small mb-2 mb-sm-0">Professor at Eastbay College</p>
                                            </div>
                                            <span class="h6 fw-light">4.0<i
                                                    class="fas fa-star text-warning ms-1"></i></span>
                                        </div>
                                        <!-- Content -->
                                        <p class="text-truncate-2 mb-3">Passage its ten led hearted removal cordial.
                                            Preference any astonished unreserved Mrs.</p>
                                        <!-- Info -->
                                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                                            <!-- Title -->
                                            <h6 class="text-orange mb-0">Graphic Designer</h6>

                                            <!-- Social button -->
                                            <ul class="list-inline mb-0 mt-3 mt-sm-0">
                                                <li class="list-inline-item">
                                                    <a class="mb-0 me-1 text-facebook" href="#"><i
                                                            class="fab fa-fw fa-facebook-f"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="mb-0 me-1 text-instagram-gradient" href="#"><i
                                                            class="fab fa-fw fa-instagram"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="mb-0 me-1 text-twitter" href="#"><i
                                                            class="fab fa-fw fa-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="mb-0 text-linkedin" href="#"><i
                                                            class="fab fa-fw fa-linkedin-in"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-lg-10 col-xl-6">
                        <div class="card shadow p-2">
                            <div class="row g-0">
                                <!-- Image -->
                                <div class="col-md-4">
                                    <img src="{{ asset('assets/images/instructor/03.jpg') }}" class="rounded-3"
                                        alt="...">
                                </div>

                                <!-- Card body -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- Title -->
                                        <div class="d-sm-flex justify-content-sm-between mb-2 mb-sm-3">
                                            <div>
                                                <h5 class="card-title mb-0"><a href="#">Louis Ferguson</a></h5>
                                                <p class="small mb-2 mb-sm-0">Professor at Cambridge College</p>
                                            </div>
                                            <span class="h6 fw-light">3.8<i
                                                    class="fas fa-star text-warning ms-1"></i></span>
                                        </div>
                                        <!-- Content -->
                                        <p class="text-truncate-2 mb-3">Passage its ten led hearted removal cordial.
                                            Preference any astonished unreserved Mrs.</p>
                                        <!-- Info -->
                                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                                            <!-- Title -->
                                            <h6 class="text-orange mb-0">Engineering Physics</h6>

                                            <!-- Social button -->
                                            <ul class="list-inline mb-0 mt-3 mt-sm-0">
                                                <li class="list-inline-item">
                                                    <a class="mb-0 me-1 text-facebook" href="#"><i
                                                            class="fab fa-fw fa-facebook-f"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="mb-0 me-1 text-instagram-gradient" href="#"><i
                                                            class="fab fa-fw fa-instagram"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="mb-0 me-1 text-twitter" href="#"><i
                                                            class="fab fa-fw fa-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="mb-0 text-linkedin" href="#"><i
                                                            class="fab fa-fw fa-linkedin-in"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-lg-10 col-xl-6">
                        <div class="card shadow p-2">
                            <div class="row g-0">
                                <!-- Image -->
                                <div class="col-md-4">
                                    <img src="{{ asset('assets/images/instructor/04.jpg') }}" class="rounded-3"
                                        alt="...">
                                </div>

                                <!-- Card body -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- Title -->
                                        <div class="d-sm-flex justify-content-sm-between mb-2 mb-sm-3">
                                            <div>
                                                <h5 class="card-title mb-0"><a href="#">Frances Guerrero</a></h5>
                                                <p class="small mb-2 mb-sm-0">Professor at LPU College</p>
                                            </div>
                                            <span class="h6 fw-light">4.5<i
                                                    class="fas fa-star text-warning ms-1"></i></span>
                                        </div>
                                        <!-- Content -->
                                        <p class="text-truncate-2 mb-3">As it so contrasted oh estimating instrument. Size
                                            like body some one had. Are conduct viewing boy minutes warrant the expense</p>
                                        <!-- Info -->
                                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                                            <!-- Title -->
                                            <h6 class="text-orange mb-0">Graphic Designer</h6>

                                            <!-- Social button -->
                                            <ul class="list-inline mb-0 mt-3 mt-sm-0">
                                                <li class="list-inline-item">
                                                    <a class="mb-0 me-1 text-facebook" href="#"><i
                                                            class="fab fa-fw fa-facebook-f"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="mb-0 me-1 text-instagram-gradient" href="#"><i
                                                            class="fab fa-fw fa-instagram"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="mb-0 me-1 text-twitter" href="#"><i
                                                            class="fab fa-fw fa-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="mb-0 text-linkedin" href="#"><i
                                                            class="fab fa-fw fa-linkedin-in"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-lg-10 col-xl-6">
                        <div class="card shadow p-2">
                            <div class="row g-0">
                                <!-- Image -->
                                <div class="col-md-4">
                                    <img src="{{ asset('assets/images/instructor/06.jpg') }}" class="rounded-3"
                                        alt="...">
                                </div>

                                <!-- Card body -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- Title -->
                                        <div class="d-sm-flex justify-content-sm-between mb-2 mb-sm-3">
                                            <div>
                                                <h5 class="card-title mb-0"><a href="#">Amanda Reed</a></h5>
                                                <p class="small mb-2 mb-sm-0">Professor at NIT College</p>
                                            </div>
                                            <span class="h6 fw-light">4.8<i
                                                    class="fas fa-star text-warning ms-1"></i></span>
                                        </div>
                                        <!-- Content -->
                                        <p class="text-truncate-2 mb-3">Contrasted oh estimating instrument. Size like body
                                            some one had. Are conduct viewing boy minutes warrant the expense</p>
                                        <!-- Info -->
                                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                                            <!-- Title -->
                                            <h6 class="text-orange mb-0">Web Designer</h6>

                                            <!-- Social button -->
                                            <ul class="list-inline mb-0 mt-3 mt-sm-0">
                                                <li class="list-inline-item">
                                                    <a class="mb-0 me-1 text-facebook" href="#"><i
                                                            class="fab fa-fw fa-facebook-f"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="mb-0 me-1 text-instagram-gradient" href="#"><i
                                                            class="fab fa-fw fa-instagram"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="mb-0 me-1 text-twitter" href="#"><i
                                                            class="fab fa-fw fa-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="mb-0 text-linkedin" href="#"><i
                                                            class="fab fa-fw fa-linkedin-in"></i></a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-lg-10 col-xl-6">
                        <div class="card shadow p-2">
                            <div class="row g-0">
                                <!-- Image -->
                                <div class="col-md-4">
                                    <img src="{{ asset('assets/images/instructor/07.jpg') }}" class="rounded-3"
                                        alt="...">
                                </div>

                                <!-- Card body -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- Title -->
                                        <div class="d-sm-flex justify-content-sm-between mb-2 mb-sm-3">
                                            <div>
                                                <h5 class="card-title mb-0"><a href="#">Lori Stevens</a></h5>
                                                <p class="small mb-2 mb-sm-0">Professor at Oxford University</p>
                                            </div>
                                            <span class="h6 fw-light">4.2<i
                                                    class="fas fa-star text-warning ms-1"></i></span>
                                        </div>
                                        <!-- Content -->
                                        <p class="text-truncate-2 mb-3">Yet no jokes worse her why. Bed one supposing
                                            breakfast day fulfilled off depending questions. Whatever boy her exertion his
                                            extended. Ecstatic followed handsome drawings</p>
                                        <!-- Info -->
                                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                                            <!-- Title -->
                                            <h6 class="text-orange mb-0">Medical Science</h6>

                                            <!-- Social button -->
                                            <ul class="list-inline mb-0 mt-3 mt-sm-0">
                                                <li class="list-inline-item">
                                                    <a class="mb-0 me-1 text-facebook" href="#"><i
                                                            class="fab fa-fw fa-facebook-f"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="mb-0 me-1 text-instagram-gradient" href="#"><i
                                                            class="fab fa-fw fa-instagram"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="mb-0 me-1 text-twitter" href="#"><i
                                                            class="fab fa-fw fa-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="mb-0 text-linkedin" href="#"><i
                                                            class="fab fa-fw fa-linkedin-in"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-lg-10 col-xl-6">
                        <div class="card shadow p-2">
                            <div class="row g-0">
                                <!-- Image -->
                                <div class="col-md-4">
                                    <img src="{{ asset('assets/images/instructor/08.jpg') }}" class="rounded-3"
                                        alt="...">
                                </div>

                                <!-- Card body -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- Title -->
                                        <div class="d-sm-flex justify-content-sm-between mb-2 mb-sm-3">
                                            <div>
                                                <h5 class="card-title mb-0"><a href="#">Samuel Bishop</a></h5>
                                                <p class="small mb-2 mb-sm-0">Professor at VNSGU College</p>
                                            </div>
                                            <span class="h6 fw-light">4.5<i
                                                    class="fas fa-star text-warning ms-1"></i></span>
                                        </div>
                                        <!-- Content -->
                                        <p class="text-truncate-2 mb-3">As it so contrasted oh estimating instrument. Size
                                            like body some one had. Are conduct viewing boy minutes warrant the expense</p>
                                        <!-- Info -->
                                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                                            <!-- Title -->
                                            <h6 class="text-orange mb-0">Digital Marketing</h6>

                                            <!-- Social button -->
                                            <ul class="list-inline mb-0 mt-3 mt-sm-0">
                                                <li class="list-inline-item">
                                                    <a class="mb-0 me-1 text-facebook" href="#"><i
                                                            class="fab fa-fw fa-facebook-f"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="mb-0 me-1 text-instagram-gradient" href="#"><i
                                                            class="fab fa-fw fa-instagram"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="mb-0 me-1 text-twitter" href="#"><i
                                                            class="fab fa-fw fa-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="mb-0 text-linkedin" href="#"><i
                                                            class="fab fa-fw fa-linkedin-in"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-lg-10 col-xl-6">
                        <div class="card shadow p-2">
                            <div class="row g-0">
                                <!-- Image -->
                                <div class="col-md-4">
                                    <img src="{{ asset('assets/images/instructor/09.jpg') }}" class="rounded-3"
                                        alt="...">
                                </div>

                                <!-- Card body -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- Title -->
                                        <div class="d-sm-flex justify-content-sm-between mb-2 mb-sm-3">
                                            <div>
                                                <h5 class="card-title mb-0"><a href="#">Joan Wallace</a></h5>
                                                <p class="small mb-2 mb-sm-0">Professor at LPU College</p>
                                            </div>
                                            <span class="h6 fw-light">4.6<i
                                                    class="fas fa-star text-warning ms-1"></i></span>
                                        </div>
                                        <!-- Content -->
                                        <p class="text-truncate-2 mb-3">Tt so contrasted oh estimating instrument. Size
                                            like body some one had. Are conduct viewing boy minutes warrant the expense</p>
                                        <!-- Info -->
                                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                                            <!-- Title -->
                                            <h6 class="text-orange mb-0">Graphic Designer</h6>

                                            <!-- Social button -->
                                            <ul class="list-inline mb-0 mt-3 mt-sm-0">
                                                <li class="list-inline-item">
                                                    <a class="mb-0 me-1 text-facebook" href="#"><i
                                                            class="fab fa-fw fa-facebook-f"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="mb-0 me-1 text-instagram-gradient" href="#"><i
                                                            class="fab fa-fw fa-instagram"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="mb-0 me-1 text-twitter" href="#"><i
                                                            class="fab fa-fw fa-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="mb-0 text-linkedin" href="#"><i
                                                            class="fab fa-fw fa-linkedin-in"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                </div>
                <!-- Instructor list END -->

                <!-- Pagination START -->
                <nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
                    <ul class="pagination pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                        <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i
                                    class="fas fa-angle-double-left"></i></a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                        <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#">..</a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#">6</a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#"><i
                                    class="fas fa-angle-double-right"></i></a>
                        </li>
                    </ul>
                </nav> <!-- Pagination END -->
            </div>
        </section>
        <!-- =======================
             Inner part END -->

        <!-- =======================
             Action box START -->
        <section class="pt-0">
            <div class="container position-relative">
                <!-- SVG -->
                <figure class="position-absolute top-50 start-50 translate-middle ms-2">
                    <svg>
                        <path
                            d="m496 22.999c0 10.493-8.506 18.999-18.999 18.999s-19-8.506-19-18.999 8.507-18.999 19-18.999 18.999 8.506 18.999 18.999z"
                            fill="#fff" fill-rule="evenodd" opacity=".502"></path>
                        <path
                            d="m775 102.5c0 5.799-4.701 10.5-10.5 10.5-5.798 0-10.499-4.701-10.499-10.5 0-5.798 4.701-10.499 10.499-10.499 5.799 0 10.5 4.701 10.5 10.499z"
                            fill="#fff" fill-rule="evenodd" opacity=".102"></path>
                        <path
                            d="m192 102c0 6.626-5.373 11.999-12 11.999s-11.999-5.373-11.999-11.999c0-6.628 5.372-12 11.999-12s12 5.372 12 12z"
                            fill="#fff" fill-rule="evenodd" opacity=".2"></path>
                        <path
                            d="m20.499 10.25c0 5.66-4.589 10.249-10.25 10.249-5.66 0-10.249-4.589-10.249-10.249-0-5.661 4.589-10.25 10.249-10.25 5.661-0 10.25 4.589 10.25 10.25z"
                            fill="#fff" fill-rule="evenodd" opacity=".2"></path>
                    </svg>
                </figure>

                <div class="bg-success p-4 p-sm-5 rounded-3">
                    <div class="row justify-content-center position-relative">
                        <!-- Svg -->
                        <figure class="fill-white opacity-1 position-absolute top-50 start-0 translate-middle-y">
                            <svg width="141px" height="141px">
                                <path
                                    d="M140.520,70.258 C140.520,109.064 109.062,140.519 70.258,140.519 C31.454,140.519 -0.004,109.064 -0.004,70.258 C-0.004,31.455 31.454,-0.003 70.258,-0.003 C109.062,-0.003 140.520,31.455 140.520,70.258 Z">
                                </path>
                            </svg>
                        </figure>
                        <!-- Action box -->
                        <div class="col-11 position-relative">
                            <div class="row align-items-center">
                                <!-- Title -->
                                <div class="col-lg-7">
                                    <h3 class="text-white">Become an Instructor!</h3>
                                    <p class="text-white mb-3 mb-lg-0">Speedily say has suitable disposal add boy. On forth
                                        doubt miles of child. Exercise joy man children rejoiced. Yet uncommonly his ten who
                                        diminution astonished.</p>
                                </div>
                                <!-- Button -->
                                <div class="col-lg-5 text-lg-end">
                                    <a href="#" class="btn btn-dark mb-0">Start Teaching today</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Action box END -->

    </main>
@endsection
