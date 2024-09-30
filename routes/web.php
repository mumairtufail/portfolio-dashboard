<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserSide\IndexController;
use App\Http\Controllers\PortfolioController;

// Front-end route
Route::get('/', [IndexController::class, 'index'])->name('home');

// Admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('portfolios', PortfolioController::class);
});