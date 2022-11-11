<?php


use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MockTestController;
use App\Http\Controllers\ModuleController;
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

        Route::resource('courses', CourseController::class)->except('delete');
        Route::post('courses/delete/{course}', [CourseController::class, 'destroy'])->name('courses.delete');
        Route::get('courses/assign/{course}', [CourseController::class, 'assign'])->name('courses.assign');
        Route::post('courses/assign/{course}/store', [CourseController::class, 'assignStore'])->name('courses.assign.store');
        Route::resource('categories', CategoryController::class)->except('delete');
        Route::post('categories/delete/{category}', [CourseController::class, 'destroy'])->name('categories.delete');
        Route::resource('universities', UniversityController::class)->except('delete');
        Route::post('universities/delete/{university}', [UniversityController::class, 'destroy'])->name('universities.delete');
        Route::get('demotest', [QuestionController::class, 'testExamDemo']);
        Route::post('store_answers', [QuestionController::class, 'testExamStore']);
        Route::resource('questions', QuestionController::class);
        Route::post('questions/del/{question}', [QuestionController::class, 'delete']);
        Route::get('students', [HomeController::class, 'students'])->name('students');
        Route::get('teachers', [HomeController::class, 'teachers'])->name('teachers');
//        Route::get('users', [HomeController::class, 'users'])->name('users');
        Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
        Route::get('reports', [HomeController::class, 'reports'])->name('reports');
//        Students Routes ###############
        Route::group( ['prefix' => 'students', 'middleware' => 'can:Admin', 'as' => 'students.'], function() {
            Route::get('create', [StudentController::class, 'create'])->name('create');
            Route::get('edit/{student}', [StudentController::class, 'edit'])->name('edit');
            Route::post('store', [StudentController::class, 'store'])->name('store');
            Route::post('update/{student}', [StudentController::class, 'update'])->name('update');
            Route::post('delete/{student}', [StudentController::class, 'destroy'])->name('destroy');
        });
//        Teachers Routes ###############
        Route::group( ['prefix' => 'teachers', 'middleware' => 'can:Admin', 'as' => 'teachers.'], function() {
            Route::get('create', [TeacherController::class, 'create'])->name('create');
            Route::get('edit/{teacher}', [TeacherController::class, 'edit'])->name('edit');
            Route::post('store', [TeacherController::class, 'store'])->name('store');
            Route::post('update/{teacher}', [TeacherController::class, 'update'])->name('update');
            Route::post('delete/{teacher}', [TeacherController::class, 'destroy'])->name('destroy');
        });
        Route::group( ['prefix' => 'users', 'as' => 'user.'], function() {
            Route::get('/', [UserController::class, 'index'])->name('users');
            Route::get('create', [UserController::class, 'create'])->name('create');
            Route::post('store', [UserController::class, 'store'])->name('store');
            Route::get('edit/{id}', [UserController::class, 'edit'])->name('edit');
            Route::post('update/{id}', [UserController::class, 'update'])->name('update');
            Route::post('delete/{id}', [UserController::class, 'destroy'])->name('delete');
        });
    });
    Route::group( ['prefix' => 'student', 'middleware' => 'can:Student', 'as' => 'student.'], function() {
        Route::get('universities', [StudentController::class,'universities'])->name('universities');
        Route::get('courses', [StudentController::class,'courses'])->name('courses');
        Route::get('courses/{course}/modules', [StudentController::class,'modules'])->name('courses.modules');
        Route::get('courses/{course}/modules/{module}', [StudentController::class,'moduleView'])->name('courses.modules.view');
        Route::get('admissions', [AdmissionController::class,'index'])->name('admissions');
        Route::get('admission/apply/{student}/{university}', [AdmissionController::class,'create'])->name('admission.apply');
        Route::post('admission/apply/{student}/{university}/store', [AdmissionController::class,'store'])->name('admission.apply.store');
        Route::get('admission/application/{admission}/success', [AdmissionController::class,'success'])->name('admission.apply.success');
        Route::get('choose_test', [QuestionController::class, 'choose'])->name('choose.test');
        Route::get('choose_test/redirect', [QuestionController::class, 'redirect'])->name('choose.test.redirect');
        Route::get('MockTest/{category}', [QuestionController::class, 'testExamDemo'])->name('takeTest');
        Route::get('MockTest', [QuestionController::class, 'testExamDemo'])->name('review.test');
        Route::post('mock_test/store_answers', [QuestionController::class, 'testExamStore'])->name('testExamStore');
        Route::get('mock_test/review', [MockTestController::class, 'review'])->name('mocktest.review');
        Route::get('mock_test/{mocktest}/review', [MockTestController::class, 'reviewDetails'])->name('mocktest.review.details');

    });
    Route::group( ['prefix' => 'teacher', 'middleware' => 'can:Teacher', 'as' => 'teacher.'], function() {
        Route::get('courses', [TeacherController::class,'courses'])->name('courses');
        Route::get('courses/{course}/modules', [ModuleController::class, 'index'])->name('courses.modules.index');
        Route::post('upload', [ModuleController::class, 'upload'])->name('courses.modules.upload');
        Route::get('courses/{course}/modules/create', [ModuleController::class, 'create'])->name('courses.modules.create');
        Route::post('courses/{course}/modules/store', [ModuleController::class, 'store'])->name('courses.modules.store');
        Route::post('modules/delete/{module}', [ModuleController::class, 'destroy'])->name('modules.delete');
    });
});
