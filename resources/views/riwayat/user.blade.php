@extends('layouts.app-user')

@section('content')

<div class="container py-4">

    <!-- HEADER -->
    <div class="mb-4 d-flex justify-content-between align-items-end">
        <div>
            <h5 class="fw-semibold mb-1 text-dark">Riwayat Aktivitas</h5>
            <small class="text-muted">Riwayat peminjaman & pengembalian Anda</small>
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
                <input type="text" name="search" value="{{ request('search') }}" class="form-control search-input" placeholder="Cari judul buku...">
                <button class="btn btn-primary btn-sm px-3">Cari</button>
            </form>
        </div>
    </div>

    <!-- TIMELINE -->
    <div class="card border-0 shadow-sm">
        <div class="card-body">

            @forelse($riwayat as $log)

            @php
                $color = match($log->status) {
                    'dipinjam' => 'primary',
                    'pengembalian' => 'warning',
                    'dikembalikan' => 'success',
                    default => 'secondary'
                };
            @endphp

            <div class="timeline-item">

                <!-- DOT -->
                <div class="timeline-dot bg-{{ $color }}"></div>

                <!-- CONTENT -->
                <div class="timeline-content">
                    <div class="fw-semibold text-dark">
                        {{ $log->buku->judul ?? '-' }}
                    </div>

                    <div class="text-muted small">
                        Status: <strong>{{ ucfirst($log->status) }}</strong>
                        | Pinjam: {{ $log->tanggal_pinjam ? \Carbon\Carbon::parse($log->tanggal_pinjam)->format('d M Y') : '-' }}
                        | Kembali: {{ $log->tanggal_kembali ? \Carbon\Carbon::parse($log->tanggal_kembali)->format('d M Y') : '-' }}
                    </div>

                    <div class="timeline-date">
                        {{ $log->created_at->format('d M Y H:i') }}
                    </div>
                </div>

            </div>

            @empty
            <div class="text-center py-5 text-muted">
                Belum ada riwayat peminjaman/pengembalian
            </div>
            @endforelse

        </div>
    </div>

    <!-- PAGINATION -->
    <div class="mt-4 d-flex justify-content-end">
        {{ $riwayat->links('pagination::bootstrap-5') }}
    </div>

    <!-- DENDA -->
    <div class="card border-0 shadow-sm mt-4">
        <div class="card-body d-flex justify-content-between align-items-center">

            <div>
                <div class="fw-semibold text-dark">Status Denda</div>
                <small class="text-muted">Lihat detail denda Anda</small>
            </div>

            <a href="{{ route('denda.mine') }}" class="btn btn-outline-primary btn-sm px-3">
                Lihat Detail
            </a>

        </div>
    </div>

</div>

<style>

/* SEARCH */
.search-input {
    border-radius: 8px;
    background: #f8fafc;
    border: 1px solid #e2e8f0;
}

/* TIMELINE */
.timeline-item {
    display: flex;
    gap: 15px;
    padding-bottom: 16px;
    margin-bottom: 16px;
    border-bottom: 1px solid #f1f5f9;
}

/* DOT */
.timeline-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    margin-top: 6px;
}

/* CONTENT */
.timeline-content {
    flex: 1;
}

/* DATE */
.timeline-date {
    font-size: 12px;
    color: #94a3b8;
    margin-top: 4px;
}

/* HOVER */
.timeline-item:hover {
    background: #f8fafc;
    border-radius: 6px;
    padding-left: 6px;
}

/* PAGINATION */
.pagination .page-link {
    font-size: 11px !important;
    padding: 4px 9px !important;
    border-radius: 6px;
    border: none;
    background: #f1f5f9;
    color: #334155;
}

.pagination .page-item.active .page-link {
    background: #1e3a8a;
    color: #fff;
}

.pagination .page-link:hover {
    background: #e2e8f0;
}

</style>

@endsection