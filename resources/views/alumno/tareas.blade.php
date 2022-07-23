<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('/img/icon.png') }}" >
    <link rel="stylesheet"  href="{{ asset('/css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet"  href="{{ asset('/css/barraNavegacionCursos.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/Cursos/curso.css') }}">
    <title>Curso | Mi entrenador de aprendizaje</title>
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

            <div class="tarea" id="t<?php echo 1; ?>">
                <!-- Aqui se pone el ID de la tarea desde la BD -->

                <div class="tituloTarea">
                    <h3><a href="#">Tarea: <?php echo "Resolver Sumas"; ?></a></h3>
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
                        <b>Fecha publicación: </b> <u><?php echo "Lunes 11 Julio"; ?></u>.
                        <!-- Aqui se pone la fechaP desde la BD -->
                        <br>
                        <b>Fecha limite:</b> <u><?php echo "Lunes 18 Julio"; ?></u>.
                        <!-- Aqui se pone la fechaL desde la BD -->
                    </div>
                    <div class="col">
                        <b>Estado: </b>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3CD936"
                             class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg> <!-- Este es estado entregado -->

                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FFCC00"
                             class="bi bi-dash-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
                        </svg> <!-- Este es estado pendiente -->

                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#F20F0F"
                             class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                        </svg> <!-- Este es estado no entregado -->

                        <div class="cal">
                            <b>Calificación </b><?php echo 9.5 ?>/10
                        </div>
                    </div>

                </div>
                <div class="collapse" id="f<?php echo 1; ?>">
                    <div class="card card-body">

                        <div class="chat">
                            <!-- comentario -->
                            <div class="comentario">
                                <div>
                                    <a href="#" class="nomUsuario"><b><?php echo "UsuarioJuan." ?></b></a>
                                </div>
                                <div>
                                    Esta bien la tarea, pero nos podría dar más tiempo por favor?
                                </div>
                                <div class="publi">Vie 15 07 2022 19:32</div>
                            </div>
                            <!-- fin comentario -->

                            <!-- tu comentario -->
                            <div style="display: flex;">
                                <div class="ms-auto tuComentario" style="margin-right: 5px;">
                                    <div>No</div>
                                    <div class="publi">Vie 15 07 2022 20:10</div>
                                </div>
                            </div>
                            <div style="display: flex;">
                                <div class="ms-auto tuComentario" style="margin-right: 5px;">
                                    <div>Mejor nos comemos un gusanito</div>
                                    <div class="publi">Lun 18 07 2022 20:10</div>
                                </div>
                            </div>
                            <div style="display: flex;">
                                <div class="ms-auto tuComentario" style="margin-right: 5px;">
                                    <div>Le sacamos lo de adentro y mmm... que rico gusanito</div>
                                    <div class="publi">Lun 18 07 2022 20:12</div>
                                </div>
                            </div>
                            <!-- fin tu comentario -->

                            <!-- te respondieron -->
                            <div class="comentario">
                                <div>
                                    <a href="#" class="nomUsuario"><b><?php echo "UsuarioJuan." ?></b></a>
                                </div>
                                <div>
                                    a
                                </div>
                                <div class="publi">Lun 15 07 2022 21:12</div>
                            </div>
                            <!-- fin comentario -->

                        </div>
                        <!-- fin chat -->

                        <!-- escribir nuevo comentario -->
                        <form action="">
                            <div class="input-group mb-3">
                                <input type="text" name="mensaje" id="mensaje" class="form-control"
                                       placeholder="Comparte tu opinión aquí" autocomplete="off" required>
                                <button class="btn btn-outline-info" type="button" id="button-addon2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                         class="bi bi-send" viewBox="0 0 16 16">
                                        <path
                                            d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                                    </svg>
                                </button>
                            </div>
                        </form>
                        <!-- fin escribir nuevo comentario -->

                    </div>
                </div>
            </div>

            <div class="tarea" id="t<?php echo 2; ?>">
                <!-- Aqui se pone el ID de la tarea desde la BD -->

                <div class="tituloTarea">
                    <h3><a href="#">Tarea: <?php echo "Resolver Sumas"; ?></a></h3>
                    <a class="btn btn-danger btn-foro collapsed" data-bs-toggle="collapse" href="#f<?php echo 2; ?>"
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
                        <b>Fecha publicación: </b> <u><?php echo "Lunes 11 Julio"; ?></u>.
                        <!-- Aqui se pone la fechaP desde la BD -->
                        <br>
                        <b>Fecha limite:</b> <u><?php echo "Lunes 18 Julio"; ?></u>.
                        <!-- Aqui se pone la fechaL desde la BD -->
                    </div>
                    <div class="col">
                        <b>Estado: </b>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3CD936"
                             class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg> <!-- Este es estado entregado -->

                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FFCC00"
                             class="bi bi-dash-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
                        </svg> <!-- Este es estado pendiente -->

                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#F20F0F"
                             class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                        </svg> <!-- Este es estado no entregado -->

                        <div class="cal">
                            <b>Calificación </b><?php echo 9.5 ?>/10
                        </div>
                    </div>

                </div>
                <div class="collapse" id="f<?php echo 2; ?>">
                    <div class="card card-body">

                        <div class="chat">
                            <!-- comentario -->
                            <div class="comentario">
                                <div>
                                    <a href="#" class="nomUsuario"><b><?php echo "UsuarioJuan." ?></b></a>
                                </div>
                                <div>
                                    Esta bien la tarea, pero nos podría dar más tiempo por favor?
                                </div>
                                <div class="publi">Vie 15 07 2022 19:32</div>
                            </div>
                            <!-- fin comentario -->

                            <!-- tu comentario -->
                            <div style="display: flex;">
                                <div class="ms-auto tuComentario" style="margin-right: 5px;">
                                    <div>No</div>
                                    <div class="publi">Vie 15 07 2022 20:10</div>
                                </div>
                            </div>
                            <div style="display: flex;">
                                <div class="ms-auto tuComentario" style="margin-right: 5px;">
                                    <div>Mejor nos comemos un gusanito</div>
                                    <div class="publi">Lun 18 07 2022 20:10</div>
                                </div>
                            </div>
                            <div style="display: flex;">
                                <div class="ms-auto tuComentario" style="margin-right: 5px;">
                                    <div>Le sacamos lo de adentro y mmm... que rico gusanito</div>
                                    <div class="publi">Lun 18 07 2022 20:12</div>
                                </div>
                            </div>
                            <!-- fin tu comentario -->

                            <!-- te respondieron -->
                            <div class="comentario">
                                <div>
                                    <a href="#" class="nomUsuario"><b><?php echo "UsuarioJuan." ?></b></a>
                                </div>
                                <div>
                                    a
                                </div>
                                <div class="publi">Lun 15 07 2022 21:12</div>
                            </div>
                            <!-- fin comentario -->

                        </div>
                        <!-- fin chat -->

                        <!-- escribir nuevo comentario -->
                        <form action="">
                            <div class="input-group mb-3">
                                <input type="text" name="mensaje" id="mensaje" class="form-control"
                                       placeholder="Comparte tu opinión aquí" autocomplete="off" required>
                                <button class="btn btn-outline-info" type="button" id="button-addon2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                         class="bi bi-send" viewBox="0 0 16 16">
                                        <path
                                            d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                                    </svg>
                                </button>
                            </div>
                        </form>
                        <!-- fin escribir nuevo comentario -->

                    </div>
                </div>
            </div>

            <div class="tarea" id="t<?php echo 3; ?>">
                <!-- Aqui se pone el ID de la tarea desde la BD -->

                <div class="tituloTarea">
                    <h3><a href="#">Tarea: <?php echo "Resolver Sumas"; ?></a></h3>
                    <a class="btn btn-danger btn-foro collapsed" data-bs-toggle="collapse" href="#f<?php echo 3; ?>"
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
                        <b>Fecha publicación: </b> <u><?php echo "Lunes 11 Julio"; ?></u>.
                        <!-- Aqui se pone la fechaP desde la BD -->
                        <br>
                        <b>Fecha limite:</b> <u><?php echo "Lunes 18 Julio"; ?></u>.
                        <!-- Aqui se pone la fechaL desde la BD -->
                    </div>
                    <div class="col">
                        <b>Estado: </b>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3CD936"
                             class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg> <!-- Este es estado entregado -->

                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FFCC00"
                             class="bi bi-dash-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
                        </svg> <!-- Este es estado pendiente -->

                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#F20F0F"
                             class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                        </svg> <!-- Este es estado no entregado -->

                        <div class="cal">
                            <b>Calificación </b><?php echo 9.5 ?>/10
                        </div>
                    </div>

                </div>
                <div class="collapse" id="f<?php echo 3; ?>">
                    <div class="card card-body">

                        <div class="chat">
                            <!-- comentario -->
                            <div class="comentario">
                                <div>
                                    <a href="#" class="nomUsuario"><b><?php echo "UsuarioJuan." ?></b></a>
                                </div>
                                <div>
                                    Esta bien la tarea, pero nos podría dar más tiempo por favor?
                                </div>
                                <div class="publi">Vie 15 07 2022 19:32</div>
                            </div>
                            <!-- fin comentario -->

                            <!-- tu comentario -->
                            <div style="display: flex;">
                                <div class="ms-auto tuComentario" style="margin-right: 5px;">
                                    <div>No</div>
                                    <div class="publi">Vie 15 07 2022 20:10</div>
                                </div>
                            </div>
                            <div style="display: flex;">
                                <div class="ms-auto tuComentario" style="margin-right: 5px;">
                                    <div>Mejor nos comemos un gusanito</div>
                                    <div class="publi">Lun 18 07 2022 20:10</div>
                                </div>
                            </div>
                            <div style="display: flex;">
                                <div class="ms-auto tuComentario" style="margin-right: 5px;">
                                    <div>Le sacamos lo de adentro y mmm... que rico gusanito</div>
                                    <div class="publi">Lun 18 07 2022 20:12</div>
                                </div>
                            </div>
                            <!-- fin tu comentario -->

                            <!-- te respondieron -->
                            <div class="comentario">
                                <div>
                                    <a href="#" class="nomUsuario"><b><?php echo "UsuarioJuan." ?></b></a>
                                </div>
                                <div>
                                    a
                                </div>
                                <div class="publi">Lun 15 07 2022 21:12</div>
                            </div>
                            <!-- fin comentario -->

                        </div>
                        <!-- fin chat -->

                        <!-- escribir nuevo comentario -->
                        <form action="">
                            <div class="input-group mb-3">
                                <input type="text" name="mensaje" id="mensaje" class="form-control"
                                       placeholder="Comparte tu opinión aquí" autocomplete="off" required>
                                <button class="btn btn-outline-info" type="button" id="button-addon2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                         class="bi bi-send" viewBox="0 0 16 16">
                                        <path
                                            d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                                    </svg>
                                </button>
                            </div>
                        </form>
                        <!-- fin escribir nuevo comentario -->

                    </div>
                </div>
            </div>

        </div>
        <div class="col">
            <div class="sticky">
                <div class="card text-center">
                    <h5 class="card-header">Tutorías</h5>
                    <div class="card-body">
                        <h5 class="card-title">Tienes una tutoría asiganada :D</h5>
                        <p class="card-text">La tutoría esta asignada a las <?php echo "15:00 hrs"?></p>
                        <form action="">
                            <button type="submit" class="btn btn-primary"  <?php echo "";?> >Ir a la tutoría</button> <!-- Boton habilitado -->
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

<script src="{{ asset('js/jQuery/node_modules/jquery/dist/jquery.min.js') }}" ></script>
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
