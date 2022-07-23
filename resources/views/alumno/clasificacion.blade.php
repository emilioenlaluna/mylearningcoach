@extends('layouts.alumno')
@section('content')
    <h3>Clasificación</h3>
       <div class="card">
        <div class="card-header">
            Mayor puntos
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Puntos</th>
                    <th scope="col">Nombre</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($clasificadores as $mmmm)
                    <tr>
                        <td>{{ $mmmm->id }}</td>
                        <td>{{ $mmmm->puntos }}</td>
                        <td>{{ $mmmm->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @if(!empty($clasificadores))
                {{ $clasificadores->links() }}
            @endif

        </div>
    </div>
@endsection

