<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // 🔥 WAJIB
use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\User;
use App\Models\ActivityLog;

class DashboardController extends Controller
{
    public function index()
    {
        // pastikan login
        if (!Auth::check()) {
            return redirect('/login');
        }

        $role = Auth::user()->role;

        // ================= ANGGOTA =================
        if ($role === 'anggota') {

            $buku = Buku::latest()->take(8)->get();

            $populer = Buku::withCount('peminjaman')
                ->orderBy('peminjaman_count', 'desc')
                ->take(8)
                ->get();

            $kategori = Buku::with('kategori')
                ->select('kategori_id')
                ->distinct()
                ->get();

            $riwayat = Peminjaman::with('buku')
                ->where('user_id', Auth::id())
                ->latest()
                ->take(5)
                ->get();

            return view('dashboard-user', compact(
                'buku',
                'populer',
                'kategori',
                'riwayat'
            ));
        }

        // ================= ADMIN & PETUGAS =================

        $totalBuku = Buku::count();
        $totalMember = User::where('role', 'pengguna')->count();
        $totalPeminjaman = Peminjaman::count();

        $pending = Peminjaman::where('status', 'pending')->count();
        $dipinjam = Peminjaman::where('status', 'dipinjam')->count();
        $kembali = Peminjaman::where('status', 'kembali')->count();

        $buku = Buku::latest()->take(5)->get();

        $peminjaman = Peminjaman::with('user')
            ->latest()
            ->take(5)
            ->get();

        $logs = ActivityLog::latest()->take(5)->get();

        $chart = Peminjaman::selectRaw('DATE(created_at) as tanggal, COUNT(*) as total')
            ->groupBy('tanggal')
            ->orderBy('tanggal', 'asc')
            ->pluck('total', 'tanggal');

        if ($chart->isEmpty()) {
            $chart = collect([
                now()->format('Y-m-d') => 0
            ]);
        }

        $topBuku = Buku::withCount('peminjaman')
            ->orderBy('peminjaman_count', 'desc')
            ->take(5)
            ->get()
            ->map(function ($b) {
                return [
                    'judul' => $b->judul,
                    'total' => $b->peminjaman_count
                ];
            });

        return view('dashboard', compact(
            'totalBuku',
            'totalMember',
            'totalPeminjaman',
            'pending',
            'dipinjam',
            'kembali',
            'buku',
            'peminjaman',
            'logs',
            'chart',
            'topBuku'
        ));
    }
}