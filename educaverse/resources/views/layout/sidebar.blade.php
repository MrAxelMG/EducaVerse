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
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#basic-ui" aria-controls="basic-ui">
        <i class="menu-icon mdi mdi-dna"></i>
        <span class="menu-title">Basic UI Elements</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="basic-ui">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/basic-ui/buttons') }}">Buttons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/basic-ui/dropdowns') }}">Dropdowns</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/basic-ui/typography') }}">Typography</a>
          </li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ url('/charts/chartjs') }}">
        <i class="menu-icon mdi mdi-chart-line"></i>
        <span class="menu-title">Charts</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/tables/basic-table') }}">
        <i class="menu-icon mdi mdi-table-large"></i>
        <span class="menu-title">Tables</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/icons/material') }}">
        <i class="menu-icon mdi mdi-emoticon"></i>
        <span class="menu-title">Icons</span>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#materias" aria-controls="materias">
        <i class="menu-icon mdi mdi-school"></i>
        <span class="menu-title">Escuelas</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="materias">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/materias') }}">Materias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/niveles-educativos') }}">Niveles educativos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/escuelas') }}">Escuela</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#user-pages" aria-controls="user-pages">
        <i class="menu-icon mdi mdi-lock-outline"></i>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="user-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/user-pages/login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/user-pages/register') }}">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/user-pages/lock-screen') }}">Lock Screen</a>
          </li>
        </ul>
      </div>
    </li>
  </ul>
</nav>