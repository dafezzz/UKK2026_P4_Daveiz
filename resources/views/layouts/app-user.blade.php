<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perpustakaan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f1f5f9;
            font-family: 'Segoe UI', sans-serif;
        }

        /* MENU */
        .navbar .nav-link {
            background: rgba(255,255,255,0.15);
            color: #ffffff !important;
            padding: 8px 16px;
            border-radius: 999px;
            margin-right: 8px;
            font-size: 14px;
            transition: 0.2s;
        }

        /* HOVER */
        .navbar .nav-link:hover {
            background: rgba(255,255,255,0.3);
        }

        /* ACTIVE */
        .navbar .nav-link.active {
            background: #ffffff;
            color: #1e3a8a !important;
            font-weight: 600;
        }

        /* USER */
        .user-box {
            color: white;
            font-size: 14px;
        }

        /* CONTAINER */
        .main-container {
            max-width: 1200px;
            margin: auto;
        }

        /* FOOTER */
        .footer {
            text-align: center;
            font-size: 13px;
            color: #64748b;
            margin: 40px 0 10px;
        }
    </style>
</head>
<body>

<!-- 🔥 NAVBAR (INLINE = ANTI GAGAL) -->
<nav class="navbar navbar-expand-lg navbar-dark shadow"
     style="background: linear-gradient(135deg,#1e3a8a,#2563eb) !important;">

    <div class="container main-container">

        <!-- LOGO -->
        <a class="navbar-brand text-white fw-bold" href="{{ route('dashboard') }}">
            Perpustakaan Digital
        </a>

        <!-- TOGGLE -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarUser">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarUser">

            <!-- MENU -->
            <ul class="navbar-nav me-auto ms-3">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" 
                       href="{{ route('dashboard') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('katalog*') ? 'active' : '' }}" 
                       href="{{ route('katalog.user') }}">
                        Katalog
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('riwayat*') ? 'active' : '' }}" 
                       href="{{ route('riwayat.user') }}">
                        Riwayat
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('pengembalian*') ? 'active' : '' }}" 
                       href="{{ route('pengembalian.user') }}">
                        Pengembalian
                    </a>
                </li>

            </ul>

            <!-- USER -->
            <div class="d-flex align-items-center gap-2">
                <span class="user-box">
                    👤 {{ auth()->user()->name }}
                </span>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-sm btn-light">Logout</button>
                </form>
            </div>

        </div>
    </div>
</nav>

<!-- CONTENT -->
<div class="container main-container mt-4">
    @yield('content')
</div>

<!-- FOOTER -->
<div class="footer">
    © {{ date('Y') }} Perpustakaan Digital • Laravel System
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>