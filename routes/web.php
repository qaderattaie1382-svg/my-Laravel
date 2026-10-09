<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ParkingController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserController;

// ========== صفحات اصلی ==========
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/features', [PageController::class, 'features'])->name('features');
Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/zones', [PageController::class, 'zones'])->name('zones');
Route::get('/signup', [PageController::class, 'signup'])->name('signup');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/auth/login', [PageController::class, 'login'])->name('auth.login');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');

// ========== Resource Routes ==========
Route::resource('parkings', ParkingController::class);
Route::resource('bookings', BookingController::class);
Route::resource('users', UserController::class);