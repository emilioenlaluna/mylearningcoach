<!DOCTYPE html>
<html>
<head>
    <title>Neumorphism/Soft UI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .form-control,
        .form-control:focus,
        .btn {
            border-radius: 50px;
            background: #e0e0e0;
            box-shadow: 20px 20px 60px #bebebe,
            -20px -20px 60px #ffffff;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <h1 class="text-center m-5">Iniciar Sesion Alumno</h1>
            @if(session()->has('error'))
                <div class="alert alert-danger">{{ session()->get('error') }}</div>
            @endif
            <form method="post" action="{{ route('alumno.login') }}">
                @csrf
                <div class="row mt-3">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="email" name="email"
                               placeholder="Ingrese Nombre Usuario" required>
                        <label for="email">Nombre de Acceso Alumno</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" name="password"
                               placeholder="Ingrese codigo" required>
                        <label for="password">Contraseña</label>
{{--                        @error('error')--}}
{{--                        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $error }}</strong>--}}
{{--                                    </span>--}}
{{--                        @enderror--}}
                        <button type="submit" class="btn">Ingresar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
