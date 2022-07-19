@extends('auth.layouts.main')
@section('title', 'Login | Basicshool')
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
                <h1 class="fs-2">👋 Welcome back</h1>
                <p class="lead mb-4">Please login to learn many things with us.</p>
                @if(session()->has('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
            @endif

            @error('email')
            <!-- Alert -->
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror

            <!-- Form START -->
                <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="form-label">Email address </label>
                        <div class="input-group input-group-lg">
                                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                    class="bi bi-envelope-fill"></i></span>
                            <input type="email" name="email"
                                   class="form-control border-0 bg-light rounded-end ps-1 @error('email') is-invalid @enderror"
                                   placeholder="E-mail" id="email" autofocus autocomplete="email" required>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <label for="current-password" class="form-label">Password </label>
                        <div class="input-group input-group-lg">
                                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                    class="fas fa-lock"></i></span>
                            <input type="password" name="password"
                                   class="form-control border-0 bg-light ps-1 @error('email') is-invalid @enderror"
                                   placeholder="password" id="current-password"
                                   autocomplete="current-password"
                                   required>
                            <span class="input-group-text bg-light rounded-end border-0 text-secondary px-3"><i
                                        class="fas fa-eye-slash" id="togglePassword"></i></span>
                        </div>
                    </div>

                    <!-- Remember -->
                    <div class="mb-4 d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" name="remember" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>
                        <a href="#"><u>Forgot password?</u></a>
                    </div>
                    <!-- Button -->
                    <div class="align-items-center mt-0">
                        <div class="d-grid">
                            <button class="btn btn-primary mb-0" type="submit">Login</button>
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
                            Or</p>
                    </div>
                    <!-- Social btn -->
                    <div class="d-grid">
                        <a href="/oauth/google" class="btn bg-google mb-2 mb-xxl-0"><i
                                    class="fab fa-fw fa-google text-white me-2"></i>Login with
                            <b>Google</b></a>
                    </div>
                </div>
                <!-- Sign up link -->
                <div class="mt-4 text-center">
                    <span>Don't have an account? <a href="{{ route('register') }}">Register</a></span>
                </div>
            </div>
        </div> <!-- Row END -->
    </div>
@endsection
