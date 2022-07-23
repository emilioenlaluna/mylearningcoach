@extends('layouts.app')
@section('titulo', $viewData["titulo"])
@section('subtitulo', $viewData["subtitulo"])
@section('contenido')
    <div class="container my-4">
        <div class="row">
            @foreach ($cursos as $curso)
                <div class="col-md-4 col-lg-3 mb-2">
                    <div class="card">
                        <img src="{{ $curso->imagenUrl }}" class="card-img-top img-card">
                        <div class="card-body text-center">
                            <a
                                class="btn bg-primary text-white">{{ $curso->NombreCurso }}</a>
                            <p class="btn bg-primary text-white ">
                                {{ $curso->FechaInicio }}
                            </p>
                            <p class="btn bg-primary text-white ">
                                {{ $curso->FechaFin }}
                            </p>
                            <a href="{{ route('cursos.detalles', ['id'=> $curso->idCurso]) }}"
                               class="btn bg-primary text-white">Detalles</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <hr class="my-4">
            @if(!empty($cursos))
                {{ $cursos->links() }}
            @endif
        </div>
    </div>

@endsection
