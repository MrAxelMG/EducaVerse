@extends('layout.master-mini')

@section('title', 'Inicio de sesión')

@section('content')
  <div class="content-wrapper d-flex align-items-center justify-content-center auth theme-one" style="background-image: url({{ url('assets/images/auth/login_1.jpg') }}); background-size: cover;">
    <div class="row w-100">
      <div class="col-lg-4 mx-auto">
        <div class="auto-form-wrapper">
          <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-group">
              <label class="label">Correo</label>
              <div class="input-group">
                <input type="email" class="form-control" placeholder="Correo" name="email" required>
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="mdi mdi-check-circle-outline"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="label">Contraseña</label>
              <div class="input-group">
                <input type="password" class="form-control" placeholder="*********" name="password" required>
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="mdi mdi-check-circle-outline"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <button class="btn btn-primary submit-btn btn-block">Iniciar sesión</button>
            </div>
            <div class="form-group d-flex justify-content-between">
              <div class="form-check form-check-flat mt-0">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                <label class="form-check-label" for="flexCheckDefault">
                  Recuerdame
                </label>
              </div>
              <a href="{{ url('/forgot') }}" class="text-small forgot-password text-black">¿Olvidaste tu contraseña?</a>
            </div>
            <div class="form-group">
              <button class="btn btn-block g-login">
                <img class="mr-3" src="{{ url('assets/images/file-icons/icon-google.svg') }}" alt="">Iniciar sesión con Google</button>
            </div>
            <div class="text-block text-center my-3">
              <span class="text-small font-weight-semibold">¿No eres parte de esta familia?</span>
              <a href="{{ url('/registro') }}" class="text-black text-small">Crea una cuenta</a>
            </div>
          </form>
        </div>
        <ul class="auth-footer">
          <li>
            <a href="{{ url('/terminos') }}">Terminos</a>
          </li>
          <li>
            <a href="{{ url('/condiciones') }}">Condiciones</a>
          </li>
        </ul>
        <p class="footer-text text-center">copyright © @php echo date('Y') @endphp Educaverse. Todos los derechos reservados</p>
      </div>
    </div>
  </div>
@endsection