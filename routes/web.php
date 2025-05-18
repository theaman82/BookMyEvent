<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/register', 'register')->name('register');
    Route::match(['get', 'post'], '/register', 'registerAction')->name('registerAction');
});

Route::controller(AdminController::class)->group(function () {
    Route::prefix('admin/')->group(function () {
        Route::get('', 'dashboard')->name('admin.dashboard');
    });
});