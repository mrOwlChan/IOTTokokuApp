<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AdminLTE 3 | Log in</title>

        <!-- jQuery -->
        <script src="{{ asset('/assets/jquery3.6.4.js') }}"></script>

        {{-- Bootstrap 5.2.3 --}}
        <link href="{{ asset('assets/bootstrap5.2.3/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('/assets/fontawesome6.4/css/all.min.css') }}">
        
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="{{ asset('/assets/templateAuth/css/auth.min.css') }}">
    </head>
    <body class="hold-transition login-page">
        {{-- Home Navbar --}}
        @include('templates.partials.homeNavbar'){{-- /.home navbar --}}

        <div class="container">
            {{-- Alert Registrasi Berhasil --}}
            @if (session()->has('reg_success'))
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fa-solid fa-circle-check me-2 text-center"></i><strong>{{ session('reg_success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>    
                    </div>
                </div>
            @endif{{-- /. alert registrasi berhasil --}}

            {{-- Alert Gagal Login --}}
            @if (session()->has('login_failed'))
                <div class="row">
                    <div class="col-md-4 mx-auto">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session('login_falied') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>    
                    </div>
                </div>
            @endif{{-- /. alert gagal login --}}
        </div>

        <div class="login-box">
            <div class="login-logo">
                <a href="/home"><i class="fa-solid fa-shop me-2"></i><b>IOT</b>Tokoku</a>
            </div>

            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Login untuk masuk ke akun</p>
                    <form action="/login" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" id="email" value="{{ old('email') }}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <p class="mb-0">
                                    <a href="/register" class="text-center">Registrasi akun baru</a>
                                </p>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div>
                        <!-- /.col -->
                        </div>
                    </form>
                </div><!-- /.login-card-body -->
            </div>
        </div><!-- /.login-box -->
        
        <!-- Bootstrap 4 -->
        <script src="{{ asset('/assets/bootstrap5.2.3/js/bootstrap.bundle.min.js') }}"></script>
        
        <!-- AdminLTE App -->
        <script src="{{ asset('/assets/templateAuth/js/auth.min.js') }}"></script>
    </body>
</html>
