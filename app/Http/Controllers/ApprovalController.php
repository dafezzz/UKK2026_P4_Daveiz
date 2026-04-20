<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Denda;
use App\Models\ActivityLog;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ApprovalController extends Controller
{
   public function index()
{
    $data = Peminjaman::with(['user', 'buku.pengarang'])
        ->whereIn('status', ['pending', 'dipinjam', 'pengembalian']) 
        ->latest()
        ->get();

    return view('approval.index', compact('data'));
}

    // ✅ APPROVE
    public function approve($id)
    {
        $p = Peminjaman::with('buku')->findOrFail($id);

        if ($p->buku->stok <= 0) {
            return back()->with('error', 'Stok habis');
        }

        $now = now();

        $p->update([
            'status' => 'dipinjam',
            'tanggal_pinjam' => $now,
            'tanggal_jatuh_tempo' => $now->copy()->addDays(7)
        ]);

        $p->buku->decrement('stok');

        ActivityLog::create([
            'user_id' => $p->user_id,
            'activity' => 'update',
            'description' => 'Disetujui sampai ' . $p->tanggal_jatuh_tempo,
            'model' => 'peminjaman',
            'model_id' => $p->id
        ]);

        return back()->with('success', 'Disetujui');
    }

    // ✅ REJECT
    public function reject($id)
    {
        $p = Peminjaman::findOrFail($id);
        $p->update(['status' => 'ditolak']);

        return back()->with('success', 'Ditolak');
    }
public function konfirmasi($id)
{
    $p = Peminjaman::with('buku')->findOrFail($id);

    $hari_terlambat = 0;
    $denda = 0;

    $tanggalKembali = now();

    if ($p->tanggal_jatuh_tempo) {

        $jatuhTempo = Carbon::parse($p->tanggal_jatuh_tempo);

        if ($tanggalKembali->gt($jatuhTempo)) {

            // 🔥 FIX: hilangkan jam → biar bulat
            $hari_terlambat = $jatuhTempo
                ->startOfDay()
                ->diffInDays($tanggalKembali->startOfDay());

            // minimal 1 hari
            if ($hari_terlambat < 1) {
                $hari_terlambat = 1;
            }

            $denda = $hari_terlambat * 5000;
        }
    }

    if ($denda > 0) {
        return response()->json([
            'success' => true,
            'has_denda' => true,
            'hari_terlambat' => $hari_terlambat,
            'jumlah_denda' => $denda,
            'peminjaman_id' => $p->id
        ]);
    }

    $p->update([
        'status' => 'dikembalikan',
        'tanggal_kembali' => $tanggalKembali
    ]);

    $p->buku->increment('stok');

    return response()->json([
        'success' => true,
        'has_denda' => false
    ]);
}

    // ✅ SELESAI (SETELAH BAYAR DENDA)
    public function selesai(Request $request, $id)
    {
        $p = Peminjaman::with('buku')->findOrFail($id);

        if ($request->jumlah_denda > 0) {
            Denda::create([
                'peminjaman_id' => $p->id,
                'hari_terlambat' => $request->hari_terlambat,
                'jumlah_denda' => $request->jumlah_denda,
                'status' => 'sudah_bayar',
                'tanggal_bayar' => now()
            ]);
        }

        $p->update([
            'status' => 'dikembalikan',
            'tanggal_kembali' => now()
        ]);

        $p->buku->increment('stok');

        return back()->with('success', 'Pengembalian selesai');
    }
}