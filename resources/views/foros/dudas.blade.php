@extends('layouts.app')
@section('titulo', $viewData["titulo"])
@section('subtitulo', $viewData["subtitulo"])
@section('contenido')

    <div class="container my-4">

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

            @if(!empty($dudas))
                    <div class="d-flex justify-content-center"> {{ $dudas->links() }} </div>
            @endif
        </div>
    </div>

@endsection
