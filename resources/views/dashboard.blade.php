@extends('layouts.app')

@section('content')
@php
    $role = auth()->user()->role;
@endphp

<div class="container">

{{-- ================= ADMIN ================= --}}
@if($role == 'admin')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h3>Dashboard Admin</h3>
    <small class="text-muted">Overview sistem perpustakaan</small>
</div>

<!-- KPI -->
<div class="row">

    <div class="col-md-3 mb-3">
        <div class="card shadow border-left-primary h-100">
            <div class="card-body">
                <small class="text-muted">Total Buku</small>
                <h3 class="fw-bold">{{ $totalBuku }}</h3>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card shadow border-left-success h-100">
            <div class="card-body">
                <small class="text-muted">Member</small>
                <h3 class="fw-bold">{{ $totalMember }}</h3>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card shadow border-left-info h-100">
            <div class="card-body">
                <small class="text-muted">Peminjaman</small>
                <h3 class="fw-bold">{{ $totalPeminjaman }}</h3>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card shadow border-left-warning h-100">
            <div class="card-body">
                <small class="text-muted">Pending</small>
                <h3 class="fw-bold text-warning">{{ $pending }}</h3>
            </div>
        </div>
    </div>

</div>

<!-- CHART -->
<div class="row">

    <div class="col-md-8">
        <div class="card shadow mb-4">
            <div class="card-header fw-bold">Trend Peminjaman</div>
            <div class="card-body">
                <canvas id="chartPeminjaman"></canvas>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow mb-4">
            <div class="card-header fw-bold">Status</div>
            <div class="card-body">
                <canvas id="chartStatus"></canvas>
            </div>
        </div>
    </div>

</div>

<div class="row">

    <div class="col-md-6">
        <div class="card shadow mb-4">
            <div class="card-header fw-bold">Top Buku</div>
            <div class="card-body">
                <canvas id="chartBuku"></canvas>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card shadow mb-4">
            <div class="card-header fw-bold">Aktivitas</div>
            <div class="card-body" style="max-height:300px; overflow:auto;">
                <ul class="list-group list-group-flush">
                    @foreach($logs as $log)
                        <li class="list-group-item small">
                            {{ $log->activity }}
                            <br>
                            <span class="text-muted">{{ $log->created_at }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

</div>

@endif



{{-- ================= PETUGAS ================= --}}
@if($role == 'petugas')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h3>Dashboard Petugas</h3>
    <small class="text-muted">Monitoring transaksi</small>
</div>

<!-- KPI -->
<div class="row">

    <div class="col-md-6 mb-3">
        <div class="card shadow border-left-info h-100">
            <div class="card-body">
                <small class="text-muted">Peminjaman</small>
                <h3 class="fw-bold">{{ $totalPeminjaman }}</h3>
            </div>
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <div class="card shadow border-left-warning h-100">
            <div class="card-body">
                <small class="text-muted">Pending</small>
                <h3 class="fw-bold text-warning">{{ $pending }}</h3>
            </div>
        </div>
    </div>

</div>

<!-- ACTION -->
<div class="card shadow mb-4">
    <div class="card-header fw-bold">Aksi Cepat</div>
    <div class="card-body">
        <a href="{{ route('approval.index') }}" class="btn btn-primary">Approval</a>
        <a href="{{ route('buku.index') }}" class="btn btn-success">Buku</a>
    </div>
</div>

<!-- DATA -->
<div class="card shadow">
    <div class="card-header fw-bold">Peminjaman</div>
    <div class="card-body">
        <ul class="list-group">
            @foreach($peminjaman as $p)
                <li class="list-group-item d-flex justify-content-between">
                    {{ $p->nama_lengkap }}
                    <span class="badge bg-warning">{{ $p->status }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</div>

@endif

</div>



{{-- ================= CHART ================= --}}
@if($role == 'admin')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>

Chart.defaults.plugins.legend.position = 'bottom';

// trend
new Chart(document.getElementById('chartPeminjaman'), {
    type: 'line',
    data: {
        labels: {!! json_encode($chart->keys()) !!},
        datasets: [{
            label: 'Peminjaman',
            data: {!! json_encode($chart->values()) !!},
            tension: 0.4,
            fill: true
        }]
    }
});

// status
new Chart(document.getElementById('chartStatus'), {
    type: 'doughnut',
    data: {
        labels: ['Pending','Dipinjam','Kembali'],
        datasets: [{
            data: [{{ $pending }}, {{ $dipinjam }}, {{ $kembali }}]
        }]
    }
});

// top buku
new Chart(document.getElementById('chartBuku'), {
    type: 'bar',
    data: {
        labels: {!! json_encode($topBuku->pluck('judul')) !!},
        datasets: [{
            label: 'Dipinjam',
            data: {!! json_encode($topBuku->pluck('total')) !!}
        }]
    },
    options: {
        indexAxis: 'y'
    }
});

</script>

@endif

@endsection