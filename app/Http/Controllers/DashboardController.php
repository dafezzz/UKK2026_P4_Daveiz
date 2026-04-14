<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku; // model yang bener
use App\Models\Peminjaman;
use App\Models\User;
use App\Models\ActivityLog;

class DashboardController extends Controller
{
    public function index()
    {
        // statistik
        $totalBuku = Buku::count();
        $totalMember = User::where('role', 'member')->count();
        $totalPeminjaman = Peminjaman::count();
        $pending = Peminjaman::where('status', 'dipinjam')->count(); // sesuaikan status

        // data terbaru
        $buku = Buku::latest()->take(5)->get();
        $peminjaman = Peminjaman::with('user')->latest()->take(5)->get();
        $logs = ActivityLog::latest()->take(5)->get();

        // chart peminjaman per hari
        $chart = Peminjaman::selectRaw('DATE(created_at) as tanggal, COUNT(*) as total')
            ->groupBy('tanggal')
            ->pluck('total', 'tanggal');

        // biar chart ga kosong
        if ($chart->isEmpty()) {
            $chart = collect([
                now()->format('Y-m-d') => 0
            ]);
        }

        return view('dashboard', compact(
            'totalBuku',
            'totalMember',
            'totalPeminjaman',
            'pending',
            'buku',
            'peminjaman',
            'logs',
            'chart'
        ));
    }
}