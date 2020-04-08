@extends('Layouts.form')
@section('title','Registro')
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
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1 class="font-weight-bold text-center">Completa tus datos</h1>
            </div>
        </div>
    </div>
</section>
<section class="py-2">
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-9">
                <form action="{{route('registered')}}" method="post">
                    <div class="row">
                        <div class="col-8">
                            @csrf
                            <input type="text" name="name" class="form-control mb-2" placeholder="Nombre">
                            <input type="text" name="lastname" class="form-control mb-2" placeholder="Apellido">
                        </div>
                        <div class="col-8 mb-3">
                            <input type="email" name="email" class="form-control mb-2" placeholder="E-mail">
                            <input type="password" name="password" class="form-control mb-1" placeholder="Contraseña">
                        </div>
                        <div class="col-8">
                            <button type="submit" class="btn btn-primary mb-3 float-right">Crear cuenta</button>
                            <p class="small float-right">Al registrarme, declaro que soy mayor de edad y acepto los Términos y condiciones y las Políticas de privacidad de Mercado Cerrado y Mercado Pago.</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
