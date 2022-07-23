@extends('layouts.app')
@section('titulo', $viewData["titulo"])
@section('subtitulo', $viewData["subtitulo"])
@section('contenido')
    <div class="container my-4">
        <div class="row justify-content-center">
            @foreach ($cursos as $curso)
                <div class="col-10 col-sm-6 col-md-4 col-lg-3 mb-3">
                    <div class="card card-cursos">
                        <img src="{{$curso->imagenUrl}}" class="card-img-top img-card">
                        <div class="card-body text-center">
                            <h5>
                                <a class="text-dark">{{ $curso->NombreCurso }}</a>
                            </h5>
                            <small class="">Creación: {{ $curso->FechaInicio }}</small>
                            <small class="">Ultima modificacón: {{ $curso->FechaFin }} </small>
                            <a href="{{ route('cursos.detalles', ['id'=> $curso->idCurso]) }}"
                               class="btn bg-primary text-white btn-detalles">Detalles</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <hr class="my-4">
            @if(!empty($cursos))
                    <div class="d-flex justify-content-center" style="margin-top: 3vh">  {{ $cursos->links() }} </div>
            @endif

        </div>
    </div>

@endsection
