@extends('Layouts.template')
@section('title','Mis Datos')
@section('background', '#EAECEE')
@section('content')
<section class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="card mb-5">
                    <div class="card-title">
                        <h1 class="m-3 font-weight-bold">Datos de Cuenta</h1>
                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control mb-2 col-9 m-1" placeholder="Usuario" value="" disabled="">
                        <input type="text" class="form-control mb-2 col-9 m-1" placeholder="E-mail" value="" disabled="">
                        <a href="#" class="btn btn-warning float-right">Editar</a>
                    </div>
                </div>

                <div class="card mb-5">
                    <div class="card-title">
                        <h1 class="m-3 font-weight-bold">Datos Personales</h1>
                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control mb-2 col-9 m-1" placeholder="Nombre y Apellido" value="" disabled="">
                        <input type="text" class="form-control mb-2 col-9 m-1" placeholder="Documento" value="" disabled="">
                        <input type="text" class="form-control mb-2 col-9 m-1" placeholder="Telefono" value="" disabled="">
                        <a href="#" class="btn btn-warning float-right">Editar</a>
                    </div>
                </div>
                <div class="card mb-5">
                    <div class="card-title">
                        <h1 class="m-3 font-weight-bold">Tarjeta</h1>
                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control mb-2 col-9 m-1" placeholder="Tarjeta de Debito o Credito" value="" disabled="">
                        <a href="#" class="btn btn-success float-right">Agregar</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-title">
                        <h1 class="m-3 font-weight-bold">Domicilio</h1>
                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control mb-2 col-9 m-1" placeholder="Ubicación Actual" disabled="">
                        <a href="#" class="btn btn-success float-right">Agregar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
