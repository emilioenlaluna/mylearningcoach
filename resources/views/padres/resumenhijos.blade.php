@extends('layouts.padres')
@section('title', $viewData["title"])
@section('content')
    <div class="card">
        <div class="card-header">
            Ver Resumen de Hijos
        </div>
        <div class="card-body" style="padding: 8px">
            Seleccione un hijo para ver detalles.
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Ver Resumen</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($viewData["hijo"] as $hijo)
                    <tr>
                        <td>{{ $hijo["name"] }}</td>
                        <td>
                            <a class="btn btn-primary" style="width: 100%; height:100%;" href="{{route('padres.hijos.detalle', ['id'=> $hijo["id"]])}}">
                                <i class="bi-pencil"></i> Ver Resumen
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

