<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PengarangController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KategoriController;

// halaman awal
Route::get('/', function () {
    return view('auth.login');
});

// semua harus login
Route::middleware(['auth'])->group(function () {

    // dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // master data
    Route::resource('pengarang', PengarangController::class);
    Route::resource('books', BookController::class);

    //kelas
    Route::resource('kelas', \App\Http\Controllers\KelasController::class);

    //anggota
    Route::resource('anggota', AnggotaController::class);

    //kategori
    Route::resource('kategori', KategoriController::class);

    // peminjaman
    Route::prefix('peminjaman')->name('peminjaman.')->group(function () {
        Route::get('/', [PeminjamanController::class, 'index'])->name('index');
        Route::post('/', [PeminjamanController::class, 'store'])->name('store');
        Route::post('{id}/approve', [PeminjamanController::class, 'approve'])->name('approve');
        Route::post('{id}/reject', [PeminjamanController::class, 'reject'])->name('reject');
    });

    // pengembalian
    Route::prefix('pengembalian')->name('pengembalian.')->group(function () {
        Route::get('/', [PengembalianController::class, 'index'])->name('index');
        Route::post('{id}', [PengembalianController::class, 'store'])->name('store');
    });

    // log
    Route::get('/logs', [ActivityLogController::class, 'index'])->name('logs.index');

});

require __DIR__.'/auth.php';