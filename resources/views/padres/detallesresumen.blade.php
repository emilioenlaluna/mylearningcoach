@extends('layouts.padres')
@section('title', $viewData["title"])
@section('content')

    <div class="card">
        <div class="card-header">
            Resumen Tareas:
        </div>
        <div class="card-body" id="card-tabla-dr">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col">No. Pregunta</th>
                    <th scope="col">Respuesta 1</th>
                    <th scope="col">Respuesta 2</th>
                    <th scope="col">Respuesta Correcta</th>
                    <th scope="col">Opcion Seleccionada</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($viewData["evaluaciones"] as $evaluaciones)
                    <tr>
                        <td>{{ $evaluaciones["Pregunta"] }}</td>
                        <td>{{ $evaluaciones["Respuesta1"] }}</td>
                        <td>{{ $evaluaciones["Respuesta2"] }}</td>
                        <td>{{ $evaluaciones["Respuesta_correcta"] }}</td>
                        <td>{{ $evaluaciones["respuesta"] }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

