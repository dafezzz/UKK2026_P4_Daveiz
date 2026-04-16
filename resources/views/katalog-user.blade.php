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
}

/* HERO */
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

/* CARD */
.card {
    background: #ffffff;
    border: 1px solid rgba(15,23,42,0.08);
    border-radius: 16px;
    box-shadow: 0 10px 28px rgba(15,23,42,0.06);
}

/* KATEGORI */
.kategori-list li {
    padding: 12px 14px;
    border-radius: 12px;
    transition: 0.2s;
}

.kategori-list li:hover {
    background: #eef2ff;
}

.kategori-list li.active {
    font-weight: 600;
    background: #e0e7ff;
}

/* SEARCH */
.search-card {
    background: #ffffff;
    border: 1px solid rgba(15,23,42,0.08);
    border-radius: 16px;
    padding: 18px;
}

/* INPUT */
.form-control {
    background: #f8fafc;
    border-radius: 12px;
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
    transition: 0.25s;
    box-shadow: 0 6px 18px rgba(0,0,0,0.06);
    height: 100%;
}

.book-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.12);
}

/* IMAGE */
.book-img {
    width: 100%;
    height: 260px;
    object-fit: cover;
}

/* BODY */
.book-body {
    padding: 12px;
}

.book-title {
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 6px;
}

.book-meta {
    font-size: 12px;
    color: #6b7280;
}

/* BADGE */
.badge {
    font-size: 11px;
}

/* BUTTON */
.btn-sm {
    font-size: 12px;
    border-radius: 6px;
}
</style>

<div class="container py-3">

    <!-- HERO -->
    <div class="hero-img mb-4">
        <img src="{{ asset('images/gambar_katalog.png') }}">
    </div>

    <div class="row">

        <!-- SIDEBAR -->
        <div class="col-md-3">
            <div class="card p-3">

                <h6 class="fw-bold mb-3">Kategori</h6>

                <ul class="list-unstyled kategori-list">

                    <li class="{{ request('kategori') ? '' : 'active' }}">
                        <a href="{{ route('katalog.user') }}" class="text-decoration-none text-dark">
                            Semua Buku
                        </a>
                    </li>

                    @foreach($kategori as $k)
                    <li class="{{ request('kategori') == $k->id ? 'active' : '' }}">
                        <a href="{{ route('katalog.user', ['kategori' => $k->id]) }}"
                           class="text-decoration-none text-dark">
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
            <form method="GET" action="{{ route('katalog.user') }}"
                  class="search-card mb-3 d-flex gap-2">

                <input 
                    type="text" 
                    name="search"
                    value="{{ request('search') }}"
                    class="form-control"
                    placeholder="Cari buku...">

                <button class="btn btn-primary px-4">Cari</button>

            </form>

            <!-- GRID -->
            <div class="row g-4">

                @forelse($buku as $b)
                <div class="col-md-3 col-sm-6">

                    <div class="book-card">

                        <!-- IMAGE FIX -->
                        <img
                            src="{{ $b->cover ? asset('images/'.$b->cover) : 'https://via.placeholder.com/300x400' }}"
                            class="book-img">

                        <div class="book-body">

                            <div class="book-title">
                                {{ $b->judul }}
                            </div>

                            <div class="book-meta">
                                {{ $b->pengarang->nama ?? '-' }}
                            </div>

                            <!-- STATUS -->
                            <div class="mt-2">
                                @if($b->stok > 0)
                                    <span class="badge bg-success">Tersedia</span>
                                @else
                                    <span class="badge bg-danger">Habis</span>
                                @endif
                            </div>

                            <!-- BUTTON -->
                            @if($b->stok > 0)
                            <button 
                                class="btn btn-success btn-sm w-100 mt-2"
                                data-bs-toggle="modal"
                                data-bs-target="#ajukanPinjamModal"
                                data-buku-id="{{ $b->id }}"
                                data-buku-judul="{{ $b->judul }}">
                                Pinjam
                            </button>
                            @endif

                        </div>

                    </div>

                </div>
                @empty
                <div class="col-12 text-center text-muted">
                    Tidak ada buku
                </div>
                @endforelse

            </div>

            <!-- PAGINATION -->
            <div class="mt-4">
                {{ $buku->links() }}
            </div>

        </div>

    </div>

</div>

<!-- MODAL -->
<div class="modal fade" id="ajukanPinjamModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <form action="{{ route('peminjaman.store') }}" method="POST">
                @csrf

                <input type="hidden" name="buku_id" id="modalBukuId">

                <div class="modal-body text-center">
                    <p>Pinjam buku:</p>
                    <h6 id="modalBukuJudul"></h6>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button class="btn btn-success">Ya, Pinjam</button>
                </div>

            </form>

        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('ajukanPinjamModal');

    modal.addEventListener('show.bs.modal', function (event) {
        const btn = event.relatedTarget;

        document.getElementById('modalBukuId').value = btn.getAttribute('data-buku-id');
        document.getElementById('modalBukuJudul').innerText = btn.getAttribute('data-buku-judul');
    });
});
</script>

@endsection