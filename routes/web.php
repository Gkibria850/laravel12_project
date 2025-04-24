<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\ClassesController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('registration', [AuthController::class, 'registration']);
Route::post('registration_post', [AuthController::class, 'registration_post']);
Route::get('login', [AuthController::class, 'login']);
Route::post('login_post', [AuthController::class, 'login_post']);
Route::get('forgetpassword', [AuthController::class, 'forgetpassword']);
Route::post('forgot_post', [AuthController::class, 'forgot_post']);

Route::group(['middleware' => 'superadmin'], function (){
    Route::get('superadmin/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('superadmin/user/list', [SuperAdminController::class, 'user_list']);
    Route::get('superadmin/user/delete/{id}', [SuperAdminController::class, 'user_delete']);
//students
Route::get('superadmin/student/list', [StudentController::class, 'student_list']);
Route::get('superadmin/student/add', [StudentController::class, 'add_student']);
Route::post('superadmin/student/add', [StudentController::class, 'store_student']);
Route::get('superadmin/student/edit/{id}', [StudentController::class, 'edit_student']);
Route::post('superadmin/student/edit/{id}', [StudentController::class, 'editupdate_student']);
Route::get('superadmin/student/delete/{id}', [StudentController::class, 'student_destroy']);


//Teacher
Route::get('superadmin/teacher/list', [TeacherController::class, 'teacher_list']);
Route::get('superadmin/teacher/add', [TeacherController::class, 'add_teacher']);
Route::post('superadmin/teacher/add', [TeacherController::class, 'store_teacher']);
Route::get('superadmin/teacher/edit/{id}', [TeacherController::class, 'edit_teacher']);
Route::post('superadmin/teacher/edit/{id}', [TeacherController::class, 'editupdate_teacher']);
Route::get('superadmin/teacher/delete/{id}', [TeacherController::class, 'teacher_destroy']);

//Subject
Route::get('superadmin/subject/list', [SubjectsController::class, 'subject_list']);
Route::get('superadmin/subject/add', [SubjectsController::class, 'add_subject']);
Route::post('superadmin/subject/add', [SubjectsController::class, 'store_subject']);
Route::get('superadmin/subject/edit/{id}', [SubjectsController::class, 'edit_subject']);
Route::post('superadmin/subject/edit/{id}', [SubjectsController::class, 'editupdate_subject']);
Route::get('superadmin/subject/delete/{id}', [SubjectsController::class, 'subject_destroy']);

//classes
Route::get('superadmin/classes/list', [ClassesController::class, 'classes_list']);
Route::get('superadmin/classes/add', [ClassesController::class, 'add_classes']);
Route::post('superadmin/classes/add', [ClassesController::class, 'store_classes']);
Route::get('superadmin/classes/edit/{id}', [ClassesController::class, 'edit_classes']);
Route::post('superadmin/classes/edit/{id}', [ClassesController::class, 'editupdate_classes']);


});
Route::group(['middleware' => 'admin'], function(){
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
});
Route::group(['middleware' => 'user'], function(){
    Route::get('user/dashboard', [DashboardController::class, 'dashboard']);
});
Route::get('logout', [AuthController::class, 'logout']);