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
                        @if(!is_null($product->cover1))
                        <img src="{{$product->cover1}}" alt="" style="max-width: 4cm; max-height: 4cm;">
                        <hr>
                        @endif
                        @if(!is_null($product->cover2))
                        <img src="{{$product->cover2}}" alt="" style="max-width: 4cm; max-height: 4cm;">
                        <hr>
                        @endif
                        @if(!is_null($product->cover3))
                        <img src="{{$product->cover3}}" alt="" style="max-width: 4cm; max-height: 4cm;">
                        <hr>
                        @endif
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
                    <small class="text-muted">{{$product->status}} - {{$buySum}} </small>
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
                    <form action="{{route('buy')}}" method="get">
                        @csrf

                        @if($isProductOwner)
                            <div class="alert alert-danger" role="alert">
                                 NO PUEDES COMPRARTE A TI MISMO   
                            </div>
                        @else
                        
                        @if($stacks > 0)
                         <div>
                                <p>Cantidad</p>
                                    <select name="qty" id="quantity" class="form-control">
                                        @for ($i = 1; $i <= $product->quantity; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <p class="text-muted">({{$product->quantity}} unidades)</p>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Comprar</button>
                            
                        @else
                           <div class="alert alert-warning" role="alert">
                                 No hay unidades para comerciar
                            </div>

                            <button type="submit" class="btn btn-secondary btn-block" disabled="true">Comprar</button>
                            @endif
                        @endif
                    </form>
                </div>
                <hr>
            </div>
            <div class="row m-3">
                <div class="col-8">
                    <h1 class="font-weight-bold mb-5">Descripción</h1>
                    <div>
                        {!!$product->description!!}
                    </div>
                    <hr>
                    <div class="">
                        <h4 class="mb-3">Preguntas y Respuestas</h4>
                    @auth
                         <p>¿Qué quieres saber?</p>

                         <div class="row mb-3">
                            <a href="#" class="btn btn-outline-info mx-2">lorem</a>
                            <a href="#" class="btn btn-outline-info mx-2">lorem</a>
                            <a href="#" class="btn btn-outline-info">lorem</a>
                         </div>

                         <h5>O pregúntale al vendedor</h5>

                         <form action="{{route('comment')}}" method="post" class="mb-3">
                            @csrf
                            <input type="hidden" name="id" value="{{$id}}">
                             <div class="row">
                                 <div class="col-10">
                                     <textarea name="comment" id="comment" cols="50" rows="5" class="form-control" style="resize: none;"></textarea>
                                 </div>
                                <div class="col-2" style="position: absolute; left: 84%; bottom: 20%">
                                    <button type="submit" class="btn btn-primary">Preguntar</button>
                                </div>
                             </div>
                         </form>
                         @endauth
                        <small class="h5 mb-4">Últimas preguntas</small>
                            <p class="mb-4"></p>
                        <div>
                            @foreach($comments as $comment)
                                <i class="far fa-comment-alt"></i><span> {{$comment->comment}}</span>
                                    <p></p>
                                <i class="far fa-comment-dots"></i><span class="text-muted"> Lorem ipsum dolor sit amet.</span>
                            @endforeach
                        </div>
                    </div>
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
    } else {
        thumb.setAttribute("class", "card-img-top");
    }
}

</script>
@endsection
