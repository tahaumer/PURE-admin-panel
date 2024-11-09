<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'index'])->name('login');

Route::prefix('admin')->group(function () {
    Route::post('/login', [AuthController::class, 'admin_login'])->name('admin.login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    });
});
