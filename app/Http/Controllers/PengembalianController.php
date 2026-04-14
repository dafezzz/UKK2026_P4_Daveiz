<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Support\Facades\Auth;

class PengembalianController extends Controller
{
    public function index()
    {
        // tampilkan yg dipinjam + yg lagi diajukan pengembalian
        $data = Peminjaman::with('buku.pengarang')
            ->where('user_id', Auth::id())
            ->whereIn('status', ['dipinjam', 'pengembalian'])
            ->latest()
            ->get();

        return view('pengembalian.index', compact('data'));
    }

    public function store($id)
    {
        $pinjam = Peminjaman::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        // cegah double klik
        if ($pinjam->status == 'pengembalian') {
            return back()->with('error', 'Sudah diajukan sebelumnya');
        }

        $pinjam->update([
            'status' => 'pengembalian'
        ]);

        return back()->with('success', 'Pengajuan pengembalian dikirim');
    }
}
