<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [PageController::class, 'index'])->name('pages.home');
    Route::get('/categories', [PageController::class, 'categories'])->name('pages.categories');
    Route::get('/movie', [PageController::class, 'movie'])->name('pages.movie');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::get('/register', [PageController::class, 'register'])->name('register');

Route::post('/register', [RegisterController::class, 'register'])->name('auth.register');

Route::get('/login', [PageController::class, 'login'])->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('auth.login');


