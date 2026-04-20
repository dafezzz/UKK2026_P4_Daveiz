<?php

namespace App\Http\Controllers;

use App\Models\Denda;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{
    // Riwayat anggota: hanya transaksi peminjaman/pengembalian milik sendiri
    public function userIndex(Request $request)
    {
        $riwayat = Peminjaman::with('buku')
            ->where('user_id', Auth::id())
            ->whereIn('status', ['dipinjam', 'pengembalian', 'dikembalikan'])
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search');
                $query->whereHas('buku', function ($bookQuery) use ($search) {
                    $bookQuery->where('judul', 'like', "%{$search}%");
                });
            })
            ->latest()
            ->paginate(20);

        return view('riwayat.user', compact('riwayat'));
    }

    // Riwayat admin/petugas: semua transaksi peminjaman/pengembalian anggota
    public function adminIndex(Request $request)
    {
        $riwayat = Peminjaman::with(['user', 'buku'])
            ->whereIn('status', ['dipinjam', 'pengembalian', 'dikembalikan'])
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search');

                $query->where(function ($nested) use ($search) {
                    $nested->where('status', 'like', "%{$search}%")
                        ->orWhereHas('user', function ($userQuery) use ($search) {
                            $userQuery->where('name', 'like', "%{$search}%");
                        })
                        ->orWhereHas('buku', function ($bookQuery) use ($search) {
                            $bookQuery->where('judul', 'like', "%{$search}%");
                        });
                });
            })
            ->latest()
            ->paginate(20);

        return view('riwayat.admin', compact('riwayat'));
    }

    // Detail denda user
    public function detailDenda($userId = null)
    {
        if (Auth::user()->role === 'anggota') {
            // Anggota hanya bisa lihat denda sendiri
            $denda = Denda::whereHas('peminjaman', function($q) {
                $q->where('user_id', Auth::id());
            })
            ->with(['peminjaman.buku', 'peminjaman.user'])
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        } else {
            // Admin/Petugas bisa lihat semua atau user tertentu
            if ($userId) {
                $denda = Denda::whereHas('peminjaman', function($q) use ($userId) {
                    $q->where('user_id', $userId);
                })
                ->with(['peminjaman.buku', 'peminjaman.user'])
                ->orderBy('created_at', 'desc')
                ->paginate(10);
            } else {
                $denda = Denda::with(['peminjaman.buku', 'peminjaman.user'])
                    ->orderBy('created_at', 'desc')
                    ->paginate(10);
            }
        }

        return view('riwayat.denda', compact('denda'));
    }
}
