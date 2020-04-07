@extends('Layouts.template')
@section('title','Search')
@section('background', '#EAECEE')
@section('content')
<style>
    input[type=number]::-webkit-inner-spin-button,
	input[type=number]::-webkit-outer-spin-button {
  		-webkit-appearance: none;
  		margin: 0;
	}

	input[type=number] { -moz-appearance:textfield; }
</style>
<section class="py-2">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div>
                    <h2>{{ $title }}</h2>
                    <small>{{ count($search) }} resultados</small>
                </div>
                <div>
                    <h4>Precio</h4>
                    <form method="get" action="{{route('search')}}">
                        <input type="hidden" name="title" class="form-control" value="{{ $title }}">
                        <div class="row">
                            <div class="col-5">
                                <input type="number" name="min" class="form-control" placeholder="Minimo" />
                            </div>
                            <div class="col-5">
                                <input type="number" name="max" class="form-control mb-2" placeholder="Maximo" />
                                <button type="submit" class="btn btn-dark float-right"><i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>  
                    </form>
                </div>
            </div>
            <div class="col-8">
                @foreach($search as $products)
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
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
