<!DOCTYPE html>
<html lang="en">

<head>
	<title>@yield('title')</title>

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

	<link rel="shortcut icon" href="{{ asset('assets-admin/img/favicon.ico') }}">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap" rel="stylesheet">

	<!-- Remove this after purchasing -->
	<link class="js-stylesheet" href="{{ asset('assets-admin/css/light.css') }}" rel="stylesheet">
	<!-- END SETTINGS -->

	<link href="{{ asset('assets-admin/summernote/summernote.min.css') }}" rel="stylesheet">
	@stack('custom-style')
</head>

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
	@stack('custom-script')

	<script>
	 $(document).ready(function() {
	  $('#summernote').summernote();
	 });
	</script>

</body>

</html>
