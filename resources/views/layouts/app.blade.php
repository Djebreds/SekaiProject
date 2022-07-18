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
    <link id="style-switch" rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <style>
        .inactive-class {
            -webkit-filter: grayscale(100%);
            -moz-filter: grayscale(100%);
            -o-filter: grayscale(100%);
            -ms-filter: grayscale(100%,);
            filter: grayscale(100%);
        }
    </style>

</head>
<body>
@include('layouts.partials.header')
@yield('content')
@include('layouts.partials.footer')


<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i>
</div>

<!-- Bootstrap JS -->
<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

<!-- Vendors -->
<script src="{{ asset('assets/vendor/tiny-slider/tiny-slider.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.js') }}"></script>
<script src="{{ asset('assets/vendor/purecounterjs/dist/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/choices/js/choices.min.js') }}"></script>

<!-- Template Functions -->
<script src="{{ asset('assets/js/functions.js') }}"></script>

<script>
    $(document).ready(function () {
        console.log('ready');
        $('select#metode_pembayaran').on('change', function () {
            var metode_pembayaran = $('#metode_pembayaran:selected').val();
            console.log(metode_pembayaran);
            var biayaadmin = 2500;
            if (metode_pembayaran == 'BRI') {
                $('#totaltransfer').html('Rp. ' + ($('#hargakelas').val() + $('#kodeunik').val()));
            }
            elseif(metode_pembayaran == 'QRIS')
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
</script>
</body>
</html>
