<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\PembayaranController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/destinasi', [DestinasiController::class, 'index'])->name('destinasi');
    Route::post('/destinasi', [DestinasiController::class, 'pilih'])->name('destinasi.pilih');

    Route::get('/pembayaran/{id}', [PembayaranController::class, 'index'])->name('pembayaran');
    Route::post('/pembayaran/bayar', [PembayaranController::class, 'bayar'])->name('pembayaran.bayar');
    Route::get('/detail', [PembayaranController::class, 'detail'])->name('pembayaran.detail');


});

require __DIR__.'/auth.php';
