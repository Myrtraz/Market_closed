@extends('Layouts.template')
@section('title','Ventas')
@section('background', '#EAECEE')
@section('content')
<section class="py-3">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>Mis Ventas</h1>
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
				<div class="card">
					
					<div class="card-body">
						<div class="row">
							<div class="col-3">
								<img src="http://lorempixel.com/450/450/" alt="" class="card-img-top">
							</div>
							<div class="card-title">
								<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
								<h3 class="mb-3">$ <strong>xxxx</strong></h3>
								<p class="mb-3">36x $xxxx</p>
								<small class="h5">Bogotá D.C</small>
								<a href="#" class="h6 float-right small">User</a>
							</div>
						</div>
					</div>
					<hr>
					<div class="card-body">
						<div class="row">
							<div class="col-3">
								<img src="http://lorempixel.com/450/450/" alt="" class="card-img-top">
							</div>
							<div class="card-title">
								<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
								<h3 class="mb-3">$ <strong>xxxx</strong></h3>
								<p class="mb-3">36x $xxxx</p>
								<small class="h5">Bogotá D.C</small>
								<a href="#" class="h6 float-right small">User</a>
							</div>
						</div>
					</div>
					<hr>
					<div class="card-body">
						<div class="row">
							<div class="col-3">
								<img src="http://lorempixel.com/450/450/" alt="" class="card-img-top">
							</div>
							<div class="card-title">
								<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
								<h3 class="mb-3">$ <strong>xxxx</strong></h3>
								<p class="mb-3">36x $xxxx</p>
								<small class="h5">Bogotá D.C</small>
								<a href="#" class="h6 float-right small">User</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection