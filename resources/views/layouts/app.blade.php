<!DOCTYPE html>
<html lang="en">

<head>
    <title>Basicschool Belajar Pemrograman Dibimbing Langsung Instruktur</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="PT Basicteknologi Intersolusi Tersinergi">
    <meta name="description" content="Basicschool Belajar Pemrograman Di Bimbing Instruktur">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/choices/css/choices.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/aos/aos.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/glightbox/css/glightbox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/quill/css/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/stepper/css/bs-stepper.min.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/tiny-slider/tiny-slider.css') }}"> --}}


    <!-- Theme CSS -->
    <link id="style-switch" rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    {{-- <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

    <!-- Plugins CSS -->
    
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/tiny-slider/tiny-slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/glightbox/css/glightbox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/choices/css/choices.min.css') }}">

    <!-- Theme CSS -->
    <link id="style-switch" rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}"> --}}

    @stack('custom-style')
    {{-- <style>
        .inactive-class {
            -webkit-filter: grayscale(100%);
            -moz-filter: grayscale(100%);
            -o-filter: grayscale(100%);
            -ms-filter: grayscale(100%);
            filter: grayscale(100%);
        }
    </style> --}}

</head>

<body>
    {{-- <script>
        $(document).ready(function() {
            console.log('ready');
            $('select#metode_pembayaran').on('change', function() {
                var metode_pembayaran = $('#metode_pembayaran:selected').val();
                console.log(metode_pembayaran);
                var biayaadmin = 2500;
                if (metode_pembayaran == 'BRI') {
                    $('#totaltransfer').html('Rp. ' + ($('#hargakelas').val() + $('#kodeunik').val()));
                } else if (metode_pembayaran == 'QRIS') {
                    $('#totaltransfer').html('Rp. ' + ($('#hargakelas').val() + $('#kodeunik').val()) +
                        biayaadmin);
                    $('#biayaadmin').html('Rp. ' + biayaadmin);
                } else {
                    $('#totaltransfer').html('Rp. ' + ($('#hargakelas').val() + $('#kodeunik').val()));
                }
            });
        });
    </script> --}}
    @include('layouts.partials.header')
    @yield('content')
    @include('layouts.partials.footer')



    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{-- public/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js --}}
    <!-- Vendors -->
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/choices/js/choices.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/js/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/stepper/js/bs-stepper.min.js') }}"></script>
    <!-- Vendors -->
    {{-- <script src="{{ asset('assets/vendor/tiny-slider/tiny-slider.js') }}"></script> --}}



    @stack('custom-script')


    <!-- Template Functions -->
    <script src="{{ asset('assets/js/functions.js') }}"></script>
    {{-- <script src="{{ asset('assets/vendor/tiny-slider/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounterjs/dist/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/choices/js/choices.min.js') }}"></script>

    <!-- Template Functions -->
    <script src="{{ asset('assets/js/functions.js') }}"></script> --}}


    {{-- <script>
    $(document).ready(function () {
        console.log('ready');
        $('select#metode_pembayaran').on('change', function () {
            var metode_pembayaran = $('#metode_pembayaran:selected').val();
            console.log(metode_pembayaran);
            var biayaadmin = 2500;
            if (metode_pembayaran == 'BRI') {
                $('#totaltransfer').html('Rp. ' + ($('#hargakelas').val() + $('#kodeunik').val()));
            }
            else if(metode_pembayaran == 'QRIS')
            {
                $('#totaltransfer').html('Rp. ' + ($('#hargakelas').val() + $('#kodeunik').val()) +
                    biayaadmin);
                $('#biayaadmin').html('Rp. ' + biayaadmin);
            }
            else
            {
                $('#totaltransfer').html('Rp. ' + ($('#hargakelas').val() + $('#kodeunik').val()));
            }
        });
    });
</script> --}}
</body>

</html>
