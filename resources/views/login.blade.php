@extends('Layouts.form')
@section('title','Login')
@section('background', '#EAECEE')
@section('content')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if(count($errors->all()))
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Error:</h4>
                    <ul class="alert-danger">
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 py-3">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('loggedIn')}}" method="post" class="px-4 py-3">
                            @csrf
                        	<h2 class="text-center font-weight-bold font-italic">¡Hola! Ingresa tu e‑mail y contraseña</h2>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" name="email" class="form-control" placeholder="email@example.com">
                            </div>
                            <div class="form-group">
                                <label>Contraseña</label>
                                <input type="password" name="password" class="form-control" placeholder="Contraseña">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
                        </form>
                        <a href="{{route('register')}}" class="text-decoration-none text-dark m-4">¿Nuevo por aquí? Regístrate</a>
                        <br>
                        <a href="#" class="text-decoration-none text-dark m-4">¿Se te olvidó tu contraseña?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
