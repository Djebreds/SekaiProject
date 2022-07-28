<?php

use App\Http\Controllers\AboutController;
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
use App\Http\Controllers\BecomeInstructorController;
use App\Http\Controllers\CheckCertificateController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Instructor\DashboardInstructorController;
use App\Http\Controllers\Admin\InstructorController;
use App\Http\Controllers\Instructor\MakeCourseController;
use App\Http\Controllers\Instructor\OrderCourseController;
use App\Http\Controllers\Instructor\ReviewCourseController;
use App\Http\Controllers\Instructor\StudentCourseController;
use App\Http\Controllers\InstructorListController;
use App\Http\Controllers\Student\DashboardStudentController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Student\MyCourseController;
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

Route::get('courses', [CourseController::class, 'index'])->name('courses');
Route::get('become/instructor', [BecomeInstructorController::class, 'index'])->name('become.instructor');
Route::get('instructors', [InstructorListController::class, 'index'])->name('list.instructor');
Route::get('about/basicschool', [AboutController::class, 'basicschool'])->name('about.basicschool');
Route::get('about', [AboutController::class, 'about'])->name('about');
Route::get('contact', [AboutController::class, 'contact'])->name('contact');
Route::get('help', [HelpController::class, 'index'])->name('help');
Route::get('certificate/check', [CheckCertificateController::class, 'index'])->name('certificate.check');

//
//Route::get('courses/categories', function () {
//    return view('navbar.courses.categories');
//})->name('courses.categories');
//
//Route::get('courses/courses', function () {
//    return view('navbar.courses.courses');
//})->name('courses.courses');
//
//Route::get('instruktor/become', function () {
//    return view('navbar.instruktor.become');
//})->name('instruktor.become');
//
//Route::get('instruktor/list', function () {
//    return view('navbar.instruktor.list');
//})->name('instruktor.list');
//
//Route::get('aboutBasic', function () {
//    return view('navbar.about.aboutBasic');
//})->name('aboutBasic');
//
//Route::get('aboutUs', function () {
//    return view('navbar.about.aboutUs');
//})->name('aboutUs');
//
//Route::get('contactUs', function () {
//    return view('navbar.about.contactUs');
//})->name('contactUs');
//
//Route::get('other/help', function () {
//    return view('navbar.other.help');
//})->name('other.help');
//


// Login and register with google
Route::get('/oauth/google', [OauthController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/oauth/google/callback', [OauthController::class, 'googleCallBack'])->name('auth.google.callback');

// Route For Admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('dashboard', [DashboardAdminController::class, 'index'])->name('dashboard');
        Route::resource('profile', AdminProfileController::class, ['only' => ['show', 'post', 'put', 'delete']]);
        Route::resource('users/admins', AdminController::class, ['only' => ['index', 'show']]);
        Route::resource('users/students', StudentController::class)->parameters([
            'students' => 'username'
        ]);
        Route::resource('users/instructors', InstructorController::class);
        Route::resource('roles', RoleController::class, ['only' => ['index', 'show']]);
        Route::resource('category/course-categories', CourseCategoryController::class);
        Route::resource('category/price-types', PriceTypeController::class);
        Route::resource('category/class-types', ClassTypeController::class);
        Route::resource('category/course-levels', CourseLevelController::class);
        Route::resource('classes', ClassController::class);
        Route::resource('masterclasses', MasterClassController::class);
        Route::resource('certificates', CertificateController::class);
        Route::resource('reviews', ReviewController::class);
    });
});


// Routes For Student
Route::middleware(['auth', 'student'])->group(function () {
    Route::get('student/setting', [DashboardStudentController::class, 'setting'])->middleware('verified')->name('student.setting');
    Route::get('student/my-course', [MyCoursecontroller::class, 'index'])->middleware('verified')->name('student.mycourse');
    Route::get('student/delete/account', [DashboardStudentController::class, 'deleteAccount'])->middleware('verified')->name('student.delete');
    Route::resource('student', DashboardStudentController::class)->middleware('verified');
});

// Routes For Instructor
Route::middleware(['auth', 'instructor'])->group(function () {
    Route::get('instructor/setting', [DashboardInstructorController::class, 'setting'])->middleware('verified')->name('instructor.setting');
    Route::get('instructor/create/course', [MakeCourseController::class, 'index'])->middleware('verified')->name('instructor.makecourse');
    Route::get('instructor/reviews', [ReviewCourseController::class, 'index'])->middleware('verified')->name('instructor.review');
    Route::get('instructor/orders', [OrderCourseController::class, 'index'])->middleware('verified')->name('instructor.order');
    Route::get('instructor/student', [StudentCourseController::class, 'index'])->middleware('verified')->name('instructor.student');
    Route::get('instructor/delete/account', [DashboardInstructorController::class, 'deleteAccount'])->middleware('verified')->name('instructor.delete');
    Route::resource('instructor', DashboardInstructorController::class)->middleware('verified');
});

//// Routes For Instructor
//Route::middleware('auth')->group(function() {
//    Route::get('/{username}', [ProfileController::class, 'index']);
//});
