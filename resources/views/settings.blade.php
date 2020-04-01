@extends('Layouts.template')
@section('title','Mis Datos')
@section('background', '#EAECEE')
@section('content')
<section class="py-3">
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
            <div class="col-1"></div>
            <div class="col-10">
                <div class="card mb-5">
                    <div class="card-title">
                        <button class="float-right m-3 btn btn-link h1" id="edit"><i class="fas fa-user-edit"></i></button>
                        <h1 class="m-3 font-weight-bold">Datos de Cuenta</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('account.update', $account->id) }}" method="post">
                            @method('PUT')
                            @csrf
                        <input type="text" class="form-control mb-2 col-9 m-1 enable" placeholder="Usuario" name="username" value="{{$account->username}}" disabled="">
                        <input type="email" class="form-control mb-2 col-9 m-1 enable" placeholder="E-mail"  name="email" value="{{$account->email}}" disabled="">
                        <button type="submit" class="btn btn-warning float-right enable" disabled="">Editar</button>
                        </form>
                    </div>
                </div>

                <div class="card mb-5">
                    <div class="card-title">
                        <h1 class="m-3 font-weight-bold">Datos Personales</h1>
                    </div>
                    <div class="card-body">
                        <input type="text" name="name" class="form-control mb-2 col-9 m-1" placeholder="Nombre" value="" disabled="">
                        <input type="text" name="lastname" class="form-control mb-2 col-9 m-1" placeholder="Apellido" value="" disabled="">
                        <input type="text" name="document" class="form-control mb-2 col-9 m-1" placeholder="Documento" value="" disabled="">
                        <input type="text" name="phone" class="form-control mb-2 col-9 m-1" placeholder="Telefono" value="" disabled="">
                        <button type="submit" class="btn btn-warning float-right" disabled="">Editar</button>
                    </div>
                </div>
                <div class="card mb-5">
                    <div class="card-title">
                        <h1 class="m-3 font-weight-bold">Tarjeta</h1>
                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control mb-2 col-9 m-1" placeholder="Tarjeta de Debito o Credito" value="" disabled="">
                        <button type="submit" class="btn btn-success float-right" disabled="">Agregar</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-title">
                        <h1 class="m-3 font-weight-bold">Domicilio</h1>
                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control mb-2 col-9 m-1" placeholder="Ubicación Actual" disabled="">
                        <button type="submit" class="btn btn-success float-right" disabled="">Agregar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    function clickEnable() {
       var list = document.getElementsByClassName("enable");

       for (let input of list) {
       input.removeAttribute('disabled');

        }
    }
    var editButton = document.getElementById('edit');
    editButton.addEventListener('click', function() {
        clickEnable();
    })
</script>
@endsection
