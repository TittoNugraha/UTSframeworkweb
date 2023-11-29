<?php

// routes/web.php
use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

Route::get('/input', [BarangController::class, 'formInput']);
Route::post('/hasil', [BarangController::class, 'formHasil']);

Route::get('/coba', [BarangController::class, 'index']);
Route::get('/', [BarangController::class, 'home'])->name('home');

Route::get('/edit-form/{id}', [BarangController::class, 'editForm'])->name('edit.form');
Route::post('/edit-form/{id}', [BarangController::class, 'edit'])->name('edit');