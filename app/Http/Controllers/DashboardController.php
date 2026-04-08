<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Peminjaman;
use App\Models\User;
use App\Models\ActivityLog;

class DashboardController extends Controller
{
    public function index()
    {
        // ======================
        // STATISTIK (AMAN WALAU DATA KOSONG)
        // ======================
        $totalBuku = Book::count();
        $totalMember = User::where('role', 'member')->count();
        $totalPeminjaman = Peminjaman::count();
        $pending = Peminjaman::where('status', 'pending')->count();

        // ======================
        // DATA LIST (ANTI ERROR)
        // ======================
        $books = Book::latest()->take(5)->get();
        $peminjaman = Peminjaman::latest()->take(5)->get();
        $logs = ActivityLog::latest()->take(5)->get();

        // ======================
        // CHART (WAJIB ADA)
        // ======================
        $chart = Peminjaman::selectRaw('DATE(created_at) as tanggal, COUNT(*) as total')
            ->groupBy('tanggal')
            ->pluck('total', 'tanggal');

        // kalau kosong → biar ga error
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
            'books',
            'peminjaman',
            'logs',
            'chart'
        ));
    }
}