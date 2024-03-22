<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
//use App\Http\Middleware\CheckSessionMiddleware;

Route::get('/', function () {
    return view('welcome');
});
/*Route:: get('admin', [AdminController::class, 'index'])->middleware(['web','check.session']);//->middleware(CheckRole::class . ':admin');
Route:: get('admin/getall', [AdminController::class, 'actionGetAll']);
Route:: get('login', [LoginController::class, 'index']);

Route::prefix('teacher')->middleware(['web','check.session'])->group(function () {
    Route::get('/', [TeacherController::class, 'index']);
    Route::get('/course', [TeacherController::class, 'viewCouse'])->name('teacher.course');
    Route::get('/course/enrolled/{idCourse}', [TeacherController::class, 'viewEnrolled'])->name('teacher.course.enrolled');
});*/
Route::get('admin', [AdminController::class, 'index'])->name('admin')->middleware(['web', 'check.session']);
Route::get('admin/getall', [AdminController::class, 'actionGetAll'])->middleware(['web', 'check.session']);
route::get('admin/viewperson', [AdminController::class,'viewPerson']);
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::match(['get', 'post'], 'login/login', [LoginController::class, 'actionLogin']);

Route::prefix('teacher')->middleware(['web', 'check.session'])->group(function () {
    Route::get('/', [TeacherController::class, 'index'])->name('teacher');
    Route::get('/course', [TeacherController::class, 'viewCouse'])->name('teacher.course');
    Route::get('/course/enrolled/{idCourse}', [TeacherController::class, 'viewEnrolled'])->name('teacher.course.enrolled');
});

route :: get('student');

Route:: get('user/getall', [UserController::class, 'actionGetAll']);
Route::match(['get', 'post'],'login/login',  [LoginController::class, 'actionLogin']);


