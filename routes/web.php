<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PersonController;
//use App\Http\Middleware\CheckSessionMiddleware;

Route::get('/', function () {
    return view('template.home');
});
Route::prefix('admin')->middleware(['web', 'check.session'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/getall', [AdminController::class, 'actionGetAll']);
    Route::get('/course',[AdminController::class,'courseGetAll']);
    Route::get('/enrolled',function(){return view('admin.enrolled');});
    Route::match(['get','post'],'/getall/insert', [AdminController::class, 'actionInsert']);
    Route::get('/person/delete/{idPerson}', [AdminController::class,'personDelete']);
    Route::match(['get','post'],'/person/update/{idPerson}', [PersonController::class,'personUpdate']);
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

route :: get('home/student',function(){return view("student.student");});
Route::match(['get','post'],"home/student/view",[StudentController::class,"actionHistory"]);
Route::match(['get','post'],"home/student/history",function(){return view("student.history");});
Route::match(['get','post'],"home/student/teacher",function(){return view("student.teacher");});
Route::match(['get','post'],"home/student/rules",function(){return view("student.rules");});
Route::match(['get','post'],"home/student/material",function(){return view("student.material");});
Route:: get('user/getall', [UserController::class, 'actionGetAll']);
Route::match(['get', 'post'],'login/login',  [LoginController::class, 'actionLogin']);


