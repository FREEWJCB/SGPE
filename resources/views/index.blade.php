@extends('plantilla.login')
@section('contenido')
    <div class="box">
        <h2>Iniciar Sesión</h2>
         @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600" style="color:red;text-align: center;
font-size: 1.2em;
padding-bottom: 10px;">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('logged_in') }}">
        @csrf
            <div class="inputBox">
                <input type="text" required name="email" id="username">
                <label for="username">Nombre de usuario</label>
            </div>
            <div class="inputBox">
                <input type="password" required name="password" id="password">
                <label for="password">Contraseña</label>
            </div>
            <div class="inputCheckbox">
                <input id="recuerdame" type="checkbox" name="remember-me">
                <label class="label-checkbox100" for="ckb1">Recuérdeme</label>
            </div>
            <div class="submit">
                <input type="submit" value="Iniciar"><br>
                <a href="#">¿Se te olvidó tu contraseña?</a>
            </div>
        </form>
    </div>
@endsection
