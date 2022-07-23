@extends('layouts.padres')
@section('title', $viewData["title"])
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            Gestión Hijos
        </div>
        <div class="card-body">
            @if($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form method="POST" action="{{ route('padres.hijos.guardar') }}" enctype="multipart/form-data">
                @csrf
                <div class="row row-cols-1 row-cols-sm-2">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-md-auto col-form-label">Nombre completo:</label>
                            <div class="col">
                                <input name="name" value="{{ old('name') }}" type="text" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label class=" col-md-auto col-form-label">Nombre de Usuario:</label>
                            <div class="col">
                                <input required name="email" value="{{ old('email') }}" type="text"
                                       class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-md-auto col-form-label">Contraseña:</label>
                            <div class="col">
                                <input required name="password" value="{{ old('password') }}" type="text"
                                       class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex">
                    <button type="submit" class="btn btn-success ms-auto" style="padding: 0.5em 3em">Agregar</button>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Administrar Hijos
        </div>
        <div class="card-body" id="card-tabla-p">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Borrar</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($viewData["hijo"] as $hijo)
                    <tr>
                        <td>{{ $hijo["name"] }}</td>
                        <td>{{ $hijo["email"] }}</td>
                        <td>
                            <a class="btn btn-primary" style="width: 100%"
                               href="{{route('padres.hijos.editar', ['id'=> $hijo["id"]])}}">
                                <i class="bi bi-pencil"></i>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('padres.hijos.borrar', $hijo["id"])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" style="width: 100%">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
