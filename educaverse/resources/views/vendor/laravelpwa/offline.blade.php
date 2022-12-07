<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EducaVerse</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('website.assets.css')
</head>

<body>

    <main>
        <section class="slider-area home-four-slider">
            <div class="slider-active">                
                <div class="single-slider slider-bg slider-style-two">
                    <div class="container custom-container-two">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-11">
                                <div class="slider-content">
                                    <h2 data-animation="fadeInUp" data-delay=".4s" style="text-transform: none; margin-left: 2.6rem !important;">
                                        <span style="color: #2f552a">No tienes internet, revisa tu conexión, yo te esperaré sentado.</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="slider-img" style="right: 5% !important">
                            <img src="{{ asset('images/funko/sentadino.png') }}" style="width: 460px !important" alt="" data-animation="slideInRightS" data-delay=".8s">
                        </div>
                    </div>
                </div>
                <div class="single-slider slider-bg slider-style-two">
                    <div class="container custom-container-two">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-11">
                                <div class="slider-content">
                                    <h2 data-animation="fadeInUp" data-delay=".4s" style="text-transform: none; margin-left: 2.6rem !important;">
                                        <span style="color: #2f552a">No tienes internet, revisa tu conexión, Like.</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="slider-img"><img src="{{ asset('images/funko/like.png') }}" alt=""
                                data-animation="slideInRightS" data-delay=".8s"></div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    @include('website.assets.js')

</body>

</html>