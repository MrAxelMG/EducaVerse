<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Videogames | EducaVerse</title>
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
                                <span>Last games</span>
                                <h2>Video games <span>launched</span></h2>
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
                                            <p>Price : <span>${{ number_format($videojuego->precio, 2) }}</span></p>
                                            <a href="{{ $videojuego->url }}" data-videojuegoid="{{ $videojuego->id }}" data-precio="{{ $videojuego->precio }}" data-cantidad="1" target="_blank" class="btn btn-style-two comprar" style="padding: 10px 25px !important; margin-top: 40px; margin-bottom: -15px">Buy</a>
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