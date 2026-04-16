@extends('layouts.app')

@section('content')

<div class="container-fluid py-4">

    <!-- HEADER -->
    <div class="mb-4">
        <h5 class="fw-semibold mb-1 text-dark">Riwayat Aktivitas</h5>
        <small class="text-muted">Peminjaman, pengembalian, dan denda seluruh anggota</small>
    </div>

    <!-- SEARCH -->
    <div class="card border-0 shadow-sm mb-3">
        <div class="card-body">
            <form method="GET" class="d-flex gap-2">
                <input type="text" name="search" class="form-control search-input" placeholder="Cari aktivitas...">
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
                        <th>Aktivitas</th>
                        <th>Deskripsi</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>

                <tbody>
                @forelse($activities as $log)
                <tr>
                    <td class="text-muted">{{ $loop->iteration }}</td>

                    <td class="fw-medium">
                        {{ $log->user->name ?? '-' }}
                    </td>

                    <td>
                        @php
                            $badge = match($log->action) {
                                'peminjaman_approved' => 'primary',
                                'pengembalian_completed' => 'success',
                                'denda_recorded' => 'warning',
                                'peminjaman_rejected' => 'danger',
                                default => 'secondary'
                            };
                        @endphp

                        <span class="badge-soft badge-soft-{{ $badge }}">
                            {{ ucfirst(str_replace('_', ' ', $log->action)) }}
                        </span>
                    </td>

                    <td class="text-muted small">
                        {{ Str::limit($log->description, 60) }}
                    </td>

                    <td class="text-muted small">
                        {{ $log->created_at->format('d M Y H:i') }}
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-5 text-muted">
                        Belum ada aktivitas
                    </td>
                </tr>
                @endforelse
                </tbody>

            </table>
        </div>
    </div>

    <!-- PAGINATION -->
    <div class="mt-4 d-flex justify-content-end">
        {{ $activities->links('pagination::bootstrap-5') }}
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