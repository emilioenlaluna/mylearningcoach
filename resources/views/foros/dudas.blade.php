@extends('layouts.app')
@section('titulo', $viewData["titulo"])
@section('subtitulo', $viewData["subtitulo"])
@section('contenido')

    <div class="container my-4">

        @guest
            <a href="{{route('login')}}">Inicie Sesión para Hacer Preguntas</a>
        @else
            <div class="row">
                <div class="card">

                    <div class="card-body">
                        <form method="POST" action="{{route('foros.preguntar')}}">
                            @csrf

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label for="titulo" class="col-lg-2 col-md-6 col-sm-12 col-form-label">
                                            Titulo:</label>
                                        <div class="col-lg-10 col-md-6 col-sm-12">
                                            <input name="titulo" id="titulo" type="text"
                                                   class="form-control" required maxlength="45">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label for="mensaje"
                                               class="col-lg-2 col-md-6 col-sm-12 col-form-label">Mensaje:</label>
                                        <div class="col-lg-10 col-md-6 col-sm-12">
                                            <textarea name="mensaje"
                                                      id="mensaje" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Crear</button>
                        </form>

                    </div>
                </div>
            </div>
        @endguest

        <hr class="my-4">
        @foreach ($dudas as $duda)
            <div class="row">
                <div class="card">

                    <div class="card-body">
                        <h6
                            class="display-6">{{ $duda->titulo }}</h6>
                        <p>{{ $duda->fecha }}</p>
                        <a href="{{ route('foros.duda', ['id'=> $duda->id]) }}"
                           class="btn bg-primary text-white">Ver Respuestas</a>
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
