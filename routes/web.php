<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\ClassTypeController;
use App\Http\Controllers\Admin\CourseCategoryController;
use App\Http\Controllers\Admin\CourseLevelController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\MasterClassController;
use App\Http\Controllers\Admin\PriceTypeController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Auth\OauthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Instructor\DashboardInstructorController;
use App\Http\Controllers\Admin\InstructorController;
use App\Http\Controllers\Student\DashboardStudentController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Student\MyCourseController;
use App\Http\Controllers\Student\SettingController;
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

Route::get('/dashboard', [DashboardController::class, 'index']);

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/', [HomeController::class, 'index'])->name('home');


// Login and register with google
Route::get('/oauth/google', [OauthController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/oauth/google/callback', [OauthController::class, 'googleCallBack'])->name('auth.google.callback');

// Route For Admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('admin/profile', AdminProfileController::class, ['only' => ['show', 'post', 'put', 'delete']]);
    Route::resource('admin/users/admins', AdminController::class, ['only' => ['index', 'show']]);
    Route::resource('admin/users/students', StudentController::class);
    Route::resource('admin/users/instructors', InstructorController::class);
    Route::resource('admin/roles', RoleController::class, ['only' => ['index', 'show']]);
    Route::resource('admin/category/course-categories', CourseCategoryController::class);
    Route::resource('admin/category/price-types', PriceTypeController::class);
    Route::resource('admin/category/class-types', ClassTypeController::class);
    Route::resource('admin/category/course-levels', CourseLevelController::class);
    Route::resource('admin/classes', ClassController::class);
    Route::resource('admin/masterclasses', MasterClassController::class);
    Route::resource('admin/certificates', CertificateController::class);
    Route::resource('admin/reviews', ReviewController::class);
});

// Routes For Student
Route::middleware(['auth', 'student'])->group(function() {
    Route::get('student/setting', [SettingController::class, 'index'])->middleware('verified')->name('student.setting');
    Route::get('student/course', [MyCoursecontroller::class, 'index'])->middleware('verified')->name('student.mycourse');
    Route::resource('student', DashboardStudentController::class)->middleware('verified');
});

// Routes For Instructor
Route::middleware(['auth' => 'instructor'])->group(function() {
    Route::resource('instructor', DashboardInstructorController::class)->parameters([
        'instructor' => 'users:username'
    ])->middleware('verified');
});
