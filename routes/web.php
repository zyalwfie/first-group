<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CredentialController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\WriteController;
use Illuminate\Support\Facades\Route;

Route::controller(WelcomeController::class)->group(function () {
    Route::get('/', 'index')->name('welcome');
    Route::get('/blogs', 'blogs')->name('blogs');
    Route::get('/detail', 'detail')->name('detail');
});


Route::get('/signin', [CredentialController::class, 'signin'])->name('signin');
Route::get('/signup', [CredentialController::class, 'signup'])->name('signup');

Route::prefix('user')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/write', [WriteController::class, 'index'])->name('write.index');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
});