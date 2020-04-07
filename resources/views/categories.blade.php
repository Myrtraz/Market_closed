@extends('Layouts.template')
@section('title','Categoria')
@section('background', '#EAECEE')
@section('content')
<section class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5 class="font-weight-bold">Categoria > </h5>
            </div>
        </div>
    </div>
</section>
<section class="py-2">
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-10">
                @foreach($id_category as $category)
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <img src="https://mauriciobenoist.com/wp-content/uploads/2020/01/placeholder.png" height="320px" alt="" class="card-img-top">
                            </div>
                            <div class="col-8">
                                <div class="card-title p-3">
                                    <h4>{{$category->id}}</h4>
                                    <h3 class="mb-3">$...</h3>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary float-right">Ver publicación</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
