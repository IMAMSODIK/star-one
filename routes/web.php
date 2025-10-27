<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentVerificationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginCheck']);

    Route::post('/register/send-otp', [AuthController::class, 'sendOtp']);
    Route::post('/register/verify-otp', [AuthController::class, 'verifyOtp']);
    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotForm'])->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');

    Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('password.update');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/students', [StudentController::class, 'index']);
    Route::post('/students/store', [StudentController::class, 'store']);
    Route::get('/students/detail', [StudentController::class, 'detail']);
    Route::post('/students/update', [StudentController::class, 'update']);
    Route::post('/students/reset-password', [StudentController::class, 'resetPasssword']);
    Route::post('/students/delete', [StudentController::class, 'delete']);
    Route::post('/students/activate', [StudentController::class, 'activate']);
    Route::get('/students/search', [StudentController::class, 'search']);
    Route::get('/students/load-more', [StudentController::class, 'loadMore']);

    Route::get('/students-verification', [StudentVerificationController::class, 'index']);
    Route::get('/students-verification/detail', [StudentVerificationController::class, 'detail']);
    Route::post('/students-verification/delete', [StudentVerificationController::class, 'delete']);
    Route::post('/students-verification/activate', [StudentVerificationController::class, 'activate']);
    Route::get('/students-verification/search', [StudentVerificationController::class, 'search']);
    Route::get('/students-verification/load-more', [StudentVerificationController::class, 'loadMore']);

    Route::get('/profile', [ProfileController::class, 'index']);
});