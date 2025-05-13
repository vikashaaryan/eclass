<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::controller(PublicController::class)->group(function () {
    Route::get("/", "home")->name("public.home");
    Route::match(['post','get'], "/apply", "apply")->name("public.apply");
    Route::match(['post', 'get'], "/student/login", "login")->name("login");
    Route::get("/logout", "studentlogout")->name("public.logout");
});


Route::middleware("auth")->group(function(){
    Route::controller(StudentController::class)->group(function () {
        Route::prefix("/student")->group(function () {
            Route::get("/", "dashboard")->name("student.dashboard");
        });
    });

    Route::controller(AdminController::class)->group(function(){
        Route::prefix("/admin")->group(function(){
            Route::get("/", "dashboard")->name("admin.dashboard");
            Route::get("/Admission", "manageAdmission")->name("admin.manageAdmission");
            Route::get("/Admission/{id}/approve", 'studentAprove')->name("admin.studentAprove");
            Route::get("/student", "manageStudent")->name("admin.manageStudent");
            Route::resource("categories", CategoryController::class)->except("show");
            Route::resource("course", CourseController::class);
        });
    });
});
