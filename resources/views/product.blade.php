@extends('Layouts.template')
@section('title','Producto')
@section('background', '#EAECEE')
@section('content')
    <style>
        .grande{
            width: 600px;
            transition: 300ms all ease;
        }
        .card-img-top{
            transition: 300ms all ease;
        }
    </style>
<section class="py-5">
    <div class="container">
        <div class="card">
            <div class="row">
                <div class="col-2 m-1">
                    <div class="card-img">
                        <img src="{{$product->cover}}" alt="" style="max-width: 4cm; max-height: 4cm;">
                        <hr>
                        <img src="" alt="" style="max-width: 4cm; max-height: 4cm;">
                        <hr>
                        <img src="" alt="" style="max-width: 4cm; max-height: 4cm;">
                    </div>
                </div>
                <div class="mr-4">
                    <p></p>
                </div>
                <div class="col-6">
                    <img id="thumb" src="{{$product->cover}}" alt="" class="card-img-top">
                    <hr>
                    <input type="button" value="Zoom" class="btn btn-secondary" onclick="zoom();">
                </div>
                <div class="col-3 m-4">
                    <h3>{{$product->title}}</h3>
                    <div class="">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <h2>$ {{$product->prices}}</h2>
                    <p class="text-dark">
                        <span><i class="fas fa-credit-card"></i></span> 36 cuotas de $ 33.331
                    </p>
                    <p>
                        <span class="text-success"><i class="fas fa-people-carry"></i> Llega gratis <strong>hoy</strong></span>
                        <br>
                        <span class="text-muted" style="font-size: 12px;">Solo en zonas de Bogotá</span>
                    </p>
                    <div class="">
                        <p>Cantidad</p>
                        <select name="quantity" id="quantity" class="form-control">
                            @for ($i = 1; $i <= $product->quantity; $i++)
                            <option value="{{$i}}">{{$i}}</option>
                            @endfor
                            
                        </select>
                        <p class="text-muted">({{$product->quantity}} unidades)</p>
                    </div>
                    <a href="{{route('buy')}}" class="btn btn-primary btn-block">Comprar</a>
                </div>
                <hr>
            </div>
            <div class="row m-3">
                <div class="col-8">
                    <h1 class="font-weight-bold mb-5">Descripción</h1>
                    <pre>{{$product->description}}</pre>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    var zoom = function() {
            var thumb = document.getElementById("thumb");

            if (thumb.className == "card-img-top") {
                thumb.setAttribute("class", "card-img-top grande");
            } else{
                thumb.setAttribute("class", "card-img-top");
            }
        }
</script>
@endsection
