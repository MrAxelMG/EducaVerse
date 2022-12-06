@extends('layout.master-mini')

@section('title', 'Registro')

@section('content')
<div class="content-wrapper d-flex align-items-center justify-content-center auth theme-one" style="background-image: url({{ asset('images/funko/fondo3.png') }}); background-size: cover;">
  <div class="row w-100">
    <div class="col-lg-4 mx-auto">
      <h2 class="text-center mb-4">Registrarse</h2>
      <div class="auto-form-wrapper">
        <form role="form text-left" method="POST" action="{{ route('registro') }}">
          {{ csrf_field() }}
          <div class="form-group">
            <div class="input-group">
              <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <input type="text" name="apellidop" class="form-control" placeholder="Apellido paterno" required>
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <input type="text" name="apellidom" class="form-control" placeholder="Apellido materno">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <input type="email" name="email" class="form-control" placeholder="Correo">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <input type="password" name="password" class="form-control" placeholder="Password">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-check form-check-flat mt-0 align-items-center">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
            <label class="form-check-label" for="flexCheckDefault">
              Acepto los terminos y condiciones
            </label>
          </div>
          <div class="form-group">
            <button class="btn btn-primary submit-btn btn-block">Registrarse</button>
          </div>
          <div class="text-block text-center my-3">
            <span class="text-small font-weight-semibold">¿Ya tienes una cuenta?</span>
            <a href="{{ url('/login') }}" class="text-black text-small">Iniciar sesión</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection