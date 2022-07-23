@extends('layouts.alumno')
@section('title', $viewData["title"])
@section('content')
    <h3>Tutorias</h3>
    <div class="card mb-4">
        <div class="card-header">
            Nueva Solicitud
        </div>
        <div class="card-body">
            @if($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form method="POST" action="{{ route('admin.tutorias.guardar') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Hora:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="hora" value="{{ old('hora') }}" type="datetime-local" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Detalles</label>
                    <textarea class="form-control" name="detalles" rows="3" required
                              maxlength="45">{{ old('detalles') }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Curso</label>
                    <select class="form-control" name="curso" id="curso">
                        @foreach($viewData["cursos"] as $curso)
                            <option value="{{$curso["idCurso"]}}">{{$curso["NombreCurso"]}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Mis Solicitudes de Tutoria
        </div>
        <div class="card-body" id="card-tabla-a">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Detalles</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Cancelar</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($viewData["solicitudtutoria"] as $tutoria)
                    <tr>
                        <td>{{ $tutoria["idSolicitudTutoria"] }}</td>
                        <td>{{ $tutoria["Detalles"] }}</td>
                        <td>{{ $tutoria["Hora_Solicitada"] }}</td>
                        <td>{{ $tutoria["estado"] }}</td>
                        <td>
                            <form action="{{ route('admin.tutorias.borrar', $tutoria["idSolicitudTutoria"])}}" method="POST">
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
