@extends('Layouts.form')
@section('title','Añadir Producto')
@section('background', '#EAECEE')
@section('content')
<section class="py-5">
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
<section class="py-3">
    <div class="container">
        <form action="{{route('toSell')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-3 py-4">
                    <div class="container1">
                        <button class="add_form_field btn btn-primary mb-3">Agrega más imagenes &nbsp;
                            <span style="font-size:16px; font-weight:bold;">+ </span>
                        </button>
                        <div>
                            <input type="file" name="cover" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
                <div class="col-7 py-4">
                    <input type="text" name="title" class="mb-2 form-control" placeholder="Titulo">
                    <div id="editor" class="mb-2" style="background: white;"></div>
                    <input type="hidden" name="description">
                    <select name="category_id" id="category_id" class="form-control mb-2">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <input type="number" name="prices" class="mb-2 form-control col-4 float-right" placeholder="Precio">
                    <div class="mb-3">
                        <div class="row">
                            <select name="quantity" id="quantity" class="form-control col-4">
                                <option value="0" disabled="" selected="">Cantidad</option>
                                @for($i = 1; $i <= 100; $i++) <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                            </select>
                            <select name="status" id="status" class="form-control col-6 mx-2">
                                <option value="0" disabled="" selected="">Status del producto</option>
                                <option value="Nuevo">Nuevo</option>
                                <option value="Usado">Usado</option>
                            </select>
                        </div>
                    </div>
                    <div class="">
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
            $(wrapper).append('<div class=""><input type="file" name="cover'+x+'" class="form-control"/><a href="#" class="delete"><i class="fas fa-times text-danger"></i></a></div>'); 
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
