<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SPP | Login</title>

  <!-- Google Font: Inter -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
  <!-- Font Awesome -->
  <link rel="stylesheet"
    href="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.1.0') }}/dist/css/adminlte.min.css">
  <!-- Modern Theme CSS -->
  <link rel="stylesheet" href="{{ asset('css/modern-theme.css') }}">
  <style>
    body {
      background-color: var(--bg-main) !important;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      margin: 0;
    }

    .login-box {
      width: 400px;
    }

    .login-logo {
      margin-bottom: 30px;
    }

    .login-logo a {
      color: var(--text-main) !important;
      font-weight: 800 !important;
      font-size: 2.5rem;
      letter-spacing: -1px;
    }

    .login-card-body {
      border-radius: 20px !important;
      padding: 40px !important;
    }

    .login-box-msg {
      font-weight: 600;
      color: var(--text-muted);
      margin-bottom: 25px;
      padding: 0 !important;
    }

    .input-group-text {
      background-color: transparent !important;
      border-left: none !important;
      color: var(--text-muted) !important;
    }

    .form-control {
      border-right: none !important;
    }
  </style>
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo text-center">
      <a href="">SPPR</a>
    </div>
    <!-- /.login-logo -->
    <div class="card shadow-soft border-0" style="border-radius: 20px; overflow: hidden;">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Selamat Datang Kembali</p>
        @error('username')
          <div class="alert alert-danger alert-dismissible fade show border-0" role="alert" style="border-radius: 12px;">
            {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @enderror
        <form action="{{ route('login') }}" method="post">
          @csrf
          <div class="form-group mb-4">
            <label class="text-xs text-muted mb-2 uppercase tracking-wider font-bold">Username</label>
            <div class="input-group">
              <input type="text" name="username" value="{{ @old('username') }}" required=""
                class="form-control bg-light border-0" placeholder="Masukkan username anda"
                style="border-radius: 12px 0 0 12px !important;">
              <div class="input-group-append">
                <div class="input-group-text bg-light border-0" style="border-radius: 0 12px 12px 0 !important;">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group mb-4">
            <label class="text-xs text-muted mb-2 uppercase tracking-wider font-bold">Password</label>
            <div class="input-group">
              <input type="password" name="password" required="" class="form-control bg-light border-0"
                placeholder="Masukkan password anda" style="border-radius: 12px 0 0 12px !important;">
              <div class="input-group-append">
                <div class="input-group-text bg-light border-0" style="border-radius: 0 12px 12px 0 !important;">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col">
              <button type="submit" class="btn btn-primary btn-block shadow-lg py-3"
                style="border-radius: 12px; font-weight: 700; letter-spacing: 0.5px;">MASUK</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>