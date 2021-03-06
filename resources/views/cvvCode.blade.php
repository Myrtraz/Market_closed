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
<section class="py-2">
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
            <div class="col-2"></div>
            <div class="col-9">
                <div class="text-center">
                    <h1>Por favor, ingresar el codigo de seguridad de su Tarjeta</h1>
                </div>
                <form action="{{route('makeOrderCC', compact('id', 'qty','sm', 'duesqty', 'payment','cvv'))}}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5 mb-4">
                                    <p>Codigó de seguridad</p>
                                    <input type="number" class="form-control mb-3 col-4" name="cvv" placeholder="cvv">
                                    <small class="text-muted ">Ultimos 3 digitos en el dorso de tu tarjeta</small>
                                </div>
                                <div class="col-1"></div>
                                <div class="col-5">
                                    <img src="https://www.iconspng.com/images/credit-card-back/credit-card-back.jpg" alt="..." class="card-img-top">
                                </div>
                                <button type="submit" class="btn btn-primary float-left px-2 mx-2">Continuar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
