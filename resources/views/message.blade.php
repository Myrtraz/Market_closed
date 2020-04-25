@extends('Layouts.messageForm')
@section('title','Messages')
@section('background', '#f7f1e3')
@section('content')
<section class="py-3">
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
    *{
	padding: 0;
	margin: 0;
	border: 0;
}

body{
	background: #972247;
}

.contenedor{
	width: 40%;
	background: #fff;
	margin: 0 auto;
	padding: 20px;
	border-radius: 12px;
	-moz-border-radius: 12px;
	-o-border-radius: 12px;
	-webkit-border-radius: 12px;
}

.caja-chat{
	width: 90%;
	height: 400px;
}

.datos-chat{
	width: 100%;
	padding: 5px;
	margin-bottom: 5px;
	border-bottom: 1px solid silver;
	font-weight: bold;
}

input[type='text']{
	width: 100%;
	height: 40px;
	border: 1px solid gray;
	border-radius: 5px;
	-moz-border-radius: 5px;
	-o-border-radius: 5px;
	-webkit-border-radius: 5px;
}

button[type='submit']{
	width: 100%;
	height: 40px;
	border: 1px solid gray;
	border-radius: 5px;
	-moz-border-radius: 5px;
	-o-border-radius: 5px;
	-webkit-border-radius: 5px;
	cursor: pointer;
}

textarea{
	width: 100%;
	height: 40px;
	border: 1px solid gray;
	border-radius: 5px;
	-moz-border-radius: 5px;
	-o-border-radius: 5px;
	-webkit-border-radius: 5px;
}
</style>
<section>
    <div class="container">
        <div class="row">
        	<a href="{{route('myShopping')}}"><i class="far fa-arrow-alt-circle-left h1 text-dark"></i></a>
            <div class="col overflow-auto">
                <div class="contenedor overflow-auto" style="border: 1px solid grey;">
                    <div class="overflow-auto">
                        <div class="caja-chat">
                            <div class="caja ">
                                <div class="datos-chat overflow-auto">
                                    @if(! is_null($messages))
                                    	@foreach($messages as $message)
	                                    	<span style="color: #1c62c4;">{{$message->sender->name}}: </span>
	                                    	<span style="color: #848484;">{{$message->message}}</span>
	                                    	<span style="float: right;">{{$message->created_at->format('H:i:A')}}</span>
	                                    	<hr>
	                                    	<br>
                                    	@endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="{{route('sendMessage', compact('id'))}}" method="post">
                        @csrf
                        <input type="text" name="message" class="form-control mb-2" placeholder="Write your message">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </form>
                </div>
                <div class="mb-5"></div>
            </div>
        </div>
    </div>
</section>
@endsection
