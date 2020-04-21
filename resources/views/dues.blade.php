@extends('Layouts.form')
@section('title','Cuotas')
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

    input.larger {
      width: 18px;
      height: 18px;
      }
</style>
</section>
    <section class="py-4">
        <div class="container">
            <form action="{{route('dues.post', compact('id', 'qty', 'payment', 'sm'))}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-8">
                        <h3 class="font-weight-light mb-3 font-italic">¿Cómo quieres pagar?</h3>
                        <div class="">
                            <div class="card mb-5">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3 text-center">
                                            <i class="fas fa-credit-card h1 py-2"></i>
                                        </div>
                                        <div class="col-8 py-3 mx-2">
                                            <h4>{{$card->type}} - {{$cardHash}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <h4>¿En cuántas cuotas?</h4>
                            <div class="card mb-5">
                                <div class="card-body">
                                    @for($i = 1; $i <= 10; $i++) 
                                    <div class="row">
                                        <div class="col-1">
                                            <input type="radio" name="duesqty" value="{{$i}}" class="larger">
                                        </div>
                                        <div class="col-8">
                                            <p>{{$i}}x</p>
                                        </div>
                                </div>
                                <hr>
                                @endfor
                            </div>
                        </div>
                        <small>*Los intereses son encargados por el banco*</small>
                        <button type="submit" class="btn btn-primary float-right">Continuar</button>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-img text-center">
                                <img src="{{$buy->cover}}" alt="" class="rounded-circle" width="120px" height="120px">
                            </div>
                            <div class="card-title">
                                <h1 class="text-center">{{$buy->title}}</h1>
                            </div>
                            <p class="text-center">{!!$buy->description!!}</p>
                            <p class="text-center">Cantidad: <strong>{{$qty}}</strong></p>
                            <hr>
                            <div class="">
                                <p>Producto: <span class="float-right">$ <strong>{{$buy->prices}}</strong></span></p>
                                <p>Envio: <span class="float-right">$ <strong>0</strong></span></p>
                            </div>
                            <hr>
                            <div class="">
                                <p>Total: <span class="float-right">$ <strong>{{$buy->prices*$qty}}</strong></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
