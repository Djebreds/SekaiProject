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

<<<<<<< HEAD
Route::get('student/editProfile', function () {
    return view('student.profile');
})->name('student.profile');
=======
// Login and register with google
Route::get('/oauth/google', [OauthController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/oauth/google/callback',[OauthController::class, 'googleCallBack'])->name('auth.google.callback');

Route::group(['namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
   Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::group(['namespace' => 'Student', 'middleware' => ['auth', 'student']], function () {
    Route::get('student/dashboard', [StudentController::class, 'index'])->name('student.dashboard');
});

Route::group(['namespace' => 'Instructor', 'middleware' => ['auth', 'instructor']], function () {
    Route::get('instructor/dashboard', [AdminController::class, 'index'])->name('instructor.dashboard');
});
>>>>>>> b38b3f30bd48a23f28538690c0dc6bf02b1de160
