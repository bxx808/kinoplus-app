<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\Tag\TagController;
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

Route::get('/posts/create', [PageController::class, 'create'])->name('posts.create');

Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts/edit', [PageController::class, 'edit'])->name('posts.edit');

Route::get('/categories/store', [CategoryController::class, 'index'])->name('categories.index');

Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');

Route::get('/tags', [PageController::class, 'tags'])->name('tags.index');

Route::post('/tags/store', [TagController::class, 'store'])->name('tags.store');

