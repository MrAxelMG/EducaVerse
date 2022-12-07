<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile not-navigation-link">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            @php $foto = auth()->user()->foto; @endphp
            <img src="{{ asset("images/usuarios/$foto") }}" alt="profile image">
          </div>
          <div class="text-wrapper">
            <p class="profile-name">{{ auth()->user()->nombre }} {{ auth()->user()->apellidop }}</p>
            <small class="designation text-muted">Admin</small>
            <span class="status-indicator online"></span>
          </div>
        </div>
        <a href="{{ url('admin/perfil') }}" class="btn btn-success btn-sm btn-block">Ver perfil <i class="mdi mdi-face"></i></a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/admin/dashboard') }}">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Panel de control</span>
      </a>
    </li>    
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#educacion" aria-controls="educacion">
        <i class="menu-icon mdi mdi-school"></i>
        <span class="menu-title">Educación</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="educacion">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/materias') }}">Materias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/escuelas') }}">Escuela</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#entretenimientos" aria-controls="entretenimientos">
        <i class="menu-icon mdi mdi-gamepad-variant"></i>
        <span class="menu-title">Entretenimiento</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="entretenimientos">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/videojuegos') }}">Videojuegos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/categorias') }}">Categorias</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/admin/contacto') }}">
        <i class="menu-icon mdi mdi-contact-mail"></i>
        <span class="menu-title">Contacto</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/admin/ventas') }}">
        <i class="menu-icon mdi mdi-coin"></i>
        <span class="menu-title">Ventas</span>
      </a>
    </li>
  </ul>
</nav>