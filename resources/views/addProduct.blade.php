@extends('Layouts.form')
@section('title','Añadir Producto')
@section('background', '#EAECEE')
@section('content')
<section class="py-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if(count($errors->all()))
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Error:</h4>
                    <ul class="alert-danger">
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
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
        <form action="{{route('toSell')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row"> 
                <div class="col-7 py-3">
                    <div class="form-group">
                        <h3 style="border-bottom: 1px solid black">Introduzca el titulo</h3>
                        <input type="text" name="title" class="mb-2 form-control" placeholder="Titulo">
                    </div>
                   
                    <div class="form-group">
                        <h3 style="border-bottom: 1px solid black">Expecifique el producto</h3>
                        <div id="editor" class="mb-2" style="background: white; height: 250px"></div>
                        <input type="hidden" name="description">
                    </div>

                   <div class="form-group">
                        <h3 style="border-bottom: 1px solid black">¿Qué es el producto?</h3>
                        <select name="category_id" id="category_id" class="form-control mb-2">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                    </select>
                   </div>

                    <div class="form-group">
                        <h3 style="border-bottom: 1px solid black">Cantidad & Precio</h3>
                        <div class="row">
                            <select name="quantity" id="quantity" class="form-control col-4 mx-3">
                                <option value="0" disabled="" selected="">Cantidad</option>
                                    @for($i = 1; $i <= 100; $i++) 
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                            </select>
                            <input type="number" name="prices" class="form-control col-4 mx-4" placeholder="Precio">
                        </div>
                    </div>

                    <div class="form-group">
                        <h3 style="border-bottom: 1px solid black">¿El producto a sido usado con anterioridad?</h3>
                        <select name="status" id="status" class="form-control col-6 mx-2">
                            <option value="0" disabled="" selected="">Seleccionar</option>
                            <option value="Nuevo">No</option>
                            <option value="Usado">Si</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <h3 style="border-bottom: 1px solid black">Agregue Ilustraciones para mostrar su producto</h3>
                        <div class="">
                        <div class="container1">
                            <button class="add_form_field btn btn-primary mb-3">Agrega más imagenes &nbsp;
                                <span style="font-size:16px; font-weight:bold;">+ </span>
                            </button>
                            <div>
                                <input type="file" name="cover" class="form-control">
                            </div>
                        </div>
                    </div> 
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="to_exchange" id="exampleCheck1">
                        <label class="form-check-label text-muted mx-2" for="exampleCheck1">Incluir la opción de Intercambio</label>
                    </div>
                        
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="accept" id="exampleCheck1">
                        <label class="form-check-label text-muted mx-2" for="exampleCheck1">Acepta los <a href="#">Terminos y Condiciones</a> de nuestra página</label>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Agregar</button>
                </div>
               
            </div>
        </form>
    </div>
</section>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
var quill = new Quill('#editor', {
    theme: 'snow'
});

quill.on('text-change', function(delta, oldDelta, source) {
    if (source == 'user') {
        console.log("A user action triggered this change.");
        const html = quill.container.firstChild.innerHTML

        document.getElementsByName('description')[0].value = html
    }
});

</script>
<script>
$(document).ready(function() {
    var max_fields = 3;
    var wrapper = $(".container1");
    var add_button = $(".add_form_field");

    var x = 0;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            //add input box
            $(wrapper).append('<div class=""><a href="#" class="delete float-right"><i class="fas fa-times text-danger p-1"></i></a><input type="file" name="cover'+x+'" class="form-control"/></div>'); 
        } else {
            alert('Has llegado al limite')
        }
    });

    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })
})

</script>
@endsection
