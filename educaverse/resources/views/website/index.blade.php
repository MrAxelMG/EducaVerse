<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EducaVerse</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('website.assets.css')
    
</head>

<body>

    @include('website.assets.preloader')
    
    @include('website.assets.header')
    
    <main>
        <section class="slider-area home-four-slider">
            <div class="slider-active">
                <div class="single-slider slider-bg slider-style-two">
                    <div class="container custom-container-two">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-11">
                                <div class="slider-content">
                                    <h6 data-animation="fadeInUp" data-delay=".4s" style="color: #418039; margin-left: 2.8rem ;">EducaVerse</h6>
                                    <h2 data-animation="fadeInUp" data-delay=".4s" style="text-transform: none; margin-left: 2.6rem ;">Educational <span style="color: #2f552a">video games</span> company</h2>
                                </div>
                            </div>
                        </div>
                        <div class="slider-img"><img src="{{ asset('images/funko/like.png') }}" alt=""
                                data-animation="slideInRightS" data-delay=".8s"></div>
                    </div>
                </div>
                <div class="single-slider slider-bg slider-style-two">
                    <div class="container custom-container-two">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-11">
                                <div class="slider-content">
                                    <h6 data-animation="fadeInUp" data-delay=".4s" style="color: #418039; margin-left: 2.8rem ;">EducaVerse</h6>
                                    <h2 data-animation="fadeInUp" data-delay=".4s" style="text-transform: none; margin-left: 2.6rem ;">Educational <span style="color: #2f552a">video game</span> company</h2>
                                </div>
                            </div>
                        </div>
                        <div class="slider-img" style="right: 5% !important">
                            <img src="{{ asset('images/funko/sentadino.png') }}" style="width: 460px !important" alt="" data-animation="slideInRightS" data-delay=".8s">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="released-games-area gray-bg pt-115 pb-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title title-style-three text-center mb-20">
                          <h2>Games <span>launched</span></h2>
                          <p>Here you can purchase our released video games, as well as review their features.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-12">
                        <div class="released-game-active">
                            @foreach ($videojuegos as $videojuego)                                
                                <div class="released-game-carousel">
                                    <div class="released-game-item">
                                        <div class="released-game-item-bg"></div>
                                        <div class="released-game-img">
                                            <img src="{{ asset("images/videojuegos/$videojuego->imagen") }}" alt="{{ $videojuego->nombre }}" height="365px">
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
                                            @php
                                                $nombre = explode(' ', $videojuego->nombre, 2);

                                                $plataformas = explode(",", $videojuego->plataformas);

                                                $plat = "";
                                                foreach ($plataformas as $plataforma) {
                                                    $plat .= "$plataforma, ";
                                                }

                                                $plat = substr($plat, 0, -4);
                                            @endphp
                                            <h4>{{ $nombre[0] }} <span>{{ $nombre[1] }}</span></h4>
                                            <div class="released-game-list mb-15">
                                                <ul>
                                                    <li><span>Subject :</span> {{ $videojuego->nombreMateria }}.</li>
                                                    <li><span>Category :</span> {{ $videojuego->nombreCategoria }}.</li>
                                                    <li><span>Players :</span> {{ $videojuego->jugadores }}.</li>
                                                    <li><span>Platforms :</span> {{ $plat }}.</li>
                                                    <li><span>Price :</span>${{ number_format($videojuego->precio, 2) }} MXN.</li>
                                                </ul>
                                            </div>
                                            <p>{{ $videojuego->descripcion }}</p>
                                            <a href="{{ $videojuego->url }}" class="btn btn-style-two comprar" data-videojuegoid="{{ $videojuego->id }}" data-precio="{{ $videojuego->precio }}" data-cantidad="1" target="_blank">Buy now</a>
                                        </div>
                                    </div>                                    
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="released-game-nav">
                            @foreach ($videojuegos as $videojuego)                                
                                <div class="released-game-nav-item">
                                    <img src="{{ asset("images/videojuegos/$videojuego->imagen2") }}" alt="{{ $videojuego->nombre }}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="just-gamers-area just-gamers-bg pt-115 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-10">
                        <div class="section-title title-style-three white-title mb-70">
                            <h2>About <span>EducaVerse</span></h2>
                            <p>To inform you about our video games, here are some important points of the company.</p>
                        </div>
                        <div class="just-gamers-list">
                            <ul>
                                <li>
                                    <div class="just-gamers-list-icon d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('images/funko/jugador-contra-jugador.png') }}" alt="">
                                    </div>
                                    <div class="just-gamers-list-content fix">
                                        <h5>Educational video games</h5>
                                        <p>We have video games to support the teacher in the teaching process.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="just-gamers-list-icon d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('images/funko/pazmado.png') }}" alt="">
                                    </div>
                                    <div class="just-gamers-list-content fix">
                                        <h5>Design &amp; Learning</h5>
                                        <p>Video games for users to learn by themselves.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="just-gamers-list-icon d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('images/funko/explorador.png') }}" alt="">
                                    </div>
                                    <div class="just-gamers-list-content fix">
                                        <h5>Open world</h5>
                                        <p>An open world so that users can visit all the areas created.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 d-none d-lg-block">
                        <div class="just-gamers-img">
                            <img src="{{ asset('images/funko/paz.png') }}" alt="pazmado" class="just-gamers-character">
                            <div class="just-gamers-circle-shape">
                                <img src="{{ asset('images/images/gamers_circle_line.png') }}" alt="">
                                <img src="{{ asset('images/images/gamers_circle_shape.png') }}" alt="" class="rotateme">
                            </div>
                            <img src="{{ asset('images/images/just_gamers_chart.png') }}" alt="" class="gamers-chart-shape">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="featured-game-area new-released-game-area pt-115 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title title-style-three text-center mb-70">
                          <h2>GAMES <span>GALLERY</span></h2>
                          <p>We show you some covers of the video games we have for you.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid container-full">
                <div class="row no-gutters new-released-game-active text-center justify-content-center">
                    @foreach ($videojuegos as $videojuego)
                        @php
                            $nombre = explode(' ', $videojuego->nombre, 2);

                            $plataformas = explode(",", $videojuego->plataformas);

                            $plat = "";
                            foreach ($plataformas as $plataforma) {
                                $plat .= "$plataforma, ";
                            }

                            $plat = substr($plat, 0, -4);
                        @endphp
                        <div class="col-lg-3">
                            <div class="featured-game-item mb-30">
                                <div class="featured-game-thumb">
                                    <img src="{{ asset("images/videojuegos/$videojuego->imagen") }}" alt="{{ $videojuego->nombre }}" height="365px">
                                </div>
                                <div class="featured-game-content">
                                    <h4><a href="#" class="prevent">{{ $nombre[0] }} <span style="color: #221d1d">{{ $nombre[1] }}</span></a></h4>
                                </div>
                                <div class="featured-game-content featured-game-overlay-content">
                                    <div class="featured-game-icon"><img src="{{ asset('images/icon/featured_game_icon.png') }}" alt=""></div>
                                    <h4><a href="#" class="prevent">{{ $nombre[0] }} <span>{{ $nombre[1] }}</span></a></h4>
                                    <div class="featured-game-meta">
                                        <i class="fas fa-bell"></i>
                                        <span>{{ $plat }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach                    
                </div>
            </div>
        </section>        
        
        <div class="home-four-area-bg">
            <div class="bg"></div>
            <section class="live-match-area pt-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8">
                            <div class="section-title home-four-title text-center mb-60">
                                <h2>EducaVerse <span>Trailer</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-9">
                            <div class="live-match-wrap">
                                <img src="{{ asset('images/images/live_match_img.png') }}" alt="">
                                <a href="https://www.youtube.com/watch?v=rcyRYGE0pwU" class="popup-video"><img
                                        src="{{ asset('images/icon/video_play_icon.png') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section class="shop-area home-four-shop-area pt-115 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title title-style-three white-title text-center mb-35">
                            <h2>Future <span>Launches</span></h2>
                          <p>These are some of the future releases that EducaVerse has for you.</p>
                        </div>
                    </div>
                </div>
                <div class="row product-active">
                    <div class="col-xl-3">
                        <div class="shop-item">
                            <div class="product-thumb">
                                <a href="#"><img src="{{ asset('images/proximos/encuentra objetos perdidos en.png') }}" alt="Encuentra objetos perdidos" width="278px" height="243px"></a>
                            </div>
                            <div class="product-content">
                                <div class="product-tag"><a href="#">L. Thinking</a></div>
                                <h4><a href="#">Find lost items</a></h4>
                                <div class="product-meta">
                                    <div class="product-price">
                                        <h5>coming soon!</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="shop-item">
                            <div class="product-thumb">
                                <a href="#"><img src="{{ asset('images/proximos/mas zonas con parkour en.png') }}" alt="Mas zonas con parkour" width="278px" height="243px"></a>
                            </div>
                            <div class="product-content">
                                <div class="product-tag"><a href="#">Ability</a></div>
                                <h4><a href="#">More areas with parkour</a></h4>
                                <div class="product-meta">
                                    <div class="product-price">
                                        <h5>coming soon!</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="shop-item">
                            <div class="product-thumb">
                                <a href="#"><img src="{{ asset('images/proximos/recorrido inicial rejugable en.png') }}" alt="Recorrido inicial rejugable" width="278px" height="243px"></a>
                            </div>
                            <div class="product-content">
                                <div class="product-tag"><a href="#">Ability</a></div>
                                <h4><a href="#">Replayable initial path</a></h4>
                                <div class="product-meta">
                                    <div class="product-price">
                                        <h5>coming soon!</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="shop-item">
                            <div class="product-thumb">
                                <a href="#"><img src="{{ asset('images/proximos/recorrido matematico avanzado en.png') }}" alt="Recorrido matemático avanzado" width="278px" height="243px"></a>
                            </div>
                            <div class="product-content">
                                <div class="product-tag"><a href="#">Mathematics</a></div>
                                <h4><a href="#">Advanced mathematical tour</a></h4>
                                <div class="product-meta">
                                    <div class="product-price">
                                        <h5>coming soon!</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="shop-item">
                            <div class="product-thumb">
                                <a href="#"><img src="{{ asset('images/proximos/rompecabezas geografica en.png') }}" alt="Rompecabezas geográfico" width="278px" height="243px"></a>
                            </div>
                            <div class="product-content">
                                <div class="product-tag"><a href="#">Geography</a></div>
                                <h4><a href="#">Geographic puzzle</a></h4>
                                <div class="product-meta">
                                    <div class="product-price">
                                        <h5>coming soon!</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="shop-item">
                            <div class="product-thumb">
                                <a href="#"><img src="{{ asset('images/proximos/nintendo.jpg') }}" alt="Diferentes plataformas" width="278px" height="243px"></a>
                            </div>
                            <div class="product-content">
                                <div class="product-tag"><a href="#">Nintendo DS</a></div>
                                <h4><a href="#">Different platforms</a></h4>
                                <div class="product-meta">
                                    <div class="product-price">
                                        <h5>coming soon!</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('website.assets.footer')

    
    @include('website.assets.js')
</body>

</html>