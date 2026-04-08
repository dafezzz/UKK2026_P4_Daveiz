<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Book;
use App\Models\ActivityLog;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    //  LIST
    public function index()
    {
        $data = Peminjaman::with(['user', 'book', 'approver'])->latest()->get();
        return view('peminjaman.index', compact('data'));
    }

    //  AJUKAN PINJAM (USER)
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required'
        ]);

        $peminjaman = Peminjaman::create([
            'kode_peminjaman' => 'PMJ-' . time(),
            'user_id' => Auth::id(),
            'book_id' => $request->book_id,
            'tanggal_pinjam' => now(),
            'status' => 'pending'
        ]);

        ActivityLog::create([
            'user_id' => Auth::id(),
            'activity' => 'Ajukan Peminjaman',
            'model' => 'Peminjaman',
            'model_id' => $peminjaman->id,
            'description' => 'Mengajukan peminjaman buku',
            'ip_address' => $request->ip()
        ]);

        return back()->with('success', 'Pengajuan berhasil');
    }

    // APPROVE 
    public function approve($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);

        $peminjaman->update([
            'status' => 'approved',
            'approved_by' => Auth::id(),
            'approved_at' => now()
        ]);

        ActivityLog::create([
            'user_id' => Auth::id(),
            'activity' => 'Approve Peminjaman',
            'model' => 'Peminjaman',
            'model_id' => $id,
            'description' => 'Menyetujui peminjaman',
            'ip_address' => request()->ip()
        ]);

        return back()->with('success', 'Disetujui');
    }

    //  REJECT
    public function reject($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);

        $peminjaman->update([
            'status' => 'rejected'
        ]);

        return back()->with('error', 'Ditolak');
    }

    //  KEMBALIKAN
    public function returnBook($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);

        $peminjaman->update([
            'status' => 'dikembalikan',
            'returned_at' => now()
        ]);

        return back()->with('success', 'Buku dikembalikan');
    }
}
