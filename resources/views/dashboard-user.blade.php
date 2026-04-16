@extends('layouts.app-user')

@section('content')

<style>/* ================= GLOBAL ================= */
body {
    background: #ffffff;
    font-family: 'Segoe UI', sans-serif;
    color: #2d3748;
}

/* WRAPPER */
.section-wrapper {
    background: #ffffff;
    padding: 30px 0 40px;
}

.container {
    max-width: 1200px;
}

/* ================= HERO ================= */
.hero-modern {
    padding: 50px 10px;
    border-bottom: 1px solid #f1f5f9; /* biar ada pembatas halus */
}

/* TEXT */
.hero-title {
    font-size: 32px;
    font-weight: 700;
    line-height: 1.4;
    color: #1e293b;
}

.hero-desc {
    font-size: 15px;
    color: #64748b;
    margin: 14px 0 24px;
    max-width: 480px;
}

/* IMAGE */
.hero-image {
    max-width: 420px;
    width: 100%;
    height: auto;
    object-fit: contain;
    transition: transform 0.3s ease;
}

.hero-image:hover {
    transform: translateY(-5px);
}

/* ================= MENU ================= */
.menu-box {
    background: #f8fafc;
    border-radius: 14px;
    padding: 20px;
    border: 1px solid #e5e7eb;
    box-shadow: 0 4px 14px rgba(0,0,0,0.03);
}

/* ITEM */
.menu-item {
    padding: 14px 8px;
    border-radius: 10px;
    text-align: center;
    transition: all 0.25s ease;
}

/* HOVER */
.menu-item:hover {
    background: #f1f5f9;
    transform: translateY(-3px);
    box-shadow: 0 6px 12px rgba(0,0,0,0.05);
}

/* ICON */
.menu-icon {
    width: 42px;
    height: 42px;
    margin-bottom: 8px;
    opacity: 0.85;
    transition: 0.2s;
}

/* TEXT */
.menu-label {
    font-size: 13px;
    font-weight: 500;
    color: #334155;
    transition: 0.2s;
}

/* ACTIVE */
.menu-item-link.active .menu-item {
    background: #eff6ff;
    border: 1px solid #bfdbfe;
}

.menu-item-link.active .menu-icon {
    opacity: 1;
    transform: scale(1.05);
}

.menu-item-link.active .menu-label {
    color: #1d4ed8;
    font-weight: 600;
}

/* ================= SECTION ================= */
.section-title {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 12px;
    color: #1e293b;
}

/* ================= BOOK ================= */
.book-scroll {
    display: flex;
    gap: 14px;
    overflow-x: auto;
    padding-bottom: 8px;
}

/* CARD */
.book-card {
    min-width: 160px;
    background: #ffffff;
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid #e5e7eb;
    transition: all 0.2s ease;
}

/* HOVER */
.book-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 22px rgba(0,0,0,0.08);
}

/* IMAGE */
.book-img {
    height: 200px;
    object-fit: cover;
}

/* BODY */
.book-body {
    padding: 10px;
}

.book-title {
    font-size: 13px;
    font-weight: 600;
}

.book-meta {
    font-size: 11px;
    color: #6b7280;
}

/* ================= RIWAYAT ================= */
.riwayat-card {
    background: #f8fafc; /* disamain kayak menu */
    border-radius: 12px;
    border: 1px solid #e5e7eb;
    overflow: hidden;
}

.riwayat-item {
    padding: 14px 16px;
    border-bottom: 1px solid #e5e7eb;
    background: white;
}

.riwayat-item:last-child {
    border-bottom: none;
}

/* STATUS */
.status-badge {
    font-size: 11px;
    padding: 4px 10px;
    border-radius: 20px;
}

