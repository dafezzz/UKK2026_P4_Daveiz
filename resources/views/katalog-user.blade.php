@extends('layouts.app-user')

@section('content')

<style>
body {
    background: #eef2f7;
    color: #0f172a;
    font-family: 'Segoe UI', sans-serif;
}

/* CONTAINER */
.container {
    max-width: 1200px !important;
    background: transparent;
}

/* NAVBAR */
.navbar-custom {
    background: #ffffff;
    padding: 14px 28px;
    border-radius: 16px;
    margin-bottom: 20px;
    box-shadow: 0 6px 20px rgba(15,23,42,0.08);
}

/* 🔥 HERO JADI GAMBAR */
.hero-img {
    background: #ffffff;
    padding: 16px;
    border-radius: 18px;
    box-shadow: 0 10px 30px rgba(15,23,42,0.08);
}

.hero-img img {
    width: 100%;
    height: 280px;
    object-fit: cover;
    border-radius: 14px;
}

/* SIDEBAR */
.card {
    background: #ffffff !important;
    border: 1px solid rgba(15,23,42,0.08) !important;
    border-radius: 16px !important;
    box-shadow: 0 10px 28px rgba(15,23,42,0.06) !important;
}

.kategori-list li {
    padding: 12px 14px;
    border-radius: 12px;
    transition: 0.2s;
    font-size: 14px;
}

.kategori-list li:hover {
    background: #eef2ff;
}

.kategori-list li.active {
    font-weight: 600;
    color: #1e3c72;
    background: #e0e7ff;
}

/* SEARCH */
.search-card {
    background: #ffffff;
    border: 1px solid rgba(15,23,42,0.08);
    border-radius: 16px;
    padding: 18px;
    box-shadow: 0 10px 28px rgba(15,23,42,0.06);
}

/* INPUT */
.form-control {
    background: #f8fafc;
    border-radius: 12px;
    border: 1px solid #d1d5db;
}

/* GRID */
.row.g-4 {
    --bs-gutter-x: 20px;
    --bs-gutter-y: 20px;
}

/* BOOK CARD */
.book-card {
    border-radius: 18px;
    overflow: hidden;
    background: white;
    transition: 0.25s ease;
    cursor: pointer;
    box-shadow: 0 6px 18px rgba(0,0,0,0.06);
    height: 100%;
    display: flex;
    flex-direction: column;
}

.book-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.12);
}

/* IMAGE */
.book-img {
    width: 100%;
    height: 240px;
    object-fit: cover;
}

/* BODY */
.book-body {
    padding: 12px;
    flex: 1;
    display: flex;
    flex-direction: column;
}

.book-title {
    font-size: 14px;
    font-weight: 600;
    line-height: 1.4;
    height: 38px;
    overflow: hidden;
    margin-bottom: 8px;
}

.book-meta {
    font-size: 12px;
    color: #6b7280;
    margin-bottom: 8px;
}

/* BADGE */
.badge {
    font-size: 11px;
    padding: 4px 8px;
}

/* BUTTONS */
.btn-sm {
    font-size: 12px;
    padding: 6px 12px;
    border-radius: 6px;
}

.d-grid .btn {
    margin-bottom: 4px;
}

.d-grid .btn:last-child {
    margin-bottom: 0;
}
</style>

