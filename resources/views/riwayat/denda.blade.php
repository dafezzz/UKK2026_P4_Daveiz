@php
    $layout = auth()->user()->role === 'anggota' ? 'layouts.app-user' : 'layouts.app';
@endphp

@extends($layout)

@section('content')

<div class="container py-4">

    <!-- HEADER -->
    <div class="mb-4">
        <h5 class="fw-semibold mb-1 text-dark">Daftar Denda</h5>
        <small class="text-muted">
            @if(auth()->user()->role === 'anggota')
                Denda peminjaman Anda
            @else
                Denda seluruh anggota
            @endif
        </small>
    </div>

    <!-- TABLE -->
    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table align-middle mb-0">

                <thead class="table-light">
                    <tr class="text-muted small">
                        <th style="width: 40px;">No</th>
                        @if(auth()->user()->role !== 'anggota')
                        <th>Nama User</th>
                        @endif
                        <th>Judul Buku</th>
                        <th class="text-center">Hari Terlambat</th>
                        <th class="text-end">Jumlah Denda</th>
                        <th class="text-center">Status</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>

                <tbody>
                @forelse($denda as $d)
                <tr>
                    <td class="text-muted">{{ $loop->iteration }}</td>

                    @if(auth()->user()->role !== 'anggota')
                    <td class="fw-medium">
                        {{ $d->peminjaman->user->name ?? '-' }}
                    </td>
                    @endif

                    <td class="fw-medium">
                        {{ $d->peminjaman->buku->judul ?? '-' }}
                    </td>

                    <!-- HARI -->
                    <td class="text-center">
                        <span class="badge-soft badge-soft-warning">
                            {{ $d->hari_terlambat }} hari
                        </span>
                    </td>

                    <!-- NOMINAL -->
                    <td class="text-end fw-semibold text-danger">
                        Rp {{ number_format($d->jumlah_denda, 0, ',', '.') }}
                    </td>

                    <!-- STATUS -->
                    <td class="text-center">
                        @if($d->status === 'sudah_bayar')
                            <span class="badge-soft badge-soft-success">Lunas</span>
                        @else
                            <span class="badge-soft badge-soft-danger">Belum Bayar</span>
                        @endif
                    </td>

                    <td class="text-muted small">
                        {{ $d->created_at->format('d M Y') }}
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="{{ auth()->user()->role === 'anggota' ? 6 : 7 }}" class="text-center py-5 text-muted">
                        Tidak ada data denda
                    </td>
                </tr>
                @endforelse
                </tbody>

            </table>
        </div>
    </div>

    <!-- SUMMARY -->
    @if($denda->count() > 0)
    <div class="card border-0 shadow-sm mt-4">
        <div class="card-body">
            <div class="row">

                <div class="col-md-6">
                    <small class="text-muted">Total Denda</small>
                    <div class="fs-5 fw-bold text-danger">
                        Rp {{ number_format($denda->sum('jumlah_denda'), 0, ',', '.') }}
                    </div>
                </div>

                <div class="col-md-6">
                    <small class="text-muted">Status Pembayaran</small>
                    <div class="fs-5 fw-bold text-success">
                        {{ $denda->where('status', 'sudah_bayar')->count() }} / {{ $denda->count() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endif

    <!-- PAGINATION -->
    <div class="mt-4 d-flex justify-content-end">
        {{ $denda->links('pagination::bootstrap-5') }}
    </div>

</div>

<style>

/* TABLE HOVER */
.table tbody tr:hover {
    background: #f8fafc;
}

/* BADGE SOFT */
.badge-soft {
    display: inline-block;
    padding: 5px 10px;
    font-size: 12px;
    border-radius: 6px;
    font-weight: 500;
}

/* WARNA */
.badge-soft-success { background: rgba(16,185,129,.12); color:#065f46; }
.badge-soft-danger  { background: rgba(239,68,68,.12); color:#7f1d1d; }
.badge-soft-warning { background: rgba(245,158,11,.15); color:#92400e; }

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