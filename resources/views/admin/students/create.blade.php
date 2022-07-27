@extends('admin.layouts.main')
@section('title', 'Create Data Student | Basicschool')
@section('content')
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Create Data Student</h1>
		<nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
				<li class="breadcrumb-item active" aria-current="page">Users</li>
				<li class="breadcrumb-item"><a href="{{ route('admin.students.index') }}">Student</a></li>
				<li class="breadcrumb-item active" aria-current="page">Create</li>
			</ol>
		</nav>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Create Student</h5>
						<h6 class="card-subtitle text-muted">The data must be valid.</h6>
					</div>
					<div class="card-body">
						<form class="form" action="/admin/students/" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="mb-3">
								<label for="formGroupExampleInput" class="form-label">Student Name</label>
								<input type="text" class="form-control" id="formGroupExampleInput" name="student_name" required>
							</div>
							<div class="mb-3">
								<label for="formGroupExampleInput" class="form-label">Email</label>
								<input type="text" class="form-control" id="formGroupExampleInput" name="student_email" required>
							</div>
							<div class="mb-3">
								<label for="formGroupExampleInput" class="form-label">Title</label>
								<input type="text" class="form-control" id="formGroupExampleInput" name="student_title" required>
							</div>
							<div class="mb-3">
								<label for="formGroupExampleInput" class="form-label">Foto Student</label>
								<input type="file" class="form-control" id="formGroupExampleInput" name="student_photo" required>
							</div>
							<div class="mb-3">
								<label for="formGroupExampleInput" class="form-label">Tentang Student</label>
								<textarea id="summernote" class="form-control" name="student_about"></textarea>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label for="formGroupExampleInput" class="form-label">Twitter</label>
										<input type="text" class="form-control" id="formGroupExampleInput" name="student_twitter"
											placeholder="Twitter URL">
									</div>
								</div>
								<div class="col">
									<div class="mb-3">
										<label for="formGroupExampleInput" class="form-label">Instragram</label>
										<input type="text" class="form-control" id="formGroupExampleInput" name="student_instagram"
											placeholder="Instagram URL">
									</div>
								</div>
								<div class="col">
									<div class="mb-3">
										<label for="formGroupExampleInput" class="form-label">Facebook</label>
										<input type="text" class="form-control" id="formGroupExampleInput" name="student_facebook"
											placeholder="Facebook URL">
									</div>
								</div>
								<div class="col">
									<div class="mb-3">
										<label for="formGroupExampleInput" class="form-label">Linkedin</label>
										<input type="text" class="form-control" id="formGroupExampleInput" name="student_linkedin"
											placeholder="Linkedin URL">
									</div>
								</div>
								<div class="col">
									<div class="mb-3">
										<label for="formGroupExampleInput" class="form-label">YouTube</label>
										<input type="text" class="form-control" id="formGroupExampleInput" name="student_youtube"
											placeholder="Youtube URL">
									</div>
								</div>
							</div>
							<div class="col-12">
								<a href="/admin/students" class="btn btn-warning">Batal</a>
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
