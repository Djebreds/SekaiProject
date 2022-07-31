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
			<div class="col">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Student Detail</h5>
						<h6 class="card-subtitle text-muted">Detail shows all user profile data
					</div>
				</div>
			</div>
		</div>
		{{-- <div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="row justify-content-center">
							<div class="col-12">
								<div class="profile">
									<div class="row">
										<div class="col-sm-12 col-lg-2 text-center">
											<img
												src="{{ Storage::disk('public')->exists('/admin/students/uploaded/' . $user->profile_picture) ? asset('storage/admin/students/uploaded/' . $user->profile_picture) : $user->profile_picture }}"
												alt="{{ $user->full_name }}" width="150"
												class="rounded-circle bg-dark border border-5 border-dark shadow m-3 ">
										</div>
										<div class="col-sm-12 col-lg-10 align-self-center text-lg-start text-sm-center">
											<h1 class="mb-3">{{ $user->full_name }}</h1>
											<p class="m-0">{{ $user->username }}</p>
											<p class="m-0">{{ $user->email }}</p>
										</div>
									</div>
								</div>
							</div>
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
		</div> --}}
	</div>
	<div class="tab">
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item" role="presentation">
				<a class="nav-link active" href="#icon-tab-1" data-bs-toggle="tab" role="tab" aria-selected="true">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
						stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
						class="feather feather-home align-middle">
						<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
						<polyline points="9 22 9 12 15 12 15 22"></polyline>
					</svg>
				</a>
			</li>
			<li class="nav-item" role="presentation">
				<a class="nav-link" href="#icon-tab-2" data-bs-toggle="tab" role="tab" aria-selected="false" tabindex="-1">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
						stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
						class="feather feather-settings align-middle">
						<circle cx="12" cy="12" r="3"></circle>
						<path
							d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
						</path>
					</svg>
				</a>
			</li>
			<li class="nav-item" role="presentation">
				<a class="nav-link" href="#icon-tab-3" data-bs-toggle="tab" role="tab" aria-selected="false" tabindex="-1">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
						stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
						class="feather feather-message-square align-middle">
						<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
					</svg>
				</a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="icon-tab-1" role="tabpanel">
				<div class="row">
					<div class="col-12">
						<div class="row mb-3">
							<div class="col-sm-12 col-lg-2 text-center">
								<img
									src="{{ Storage::disk('public')->exists('/admin/students/uploaded/' . $user->profile_picture) ? asset('storage/admin/students/uploaded/' . $user->profile_picture) : $user->profile_picture }}"
									alt="{{ $user->full_name }}" width="150"
									class="rounded-circle bg-dark border border-5 border-dark shadow m-3 ">
							</div>
							<div class="col-sm-12 col-lg-10 align-self-center text-lg-start text-sm-center">
								<h1 class="mb-3">{{ $user->full_name }}</h1>
								<p class="m-0">{{ $user->username }}</p>
								<p class="m-0">{{ $user->email }}</p>
							</div>
						</div>
						<div class="header">
							<h2>Overview</h2>
						</div>
						<div class="row">
							<div class="col-sm-4 col-lg-4 col-xxl-4 d-flex">
								<div class="card bg-primary bg-opacity-10 flex-fill">
									<div class="card-body p-0 d-flex flex-fill">
										<div class="row g-0 w-100">
											<div class="col-6">
												<div class="illustration-text p-3 m-1">
													<h4 class="illustration-text">Welcome Back, Chris!</h4>
													<p class="mb-0">AppStack Dashboard</p>
												</div>
											</div>
											<div class="col-6 align-self-end text-end">
												<img src="http://127.0.0.1:8000/assets-admin/img/illustrations/searching.png" alt="Searching"
													class="img-fluid illustration-img">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-lg-4 col-xxl-4 d-flex">
								<div class="card bg-success bg-opacity-10 flex-fill">
									<div class="card-body p-0 d-flex flex-fill">
										<div class="row g-0 w-100">
											<div class="col-6">
												<div class="illustration-text p-3 m-1">
													<h4 class="text-success">Welcome Back, Chris!</h4>
													<p class="text-success mb-0">AppStack Dashboard</p>
												</div>
											</div>
											<div class="col-6 align-self-end text-end">
												<img src="http://127.0.0.1:8000/assets-admin/img/illustrations/searching.png" alt="Searching"
													class="img-fluid illustration-img">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-lg-4 col-xxl-4 d-flex">
								<div class="card bg-warning bg-opacity-10 flex-fill">
									<div class="card-body p-0 d-flex flex-fill">
										<div class="row g-0 w-100">
											<div class="col-6">
												<div class="illustration-text p-3 m-1">
													<h4 class="text-warning">Welcome Back, Chris!</h4>
													<p class="text-warning mb-0">AppStack Dashboard</p>
												</div>
											</div>
											<div class="col-6 align-self-end text-end">
												<img src="http://127.0.0.1:8000/assets-admin/img/illustrations/searching.png" alt="Searching"
													class="img-fluid illustration-img">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="icon-tab-2" role="tabpanel">
				<h4 class="tab-title">Another one</h4>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor tellus eget condimentum
					rhoncus. Aenean massa. Cum sociis natoque
					penatibus et magnis neque dis parturient montes, nascetur ridiculus mus.</p>
				<p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede
					justo, fringilla vel, aliquet nec, vulputate
					eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
			</div>
			<div class="tab-pane" id="icon-tab-3" role="tabpanel">
				<h4 class="tab-title">One more</h4>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor tellus eget condimentum
					rhoncus. Aenean massa. Cum sociis natoque
					penatibus et magnis neque dis parturient montes, nascetur ridiculus mus.</p>
				<p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede
					justo, fringilla vel, aliquet nec, vulputate
					eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
			</div>
		</div>
	</div>
@endsection
