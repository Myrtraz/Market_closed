@extends('Layouts.template')
@section('title','Mis Compras')
@section('background', '#EAECEE')
@section('content')
<section class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="card-title">
                            <h1 class="font-weight-bold">Resumen de compra</h1>
                        </div>
                        <p class="float-left">Pago de x productos</p>
                        <p class="float-right">$ XXXX</p>
                        <br>
                        <br>
                        <p class="float-left text-success mb-2">Envio gratis</p>
                        <p class="float-right mb-2">$ XXXX</p>
                        <br>
                        <hr>
                        <p class="float-left">Tu pago</p>
                        <p class="float-right">$ XXXX</p>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <span class="rounded-circle h1"><i class="fas fa-credit-card"></i></span>
                            </div>
                            <div class="col-5">
                                <h4>Tarjeta de credito</h4>
                                <p>Pago ($ xxx.xxx,xx)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                	<div class="card-body">
                		<div class="row">
                			<div class="col-3">
                				<span class="rounded-circle h1"><i class="fas fa-map-marker-alt"></i></span>
                			</div>
                			<div class="col-6">
                				<p>Carrera xx # xxx-xx</p>
                				<p>"Interior X - Apartamento xxx"</p>
                				<p>xxxxx, Bogotá, Bogotá D.C</p>
                				<p>Recibe a XXXX, 123456789</p>
                			</div>
                		</div>
                	</div>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h5 class="text-muted">Compraste</h5>
                            <h4>Entregado el xx de mes</h4>
                            <hr>
                            <div class="row">
                                <div class="col-3">
                                    <div class="card-img">
                                        <img src="https://picsum.photos/450/450" alt="" class="card-img-top">
                                    </div>
                                </div>
                                <div class="col-5">
                                    <p>Lorem ipsum.</p>
                                    <p class="small">Lorem ipsum.</p>
                                    <p class="small">$ XX.XXX.xx * X unidades</p>
                                </div>
                                <div class="col-12">
                                    <div class="card" style="background: #EAECEE;">
                                        <p class="m-2"><strong>Vendedor</strong> Lorem ipsum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
