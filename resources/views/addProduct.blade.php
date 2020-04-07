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
        <form action="{{route('toSell')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-3">
                    <input type="text" name="cover" class="form-control" placeholder="Url Images">
                </div>
                <div class="col-3"></div>
                <div class="col-6 py-4">
                    <input type="text" name="title" class="mb-2 form-control" placeholder="Titulo">
                    <div id="editor"class="mb-2" style="background: white;" value="{!!description!!}"></div>
                    <input type="hidden" name="description" value="{!!description!!}">
                    <select name="category_id" id="category_id" class="form-control mb-2">
                        @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <input type="number" name="prices" class="mb-2 form-control col-4 float-right" placeholder="Precio">
                    <div class="mb-3">
                        <select name="quantity" id="quantity" class="form-control col-2">
                            @for($i = 1; $i <= 50; $i++)
                                <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
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
<script type="text/javascript">
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#blah')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

</script>
<script>
$(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#gallery-photo-add').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
});

</script>
@endsection
