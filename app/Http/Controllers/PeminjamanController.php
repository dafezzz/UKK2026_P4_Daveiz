<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // wajib
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

        // simpan sebagai pengajuan
        Peminjaman::create([
            'user_id' => Auth::id(),
            'buku_id' => $buku->id,
            'tanggal_pinjam' => now(),
            'status' => 'pending' // 🔥 penting
        ]);

        return back()->with('success', 'Pengajuan berhasil dikirim');
    }
}