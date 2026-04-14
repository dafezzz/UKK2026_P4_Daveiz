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
    <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- MASTER DATA -->
    <div class="sidebar-heading">Master Data</div>

    <li class="nav-item {{ request()->routeIs('pengarang.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('pengarang.index') }}">
            <i class="fas fa-user-edit"></i>
            <span>Data Pengarang</span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('penerbit.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('penerbit.index') }}">
            <i class="fas fa-building"></i>
            <span>Data Penerbit</span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('kategori.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('kategori.index') }}">
            <i class="fas fa-tags"></i>
            <span>Data Kategori</span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('kelas.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('kelas.index') }}">
            <i class="fas fa-school"></i>
            <span>Data Kelas</span>
        </a>
    </li>

    <!-- USER -->
    <div class="sidebar-heading">Manajemen User</div>

    <li class="nav-item {{ request()->routeIs('admin.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.index') }}">
            <i class="fas fa-user-shield"></i>
            <span>Admin</span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('petugas.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('petugas.index') }}">
            <i class="fas fa-user-tie"></i>
            <span>Petugas</span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('anggota.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('anggota.index') }}">
            <i class="fas fa-users"></i>
            <span>Anggota</span>
        </a>
    </li>

    <hr class="sidebar-divider border-light opacity-25">

    <!-- TRANSAKSI -->
    <div class="sidebar-heading">Transaksi</div>

    <!-- KATALOG -->
    <li class="nav-item {{ request()->routeIs('buku.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('buku.index') }}">
            <i class="fas fa-book"></i>
            <span>Katalog Buku</span>
        </a>
    </li>

    <!-- APPROVAL (INI YANG PENTING) -->
    <li class="nav-item {{ request()->routeIs('approval.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('approval.index') }}">
            <i class="fas fa-check-circle"></i>
            <span>Persetujuan</span>
        </a>
    </li>


    <!-- PENGEMBALIAN -->
    <li class="nav-item {{ request()->routeIs('pengembalian.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('pengembalian.index') }}">
            <i class="fas fa-undo"></i>
            <span>Pengembalian Buku</span>
        </a>
    </li>

    <hr class="sidebar-divider border-light opacity-25">

    <!-- LOG -->
    <li class="nav-item {{ request()->routeIs('logs.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('logs.index') }}">
            <i class="fas fa-history"></i>
            <span>Log Aktivitas</span>
        </a>
    </li>

</ul>