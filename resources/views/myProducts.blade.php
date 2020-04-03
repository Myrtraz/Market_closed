@extends('Layouts.template')
@section('title','Mis Productos')
@section('background', '#EAECEE')
@section('content')
<section class="py-3">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="font-weight-bold">Mis Productos</h1>
			</div>
		</div>
	</div>
</section>
<section class="py-2">
	<div class="container">
		<div class="row">
			<div class="col-3"></div>
			@foreach($myProducts as $products)
			<div class="col-10">
				<div class="card mb-2">
					<div class="card-body">
						<div class="row">
							<div class="col-3">
								<img src="{{$products->cover}}" alt="" class="card-img-top">
							</div>
							<div class="col-8">
								<div class="card-title p-3">
								<h4>{{$products->title}}</h4>
								<h3 class="mb-3">$ <strong>{{$products->prices}}</strong></h3>
								<small class="h5">Bogotá D.C</small>
								<a href="{{route('product', $products->id)}}" class="btn btn-primary float-right">Ver publicación</a>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
@endsection