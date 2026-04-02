<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login | </title>

    <link href="{{ asset('sbadmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('sbadmin/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #4e73df, #224abe);
        }

        .card {
            border-radius: 12px;
        }

        .form-control-user {
            border-radius: 8px;
            padding: 14px;
        }

        .btn-user {
            border-radius: 8px;
            padding: 12px;
            font-weight: 600;
        }

        .brand-title {
            font-weight: 700;
            letter-spacing: 0.5px;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">

        <div class="col-lg-5 col-md-7">

            <div class="card shadow-lg border-0">
                <div class="card-body p-5">

                    <!-- HEADER -->
                    <div class="text-center mb-4">
                        <h2 class="brand-title text-primary">Login!</h2>
                        <p class="text-muted small">Silakan masuk ke akun Anda</p>
                    </div>

                    <!-- ERROR -->
                    @if ($errors->any())
                        <div class="alert alert-danger text-center">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <!-- FORM -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <input type="email" name="email"
                                value="{{ old('email') }}"
                                class="form-control form-control-user"
                                placeholder="Email Address"
                                required autofocus>
                        </div>

                        <div class="form-group">
                            <input type="password" name="password"
                                class="form-control form-control-user"
                                placeholder="Password"
                                required>
                        </div>

                        <div class="form-group d-flex justify-content-between align-items-center">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember"
                                    class="custom-control-input" id="remember">
                                <label class="custom-control-label small" for="remember">
                                    Remember Me
                                </label>
                            </div>

                            <a href="{{ route('password.request') }}" class="small">
                                Lupa Password?
                            </a>
                        </div>

                        <button type="submit"
                            class="btn btn-primary btn-user btn-block shadow-sm">
                            <i class="fas fa-sign-in-alt mr-1"></i> Login
                        </button>
                    </form>

                    <hr>

                    <!-- FOOTER -->
                    <div class="text-center">
                        <a class="small" href="{{ route('register') }}">
                            Belum punya akun? Register
                        </a>
                    </div>

                    <div class="text-center mt-3 text-muted small">
                        © {{ date('Y') }} 
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>

<!-- JS -->
<script src="{{ asset('sbadmin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('sbadmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('sbadmin/js/sb-admin-2.min.js') }}"></script>

</body>
</html>