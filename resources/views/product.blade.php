@extends('Layouts.template')
@section('title','Producto')
@section('background', '#EAECEE')
@section('content')
<section class="py-5">
    <div class="container">
        <div class="card">
            <div class="row">
                <div class="col-2 m-1">
                    <div class="card-img">
                        <img src="https://http2.mlstatic.com/xbox-one-s-de-1tb-1000-gb-sellada-garantia-de-1ano-D_NQ_NP_856790-MCO27468759952_052018-F.webp" alt="" style="max-width: 4cm; max-height: 4cm;">
                        <hr>
                        <img src="https://http2.mlstatic.com/xbox-one-s-de-1tb-1000-gb-sellada-garantia-de-1ano-D_NQ_NP_856790-MCO27468759952_052018-F.webp" alt="" style="max-width: 4cm; max-height: 4cm;">
                        <hr>
                        <img src="https://http2.mlstatic.com/xbox-one-s-de-1tb-1000-gb-sellada-garantia-de-1ano-D_NQ_NP_856790-MCO27468759952_052018-F.webp" alt="" style="max-width: 4cm; max-height: 4cm;">
                    </div>
                </div>
                <div class="mr-4">
                    <p></p>
                </div>
                <div class="col-6">
                    <img src="https://http2.mlstatic.com/xbox-one-s-de-1tb-1000-gb-sellada-garantia-de-1ano-D_NQ_NP_856790-MCO27468759952_052018-F.webp" alt="" class="card-img-top">
                    <hr>
                </div>
                <div class="col-3 m-4">
                    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                    <div class="">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <h2>$1999.000</h2>
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
                        <select name="" id="" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <p class="text-muted">(X unidades)</p>
                    </div>
                    <a href="{{route('buy')}}" class="btn btn-primary btn-block">Comprar</a>
                </div>
                <hr>
            </div>
            <div class="row m-3">
                <div class="col-8">
                    <h1 class="font-weight-bold mb-5">Descripción</h1>
                    <label>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, voluptatibus adipisci nobis, ex optio hic possimus doloribus voluptates, reiciendis beatae, provident necessitatibus commodi totam nam numquam! Asperiores vero, eum tempora libero odit, veritatis neque debitis, dolores voluptas delectus quia deserunt nemo illo necessitatibus sit reprehenderit alias maiores ducimus reiciendis eius. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, officia! Beatae accusamus dicta ipsa, cum velit impedit eaque eos sunt adipisci voluptatem at doloremque cumque provident aliquam nostrum ducimus in optio, architecto vitae amet! Facere minima impedit fuga, nihil quaerat quas omnis sit. Aperiam corrupti illum officiis, id, corporis rerum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse aspernatur earum inventore tenetur, porro perferendis placeat iure tempore pariatur possimus, quas fugiat dicta totam iste, consequuntur officiis! Expedita, totam. Vel ipsum officia amet commodi porro, eveniet minima possimus. Cum ea fugiat pariatur dolores animi. Voluptatibus distinctio, odio, eligendi temporibus earum eaque sequi aliquid et beatae officiis, sit dolorum cum repellat aspernatur? Similique nesciunt blanditiis porro, dicta explicabo aliquam aperiam earum numquam, quisquam reiciendis esse nulla voluptate dolor, expedita ab at quasi. Porro maiores quis laborum modi unde ullam molestias nesciunt, officiis, nemo magni iusto labore voluptatum perspiciatis quo, eum aperiam.
                    </label>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
