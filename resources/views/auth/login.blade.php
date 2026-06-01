<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr"
  data-theme="theme-default" data-assets-path="{{ asset('assets/') }}/"
  data-template="vertical-menu-template-free">
<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>@yield('title', 'Tripify | Login')</title>
    <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo2.png') }}" />

  <meta name="description" content="" />

  

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap"
    rel="stylesheet" />

  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}"
    class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}"
    class="template-customizer-theme-css" />
  <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

  <!-- Vendors CSS -->
  <link rel="stylesheet"
    href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

  <!-- Page CSS -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}" />

  <!-- Helpers -->
  <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
  <script src="{{ asset('assets/js/config.js') }}"></script>
</head>

<body>
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Login Card -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center mb-4">
              <a href="/" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                  <!-- Aquí puedes colocar tu SVG o imagen del logo -->
                   <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" />
                </span>
                <span class="app-brand-text demo text-body fw-bolder"></span>
              </a>
            </div>

            <h4 class="mb-2">Bienvenido 👋</h4>
            <p class="mb-4">Ingresa tus credenciales para continuar</p>

            <!-- Formulario de Login -->
            <form method="POST" action="{{ route('login') }}">
              @csrf

              <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                  placeholder="Ingresa tu email" value="{{ old('email') }}" required autofocus />
                @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Contraseña</label>
                  <a href="{{ route('password.request') }}">
                    <small>¿Olvidaste tu contraseña?</small>
                  </a>
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" name="password"
                    class="form-control @error('password') is-invalid @enderror"
                    placeholder="••••••••••••" required />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
                @error('password')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="remember" name="remember"
                    {{ old('remember') ? 'checked' : '' }} />
                  <label class="form-check-label" for="remember"> Recuérdame </label>
                </div>
              </div>

              <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">Ingresar</button>
              </div>
            </form>

            <p class="text-center">
              <span>¿Nuevo aquí?</span>
              <a href="{{ route('register') }}">
                <span>Crea una cuenta</span>
              </a>
            </p>
          </div>
        </div>
        <!-- /Login Card -->
      </div>
    </div>
  </div>

  <!-- JS -->
  <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
  <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
  <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
