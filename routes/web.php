<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'profile']);

Route::get('/book', [BookController::class, 'index']);
Route::get('/book/create', [BookController::class, 'create']);
Route::post('/book/store', [BookController::class, 'store']);
Route::get('/book/{id}/edit', [BookController::class, 'edit']);
Route::put('/book/update/{id}', [BookController::class, 'update']);
