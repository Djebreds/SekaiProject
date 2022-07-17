<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | Basicschool</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="PT Basicteknologi Intersolusi Tersinergi">
    <meta name="description" content="Basicschool Belajar Pemrograman Di Bimbing Instruktur">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">

    <!-- Theme CSS -->
    <link id="style-switch" rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

</head>

<body>

<!-- **************** MAIN CONTENT START **************** -->
<main>
    <section class="p-0 d-flex align-items-center position-relative overflow-hidden">
        <div class="container-fluid">
            <div class="row">
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
                            <!-- Alert -->
                            @if(session()->has('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
                            @if(session()->has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                        @endif
                        <!-- Title -->
                            <h1 class="fs-2">✉️ Verify first your email address.</h1>
                            <p class="lead mb-4">We have sent the verification mail
                                to <span class="text-primary">{{ session('body.email') }}</span>. If you cannot find <b>email
                                    verification</b> mail in the index folder, please check the Junk/Spam folder.</p>
                            <p class="lead mb-4">If you did not receive the <b>email verification</b> mail please click
                                on the resend button.</p>

                            <!-- Form START -->
                            <form method="POST" action="{{ route('verify.resend') }}">
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
            </div> <!-- Row END -->
        </div>
    </section>
</main>
<!-- **************** MAIN CONTENT END **************** -->
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- Template Functions -->
<script src="{{ asset('assets/js/page/verify.js') }}"></script>
<script src="{{ asset('assets/js/functions.js') }}"></script>

</body>

</html>