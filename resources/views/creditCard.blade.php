@extends('Layouts.form')
@section('title','Metodo de Pago')
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
            <div class="col-8">
                <h3 class="font-weight-light mb-3 font-italic">¿Cómo quieres pagar?</h3>
                <a href="{{route('dues')}}">dues</a>
                <div class="">
                    <h4>Medio sugerido</h4>
                    <div class="card mb-5">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3 text-center">
                                    <a href="#">
                                        <img src="https://media-exp1.licdn.com/dms/image/C4E0BAQGTeqYO7KGIJg/company-logo_200_200/0?e=2159024400&v=beta&t=OEWXeQ3B2OT4tOH17EYh2UeogLb0UuNMedhoA3155SA" alt="" class="card-img card-img-top ">
                                    </a>
                                </div>
                                <div class="col-5 py-3">
                                    <h4>Banco <span class="h5 font-weight-bold">{{$card->type}}</span></h4>
                                    <h6 class="font-weight-bold">{{$card->creditCard}}</h6>
                                </div>
                                <div class="col-4 p-3">
                                    <button type="button" class="btn btn-link float-right" data-toggle="modal" data-target="#exampleModal">
                                        Modificar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <h4>Otros medios</h4>
                    <div class="card mb-5">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <div class="h1 text-center">
                                        <i class="far fa-credit-card"></i>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <h4>Nueva Tarjeta de Crédito</h4>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <div class="h1 text-center">
                                        <i class="fas fa-university"></i>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <h4>Transferencia desde tu banco con PSE</h4>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <div class="h1 text-center">
                                        <i class="fas fa-money-bill"></i>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <h4>Pago en Efectivo</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Continuar</button>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-img text-center">
                            <img src="#" alt="" class="rounded-circle" width="120px" height="120px">
                        </div>
                        <div class="card-title">
                            <h1 class="text-center"></h1>
                        </div>
                        <p class="text-center"></p>
                        <p class="text-center">Cantidad: <strong></strong></p>
                        <hr>
                        <div class="">
                            <p>Producto: <span class="float-right">$ <strong></strong></span></p>
                            <p>Envio: <span class="float-right">$ <strong>0</strong></span></p>
                        </div>
                        <hr>
                        <div class="">
                            <p>Total: <span class="float-right">$ <strong></strong></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Mis Tarjetas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach($cards as $card)
                    <a href="{{route('setCard', ['id' =>$card->id])}}">
                        <div class="card mb-2">
                            <div class="card-body">
                                <h6>{{$card->creditCard}}</h6>
                                <p class="text-muted">{{$card->type}}</p>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
                <div class="modal-footer">
                    <a href="{{route('cardAdd')}}" class="btn btn-link float-left">Agregar nueva tarjeta</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
