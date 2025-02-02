<?php

use App\Http\Controllers\api\GalleryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/galleries', [GalleryController::class, 'index'])->name('gallery');
