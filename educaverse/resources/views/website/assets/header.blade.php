<header class="header-style-four">
  <div id="sticky-header" class="header-four-wrap">
      <div class="container custom-container-two">
          <div class="row">
              <div class="col-12">
                  <div class="main-menu menu-style-two">
                      <nav>
                          <div class="logo">
                            <a href="/" class="d-flex align-items-center">
                              <img src="{{ asset('assets/images/EV.png') }}" width="70px" alt="Logo">
                              <h2 style="margin-top: 5px">EducaVerse</h2>
                            </a>
                          </div>
                          <div id="mobile-menu" class="navbar-wrap d-none d-lg-flex" style="display: block;">
                            @php
                              $ruta = explode('/', request());
                              $ruta = explode(' ', request());
                            @endphp
                            <ul>
                              <li @if ($ruta[0] == '/') class="show" @endif >
                                <a href="{{ url('/') }}">INICIO</a>
                              </li>
                              <li @if ($ruta[0] == '/videojuegos') class="show" @endif >
                                <a href="{{ url('/videojuegos') }}">VIDEOJUEGOS {{ request() }}</a>
                              </li>
                              <li @if ($ruta[0] == '/nosotros') class="show" @endif >
                                <a href="{{ url('/nosotros') }}">NOSOTROS {{ $ruta[0] }}</a>
                              </li>
                              <li @if ($ruta[0] == '/contacto') class="show" @endif >
                                <a href="{{ url('/contacto') }}">CONTACTO</a>
                              </li>
                            </ul>
                          </div>
                      </nav>
                  </div>
                  <div class="mobile-menu"></div>
              </div>                    
          </div>
      </div>
  </div>
</header>