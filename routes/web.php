<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');
Route::get('destinasi', [\App\Http\Controllers\Frontend\DestinasiController::class, 'index'])->name('destination');
Route::get('destinasi/{destination:slug}', [\App\Http\Controllers\Frontend\DestinasiController::class, 'show'])->name('destination.show');
Route::get('destinasi/kategori/{category:slug}', [\App\Http\Controllers\Frontend\DestinasiController::class, 'category'])->name('destination.category');