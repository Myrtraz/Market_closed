@extends('Layouts.template')
@section('title','Mis Compras')
@section('background', '#EAECEE')
@section('content')
<section class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Mis compras</h1>
            </div>
        </div>
    </div>
</section>
<section class="py-2">
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <form action="" method="post">
                	@method('Delete')
                	@csrf
                    @foreach($shoppings as $buy)
                    <div class="card mb-2">
                        <div class="card-body">
                            <a href="#" class="float-right h3 text-decoration-none text-dark"><i class="fas fa-times"></i></a>
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{$buy->publication->cover}}" alt="" class="card-img-top">
                                    <small>#{{$buy->id}}</small>
                                </div>
                                <div class="card-title">
                                    <h4>{{$buy->publication->title}}</h4>
                                    <h3 class="mb-3">$ <strong>{{$buy->publication->prices}}</strong></h3>
                                    <p class="mb-3">{{$buy->quantity}}x ${{$buy->total}}</p>
                                    <small class="h5">Bogotá D.C</small>
                                    <a href="{{route('vendor')}}" class="h6 float-right small">{{$buy->seller->username}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
