@extends('admin.layouts.main')
@section('title', 'Data Students | Basicschool')
@section('content')
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Data Student</h1>
		<nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
				<li class="breadcrumb-item active" aria-current="page">Users</li>
				<li class="breadcrumb-item"><a href="{{ route('admin.students.index') }}">Students</a></li>
				<li class="breadcrumb-item active" aria-current="page">Detail</li>
			</ol>
		</nav>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Student Detail</h5>
						<h6 class="card-subtitle text-muted">Detail shows all user profile data
					</div>
					<div class="card-body">
						<div class="row justify-content-center">
							<div class="col-12">
								<div class="profile d-flex">
									<img
										src="{{ Storage::disk('public')->exists('/admin/students/uploaded/' . $user->profile_picture) ? asset('storage/admin/students/uploaded/' . $user->profile_picture) : $user->profile_picture }}"
										alt="{{ $user->full_name }}" width="150"
										class="rounded-circle bg-dark border border-5 border-dark shadow m-3 ">
									<div class="title my-auto">
										<h1 class="mb-3">{{ $user->full_name }}</h1>
										<p class="m-0">{{ $user->username }}</p>
										<p class="m-0">{{ $user->email }}</p>
									</div>
									<div class="avatar-img rounded-circle bg-danger"><span
											class="text-white position-absolute top-50 start-50 translate-middle fw-bold">AB</span>
									</div>
								</div>
							</div>
							<hr>
							<div class="col-xs-6 col-sm-12 col-md-4 col-lg-6">
								<h4>General</h4>
								<dl class="row">
									<dt class="col-sm-3">Name</dt>
									<dd class="col-sm-9">{{ $user->full_name }}</dd>

									<dt class="col-sm-3">Email</dt>
									<dd class="col-sm-9">
										<p>{{ $user->email }}</p>
									</dd>

									<dt class="col-sm-3">Phone Number</dt>
									<dd class="col-sm-9">{{ $user->phone_number == null ? '...' : $user->phone_number }}</dd>

									<dt class="col-sm-3">Job Title</dt>
									<dd class="col-sm-9">{{ $user->job_title == null ? '...' : $user->job_title }}</dd>

									<dt class="col-sm-3">Joined At</dt>
									<dd class="col-sm-9">{{ $user->created_at == null ? '...' : $user->created_at->format('d M Y | H:i:s') }}</dd>

									<dt class="col-sm-3 text-truncate">About</dt>
									<dd class="col-sm-9">{{ $user->about == null ? '...' : $user->about }}</dd>
								</dl>
							</div>
							<div class="col-xs-6 col-sm-12 col-md-4 col-lg-6">
								<h4>Social</h4>
								<dl class="row">
									<dt class="col-sm-3">Twitter</dt>
									<dd class="col-sm-9">{{ $user->social_twitter == null ? '...' : $user->social_twitter }}</dd>
									<dt class="col-sm-3">Instagram</dt>
									<dd class="col-sm-9">
										<p>{{ $user->social_instagram == null ? '...' : $user->social_instagram }}</p>
									</dd>
									<dt class="col-sm-3">Facebook</dt>
									<dd class="col-sm-9">{{ $user->social_facebook == null ? '...' : $user->social_facebook }}</dd>

									<dt class="col-sm-3">Linkedin</dt>
									<dd class="col-sm-9">{{ $user->social_linkedin == null ? '...' : $user->social_linkedin }}</dd>

									<dt class="col-sm-3">Youtube</dt>
									<dd class="col-sm-9">{{ $user->social_youtube == null ? '...' : $user->social_youtube }}</dd>
								</dl>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
