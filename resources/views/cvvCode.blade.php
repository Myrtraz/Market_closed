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

        input.larger {
      width: 25px;
      height: 25px;
      }
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
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-5">
								<input type="number" class="form-control mb-3 col-3" name="cvv" placeholder="cvv">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt aliquam hic quo cumque enim, sed corporis. Quisquam quidem fugiat, ratione excepturi inventore aut quis qui beatae neque libero, ea, eveniet.</p>
							</div>
							<div class="col-1"></div>

							<div class="col-5">	
								<img src="https://www.iconspng.com/images/credit-card-back/credit-card-back.jpg" alt="..." class="card-img-top">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection