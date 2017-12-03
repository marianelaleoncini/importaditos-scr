@extends('layouts.app')

@section('content')

<div class="container categories">
    <div class="container-all">
      <div class="category all">
        <a href="#">
          <img class="img-responsive img-thumbnail photo" src="<?php echo asset("images/todo.jpg")?>" alt="Imagen del producto">
          <div class="description">
            <p>Todo</p>
          </div>
          <div class="background"></div>
        </a>
      </div>
    </div>
    <div class="container-partial">
      <div class="category partial">
        <a href="#">
          <img class="img-responsive img-thumbnail photo" src="<?php echo asset("images/bebas.jpg")?>" alt="Imagen del producto">
          <div class="description">
            <p>Bebas</p>
          </div>
          <div class="background"></div>
        </a>
      </div>
      <div class="category partial">
        <a href="#">
          <img class="img-responsive img-thumbnail photo" src="<?php echo asset("images/bebes.jpg")?>" alt="Imagen del producto">
          <div class="description">
            <p>Bebes</p>
          </div>
          <div class="background"></div>
        </a>
      </div>
      <div class="category partial">
        <a href="#">
          <img class="img-responsive img-thumbnail photo" src="<?php echo asset("images/ninias.jpg")?>" alt="Imagen del producto">
          <div class="description">
            <p>Niñas</p>
          </div>
          <div class="background"></div>
        </a>
      </div>
      <div class="category partial">
        <a href="#">
          <img class="img-responsive img-thumbnail photo" src="<?php echo asset("images/ninios.jpg")?>" alt="Imagen del producto">
          <div class="description">
            <p>Niños</p>
          </div>
          <div class="background"></div>
        </a>
      </div>
    </div>
</div>


@endsection