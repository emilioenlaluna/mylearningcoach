<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('/img/icon.png') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/barraNavegacionCursos.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/Cursos/curso.css') }}">
    <title>Curso | Mi entrenador de aprendizaje</title>
</head>

<body>


<!-- barra de navegacion cursos -->

<header>
    <nav id="navP" class="navbar fixed-top navbar-expand-md navbar-dark scrolling-navbar"
         style="background-color: #01684A;">
        <div class="container-fluid">
            <a class="navbar-brand ">
                <img id="logo" src="{{ asset('/img/icon.png') }}" alt="Icono de la pagina"
                     class="d-inline-block align-text-center" style="margin-bottom: 3%;">
                <strong class="titulo">Mi entrenador de aprendizaje 📖</strong>
            </a>
            <button class="navbar-toggler collapsed" id="botonCollapse" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="{{route('alumno.miscursos')}}" class="nav-link text-white">Mis Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cursos.categorias') }}">Categorias</a>
                    </li>
                </ul>
                <ul class="navbar-nav justyfy-content-end">
                    @if(Auth::guard('alumno')->check())
                        <a class="nav-link active" href="{!! url('/alumno/dashboard'); !!}">Alumno</a>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- fin barra de navegacion cursos -->


<div id="tituloCurso" class="familyArima">
    <h1><?php echo 'zzzz'; ?></h1>
    <div class="derechaABS" style="margin-right: 1vw;">
        Actividades: <?php echo "zzzzz"; ?>
    </div>
</div>

<!-- rebanadas de pan -->
<div id="navPan">
    <nav
        style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="misCursos">Mis cursos</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo ucfirst('zzzzz') ?></li>
        </ol>
    </nav>
</div>
<!-- fin de rebanada de pan -->

<!-- Curso -->
<div class="container-lg" style="margin-top: 1.5vh;">
    <div class="row">

        <div id="actividades" class="col-8" style=" border-right: 2px solid black;">

            @foreach ($viewData["leccionesCurso"] as $leccion)
                <div class="tarea" id="t{{$leccion["idLeccion"]}}">
                    <!-- Aqui se pone el ID de la tarea desde la BD -->

                    <div class="tituloTarea">
                        <h3><a href="#">Lección: {{$leccion["NombreLeccion"]}}</a></h3>
                        <a class="btn btn-danger btn-foro collapsed" data-bs-toggle="collapse" href="#f<?php echo 1; ?>"
                           role="button" aria-expanded="false" aria-controls="collapseExample">
                            <!-- Aqui se pone el ID del foro desde la BD -->
                            Foro
                            <span class="icon-foro">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor"
                                     class="bi bi-plus-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path
                                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="row">

                        <div class="col">
                            <b>Fecha Lección: </b> <u>{{$leccion["FechaLeccion"]}}</u>.
                            <!-- Aqui se pone la fechaP desde la BD -->
                            <br>
                            <b>Detalles:</b> <u>{{$leccion["Detalles"]}}</u>.
                            <!-- Aqui se pone la fechaL desde la BD -->
                        </div>

                    </div>

                </div>
            @endforeach

        </div>
        <div class="col">
            <div class="sticky">
                <div class="card text-center">
                    <h5 class="card-header">Tutorías</h5>
                    <div class="card-body">
                        <h5 class="card-title">Tienes una tutoría asiganada :D</h5>
                        <p class="card-text">La tutoría esta asignada a las <?php echo "15:00 hrs"?></p>
                        <form action="">
                            <button type="submit" class="btn btn-primary" <?php echo "";?> >Ir a la tutoría</button>
                            <!-- Boton habilitado -->
                            <!-- <button type="submit" class="btn btn-primary" <?php echo "disabled";?> >Ir a la tutoría</button> Boton deshabilitado -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fin curso -->

<div id="piecito">
    <h8><b>CHICHARRON-TEK</b></h8>
</div>

<!-- scripts -->

<script src="{{ asset('js/jQuery/node_modules/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/barraNavegacion.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function () {
        var ancho = window.innerWidth;
        console.log(`El ancho actual de la pagina es ${ancho}`);
        if (ancho <= 480) {
            $("#actividades").removeClass("col-8");
            $("#actividades").addClass("col-12");
        }
        $(window).resize(function () {
            ancho = window.innerWidth;
            if (ancho <= 480) {
                $("#actividades").removeClass("col-8");
                $("#actividades").addClass("col-12");
            } else {
                $("#actividades").removeClass("col-12");
                $("#actividades").addClass("col-8");
            }
        });

        var iconMenos = `Foro <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-dash-circle" viewBox="0 0 16 16"> <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/> <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/> </svg>`;
        var iconMas = `Foro <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16"> <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/> <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/> </svg>`;
        $(".btn-foro").click(function (e) {
            if ($(this).hasClass("collapsed")) {
                $(this).html(iconMas);
            } else {
                $(this).html(iconMenos);
            }
        });


    });
</script>
<!-- fin scripts -->
</body>

</html>
