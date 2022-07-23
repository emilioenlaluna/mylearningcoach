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
                    @alumno
                    <a class="nav-link active" href="{!! url('/alumno/dashboard'); !!}">Alumno</a>
                    @endalumno
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- fin barra de navegacion cursos -->


<div class="container" style="margin-top: 20vh; ">
    <h3>Foro</h3>
    <div class="card card-body" style="height: 70vh;">
        <form action="{{ route('alumno.curso.foro.enviarMensaje')}}" method="POST">
            @csrf
            <div class="chat">
                @foreach ($viewData["entradaforo"] as $entrada)
                    @if($viewData["idAlumno"]==$entrada["id"])
                        <div style="display: flex;">
                            <div class="ms-auto tuComentario" style="margin-right: 5px;">
                                <div>{{$entrada["mensaje"]}}</div>
                                <div class="publi">{{$entrada["fecha"]}}</div>
                            </div>
                        </div>
                    @else
                        <!-- comentario -->
                        <div class="comentario">
                            <div>
                                <a href="#" class="nomUsuario"><b>{{$entrada["name"]}}</b></a>
                            </div>
                            <div>
                                {{$entrada["mensaje"]}}
                            </div>
                            <div class="publi">{{$entrada["fecha"]}}</div>
                        </div>
                        <!-- fin comentario -->
                    @endif

                @endforeach

                <!-- escribir nuevo comentario -->
                <div class="input-group mb-3">
                    <input type="hidden" value="{{$viewData["idForo"]}}" name="idForo">

                    <input type="text" name="mensaje" id="mensaje" class="form-control"
                           placeholder="Comparte tu opinión aquí" autocomplete="off" required>
                    <button class="btn btn-outline-info" type="submit" id="button-addon2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                             fill="currentColor"
                             class="bi bi-send" viewBox="0 0 16 16">
                            <path
                                d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                        </svg>
                    </button>
                </div>

                <!-- fin escribir nuevo comentario -->
            </div>
        </form>
    </div>
</div>

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

