<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\OauthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Instructor\InstructorController;
use App\Http\Controllers\Student\StudentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Login and register with google
Route::get('/oauth/google', [OauthController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/oauth/google/callback',[OauthController::class, 'googleCallBack'])->name('auth.google.callback');

Route::middleware(['auth' => 'role:admin'])->group(function() {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['auth' => 'role:instructor'])->group(function() {
    Route::get('instructor/dashboard', [InstructorController::class, 'index'])->name('instructor.dashboard');
});

Route::middleware(['auth' => 'role:student'])->group(function() {
    Route::get('account/dashboard', [StudentController::class, 'index'])->name('student.dashboard');
});
