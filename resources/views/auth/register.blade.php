<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr"
  data-theme="theme-default" data-assets-path="{{ asset('assets/') }}/"
  data-template="vertical-menu-template-free">
<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <title>@yield('title', 'Tripify | Registro')</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo2.png') }}" />
  <meta name="description" content="" />


  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}"
    class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}"
    class="template-customizer-theme-css" />
  <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
  <link rel="stylesheet"
    href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}" />
  <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
  <script src="{{ asset('assets/js/config.js') }}"></script>
</head>

<body>
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register Card -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center mb-4">
              <a href="/" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                  <!-- Aquí puedes colocar tu SVG o imagen del logo -->
                   <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" />
                </span>
              </a>
            </div>

            <h4 class="mb-2">¡Regístrate 🚀</h4>
            <p class="mb-4">Crea tu cuenta para comenzar</p>

            <form method="POST" action="{{ route('register') }}">
              @csrf

              <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" id="name" name="name"
                  class="form-control @error('name') is-invalid @enderror"
                  value="{{ old('name') }}" required autofocus />
                @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

                <div class="mb-3">
                    <label for="username" class="form-label">Nombre de usuario</label>
                    <input type="text" id="username" name="username"
                    class="form-control @error('username') is-invalid @enderror"
                    value="{{ old('username') }}" required />
                    @error('username')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


              <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" id="email" name="email"
                  class="form-control @error('email') is-invalid @enderror"
                  value="{{ old('email') }}" required />
                @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3 form-password-toggle">
                <label class="form-label" for="password">Contraseña</label>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" name="password"
                    class="form-control @error('password') is-invalid @enderror"
                    placeholder="••••••••••" required />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
                @error('password')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label class="form-label" for="password_confirmation">Confirmar contraseña</label>
                <input type="password" id="password_confirmation" name="password_confirmation"
                  class="form-control" placeholder="••••••••••" required />
              </div>

              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="terms" required />
                  <label class="form-check-label" for="terms">
                    Acepto los <a href="#">términos y condiciones</a>
                  </label>
                </div>
              </div>

              <button class="btn btn-primary d-grid w-100" type="submit">Registrarme</button>
            </form>

            <p class="text-center mt-3">
              <span>¿Ya tienes una cuenta?</span>
              <a href="{{ route('login') }}">
                <span>Inicia sesión</span>
              </a>
            </p>
          </div>
        </div>
        <!-- /Register Card -->
      </div>
    </div>
  </div>

  <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
  <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
  <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
