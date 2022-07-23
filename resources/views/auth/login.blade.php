@extends('layouts.app')

@section('contenido')
    <div class="contenedor">
        <div class="row justify-content-center align-content-center" style="min-height: 45vh; width: 100%">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header"><b>{{ __('Iniciar Sesión') }}</b></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf <!-- {{ csrf_field() }} -->

                            <div class="row" style="margin-bottom: 1vh">
                                <label for="email" class="col-md-6 col-form-label">{{ __('Correo Electrónico/Nombre Usuario:') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <label for="password" class="col-md-6 col-form-label">{{ __('Contraseña:') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-check" style="margin: 1vh 15px 2vh">
                                <label class="form-check-label" for="remember">
                                    {{ __('Mantener Sesión Activa') }}
                                </label>
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            </div>

                            <div class="row row-cols-1 row-cols-sm-2">
                                <div class="col">
                                    @if (Route::has('password.request'))
                                        <a class="link-secondary" href="{{ route('password.request') }}">
                                            {{ __('Olvidaste tu constraseña ?') }}
                                        </a>
                                    @endif
                                </div>

                                <div class="col d-flex" id="btn-sub">
                                    <button type="submit" class="btn btn-primary ms-auto" style="padding: 0.3em 3em"><b>
                                            {{ __('Ingresar') }}
                                        </b></button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
       </div>
    </div>
@endsection
