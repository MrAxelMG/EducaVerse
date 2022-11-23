<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Videojuegos | EducaVerse</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('website.assets.css')
</head>

<body>

    @include('website.assets.preloader')
    
    @include('website.assets.header')  
    
    <main>
        <div class="home-four-area-bg">
            <div class="bg"></div>
            <section class="latest-games-area home-four-latest-games pt-120">
                <div class="container" style="margin-top: -5rem">
                    <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <div class="section-title home-four-title mb-50">
                                <span>Últimos juegos</span>
                                <h2>Videojuegos <span>lanzados</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="latest-games-active owl-carousel">
                                @foreach ($videojuegos as $videojuego)                                    
                                    <div class="latest-games-items mb-30">
                                        <div class="latest-games-thumb">
                                            <a href="#"><img src="{{ asset("images/videojuegos/$videojuego->imagen") }}" alt="{{ $videojuego->nombre }}" height="400px"></a>
                                        </div>
                                        <div class="latest-games-content">
                                            <div class="lg-tag"><a href="#">{{ $videojuego->nombreMateria }}</a></div>
                                            @php
                                                $nombre = explode(' ', $videojuego->nombre, 2);
                                            @endphp
                                            <h4>{{ $nombre[0] }} <span>{{ $nombre[1] }}</span></h4>
                                            <p>Precio : <span>${{ number_format($videojuego->precio, 2) }}</span></p>
                                        </div>
                                    </div>
                                @endforeach
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
                                <a href="#"><img src="{{ asset('images/proximos/encuentra objetos perdidos.png') }}" alt="Encuentra objetos perdidos" width="278px" height="243px"></a>
                            </div>
                            <div class="product-content">
                                <div class="product-tag"><a href="#">P. Lógico</a></div>
                                <h4><a href="#">Encuentra objetos perdidos</a></h4>
                                <div class="product-meta">
                                    <div class="product-price">
                                        <h5>¡proximamente!</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="shop-item">
                            <div class="product-thumb">
                                <a href="#"><img src="{{ asset('images/proximos/mas zonas con parkour.png') }}" alt="Mas zonas con parkour" width="278px" height="243px"></a>
                            </div>
                            <div class="product-content">
                                <div class="product-tag"><a href="#">Habilidad</a></div>
                                <h4><a href="#">Mas zonas con parkour</a></h4>
                                <div class="product-meta">
                                    <div class="product-price">
                                        <h5>¡proximamente!</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="shop-item">
                            <div class="product-thumb">
                                <a href="#"><img src="{{ asset('images/proximos/recorrido inicial rejugable.png') }}" alt="Recorrido inicial rejugable" width="278px" height="243px"></a>
                            </div>
                            <div class="product-content">
                                <div class="product-tag"><a href="#">Habilidad</a></div>
                                <h4><a href="#">Recorrido inicial rejugable</a></h4>
                                <div class="product-meta">
                                    <div class="product-price">
                                        <h5>¡proximamente!</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="shop-item">
                            <div class="product-thumb">
                                <a href="#"><img src="{{ asset('images/proximos/recorrido matematico avanzado.png') }}" alt="Recorrido matemático avanzado" width="278px" height="243px"></a>
                            </div>
                            <div class="product-content">
                                <div class="product-tag"><a href="#">Matemáticas</a></div>
                                <h4><a href="#">Recorrido matemático avanzado</a></h4>
                                <div class="product-meta">
                                    <div class="product-price">
                                        <h5>¡proximamente!</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="shop-item">
                            <div class="product-thumb">
                                <a href="#"><img src="{{ asset('images/proximos/rompecabezas geografico.png') }}" alt="Rompecabezas geográfico" width="278px" height="243px"></a>
                            </div>
                            <div class="product-content">
                                <div class="product-tag"><a href="#">Geografía</a></div>
                                <h4><a href="#">Rompecabezas geográfico</a></h4>
                                <div class="product-meta">
                                    <div class="product-price">
                                        <h5>¡proximamente!</h5>
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
                                <h4><a href="#">Diferentes plataformas</a></h4>
                                <div class="product-meta">
                                    <div class="product-price">
                                        <h5>¡proximamente!</h5>
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