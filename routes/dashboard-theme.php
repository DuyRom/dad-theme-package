<?php

use Duynguyen\Dadtheme\Http\Controllers\DashboardThemeController;
use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('register', [DashboardThemeController::class, 'create'])->name('register');
        Route::post('register', [DashboardThemeController::class, 'store'])->name('register.attempt');
    });
});