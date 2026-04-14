<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    // tampil semua request
  public function index()
{
    $data = Peminjaman::with(['user','buku.pengarang'])
        ->where('status', '!=', 'ditolak') 
        ->latest()
        ->get();

    return view('approval.index', compact('data'));
}

    // ACC peminjaman
    public function approve($id)
    {
        $p = Peminjaman::with('buku')->findOrFail($id);

        if ($p->buku->stok <= 0) {
            return back()->with('error','Stok habis');
        }

        $p->update(['status' => 'dipinjam']);
        $p->buku->decrement('stok');

        return back()->with('success','Disetujui');
    }

    // tolak
    public function reject($id)
    {
        $p = Peminjaman::findOrFail($id);
        $p->update(['status' => 'ditolak']);

        return back()->with('success','Ditolak');
    }

    // konfirmasi pengembalian + denda
    public function konfirmasi($id)
    {
        $p = Peminjaman::with('buku')->findOrFail($id);

        $denda = 0;
        $telat = 0;

        if ($p->tanggal_kembali && now()->gt($p->tanggal_kembali)) {
            $telat = now()->diffInDays($p->tanggal_kembali);
            $denda = $telat * 1000;
        }

        // kalau ada denda → kirim json (buat modal)
        if ($denda > 0) {
            return response()->json([
                'denda' => $denda,
                'telat' => $telat
            ]);
        }

        // kalau tidak ada denda
        $p->update(['status' => 'selesai']);
        $p->buku->increment('stok');

        return response()->json(['success' => true]);
    }

    // final setelah bayar denda
    public function selesai($id)
    {
        $p = Peminjaman::with('buku')->findOrFail($id);

        $p->update(['status' => 'selesai']);
        $p->buku->increment('stok');

        return back()->with('success','Pengembalian selesai');
    }
}