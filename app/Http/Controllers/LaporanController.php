<?php

namespace App\Http\Controllers;

use App\Models\Denda;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    public function exportPdf(Request $request)
    {
        $exportType = $request->input('type', 'all');

        $startDate = $request->filled('start_date')
            ? Carbon::parse($request->input('start_date'))->startOfDay()
            : now()->startOfMonth();

        $endDate = $request->filled('end_date')
            ? Carbon::parse($request->input('end_date'))->endOfDay()
            : now()->endOfMonth();

        $peminjaman = Peminjaman::with(['user', 'buku'])
            ->whereBetween('created_at', [$startDate, $endDate])
            ->when(Auth::user()?->role === 'anggota', function ($query) {
                $query->where('user_id', Auth::id());
            })
            ->latest()
            ->get();

        $pengembalian = Pengembalian::with(['peminjaman.user', 'peminjaman.buku'])
            ->whereBetween('created_at', [$startDate, $endDate])
            ->when(Auth::user()?->role === 'anggota', function ($query) {
                $query->whereHas('peminjaman', function ($peminjamanQuery) {
                    $peminjamanQuery->where('user_id', Auth::id());
                });
            })
            ->latest()
            ->get();

        $totalDenda = $pengembalian->sum('denda');
        $denda = collect();

        if ($exportType === 'denda') {
            $denda = Denda::with(['peminjaman.user', 'peminjaman.buku'])
                ->whereBetween('created_at', [$startDate, $endDate])
                ->when(Auth::user()?->role === 'anggota', function ($query) {
                    $query->whereHas('peminjaman', function ($peminjamanQuery) {
                        $peminjamanQuery->where('user_id', Auth::id());
                    });
                })
                ->latest()
                ->get();

            $totalDenda = $denda->sum('jumlah_denda');
        }

        $pdf = Pdf::loadView('laporan.pdf', [
            'exportType' => $exportType,
            'startDate' => $startDate,
            'endDate' => $endDate,
            'peminjaman' => $peminjaman,
            'pengembalian' => $pengembalian,
            'denda' => $denda,
            'totalDenda' => $totalDenda,
            'printedAt' => now(),
        ]);

        $filename = $exportType === 'denda'
            ? 'laporan-denda.pdf'
            : 'laporan-perpustakaan.pdf';

        return $pdf->download($filename);
    }
}
