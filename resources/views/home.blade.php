@extends('layouts.app')

@section('content')

    <div class="container marketing">
        <div class="row featurette">
            <div class="col-md-5">
                <img class="featurette-image img-responsive center-block logo-marcas" src="images/marcas.jpg" 
                    alt="Logos de las marcas">
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading">Importaditos SCR</h2>
                <p class="lead">Te traemos las mejores marcas de niños directamente desde EEUU. Vos elegís todas
                las prendas que más te gusten y nosotros nos encargamos de hacértelas llegar a tu domicilio. Envíos gratuitos en toda la zona: Las Rosas, Las Parejas, Los Cardos, Rosario.</p>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Seguinos en <a href="https://www.facebook.com/Importaditos-SCR-
                    Las-Rosas-400412593476337/?fref=ts">Facebook</a></h2>
                <p class="lead">Enterate cuándo abren nuestros pedidos y participá de nuestros sorteos.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive center-block" src="images/fb.png" 
                    alt="Logo de Facebook">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-5">
                <img class="featurette-image img-responsive center-block" src="images/signup.png" 
                    alt="Imagen registro de usuario">
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading"><a href="">Registrate</a></h2>
                <p class="lead">Ahora podes hacer tus pedidos más fácil y rápido. Iniciá sesión con tu cuenta, 
                elegí todas las prendas que quieras y listo!</p>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row">
            <div class="col-lg-4">
                <img class="img-circle" src="images/pedidos.jpg" alt="Prendas de ropa">
                <h2>Pedidos</h2>
                <p>Periódicamente subimos nuestro catálogo para que puedas elegir y reservar tus prendas favoritas.</p>
                <p><a class="btn btn-default" href="#" role="button">Ver detalles &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <img class="img-circle" src="images/stock.jpg" alt="Prendas de ropa">
                <h2>Stock</h2>
                <p>¡No te quedes con las ganas! Mirá toda la ropa que tenemos para entrega inmediata y pedinos todo
                  lo que quieras.</p>
                <p><a class="btn btn-default" href="#" role="button">Ver detalles &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <img class="img-circle" src="images/consultas.jpg"  alt="Niño pensativo">
                <h2>Consultas</h2>
                <p>Cualquier duda que tengas no dudes en contactarte con nosotros.</p>
                <p><a class="btn btn-default" href="#" role="button">Ver detalles &raquo;</a></p>
            </div>
        </div>

        <hr class="featurette-divider">
    </div>
@endsection