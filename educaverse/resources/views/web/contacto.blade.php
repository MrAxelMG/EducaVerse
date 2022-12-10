<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contacto | EducaVerse</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('website.assets.css')
</head>

<body>

    @include('website.assets.preloader')
    
    @include('website.assets.header')  
    
    <main>
        <section class="breadcrumb-area breadcrumb-bg2">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content text-center">
                            <h2>Información de <span>contacto</span></h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page" style="font-weight: bold;">Contacto</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-area pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div id="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1378.800842763158!2d-104.61964073652341!3d23.99011830000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869bb833da45df2b%3A0x2392fefbf317535!2sUniversidad%20Tecnol%C3%B3gica%20de%20Durango!5e1!3m2!1ses-419!2smx!4v1668389158480!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-45">
                        <div class="section-title title-style-three mb-20">
                            <h2>Contacto con <span>Educaverse</span></h2>
                        </div>
                        <div class="contact-info-list mb-40">
                            <ul>                                
                                <li>
                                    <a href="" style="color: #6c6c6c">
                                        <i class="fas fa-map-marker-alt"></i> 
                                        <span>Dirección : </span>
                                        Carr. Durango – Mezquital, C.P. 34308, Durango, Dgo, México.
                                    </a>
                                </li>
                                <li>
                                    <a href="" style="color: #6c6c6c">
                                        <i class="fas fa-phone"></i> 
                                        <span>Celular : </span>
                                        +52 618 137 3050
                                    </a>
                                </li>
                                <li>                                    
                                    <a href="mailto:contacto@educaverse.com" style="color: #6c6c6c">
                                        <i class="fas fa-envelope"></i>
                                        <span>Email : </span>
                                        contacto@educaverse.com
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="contact-form" >
                            <form id="contactoForm" action="contacto/add">
                                @csrf
                                <textarea name="mensaje" id="message" placeholder="Escribe un mensaje"></textarea>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="nombre" placeholder="Nombre">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <button type="submit" id="enviarMensaje">Enviar mensaje</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('website.assets.footer')
    
    @include('website.assets.js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('js/contacto.js') }}"></script>
</body>

</html>