@extends('layouts.padres')
@section('title', $viewData["title"])
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            Editar Alumnos
        </div>
        <div class="card-body">
            @if($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            @foreach( $viewData["alumno"] as $alumno)
                <form method="POST" action="{{ route('maestro.alumnos.actualizar', ['id'=> $alumno['id']]) }}"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label for="name" class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nombre:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input name="name" id="name" value="{{ $alumno['name'] }}" type="text" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 row">
                                <label for="email" class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nombre Acceso Alumno:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input name="email" id="email" value="{{ $alumno['email'] }}" type="text" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label for="password" class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nueva Contraseña:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input class="form-control" type="password" required id="password" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            &nbsp;
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            @endforeach
        </div>
    </div>
@endsection
