
<header class="header-style-four">
  <div id="sticky-header" class="header-four-wrap">
      <div class="container custom-container-two">
          <div class="row">
              <div class="col-12">
                  <div class="main-menu menu-style-two">
                    <nav>
                      <div class="logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('/images/logo/logo.png') }}" alt="Logo"></a>
                      </div>
                      <div id="mobile-menu" class="navbar-wrap d-none d-lg-flex" style="display: block;">
                        @php
                          $ruta = explode('/', request());
                          $ruta = explode(' ', $ruta[3]);
                        @endphp
                        <ul>
                          {{-- <li @if ($ruta[0] == '') class="show" @endif >
                            <a href="{{ url('/') }}">HOME</a>
                          </li>
                          <li @if ($ruta[0] == 'videojuegos') class="show" @endif >
                            <a href="{{ url('/videojuegos') }}">VIDEOGAMES</a>
                          </li>
                          <li @if ($ruta[0] == 'nosotros') class="show" @endif >
                            <a href="{{ url('/nosotros') }}">ABOUT US</a>
                          </li>
                          <li @if ($ruta[0] == 'contacto') class="show" @endif >
                            <a href="{{ url('/contacto') }}">CONTACT</a>
                          </li> --}}
                          <li class="show">
                            <a href="{{ url('/') }}">HOME</a>
                          </li>
                          <li>
                            <a href="{{ url('/videojuegos') }}">VIDEOGAMES</a>
                          </li>
                          <li>
                            <a href="{{ url('/nosotros') }}">ABOUT US</a>
                          </li>
                          <li>
                            <a href="{{ url('/contacto') }}">CONTACT</a>
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

<!-- Progressbar -->
<div class="container-progressbar">
  <div class="progressbar"></div>
</div>