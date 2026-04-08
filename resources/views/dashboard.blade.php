@extends('layouts.app')

@section('content')
<div class="container">

    <h3 class="mb-4">Dashboard Admin</h3>

    <!-- STATISTIK -->
    <div class="row">

        <div class="col-md-3 mb-3">
            <div class="card shadow border-left-primary">
                <div class="card-body">
                    <h6>Total Buku</h6>
                    <h4>{{ $totalBuku }}</h4>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card shadow border-left-success">
                <div class="card-body">
                    <h6>Member</h6>
                    <h4>{{ $totalMember }}</h4>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card shadow border-left-info">
                <div class="card-body">
                    <h6>Peminjaman</h6>
                    <h4>{{ $totalPeminjaman }}</h4>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card shadow border-left-warning">
                <div class="card-body">
                    <h6>Pending</h6>
                    <h4>{{ $pending }}</h4>
                </div>
            </div>
        </div>

    </div>

    <!-- GRAFIK -->
    <div class="card shadow mb-4">
        <div class="card-header">Grafik Peminjaman</div>
        <div class="card-body">
            <canvas id="chartPeminjaman"></canvas>
        </div>
    </div>

    <div class="row">

        <!-- BUKU TERBARU -->
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header">Buku Terbaru</div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($books as $b)
                            <li class="list-group-item">
                                {{ $b->judul }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <!-- PEMINJAMAN -->
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header">Peminjaman Terbaru</div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($peminjaman as $p)
                            <li class="list-group-item">
                                {{ $p->nama_lengkap }} - {{ $p->status }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <!-- LOG -->
    <div class="card shadow">
        <div class="card-header">Aktivitas Terbaru</div>
        <div class="card-body">
            <ul class="list-group">
                @foreach($logs as $log)
                    <li class="list-group-item">
                        {{ $log->activity }}
                        <br>
                        <small>{{ $log->created_at }}</small>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

</div>

<!-- CHART --><script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('chartPeminjaman');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode($chart->keys()) !!},
            datasets: [{
                label: 'Peminjaman',
                data: {!! json_encode($chart->values()) !!}
            }]
        }
    });
</script>
@endsection