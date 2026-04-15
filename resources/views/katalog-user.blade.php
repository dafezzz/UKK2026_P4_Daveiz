@extends('layouts.app-user')

@section('content')

<style>
body {
    background: #f1f5f9;
    font-family: 'Segoe UI', sans-serif;
}

/* CONTAINER */
.container {
    max-width: 1200px !important;
}

/* NAVBAR */
.navbar-custom {
    background: white;
    padding: 14px 28px;
    border-radius: 16px;
    margin-bottom: 20px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.06);
}

/* 🔥 HERO JADI GAMBAR */
.hero-img img {
    height: 280px;
    object-fit: cover;
    border-radius: 18px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
}

/* SIDEBAR */
.card {
    border-radius: 16px !important;
    box-shadow: 0 6px 20px rgba(0,0,0,0.06) !important;
}

.kategori-list li {
    padding: 10px 12px;
    border-radius: 10px;
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
    background: white;
    border-radius: 16px;
    padding: 15px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.06);
}

/* INPUT */
.form-control {
    border-radius: 10px;
    border: 1px solid #e5e7eb;
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
}

.book-title {
    font-size: 14px;
    font-weight: 600;
    line-height: 1.4;
    height: 38px;
    overflow: hidden;
}

.book-meta {
    font-size: 12px;
    color: #6b7280;
}
</style>

<div class="container py-3">

  

    <!-- 🔥 HERO GAMBAR -->
    <div class="hero-img mb-4">
        <img src="{{ asset('images/gambar_katalog.png') }}" class="w-100">
    </div>

    <div class="row">

        <!-- SIDEBAR -->
        <div class="col-md-3">
            <div class="card border-0 p-3">

                <h6 class="fw-bold mb-3">📂 Kategori</h6>

                <ul class="list-unstyled kategori-list">

                    <li class="{{ request('kategori') ? '' : 'active' }}">
                        <a href="{{ route('katalog.user') }}" class="text-dark text-decoration-none">
                            Semua Buku
                        </a>
                    </li>

                    @foreach($kategori as $k)
                    <li class="{{ request('kategori') == $k->id ? 'active' : '' }}">
                        <a href="{{ route('katalog.user', ['kategori' => $k->id]) }}" class="text-dark text-decoration-none">
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

                    <a href="{{ route('buku.user.detail', $b->id) }}" class="text-decoration-none text-dark">
                        <div class="book-card">

                            <img 
                                src="{{ $b->cover ? asset('storage/'.$b->cover) : 'https://via.placeholder.com/300x400' }}" 
                                class="book-img">

                            <div class="book-body">
                                <div class="book-title">{{ $b->judul }}</div>

                                <div class="book-meta">
                                    {{ $b->pengarang->nama ?? '-' }}
                                </div>
                            </div>

                        </div>
                    </a>

                </div>
                @empty
                <div class="col-12 text-center text-muted">
                    Tidak ada buku ditemukan 😢
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

@endsection