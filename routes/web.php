<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\SoftSkillController;
use App\Http\Controllers\Admin\TechnicalSkillController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UserController;
// Admin registration and login routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register'])->name('register');
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login');
});

// Admin routes with auth middleware
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [IndexController::class, 'index'])->name('home');
    Route::resource('portfolios', PortfolioController::class);
    Route::resource('education', EducationController::class);
    Route::resource('soft_skills', SoftSkillController::class);
    Route::resource('technical_skills', TechnicalSkillController::class);
    Route::resource('experiences', ExperienceController::class);
    Route::get('profile', [AdminController::class, 'showProfile'])->name('profile');
    Route::put('profile', [AdminController::class, 'updateProfile'])->name('profile.update');

});


// user routes
Route::get('/', [UserController::class, 'index'])->name('home');


