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
Route::get('/', [HomeController::class, 'index'])->name('home');

// Login and register with google
Route::get('/oauth/google', [OauthController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/oauth/google/callback', [OauthController::class, 'googleCallBack'])->name('auth.google.callback');

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


Route::group(['namespace' => 'Student', 'middleware' => ['auth', 'student']], function () {
});
Route::middleware(['auth', 'student'])->group(function () {
    Route::resource('profile', DashboardStudentController::class)->parameters([
        'student' => 'users:username'
    ]);
});

Route::middleware(['auth' => 'instructor'])->group(function () {
    Route::resource('instructor', DashboardInstructorController::class);
});


Route::get('courses/categories', function () {
    return view('navbar.courses.categories');
})->name('courses.categories');

Route::get('courses/gridclassic', function () {
    return view('navbar.courses.gridclassic');
})->name('courses.gridclassic');

Route::get('courses/gridminimal', function () {
    return view('navbar.courses.gridminimal');
})->name('courses.gridminimal');

Route::get('courses/listclassic', function () {
    return view('navbar.courses.listclassic');
})->name('courses.listclassic');

Route::get('courses/listminimal', function () {
    return view('navbar.courses.listminimal');
})->name('courses.listminimal');

Route::get('courses/detailclassic', function () {
    return view('navbar.courses.detailclassic');
})->name('courses.detailclassic');

Route::get('courses/detailminimal', function () {
    return view('navbar.courses.detailminimal');
})->name('courses.detailminimal');

Route::get('courses/detailadvance', function () {
    return view('navbar.courses.detailadvance');
})->name('courses.detailadvance');

Route::get('courses/video', function () {
    return view('navbar.courses.video');
})->name('courses.video');

Route::get('instruktor/become', function () {
    return view('navbar.instruktor.become');
})->name('instruktor.become');

Route::get('instruktor/list', function () {
    return view('navbar.instruktor.list');
})->name('instruktor.list');

Route::get('aboutBasic', function () {
    return view('navbar.about.aboutBasic');
})->name('aboutBasic');

Route::get('aboutUs', function () {
    return view('navbar.about.aboutUs');
})->name('aboutUs');

Route::get('contactUs', function () {
    return view('navbar.about.contactUs');
})->name('contactUs');

Route::get('other/help', function () {
    return view('navbar.other.help');
})->name('other.help');
