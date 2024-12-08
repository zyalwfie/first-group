<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CredentialController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::controller(WelcomeController::class)->group(function () {
    Route::get('/', 'index')->name('welcome');
    Route::get('teams', 'teams')->name('teams');
    Route::get('contact', 'contact')->name('contact');
});

Route::prefix('blogs')->name('blogs.')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/show/{blog:slug}', [BlogController::class, 'show'])->name('show');
    Route::get('/authors/{user:username}', [AuthorController::class, 'index'])->name('authors.index');
    Route::get('/tags/{tag:slug}', [TagController::class, 'index'])->name('tags.index');
});

Route::controller(CredentialController::class)->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('signin', 'signin')->name('signin');
        Route::post('authenticate', 'authenticate')->name('authenticate');
        Route::get('signup', 'signup')->name('signup');
        Route::post('register', 'register')->name('register');
    });

    Route::middleware('auth')->group(function () {
        Route::post('logout', 'logout')->name('logout');
    });
});
