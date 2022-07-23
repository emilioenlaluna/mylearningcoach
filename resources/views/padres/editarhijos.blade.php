@extends('layouts.padres')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
    <div class="card-header">
        Editar Hijos
    </div>
    <div class="card-body">
        @if($errors->any())
        <ul class="alert alert-danger list-unstyled">
            @foreach($errors->all() as $error)
            <li>- {{ $error }}</li>
            @endforeach
        </ul>
        @endif
            @foreach( $viewData["hijo"] as $hijo)
                <form method="POST" action="{{ route('padres.hijos.actualizar', ['id'=> $hijo['id']]) }}"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row row-cols-1 row-cols-sm-2">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class=" col-md-auto col-form-label">Nombre completo:</label>
                                <div class="col">
                                    <input name="name" value="{{ $hijo['name'] }}" type="text" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 row">
                                <label class=" col-md-auto col-form-label">Nombre de Usuario:</label>
                                <div class="col">
                                    <input name="email" value="{{ $hijo['email'] }}" type="text" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-md-auto col-form-label">Nueva Contraseña:</label>
                                <div class="col">
                                    <input class="form-control" type="password" required id="password" name="password">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <button type="submit" class="btn btn-success ms-auto" style="padding: 0.5em 3em">Editar</button>
                    </div>
                </form>
            @endforeach
    </div>
</div>
@endsection
