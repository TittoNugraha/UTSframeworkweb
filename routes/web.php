<?php

// routes/web.php
use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

Route::get('/input', [BarangController::class, 'formInput']);
Route::post('/hasil', [BarangController::class, 'formHasil']);

Route::get('/coba', [BarangController::class, 'index']);