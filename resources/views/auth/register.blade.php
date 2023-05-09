<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Registration Page</title>

    {{-- Jquery 3.6.4 --}}
    <script src="{{ asset('assets/jquery3.6.4.js') }}"></script>

    {{-- Bootstrap 5.2.3 --}}
    <link rel="stylesheet" href="{{ asset('assets/bootstrap5.2.3/css/bootstrap.min.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/fontawesome6.4/css/all.min.css') }}">
    
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ ('assets/templateAuth/css/auth.min.css') }}">
  </head>
  <body class="hold-transition register-page">
    {{-- Home Navbar --}}
    @include('templates.partials.homeNavbar'){{-- /.home_navbar --}}

    {{-- Register Box --}}
    <div class="register-box">
      <div class="register-logo">
        <a href="/home"><i class="fa-solid fa-shop me-2"></i><b>IOT</b>Tokoku</a>
      </div>

      <!-- Card -->
      <div class="card">
        <div class="card-body register-card-body">
          <p class="login-box-msg">Register akun baru</p>
          <!-- Form Register -->
          <form action="/register" method="post">
            @csrf
            <div class="input-group mb-3">
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nama Lengkap" value={{ old('name') }}>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
              @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="input-group mb-3">
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value={{ old('email') }}>
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
              <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" id="password" name="password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
              @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control @error('retype_password') is-invalid @enderror" placeholder="Retype password" id="retype_password" name="retype_password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
              @error('retype_password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                  <label for="agreeTerms">
                    Saya setuju <a href="#">ketentuan</a>
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block" id="register_btn">Register</button>
              </div>
              <!-- /.col -->
            </div>
          </form><!-- /.form_register -->
        </div>
        <div class="card-footer text-body-secondary text-center">
          <a href="/login">Sudah punya akun</a>
        </div>
      </div><!-- /.card -->
    </div>{{-- /.register_box --}}

    {{-- Javascript --}}
    <script>
      // // Jika seluruh document telah terload
      // $(document).ready(function(){
      //   // Hanya registrasi jika agreeTerms telah dichecklist
      //   $('#agreeTerms').click(function(){
      //     $('#register_btn').attr();
      //   })
      // });

    </script>

    <!-- Bootstrap 5.2.3 -->
    <script src="{{ asset('assets/bootstrap5.2.3/js/bootstrap.bundle.min.js') }}"></script>

    <!-- AdminLTE App -->
    <script src="{{ asset('assets/templateAuth/js/auth.min.js') }}"></script>
  </body>
</html>
