<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Register</title>

    <link href="{{ asset('sbadmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('sbadmin/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            font-family: 'Nunito', sans-serif;
        }

        .login-card {
            border-radius: 16px;
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
        }

        .brand-title {
            font-weight: 700;
            font-size: 28px;
        }

        .form-control {
            border-radius: 10px;
            padding: 14px;
            border: 1px solid #e2e8f0;
            transition: 0.3s;
        }

        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 2px rgba(102, 126, 234, 0.2);
        }

        .btn-login {
            border-radius: 10px;
            padding: 12px;
            font-weight: 600;
            background: linear-gradient(135deg, #667eea, #5a67d8);
            border: none;
            transition: 0.3s;
        }

        .btn-login:hover {
            background: linear-gradient(135deg, #5a67d8, #4c51bf);
        }

        .text-link {
            color: #667eea;
            text-decoration: none;
        }

        .text-link:hover {
            text-decoration: underline;
        }

        .logo-icon {
            font-size: 40px;
            color: #667eea;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">

        <div class="col-lg-4 col-md-6">

            <div class="card login-card border-0">
                <div class="card-body p-5">

                    <!-- HEADER -->
                    <div class="text-center mb-4">
                        <div class="logo-icon mb-2">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <h2 class="brand-title text-dark">Create Account</h2>
                        <p class="text-muted small">Daftar akun baru</p>
                    </div>

                    <!-- ERROR -->
                    @if ($errors->any())
                        <div class="alert alert-danger text-center small">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <!-- FORM -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <input type="text" name="name"
                                value="{{ old('name') }}"
                                class="form-control"
                                placeholder="Nama Lengkap"
                                required>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email"
                                value="{{ old('email') }}"
                                class="form-control"
                                placeholder="Email address"
                                required>
                        </div>

                        <div class="form-group">
                            <input type="password" name="password"
                                class="form-control"
                                placeholder="Password"
                                required>
                        </div>

                        <div class="form-group">
                            <input type="password" name="password_confirmation"
                                class="form-control"
                                placeholder="Konfirmasi Password"
                                required>
                        </div>

                        <button type="submit"
                            class="btn btn-login btn-block text-white shadow-sm">
                            <i class="fas fa-user-plus mr-1"></i> Register
                        </button>
                    </form>

                    <hr>

                    <!-- FOOTER -->
                    <div class="text-center">
                        <a class="small text-link" href="{{ route('login') }}">
                            Sudah punya akun? Login
                        </a>
                    </div>

                    <div class="text-center mt-3 text-muted small">
                        © {{ date('Y') }} Sistem Perpustakaan
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>

<script src="{{ asset('sbadmin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('sbadmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('sbadmin/js/sb-admin-2.min.js') }}"></script>

</body>
</html>