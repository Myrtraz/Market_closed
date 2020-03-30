<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="https://kit.fontawesome.com/daacfcc639.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>@yield('title','Sin titulo')</title>
</head>

<body style="background: @yield('background', '#fff');">
    <style>
        .cambioColor {
        color: grey;
    }

    .cambioColor:hover {
        color: black;
    }

    .bordered:hover {
        padding: 9px;
        border: 1px solid white;
        border-radius: 5px;
    }

    .bordery{
        border: 1px solid black;
    }

    </style>
    <section>
        <nav class="navbar navbar-light" style="background: #FFDD23">
            <a class="navbar-brand" href="{{route('home')}}">
                <span>Mercado<br></span>
                <span>Cerrado</span>
            </a>
            <div class="col-3">
                <div class="row form-inline">
                    <form class="form-row my-2 my-lg-2">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn bordery bordered my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                    <div>
                        <div class="btn-group bordered">
                            <button type="button" class="btn cambioColor dropdown-toggle" style="background: #FFDD23; font-size: 14px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categoria</button>
                            <div class="dropdown-menu" style="background:#696969;">
                                <a class="dropdown-item" href="#" style="font-size: 14px;">Action</a>
                                <a class="dropdown-item" href="#" style="font-size: 14px;">Another action</a>
                                <a class="dropdown-item" href="#" style="font-size: 14px;">Something else here</a>
                                <a class="dropdown-item" href="#" style="font-size: 14px;">Action</a>
                                <a class="dropdown-item" href="#" style="font-size: 14px;">Another action</a>
                                <a class="dropdown-item" href="#" style="font-size: 14px;">Something else here</a>
                            </div>
                        </div>
                        <a href="#" class="cambioColor bordered text-decoration-none mx-2" style="font-size: 14px;">Historial</a>
                        <a href="#" class="cambioColor bordered text-decoration-none mx-2" style="font-size: 14px;">Lorem.</a>
                        <a href="#" class="cambioColor bordered text-decoration-none mx-2" style="font-size: 14px;">Lorem.</a>
                    </div>
                </div>
            </div>
            <div>
                <a href="#" class="text-decoration-none text-dark">
                    <p><span class="h4"><i class="fas fa-home"></i></span> Compras sin salir de casa</p>
                </a>
                <div>
                    @guest
                    <a href="{{route('register')}}" class="cambioColor text-decoration-none mx-2" style="font-size: 14px;">Crear Cuenta</a>
                    <a href="{{route('login')}}" class="cambioColor text-decoration-none mx-2" style="font-size: 14px;">Ingresar</a>
                    @endguest
                    @if(Route::has('login'))
                    @auth
                    <div class="btn-group">
                        <button type="button" class="btn cambioColor dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false" style="background: #FFDD23; font-size: 14px;">User</button>
                        <div class="dropdown-menu dropdown-menu-lg-right">
                            <a href="#" class="dropdown-item">Compras</a>
                            <a href="{{route('sales')}}" class="dropdown-item">Ventas</a>
                            <a href="{{route('account.index')}}" class="dropdown-item">Mis Datos</a>
                            <a href="#" class="dropdown-item">Seguridad</a>
                            <a href="{{route('logout')}}" class="dropdown-item">Salir</a>
                        </div>
                    </div>
                    <a href="#" class="cambioColor text-decoration-none mx-2" style="font-size: 14px;">Mis compras</a>
                    <a href="#" class="cambioColor text-decoration-none mx-2" style="font-size: 14px;">Mis favoritos</a>
                    <a href="#" class="cambioColor text-decoration-none mx-2 h5"><i class="fa fa-bell"></i></a>
                    @endauth
                    @endif
                </div>
            </div>
            </div>
            </div>
        </nav>
    </section>
    @yield('content')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
