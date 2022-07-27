@extends('instructor.layouts.main')
@section('profile')
    <div class="col-xl-12">
        <!-- Student review START -->
        <div class="card border bg-transparent rounded-3">
            <!-- Header START -->
            <div class="card-header bg-transparent border-bottom">
                <div class="row justify-content-between align-middle">
                    <!-- Title -->
                    <div class="col-sm-6">
                        <h3 class="card-header-title mb-2 mb-sm-0">Student review</h3>
                    </div>

                    <!-- Short by filter -->
                    <div class="col-sm-4">
                        <form>
                            <div class="choices" data-type="select-one" tabindex="0" role="combobox" aria-autocomplete="list"
                                aria-haspopup="true" aria-expanded="false">
                                <div class="choices__inner"><select
                                        class="form-select js-choice z-index-9 bg-white choices__input"
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
                                        <div id="choices--jlyu-item-choice-6"
                                            class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted"
                                            role="option" data-choice="" data-id="6" data-value=""
                                            data-select-text="Press to select" data-choice-selectable=""
                                            aria-selected="true">Sort by</div>
                                        <div id="choices--jlyu-item-choice-1"
                                            class="choices__item choices__item--choice choices__item--selectable"
                                            role="option" data-choice="" data-id="1" data-value="★★★★★ (5/5)"
                                            data-select-text="Press to select" data-choice-selectable="">★★★★★ (5/5)</div>
                                        <div id="choices--jlyu-item-choice-2"
                                            class="choices__item choices__item--choice choices__item--selectable"
                                            role="option" data-choice="" data-id="2" data-value="★★★★☆ (4/5)"
                                            data-select-text="Press to select" data-choice-selectable="">★★★★☆ (4/5)</div>
                                        <div id="choices--jlyu-item-choice-3"
                                            class="choices__item choices__item--choice choices__item--selectable"
                                            role="option" data-choice="" data-id="3" data-value="★★★☆☆ (3/5)"
                                            data-select-text="Press to select" data-choice-selectable="">★★★☆☆ (3/5)</div>
                                        <div id="choices--jlyu-item-choice-4"
                                            class="choices__item choices__item--choice choices__item--selectable"
                                            role="option" data-choice="" data-id="4" data-value="★★☆☆☆ (2/5)"
                                            data-select-text="Press to select" data-choice-selectable="">★★☆☆☆ (2/5)</div>
                                        <div id="choices--jlyu-item-choice-5"
                                            class="choices__item choices__item--choice choices__item--selectable"
                                            role="option" data-choice="" data-id="5" data-value="★☆☆☆☆ (1/5)"
                                            data-select-text="Press to select" data-choice-selectable="">★☆☆☆☆ (1/5)</div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Header END -->

            <!-- Reviews START -->
            <div class="card-body mt-2 mt-sm-4">

                <!-- Review item START -->
                <div class="d-sm-flex">
                    <!-- Avatar image -->
                    <img class="avatar avatar-lg rounded-circle float-start me-3"
                        src="{{ asset('assets/images/avatar/01.jpg') }}" alt="avatar">
                    <div>
                        <div class="mb-3 d-sm-flex justify-content-sm-between align-items-center">
                            <!-- Title -->
                            <div>
                                <h5 class="m-0">Frances Guerrero</h5>
                                <span class="me-3 small">June 11, 2021 at 6:01 am </span>
                            </div>
                            <!-- Review star -->
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="far fa-star text-warning"></i></li>
                            </ul>
                        </div>
                        <!-- Content -->
                        <h6><span class="text-body fw-light">Review on:</span> How to implement sitemap on sass</h6>
                        <p>Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant private blushes
                            removed an in equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr
                            feeling does chiefly cordial in do. </p>
                        <!-- Button -->
                        <div class="text-end">
                            <a href="#" class="btn btn-sm btn-primary-soft mb-1 mb-sm-0">Direct message</a>
                            <a class="btn btn-sm btn-light mb-0" data-bs-toggle="collapse" href="#collapseComment"
                                role="button" aria-expanded="false" aria-controls="collapseComment">
                                Reply
                            </a>
                            <!-- collapse textarea -->
                            <div class="collapse show" id="collapseComment">
                                <div class="d-flex mt-3">
                                    <textarea class="form-control mb-0" placeholder="Add a comment..." rows="2" spellcheck="false"></textarea>
                                    <button class="btn btn-sm btn-primary-soft ms-2 px-4 mb-0 flex-shrink-0"><i
                                            class="fas fa-paper-plane fs-5"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Divider -->
                <hr>
                <!-- Review item END -->

                <!-- Review item START -->
                <div class="d-sm-flex">
                    <!-- Avatar image -->
                    <img class="avatar avatar-lg rounded-circle float-start me-3"
                        src="{{ asset('assets/images/avatar/03.jpg') }}" alt="avatar">
                    <div>
                        <div class="mb-3 d-sm-flex justify-content-sm-between align-items-center">
                            <!-- Title -->
                            <div>
                                <h5 class="m-0">Louis Ferguson</h5>
                                <span class="me-3 small">June 18, 2021 at 11:55 am</span>
                            </div>
                            <!-- Review star -->
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i>
                                </li>
                                <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                            </ul>
                        </div>
                        <!-- Content -->
                        <h6><span class="text-body fw-light">Review on:</span> How does an Angular application work?</h6>
                        <p>Far advanced settling say finished raillery. Offered chiefly farther Satisfied conveying a
                            dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally
                            totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly
                            cordial in do. </p>
                        <!-- Button -->
                        <div class="text-end">
                            <a href="#" class="btn btn-sm btn-primary-soft mb-0">Direct message</a>
                            <a href="#" class="btn btn-sm btn-light mb-0">Reply</a>
                        </div>
                    </div>
                </div>
                <!-- Divider -->
                <hr>
                <!-- Review item END -->

                <!-- Review item START -->
                <div class="d-sm-flex">
                    <!-- Avatar image -->
                    <img class="avatar avatar-lg rounded-circle float-start me-3"
                        src="{{ asset('assets/images/avatar/05.jpg') }}" alt="avatar">
                    <div>
                        <div class="mb-3 d-sm-flex justify-content-sm-between align-items-center">
                            <!-- Title -->
                            <div>
                                <h5 class="m-0">Carolyn Ortiz</h5>
                                <span class="me-3 small">August 28, 2021 at 3:08 pm</span>
                            </div>
                            <!-- Review star -->
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                            </ul>
                        </div>
                        <!-- Content -->
                        <h6><span class="text-body fw-light">Review on:</span> What is Flexbox and describe any elaborate
                            on its most used properties??</h6>
                        <p>Offered chiefly farther Satisfied conveying a dependent contented he gentleman agreeable do be.
                            Warrant private blushes removed an in equally totally if. Delivered dejection necessary
                            objection do Mr prevailed. Mr feeling does chiefly cordial in do. </p>
                        <!-- Button -->
                        <div class="text-end">
                            <a href="#" class="btn btn-sm btn-primary-soft mb-0">Direct message</a>
                            <a href="#" class="btn btn-sm btn-light mb-0">Reply</a>
                        </div>
                    </div>
                </div>
                <!-- Divider -->
                <hr>
                <!-- Review item END -->

                <!-- Review item START -->
                <div class="d-sm-flex">
                    <!-- Avatar image -->
                    <img class="avatar avatar-lg rounded-circle float-start me-3"
                        src="{{ asset('assets/images/avatar/08.jpg') }}" alt="avatar">
                    <div>
                        <div class="mb-3 d-sm-flex justify-content-sm-between align-items-center">
                            <!-- Title -->
                            <div>
                                <h5 class="m-0">Dennis Barrett</h5>
                                <span class="me-3 small">August 29, 2021 at 5:35 pm</span>
                            </div>
                            <!-- Review star -->
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                            </ul>
                        </div>
                        <!-- Content -->
                        <h6><span class="text-body fw-light">Review on:</span> What are the different data types present in
                            javascript?</h6>
                        <p>Chiefly farther Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant
                            private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr
                            prevailed. Mr feeling does chiefly cordial in do. </p>
                        <!-- Button -->
                        <div class="text-end">
                            <a href="#" class="btn btn-sm btn-primary-soft mb-0">Direct message</a>
                            <a href="#" class="btn btn-sm btn-light mb-0">Reply</a>
                        </div>
                    </div>
                </div>
                <!-- Divider -->
                <hr>
                <!-- Review item END -->

                <!-- Review item START -->
                <div class="d-sm-flex">
                    <!-- Avatar image -->
                    <img class="avatar avatar-lg rounded-circle float-start me-3"
                        src="{{ asset('assets/images/avatar/09.jpg') }}" alt="avatar">
                    <div>
                        <div class="mb-3 d-sm-flex justify-content-sm-between align-items-center">
                            <!-- Title -->
                            <div>
                                <h5 class="m-0">Carolyn Ortiz</h5>
                                <span class="me-3 small">September 15, 2021 at 8:28 am</span>
                            </div>
                            <!-- Review star -->
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                            </ul>
                        </div>
                        <!-- Content -->
                        <h6><span class="text-body fw-light">Review on:</span> What are object prototypes?</h6>
                        <p>Chiefly farther Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant
                            private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr
                            prevailed. Mr feeling does chiefly cordial in do. </p>
                        <!-- Button -->
                        <div class="text-end">
                            <a href="#" class="btn btn-sm btn-primary-soft mb-0">Direct message</a>
                            <a href="#" class="btn btn-sm btn-light mb-0">Reply</a>
                        </div>
                    </div>
                </div>
                <!-- Review item END -->
            </div>
            <!-- Reviews END -->

            <div class="card-footer border-top">
                <!-- Pagination START -->
                <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                    <!-- Content -->
                    <p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                    <!-- Pagination -->
                    <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                        <ul class="pagination pagination-sm pagination-primary-soft my-0 py-0">
                            <li class="page-item my-0"><a class="page-link" href="#" tabindex="-1"><i
                                        class="fas fa-angle-left"></i></a></li>
                            <li class="page-item my-0"><a class="page-link" href="#">1</a></li>
                            <li class="page-item my-0 active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item my-0"><a class="page-link" href="#">3</a></li>
                            <li class="page-item my-0"><a class="page-link" href="#"><i
                                        class="fas fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Pagination END -->
            </div>
        </div>
        <!-- Student review END -->
    </div>
@endsection
