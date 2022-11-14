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
                                            <a href="#"><img src="images/images/{{ $videojuego->imagen }}" alt="{{ $videojuego->nombre }}" height="450px"></a>
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