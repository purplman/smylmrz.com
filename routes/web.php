<?php

use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\RequestController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\RequestController as AdminRequestController;

Route::view('/', 'app.index')->name('home');
Route::view('/store', 'app.store')->name('store');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::controller(RequestController::class)->group(function(){
    Route::get('/contact', 'index')->name('contact');
    Route::post('/contact', 'handle')->name('request');
});

Route::controller(ProjectController::class)->prefix('projects')->name('projects.')->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/{project}', 'show')->name('show');
});

Route::controller(PostController::class)->prefix('posts')->name('posts.')->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/{post}', 'show')->name('show');
});

// Register
Route::controller(RegisterController::class)->prefix('register')->name('register.')->group(function() {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'handle')->name('handle');
});

// Login
Route::controller(LoginController::class)->middleware('guest')->prefix('login')->name('login.')->group(function() {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'handle')->name('handle');
});

// Dashboard
Route::middleware('auth')->group(function() {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    
    Route::prefix('dashboard')->name('dashboard.')->group(function() {
        Route::get('/', [DashboardController::class, 'index'])->name('index');

        Route::controller(AdminRequestController::class)->name('requests.')->prefix('requests')->group(function() {
            Route::get('/', 'index')->name('index');
            Route::get('/{request}', 'show')->name('show');
            Route::delete('/{request}', 'destroy')->name('destroy');
        });

        Route::controller(AdminProjectController::class)->name('projects.')->prefix('projects')->group(function() {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/{project}', 'edit')->name('edit');
            Route::put('/{project}', 'update')->name('update');
            Route::delete('/{project}', 'destroy')->name('destroy');
        });

        Route::controller(AdminProductController::class)->name('products.')->prefix('products')->group(function() {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/{product}', 'edit')->name('edit');
            Route::put('/{product}', 'update')->name('update');
            Route::delete('/{product}', 'destroy')->name('destroy');
        });

        Route::controller(AdminPostController::class)->name('posts.')->prefix('posts')->group(function() {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/{post}', 'edit')->name('edit');
            Route::put('/{post}', 'update')->name('update');
            Route::delete('/{post}', 'destroy')->name('destroy');
        });

        Route::controller(SettingsController::class)->group(function() {
            Route::get('/settings', 'settings')->name('settings');
            Route::post('/store-link', 'updateStoreLink')->name('store.update');
            Route::post('/copyright-text', 'updateCopyrightText')->name('copyright.update');
            Route::post('/primary-email', 'updatePrimaryEmail')->name('email.update');
        });
        
    });
});