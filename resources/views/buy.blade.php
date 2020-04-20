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

    input.larger {
      width: 25px;
      height: 25px;
      }
</style>
</section>
<section class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <form action="{{route('make.sale', compact('id', 'qty', 'sm'))}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $id }}">
                    <input type="hidden" name="qty" value="{{ $qty }}">
                    <h3 class="font-weight-light mb-3 font-italic">¿Cómo quieres recibir tu compra?</h3>
                    <div class="">
                        <h4>Domicilio</h4>
                        <div class="card mb-5">
                            <div class="card-body" style="background: #D6D6D6;">
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <span class="h1"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                    <div class="col-5">
                                        @if(!is_null($address))
                                        <h4>{{$address->career}} {{$address->streetNumber}} # {{$address->street}}</h4>
                                        <h6 class="text-muted">{{$address->additionalData}}</h6>
                                        @elseif(is_null($address))
                                        <a href="{{route('addresses')}}" class="btn btn-link text-center float-left">Agregar nuevo domicilio</a>
                                        @endif
                                    </div>
                                    <div class="col-4 p-3">
                                        @if(!is_null($address))
                                        <button type="button" class="btn btn-link float-right" data-toggle="modal" data-target="#exampleModal">
                                            Modificar Ubicación
                                        </button>
                                        @endif
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Mis Domicilios</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        @foreach($addresses as $address)
                                                        <a href="{{route('setAddress', ['id' => $address->id])}}">
                                                            <div class="card mb-2">
                                                                <div class="card-body">
                                                                    <h6>{{$address->career}} {{$address->streetNumber}} #{{$address->street}}</h6>
                                                                    <p class="text-muted">{{$address->additionalData}}</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        @endforeach
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="{{route('addresses', compact('id', 'qty', 'sm'))}}" class="btn btn-link float-left">Agregar nuevo domicilio</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $first = true;?>
                    @foreach($shipping_methods as $shipping_method)
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <div class="h1">
                                        <input type="radio" class="larger" name="sm" aria-label="Radio button for following text input" {{$first ? 'checked=""':''}} value="{{$shipping_method->id}}">
                                    </div> 
                                </div>
                                <div class="col-7">
                                    <h4>{{$shipping_method->name}}</h4>
                                    <h6 class="text-muted">Puede llegar x a x dias</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $first = false;?>
                    @endforeach
                    <button type="submit" class="btn btn-primary float-right">Continuar</button>
                </form>
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
    </div>
</section>
@endsection
