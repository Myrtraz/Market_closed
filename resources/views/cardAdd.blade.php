@extends('Layouts.form')
@section('title','Añadir Tarjeta')
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
<style>
    input[type=number]::-webkit-inner-spin-button,
	input[type=number]::-webkit-outer-spin-button {
  	-webkit-appearance: none;
  	margin: 0;
}

input[type=number] { -moz-appearance:textfield; }
</style>
<section>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <h3 class="text-center font-italic">Añada los datos correspondiente para registrar su tarjeta</h3>
                <div class="card">
                    <form action="{{route('cardAddPost', compact('id', 'qty', 'sm'))}}" method="post">
                    	@csrf
                        <div class="card-body">
                            <div class="row">
                                <input type="text" name="cardName" class="form-control mb-2" placeholder="Nombre del portador de la tarjeta">
                                <input type="number" name="creditCard" class="form-control mb-2" placeholder="N° de Tarjeta de credito">
                                <div class="">
                                    <select name="type" id="type" class="form-control">
                                        <option value="0" selected="" disabled="">Eliga su tipo de tarjeta</option>
                                        <option value="American Express">American Express</option>
                                        <option value="MasterCard">MasterCard</option>
                                        <option value="Visa">Visa</option>
                                    </select>
                                </div>
                                <input type="number" class="form-control col-2 mx-2" name="cvv" placeholder="CVV">
                                <div class="">
                                    <select name="exp" id="exp" class="form-control">
                                        <option value="0" selected="" disabled="">Mes</option>
                                        @for($i = 1; $i <= 12; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                                <div class="">
                                    <select name="exp2" id="exp2" class="form-control mx-2">
                                        <option value="0" selected="" disabled="">Año</option>
                                        @for($i = 2020; $i <= 2028; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Agregar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
