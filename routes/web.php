<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengarangController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\ApprovalController;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth'])->group(function () {

    // dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // master
    Route::resource('pengarang', PengarangController::class);
    Route::resource('penerbit', PenerbitController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('kelas', KelasController::class);

    // user
    Route::resource('admin', AdminController::class);
    Route::resource('petugas', PetugasController::class);
    Route::resource('anggota', AnggotaController::class);

    // buku
    Route::resource('buku', BukuController::class);

    // peminjaman (ajukan pinjam)
    Route::post('/peminjaman', [PeminjamanController::class, 'store'])
        ->name('peminjaman.store');

    // 🔥 pengajuan pengembalian (user)
    Route::get('/pengembalian', [PengembalianController::class, 'index'])
        ->name('pengembalian.index');

    Route::post('/pengembalian/{id}', [PengembalianController::class, 'store'])
        ->name('pengembalian.store');

    // approval (admin / petugas)
    Route::prefix('approval')->name('approval.')->group(function () {
        Route::get('/', [ApprovalController::class, 'index'])->name('index');
        Route::post('{id}/approve', [ApprovalController::class, 'approve'])->name('approve');
        Route::post('{id}/reject', [ApprovalController::class, 'reject'])->name('reject');
        Route::post('{id}/konfirmasi', [ApprovalController::class, 'konfirmasi'])->name('konfirmasi');
        Route::post('{id}/selesai', [ApprovalController::class, 'selesai'])->name('selesai');
    });

    // log
    Route::get('/logs', [ActivityLogController::class, 'index'])
        ->name('logs.index');
});

require __DIR__.'/auth.php';