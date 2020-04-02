@extends('Layouts.form')
@section('title','Comprar')
@section('background', '#EAECEE')
@section('content')
<section>
    <style>
        input[type=number]::-webkit-inner-spin-button,
		input[type=number]::-webkit-outer-spin-button {
  		-webkit-appearance: none;
  		margin: 0;
}

		input[type=number] { -moz-appearance:textfield; }
</style>
</section>
<section class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-7">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <small class="text-muted h6 m-1">Nombre</small>
                                <input type="text" name="name" class="form-control mb-2" placeholder="Nombre" value="{{$user->name}}" disabled="">
                            </div>
                            <div class="col-6">
                                <small class="text-muted h6 m-1">Apellido</small>
                                <input type="text" name="lastname" class="form-control mb-2" placeholder="Apellido" value="{{$user->lastname}}" disabled="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <small class="text-muted h6 m-1">Estado</small>
                                <input type="text" name="state" class="form-control mb-2" placeholder="Estado" value="{{$user->state}}" disabled="">
                            </div>
                            <div class="col-6">
                                <small class="text-muted h6 m-1">País</small>
                                <input type="text" name="country" class="form-control mb-2" placeholder="Ciudad" value="{{$user->country}}" disabled="">
                            </div>
                        </div>
                        <small class="text-muted h6 m-1">Dirección</small>
                        <input type="text" name="address" class="form-control mb-2" placeholder="Dirección" value="{{$user->address}}" disabled="">
                        <div class="">
                            <small class="text-muted h6 m-1">Datos Adicionales</small>
                            <input type="text" name="additionalData" class="form-control" placeholder="Datos Adicionales (Opcional)" value="{{$user->additionalData}}">
                            <small class="text-muted m-1">
                                Indicaciones para encontrar tu domicilio
                            </small>
                        </div>
                        <small class="text-muted h6 m-1">Barrio</small>
                        <input type="text" name="district" class="form-control mb-2" placeholder="Barrio (Opcional)" value="{{$user->district}}" disabled="">
                        <small class="text-muted h6 m-1">Telefono</small>
                        <input type="number" name="phone" class="form-control mb-2" placeholder="Telefono de Contacto" value="{{$user->phone}}" disabled="">
                        <button type="submit" class="btn btn-primary float-right">Siguiente</button>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <div class="card-img text-center">
                            <img src="{{$buy->cover}}" alt="" class="rounded-circle" width="120px" height="120px">
                        </div>
                        <div class="card-title">
                            <h1 class="text-center">{{$buy->title}}</h1>
                        </div>
                        <p class="text-center">{{$buy->description}}</p>
                        <p class="text-center">Cantidad: <strong>{{$qty}}</strong></p>
                        <hr>
                        <div class="">
                            <p>Producto: <span class="float-right">$ <strong>{{$buy->prices}}</strong></span></p>
                            <p>Envio: <span class="float-right">$ <strong>0</strong></span></p>
                        </div>
                        <hr>
                        <div class="">
                            <p>Total: <span class="float-right">$ <strong>xxxx</strong></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
