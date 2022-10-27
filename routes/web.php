<?php


use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\SiteSettingsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Email;


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


Route::get('/', [HomeController::class, 'index'])->name('land');
Route::get('/student_registration', [StudentController::class, 'student_register'])->name('student.register');
Route::post('/student_registration_store', [StudentController::class, 'student_register_store'])->name('student.register.store');
Route::get('/teacher_registration', [TeacherController::class, 'teacher_register'])->name('teacher.register');
Route::post('/teacher_registration_store', [TeacherController::class, 'teacher_register_store'])->name('teacher.register.store');





Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/dashboard', [FrontendController::class, 'return_dashboard'])->name('return.dashboard');
    Route::get('user/profile',[FrontendController::class, 'myInfo'])->name('user.profile');
    Route::post('user/update/{id}', [UserController::class,'update'])->name('user.update');
    Route::post('user/password/update/{id}', [UserController::class,'updatePassword'])->name('user.update.password');

    Route::get('student/dashboard', [HomeController::class, 'index'])->name('student.dashboard');
    Route::get('teacher/dashboard', [HomeController::class, 'index'])->name('teacher.dashboard');
    Route::group( ['prefix' => 'admin', 'middleware' => 'can:Admin'], function() {

        Route::get('dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
        Route::get('reports', [HomeController::class, 'reports'])->name('admin.reports');

    });
});
