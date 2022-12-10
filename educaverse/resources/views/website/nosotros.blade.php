<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>About us | EducaVerse</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('website.assets.css')
</head>

<body>

    @include('website.assets.preloader')
    
    @include('website.assets.header')  
    
    <main>
        <section class="breadcrumb-area breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content text-center">
                            <h2>About <span>us</span></h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page" style="font-weight: bold;">About us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="inner-about-area fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-6 order-0 order-lg-2">
                        <div class="inner-about-img">
                            <img src="{{ asset('images/images/inner_about_img01.png') }}" class="wow fadeInRight" data-wow-delay=".3s"
                                alt="">
                            <img src="{{ asset('images/images/inner_about_img02.png') }}" class="wow fadeInLeft" data-wow-delay=".6s"
                                alt="">
                            <img src="{{ asset('images/images/inner_about_img03.png') }}" class="wow fadeInUp" data-wow-delay=".6s"
                                alt="">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="section-title title-style-three mb-25">
                            <h2>About <span>us</span></h2>
                        </div>
                        <div class="inner-about-content">
                            <h5>Educational video games platform</h5>                            
                            <p style="text-align: justify">
                                We developed an educational platform with environments with a high degree of participation and interactivity, in which the student can build, design, modify, experiment, and get involved in a much more active way in the learning process.
                            </p>
                            <p style="text-align: justify">
                                We try to strengthen self-regulation for learning in children, through a didactic application.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="inner-about-shape"><img src="{{ asset('images/images/medale_shape.png') }}" alt=""></div>
        </section>
    </main>

    @include('website.assets.footer')
    
    @include('website.assets.js')
</body>

</html>