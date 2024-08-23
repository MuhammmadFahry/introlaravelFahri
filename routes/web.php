<?php
// routes/web.php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::get('/welcome', [AuthController::class, 'showWelcomePage'])->name('welcome');

Route::get('/table', [TableController::class, 'table']);
Route::get('/data-tables', [TableController::class, 'dataTables']);

// Route::resource('cast', CastController::class);
Route::get('/cast', [CastController::class, 'index'])->name('cast.index');
Route::get('/cast/create', [CastController::class, 'create'])->name('cast.create');
Route::post('/cast', [CastController::class, 'store'])->name('cast.store');
Route::get('/cast/{id}', [CastController::class, 'show'])->name('cast.show');
Route::get('/cast/{id}/edit', [CastController::class, 'edit'])->name('cast.edit');
Route::put('/cast/{id}', [CastController::class, 'update'])->name('cast.update');
Route::delete('/cast/{id}', [CastController::class, 'destroy'])->name('cast.destroy');