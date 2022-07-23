<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/indexStyle.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/barraNavegacion.css') }}">
    <link href="{{ asset('/img/icon.png') }}" rel="icon"/>
    <title>@yield('titulo', 'Mi entrenador de aprendizaje')</title>
</head>
<body>

{{--<!-- Barra de navegación -->--}}
{{--<header>--}}
{{--    <nav id="navP" class="navbar fixed-top navbar-expand-xl navbar-dark scrolling-navbar">--}}
{{--        <div class="container-fluid">--}}
{{--            <a class="navbar-brand " href="#destacado">--}}
{{--                <img id="logo" src="{{ asset('/img/icon.png') }}" alt="Icono de la pagina"--}}
{{--                     class="d-inline-block align-text-center" style="margin-bottom: 3%;">--}}
{{--                <strong class="titulo">Mi entrenador de aprendizaje 📖</strong>--}}
{{--            </a>--}}
{{--            <button class="navbar-toggler collapsed" id="botonCollapse" type="button" data-bs-toggle="collapse"--}}
{{--                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"--}}
{{--                    aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}
{{--            <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                <ul class="navbar-nav me-auto mb-2 mb-lg-0">--}}
{{--                    <a class="nav-link active" href="{{ route('cursos.cursos') }}">Cursos</a>--}}
{{--                    <a class="nav-link active" href="{{ route('cursos.categorias') }}">Categorias</a>--}}
{{--                    @guest--}}
{{--                        <a class="nav-link active" href="{{ route('login') }}">Iniciar Sesión</a>--}}
{{--                        <a class="nav-link active" href="{{ route('register') }}">Registrarme</a>--}}
{{--                    @else--}}
{{--                        --}}{{--                        <a class="nav-link active" href="{{ route('myaccount.orders') }}">Mis Cursos</a>--}}
{{--                        <form id="logout" action="{{ route('logout') }}" method="POST">--}}
{{--                            <a role="button" class="nav-link active"--}}
{{--                               onclick="document.getElementById('logout').submit();">Cerrar Sesión</a>--}}
{{--                            @csrf--}}
{{--                        </form>--}}

{{--                        @padres--}}
{{--                        <a class="nav-link active" href="{{route('padres.home.dashboard')}}">Menu Padres</a>--}}
{{--                        @endpadres--}}

{{--                        @maestro--}}
{{--                        <a class="nav-link active" href="{{route('maestro.home.dashboard')}}">Menu Maestro</a>--}}
{{--                        @endmaestro--}}

{{--                        @tutor--}}
{{--                        <a class="nav-link active">Menu Tutor</a>--}}
{{--                        @endtutor--}}

{{--                        @alumno--}}
{{--                        <a class="nav-link active">Menu Alumno</a>--}}
{{--                        @endalumno--}}
{{--                    @endguest--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}
{{--</header>--}}


<!-- Fin de la barra de navegación -->


<nav class="navbar navbar-expand-lg navbar-dark" style="padding: 0.5rem 0.7rem; background-color:#6E0E7D;">
    <a class="navbar-brand" style="font-size: x-large" href="{{route('home.index')}}"><strong>My Learning Coach</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
            <a class="nav-link active" href="{{ route('cursos.cursos') }}">Cursos</a>
            <a class="nav-link active" href="{{ route('cursos.categorias') }}">Categorias</a>
            <a class="nav-link active" href="{{ route('foros.todos') }}">Foros Publico</a>
            @guest
                <a class="nav-link active" href="{{ route('login') }}">Iniciar Sesión</a>
                <a class="nav-link active" href="{{ route('register') }}">Registrarme</a>

            @else
                {{--                        <a class="nav-link active" href="{{ route('myaccount.orders') }}">Mis Cursos</a>--}}


                @padres
                <a class="nav-link active" href="{{route('padres.home.dashboard')}}">Menu Padres</a>
                @endpadres

                @maestro
                <a class="nav-link active" href="{{route('maestro.home.dashboard')}}">Menu Maestro</a>
                @endmaestro

                @tutor
                <a class="nav-link active">Menu Tutor</a>
                @endtutor

                @alumno
                <a class="nav-link active" href="{{route('alumno.dashboard')}}">Menu Alumno</a>
                @endalumno

                <form id="logout" action="{{ route('logout') }}" method="POST">
                    <a role="button" class="nav-link active"
                       onclick="document.getElementById('logout').submit();">Cerrar Sesión</a>
                    @csrf
                </form>

            @endguest
        </div>
    </div>
</nav>
<header class="masthead  text-white text-center py-3" style="background-color:#B014B5;">
    <div class="container d-flex align-items-center flex-column">
        <h2>@yield('subtitulo', 'Una plataforma de aprendizaje')</h2>
    </div>
</header>
<!-- header -->

{{--<div class="container my-4">--}}
{{--   --}}
{{--</div>--}}



@yield('contenido')


<!-- Pie de pagina -->
<footer class="bg-dark text-white text-center" style="margin-top: 10vh;">
    <!-- 1erDiv -->
    <div class="container p-4">
        <!-- Social media -->
        <section class="mb-4">
            <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/Chisrra" role="button"
               target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f">Ing.Donato</i></a>

            <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/emilioenlaluna" role="button"
               target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter">Ing.Luna</i></a>
        </section>
        <!-- Fin Social media -->

        <!-- Texto -->
        <section class="mb-4">
            <p>
                Este es un proyecto hecho para el talent hackathon 2022 para el track <i>MY LEARNING COACH Educación
                    gratuita para estudiantes</i> para así combatir el rezago educativo y ayudar a todos los
                estudiantes de educación básica, proporcionándoles esta aplicación web. </p>
        </section>
        <!-- Fin Texto -->

        <!-- Links -->
        <section class="">
            <!--Div row-->
            <div class="row align-items-center">
                <!--Div column-->
                <div class="col align-self-center">
                    <h5 class="text-uppercase">Agradecimientos</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="https://www.uaa.mx/portal/" class="text-white">Universidad Autonoma de
                                Aguascalientes</a>
                        </li>
                        <li>
                            <a href="https://hackathon.talent-network.org/tracks/my-learning-coach-educacion-gratuita-para-estudiantes/"
                               class="text-white">MY LEARNING COACH</a>
                        </li>
                        <li>
                            <a href="https://getbootstrap.com/docs/5.2/getting-started/introduction/"
                               class="text-white">Bootstrap</a>
                        </li>
                    </ul>
                </div>
                <!--Fin Div column-->
            </div>
            <!--Fin Div row-->
        </section>
        <!-- Fin Links -->
    </div>
    <!-- Fin 1erDiv -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background: #192120;">
        © 2022 Copyright:
        <p class="text-white">CHICHARRÓN-TEK</p>
    </div>
    <!-- fin del Copyright -->
</footer>
<!-- fin del pie de pagina -->
<script src="{{asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{asset('/js/jQuery/node_modules/jquery/dist/jquery.min.js') }}"></script>
<!-- <script src="{{asset('/js/barraNavegacion.js') }}"></script> -->
</body>
</html>

