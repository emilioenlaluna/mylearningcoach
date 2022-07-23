@extends('layouts.app')
@section('titulo', $viewData["titulo"])
@section('subtitulo', $viewData["subtitulo"])
@section('contenido')

    <div class="container my-4">

        @foreach($viewData["duda"] as $pregunta)
            <div class="card">
                <div class="card-title" style="padding: 1rem 1rem 0px">
                    <h6 class="display-6"><strong>{{ $pregunta["titulo"] }}</strong></h6>
                    <small>{{ $pregunta["fecha"] }}</small>
                </div>
                <div class="card-body" style="padding-top: 0px;">
                    <hr class="my-2">
                    <p style="font-size: larger;">{{ $pregunta["mensaje"] }}</p>
                </div>
            </div>
        @endforeach

        <div style="padding: 2vh 0px"></div>

        <div class="card">
            <h5 class="card-header">Respuestas</h5>
            <div class="card-body">
                @if(count($respuestas) == 0)
                    <div class="d-flex justify-content-center" style="color: #A0A6AD">
                        <h3>Nadie ha contestado aún</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile-upside-down" viewBox="0 0 16 16">
                            <path d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zm0-1a8 8 0 1 1 0 16A8 8 0 0 1 8 0z"/>
                            <path d="M4.285 6.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 4.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 3.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM7 9.5C7 8.672 6.552 8 6 8s-1 .672-1 1.5.448 1.5 1 1.5 1-.672 1-1.5zm4 0c0-.828-.448-1.5-1-1.5s-1 .672-1 1.5.448 1.5 1 1.5 1-.672 1-1.5z"/>
                        </svg>
                    </div>
                @else
                    @foreach ($respuestas as $respuesta)

                        <h5 class="card-title">{{ $respuesta->titulorespuesta }}</h5>
                        <small>{{ $respuesta->fecha }}</small>
                        <p class="card-text">{{ $respuesta->mensaje }}</p>

                        <hr class="my-4">
                    @endforeach
                @endif
            </div>
        </div>

        <div style="padding: 2vh 0px"></div>

        <div class="card">
            <h5 class="card-header">
                Agrega tu respuesta
            </h5>
            <div class="card-body">
                @guest
                    <a class="nav-link active" href="{{ route('login') }}">Iniciar Sesión para agregar respuesta</a>
                @else
                    <form action="{{ route('foros.escribir')}}" method="POST">
                        @csrf
                        <input type="hidden" name="dudaId" value="{{$viewData["dudaId"]}}">

                        <label for="titulo" class="form-label">Titulo:</label>
                        <input type="text" id="titulo" name="titulo" class="form-control" required>

                        <label for="mensaje" class="form-label">Respuesta:</label>
                        <textarea type="text" name="mensaje" id="mensaje" class="form-control"
                                  placeholder="Comparte tu respuesta aqui" required></textarea>
                        <div class="d-flex mt-3">
                            <button class="btn btn-outline-info  ms-auto" style="padding: 0.25em 1em; font-size: larger" type="submit" id="button-addon2"> Enviar
                                Respuesta
                            </button>
                        </div>
                    </form>
                @endguest
            </div>
        </div>

        @if(!empty($duda))
            {{ $duda->links() }}
        @endif
    </div>
    </div>

@endsection
