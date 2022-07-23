@extends('layouts.app')
@section('titulo', $viewData["titulo"])
@section('subtitulo', $viewData["subtitulo"])
@section('contenido')

    <div class="container my-4">
        <div class="row">
            @foreach ($categorias as $categoria)
                <div class="col-md-4 col-lg-3 mb-2">
                    <div class="card">

                        <div class="card-body text-center">
                            <a
                                class="btn bg-primary text-white">{{ $categoria->NombreCategoria }}</a>
                            <a href="{{ route('cursos.cursoscategoria', ['id'=> $categoria->idCategoria]) }}"
                               class="btn bg-primary text-white">Ver Cursos de Categoria</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <hr class="my-4">
            @if(!empty($categorias))
                {{ $categorias->links() }}
            @endif
        </div>

    </div>

@endsection
