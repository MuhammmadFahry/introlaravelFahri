<?php
// routes/web.php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::get('/welcome', [AuthController::class, 'showWelcomePage'])->name('welcome');

Route::get('/table', [TableController::class, 'table']);
Route::get('/data-tables', [TableController::class, 'dataTables']);