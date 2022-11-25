<footer>
    <div class="footer-top footer-bg s-footer-bg">
      <div class="container pt-5">
          <div class="row justify-content-between">
              <div class="col-xl-4 col-lg-4 col-md-6">
                  <div class="footer-widget mb-50">
                      <div class="footer-logo mb-35">
                        <a href="/" class="d-flex align-items-center">
                          <img src="{{ asset('assets/images/EV.png') }}" width="70px" alt="Logo">
                          <h2 style="margin-top: 5px">EducaVerse</h2>
                        </a>
                      </div>
                      <div class="footer-text">
                          <p>Somos una plataforma de videojuegos que tiene lo mejor para ti.</p>
                          <div class="footer-contact">
                              <ul>
                                  <li><i class="fas fa-map-marker-alt"></i> <span>Dirección : </span>Carr. Durango – Mezquital, C.P. 34308, Durango, Dgo, México.</li>
                                  <li><i class="fas fa-phone"></i> <span>Celular : </span>+52 618 137 3050</li>
                                  <li><i class="fas fa-envelope-open"></i><span>Email : </span>contacto@educaverse.com</li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-2 col-lg-3 col-sm-6">
                  <div class="footer-widget mb-50">
                      <div class="fw-title mb-35">
                          <h5>Acceder</h5>
                      </div>
                      <div class="fw-link">
                          <ul>
                              <li><a href="{{ url('/login') }}">Iniciar sesión</a></li>
                              <li><a href="{{ url('/registro') }}">Registrate</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="footer-widget mb-50">
                      <div class="fw-title mb-35">
                          <h5>¿Necesitas ayuda?</h5>
                      </div>
                      <div class="fw-link">
                          <ul>
                              <li><a href="{{ url('/terminos') }}">Terminos &amp; Condiciones</a></li>
                              <li><a href="{{ url('/privacidad') }}">Politica de privacidad</a></li>
                              <li><a href="{{ url('/faq') }}">Preguntas frecuentes</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-xl-2 col-lg-4 col-md-6">
                  <div class="footer-widget mb-50">
                      <div class="fw-title mb-35">
                          <h5>Siguenos</h5>
                      </div>
                      <div class="footer-social">
                          <ul>
                              <li><a href="#" class="d-flex align-items-center justify-content-center"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href="#" class="d-flex align-items-center justify-content-center"><i class="fab fa-instagram"></i></a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer-fire"><img src="{{ asset('images/images/footer_fire.png') }}" alt=""></div>
      <div class="footer-fire footer-fire-right"><img src="{{ asset('images/images/footer_fire.png') }}" alt=""></div>
    </div>
    <div class="copyright-wrap s-copyright-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="copyright-text">
                        <p>copyright © @php echo date('Y') @endphp Educaverse. Todos los derechos reservados</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-none d-md-block">
                    <div class="payment-method-img text-right">
                        <img src="{{ asset('images/images/card_img.png') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>