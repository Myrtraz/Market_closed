@extends('Layouts.template')
@section('title','Ventas')
@section('background', '#EAECEE')
@section('content')
<section class="py-3">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="m-3">Mis Ventas</h1>
				<a href="{{route('myProducts')}}" class="btn btn-info float-left">Mis Productos</a>
				<a href="{{route('upProduct')}}" class="btn btn-primary float-right">Añadir Producto</a>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container py-3">
		<div class="row">
			<div class="col-1"></div>
			<div class="col-10">
				@foreach($vendor as $sale)
				<div class="card mb-2">
					<div class="card-body">
						<div class="row">
							<div class="col-2">
								<img src="{{$sale->publication->cover}}" alt="" class="card-img-top">
							</div>
							<div class="card-title">
								<h4>{{$sale->publication->title}}</h4>
								<h3 class="mb-3">$ <strong>{{$sale->publication->prices}}</strong></h3>
								<p class="mb-3">{{$sale->quantity}}x $<strong>{{$sale->total}}</strong></p>
								<small class="h5">Bogotá D.C</small>
								<a href="{{route('vendor')}}" class="h6 float-right small">{{$sale->seller->username}}</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</section>
@endsection