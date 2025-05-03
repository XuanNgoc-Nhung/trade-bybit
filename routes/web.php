<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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
