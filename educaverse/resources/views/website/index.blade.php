<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EducaVerse</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('assets/images/fav.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/responsive.css') }}">

    <style>.navbar-wrap > ul > li.show > a::after{width:928.9375px;}</style>
    <style>.navbar-wrap > ul > li.active > a::after,.navbar-wrap > ul > li:hover > a::after{width:812.890625px;}</style>
    <style>.navbar-wrap > ul > li.active > a::after,.navbar-wrap > ul > li:hover > a::after{width:723px;}</style>
    <style>.navbar-wrap > ul > li.active > a::after,.navbar-wrap > ul > li:hover > a::after{width:899.71875px;}</style>
    <style>.navbar-wrap > ul > li.active > a::after,.navbar-wrap > ul > li:hover > a::after{width:383.453125px;}</style>

  </head>
  <body data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="0">

      <!-- preloader -->
      <div id="preloader" style="display: none;">
          <div id="loading-center">
              <div id="loading-center-absolute">
                  <img src="{{ asset('assets/web/img/icon/preloader.svg') }}" alt="">
              </div>
          </div>
      </div>
      <!-- preloader-end -->

      <!-- header-area -->
      <header>
          <div id="sticky-header" class="transparent-header">
              <div class="container-fluid s-container-full-padding">
                  <div class="row">
                      <div class="col-12">
                          <div class="main-menu menu-style-two">
                              <nav>
                                  <div class="logo">
                                      <a href="/">
                                        <img src="{{ asset('assets/images/EducaverseAzul.png') }}" width="200px" alt="Logo">
                                      </a>
                                  </div>
                                  <div id="mobile-menu" class="navbar-wrap d-none d-lg-flex" style="display: block;">
                                      <ul>
                                          <li class="show"><a href="{{ url('/') }}">INICIO</a></li>
                                          <li><a href="{{ url('/videojuegos') }}">Videojuegos</a></li>
                                          <li><a href="{{ url('/nosotros') }}">Nosotros</a></li>
                                          <li class=""><a href="{{ url('/contacto') }}">Contacto</a></li>
                                      </ul>
                                  </div>
                                  <div class="header-action">
                                    <ul>
                                      <li class="header-search"><a href="#" class="d-flex align-items-center justify-content-center" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></a></li>
                                    </ul>
                                  </div>
                              </nav>
                          </div>
                          <div class="mobile-menu"></div>
                      </div>
                      <!-- Modal Search -->
                      <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <form>
                                      <input type="text" placeholder="Buscar...">
                                      <button><i class="fa fa-search"></i></button>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </header>
      <!-- header-area-end -->

      <!-- main-area -->
      <main>
        <!-- slider-area -->
        <section class="slider-area">
          <div class="slider-active slick-initialized slick-slider" id="sliderP">
            <div class="slick-list draggable">
              <div class="slick-track" style="opacity: 1; width: 2526px;">
                <div class="single-slider slider-bg slider-style-two slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 1263px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;" tabindex="0">
                  <div class="container-fluid container-full-padding">
                    <div class="row">
                      <div class="col-xl-6 col-lg-7 col-md-11">
                        <div class="slider-content">
                          <h6 data-animation="fadeInUp" data-delay=".4s" class="" style="animation-delay: 0.4s;">EducaVerse</h6>
                          <h2 data-animation="fadeInUp" data-delay=".4s" class="" style="animation-delay: 0.4s;">Empresa <span style="text-transform: none; color: #fff;">de</span> <span>Videojuegos</span> educativos</h2>
                          <p data-animation="fadeInUp" data-delay=".6s" class="" style="animation-delay: 0.6s;">Somos una plataforma de videojuegos que tiene lo mejor para ti.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="slider-img" data-animation="slideInRightS" data-delay=".6s" style="animation-delay: 0.6s;">
                    <img src="{{ asset('assets/web/img/slider/slider_img01.png') }}" alt="">
                  </div>
                  <div class="slider-img slider-img2" data-animation="slideInLeftS" data-delay=".6s" style="animation-delay: 0.6s;">
                    <img src="{{ asset('assets/web/img/slider/slider_img02.png') }}" alt="">
                  </div>
                  <div class="slider-circle-shape">
                    <img src="{{ asset('assets/web/img/slider/slider_circle.png') }}" alt="" class="rotateme">
                  </div>
                </div>
                <div class="single-slider slider-bg slider-style-two slick-slide" style="background-image: url(&quot;{{ asset('assets/web/img/slider/slider_bg.jpg')}}&quot;); width: 1263px; position: relative; left: -1263px; top: 0px; z-index: 998; opacity: 0;" data-slick-index="1" aria-hidden="true" tabindex="-1">
                  <div class="container-fluid container-full-padding">
                    <div class="row">
                      <div class="col-xl-6 col-lg-7 col-md-11">
                        <div class="slider-content">
                          <h6 data-animation="fadeInUp" data-delay=".4s">world gaming</h6>
                          <h2 data-animation="fadeInUp" data-delay=".4s">Cod <span>Modern</span> Warfare</h2>
                          <p data-animation="fadeInUp" data-delay=".6s">Find technology or people for digital projects in public sector and Find an individual specialist develope researcher.</p>
                          <a href="#" class="btn btn-style-two" data-animation="fadeInUp" data-delay=".8s" tabindex="-1">READ MORE</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="slider-img" data-animation="slideInRightS" data-delay=".6s">
                    <img src="{{ asset('assets/web/img/slider/slider_img01.png') }}" alt="">
                  </div>
                  <div class="slider-img slider-img2" data-animation="slideInLeftS" data-delay=".6s">
                    <img src="{{ asset('assets/web/img/slider/slider_img02.png') }}" alt="">
                  </div>
                  <div class="slider-circle-shape">
                    <img src="{{ asset('assets/web/img/slider/slider_circle.png') }}" alt="" class="rotateme">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- slider-area-end -->

        <!-- new-games-area -->
        <section class="released-games-area gray-bg pt-115 pb-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title title-style-three text-center mb-20">
                            <h2>Juegos <span>lanzados</span></h2>
                            <p>Aquí puedes adquirir nuestros videojuegos lanzados, así como revisar sus características.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-12">
                        <div class="released-game-active slick-initialized slick-slider slick-dotted" id="gameActive">
                            <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 3160px;"><div class="released-game-carousel slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 790px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;" tabindex="0" role="tabpanel" id="slick-slide10" aria-describedby="slick-slide-control10">
                                <div class="released-game-item">
                                    <div class="released-game-item-bg"></div>
                                    <div class="released-game-img">
                                        <img src="{{ asset('assets/web/img/images/released_game_img01.jpg') }}" alt="">
                                    </div>
                                    <div class="released-game-content">
                                        <div class="released-game-rating">
                                            <h5>Rating :</h5>
                                            <div class="released-rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <h4> <span> </span></h4>
                                        <div class="released-game-list mb-15">
                                            <ul>
                                                <li><span>Categoría :</span></li>
                                                <li><span>Jugadores :</span></li>
                                                <li><span>Plataormas :</span></li>
                                            </ul>
                                        </div>
                                        <p></p>
                                        <a href="#" class="btn btn-style-two" tabindex="0">Comprar ahora</a>
                                    </div>
                                </div>
                            </div><div class="released-game-carousel slick-slide" data-slick-index="1" aria-hidden="true" style="width: 790px; position: relative; left: -790px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1" role="tabpanel" id="slick-slide11" aria-describedby="slick-slide-control11">
                                <div class="released-game-item">
                                    <div class="released-game-item-bg"></div>
                                    <div class="released-game-img">
                                        <img src="{{ asset('assets/web/img/images/released_game_img02.jpg') }}" alt="">
                                    </div>
                                    <div class="released-game-content">
                                        <div class="released-game-rating">
                                            <h5>Rating :</h5>
                                            <div class="released-rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <h4>Battle <span>Grounds</span></h4>
                                        <div class="released-game-list mb-15">
                                            <ul>
                                                <li><span>Category :</span>Virtual Game</li>
                                                <li><span>Model :</span>Compete 100 players</li>
                                                <li><span>Controller :</span>Playstation 5 , Xbox , PS4</li>
                                            </ul>
                                        </div>
                                        <p>Compete with 100 players on a remote thats island for winner takes showdown known issue</p>
                                        <a href="#" class="btn btn-style-two" tabindex="-1">buy now</a>
                                    </div>
                                </div>
                            </div><div class="released-game-carousel slick-slide" data-slick-index="2" aria-hidden="true" style="width: 790px; position: relative; left: -1580px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1" role="tabpanel" id="slick-slide12" aria-describedby="slick-slide-control12">
                                <div class="released-game-item">
                                    <div class="released-game-item-bg"></div>
                                    <div class="released-game-img">
                                        <img src="{{ asset('assets/web/img/images/released_game_img03.jpg') }}" alt="">
                                    </div>
                                    <div class="released-game-content">
                                        <div class="released-game-rating">
                                            <h5>Rating :</h5>
                                            <div class="released-rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <h4>Apex <span>Legends</span></h4>
                                        <div class="released-game-list mb-15">
                                            <ul>
                                                <li><span>Category :</span>Virtual Game</li>
                                                <li><span>Model :</span>Compete 100 players</li>
                                                <li><span>Controller :</span>Playstation 5 , Xbox , PS4</li>
                                            </ul>
                                        </div>
                                        <p>Compete with 100 players on a remote thats island for winner takes showdown known issue</p>
                                        <a href="#" class="btn btn-style-two" tabindex="-1">buy now</a>
                                    </div>
                                </div>
                            </div><div class="released-game-carousel slick-slide" data-slick-index="3" aria-hidden="true" style="width: 790px; position: relative; left: -2370px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1" role="tabpanel" id="slick-slide13" aria-describedby="slick-slide-control13">
                                <div class="released-game-item">
                                    <div class="released-game-item-bg"></div>
                                    <div class="released-game-img">
                                        <img src="{{ asset('assets/web/img/images/released_game_img03.jpg') }}" alt="">
                                    </div>
                                    <div class="released-game-content">
                                        <div class="released-game-rating">
                                            <h5>Rating :</h5>
                                            <div class="released-rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <h4>Monster <span>Hunter</span></h4>
                                        <div class="released-game-list mb-15">
                                            <ul>
                                                <li><span>Category :</span>Virtual Game</li>
                                                <li><span>Model :</span>Compete 100 players</li>
                                                <li><span>Controller :</span>Playstation 5 , Xbox , PS4</li>
                                            </ul>
                                        </div>
                                        <p>Compete with 100 players on a remote thats island for winner takes showdown known issue</p>
                                        <a href="#" class="btn btn-style-two" tabindex="-1">buy now</a>
                                    </div>
                                </div>
                            </div></div></div>
                            
                            
                            
                        <ul class="slick-dots" style="" role="tablist"><li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control10" aria-controls="slick-slide10" aria-label="1 of 4" tabindex="0" aria-selected="true">1</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control11" aria-controls="slick-slide11" aria-label="2 of 4" tabindex="-1">2</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control12" aria-controls="slick-slide12" aria-label="3 of 4" tabindex="-1">3</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control13" aria-controls="slick-slide13" aria-label="4 of 4" tabindex="-1">4</button></li></ul></div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="released-game-nav slick-initialized slick-slider slick-vertical">
                            <div class="slick-list draggable" style="height: 454.875px;"><div class="slick-track" style="opacity: 1; height: 1668px; transform: translate3d(0px, -454px, 0px);"><div class="released-game-nav-item slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" style="width: 380px;" tabindex="-1">
                                <img src="{{ asset('assets/web/img/images/release_game_nav02.jpg') }}" alt="">
                            </div><div class="released-game-nav-item slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" style="width: 380px;" tabindex="-1">
                                <img src="{{ asset('assets/web/img/images/release_game_nav03.jpg') }}" alt="">
                            </div><div class="released-game-nav-item slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 380px;" tabindex="-1">
                                <img src="{{ asset('assets/web/img/images/release_game_nav02.jpg') }}" alt="">
                            </div><div class="released-game-nav-item slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 380px;" tabindex="0">
                                <img src="{{ asset('assets/web/img/images/release_game_nav01.jpg') }}" alt="">
                            </div><div class="released-game-nav-item slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 380px;" tabindex="0">
                                <img src="{{ asset('assets/web/img/images/release_game_nav02.jpg') }}" alt="">
                            </div><div class="released-game-nav-item slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 380px;" tabindex="0">
                                <img src="{{ asset('assets/web/img/images/release_game_nav03.jpg') }}" alt="">
                            </div><div class="released-game-nav-item slick-slide" data-slick-index="3" aria-hidden="true" style="width: 380px;" tabindex="-1">
                                <img src="{{ asset('assets/web/img/images/release_game_nav02.jpg') }}" alt="">
                            </div><div class="released-game-nav-item slick-slide slick-cloned" data-slick-index="4" aria-hidden="true" style="width: 380px;" tabindex="-1">
                                <img src="{{ asset('assets/web/img/images/release_game_nav01.jpg') }}" alt="">
                            </div><div class="released-game-nav-item slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" style="width: 380px;" tabindex="-1">
                                <img src="{{ asset('assets/web/img/images/release_game_nav02.jpg') }}" alt="">
                            </div><div class="released-game-nav-item slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" style="width: 380px;" tabindex="-1">
                                <img src="{{ asset('assets/web/img/images/release_game_nav03.jpg') }}" alt="">
                            </div><div class="released-game-nav-item slick-slide slick-cloned" data-slick-index="7" aria-hidden="true" style="width: 380px;" tabindex="-1">
                                <img src="{{ asset('assets/web/img/images/release_game_nav02.jpg') }}" alt="">
                            </div></div></div>
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- new-games-area-end -->

        <!-- gamers-area -->
        <section class="just-gamers-area just-gamers-bg pt-115 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-10">
                        <div class="section-title title-style-three white-title mb-70">
                            <h2>Conoce <span>EducaVerse</span></h2>
                            <p>Para informarte de nuestros videojuegos, aquí te dejamos algunos puntos importantes de la empresa.</p>
                        </div>
                        <div class="just-gamers-list">
                            <ul>
                                <li>
                                    <div class="just-gamers-list-icon d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('assets/web/img/icon/gamer_list_icon01.png') }}" alt="">
                                    </div>
                                    <div class="just-gamers-list-content fix">
                                        <h5>Videojuegos educativos</h5>
                                        <p>Tenemos videojuegos con el fin de apoyar al docente en el proceso de enseñanza.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="just-gamers-list-icon d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('assets/web/img/icon/gamer_list_icon02.png') }}" alt="">
                                    </div>
                                    <div class="just-gamers-list-content fix">
                                        <h5>Diseño &amp; Aprendizaje</h5>
                                        <p>Videojuegos para que los usuarios aprendan por si solos.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="just-gamers-list-icon d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('assets/web/img/icon/gamer_list_icon03.png') }}" alt="">
                                    </div>
                                    <div class="just-gamers-list-content fix">
                                        <h5>Mundo abierto</h5>
                                        <p>Un mundo abierto para que los usuarios puedan visitar todas las zonas creadas.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 d-none d-lg-block">
                        <div class="just-gamers-img">
                            <img src="{{ asset('assets/web/img/images/just_gamers_img.png') }}" alt="" class="just-gamers-character">
                            <div class="just-gamers-circle-shape">
                                <img src="{{ asset('assets/web/img/images/gamers_circle_line.png') }}" alt="">
                                <img src="{{ asset('assets/web/img/images/gamers_circle_shape.png') }}" alt="" class="rotateme">
                            </div>
                            <img src="{{ asset('assets/web/img/images/just_gamers_chart.png') }}" alt="" class="gamers-chart-shape">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- gamers-area-end -->

        <!-- featured-game-area -->
        <section class="featured-game-area position-relative pt-115 pb-90">
            <div class="featured-game-bg"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title title-style-three text-center mb-70">
                            <h2>GALERIA DE LOS <span>JUEGOS</span></h2>
                            <p>Te mostramos algunas portadas de los videojuegos que tenemos para ti.</p>
                        </div>
                    </div>
                </div>
                <div class="row featured-active" style="position: relative; height: 1085px;">
                    <div class="col-lg-4 col-sm-6 grid-item" style="position: absolute; left: 0%; top: 0px;">
                        <div class="featured-game-item mb-30">
                            <div class="featured-game-thumb">
                                <img src="{{ asset('assets/web/img/images/featured_game_thumb01.jpg') }}" alt="">
                            </div>
                            <div class="featured-game-content">
                                <h4><a href="#">JUST FOR <span>GAMERS</span></a></h4>
                                <div class="featured-game-meta">
                                    <i class="fas fa-bell"></i>
                                    <span>Playstation 5 , Xbox</span>
                                </div>
                            </div>
                            <div class="featured-game-content featured-game-overlay-content">
                                <div class="featured-game-icon"><img src="{{ asset('assets/web/img/icon/featured_game_icon.png') }}" alt=""></div>
                                <h4><a href="#">JUST FOR <span>GAMERS</span></a></h4>
                                <div class="featured-game-meta">
                                    <i class="fas fa-bell"></i>
                                    <span>Playstation 5 , Xbox</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 grid-item" style="position: absolute; left: 33.3333%; top: 0px;">
                        <div class="featured-game-item mb-30">
                            <div class="featured-game-thumb">
                                <img src="{{ asset('assets/web/img/images/featured_game_thumb02.jpg') }}" alt="">
                            </div>
                            <div class="featured-game-content">
                                <h4><a href="#">JUST FOR <span>GAMERS</span></a></h4>
                                <div class="featured-game-meta">
                                    <i class="fas fa-bell"></i>
                                    <span>Playstation 5 , Xbox</span>
                                </div>
                            </div>
                            <div class="featured-game-content featured-game-overlay-content">
                                <div class="featured-game-icon"><img src="{{ asset('assets/web/img/icon/featured_game_icon.png') }}" alt=""></div>
                                <h4><a href="#">JUST FOR <span>GAMERS</span></a></h4>
                                <div class="featured-game-meta">
                                    <i class="fas fa-bell"></i>
                                    <span>Playstation 5 , Xbox</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 grid-item" style="position: absolute; left: 66.6667%; top: 0px;">
                        <div class="featured-game-item mb-30">
                            <div class="featured-game-thumb">
                                <img src="{{ asset('assets/web/img/images/featured_game_thumb03.jpg') }}" alt="">
                            </div>
                            <div class="featured-game-content">
                                <h4><a href="#">JUST FOR <span>GAMERS</span></a></h4>
                                <div class="featured-game-meta">
                                    <i class="fas fa-bell"></i>
                                    <span>Playstation 5 , Xbox</span>
                                </div>
                            </div>
                            <div class="featured-game-content featured-game-overlay-content">
                                <div class="featured-game-icon"><img src="{{ asset('assets/web/img/icon/featured_game_icon.png') }}" alt=""></div>
                                <h4><a href="#">JUST FOR <span>GAMERS</span></a></h4>
                                <div class="featured-game-meta">
                                    <i class="fas fa-bell"></i>
                                    <span>Playstation 5 , Xbox</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 grid-item" style="position: absolute; left: 0%; top: 515px;">
                        <div class="featured-game-item mb-30">
                            <div class="featured-game-thumb">
                                <img src="{{ asset('assets/web/img/images/featured_game_thumb04.jpg') }}" alt="">
                            </div>
                            <div class="featured-game-content">
                                <h4><a href="#">JUST FOR <span>GAMERS</span></a></h4>
                                <div class="featured-game-meta">
                                    <i class="fas fa-bell"></i>
                                    <span>Playstation 5 , Xbox</span>
                                </div>
                            </div>
                            <div class="featured-game-content featured-game-overlay-content">
                                <div class="featured-game-icon"><img src="{{ asset('assets/web/img/icon/featured_game_icon.png') }}" alt=""></div>
                                <h4><a href="#">JUST FOR <span>GAMERS</span></a></h4>
                                <div class="featured-game-meta">
                                    <i class="fas fa-bell"></i>
                                    <span>Playstation 5 , Xbox</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 grid-item" style="position: absolute; left: 66.6667%; top: 515px;">
                        <div class="featured-game-item mb-30">
                            <div class="featured-game-thumb">
                                <img src="{{ asset('assets/web/img/images/featured_game_thumb06.jpg') }}" alt="">
                            </div>
                            <div class="featured-game-content">
                                <h4><a href="#">JUST FOR <span>GAMERS</span></a></h4>
                                <div class="featured-game-meta">
                                    <i class="fas fa-bell"></i>
                                    <span>Playstation 5 , Xbox</span>
                                </div>
                            </div>
                            <div class="featured-game-content featured-game-overlay-content">
                                <div class="featured-game-icon"><img src="{{ asset('assets/web/img/icon/featured_game_icon.png') }}" alt=""></div>
                                <h4><a href="#">JUST FOR <span>GAMERS</span></a></h4>
                                <div class="featured-game-meta">
                                    <i class="fas fa-bell"></i>
                                    <span>Playstation 5 , Xbox</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 grid-item" style="position: absolute; left: 33.3333%; top: 570px;">
                        <div class="featured-game-item mb-30">
                            <div class="featured-game-thumb">
                                <img src="{{ asset('assets/web/img/images/featured_game_thumb05.jpg') }}" alt="">
                            </div>
                            <div class="featured-game-content">
                                <h4><a href="#">JUST FOR <span>GAMERS</span></a></h4>
                                <div class="featured-game-meta">
                                    <i class="fas fa-bell"></i>
                                    <span>Playstation 5 , Xbox</span>
                                </div>
                            </div>
                            <div class="featured-game-content featured-game-overlay-content">
                                <div class="featured-game-icon"><img src="{{ asset('assets/web/img/icon/featured_game_icon.png') }}" alt=""></div>
                                <h4><a href="#">JUST FOR <span>GAMERS</span></a></h4>
                                <div class="featured-game-meta">
                                    <i class="fas fa-bell"></i>
                                    <span>Playstation 5 , Xbox</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- featured-game-area-end -->

        <!-- cta-area -->
        <section class="cta-area cta-bg">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-6">
                        <div class="cta-img">
                            <img src="{{ asset('assets/web/img/images/cta_img.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cta-content">
                            <div class="cta-icon mb-15">
                                <img src="{{ asset('assets/web/img/icon/cta_icon.png') }}" alt="">
                            </div>
                            <div class="section-title title-style-three white-title mb-50">
                                <h2>ACERCA DE <span>NOSOTROS</span></h2>
                                <p>Somos una plataforma enfocada en el desarrollo de los juegos educativos y destinado a los niños, escuelas y profesores.</p>
                            </div>
                            <div class="cta-btn">
                                <a href="{{ url('/nosotros') }}" class="btn btn-style-two">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-area-end -->

        <!-- shop-area -->
        <section class="shop-area pt-115 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title title-style-three text-center mb-70">
                          <h2>Futuros <span>Lanzamientos</span></h2>
                          <p>Estos son algunos de los futuros lanzamientos que EducaVerse tienen para ti.</p>
                      </div>
                    </div>
                </div>
                <div class="row product-active slick-initialized slick-slider" id="productos">
                  <div class="slick-list draggable">
                    <div class="col-xl-3 slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 308px;" tabindex="0">
                      <div class="shop-item">
                        <div class="product-thumb">
                            <a href="#" tabindex="0"><img src="{{ asset('assets/web/img/images/featured_game_thumb02.jpg') }}" alt=""></a>
                        </div>
                        <div class="product-content">
                          <div class="product-tag"><a href="#" tabindex="0">Matemáticas</a></div>
                          <h4 class="text-center"><a href="#" tabindex="0">Aprende a contar</a></h4>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 308px;" tabindex="0">
                      <div class="shop-item">
                        <div class="product-thumb">
                          <a href="#" tabindex="0"><img src="{{ asset('assets/web/img/product/s_product_img02.jpg') }}" alt=""></a>
                        </div>
                        <div class="product-content">
                          <div class="product-tag"><a href="#" tabindex="0">x-box</a></div>
                          <h4><a href="#" tabindex="0">Gears 5 Xbox Controller</a></h4>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 308px;" tabindex="0">
                      <div class="shop-item">
                        <div class="product-thumb">
                          <a href="#" tabindex="0"><img src="{{ asset('assets/web/img/product/s_product_img03.jpg') }}" alt=""></a>
                        </div>
                        <div class="product-content">
                          <div class="product-tag"><a href="#" tabindex="0">graphics</a></div>
                          <h4><a href="#" tabindex="0">GeForce RTX 2070</a></h4>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 308px;" tabindex="0">
                      <div class="shop-item">
                        <div class="product-thumb">
                          <a href="#" tabindex="0"><img src="{{ asset('assets/web/img/product/s_product_img04.jpg') }}" alt=""></a>
                        </div>
                        <div class="product-content">
                          <div class="product-tag"><a href="#" tabindex="0">VR-Box</a></div>
                          <h4><a href="#" tabindex="0">Virtual Reality Smiled</a></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>                
              </div>
            </div>
        </section>
        <!-- shop-area-end -->
      </main>

      <footer>
        <div class="footer-top footer-bg s-footer-bg">
          <div class="container pt-5">
              <div class="row justify-content-between">
                  <div class="col-xl-4 col-lg-4 col-md-6">
                      <div class="footer-widget">
                          <div class="footer-logo mb-35">
                              <a href="{{ url('/') }}"><img src="{{ asset('assets/images/EducaverseAzul.png') }}" width="200px" alt="Logo"></a>
                          </div>
                          <div class="footer-text">
                              <p>Somos una plataforma de videojuegos que tiene lo mejor para ti.</p>
                              <div class="footer-contact">
                                  <ul>
                                      <li><i class="fas fa-map-marker-alt"></i> <span>Dirección : </span>Carr. Durango – Mezquital, C.P. 34308, Durango, Dgo, México.</li>
                                      <li><i class="fas fa-headphones"></i> <span>Phone : </span>+52 618 137 3050</li>
                                      <li><i class="fas fa-envelope-open"></i><span>Email : </span>contacto@educaverse.com</li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-2 col-lg-3 col-sm-6">
                      <div class="footer-widget">
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
                  <div class="col-xl-2 col-lg-3 col-sm-6">
                      <div class="footer-widget">
                          <div class="fw-title mb-35">
                              <h5>¿Necesitas ayuda?</h5>
                          </div>
                          <div class="fw-link">
                              <ul>
                                  <li><a href="#">Terminos &amp; Condiciones</a></li>
                                  <li><a href="#">Politica de privacidad</a></li>
                                  <li><a href="#">Preguntas frecuentes</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-2 col-lg-4 col-md-6">
                      <div class="footer-widget">
                          <div class="fw-title mb-35">
                              <h5>Siguenos</h5>
                          </div>
                          <div class="footer-social">
                              <ul>
                                  <li><a href="#" class="d-flex align-items-center justify-content-center"><i class="fab fa-facebook-f"></i></a></li>
                                  <li><a href="#" class="d-flex align-items-center justify-content-center"><i class="fab fa-twitter"></i></a></li>
                                  <li><a href="#" class="d-flex align-items-center justify-content-center"><i class="fab fa-instagram"></i></a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="footer-fire"><img src="{{ asset('assets/web/img/images/footer_fire.png') }}" alt=""></div>
          <div class="footer-fire footer-fire-right"><img src="{{ asset('assets/web/img/images/footer_fire.png') }}" alt=""></div>
        </div>
        <div class="copyright-wrap s-copyright-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright-text">
                            <p>© Copyright EducaVerse. Todos los derechos reservados.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 d-none d-md-block">
                        <div class="payment-method-img text-right">
                            <img src="{{ asset('assets/web/img/images/card_img.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </footer>
      <!-- footer-area-end -->

    <!-- JS here -->
    <script src="{{ asset('assets/web/js/vendor/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/isotope.pkgd.min.js') }}"></script>    
    <script src="{{ asset('assets/web/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/aos.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery.lettering.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery.textillate.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery.odometer.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/web/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/web/js/main.js') }}"></script>
  </body>
</html>