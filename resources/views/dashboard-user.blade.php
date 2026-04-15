@extends('layouts.app-user')

@section('content')

<style>
/* ================= GLOBAL ================= */
body {
    background: #f1f5f9;
    font-family: 'Segoe UI', sans-serif;
}

.sidebar {
    display: none !important;
}

.container {
    max-width: 100% !important;
}

/* ================= NAVBAR ================= */
.navbar-custom {
    background: white;
    padding: 12px 30px;
    border-radius: 12px;
    margin-bottom: 20px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
}

.search-box {
    border-radius: 50px;
    border: none;
    padding: 10px 20px;
    background: #f1f5f9;
}

/* ================= HERO ================= */
.hero {
    background: linear-gradient(135deg,#1e3c72,#2a5298);
    color: white;
    border-radius: 16px;
    padding: 40px;
    position: relative;
    overflow: hidden;
}

.hero::after {
    content: '';
    position: absolute;
    right: -50px;
    top: -50px;
    width: 200px;
    height: 200px;
    background: rgba(255,255,255,0.1);
    border-radius: 50%;
}

.hero h3 {
    font-weight: 700;
}

/* ================= MENU ICON ================= */
.menu-icon .col {
    transition: 0.3s;
}

.menu-icon .col:hover {
    transform: translateY(-8px);
}

.menu-icon img {
    transition: 0.3s;
}

.menu-icon .col:hover img {
    transform: scale(1.15);
}

/* ================= SECTION ================= */
.section-title {
    font-weight: 700;
    margin-bottom: 15px;
}

/* ================= BOOK CARD ================= */
.book-card {
    min-width: 180px;
    background: white;
    border-radius: 14px;
    overflow: hidden;
    transition: 0.3s;
    box-shadow: 0 4px 10px rgba(0,0,0,0.05);
}

.book-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.1);
}

.book-img {
    height: 200px;
    object-fit: cover;
}

.book-body {
    padding: 10px;
}

.book-title {
    font-size: 14px;
    font-weight: 600;
}

.book-meta {
    font-size: 12px;
    color: gray;
}

/* ================= SCROLL ================= */
.scroll-x {
    display: flex;
    gap: 15px;
    overflow-x: auto;
    padding-bottom: 10px;
}

.scroll-x::-webkit-scrollbar {
    height: 6px;
}

.scroll-x::-webkit-scrollbar-thumb {
    background: #ccc;
    border-radius: 10px;
}

/* ================= BADGE ================= */
.badge-status {
    font-size: 11px;
    border-radius: 50px;
}

/* ================= HOVER EFFECT ================= */
.hover-glow:hover {
    box-shadow: 0 0 15px rgba(42,82,152,0.4);
}
</style>

<div class="container py-3">

```
<!-- NAVBAR -->
<div class="navbar-custom d-flex justify-content-between align-items-center">
    <h5 class="mb-0 fw-bold">📚 Perpustakaan Digital</h5>


    <div>
        <span class="me-3">👤 {{ auth()->user()->name }}</span>
    </div>
</div>


<!-- HERO -->
<div class="hero mb-4">
    <h3>Temukan Buku Favoritmu!</h3>
    <p>Akses ribuan buku, pinjam dengan mudah, dan kelola riwayatmu</p>
</div>
<!-- MENU -->
<div class="menu-icon mb-5">
    <div class="row text-center">

        <!-- KATALOG -->
        <div class="col">
            <a href="{{ route('katalog.user') }}" class="text-dark text-decoration-none">
                <img src="https://cdn-icons-png.flaticon.com/512/3145/3145765.png" width="60">
                <div class="small mt-2">Katalog Buku</div>
            </a>
        </div>

        <!-- PENGEMBALIAN -->
        <div class="col">
            <a href="{{ route('pengembalian.user') }}" class="text-dark text-decoration-none">
                <img src="https://cdn-icons-png.flaticon.com/512/992/992651.png" width="60">
                <div class="small mt-2">Pengembalian</div>
            </a>
        </div>

        <!-- RIWAYAT -->
        <div class="col">
            <a href="{{ route('riwayat.user') }}" class="text-dark text-decoration-none">
                <img src="https://cdn-icons-png.flaticon.com/512/2921/2921222.png" width="60">
                <div class="small mt-2">Riwayat</div>
            </a>
        </div>

        <!-- DENDA -->
        <div class="col">
            <a href="#" class="text-dark text-decoration-none">
                <img src="https://cdn-icons-png.flaticon.com/512/633/633611.png" width="60">
                <div class="small mt-2">Denda</div>
            </a>
        </div>

    </div>
</div>

<!-- BUKU TERBARU -->
<div class="mb-5">
    <div class="section-title">Buku Terbaru</div>

    <div class="scroll-x">
        @foreach($buku as $b)
        <div class="book-card hover-glow">
            <img src="https://via.placeholder.com/200x250" class="w-100 book-img">
            <div class="book-body">
                <div class="book-title">{{ $b->judul }}</div>
            </div>
        </div>
        @endforeach
    </div>
</div>


<!-- BUKU POPULER -->
<div class="mb-5">
    <div class="section-title">🔥 Buku Populer</div>

    <div class="scroll-x">
        @foreach($populer as $b)
        <div class="book-card hover-glow">
            <img src="https://via.placeholder.com/200x250" class="w-100 book-img">
            <div class="book-body">
                <div class="book-title">{{ $b->judul }}</div>
                <div class="book-meta">{{ $b->peminjaman_count }}x dipinjam</div>
            </div>
        </div>
        @endforeach
    </div>
</div>


<!-- RIWAYAT -->
<div class="mb-5">
    <div class="section-title">Riwayat Peminjaman</div>

    <div class="card shadow-sm border-0">
        <div class="card-body">

            @foreach($riwayat as $r)
            <div class="d-flex justify-content-between align-items-center border-bottom py-2">
                <div>{{ $r->buku->judul }}</div>
                <span class="badge bg-warning badge-status">{{ $r->status }}</span>
            </div>
            @endforeach

        </div>
    </div>
</div>
```

</div>

@endsection
