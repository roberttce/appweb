<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
//use App\Http\Middleware\CheckSessionMiddleware;

Route::get('/', function () {
    return view('template.home');
});
Route::prefix('admin')->middleware(['web', 'check.session'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/getall', [AdminController::class, 'actionGetAll']);
    Route::match(['get','post'],'/getall/insert', [AdminController::class, 'actionInsert']);
    Route::get('/person/delete/{idPerson}', [AdminController::class,'actionDelete']);
    Route::get('/insert', [AdminController::class,'actionInsert']);
});


Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('logout', [LoginController::class,'logout'])->name('logout');
Route::match(['get', 'post'], 'login/login', [LoginController::class, 'actionLogin']);

Route::prefix('teacher')->middleware(['web', 'check.session'])->group(function () {
    Route::get('/', [TeacherController::class, 'index'])->name('teacher');
    Route::get('/course', [TeacherController::class, 'viewCouse'])->name('teacher.course');
    Route::get('/course/enrolled/{idCourse}', [TeacherController::class, 'viewEnrolled'])->name('teacher.course.enrolled');
});

route :: get('student',function(){return view("student.student");});
Route:: get('user/getall', [UserController::class, 'actionGetAll']);
Route::match(['get', 'post'],'login/login',  [LoginController::class, 'actionLogin']);


