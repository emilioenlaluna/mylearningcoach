@extends('layouts.app')
@section('titulo', $viewData["titulo"])
@section('contenido')
    <!-- Carrusel -->
    <div id="destacado"></div>
    <div id="carruselPresentacion" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carruselPresentacion" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carruselPresentacion" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carruselPresentacion" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carruselPresentacion" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <div class="overlay-image" style="background-image:url({{asset('/img/Slides/slide1.jpg') }});"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h4>Primera imagen sobre lectura</h4>
                    <p>La lectura nos permite adquirir conocimientos que no hay en otro lugar.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <div class="overlay-image" style="background-image: url({{asset('/img/Slides/numeros.jpg') }});"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h4>La matemáticas siempre estan presentes</h4>
                    <p>El aprender matemáticas nos permite conocer el mundo y como se mueve.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <div class="overlay-image"
                     style="background-image: url({{asset('/img/Slides/tecnologia.jpg') }});"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h4>Manejemos las nuevas tecnologías</h4>
                    <p>Hoy en día la tecnología esta presente en todos lados.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="10000">
                <div class="overlay-image"
                     style="background-image: url({{asset('/img/Slides/nuestraBandera.jpg') }});"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h4>¡Somos México!</h4>
                    <p>Orgullosos por quienes somos.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carruselPresentacion" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carruselPresentacion" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Fin del carrusel -->

    <!-- Sección "Conocenos" -->
    <div class="contenedor">
        <div>
            <p>Texto de quienes somos y a quienes va dirigida la pagina Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor Nuestros objetivos: Lorem Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
            <p>Nuestro objetivo es <strong>fortalecer conocimientos de la educación básica de forma gratuita</strong>,
                en materias como: ciencias, tecnología, matemáticas, ingeniería, arte (STEAM) e idiomas, etc.</p>
        </div>
        <div class="text-center familyArima" id="cuentas">Nuestros usuarios</div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 align-items-center">
            <div class="col mg-top">
                <p class="text-center bg-success bg-opacity-10 border border-success rounded fs-4">Alumnos</p>
                <div class="ratio ratio-4x3">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/xT2Z2WP18v4"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            </div>
            <div class="col mg-top">
                <p class="text-center bg-success bg-opacity-10 border border-success rounded fs-4">Padres</p>
                <div class="ratio ratio-4x3">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/QFlT-RJpQ7s"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            </div>
            <div class="col mg-top">
                <p class="text-center bg-success bg-opacity-10 border border-success rounded fs-4">Profesores</p>
                <div class="ratio ratio-4x3">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/TcbmHFXpq60"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            </div>
            <div class="col mg-top">
                <p class="text-center bg-success bg-opacity-10 border border-success rounded fs-4">Tutores</p>
                <div class="ratio ratio-4x3">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/lSm4QZqN8cA"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" style="margin-top: 5vh">
            <div class="col-sm-6 col-xl-3">
                <div>
                    <p class="text-center bg-success bg-opacity-10 border border-success rounded fs-4">
                        Patrocinadores</p>
                    <div class="ratio ratio-4x3">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/MvU_LFyzAGM"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Fin de la sección "Conocenos" -->

        <!-- LogIn sección -->
        <div id="login" style="margin-top: 3vh;"></div>
        <div class="loginCuentas">
            <div class="cabecera text-center familyArima"
                 style="background-color:#8C3D20; border: 5px solid #682d18;">
                Iniciar Sesión
            </div>
            <div class="row align-items-center">
                <a href="login?cuenta=alumno" class="col vinculoCuenta">
                    <div class="text-center textoCuentas">Alumnos</div>
                    <div class="cuadroImagen mx-auto"
                         style="background-image: url({{asset('/img/Cuentas/alumnosCuenta.jpg') }});">
                    </div>
                </a>
                <a href="login?cuenta=padre" class="col vinculoCuenta">
                    <div class="text-center textoCuentas">Padres</div>
                    <div class="cuadroImagen mx-auto"
                         style="background-image: url({{asset('/img/Cuentas/padresCuenta.jpg') }});">
                    </div>
                </a>
                <a href="login?cuenta=maestro" class="col vinculoCuenta">
                    <div class="text-center textoCuentas">Maestros</div>
                    <div class="cuadroImagen mx-auto"
                         style="background-image: url({{asset('/img/Cuentas/maestrosCuenta.jpg') }});">
                    </div>
                </a>
                <a href="login?cuenta=tutor" class="col vinculoCuenta">
                    <div class="text-center textoCuentas">Tutores</div>
                    <div class="cuadroImagen mx-auto"
                         style="background-image: url({{asset('/img/Cuentas/tutoresCuenta.jpg') }});">
                    </div>
                </a>
                <a href="login?cuenta=patrocinador" class="col vinculoCuenta">
                    <div class="text-center textoCuentas">Patrocinador</div>
                    <div class="cuadroImagen mx-auto"
                         style="background-image: url({{asset('/img/Cuentas/patrocinadorCuenta.png') }});">
                    </div>
                </a>
            </div>
        </div>
        <!-- Fin LogIn sección -->

        <!-- Signup sección -->
        <div id="signup" style="margin-top: 10vh;"></div>
        <div class="loginCuentas">
            <div class="cabecera text-center familyArima"
                 style="background-color:#CE1127; border: 5px solid #8b0b1a;">
                Regístrate
            </div>
            <div class="row align-items-center">
                <a href="signup?cuenta=padre" class="col vinculoCuenta">
                    <div class="text-center textoCuentas">Padres</div>
                    <div class="cuadroImagen mx-auto"
                         style="background-image: url({{asset('/img/Cuentas/padresCuenta.jpg') }});">
                    </div>
                </a>
                <a href="signup?cuenta=maestro" class="col vinculoCuenta">
                    <div class="text-center textoCuentas">Maestros</div>
                    <div class="cuadroImagen mx-auto"
                         style="background-image: url({{asset('/img/Cuentas/maestrosCuenta.jpg') }});">
                    </div>
                </a>
                <a href="signup?cuenta=tutor" class="col vinculoCuenta">
                    <div class="text-center textoCuentas">Tutores</div>
                    <div class="cuadroImagen mx-auto"
                         style="background-image: url({{asset('/img/Cuentas/tutoresCuenta.jpg') }});">
                    </div>
                </a>
                <a href="signup?cuenta=patrocinador" class="col vinculoCuenta">
                    <div class="text-center textoCuentas">Patrocinador</div>
                    <div class="cuadroImagen mx-auto"
                         style="background-image: url({{asset('/img/Cuentas/patrocinadorCuenta.png') }});">
                    </div>
                </a>
            </div>
        </div>
        <!-- fin Singup sección -->
@endsection


{{--@extends('layouts.app')--}}
{{--@section('title', $viewData["title"])--}}
{{--@section('subtitle', $viewData["subtitle"])--}}
{{--@section('content')--}}
{{--    <div class="row">--}}
{{--        @foreach ($viewData["products"] as $product)--}}
{{--            <div class="col-md-4 col-lg-3 mb-2">--}}
{{--                <div class="card">--}}

{{--                    <div class="card-body text-center">--}}
{{--                        <a--}}
{{--                           class="btn bg-primary text-white">{{ $product["correo"] }}</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endforeach--}}

{{--    </div>--}}
{{--    --}}

{{--@endsection--}}

