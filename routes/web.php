<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubUserController;


Route::get('/', function () {
    // return view('auth.registration');
    return view('auth.login');
});

Route::get('registration', [CustomAuthController::class, 'registration'])->name('register');

Route::post('custom-registration', [CustomAuthController::class, 'custom_registration'])->name('registration.custom');

Route::get('login', [CustomAuthController::class, 'index'])->name('login');

Route::post('custom-login', [CustomAuthControLler::class, 'custom_login'])->name('login.custom');

Route::get('dashboard', [CustomAuthControLler::class, 'dashboard'])->name('dashboard');

Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');

Route::get('profile', [ProfileController::class, 'index'])->name('profile');

Route::post('profile/edit_validation', [ProfileController::class, 'edit_validation'])->name('profile.edit_validation');
