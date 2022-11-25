<!DOCTYPE html>
<html lang="es">
<head>
  <title>@yield('title') | Educaverse</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <link rel="shortcut icon" href="{{ asset('assets/images/fav.png') }}">

  <!-- CSS -->
  <link href="{{ asset('assets/plugins/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  @yield('styles')
  <!-- End CSS -->

</head>
<body data-base-url="{{url('/admin/dashboard')}}">

  <div class="container-scroller" id="app">
    @include('layout.header')
    <div class="page-body-wrapper">
      @include('layout.sidebar')
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')
        </div>
        @include('layout.footer')
      </div>
    </div>
  </div>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
  <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('assets/js/misc.js') }}"></script>
  <script src="{{ asset('assets/js/settings.js') }}"></script>
  <script src="{{ asset('assets/js/todolist.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  @yield('scripts')
  <!-- End JS -->

</body>
</html>