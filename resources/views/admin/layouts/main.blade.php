<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 5 Admin &amp; Dashboard Template">
    <meta name="author" content="Bootlab">

    <title>Admin | Basicschool</title>

    <link rel="shortcut icon" href="{{ asset('assets-admin/img/favicon.ico') }}">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap" rel="stylesheet">

    <!-- Choose your prefered color scheme -->
    <!-- <link href="css/light.css" rel="stylesheet"> -->
    <!-- <link href="css/dark.css" rel="stylesheet"> -->

    <!-- BEGIN SETTINGS -->
    <!-- Remove this after purchasing -->
    <link class="js-stylesheet" href="{{ asset('assets-admin/css/light.css') }}" rel="stylesheet">
    <!-- END SETTINGS -->

    <link href="{{ asset('assets-admin/summernote/summernote.min.css') }}" rel="stylesheet">
</head>
<!--
  HOW TO USE:
  data-theme: default (default), dark, light
  data-layout: fluid (default), boxed
  data-sidebar-position: left (default), right
  data-sidebar-behavior: sticky (default), fixed, compact
-->

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
<div class="wrapper">
    @include('admin.layouts.partials.sidebar')
    <div class="main">
        @include('admin.layouts.partials.navbar')
        <main class="content">
            <div class="container-fluid p-0">
                @yield('content')
            </div>
        </main>


    </div>
</div>

<script src="{{ asset('assets-admin/js/app.js') }}"></script>
<script src="{{ asset('assets-admin/summernote/summernote.min.js') }}"></script>
{{ $js ?? '' }}

<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>

</body>
</html>
