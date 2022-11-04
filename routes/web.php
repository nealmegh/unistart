<?php


use App\Http\Controllers\CourseController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SiteSettingsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UniversityController;
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
    Route::group( ['prefix' => 'admin', 'middleware' => 'can:Admin', 'as' => 'admin.'], function() {

        Route::resource('courses', CourseController::class);
        Route::resource('universities', UniversityController::class);
        Route::get('demotest', [QuestionController::class, 'testExamDemo']);
        Route::post('store_answers', [QuestionController::class, 'testExamStore']);
        Route::resource('questions', QuestionController::class);
        Route::post('questions/del/{question}', [QuestionController::class, 'delete']);
        Route::get('students', [HomeController::class, 'students'])->name('students');
        Route::get('teachers', [HomeController::class, 'teachers'])->name('teachers');
        Route::get('users', [HomeController::class, 'users'])->name('users');
        Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
        Route::get('reports', [HomeController::class, 'reports'])->name('reports');
//        Students Routes ###############
        Route::group( ['prefix' => 'students', 'middleware' => 'can:Admin', 'as' => 'students.'], function() {
            Route::get('create', [StudentController::class, 'create'])->name('create');
            Route::get('edit/{student}', [StudentController::class, 'edit'])->name('edit');
            Route::post('store', [StudentController::class, 'store'])->name('store');
            Route::post('update/{student}', [StudentController::class, 'update'])->name('update');
            Route::get('delete/{student}', [StudentController::class, 'destroy'])->name('destroy');
        });
//        Teachers Routes ###############
        Route::group( ['prefix' => 'teachers', 'middleware' => 'can:Admin', 'as' => 'teachers.'], function() {
            Route::get('create', [TeacherController::class, 'create'])->name('create');
            Route::get('edit/{teacher}', [TeacherController::class, 'edit'])->name('edit');
            Route::post('store', [TeacherController::class, 'store'])->name('store');
            Route::post('update/{teacher}', [TeacherController::class, 'update'])->name('update');
            Route::get('delete/{teacher}', [TeacherController::class, 'destroy'])->name('destroy');
        });
    });
});
