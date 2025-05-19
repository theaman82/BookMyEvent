<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/register', 'register')->name('register');
    Route::match(['get', 'post'], '/register', 'registerAction')->name('registerAction');
    Route::match(['get', 'post'], '/login', 'login')->name('login');
});

Route::controller(AdminController::class)->group(function () {
    Route::prefix('admin/')->group(function () {
        Route::get('', 'dashboard')->name('admin.dashboard');
        Route::get('manage-users', 'manageUsers')->name('admin.manage-users');
        Route::delete('manage-users/{id}', 'deleteUser')->name('admin.deleteUser');
    });
});