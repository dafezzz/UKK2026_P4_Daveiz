<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Buku;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    public function store(Request $request)
    {
        $buku = Buku::findOrFail($request->buku_id);

        // cek stok
        if ($buku->stok <= 0) {
            return back()->with('error', 'Stok habis');
        }

        // cek pengajuan pending
        $existingRequest = Peminjaman::where('user_id', Auth::id())
            ->where('buku_id', $buku->id)
            ->where('status', 'pending')
            ->first();

        if ($existingRequest) {
            return back()->with('error', 'Masih menunggu approval');
        }

        // ⛔ BELUM ADA TANGGAL DI SINI
        Peminjaman::create([
            'user_id' => Auth::id(),
            'buku_id' => $buku->id,
            'status' => 'pending'
        ]);

        return back()->with('success', 'Pengajuan dikirim!');
    }
}