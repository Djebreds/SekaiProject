<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Auth\OauthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Instructor\DashboardInstructorController;
use App\Http\Controllers\Admin\InstructorController;
use App\Http\Controllers\Student\DashboardStudentController;
use App\Http\Controllers\Admin\StudentController;
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
    if (Auth::check() && Auth::user()->role_id == 1) {
        return redirect('admin/dashboard');
    } else if (Auth::check() && Auth::user()->role_id == 2) {
        return redirect('student/dashboard');
    } else if (Auth::check() && Auth::user()->role_id == 3) {
        return redirect('instructor/dashboard');
    } else {
        return redirect('login');
    }
});

Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('student/editProfile', function () {
    return view('student.profile');
})->name('student.profile');
// Login and register with google
Route::get('/oauth/google', [OauthController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/oauth/google/callback', [OauthController::class, 'googleCallBack'])->name('auth.google.callback');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('admin/users/admins', AdminController::class, ['only' => ['index', 'show']]);
    Route::resource('admin/users/students', StudentController::class);
    Route::resource('admin/users/instructors', InstructorController::class);
});


Route::group(['namespace' => 'Student', 'middleware' => ['auth', 'student']], function () {
    Route::get('student/dashboard', [DashboardStudentController::class, 'index'])->name('student.dashboard');
});

Route::group(['namespace' => 'Instructor', 'middleware' => ['auth', 'instructor']], function () {
    Route::get('instructor/dashboard', [DashboardInstructorController::class, 'index'])->name('instructor.dashboard');
});
