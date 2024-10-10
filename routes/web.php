<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResultController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['guest'])->group(function(){
    Route::controller(AuthController::class)->group(function(){
        Route::get('/login','login')->name('login');
        Route::post('/login','dologin')->name('dologin');
        Route::get('/register','register')->name('register');
        Route::post('/register','doregister')->name('doregister');
    });
});

Route::middleware(['auth'])->group(function(){
    Route::controller(DashboardController::class)->group(function(){
        Route::get('/home','dashboard')->name('dashboard');
    });
    Route::controller(AuthController::class)->group(function(){
        Route::get('/logout','logout')->name('logout');
    });
    Route::controller(CoursesController::class)->group(function(){
        Route::get('/level','survey')->name('courses.level');
        Route::post('/courses','courses')->name('courses.check');
    });
    Route::controller(ResultController::class)->group(function(){
        Route::get('/upload_result','index')->name('request.result');
        Route::post('/save_result','upload')->name('upload.result');
        Route::get('/view_result','result')->name('view.result');
    });
    Route::controller(ProfileController::class)->group(function(){
        Route::get('/profile','index')->name('profile');
        Route::get('/edit_profile','edit_profile')->name('edit.profile');
        Route::get('/change_password','change_password')->name('change.password');
        Route::post('/update_password','update_password')->name('update.password');
        Route::post('/update_profile','update')->name('update.profile');
    });

});
