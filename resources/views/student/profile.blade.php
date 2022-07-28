@extends('student.layouts.main')
@section('profile')
    <main>

        <div class="card bg-transparent border rounded-3">
            <!-- Card header -->
            <div class="card-header bg-transparent border-bottom">
                <h3 class="card-header-title mb-0">Edit Profile</h3>
            </div>
            <!-- Card body START -->
            <div class="card-body">
                <!-- Form -->
                <form class="row g-4">

                    <!-- Profile picture -->
                    <div class="col-12 justify-content-center align-items-center">
                        <label class="form-label">Profile picture</label>
                        <div class="d-flex align-items-center">
                            <label class="position-relative me-4" for="uploadfile-1" title="Replace this pic">
                                <!-- Avatar place holder -->
                                <span class="avatar avatar-xl">
                                    <img id="uploadfile-1-preview"
                                        class="avatar-img rounded-circle border border-white border-3 shadow"
                                        src="{{ asset('assets/images/avatar/07.jpg') }}" alt="">
                                </span>
                                <!-- Remove btn -->
                                <button type="button" class="uploadremove"><i class="bi bi-x text-white"></i></button>
                            </label>
                            <!-- Upload button -->
                            <label class="btn btn-primary-soft mb-0" for="uploadfile-1">Change</label>
                            <input id="uploadfile-1" class="form-control d-none" type="file">
                        </div>
                    </div>

                    <!-- Full name -->
                    <div class="col-12">
                        <label class="form-label">Full name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="full_name" value="Lori"
                                placeholder="First name">
                        </div>
                    </div>

                    <!-- Username -->
                    <div class="col-md-6">
                        <label class="form-label">Username</label>
                        <div class="input-group">
                            <span class="input-group-text">Eduport.com</span>
                            <input type="text" name="username" class="form-control" value="loristev">
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="col-md-6">
                        <label class="form-label">Password</label>
                        <input class="form-control" name="password" type="password" value="sayadadang">
                    </div>

                    <!-- Email id -->
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input class="form-control" type="email" name="email" value="example@gmail.com"
                            placeholder="Email">
                    </div>

                    <!-- Phone number -->
                    <div class="col-md-6">
                        <label class="form-label">Phone number</label>
                        <input type="text" name="phone_number" class="form-control" value="1234567890"
                            placeholder="Phone number">
                    </div>

                    <!-- About me -->
                    <div class="col-12">
                        <label class="form-label">About me</label>
                        <textarea class="form-control " name="about" rows="3">I’ve found a way to get paid for my favorite hobby, and do so while following my dream of traveling the world.</textarea>
                        <div class="form-text">Brief description for your profile.</div>
                    </div>

                    <!-- Save button -->
                    <div class="d-sm-flex justify-content-end">
                        <button type="button" class="btn btn-primary mb-0">Save changes</button>
                    </div>
                </form>
            </div>
            <!-- Card body END -->
        </div>
    @endsection
