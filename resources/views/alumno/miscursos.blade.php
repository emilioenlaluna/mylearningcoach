<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ asset('/img/icon.png') }}" >
    <link rel="stylesheet"  href="{{ asset('/css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet"  href="{{ asset('/css/barraNavegacionCursos.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/Cursos/misCursos.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos | Mi entrenador de aprendizaje</title>
</head>

<body>
<!-- barra de navegacion cursos -->

<header>
    <nav id="navP" class="navbar fixed-top navbar-expand-md navbar-dark scrolling-navbar" style="background-color: #01684A;">
        <div class="container-fluid">
            <a class="navbar-brand " >
                <img id="logo" src="{{ asset('/img/icon.png') }}" alt="Icono de la pagina" class="d-inline-block align-text-center" style="margin-bottom: 3%;">
                <strong class="titulo">Mi entrenador de aprendizaje 📖</strong>
            </a>
            <button class="navbar-toggler collapsed" id="botonCollapse" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

<div style="padding-top: 80px;"></div>

<!-- cursos y actividades -->
<div class="row justify-content-center">

    <!-- cursos -->
    <div class="col-9 borde-derecho" id="cursos">
        <div class="row justify-content-center">

            @foreach ($viewData["cursosAlumno"] as $curso)
                <div class="col esp centroH">
                    <div class="card tarjeta">
                        <img src="{{$curso["imagenUrl"]}}" class="card-img-top img-card">
                        <div class="card-body">
                            <h5 class="card-title">{{$curso["NombreCurso"]}}</h5>
                            <h6 class="card-title">Profesor Juan Rodolfo Pérez</h6>
                            <p class="card-text">{{$curso["FechaInicio"]}}</p>
                            <p class="card-text">{{$curso["FechaFin"]}}</p>
                            <a href="{{ route('cursos.detalles', ['id'=> $curso["idCurso"]]) }}"
                               class="btn btn-cafe">Ir a Curso</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <!-- fin cursos -->

{{--    <!-- lista de actividades ordenadas por fecha de entrega proxima -->--}}
{{--    <div class="col" id="actividades">--}}
{{--        <h1>Actividades pendientes</h1>--}}
{{--        <div class="list-group">--}}
{{--            @foreach ($viewData["tareaspendientes"] as $tarea)--}}
{{--                <a href="{{ route('cursos.detalles', ['id'=> $tarea["idCurso"]]) }}" class="list-group-item list-group-item-action">--}}
{{--                    <div class="d-flex w-100 justify-content-between">--}}
{{--                        <h5 class="mb-1">{{$tarea["Descripcion"]}}</h5>--}}
{{--                        <small>{{$tarea["FechaLimite"]}}</small>--}}
{{--                    </div>--}}
{{--                    <p class="mb-1">Entregar la hoja de ejercicios completa.</p>--}}

{{--                </a>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- fin de la lista de actividades -->--}}
</div>
<!-- fin cursos y actividades -->

<!-- pie -->
<div id="piecito"><h8><b>CHICHARRON-TEK</b></h8></div>
<!-- fin del pie -->
<script src="{{ asset('js/jQuery/node_modules/jquery/dist/jquery.min.js') }}" ></script>
<script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/barraNavegacion.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var ancho = window.innerWidth;
        console.log(`El ancho actual de la pantalla es ${ancho}`);
        if (ancho <= 947) {
            $("#cursos").removeClass("col-9");
            $("#cursos").addClass("col-12");
        }
        $(".list-group-item").hover(function() {
            $(this).addClass("activo");

        }, function() {
            $(this).removeClass("activo");
        });

        $(window).resize(function() {
            ancho = window.innerWidth;
            if (ancho <= 947) {
                $("#cursos").removeClass("col-9");
                $("#cursos").addClass("col-12");
            } else {
                $("#cursos").addClass("col-9");
                $("#cursos").removeClass("col-12");
            }
        });
    });
</script>
</body>

</html>
