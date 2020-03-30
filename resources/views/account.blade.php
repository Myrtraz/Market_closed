@extends('Layouts.template')
@section('title','Modificación')
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

input[type=number] {
    -moz-appearance: textfield;
}
</style>
<section>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-7">
                <div class="text-center mb-2">
                    <h1 class="font-weight-bold">Modificación de Usuario</h1>
                </div>
                <div>
                    <form action="" method="post">
                        @csrf
                        @method('PUT')
                        <input type="text" class="form-control mb-2" placeholder="Usuario">
                        <input type="email" class="form-control mb-2" placeholder="E-mail">
                        <button type="submit" class="btn btn-primary float-right mb-3">Cambiar</button>
                    </form>
                </div>
                <div>
                    <form action="" method="post">
                        @csrf
                        @method('PUT')
                        <input type="text" class="form-control mb-2" placeholder="Nombre" disabled="">
                        <input type="text" class="form-control mb-2" placeholder="Apellido" disabled="">
                        <input type="number" class="form-control mb-2" placeholder="Documento" disabled="">
                        <input type="number" class="form-control mb-2" placeholder="telefono" disabled="">
                        <button type="submit" class="btn btn-primary float-right mb-3">Cambiar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
$('#user').change(function() {
    $('#personal').removeAttr('disabled');
});

$('#personal').change(function() {
    $('#color').removeAttr('disabled');
});

</script>
@endsection
