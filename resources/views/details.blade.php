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
                        <div class="row">
                            <div class="col-12">
                                <p class="float-left">Pago de {{$buy->quantity}} productos</p>
                                <p class="float-right">$ {{$buy->publication->prices}}</p>
                            </div>
                            <div class="col-12">
                                <p class="float-left text-success mb-2">Envio gratis</p>
                                <p class="float-right mb-2">$ 0</p>
                            </div>
                            <div class="col-12">
                                <hr>
                                <p class="float-left">Tu pago</p>
                                <p class="float-right">$ {{$buy->total}}</p>
                            </div>
                        </div>
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
                                <p>Pago ($ {{$buy->total}})</p>
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
                                <p>{{$buy->address->career}} {{$buy->address->streetNumber}} # {{$buy->address->street}}-{{$buy->address->street2}}</p>
                                <p>{{$buy->address->additionalData}}</p>
                                <p>Recibe a {{$buy->buyer->name}}, {{$buy->buyer->phone}}</p>
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
                                        <img src="{{$buy->publication->cover}}" alt="" class="card-img-top">
                                    </div>
                                </div>
                                <div class="col-5">
                                    <p>{{$buy->publication->title}}</p>
                                    <p class="small">$ {{$buy->publication->prices}} * {{$buy->quantity}} unidades</p>
                                </div>
                                <div class="col-12">
                                    <div class="card" style="background: #EAECEE;">
                                        <p class="m-2"><strong>Vendedor</strong> {{$buy->seller->name}} {{$buy->seller->lastname}}</p>
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