<div class="container py-3">

    <!-- ALERT MESSAGES -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>✅ Sukses!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>❌ Error!</strong> {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    <!-- 🔥 HERO GAMBAR -->
    <div class="hero-img mb-4">
        <img src="{{ asset('images/gambar_katalog.png') }}" class="w-100">
    </div>

    <div class="row">

        <!-- SIDEBAR -->
        <div class="col-md-3">
            <div class="card border-0 p-3">

                <h6 class="fw-bold mb-3"> Kategori</h6>

                <ul class="list-unstyled kategori-list">

                    <li class="{{ request('kategori') ? '' : 'active' }}">
                        <a href="{{ route('katalog.user', request()->except('kategori')) }}" class="d-block text-dark text-decoration-none">
                            Semua Buku
                        </a>
                    </li>

                    @foreach($kategori as $k)
                    <li class="{{ request('kategori') == $k->id ? 'active' : '' }}">
                        <a href="{{ route('katalog.user', array_merge(request()->query(), ['kategori' => $k->id])) }}" class="d-block text-dark text-decoration-none">
                            {{ $k->nama }}
                        </a>
                    </li>
                    @endforeach

                </ul>

            </div>
        </div>

        <!-- CONTENT -->
        <div class="col-md-9">

            <!-- SEARCH -->
            <form method="GET" action="{{ route('katalog.user') }}" class="search-card mb-3 d-flex gap-2 align-items-center">

                <input 
                    type="text" 
                    name="search"
                    value="{{ request('search') }}"
                    class="form-control" 
                    placeholder="Cari judul buku...">

                @if(request('kategori'))
                    <input type="hidden" name="kategori" value="{{ request('kategori') }}">
                @endif

                <button class="btn btn-primary px-4">Cari</button>

            </form>

            <div class="mb-3">
                <small>
                    Hasil:
                    @if(request('search'))
                        "{{ request('search') }}"
                    @elseif(request('kategori'))
                        Kategori terpilih
                    @else
                        Semua Buku
                    @endif
                </small>
            </div>

            <!-- GRID -->
            <div class="row g-4">

                @forelse($buku as $b)
                <div class="col-md-3 col-sm-6">

                    <div class="book-card">

                        <img
                            src="{{ $b->cover ? asset('storage/'.$b->cover) : 'https://via.placeholder.com/300x400' }}"
                            class="book-img">

                        <div class="book-body">
                            <div class="book-title">{{ $b->judul }}</div>

                            <div class="book-meta mb-2">
                          <small class="text-muted d-block" style="line-height: 1.6;">
    <div><span class="fw-semibold text-dark">Pengarang</span> : {{ $b->pengarang->nama ?? '-' }}</div>
    <div><span class="fw-semibold text-dark">Penerbit</span> : {{ $b->penerbit->nama ?? '-' }}</div>
    <div><span class="fw-semibold text-dark">Kategori</span> : {{ $b->kategori->nama ?? '-' }}</div>
    @if($b->rak)
    <div><span class="fw-semibold text-dark">Lokasi Rak</span> : {{ $b->rak->kode_rak }}</div>
    @endif
</small>
                            </div>

                            <!-- STATUS STOK -->
                            <div class="mb-2">
                                @if($b->stok > 0)
                                    <span class="badge bg-success">✅ Tersedia ({{ $b->stok }})</span>
                                @else
                                    <span class="badge bg-danger">❌ Stok Habis</span>
                                @endif
                            </div>

                            <!-- ACTION BUTTONS -->
                            <div class="d-grid gap-1">
                                @if($b->stok > 0)
                                <button type="button" class="btn btn-success btn-sm w-100"
                                        data-bs-toggle="modal"
                                        data-bs-target="#ajukanPinjamModal"
                                        data-buku-id="{{ $b->id }}"
                                        data-buku-judul="{{ $b->judul }}">
                                    Ajukan Peminjaman
                                </button>
                                @endif
                            </div>
                        </div>

                    </div>

                </div>
                @empty
                <div class="col-12 text-center text-muted">
                    Tidak ada buku ditemukan 😢
                </div>
                @endforelse

            </div>

            <!-- MODAL AJUKAN PINJAM -->
            <div class="modal fade" id="ajukanPinjamModal" tabindex="-1" aria-labelledby="ajukanPinjamModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ajukanPinjamModalLabel">Ajukan Peminjaman</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('peminjaman.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="buku_id" id="modalBukuId" value="">
                            <div class="modal-body">
                                <p>Apakah kamu yakin ingin mengajukan peminjaman buku:</p>
                                <p class="fw-bold" id="modalBukuJudul"></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-success">Ajukan Pinjam</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- PAGINATION -->
            <div class="mt-4">
                {{ $buku->links() }}
            </div>

        </div>

    </div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ajukanModal = document.getElementById('ajukanPinjamModal');

        if (!ajukanModal) return;

        ajukanModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var bukuId = button.getAttribute('data-buku-id');
            var bukuJudul = button.getAttribute('data-buku-judul');

            ajukanModal.querySelector('#modalBukuId').value = bukuId;
            ajukanModal.querySelector('#modalBukuJudul').textContent = bukuJudul;
        });
    });
</script>

@endsection