.status-dipinjam { background: #dbeafe; color: #1e40af; }
.status-pengembalian { background: #fef3c7; color: #92400e; }
.status-dikembalikan { background: #dcfce7; color: #166534; }

/* BUTTON */
.btn-sm {
    font-size: 12px;
    border-radius: 6px;
}
</style>

<div class="section-wrapper">
<div class="container">

<!-- HERO -->
<div class="hero-modern mb-4">
    <div class="row align-items-center">

        <div class="col-md-6">
            <h2 class="hero-title">
                Aplikasi Perpustakaan Online 
                <span class="text-primary">Modern</span>
                untuk Generasi Digital
            </h2>

            <p class="hero-desc">
                Platform perpustakaan digital untuk memudahkan akses buku, 
                pengelolaan peminjaman, serta riwayat aktivitas secara efisien.
            </p>

            <a href="{{ route('katalog.user') }}" class="btn btn-primary px-4 py-2">
                Jelajahi Katalog
            </a>
        </div>

        <div class="col-md-6 text-center">
            <img src="{{ asset('images/dafezlib.png') }}" class="hero-image">
        </div>

    </div>
</div>

<!-- MENU -->
<div class="menu-box mb-4">
    <div class="row text-center">

        <div class="col">
            <a href="{{ route('katalog.user') }}" class="menu-item-link {{ request()->routeIs('katalog.user') ? 'active' : '' }}">
                <div class="menu-item">
                    <img src="https://cdn-icons-png.flaticon.com/512/3145/3145765.png" class="menu-icon">
                    <div class="menu-label">Katalog</div>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="{{ route('pengembalian.user') }}" class="menu-item-link {{ request()->routeIs('pengembalian.user') ? 'active' : '' }}">
                <div class="menu-item">
                    <img src="https://cdn-icons-png.flaticon.com/512/992/992651.png" class="menu-icon">
                    <div class="menu-label">Pengembalian</div>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="{{ route('riwayat.mine') }}" class="menu-item-link {{ request()->routeIs('riwayat.mine') ? 'active' : '' }}">
                <div class="menu-item">
                    <img src="https://cdn-icons-png.flaticon.com/512/2921/2921222.png" class="menu-icon">
                    <div class="menu-label">Riwayat</div>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="{{ route('denda.mine') }}" class="menu-item-link {{ request()->routeIs('denda.mine') ? 'active' : '' }}">
                <div class="menu-item">
                    <img src="https://cdn-icons-png.flaticon.com/512/633/633611.png" class="menu-icon">
                    <div class="menu-label">Denda</div>
                </div>
            </a>
        </div>

    </div>
</div>

<!-- BUKU TERBARU -->
<div class="mb-4">
    <div class="section-title">Buku Terbaru</div>

    <div class="book-scroll">
        @foreach($buku as $b)
        <div class="book-card">
            <img src="{{ $b->cover ? asset('storage/'.$b->cover) : 'https://via.placeholder.com/200x250' }}" class="w-100 book-img">
            <div class="book-body">
                <div class="book-title">{{ $b->judul }}</div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- BUKU POPULER -->
<div class="mb-4">
    <div class="section-title">Buku Populer</div>

    <div class="book-scroll">
        @foreach($populer as $b)
        <div class="book-card">
            <img src="{{ $b->cover ? asset('storage/'.$b->cover) : 'https://via.placeholder.com/200x250' }}" class="w-100 book-img">
            <div class="book-body">
                <div class="book-title">{{ $b->judul }}</div>
                <div class="book-meta">{{ $b->peminjaman_count }} kali dipinjam</div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- RIWAYAT -->
<div class="mb-5">
    <div class="section-title">Riwayat Peminjaman</div>

    <div class="riwayat-card">
        @foreach($riwayat as $r)
        <div class="riwayat-item d-flex justify-content-between align-items-center">

            <div>
                <div class="fw-semibold">{{ $r->buku->judul }}</div>
                <div class="text-muted small">{{ ucfirst($r->status) }}</div>
            </div>

            <div class="text-end">
                <span class="status-badge status-{{ $r->status }}">
                    {{ ucfirst($r->status) }}
                </span>

                @if($r->status === 'dipinjam')
                <form action="{{ route('pengembalian.user.store', $r->id) }}" method="POST" class="mt-2">
                    @csrf
                    <button class="btn btn-outline-primary btn-sm">
                        Ajukan Pengembalian
                    </button>
                </form>
                @endif
            </div>

        </div>
        @endforeach
    </div>
</div>

</div>
</div>

@endsection