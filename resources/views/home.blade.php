@extends('Layouts.template')
@section('title','Inicio')
@section('background', '#EAECEE')
<!--#FFDD23 color de Navs-->
@section('content')
<section>
    <div class="row">
        <div class="col-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://media.aws.alkosto.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/b/o/bose-soundlink-micro-azul-p6.jpg" class="card-img-top" alt="..." style="min-height: 350px; min-width: 350px; max-height: 400px; max-width: 100%">
                    </div>
                    <div class="carousel-item">
                        <img src="https://cdn.pocket-lint.com/r/s/1200x/assets/images/140007-games-review-nintendo-switch-review-image1-lp6zy9awm0.jpg" class="d-block w-100" alt="..." style="min-height: 350px; min-width: 350px; max-height: 400px; max-width: 100%">
                    </div>
                    <div class="carousel-item">
                        <img src="https://psmedia.playstation.com/is/image/psmedia/ps4-slim-black-two-column-buy-01-en-13nov18_1542102620416?$Icon$" class="d-block w-100" alt="..." style="min-height: 350px; min-width: 350px; max-height: 400px; max-width: 100%">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-10">
                                <span class="rounded-circle h1"><i class="fas fa-piggy-bank"></i></span>
                                <div class="float-right">
                                    <p class="mb-2"></p>
                                    <p>Lorem ipsum dolor.</p>
                                    <a href="#" class="text-decoration-none" style="font-size: 14px;">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-img">
                                    <a href="{{route('product', $product->id)}}" class="text-decoration-none"><img src="{{$product->cover}}" alt="..." class="card-img-top"></a>
                                </div>
                                <hr>
                                <div class="card-title">
                                    <h3 class="text-center">$ {{$product->prices}}</h3>
                                    <p class="text-muted">{{$product->title}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<section class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-muted">Categorias</h1>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 text-center">
                                <a href="#" class="h1"><i class="far fa-futbol" style="color: #1281EF;"></i></a>
                                <br>
                                <span><a href="#" class="text-dark text-decoration-none">Deportes y Fitness</a></span>
                                <hr>
                                <a href="#" class="h1"><i class="fas fa-mobile-alt" style="color: #1281EF;"></i></a>
                                <br>
                                <a href="#" class="text-dark text-decoration-none">Celulares</a>
                            </div>
                            <div class="col-4 text-center">
                                <a href="#" class="h1"><i class="fas fa-headphones" style="color: #1281EF;"></i></a>
                                <br>
                                <a href="#" class="text-dark text-decoration-none">Auriculares</a>
                                <hr>
                                <a href="#" class="h1"><i class="fas fa-tshirt" style="color: #1281EF;"></i></a>
                                <br>
                                <a href="#" class="text-dark text-decoration-none">Camisetas</a>
                            </div>
                            <div class="col-4 text-center">
                                <a href="#" class="h1"><i class="fas fa-couch" style="color: #1281EF;"></i></a>
                                <br>
                                <a href="#" class="text-dark text-decoration-none">Muebles</a>
                                <hr>
                                <a href="#" class="h1"><i class="fas fa-gamepad" style="color: #1281EF;"></i></a>
                                <br>
                                <a href="#" class="text-dark text-decoration-none">Consola y videojuegos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
