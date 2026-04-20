<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
use App\Http\Controllers\RakController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\LaporanController;
use App\Models\Peminjaman;

Route::get('/', function () {
    return view('auth.login');
});

// dashboard (semua login)
Route::middleware(['auth'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::middleware(['auth'])->get('/laporan/pdf', [LaporanController::class, 'exportPdf'])->name('laporan.pdf');



// ================= ADMIN =================
Route::middleware(['auth', 'role:admin'])->group(function () {

    // master
    Route::resource('pengarang', PengarangController::class);
    Route::resource('penerbit', PenerbitController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('kelas', KelasController::class);
    Route::resource('rak', RakController::class);

    // user
    Route::resource('admin', AdminController::class);
    Route::resource('petugas', PetugasController::class);
    Route::resource('anggota', AnggotaController::class);

    // log
    Route::get('/logs', [ActivityLogController::class, 'index'])->name('logs.index');
});


// ================= ADMIN & PETUGAS =================
Route::middleware(['auth', 'role:admin,petugas'])->group(function () {

    // buku (FULL AKSES)
    Route::resource('buku', BukuController::class);

    // pengembalian
    Route::get('/pengembalian', [PengembalianController::class, 'index'])->name('pengembalian.index');
    Route::post('/pengembalian/{id}', [PengembalianController::class, 'store'])->name('pengembalian.store');

    // approval
    Route::prefix('approval')->name('approval.')->group(function () {
        Route::get('/', [ApprovalController::class, 'index'])->name('index');
        Route::post('{id}/approve', [ApprovalController::class, 'approve'])->name('approve');
        Route::post('{id}/reject', [ApprovalController::class, 'reject'])->name('reject');
        Route::post('{id}/konfirmasi', [ApprovalController::class, 'konfirmasi'])->name('konfirmasi');
        Route::post('{id}/selesai', [ApprovalController::class, 'selesai'])->name('selesai');
    });

    // riwayat untuk admin/petugas (lihat semua user)
    Route::get('/riwayat-semua', [RiwayatController::class, 'adminIndex'])->name('riwayat.admin');
    Route::get('/denda-semua', [RiwayatController::class, 'detailDenda'])->name('denda.semua');
    Route::get('/denda-user/{user}', [RiwayatController::class, 'detailDenda'])->name('denda.user');
});
// ================= MEMBER/ANGGOTA =================
Route::middleware(['auth', 'role:anggota'])->group(function () {

    Route::get('/katalog', [BukuController::class, 'katalogUser'])
        ->name('katalog.user');

    Route::get('/buku/{id}', [BukuController::class, 'showUser'])
        ->name('buku.user.detail');

    // peminjaman dari katalog
    Route::post('/katalog', [PeminjamanController::class, 'store'])->name('peminjaman.store');

    Route::get('/pengembalian-user', [PengembalianController::class, 'index'])
        ->name('pengembalian.user');

    // riwayat untuk anggota (hanya milik sendiri)
    Route::get('/riwayat-saya', [RiwayatController::class, 'userIndex'])->name('riwayat.mine');
    Route::get('/denda-saya', [RiwayatController::class, 'detailDenda'])->name('denda.mine');
});

// Rute pengembalian khusus - hanya auth tanpa role check (controller handle authz)
Route::middleware(['auth'])->post('/pengembalian-user/{id}', [PengembalianController::class, 'store'])
    ->name('pengembalian.user.store');
require __DIR__ . '/auth.php';
