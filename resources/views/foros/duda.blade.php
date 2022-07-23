@extends('layouts.app')
@section('titulo', $viewData["titulo"])
@section('subtitulo', $viewData["subtitulo"])
@section('contenido')

    <div class="container my-4">

        <div class="card">
            <div class="card-title">
                <h6}
                    class="display-6">{{ $duda[titulo] }}</h6>
            </div>
            <div class="card-body">
                <p>{{ $duda->fecha }}</p>
                <hr class="my-4">
                <p>{{ $duda->mensaje }}</p>
            </div>
        </div>

        <div class="card">
            <div class="card-title">
                Agrega tu respuesta
            </div>
            <div class="card-body">
                @guest
                    <a class="nav-link active" href="{{ route('login') }}">Iniciar Sesión para agregar respuesta</a>
                @else
                    <form action="{{ route('foros.escribir')}}" method="POST">
                        @csrf
                        <input type="text" name="mensaje" id="mensaje" class="form-control"
                               placeholder="Comparte tu respuesta aqui" required>
                        <button class="btn btn-outline-info" type="submit" id="button-addon2">
                            Enviar Respuesta
                        </button>
                    </form>
                @endguest
            </div>
        </div>


        @foreach ($respuestas as $respuesta)
            <div class="row">
                <div class="card">

                    <div class="card-body">
                        <h6
                            class="display-6">{{ $respuesta->titulorespuesta }}</h6>
                        <p>{{ $respuesta->mensaje }}</p>
                        <p>{{ $respuesta->fecha }}</p>
                    </div>
                </div>
            </div>
            <hr class="my-4">
        @endforeach

        <hr class="my-4">
        @if(!empty($dudas))
            {{ $dudas->links() }}
        @endif
    </div>
    </div>

@endsection
