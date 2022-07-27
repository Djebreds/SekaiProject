@extends('instructor.layouts.main')
@section('profile')
    <div class="border rounded-3">
        <div class="row">
            <div class="col-12">
                <!-- Card START -->
                <div class="card bg-transparent">
                    <!-- Card header START -->
                    <div class="card-header bg-transparent border-bottom">
                        <h3 class="card-header-title">Settings</h3>
                    </div>
                    <!-- Card header END -->

                    <!-- Card body START -->
                    <div class="card-body">

                        <!-- Profile START -->
                        <h5 class="mb-4">Profile Settings</h5>
                        <div class="form-check form-switch form-check-md">
                            <input class="form-check-input" type="checkbox" role="switch" id="profilePublic" checked="">
                            <label class="form-check-label" for="profilePublic">Your profile's public visibility</label>
                        </div>
                        <!-- Profile START -->

                        <hr><!-- Divider -->

                        <!-- Notification START -->
                        <h5 class="card-header-title">Notifications Settings</h5>
                        <p class="mb-2 mt-3">Choose type of notifications you want to receive</p>
                        <div class="form-check form-switch form-check-md mb-3">
                            <input class="form-check-input" type="checkbox" id="checkPrivacy1" checked="">
                            <label class="form-check-label" for="checkPrivacy1">Notify me via email when logging in</label>
                        </div>
                        <div class="form-check form-switch form-check-md mb-3">
                            <input class="form-check-input" type="checkbox" id="checkPrivacy2">
                            <label class="form-check-label" for="checkPrivacy2">Send SMS confirmation for all online
                                payments</label>
                        </div>
                        <div class="form-check form-switch form-check-md mb-3">
                            <input class="form-check-input" type="checkbox" id="checkPrivacy3" checked="">
                            <label class="form-check-label" for="checkPrivacy3">Check which device(s) access your
                                account</label>
                        </div>
                        <div class="form-check form-switch form-check-md mb-3">
                            <input class="form-check-input" type="checkbox" id="checkPrivacy4">
                            <label class="form-check-label" for="checkPrivacy4">Show your profile publicly</label>
                        </div>
                        <!-- Notification START -->

                        <!-- Buttons -->
                        <div class="d-sm-flex justify-content-end">
                            <button type="button" class="btn btn-sm btn-primary me-2 mb-0">Save changes</button>
                            <a href="#" class="btn btn-sm btn-outline-secondary mb-0">Cancel</a>
                        </div>

                    </div>
                    <!-- Card body END -->
                </div>
                <!-- Card END -->
            </div>
            <!-- Privacy END -->
        </div>
    </div>
@endsection
