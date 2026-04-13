<ul class="navbar-nav sidebar sidebar-dark accordion shadow-sm"
    id="accordionSidebar"
    style="width: 220px; min-height: 100vh; background: linear-gradient(180deg, #1e3c72 0%, #2a5298 100%);">

    <!-- Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center py-3"
       href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-book-open text-white"></i>
        </div>
        <div class="sidebar-brand-text mx-2 fw-bold text-white">
            Perpustakaan
        </div>
    </a>

    <hr class="sidebar-divider my-2 border-light">

    <!-- Dashboard -->
    <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider border-light">

    <!-- MASTER DATA -->
    <div class="sidebar-heading text-white small px-3">
        MASTER DATA
    </div>

    <!-- Pengarang -->
    <li class="nav-item {{ request()->routeIs('pengarang.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('pengarang.index') }}">
            <i class="fas fa-user-edit"></i>
            <span>Pengarang</span>
        </a>
    </li>

     <li class="nav-item {{ request()->routeIs('kategori.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('kategori.index') }}">
            <i class="fas fa-user-edit"></i>
            <span>Kategori</span>
        </a>
    </li>

    <!-- anggota -->
    <li class="nav-item {{ request()->routeIs('anggota.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('anggota.index') }}">
            <i class="fas fa-book"></i>
            <span>anggota</span>
        </a>
    </li>

      <li class="nav-item {{ request()->routeIs('kelas.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('kelas.index') }}">
            <i class="fas fa-book"></i>
            <span>kelas</span>
        </a>
    </li>


    <hr class="sidebar-divider border-light">

    <!-- TRANSAKSI -->
    <div class="sidebar-heading text-white small px-3">
        TRANSAKSI
    </div>

    <!-- Peminjaman -->
    <li class="nav-item {{ request()->routeIs('peminjaman.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('peminjaman.index') }}">
            <i class="fas fa-book-reader"></i>
            <span>Peminjaman</span>
        </a>
    </li>

    <!-- Pengembalian -->
    <li class="nav-item {{ request()->routeIs('pengembalian.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('pengembalian.index') }}">
            <i class="fas fa-undo"></i>
            <span>Pengembalian</span>
        </a>
    </li>

    <hr class="sidebar-divider border-light">

    <!-- LOG -->
    <li class="nav-item {{ request()->routeIs('logs.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('logs.index') }}">
            <i class="fas fa-history"></i>
            <span>Activity Log</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block border-light">

    <!-- Toggle -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>

<style>
/* Sidebar nuansa biru modern */
.sidebar .nav-item .nav-link {
    transition: all 0.25s ease;
    color: rgba(255, 255, 255, 0.85);
    font-size: 0.85rem;
    padding: 0.55rem 1rem;
}
.sidebar .nav-item .nav-link:hover,
.sidebar .nav-item.active .nav-link {
    background-color: rgba(255, 255, 255, 0.12);
    border-radius: 0.4rem;
    color: #fff;
}
.collapse-inner .collapse-item {
    transition: all 0.25s ease;
    color: #333;
    font-size: 0.82rem;
}
.collapse-inner .collapse-item:hover,
.collapse-inner .collapse-item.active {
    background-color: rgba(66, 133, 244, 0.12);
    color: #1a73e8;
    border-radius: 0.4rem;
}
.sidebar-heading {
    letter-spacing: 0.05em;
    font-size: 0.75rem;
    padding-left: 1rem;
    margin-top: 0.8rem;
}
</style>
