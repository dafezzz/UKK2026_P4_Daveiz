<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengembalian;
use App\Models\Peminjaman;

class PengembalianController extends Controller
{
    public function store(Request $request)
    {
        $peminjaman = Peminjaman::findOrFail($request->peminjaman_id);

        Pengembalian::create([
            'peminjaman_id' => $peminjaman->id,
            'tanggal_pengembalian' => now(),
            'denda' => 0
        ]);

        $peminjaman->update([
            'status' => 'dikembalikan'
        ]);

        return back()->with('success', 'Pengembalian berhasil');
    }
}