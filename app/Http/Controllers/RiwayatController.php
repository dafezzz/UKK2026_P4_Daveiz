<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\Denda;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{
    // Tampil riwayat untuk anggota (hanya milik sendiri)
    public function userIndex()
    {
        $activities = ActivityLog::where('user_id', Auth::id())
            ->with('user')
            ->orderBy('created_at', 'desc')
            ->paginate(20);
        
        return view('riwayat.user', compact('activities'));
    }

    // Tampil semua riwayat untuk admin/petugas
    public function adminIndex()
    {
        $activities = ActivityLog::with('user')
            ->orderBy('created_at', 'desc')
            ->paginate(20);
        
        return view('riwayat.admin', compact('activities'));
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
