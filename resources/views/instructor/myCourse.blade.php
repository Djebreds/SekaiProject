@extends('instructor.layouts.main')
@section('profile')
    <div class="col-xl-9">
        <!-- Card START -->
        <div class="card border bg-transparent rounded-3">
            <!-- Card header START -->
            <div class="card-header bg-transparent border-bottom">
                <h3 class="mb-0">My Courses List</h3>
            </div>
            <!-- Card header END -->

            <!-- Card body START -->
            <div class="card-body">

                <!-- Search and select START -->
                <div class="row g-3 align-items-center justify-content-between mb-4">
                    <!-- Search -->
                    <div class="col-md-8">
                        <form class="rounded position-relative">
                            <input class="form-control pe-5 bg-transparent" type="search" placeholder="Search"
                                aria-label="Search">
                            <button class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y"
                                type="submit"><i class="fas fa-search fs-6 "></i></button>
                        </form>
                    </div>

                    <!-- Select option -->
                    <div class="col-md-3">
                        <!-- Short by filter -->
                        <form>
                            <div class="choices" data-type="select-one" tabindex="0" role="combobox"
                                aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                <div class="choices__inner"><select
                                        class="form-select js-choice border-0 z-index-9 bg-transparent choices__input"
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
                                        <div id="choices--umu3-item-choice-5"
                                            class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted"
                                            role="option" data-choice="" data-id="5" data-value=""
                                            data-select-text="Press to select" data-choice-selectable=""
                                            aria-selected="true">Sort by</div>
                                        <div id="choices--umu3-item-choice-1"
                                            class="choices__item choices__item--choice choices__item--selectable"
                                            role="option" data-choice="" data-id="1" data-value="Free"
                                            data-select-text="Press to select" data-choice-selectable="">Free</div>
                                        <div id="choices--umu3-item-choice-2"
                                            class="choices__item choices__item--choice choices__item--selectable"
                                            role="option" data-choice="" data-id="2" data-value="Most popular"
                                            data-select-text="Press to select" data-choice-selectable="">Most popular</div>
                                        <div id="choices--umu3-item-choice-3"
                                            class="choices__item choices__item--choice choices__item--selectable"
                                            role="option" data-choice="" data-id="3" data-value="Most Viewed"
                                            data-select-text="Press to select" data-choice-selectable="">Most Viewed</div>
                                        <div id="choices--umu3-item-choice-4"
                                            class="choices__item choices__item--choice choices__item--selectable"
                                            role="option" data-choice="" data-id="4" data-value="Newest"
                                            data-select-text="Press to select" data-choice-selectable="">Newest</div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Search and select END -->

                <!-- Course list table START -->
                <div class="table-responsive border-0">
                    <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                        <!-- Table head -->
                        <thead>
                            <tr>
                                <th scope="col" class="border-0 rounded-start">Course Title</th>
                                <th scope="col" class="border-0">Enrolled</th>
                                <th scope="col" class="border-0">Status</th>
                                <th scope="col" class="border-0">Price</th>
                                <th scope="col" class="border-0 rounded-end">Action</th>
                            </tr>
                        </thead>

                        <!-- Table body START -->
                        <tbody>
                            <!-- Table item -->
                            <tr>
                                <!-- Course item -->
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!-- Image -->
                                        <div class="w-60px">
                                            <img src="assets/images/courses/4by3/08.jpg" class="rounded" alt="">
                                        </div>
                                        <div class="mb-0 ms-2">
                                            <!-- Title -->
                                            <h6><a href="#">Building Scalable APIs with GraphQL</a></h6>
                                            <!-- Info -->
                                            <div class="d-sm-flex">
                                                <p class="h6 fw-light mb-0 small me-3"><i
                                                        class="fas fa-table text-orange me-2"></i>18 lectures</p>
                                                <p class="h6 fw-light mb-0 small"><i
                                                        class="fas fa-check-circle text-success me-2"></i>6 Completed</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <!-- Enrolled item -->
                                <td class="text-center text-sm-start">125</td>
                                <!-- Status item -->
                                <td>
                                    <div class="badge bg-success bg-opacity-10 text-success">Live</div>
                                </td>
                                <!-- Price item -->
                                <td>$250</td>
                                <!-- Action item -->
                                <td>
                                    <a href="#" class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i
                                            class="far fa-fw fa-edit"></i></a>
                                    <button class="btn btn-sm btn-danger-soft btn-round mb-0"><i
                                            class="fas fa-fw fa-times"></i></button>
                                </td>
                            </tr>

                            <!-- Table item -->
                            <tr>
                                <!-- Course item -->
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!-- Image -->
                                        <div class="w-60px">
                                            <img src="assets/images/courses/4by3/10.jpg" class="rounded" alt="">
                                        </div>
                                        <div class="mb-0 ms-2">
                                            <!-- Title -->
                                            <h6><a href="#">Bootstrap 5 From Scratch</a></h6>
                                            <!-- Info -->
                                            <div class="d-sm-flex">
                                                <p class="h6 fw-light mb-0 small me-3"><i
                                                        class="fas fa-table text-orange me-2"></i>0 lectures</p>
                                                <p class="h6 fw-light mb-0 small"><i
                                                        class="fas fa-check-circle text-success me-2"></i>0 Completed</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <!-- Enrolled item -->
                                <td class="text-center text-sm-start">145</td>
                                <!-- Status item -->
                                <td>
                                    <div class="badge bg-secondary bg-opacity-10 text-secondary">Disable</div>
                                </td>
                                <!-- Price item -->
                                <td>$350</td>
                                <!-- Action item -->
                                <td>
                                    <a href="#" class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i
                                            class="far fa-fw fa-edit"></i></a>
                                    <button class="btn btn-sm btn-danger-soft btn-round mb-0"><i
                                            class="fas fa-fw fa-times"></i></button>
                                </td>
                            </tr>

                            <!-- Table item -->
                            <tr>
                                <!-- Course item -->
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!-- Image -->
                                        <div class="w-60px">
                                            <img src="assets/images/courses/4by3/06.jpg" class="rounded" alt="">
                                        </div>
                                        <div class="mb-0 ms-2">
                                            <!-- Title -->
                                            <h6><a href="#">Angular – The Complete Guider</a></h6>
                                            <!-- Info -->
                                            <div class="d-sm-flex">
                                                <p class="h6 fw-light mb-0 small me-3"><i
                                                        class="fas fa-table text-orange me-2"></i>37 lectures</p>
                                                <p class="h6 fw-light mb-0 small"><i
                                                        class="fas fa-check-circle text-success me-2"></i>20 Completed</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <!-- Enrolled item -->
                                <td class="text-center text-sm-start">145</td>
                                <!-- Status item -->
                                <td>
                                    <div class="badge bg-success bg-opacity-10 text-success">Live</div>
                                </td>
                                <!-- Price item -->
                                <td>$652</td>
                                <!-- Action item -->
                                <td>
                                    <a href="#" class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i
                                            class="far fa-fw fa-edit"></i></a>
                                    <button class="btn btn-sm btn-danger-soft btn-round mb-0"><i
                                            class="fas fa-fw fa-times"></i></button>
                                </td>
                            </tr>

                            <!-- Table item -->
                            <tr>
                                <!-- Course item -->
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!-- Image -->
                                        <div class="w-60px">
                                            <img src="assets/images/courses/4by3/02.jpg" class="rounded" alt="">
                                        </div>
                                        <div class="mb-0 ms-2">
                                            <!-- Title -->
                                            <h6><a href="#">Graphic Design Masterclass</a></h6>
                                            <!-- Info -->
                                            <div class="d-sm-flex">
                                                <p class="h6 fw-light mb-0 small me-3"><i
                                                        class="fas fa-table text-orange me-2"></i>58 lectures</p>
                                                <p class="h6 fw-light mb-0 small"><i
                                                        class="fas fa-check-circle text-success me-2"></i>0 Completed</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <!-- Enrolled item -->
                                <td class="text-center text-sm-start">0</td>
                                <!-- Status item -->
                                <td>
                                    <div class="badge bg-info bg-opacity-10 text-info">Applied</div>
                                </td>
                                <!-- Price item -->
                                <td>$245</td>
                                <!-- Action item -->
                                <td>
                                    <a href="#" class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i
                                            class="far fa-fw fa-edit"></i></a>
                                    <button class="btn btn-sm btn-danger-soft btn-round mb-0"><i
                                            class="fas fa-fw fa-times"></i></button>
                                </td>
                            </tr>

                            <!-- Table item -->
                            <tr>
                                <!-- Course item -->
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!-- Image -->
                                        <div class="w-60px">
                                            <img src="assets/images/courses/4by3/04.jpg" class="rounded" alt="">
                                        </div>
                                        <div class="mb-0 ms-2">
                                            <!-- Title -->
                                            <h6><a href="#">Learn Invision</a></h6>
                                            <!-- Info -->
                                            <div class="d-sm-flex">
                                                <p class="h6 fw-light mb-0 small me-3"><i
                                                        class="fas fa-table text-orange me-2"></i>16 lectures</p>
                                                <p class="h6 fw-light mb-0 small"><i
                                                        class="fas fa-check-circle text-success me-2"></i>0 Completed</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <!-- Enrolled item -->
                                <td class="text-center text-sm-start">0</td>
                                <!-- Status item -->
                                <td>
                                    <div class="badge bg-danger bg-opacity-10 text-danger">Rejected</div>
                                </td>
                                <!-- Price item -->
                                <td>$365</td>
                                <!-- Action item -->
                                <td>
                                    <a href="#" class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i
                                            class="far fa-fw fa-edit"></i></a>
                                    <button class="btn btn-sm btn-danger-soft btn-round mb-0"><i
                                            class="fas fa-fw fa-times"></i></button>
                                </td>
                            </tr>

                            <!-- Table item -->
                            <tr>
                                <!-- Course item -->
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!-- Image -->
                                        <div class="w-60px">
                                            <img src="assets/images/courses/4by3/03.jpg" class="rounded" alt="">
                                        </div>
                                        <div class="mb-0 ms-2">
                                            <!-- Title -->
                                            <h6><a href="#">Create a Design System in Figma</a></h6>
                                            <!-- Info -->
                                            <div class="d-sm-flex">
                                                <p class="h6 fw-light mb-0 small me-3"><i
                                                        class="fas fa-table text-orange me-2"></i>25 lectures</p>
                                                <p class="h6 fw-light mb-0 small"><i
                                                        class="fas fa-check-circle text-success me-2"></i>0 Completed</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <!-- Enrolled item -->
                                <td class="text-center text-sm-start">0</td>
                                <!-- Status item -->
                                <td>
                                    <div class="badge bg-info bg-opacity-10 text-info">Applied</div>
                                </td>
                                <!-- Price item -->
                                <td>$135</td>
                                <!-- Action item -->
                                <td>
                                    <a href="#" class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i
                                            class="far fa-fw fa-edit"></i></a>
                                    <button class="btn btn-sm btn-danger-soft btn-round mb-0"><i
                                            class="fas fa-fw fa-times"></i></button>
                                </td>
                            </tr>

                            <!-- Table item -->
                            <tr>
                                <!-- Course item -->
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!-- Image -->
                                        <div class="w-60px">
                                            <img src="assets/images/courses/4by3/07.jpg" class="rounded" alt="">
                                        </div>
                                        <div class="mb-0 ms-2">
                                            <!-- Title -->
                                            <h6><a href="#">Deep Learning with React-Native</a></h6>
                                            <!-- Info -->
                                            <div class="d-sm-flex">
                                                <p class="h6 fw-light mb-0 small me-3"><i
                                                        class="fas fa-table text-orange me-2"></i>18 lectures</p>
                                                <p class="h6 fw-light mb-0 small"><i
                                                        class="fas fa-check-circle text-success me-2"></i>10 Completed</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <!-- Enrolled item -->
                                <td class="text-center text-sm-start">186</td>
                                <!-- Status item -->
                                <td>
                                    <div class="badge bg-success bg-opacity-10 text-success">Live</div>
                                </td>
                                <!-- Price item -->
                                <td>$256</td>
                                <!-- Action item -->
                                <td>
                                    <a href="#" class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i
                                            class="far fa-fw fa-edit"></i></a>
                                    <button class="btn btn-sm btn-danger-soft btn-round mb-0"><i
                                            class="fas fa-fw fa-times"></i></button>
                                </td>
                            </tr>

                            <!-- Table item -->
                            <tr>
                                <!-- Course item -->
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!-- Image -->
                                        <div class="w-60px">
                                            <img src="assets/images/courses/4by3/11.jpg" class="rounded" alt="">
                                        </div>
                                        <div class="mb-0 ms-2">
                                            <!-- Title -->
                                            <h6><a href="#">Build Responsive Websites with HTML</a></h6>
                                            <!-- Info -->
                                            <div class="d-sm-flex">
                                                <p class="h6 fw-light mb-0 small me-3"><i
                                                        class="fas fa-table text-orange me-2"></i>42 lectures</p>
                                                <p class="h6 fw-light mb-0 small"><i
                                                        class="fas fa-check-circle text-success me-2"></i>25 Completed</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <!-- Enrolled item -->
                                <td class="text-center text-sm-start">345</td>
                                <!-- Status item -->
                                <td>
                                    <div class="badge bg-success bg-opacity-10 text-success">Live</div>
                                </td>
                                <!-- Price item -->
                                <td>$222</td>
                                <!-- Action item -->
                                <td>
                                    <a href="#" class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i
                                            class="far fa-fw fa-edit"></i></a>
                                    <button class="btn btn-sm btn-danger-soft btn-round mb-0"><i
                                            class="fas fa-fw fa-times"></i></button>
                                </td>
                            </tr>
                        </tbody>
                        <!-- Table body END -->
                    </table>
                </div>
                <!-- Course list table END -->

                <!-- Pagination START -->
                <div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
                    <!-- Content -->
                    <p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                    <!-- Pagination -->
                    <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                        <ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                            <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i
                                        class="fas fa-angle-left"></i></a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                            <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#"><i
                                        class="fas fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Pagination END -->
            </div>
            <!-- Card body START -->
        </div>
        <!-- Card END -->
    </div>
@endsection
