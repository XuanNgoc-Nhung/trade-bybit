<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminUserController;


Route::get('/', function () {
    return view('users.trang-chu');
})->name('dashboard');
Route::get('/dang-ky', function () {
    return view('users.dang-ky');
});
Route::get('/register', function () {
    return view('users.dang-ky');
})->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register.post');
Route::get('/login', function () {
    return view('users.dang-nhap');
})->name('login');
Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', function () {
        return view('users.dashboard.trang-chu');
    });
    Route::get('/dang-nhap', function () {
        return view('admin.dang-nhap');
    });
});
Route::group(['prefix' => 'trade'], function () {
    Route::get('/', function () {
        return view('users.trade.trang-chu');
    });
});
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', function () {
            return view('admin.users');
        })->name('admin.users');
        Route::post('/list', [AdminUserController::class, 'list'])->name('admin.users.list');
    });
});

// Authentication Routes
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Password Reset Routes
Route::get('/forgot-password', [UserController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [UserController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [UserController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/reset-password', [UserController::class, 'resetPassword'])->name('password.update');