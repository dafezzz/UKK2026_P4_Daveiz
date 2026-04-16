<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perpustakaan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            background: #ffffff;
            font-family: 'Segoe UI', -apple-system, BlinkMacSystemFont, sans-serif;
            color: #1f2937;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* NAVBAR */
        .navbar {
            background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%) !important;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            padding: 12px 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .navbar-brand {
            font-size: 18px;
            font-weight: 700;
            letter-spacing: 0.5px;
            color: #ffffff !important;
        }

        /* NAVBAR MENU */
        .navbar .nav-link {
            background: rgba(255, 255, 255, 0.15);
            color: #ffffff !important;
            padding: 8px 16px;
            border-radius: 6px;
            margin-right: 8px;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
            border: 1px solid transparent;
        }

        .navbar .nav-link:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-1px);
        }

        .navbar .nav-link.active {
            background: rgba(255, 255, 255, 0.95);
            color: #1e3a8a !important;
            font-weight: 600;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        /* USER INFO */
        .user-box {
            color: rgba(255, 255, 255, 0.9);
            font-size: 13px;
            font-weight: 500;
        }

        .btn-logout {
            background: rgba(255, 255, 255, 0.2) !important;
            border: 1px solid rgba(255, 255, 255, 0.3) !important;
            color: white !important;
            padding: 6px 14px;
            font-size: 13px;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .btn-logout:hover {
            background: rgba(255, 255, 255, 0.3) !important;
            border-color: rgba(255, 255, 255, 0.5) !important;
        }

        /* MAIN CONTENT */
        .main-container {
            max-width: 1200px;
            margin: auto;
            padding: 0 16px;
        }

        .content-wrapper {
            flex: 1;
            padding: 32px 0;
            background: #ffffff;
        }

        /* CARD STYLES */
        .card {
            background: #ffffff !important;
            border: 1px solid #e5e7eb !important;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05) !important;
            border-radius: 8px !important;
            transition: all 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08) !important;
        }

        /* SECTIONS & CONTAINERS */
        .section {
            background: #ffffff;
            padding: 24px;
            border-radius: 8px;
            border: 1px solid #e5e7eb;
            margin-bottom: 24px;
        }

        .section-header {
            border-bottom: 1px solid #e5e7eb;
            padding-bottom: 16px;
            margin-bottom: 20px;
        }

        /* FOOTER */
        .footer {
            text-align: center;
            font-size: 12px;
            color: #6b7280;
            padding: 24px 16px 16px;
            border-top: 1px solid #e5e7eb;
            background: #ffffff;
            margin-top: auto;
        }

        /* FORMS */
        .form-control, .form-select {
            border: 1px solid #e5e7eb;
            border-radius: 6px;
            padding: 8px 12px;
            font-size: 14px;
        }

        .form-control:focus, .form-select:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        /* BUTTONS */
        .btn {
            border-radius: 6px;
            font-weight: 500;
            transition: all 0.3s ease;
            border: none;
        }

        .btn-primary {
            background: #2563eb;
            border: 1px solid #2563eb;
        }

        .btn-primary:hover {
            background: #1d4ed8;
            border-color: #1d4ed8;
        }

        .btn-outline-primary {
            color: #2563eb;
            border: 1px solid #2563eb;
        }

        .btn-outline-primary:hover {
            background: #f3f4f6;
        }

        /* ALERTS */
        .alert {
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            font-size: 14px;
        }

        .alert-success {
            background: #f0fdf4;
            border-color: #dcfce7;
            color: #166534;
        }

        .alert-danger {
            background: #fef2f2;
            border-color: #fee2e2;
            color: #991b1b;
        }

        /* BADGES */
        .badge {
            font-size: 11px;
            padding: 4px 8px;
            border-radius: 4px;
            font-weight: 500;
        }

        /* TABLES */
        .table {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            overflow: hidden;
        }

        .table thead {
            background: #f9fafb;
            border-bottom: 1px solid #e5e7eb;
        }

        .table tbody tr {
            border-bottom: 1px solid #f3f4f6;
            transition: background 0.2s ease;
        }

        .table tbody tr:hover {
            background: #f9fafb;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .navbar {
                padding: 10px 0;
            }

            .navbar .nav-link {
                padding: 6px 12px;
                margin: 4px 0;
                font-size: 13px;
            }

            .content-wrapper {
                padding: 20px 0;
            }

            .user-box {
                font-size: 12px;
            }

            .section {
                padding: 16px;
            }
        }

        /* SMOOTH TRANSITIONS */
        a, button {
            transition: all 0.2s ease;
        }

        /* UTILITIES */
        .divider {
            border-top: 1px solid #e5e7eb;
            margin: 16px 0;
        }

        .text-muted {
            color: #6b7280 !important;
        }

        .text-secondary {
            color: #9ca3af !important;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container main-container">
            
            <!-- LOGO -->
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                <i class="fas fa-book-open me-2"></i>Perpustakaan
            </a>

            <!-- TOGGLE BUTTON -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarUser" 
                    aria-controls="navbarUser" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- MENU -->
            <div class="collapse navbar-collapse" id="navbarUser">
                <ul class="navbar-nav ms-auto me-4">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" 
                           href="{{ route('dashboard') }}">
                            <i class="fas fa-home me-1"></i>Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('katalog*') ? 'active' : '' }}" 
                           href="{{ route('katalog.user') }}">
                            <i class="fas fa-book me-1"></i>Katalog
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('riwayat*') ? 'active' : '' }}" 
                           href="{{ route('riwayat.mine') }}">
                            <i class="fas fa-history me-1"></i>Riwayat
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('pengembalian*') ? 'active' : '' }}" 
                           href="{{ route('pengembalian.user') }}">
                            <i class="fas fa-undo me-1"></i>Pengembalian
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('denda*') ? 'active' : '' }}" 
                           href="{{ route('denda.mine') }}">
                            <i class="fas fa-receipt me-1"></i>Denda
                        </a>
                    </li>
                </ul>

                <!-- USER SECTION -->
                <div class="d-flex align-items-center gap-3">
                    <span class="user-box">
                        <i class="fas fa-user-circle me-1"></i>{{ auth()->user()->name }}
                    </span>
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-logout btn-sm">
                            <i class="fas fa-sign-out-alt me-1"></i>Logout
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <div class="content-wrapper">
        <div class="container main-container">
            @yield('content')
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="footer">
        <p class="mb-0">
            <i class="fas fa-copyright me-1"></i>{{ date('Y') }} Perpustakaan Digital • Daveiz
        </p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>

</body>
</html>

