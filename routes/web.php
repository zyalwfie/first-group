<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
