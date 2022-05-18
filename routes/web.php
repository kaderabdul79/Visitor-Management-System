<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;


Route::get('/', function () {
    return view('auth.registration');
});
Route::get('/registration', [CustomAuthController::class, 'registration'])->name('register');