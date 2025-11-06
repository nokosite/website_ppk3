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

Route::get('galeri', [\App\Http\Controllers\Frontend\GalleryController::class, 'index'])->name('galeri');

Route::get('destinasi', [\App\Http\Controllers\Frontend\DestinasiController::class, 'index'])->name('destination');
Route::get('destinasi/{destination:slug}', [\App\Http\Controllers\Frontend\DestinasiController::class, 'show'])->name('destination.show');
Route::get('destinasi/kategori/{category:slug}', [\App\Http\Controllers\Frontend\DestinasiController::class, 'category'])->name('destination.category');

// Route untuk serve storage files tanpa symlink (untuk shared hosting)
Route::get('storage/{path}', function ($path) {
    $filePath = storage_path('app/public/' . $path);
    
    if (!file_exists($filePath) || !is_file($filePath)) {
        abort(404);
    }
    
    $mimeType = mime_content_type($filePath);
    $fileName = basename($filePath);
    
    return response()->file($filePath, [
        'Content-Type' => $mimeType,
        'Content-Disposition' => 'inline; filename="' . $fileName . '"',
    ]);
})->where('path', '.*');