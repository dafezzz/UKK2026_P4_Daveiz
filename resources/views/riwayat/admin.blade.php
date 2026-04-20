@extends('layouts.app')

@section('content')

<div class="container-fluid py-4">

    <!-- HEADER -->
    <div class="mb-4 d-flex justify-content-between align-items-end">
        <div>
            <h5 class="fw-semibold mb-1 text-dark">Riwayat Aktivitas</h5>
            <small class="text-muted">Riwayat peminjaman & pengembalian seluruh anggota</small>
        </div>
        <a
            href="{{ route('laporan.pdf', ['start_date' => request('start_date', now()->startOfMonth()->toDateString()), 'end_date' => request('end_date', now()->endOfMonth()->toDateString())]) }}"
            class="btn btn-outline-danger btn-sm px-3">
            Export PDF
        </a>
    </div>

    <!-- SEARCH -->
    <div class="card border-0 shadow-sm mb-3">
        <div class="card-body">
            <form method="GET" class="d-flex gap-2">
                <input type="text" name="search" value="{{ request('search') }}" class="form-control search-input" placeholder="Cari user, buku, atau status...">
                <button class="btn btn-primary btn-sm px-3">Cari</button>
            </form>
        </div>
    </div>

    <!-- TABLE -->
    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table align-middle mb-0">

                <thead class="table-light">
                    <tr class="text-muted small">
                        <th style="width: 40px;">No</th>
                        <th>User</th>
                        <th>Buku</th>
                        <th>Status</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>

                <tbody>
                @forelse($riwayat as $log)
                <tr>
                    <td class="text-muted">{{ $riwayat->firstItem() + $loop->index }}</td>

                    <td class="fw-medium">
                        {{ $log->user->name ?? '-' }}
                    </td>

                    <td>
                        {{ $log->buku->judul ?? '-' }}
                    </td>

                    <td>
                        @php
                            $statusBadge = match($log->status) {
                                'dipinjam' => 'primary',
                                'pengembalian' => 'warning',
                                'dikembalikan' => 'success',
                                default => 'secondary'
                            };
                        @endphp

                        <span class="badge-soft badge-soft-{{ $statusBadge }}">
                            {{ ucfirst($log->status) }}
                        </span>
                    </td>

                    <td class="text-muted small">
                        {{ $log->tanggal_pinjam ? \Carbon\Carbon::parse($log->tanggal_pinjam)->format('d M Y') : '-' }}
                    </td>

                    <td class="text-muted small">
                        {{ $log->tanggal_kembali ? \Carbon\Carbon::parse($log->tanggal_kembali)->format('d M Y') : '-' }}
                    </td>

                    <td class="text-muted small">
                        {{ $log->created_at->format('d M Y H:i') }}
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center py-5 text-muted">
                        Belum ada riwayat peminjaman/pengembalian
                    </td>
                </tr>
                @endforelse
                </tbody>

            </table>
        </div>
    </div>

    <!-- PAGINATION -->
    <div class="mt-4 d-flex justify-content-end">
        {{ $riwayat->links('pagination::bootstrap-5') }}
    </div>

</div>

<style>

/* SEARCH */
.search-input {
    border-radius: 8px;
    background: #f8fafc;
    border: 1px solid #e2e8f0;
}

/* HOVER TABLE */
.table tbody tr:hover {
    background: #f8fafc;
}

/* 🔥 BADGE FIX (HARUS override bootstrap) */
.badge-soft {
    display: inline-block;
    padding: 5px 10px;
    font-size: 12px;
    font-weight: 500;
    border-radius: 6px;
}

/* WARNA */
.badge-soft-primary { background: rgba(37,99,235,.12) !important; color:#1e3a8a !important; }
.badge-soft-success { background: rgba(16,185,129,.12) !important; color:#065f46 !important; }
.badge-soft-warning { background: rgba(245,158,11,.15) !important; color:#92400e !important; }
.badge-soft-danger  { background: rgba(239,68,68,.12) !important; color:#7f1d1d !important; }
.badge-soft-secondary { background: rgba(100,116,139,.12) !important; color:#334155 !important; }

/* 🔥 PAGINATION FIX TOTAL */
.pagination {
    margin: 0;
}

.pagination .page-item {
    margin: 0 2px;
}

.pagination .page-link {
    font-size: 11px !important;
    padding: 4px 9px !important;
    border-radius: 6px !important;
    border: none !important;
    background: #f1f5f9 !important;
    color: #334155 !important;
}

/* ACTIVE */
.pagination .page-item.active .page-link {
    background: #1e3a8a !important;
    color: #fff !important;
}

/* DISABLED */
.pagination .page-item.disabled .page-link {
    opacity: 0.4;
}

/* HOVER */
.pagination .page-link:hover {
    background: #e2e8f0 !important;
}

</style>

@endsection