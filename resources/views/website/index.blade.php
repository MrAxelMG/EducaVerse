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
                                    <h6 data-animation="fadeInUp" data-delay=".4s">EducaVerse</h6>
                                    <h2 data-animation="fadeInUp" data-delay=".4s">Empresa de <span>Videojuegos</span> Educativos</h2>
                                    <p data-animation="fadeInUp" data-delay=".6s">
                                        Desarrollamos videojuegos educativos en entornos de un alto grado de participación e interactividad, en los que el alumno es capaz de construir, diseñar, modificar, experimentar e involucrarse de forma mucho más activa en el proceso de su aprendizaje.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="slider-img"><img src="images/slider/four_slider_img01.png" alt=""
                                data-animation="slideInRightS" data-delay=".8s"></div>
                    </div>
                </div>
                <div class="single-slider slider-bg slider-style-two">
                    <div class="container custom-container-two">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-11">
                                <div class="slider-content">
                                    <h6 data-animation="fadeInUp" data-delay=".4s">EducaVerse</h6>
                                    <h2 data-animation="fadeInUp" data-delay=".4s">Empresa de <span>Videojuegos</span> Educativos</h2>
                                    <p data-animation="fadeInUp" data-delay=".6s">
                                        Desarrollamos videojuegos educativos en entornos de un alto grado de participación e interactividad, en los que el alumno es capaz de construir, diseñar, modificar, experimentar e involucrarse de forma mucho más activa en el proceso de su aprendizaje.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="slider-img"><img src="images/slider/four_slider_img02.png" alt=""
                                data-animation="slideInRightS" data-delay=".8s"></div>
                    </div>
                </div>
            </div>
        </section>

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
                        <div class="released-game-active">
                            @foreach ($videojuegos as $videojuego)                                
                                <div class="released-game-carousel">
                                    <div class="released-game-item">
                                        <div class="released-game-item-bg"></div>
                                        <div class="released-game-img">
                                            <img src="images/videojuegos/{{ $videojuego->imagen }}" alt="{{ $videojuego->nombre }}" height="365px">
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
                                                    <li><span>Materia :</span> {{ $videojuego->nombreMateria }}.</li>
                                                    <li><span>Categoría :</span> {{ $videojuego->nombreCategoria }}.</li>
                                                    <li><span>Jugadores :</span> {{ $videojuego->jugadores }}.</li>
                                                    <li><span>Plataformas :</span> {{ $plat }}.</li>
                                                </ul>
                                            </div>
                                            <p>{{ $videojuego->descripcion }}</p>
                                            <a href="#" class="btn btn-style-two">Comprar ahora</a>
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
                                    <img src="images/videojuegos/{{ $videojuego->imagen2 }}" alt="{{ $videojuego->nombre }}">
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
                            <h2>Conoce <span>EducaVerse</span></h2>
                            <p>Para informarte de nuestros videojuegos, aquí te dejamos algunos puntos importantes de la empresa.</p>
                        </div>
                        <div class="just-gamers-list">
                            <ul>
                                <li>
                                    <div class="just-gamers-list-icon d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('images/icon/gamer_list_icon01.png') }}" alt="">
                                    </div>
                                    <div class="just-gamers-list-content fix">
                                        <h5>Videojuegos educativos</h5>
                                        <p>Tenemos videojuegos con el fin de apoyar al docente en el proceso de enseñanza.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="just-gamers-list-icon d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('images/icon/gamer_list_icon02.png') }}" alt="">
                                    </div>
                                    <div class="just-gamers-list-content fix">
                                        <h5>Diseño &amp; Aprendizaje</h5>
                                        <p>Videojuegos para que los usuarios aprendan por si solos.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="just-gamers-list-icon d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('images/icon/gamer_list_icon03.png') }}" alt="">
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
                            <img src="{{ asset('images/images/just_gamers_img.png') }}" alt="" class="just-gamers-character">
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
                          <h2>GALERIA DE LOS <span>JUEGOS</span></h2>
                          <p>Te mostramos algunas portadas de los videojuegos que tenemos para ti.</p>
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
                                    <img src="images/videojuegos/{{ $videojuego->imagen }}" alt="{{ $videojuego->nombre }}" height="365px">
                                </div>
                                <div class="featured-game-content">
                                    <h4><a href="#">{{ $nombre[0] }} <span>{{ $nombre[1] }}</span></a></h4>
                                    <div class="featured-game-meta">
                                        <i class="fas fa-bell" style="color: rgb(0, 0, 0)"></i>
                                        <span style="color: rgb(0, 0, 0)"><b>{{ $plat }}</b></span>
                                    </div>
                                </div>
                                <div class="featured-game-content featured-game-overlay-content">
                                    <div class="featured-game-icon"><img src="images/icon/featured_game_icon.png" alt=""></div>
                                    <h4><a href="#">{{ $nombre[0] }} <span>{{ $nombre[1] }}</span></a></h4>
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
                                <h2>Trailer de <span>Aprende a contar</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-9">
                            <div class="live-match-wrap">
                                <img src="images/images/live_match_img.jpg" alt="">
                                <a href="https://www.youtube.com/watch?v=04KPiGmC7Lc" class="popup-video"><img
                                        src="images/icon/video_play_icon.png" alt=""></a>
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
                            <h2>Futuros <span>Lanzamientos</span></h2>
                          <p>Estos son algunos de los futuros lanzamientos que EducaVerse tienen para ti.</p>
                        </div>
                    </div>
                </div>
                <div class="row product-active">
                    <div class="col-xl-3">
                        <div class="shop-item">
                            <div class="product-thumb">
                                <a href="#"><img src="images/product/s_product_img01.jpg" alt=""></a>
                            </div>
                            <div class="product-content">
                                <div class="product-tag"><a href="#">t-shirt</a></div>
                                <h4><a href="#">Women Black T-shirt</a></h4>
                                <div class="product-meta">
                                    <div class="product-price">
                                        <h5>proximamente</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="shop-item">
                            <div class="product-thumb">
                                <a href="#"><img src="images/product/s_product_img02.jpg" alt=""></a>
                            </div>
                            <div class="product-content">
                                <div class="product-tag"><a href="#">x-box</a></div>
                                <h4><a href="#">Gears 5 Xbox Controller</a></h4>
                                <div class="product-meta">
                                    <div class="product-price">
                                        <h5>proximamente</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="shop-item">
                            <div class="product-thumb">
                                <a href="#"><img src="images/product/s_product_img03.jpg" alt=""></a>
                            </div>
                            <div class="product-content">
                                <div class="product-tag"><a href="#">graphics</a></div>
                                <h4><a href="#">GeForce RTX 2070</a></h4>
                                <div class="product-meta">
                                    <div class="product-price">
                                        <h5>proximamente</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="shop-item">
                            <div class="product-thumb">
                                <a href="#"><img src="images/product/s_product_img04.jpg" alt=""></a>
                            </div>
                            <div class="product-content">
                                <div class="product-tag"><a href="#">VR-Box</a></div>
                                <h4><a href="#">Virtual Reality Smiled</a></h4>
                                <div class="product-meta">
                                    <div class="product-price">
                                        <h5>proximamente</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="shop-item">
                            <div class="product-thumb">
                                <a href="#"><img src="images/product/s_product_img04.jpg" alt=""></a>
                            </div>
                            <div class="product-content">
                                <div class="product-tag"><a href="#">VR-Box</a></div>
                                <h4><a href="#">Virtual Reality Smiled</a></h4>
                                <div class="product-meta">
                                    <div class="product-price">
                                        <h5>proximamente</h5>
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