<?php

use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/galleries', [HomeController::class, 'gallery'])->name('gallery');
