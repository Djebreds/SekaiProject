@extends('auth.layouts.main')
@section('title', 'Verify Email | Basicshool')
@section('content')
    <!-- left -->
    <div class="col-12 col-lg-6 d-md-flex align-items-center justify-content-center bg-primary bg-opacity-10 vh-lg-100">
        <div class="p-3 p-lg-5">
            <!-- Title -->
            <div class="text-center">
                <h2 class="fw-bold">Welcome to Basicschool</h2>
                <p class="mb-0 h6 fw-light">Let's learn something new today!</p>
            </div>
            <!-- SVG Image -->
            <img src="{{ asset('assets/images/element/02.svg') }}" class="mt-5" alt="">
        </div>
    </div>

    <!-- Right -->
    <div class="col-12 col-lg-6 m-auto">
        <div class="row my-5">
            <div class="col-sm-10 col-xl-8 m-auto">
                <!-- Title -->
                <h1 class="fs-2">✉️ Verify first your email address.</h1>
                <p class="lead mb-4">If you cannot find <b>email
                        verification</b> mail in the index folder, please check the Junk/Spam folder.</p>
                <p class="lead mb-4">If you did not receive the <b>email verification</b> mail please click
                    on the resend button.</p>

                <!-- Alert -->
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        A fresh verification link has been sent to your email address.
                    </div>
            @endif

            <!-- Form START -->
                <form method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <!-- Button -->
                    <div class="align-items-center mt-0">
                        <div class="d-grid">
                            <button class="btn btn-primary mb-0 disabled" type="submit" id="verify">Resend
                                verification
                                email
                            </button>
                        </div>
                    </div>
                </form>
                <!-- Form END -->

                <!-- Social buttons and divider -->
                <div class="row">
                    <!-- Divider with text -->
                    <div class="position-relative my-3">
                        <hr>
                        <p class="small position-absolute top-50 start-50 translate-middle bg-body px-5">
                            Resend verification: <span class="fw-bold" id="timer">30</span></p>
                    </div>
                </div>
            </div>
        </div> <!-- Row END -->
    </div>
@endsection
@push('custom-script')
    <script src="{{ asset('assets/js/page/verify.js') }}"></script>
@endpush
