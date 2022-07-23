@extends('layouts.maestro')
@section('title', $viewData["title"])
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            Gestión Alumnos
        </div>
        <div class="card-body">
            @if($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form method="POST" action="{{ route('maestro.alumnos.guardar') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nombre:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="name" value="{{ old('name') }}" type="text" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nombre Acceso Alumno:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input required name="email" value="{{ old('email') }}" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Contraseña:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input required name="password" value="{{ old('password') }}" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        &nbsp;
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Administrar Alumnos
        </div>
        <div class="card-body">
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
                @foreach ($viewData["alumno"] as $alumno)
                    <tr>
                        <td>{{ $alumno["name"] }}</td>
                        <td>{{ $alumno["email"] }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('maestro.alumnos.editar', ['id'=> $alumno["id"]])}}">
                                <i class="bi-pencil"></i>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('maestro.alumnos.borrar', $alumno["id"])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">
                                    <i class="bi-trash"></i>
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
