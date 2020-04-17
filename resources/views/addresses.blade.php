@extends('Layouts.form')
@section('title','Direcciones')
@section('background', '#EAECEE')
@section('content')
<section class="py-4">
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
			<div class="col-3"></div>
			<div class="col-6">
				<h1 class="">¿Dónde quieres recibirlo?</h1>
				<div class="card mb-5">
					<div class="card-body">
						<form action="{{route('myAddresses', compact('id', 'qty'))}}" method="post">
							@csrf
						<div class="row">
								<div class="col-12 mb-2">
									<input type="text" name="fullName" class="form-control" placeholder="Nombre y Apellido" value="{{$user->name}} {{$user->lastname}}">
									<small class="text-muted">Tal cual dice en el documento</small>
								</div>
							<div class="col-6">
								<select name="state" id="state" class="form-control">
									<option value="0" disabled selected="">Estado</option>
									<option value="Bogota D.C">Bogota D.C</option>
								</select>
							</div>
							<div class="col-6 mb-2">
								<select name="city" id="city" class="form-control">
									<option value="0" disabled selected="">Ciudad</option>
									<option value="Usaquén">Usaquén</option>
								</select>
							</div>
							<div class="col-3">
								<select name="career" id="career" class="form-control">
									<option value="0" disabled selected="">Dirección</option>
									<option value="Carrera">Carrera</option>
								</select>
							</div>
							<div class="col-3">
								<input type="number" name="streetNumber" class="form-control" placeholder="N° Calle">
							</div>
							<div class="col-3 mb-2">
								<input type="number" name="street" class="form-control" placeholder="Calle">
							</div>
							<div class="col-3 mb-2">
								<input type="number" name="street2" class="form-control" placeholder="Calle">
							</div>
							<div class="col-12 mb-2">
								<input type="text" name="additionalData" class="form-control" placeholder="Datos Adicionales (Opcional)">
								<small class="text-muted">Indicaciones para encontrar tu domicilio.</small>
							</div>
							<div class="col-10 mb-4">
								<input type="number" name="phone" class="form-control" placeholder="N° de Telefonó" value="{{$user->phone}}">
								<small class="text-muted">LLamarán a este número si hay algún problema en el envío.</small>
							</div>
						</div>
						<button type="submit" class="btn btn-primary float-right">Continuar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection