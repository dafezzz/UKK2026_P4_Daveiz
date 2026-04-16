@extends('layouts.app-user')

@section('content')

<style>
/* ================= GLOBAL ================= */
body {
    background: #f5f7fa;
    font-family: 'Segoe UI', sans-serif;
    color: #2d3748;
}

.container {
    max-width: 1200px;
}

/* ================= TOPBAR ================= */
.topbar {
    background: #ffffff;
    padding: 14px 24px;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    margin-bottom: 20px;
}

.topbar-title {
    font-weight: 600;
    font-size: 16px;
}

.topbar-user {
    font-size: 14px;
    color: #4a5568;
}

/* ================= HERO ================= */
.hero {
    background: linear-gradient(135deg, #1e3a8a, #2563eb);
    border-radius: 14px;
    padding: 32px;
    color: white;
    margin-bottom: 30px;
}

.hero h3 {
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 6px;
}

.hero p {
    font-size: 14px;
    opacity: 0.9;
}

/* ================= MENU ================= */
.menu-box {
    background: white;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.menu-item {
    text-align: center;
    transition: 0.2s;
}

.menu-item:hover {
    transform: translateY(-4px);
}

.menu-icon {
    width: 42px;
    height: 42px;
    margin-bottom: 8px;
    opacity: 0.8;
}

.menu-label {
    font-size: 13px;
    font-weight: 500;
    color: #2d3748;
}

/* ================= SECTION ================= */
.section-title {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 12px;
}

/* ================= BOOK ================= */
.book-scroll {
    display: flex;
    gap: 14px;
    overflow-x: auto;
    padding-bottom: 8px;
}

.book-card {
    min-width: 160px;
    background: white;
    border-radius: 10px;
    overflow: hidden;
    border: 1px solid #e5e7eb;
    transition: 0.2s;
}

.book-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 18px rgba(0,0,0,0.08);
}

.book-img {
    height: 200px;
    object-fit: cover;
}

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
    background: white;
    border-radius: 12px;
    border: 1px solid #e5e7eb;
}

.riwayat-item {
    padding: 14px 16px;
    border-bottom: 1px solid #f1f1f1;
}

.riwayat-item:last-child {
    border-bottom: none;
}

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

/* LINK WRAPPER */
.menu-item-link {
    text-decoration: none;
    display: block;
    border-radius: 10px;
}

/* CARD MENU */
.menu-item {
    padding: 12px 8px;
    border-radius: 10px;
    transition: all 0.2s ease;
}

/* HOVER */
.menu-item-link:hover .menu-item {
    background: #f1f5f9;
    transform: translateY(-3px);
}

/* CLICK EFFECT */
.menu-item-link:active .menu-item {
    transform: scale(0.95);
    background: #e2e8f0;
}

/* ACTIVE MENU */
.menu-item-link.active .menu-item {
    background: #e0edff;
    border: 1px solid #2563eb;
}

/* ICON ACTIVE */
.menu-item-link.active .menu-icon {
    filter: brightness(0) saturate(100%) invert(27%) sepia(96%) saturate(749%) hue-rotate(200deg);
}

/* TEXT ACTIVE */
.menu-item-link.active .menu-label {
    color: #1e40af;
    font-weight: 600;
}

</style>

<div class="container py-3">

    <!-- TOPBAR -->
    <div class="topbar d-flex justify-content-between align-items-center">
        <div class="topbar-title">Perpustakaan Digital</div>
        <div class="topbar-user">
            {{ auth()->user()->name }}
        </div>
    </div>

    <!-- HERO -->
    <div class="hero">
        <h3>Selamat Datang</h3>
        <p>Kelola peminjaman buku dan pantau aktivitas Anda dengan mudah.</p>
    </div>

    <!-- MENU -->
    <div class="menu-box mb-4">
        <div class="row text-center">

            <div class="col">
    <a href="{{ route('katalog.user') }}" 
       class="menu-item-link {{ request()->routeIs('katalog.user') ? 'active' : '' }}">
        <div class="menu-item">
            <img src="https://cdn-icons-png.flaticon.com/512/3145/3145765.png" class="menu-icon">
            <div class="menu-label">Katalog</div>
        </div>
    </a>
</div>

<div class="col">
    <a href="{{ route('pengembalian.user') }}" 
       class="menu-item-link {{ request()->routeIs('pengembalian.user') ? 'active' : '' }}">
        <div class="menu-item">
            <img src="https://cdn-icons-png.flaticon.com/512/992/992651.png" class="menu-icon">
            <div class="menu-label">Pengembalian</div>
        </div>
    </a>
</div>

<div class="col">
    <a href="{{ route('riwayat.mine') }}" 
       class="menu-item-link {{ request()->routeIs('riwayat.mine') ? 'active' : '' }}">
        <div class="menu-item">
            <img src="https://cdn-icons-png.flaticon.com/512/2921/2921222.png" class="menu-icon">
            <div class="menu-label">Riwayat</div>
        </div>
    </a>
</div>

<div class="col">
    <a href="{{ route('denda.mine') }}" 
       class="menu-item-link {{ request()->routeIs('denda.mine') ? 'active' : '' }}">
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

@endsection