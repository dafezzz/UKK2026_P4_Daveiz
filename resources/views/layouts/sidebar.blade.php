@php
    $role = auth()->user()->role;
@endphp

<ul class="navbar-nav sidebar sidebar-dark accordion shadow"
    id="accordionSidebar"
    style="width:260px; min-height:100vh; background:linear-gradient(180deg,#1e3c72 0%,#2a5298 100%);">

    <!-- Brand -->
    <a class="sidebar-brand d-flex align-items-center px-4 py-3 text-decoration-none"
       href="{{ route('dashboard') }}">
        <i class="fas fa-book-open me-2"></i>
        <span class="brand-text">Perpustakaan</span>
    </a>

    <hr class="sidebar-divider my-2 border-light opacity-25">

    <!-- Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>


    {{-- ================= ADMIN ================= --}}
    @if($role == 'admin')

    <div class="sidebar-heading">Master Data</div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('pengarang.index') }}">
            <i class="fas fa-user-edit"></i>
            <span>Data Pengarang</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('penerbit.index') }}">
            <i class="fas fa-building"></i>
            <span>Data Penerbit</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('kategori.index') }}">
            <i class="fas fa-tags"></i>
            <span>Data Kategori</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('kelas.index') }}">
            <i class="fas fa-school"></i>
            <span>Data Kelas</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('rak.index') }}">
            <i class="fas fa-layer-group"></i>
            <span>Rak Buku</span>
        </a>
    </li>

    <div class="sidebar-heading">Manajemen User</div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.index') }}">
            <i class="fas fa-user-shield"></i>
            <span>Admin</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('petugas.index') }}">
            <i class="fas fa-user-tie"></i>
            <span>Petugas</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('anggota.index') }}">
            <i class="fas fa-users"></i>
            <span>Anggota</span>
        </a>
    </li>

    @endif


    {{-- ================= ADMIN & PETUGAS ================= --}}
    @if($role == 'admin' || $role == 'petugas')

    <hr class="sidebar-divider border-light opacity-25">

    <div class="sidebar-heading">Transaksi</div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('buku.index') }}">
            <i class="fas fa-book"></i>
            <span>Katalog Buku</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('approval.index') }}">
            <i class="fas fa-check-circle"></i>
            <span>Persetujuan</span>
        </a>
    </li>

      {{-- @if($role == 'admin')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('pengembalian.index') }}">
            <i class="fas fa-undo"></i>
            <span>Pengembalian Buku</span>
        </a>
    </li>
    @endif --}}

      

<div class="sidebar-heading">Aktivitas Transaksi</div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('riwayat.admin') }}">
            <i class="fas fa-history"></i>
            <span>Riwayat transaksi</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('denda.semua') }}">
            <i class="fas fa-money-bill-wave"></i>
            <span>Riwayat Denda</span>
        </a>
    </li>

  

  

    @endif


    {{-- ================= PENGGUNA ================= --}}
    @if($role == 'pengguna')

    <hr class="sidebar-divider border-light opacity-25">

    <div class="sidebar-heading">Menu Pengguna</div>

    {{-- 🔥 sekarang pakai buku.index --}}
    <li class="nav-item">
        <a class="nav-link" href="{{ route('buku.index') }}">
            <i class="fas fa-book"></i>
            <span>Lihat Buku</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('pengembalian.index') }}">
            <i class="fas fa-undo"></i>
            <span>Pengembalian</span>
        </a>
    </li>

    @endif


    {{-- ================= KHUSUS ADMIN ================= --}}
    @if($role == 'admin')

    <hr class="sidebar-divider border-light opacity-25">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('logs.index') }}">
            <i class="fas fa-history"></i>
            <span>Log Aktivitas</span>
        </a>
    </li>

    @endif

</ul>