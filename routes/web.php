<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'app.index')->name('home');
Route::view('/store', 'app.store')->name('store');
Route::view('/contact', 'app.contact')->name('contact');

Route::controller(ProjectController::class)
    ->prefix('projects')
    ->name('projects.')
    ->group(function() {
        Route::get('/', 'index')->name('index');
        Route::get('/{project}', 'show')->name('show');
});

// Register
Route::controller(RegisterController::class)
    ->prefix('register')
    ->name('register.')
    ->group(function() {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'handle')->name('handle');
});

// Login
Route::controller(LoginController::class)
    ->middleware('guest')
    ->prefix('login')
    ->name('login.')
    ->group(function() {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'handle')->name('handle');
});

// Dashboard
Route::middleware('auth')->group(function() {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    
    Route::prefix('dashboard')
        ->name('dashboard.')
        ->group(function() {
        Route::get('/', [DashboardController::class, 'index'])->name('index');

        Route::view('/projects', 'admin.projects.index')->name('projects.index');
    });
});