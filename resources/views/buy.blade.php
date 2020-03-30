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
                                <input type="text" name="name" class="form-control mb-2" placeholder="Nombre">
                            </div>
                            <div class="col-6">
                                <input type="text" name="lastname" class="form-control mb-2" placeholder="Apellido">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <input type="text" name="state" class="form-control mb-2" placeholder="Estado">
                            </div>
                            <div class="col-6">
                                <input type="text" name="country" class="form-control mb-2" placeholder="Ciudad">
                            </div>
                        </div>
                        <input type="text" name="address" class="form-control mb-2" placeholder="Dirección">
                        <div class="">
                            <input type="text" name="additionalData" class="form-control" placeholder="Datos Adicionales (Opcional)">
                            <small class="text-muted m-1">
                                Indicaciones para encontrar tu domicilio
                            </small>
                        </div>
                        <input type="text" name="district" class="form-control mb-2" placeholder="Barrio (Opcional)">
                        <input type="number" name="phone" class="form-control mb-2" placeholder="Telefono de Contacto">
                        <button type="submit" class="btn btn-primary float-right">Siguiente</button>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <div class="card-img text-center">
                            <img src="https://psmedia.playstation.com/is/image/psmedia/ps4-slim-black-two-column-buy-01-en-13nov18_1542102620416?$Icon$" alt="" class="rounded-circle" width="120px" height="120px">
                        </div>
                        <div class="card-title">
                            <h1 class="text-center">Lorem ipsum.</h1>
                        </div>
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet ipsam labore, autem magnam illo quidem.</p>
                        <p class="text-center">Cantidad: <strong>1</strong></p>
                        <hr>
                        <div class="">
                            <p>Producto: <span class="float-right">$ <strong>xxxx</strong></span></p>
                            <p>Envio: <span class="float-right">$ <strong>xxxx</strong></span></p>
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
