@extends('Layouts.template')
@section('title','Notificación De Preguntas')
@section('background', '#EAECEE')
@section('content')
<section class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Preguntas</h1>
            </div>
        </div>
    </div>
</section>
<section class="py-2">
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                @foreach($shoppings as $buy)
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="mb-3">
                        	{{$buy->status}}, {{$buy->created_at->format('Y-m-d')}}
                        </div>
                        <a href="{{route('moreDetails', $buy->id)}}" class="float-right">Ver Detalles</a>
                        <div class="row">
                            <div class="col-2">
                                <img src="{{$buy->publication->cover}}" alt="" class="card-img-top mb-2">
                                <small>#{{$buy->id}}</small>
                            </div>
                            <div class="col-4">
                                <div class="card-title">
                                    <h4>{{$buy->publication->title}}</h4>
                                    <h3 class="mb-3">$ <strong>{{$buy->publication->prices}}</strong></h3>
                                    <p class="mb-3">{{$buy->quantity}}x ${{$buy->total}}</p>
                                    <small class="h5">Bogotá D.C</small>
                                </div>
                            </div>
                            <div class="col-2"></div>
                            <div class="col-4">
                                <img src="" alt="" class="rounded-circle">
                                <p class="font-weight-bold">Vendedor</p>
                                <p class="h6">{{$buy->seller->name}} {{$buy->seller->lastname}}</p>
                                <p class="h6">{{$buy->seller->phone}}</p>
                                <a href="{{route('privMessage', ['message' => $buy->id])}}">Ver mensajes</a>
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
