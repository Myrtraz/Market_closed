@extends('Layouts.template')
@section('title','Intercambios')
@section('background', '#EAECEE')
@section('content')
<section class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">
                    Intercambios
                </h1>
            </div>
        </div>
    </div>
</section>
<section class="py-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur sit numquam doloremque quam dolor, dolorem tempora accusantium rerum unde repellendus, quaerat culpa natus quae, quia impedit quis tenetur quod! Nisi.
                    Quisquam illo rerum aliquid quidem. Sed, provident nihil accusamus recusandae dolore harum minus quod obcaecati animi maiores autem non quam et dolores vero voluptate neque, nisi aliquam consequatur accusantium similique.
                    Placeat provident animi, incidunt voluptates voluptatum esse distinctio laborum eos quibusdam vero doloribus quae minus voluptas quia dolor nostrum id modi aut minima labore iure? Et dolor earum tenetur expedita.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="py-2">
    <div class="container">
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-12">
                @foreach($myTrades as $trades)
                    <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3 " style="">
                                <img alt="" class="card-img-top py-4" height="250px" src="{{$trades->cover}}">
                                </img>
                            </div>
                            <div class="col-9">
                                <div class="card-title p-3">
                                    <h4>{{$trades->title}}</h4>
                                    <h3 class="mb-3">
                                        $ <b>{{$trades->prices}}</b>
                                    </h3>
                                    <small class="h5">Bogotá D.C</small>
                                </div>
                                <div class="form-group my-5">
                                    <a class="btn btn-primary float-right ml-2" href="{{route('product', $trades->id)}}">
                                        Ver publicación
                                    </a>
                                    <a class="btn btn-success float-right ml-2" href="#">
                                        Aceptar
                                    </a>
                                    <a class="btn btn-danger float-right" href="#">
                                        Rechazar
                                    </a>
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
<!--route('product', $products->id)
https://http2.mlstatic.com/bicicleta-roadmaster-jumper-doble-susp-29-shimano21v-bloqueo-D_NQ_NP_602611-MCO32878791537_112019-F.webp


    --->
@endsection
