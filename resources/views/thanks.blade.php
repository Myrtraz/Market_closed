@extends('Layouts.form')
@section('title','Añadir Producto')
@section('background', '#EAECEE')
@section('content')
<section class="py-3">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="card-body">
						<p class="font-italic">Gracias por tu compra, estamos esperando que el vendedor, acepte tu encargo. te avisaremos en cuanto el responda a ello. mientras tanto que quieres hacer, te damos estás dos opciones :D</p>
						<a href="{{route('home')}}" class="btn btn-primary">Seguir Comprando!</a>
						<a href="{{route('myShopping')}}" class="btn btn-info">Revisar tus compras</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection